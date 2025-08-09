

<?php // obf
/** // obf
 * Title: Services, team photos // obf
 * Slug: twentytwentyfive/services-team-photos // obf
 * Categories: banner, call-to-action, featured // obf
 * Description: Display team photos in a services section with grid layout. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:columns {"align":"wide"} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:heading --> // obf
			<h2 class="wp-block-heading"><?php esc_html_e( 'Our small team is a group of driven, detail-oriented people who are passionate about their customers.', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
				<figure class="wp-block-image size-full"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-splashing-water.webp" alt="<?php esc_attr_e( 'Woman on beach, splashing water.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
				</figure> // obf
				<!-- /wp:image --> // obf

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
				<figure class="wp-block-image size-full"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nurse.webp" alt="<?php esc_attr_e( 'Portrait of a nurse', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
				</figure> // obf
				<!-- /wp:image --> // obf

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
				<figure class="wp-block-image size-full"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/typewriter.webp" alt="<?php esc_attr_e( 'Picture of a person typing on a typewriter.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
				</figure> // obf
				<!-- /wp:image --> // obf

				<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full"} --> // obf
				<figure class="wp-block-image size-full"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-in-hat.webp" alt="<?php esc_attr_e( 'Man in hat, standing in front of a building.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/> // obf
				</figure> // obf
				<!-- /wp:image --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf