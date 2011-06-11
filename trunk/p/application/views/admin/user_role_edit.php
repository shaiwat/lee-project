<h1>ชนิดผู้ใช้งาน</h1>
		 <?php form_head("admin/user_role_edit/".$role["role_id"],"แก้ไข") ?>
		 		 <table class="list" style="width:400px;" >
 
          <?php text_field("role_name","ชื่อกลุ่มผู้ใช้งาน",$role,1,"even"); ?>
          
	



         <?php 
          function notify_cheak($id,$row)
         {
         	$arr  = explode(",", $row["notify"]);
         	foreach($arr as $item)
         	{
         		if($item == $id)
         		{
         			return true;
         		}
         	}
         }
        
         function controller_cheak($c_id,$row)
         {
         	$arr  = explode(",", $row["controller_access"]);
         	foreach($arr as $item)
         	{
         		if($item == $c_id)
         		{
         		return true;
         		}
         	}
         }
         $i =  0;
        ?>
        
    <?php    $con_groups = $this->db->get("controller_groups")->result_array();
         
         foreach($con_groups as $item){  ?>       

<table class="list" style="width:300px;">
          <tbody><tr class=" odd">
            <th ></th>
            <th><?php echo $item["group_name"]; ?></th>
            
          
           
          </tr>
         <?php 
         $controllers =  $this->db->query("select * from controllers where c_group_id =".$item["c_group_id"])->result_array();
         $i =  0;
         foreach($controllers as $row){ ?>
         
          <tr <?php if(($i++%2))echo 'class="even"'; ?> >
            
            
            <td><input name="controllers[]" <?php echo set_checkbox("controllers[]",$row["c_id"],controller_cheak($row["c_id"],$role));   ?>  value="<?php echo $row["c_id"]; ?>" type="checkbox" style="width:15px; height: 15px;" ></td>
            <td><?php echo $row['detail'];?></td>
           	
          
            
          </tr>
          <?php }
         }
          ?>
        </tbody></table>	
        
        
      
	 <?php form_footer(); ?>
                      <a href="<?php echo site_url("admin/role_delete/".$role["role_id"])?>">ลบ</a>
	
  