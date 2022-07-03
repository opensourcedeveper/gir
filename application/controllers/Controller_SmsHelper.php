<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_SmsHelper extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'SmsHelper';

//		$this->load->model('model_products');
//		$this->load->model('model_brands');
//		$this->load->model('model_category');
//		$this->load->model('model_stores');
//		$this->load->model('model_attributes');
//                $this->load->model('model_inventory');
                $this->load->model('model_smsHelper');
	}

        /* sms send  */
	public function smsSend()
        {
            $message = "Hello Mr. Ramesh Ghule ";
            $mobile = 9960242923;
            
            $smsCount = $this->checkSmsCount($message);
            print $smsCount;
            exit();

            // If Mobile No and Message are  Dynamic  so write   below the line.
            //$message=$this->input->post(‘Message’);
            // $mobile = $this->input->post(‘mobileno’);

//            $resp = $this->model_smsHelper->smsSend($mobile,$message);
            print_r($resp);
            exit();
        }
        function checkSmsCount($message) {
            
            $length = strlen($message);
            
            $cnt = ($length / 70) + 1;

            echo round($cnt);
        }
        
}