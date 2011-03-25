
<?php function get_thumbail($file)
{
		if(!($file["thumbnail"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=35&h=35&zc=1" alt="" />';
		}
	
}
?>
<h1>Download</h1>
 <?php echo $this->user->messages(); ?>
<a href="<?php echo site_url("admin/download_add"); ?>">เพิ่มใหม่</a>
<table id="list">
          <tbody><tr class=" odd">
            <th style="width: 50px;" >Thumbail</th>
            <th>ชื่อเรื่อง</th>
          
           <th>Download</th>
            <th>แก้ไข</th>
           
          </tr>
          
         <?php foreach($rows as $row){ ?>
          
          <tr >
            <td class="left"><?php echo get_thumbail($row) ?></td>
            <td><?php echo $row['title_th'] ?></td>
           
            <td>download</td>
            <td><a href="<?php echo site_url("admin/download_edit/".$row['download_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>