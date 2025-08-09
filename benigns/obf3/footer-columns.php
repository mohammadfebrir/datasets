

<?php // obf
/** // obf
 * Title: Footer with columns // obf
 * Slug: twentytwentyfive/footer-columns // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: Footer columns with title, tagline and links. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} --> // obf
		<div class="wp-block-group alignfull"> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
				<!-- wp:site-title {"level":2,"fontSize":"xx-large"} /--> // obf
				<!-- wp:site-tagline /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"wrap"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group" style="padding-right:0;padding-left:0"> // obf
					<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} --> // obf
					<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf
					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Stories', 'twentytwentyfive' ); ?>"} --> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
					<!-- /wp:navigation --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group" style="padding-right:0;padding-left:0"> // obf
					<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} --> // obf
					<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf
					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php esc_attr_e( 'Featured', 'twentytwentyfive' ); ?>"} --> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Events', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Shop', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Patterns', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Themes', 'twentytwentyfive' ); ?>","url":"#"} /--> // obf
					<!-- /wp:navigation --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|60"} --> // obf
		<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div> // obf
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