<?php 
class Controller_Customers extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Customers';
		$this->load->model('model_stores');
		$this->load->model('model_customers');
	}
	public function index()
	{
		if(!in_array('viewCustomer', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('customers/index', $this->data);
	}
		
	/*
	* It Fetches the products data from the product table 
	* this function is called from the datatable ajax function
	*/
	public function fetchCustomersData()
	{
		$result = array('data' => array());
		$data = $this->model_customers->getCustomersData();
		foreach ($data as $key => $value) {
			$store_data = $this->model_stores->getStoresData($value['store_id']);
			$buttons = '';
			if(in_array('updateCustomer', $this->permission)) {
						$buttons .= '<a href="'.base_url('Controller_Customers/update/'.$value['id']).'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if(in_array('deleteCustomer', $this->permission)) { 
						$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$result['data'][$key] = array(
				$value['id'],
				$value['name'], 
				$value['phone'],
				$value['address'],
				$store_data['name'],
				date('d-m-Y', strtotime(date($value['created_at']))),
				$buttons
			);
		}
		echo json_encode($result);
	}

	public function create()
	{
		if(!in_array('createCustomer', $this->permission)) {
				redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('store', 'Store', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[10]|is_unique[it_customers.phone]');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'store_id' => $this->input->post('store'),
				'name' => $this->input->post('name'),
				'phone' => $this->input->post('phone'),
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'),
				'adharno' => $this->input->post('adharno'),
			);
			$create = $this->model_customers->create($data);
			if($create == true) {
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_Customers/', 'refresh');
			}
			else {
					$this->session->set_flashdata('error', 'Error occurred!!');
					redirect('Controller_Customers/create', 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();
			$this->render_template('customers/create', $this->data);
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
		if(!in_array('createCustomer', $this->permission)) {
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
		if(!in_array('deleteCustomer', $this->permission)) {
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