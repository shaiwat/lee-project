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
<link rel="stylesheet" href="<?php echo base_url(); ?>html/admin/design/styles/print.css" media="print" type="text/css" />
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>include/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
</head>
<body>

      
        <form class="form" method="post" action="<?php echo site_url("file/upload/$field");   ?>" enctype='multipart/form-data' >
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
       <?php if(isset($error["error"])){ echo $error["error"];}; ?>
       
          <div class="field"  >
          <label for="">รูป:</label><br/>
         
		 <input type="file"    name="file_field" value="<?php //echo set_value("pcat_name_th",""); ?>"><br>
		 </div>
		 
		
		<div style="crener"></div>
		 <div class="field"  >
		
         
		 <input type="hidden""  name="detail"  value="<?php echo set_value("pcat_name_en",""); ?>" /><br>
		 </div>
		     <div class="cleaner"></div>
		 
        <p class="submit"><input type="submit" value="อับโหลด"></p>
        </form>
       

      


</body>
</html>