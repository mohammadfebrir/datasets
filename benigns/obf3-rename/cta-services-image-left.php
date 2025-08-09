

<?php // obf
/** // obf
 * Title: Services call to action with image on left // obf
 * Slug: twentytwentyfour/cta-services-image-left // obf
 * Categories: call-to-action, banner, featured, services // obf
 * Viewport width: 1400 // obf
 * Description: An image, title, paragraph and a CTA button to describe services. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-5","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull has-accent-5-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"> // obf
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-1"}},"className":"is-style-rounded"} --> // obf
			<figure class="wp-block-image size-full is-style-rounded"> // obf
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/abstract-geometric-art.webp" alt="<?php esc_attr_e( 'White abstract geometric artwork from Dresden, Germany', 'twentytwentyfour' ); ?>" style="aspect-ratio:4/3;object-fit:cover" /> // obf
			</figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"40%"} --> // obf
		<div class="wp-block-column" style="flex-basis:40%"> // obf
			<!-- wp:heading --> // obf
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Guiding your business through the project', 'Sample heading of the services pattern', 'twentytwentyfour' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph --> // obf
			<p><?php echo esc_html_x( 'Experience the fusion of imagination and expertise with Études—the catalyst for architectural transformations that enrich the world around us.', 'Sample description of the services pattern', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:buttons --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button --> // obf
				<div class="wp-block-button"> // obf
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Our services', 'Sample button text to view the services', 'twentytwentyfour' ); ?></a> // obf
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