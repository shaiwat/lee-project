<div id="userdetail">
      <div id="projectname">Grand U</div>
      <div id="position"><?php echo $info[0]['position'] ?></div>
      <div id="name"><?php echo $info[0]['firstname']." ".$info[0]['lastname'] ?></div>
      <div class="clear"></div>
      <div id="usermenu">
      
       
      <a href="<?php  echo site_url("manage/problems"); ?>">
     
      <img height="22" width="100" alt="จัดการข้อมูล" src="images/common/user_data_setting_butt.jpg"></a>
      <a href="<?php  echo site_url("manage/users"); ?>">
      <img height="22" width="101" alt="จัดการผู้ใช้งาน" src="images/common/user_account_setting_butt.jpg"></a>
      
      <a href="<?php echo site_url("login/logout"); ?>"><img height="22" width="97" alt="ออกจากระบบ" src="images/common/user_logout_butt.jpg"></a>
      </div>
</div>


