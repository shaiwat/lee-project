<?php

function text_field($name,$label,$row=array(),$cleaner = 0,$class="")
{
  	 $CI =& get_instance();	
	
  	$data["default"] ="";
  	if(count($row))
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
  	 $data["class"] = $class;
	 $CI->load->view("text_field",$data);
}
function area_field($name,$label,$row,$cleaner = 0,$class="width800 height100")
{
  	 $CI =& get_instance();	
	$data["default"] ="";
  	if(count($row))
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
  	  $data["class"] = $class;
	 $CI->load->view("area_field",$data);
}
function image_field($name,$label,$row,$cleaner = 0,$class="")
{
	
	 $CI =& get_instance();	
  	$data["default"] ="";
  	if(count($row))
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
  	 $data["class"] = $class;
	 $CI->load->view("image_field",$data);
}
function form_head($action,$label)
{
	$CI =& get_instance();	
  	$data["action"] = $action;
  	$data["label"] = $label;
  	$CI->load->view("form_head",$data);
}
function form_footer($submit_label ="บันทึก")
{
	$CI =& get_instance();	
  	$data["submit_label"] = $submit_label;
  	$CI->load->view("form_footer",$data);
}
function select_field($name,$label,$rows,$label_value,$row,$cleaner = 0,$first_label="โปรดเลือก")
{
	 $CI =& get_instance();	
	
  	$data["default"] ="";
  	if(count($row))
	{
  	 $data["default"] = $row[$name];
	}
	else 
	{
		$data["default"] ="";
	}
  	 $data["rows"] = $rows;
	 $data["name"] = $name;
  	 $data["label"] = $label;
  	 $data["cleaner"] = $cleaner;
  	 $data["label_value"] = $label_value;
  	  $data["first_label"] = $first_label;
  	  $data["row"] = $row;
	 $CI->load->view("select_field",$data);
}
