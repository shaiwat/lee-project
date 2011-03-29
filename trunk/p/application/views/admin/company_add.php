
        <h1>บริษัท</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/category_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มชื่อบริษัทใหม่</legend>
          <div class="field">
          <label for="product_name_th">ชื่อบริษัท:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		    <div class="field">
          <label for="product_name_th">เบอร์โทร:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		  
		    <div class="field">
          <label for="product_name_th">เบอร์FAX:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		    <div class="field">
          <label for="product_name_th">อีเมล์:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		   <div class="text">
		 <label >ที่อยู่:</label><br>

<textarea name="detail" style="height:120px;width: 500px;"><?php echo set_value("detail_th"); ?></textarea>
		 </div>
		  
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

      

   