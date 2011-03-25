    <h1>Download</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/download_delete/".$row[0]['download_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="download_id" value="<?php echo $row[0]["download_id"] ?>" />
          <legend>ยืนยันการลบ</legend>
          <p class="submit"><input type="submit" value="ลบ"><button onclick="window.location='<?php echo site_url("admin/download/".$row[0]['download_id']); ?>'" >ยกเลิก</button></p>
		  </fieldset>
       
  </form>
   