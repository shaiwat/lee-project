<form method="post" action="#" style="width: 350px;">
        <fieldset>
          <legend>Filter</legend>
         
          <label >ชนิดการติดต่อ</label><br>
          <?php $cats = $this->db->query("select * from contact_types")->result_array();  ?>
          <select style="float:left;width:200px;"  name="cat_id">
            <option value="0">All</option>
            <?php foreach($cats as $row){ ?>
            <option value="<?php $row['ctype_id'] ?>"><?php echo $row['ctype_name_th']; ?></option>
            <?php } ?>
            
          </select>
         
        <input style="float:left;margin-left: 20px;" type="submit" value="refresh">
        </fieldset>
        </form>