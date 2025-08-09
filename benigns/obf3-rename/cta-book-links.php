

<?php // obf
/** // obf
 * Title: Call to action with book links // obf
 * Slug: twentytwentyfive/cta-book-links // obf
 * Categories: call-to-action // obf
 * Description: A call to action section with links to get the book in different websites. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} --> // obf
	<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Buy your copy of The Stories Book', 'twentytwentyfive' ); ?></h2> // obf
	<!-- /wp:heading --> // obf

	<!-- wp:buttons {"align":"wide","fontSize":"medium","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} --> // obf
	<div class="wp-block-buttons alignwide has-custom-font-size has-medium-font-size"> // obf
		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Amazon', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Audible', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Barnes &amp; Noble', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Apple Books', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Bookshop.org', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Spotify', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'BAM!', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf

		<!-- wp:button --> // obf
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Simon &amp; Schuster', 'Example brand name.', 'twentytwentyfive' ); ?></a></div> // obf
		<!-- /wp:button --> // obf
	</div> // obf
	<!-- /wp:buttons --> // obf

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} --> // obf
	<p class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( _x( 'Outside Europe? View <a href="#" rel="nofollow">international editions</a>.', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p> // obf
	<!-- /wp:paragraph --> // obf
</div> // obf
<!-- /wp:group --> // obf