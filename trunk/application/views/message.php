<?php if($this->session->userdata('message')){ ?>
<div class="success-message" style="width:618px;margin-left: 0px;"><?php echo $this->session->userdata('message');  ?></div>
<?php $this->session->unset_userdata('message'); }  ?>