
        <h1>สินค้าของเรา</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/category_edit/".$cat[0]['cat_id']);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหมวดสินค้าเดิม</legend>
          <div class="field">
          <label for="product_name_th">ชื่อหมวดสินค้า (ภาษาไทย):</label><br>
         
		 <input type="text" name="pcat_name_th" value="<?php echo set_value("pcat_name_th",$cat[0]['pcat_name_th']); ?>"><br>
		 </div>
		 <div class="field">
		  <label for="firstname">ชื่อหมวดสินค้า (English):</label><br>
         
		 <input type="text" name="pcat_name_en"  value="<?php echo set_value("pcat_name_en",$cat[0]['pcat_name_en']); ?>" /><br>
		 </div>
		
		  <div class="field">
           <label >แสดงบนหน้าเวบ:</label><br>
		<select id="is_publish" name="is_publish">
			<option value="1">Publish</option>
			<option value="0">Private</option>
		</select>
		 </div>
		  <div class="cleaner"></div>
		
		   <div class="field">
           <label>Thumbnail:</label><br>
		 <input type="text" name="thumbnail" value="<?php echo set_value("thumnail",$cat[0]["thumbnail"]); ?>" /> <br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
           <label>Banner:</label><br>
		 <input type="text" name="banner" value="<?php echo set_value("banner",$cat[0]["banner"]); ?>" /> <br>
		 </div>
		  <div class="cleaner"></div>
		  		   <div class="field">
		     <label>Email:</label><br>
		 <input type="text" name="email" value="<?php echo set_value("email",$cat[0]["email"]); ?>" /> <br>
		 </div>
		  <div class="cleaner"></div>
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก">
          <a style="padding-left: 25px;" href="<?php echo site_url("admin/category_delete/".$cat[0]['cat_id']) ?>">ลบ</a>
        </p>
        </form>
        
<script type="text/javascript">
$(document).ready(function() {

	var is_publish = '<?php echo set_value("is_publish",$cat[0]["is_publish"]); ?>';
	$("#is_publish option[value="+is_publish+"]").attr('selected', 'selected');




});



</script>
   