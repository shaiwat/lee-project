<?php $f = $this->session->userdata("sub_section"); ?>
<div id="rightnav">
<a <?php if($f=="category_add"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/category_add");?>" >เพิ่มหมวดใหม่</a>
<a <?php if($f=="categories"){ echo 'class="active"'; } ?> href="<?php echo site_url("manage/categories"); ?>" >รายการหมวด</a>
</div>
