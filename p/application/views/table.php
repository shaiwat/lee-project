

<table class="list <?php echo $name; ?>"  >

         <?php foreach($header as $row){ ?>
         <th class="<?php echo $row["class"]; ?>" ><?php echo $row["label"]; ?></th>

         
         <?php } ?>

         
         	<?php
            $i =1;
            foreach($rows as $item){ ?>
          <tr class="<?php if($i++%2){echo "even";} ?>">
           <?php foreach($header as $row)
           { ?>
           	
 			 <td class="<?php //echo $row["class"]; ?>">
 			 <?php 
 			 
 			 if($row["label"]=="แก้ไข")
 			 {
 			 	echo '<a href="'.site_url("admin/".$name."_edit/".$item[$row["name"]]).'"><img src="images/edit-icon.png" /></a>';
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
       
</table>