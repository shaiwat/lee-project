<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
     
         <textarea <?php if($class){ echo 'class="'.$class.'"';} ?>    id="<?php echo $name; ?>" name="<?php echo $name; ?>" ><?php echo set_value($name,$default); ?></textarea><br>
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>
	 