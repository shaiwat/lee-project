<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>หน้าถามตอบ</h1>
 <?php echo $this->user->messages(); ?>
        <form class="form" method="post" action="<?php echo site_url("admin/faq");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าถามตอบ</legend>
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("page_faq_th", $this->fs->get_option("page_faq_th"));
?>
<label>English</label><br/>
<?php 
$CKEditor->editor("page_faq_en", $this->fs->get_option("page_faq_en"));
?>
         
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

   
      

   