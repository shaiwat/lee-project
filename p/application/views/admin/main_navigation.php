

<?php $controller = $this->user->current_controller(); ?> 

<ul class="tabs" style="width:1000px;" >
<?php 
$defect_doc =$this->session->userdata("defect_doc");
if(!$this->user->is_login()){ ?>
<li class="active"><a class="active" href="">Login</a></li>
<?php }else{ ?>
<li class="active" ><a class="active" href="">Dashboard</a></li>	
<li ><a  href="">สินค้า</a></li>

  <li ><a class="active" href="">Showcase</a></li>
  <li ><a class="active" href="">Inbox</a></li>
<?php } ?>
</ul>
<div class="clear"></div>
