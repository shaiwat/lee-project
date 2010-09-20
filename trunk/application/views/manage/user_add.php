<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">เพิ่มผู้ใช้งานใหม่</a></li>
		
		
	</ul>
	<div id="tabs-1">

<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/user_add"); ?>">
    <div class="field">ชื่อ*<br>
         <input type="text"  name="firstname" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	<div class="field">นามสกุล*<br>
         <input type="text"  name="lastname" value="<?php echo set_value('lastname'); ?>" class="textfield">
	</div>
	<div class="field">ตำแหน่ง<br>
         <input type="text"  name="position" value="<?php echo set_value('position'); ?>" class="textfield">
	</div>
       <div class="field">อีเมล์*<br>
         <input type="text"  name="email"  value="<?php echo set_value('email'); ?>" class="textfield">
     </div>
      
      <div class="field">ชื่อผู้ใช้งาน *<br>
         <input type="text"  name="username" value="<?php echo set_value('username'); ?>" class="textfield">
	</div>
	<div class="field">รหัสผ่าน*<br>
         <input type="password"  name="password" value="<?php echo set_value('password'); ?>" class="textfield">
	</div>
	<div class="field">ยืนยันรหัสผ่าน*<br>
         <input type="password"  name="password2" value="<?php echo set_value('password2'); ?>" class="textfield">
	</div>
	<div class="field">ชนิดผู้ใช้งาน*<br>
 
                  <select   class="listfield" name="role_id" >
                    <option value="">โปรดเลือก</option>
                   	<?php 	foreach($roles as $row){ ?>
                    <option value="<?php echo $row['role_id']; ?>" <?php echo $this->validation->set_select('role_id',$row['role_id']   ); ?>><?php echo $row['role_tname']; ?></option>
                   <?php } ?>
                  </select>
               
	</div>
     <div style="clear:both;"></div>

     <div style="clear:both;"></div>
      <div class="field"><br>
     <input  type="submit" value="บันทึก" />
        </div>
</form>
<div style="height:200px;">
</div>
 </div>
    
     
     
     </div>
