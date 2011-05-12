<form class="form" method="post" action="<?php echo site_url("admin/material_filter2"); ?>" >
        <fieldset>
          <legend>กรองข้อมูล</legend>
         
         <div class="field">
          หมวดวัสดุครุภุณฑ์<br>
          <?php $cats = $this->db->query("select * from material_categories")->result_array();  ?>
          <select style="float:left;width:200px;"  name="category_id">
            <option value="0">All</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name']; ?></option>
            <?php } ?>
            </select>
         
         </div>
         
          
       
        <input  type="submit" value="กรองข้อมูล" style="margin-top: 22px; padding-left: 14px; padding-top: 2px; height: 34px; padding-right: 13px;">
       
       
        </fieldset>
        </form>
        <?php //print_r($this->session->userdata("filter")); ?>
        
        
<?php $filter = $this->session->userdata("filter");
?>
<script type="text/javascript">
function set_select(key,value)
{
	$("select[name="+key+"] option[value="+value+"]").attr('selected', 'selected');
		return 10;
 }
       
$(document).ready(function() {




set_select('category_id','<?php echo $filter["category_id"]; ?>');


});



</script>