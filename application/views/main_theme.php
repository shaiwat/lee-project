<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRAND U</title>
<link href="include/ucondo.css" rel="stylesheet" type="text/css" />
<!-- JQuery -->
<link type="text/css" href="include/jquery/css/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="include/jquery/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript">
	$(function() {
		
		$(".datepickek").datepicker();
		
		
	});
	</script>


</head>
<body>
<div id="wrapper">
  <div id="toppart">
    <div id="logo" onclick="window.location='<?php echo base_url(); ?>'"></div>
    <div id="sitename"></div>
   <?php echo $this->user_model->get_current_user(); ?>
  </div>
  <div id="content">
    <div id="page">
      <div id="topborder"></div>
      <div id="leftborder">
        <div class="leftbordermid"></div>
      </div>
      <div id="contentdiv">
        <div id="contentbg">
       
          
          <div class="rightbar">
            <div id="rightbar">
            
              <?php echo $contents; ?>
              
              
              
              
              
              
            
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
    <span class="copyright"></span>
    <div class="rightborderbottom"></div>
    <div class="footerlogo"></div>
  </div>
</div>

</body>
</html>
