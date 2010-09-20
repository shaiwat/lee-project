<?php foreach($rows as $row){ ?>
<option value="<?php echo  $row['cust_id']; ?>">
<?php  echo $row['cust_fname']." ".$row['cust_lname']; ?></option>
<?php } ?>