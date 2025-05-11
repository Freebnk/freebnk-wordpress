<?php
/**
 * The template for displaying BetterDocs single doc
 * This file overrides the BetterDocs single-docs.php template
 */
include(get_template_directory() . '/betterdocs/header-docs.php');
?>

<div class="betterdocs-wrapper betterdocs-single-wrapper">
    <?php
    // BetterDocs default content
    echo do_shortcode('[betterdocs_single_template]');
    ?>
</div>

<?php include(get_template_directory() . '/betterdocs/footer-docs.php'); ?>