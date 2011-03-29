<?php $controller = $this->user->current_controller(); ?> 
<?php //print_r($controller); ?>
 <?php if($this->user->is_login()){ ?>
 <ul>
          <li><a href="<?php echo site_url("admin"); ?>" class="active">Home</a></li>
          <li><a href="<?php echo site_url("admin/materials"); ?>">จัดการวัสดุ</a>
            <ul>
             
               
               <li><a href="<?php echo site_url("admin/material_add"); ?>">เพิ่มวัสดครุภุณฑ์ใหม่</a></li>
            
             
            </ul>
          </li>
         <li><a href="<?php echo site_url("admin/categories"); ?>">จัดการหมวดวัสดครุภุณฑ์</a>
         <ul>
          <li><a href="<?php echo site_url("admin/category_add"); ?>">เพิ่มหมวดวัสดครุภุณฑ์ใหม่</a></li>
         </ul>
         </li>
          <li><a href="<?php echo site_url("admin/company"); ?>">รายการบริษัท</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/company_add"); ?>">เพิ่มบริษัทใหม่</a></li>
          		
          	</ul>
          </li>
           <li><a href="<?php echo site_url("admin/budget"); ?>">รายการงบประมาณ</a>
          	<ul>
          		<li><a href="<?php echo site_url("admin/budget_add"); ?>">เพิ่มบริษัทใหม่</a></li>
          		
          	</ul>
          </li>
         
          <li><a href="<?php echo site_url("admin/users"); ?>">จัดการผู้ใช้งาน</a>
          <ul>
              <li><a href="<?php echo site_url("admin/user_add"); ?>">เพิ่มผู้ใช้งานใหม่</a></li>
              
            </ul>
          </li>
        </ul>  
        
<?php } ?>