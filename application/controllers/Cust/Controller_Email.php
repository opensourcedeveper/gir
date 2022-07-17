<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Email extends CI_Controller {
   public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
    }
    public function index() {
        $this->load->view('contactus');
    }
    function send() {
		$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'globalinfiresearch@gmail.com',
				'smtp_pass' => '0ZpP8L2dz9qF',
				'mailtype' => 'text'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->to($this->input->post('email'));
		$this->email->from("globalinfiresearch@gmail.com","GIR RG Support");
		$this->email->subject($this->input->post('type'));
		$this->email->message($this->input->post('message'));
		
		if ($this->email->send()) {
			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
    }
}