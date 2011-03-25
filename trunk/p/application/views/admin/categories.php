<h1>รายการหมวดสินค้า</h1>
  <?php echo $this->user->messages(); ?>
<a href="<?php echo site_url("admin/category_add"); ?>">เพิ่มใหม่</a>
<?php $cats =  $this->db->query("select * from product_categories")->result_array(); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th class="left">ชื่อหมวดสินค้า (ภาษาไทย)</th>
            <th>ชื่อหมวดสินค้า (English)</th>
             <th>Publish</th>
            <th>แก้ไข</th>
           
          </tr>
         <?php foreach($cats as $row){ ?>
          <tbody>
          <tr >
            
            
            <td><?php echo $row['pcat_name_th']; ?></td>
            <td><?php echo $row['pcat_name_en']; ?></td>
           	 <td><?php echo $row['is_publish']; ?></td>
            <td><a href="<?php echo site_url("admin/category_edit/".$row['cat_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>