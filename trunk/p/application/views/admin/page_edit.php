<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>จัดการหน้าเวบ</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/page_edit/".$page[0]["page_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
           <legend>แ้ก้ไขหน้าเวบใหม่</legend>
        <div class="field">
          <label >Path name:</label><br>
         
		 <input type="text" name="name" value="<?php echo set_value("name",$page[0]["name"]); ?>"><br>
		 </div>
		 <div class="field">
          <label for="keyword">Keyword:</label><br>
         
		 <input type="text" name="keyword" value="<?php echo set_value("keyword",$page[0]["keyword"]); ?>"><br>
		 </div>
		 <div class="field">
         
		      <label >แสดงบนหน้าเวบ:</label><br>
		<select name="is_publish">
			<option value="1">Publish</option>
			<option value="0">Private</option>
		</select>
		 </div>
       <div class="cleaner"></div> 
        <div class="field">
          <label >หัวเรื่อง (ภาษาไทย):</label><br>
         
		 <input type="text" name="title_th" value="<?php echo set_value("title_th",$page[0]["title_th"]); ?>"><br>
		 </div>
		 
		  <div class="field">
          <label >หัวเรื่อง (englsih):</label><br>
         
		 <input type="text" name="title_en" value="<?php echo set_value("title_en",$page[0]["title_en"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div> 
		  <div class="field">
          <label >Thumbnail:</label><br>
         
		 <input type="text" name="thumbnail" value="<?php echo set_value("thumbnail",$page[0]["thumbnail"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div> 
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("body_th",$page[0]["body_th"]);
?>
<label>English</label><br/>
<?php 
$CKEditor->editor("body_en", $page[0]["body_en"]);
?>
         
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




</script>    

   