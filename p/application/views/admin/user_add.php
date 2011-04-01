<h1>ผู้ใช้งาน</h1>
		 <?php form_head("admin/user_add/","เพิ่มผุ้ใช้งานใหม่") ?>
          <?php text_field("username","ชื่อผู้ใช้งาน",null,0); ?>
          <?php text_field("password","รหัสผ่าน",null,0); ?>
          <?php text_field("firstname","ชื่อจริง",null,0); ?>
          <?php text_field("lastname","นามสกุล",null,0); ?>
          <?php text_field("email","อีเมล์",null,0); ?>
           <?php text_field("tel","เบอร์โทร",null,1); ?>
          <?php text_field("position","ตำแหน่ง",null,0); ?>
		<?php 
		 $rows =  $this->db->get("roles")->result_array();
		 select_field("role_id","ชนิดผู้ใช้งาน",$rows,"role_name",null,0); 
		 ?>
		
	 <?php form_footer(); ?>
	
   