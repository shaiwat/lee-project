<?php if($have_first) {  ?>
    

<option value="0" <?php if($id2==0){ echo 'selected="selected"';}?> ><?php echo $first; ?></option>
<?php } ?>
<?php foreach($rows as $row){ ?>
<option <?php if($id2==$row['building_id']){ echo 'selected="selected"'; } ?> value="<?php echo  $row['building_id'] ?>">
<?php  echo $row['building_name']; ?></option>
<?php } ?>