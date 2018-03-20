<?php 
	class M_main extends CI_Model
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
				if($getuser->userType=='admin')
					return $getuser;
				else {
						return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		/********************* insert and update **********************/
		public function add_userdata($data)
		{
			$insert = $this->db->insert('users',$data);
			return $this->db->insert_id();	
		}
		public function get_user_data($limit)
		{
			$userprofile = $this->db->select('*')
									->from('users')
									->where('id',$limit)
									->get();
			return $employee_list->result();
		}
		public function update_login_time($data)
		{
			$update = $this->db->where('id',$data['id'])
							   ->update('users',$data);
			return true;
		}
		/********************* retrive data from database *****************************/
		public function get_list_employee()
		{
			$employee_list = $this->db->select('*')
								   ->from('users')
								   ->where('userType','employee')
								   ->order_by('createdOn','DESC')
								   ->get();
								   
			return $employee_list->result();
		}	
		public function get_employee_data($id)
		{
		   $get_employee_info = $this->db->select('*')
									   ->from('users')
									   ->where('id',$id)
									   ->get();
		   return $get_employee_info->row();
	   }
	   public function get_customer_data($id)
	   {
			$get_customer_info = $this->db->select('*')
									   ->from('customers')
									   ->where('id',$id)
									   ->get();
			
		   return $get_customer_info->row();   
	   }
    }
?>