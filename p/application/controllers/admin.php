<?php

class admin extends Controller {

	function admin()
	{
		parent::Controller();
		date_default_timezone_set ("Asia/Bangkok"); 	
		if(!$this->user->is_login())
		{
			redirect('login', 'location'); 
		}
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		$this->form_validation->set_message('is_natural_no_zero', 'กรุณาระบุ %s');
		$this->output->enable_profiler(TRUE);
	}
	function csv()
	{
		$this->load->dbutil();

		$query = $this->db->query("SELECT * FROM roles");
		
		echo $this->dbutil->csv_from_result($query); 
	}
	function room_add()
	{
			$this->form_validation->set_rules('place_name',  'ชื่อห้อง', 'trim|required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/room_add");
			
			}
			else
			{ 	
				$this->db->insert("place",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/room', 'location');
				
			}
	}
	function room_edit($id)
	{
			$this->form_validation->set_rules('place_name',  'ชื่อห้อง', 'trim|required');
			
			$this->db->where("place_id",$id);
			
			if ($this->form_validation->run() == FALSE)
			{
				$rows = $this->db->get("place")->result_array();
				$data["row"] = $rows[0];
				$this->template->load('admin/themes',"admin/room_edit",$data);
			
			}
			else
			{ 	
				
				$this->db->update("place",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/room', 'location');
				
			}
	}
	function room_delete($id)
	{
	}
	function room()
	{
		$header =
		 array( 
			  array("class"=>"left","name"=>"place_name","label"=>"ชื่อห้อง/สถานที่"),
			 
			  array("class"=>"center edit","name"=>"place_id","label"=>"แก้ไข"),
			  array("class"=>"center delete","name"=>"place_id","label"=>"ลบ")
	 			);
		$rows = $this->db->query("select * from place")->result_array();
		$data["header"] = $header; 
		$data["rows"] = $rows;
		$this->template->load('admin/themes',"admin/room",$data);
	}
	
	function _page_query($sql,$base,$view="",$offset=0,$data= array(),$show =true,$limit = 9)
	{
		     
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
		
		
		
		$data['paging'] = $this->load->view("paging",$data,true);	
		
		
		if($show){
		$this->template->load("admin/themes",$view,$data);
		}else
		{
			return $data;
		}
		
	}
		
	function index()
	{
		//$this->template->load('admin/themes',"admin/dashboard",null);
		$this->_init_filter();
		
		redirect('admin/materials', 'location'); 
	}
	function _init_filter()
	{
		
		$filter = array();
		$filter["file_category_id"] = 0;
		$filter["category_id"] = 0;
		
		$this->session->set_userdata("filter",$filter);
		
	}
	function category_edit($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('category_name',  'ชื่อหมวด', 'trim|required');
			
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['row'] = $this->db->query("select * from material_categories where category_id =$id")->result_array();
				$this->template->load('admin/themes',"admin/category_edit",$data);
			}
			else
			{ 	
				
				$this->db->where('category_id', $id);
				$this->db->update('material_categories', $_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/categories', 'location');
				
			}
	}
	
	function category_add()
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('category_name',  'ชื่อหมวด', 'trim|required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/category_add",null);
			}
			else
			{ 	
				$this->db->insert("material_categories",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/categories', 'location');
				
			}
	}
	function user_add()
	{
			
			$this->form_validation->set_rules('username',  'ชื่อผู้ใช้งาน', 'trim|required');
			$this->form_validation->set_rules('password', 'รหัสผ่าน', 'trim|required');
			$this->form_validation->set_rules('firstname', 'ชื่อ', 'trim|required');
			$this->form_validation->set_rules('lastname', 'นามสกุล', 'trim|required');
			$this->form_validation->set_rules('position', 'ตำแหน่ง', 'trim');
			$this->form_validation->set_rules('email', 'อีเมล์', 'trim|required');
			$this->form_validation->set_rules('role_id', 'ระดับผู้ใช้งาน', 'trim|required|is_natural_no_zero');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/user_add",null);
			}
			else
			{ 	
				$values = $_POST;
				$values["password"] = md5($values["password"]);
				$this->db->insert("users",$values);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
					
				redirect('admin/users', 'location');
				
			}
	}
	function user_delete($id)
	{
	
			$this->form_validation->set_rules('user_id', '', 'trim');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->db->where("user_id",$id);
				$data["user"] = $this->db->get("users")->result_array();
				$this->template->load('admin/themes',"admin/user_delete",$data);
			}
			else
			{ 	
				
				$this->db->where("user_id",$id);
				$this->db->delete("users");
				$this->user->set_message("","ลบกเรียบร้อยแล้ว","success");
			
				redirect('admin/users', 'location');
				
			}
	}
	function pass_edit($id)
	{
	$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			
			$this->form_validation->set_rules('password', '', 'trim|required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->db->where("user_id",$id);
				$data["user"] = $this->db->get("users")->result_array();
				$this->template->load('admin/themes',"admin/pass_edit",$data);
			}
			else
			{ 	
				$values = $_POST;
				$values["password"] = md5($values["password"]);
				$this->db->where("user_id",$id);
				$this->db->update("users",$values);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/users', 'location');
				
			}
			
	}
	function user_edit($id)
	{
			$this->form_validation->set_rules('username',  'ชื่อผู้ใช้งาน', 'trim|required');
			//$this->form_validation->set_rules('password', 'รหัสผ่าน', 'trim|required');
			$this->form_validation->set_rules('firstname', 'ชื่อ', 'trim|required');
			$this->form_validation->set_rules('lastname', 'นามสกุล', 'trim|required');
			
			$this->form_validation->set_rules('position', 'ตำแหน่ง', 'trim');
			$this->form_validation->set_rules('email', 'อีเมล์', 'trim|required');
			$this->form_validation->set_rules('tel', '', 'trim');
			$this->form_validation->set_rules('role_id', 'ระดับผู้ใช้งาน', 'trim|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->db->where("user_id",$id);
				$data["user"] = $this->db->get("users")->result_array();
				$this->template->load('admin/themes',"admin/user_edit",$data);
			}
			else
			{ 	
				$values = $_POST;
				$this->db->where("user_id",$id);
				$this->db->update("users",$values);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
			
				redirect('admin/users', 'location');
				
			}
	}
	function category_delete($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('category_id',  '', 'trim|required');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['cat'] = $this->db->query("select * from material_categories where category_id =$id")->result_array();
				$this->template->load('admin/themes',"admin/category_delete",$data);
			}
			else
			{ 	
				$this->db->where('category_id', $id);
				$this->db->delete('material_categories');
				$this->user->set_message("","ลบเรียบร้อยแล้ว","success");	
				
				redirect('admin/categories', 'location');
				
			}
	}
	function categories()
	{
		
		$this->template->load('admin/themes',"admin/categories",null);
	}
	function contacts()
	{
		$this->template->load('admin/themes',"admin/contacts",null);
	}
	function material_view($id)
	{
		$data["contents"]=$this->p->material_view($id);
		$this->load->view("pupup_theme",$data);
		
	}
	function material_filter()
	{
		$id = $_POST["category_id"];
		$filter = $this->session->userdata("filter");
		$filter["category_id"] = $id;
		$this->session->set_userdata("filter",$filter);
		redirect('admin/materials', 'location');
		
	}
	function material_filter2()
	{
		$id = $_POST["category_id"];
		$filter = $this->session->userdata("filter");
		$filter["category_id"] = $id;
		$this->session->set_userdata("filter",$filter);
		redirect('admin/materials2', 'location');
		
	}
	function materials($offset=0)
	{
		$filter = $this->session->userdata("filter");
		$condition ="";
		if($filter["category_id"])
		{
		$condition = " and p.category_id = ".$filter["category_id"];
		
		}
		$sql = "select * from materials m left join material_categories c on m.category_id = c.category_id where type_id =2 "; 
		$base = "admin/materials";
		
		$this->_page_query($sql,$base,"admin/materials",$offset,array(),true,50);
		
		//$data["materials"]= $this->db->query("select * from materials p left join material_categories c on c.category_id = p.category_id ")->result_array();
		//$this->template->load('admin/themes',"admin/materials",$data);
	}
	function materials2($offset=0)
		{
			/*$filter = $this->session->userdata("filter");
			$condition ="";
			if($filter["category_id"])
			{
			$condition = " and p.category_id = ".$filter["category_id"];
			
			}*/
			$sql = "select * from materials m left join material_categories c on m.category_id = c.category_id 	where type_id = 1 "; 
			$base = "admin/materials";
			
			$this->_page_query($sql,$base,"admin/materials2",$offset,array(),true,50);
			
			//$data["materials"]= $this->db->query("select * from materials p left join material_categories c on c.category_id = p.category_id ")->result_array();
			//$this->template->load('admin/themes',"admin/materials",$data);
		}
	function material_add2()
	{
	
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อ', 'trim|required');
			
			$this->form_validation->set_rules('category_id', 'หมวดสินค้า', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('budget_id', 'ชนิดงบประมาณ', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('company_id', 'บริษัท', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('place_id', 'ชื่อสถานที่', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('brand', 'ยีห้อ', 'trim|required');
			$this->form_validation->set_rules('model', '', 'trim');
			$this->form_validation->set_rules('buy_price', 'ราคาซื้อ', 'trim');
			$this->form_validation->set_rules('buy_date', 'วันที่ซื้อ', 'trim');
			$this->form_validation->set_rules('detail', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('warranty', '', 'trim');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/material_add2",null);
			}
			else
			{ 	
				$query = $_POST;
				$query['type_id'] = 1;
				$query['last_modify'] =date("y/m/d H:i:s");
				$query['create_date'] =date("y/m/d H:i:s");
				
				$this->db->insert("materials",$query);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				
				redirect('admin/materials2', 'location');
			}
		
	
	}
	function material_edit2($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อ', 'trim|required');
			
			$this->form_validation->set_rules('category_id', 'หมวดสินค้า', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('budget_id', 'ชนิดงบประมาณ', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('company_id', 'บริษัท', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('place_id', 'ชื่อสถานที่', 'trim|required|is_natural_no_zero');
			
			$this->form_validation->set_rules('brand', 'ยีห้อ', 'trim|required');
			$this->form_validation->set_rules('model', '', 'trim');
			$this->form_validation->set_rules('buy_price', 'ราคาซื้อ', 'trim');
			$this->form_validation->set_rules('buy_date', 'วันที่ซื้อ', 'trim');
			$this->form_validation->set_rules('detail', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('warranty', '', 'trim');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->db->where("material_id",$id);
				$rows = $this->db->get("material_views")->result_array();
				$data["row"] = $rows[0];
				$this->template->load('admin/themes',"admin/material_edit2",$data);
			}
			else
			{ 	
				$query = $_POST;
				
				$query['last_modify'] =date("y/m/d H:i:s");
				$query['create_date'] =date("y/m/d H:i:s");
				
				$this->db->update("materials",$query);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				
				redirect('admin/materials2', 'location');
			}
	}
	function material_add()
	{
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อ', 'trim|required');
			
			$this->form_validation->set_rules('category_id', 'หมวดสินค้า', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('budget_id', 'ชนิดงบประมาณ', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('company_id', 'บริษัท', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('place_id', 'ชื่อสถานที่', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('code', 'เลขที่ครุภัณฑ์', 'trim|required');
			$this->form_validation->set_rules('brand', 'ยีห้อ', 'trim|required');
			$this->form_validation->set_rules('model', '', 'trim');
			$this->form_validation->set_rules('buy_price', 'ราคาซื้อ', 'trim');
			$this->form_validation->set_rules('buy_date', 'วันที่ซื้อ', 'trim');
			$this->form_validation->set_rules('detail', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('warranty', '', 'trim');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/material_add",null);
			}
			else
			{ 	
				$query = $_POST;
				$query['type_id'] = 2;
				$query['last_modify'] =date("y/m/d H:i:s");
				$query['create_date'] =date("y/m/d H:i:s");
				$this->db->insert("materials",$query);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				redirect('admin/materials', 'location');
			}
		
		
		
	}
	function materail_edit($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อ', 'trim|required');
			
			$this->form_validation->set_rules('category_id', 'หมวดสินค้า', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('budget_id', 'ชนิดงบประมาณ', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('company_id', 'บริษัท', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('place_id', 'ชื่อสถานที่', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('code', 'เลขที่ครุภัณฑ์', 'trim|required');
			$this->form_validation->set_rules('brand', 'ยีห้อ', 'trim|required');
			$this->form_validation->set_rules('model', '', 'trim');
			$this->form_validation->set_rules('buy_price', 'ราคาซื้อ', 'trim');
			$this->form_validation->set_rules('buy_date', 'วันที่ซื้อ', 'trim');
			$this->form_validation->set_rules('detail', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('warranty', '', 'trim');
			if ($this->form_validation->run() == FALSE)
			{
				$rows = $this->db->query("select * from material_views where material_id = $id")->result_array();
				$data["row"] = $rows[0];    
				$this->template->load('admin/themes',"admin/material_edit",$data);
			}
			else
			{ 	
				$this->db->where('material_id', $id);
				
				$values = $_POST;
				//$values["buy_date"] = date('m/d/Y', strtotime($rss)); ;
				$this->db->update("materials",$values);
				
				$buy_date = $_POST["buy_date"];
				$this->db->query("update materials set buy_date=STR_TO_DATE('$buy_date','%d/%m/%Y') where material_id = $id");
				
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				
				//echo $this->db->truncate(); 
				redirect('admin/materials', 'location');
			}
		
	}
	
	function maintain_add()
	{
			
			$this->form_validation->set_rules('maintain_name',  'ชื่องานซ่อม', 'trim|required');
			$this->form_validation->set_rules('remark',  '', 'trim');
			$this->form_validation->set_rules('category_id',  'หมวด', 'trim|required');
			
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/maintain_add",null);
			}
			else
			{ 	
				$this->db->insert("maintain",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/maintains', 'location');
				
			}
	}
	function maintain_edit($id)
	{
			
			$this->form_validation->set_rules('maintain_name',  'ชื่องานซ่อม', 'trim|required');
			$this->form_validation->set_rules('remark',  '', 'trim');
			$this->form_validation->set_rules('category_id',  'หมวด', 'trim|required');
			
			
			$this->db->where("maintain_id",$id);
			if ($this->form_validation->run() == FALSE)
			{
				$rows = $this->db->get("maintain")->result_array();
				$data["row"] = $rows[0];
				$this->template->load('admin/themes',"admin/maintain_edit",$data);
			}
			else
			{ 	
				$this->db->update("maintain",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/maintains', 'location');
				
			}
	}
function maintain_delete($id)
	{
			
			$this->form_validation->set_rules('maintain_id',  '', 'trim');
			
			
			
			$this->db->where("maintain_id",$id);
			if ($this->form_validation->run() == FALSE)
			{
				$rows = $this->db->get("maintain")->result_array();
				$data["row"] = $rows[0];
				$this->template->load('admin/themes',"admin/maintain_delete",$data);
			}
			else
			{ 	
				$this->db->delete("maintain");
				$this->user->set_message("","ลบรียบร้อยแล้ว","success");
				
				redirect('admin/maintains', 'location');
				
			}
	}
	function maintains()
	{
		$header =
		 array( 
			  array("class"=>"left width200","name"=>"category_name","label"=>"ชื่อหมวด"),
			  array("class"=>"left","name"=>"maintain_name","label"=>"งานซ่อม"),
			  array("class"=>"left","name"=>"remark","label"=>"หมายเหตุ"),
			  array("class"=>"center edit","name"=>"maintain_id","label"=>"แก้ไข"),
			  array("class"=>"center delete","name"=>"maintain_id","label"=>"ลบ")
	 			);
		$rows = $this->db->query("select * from maintain m left join material_categories c on c.category_id = m.category_id")->result_array();
		$data["header"] = $header; 
		$data["rows"] = $rows;
		$this->template->load('admin/themes',"admin/maintains",$data);
	}
	function budgets()
	{
		$header =
		 array( 
			  array("class"=>"left width200","name"=>"budget_name","label"=>"ชื่องบประมาณ"),
			  array("class"=>"left","name"=>"year","label"=>"ปีการศึกษา"),
			  array("class"=>"center edit","name"=>"budget_id","label"=>"แก้ไข"),
			  array("class"=>"center delete","name"=>"budget_id","label"=>"ลบ")
	 			);
		$rows = $this->db->query("select * from budgets")->result_array();
		$data["header"] = $header; 
		$data["rows"] = $rows;
		$this->template->load('admin/themes',"admin/budget",$data);
	}
	function budget_add()
	{
			
			$this->form_validation->set_rules('budget_name',  'ชื่อชนิดงบประมาณ', 'trim|required');
			$this->form_validation->set_rules('year',  'ปีการศึกษา', 'trim|required');
			
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',"admin/budget_add",null);
			}
			else
			{ 	
				$this->db->insert("budgets",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
				
				redirect('admin/budgets', 'location');
				
			}
	}
	function budget_edit($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('budget_name',  'ชื่อชนิดงบประมาณ', 'trim|required');
			$this->form_validation->set_rules('year',  'ปีการศึกษา', 'trim|required');
			
			
			$this->db->where("budget_id",$id);
			
				if ($this->form_validation->run() == FALSE)
				{
					$rows = $this->db->get("budgets")->result_array();
					$data["row"] = $rows[0];
					$this->template->load('admin/themes',"admin/budget_edit",$data);
				}
				else
				{ 	
					$this->db->insert("budgets",$_POST);
					$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
					
					redirect('admin/budgets', 'location');
					
				}
	}
	function budget_delete($id)
	{
		
	}
	
	function company()
	{

		$header =
		 array( 
			  array("class"=>"left width200","name"=>"company_name","label"=>"ชื่อบริษัท"),
			  array("class"=>"left","name"=>"address","label"=>"ที่อยู่"),
			  array("class"=>"center edit","name"=>"company_id","label"=>"แก้ไข"),
			  array("class"=>"center delete","name"=>"company_id","label"=>"ลบ")
	 			);
		$rows = $this->db->query("select * from company")->result_array();
		$data["header"] = $header; 
		$data["rows"] = $rows;
		$this->template->load('admin/themes',"admin/company",$data);
	}
	function company_add()
	{
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		$this->form_validation->set_rules('company_name',  'ชื่อบรริษัท', 'trim|required');
		$this->form_validation->set_rules('address',  '', 'trim');
		$this->form_validation->set_rules('tel',  '', 'trim');
		$this->form_validation->set_rules('fax',  '', 'trim');
		$this->form_validation->set_rules('email',  '', 'trim');
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('admin/themes',"admin/company_add",null);
		}
		else
		{ 	
			$this->db->insert("company",$_POST);
			$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
			
			redirect('admin/company', 'location');
			
		}
	}
	function company_edit($id)
	{
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		$this->form_validation->set_rules('company_name',  'ชื่อบริษัท', 'trim|required');
		$this->form_validation->set_rules('address',  '', 'trim');
		$this->form_validation->set_rules('tel',  '', 'trim');
		$this->form_validation->set_rules('fax',  '', 'trim');
		$this->form_validation->set_rules('email',  '', 'trim');
		
		
		$this->db->where("company_id",$id);
		if ($this->form_validation->run() == FALSE)
		{
			$rows = $this->db->get("company")->result_array();
			$data["row"] = $rows[0];
			$this->template->load('admin/themes',"admin/company_edit",$data);
		}
		else
		{ 	
			
			$this->db->update("company",$_POST);
			
			$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");
			
			redirect('admin/company', 'location');
			
		}
	}
	function compay_delete($id)
	{
		
	}
	function file_filter()
	{
		$id = $_POST["file_category_id"];
		$filter = $this->session->userdata("filter");
		$filter["file_category_id"] = $id;
		
		
		$this->session->set_userdata("filter",$filter);
		redirect('admin/files', 'location');
	}
	function files($offset = 0 )
	{
		$filter = $this->session->userdata("filter");
		$condition = "";
		if($filter["file_category_id"])
		{
			$condition = " and f.file_category_id = ".$filter["file_category_id"];
		
		}
		$sql = "select * from files f left join  file_cats c on f.file_category_id = c.file_category_id   where 1 $condition order by file_id desc "; 
		$base = "admin/filse";
		
		$this->_page_query($sql,$base,"admin/files",$offset,array(),true,50);
		
		
		//$this->template->load('admin/themes',$this->user->current_controller(),null);
	}
	function file_add()
	{
		
		
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
			
		 	
			$this->template->load('admin/themes',$this->user->current_controller(),$data);
		}
		else
		{
			
			
			$upload_data =  $this->upload->data();
			$values = array();
			$values["file_name"] = $upload_data["file_name"];
			$values["detail"] = $_POST["detail"];
			$values["file_category_id"] = $_POST["file_category_id"];
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
		
			redirect('admin/files', 'location');
			
		}
				
				
			
		

		
		
	}
	
	function file_delete($id)
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('file_id',  '', 'trim|required');
			
			
			$data['file'] = $this->db->query("select * from files where file_id =$id")->result_array();
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',$this->user->current_controller(),$data);
			}
			else
			{ 	$this->load->helper('file');
				$path = "./uploads/".$data["file"][0]["file_name"];
				
				 @unlink($path);
				$this->db->where('file_id', $id);
				$this->db->delete('files');
				$this->user->set_message("","ลบเรียบร้อยแล้ว","success");	
				$this->fs->save_log();	
				redirect('admin/files', 'location');
				
			}
	}
	function  promotions()
	{
		$this->template->load('admin/themes',$this->user->current_controller(),null);
	}
	function users()
	{
		$this->template->load('admin/themes',"admin/users",null);
	}
	function setting()
	{
		$this->template->load('admin/themes',"admin/users",null);
	}
	function front()
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('home_bottom_bar_th',  '', 'trim');
			$this->form_validation->set_rules('home_bottom_bar_th', '', 'trim');
			$this->form_validation->set_rules('carpark_flash',  '', 'trim');
			$this->form_validation->set_rules('access_control', '','trim');
			$this->form_validation->set_rules('home_auto_mation',  '', 'trim');
			$this->form_validation->set_rules('home_bottom_bar_th', '','trim');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',$this->user->current_controller(),null);
			}
			else
			{ 	
				
				foreach($_POST as $key => $row)
				{
					$this->db->where("option_name",$key);
					$this->db->update("options",array( "option_value" =>$row ));
					$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
					
				}
				redirect('admin/front', 'location');
				//print_r($_POST);
				//$this->db->insert("material_categories",$_POST);
				//$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				//redirect('admin/categories', 'location');
				
			}
			
		
	}
	function promotion_add()
	{
	$this->template->load('admin/themes',"admin/dashboard",null);
	}
	function downloads($offset = 0)
	{
		
		$sql = "select * from downloads"; 
		$base = "admin/download";
		
		$this->_page_query($sql,$base,"admin/downloads",$offset,array(),true,50);
	}
	function pages()
	{
		$this->template->load('admin/themes',$this->user->current_controller(),null);
	}
	function page_edit($id)
	{
	$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  '', 'trim|required');
			$this->form_validation->set_rules('keyword', '', 'trim');
			$this->form_validation->set_rules('is_publish', '', 'trim');
			$this->form_validation->set_rules('body_th',  '', 'trim');
			$this->form_validation->set_rules('body_en', '', 'trim');
			$this->form_validation->set_rules('title_th', '', 'trim');
			$this->form_validation->set_rules('title_en', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('is_publish', '', 'trim');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->db->where("page_id" , $id);
				$data["page"] =  $this->db->get("pages")->result_array();
				$this->template->load('admin/themes',$this->user->current_controller(),$data);
			}
			else
			{ 	
				$this->db->where("page_id" , $id);
				$this->db->update("pages",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				redirect('admin/pages', 'location');
				
			}
	
	}
	function page_add()
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  '', 'trim|required');
			$this->form_validation->set_rules('keyword', '', 'trim');
			$this->form_validation->set_rules('is_publish', '', 'trim');
			$this->form_validation->set_rules('body_th',  '', 'trim');
			$this->form_validation->set_rules('body_en', '', 'trim');
			$this->form_validation->set_rules('title_th', '', 'trim');
			$this->form_validation->set_rules('title_en', '', 'trim');
			$this->form_validation->set_rules('thumbnail', '', 'trim');
			$this->form_validation->set_rules('is_publish', '', 'trim');
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('admin/themes',$this->user->current_controller(),null);
			}
			else
			{ 	
				
				$this->db->insert("pages",$_POST);
				$this->user->set_message("","บันทึกเรียบร้อยแล้ว","success");	
				redirect('admin/pages', 'location');
				
			}
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */