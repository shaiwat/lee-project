<?php 
class user_model extends Model {

    
    function user_model()
    {
        // Call the Model constructor
        parent::Model();
    }
	function access($type)
	{
		$user =$this->session->userdata('user');
		//echo $user['role'];
		if(!($user['role']==$type))
		{
			redirect('login/acccess_denine', 'location');
		}
		else 
		{
			
		}
		//redirect('login/acccess_denine/', 'location');
	}
    function get_current_user()
    {
        
    	$user =$this->session->userdata('user');
    	$data['user'] = $user;
    	$data['info'] = $this->db->query("select * from user_login u left join user_roles r on u.role_id  = r.role_id where u.user_id =".$user['user_id'])->result_array();
        return 	$this->load->view("userdata",$data,true);
    	
    	
    }
    function is_login()
    {
	$user =$this->session->userdata('user');
	if(!$user)
	{
	     redirect('login', 'location');
	}
    }
    function get_curret_menu()
    {
    	$user =$this->session->userdata('user');
    	
	$f = $this->session->userdata('section');
	
    	if($user['role']=="staff")
    	{
    		return $this->load->view("staff_view/staff_menu");
    	}
    	if($user['role']=="customer")
    	{
    		return $this->load->view("user_view/customer_menu");
    	}
	if($user['role']=="vender")
    	{
    		$data['task_status'] = "menu_maintain_status.jpg";
		if($f=="task")
		{
		    $data['task_status'] = "menu_maintain_status_active.jpg";
		}
		$data['task_report'] ="menu_maintain_report.jpg";
		if($f=="report" || $f=="search")
		{
		    $data['task_report'] ="menu_maintain_report_active.jpg";
		    
		}
		$data['task_add'] = "menu_maintain.jpg";
		if($f=="task_add")
		{
		    $data['task_add'] = "menu_maintain_active.jpg";
		    
		}
		
		
		return $this->load->view("vender_view/vender_menu",$data);
    	}
    	if($user['role']=="admin" || $user['role']=="grandu")
    	{
    		
	    
		
		$data['task_status'] = "menu_maintain_status.jpg";
		if($f=="task")
		{
		    $data['task_status'] = "menu_maintain_status_active.jpg";
		}
		$data['task_report'] ="menu_maintain_report.jpg";
		if($f=="report" || $f=="search")
		{
		    $data['task_report'] ="menu_maintain_report_active.jpg";
		    
		}
		$data['task_add'] = "menu_maintain.jpg";
		if($f=="task_add")
		{
		    $data['task_add'] = "menu_maintain_active.jpg";
		    
		}
	
		return $this->load->view("admin_view/admin_menu",$data);
    	}
    
    }

   

}