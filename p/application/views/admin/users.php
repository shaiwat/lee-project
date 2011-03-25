<h1>รายการผู้ใช้งาน</h1>
  <?php echo $this->user->messages(); ?>
<a href="<?php echo site_url("admin/user_add"); ?>">เพิ่มใหม่</a>
<?php $users =  $this->db->query("select * from users")->result_array(); ?>
<table id="list">
          <tbody><tr class=" odd">
            <th class="left">Username</th>
            <th>ชื่อ-นามสกุล</th>
             <th>เปลี่ยนรหัสผ่านใหม่</th>
            <th>แก้ไขข้อมูล</th>
           
          </tr>
         <?php foreach($users as $row){ ?>
          <tbody>
          <tr >
            
            
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
           	 <td><a href="<?php echo site_url("admin/pass_edit/".$row["user_id"]) ?>">เปลี่ยน</a></td>
            <td><a href="<?php echo site_url("admin/user_edit/".$row['user_id']); ?>"><strong>edit</strong></a></td>
            
          </tr>
          <?php } ?>
        </tbody></table>