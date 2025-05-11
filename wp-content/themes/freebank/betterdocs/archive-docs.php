<?php
/**
 * BetterDocs Archive Template
 * This file overrides the BetterDocs archive-docs.php template
 */
include(get_template_directory() . '/betterdocs/header-docs.php');
?>

<div class="betterdocs-wrapper betterdocs-docs-archive-wrapper">
    <?php
    // BetterDocs default content
    echo do_shortcode('[betterdocs_category_grid]');
    ?>
</div>

<?php include(get_template_directory() . '/betterdocs/footer-docs.php'); ?>