<?php 

class Model_emailHelper extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* send the Email */
        public function send($to, $subject, $body, $attachments=false , $ccArray=false) {
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
                        
			// Set to, from, message, etc.
//			$this->email->to($this->input->post('email'));
                        $this->email->to($to);
			$this->email->from("globalinfiresearch@gmail.com","GIR Support");
//			$this->email->bcc("prashantovhal20@gmail.com"); 
//			$this->email->subject($this->input->post('type'));
                        $this->email->subject($subject);
//			$this->email->message($this->input->post('message'));
                        $this->email->message($body);
			
			if ($this->email->send()) {
                            echo 'Your Email has successfully been sent.';
                        } else {
                            show_error($this->email->print_debugger());
                        }
    }
    
}