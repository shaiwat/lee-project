<?php 

function get_thumbail($file)
{
		if(!($file["thumbnail"]=="")){
		return '<img src="'.base_url().'/timthumb.php?src=uploads/'.$file['thumbnail'].'&w=35&h=35&zc=1" alt="" />';
		}
	
}

?>


<div style="padding:25px;">
<h1>ผลงานของเรา</h1>
<?php foreach($rows as $row){ ?>
<div class="contentmain">
	<h2><?php echo $row["title_th"]; ?></h2>
	
	<div style="text-align: center;" class="thumbnail">
	
	<img border="0" 
	src="<?php echo base_url().'/timthumb.php?src=uploads/'.$row['image1'].'&w=240&h=180&zc=1'; ?>"></div>
	<div   class="detail">
		<div  ><?php echo $row["detail_th"]; ?></div>
		
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
	width: 242px;
	
}
.contentmain .detail
{
	float: left;
	width: 570px; line-height: 18px; margin-left: 13px;
	
}
.contentmain {
    border-bottom: 1px dotted #E1E1E1;
    margin: 10px 0;
    padding-bottom: 10px;
    
}
.contentmain h2 {
    color: #000000;
    font-size: 16px;
    font-weight: normal;
    color: #39AD00;
    
}
.contentmain h2 a, .contentmain h2 a:active, .contentmain h2 a:visited {
    color: #000000;
    font-size:14px;
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



      </div>