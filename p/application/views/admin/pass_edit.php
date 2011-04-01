
        <h1>ผู้ใช้งาน</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/pass_edit/".$user[0]["user_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขรหัสผ่าน</legend>
          <div class="field">
          <label >ชื่อผู้ใช้งาน:</label><br>
         
		 <input type="text" name="username" value="<?php echo set_value("username",$user[0]["username"]); ?>"><br>
		 </div>
		 
		   <div class="cleaner"></div>
	
		 
		
		 
		  <div class="cleaner"></div>
		<div class="field">
		  <label for="firstname">เปลียนรหัสผ่านใหม่:</label><br>
         
		 <input type="password"" name="password"  value="<?php echo set_value("password",""); ?>" /><br>
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
   
      

   