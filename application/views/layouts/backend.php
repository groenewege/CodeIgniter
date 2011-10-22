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
                    <li><?php echo anchor('admin/user/logout', __('gg_logout')); ?></li>
                    <?php if (defined('ENVIRONMENT') && ENVIRONMENT == 'development'): ?>
                    <li><a href="#" id="toggleButton">profiler</a></li>
                    <?php endif ?>
                </ul>  
            </div>
        </div>
    </div>

    <div id="main" role="main" class="container">
        <?php echo $yield; ?>
    </div>

    <script src="/js/libs/jquery-1.6.4.min.js"></script>
    <script src="/js/admin.js"></script>

</body>
</html>
