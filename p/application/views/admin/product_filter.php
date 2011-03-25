<form method="post" action="<?php echo site_url("admin/product_filter"); ?>" style="width: 350px;">
        <fieldset>
          <legend>Filter</legend>
         
          <label for="gender">หมวดสินค้า</label><br>
          <?php $cats = $this->db->query("select * from product_categories")->result_array();  ?>
          <select style="float:left;width:200px;"  name="cat_id">
            <option value="0">All</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['pcat_name_th']; ?></option>
            <?php } ?>
            
          </select>
         
        <input style="float:left;margin-left: 20px;" type="submit" value="refresh">
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




set_select('cat_id','<?php echo $filter["cat_id"]; ?>');


});



</script>