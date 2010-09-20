<?php

class service extends Controller {

	function Service()
	{
		parent::Controller();	
	}
	
	function index()
	{
		
	}
	function building_options($id=0,$id2=0,$first="โปรดเลือก",$have_first = 1)
	{
		
		$sql ="select  * from buildings where project_id =".$id;
		$rows = $this->db->query($sql)->result_array();
		$data = array("rows"=>$rows);
		$data['first'] =$first;
		$data['id2'] =$id2;
		$data['have_first'] =$have_first;
		$this->load->view("service/buiding_options",$data);
		
		
		
	}
	
	function unit_options($id=0,$id2=0,$first="โปรดเลือก",$have_first = 1)
	{
		
			
			$sql ="select  * from units where building_id =".$id;
			
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			$data['id2'] =$id2;
			$data['first'] =$first;
			$data['have_first'] =$have_first;
			$this->load->view("service/unit_options",$data);
			
		
	}
	function task_group_options($id=0,$id2=0,$first="โปรดเลือก")
	{
		
			$sql ="select  * from task_groups where task_type_id =".$id;
			
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			$data['task_detail_id'] = $id2;
			$this->load->view("service/task_group_options",$data);
			
		
	}
	function task_group_options2($id=0,$id2=0,$first="โปรดเลือก",$have_first = 1)
	{
		
			
			$sql ="select  * from task_groups where task_type_id =".$id;
			
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			$data['id2'] =$id2;
			$data['first'] =$first;
			$data['have_first'] =$have_first;
			$this->load->view("service/task_group_options2",$data);
		
	}
	function vender_options($id=0)
	{
			$sql ="select * from venders 
			where  vender_id in (select vr.vender_id from task_detail_vender_relation  
			as vr WHERE task_detail_id = $id )";
		
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			
			$this->load->view("service/vender_options",$data);
			
		
	}
	function customer_options($id)
	{
		if($id){
			$sql  = "SELECT customers.cust_id,customers.cust_fname,customers.cust_lname, ucust.type from customers ,unit_cust_relation as ucust  WHERE  customers.cust_id  =  ucust.cust_id and ucust.unit_id = $id";
		
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			$this->load->view("service/customer_options",$data);
			
		
		}
	}
	function task_detail_options($id=0,$id2=0,$first="โปรดเลือก",$have_first = 1)
	{
		$sql ="select  * from task_details where task_group_id =".$id;
			
			$rows = $this->db->query($sql)->result_array();
			$data = array("rows"=>$rows);
			$data['id2'] =$id2;
			$data['first'] =$first;
			$data['have_first'] =$have_first;
			$this->load->view("service/task_detail_options",$data);
	}
	function get_task_item($id=0)
	{
		 
		if($id)
		{
			$data["appointment_time"] = $this->db->query("SELECT TIME_FORMAT(aptime_name, '%H:%i') as time,aptime_id FROM apointment_time order by aptime_name asc")->result_array();
			$data['task_types'] = $this->db->query("select * from task_types")->result_array();
			$data['id'] = $id;
			$this->load->view("service/task_item",$data);
		
		}
		
		 
	}
	function get_customer($id=0)
	{
		if($id)
		{
			
			$data['user'] = $this->db->query("select * from customers where cust_id=$id")->result_array();
			//print_r($user);
			//header('Content-type: application/json');
			$this->load->view("service/customer_callback",$data);
			
		}
	}
	
	function get_project_item($num)
	{
	
		$data['projects'] = $this->db->query("select  * from projects")->result_array();
		$data['i'] = $num;
		$this->load->view("service/project_item",$data);
	}
	
	
}

