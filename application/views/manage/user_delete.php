<div class="action-title">ยืนยันการลบผู้ใช้งาน</div>
<br/>

<form id="myform" method="post" action="<?php echo site_url("manage/user_delete/".$users[0]['user_id']); ?>">
    <div class="field">ชื่อ*<br>
         <input type="text"  name="firstname" value="<?php echo set_value('firstname',$users[0]['firstname']); ?>"  class="textfield notfield">
	</div>
	<div class="field">นามสกุล*<br>
         <input type="text"  name="lastname" value="<?php echo set_value('lastname',$users[0]['lastname']); ?>" class="textfield notfield">
	</div>
	
     
      
      <div class="field">ชื่อผู้ใช้งาน *<br>
         <input type="text"  name="username" value="<?php echo set_value('username',$users[0]['username']); ?>" class="textfield notfield">
	</div>
	  <div class="field">ชนิดผู้ใช้งาน<br>
         <input type="text"   value="<?php echo set_value('username',$users[0]['role_tname']); ?>" class="textfield notfield">
	</div>
	
	
     

     <div style="clear:both;"></div>
      <div class="field"><br>
     <input  type="submit" value="ลบ" />
        </div>
</form>
<div style="height:200px;">
</div>
