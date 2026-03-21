<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Note: Title, Fonts, and Stylesheets are handled by wp_head() and functions.php -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header-inner">
            <h1 class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png"
                        alt="<?php bloginfo('name'); ?>">
                </a>
            </h1>
            <nav class="nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'fallback_cb' => false, // Fallback is below if no menu assigned
                ));
                ?>
                <?php if (!has_nav_menu('menu-1')): ?>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
                        <li><a href="<?php echo esc_url(home_url('/#guide')); ?>">寮案内</a></li>
                        <li><a href="<?php echo esc_url(home_url('/flow/')); ?>">ご入居の流れ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                        <!-- Link updated to entry page -->
                        <li><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="btn-recruit">採用情報・エントリー</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
            <div class="header-contact">
                <p class="tel">06-6643-3300</p>
            </div>
            <div class="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>