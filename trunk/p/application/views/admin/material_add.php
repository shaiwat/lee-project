      <h1>วัสดุครุภัณฑ์ของเรา</h1>

        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/material_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>เพิ่มวัสดุครุภัณฑ์ใหม่</legend>
          <div class="field">
          <label for="material_name">ชื่อวัสดุครุภัณฑ์ :</label><br>
         
		 <input type="text" name="material_name" value="<?php echo set_value("material_name",""); ?>"><br>
		 </div>
		 
		 <div class="field">
		 <label >หมวดวัสดุครุภัณฑ์</label><br>
          <?php $cats = $this->db->query("select * from material_categories")->result_array();  ?>
          <select   name="category_id">
            <option value="0">กรุณาเลือก</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name']; ?></option>
            <?php } ?>
            
          </select><br/>
          </div>
           <div class="cleaner"></div>
          <div class="field">
          <label for="firstname">รหัสวัสดุครุภัณฑ์:</label><br>
		 <input type="text" name="material_code" value="<?php echo set_value("material_code",""); ?>" /><br>
          </div>
          <div class="field">
          <label >Model:</label><br>
		 <input type="text" name="model" value="<?php echo set_value("model",""); ?>" /><br>
		 </div>
          <div class="field">
          <label >ยี้ห้อวัสดุครุภัณฑ์:</label><br>
		 <input type="text" name="brand" value="<?php echo set_value("brand",""); ?>" /><br>
		 </div>
		 
		 <div class="field">
           <label>ราคาซื่อ:</label><br>
		 <input type="text" name="price" value="<?php echo set_value("price",""); ?>" /> <br>
		 </div>
		  <div class="field">
           <label for="firstname">สภานะวัสดุครุภัณฑ์:</label><br>
		<select name="material_status" >
			<option value="1">In stock</option>
			<option value="0">Out of stock</option>
		</select>
		 </div>
		 
		 
		  <div class="field">
		 <label  >รูปภาพ:</label><img onclick="upFile('1','image1');" src="images/upload.png" /><br>
		 <input    type="text" name="image1" value="<?php echo set_value("image1"); ?>"> <br>
		 </div>
	
		 <div class="cleaner"></div>
	
		 <div class="text">
		 <label >รายละเอียดวัสดุครุภัณฑ์:</label><br>
<textarea name="detail" style="height:120px;width:100%;"><?php echo set_value("detail_th"); ?></textarea>
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

	

  
  set_select('category_id','<?php echo set_value("category_id",0); ?>');
  set_select('material_status','<?php echo set_value("material_status",0); ?>');
 

});


function upFile(id,field)
{
    mywindow = window.open("<?php echo site_url("file/upload"); ?>/"+id+"/"+field, "mywindow", "");
    //mywindow.moveTo(100, 100);
}

</script>
   
      

   