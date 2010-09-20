<?php if(!$task_detail_id){ ?>
<option value="0" selected="selected">โปรดเลือก</option>
<?php  }?>
<?php foreach($rows as $row){ ?>

<optgroup label="<?php  echo $row['task_group_name']; ?>">
  <?php

  	$rows2 = $this->db->query("select * from task_details where task_group_id =".$row['task_group_id'])->result_array();
  	foreach($rows2 as $item){
  	?>
   <option <?php if($task_detail_id == $item['task_detail_id']){ echo 'selected="selected"';} ?> value="<?php echo $item['task_detail_id']; ?>"><?php echo "   -".$item['detail_name']; ?></option>
	<?php } ?>
</optgroup>



<?php } ?>