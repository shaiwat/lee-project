
<div class="action-title">แก้ไขผู้ใช้งาน</div>
<br/>

<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/user_edit/".$users[0]['user_id']); ?>">
    <div class="field">ชื่อ*<br>
         <input type="text"  name="firstname" value="<?php echo set_value('firstname',$users[0]['firstname']); ?>"  class="textfield">
	</div>
	<div class="field">นามสกุล*<br>
         <input type="text"  name="lastname" value="<?php echo set_value('lastname',$users[0]['lastname']); ?>" class="textfield">
	</div>
	<div class="field">ตำแหน่ง<br>
         <input type="text"  name="position" value="<?php echo set_value('position',$users[0]['position']); ?>" class="textfield">
	</div>
       <div class="field">อีเมล์*<br>
         <input type="text"  name="email"  value="<?php echo set_value('email',$users[0]['email']); ?>" class="textfield">
     </div>
      
      <div class="field">ชื่อผู้ใช้งาน *<br>
         <input type="text"  name="username" value="<?php echo set_value('username',$users[0]['username']); ?>" class="textfield notfield">
	</div>
	
	<div class="field">ชนิดผู้ใช้งาน*<br>
 
                  <select id="role_id"   class="listfield" name="role_id" >
                    <option value="">โปรดเลือก</option>
                   	<?php 	foreach($roles as $row){ ?>
                    <option value="<?php echo $row['role_id']; ?>" <?php echo $this->validation->set_select('role_id',$row['role_id'] ); ?>><?php echo $row['role_tname']; ?></option>
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
<script type="text/javascript">

$(document).ready(function() {

    
    var role_id = <?php echo set_value("role_id",$users[0]['role_id']); ?>;
  

    $("#role_id option[value="+role_id+"]").attr('selected', 'selected');
   
    
  

});
</script>