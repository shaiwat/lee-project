<?php 
	class fs extends Model {

    
    function fs()
    {
       
        parent::Model();
        
    }
    function get_option($key)
    {
    	$this->db->where("option_name",$key);
    	$options = $this->db->get("options")->result_array();
    	if(count($options))
    	{
    		return $options[0]["option_value"];
    	}
    	else 
    	{
    		return "";
    	}
    }
	function current_cat_banner()
	{
	
	$html ="";
	$cat_id = $this->session->userdata("cat_id");
	if($cat_id)
	{
		$this->db->where("cat_id",$cat_id);
		$cat = $this->db->get("product_categories")->result_array();
		
		if($cat[0]["banner"])
		{
			$html.= '<img src="'.base_url().'/timthumb.php?src=uploads/'.$cat[0]['banner'].'&w=626&h=150&zc=1" alt="" />';
		}
		
		$html.="<h1>".$cat[0]["pcat_name_th"]."</h1>";
	}
	return $html;
}
	
	function save_log($message ="")
	{
		$query_str =  $this->db->escape_str($this->db->last_query());
		$user = $this->user->get();
		
		$sql = "insert into logs (user_id,name,controller,message,active_time,query) values 
		('".$user["user_id"]."','".$user["firstname"]." ".$user["lastname"]."','".$this->user->current_controller()."','$message',now(),'".$query_str."') ";
		$this->db->query($sql);
		return $sql;
	}
	function save_visitor()
	{
		$this->load->library('user_agent');

		if ($this->agent->is_browser())
		{
		    $agent = $this->agent->browser().' '.$this->agent->version();
		}
		elseif ($this->agent->is_robot())
		{
		    $agent = $this->agent->robot();
		}
		elseif ($this->agent->is_mobile())
		{
		    $agent = $this->agent->mobile();
		}
		else
		{
		    $agent = 'Unidentified User Agent';
		}

		$ip =  $this->input->ip_address();
		$controller = $this->user->current_controller();
		$platform = $agent." ".$this->agent->platform(); 
		$sql = "insert into visitors  (ip,controller,platform,visit_date)
		values ('$ip','$controller','$platform',now());
		";
		$this->db->query($sql);
	}
    
}