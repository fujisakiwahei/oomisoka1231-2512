<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title><?php echo wp_get_document_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="">
        <div class="header__inner">
            <div class="header__inner-logo-button-wrapper">
                <a href="<?php echo esc_url(home_url()); ?>" class="header__logo">oomisoka1231</a>
                <button class="header__nav-button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <p class="header__nav-button__menu">Menu</p>
                </button>
            </div>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item"><a href="<?php echo esc_url(home_url()); ?>" class="header__nav-link">Top</a></li>
                    <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="header__nav-link">Works</a></li>
                    <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/news')); ?>" class="header__nav-link">News</a></li>
                    <!-- <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/about')); ?>" class="header__nav-link">About</a></li> -->
                    <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
        <nav class="header__nav-global">
            <ul class="header__nav-global-list">
                <li class="header__nav-global-item"><a href="<?php echo esc_url(home_url()); ?>" class="header__nav-global-link">Top</a></li>
                <li class="header__nav-global-item"><a href="<?php echo esc_url(home_url('/works')); ?>" class="header__nav-global-link">Works</a></li>
                <li class="header__nav-global-item"><a href="<?php echo esc_url(home_url('/news')); ?>" class="header__nav-global-link">News</a></li>
                <!-- <li class="header__nav-global-item"><a href="<?php echo esc_url(home_url('/about')); ?>" class="header__nav-global-link">About</a></li> -->
                <li class="header__nav-global-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="header__nav-global-link">Contact</a></li>
            </ul>
        </nav>
        <figure class="header__nav-global-image">
            <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav/nav-girl.webp"
                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav/nav-girl.webp 1x, <?php echo esc_url(get_template_directory_uri()); ?>/assets/images/nav/nav-girl@2x.webp 2x"
                width="280"
                height="400"
                alt="座ってティータイムを楽しむ女の子"
                decoding="async"
                loading="lazy" />
        </figure>
    </header>
    <main>