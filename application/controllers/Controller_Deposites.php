<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_Deposites extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Bank Deposites';
		$this->load->model('model_stores');
		$this->load->model('Model_deposites');
		$this->load->model('Model_users');
	}

	/* 
	* It only redirects to the manage product page
	*/
	public function index()
	{
		if(!in_array('viewDeposite', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('deposites/index', $this->data);	
	}
		
	/*
	* It Fetches the products data from the product table 
	* this function is called from the datatable ajax function
	*/
	public function fetchDepositeData()
	{
		$result = array('data' => array());
		$data = $this->Model_deposites->fetchDepositeData();
		foreach ($data as $key => $value) {
			$store_data = $this->model_stores->getStoresData($value['store_id']);
			$user_data = $this->Model_users->getUserData($value['user_id']);
			$buttons = '';
			if(in_array('updateDeposite', $this->permission)) {
				$buttons .= '<a href="'.base_url('Controller_Deposites/update/'.$value['id']).'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if(in_array('deleteDeposite', $this->permission)) { 
				$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$img = '<img src="'.base_url($value['image']).'" alt="'.$value['image'].'" class="img-circle" width="50" height="50" />';
			$result['data'][$key] = array(				
				$value['id'],
				$img,
				$user_data['firstname'].' '.$user_data['lastname'],
				$value['deposite_amount'],
				$store_data['name'],
				date('d-m-Y', strtotime(date($value['created_at']))),
				$buttons
			);
		}
		echo json_encode($result);
	}

	/*
	* If the validation is not valid, then it redirects to the create page.
	* If the validation for each input field is valid then it inserts the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage product page
	*/
	public function create()
	{
		if(!in_array('createDeposite', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('store', 'Store', 'trim|required');
		$this->form_validation->set_rules('amount', 'Deposite Amount', 'trim|required|numeric|greater_than[0]');
		if ($this->form_validation->run() == TRUE) {
			$upload_image = $this->upload_image();
			if($upload_image == "<p>You did not select a file to upload.</p>" || $upload_image == "<p>The upload path does not appear to be valid.</p>"){
					$this->session->set_flashdata('error', 'The Image is required.!!');
					redirect('Controller_Deposites/create', 'refresh');
			}
			$data = array(
				'user_id' => $this->session->userdata('id'),
				'deposite_amount' => $this->input->post('amount'),
				'image' => $upload_image,
				'store_id' => $this->input->post('store')
			);
			$create = $this->Model_deposites->create($data);
			if($create == true) {
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_Deposites/create', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Deposites/create', 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();
			$this->render_template('deposites/create', $this->data);
		}	
	}
	/*
	* If the validation is not valid, then it redirects to the edit product page 
	* If the validation is successfully then it updates the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage product page
	*/
	public function update($deposite_id)
	{      
		if(!in_array('updateDeposite', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		if(!$deposite_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('store', 'Store', 'trim|required');
		$this->form_validation->set_rules('amount', 'Deposite Amount', 'trim|required|numeric|greater_than[0]');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'user_id' => $this->session->userdata('id'),
				'deposite_amount' => $this->input->post('amount'),
				'store_id' => $this->input->post('store')
			);
			if($_FILES['bankReceipt_image']['size'] > 0) {
				$upload_image = $this->upload_image();
				$upload_image = array('image' => $upload_image);
				$this->Model_deposites->update($upload_image, $deposite_id);
			}

			$update = $this->Model_deposites->update($data, $deposite_id);
			if($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_Deposites/', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Deposites/update/'.$deposite_id, 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();
			$deposite_data = $this->Model_deposites->fetchDepositeData($deposite_id);
			$this->data['deposite_data'] = $deposite_data;
			$this->render_template('deposites/edit', $this->data);
		}   
	}

   /*
   * It removes the data from the database
   * and it returns the response into the json format
   */
	public function remove()
	{
		if(!in_array('deleteDeposite', $this->permission)) {
			redirect('dashboard', 'refresh');
		}        
		$deposite_id = $this->input->post('deposite_id');
		$response = array();
		if($deposite_id) {
			$delete = $this->Model_deposites->remove($deposite_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed"; 
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the Deposite information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
		
	/*
	* This function is invoked from another function to upload the image into the assets folder
	* and returns the image path
	*/
	public function upload_image()
	{
		$config['upload_path'] = 'assets/images/bankReceipt_image';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('bankReceipt_image'))
		{
			$error = $this->upload->display_errors();
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['bankReceipt_image']['name']);
			$type = $type[count($type) - 1];
			
			$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
			return ($data == true) ? $path : false;            
		}
	}
}