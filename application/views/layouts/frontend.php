<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($meta_title, ENT_QUOTES, 'utf-8'); ?></title>
	<meta name="description" content="<?php echo htmlentities($meta_description, ENT_QUOTES, 'utf-8'); ?>">
	<meta name="keywords" content="<?php echo htmlentities($meta_keywords, ENT_QUOTES, 'utf-8'); ?>">
	<meta name="author" content="Gunther Groenewege">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<script src="/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php echo htmlentities($section, ENT_QUOTES, 'utf-8'); ?>">

	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="/">CodeIgniter Boilerplate</a>
				<ul class="nav secondary-nav">
					<li><?php echo anchor('admin/home/index', 'admin'); ?></li>
					<li><a href="#" id="toggleButton">profiler</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="main" role="main" class="container">
		<?php echo $yield; ?>
		<footer>
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds</p>
		</footer>
	</div>

	<?php if ($show_js): ?>
		<script src="/js/libs/jquery-1.6.4.min.js"></script>
		<script src="/js/script.js"></script>
	<?php endif ?>

</body>
</html>
