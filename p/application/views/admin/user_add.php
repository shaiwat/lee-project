
        <h1>ผู้ใช้งาน</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/user_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มใช้งานใหม่</legend>
          <div class="field">
          <label >Username:</label><br>
         
		 <input type="text" name="username" value="<?php echo set_value("username",""); ?>"><br>
		 </div>
		 <div class="field">
		  <label for="firstname">Password:</label><br>
         
		 <input type="text" name="password"  value="<?php echo set_value("password",""); ?>" /><br>
		 </div>
		   <div class="cleaner"></div>
		<div class="field">
          <label >ชือ:</label><br>
         
		 <input type="text" name="firstname" value="<?php echo set_value("firstname",""); ?>"><br>
		 </div>
		 
		 <div class="field">
		  <label for="firstname">นามสกุล:</label><br>
         
		 <input type="text" name="lastname"  value="<?php echo set_value("lastname",""); ?>" /><br>
		 </div>
		 
		  <div class="field">
		  
          <label >Email:</label><br>
         
		 <input type="text" name="email" value="<?php echo set_value("email",""); ?>"><br>
		 </div>
		   <div class="cleaner"></div>
		 <div class="field">
		 
		  <label for="firstname">Position:</label><br>
         
		 <input type="text" name="position"  value="<?php echo set_value("position",""); ?>" /><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		  
           <label > Role:</label><br>
		<select id="role_id" name="role_id">
			<option value="1">Admin</option>
			<option value="2">Editor</option>
		</select>
		
		 </div>
		  <div class="cleaner"></div>
		
		  
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>
    <script type="text/javascript">
$(document).ready(function() {

	var role_id = '<?php echo set_value("role_id",0); ?>';
	$("#role_id option[value="+role_id+"]").attr('selected', 'selected');




});



</script>
   
      

   