<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_Index extends Cust_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = 'Home';
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
		$this->data['blogs_data'] = $this->model_blogs->getLatestBlogsData(1);
		$this->data['pressrelease_data'] = $this->model_pressrelease->getLatestPressReleaseData(3);
		$this->render_template('cust/index', $this->data);
	}
}