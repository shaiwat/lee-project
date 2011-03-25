<?php $controller = $this->user->current_controller(); ?> 
<?php //print_r($controller); ?>
 <?php if($this->user->is_login()){ ?>
 <ul>
          <li><a href="<?php echo site_url("admin"); ?>" class="active">Introduction</a></li>
          <li><a href="<?php echo site_url("admin/products"); ?>">จัดการสินค้า</a>
            <ul>
              <li><a href="<?php echo site_url("admin/categories"); ?>">จัดการหมวดสินค้า</a></li>
               <li><a href="<?php echo site_url("admin/product_add"); ?>">เพิ่มสินค้าใหม่</a></li>
            
             
            </ul>
          </li>
        
          <li><a href="<?php echo site_url("admin/pages"); ?>">Pages</a>
          	<ul>
          			<li><a href="<?php echo site_url("admin/page_add"); ?>" >เพิ่ม Page ใหม่</a></li>
          	</ul>
          </li>
            <li><a href="<?php echo site_url("admin/files"); ?>">จัดการไฟล์</a></li>
          <li><a href="<?php echo site_url("admin/front"); ?>">ปรับแต่งหน้าแรก</a></li>
           <li><a href="<?php echo site_url("admin/downloads"); ?>">Downloads</a></li>
          <li><a href="<?php echo site_url("admin/showcase"); ?>">หน้าผลงาน</a>
          	<ul>
          	<li><a href="<?php echo site_url("admin/showcase_add"); ?>">เพิ่มผลงานใหม่</a></li>
          	</ul>
          </li>
          <li><a href="<?php echo site_url("admin/carpark"); ?>">Carpark</a></li>
          <li><a href="<?php echo site_url("admin/career"); ?>">หน้าสมัครงาน</a></li>
          
           <li><a href="<?php echo site_url("admin/faq"); ?>">ถามตอบ</a></li>
          <li><a href="<?php echo site_url("admin/about"); ?>">เกี่ยวกับเรา</a></li>
          <li><a href="<?php echo site_url("admin/contacts"); ?>">Contact Messages</a></li>
           <li><a href="<?php echo site_url("admin/setting"); ?>">ตั้งค่าเวบไซต์</a>
          <li><a href="<?php echo site_url("admin/users"); ?>">จัดการผู้ใช้งาน</a>
          <ul>
              <li><a href="<?php echo site_url("admin/user_add"); ?>">เพิ่มผู้ใช้งานใหม่</a></li>
              
            </ul>
          </li>
        </ul>  
        
<?php } ?>