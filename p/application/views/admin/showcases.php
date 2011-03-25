
<?php function get_thumbail($file)
{
		if(!($file["image1"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['image1'].'&w=35&h=35&zc=1" alt="" />';
		}
	
}
?>
<h1>ผลงาน</h1>
 <?php echo $this->user->messages(); ?>

<table id="list">
          <tbody><tr class=" odd">
            <th style="width: 50px;" >Thumbail</th>
            <th>ชื่อผลงาน</th>
          
             <th>Publish</th>
            <th>แก้ไข</th>
           
          </tr>
          
         <?php foreach($rows as $row){ ?>
          
          <tr >
            <td class="left"><?php echo get_thumbail($row) ?></td>
            <td><?php echo $row['title_th'] ?></td>
           
            <td><?php echo $row['is_publish']; ?></td>
            <td><a href="<?php echo site_url("admin/showcase_edit/".$row['showcase_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>