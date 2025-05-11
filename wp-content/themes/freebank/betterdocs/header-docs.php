<?php
/**
 * The header for BetterDocs pages
 *
 * @package freebank
 */
$frontpage_id = get_option('page_on_front');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <script>
    /* BetterDocs sayfalarında menu işlevselliği */
    jQuery(document).ready(function() {
        // Animasyonu hemen kapat
        jQuery(".animation__wrapper").addClass("close");
        jQuery('body').removeClass('noscroll');

        // Menüyü aç/kapat
        jQuery('.menu-burger__header').click(function() {
            jQuery('.menu-burger__header').toggleClass('_js--open-menu');
            jQuery('.header__menu--wrapper').toggleClass('_js--open-menu');
            jQuery('.header').toggleClass('_js--open-menu');
            jQuery('body').toggleClass('noscroll');
            jQuery('.header').removeClass('fadeOut');
        });

        // Menü link tıklamaları
        jQuery(".header__menu").on('click', 'a', function(event) {
            jQuery('.menu-burger__header').removeClass('_js--open-menu');
            jQuery('.header__menu--wrapper').removeClass('_js--open-menu');
            jQuery('.header').removeClass('_js--open-menu');
            jQuery('body').removeClass('noscroll');
        });

        // App butonları tıklamaları
        jQuery(".app__content-btn").on('click', function(event) {
            jQuery('.menu-burger__header').removeClass('_js--open-menu');
            jQuery('.header__menu--wrapper').removeClass('_js--open-menu');
            jQuery('.header').removeClass('_js--open-menu');
            jQuery('body').removeClass('noscroll');
        });

        // iOS ve Android bağlantıları
        jQuery(".header__link").on('click', function(event) {
            jQuery('.menu-burger__header').removeClass('_js--open-menu');
            jQuery('.header__menu--wrapper').removeClass('_js--open-menu');
            jQuery('.header').removeClass('_js--open-menu');
            jQuery('body').removeClass('noscroll');
        });

        // ESC tuşu ile kapatma
        jQuery(document).keyup(function(e) {
            if (e.key === "Escape") {
                jQuery('.menu-burger__header').removeClass('_js--open-menu');
                jQuery('.header__menu--wrapper').removeClass('_js--open-menu');
                jQuery('.header').removeClass('_js--open-menu');
                jQuery('body').removeClass('noscroll');
            }
        });
    });
    </script>
</head>

<body <?php body_class("_not-home-page"); ?>>
<?php wp_body_open(); ?>
<div class="body-wrapper">

      <div id='animation__wrapper' class="animation__wrapper close">
         <div class="animation__list">
            <div class="animation__item">
               <video autoplay muted>
                  <source src="<?php echo get_field('screen__video',$frontpage_id)?>" type="video/mp4">
                </video>
               <img src="<?php echo get_field('screen__image',$frontpage_id)?>"  alt="">
            </div>
         </div>
      </div>
    <!--HEADER-->
    <header id="header" class="header">
        <div class="_conteiner">
            <div class="_inner">
                <a href="<?php echo site_url() ?>" class="header-logo">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.svg" alt="" class="header-logo _static">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-w.svg" alt="" class="header-logo _hover">
                </a>
                <div class="header__link-block">
                    <a href="<?php echo get_field('application_apple_link', $frontpage_id) ?>" class="header__link">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-icon-Subtract-a.svg" alt="" class="header__link--icon">
                    </a>
                    <a href="<?php echo get_field('application_android_link', $frontpage_id) ?>" class="header__link">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-icon-Subtract.svg" alt="" class="header__link--icon">
                    </a>
                </div>

                <div class="menu-burger__header">
                    <span class="menu-burger__header-1"></span>
                    <span class="menu-burger__header-2"></span>
                </div>

                <div class="header__menu--wrapper">
                    <ul class="header__menu">
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>" class="header__menu-link">HOME</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>#rwa" class="header__menu-link">RWA</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>#visa" class="header__menu-link">VISA CARD</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>#testimonials" class="header__menu-link">TESTIMONIALS</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url('/docs/') ?>" class="header__menu-link">DOCS</a>
                        </li>
                        <li class="header__menu-item">
                            <a target="_blank" href="https://freebnk.gitbook.io/docs" class="header__menu-link">WHITEPAPER</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>#about" class="header__menu-link">ABOUT US</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo site_url() ?>#faq" class="header__menu-link">FAQs</a>
                        </li>
                        <li class="header__menu-item">
                            <a target="_blank" href="https://medium.com/@freebnk" class="header__menu-link">BLOG</a>
                        </li>
                    </ul>

                    <div class="app__content-btn-block">
                        <a target="_blank" href="<?php echo get_field('application_apple_link', $frontpage_id) ?>" class="app__content-btn">
                            <div class="app__content-btn--text"><?php echo get_field('application_apple_link_text', $frontpage_id) ?></div>
                            <img src="<?php echo get_field('application_apple_image', $frontpage_id) ?>" alt="" class="app__content-btn--icon">
                        </a>
                        <a target="_blank" href="<?php echo get_field('application_android_link', $frontpage_id) ?>" class="app__content-btn">
                            <div class="app__content-btn--text"><?php echo get_field('application_android_link_text', $frontpage_id) ?></div>
                            <img src="<?php echo get_field('application_android_image', $frontpage_id) ?>" alt="" class="app__content-btn--icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>