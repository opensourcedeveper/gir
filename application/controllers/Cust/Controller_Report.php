<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_Report extends Cust_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Reports';
		$this->load->model('model_products');
		$this->load->model('model_brands');
		$this->load->model('model_category');
		$this->load->model('model_stores');
		$this->load->model('model_attributes');
		$this->load->model('model_inventory');
		$this->load->model('model_reports');
		$this->load->model('model_emailHelper');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}

	/* 
	* It only redirects to the manage product page
	*/
	public function index()
	{
		$this->data['page_title'] = 'Select Industry';
		$this->data['reports_data'] = $this->model_reports->getReportsData();
		$this->render_template('cust/report-listing', $this->data);
	}

	public function ReportsByCategory($category_id = false)
	{
		$this->data['page_title'] = 'Select Industry';
		$this->data['reports_data'] = $this->model_reports->getReportsByCategory($category_id);
		$this->render_template('cust/report-listing', $this->data);
	}
	public function details($report_id = false, $slug = false)
	{
		$this->data['reports_data'] = $this->model_reports->getReportsData($report_id);
		$this->data['faqs_data'] = $this->model_reports->getFaqsByReportId($report_id);
		$this->data['page_title'] = '';
		$this->data['meta_title'] = $this->data['reports_data']['metaTitle'];
		$this->render_template('cust/report', $this->data);
	}
	public function detailsBySlug($slug)
	{
		$this->data['reports_data'] = $this->model_reports->getReportsBySlug($slug);
		$this->data['faqs_data'] = $this->model_reports->getFaqsByReportId($this->data['reports_data']['id']);
		$this->data['page_title'] = '';
		$this->data['meta_title'] = $this->data['reports_data']['metaTitle'];
		$this->render_template('cust/report', $this->data);
	}
		
	public function buynow($report_id = false)
	{
		$this->render_template('cust/buynow', $this->data);
	}

	public function sample_request($report_id = false)
	{
		if(!$report_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('full_name', 'full_name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'reports_id' => $this->input->post('reports_id'),
				'type' => $this->input->post('type'),
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'purchasetime' => $this->input->post('purchasetime'),
				'message' => $this->input->post('message'),
			);
			$insert = $this->model_reports->createFormRequest($data);
			if($insert == true) {
				$this->session->set_flashdata('success', 'Information Submitted Successfully');
				redirect('thank-you', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Cust/Controller_Report/sample_request/'.$this->input->post('reports_id'), 'refresh');
			}
		}
		else {
			$this->data['reports_data'] = $this->model_reports->getReportsData($report_id);
		
			$this->render_template('cust/sample-request', $this->data);
		}
	}

	public function custom_request($report_id = false)
	{
		if(!$report_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('full_name', 'full_name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'reports_id' => $this->input->post('reports_id'),
				'type' => $this->input->post('type'),
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'message' => $this->input->post('message'),
			);
			$insert = $this->model_reports->createFormRequest($data);
			if($insert == true) {
				$this->session->set_flashdata('success', 'Information Submitted Successfully');
				redirect('thank-you', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Cust/Controller_Report/custom_request/'.$this->input->post('reports_id'), 'refresh');
			}
		}
		else {
			$this->data['reports_data'] = $this->model_reports->getReportsData($report_id);            
			$this->render_template('cust/custom-request', $this->data);
		}
	}
	public function contactus_request()
	{
		$this->form_validation->set_rules('full_name', 'full_name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'type' => $this->input->post('type'),
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'message' => $this->input->post('message'),
			);
			$insert = $this->model_reports->createFormRequest($data);
			if($insert == true) {
				$this->session->set_flashdata('success', 'Information Submitted Successfully');
				redirect('thank-you', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Cust/Controller_Report/contactus_request/', 'refresh');
			}
		}
		else {
			$this->render_template('cust/contact-us', $this->data);
		}
	}
	public function enquiryform_request($report_id = false)
	{
		$this->form_validation->set_rules('full_name', 'full_name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		
		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'reports_id' => $this->input->post('reports_id'),
				'type' => $this->input->post('type'),
				'name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'company' => $this->input->post('company'),
				'message' => $this->input->post('message'),
			);
			$insert = $this->model_reports->createFormRequest($data);
			if($insert == true) {
				$this->session->set_flashdata('success', 'Information Submitted Successfully');
				redirect('thank-you', 'refresh');
			}
			else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('reports/enquiry/'.$this->input->post('reports_id'), 'refresh');
			}
		}
		else {
			$this->data['reports_data'] = $this->model_reports->getReportsData($report_id);
			$this->render_template('cust/enquiry-form', $this->data);
		}
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
			);
		} // /foreach
		echo json_encode($result);
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
				'enterpriceEditionAmount' => $this->input->post('enterpriceEditionAmount'),				//        		'category_id' => json_encode($this->input->post('category')),
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
}