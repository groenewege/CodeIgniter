<div class="row">
	<div class="span10">
		<h2><?php echo anchor('home/index', htmlentities($title, ENT_QUOTES, 'utf-8')); ?></h2>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<p>If you would like to edit this page you'll find it located at:</p>
		<p><code>application/views/home/index.php</code></p>
		<p>The corresponding controller for this page is found at:</p>
		<p><code>application/controllers/home.php</code></p>
	</div>
	<div class="span6">
		<div class="well">
		<?php echo $this->formbuilder->open( 'user/edit_save', FALSE, array( 'class'=>'form-stacked' ));	 ?>
		<h3>Formbuilder example</h3>
		<?php 
		echo $this->formbuilder->text( 'username', 'Username' );
		echo $this->formbuilder->password( 'password', 'Password' );
		echo $this->formbuilder->close();
		?>
		</div>
	</div>
</div>