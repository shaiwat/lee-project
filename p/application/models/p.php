<?php 
	class p extends Model {

    
    function p()
    {
       
        parent::Model();
        
    }
	
	function get_thumbail($file)
	{
			if(!($file["thumbnail"]=="")){
			return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=200&h=150&zc=1" alt="" />';
			}
		
	}
	
	function maintain_history($id)
	{
		$header =
		 array( 
			 
			  array("class"=>"left","name"=>"year","label"=>"วันที่แจ้งซ่อม"),
			  array("class"=>"","name"=>"budget_id","label"=>"ชนิดงานซ่อม"),
			   array("class"=>"","name"=>"budget_id","label"=>"อาการชำรุด"),
			  array("class"=>"","name"=>"budget_id","label"=>"บริษัทผู้ซ่อมบำรุง"),
			  array("class"=>"","name"=>"budget_id","label"=>"ราคาซ่อม"),
			  array("class"=>"","name"=>"budget_id","label"=>"รับประกันงานซ่อม")
	 			);
		$rows = $this->db->query("select * from budgets")->result_array();
		$data["header"] = $header; 
		$data["rows"] = array();
		
		return $this->load->view("admin/history_list",$data,true);
	}
    function material_view($id)
    {
    	$sql ="SELECT
				materials.material_id,
				materials.`name`,
				materials.model,
				materials.`code`,
				materials.category_id,
				materials.type_id,
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
				company.company_name,
				company.address,
				company.tel,
				company.fax,
				place.place_name,
				material_categories.category_name,
				budgets.budget_name,
				budgets.`year`
				FROM
				materials
				left JOIN company ON materials.company_id = company.company_id
				left JOIN place ON materials.place_id = place.place_id
				left JOIN material_categories ON materials.category_id = material_categories.category_id
				left JOIN budgets ON materials.budget_id = budgets.budget_id
				 where material_id = $id";
    	
    	
    	$rows = $this->db->query($sql)->result_array();
    	
    	
    	
    	$data["rows"] = array(
    	 
    	array( "field"=>"ชื่อ:","detail"=>$rows[0]['name'] ),
    	array( "field"=>"เลขที่ครุภัณฑ์:","detail"=>$rows[0]["code"] ),
    	array( "field"=>"หมวด:","detail"=>$rows[0]["category_name"] ),
    	array( "field"=>"ยี้ห้อ:","detail"=>$rows[0]["brand"] ),
    	array( "field"=>"รุ่น:","detail"=>$rows[0]["model"] ),
    	array( "field"=>"วันที่ซื้อ:","detail"=>$rows[0]["buy_price"] ),
    	array( "field"=>"ราคาซื้อมา:","detail"=>$rows[0]["buy_date"] ),
    	array( "field"=>"การรับประกัน:","detail"=>$rows[0]["warranty"] ),
    	array( "field"=>"ซื่อจากบริษัท:","detail"=>$rows[0]["company_name"]." ".$rows[0]["address"] ." ".$rows[0]["tel"] ),
		array( "field"=>"รูป:","detail"=>$this->get_thumbail($rows[0]) ),
		array( "field"=>"แจ้งซ่อม:","detail"=>"<a href=".site_url("admin/maintain_add").">แจ้งซ่อม</a>" ),
		array( "field"=>"ประวัติงานซ่อม:","detail"=>$this->maintain_history($id["material_id"]) )
    	
    	
    	);
    	
    	
    	
    	$header =
		 array( 
			  array("class"=>"left width200","name"=>"field","label"=>"Field"),
			  array("class"=>"left","name"=>"detail","label"=>"รายละเอียด"),
			 
	 			);
		
		
	 	$data["header"] = $header; 
		
		
    	
    	
    	
    	return $this->load->view("admin/material_view",$data,true);
    	
    	
    	//$this->db->query()->result_array();
    	
	}
	function getcode()
	{
		
		
		
		$refcode = $this->db->query("select * from ref_code where ref_code = 'm'")->result_array();
		
		
		if($refcode)
		{	
			$this->db->query("update ref_code set ref_no = ref_no+1 where ref_code='m'");
			return date("y").str_pad($refcode[0]['ref_no'],6,0,STR_PAD_LEFT);
		}
	
	}
}