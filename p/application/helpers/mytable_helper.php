<?php
function table($header=array(),$rows = array(),$name="")
{
	$CI =& get_instance();	
	$data["header"] = $header;
	$data["rows"] = $rows;
	$data["name"] = $name;
	$CI->load->view("table",$data);
	
	
}