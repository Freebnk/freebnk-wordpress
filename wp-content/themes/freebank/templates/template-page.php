<?php

/**

 * Template name: Template-page

 */

 $current = get_option( 'page_on_front' );

   get_header();

?>

    <main class="template-page">
      <section class="template-main">
         <div class="_conteiner">
            <div class="_inner">
               <div class=""><?php echo get_field('content')?></div>
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

