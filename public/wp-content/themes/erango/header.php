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
    <div class="header">
        <div class="container">
            <a class="logo" href="<?php bloginfo('home'); ?>" data-aos="fade-down">
                <img src="<?php bloginfo('template_directory'); ?>/logo.png">
            </a>
            <nav class="" data-aos="fade-down">
                <ul class="">
                    <li><a href="<?php bloginfo('home'); ?>/features/">Features</a></li>
                    <li><a href="<?php bloginfo('home'); ?>/about">About us</a></li>
                    <li><a href="<?php bloginfo('home'); ?>/blog/">Blog</a></li>
                    <li><a href="<?php bloginfo('home'); ?>/contact/">Contact us</a></li>
                </ul>
                <a href="<?php bloginfo('home'); ?>" class="button button--orange2">Request a Demo</a>
            </nav>
            <div class="burger">
                <a class="burger__link">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </a>
            </div>
        </div>
    </div>