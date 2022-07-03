<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_Inventory extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Inventory';
		$this->load->model('model_products');
		$this->load->model('model_brands');
		$this->load->model('model_category');
		$this->load->model('model_stores');
		$this->load->model('model_attributes');
		$this->load->model('model_inventory');
	}

	/* 
	* It only redirects to the manage product page
	*/
	public function index()
	{
		if(!in_array('viewInventory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('inventory/index', $this->data);	
	}

	/*
	* It Fetches the products data from the product table 
	* this function is called from the datatable ajax function
	*/
	public function fetchInventoryData()
	{
		$result = array('data' => array());
		$data = $this->model_inventory->getInventoryData();
		foreach ($data as $key => $value) {
			$store_data = $this->model_stores->getStoresData($value['store_id']);
			$product_data = $this->model_products->getProductData($value['products_id']);
			$buttons = '';
			if(in_array('updateInventory', $this->permission)) {
				$buttons .= '<a href="'.base_url('Controller_Inventory/update/'.$value['id']).'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if(in_array('deleteInventory', $this->permission)) { 
				$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$result['data'][$key] = array(
				$value['id'],
				$product_data['name'],
				$value['qty'],
				$value['purchase_price'],                            
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
		if(!in_array('createInventory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('product_id', 'Product name', 'trim|required');
		$this->form_validation->set_rules('qty', 'Qty', 'trim|required|numeric|greater_than[0]|regex_match[/^[0-9,]+$/]');
		$this->form_validation->set_rules('price', 'Purchase Price', 'trim|required|numeric|greater_than[0]');  //|regex_match[/^[0-9,]+$/]
		$this->form_validation->set_rules('store', 'Store', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$product_id = $this->input->post('product_id');
			$data = array(
				'user_id' => $this->session->userdata('id'),
				'products_id' => $product_id,
				'purchase_price' => $this->input->post('price'),
				'qty' => $this->input->post('qty'),
				'stock_type' => 'IN',
				'store_id' => $this->input->post('store')
			);
			$create = $this->model_inventory->create($data);
			if($create == true) {
				$product_obj = $this->model_products->getProductData($product_id);
				$data1 = array(
					'qty' => $this->input->post('qty') + $product_obj['qty']
				);
				$create1 = $this->model_products->update($data1, $product_obj['id']);
				if(!$create1 == true) {
					$this->session->set_flashdata('error', 'Error occurred Qty Not Entered in Products Table..!!');
					redirect('Controller_Inventory/create', 'refresh');
				}
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_Inventory/create', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Inventory/create', 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();            
			$this->data['products'] = $this->model_products->getProductData();
			$this->render_template('inventory/create', $this->data);
		}	
	}

	/*
	* If the validation is not valid, then it redirects to the edit product page 
	* If the validation is successfully then it updates the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage product page
	*/
	public function update($inventory_id)
	{
		if(!in_array('updateInventory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		if(!$inventory_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('price', 'Purchase Price', 'trim|required|numeric|greater_than[0]');//|regex_match[/^[0-9,]+$/]
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'user_id' => $this->session->userdata('id'),
				'purchase_price' => $this->input->post('price'),
			);
			$update = $this->model_inventory->update($data, $inventory_id);
			if($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_Inventory/', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Inventory/update/'.$inventory_id, 'refresh');
			}
		}
		else {
			$this->data['stores'] = $this->model_stores->getActiveStore();            
			$this->data['products'] = $this->model_products->getProductData();          
			$inventory_data = $this->model_inventory->getInventoryData($inventory_id);
			$this->data['inventory_data'] = $inventory_data;
			$this->render_template('inventory/edit', $this->data); 
		}   
	}
   /*
   * It removes the data from the database
   * and it returns the response into the json format
   */
	public function remove()
	{
		if(!in_array('deleteInventory', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$inventory_id = $this->input->post('inventory_id');
		$response = array();
		if($inventory_id) {
			$inventory_obj = $this->model_inventory->getInventoryData($inventory_id);
			$product_obj = $this->model_products->getProductData($inventory_obj['products_id']);
			$remaining_stock =$product_obj['qty'] - $inventory_obj['qty'];
			if($remaining_stock >= 0){
				$delete = $this->model_inventory->remove($inventory_id);
				if($delete == true) {
					$data1 = array(
						'qty' => $remaining_stock
					);
					$this->model_products->update($data1, $product_obj['id']);               
					$response['success'] = true;
					$response['messages'] = "Successfully removed"; 
				}
				else {
					$response['success'] = false;
					$response['messages'] = "Error in the database while removing the Inventory information";
				}
			}else{
				$response['success'] = false;
				$response['messages'] = "Error - Inventory Qty is Greater than Product Qty so Inventory Will Not Delete..";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
}