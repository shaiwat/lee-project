<?php

class Manage extends Controller {

	function Manage()
	{
		parent::Controller();
		$this->user_model->is_login();
		$this->user_model->access("admin");
		
	}
	
	
	function index()
	{
			redirect('manage/report', 'location');
	}
	
	function username_check($str)
	{
		$sql = "select count(*) as c from user_login where username='$str'";
		$rows   = $this->db->query($sql)->result_array();
		$this->form_validation->set_message('username_check', 'ชื่อผู้ใช้งานนี้มีแล้วในระบบ');
		
		if (($rows[0]['c'] == 0))
		{
			
			return true;
		}
		else
		{
			return false;
		}
	}
	function password_confirm_check($str)
	{

		$this->form_validation->set_message('password_confirm_check', ' คุณ %s ไม่ตรงกัน ');
		if (!($_POST['password'] == $_POST['password2']))
		{
			
			return FALSE;
		}
		else
		{
			
			return TRUE;
		}
	}
	
	function customer_delete($id)
	{
		$this->session->set_userdata("section","customers");
		
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');

		$this->form_validation->set_rules('cust_mobile', '','trim');
		$this->form_validation->set_rules('cust_email', '','trim');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			
			
			$data['cust'] = $this->db->query("select * from  customers where cust_id = $id; ")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/customer_delete",$data,true);
			$data['right'] = $this->load->view("manage/customer_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
		    
			$sql  ="delete from customers where cust_id = $id";
			
			
			$result = $this->db->query($sql);
			if($result)
			{
				$this->db->query("delete from unit_cust_relation where cust_id=$id");
				
				$this->session->set_userdata("message","ลบข้อมูลเรียบร้อย");
				redirect('manage/customers/', 'location');
			}
		}
	}
	function _page_query($sql,$base,$view="",$offset=0)
	{
	
		$limit = 15;
                
		$config['base_url'] = base_url()."index.php/$base/";
               
		$config['per_page'] = $limit;
			
		
		$config['total_rows'] = count($this->db->query($sql)->result_array());
		
		
		 $this->pagination->initialize($config);

		$data['page_link'] =$this->pagination->create_links();
		$data['total'] = ceil( $config['total_rows']/$limit) ;
		
		$data['current_page'] = 1;
		if($offset){
		$data['current_page'] = ($offset/$limit)+1; 
		}
		
		$sql .=" limit $offset,$limit"; 
		$data['page'] =$this->pagination;
		
		$data['rows'] = $this->db->query($sql)->result_array();
		
		$data['paging'] = $this->load->view("manage/paging",$data,true);	
		$data['menu'] = $this->load->view("manage/manage_menu",null,true);
		$data['messages'] = $this->load->view("message",null,true);
	
		return $this->load->view($view,$data,true);
		
	}
	
	
	function user_edit($id=0)
	{
		$this->session->set_userdata("sub_section","users");	
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		
		//$this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน','trim|required|min_length[4]|max_length[15]|callback_username_check');
		$this->form_validation->set_rules('email', 'อีเมล์','trim|valid_email|required');
		$this->form_validation->set_rules('firstname', 'ชื่อ','trim|required');
		$this->form_validation->set_rules('lastname', 'นามสกุล','trim|required');
		//$this->form_validation->set_rules('password', 'รหัสผ่าน','trim|required|min_length[6]|max_length[15]');
		//$this->form_validation->set_rules('password2', 'ยืนยันรหัสผ่าน','trim|required|callback_password_confirm_check');
		$this->form_validation->set_rules('role_id', 'ชนิดผู้ใช้งาน','trim|required');
		$this->form_validation->set_rules('position', 'ตำแหน่ง','trim');
	
	
	
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['users'] = $this->db->query("select  * from user_login where user_id =$id")->result_array();
			
			$data['roles'] = $this->db->query("select  * from user_roles")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/user_edit",$data,true);
			$data['right'] = $this->load->view("manage/user_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$position = $_POST['position'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			//$password = $_POST['password'];
			$role_id = $_POST['role_id'];
			$sql ="update user_login set firstname ='$firstname',
			lastname = '$lastname',position = '$position',email ='$email',username = '$username',role_id='$role_id'
			where user_id = $id
			";
			 
		
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","บันทึกข้อมูลเรียบร้อย");
				redirect('manage/users/', 'location');
			}
		
		}
	}
	function user_delete($id=0)
	{
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		$this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน','');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['users'] = $this->db->query("select  * from user_views where user_id =$id")->result_array();
			
			$data['roles'] = $this->db->query("select  * from user_roles")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/user_delete",$data,true);
			$data['right'] = $this->load->view("manage/user_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
			
		}
		else 
		{
			$sql ="delete from user_login where user_id=$id";
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","ลบข้อมูลเรียบร้อย");
				redirect('manage/users/', 'location');
			}
		}
		
	}
	function user_add()
	{
		
		
		
		$this->session->set_userdata("section","users");
		$this->session->set_userdata("sub_section","user_add");	
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		
		$this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน','trim|required|min_length[4]|max_length[15]|callback_username_check');
		$this->form_validation->set_rules('email', 'อีเมล์','trim|valid_email|required');
		$this->form_validation->set_rules('firstname', 'ชื่อ','trim|required');
		$this->form_validation->set_rules('lastname', 'นามสกุล','trim|required');
		$this->form_validation->set_rules('password', 'รหัสผ่าน','trim|required|min_length[6]|max_length[15]
		');
		$this->form_validation->set_rules('password2', 'ยืนยันรหัสผ่าน','trim|required|callback_password_confirm_check');
		$this->form_validation->set_rules('role_id', 'ชนิดผู้ใช้งาน','trim|required');
		$this->form_validation->set_rules('position', 'ตำแหน่ง','trim');
	
	
	
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['roles'] = $this->db->query("select  * from user_roles")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/user_add",$data,true);
			$data['right'] = $this->load->view("manage/user_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
			$fistname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$position = $_POST['position'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$role_id = $_POST['role_id'];
			$sql ="insert into user_login (firstname,lastname,position,email,username,password,role_id)
			values ('$fistname','$lastname','$position','$email','$username','$password',$role_id)";
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","บันทึกข้อมูลเรียบร้อย");
				redirect('manage/users/', 'location');
			}
		}
	}

	function users($offset =0)
	{
		$this->session->set_userdata("section","users");
		$this->session->set_userdata("sub_section","users");	
		$sql ="select  * from user_views";
		$data['content'] = $this->_page_query($sql,"manage/users","manage/user_list",$offset);
        $data['right'] = $this->load->view("manage/user_right",null,true);
	    $this->template->load("main_theme","manage/manage_view",$data);
		
	}
	 function materials($offset =0)
	 {
	 	$this->session->set_userdata("section","materials");
		$this->session->set_userdata("sub_section","materials");	
		$sql ="select  * from materials";
		$data['content'] = $this->_page_query($sql,"manage/materials","manage/material_list",$offset);
        $data['right'] = $this->load->view("manage/material_right",null,true);
	    $this->template->load("main_theme","manage/manage_view",$data);
	 }
	 function material_add()
	 {
	 	
	 	
	 	$this->session->set_userdata("section","materials");
		$this->session->set_userdata("sub_section","material_add");	
		
		
	 	$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		
		$this->form_validation->set_rules('name', 'ชื่อวัสดีุ','trim|required');
		$this->form_validation->set_rules('brand', '','trim');
		$this->form_validation->set_rules('serial_code', '','trim');
		$this->form_validation->set_rules('amount', '','trim');
		$this->form_validation->set_rules('mcat_id', 'หมวด','trim|required');
		$this->form_validation->set_rules('detail', 'รายละเอียด','trim');
		$this->form_validation->set_rules('buyprice', 'วันที่ซื่อ','trim');
				
		$this->form_validation->set_rules('buydate', 'ชื่อผู้ใช้งาน','trim');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			
			$data['categories'] = $this->db->query("select  * from categories")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/material_add",$data,true);
			$data['right'] = $this->load->view("manage/material_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
			$name = $_POST['name'];
			$brand = $_POST['brand'];
			$serial_code =  $_POST['serial_code'];
			$amount =  $_POST['amount'];
			$mcat_id =  $_POST['mcat_id'];
			$detail = $_POST['detail'];
			$buyprice  = $_POST['buyprice'];
			$buydate = $_POST['buydate'];
			
			$sql = "insert into materials 
			(name,brand,serial_code,amount,mcat_id,detail,buyprice,buydate,mtype_id) 
			values ('$name','$brand','$serial_code','$amount','$mcat_id','$detail','$buyprice',STR_TO_DATE('$buydate','%d/%m/%Y'),1);";
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","บันทึกข้อมูลเรียบร้อย");
				redirect('manage/materials/', 'location');
			}
		}
	 }
	 function material_edit($id)
	 {
	 
	 	$this->session->set_userdata("section","materials");
		$this->session->set_userdata("sub_section","material_add");	
		
		
	 	$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		
		$this->form_validation->set_rules('name', 'ชื่อวัสดีุ','trim|required');
		$this->form_validation->set_rules('brand', '','trim');
		$this->form_validation->set_rules('serial_code', '','trim');
		$this->form_validation->set_rules('amount', '','trim');
		$this->form_validation->set_rules('mcat_id', 'หมวด','trim|required');
		$this->form_validation->set_rules('detail', 'รายละเอียด','trim');
		$this->form_validation->set_rules('buyprice', 'วันที่ซื่อ','trim');
		
		$this->form_validation->set_rules('buydate', 'ชื่อผู้ใช้งาน','trim');
	
	
		if ($this->form_validation->run() == FALSE)
		{
			$sql = "select date_format(buydate,'%d/%m/%Y') as buydate,name,brand,serial_code,amount,mcat_id,detail,buyprice,mtype_id,m_id from materials where m_id = $id";
			$data['rows'] = $this->db->query($sql)->result_array(); 
			$data['categories'] = $this->db->query("select  * from categories")->result_array();
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			$data['content'] = $this->load->view("manage/material_edit",$data,true);
			$data['right'] = $this->load->view("manage/material_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
			$name = $_POST['name'];
			$brand = $_POST['brand'];
			$serial_code =  $_POST['serial_code'];
			$amount =  $_POST['amount'];
			$mcat_id =  $_POST['mcat_id'];
			$detail = $_POST['detail'];
			$buyprice  = $_POST['buyprice'];
			$buydate = $_POST['buydate'];
			
			$sql = "update materials set 
			name = '$name',brand='$brand',serial_code ='$serial_code',
			amount ='$amount',mcat_id='$mcat_id',
			detail='$detail',
			buyprice='$buyprice'
			,buydate =STR_TO_DATE('$buydate','%d/%m/%Y')
			 where m_id  = $id";
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","บันทึกข้อมูลเรียบร้อย");
				redirect('manage/materials/', 'location');
			}
		}
	 }
	 function material_delet($id)
	 {
	 
	 }
	 
	 function categories($offset = 0)
	 {
	 	
	 	$this->session->set_userdata("section","categories");
		$this->session->set_userdata("sub_section","categories");	
		$sql = "select  * from categories";
		$data['content'] = $this->_page_query($sql,"manage/categories","manage/category_list",$offset);
        $data['right'] = $this->load->view("manage/category_right",null,true);
	    $this->template->load("main_theme","manage/manage_view",$data);
	 }
	 
	 function category_add()
	 {
	 	$this->session->set_userdata("section","categories");
		$this->session->set_userdata("sub_section","category_add");	
		
		
	 	$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		
		$this->form_validation->set_rules('mcat_name', 'ชื่อประเภท/หมวด','trim|required');
		$this->form_validation->set_rules('parent_id', '','trim');
		
	
	
		if ($this->form_validation->run() == FALSE)
		{
			
			
			$data['menu'] = $this->load->view("manage/manage_menu",null,true);
			
			$data['categories'] =  $this->db->query("select  * from categories")->result_array();
			$data['content'] = $this->load->view("manage/category_add",$data,true);
			
			$data['right'] = $this->load->view("manage/category_right",null,true);
			$this->template->load("main_theme","manage/manage_view",$data);
		
		}
		else
		{
			
			$mcat_name = $_POST['mcat_name'];
			$parent_id = $_POST['parent_id'];
			$sql = "insert into categories (mcat_name,parent_id) values('$mcat_name','$parent_id')";
			
			$result = $this->db->query($sql);
			if($result)
			{
				
				
				$this->session->set_userdata("message","บันทึกข้อมูลเรียบร้อย");
				redirect('manage/categories/', 'location');
			}
		}
	 }
	 function category_edit($id)
	 {
	 }
	 function catgory_delete($id)
	 {
	 }
	 function report()
	 {
	 	$this->session->set_userdata("section","report");
		$this->session->set_userdata("sub_section","report");	
		
        $data['right'] = "";
        $data['menu'] = $this->load->view("manage/manage_menu",null,true);
        $data['content'] ="";
	    $this->template->load("main_theme","manage/manage_view",$data);
	 }
 	 function maintain()
	 {
	 	$this->session->set_userdata("section","maintain");
		$this->session->set_userdata("sub_section","maintain");	
		
        $data['right'] = "";
        $data['menu'] = $this->load->view("manage/manage_menu",null,true);
        $data['content'] ="";
	    $this->template->load("main_theme","manage/manage_view",$data);
	 }
	 
	function rooms()
	{
		$this->session->set_userdata("section","rooms");
		$this->session->set_userdata("sub_section","rooms");	
		
        $data['right'] = "";
        $data['menu'] = $this->load->view("manage/manage_menu",null,true);
        $data['content'] ="";
	    $this->template->load("main_theme","manage/manage_view",$data);
	} 
	
}


