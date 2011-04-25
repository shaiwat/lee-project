 <h1>ชนิดงานซ่อม</h1>

		  <?php form_head("admin/maintain_edit/".$row["maintain_id"],"เพิ่มชนิดงานซ่อมใหม่") ?>
		        	<?php 
		 $rows =  $this->db->get("material_categories")->result_array();
		 select_field("category_id","หมวด",$rows,"category_name",$row["category_id"],1); 
		 ?>
          <?php text_field("maintain_name","ชื่องานซ่อมใหม่",$row,1); ?>
           <?php area_field("remark","หมายเหตุ",$row,1); ?>
         
          <?php form_footer(); ?>
          
		
         
		


   