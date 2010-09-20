<?php include (dirname(__FILE__) . "/../header.php");  ?>
</head>
<body>
<div id="wrapper">
  <div id="toppart">
    <div id="logo"> <!-- <img src="images/common/logo.jpg" width="174" height="38" alt="GRAND U" /> --></div>
    <div id="sitename"><!-- <img src="images/common/sitename.jpg" width="437" height="38" alt="AFTER SALES SERVICE" /> --></div>
  </div>
  <div id="content">
    <div id="login">
      <div id="topborder"></div>
      <div id="leftborder">
        <div class="leftbordermid"></div>
      </div>
      <div id="contentdiv">
        <div id="login_leftbar"></div>
        <div id="login" class="rightbar">
          <div id="login_rightbar">
            <div class="head"><img src="images/common/enter.jpg" width="110" height="38" alt="เข้าสู่ระบบ" /></div>
           <form  id="myform" action="<?php echo site_url("login"); ?>" method="post" >
	           <div class="form-message">
<?php echo validation_errors('<div class="error-message">', ' </div>'); ?>

</div>
	            <div class="text">
	              <div class="field" ><img src="images/common/username.gif" width="38" height="20" alt="ชื่อผู้ใช้" /><br />
	                <input name="username" value="<?php echo set_value('username'); ?>" type="text" class="textfield" />
	              </div>
	              <div class="field"><img src="images/common/password.gif" width="46" height="20" alt="รหัสผ่าน" /><br />
	                <input name="password" value="<?php echo set_value('password'); ?>" type="password" class="textfield" />
	              </div>
	              
	              <div id="loginbutt"><a href="javascript:document.forms['myform'].submit();"><img src="images/common/login_button.gif" width="137" height="67" alt="ล็อกอิน" /></a></div>
	            </div>
            </form>
          </div>
        </div>
        <div class="clear"></div>
        
      </div>
      <div id="rightborder">
        <div class="rightbordermid"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
 
<?php include (dirname(__FILE__) . "/../footer.php");  ?>
