

<?php // obf
/** // obf
 * Title: Centered footer with social links // obf
 * Slug: twentytwentyfive/footer-social // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: Footer with centered site title and social links. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-5" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:site-title {"level":2,"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} /--> // obf
		<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"x-large","layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'Social media', 'twentytwentyfive' ); ?>"} --> // obf
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
		<!-- wp:navigation-link {"label":"<?php echo esc_html_x( 'X', 'Refers to the social media platform formerly known as Twitter.', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
		<!-- /wp:navigation --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:paragraph {"align":"center","fontSize":"small"} --> // obf
	<p class="has-text-align-center has-small-font-size"> // obf
		<?php // obf
		printf( // obf
			/* translators: Designed with WordPress. %s: WordPress link. */ // obf
			esc_html__( 'Designed with %s', 'twentytwentyfive' ), // obf
			'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfive' ) ) . '" rel="nofollow">WordPress</a>' // obf
		); // obf
		?> // obf
		</p> // obf
	<!-- /wp:paragraph --> // obf
</div> // obf
<!-- /wp:group --> // obf