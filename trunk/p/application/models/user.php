<?php 
	class user extends Model {

    
    function user()
    {
        // Call the Model constructor
        parent::Model();
        
    }
	
	function get()
	{
		$sql ="select  * from users where user_id=".$this->get_user_id();
		$users = $this->db->query($sql)->result_array();
		return $users[0];
	}
	function get_user_id()
	{
		$user =$this->session->userdata('user');
		return $user['user_id'];
	}
	
	
	function get_permission()
	{
		
		
	}
    
    
    function is_login()
    {
		$user =$this->session->userdata('user');
		if($user)
		{
	     	return true;
		}
		else{
		 	return false;
		}
    }
    function current_controller()
    {
    	$controller =  $this->router->class."/".$this->router->method ;
    	return $controller;
    }
	function set_message($message_type,$message_detail,$class_name)
	{
		$data = array();
		$data['message_type'] = $message_type;
		$data['message_detail'] = $message_detail;
		$data['class_name'] = $class_name;
		
		$this->session->set_userdata("messages",$data);
	}
	function messages()
	{
		$data  = $this->session->userdata("messages");
		//print_r($data);
		if($data)
		{
			$this->load->view("messages",$data);
			$this->session->unset_userdata('messages');
		}
		
	}
    
}