<?php 
class Controller_Customers_Payments extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Customers';
		$this->load->model('model_stores');
		$this->load->model('model_customers');
		$this->load->model('model_customers_payments');
	}
	public function index()
	{
		if(!in_array('viewCustomerPayment', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('customers_payments/index', $this->data);
	}
		
	/*
	* It Fetches the products data from the product table 
	* this function is called from the datatable ajax function
	*/
	public function fetchCustomersPaymentsData()
	{
		$result = array('data' => array());                
		$post_data = trim($this->input->post('customer_name'));
		$customer_data = $this->model_customers->getCustomersBydata($post_data);
		$data = $this->model_customers_payments->getCustomersPayments_ByCustID($customer_data['id']);
		$IN_Amt_tot = 0;
		$OUT_Amt_tot = 0;
		$index =  0;
		foreach ($data as $key => $value) {
			$customer_data = $this->model_customers->getCustomersData($value['customer_id']);
			$buttons = '';
			if(in_array('updateCustomerPayment', $this->permission)) {
						$buttons .= '<a href="'.base_url('Controller_Customers_payments/update/'.$value['id']).'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if(in_array('deleteCustomerPayment', $this->permission)) { 
						$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$IN_Amt = 0;
			$OUT_Amt = 0;
			if($value['paid_status'] == 'IN'){
				$IN_Amt_tot += $IN_Amt = $value['amount'];
			}else{
				$OUT_Amt_tot += $OUT_Amt = $value['amount'];
			}
			
			$index = $key;
			$result['data'][$key] = array(
				$value['id'],
				$customer_data['name'],
				$customer_data['phone'],
				$IN_Amt, //$value['amount'],
				$OUT_Amt, //$value['paid_status'],
				date('d-m-Y', strtotime(date($value['created_at']))),
				$buttons
			);
		}
		$balance = $OUT_Amt_tot - $IN_Amt_tot;
		$result['data'][$index+1] = array(
			'',
			'',
			'Balance: <span class="label label-warning">'.$balance.'</span>' ,                                
			'Total In: '.$IN_Amt_tot, //$value['amount'],
			'Total Out: '.$OUT_Amt_tot, //$value['paid_status'],
			'',
			''
		);
		echo json_encode($result);
	}
	public function create()
	{
		if(!in_array('createCustomerPayment', $this->permission)) {
				redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('store', 'Store', 'required');
		$this->form_validation->set_rules('customer', 'Select Customer', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
					'store_id' => $this->input->post('store'),
					'customer_id' => $this->input->post('customer'),
					'amount' => $this->input->post('amount'),
					'Description' => 'PAID: '.$this->input->post('description'),
					'paid_status' => 'IN',
					'user_id' => $this->session->userdata('id')
			);

			$create = $this->model_customers_payments->create($data);
			if($create == true) {
					$this->session->set_flashdata('success', 'Successfully created');
					redirect('Controller_Customers_Payments/', 'refresh');
			}
			else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('Controller_Customers_Payments/create', 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();
			$this->data['customers'] = $this->model_customers->getCustomersData();
			$this->render_template('customers_payments/create', $this->data);
		}
	}

	public function getCustomerValueById()
	{
		$customer_id = $this->input->post('customer_id');
		if($customer_id) {
			$customer_data = $this->model_customers->getCustomersData($customer_id);
			echo json_encode($customer_data);
		}
	}
		
	/*
	* If the validation is not valid, then it redirects to the edit orders page 
	* If the validation is successfully then it updates the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage group page
	*/
	public function update($id)
	{
		if(!in_array('createCustomerPayment', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		if(!$id) {
			redirect('dashboard', 'refresh');
		}
		$this->data['page_title'] = 'Update Customer';
		$this->form_validation->set_rules('store', 'Store', 'required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'store_id' => $this->input->post('store'),
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'),
				'adharno' => $this->input->post('adharno'),
			);
			$update = $this->model_customers->update($id, $data);
			if($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_Customers/update/'.$id, 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Customers/update/'.$id, 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();
			$this->data['customers'] = $this->model_customers->getCustomersData($id);
			$this->render_template('customers/edit', $this->data);
		}
	}
	public function remove()
	{
		if(!in_array('deleteCustomerPayment', $this->permission)) {
			redirect('dashboard', 'refresh');
		}        
		$Customer_id = $this->input->post('Customer_id');
		$response = array();
		if($Customer_id) {
			$delete = $this->model_customers->remove($Customer_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed"; 
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the Customer information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
}