<div class="row">
	<div class="span10">
		<h2><?php echo anchor('home/index', htmlentities($title, ENT_QUOTES, 'utf-8')); ?></h2>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<p>If you would like to edit this page you'll find it located at:</p>
		<p><code>application/views/home/index.php</code></p>
		<p>The corresponding controller for this page is found at:</p>
		<p><code>application/controllers/home.php</code></p>
		<h3>Pages</h3>
		<p>
		<?php foreach ($pages as $page): ?>
			<?php echo htmlentities($page->title, ENT_QUOTES, 'utf-8'); ?> - 
		<?php endforeach ?>
		</p>
		<div class="pagination"><?php echo $pagination; ?></div>
	</div>
	<div class="span6">
		<div class="well">
		<?php echo $this->formbuilder->open('home/index', FALSE, array( 'class'=>'form-stacked')); ?>
		<h3>Formbuilder example</h3>
		<?php 
		echo $this->formbuilder->text( 'first_name', 'Your First Name' );
		echo $this->formbuilder->text( 'last_name', 'Your Last Name' );
		?>
		<div style="margin-top:10px;">
			<?php echo $this->formbuilder->submit('send', 'send', array('class' => 'btn primary')); ?>
		</div>
		<?php echo $this->formbuilder->close(); ?>
		</div>
	</div>
</div>