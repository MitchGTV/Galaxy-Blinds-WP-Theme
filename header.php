<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <!-- Header -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    
    <!-- Title -->
	<title><?php wp_title(''); ?></title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEQCYVVYQQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-SEQCYVVYQQ');
    </script>
    <!-- LocalIQ Tracking Script -->
    <script type="text/javascript" src="https://cdn.rlets.com/capture_configs/a4d/2f3/0fc/b6f4c56adbfc12ad1c96996.js" async="async"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri()); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri()); ?>/css/hamburgers.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri()); ?>/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri()); ?>/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri()); ?>/css/slick.css" />
    
    <!-- Wordpress Header -->
    <?php wp_head();?>
    
    <!-- Load body -->
    <noscript>
        <style>
            body {
                opacity: 1;
            }
        </style>
    </noscript>
</head>
    
    <!-- Get body ID -->
    <?php
	   $url = explode('/',$_SERVER['REQUEST_URI']);
	   $dir = $url[1] ? $url[1] : 'home';
    ?>

<body id="<?php echo $dir ?>" <?php body_class(); ?>>
    <div id="page-wrap" class="wrapper">
    <header>
        <div class="inner flex-row">
            <a class="logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/logo@2x.png" alt=""></a>
            <a class="mob-logo" href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/mob-logo@2x.png" alt=""></a>
            
            <nav class="desktop-nav">
                <a href="<?php echo get_site_url(); ?>">Home</a>
                <div class="dropdown">
                    <div class="drop-btn">Blinds</div>
                    <div class="dropdown-list">
                        <a href="<?php echo get_site_url(); ?>/motorised-blinds/">Motorised Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/vertical-blinds/">Vertical Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/venetian-blinds/">Venetian & Wood Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/roller-blinds/">Roller Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/roman-blinds/">Roman Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/perfect-fit-blinds/">Perfect Fit Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/day-night-blinds/">Day & Night Blinds</a>
                        <a href="<?php echo get_site_url(); ?>/shutters/">Shutters</a>
                        <a href="<?php echo get_site_url(); ?>/perfect-fit-shutters/">Perfect Fit Shutters</a>
                    </div>
                </div>
                <a href="<?php echo get_site_url(); ?>/awnings/">Awnings</a>
                <a href="<?php echo get_site_url(); ?>/soft-furnishings/">Soft Furnishings</a>
                <a href="<?php echo get_site_url(); ?>/gallery/">Gallery</a>
                <a href="<?php echo get_site_url(); ?>/tour/">360 Tour</a>
                <a href="<?php echo get_site_url(); ?>/blog/">Blog</a>
                <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
            </nav>
            
            <button id="my-icon" class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        
            <nav id="my-menu">
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <li><a href="<?php echo get_site_url(); ?>">Blinds</a>
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/vertical-blinds/">Vertical Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/venetian-blinds/">Venetian & Wood Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/roman-blinds/">Roman Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/roller-blinds/">Roller Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/perfect-fit-blinds/">Perfect Fit Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/day-night-blinds/">Day & Night Blinds</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/shutters/">Shutters</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/soft-furnishings/">Soft Furnishings</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/gallery/">Gallery</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/tour/">360 Tour</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>