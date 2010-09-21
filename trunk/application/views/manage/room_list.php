<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">หมวดวัสดุ/ครุถัณฑ์</a></li>
	</ul>
	<div id="tabs-1">

<?php echo $messages ?>
<br/>
<table cellspacing="0" cellpadding="0" border="1" width="100%" class="reference">
	<tbody>
		<tr>
			
			<th align="left" style="width: 90px;">ห้อง/สถานที่</th>
			
			  <th align="left" style="width:25px;">แก้ไข</th>
                        <th align="left" style="width:25px;">ลบ</th>
		</tr>
	
<?php
$i = 1;
foreach($rows as $row) {
    if($i%3){ $class = "a"; $icon ="a";}else{ $class = "b" ;$icon ="b";} $i++ ;	
    
    ?>
<tr >
	
	<td class="<?php  echo $class; ?>" ><?php echo $row['room_name']; ?></td>
	
      <td  class="<?php  echo $class; ?>" >                    
    <a href="<?php echo site_url("manage/room_edit/".$row['room_id']); ?>"><img src="images/document.png"></a></td>
    <td  class="<?php  echo $class; ?>" >
                        
    <a href="<?php echo site_url("manage/room_delete/".$row['room_id']); ?>"><img src="images/delete.png"></a></td>
</tr>
<?php  }?> 	
		
	</tbody>
</table>
<?php echo $paging; ?>
	
	</div>
</div>