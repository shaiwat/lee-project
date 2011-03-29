
        <h1>หมวดวัสดุครุภณฑ์</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/category_edit/".$row[0]["category_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มหมวดวัสดุครุภัณฑ์ใหม่</legend>
          <div class="field">
          <label for="product_name_th">ชื่อหมวด:</label><br>
         
		 <input type="text" name="category_name" value="<?php echo set_value("category_name",$row[0]["category_name"]); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก">
           <a style="padding-left: 25px;" href="<?php echo site_url("admin/category_delete/".$row[0]['category_id']) ?>">ลบ</a></p>
        </form>

      

  