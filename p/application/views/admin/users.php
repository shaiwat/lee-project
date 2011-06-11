<h1>รายการผู้ใช้งาน</h1>
  <?php echo $this->user->messages(); ?>
<div class="add-bar"> 
 
<a href="<?php echo site_url("admin/user_add"); ?>"><img src="images/page-add.png">เพิ่มใหม่</a>
</div>

<?php $users =  $this->db->query("select * from users")->result_array(); ?>
<table class="list">
          <tbody><tr class=" odd">
            <th >ชื่อผุ้ใช้งาน</th>
            <th>ชื่อ-นามสกุล</th>
            
             <th>ตำแหน่ง</th>
              <th>อีเมล์</th>
              <th>เบอร์ติดต่อ</th>
             <th>เปลี่ยนรหัสผ่านใหม่</th>
            <th>แก้ไขข้อมูล</th>
           
          </tr>
         <?php 
         $i = 0;
         foreach($users as $row){ ?>
         
          <tr <?php if(($i++%2)){ echo 'class="even"';} ?> >
            
            
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
           	  <td><?php echo $row['position']; ?></td>
           	    <td><?php echo $row['email']; ?></td>
           	      <td><?php echo $row['tel']; ?></td>
           	
           	 <td><a href="<?php echo site_url("admin/pass_edit/".$row["user_id"]) ?>">เปลี่ยน</a></td>
            <td><a href="<?php echo site_url("admin/user_edit/".$row['user_id']); ?>"><img src="images/edit-icon.png" /></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>