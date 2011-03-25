
<?php function get_thumbail($file)
{
		if(!($file["image1"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['image1'].'&w=35&h=35&zc=1" alt="" />';
		}
	
}
?>
<h1>รายการสินค้า</h1>
 <?php echo $this->user->messages(); ?>
<?php $this->load->view("admin/product_filter"); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th style="width: 50px;" >Thumbail</th>
            <th>ชื่อสินค้า</th>
             <th>ยี้ห้อ</th>
             
            <th>หมวดสินค้า</th>
             <th>Publish</th>
            <th>แก้ไข</th>
           
          </tr>
         <?php foreach($rows as $row){ ?>
          <tbody>
          <tr >
            <td class="left"><?php echo get_thumbail($row) ?></td>
            <td><?php echo $row['product_name_th'] ?></td>
            <td><?php echo $row['brand'] ?></td>
            <td><?php echo $row['pcat_name_th'] ?></td>
            <td><?php echo $row['is_publish']; ?></td>
            <td><a href="<?php echo site_url("admin/product_edit/".$row['product_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>