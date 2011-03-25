    <h1>จัดการไฟล์</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/file_delete/".$file[0]['file_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="file_id" value="<?php echo $file[0]["file_id"] ?>" />
          <legend>ยืนยันการลบไฟล์</legend>
          <p class="submit"><input type="submit" value="ลบ"><button onclick="window.location='<?php echo site_url("admin/files/"); ?>'" >ยกเลิก</button></p>
		  </fieldset>
       
  </form>
   