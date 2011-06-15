<h1>บริษัท/ห้างร้าน</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/company_delete/".$row['company_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="company_id" value="<?php echo $row["company_id"]; ?>" />
          <legend>ยืนยันการลบ</legend>
         <input class="submit" type="submit" value="ลบ">
		  </fieldset>
       
  </form>
  