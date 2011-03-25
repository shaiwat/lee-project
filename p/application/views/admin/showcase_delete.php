    <h1>ผลงาน</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/showcase_delete/".$showcase[0]['showcase_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="showcase_id" value="<?php echo $showcase[0]['showcase_id']; ?>" />
          <legend>ยืนยันการผลงาน</legend>
          <p class="submit"><input type="submit" value="ลบ"><button onclick="window.location='<?php echo site_url("admin/category_edit/".$showcase[0]['showcase_id']); ?>'" >ยกเลิก</button></p>
		  </fieldset>
       
  </form>
   