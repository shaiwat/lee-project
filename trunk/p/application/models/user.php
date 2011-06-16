<?php 
	class user extends Model {

    
    function user()
    {
        // Call the Model constructor
        parent::Model();
        
    }
	
	function get()
	{
		$sql ="select  * from users inner join roles on users.role_id =  roles.role_id where  users.user_id=".$this->get_user_id();
		$users = $this->db->query($sql)->result_array();
		return $users[0];
	}
	function get_user_id()
	{
		$user =$this->session->userdata('user');
		return $user['user_id'];
	}
	
	function get_project_access()
	{
			$user = $this->get();
			
			return $user["project_access"];
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
    function get_h1()
    {
    	$this->db->where("controller",$this->current_controller());
		$rows = $this->db->get("controllers")->result_array();
		if(count($rows))
		{
			echo "<h1>".$rows[0]["detail"]."</h1>";
		}
    }
    function back_action()
    {
    	$last_action  = $this->session->userdata("last_action");	
    	redirect($last_action, 'location');
    }
    function save_action()
    {
    	$this->session->set_userdata("last_action",$this->router->uri->uri_string);
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
	function get_protect_controllers()
	{
		
		return $rows;
	}
	function protection()
	{
	
		$user = $this->get();
		$this->db->where("role_id",$user["role_id"]);
		$roles = $this->db->get("roles")->result_array();
		
		$rows = $this->db->query("select * from controllers where c_id  not in (".$roles[0]["controller_access"].")")->result_array();
		
		foreach($rows as $row)
		{
			
				if($this->current_controller()==$row["controller"])
				{
					redirect('login/access_denine', 'location'); 
					return;
				}
			
			
		
		}
	}
    
}