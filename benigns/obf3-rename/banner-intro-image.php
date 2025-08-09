

<?php // obf
/** // obf
 * Title: Short heading and paragraph and image on the left // obf
 * Slug: twentytwentyfive/banner-intro-image // obf
 * Categories: banner, featured // obf
 * Description: A Intro pattern with Short heading, paragraph and image on the left. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"56%"} --> // obf
		<div class="wp-block-column" style="flex-basis:56%"> // obf
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
			<figure class="wp-block-image size-full"> // obf
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers.webp" alt="<?php echo esc_attr_x( 'Picture of a flower', 'Alt text for intro picture.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
			</figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:heading --> // obf
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'New arrivals', 'Heading for banner pattern.', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph --> // obf
			<p><?php echo esc_html_x( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience, revealing hidden wonders.', 'Sample description for banner with flower.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:buttons --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button --> // obf
				<div class="wp-block-button"> // obf
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn more', 'twentytwentyfive' ); ?></a> // obf
				</div> // obf
				<!-- /wp:button --> // obf
			</div> // obf
			<!-- /wp:buttons --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf