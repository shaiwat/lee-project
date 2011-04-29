      <h1>รายงานวัสดุครุภัณฑ์</h1>


<?php $filter =  $this->session->userdata("report_filter"); ?>
  <?php form_head("report/report_filter","กรองข้อมูล") ?>
          
         
         	<?php 
		 $rows =  $this->db->query("select *  from material_types")->result_array();
		 select_field("type_id","ชนิด",$rows,"type_name",$filter,0,"ทั้งหมด"); 
		 ?>
		 
		 	      	<?php 
		 $rows =  $this->db->get("material_categories")->result_array();
		 select_field("category_id","หมวด",$rows,"category_name",$filter,0,"ทั้งหมด"); 
		 ?>
		
		 
         	<?php 
		 $rows =  $this->db->query("select budget_id, concat(budget_name,'-', year) as budget_name from budgets")->result_array();
		 select_field("budget_id","งบประมาณ",$rows,"budget_name",$filter,0,"ทั้งหมด"); 
		 ?>
		 
       
		<?php 
		 $rows =  $this->db->get("place")->result_array();
		 select_field("place_id","ชือสถานที่ห้อง จัดสรร",$rows,"place_name",$filter,0,"ทั้งหมด"); 
		 ?>
		
	
		      	<?php 
		 $rows =  $this->db->query("select company_id,concat(company_name,':',address)as company_name from company")->result_array();
		 select_field("company_id","บริษัทที่ซื้อมา",$rows,"company_name",$filter,0,"ทั้งหมด"); 
		 ?>
		 
		     	<?php 
		 $rows =  $this->db->query("select year  from budgets group by year")->result_array();
		 select_field("year","ปีการศีกษา",$rows,"year",$filter,0,"ทั้งหมด"); 
		 ?>
		 <input style="margin-top:28px;padding:2px 10px;height:30px;"  type="submit" value="ดูรายงาน">
			 
 <div class="cleaner"></div>
 </fieldset>
      
 </form>


      
          
          <style>
          #content { padding-left: 10px;}
          .form .field,.form .field select{
           width: 150px;
          }
          </style>
    