<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Controller_Reports extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->data['page_title'] = 'Reports';
		$this->load->model('model_products');
		$this->load->model('model_brands');
		$this->load->model('model_category');
		$this->load->model('model_stores');
		$this->load->model('model_attributes');
		$this->load->model('model_inventory');

		$this->load->model('model_reports');
	}

	/* 
    * It only redirects to the manage product page
    */
	public function index()
	{
		$this->render_template('reports/index', $this->data);
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
			if (in_array('updateReports', $this->permission)) {
				$buttons .= '<a href="' . base_url('Controller_Reports/update/' . $value['id']) . '" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>';
			}
			if (in_array('deleteReports', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-danger btn-sm" onclick="removeFunc(' . $value['id'] . ')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}
			$result['data'][$key] = array(
				$value['id'],
				$value['title'],
				$value['description'],
				$value['category'],
				$value['tableOfContent'],
				$value['dateOfPublished'],
				$value['pages'],
				$value['singleUserAmount'],
				$value['enterpriceEditionAmount'],
				$value['metaTitle'],
				$value['metaDescription'],
				$value['metaKeyword'],
				$value['created_at'],
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
		$this->form_validation->set_rules('reportTitle', 'Title', 'trim|required|is_unique[it_reports.title]');
		if ($this->form_validation->run() == TRUE) {
			$slug = url_title($this->input->post('reporturlKeyword'), 'dash', true);
			$data = array(
				'title' => $this->input->post('reportTitle'),
				'slug' => $slug,
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
				'created_by' => $this->session->userdata['id']
			);
			$create = $this->model_reports->create($data);
			if ($create == true) {
				$this->session->set_flashdata('success', 'Successfully created');
				redirect('Controller_Reports/', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Reports/create', 'refresh');
			}
		} else {
			$this->data['category'] = $this->model_category->getActiveCategroy();
			$this->render_template('reports/create', $this->data);
		}
	}
	public function importdata()
	{
		if (isset($_POST["submit"])) {
			$allowed = array('csv');
			$filename = $_FILES['file']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if (!in_array($ext, $allowed)) {
				$this->session->set_flashdata('error', 'Error occurred- Please Choose .csv File');
				redirect('Controller_Reports/create', 'refresh');
			}
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0; //
			while (($filesop = fgetcsv($handle, 1000, ",")) !== false) {
				$title = $filesop[0];
				$description = nl2br($filesop[1]); //also use htmlspecialchars($str);
				$category = $filesop[2];
				$tableOfContent = nl2br($filesop[3]);
				$dateOfPublished = date('Y-m-d', strtotime($filesop[4])); //$filesop[4];
				$pages = $filesop[5];
				$singleUserAmount = $filesop[6];
				$enterpriceEditionAmount = $filesop[7];
				$status = $filesop[8];
				$metaTitle = $filesop[9];
				$metaDescription = $filesop[10];
				$metaKeyword = $filesop[11];
				$urlKeyword = $filesop[12];
				if ($c <> 0) {					/* SKIP THE FIRST ROW */
					$category_data = $this->model_category->getCategoryByName($category);
					$reports_data = $this->model_reports->getReportsByTitle($title);
					$slug = url_title($urlKeyword, 'dash', true);
					$data = array(
						'title' => $title,
						'slug' => $slug,
						'category' => $category_data['id'],
						'description' => $description,
						'tableOfContent' => $tableOfContent,
						'dateOfPublished' => $dateOfPublished,
						'pages' => $pages,
						'singleUserAmount' => $singleUserAmount,
						'enterpriceEditionAmount' => $enterpriceEditionAmount,
						'status' => $status,
						'metaTitle' => $metaTitle,
						'metaDescription' => $metaDescription,
						'metaKeyword' => $metaKeyword,
						'urlKeyword' => $urlKeyword,
						'created_by' => $this->session->userdata['id']
					);
					if (isset($reports_data) && count($reports_data) > 0) {
						$update = $this->model_reports->update($data, $reports_data['id']);
					} else {
						$create = $this->model_reports->create($data);
					}
				}
				$c = $c + 1;
			}
			if ($create == true || $update == true) {
				$this->session->set_flashdata('success', 'sucessfully import data !');
				redirect('Controller_Reports/', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Reports/create', 'refresh');
			}
			exit();
		}
		$this->session->set_flashdata('error', 'Error occurred!!');
		redirect('Controller_Reports/create', 'refresh');
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
		if (!$this->upload->do_upload('product_image')) {
			$error = $this->upload->display_errors();
			return $error;
		} else {
			$data = array('upload_data' => $this->upload->data());
			$type = explode('.', $_FILES['product_image']['name']);
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
		if (!in_array('updateReports', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if (!$product_id) {
			redirect('dashboard', 'refresh');
		}

		$this->form_validation->set_rules('reportTitle', 'reportTitle', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$slug = url_title($this->input->post('reporturlKeyword'), 'dash', true);
			$data = array(
				'title' => $this->input->post('reportTitle'),
				'slug' => $slug,
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

			if ($this->input->post('que')) {
				$data1 = array(
					'report_id' => $product_id,
					'question' => $this->input->post('que'),
					'answer' => $this->input->post('ans')
				);
				$create = $this->model_reports->create_faqs($data1);
			}
			$cnt = $this->input->post('cnt');
			for ($i = 1; $i <= $cnt; $i = $i + 2) {
				$ans = $i + 1;
				$data1 = array(
					'report_id' => $product_id,
					'question' => $this->input->post('que' . $i),
					'answer' => $this->input->post('ans' . $ans)
				);
				$create = $this->model_reports->create_faqs($data1);
			}
			if ($update == true) {
				$this->session->set_flashdata('success', 'Successfully updated');
				redirect('Controller_Reports/', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Error occurred!!');
				redirect('Controller_Reports/update/' . $product_id, 'refresh');
			}
		} else {
			$this->data['category'] = $this->model_category->getActiveCategroy();
			$this->data['reports_data'] = $this->model_reports->getReportsData($product_id);
			$this->data['faqs_data'] = $this->model_reports->getFaqsByReportId($product_id);
			$this->render_template('reports/edit', $this->data);
		}
	}

	/*
    * It removes the data from the database
    * and it returns the response into the json format
    */
	public function removeFaqs()
	{
		$id = $this->input->post('id');
		$response = array();
		if ($id) {
			$delete = $this->model_reports->removeFaqs($id);
			if ($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";
			} else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the product information";
			}
		} else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}

	/*
    * It removes the data from the database
    * and it returns the response into the json format
    */
	public function remove()
	{
		if (!in_array('deleteReports', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$id = $this->input->post('id');
		$response = array();
		if ($id) {
			$data = array(
				'is_del' => '1',
				'deleted_by' => $this->session->userdata['id']
			);
			$delete = $this->model_reports->update($data, $id);
			if ($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";
			} else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the product information";
			}
		} else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}
		echo json_encode($response);
	}
}
