

<?php // obf
/** // obf
 * Title: Contact location and link // obf
 * Slug: twentytwentyfive/contact-location-and-link // obf
 * Categories: contact, featured // obf
 * Description: Contact section with a location address, a directions link, and an image of the location. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} --> // obf
<div class="wp-block-group alignfull is-style-section-3" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"top","width":""} --> // obf
		<div class="wp-block-column is-vertically-aligned-top"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"><!-- wp:paragraph {"className":"is-style-text-display","fontSize":"xx-large"} --> // obf
				<p class="is-style-text-display has-xx-large-font-size"><?php esc_html_e( 'Visit us at 123 Example St. Manhattan, NY 10300, United States', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} --> // obf
				<p class="has-medium-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e( 'Get directions', 'twentytwentyfive' ); ?></a></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"top","width":""} --> // obf
		<div class="wp-block-column is-vertically-aligned-top"> // obf
			<!-- wp:image {"aspectRatio":"1","scale":"cover","linkDestination":"none","className":"wp-block-image size-large"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/location.webp" alt="<?php esc_attr_e( 'The business location', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf