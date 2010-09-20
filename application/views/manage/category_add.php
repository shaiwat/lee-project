<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">เพิ่มผู้ใช้งานใหม่</a></li>
	</ul>
	<div id="tabs-1">
<?php echo validation_errors('<div class="error-message" style="width:437px;">', ' </div>'); ?>
<form id="myform" method="post" action="<?php echo site_url("manage/category_add"); ?>">
    <div class="field">ชื่อหมวด<br>
         <input type="text"  name="mcat_name" value="<?php echo set_value('firstname'); ?>"  class="textfield">
	</div>
	
	<div class="field">หมวดแม่<br>
 
                  <select   class="listfield" name="parent_id" >
                    <option value="">โปรดเลือก</option>
                   <?php 	foreach($categories as $row){ ?>
                    <option value="<?php echo $row['mcat_id']; ?>" <?php echo $this->validation->set_select('mcat_id',$row['mcat_id']   ); ?>><?php echo $row['mcat_name']; ?></option>
                   <?php } ?>
                  </select>
               
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

	
