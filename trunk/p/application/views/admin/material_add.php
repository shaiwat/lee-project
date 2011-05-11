      <h1>ครุภัณฑ์</h1>



  <?php form_head("admin/material_add","เพิ่มครุภัณใหม่") ?>
          <?php text_field("name","ชื่อครุภัณฑ์",null,0); ?>
          <?php text_field("code","รหัสครุภัณ์",null,0); ?>
          <?php text_field("brand","ยี้ห้อ",null,1); ?>
          <?php text_field("buy_date","วันที่ซื้อ",null,0,"date"); ?>
          <?php text_field("model","รุ่น",null,0); ?>
          <?php text_field("buy_price","ราคาซื้อ",null,1); ?>
          <?php text_field("warranty","การรับประกัน",null,1,"width800"); ?>
         
         	<?php 
		 $rows =  $this->db->query("select budget_id, concat(budget_name,'-', year) as budget_name from budgets")->result_array();
		 select_field("budget_id","ชนิดงบประมาณ",$rows,"budget_name",null,0); 
		 ?>
		<?php 
		 $rows =  $this->db->get("place")->result_array();
		 select_field("place_id","ชือสถานที่ห้อง จัดสรร",$rows,"place_name",null,0); 
		 ?>
		
		      	<?php 
		 $rows =  $this->db->get("material_categories")->result_array();
		 select_field("category_id","หมวด",$rows,"category_name",null,1); 
		 ?>
		
		      	<?php 
		 $rows =  $this->db->query("select company_id,concat(company_name,':',address)as company_name from company")->result_array();
		 select_field("company_id","บริษัทที่ซื้อมา",$rows,"company_name",null,0); 
		 ?>
		  <?php text_field("responsible","เจ้าหน้าที่รับผิดชอบ",null,1); ?>
		 
		<?php area_field("detail","รายละเอียด",null,1,"width800 height100"); ?>
        <?php image_field("thumbnail","รูป",null,1); ?>  
		<?php form_footer(); ?>
          
          
    
      