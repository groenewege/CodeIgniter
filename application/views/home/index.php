<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

<p>If you would like to edit this page you'll find it located at:</p>
<code>application/views/home/index.php</code>

<p>The corresponding controller for this page is found at:</p>
<code>application/controllers/home.php</code>

<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

<?php 
echo $this->formbuilder->open( 'user/edit_save', FALSE, array( 'class'=>'form-stacked' ));
echo $this->formbuilder->text( 'username', 'Username' );
echo $this->formbuilder->password( 'password', 'Password' );
echo $this->formbuilder->close();
?>
