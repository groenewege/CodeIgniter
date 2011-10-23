<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php echo htmlentities($meta_title, ENT_QUOTES, 'utf-8'); ?></title>
    <link rel="stylesheet" href="/css/admin.css">
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="<?php echo htmlentities($section, ENT_QUOTES, 'utf-8'); ?>">

    <div class="topbar">
        <div class="fill">
            <div class="container">
                <a href="<?php echo site_url('admin/home/index'); ?>" class="brand">
                    <?php echo htmlentities($site_title, ENT_QUOTES, 'utf-8'); ?>
                    <span><?php echo __('gg_administration'); ?></span>
                </a>
                <ul class="nav secondary-nav">
                    <?php if ($is_logged_in): ?>
                        <li><?php echo anchor('admin/user/logout', __('gg_logout')); ?></li>    
                    <?php endif ?>
                    <?php if (defined('ENVIRONMENT') && ENVIRONMENT == 'development'): ?>
                        <li><a href="#" id="toggleButton">profiler</a></li>
                    <?php endif ?>
                </ul>  
            </div>
        </div>
    </div>

    <div id="main" role="main" class="container">
        <?php echo $yield; ?>
        <footer>
            <p>made by g-design.net &nbsp; : : &nbsp; +33 1 44 90 01 19 &nbsp; : : &nbsp; <a href="mailto:info@g-design.net">info@g-design.net</a></p>
      </footer>
    </div>

    <script src="/js/libs/jquery-1.6.4.min.js"></script>
    <script src="/js/admin.js"></script>

</body>
</html>
