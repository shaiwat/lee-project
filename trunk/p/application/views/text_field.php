<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
         <input id="<?php echo $name; ?>" type="text" name="<?php echo $name; ?>" value="<?php echo set_value($name,$default); ?>"><br>
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>
	 