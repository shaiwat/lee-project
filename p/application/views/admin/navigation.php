<?php $controller = $this->user->current_controller(); ?> 

 <?php if($this->user->is_login()){ ?>
<br/>


<?php 
 $user = $this->user->get();
 $roles = $this->db->query("select * from roles where role_id = ".$user["role_id"])->result_array();
$sql = "select * from controller_groups  order by sort_order asc";
$groups = $this->db->query($sql)->result_array(); ?>
	<?php foreach($groups as  $group){ ?>
	<?php $sql  = "select * from controllers  where c_id in (".$roles[0]["controller_access"].") and is_menu = 1 and c_group_id = ".$group["c_group_id"];
			$menus = $this->db->query($sql)->result_array();
  if(count($menus)){
			?>
   <h3><?php echo $group["group_name"]; ?></h3>
   <ul>
   		<?php
			
   		foreach($menus as $menu){ ?>
   		<li <?php  if($controller== $menu["controller"]){ echo 'class="active"';} ?>><a href="<?php echo site_url($menu["controller"]); ?>"><?php echo $menu["detail"]; ?></a></li>
   		
   		<?php } ?>
   </ul>
   <?php } ?>
   <?php }?>
 <?php } ?>

