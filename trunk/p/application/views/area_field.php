<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
     
         <textarea rows="5" cols="250"   id="<?php echo $name; ?>" name="<?php echo $name; ?>" ><?php echo set_value($name,$default); ?>
         </textarea><br>
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>
	 