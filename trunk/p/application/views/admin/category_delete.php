    <h1>หมวดหสินค้า</h1>

 <form class="form" method="post" action="<?php echo site_url("admin/category_delete/".$cat[0]['category_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="category_id" value="<?php echo $cat[0]["category_id"] ?>" />
          <legend>ยืนยันการลบหมวดสินค้า</legend>
          <p class="submit"><input type="submit" value="ลบ"><button onclick="window.location='<?php echo site_url("admin/category_edit/".$cat[0]['category_id']); ?>'" >ยกเลิก</button></p>
		  </fieldset>
       
  </form>
