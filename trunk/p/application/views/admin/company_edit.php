
        <h1>บริษัท</h1>

		  <?php form_head("admin/company_edit/".$row["company_id"],"แก้ไขบริษัท") ?>
          <?php text_field("company_name","ชื่อบริษัท",$row,1); ?>
          <?php text_field("tel","เบอร์โทร",$row,1); ?>
          <?php text_field("fax","เบอร์FAx",$row,1); ?>
          <?php text_field("email","อีเมล์",$row,1); ?>
          <?php area_field("address","ที่อยู่",$row,1); ?>
          <?php form_footer(); ?>
          
		
         
		


   