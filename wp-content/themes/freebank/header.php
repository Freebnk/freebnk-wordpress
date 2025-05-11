<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freebank
 */
$frontpage_id = get_option( 'page_on_front' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-wrapper ">

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
      <header id="header" class="header ">
         <div class="_conteiner">
            <div class="_inner">
             
               <a href="<?php echo site_url() ?>" class="header-logo">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.svg" alt="" class="header-logo _static">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-w.svg" alt="" class="header-logo _hover">
               </a>
               <div class="header__link-block">
                  <a href="<?php echo get_field('application_apple_link',$frontpage_id)?>" class="header__link">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-icon-Subtract-a.svg" alt="" class="header__link--icon">
                  </a>
                  <a href="<?php echo get_field('application_android_link',$frontpage_id)?>" class="header__link">
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
                         <a href="#rwa" class="header__menu-link _js-scroll-active _js-link">RWA</a>
                      </li>
                      <li class="header__menu-item">
                         <a href="#visa" class="header__menu-link _js-link">VISA CARD</a>
                      </li>
                      <li class="header__menu-item">
                         <a href="#testimonials" class="header__menu-link _js-link">TESTIMONIALS</a>
                      </li>
                      <li class="header__menu-item">
                         <a target="_blank" href="https://freebnk.gitbook.io/docs" class="header__menu-link">WHITEPAPER</a>
                      </li>
                      <li class="header__menu-item">
                         <a href="#about" class="header__menu-link _js-link">ABOUT US</a>
                      </li>
                      <li class="header__menu-item">
                         <a href="#faq" class="header__menu-link _js-link">FAQs</a>
                      </li>
                      <li class="header__menu-item">
                         <a target="_blank" href="https://medium.com/@freebnk" class="header__menu-link ">BLOG</a>
                      </li>
                   </ul>
                   <!-- <div class="__btn-block">
                     <a href="<?php echo get_field('application_apple_link',$frontpage_id)?>" class="__btn">
                        <div class="__btn-text">App Store</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-icon-Subtract-a--w.svg" alt="" class="__btn-icon">
                     </a>
                     <a href="<?php echo get_field('application_android_link',$frontpage_id)?>" class="__btn">
                        <div class="__btn-text">Google Play</div>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-icon-Subtract--w.svg" alt="" class="__btn-icon">
                     </a>
                   </div> -->

                   <div class="app__content-btn-block ">
                        <a target="_blank" href="<?php echo get_field('application_apple_link',$current)?>" class="app__content-btn">
                           <div class="app__content-btn--text"><?php echo get_field('application_apple_link_text',$current)?></div>
                           <img src="<?php echo get_field('application_apple_image',$current)?>" alt="" class="app__content-btn--icon">
                        </a>
                        <a target="_blank" href="<?php echo get_field('application_android_link',$current)?>" class="app__content-btn">
                           <div class="app__content-btn--text"><?php echo get_field('application_android_link_text',$current)?></div>
                           <img src="<?php echo get_field('application_android_image',$current)?>" alt="" class="app__content-btn--icon">
                        </a>
                     </div>
               </div>
               
              
            </div>
         </div>
      </header>
