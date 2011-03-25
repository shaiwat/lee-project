<form id="myform" action="<?php echo site_url("login/index"); ?>" class="form" method="post" >

<fieldset>
<legend>ล็อกอินเข้าสู้ระบบ</legend>
       <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '<span title="Dismiss" class="close"></span></div>'); ?>
        
        <p>
          <label for="username"><span class="required">*</span>ชื่อผู้ใช้งาน:</label><br/>
          <input type="text" style="width:250px;" name="username" value="<?php echo set_value("username"); ?>" id="username">
        </p>
        
        <p>
          <label for="pasword"><span class="required">*</span>รหัสผ่าน:</label><br/>
          <input type="password" style="width:250px;" name="password" value="<?php echo set_value("password"); ?>" id="password">
        </p>
        <br/>
        <input type="submit" value="ล็อกอิน" />
</fieldset>

 </form>