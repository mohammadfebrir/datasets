

<?php // obf
/** // obf
 * Title: Cover with big heading // obf
 * Slug: twentytwentyfive/banner-cover-big-heading // obf
 * Categories: banner, about, featured // obf
 * Description: A full-width cover section with a large background image and an oversized heading. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-3" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} --> // obf
		<figure class="wp-block-image alignwide size-full"> // obf
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coming-soon-bg-image.webp" alt="<?php esc_attr_e( 'Photo of a field full of flowers, a blue sky and a tree.', 'twentytwentyfive' ); ?>"/> // obf
		</figure> // obf
		<!-- /wp:image --> // obf

		<!-- wp:group {"align":"full","layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignfull"> // obf
			<!-- wp:heading {"align":"left","style":{"typography":{"fontSize":"clamp(1rem, 380px, 24vw)","letterSpacing":"-0.02em","lineHeight":"1","fontWeight":"700","fontStyle":"normal"}}} --> // obf
			<h2 class="wp-block-heading has-text-align-left" style="font-size:clamp(1rem, 380px, 24vw);font-style:normal;font-weight:700;letter-spacing:-0.02em;line-height:1"><?php esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf