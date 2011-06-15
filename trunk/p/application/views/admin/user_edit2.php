<h1>ข้อมูลส่วนตัว</h1>
      <?php echo $this->user->messages(); ?>
		 <?php form_head("admin/user_edit2/","แก้ไข") ?>
		 

           
		 

          <?php text_field("firstname","ชื่อจริง",$row,0,"even"); ?>
          <?php text_field("lastname","นามสกุล",$row,1); ?>
          <?php text_field("email","อีเมล์",$row,1,"even"); ?>
           <?php text_field("tel","เบอร์โทร",$row,1); ?>
          <?php text_field("position","ตำแหน่ง",$row,1,"even"); ?>

	
	 <?php form_footer(); ?>
	
   