<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freebank
 */
$frontpage_id = get_option( 'page_on_front' );
?>

<footer id="" class="footer">
         <div class="_conteiner">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foo-fon.png" alt="" class="footer__fon">
            <!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foo-fon-mob.png" alt="" class="footer__fon _mobile"> -->
            <div class="_inner ">
               <div class="footer__content">
                  <!-- <a href="<?php echo site_url() ?>" class="footer__content-logo">
                     
                  </a> -->
                  <div class="footer__content-text">© FreeBnk is the trading name of UAB Freebnk Europe (No 306725542), with a VASP (Virtual Assets Services Provider) in Lithuania. Registered office address Zalgirio str. 88-101, LT-09303 Vilnius, Lithuania<br><br>FREEBNK AI TECH - FZCO Building A1, Dubai Digital Park, Dubai Silicon Oasis, Dubai, United Arab Emirates. A UAE-based software development company.<br>FREEBNK AI TECH FZCO is not a licensed financial institution and does not provide regulated financial services in the United Arab Emirates.</div>
                  <?php if ( have_rows( 'social_networks',$frontpage_id) ) { ?>
                     <ul  class="footer__content--soc-list">
                        <?php while ( have_rows( 'social_networks',$frontpage_id) ) { the_row(); ?>
                           <li class="footer__content--soc-item">
                              <a target="_blank"  href="<?php echo get_sub_field('link')?>" class="footer__content--soc-link">
                                 <img src="<?php echo get_sub_field('icon')?>" alt="">
                              </a>
                           </li>
                        <?php } ?>
                     </ul>
                  <?php } ?>
               </div>
               <div class="footer__menu">
                  <div class="footer__menu-block">
                     <div class="footer__menu-title">Product</div>
                     <ul class="footer__menu-list">
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Overview</a>
                        </li>
                     </ul>
                  </div>
                  <div class="footer__menu-block">
                     <div class="footer__menu-title">Company</div>
                     <?php if ( have_rows( 'social_networks',$frontpage_id) ) { ?>
                     <ul  class="footer__menu-list">
                        <?php while ( have_rows( 'social_networks',$frontpage_id) ) { the_row(); ?>
                           <li class="footer__menu-item">
                              <a target="_blank" href="<?php echo get_sub_field('link')?>" class="footer__menu-link"><?php echo get_sub_field('name')?></a>
                           </li>
                        <?php } ?>
                     </ul>
                    <?php } ?>
<!-- 
                     <ul class="footer__menu-list">
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Fasebook</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Telegram</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">X</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Linkedin</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Instagram</a>
                        </li>
                     </ul> -->
                  </div>
                  <div class="footer__menu-block">
                     <div class="footer__menu-title">Resources</div>
                     <ul class="footer__menu-list">
                        <!-- <li class="footer__menu-item">
                           <a href="#" class="footer__menu-link">Blog</a>
                        </li> -->
                        <li class="footer__menu-item">
                           <a href="<?php echo site_url() ?>/aml-kyc-policy/" class="footer__menu-link">AML/KYC policy</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="<?php echo site_url() ?>/jurisdiction/" class="footer__menu-link">Jurisdiction</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="<?php echo site_url() ?>/fee/" class="footer__menu-link">Fees</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="<?php echo site_url() ?>/terms-of-service/" class="footer__menu-link">Terms and Conditions</a>
                        </li>
                        <li class="footer__menu-item">
                           <a href="<?php echo site_url() ?>/privacy/" class="footer__menu-link">Privacy Policy</a>
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="footer__footer--wrapper ">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/foo-icon.svg" alt="" class="footer__content-logo-icon">
                  <div class="footer__footer">
                    
                     <div class="footer__footer-text">Copyright © 2025 freebnk.  All Rights Reserved</div>
                     <!-- <span>|</span>
                     <a href="#" class="footer__footer-link">Terms and Conditions</a> -->
                    <!--  <a href="#" class="footer__footer-link">Privacy Policy</a> -->
                  </div>
               </div>
              

               
            </div>             
         </div>
      </footer>
      <!--FOOTER-->

</div>

<script>
   if(document.querySelector('.home-page')){
      window.addEventListener("scroll", function setBackground() {
  var itemColor = document.querySelectorAll("._js-link");
  var rwa = jQuery("#rwa").offset().top - 150;
  var testimonials = jQuery("#testimonials").offset().top - 150;
  var visa = jQuery("#visa").offset().top - 150;
//   var whitepaper = jQuery("#whitepaper").offset().top - 150;
  var about = jQuery("#about").offset().top - 150;
  var faq = jQuery("#faq").offset().top - 150;

//   console.log('llllllll'


  if (window.scrollY >= 0 && window.scrollY < rwa) {
    itemColor[0].classList.remove("_js-scroll-active");
    itemColor[1].classList.remove("_js-scroll-active");
    itemColor[2].classList.remove("_js-scroll-active");
    itemColor[3].classList.remove("_js-scroll-active");
    itemColor[4].classList.remove("_js-scroll-active");
  } else if (window.scrollY >= rwa && window.scrollY < visa) {
   itemColor[0].classList.add("_js-scroll-active");
    itemColor[1].classList.remove("_js-scroll-active");
    itemColor[2].classList.remove("_js-scroll-active");
    itemColor[3].classList.remove("_js-scroll-active");
    itemColor[4].classList.remove("_js-scroll-active");
  } else if (window.scrollY >= visa && window.scrollY < testimonials) {
   itemColor[0].classList.remove("_js-scroll-active");
    itemColor[1].classList.add("_js-scroll-active");
    itemColor[2].classList.remove("_js-scroll-active");
    itemColor[3].classList.remove("_js-scroll-active");
    itemColor[4].classList.remove("_js-scroll-active");
  } else if (window.scrollY >= testimonials && window.scrollY < about) {
   itemColor[0].classList.remove("_js-scroll-active");
    itemColor[1].classList.remove("_js-scroll-active");
    itemColor[2].classList.add("_js-scroll-active");
    itemColor[3].classList.remove("_js-scroll-active");
    itemColor[4].classList.remove("_js-scroll-active");
  } else if (window.scrollY >= about && window.scrollY < faq) {
   itemColor[0].classList.remove("_js-scroll-active");
    itemColor[1].classList.remove("_js-scroll-active");
    itemColor[2].classList.remove("_js-scroll-active");
    itemColor[3].classList.add("_js-scroll-active");
    itemColor[4].classList.remove("_js-scroll-active");
  } else if (window.scrollY >= faq) {
   itemColor[0].classList.remove("_js-scroll-active");
    itemColor[1].classList.remove("_js-scroll-active");
    itemColor[2].classList.remove("_js-scroll-active");
    itemColor[3].classList.remove("_js-scroll-active");
    itemColor[4].classList.add("_js-scroll-active");
  }
});
   }
 
</script>

<?php wp_footer(); ?>

</body>
</html>
