<?php
/**
 * The template for displaying BetterDocs category archive
 * This file overrides the BetterDocs taxonomy-doc_category.php template
 */
include(get_template_directory() . '/betterdocs/header-docs.php');
?>

<div class="betterdocs-wrapper betterdocs-taxonomy-wrapper">
    <?php
    // BetterDocs default content
    echo do_shortcode('[betterdocs_category_grid term_id="' . get_queried_object_id() . '"]');
    ?>
</div>

<?php include(get_template_directory() . '/betterdocs/footer-docs.php'); ?>