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
<script langauge="javascript">
$(document).ready(function () { $('#ladybug').imgAreaSelect({ onSelectEnd: function (img, selection) { $('input[name=x1]').val(selection.x1); $('input[name=y1]').val(selection.y1); $('input[name=x2]').val(selection.x2); $('input[name=y2]').val(selection.y2); } }); });

function post_value(){
opener.document.myform.<?php echo $field; ?>.value = '<?php echo $file_name; ?>';
self.close();
}
</script>
</head>
<body onload="post_value();" >

<img src="<?php echo base_url()."uploads/".$file_name; ?>" />


      

<input type="button" onclick="post_value();" />

</body>
</html>