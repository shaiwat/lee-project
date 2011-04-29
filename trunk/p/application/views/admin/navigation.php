<?php $controller = $this->user->current_controller(); ?> 
<?php //print_r($controller); ?>
 <?php if($this->user->is_login()){ ?>
 <ul>
          <li><a href="<?php echo site_url("admin"); ?>" class="active">Home</a></li>
          <li><a href="<?php echo site_url("admin/materials2"); ?>">จัดการวัสดุ</a>
            <ul>
			  <li><a href="<?php echo site_url("admin/material_add2"); ?>">ลงทะเบียนวัสดใหม่</a></li>
 		 </ul></li>
            
             <li><a href="<?php echo site_url("admin/materials"); ?>">จัดครุภัณฑ์</a>
            <ul>
		 <li><a href="<?php echo site_url("admin/material_add"); ?>">ลงทะเบียนครุภัณฑ์ใหม่</a></li>
            
             
            </ul>
          </li>
           <li><a href="<?php echo site_url("admin/categories"); ?>">จัดหมวดวัสดุครุภัณฑ์</a>
            <ul>
		 <li><a href="<?php echo site_url("admin/category_add"); ?>">เพิ่มหมวดใหม่</a></li>
            
             
            </ul>
          </li>
          <li><a href="<?php echo site_url("admin/company"); ?>">รายการบริษัท</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/company_add"); ?>">เพิ่มบริษัทใหม่</a></li>
          		
          	</ul>
          </li>
           <li><a href="<?php echo site_url("admin/budgets"); ?>">รายการชนิดงบประมาณ</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/budget_add"); ?>">เพิ่มชนิดงบประมาณ</a></li>
          		
          	</ul>
          </li>
         <li><a href="<?php echo site_url("admin/room"); ?>">รายการสถานที่/ห้อง</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/room_add"); ?>">เพิ่มสถานที่/ห้อง</a></li>
          		
          	</ul>
          </li>
          
           <li><a href="<?php echo site_url("admin/maintains"); ?>">รายการงานชนิดซ่อม</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/maintain_add"); ?>">เพิ่มชนิดงานซ่อมใหม่</a></li>
          		
          	</ul>
          </li>
          <li><a href="<?php echo site_url("admin/users"); ?>">จัดการผู้ใช้งาน</a>
          <ul>
              <li><a href="<?php echo site_url("admin/user_add"); ?>">เพิ่มผู้ใช้งานใหม่</a></li>
              
            </ul>
          </li>
          
            <li><a href="<?php echo site_url("report/index"); ?>">รายงาน</a>
         
          </li>
        </ul>  
        
<?php } ?>