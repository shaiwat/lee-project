<?php if($have_first) {  ?>
    

<option value="0" <?php if($id2==0){ echo 'selected="selected"';}?> ><?php echo $first; ?></option>
<?php } ?>
<?php foreach($rows as $row){ ?>

<option value="<?php  echo $row['task_group_id']; ?>" <?php if($row['task_group_id']==$id2){ echo 'selected="selected"'; } ?> ><?php  echo $row['task_group_name']; ?></option>



<?php } ?>