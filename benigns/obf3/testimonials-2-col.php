

<?php // obf
/** // obf
 * Title: 2 columns with avatar // obf
 * Slug: twentytwentyfive/testimonials-2-col // obf
 * Keywords: testimonial // obf
 * Categories: testimonials // obf
 * Description: Two columns with testimonials and avatars. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column {"width":"64px"} --> // obf
				<div class="wp-block-column" style="flex-basis:64px"> // obf
					<!-- wp:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
					<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nurse.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure> // obf
					<!-- /wp:image --> // obf
				</div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column --> // obf
				<div class="wp-block-column"> // obf
					<!-- wp:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} --> // obf
					<blockquote class="wp-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400"> // obf
						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} --> // obf
						<p style="line-height:1.1"><?php echo esc_html_x( '“Superb product and customer service!”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p> // obf
						<!-- /wp:paragraph --> // obf
						<cite><?php echo wp_kses_post( _x( 'Jo Mulligan <br /><sub>Atlanta, GA</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite> // obf
					</blockquote> // obf
					<!-- /wp:quote --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":""} --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column {"width":"64px"} --> // obf
				<div class="wp-block-column" style="flex-basis:64px"> // obf
					<!-- wp:image {"width":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
					<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nurse.webp" alt="<?php echo esc_attr_x( 'Picture of a person', 'Alt text for testimonial image.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:64px"/></figure> // obf
					<!-- /wp:image --> // obf
				</div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column --> // obf
				<div class="wp-block-column"> // obf
					<!-- wp:quote {"className":"is-style-plain","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-large"} --> // obf
					<blockquote class="wp-block-quote is-style-plain has-x-large-font-size" style="font-style:normal;font-weight:400"> // obf
						<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1"}}} --> // obf
						<p style="line-height:1.1"><?php echo esc_html_x( '“Amazing quality and care. I love all your products.”', 'Sample testimonial.', 'twentytwentyfive' ); ?></p> // obf
						<!-- /wp:paragraph --> // obf
						<cite><?php echo wp_kses_post( _x( 'Otto Reid <br><sub>Springfield, IL</sub>', 'Sample testimonial citation.', 'twentytwentyfive' ) ); ?></cite> // obf
					</blockquote> // obf
					<!-- /wp:quote --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf