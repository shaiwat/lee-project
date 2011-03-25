<?php

class front extends Controller {

	function front()
	{
		parent::Controller();	
		date_default_timezone_set('Asia/Bangkok');
		$this->load->library('user_agent');
		//$this->output->enable_profiler(TRUE);
	}
	function carpark()
	{
	$data["html"] = $this->fs->get_option("page_carpark_th"); 
		$this->template->load("front/front_theme","front/page",$data);
	}
	function index()
	{
			//$this->template->load("front/front_theme","front/home");
			$this->load->view("front/home");
			// $this->input->ip_address();
			$this->fs->save_visitor();
	}
	function contact()
	{
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อผู้ติดต่อ', 'trim|required');
			$this->form_validation->set_rules('company',  'บริษัท', 'trim');
			$this->form_validation->set_rules('email',  'อีเมล์ของคุณ', 'trim|required');
			$this->form_validation->set_rules('tel',  'เบอร์โทร', 'trim|required');
			$this->form_validation->set_rules('ctype_id',  '', 'trim|required');
			$this->form_validation->set_rules('message',  'รายละเอียดข้อความ', 'trim|required');
			
			
		
			if ($this->form_validation->run() == FALSE)
			{
				
				
			}
			else
			{ 	
 				 
				$name = $_POST['name'];
				$company = $_POST["company"];
				$email = $_POST["email"];
				$tel = $_POST["tel"];
				$ctype_id = $_POST["ctype_id"];
			
				$message = $_POST["message"];
				$sql  ="insert into contact_messages ( name,company,email,tel,ctype_id,message,mdate) values
				('$name','$company','$email','$tel',$ctype_id,'$message',now())
				";
				$result = $this->db->query($sql);
				
				if($result)
				{
				$this->user->set_message("","ส่งข้อความของท่านเรียบร้อยแล้ว","success");	
				redirect('front/contact', 'location'); 		
				}
				
		    }
		
		$this->template->load("front/front_theme","front/contact");
	}
	function showcase($offset = 0)
	{
		$sql = "select * from showcases"; 
		$base = "admin/showcase";
		
		$this->_page_query($sql,$base,"front/showcase",$offset,array(),true,50);
	}
	function showcase_detail($id = 0)
	{
		
		$this->db->where("showcase_id",$id);
		$data["row"] = $this->db->get("showcases")->result_array();
		$this->template->load("front/front_theme","front/showcase_detail",$data);
		
	}
	function about()
	{
		$data["html"] = $this->fs->get_option("page_about_th"); 
		$this->template->load("front/front_theme","front/page",$data);
	}
	function set_cat($id)
	{
		 $this->session->set_userdata('cat_id',$id );
		 redirect("front/product", 'location');
	}
	function product($offset=0)
	{
		$condition = "";
		$base  ="front/product/";
		if($id = $this->session->userdata("cat_id"))
		{
			$condition = " and p.cat_id = $id";
			
		}
		
		
		$sql ="select * from products p left join product_categories c on c.cat_id = p.cat_id  where p.is_publish = 1 $condition ";
		$this->_page_query($sql,$base,"front/products",$offset,array(),$show =true,$limit = 9);
		
		//$data["products"]= $this->db->query("select * from products p left join product_categories c on c.cat_id = p.cat_id  where p.is_publish = 1 $condition ")->result_array();
		//$this->template->load("front/front_theme","front/products",$data);
	}
	function product_detail($id)
	{
		
			$this->form_validation->set_message('required', 'กรุณาระบุ %s');
			$this->form_validation->set_rules('name',  'ชื่อผู้ติดต่อ', 'trim|required');
			$this->form_validation->set_rules('company',  'บริษัท', 'trim');
			$this->form_validation->set_rules('email',  'อีเมล์ของคุณ', 'trim|required');
			$this->form_validation->set_rules('tel',  'เบอร์โทร', 'trim|required');
			//$this->form_validation->set_rules('ctype_id',  '', 'trim|required');
			$this->form_validation->set_rules('message',  'รายละเอียดข้อความ', 'trim|required');
			
			
		
			if ($this->form_validation->run() == FALSE)
			{
				
				
			}
			else
			{ 	
 				 
				$name = $_POST['name'];
				$company = $_POST["company"];
				$email = $_POST["email"];
				$tel = $_POST["tel"];
				$ctype_id = 2;
				$product_id = $_POST["product_id"];
			
				$message = $_POST["message"];
				$sql  ="insert into contact_messages ( name,company,email,tel,ctype_id,message,mdate,product_id) values
				('$name','$company','$email','$tel',$ctype_id,'$message',now(),$product_id)
				";
				$result = $this->db->query($sql);
				
				if($result)
				{
				$this->user->set_message("","ส่งข้อความของท่านเรียบร้อยแล้ว","success");	
				redirect('front/product_detail/'.$id, 'location'); 		
				}
				
		    }
		
		
		$data["product"]= $this->db->query("select * from products p left join product_categories c on c.cat_id = p.cat_id  where 1 and product_id = $id ")->result_array();
		$this->template->load("front/front_theme","front/product_detail",$data);
	}
	
	function download($offset=0)
	{
		$sql = "select * from downloads"; 
		$base = "admin/download";
		
		$this->_page_query($sql,$base,"front/download",$offset,array(),true,10);
	}
	function career()
	{
		$data["html"] = $this->fs->get_option("page_career_th"); 
		$this->template->load("front/front_theme","front/page",$data);
	}
	function service() 
	{
		$this->template->load("front/front_theme","front/page");
	}
	function faq()
	{
		$data["html"] = $this->fs->get_option("page_faq_th"); 
		$this->template->load("front/front_theme","front/page",$data);
	}
	function page($name="")
	{
		
			$this->db->where("name",$name);
			$data["page"] = $this->db->get("pages")->result_array();
			
			$this->template->load('front/front_theme',"front/page2",$data);
		
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
		$this->template->load("front/front_theme",$view,$data);
		}else
		{
			return $data;
		}
		
	}
		
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */