<?php

class Login extends Controller {

	function Login()
	{
		parent::Controller();	
	}
	function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('matrix_info');
		$this->session->unset_userdata('search_info');
		redirect('login', 'location');
		 
	}
	
	function acccess_denine()
	{
			$this->template->load("main_theme","access_denine");
	
	}
	function index()
	{

		if(!$this->session->userdata('user'))
		{
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			
			$this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน', 'trim|required|callback_username_check');
			$this->form_validation->set_rules('password', 'รหัสผ่าน', 'trim|required');
			
			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view("login_view/login");
			}
			else
			{
			
				$username = $_POST['username'];
		  		$password = $_POST['password'];
		  		
				$rows = $this->db->query("select * from user_login,user_roles where user_login.role_id = user_roles.role_id and  user_login.username='$username' and user_login.password=md5('$password')")->result_array();	
				$this->session->set_userdata('user',array("user_id" =>$rows[0]['user_id'],"username" =>$rows[0]['username'], "role" => $rows[0]['role_name'] ) );
				
				$this->user_rediract();
				
			}
		}else
		{
			$this->user_rediract();
		}
			
	}

	
	function username_check($username)
	{
		
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  $rows = $this->db->query("select count(*) as c from user_login where username='$username' and password=md5('$password')")->result_array();
	  $this->form_validation->set_message('username_check', 'คุณระบุชื่อผู้ใช้งานและรหัสผ่านไม่ถูกต้อง');

	  if($rows[0]['c'])
	  {
	  	
	  
	  	
	  	return true;
	  
	  }
	  else
	  {
	  	return FALSE;
	  }
	}
	
	
 	function user_rediract()
 	{
 	
 		$user =$this->session->userdata('user');
 		
 		switch ($user['role']){
			case "admin" : 	redirect('manage', 'location');
				break;
			case "grandu" : redirect('admin', 'location');
				break;
			case "staff" :  redirect('staff/staff', 'location');
				break;
			case "vender" :  redirect('vender', 'location');
				break;
			case "customer" :  redirect('user/customer', 'location');
				break;
			
			default: echo "this user no role";
 	
 		}	
	
	}
 
}
/* End of file user.php */
/* Location: .*/