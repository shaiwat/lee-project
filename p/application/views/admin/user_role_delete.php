    <h1>กลุ่มผู้ใช้งาน</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/role_delete/".$role['role_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="role_id" value="<?php echo $role["role_id"] ?>" />
          <legend>ยืนยันการลบผู้กลุ่มผู้ใช้งาน</legend>
          <p >  <input class="submit" type="submit" value="ลบ"></p>
		  </fieldset>
       
  </form>
   <button onclick="window.location='<?php echo site_url("admin/user_roles/"); ?>'" >ยกเลิก</button>