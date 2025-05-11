<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package freebank
 */

get_header();
?>

	<main class="page-404 _page-without-footer">
      <section class="section-404">
         <div class="_conteiner">
            <div class="_inner">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/404.png" alt="" class="section-404--icon">
              <a href="<?php echo site_url() ?>" class="section-404__btn _btn"><span>Back to homepage</span></a>
            </div>
         </div>
      </section>



   </main>

<?php
get_footer();
