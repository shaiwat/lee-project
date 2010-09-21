<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">ยินยันการลบ ประเภท/หมวด</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/category_delete/".$rows[0]['mcat_id']); ?>">
    <div class="field">ชื่อหมวด<br>
         <input type="text"  name="mcat_name" value="<?php echo set_value('mcat_name',$rows[0]['mcat_name']); ?>"  class="textfield notfield">
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

	

	