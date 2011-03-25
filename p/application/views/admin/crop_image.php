<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>



<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<title>ForwardSystem CMS</title>
<base href="<?php echo base_url(); ?>" />
<script type="text/javascript" src="<?php echo base_url(); ?>html/admin/design/js/javascript.js"></script>

<link rel="shortcut icon" href="<?php echo base_url(); ?>html/admin/design/img/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>html/admin/design/styles/default.css" media="screen, projection, tv" type="text/css" />

<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url(); ?>imgareaselect/css/imgareaselect-default.css" /> 
<script type="text/javascript" src="<?php  echo base_url(); ?>imgareaselect/scripts/jquery.min.js"></script>
 <script type="text/javascript" src="<?php  echo base_url(); ?>imgareaselect/scripts/jquery.imgareaselect.pack.js"></script> 

</head>
<body>
<form action="<?php echo site_url("file/crop_image/$field/".$file_name); ?>" method="post"> 
  width:  <input type="text" name="w" value="" /> 
 height:<input type="text" name="h" value="" />
   <?php //echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
<img src="<?php echo base_url(); ?>uploads/<?php echo $file_name;  ?>" id="ladybug" />
<input type="hidden" name="x1" value="" />
 <input type="hidden" name="y1" value="" /> 
 <input type="hidden" name="x2" value="" />
  <input type="hidden" name="y2" value="" />

  <input type="hidden" name="file_name" value="<?php echo $file_name; ?>"></input>
 <input type="submit" name="submit" value="Submit" /> </form>





<script langauge="javascript">

$(document).ready(function () {
	$('#ladybug').imgAreaSelect({ 
	onSelectEnd: function (img, selection) { 
		$('input[name=w]').val(selection.width);
		$('input[name=h]').val(selection.height);
		$('input[name=x1]').val(selection.x1);
		 $('input[name=y1]').val(selection.y1);
		  $('input[name=x2]').val(selection.x2); 
	$('input[name=y2]').val(selection.y2); } }); });


</script>
      


</body>
</html>