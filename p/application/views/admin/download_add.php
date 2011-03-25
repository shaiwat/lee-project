<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';


?>
        <h1>Downloads</h1>

        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/download_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มดาวน์โหลดใหม่</legend>
          <div class="field">
          <label >ชื่อเรื่อง:</label><br>
         
		 <input type="text" name="title_th" value="<?php echo set_value("title_th",""); ?>"><br>
		 </div>
		 <div class="field">
		  <label >ชื่อเรื่อง (English):</label><br>
         
		 <input type="text" name="title_en"  value="<?php echo set_value("title_en",""); ?>" /><br>
		 </div>
		
        
		 
		 
	
		 <div class="cleaner"></div>
		 <div class="field">
		  <label >File donwload:</label><br>
         
		 <input type="text" name="file_path"  value="<?php echo set_value("file_path",""); ?>" /><br>
		 </div>
		 <div class="cleaner"></div>
		 <div class="text">
		 <label >รายละเอียด(ภาษาไทย):</label><br>
		
<textarea name="detail_th" style="height:120px;width: 100%;"><?php echo set_value("detail_th"); ?></textarea>
		 </div>
		  <div class="text">
		 <label >รายละเอียด(English):</label><br>
		 	<textarea name="detail_en" style="height:120px;width: 100%;"><?php echo set_value("detail_en"); ?></textarea>
		 </div>
		
		
		 
		  <div class="cleaner"></div>
		  <div class="field">
		 <label  >Thumbnail:(แสดงรูปถาพขนาด   120 x 122) สำหรับหน้า รวมรายการ สินค้า</label><img onclick="upFile('1','thumbnail');" src="images/upload.png" /><br>
		 <input   type="text" name="thumbnail" value="<?php echo set_value("thumbnail"); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		 
		  <div class="cleaner"></div>
		  </fieldset>
		 
        <p class="submit"><input type="submit" value="บันทึก"></p>
       
        </form>
        
       <script type="text/javascript">
       function set_select(key,value)
       {
       	$("select[name="+key+"] option[value="+value+"]").attr('selected', 'selected');
			return 10;
        }
              
$(document).ready(function() {

	

  set_select('is_publish','<?php echo set_value("is_publish",0); ?>');


});


function upFile(id,field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+id+"/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}

</script>
   
      

   