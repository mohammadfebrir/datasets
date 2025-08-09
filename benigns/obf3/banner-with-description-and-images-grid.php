

<?php // obf
/** // obf
 * Title: Banner with description and images grid // obf
 * Slug: twentytwentyfive/banner-description-images-grid // obf
 * Categories: banner, featured // obf
 * Description: A banner with a short paragraph, and two images displayed in a grid layout. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"26rem"}} --> // obf
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch","flexWrap":"nowrap"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:heading {"className":"is-style-text-annotation"} --> // obf
				<h2 class="wp-block-heading is-style-text-annotation"><?php esc_html_e( 'About Us', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph {"className":"is-style-text-subtitle"} --> // obf
				<p class="is-style-text-subtitle"> // obf
				<?php // obf
				printf( // obf
					/* translators: %s is the brand name, e.g., 'Fleurs'. */ // obf
					esc_html__( '%s is a flower delivery and subscription business. Based in the EU, our mission is not only to deliver stunning flower arrangements across but also foster knowledge and enthusiasm on the beautiful gift of nature: flowers.', 'twentytwentyfive' ), // obf
					'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ) . '</strong>' // obf
				); // obf
				?> // obf
				</p> // obf
				<!-- /wp:paragraph --> // obf

			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-1.webp" alt="<?php esc_attr_e( 'Photography close up of a red flower.', 'twentytwentyfive' ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} --> // obf
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-2.webp" alt="<?php esc_attr_e( 'Black and white photography close up of a flower.', 'twentytwentyfive' ); ?>" style="aspect-ratio:3/4;object-fit:cover"/></figure> // obf
		<!-- /wp:image --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf