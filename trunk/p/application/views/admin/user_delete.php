    <h1>ผู้ใช้งาน</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/user_delete/".$user[0]['user_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="cat_id" value="<?php echo $user[0]["user_id"] ?>" />
          <legend>ยืนยันการลบผู้ใช้งาน</legend>
          <p >  <input class="submit" type="submit" value="ลบ"></p>
		  </fieldset>
       
  </form>
   <button onclick="window.location='<?php echo site_url("admin/user_edit/".$user[0]['user_id']); ?>'" >ยกเลิก</button>