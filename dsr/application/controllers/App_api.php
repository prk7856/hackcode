<?php
/*******************************************************************************
 *****	home controller     		     ***************************************
 *****  developed by : kiran Gajbhiye    ***************************************
 *****  created on   : nov 2017          ***************************************
****************************************************************************/

	class App_api extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->model('app_model');
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
			if($_SERVER['REQUEST_METHOD']=='POST')
			{
				$json = file_get_contents('php://input');
				$data1 = json_decode($json,true);
				if(!empty($data1['username']) AND !empty($data1['passwd'])) // ON FORM SUBMIT
		  		{
					$data = ['username' => $data1['username'],
							 'passwd'   => $data1['passwd']
							];
				
					$data 	  = $this->security->xss_clean($data);
					$userinfo = $this->app_model->validate_login($data['username'],$data['passwd']);
				
					if($userinfo)
					{
						
						$getdata['status']=1;
						$getdata['profile']=['id'=>$userinfo->id,'emailId'=>$userinfo->emailId,'mobileNumber'=>$userinfo->mobileNumber];
				   		echo json_encode($getdata);
						exit;
					} 
					else {

						$error['status']=0;
						$error['data']="incorrect username";
						   echo json_encode($error);
						
						}
		  		} else {
					$error['status']=0;
						$error['data']="no data found";
				   		echo json_encode($error);
						exit;
					}
			}		//if condirtion close
		}
		public function addUser()
		{
			if($_SERVER['REQUEST_METHOD']=='POST')
			{
				$json = file_get_contents('php://input');
				$data1 = json_decode($json,true);
				$adddata = $data1['para'];
				
				if(!empty($data1['currentLat'])) // ON FORM SUBMIT
		  		{
					$data = ['shopname' => $adddata['shopname'],
							 'fullname'   => $adddata['fullname'],
							 'mobileNumber'   => $adddata['mobileNumber'],
							 'address'   => $adddata['address'],
							 'longitude' => $data1['currentLon'],
							 'latitude'   => $data1['currentLat'],			 
							 'createdOn' =>$this->cdate->gmtdatetime(),
							 'updatedOn' => $this->cdate->gmtdatetime()
							];
					$check = 	$this->app_model->add_userdata($data);
					if($check) {
						$error['status']=1;

						$error['data']="data found";
						   echo json_encode($error);
						exit;
					} else {
						$error['status']=0;
						$error['data']="no valid  data found";
				   		echo json_encode($error);
						exit;
					}
				//redirect('home/home');
				}
				else{
						$error['status']=0;
						$error['data']="no data found";
				   		echo json_encode($error);
						exit;
				}
			
			}

		}
		
		public function loginLocation()
		{
			if($_SERVER['REQUEST_METHOD']=='POST') //1 If 
			{
				$json = file_get_contents('php://input');
				$data1 = json_decode($json,true);
				if(!empty($data1['latitude'])) // ON FORM SUBMIT 2 if
		  		{
					$data = [
								'eid'     =>'6',
							  'longitude' => $data1['longitude'],
							 'latitude'   => $data1['latitude'],
							 'day_date'	  => $this->cdate->gmtdatetime(),
							 'updatedOn' => $this->cdate->gmtdatetime()
							];
		
					$check = $this->app_model->add_locationdata($data);
					if($check) {               // 3 if
						$error['status']='1';
						$error['data']="data found";
						   echo json_encode($error);
					
					} else {
						$error['status']='0';
						$error['data']="no valid  data found";
				   		echo json_encode($error);
						exit;
					}					//close 3 if
				}				// close 2 if
				else{
						$error['status']='0';
						$error['data']="no data found";
				   		echo json_encode($error);
						exit;
				}
			
			}						// close 1 if

		}
		/*
		public function addUserLocation()
		{
			
			if($_SERVER['REQUEST_METHOD']=='POST') //1 If 
			{
				$json = file_get_contents('php://input');
				$data1 = json_decode($json,true);
				if(!empty($data1['currentLat'])) // ON FORM SUBMIT 2 if
		  		{
					$data = [
								'eid'     =>'2',
							  'longitude' => $data1['currentLon'],
							 'latitude'   => $data1['currentLat'],
							 'updatedOn' => $this->cdate->gmtdatetime()
							];
		
					$check = '1';
					if($check) {               // 3 if
						$error['status']=1;

						$error['data']="data found";
						   echo json_encode($error);
					
					} else {
						$error['status']=0;
						$error['data']="no valid  data found";
				   		echo json_encode($error);
						exit;
					}					//close 3 if
				}				// close 2 if
				else{
						$error['status']=0;
						$error['data']="no data found";
				   		echo json_encode($error);
						exit;
				}
			
			}						// close 1 if

		}*/
		
    }