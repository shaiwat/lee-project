
        <h1>บริษัท</h1>

		  <?php form_head("admin/company_add","เพิ่มบริษัทใหม่") ?>
          <?php text_field("company_name","ชื่อบริษัท",null,1); ?>
          <?php text_field("tel","เบอร์โทร",null,1); ?>
          <?php text_field("fax","เบอร์FAx",null,1); ?>
          <?php text_field("email","อีเมล์",null,1); ?>
          <?php area_field("address","ที่อยู่",null,1); ?>
          <?php form_footer(); ?>
          
		
         
		


   