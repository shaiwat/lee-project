<?php

class login extends Controller {

	function login()
	{
		parent::Controller();
		
	}
	
	function index()
	{
	
		if(!$this->user->is_login())
		{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('username',  'ชื่อผู้ใช้งาน', 'trim|required');
			$this->form_validation->set_rules('password', 'รหัสผ่าน', 'trim|required|callback_username_check');
		
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"login",null);
			}
			else
			{ 	
 				 $username = $_POST['username'];
 				 $password = $_POST['password'];
				
				 $rows = $this->db->query("select user_id, username from users where  username='$username' and password=md5('$password')")->result_array();	
				 $this->session->set_userdata('user',array("user_id" =>$rows[0]['user_id'],"username" =>$rows[0]['username'] ) );
				 redirect('admin', 'location'); 		
		    }
		}else 
		{
			redirect('admin', 'location');
		}

	}
	function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('filter');
		
		
		redirect('login', 'location');
	}
	function username_check($username)
	{	
		 $username = $_POST['username'];
		 $password = $_POST['password'];
		 $rows = $this->db->query("select count(*) as c from users where username='$username' and password=md5('$password')")->result_array();
		 $this->form_validation->set_message('username_check', 'คุณระบุชื่อผู้ใช้งานและรหัสผ่านไม่ถูกต้อง');
		
		 if($rows[0]['c'])
		 {
		  	return true;
		 }
		 else
		 {
		  	return false;
		 }
		}

}

