<option value="" selected="selected">โปรดเลือก</option>
<?php foreach($rows as $row){ ?>
<option value="<?php echo  $row['vender_id'] ?>">
<?php  echo $row['vender_name']; ?></option>
<?php } ?>