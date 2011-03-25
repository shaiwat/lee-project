    <h1>สินค้าของเรา</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/product_delete/".$product[0]['product_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
         <input type="hidden" name="product_id" value="<?php echo $product[0]["product_id"] ?>" />
          <legend>ยืนยันการลบสินค้า</legend>
          <p class="submit"><input type="submit" value="ลบ"><button onclick="window.location='<?php echo site_url("admin/product_edit/".$product[0]['product_id']); ?>'" >ยกเลิก</button></p>
		  </fieldset>
       
        </form>
   