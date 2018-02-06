<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes() ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Jabón Supremo - <?php the_title() ?></title>

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- 
        <meta name="msapplication-TileColor" content="#">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/library/images/icons/favicon.ico">
        <meta name="theme-color" content="#"> 
        -->

        <?php wp_head() ?>
    </head>
    <header>
        <div class="bar"></div>
        <div class="ico first">
            <a href="<?php echo home_url('/') ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/library/images/logo.svg"></a>
        </div>
        <div class="ico second hidden-xs hidden-sm">
            <a href="<?php echo home_url('/') ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/library/images/logo-c.png"></a>
        </div>
        <div class="ico-nav open hidden-lg hidden-md"><img src="<?php echo get_template_directory_uri() ?>/library/images/icons/open.png"></div>
        <div id="main-menu">
            <ul id="menu-main-menu">
                <li class="close-ico"><a href="<?php echo home_url('/') ?>#productos">Productos</a></li>
                <li class="close-ico"><a href="<?php echo home_url('/hogar') ?>">Lo mejor para tu hogar</a></li>
                <li class="close-ico"><a href="<?php echo home_url('/tiempo') ?>">Tiempo para mí</a></li>
                <li class="close-ico"><a href="<?php echo home_url('/') ?>#mujeres">Galería</a></li>
                <li class="face"><a href="https://www.facebook.com/SupremoPuedeConTodo/?ref=br_rs" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/library/images/icons/fb.png"></a></li>
            </ul>
            <!-- <?php wp_nav_menu([ 'container' => false, 'menu' => __( 'The Main Menu', 'bonestheme' ), 'theme_location' => 'main-nav' ]) ?> -->
            <div class="ico-close hidden-lg hidden-md">
                <img class="logo" src="<?php echo get_template_directory_uri() ?>/library/images/icons/btn-x.png">
            </div>
            <div class="ico-logo-nav hidden-lg hidden-md">
                <a href="<?php echo home_url('/') ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/library/images/logo-c.png"></a>
            </div>
        </div>
    </header>
    <body <?php body_class() ?> style="height: auto !important;">