

<div id="page">
<div id="cat">

      <div id="sub_menu">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
      <tr>
    <td class="second first">
    <div class="menu menu-first"><a href="<?php echo  site_url("front/set_cat/0"); ?>">ทุกหมวด</a></div>
    <div class="menudesc">
     </div></td>
  </tr>
    <?php $cats = $this->db->query("select *  from product_categories where is_publish  =1")->result_array(); ?>
    <?php foreach($cats as $row){ ?>
    <tr>
    <td class="second">
    <div class="menu <?php if($this->session->userdata("cat_id") ==$row["cat_id"] ){ echo ' active';} ?>"><a href="<?php echo  site_url("front/set_cat/".$row["cat_id"]); ?>"><?php echo $row['pcat_name_th']; ?></a><?php //echo  get_thumbail($row)?></div>
    <div class="menudesc">
     </div></td>
  </tr>
   <?php } ?>
</tbody></table>

</div>
</div>
<div id="product-panel" >

<div id="productlist">
<?php echo $this->fs->current_cat_banner(); ?>
	<?php foreach($rows as $row){ ?>
	<!-- item -->
	<div class="item">
		<div class="productthumb" style="height:125px;"><a href="<?php echo site_url("front/product_detail/".$row["product_id"]); ?>"><img style="width:196px;" src="<?php echo base_url().'/timthumb.php?src=uploads/'.$row['image1']?>&w=196&h=122&zc=1" alt="" /></a></div>
		<div class="title"><a href="<?php echo site_url("front/product_detail/".$row["product_id"]); ?>"><?php echo $row["product_name_th"]; ?> </a></div>
		<div class="itemdesc"><?php echo $row["excerpt_th"]; ?></div>
		<div class="readmore"><a href="<?php echo site_url("front/product_detail/".$row["product_id"]); ?>">อ่านเพิ่มเติม</a></div>
	</div>
	<?php } ?>
	<div style="clear: both;"></div> 
	<?php echo  $paging; ?>
</div>
</div>
<div style="clear: both;"></div>


</div>
<?php //print_r($this->session->userdata("cat_id")); ?>



<style>
#page
{
	width: 900px;
	min-height: 300px;
	background-color: #fff;
	padding-top: 15px;
	margin-top: 10px;
}
#cat
{
	width: 219px;
	
	min-height: 300px;
	float: left;
}
#product-panel
{
	width: 640px;
	
	min-height: 300px;
	float: left;
	padding: 0px 10px;
	margin-left: 18px;
}

</style>