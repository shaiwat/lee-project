  <h1>บันทึกงานซ่อมใหม่</h1>

   
    

		  <?php form_head("admin/m_maintain_add/".$row["material_id"],"บันทึกรายละเอียดงานซ่อมใหม่ ของ รหัสอ้างอิง " . $row["ref_code"]." ".$row["name"]); ?>
         <?php $mtypes =  $this->db->query("select * from maintain where category_id  =  ".$row["category_id"])->result_array();
				select_field("maintain_id", "ชนิดงานซ่อม", $mtypes, "maintain_name", null);
         ?>
          <?php text_field("maintain_date","วันทีซ่อม",null,1,"date"); ?>
             	<?php 
		 $rows =  $this->db->query("select company_id,concat(company_name,':',address)as company_name from company")->result_array();
		 select_field("company_id","บริษัทที่ซ่อมแซม",$rows,"company_name",null,0); 
		 ?>
		 <?php text_field("price","ราคาซ่อม",null,1); ?>
		  <?php text_field("responsible","เจ้าหน้าที่รับผิดชอบ",null,1); ?>
          <?php area_field("remark", "รายละเอียดงานซ่อม", null) ?>
          
         
          <?php form_footer(); ?>
          