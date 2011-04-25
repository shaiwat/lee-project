
        <h1>ชนิดงานซ่อม</h1>

		  <?php form_head("admin/maintain_add","เพิ่มชนิดงานซ่อมใหม่") ?>
		        	<?php 
		 $rows =  $this->db->get("material_categories")->result_array();
		 select_field("category_id","หมวด",$rows,"category_name",null,1); 
		 ?>
          <?php text_field("maintain_name","ชื่องานซ่อมใหม่",null,1); ?>
           <?php area_field("remark","หมายเหตุ",null,1); ?>
         
          <?php form_footer(); ?>
          
		
         
		


   