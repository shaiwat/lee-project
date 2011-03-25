<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor("EditorDefault");
$CKEditor->basePath = base_url().'ckeditor/';
$CKEditor->Config = array('toolbarStartupExpanded'=> 'false'); 
$CKEditor->Height = '700';

$carpark_flash = $this->db->query("select * from options where option_name='carpark_flash'")->result_array();
$access_control_flash = $this->db->query("select * from options where option_name='access_control_flash'")->result_array();
$home_auto_mation_flash= $this->db->query("select * from options where option_name='home_auto_mation_flash'")->result_array();
$home_bottom_th = $this->db->query("select * from options where option_name='home_bottom_bar_th'")->result_array();
$home_botton_en = $this->db->query("select * from options where option_name='home_bottom_bar_en'")->result_array();

//print_r($home_bottom_th);


?>

        <h1>หน้าแรก</h1>
 <?php echo $this->user->messages(); ?>
        <form class="form" method="post" action="<?php echo site_url("admin/front");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>แก้ไขหน้าแรก</legend>
          
            <div class="field">
          <label >Carpark Flash:</label><br>
         
		 <input type="text" name="carpark_flash" value="<?php echo set_value("carpark_flash",$carpark_flash[0]["option_value"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		    <div class="field">
          <label >Access Control Flash:</label><br>
         
		 <input type="text" name="access_control_flash" value="<?php echo set_value("access_control_flash",$access_control_flash[0]["option_value"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		    <div class="field">
          <label >Home Automation Flash:</label><br>
         
		 <input type="text" name="home_auto_mation_flash" value="<?php echo set_value("home_automation_flash",$home_auto_mation_flash[0]["option_value"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
          <label>Bottom Bar ( ภาษาไทย):</label><br/>
        		 <?php

$CKEditor->editor("home_bottom_bar_th", $home_bottom_th[0]["option_value"]);

?>
<label >Botton Bar (English):</label><br/>
<?php 
$CKEditor->editor("home_bottom_bar_en",$home_botton_en[0]["option_value"]);
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
   
      

   