

<?php // obf
/** // obf
 * Title: Centered footer // obf
 * Slug: twentytwentyfive/footer-centered // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: Footer with centered site title and tagline. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"> // obf
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:site-title {"level":0,"textAlign":"center"} /--> // obf
		<!-- wp:site-tagline {"textAlign":"center"} /--> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
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