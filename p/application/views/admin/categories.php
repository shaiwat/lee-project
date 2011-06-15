<h1>หมวดวัสดุ/ครุภัณฑ์</h1>
  <?php echo $this->user->messages(); ?>
<div class="add-bar">
 	<a href="<?php echo site_url("admin/category_add"); ?>"><img src="images/page-add.png">เพิ่มใหม่</a>
</div>
<?php $cats =  $this->db->query("select * from material_categories")->result_array(); ?>
<table class="list" style="width:400px;">
          <tbody><tr class=" odd">
            <th >ชื่อหมวดวัสดุครุภัณฑ์</th>
            
            <th>แก้ไข</th>
           
          </tr>
         <?php
          $i = 1;
          foreach($cats as $row){ ?>
        
          <tr class="<?php if($i++%2){ echo "even";} ?>" >
            
            
            <td><?php echo $row['category_name']; ?></td>
            
            <td><a href="<?php echo site_url("admin/category_edit/".$row['category_id']); ?>"><img src="images/edit-icon.png" /></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>