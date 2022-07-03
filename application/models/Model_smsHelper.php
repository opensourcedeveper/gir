<?php 

class Model_smsHelper extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* send the sms */
        public function smsSend($mobile,$message)
        {
            
        }
        
        function checkSmsCount($message) {
            
            $length = strlen($message);            
            $cnt = ($length / 70) + 1;
            echo round($cnt);
        }

}