<?php include (dirname(__FILE__) . "/header.php");  ?>

<body >
<div id="wrapper" class="bgtoppage">
<div id="main">
<!-- Toppart Start -->
<div id="top">
<div id="logo"><a href="#"><img src="images/top_logo.png" width="102" height="51" alt="FORWARD SYSTEM" /></a></div>
<div id="lang"></div>
</div>
<!-- Toppart End -->
<!-- menu Start -->
<div id="menu_flash" style="height:39px;">
<div id="menu">
<a href="<?php echo site_url("front"); ?>"><div id="home"></div></a>
<a href="<?php echo site_url("front/about"); ?>"><div id="about" ></div></a>
<a href="<?php echo site_url("front/product"); ?>"><div id="product"></div></a>
<a href="<?php echo site_url("front/carpark"); ?>"><div id="carpark"></div></a>
<a href="<?php echo site_url("front/showcase"); ?>"><div id="showcase"></div></a>
<a href="<?php echo site_url("front/download"); ?>"><div id="download"></div></a>
<a href="<?php echo site_url("front/faq"); ?>"><div id="faq"></div></a>
<a href="<?php echo site_url("front/career"); ?>"><div id="career"></div></a>
<a href="<?php echo site_url("front/contact"); ?>"><div class="contact"></div></a>

</div>

</div>
<!-- Menu End -->
<div style="margin-left: 5px;background-color: #fff;">
<div style="float:left;width:653px;background-color: #fff; height: 300px;" >

<object  width="95" height="450" >
<param name="movie" value="<?php echo base_url(); ?>uploads/<?php echo $this->fs->get_option("carpark_flash");  ?>">
<embed src="<?php echo base_url(); ?>uploads/<?php echo $this->fs->get_option("carpark_flash");  ?>" width="650" height="300">
</embed>

</object>

</div>
<div style="float:left;margin-left:0px;left;height:300px;width: 250px;" >
<div class="carpark home_menu" ></div>
<div class="access_control home_menu"></div>
<div class="home_automation home_menu"></div>

</div>
<div style="clear: both;"></div>
<div id="home_line"  ></div>
</div>
<!-- home bottom bar -->
<?php echo $this->fs->get_option("home_bottom_bar_th"); ?>
<!-- end home bottom bar; -->
</div>

<?php include (dirname(__FILE__) . "/footer.php");  ?>