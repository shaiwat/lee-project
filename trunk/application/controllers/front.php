<?php

class front extends Controller {

	function front()
	{
		parent::Controller();	
	}

function index()
{
	redirect('front/search', 'location');
}
function search()
{
	$data  =array();
	$data['content'] = $this->load->view("search_form",$data,true);
	 $this->template->load("main_theme","manage/manage_view",$data);
}
function search_result()
{

	
}

function material($id)
{
		
		$sql ="select  * from materials where m_id=$id";
		$data['rows'] = $this->db->query($sql)->result_array();
		$data['content'] = $this->load->view("material_detail",$data,true);
        $data['right'] = $this->load->view("manage/material_right",null,true);
	    $this->template->load("main_theme","manage/manage_view",$data);
	
} 
}
/* End of file user.php */
/* Location: .*/