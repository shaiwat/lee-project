

<table id="list">
         <thead>
         <?php foreach($header as $row){ ?>
         <th class="<?php echo $row["class"]; ?>" ><?php echo $row["label"]; ?></th>

         
         <?php } ?>
         </thead>
        
          
          <tbody>
         
         	<?php foreach($rows as $item){ ?>
          <tr>
           <?php foreach($header as $row)
           { ?>
           	
 			 <td>
 			 <?php 
 			 
 			 if($row["label"]=="แก้ไข")
 			 {
 			 	echo '<a href="'.site_url("admin/".$name."_edit/".$item[$row["name"]]).'">แก้ไข</a>';
 			 	continue;
 			 }
           	if($row["label"]=="ลบ")
 			 {
 			 	echo '<a href="'.site_url("admin/".$name."_delete/".$item[$row["name"]]).'">ลบ</a>';
 			 	continue;
 			 }
 			 echo $item[$row["name"]]; ?>
 			 </td>	
           
           <?php
           } 
           ?>
          </tr>
          <?php } ?>
        </tbody>
</table>