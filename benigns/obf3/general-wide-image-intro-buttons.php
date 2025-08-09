

<?php // obf
/** // obf
 * Wide image with introduction and buttons block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Wide image with introduction and buttons', 'twentytwentytwo' ), // obf
	'categories' => array( 'featured', 'columns' ), // obf
	'content'    => '<!-- wp:group {"align":"wide"} --> // obf
				<div class="wp-block-group alignwide"><!-- wp:image {"width":2100,"height":994,"sizeSlug":"large"} --> // obf
				<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-gray-a.jpg" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="2100" height="994"/></figure> // obf
				<!-- /wp:image --> // obf

				<!-- wp:columns {"verticalAlignment":null} --> // obf
				<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom"} --> // obf
				<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} --> // obf
				<h2 style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><em>' . wp_kses_post( __( 'Welcome to<br>the Aviary', 'twentytwentytwo' ) ) . '</em></h2> // obf
				<!-- /wp:heading --></div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"6rem"}}}} --> // obf
				<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:6rem"><!-- wp:paragraph --> // obf
				<p>' . esc_html__( 'A film about hobbyist bird watchers, a catalog of different birds, paired with the noises they make. Each bird is listed by their scientific name so things seem more official.', 'twentytwentytwo' ) . '</p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:spacer {"height":20} --> // obf
				<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:buttons --> // obf
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --> // obf
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'twentytwentytwo' ) . '</a></div> // obf
				<!-- /wp:button --> // obf

				<!-- wp:button {"className":"is-style-outline"} --> // obf
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div> // obf
				<!-- /wp:button --></div> // obf
				<!-- /wp:buttons --></div> // obf
				<!-- /wp:column --></div> // obf
				<!-- /wp:columns --></div> // obf
				<!-- /wp:group -->', // obf
); // obf