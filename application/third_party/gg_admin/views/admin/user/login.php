<div class="page-header">
    <h1><?php echo __('gg_login'); ?> <small><?php echo __('gg_login_info'); ?></small></h1>
</div>
<div class="row">
    <div class="span6">
        <div class="well">
            <?php echo $this->formbuilder->open('admin/user/login', FALSE, array( 'class'=>'form-stacked')); ?>
            <?php 
            echo $this->formbuilder->text( 'identity', __('gg_email') );
            echo $this->formbuilder->password( 'password', __('gg_password') );
            echo $this->formbuilder->checkbox( 'remember', __('gg_remember_me'), '1', FALSE );
            ?>
            <?php echo $this->formbuilder->submit('submit', __('gg_login'), array('class' => 'btn primary')); ?>
            <?php echo $this->formbuilder->close(); ?>
        </div>
        <p><?php echo __('gg_admin_description'); ?></p>
    </div>
    <div class="span10"><?php echo img('img/admin_image.jpg'); ?></div>
</div>
