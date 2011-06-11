<h1>ชนิดผู้ใช้งานใหม่</h1>
  <?php echo $this->user->messages(); ?>
<div class="add-bar"> 
 	<a href="<?php echo site_url("admin/user_role_add"); ?>"><img src="images/page-add.png">เพิ่มใหม่</a>
</div>
<?php $roles = $this->db->get("roles")->result_array();  ?>






<table class="list" style="width: 500px;">
          <tbody><tr >
            <th> ชื่อกลุ่มผุ้ใช้งาน</th>
           
            
         
            <th>แก้ไข</th>
           
          </tr>
         <?php 
         $i = 0;
     foreach($roles as $row){ ?>
         
          <tr <?php if(($i++%2)){ echo 'class="even"';} ?> >
            
            
            <td><?php echo $row['role_name']; ?></td>
          
        
           	
            <td><a href="<?php echo site_url("admin/user_role_edit/".$row['role_id']); ?>"><img src="images/edit-icon.png" /></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>
        
        
        
        
