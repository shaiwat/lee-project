<?php $controller = $this->user->current_controller(); ?> 
<?php //print_r($controller); ?>
 <?php if($this->user->is_login()){ ?>
 <ul>
          <li><a href="<?php echo site_url("admin"); ?>" class="active">Home</a></li>
          <li><a href="<?php echo site_url("admin/materials"); ?>">จัดการวัสดุ</a>
            <ul>
			  <li><a href="<?php echo site_url("admin/material_add"); ?>">ลงทะเบียนวัสดใหม่</a></li>
 		 </ul></li>
            
             <li><a href="<?php echo site_url("admin/materials"); ?>">จัดครุภัณฑ์</a>
            <ul>
		 <li><a href="<?php echo site_url("admin/material_add"); ?>">ลงทะเบียนครุภัณฑ์ใหม่</a></li>
            
             
            </ul>
          </li>
           <li><a href="<?php echo site_url("admin/materials"); ?>">จัดหมวดวัสดุครุภัณฑ์</a>
            <ul>
		 <li><a href="<?php echo site_url("admin/material_add"); ?>">เพิ่มหมวดใหม่</a></li>
            
             
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
         
          <li><a href="<?php echo site_url("admin/users"); ?>">จัดการผู้ใช้งาน</a>
          <ul>
              <li><a href="<?php echo site_url("admin/user_add"); ?>">เพิ่มผู้ใช้งานใหม่</a></li>
              
            </ul>
          </li>
          
            <li><a href="<?php echo site_url("admin/materials"); ?>">รายงาน</a>
         
          </li>
        </ul>  
        
<?php } ?>