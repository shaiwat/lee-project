<h1>รายการหมวดวัสดุครุภัณฑ์</h1>
  <?php echo $this->user->messages(); ?>

<?php $cats =  $this->db->query("select * from material_categories")->result_array(); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th class="left">ชื่อหมวดวัสดุครุภัณฑ์</th>
            
            <th>แก้ไข</th>
           
          </tr>
         <?php foreach($cats as $row){ ?>
        
          <tr >
            
            
            <td><?php echo $row['category_name']; ?></td>
            
            <td><a href="<?php echo site_url("admin/category_edit/".$row['category_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>