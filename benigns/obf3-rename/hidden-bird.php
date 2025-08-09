

<?php // obf
/** // obf
 * Bird image // obf
 * // obf
 * This pattern is used only to reference a dynamic image URL. // obf
 * It does not appear in the inserter. // obf
 */ // obf
return array( // obf
	'title'    => __( 'Heading and bird image', 'twentytwentytwo' ), // obf
	'inserter' => false, // obf
	'content'  => '<!-- wp:image {"align":"wide","width":2000,"height":474,"sizeSlug":"full","linkDestination":"none"} --> // obf
					<figure class="wp-block-image alignwide size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-transparent-d.png" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="2000" height="474"/></figure> // obf
					<!-- /wp:image -->', // obf
); // obf