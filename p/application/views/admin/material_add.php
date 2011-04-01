      <h1>ครุภัณฑ์</h1>



  <?php form_head("admin/company_add","เพิ่มครุภัณใหม่") ?>
          <?php text_field("material_name","ชื่อบริษัท",null,0); ?>
          <?php text_field("code","รหัสครุภัณ์",null,0); ?>
          <?php text_field("brand","ยี้ห้อ",null,0); ?>
          <?php text_field("buy_date","วันที่ซื้อ",null,1,"date"); ?>
          <?php text_field("model","รุ่น",null,0); ?>
          <?php text_field("price","ราคาซื้อ",null,0); ?>
         
         	<?php 
		 $rows =  $this->db->query("select budget_id, concat(budget_name,'-', year) as budget_name from budgets")->result_array();
		 select_field("budget_id","ชนิดงบประมาณ",$rows,"budget_name",null,0); 
		 ?>
		<?php 
		 $rows =  $this->db->get("place")->result_array();
		 select_field("place_id","ชือสถานที่ห้อง จัดสรร",$rows,"place_name",null,0); 
		 ?>
		
		      	<?php 
		 $rows =  $this->db->get("material_categories")->result_array();
		 select_field("category_id","หมวด",$rows,"category_name",null,0); 
		 ?>
		
		      	<?php 
		 $rows =  $this->db->query("select company_id,concat(company_name,':',address)as company_name from company")->result_array();
		 select_field("company_id","บริษัทที่ซื้อมา",$rows,"company_name",null,0); 
		 ?>
		<?php area_field("detail","รายละเอียด",null,1,"width800 height100"); ?>
          <?php form_footer(); ?>
    
          
		
         








      <?php /* ?>
      
        <form name="myform" class="form" method="post" action="<?php echo site_url("admin/material_add");  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
        
          <legend>ลงทะเบียนครุภัณฑ์ใหม่</legend>
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
          <label for="firstname">เลขที่ครุภัณฑ์:</label><br>
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
          <label >วันที่ซื้อ:</label><br>
		 <input type="text" name="brand" value="<?php echo set_value("brand",""); ?>" /><br>
		 </div>
		 <div class="field">
           <label>ราคาซื่อ:</label><br>
		 <input type="text" name="price" value="<?php echo set_value("price",""); ?>" /> <br>
		 </div>
		  <div class="field">
           <label >สภานที่จัดสรร:</label><br>
		<select name="material_status" >
			<option value="1">ห้อง 411</option>
			<option value="2">ห้องพักอาจารย์</option>
			
		</select>
		 </div>
		  <div class="field">
           <label >สภานะวัสดุครุภัณฑ์:</label><br>
		<select name="material_status" >
			<option value="1">ใช้งานได้ปกติ</option>
			<option value="2">ชำรุด</option>
			<option value="3">หมดอายุุการใช้งานแล้ว</option>
			<option value="4">ส่งคืนซากมหาลัย</option>
			
			<option value="0">สูญหาย</option>
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
   
      
<? */ ?>
   