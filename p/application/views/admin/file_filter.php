<form method="post" action="<?php echo site_url("admin/file_filter"); ?>" style="width: 350px;">
        <fieldset>
          <legend>Filter</legend>
         
          <label for="gender">กลุ่มไฟล์</label><br>
          <?php $cats = $this->db->query("select * from file_cats")->result_array();  ?>
          <select style="float:left;width:200px;"  name="file_cat_id">
            <option value="0">All</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php echo $row['file_cat_id'] ?>"><?php echo $row['file_cat_name']; ?></option>
            <?php } ?>
            
          </select>
         
        <input style="float:left;margin-left: 20px;" type="submit" value="refresh">
        </fieldset>
        </form>
   <?php $filter = $this->session->userdata("filter");
?>

<script type="text/javascript">
function set_select(key,value)
{
	$("select[name="+key+"] option[value="+value+"]").attr('selected', 'selected');
		return 10;
 }
       
$(document).ready(function() {




set_select('file_cat_id','<?php echo $filter["file_cat_id"]; ?>');


});



</script>