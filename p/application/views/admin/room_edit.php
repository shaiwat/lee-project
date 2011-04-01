
        <h1>ห้องหรือสถานที่</h1>

   
    

		  <?php form_head("admin/room_edit/".$row["place_id"],"แก้ไขห้องหรือสถานที่ใหม่") ?>
          <?php text_field("place_name","ชื่อห้อง/สถานที่",$row,1); ?>
         
         
          <?php form_footer(); ?>
          