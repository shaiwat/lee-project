<h1>รายการชนิดงานซ่อม</h1>
 <div class="add-bar">
 	<a href="<?php echo site_url("admin/maintain_add"); ?>"><img src="images/page-add.png">เพิ่มใหม่</a>
</div>

<?php echo $this->user->messages(); ?>

<?php  table($header,$rows,"maintain"); ?>
