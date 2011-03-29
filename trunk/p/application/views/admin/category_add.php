
        <h1>หมวดวัสดุครุภณฑ์</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/category_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มหมวดวัสดุครุภณฑ์ใหม่</legend>
          <div class="field">
          <label for="product_name_th">ชื่อหมวด:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

      

   