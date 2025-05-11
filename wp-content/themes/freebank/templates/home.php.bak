<?php

/**

 * Template name: Home

 */
   $current = get_the_ID();

   get_header();

?>


<main class="home-page">
      <section id="baner" class="baner">
         <img src="<?php echo get_field('baner_fon_image',$current)?>" alt="" class='baner_fon_image'>
         <div class="_conteiner">
            <div class="_inner">
              <?php if ( have_rows( 'baner__slider',$current) ) { ?>
                   <ul class="baner__slider">
                   <?php while ( have_rows( 'baner__slider',$current) ) { the_row(); ?>
                      <li class="baner__slide">
                         <div class="baner__content">
                            <div class="baner__subtitle _anim-items _anim-no-hide _js-tl"><?php echo get_sub_field('subtitle',$current)?></div>

                       
                            
                           
                            <div class="baner__title  _anim-items _anim-no-hide _js-tl">
                            <?php  if (get_sub_field('text_or_image', 'option') == 'text') {   ?>
                                 <div class="baner__title  _anim-items _anim-no-hide _js-tl"><?php echo get_sub_field('title',$current)?></div>
                              <?php  } elseif (get_sub_field('text_or_image', 'option') == 'image'){?>
                                 <img src="<?php echo get_sub_field('baner_title_image',$current)?>" alt="">
                            <?php  } ?>


                                <!-- <img src="<?php echo get_sub_field('baner_title_image',$current)?>" alt=""> -->
                           </div>
                            <div class="baner__text _anim-items _anim-no-hide _js-tl-3"><?php echo get_sub_field('text',$current)?></div>
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
                         <div class="baner__media">
                             <img src="<?php echo get_sub_field('image',$current)?>" alt="" class='_desctop'>
                             <img src="<?php echo get_sub_field('image_mob',$current)?>" alt="" class='_mobile'>
                         </div>
                      </li>
                      <?php } ?>
                   </ul>
               <?php } ?>
            </div>
         </div>
      </section>




      <section id="rwa" class="app-sec">
         <div class="_conteiner">
              <div class="_inner"> 
                  <div class="application_image--wrapper">
                     <img src="<?php echo get_field('application_icon_left',$current)?>" alt="" class='application_image--left'>   
                     <img src="<?php echo get_field('application_image',$current)?>" alt="" class='application_image--main _desctop'>   
                     <img src="<?php echo get_field('application_image_mob',$current)?>" alt="" class='application_image--main _mobile'>   
                     <img src="<?php echo get_field('application_icon_right',$current)?>" alt="" class='application_image--right'>   
                  </div>  
                  <div class="app__content">
                     <div class="app__content-title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('application_title',$current)?></div>
                     <div class="app__content-text  _anim-items _anim-no-hide _js-tl-3"><?php echo get_field('application_text',$current)?></div>
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

                     <div class="joinUs__content  _anim-items _anim-no-hide _js-img">
                         <?php if ( have_rows( 'application_images',$current) ) { ?>
                            <ul class="joinUs__content-img-list">
                               <?php while ( have_rows( 'application_images',$current) ) { the_row(); ?>
                                  <li class="joinUs__content-img-item">
                                     <img src="<?php echo get_sub_field('image')?>" alt="">
                                  </li>
                               <?php } ?>
                            </ul>
                         <?php } ?>
                         <span class="joinUs__content--span">|</span>
                         <div class="joinUs__content-info  _anim-items _anim-no-hide _js-tl-3">
                            <div class="joinUs__content-amount"><span class='joinUs__content-amount--num'><?php echo get_field('application_users_number',$current)?></span><?php echo get_field('application_users_number_text',$current)?></div>
                            <div class="joinUs__content-name"><?php echo get_field('application_users_name',$current)?></div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>  
      </section>


   <section id='visa' class="spend-freely">
      <div class="_conteiner">
            <div class="_inner">
               <img src="<?php echo get_field('spend_freely_image',$current)?>" alt="" class='spend-freely__img _desctop'>
               <img src="<?php echo get_field('spend_freely_image_mob',$current)?>" alt="" class='spend-freely__img _mobile'>
               <div class="spend-freely__content">
                   <div class="spend-freely__title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('spend_freely_title',$current)?></div>
                  <div class="spend-freely__text _anim-items _anim-no-hide _js-tl-3"><?php echo get_field('spend_freely_text_top',$current)?></div>
                  <div class="spend-freely__text--bcg _anim-items _anim-no-hide _js-img"><?php echo get_field('spend_freely_text_with_bcg',$current)?></div>
                  <div class="spend-freely__text _anim-items _anim-no-hide _js-tl-3"><?php echo get_field('spend_freely_text_bottom',$current)?></div>
               </div>
               
            </div>
         </div>
   </section>
   <section id='testimonials' class="testmonials">
      <div class="_conteiner">
            <div class="_inner">
               <div class="testmonials__title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('testmonials_title',$current)?></div>
              <ul class="testmonials__lists-slider _mobile"></ul>
               <!-- <div class="testmonials__lists-wrapper">
               <?php if ( have_rows( 'testmonials',$current) ) { $index2 = 0; $members = array();
                     while ( have_rows( 'testmonials',$current) ) { the_row(); $index2++; 
                        
                        $members[$index2 - 1]['text'] = get_sub_field('text');
                        $members[$index2 - 1]['name'] = get_sub_field('name');
                        $members[$index2 - 1]['position'] = get_sub_field('position');
                        $members[$index2 - 1]['foto'] = get_sub_field('foto');
                        $members[$index2 - 1]['age'] = get_sub_field('age');
                        $members[$index2 - 1]['country'] = get_sub_field('country');
                     }}
                     if ($index2 > 0)  $loop = ceil($index2 / 4); else $loop = 0; ?>

                  <?php if ($loop) { 
                     for ($i = 0; $i < $loop; $i++) { ?>
                        <ul class="testmonials__list">
                           <?php for ($y=$i*4; $y < $i*4 + 4; $y++) { 
                              if (strlen($members[$y]['name']) > 0) { ?>
                                  <li data-da=".testmonials__lists-slider,600,last" class="testmonials__item">
                                    <div class=" testmonials__header">
                                       <img src="<?php echo $members[$y]['foto'] ?>" alt="">
                                       <div class="testmonials__header--text">
                                          <span class="testmonials__header--age"><?php echo $members[$y]['age'] ?></span>
                                          <span class="testmonials__header--country"><?php echo $members[$y]['country'] ?></span>
                                       </div>
                                    </div>
                                    <div class="testmonials__content">
                                    <?php echo $members[$y]['text'] ?>
                                    </div>
                                    <div class="testmonials__footer">
                                       <div class="testmonials__footer-name"><?php echo $members[$y]['name'] ?></div>
                                       <div class="testmonials__footer-position"><?php echo $members[$y]['position'] ?></div>
                                    </div>
                                 </li>
                              <?php } ?>
                           <?php } ?>
                        </ul>
                     <?php } ?>
                  <?php } ?>
               </div> -->
               <?php if ( have_rows( 'testmonials',$current) ) { $indexTeam = 0; ?>
                     <ul class="testmonials__list  _anim-items _anim-no-hide _js-img">
                        <?php while ( have_rows( 'testmonials',$current) ) { the_row();?>
                           <li class="testmonials__item">
                              <div class=" testmonials__header">
                                 <img src="<?php echo get_sub_field('foto')?>" alt="">
                                 <div class="testmonials__header--text">
                                    <span class="testmonials__header--age"><?php echo get_sub_field('age')?>,</span>
                                    <span class="testmonials__header--country"><?php echo get_sub_field('country')?></span>
                                 </div>
                              </div>
                              <div class="testmonials__content">
                                 <?php echo get_sub_field('text')?>
                              </div>
                              <div class="testmonials__footer">
                                 <div class="testmonials__footer-name"><?php echo get_sub_field('name')?></div>
                                 <div class="testmonials__footer-position"><?php echo get_sub_field('position')?></div>
                              </div>
                           </li>
                        <?php } ?>
                     </ul>
                <?php } ?>
            </div>
         </div>
      </section>

      <section class="joinUs-roadmap">
         <img src="<?php echo get_field('succeed_img',$current)?>" alt="" class="joinUs-roadmap__fon _desctop">
         <img src="<?php echo get_field('succeed_img_mob',$current)?>" alt="" class="joinUs-roadmap__fon _mobile">
         <div class="_conteiner">
            
            <div class="_inner">
               <div id="whitepaper"  class="roadmap">
                  <div class="roadmap__title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('succeed_title',$current)?></div>
                  <div class="roadmap__content  _anim-items _anim-no-hide _js-img">
                  <?php if ( have_rows( 'succeed_items',$current) ) { ?>
                     <ul class="roadmap__list">
                        <?php while ( have_rows( 'succeed_items',$current) ) { the_row(); ?>
                           <li class="roadmap__item <?php if (get_sub_field('active')) echo "_active-item" ?>">
                              <div class="roadmap__item--visible">
                                 <div class="roadmap__item-data"><?php echo get_sub_field('date')?></div>
                              </div>
                              <div class="roadmap__item--hide">
                                 <div class="roadmap__item-title"><?php echo get_sub_field('title')?></div>
                                 <div class="roadmap__item-text"><?php echo get_sub_field('text')?></div>
                              </div>
                           </li>
                           <?php } ?>
                        </ul>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="about" class="team">
         <div class="_conteiner">
            <div class="_inner">
               <div class="team__title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('team_title',$current)?></div>
               <div class="team__text  _anim-items _anim-no-hide _js-tl-3"><?php echo get_field('team_text',$current)?></div>
               <?php if ( have_rows( 'members',$current) ) { $indexTeam = 0; ?>
                  <div class="team__list--wrapper _popups-wrapper _anim-items _anim-no-hide _js-img">
                     <ul class="team__list  ">
                        <?php while ( have_rows( 'members',$current) ) { the_row(); $indexTeam++; ?>
                           <li class="team__item">
                              <div class="popup-<?php echo $indexTeam; ?> team__item-btn _popup-open-btn">
                                 <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/team__item-btn--icon.svg" alt="" class="team__item-btn--icon">
                              </div>
                              <div class="team__foto">
                                 <img src="<?php echo get_sub_field('image')?>" alt="">
                              </div>
                              <div class="team__item--footer">
                                 <div class="team__name"><?php echo get_sub_field('name')?></div>
                                 <div class="team__position"><?php echo get_sub_field('position')?></div>
                              </div>

                              <div class="popup-wrapper _popup-block popup-<?php echo $indexTeam; ?>">
                                 <div class="popup-inner">
                                    <div class="popup--btn _popup-close-btn">
                                       <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/close-btn.svg" alt="" class="">
                                    </div>
                                   <div class="popup__foto">
                                      <img src="<?php echo get_sub_field('image')?>" alt="">
                                   </div>
                                   <div class="popup__content">
                                       <div class="popup__name"><?php echo get_sub_field('name')?></div>
                                       <div class="popup__position"><?php echo get_sub_field('position')?></div>
                                       <div class="popup__text"><?php echo get_sub_field('text')?></div>
                                       <?php if ( have_rows( 'social',$current) ) { ?>
                                       <ul class="popup__soc-block">
                                         <?php while ( have_rows( 'social',$current) ) { the_row();?>
                                          <li class="popup__soc-item">
                                             <a target="_blank" href='<?php echo get_sub_field('url')?>' class="popup__soc-link">
                                                <img src="<?php echo get_sub_field('icon')?>" alt="">
                                             </a>
                                          </li>
                                          <?php } ?>
                                       </ul>
                                       <?php } ?>
                                   </div>
                                 </div>
                              </div>

                           </li>
                        <?php } ?>
                     </ul>
                  </div>
               <?php } ?>
            </div>
         </div>
      </section>

      <section id="faq" class="faq">
         <div class="_conteiner">
            <div class="_inner">
               <div class="faq__title  _anim-items _anim-no-hide _js-tl"><?php echo get_field('faq_title',$current)?></div>
               <?php if ( have_rows( 'faqs',$current) ) {  ?>
                     <ul class="faq__list  _anim-items _anim-no-hide _js-img">
                        <?php while ( have_rows( 'faqs',$current) ) { the_row();  ?>
                           <li class="faq__item">
                              <div class="faq__item--visible _js-faq__btn">
                                 
                                  <div class="faq-question"><?php echo get_sub_field('question')?></div>
                                  <div class=" faq-btn">
                                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/plus-icon.svg" alt="" class="faq-btn--icon-open">
                                     <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/minus-icon.svg" alt="" class="faq-btn--icon-close">
                                  </div>
                              </div>
                              <div class="faq__item--hide">
                                  <div class="faq-answer"><?php echo get_sub_field('answer')?></div>
                              </div>
                           </li>
                        <?php } ?>
                     </ul>
               <?php } ?>
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

                  <a href="mailto:<?php echo get_field('contacts_email',$current)?>"   class="contacts__content-mail  _anim-items _anim-no-hide _js-img"><?php echo get_field('contacts_email',$current)?></a>
                  <div  class="contacts__content-soc">
                     <?php if ( have_rows( 'social_networks',$current) ) { ?>
                        <ul class="footer__content--soc-list  _anim-items _anim-no-hide _js-img">
                           <?php while ( have_rows( 'social_networks',$current) ) { the_row(); ?>
                              <li class="footer__content--soc-item">
                                 <a target="_blank" href="<?php echo get_sub_field('link')?>" class="footer__content--soc-link">
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

