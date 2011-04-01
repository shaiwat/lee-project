        <h1>ชนิดงบประมาณ</h1>
		  <?php form_head("admin/budget_edit/".$row["budget_id"],"เพิ่มชนิดงบประมาณใหม่") ?>
          <?php text_field("budget_name","ชื่อ",$row,1); ?>
          <?php text_field("year","ปีการศึกษา",$row,1); ?>
         
          <?php form_footer(); ?>
          