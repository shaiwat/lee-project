<?php

class file extends Controller {

	function file()
	{
		parent::Controller();	
		
	}
	
	function index()
	{
		$this->load->view('upload');
	}
		function upload($field){
		$data["field"] = $field;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|swf|zip|exe';
		$config['max_size']	= '1000000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		//$config['file_name'] = mktime() ;
		$config["encrypt_name"] = true;
		$this->load->library('upload', $config);
		
		
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			
			$this->form_validation->set_rules('detail', 'อธิบายไฟล์', 'trim');
			$this->form_validation->set_rules('file_category_id', 'กลุ่มไฟล์', 'trim');
			if ($this->form_validation->run() == FALSE)
			{
				$error = array('error' => $this->upload->display_errors());
				
				//$this->template->load('admin/themes',$this->user->current_controller(),$error);
			}
			else
			{ 	
				
			}
			
			
			
			if ( !$file = $this->upload->do_upload("file_field"))
			{
			$data["error"] = array('error' => $this->upload->display_errors());
			
		 	
			$this->load->view("admin/upfile",$data);
		}
		else
		{
			
			
			$upload_data =  $this->upload->data();
		
		
			$data["file_name"] = $upload_data["file_name"];
			
			$this->load->view("admin/upfile_success",$data);
			
		}
				
				
			
		
	
	}
	
	
		
		
		
		
		
	
}
