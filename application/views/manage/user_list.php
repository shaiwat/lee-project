<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">รายการผู้ใช้งาน</a></li>
		
		
	</ul>
	<div id="tabs-1">

<?php echo $messages ?>

<table cellspacing="0" cellpadding="0" border="1" width="100%" class="reference">
	<tbody>
		<tr>
			
			<th align="left" style="width: 90px;">ชื่อผู้ใช้งาน</th>
			<th align="left" style="width: 200px;">ชื่อนาม-สกุล</th>
			
			<th align="left" style="width:70px;">ชนิดผู้ใช้งาน</th>
			  <th align="left" style="width:25px;">แก้ไข</th>
                        <th align="left" style="width:25px;">ลบ</th>
		</tr>
	
<?php
$i = 1;
foreach($rows as $row) {
    if($i%3){ $class = "a"; $icon ="a";}else{ $class = "b" ;$icon ="b";} $i++ ;	
    
    ?>
<tr >
	
	<td class="<?php  echo $class; ?>" ><?php echo $row['username']; ?></td>
	<td class="<?php  echo $class; ?>" ><?php echo $row['firstname']." ".$row['lastname']; ?></td>
	<td class="<?php  echo $class; ?>" ><?php echo $row['role_tname'];?></td>
	<td  class="<?php  echo $class; ?>" >
                        
    <a href="<?php echo site_url("manage/user_edit/".$row['user_id']); ?>"><img src="images/document.png"></a></td>
    <td  class="<?php  echo $class; ?>" >
                        
    <a href="<?php echo site_url("manage/user_delete/".$row['user_id']); ?>"><img src="images/delete.png"></a></td>
</tr>
<?php  }?> 	
		
	</tbody>
</table>
<?php echo $paging; ?>
  </div>
    </div>