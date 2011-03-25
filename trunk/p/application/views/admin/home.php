<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>หน้าแรก</h1>

        <form class="form" method="post" action="<?php echo site_url("admin/about");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าแรก</legend>
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("body_th", "");
?>
<label>English</label><br/>
<?php 
$CKEditor->editor("body_en", "");
?>
         
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>
    <script type="text/javascript">
$(document).ready(function() {

	var is_publish = '<?php echo set_value("is_publish",0); ?>';
	$("#is_publish option[value="+is_publish+"]").attr('selected', 'selected');




});



</script>
   
      

   