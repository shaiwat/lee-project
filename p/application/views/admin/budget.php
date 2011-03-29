<h1>รายการงบประมาณ</h1>
  <?php echo $this->user->messages(); ?>

<?php $cats =  $this->db->query("select * from company")->result_array(); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th class="left" style="width:250px;">ชื่องบประมาณ</th>
            
            <th style="width:100px;">แก้ไข</th>
           
          </tr>
         <?php foreach($cats as $row){ ?>
       
          <tr >
            
            
            <td><?php echo $row['company_name']; ?></td>
            
            <td><a href="<?php echo site_url("admin/budget_edit/".$row['category_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>