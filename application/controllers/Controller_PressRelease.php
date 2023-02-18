<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Controller_PressRelease extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'PressRelease';
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
		$this->render_template('pressrelease/index', $this->data);
	}

	/*
    * It Fetches the products data from the product table 
    * this function is called from the datatable ajax function
    */
	public function fetchPressReleaseData()
	{
		$result = array('data' => array());
		$data = $this->model_pressrelease->getPressReleaseData();
		foreach ($data as $key => $value) {
			$buttons = '';
			if (in_array('updatePressRelease', $this->permission)) {
				$buttons .= '<a href="' . base_url('Controller_PressRelease/update/' . $value['id']) . '" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if (in_array('deletePressRelease', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$img = '<img src="' . base_url($value['image']) . '" alt="' . $value['id'] . '" class="img-circle" width="50" height="50" />';
			$result['data'][$key] = array(
				$value['id'],
				$img,
				$value['title'],
				$buttons
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
		$this->form_validation->set_rules('pressreleaseTitle', 'pressreleaseTitle', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$upload_image = $this->upload_image();
			$slug = url_title($this->input->post('urlKeyword'), 'dash', true);
			$data = array(
				'title' => $this->input->post('pressreleaseTitle'),
				'slug'  => $slug,
				'image' => $upload_image,
				'description' => $this->input->post('pressreleaseDescription'),
				'metaTitle' => $this->input->post('metaTitle'),
				'metaDescription' => $this->input->post('metaDescription'),
				'metaKeyword' => $this->input->post('metaKeyword'),
				'urlKeyword' => $this->input->post('urlKeyword'),
				'created_by' => $this->session->userdata['id']
			);
			$create = $this->model_pressrelease->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_PressRelease/', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_PressRelease/create', 'refresh');
			}
		} else {
			$this->render_template('pressrelease/create', $this->data);
		}
	}

	/*
    * This function is invoked from another function to upload the image into the assets folder
    * and returns the image path
    */
	public function upload_image()
	{
		$config['upload_path'] = 'assets/images/pressreleaseImage';
		$config['file_name'] =  uniqid();
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('pressreleaseImage')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['pressreleaseImage']['name']);
			$type = $type[count($type) - 1];

			$path = $config['upload_path'] . '/' . $config['file_name'] . '.' . $type;
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
		if (!in_array('updatePressRelease', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		if (!$product_id) {
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('pressreleaseTitle', 'pressreleaseTitle', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$slug = url_title($this->input->post('urlKeyword'), 'dash', true);
			$data = array(
				'title' => $this->input->post('pressreleaseTitle'),
				'slug'  => $slug,
				'description' => $this->input->post('pressreleaseDescription'),
				'metaTitle' => $this->input->post('metaTitle'),
				'metaDescription' => $this->input->post('metaDescription'),
				'metaKeyword' => $this->input->post('metaKeyword'),
				'urlKeyword' => $this->input->post('urlKeyword'),
			);
			if ($_FILES['pressreleaseImage']['size'] > 0) {
				$upload_image = $this->upload_image();
				$upload_image = array('image' => $upload_image);
				$this->model_pressrelease->update($upload_image, $product_id);
			}

			$update = $this->model_pressrelease->update($data, $product_id);
			if ($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_PressRelease/', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_PressRelease/update/' . $product_id, 'refresh');
			}
		} else {
			$this->data['pressrelease_data'] = $this->model_pressrelease->getPressReleaseData($product_id);;
			$this->render_template('pressrelease/edit', $this->data);
		}
	}

	/*
    * It removes the data from the database
    * and it returns the response into the json format
    */
	public function remove()
	{
		if (!in_array('deletePressRelease', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$id = $this->input->post('id');
		$response = array();
		if ($id) {
			$data = array(
				'is_del' => '1',
				'deleted_by' => $this->session->userdata['id']
			);
			$delete = $this->model_pressrelease->update($data, $id);
			if ($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";
			} else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the PressRelease information";
			}
		} else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
}