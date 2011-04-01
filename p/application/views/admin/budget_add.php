
        <h1>ชนิดงบประมาณ</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/budget_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มชนิดงบประมาณ</legend>
          <div class="field">
          <label for="product_name_th">ชื่อ:</label><br>
         
		 <input type="text" name="budget_name" value="<?php echo set_value("budget_name",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		   <div class="field">
          <label for="product_name_th">ปีการศึกษา:</label><br>
         
		 <input type="text" name="year" value="<?php echo set_value("year",""); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

      

   