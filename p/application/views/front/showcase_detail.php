<div id="page">

<div id="product-panel" style="padding-left: 0px;" >

<h1><?php echo $row[0]["title_th"]; ?></h1>
<div class="product-image">
<img src="<?php echo base_url().'/timthumb.php?src=uploads/'.$row[0]['image2']?>&w=600&h=400&zc=1" alt=""  />
</div>


<div>

<?php echo $row[0]["detail_th"]; ?>

</div>	

</div>
<div style="clear: both;"></div>
</div>




<style>
#page
{
	width: 900px;
	min-height: 300px;
	background-color: #fff;
	padding-top: 15px;
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
#divform .formfield input.textfieldstyle
{
	width: 582px;
}
.product-image
{
	width: 840px;
	height: 400px;
}

</style>









