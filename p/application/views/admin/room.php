<h1>ห้อง/สถานที่</h1>

  <?php echo $this->user->messages(); ?>
    <div class="add-bar">
 	<a href="<?php echo site_url("admin/room_add"); ?>"><img src="images/page-add.png">เพิ่มใหม่</a>
</div>
   <?php  table($header,$rows,"room"); ?>
<style type="text/css">
    #content table.room
    {
        width: 500px;
    }

</style>