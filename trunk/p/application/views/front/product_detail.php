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
    <?php $cats = $this->db->query("select *  from product_categories  where is_publish  =1")->result_array(); ?>
    <?php foreach($cats as $row){ ?>
    <tr>
    <td class="second">
    <div class="menu"><a href="<?php echo  site_url("front/product/".$row["cat_id"]); ?>"><?php echo $row['pcat_name_th']; ?></a></div>
    <div class="menudesc">
     </div></td>
  </tr>
   <?php } ?>
</tbody></table>

</div>
</div>
<div id="product-panel" style="padding-left: 0px;" >
<?php $this->user->messages(); ?>
 <?php echo  validation_errors('<div class="notification tip" style="display: block;"> <span class="strong"></span>', '<span title="Dismiss" class="close"></span></div>'); ?>
<h1><?php echo $product[0]["product_name_th"]; ?></h1>
<div class="product-image">
<img src="<?php echo base_url().'/timthumb.php?src=uploads/'.$product[0]['image2']?>&w=450&h=280&zc=1" alt=""  />
</div>
	<div id="tab">
<!-- Tab part Start -->
<ul class="tabs">
    <li class="active"><a href="#tab1">รายละเอียดสินค้า</a></li>
    <li><a href="#tab2">Data sheets</a></li>
    <li><a href="#tab3">สินค้าที่เกี่ยวข้อง</a></li>
    <li><a href="#tab4">ติดต่อสอบถามสินค้านี้</a></li>
</ul>

<div class="tab_container">
    <div class="tab_content" id="tab1" style="display: block;">
      <div><?php //echo $product[0]["product_name_th"]; ?></div>
      <div>ยี่ห้อ:<?php echo $product[0]["brand"]; ?></div>
       <?php echo $product[0]["detail_th"]; ?>
       <br/>
    <?php if(!($product[0]["price"]=="")){ ?>   ราคาขาย :<?php echo $product[0]["price"]; ?>บาท<br/> <?php } ?>
   สถานะสินค้า :<?php if($product[0]["product_status"]){ echo "In Storck";}else { echo "Out of Stock";} ?>
       
    </div>
    <div class="tab_content" id="tab2" style="display: none;">
    <?php if($product[0]["data_sheet"]){ ?>
    <a href="<?php echo base_url()."uploads/".$product[0]["data_sheet"];  ?>"> <img width="132" height="27" alt="DOWNLOAD PDF" src="images/download_pdf_button.png"></a>
    <?php  
    	}
    ?>
    </div>
    <div class="tab_content" id="tab3" style="display: none;">
       <!--Content-->

	</div>
	<div class="tab_content" id="tab4" style="display: none;">
       <form name="myform" id="divform" class="form" method="post" action="<?php echo site_url("front/product_detail/".$product[0]["product_id"]); ?>">
<div class="title">
</div>

<div class="formtitle">ชื่อนามสกุลผู้ติดต่อ:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="name" value="<?php echo set_value("name"); ?>" /></div>
<div class="formtitle">บริษัท:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="company" value="<?php echo set_value("company"); ?>" /></div>
<div class="formtitle">อีเมล์:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="email" value="<?php echo set_value("email"); ?>" /></div>
<div class="formtitle">เบอร์โทร:</div>
<div class="formfield"><input type="text" class="textfieldstyle" name="tel" value="<?php echo set_value("tel"); ?>" /></div>
<input type="hidden" name="product_id" value="<?php echo $product[0]["product_id"]; ?>" />
<div class="formtitle">รายละเอียด:</div>
<div class="formfield"><textarea class="textareastyle" rows="5" cols="45" style="height: 150px; width: 582px;" name="message"></textarea></div>
<div style="clear: both;"></div>
<br/>
<button type="button"  onclick="document.forms['myform'].submit();" class="grey">ส่งข้อความ</button>

</form>



    </div>
    
</div>

<!-- Tab part End -->
<?php //print_r($product); ?>
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
</style>


<script type="text/javascript">
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
	</script>







