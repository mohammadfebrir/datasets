

<?php // obf
/** // obf
 * Title: Heading and paragraph with image on the right // obf
 * Slug: twentytwentyfive/heading-and-paragraph-with-image // obf
 * Categories: about // obf
 * Description: A two-column section with a heading and paragraph on the left, and an image on the right. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf

<!-- wp:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-5" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"> // obf
			<!-- wp:heading {"className":"wp-block-heading"} --> // obf
			<h2 class="wp-block-heading"> // obf
				<?php esc_html_e( 'About the event', 'twentytwentyfive' ); ?> // obf
			</h2> // obf
			<!-- /wp:heading --> // obf
			<!-- wp:paragraph {"fontSize":"medium"} --> // obf
			<p class="has-medium-font-size"><?php echo esc_html_x( 'Held over a weekend, the event is structured around a series of exhibitions, workshops, and panel discussions. The exhibitions showcase a curated selection of photographs that tell compelling stories from various corners of the globe, each image accompanied by detailed narratives that provide context and deeper insight into the historical significance of the scenes depicted. These photographs are drawn from the archives of renowned photographers, as well as emerging talents, ensuring a blend of both classical and contemporary perspectives.', 'Event Overview Text.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"> // obf
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
			<figure class="wp-block-image size-full"> // obf
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php echo esc_attr_x( 'Cliff Palace, Colorado', 'Alt text for Overview picture.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
			</figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf