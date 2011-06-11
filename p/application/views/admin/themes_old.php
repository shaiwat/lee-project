<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<title>ระบบบริหารจัดการวัสดุครุภัณฑ์</title>
<base href="<?php echo base_url(); ?>" />


    
<script type="text/javascript" src="<?php echo base_url(); ?>html/admin/design/js/javascript.js"></script>

<link rel="shortcut icon" href="<?php echo base_url(); ?>html/admin/design/img/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<link type="text/css" href="include/jquery/css/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>html/admin/design/styles/default.css" media="screen, projection, tv" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>html/admin/design/styles/print.css" media="print" type="text/css" />
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript">

$(function() {
		
		$(".date").datepicker();
		
		
	});

function upfile(field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}
	</script>
</head>
<body>
  <div id="witti">
  
    <div id="header">
    <div style="margin: 10px;float: left;" >ระบบบริหารจัดการวัสดุครุภัณฑ์</div>
    	<?php if($this->user->is_login()){
    		$user = $this->user->get();
    	?>
    	      <p class="userinfo"><strong><?php echo $user['firstname']; ?></strong> | <!--  <a href="#">My account</a> |--> <a href="<?php echo site_url("login/logout"); ?>">Logout!</a></p>
    	
    	<?php }
    	
    	?>
      <div class="cleaner"></div>
    </div><!-- header -->
    
    <div id="main">
    
      <div id="menu">
      
       <?php $this->load->view("admin/navigation")  ?>
      </div>
    
      <!-- content -->
      
      <div id="content">
   
       <?php echo $contents; ?>
      </div><!-- content -->
      <div class="cleaner"></div>
    </div><!-- main -->
    
    <div id="footer">
     
    </div><!-- footer -->
  
  </div><!-- witti -->
  <script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.tipsy.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.treeview.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.cookie.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.lightbox-0.5.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>includes/js/functions.js"></script> 
  
</body>
</html>
