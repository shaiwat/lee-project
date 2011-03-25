<?php include (dirname(__FILE__) . "/header.php");  ?>

<body>
<div id="wrapper" class="bgtoppage">
<div id="main">
<!-- Toppart Start -->
<div id="top">
<div id="logo"><a href="#"><img src="images/top_logo.png" width="102" height="51" alt="FORWARD SYSTEM" /></a></div>
<!-- 
<div id="lang"><a href="#"><img src="images/lang_thai.png" width="18" height="13" alt="Thai" /></a><a href="#"><img src="images/lang_en.png" width="18" height="13" alt="English" /></a></div>
 -->
</div>
<!-- Toppart End -->
<!-- menu Start -->
<?php include (dirname(__FILE__) . "/navigation.php");  ?>

<div id="page-content"> 
<?php //if(isset($leftbar)){ include(dirname(__FILE__)."/".$leftbar);} ?>

<?php //echo $tabs; ?>
<div class="clear"></div>
<div class="container">

<?php echo $contents; ?> </div>
</div>
<div class="clear"></div>
<script type="text/javascript" >
	$(function() {
		$( ".tabs" ).removeClass("primary");
	});
</script>

<?php include (dirname(__FILE__) . "/footer.php");  ?>