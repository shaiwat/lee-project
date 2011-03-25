<div id="left-menu">
	<div onclick="window.location='<?php echo site_url("admin/products"); ?>'" >จัดการสินค้า</div>
	<div onclick="window.location='<?php echo site_url("admin/categories"); ?>'" >จัดการหมวดสินค้า</div>
	<div onclick="window.location='<?php echo site_url("admin/showcases"); ?>'">จัดการผลงานของเรา</div>
	<div onclick="window.location='<?php echo site_url("admin/promotions"); ?>'">จัดการโปรโมชั่น</div>
	<div onclick="window.location='<?php echo site_url("admin/about"); ?>'">เกี่ยวกับเรา</div>
	<div onclick="window.location='<?php echo site_url("admin/contact"); ?>'">Contact Messages</div>

</div>

<style>
#left-menu div{

border:1px solid #FFFFFF;
color:#000000;
display:block;
font-size:1.2em;
outline:medium none;
padding:10px 20px;

background-color: #ccc;
height: 20px;
cursor: pointer;
cursor: hand;


}
#left-menu div:hover{



background-color: #999;


}
</style>