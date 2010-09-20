           <div id="task_item_<?php echo $id;?>" class="task-item" >
              <div class="greyline" style="text-align: left;"><?php echo $id; ?>.<img style="margin-left: 598px; cursor:pointer;cursor:hand;color:red;" onclick="javascript:remote_task_item('task_item_<?php echo $id; ?>');" src="images/document_delete.png"  /></div>
             <input type="hidden" id="task_detial_id_h_<?php echo $id; ?>" name="task_detial_id_h_<?php echo $id; ?>" value="<?php echo set_value('task_detial_id_h_'.$id); ?>" />
               <div class="field">ชนิดปัญหาที่พบ<br>
                  <select onChange="javascript:task_type_change(this,<?php echo $id; ?>);"  class="listfield" size="1" name="task_type_id_<?php echo $id; ?>">
                    <option value="">โปรดเลือก</option>
                   	<?php 	foreach($task_types as $row){ ?>
                    <option value="<?php echo $row['task_type_id']; ?>"><?php echo $row['task_type_name']; ?></option>
                   <?php } ?>
                  </select>
                </div>
                
               <div class="field">ปัญหาที่พบ<br>
                  <select onchange="task_detail_change(this,<?php echo $id; ?>);" id="task_group_<?php echo $id; ?>" class="listfield" size="1" name="task_detail_id_<?php echo $id; ?>">
                 
                  </select>
                </div>
	     
		 
		   <div style="clear: both;"> </div>
	
                <div class="field2">ข้อเสนอแนะเพิ่มเติม<br>
                  <textarea class="contentfield" rows="" cols="" name="detail_<?php echo $id; ?>"></textarea>
                </div>
              <!--   <div style="margin-top: 8px;" class="date ">วันที่นัดซ่อม<br>
                    <input type="text"  class="datefield datepicker" name="date_<?php echo $id; ?>">
                  </div>
               --> 
                 <div style="clear: both;"> </div>
              
        	</div>
        