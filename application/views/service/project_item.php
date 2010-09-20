     <div class="project_item" id="project_<?php echo $i; ?>">
     <div style="text-align: left;" class="greyline">เจ้าของห้อง <?php echo $i; ?><img src="images/document_delete.png" onclick="javascript:remove_project_item(<?php echo $i; ?>);" style="margin-left: 613px; cursor: pointer; color: red;"></div>
       <div class="field">เลือกโครงการ  <span class="require" >*</span><br>
                  <select  onChange="javascript:project_change(this,<?php echo $i; ?>);"  class="listfield" size="1" name="project[]">
                  <option value="0" selected="selected">โปรดเลือก</option>
                   <?php foreach($projects as $row){ ?>
                    <option value="<?php echo $row['project_id'] ?>" <?php echo $this->validation->set_select('project_id',$row['project_id']  ); ?>>
                    <?php echo $row['project_tname']; ?></option>
                   <?php } ?>
                  </select>
                </div>
                <div class="field">อาคาร <span class="require" >*</span><br>
			   
			   <?php
			    //print_r($buildings);
			    ?>
	         
             <select onchange="building_change(this,<?php echo $i; ?>);" id="building_<?php echo $i; ?>" class="listfield" size="1" name="building[]">
			    <option value="0" selected="selected">โปรดเลือก</option>
			    <?php foreach($buildings as $row){ ?>
					  <option value="<?php echo $row['building_id'];?>"
					  <?php echo $this->validation->set_select('building_id_'.$i,$row['building_id']); ?>
					  ><?php echo $row['building_code']; ?></option>
		    <?php 
				 }?>
		  </select>
			    
			
	        </div>
               
	       
                <div class="field">เลขที่ห้อง(Unit) <span class="require" >*</span><br>
		
		  <select  id="unit_<?php echo $i; ?>" class="listfield" size="1" name="unit[]">
			 <option value="0" selected="selected">โปรดเลือก</option>
			<?php foreach($units as $row){ ?>
			    <option value="<?php echo $row['unit_id'];?>"  <?php echo $this->validation->set_select('unit_id_'.$i,$row['unit_id']); ?> ><?php echo $row['unit_code']; ?></option>
			<?php }?>
		  </select>
		 
                </div>
     </div>
     <div style="clear:both;"></div>