<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>หน้าผลงาน</h1>
 <?php echo $this->user->messages(); ?>
        <form class="form" method="post" action="<?php echo site_url("admin/showcase");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าผลงาน</legend>
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("page_showcase_th", $this->fs->get_option("page_showcase_th"));
?>
<label>English</label><br/>
<?php 
$CKEditor->editor("page_showcase_en", $this->fs->get_option("page_showcase_en"));
?>
         
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

   
      

   