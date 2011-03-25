<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';



?>
     
        <h1>หน้าสมัครงาน</h1>
 <?php echo $this->user->messages(); ?>
        <form class="form" method="post" action="<?php echo site_url("admin/career");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าสมัครงาน</legend>
          <label>ภาษาไทย</label><br/>
        		 <?php

$CKEditor->editor("page_career_th", $this->fs->get_option("page_career_th"));
?>

		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"></p>
        </form>

   
      

   