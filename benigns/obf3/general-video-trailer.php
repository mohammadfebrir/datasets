

<?php // obf
/** // obf
 * Video trailer block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Video trailer', 'twentytwentytwo' ), // obf
	'categories' => array( 'featured', 'columns' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"6rem","bottom":"4rem"}}},"backgroundColor":"secondary","textColor":"foreground","layout":{"inherit":true}} --> // obf
				<div class="wp-block-group alignfull has-foreground-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:4rem"><!-- wp:columns {"align":"wide"} --> // obf
				<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} --> // obf
				<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"x-large"} --> // obf
				<h2 class="has-x-large-font-size" id="extended-trailer">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph --> // obf
				<p>' . esc_html__( 'A film about hobbyist bird watchers, a catalog of different birds, paired with the noises they make. Each bird is listed by their scientific name so things seem more official.', 'twentytwentytwo' ) . '</p> // obf
				<!-- /wp:paragraph --></div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column {"width":"66.66%"} --> // obf
				<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:video --> // obf
				<figure class="wp-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure> // obf
				<!-- /wp:video --></div> // obf
				<!-- /wp:column --></div> // obf
				<!-- /wp:columns --></div> // obf
				<!-- /wp:group -->', // obf
); // obf