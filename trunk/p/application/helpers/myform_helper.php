<?php

function text_field($name,$label,$row=array(),$cleaner = 0)
{
  	 $CI =& get_instance();	
	
  	$data
  	if(count($default))
	{
  	 $data["default"] = $row[$name];
	}
	else 
	{
		$data["default"] ="";
	}
  	 $data["name"] = $name;
  	 $data["label"] = $label;
  	 $data["cleaner"] = $cleaner;
	 $CI->load->view("text_field",$data);
}
function area_field($name,$label,$default="",$cleaner = 0)
{
  	 $CI =& get_instance();	
  	 $data["default"] = $default;
  	 $data["name"] = $name;
  	 $data["label"] = $label;
  	 $data["cleaner"] = $cleaner;
	 $CI->load->view("area_field",$data);
}
function form_head($action,$label)
{
	$CI =& get_instance();	
  	$data["action"] = $action;
  	$data["label"] = $label;
  	$CI->load->view("form_head",$data);
}
function form_footer()
{
	$CI =& get_instance();	
  	
  	$CI->load->view("form_footer");
}
