
<?php function get_thumbail($file)
{
		if(!($file["thumbnail"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=65&h=50&zc=1" alt="" />';
		}
	
}
?>
<h1>รายการวัสดุ</h1>
 <?php echo $this->user->messages(); ?>
<?php $this->load->view("admin/material_filter2"); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th style="width: 50px;" >รูป</th>
         	 <th>เลขที่อ้างอิง</th>
             <th>ชื่อ</th>
             
            <th>หมวด</th>
             <th>วันที่ซื้อมา</th>
             <th>ดูรายละเอียด</th>
            <th>แก้ไขข้อมูล</th>
           
          </tr>
         <?php foreach($rows as $row){ ?>
          
          <tr >
            <td class="left"><?php echo get_thumbail($row) ?></td>
              <td><a href="<?php echo site_url("admin/material_view/".$row["material_id"]); ?>" ><?php echo $row['ref_code']; ?></a></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['category_name'] ?></td>
            <td><?php echo $row['buy_date']; ?></td>
             <td><a href="<?php echo site_url("admin/material_view/".$row["material_id"]); ?>" ><img src="include/images/edit.png" /></a></td>
            <td><a href="<?php echo site_url("admin/material_edit2/".$row['material_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>
        <?php echo $paging; ?>