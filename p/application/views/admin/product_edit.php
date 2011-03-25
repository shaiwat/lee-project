
        <h1>สินค้าของเรา</h1>

        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/product_edit/".$product[0]["product_id"]);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มสินค้าใหม่</legend>
          <div class="field">
          <label for="product_name_th">ชื่อสินค้า (ภาษาไทย):</label><br>
         
		 <input type="text" name="product_name_th" value="<?php echo set_value("product_name_th",$product[0]["product_name_th"]); ?>"><br>
		 </div>
		 <div class="field">
		  <label for="firstname">ชื่อสินค้า (English):</label><br>
         
		 <input type="text" name="product_name_en"  value="<?php echo set_value("product_name_en",$product[0]["product_name_en"]); ?>" /><br>
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
		 <input type="text" name="product_code" value="<?php echo set_value("product_code",$product[0]["product_code"]); ?>" /><br>
          </div>
           <div class="field">
          <label >Model:</label><br>
		 <input type="text" name="model" value="<?php echo set_value("model",$product[0]["model"]); ?>" /><br>
		 </div>
          <div class="field">
          <label >ยี้ห้อสินค้า:</label><br>
		 <input type="text" name="brand" value="<?php echo set_value("brand",$product[0]["brand"]); ?>" /><br>
		 </div>
		  <div class="cleaner"></div>
		 <div class="field">
           <label>ราคาขาย:</label><br>
		 <input type="text" name="price" value="<?php echo set_value("price",$product[0]["price"]); ?>" /> <br>
		 </div>
		  <div class="field">
		   <div class="cleaner"></div>
           <label for="firstname">สภานะสินค้า:</label><br>
		<select name="product_status" >
			<option value="1">In stock</option>
			<option value="0">Out of stock</option>
		</select>
		 </div>
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
		  <div class="field">
           <label >แสดงบนหน้าเวบ:</label><br>
		<select name="is_publish">
			<option value="1">Publish</option>
			<option value="0">Private</option>
		</select>
		 </div>
		 <div class="cleaner"></div>
		 <div class="text">
		 <label >Excerpt(ภาษาไทย):</label><br>
		 	<textarea name="excerpt_th" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th",$product[0]["excerpt_th"]); ?></textarea>
		 </div>
		  <div class="text">
		 <label for="firstname">Excerpt(english):</label><br>
		 	<textarea name="excerpt_en" style="heifht:30px;width: 100%;"><?php echo set_value("excerpt_th",$product[0]["excerpt_th"]); ?></textarea>
		 </div>
		 <div class="text">
		 <label >รายละเอียดสินค้า(ภาษาไทย):</label><br>
		 	<textarea name="detail_th" rows="3" cols="" style="height:120px;width: 100%;"><?php echo set_value("detail_th",$product[0]["detail_th"]); ?></textarea>
		 </div>
		  <div class="text">
		 <label >รายละเอียดสินค้า (English):</label><br>
		 	<textarea name="detail_en" style="height:120px;width: 100%;"><?php echo set_value("detail_en",$product[0]["detail_en"]); ?></textarea>
		 </div>
		 <div class="field">
          <label >keyword:</label><br>
          
		 <input type="text" name="keyword" value="<?php echo set_value("keyword",$product[0]['keyword']); ?>" /><br>
		 </div>
		 <div class="field">
		 <label for="firstname" >Youtube Embed liik:</label><br>
		 <input type="text" name="youtube" value="<?php echo set_value("youtube",$product[0]["youtube"]); ?>"><br>
		 </div>
		 
		 <div class="cleaner"></div>
		   <div class="field">
		 <label  >Thumbnail:(แสดงรูปถาพ ขนาด   196 x 122 ) สำหรับหน้า รวมรายการ สินค้า</label><img onclick="upFile('1','image1');" src="images/upload.png" /><br>
		 <input    type="text" name="image1" value="<?php echo set_value("image1",$product[0]["image1"]); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		 <div class="field">
		 <div class="cleaner"></div>
		 <label  >Image1:(แสดงรูปถาพ ขนาด   450 x 280 ) สำหรับหน้า รายละเอียดสินค้า</label><img  onclick="upFile('1','image2');" src="images/upload.png" /><br>
		 <input   type="text" name="image2" value="<?php echo set_value("image2",$product[0]["image2"]); ?>"> <br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		   <label  >Image2:</label><img  onclick="upFile('1','image3');" src="images/upload.png" /><br>
		 <input  type="text" name="image3" value="<?php echo set_value("image3",$product[0]["image3"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		   <div class="field">
		   <label  >Image3:</label><img  onclick="upFile('1','image4');" src="images/upload.png" /><br>
		 <input  type="text" name="image4" value="<?php echo set_value("image4",$product[0]["image4"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		  <div class="field">
		   <label for="firstname" >DataSheet:</label><br>
		 <input type="text" name="data_sheet" value="<?php echo set_value("data_sheet",$product[0]["data_sheet"]); ?>"><br>
		 </div>
		  <div class="cleaner"></div>
		  </fieldset>
        <p class="submit"><input type="submit" value="บันทึก"> 
         <a style="padding-left: 25px;" href="<?php echo site_url("admin/product_delete/".$product[0]['product_id']) ?>">ลบ</a></p>
        </form>
        
       <script type="text/javascript">
       function set_select(key,value)
       {
       	$("select[name="+key+"] option[value="+value+"]").attr('selected', 'selected');
			return 10;
        }
              
$(document).ready(function() {

	

  set_select('is_publish','<?php echo set_value("is_publish",$product[0]["is_publish"]); ?>');
  set_select('cat_id','<?php echo set_value("cat_id",$product[0]["cat_id"]); ?>');
  set_select('product_status','<?php echo set_value("product_status",$product[0]["product_status"]); ?>');
  set_select('sort_order','<?php echo set_value("sort_order",$product[0]["sort_order"]); ?>');

});


function upFile(id,field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+id+"/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}


</script>
   
      

   