

<div style="padding:25px;">
<h1>ดาวน์โหลด</h1>
<?php foreach($rows as $row){ ?>
<div class="contentmain">
	<h2><a href=""><?php echo $row["title_th"]; ?></a></h2>
	
	<div style="text-align: center;" class="thumbnail">
	
	<img border="0" 
	src="<?php echo base_url().'/timthumb.php?src=uploads/'.$row['thumbnail'].'&w=140&h=125&zc=0'; ?>"></div>
	<div   class="detail">
		<div style="height:94px;" ><?php echo $row["detail_th"]; ?></div>
		<div style="margin: 8px 0pt;"><div class="downloadbar">
		<a href="<?php echo base_url(); ?>/uploads/<?php echo $row["file_path"]; ?>">ดาวน์โหลดไฟล์นี้</a></div></div>
	</div>
	 <div class="cleaner"></div>
</div>
<?php } ?>

<?php echo $paging; ?>
 <div class="cleaner"></div>

</div>
<style>
.contentmain .thumbnail
{
	float: left;
	width: 170px;
	
}
.contentmain .detail
{
	float: left;
	width: 652px; line-height: 18px; margin-left: 13px;
	
}
.contentmain {
    border-bottom: 1px solid #E1E1E1;
    margin: 10px 0;
    padding-bottom: 10px;
}
.contentmain h2 {
    color: #000000;
    font-size: 22px;
    font-weight: normal;
    margin-left: 170px;
    
}
.contentmain h2 a, .contentmain h2 a:active, .contentmain h2 a:visited {
    color: #000000;
    font-size: 22px;
    text-decoration: none;
}
.contentmain h2 a:hover {
    color: #39AD00;
    font-size: 22px;
    text-decoration: none;
}
.update {
    color: #999999;
    margin-bottom: 10px;
}
.update a, .update a:visited, .update a:active {
    text-decoration: underline;
}
.downloadbar {
    -moz-border-radius: 5px 5px 5px 5px;
    background-color: #39AD00;
    border: 1px solid #39AD00;
    color: #FFFFFF;
    cursor: pointer;
    display: inline;
    margin: 8px 0;
    padding: 3px 5px;
}
.downloadbar:hover {
    -moz-border-radius: 5px 5px 5px 5px;
    background-color: #000000;
    border: 1px solid #000000;
}
.downloadbar a, .downloadbar a:active, .downloadbar a:visited {
    color: #FFFFFF;
    text-decoration: none;
}

</style>