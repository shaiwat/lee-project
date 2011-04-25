 <h1>ชนิดงานซ่อม</h1>

		  <?php form_head("admin/maintain_delete/".$row["maintain_id"],"ลบ"); ?>
	
	<?php echo $row["maintain_name"]; ?>
          <input type="hidden"" name="maintain_id" value="<?php echo $row["maintain_id"]; ?>" />
         
          <?php form_footer("ยืนยันการลบข้อมูล"); ?>
          
		
         
		


   