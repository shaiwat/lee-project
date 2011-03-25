<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
 
        <h1>Showcase</h1>

        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/showcase_edit/".$showcase[0]["showcase_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มผลงานใหม่</legend>
          <div class="field">
          <label >ชื่อผลงาน(ภาษาไทย):</label><br>
         
		 <input type="text" name="title_th" value="<?php echo set_value("title_th",$showcase[0]["title_th"]); ?>"><br>
		 </div>
		 <div class="field">
		  <label for="firstname">ชื่อผลงาน (English):</label><br>
         
		 <input type="text" name="title_en"  value="<?php echo set_value("title_en",$showcase[0]["title_en"]); ?>" /><br>
		 </div>
		
		  <div class="field">
           <label >แสดงบนหน้าเวบ:</label><br>
		<select name="is_publish">
			<option value="1">Publish</option>
			<option value="0">Private</option>
		</select>
		
		 </div>
		  <div class="cleaner"></div>
		
				 <div class="field"  >
           <label for="firstname">ค่าความสำคัญในการแสดงผล:</label><br>
		<select name="sort_order">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select>
		 </div>
		  <div class="cleaner"></div>
		 
		 <div class="cleaner"></div>
		 <div class="text">
		 <label >Excerpt(ภาษาไทย):</label><br>
		 	<textarea name="excerpt_th" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th",$showcase[0]["excerpt_th"]); ?></textarea>
		 </div>
		  <div class="text">
		 <label for="firstname">Excerpt(english):</label><br>
		 	<textarea name="excerpt_en" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th",$showcase[0]["excerpt_en"]); ?></textarea>
		 </div>
		 <div class="text">
		 <label >รายละเอียด(ภาษาไทย):</label><br>
		 <?php

//$CKEditor->editor("textarea_id", "This is some sample text");
?>
<textarea name="detail_th" style="height:120px;width: 100%;"><?php echo set_value("detail_th",$showcase[0]["detail_th"]); ?></textarea>
		 </div>
		  <div class="text">
		 <label >รายละเอียด (English): </label><br>
		 	<textarea name="detail_en" style="height:120px;width: 100%;"><?php echo set_value("detail_en",$showcase[0]["detail_en"]); ?></textarea>
		 </div>
		 <div class="field" style="width:600px;">
          <label >keyword:(คำสำหรับเอาไว้ ค้นหาจาก google.com )</label><br>
          
		 <input type="text" style="width:570px;" name="keyword" value="<?php echo set_value("keyword",$showcase[0]["keyword"]); ?>" /><br>
		 </div>
		 <div class="field">
		  <div class="cleaner"></div>
		 <label >Youtube Embed link:</label><br>
		 <input type="text" name="youtube" value="<?php echo set_value("youtube",$showcase[0]["youtube"]); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		  <div class="field">
		 <label  >Thumbnail:(แสดงรูปถาพ ขนาด   196 x 122 ) สำหรับหน้า รวมรายการ สินค้า</label><img onclick="upFile('1','image1');"  src="images/upload.png" /> <br>
		 <input   type="text" name="image1" value="<?php echo set_value("image1",$showcase[0]["image1"]); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		 <div class="field">
		 <div class="cleaner"></div>
		 <label  >Image1:(แสดงรูปถาพ ขนาด   450 x 280 ) สำหรับหน้า รายละเอียดสินค้า</label><img onclick="upFile('1','image2');" src="images/upload.png" /> <br>
		 <input    type="text" name="image2" value="<?php echo set_value("image2",$showcase[0]["image2"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		   <label  >Image2:</label><img onclick="upFile('1','image3');" src="images/upload.png" /> <br>
		 <input    type="text" name="image3" value="<?php echo set_value("image3",$showcase[0]["image3"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		   <div class="field">
		   <label  >Image3:</label><img onclick="upFile('1','image4');" src="images/upload.png" /> <br>
		 <input    type="text" name="image4" value="<?php echo set_value("image4",$showcase[0]["image4"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		 
          
		  <div class="cleaner"></div>
		    </fieldset>
        <p class="submit"><input type="submit" value="บันทึก">   <a style="padding-left: 25px;" href="<?php echo site_url("admin/showcase_delete/".$showcase[0]['showcase_id']) ?>">ลบ</a></p>
        
        </form>
    
       <script type="text/javascript">
       function set_select(key,value)
       {
       	$("select[name="+key+"] option[value="+value+"]").attr('selected', 'selected');
			return 10;
        }
              
$(document).ready(function() {

	

  set_select('is_publish','<?php echo set_value("is_publish",$showcase[0]["is_publish"]); ?>');

 
  set_select('sort_order','<?php echo set_value("sort_order",$showcase[0]["sort_order"]); ?>');

});


function upFile(id,field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+id+"/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}

</script>
   
      

   
   
      

   