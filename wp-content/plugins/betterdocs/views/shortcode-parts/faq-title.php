<div class="betterdocs-faq-post">
	<?php
		/**
		 * do_action(')
		 */

		do_action( 'betterdocs_faq_post_before', $faq_toggle );
	?>
	<span class="betterdocs-faq-post-name">
		<?php echo esc_html( get_the_title() ); ?>
	</span>
	<?php
		/**
		 * do_action(')
		 */

		do_action( 'betterdocs_faq_post_after', $faq_toggle );
	?>
</div>
