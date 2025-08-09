

<?php // obf
/** // obf
 * Title: Footer with newsletter signup // obf
 * Slug: twentytwentyfive/footer-newsletter // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: Footer with large site title and newsletter signup. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}} --> // obf
<div class="wp-block-group alignfull is-style-section-3" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(1rem, 380px, 24vw)","letterSpacing":"-0.02em","fontWeight":"600","fontStyle":"normal"}}} --> // obf
		<h2 class="wp-block-heading" style="font-size:clamp(1rem, 380px, 24vw);font-style:normal;font-weight:600;letter-spacing:-0.02em"><?php esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:paragraph {"fontSize":"x-large"} --> // obf
		<p class="has-x-large-font-size"><?php esc_html_e( 'Receive our articles in your inbox.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:buttons --> // obf
		<div class="wp-block-buttons"> // obf
			<!-- wp:button --> // obf
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'twentytwentyfive' ); ?></a></div> // obf
			<!-- /wp:button --> // obf
		</div> // obf
		<!-- /wp:buttons --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
		<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
		<div class="wp-block-group alignfull"> // obf
			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"><?php esc_html_e( 'Twenty Twenty-Five', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"> // obf
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
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf