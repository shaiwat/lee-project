
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link type="text/css" href="<?php  echo base_url(); ?>include/jquery/css/ui-lightness/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
    <link href="<?php  echo base_url(); ?>include/css/forms.css" rel="stylesheet" type="text/css" />
     <link type="text/css" href="<?php  echo base_url(); ?>include/css/layout.css" rel="stylesheet" />	
		

<title>Grandu Site Inspection</title>

<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript">

$(function() {
		
		$(".datepicker").datepicker();
		
		
	});
	</script>

</head>

<body>
<div id="wrapper">
<div id="head" >

	<?php if($this->user->is_login()){
		$user = $this->user->get();
      ?>
       <div  style="color: rgb(255, 255, 255); float: right; margin-top: 14px; margin-right: 13px;">
       <span><?php echo $user['firstname'] ?> <?php echo $user['lastname']; ?> |</span> <span><?php //echo $user['role_tname']; ?></span> <span><a style="color:#fff;" href="<?php echo site_url("logout"); ?>">ออกจากระบบ</a></span>  </div> 
     <?php } ?>
</div>
<br/>
<?php if($this->user->is_login()){ ?>
<div style="border: 1px solid #999;width: 180px;height: 600px;float: left;margin-right: 15px;">
<?php $this->load->view("admin/left_navigation"); ?>
</div>
<?php } ?>
<div style="width:800px;float:left;">

    <?php //$this->defect->messages(); ?>
  <?php //$this->defect->set_message("","บันทึกใบงานเรียบร้อยแล้ว","success"); ?>
 
<?php echo $contents; ?>

</div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.tipsy.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.treeview.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.cookie.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.lightbox-0.5.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>include/js/jquery.wysiwyg.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>includes/js/functions.js"></script> 

</body>
</html>