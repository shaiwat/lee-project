<?php if(isset($menu)){ echo $menu; }?>


<div  id="manage-contaner">
    <div id="manage-content">
        <?php $this->load->view("message");?>
        <?php if(isset($filter)){echo $filter;  } ?>
   
        <?php  if(isset($content)){ echo $content; } ?>
    </div>
 <div id="manage-right">
        <?php if(isset($right)){ echo $right; } ?>
    </div> 
    <div style="clear:both;"></div>
</div>
<br/>
<div class="submit_bottom"></div>

<style>
#page #leftbar
{
    display:none;
}
#page .rightbar
{
  width: 900px;
}
#page .rightbar #rightbar
{
  width: 900px;
}
#manage-content
{
    float:left;
    width: 680px;
   border: 1px solid #ccc;
   padding: 10px;
   margin-top: 20px;
  
   
    
}
#manage-right{
    float:right;
    width: 190px;
   
}

</style>
       <script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
	</script>