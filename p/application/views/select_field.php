<div class="field <?php  if(form_error($name, '', '')){ echo " required"; }; ?>">
     <label for="<?php echo $name; ?>" ><?php echo $label; ?>:</label> <br>
     
     <select id="<?php echo $name; ?>" name="<?php echo $name; ?>">
     		<option value="0">โปรดเลือก</option>
     <?php foreach($rows as $row){  ?>
     <option value="<?php echo $row[$name]; ?>"><?php echo $row[$label_value]; ?></option>
     
     <?php } ?>
     
     </select>
        
	</div>
	<?php if($cleaner){ ?>
	 <div class="cleaner"></div>
	 <?php } ?>
<script type="text/javascript">
$(document).ready(function() {
	var <?php echo $name; ?> = '<?php echo set_value($name,$default); ?>';
	$("#<?php echo $name; ?> option[value="+<?php echo $name; ?>+"]").attr('selected', 'selected');
});
</script>
   	 