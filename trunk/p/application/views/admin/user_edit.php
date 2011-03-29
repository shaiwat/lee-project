
        <h1>ผู้ใช้งาน</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/user_edit/".$user[0]["user_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขงานใหม่</legend>
          <div class="field">
          <label >ชื่อผู้ใช้งาน:</label><br>
         
		 <input type="text" name="username" value="<?php echo set_value("username",$user[0]["username"]); ?>"><br>
		 </div>
		 
		   <div class="cleaner"></div>
		<div class="field">
          <label >ชือ:</label><br>
         
		 <input type="text" name="firstname" value="<?php echo set_value("firstname",$user[0]["firstname"]); ?>"><br>
		 </div>
		 
		 <div class="field">
		  <label for="firstname">นามสกุล:</label><br>
         
		 <input type="text" name="lastname"  value="<?php echo set_value("lastname",$user[0]["lastname"]); ?>" /><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		  
          <label >อีเมล์:</label><br>
         
		 <input type="text" name="email" value="<?php echo set_value("email",$user[0]["email"]); ?>"><br>
		 </div>
		   <div class="cleaner"></div>
		    <div class="field">
		   <label >เบอร์โทร:</label><br>
         
		 <input type="text" name="tel" value="<?php echo set_value("tel",$user[0]["tel"]); ?>"><br>
		 </div>
		   <div class="cleaner"></div>
		 <div class="field">
		 
		  <label for="firstname">ตำแหน่ง:</label><br>
         
		 <input type="text" name="position"  value="<?php echo set_value("position",$user[0]["position"]); ?>" /><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		  
            <label > ระดับการใช้งาน:</label><br>
           <?php $roles =  $this->db->get("roles")->result_array(); ?>
		<select id="role_id" name="role_id">
		<?php foreach ($roles as $row){ ?>
			<option value="<?php echo $row["role_id"] ?>"><?php echo $row["role_name"]; ?></option>
		<?php } ?>
		</select>
		
		 </div>
		  <div class="cleaner"></div>
		
		  
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"> <a href="<?php echo site_url("admin/user_delete/".$user[0]["user_id"]); ?>">ลบ </a></p>
        </form>
    <script type="text/javascript">
$(document).ready(function() {

	var role_id = '<?php echo set_value("role_id",$user[0]["role_id"]); ?>';
	$("#role_id option[value="+role_id+"]").attr('selected', 'selected');




});



</script>
   
      

   