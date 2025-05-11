<?php

/**

 * Template name: Contact-page

 */
$current = get_option( 'page_on_front' );

   get_header();
  
?>

<main class="contact-page">

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

