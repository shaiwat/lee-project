<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">รหัสบาร์โค้ด</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/material_add"); ?>">
    <div class="field">รหัส Barcode<br>
         <input type="text"  name="name" value="<?php echo set_value('name'); ?>"  class="textfield">
	</div>
	
	
   <div style="clear:both;"></div>
      <div class="field"><br>
     <input  type="submit" value="ค้นหา" />
        </div>
</form>
<div style="height:150px;">
</div>
 </div>
    
     
     
     </div>

	
