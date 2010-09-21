<?php $f = $this->session->userdata("sub_section"); ?>
<div id="rightnav">
<a <?php if($f=="material_add"){ echo 'class="active"'; } ?>  href="<?php echo site_url("manage/material_add"); ?>" >เพิ่มวัสดุใหม่</a>
<a <?php if($f=="material_add2"){ echo 'class="active"'; } ?>  href="<?php echo site_url("manage/material_add2"); ?>" >เพิ่มครุภัณฑ์ใหม่</a>
<a <?php if($f=="materials"){ echo 'class="active"'; } ?>  href="<?php echo site_url("manage/materials"); ?>" >รายการวัสดุ</a>
<a <?php if($f=="materials2"){ echo 'class="active"'; } ?>  href="<?php echo site_url("manage/materials2"); ?>" >รายการครุภัณฑ์่</a>

</div>
