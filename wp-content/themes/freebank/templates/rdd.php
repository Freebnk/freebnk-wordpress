<?php

/**

 * Template name: RDD

 */
$current = get_option( 'page_on_front' );

   get_header();
  
?>

<main class="rdd-page">
      <section class="rdd">
         <div class="_conteiner">
            <div class="rdd__fon">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/fon.svg" alt="">
            </div>
            <div class="_inner">
               <div class="rdd__info">
                  <div class="rdd__info-content">
                     <div class="rdd__info-title">Request data deletion</div>
                     <div class="rdd__info-text">If you wish to delete your account and remove all associated data from FreeBnk, pleasefollow the instructions below carefully. This form allows you to submit a request for datadeletion directly to our privacy team, which will be processed in accordance with our dataretention policies.</div>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/img--1.png" alt="" class="rdd__info-img">
               </div>
               <div class="rdd__form-wrapper">
                  <div class="rdd__form-content">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/img--2.png" alt="" class="rdd__form-content--icon">
                     <div class="rdd__form-content--title">Delete account</div>
                     <div class="rdd__form-content--text">Please enter your email address associated with your FreeBnk account. This will be used toverify your account and to communicate the progress of your data deletion request.</div>
                  </div>
                  <div class="rdd__form">
                     <?php echo do_shortcode('[contact-form-7 id="d594816" title="Contact form rdd"]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="rdd__what-happens">
         <div class="_conteiner">
            <div class="_inner">
               <div class="rdd__what-happens--inner">
                  <div class="rdd__what-happens--header">
                     <div class="rdd__what-happens--info">
                        <div class="rdd__what-happens--title">What happens after you submit a request?</div>
                        <div class="rdd__what-happens--text">After submitting your request, you will receive an email confirmation to the address provided. We will initiate the deletion process which includes the following:</div>
                     </div>
                     <ul class="rdd__what-happens--list">
                        <li class="rdd__what-happens--item">
                           <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--1.png" alt="" class="rdd__what-happens--item---icon">
                           <div class="rdd__what-happens--item---text">Personal Profile Information</div>
                        </li>
                        <li class="rdd__what-happens--item">
                           <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--2.png" alt="" class="rdd__what-happens--item---icon">
                           <div class="rdd__what-happens--item---text">Account Details and Settings</div>
                        </li>
                        <li class="rdd__what-happens--item">
                           <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/rdd/icon--3.png" alt="" class="rdd__what-happens--item---icon">
                           <div class="rdd__what-happens--item---text">Transaction and Usage Data</div>
                        </li>
                     </ul>
                  </div>
                  <div class="rdd__what-happens--fotter">Please note, for legal and regulatory reasons, we will retain anonymized log data without any personal identifiers for a period of up to 6 months after account deletion. This is to comply with legal obligations and to enhance our services without compromising personal privacy.</div>
               </div>
            </div>
         </div>
      </section>

      <section id="" class="animWords ">
         <img src="<?php echo get_field('lastfon',$current)?>" alt="" class="animWords--fon-img _desctop">
         <img src="<?php echo get_field('lastfon_mob',$current)?>" alt="" class="animWords--fon-img _mobile">
         <div class="_conteiner">
            <div class="_inner">
               <div class="animWords__header  _anim-items _anim-no-hide _js-img">
                  <div class="animWords__title"><?php echo get_field('last_title',$current)?></div>
                  <?php if ( have_rows( 'last_animation',$current) ) { ?>
                     <ul class="animWords__title-slider">
                        <?php while ( have_rows( 'last_animation',$current) ) { the_row(); ?>
                           <li class="animWords__title-slider--item" style="width: max-content;">
                               <?php  if (get_sub_field('word_or_image', 'option') == 'text') {   ?>
                                     <?php echo get_sub_field('word')?>
                                  <?php  } elseif (get_sub_field('word_or_image', 'option') == 'image'){?>
                                     <img src="<?php echo get_sub_field('word_image',$current)?>" alt="">
                                <?php  } ?>
                            
                           </li>
                        <?php } ?>
                     </ul>
                  <?php } ?>
               </div>
               <div class="animWords__text  _anim-items _anim-no-hide _js-tl"><?php echo get_field('last_text',$current)?></div>
               <div class="app__content-btn-block  _anim-items _anim-no-hide _js-img">
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
      </section>

      <section id="contact" class="contacts">
         <div class="_conteiner">
            <div class="_inner">
               <div class="contacts__content">
                  <div class="contacts__content-title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('contacts_title',$current)?></div>
                  <div class="contacts__content-address  _anim-items _anim-no-hide _js-tl-3"><?php echo get_field('contacts_address',$current)?></div>

                  <a href="mailto:<?php echo get_field('contacts_email',$current)?>" data-da=".contacts ._inner,800,last"  class="contacts__content-mail  _anim-items _anim-no-hide _js-img"><?php echo get_field('contacts_email',$current)?></a>
                  <div data-da=".contacts ._inner,800,last" class="contacts__content-soc">
                     <?php if ( have_rows( 'social_networks',$current) ) { ?>
                        <ul class="footer__content--soc-list  _anim-items _anim-no-hide _js-img">
                           <?php while ( have_rows( 'social_networks',$current) ) { the_row(); ?>
                              <li class="footer__content--soc-item">
                                 <a href="<?php echo get_sub_field('link')?>" class="footer__content--soc-link">
                                    <img src="<?php echo get_sub_field('icon')?>" alt="">
                                 </a>
                              </li>
                           <?php } ?>
                        </ul>
                     <?php } ?>
                  </div>
               </div>
               <div class="contacts__form-wrapper  _anim-items _anim-no-hide _js-img">
                  <?php echo do_shortcode('[contact-form-7 id="4121c55" title="Contact form home"]'); ?>
               </div>
            </div>
         </div>
      </section>




   </main>



<?php

    get_footer();

