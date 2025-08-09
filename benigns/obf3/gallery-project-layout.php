

<?php // obf
/** // obf
 * Title: Project layout // obf
 * Slug: twentytwentyfour/gallery-project-layout // obf
 * Categories: gallery, featured, portfolio // obf
 * Viewport width: 1600 // obf
 * Description: A gallery section with a project layout with 2 images. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"backgroundColor":"contrast","textColor":"base-2","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull has-base-2-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"stretch","width":"60%","style":{"spacing":{"padding":{"right":"0"}}}} --> // obf
		<div class="wp-block-column is-vertically-aligned-stretch" style="padding-right:0;flex-basis:60%"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"> // obf
				<!-- wp:image {"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
				<figure class="wp-block-image size-large is-style-rounded"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/angular-roof.webp" alt="<?php esc_attr_e( 'An empty staircase under an angular roof in Darling Harbour, Sydney, Australia', 'twentytwentyfour' ); ?>" style="aspect-ratio:9/16;object-fit:cover" /> // obf
				</figure> // obf
				<!-- /wp:image --> // obf

				<!-- wp:paragraph {"fontSize":"medium"} --> // obf
				<p class="has-medium-font-size"><?php echo esc_html_x( '1. Through Études, we aspire to redefine architectural boundaries and usher in a new era of design excellence that leaves an indelible mark on the built environment.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"40%"} --> // obf
		<div class="wp-block-column" style="flex-basis:40%"> // obf
			<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} --> // obf
				<p class="has-large-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html_x( 'Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers. With a commitment to innovation and sustainability, Études is the bridge that transforms architectural dreams into remarkable built realities.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|40","style":{"layout":{}}} --> // obf
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"layout":{"type":"default"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"fontSize":"medium"} --> // obf
					<p class="has-medium-font-size"><?php echo esc_html_x( '2. Case studies that celebrate the artistry can fuel curiosity and ignite inspiration.', 'Sample text for the feature area', 'twentytwentyfour' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:image {"aspectRatio":"9/16","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
					<figure class="wp-block-image size-large is-style-rounded"> // obf
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp" alt="<?php esc_attr_e( 'Art Gallery of Ontario, Toronto, Canada', 'twentytwentyfour' ); ?>" style="aspect-ratio:9/16;object-fit:cover" /> // obf
					</figure> // obf
					<!-- /wp:image --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf