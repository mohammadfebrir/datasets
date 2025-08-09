

<?php // obf
/** // obf
 * Title: Review with large image on right // obf
 * Slug: twentytwentyfive/testimonials-large // obf
 * Keywords: testimonial // obf
 * Categories: testimonials // obf
 * Description: A testimonial with a large image on the right. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap","verticalAlignment":"space-between"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"> // obf
				<!-- wp:heading {"className":"is-style-text-annotation","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small"} --> // obf
				<h2 class="wp-block-heading is-style-text-annotation has-x-small-font-size"><?php echo esc_html_x( 'What people are saying', 'Testimonial heading.', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"blockGap":"var:preset|spacing|50"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-large"} --> // obf
				<blockquote class="wp-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400"> // obf
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} --> // obf
					<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
						<!-- wp:paragraph {"fontSize":"xx-large"} --> // obf
						<p class="has-xx-large-font-size"><?php echo esc_html_x( '“Superb product and customer service!”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p> // obf
						<!-- /wp:paragraph --> // obf
					</div> // obf
					<!-- /wp:group --> // obf
					<cite><?php echo wp_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite> // obf
				</blockquote> // obf
				<!-- /wp:quote --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} --> // obf
		<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/typewriter.webp" alt="<?php echo esc_attr_x( 'Picture of a person typing on a typewriter.', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf