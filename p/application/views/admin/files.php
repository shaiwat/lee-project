<?php function get_thumbail($file)
{
	if($file["is_image"]){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['file_name'].'&w=50&h=50&zc=1" alt="" />';
	}
	
}
 ?>
<h1>จัดการไฟล์</h1>
<?php $this->load->view("admin/file_filter"); ?>
  <?php echo $this->user->messages(); ?>
<a href="<?php echo site_url("admin/file_add"); ?>">เพิ่มใหม่</a>

<table id="list">
          <tbody><tr class=" odd">
            <th class="left">FileID</th>
             <th class="left">Thumbnail</th>
             <th class="left">ชือไฟล์</th>
             <th class="left">Link</th>
            <th>กลุ่มไฟล์</th>
             <th>ชนิดไฟล์</th>
            <th>Souce</th>
             <th>ลบ</th>
          </tr>
         <?php foreach($rows as $row){ ?>
          </tbody>
          <tr >
            
           <td><?php echo $row["file_id"]; ?></td>
           <td><?php echo get_thumbail($row); ?></td>
            <td><?php echo $row['client_name']; ?></td>
            <td><?php echo $row['file_name']; ?></td>
            <td><?php echo $row['file_cat_name']; ?></td>
           	 <td><?php echo $row['file_type']; ?></td>
            <td><a href="uploads/<?php echo $row['file_name']; ?>"><strong>ดู</strong></a></td>
            <td><a href="<?php echo site_url("admin/file_delete/".$row['file_id']); ?>"><strong>ลบ</strong></a></td>
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>
        