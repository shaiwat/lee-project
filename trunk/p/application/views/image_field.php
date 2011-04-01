<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
         <input id="<?php echo $name; ?>" <?php if($class){ echo 'class="'.$class.'"';} ?> type="text" name="<?php echo $name; ?>" value="<?php echo set_value($name,$default); ?>">
         <img onclick="upfile('<?php echo $name; ?>');" src="<?php echo base_url(); ?>images/up.png"/><br>
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>
	 