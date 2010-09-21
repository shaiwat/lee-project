<?php $f = $this->session->userdata("sub_section"); ?>
<div id="rightnav">
<a <?php if($f=="room_add"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/room_add");?>" >เพิ่มห้องใหม่</a>
<a <?php if($f=="rooms"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/rooms"); ?>" >รายการห้อง</a>
</div>
