<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <a class="logo" href="<?php bloginfo('home'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/logo.png">
            </a>
            <nav class="header__nav">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'header-menu', 
                    'container' => '',
                    'container_class' => '',
                    'fallback_cb' => false ) ); ?>
                <a href="<?php bloginfo('home'); ?>/demo/" class="button button--orange2">Demo</a>
            </nav>
            <div class="burger">
                <a class="burger__link">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </a>
            </div>
        </div>
    </header>

    <main class="main" id="maincontent" role="main">