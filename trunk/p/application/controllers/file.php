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
	function upload($id=1,$field)
	{
		$data["id"] = $id;
		$data["field"] = $field;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '12000';
		$config['max_width']  = '1240';
		$config['max_height']  = '768';
		//$config['file_name'] = mktime() ;
		$config["encrypt_name"] = true;
		$this->load->library('upload', $config);
		
		
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			
			$this->form_validation->set_rules('detail', 'อธิบายไฟล์', 'trim');
			//$this->form_validation->set_rules('file_cat_id', 'กลุ่มไฟล์', 'trim');
			if ($this->form_validation->run() == FALSE)
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view("admin/upfile",$data);
				//$this->template->load('admin/themes',$this->user->current_controller(),$error);
			}
			else
			{ 	
				
			
			
			
			
			if ( !$file = $this->upload->do_upload("file_field"))
			{
			$data["error"] = array('error' => $this->upload->display_errors());
			
		 	
			
		}
		else
		{
			
			
			$upload_data =  $this->upload->data();
			$values = array();
			$values["file_name"] = $upload_data["file_name"];
			$values["detail"] = $_POST["detail"];
			$values["file_cat_id"] = $id;
			$values["file_type"] = $upload_data["file_type"];
			$values["raw_name"] = $upload_data["raw_name"];
			$values["is_image"] = $upload_data["is_image"];
			$values["file_size"] = $upload_data["file_size"];
			$values["file_ext"] = $upload_data["file_ext"];
			$values["client_name"] = $upload_data["client_name"];
			$data["upload_data"] = $upload_data;
			$this->db->insert("files",$values);
			//$this->template->load('admin/themes',"admin/file_view",$data);
			//$data = array('upload_data' => $this->upload->data());
			$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
			$this->fs->save_log();	
			redirect("file/crop_image/$field/".$upload_data["file_name"], 'location');
			
		}
		
			}
		
	}
	function crop_image($field,$file_name)
	{
		
		
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			
	
			$this->form_validation->set_rules('x1',  '', 'trim');
			$this->form_validation->set_rules('x2',  '', 'trim');
			$this->form_validation->set_rules('y2',  '', 'trim');
			$this->form_validation->set_rules('y2',  '', 'trim');
			$this->form_validation->set_rules('file_name',  '', 'trim');
			
			$data["file_name"] = $file_name;
			$data["field"] = $field;
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view("admin/crop_image",$data);
			}
			else
			{ 	
			$config['image_library'] = 'GD2';
			$this->load->library('image_lib');
			$config['source_image'] = "./uploads/".$_POST["file_name"];
			$config['width'] = $_POST["w"];
			$config['height'] = $_POST["h"];
			$config['x_axis'] = $_POST["x1"];
			$config['y_axis'] = $_POST["y1"];
			//$config['dynamic_output'] = true;
			$config["new_image"] = "./uploads/"."".$_POST["file_name"];
        	$config["maintain_ratio"] =false;
			
			  $this->image_lib->clear();
			$this->image_lib->initialize($config);
			

			if ( ! $this->image_lib->crop())
			{
			    print_r( $this->image_lib->display_errors());
			
			}
				
				 $data["file_name"] = $_POST["file_name"];
				 //print_r($_POST);
				$this->load->view("admin/crop_finish",$data);
				
			}
		
		
		
		
		
		
	}
	
}
