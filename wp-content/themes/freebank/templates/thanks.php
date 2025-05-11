<?php

/**

 * Template name: Thanks

 */
   $current = get_the_ID();

   get_header();

?>


<main class="thanks-page _page-without-footer">
      <section class="thanks">
         <div class="_conteiner">
            <div class="_inner">
               <div class="thanks-page__content">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/Thank-icon.png" alt="" class="thanks--icon">
                  <div class="thanks--text">We’re thrilled to have you on this journey towards financial freedom. At Freebnk, we’re not just building a bank—we’re creating a community of individuals who are bold, ambitious, and ready to take control of their finances. You’re now part of a movement that believes in breaking the chains of traditional banking, embracing the freedom to live, work, and invest on your own terms. Your courage to challenge the status quo inspires us, and together, we’re reshaping the future of finance. Thank you for being a part of this vision. Your journey to freedom starts now, and we’re here to support you every step of the way.</div>
                  <a href="<?php echo site_url() ?>" class="thanks__btn _btn"><span>Back to homepage</span></a>
               </div>
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thank.png" alt="" class="thanks--foto">
              
            </div>
         </div>
      </section>


   </main>

<?php

    get_footer();

