

<?php // obf
/** // obf
 * Title: RSVP // obf
 * Slug: twentytwentyfour/cta-rsvp // obf
 * Categories: call-to-action, featured // obf
 * Viewport width: 1100 // obf
 * Description: A large RSVP heading sideways, a description, and a CTA button. // obf
 */ // obf
?> // obf

<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'RSVP', 'Name of RSVP pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"accent-5","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull has-accent-5-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"stretch","width":"40%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:40%"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"> // obf

				<!-- wp:heading {"textAlign":"right","level":2,"style":{"typography":{"fontSize":"12rem","writingMode":"vertical-rl","lineHeight":"1"},"spacing":{"margin":{"right":"0","left":"calc( var(--wp--preset--spacing--20) * -1)"}}}} --> // obf
					<h2 class="wp-block-heading has-text-align-right" style="margin-right:0;margin-left:calc( var(--wp--preset--spacing--20) * -1);font-size:12rem;line-height:1;writing-mode:vertical-rl"><?php echo esc_html_x( 'RSVP', 'Initials for ´please respond´', 'twentytwentyfour' ); ?></h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:group {"layout":{"type":"constrained","contentSize":"300px","justifyContent":"left"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} --> // obf
					<p><?php echo esc_html_x( 'Experience the fusion of imagination and expertise with Études Arch Summit, February 2025.', 'RSVP call to action description', 'twentytwentyfour' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button --> // obf
						<div class="wp-block-button"> // obf
							<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Reserve your spot', 'Call to action button text for the reservation button', 'twentytwentyfour' ); ?></a> // obf
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

		<!-- wp:column {"verticalAlignment":"top","width":"60%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"> // obf
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-5"}},"className":"is-style-rounded"} --> // obf
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