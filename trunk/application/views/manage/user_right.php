<?php $f = $this->session->userdata("sub_section"); ?>
<div id="rightnav">
<a <?php if($f=="user_add"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/user_add");?>" >เพิ่มผู้ใช้งานใหม่</a>
<a <?php if($f=="users"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/users"); ?>" >ดูรายการผู้ใช้งาน</a>
</div>
