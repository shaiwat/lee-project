<?php 

include_once "ckeditor/ckeditor.php";
$CKEditor = new CKEditor();
$CKEditor->basePath = base_url().'/ckeditor/';


?>
        <h1>สินค้าของเรา</h1>

        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/product_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มสินค้าใหม่</legend>
          <div class="field">
          <label for="product_name_th">ชื่อสินค้า (ภาษาไทย):</label><br>
         
		 <input type="text" name="product_name_th" value="<?php echo set_value("product_name_th",""); ?>"><br>
		 </div>
		 <div class="field">
		  <label for="firstname">ชื่อสินค้า (English):</label><br>
         
		 <input type="text" name="product_name_en"  value="<?php echo set_value("product_name_en",""); ?>" /><br>
		 </div>
		 <div class="field">
		 <label >หมวดสินค้า</label><br>
          <?php $cats = $this->db->query("select * from product_categories")->result_array();  ?>
          <select   name="cat_id">
            <option value="0">กรุณาเลือก</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['pcat_name_th']; ?></option>
            <?php } ?>
            
          </select><br/>
          </div>
           <div class="cleaner"></div>
          <div class="field">
          <label for="firstname">รหัสสินค้า:</label><br>
		 <input type="text" name="product_code" value="<?php echo set_value("product_code",""); ?>" /><br>
          </div>
          <div class="field">
          <label >Model:</label><br>
		 <input type="text" name="model" value="<?php echo set_value("model",""); ?>" /><br>
		 </div>
          <div class="field">
          <label >ยี้ห้อสินค้า:</label><br>
		 <input type="text" name="brand" value="<?php echo set_value("brand",""); ?>" /><br>
		 </div>
		 
		 <div class="field">
           <label>ราคาขาย:</label><br>
		 <input type="text" name="price" value="<?php echo set_value("price",""); ?>" /> <br>
		 </div>
		  <div class="field">
           <label for="firstname">สภานะสินค้า:</label><br>
		<select name="product_status" >
			<option value="1">In stock</option>
			<option value="0">Out of stock</option>
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
		 <div class="text">
		 <label >Excerpt(ภาษาไทย):</label><br>
		 	<textarea name="excerpt_th" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th"); ?></textarea>
		 </div>
		  <div class="text">
		 <label for="firstname">Excerpt(english):</label><br>
		 	<textarea name="excerpt_en" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th"); ?></textarea>
		 </div>
		 <div class="text">
		 <label >รายละเอียดสินค้า(ภาษาไทย):</label><br>
		 <?php

//$CKEditor->editor("textarea_id", "This is some sample text");
?>
<textarea name="detail_th" style="height:120px;width: 100%;"><?php echo set_value("detail_th"); ?></textarea>
		 </div>
		  <div class="text">
		 <label >รายละเอียดสินค้า (English): ใส่ </label><br>
		 	<textarea name="detail_en" style="height:120px;width: 100%;"><?php echo set_value("detail_en"); ?></textarea>
		 </div>
		 <div class="field" style="width:600px;">
          <label >keyword:(คำสำหรับเอาไว้ ค้นหาจาก google.com จำเป็นต้องมี)</label><br>
          
		 <input type="text" style="width:570px;" name="keyword" value="<?php echo set_value("keyword"); ?>" /><br>
		 </div>
		 <div class="field">
		  <div class="cleaner"></div>
		 <label >Youtube Embed link:</label><br>
		 <input type="text" name="youtube" value="<?php echo set_value("youtube"); ?>"><br>
		 </div>
		 
		  <div class="cleaner"></div>
		  <div class="field">
		 <label  >Thumbnail:(แสดงรูปถาพ ขนาด   196 x 122 ) สำหรับหน้า รวมรายการ สินค้า</label><img onclick="upFile('1','image1');" src="images/upload.png" /><br>
		 <input    type="text" name="image1" value="<?php echo set_value("image1"); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		 <div class="field">
		 <div class="cleaner"></div>
		 <label  >Image1:(แสดงรูปถาพ ขนาด   450 x 280 ) สำหรับหน้า รายละเอียดสินค้า</label><img  onclick="upFile('1','image2');" src="images/upload.png" /><br>
		 <input   type="text" name="image2" value="<?php echo set_value("image2"); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		   <label  >Image2:</label><img  onclick="upFile('1','image3');" src="images/upload.png" /><br>
		 <input  type="text" name="image3" value="<?php echo set_value("image3"); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		   <div class="field">
		   <label  >Image3:</label><img  onclick="upFile('1','image4');" src="images/upload.png" /><br>
		 <input  type="text" name="image4" value="<?php echo set_value("image4"); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		   <label  >DataSheet:</label><br>
		 <input type="text" name="data_sheet" value="<?php echo set_value("data_sheet"); ?>"><br>
		 </div>
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
  set_select('cat_id','<?php echo set_value("cat_id",0); ?>');
  set_select('product_status','<?php echo set_value("product_status",0); ?>');
  set_select('sort_order','<?php echo set_value("sort_order",0); ?>');

});


function upFile(id,field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+id+"/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}

</script>
   
      

   