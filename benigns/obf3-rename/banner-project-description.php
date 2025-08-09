

<?php // obf
/** // obf
 * Title: Project description // obf
 * Slug: twentytwentyfour/banner-project-description // obf
 * Categories: featured, banner, about, portfolio // obf
 * Viewport width: 1400 // obf
 * Description: Project description section with title, paragraph, and an image. // obf
 */ // obf
?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-2","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide"} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"40%"} --> // obf
		<div class="wp-block-column" style="flex-basis:40%"> // obf
			<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} --> // obf
			<p><?php echo esc_html_x( 'Art Gallery — Overview', 'Sample title for a project or post', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"60%"} --> // obf
		<div class="wp-block-column" style="flex-basis:60%"> // obf

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} --> // obf
			<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'This transformative project seeks to enhance the gallery\'s infrastructure, accessibility, and exhibition spaces while preserving its rich cultural heritage.', 'Sample descriptive text for a project or post.', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"> // obf
	</div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
	<figure class="wp-block-image alignwide size-large is-style-rounded"> // obf
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hotel-facade.webp" alt="<?php esc_attr_e( 'Hyatt Regency San Francisco, San Francisco, United States', 'twentytwentyfour' ); ?>" /> // obf
	</figure> // obf
	<!-- /wp:image --> // obf
</div> // obf
<!-- /wp:group --> // obf