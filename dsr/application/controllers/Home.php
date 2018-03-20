<?php
/*******************************************************************************
 *****	home controller     		     ***************************************
 *****  developed by : kiran Gajbhiye    ***************************************
 *****  created on   : nov 2017          ***************************************
********************************************************************************

********************************************************************************
		* 1] index				------>	[CALL LOGIN PAGE]
		* 2] loginUser			------> [VALIDATE LOGIN DATA]
		* 1] home				------>	[OPEN DASHBOARD AFTER LOGIN]
		* 1] addUser			------>	[ADD NEW EMPLOYEE]
		* 1] profile			------>	[CALL LOGIN PAGE]
		* 1] INDEX				------>	[CALL LOGIN PAGE]
		* 1] INDEX				------>	[CALL LOGIN PAGE]


*/
	class Home extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->model('m_main');
			$this->load->library('mobilemessage');
		}
		/**************** Login **********************************/
		public function index() 
		{
			$this->load->view('utility/login');	
		}
		public function loginUser()
		{
			$post = $this->input->post();
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
						return redirect('home/home'); 
					} 
					else
					{
						$this->session->set_flashdata('error','Invalid username/password.');
						return redirect('home/index');
					
					}
		  		} else {
					$this->load->view('utility/login');
					
				}
		}
		
		/************************* Dashboard *******************************/
		public function home()
		{
			$data['main_content']='utility/dashboard';
			$data['user_data'] = $this->m_main->get_employee_data($this->session->userdata('uid'));
			$data1 = ['updatedOn' =>  $this->cdate->gmtdatetime(),
						'id'       =>   $this->session->userdata('uid')];
	 		$check = $this->m_main->update_login_time($data1);
	 
			$this->load->view('utility/_includes/template',$data);
		}
		/******************** Add new users *********************/
		public function addUser()
		{
			$post = $this->input->post();
			if(!empty($post))
		  	{
				$data = ['fullname' => $this->input->post('fullname'),
						 'mobileNumber' => $this->input->post('mobileNumber'),
						 'emailId'   => $this->input->post('emailId'),
						 'post' => $this->input->post('post'),
						 'userType' => $this->input->post('userType'),
						 'updatedOn' => $this->cdate->gmtdatetime()
						];
				$chick = $this->m_main->add_userdata($data);
				if($check) {
					$this->session->set_employeedata('eid',$check->id);
					$this->session->set_employeedata('fullname',$check->fullname);
				} else {
					$error[] = 'Sorry something went to wrong. Try again.';
					$this->session->set_flashdata('error', $error);
				}
				redirect('home/home');
			}
			else{
				redirect('home/addUser');
				
			}
		}
		public function profile($id)
		{
			$data['user_data'] = $this->m_main->get_employee_data($this->session->userdata('uid'));
			$data['empdata'] = $this ->m_main->get_employee_data($id);
			//$this->session->set_emppdata('eid',$empdata->id);

			$data['type'] = 'TRUE';
			$data['main_content']='utility/profile';
			$this->load->view('utility/_includes/template1',$data);
		}
		public function employee()
		{
			$data['user_data'] = $this->m_main->get_employee_data($this->session->userdata('uid'));
			$data['employee_list'] = $this->m_main->get_list_employee();
			$data['main_content']='utility/employee';
			$this->load->view('utility/_includes/template',$data);
		}
		public function location()
		{
			$data['user_data'] = $this->m_main->get_employee_data($this->session->userdata('uid'));
			$data['customerinfo'] = $this->m_main->get_customer_data($this->session->emppdata('eid'));
			$data['main_content']='utility/locationtrace';
			$this->load->view('utility/_includes/template1',$data);
		}
		public function allcustomer()
		{
			$data['user_data'] = $this->m_main->get_employee_data($this->session->userdata('uid'));
			$data['customerinfo'] = $this->m_main->get_customer_data();
			//print_r($customerinfo);
			//echo $this->db->last_query();
			$data['main_content']='utility/customer';
				
			$this->load->view('utility/_includes/template',$data);
		}
		/********************* logout and error show **********************************/
		public function logout() 
		{
			$removeallsess = $this->session->all_userdata();
	    	$this->session->unset_userdata($removeallsess);
	    	$this->session->sess_destroy();
	    	return redirect('home/index');
		}
		public function error() 
		{
			$data['main_content'] = 'home/error';
			$this->load->view('home/_includes/template', $data);
		}
	}
?>