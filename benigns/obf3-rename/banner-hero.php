

<?php // obf
/** // obf
 * Title: Hero // obf
 * Slug: twentytwentyfour/banner-hero // obf
 * Categories: banner, call-to-action, featured // obf
 * Viewport width: 1400 // obf
 * Description: A hero section with a title, a paragraph, a CTA button, and an image. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} --> // obf
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"565px"}} --> // obf
	<div class="wp-block-group"> // obf

		<!-- wp:heading {"textAlign":"center","fontSize":"x-large","level":1} --> // obf
		<h1 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'A commitment to innovation and sustainability', 'Heading of the hero section', 'twentytwentyfour' ); ?></h1> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:spacer {"height":"1.25rem"} --> // obf
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:paragraph {"align":"center"} --> // obf
		<p class="has-text-align-center"><?php echo esc_html_x( 'Études is a pioneering firm that seamlessly merges creativity and functionality to redefine architectural excellence.', 'Content of the hero section', 'twentytwentyfour' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:spacer {"height":"1.25rem"} --> // obf
		<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
		<div class="wp-block-buttons"> // obf
			<!-- wp:button --> // obf
			<div class="wp-block-button"> // obf
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'About us', 'Button text of the hero section', 'twentytwentyfour' ); ?></a> // obf
			</div> // obf
			<!-- /wp:button --> // obf
		</div> // obf
		<!-- /wp:buttons --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|30","style":{"layout":{}}} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"> // obf
	</div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} --> // obf
	<figure class="wp-block-image alignwide size-full is-style-rounded"> // obf
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/building-exterior.webp" alt="<?php esc_attr_e( 'Building exterior in Toronto, Canada', 'twentytwentyfour' ); ?>" /> // obf
	</figure> // obf
	<!-- /wp:image --> // obf
</div> // obf
<!-- /wp:group --> // obf