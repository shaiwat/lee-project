<form class="form" method="post" action="<?php echo site_url($action);  ?>">
         <?php echo  validation_errors('<div class="error"> <span class="strong"></span>', '</div>'); ?>
        <fieldset>
 <legend<?php echo $label; ?></legend>