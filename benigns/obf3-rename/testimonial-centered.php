

<?php // obf
/** // obf
 * Title: Centered testimonial // obf
 * Slug: twentytwentyfour/testimonial-centered // obf
 * Keywords: quote, review, about // obf
 * Categories: testimonials, text // obf
 * Viewport width: 1300 // obf
 * Description: A centered testimonial section with an avatar, name, and job title. // obf
 */ // obf
?> // obf

<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial', 'Name of testimonial pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained","contentSize":""}} --> // obf
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2"}},"textColor":"base","fontSize":"x-large","fontFamily":"heading"} --> // obf
		<p class="has-text-align-center has-base-color has-text-color has-heading-font-family has-x-large-font-size" style="line-height:1.2"> // obf
			<em><?php echo esc_html_x( '“Études has saved us thousands of hours of work and has unlocked insights we never thought possible.”', 'Testimonial Text or Review Text Got From the Person', 'twentytwentyfour' ); ?></em> // obf
		</p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonial source', 'Name of testimonial citation group', 'twentytwentyfour' ); ?>"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:image {"align":"center","width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"100px"}}} --> // obf
			<figure class="wp-block-image aligncenter size-thumbnail is-resized has-custom-border"> // obf
				<img alt="" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:60px" /> // obf
			</figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"0"}}}} --> // obf
			<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:0"><?php echo esc_html_x( 'Annie Steiner', 'Name of Person Provided the Testimonial', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"contrast-3","fontSize":"small"} --> // obf
			<p class="has-text-align-center has-contrast-3-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html_x( 'CEO, Greenprint', 'Designation of Person Provided Testimonial', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf