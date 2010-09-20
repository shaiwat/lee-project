<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">เพิ่มวัสดุใหม่</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/material_add"); ?>">
    <div class="field">ชื่อวัสดุ<br>
         <input type="text"  name="name" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	<div class="field">Serial Code<br>
         <input type="text"  name="Serial_code" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
    <div class="field">ยี้ห้อ<br>
         <input type="text"  name="brand" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	<div class="field">จำนวน<br>
         <input type="text"  name="amount" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	<div class="field">ราคาซื้อ<br>
         <input type="text"  name="buyprice" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	<div class="field">วันที่รับมา/ซื้อมา<br>
         <input type="text"  name="get_date" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	
	<div class="field">หมวด<br>
 
                  <select   class="listfield" name="mcat_id" >
                    <option value="">โปรดเลือก</option>
                   <?php 	foreach($categories as $row){ ?>
                    <option value="<?php echo $row['mcat_id']; ?>" <?php echo $this->validation->set_select('mcat_id',$row['mcat_id']   ); ?>><?php echo $row['mcat_name']; ?></option>
                   <?php } ?>
       </select>
               
	</div>
	
     <div style="clear:both;"></div>
<div class="field2">สเปค/รายละเอียด<br>
                  <textarea name="note" cols="" rows="" class="contentfield"></textarea>
                </div>
   <div style="clear:both;"></div>
      <div class="field"><br>
     <input  type="submit" value="บันทึก" />
        </div>
</form>
<div style="height:150px;">
</div>
 </div>
    
     
     
     </div>

	
