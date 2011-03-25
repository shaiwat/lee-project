<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>เกียวกับเรา</h1>
 <?php echo $this->user->messages(); ?>
        <form class="form" method="post" action="<?php echo site_url("admin/about");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าเกียวกับเรา</legend>
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("page_about_th", $this->fs->get_option("page_about_th"));
?>
<label>English</label><br/>
<?php 
$CKEditor->editor("page_about_en", $this->fs->get_option("page_about_en"));
?>
         
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

   
      

   