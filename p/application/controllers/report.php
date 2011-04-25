<?php 
class report extends Controller {

	function report()
	{
		parent::Controller();
		date_default_timezone_set ("Asia/Bangkok"); 	
		if(!$this->user->is_login())
		{
			redirect('login', 'location'); 
		}
		$this->form_validation->set_message('required', 'กรุณาระบุ %s');
		$this->form_validation->set_message('is_natural_no_zero', 'กรุณาระบุ %s');
		//$this->output->enable_profiler(TRUE);
	}
	function index($offset=0)
	{
		/*$filter = $this->session->userdata("filter");
		$condition ="";
		if($filter["category_id"])
		{
		$condition = " and p.category_id = ".$filter["category_id"];
		
		}*/
		$sql = "SELECT
materials.material_id,
materials.`name`,
materials.model,
materials.`code`,
materials.category_id,
materials.buy_date,
materials.buy_price,
materials.brand,
materials.warranty,
materials.detail,
materials.responsible,
materials.thumbnail,
materials.image2,
materials.create_date,
materials.last_modify,
materials.`year`,
materials.budget_id,
materials.place_id,
materials.company_id,
budgets.budget_name,
budgets.`year`,
company.company_name,
company.address,
company.tel,
place.place_name,
place.remark,
material_types.type_name,
material_categories.category_name
FROM
materials
LEFT JOIN budgets ON materials.budget_id = budgets.budget_id
LEFT JOIN company ON materials.company_id = company.company_id
left JOIN place ON materials.place_id = place.place_id
LEFT JOIN material_types ON materials.type_id = material_types.type_id
left JOIN material_categories ON materials.category_id = material_categories.category_id
		"; 
		$base = "report/index";
		
		$this->_page_query($sql,$base,"report/report",$offset,array(),true,50);
		
		
			
		
		
	}
	function report_filter()
	{
		
		
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
		$this->template->set("no_menu",1);
		$this->template->load("admin/themes",$view,$data);
		}else
		{
			return $data;
		}
		
	}
}
?>