<?php
    /************************************************* 
     * 
     * *************************************************
    */
	class Appapi extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->model('m_main');
			$this->load->library('mobilemessage');
        }


        public function loginUser()
		{
            $json= file_get_contents('php://input');
			$post = json_decode($json);
			if(!empty($post)) // ON FORM SUBMIT
		  	{
				$data = ['username' => $this->input->post('username'),
						 'passwd'   => $this->input->post('passwd')
						];
				
				$data 	  = $this->security->xss_clean($data);
				$userinfo = $this->m_main->validate_login($data['username'],$data['passwd']);
				
				if($userinfo)
				{
				   	$this->session->set_userdata('uid',$userinfo->id);
					$this->session->set_userdata('fullname',$userinfo->fullname);
                    
                    echo "100"; 
                    exit;
					
				} 
				else {
                    echo "101";
                    exit;
				}
		  	} else {
				echo "101";
                    exit;
                		  	}
		}

    }