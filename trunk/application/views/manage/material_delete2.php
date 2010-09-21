<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">ยืนยันการลบข้อมูล</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/material_delete2/".$rows[0]['m_id']); ?>">
    <div class="field">ชื่อวัสดุ<br>
         <input type="text"  name="name" value="<?php echo set_value('name',$rows[0]['name']); ?>"  class="textfield notfield">
	</div>
	<div class="field">Serial Code<br>
         <input type="text"  name="serial_code" value="<?php echo set_value('serial_code',$rows[0]['serial_code']); ?>"  class="textfield notfield">
	</div>
    <div class="field">ยี้ห้อ<br>
         <input type="text"  name="brand" value="<?php echo set_value('brand',$rows[0]['brand']); ?>"  class="textfield notfield">
	</div>
	<div class="field">จำนวน<br>
         <input type="text"  name="amount" value="<?php echo set_value('amount',$rows[0]['amount']); ?>"  class="textfield notfield">
	</div>
	<div class="field">ราคาซื้อ<br>
         <input type="text"  name="buyprice" value="<?php echo set_value('buyprice',$rows[0]['buyprice']); ?>"  class="textfield notfield">
	</div>
	<div class="field">วันที่รับมา/ซื้อมา<br>
         <input type="text"  name="buydate" value="<?php echo set_value('buydate',$rows[0]['buydate']); ?>"  class="textfield  notfield">
	</div>
	

	
   <div style="clear:both;"></div>
      <div class="field"><br>
     <input  type="submit" value="ลบ" />
        </div>
</form>
<div style="height:150px;">
</div>
 </div>
    
     
     
     </div>

