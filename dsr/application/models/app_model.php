<?php 
	class App_model extends CI_Model
	{
		/********************* login validation ************************/
		public function validate_login($username,$passwd) 
		{
			$checkusername = $this->db->where('username',$username)
									  ->where('passwd',$passwd)
									  ->get('users');

			if($checkusername->num_rows())
			{
				$getuser = $checkusername->row();
				if($getuser->userType=='employee')
					return $getuser;
				else {
						return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		/*public function add_activity($data)
		{
			$data['activitylist']= $data['activitylist[]'];
			print_r($data['activitylist']);
			$update = $this->db->where('eid',$data['eid'])
								->update('employee_timeline',$data);
			return TRUE;	
		}*/
		public function add_userdata($data)
		{
			$insert = $this->db->insert('customers',$data);
			return TRUE;	
		}
		public function add_locationdata($data)
		{
			$insert = $this->db->insert('employee_timeline',$data);
			return TRUE;	
		}
		public function add_employee_login($data)
		{
			$insert = $this->db->insert('employee_timeline',$data);
			return TRUE;	
		}
	/*	public function update_userlogin($data)
		{
			$update = $this->db->where('id',$data['eid'])
							   ->update('customers',$data);
			return true;
		}*/
    }