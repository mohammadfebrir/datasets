

<?php // obf
/** // obf
 * Title: Title text and button on left with image on right // obf
 * Slug: twentytwentyfour/text-title-left-image-right // obf
 * Categories: banner, about, featured // obf
 * Viewport width: 1400 // obf
 * Description: A title, a paragraph and a CTA button on the left with an image on the right. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"stretch","width":"50%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"> // obf

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} --> // obf
				<p class="has-heading-font-family has-x-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'Études offers comprehensive consulting, management, design, and research solutions. Every architectural endeavor is an opportunity to shape the future.', 'Headline for the About pattern', 'twentytwentyfour' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:group {"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} --> // obf
				<div class="wp-block-group"> // obf

					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} --> // obf
					<p><?php echo esc_html_x( 'Leaving an indelible mark on the landscape of tomorrow.', 'Description for the About pattern', 'twentytwentyfour' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button --> // obf
						<div class="wp-block-button"> // obf
							<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'About us', 'Call to Action button text', 'twentytwentyfour' ); ?></a> // obf
						</div> // obf
						<!-- /wp:button --> // obf
					</div> // obf
					<!-- /wp:buttons --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"> // obf
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
			<figure class="wp-block-image size-large is-style-rounded"> // obf
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/museum.webp" alt="<?php esc_attr_e( 'A ramp along a curved wall in the Kiasma Museu, Helsinki, Finland', 'twentytwentyfour' ); ?>" style="aspect-ratio:3/4;object-fit:cover" /> // obf
			</figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf