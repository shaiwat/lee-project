            <ul id="globalnav">
  <li><a href="<?php echo site_url("welcome"); ?>">Home</a></li>
  <li>
   <?php if($this->router->class=="customer"){ ?>
   	<a href="<?php echo site_url("customer"); ?>" class="here">ลูกค้า</a>
    <ul>
    
      <li><a href="<?php echo site_url("customer/search"); ?>">ค้นหา</a></li>
      <li><a href="<?php echo site_url("customer/add"); ?>">เพิ่มใหม่</a></li>
      <li><a href="<?php echo site_url("customer"); ?>">ดูข้อมูลทั้งหมด</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#" class="here">History</a></li>
      <li><a href="#">Sponsorship</a></li>
    </ul>
    <?php }else{ ?>
    <a href="<?php echo site_url("customer"); ?>" >ลูกค้า</a>
   <?php } ?>
  </li>
   <li>
  <?php if($this->router->class=="vender"){ ?>
  	 <a href="<?php echo site_url("vender"); ?>" class="here">Vender</a>
    <ul>
    
      <li><a href="<?php echo site_url("vender/search"); ?>">ค้นหา</a></li>
      <li><a href="<?php echo site_url("vender/vender_add"); ?>">เพิ่มใหม่</a></li>
      <li><a href="<?php echo site_url("vender"); ?>">ดูข้อมูลทั้งหมด</a></li>
      
    </ul>
    <?php }else{ ?>
    	<a href="<?php echo site_url("vender"); ?>">Vender</a>
    <?php } ?>
  	
   
   
   </li>
  <li> <?php if($this->router->class=="project"){ ?>
  	 <a href="<?php echo site_url("project"); ?>" class="here">โครงการ</a>
    <ul>
    
      <li><a href="<?php echo site_url("project/search"); ?>">ค้นหา</a></li>
      <li><a href="<?php echo site_url("project/add"); ?>">เพิ่มใหม่</a></li>
      <li><a href="<?php echo site_url("project"); ?>">ดูข้อมูลทั้งหมด</a></li>
      
    </ul>
    <?php }else{ ?>
    	<a href="<?php echo site_url("project"); ?>">โครงการ</a>
    <?php } ?>
  	</li>
  <li> <?php if($this->router->class=="task"){ ?>
  	 <a href="<?php echo site_url("task"); ?>" class="here">Task</a>
    <ul>
    
      <li><a href="<?php echo site_url("task/search"); ?>">ค้นหา</a></li>
      <li><a href="<?php echo site_url("task/task_type_add"); ?>">เพิ่มชนิดงาน</a></li>
      <li><a href="<?php echo site_url("task/task_group_add"); ?>">เพิ่มกลุ่งงาน</a></li>
     <li><a href="<?php echo site_url("task/task_detail_add"); ?>">เพิ่มชื่องาน</a></li>
     
    </ul>
    <?php }else{ ?>
    	<a href="<?php echo site_url("task"); ?>">Task</a>
    <?php } ?>
  </li>
  <li><a >Process</a></li>
  <li>
  	
  	 <?php if($this->router->class=="user"){ ?>
  	 <a href="<?php echo site_url("user/users"); ?>" class="here">Users</a>
    <ul>
    
      <li><a href="<?php echo site_url("user/search"); ?>">ค้นหา</a></li>
      <li><a href="<?php echo site_url("user/user_add"); ?>">เพิ่มใหม่</a></li>
      <li><a href="<?php echo site_url("user/users"); ?>">ดูข้อมูลทั้งหมด</a></li>
     
    </ul>
    <?php }else{ ?>
    	<a href="<?php echo site_url("user/users"); ?>">Users</a>
    <?php } ?>
  	
  </li>
  <li><a >Help</a></li>
</ul>
    