
<?php function get_thumbail($file)
{
		if(!($file["thumbnail"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=35&h=35&zc=1" alt="" />';
		}
	
}
?>
<h1>รายการสินค้า</h1>
<?php $pages = $this->db->query("select * from pages  order by page_id desc")->result_array();  ?>
 <?php echo $this->user->messages(); ?>
<?php //$this->load->view("admin/product_filter"); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th style="width: 50px;" >Thumbail</th>
            <th>Title</th>
             <th>Path link</th>
		<th>Publish</th>
		<th>Link</th>
            <th>แก้ไข</th>
           
          </tr>
         <?php foreach($pages as $row){ ?>
          <tbody>
          <tr >
            <td class="left"><?php echo get_thumbail($row) ?></td>
            <td><?php echo $row['title_th'] ?></td>
            <td>/index.php/<?php echo "front/page/".$row["name"]; ?></td>
            <td><?php echo $row['is_publish'] ?></td>
            <td><a href="<?php echo site_url("front/page/".$row["name"]); ?>">Link</a></td>
            <td><a href="<?php echo site_url("admin/page_edit/".$row['page_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>