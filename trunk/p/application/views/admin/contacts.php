<?php $rows = $this->db->query("select * from contact_messages m ,contact_types t where t.ctype_id =m.ctype_id")->result_array(); ?>
<h1>รายการผู้ติดต่อ</h1> 
<?php $this->load->view("admin/contact_filter"); ?>
<table id="list">
            <thead>
              <tr>
               
                <th style="width: 100px;">วันที่</th>
                <th style="width: 90px;">ชนิดติดต่อ</th>
                <th style="width: 100px;">ชื่อผู้ติดต่อ</th>
                <th style="width: 90px;">อีเมล์</th>
                <th class="last">ข้อความ</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($rows as $row){ ?>
              <tr>
              
                <td><?php echo $row['mdate']; ?></td>
                <td><?php echo $row['ctype_name_th'] ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
               
              </tr>
              <?php } ?>
            
            </tbody>
          </table>