
        <h1>จัดการไฟล์</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/file_add");   ?>" enctype='multipart/form-data' >
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
       <?php if(isset($error["error"])){ echo $error["error"];}; ?>
        <fieldset>
        
          <legend>เพิ่มไฟร์ใหม่</legend>
          <div class="field"  >
          <label for="">ไฟล์:</label><br>
         
		 <input type="file"    name="file_field" value="<?php //echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		
		<div style="crener"></div>
		 <div class="field"  >
		  <label for="firstname">อธิบายรายละเอียด</label><br>
         
		 <input type="text"  name="detail"  value="<?php echo set_value("pcat_name_en",""); ?>" /><br>
		 </div>
		   <div class="field" >
           <label >หมวดไฟล์:</label><br>
		<select   name="file_cat_id">
			<?php $file_cats = $this->db->get("file_cats")->result_array();
			foreach($file_cats as $row)
			{
			?>
			<option value="<?php echo $row['file_cat_id'] ?>" ><?php echo  $row['file_cat_name']; ?></option>
			<?php 
			}
			?>
		</select>
		 </div>
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>
        <?php print_r(time()); ?>
    <script type="text/javascript">
$(document).ready(function() {

	var is_publish = '<?php echo set_value("is_publish",0); ?>';
	$("#is_publish option[value="+is_publish+"]").attr('selected', 'selected');




});



</script>
   
      

   