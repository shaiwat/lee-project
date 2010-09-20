<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRAND U</title>
<link href="include_admin/ucondo.css" rel="stylesheet" type="text/css" />
<!-- JQuery -->
<link type="text/css" href="include/jquery/css/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="include/jquery/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript">
	$(function() {
		
		$("#datepicker, #datepicker2").datepicker($.datepicker.regional['th']);
		
	});
	</script>

</head>
<body>
<div id="wrapper">
  <div id="toppart">
    <div id="logo"><img src="images/common/logo.jpg" width="174" height="38" alt="GRAND U" /></div>
    <div id="sitename"><img src="images/common/sitename.jpg" width="437" height="38" alt="AFTER SALES SERVICE" /></div>
    <div id="userdetail">
      <div id="projectname">Grand U</div>
      <div id="position">Project Director</div>
      <div id="name">คุณกันต์ มะลิทอง</div>
      <div class="clear"></div>
      <div id="usermenu"><a href="<?php echo site_url("user/account"); ?>"><img src="images/common/user_data_setting_butt.jpg" alt="จัดการข้อมูล" width="100" height="22" /></a><a href="#"><img src="images/common/user_account_setting_butt.jpg" alt="จัดการผู้ใช้งาน" width="101" height="22" /></a><a href="#"><img src="images/common/user_logout_butt.jpg" width="97" height="22" alt="ออกจากระบบ" /></a></div>
    </div>
  </div>
  <div id="content">
    <div id="page">
      <div id="topborder"></div>
      <div id="leftborder">
        <div class="leftbordermid"></div>
      </div>
      <div id="contentdiv">
        <div id="contentbg">
         <?php include (dirname(__FILE__) . "/admin_navigation.php");  ?>  
          <div class="rightbar">
            <div id="rightbar">
      
              <?php echo $contents; ?>
              
              
              
              
              
              <div class="submit_bottom"></div>
            
              <div class="clear"></div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div id="rightborder">
        <div class="rightbordermid"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div id="footer">
    <div class="leftborderbottom"></div>
    <div class="copyright"></div>
    <span class="copyright"><img src="images/common/copy_right.jpg" width="313" height="13" alt="Copyright 2010 Grand Unity Development Co., ltd." /></span>
    <div class="rightborderbottom"></div>
    <div class="footerlogo"><img src="images/common/footer_logo.jpg" alt="GRAND U" width="171" height="41" /></div>
  </div>
</div>
</body>
</html>
