<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">เพิ่มห้อง/สถานที</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/room_add"); ?>">
    <div class="field">ชื่อห้อง/สถานที่<br>
         <input type="text"  name="room_name" value="<?php echo set_value('room_name'); ?>"  class="textfield">
	</div>
	

     <div style="clear:both;"></div>

   <div class="field2">รายละเอียด<br>
                  <textarea name="detail" cols="" rows="" class="contentfield"><?php echo set_value("detail"); ?></textarea>
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

	
