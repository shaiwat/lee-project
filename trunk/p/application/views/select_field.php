<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
     
     <select id="<?php echo $name; ?>" name="<?php echo $name; ?>">
     		<option value="0"><?php echo $first_label; ?></option>
     <?php foreach($rows as $row2){  ?>
     <option 
     <?php if($row2[$name]==set_value($name,$row[$name])){ echo  'selected="selected"'; } ?>
     value="<?php echo $row2[$name]; ?>"><?php echo $row2[$label_value]; ?></option>
     
     <?php } ?>
     
     </select>
        
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>

   	 