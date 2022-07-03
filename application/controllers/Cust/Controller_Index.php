<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Index extends Cust_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Home';
		$this->load->model('model_products');
		$this->load->model('model_brands');
		$this->load->model('model_category');
		$this->load->model('model_stores');
		$this->load->model('model_attributes');
		$this->load->model('model_inventory');
		$this->load->model('model_reports');
		$this->load->model('model_blogs');
		$this->load->model('model_pressrelease');
	}

	/* 
	* It only redirects to the manage product page
	*/
	public function index()
	{
		$this->data['reports_data'] = $this->model_reports->getReportsData();
		$this->data['blogs_data'] = $this->model_blogs->getBlogsData();
		$this->data['pressrelease_data'] = $this->model_pressrelease->getPressReleaseData();
		$this->render_template('cust/index', $this->data);
	}

	/*
	* It Fetches the products data from the product table 
	* this function is called from the datatable ajax function
	*/
	public function fetchReportsData()
	{
		$result = array('data' => array());
		$data = $this->model_reports->getReportsData();
		foreach ($data as $key => $value) {
			$buttons = '';
			if(in_array('updateReports', $this->permission)) {
				$buttons .= '<a href="'.base_url('Controller_Reports/update/'.$value['id']).'" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if(in_array('deleteReports', $this->permission)) { 
				$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$result['data'][$key] = array(
				 $value['id'],
				$value['title'],
				$buttons
			);
		} // /foreach
		echo json_encode($result);
	}	
	public function categoriesList()
	{
		$this->data['page_title'] = 'Category';
		$this->data['category'] = $this->model_category->getCategoryData();
		$this->render_template('cust/categories', $this->data);
	}
	public function categoriesDetails($id)
	{
		$this->data['page_title'] = 'Category Details';
		$this->data['category'] = $this->model_category->getCategoryData($id);
		$this->render_template('cust/category-details', $this->data);
	}
	public function contactus()
	{
		$this->data['page_title'] = 'Contact-us';
		$this->render_template('cust/contact-us', $this->data);
	}
	public function aboutus()
	{
		$this->data['page_title'] = 'About-us';
		$this->render_template('cust/aboutus', $this->data);
	}
	public function ourSolutions()
	{
		$this->data['page_title'] = 'Our-Solutions';
		$this->render_template('cust/our-solutions', $this->data);
	}
	public function privacyPolicy()
	{
		$this->data['page_title'] = 'Privacy Policy';
		$this->render_template('cust/privacy-policy.html', $this->data);
	}
	public function terms()
	{
		$this->data['page_title'] = 'Terms';
		$this->render_template('cust/terms.html', $this->data);
	}
	public function returnPolicy()
	{
		$this->data['page_title'] = 'Return Policy';
		$this->render_template('cust/return-policy.html', $this->data);
	}
	public function disclaimer()
	{
		$this->data['page_title'] = 'Disclaimer';
		$this->render_template('cust/disclaimer.html', $this->data);
	}
	public function faqs()
	{
		$this->data['page_title'] = 'FAQS';
		$this->render_template('cust/faqs.html', $this->data);
	}
	public function thankyou()
	{
		$this->data['page_title'] = 'FAQS';
		$this->render_template('cust/thank-you', $this->data);
	}
	public function search()
	{
		$search_keyword = $this->input->post('search');
		$this->data['page_title'] = 'search- '.$search_keyword;
		$this->data['reports_data'] = $this->model_reports->getReportsByKeyword($search_keyword);
		$this->data['blogs_data'] = $this->model_blogs->getBlogsByKeyword($search_keyword);
		$this->data['pressrelease_data'] = $this->model_pressrelease->getPressReleaseByKeyword($search_keyword);
		$this->render_template('cust/search', $this->data);
	}

	/*
	* If the validation is not valid, then it redirects to the create page.
	* If the validation for each input field is valid then it inserts the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage product page
	*/
	public function create()
	{
		$this->form_validation->set_rules('reportTitle', 'reportTitle', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'title' => $this->input->post('reportTitle'),
				'category' => $this->input->post('catSelect'),
				'description' => $this->input->post('reportDescription'),
				'tableOfContent' => $this->input->post('tableOfContent'),
				'dateOfPublished' => $this->input->post('dateOfPublished'),
				'pages' => $this->input->post('reportPages'),
				'singleUserAmount' => $this->input->post('singleUserAmount'),
				'enterpriceEditionAmount' => $this->input->post('enterpriceEditionAmount'),
				'status' => $this->input->post('reportStatus'),
				'metaTitle' => $this->input->post('reportmetaTitle'),
				'metaDescription' => $this->input->post('reportmetaDescription'),
				'metaKeyword' => $this->input->post('reportmetaKeyword'),
				'urlKeyword' => $this->input->post('reporturlKeyword'),
			);
			$create = $this->model_reports->create($data);
			if($create == true) {
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_Reports/', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Reports/create', 'refresh');
			}
		}
		else {
			$this->data['category'] = $this->model_category->getActiveCategroy();        	
			$this->render_template('reports/create', $this->data);
		}	
	}

	/*
	* This function is invoked from another function to upload the image into the assets folder
	* and returns the image path
	*/
	public function upload_image()
	{
		$config['upload_path'] = 'assets/images/product_image';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('product_image'))
		{
			$error = $this->upload->display_errors();
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['product_image']['name']);
			$type = $type[count($type) - 1];
			
			$path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
			return ($data == true) ? $path : false;            
		}
	}

	/*
	* If the validation is not valid, then it redirects to the edit product page 
	* If the validation is successfully then it updates the data into the database 
	* and it stores the operation message into the session flashdata and display on the manage product page
	*/
	public function update($product_id)
	{
		if(!in_array('updateReports', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if(!$product_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('reportTitle', 'reportTitle', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'title' => $this->input->post('reportTitle'),
				'category' => $this->input->post('catSelect'),
				'description' => $this->input->post('reportDescription'),
				'tableOfContent' => $this->input->post('tableOfContent'),
				'dateOfPublished' => $this->input->post('dateOfPublished'),
				'pages' => $this->input->post('reportPages'),
				'singleUserAmount' => $this->input->post('singleUserAmount'),
				'enterpriceEditionAmount' => $this->input->post('enterpriceEditionAmount'),
				'status' => $this->input->post('reportStatus'),
				'metaTitle' => $this->input->post('reportmetaTitle'),
				'metaDescription' => $this->input->post('reportmetaDescription'),
				'metaKeyword' => $this->input->post('reportmetaKeyword'),
				'urlKeyword' => $this->input->post('reporturlKeyword'),
			);
				
			$update = $this->model_reports->update($data, $product_id);
			if($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_Reports/', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Reports/update/'.$product_id, 'refresh');
			}
		}
		else {
			$this->data['category'] = $this->model_category->getActiveCategroy();           
			$this->data['reports_data'] = $this->model_reports->getReportsData($product_id);;
			$this->render_template('reports/edit', $this->data); 
		}   
	}

	/*
	* It removes the data from the database
	* and it returns the response into the json format
	*/
	public function remove()
	{
		if(!in_array('deleteProduct', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$product_id = $this->input->post('product_id');
		$response = array();
		if($product_id) {
			$delete = $this->model_products->remove($product_id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed"; 
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the product information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
}