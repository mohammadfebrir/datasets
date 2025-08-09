

<?php // obf
/** // obf
 * Heading and bird image // obf
 * // obf
 * This pattern is used only for translation // obf
 * and to reference a dynamic image URL. It does // obf
 * not appear in the inserter. // obf
 */ // obf
return array( // obf
	'title'    => __( 'Heading and bird image', 'twentytwentytwo' ), // obf
	'inserter' => false, // obf
	'content'  => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:0px;"><!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"var(--wp--custom--typography--font-size--colossal, clamp(3.25rem, 8vw, 6.25rem))","lineHeight":"1.15"}}} --> // obf
					<h2 class="alignwide" style="font-size:var(--wp--custom--typography--font-size--colossal, clamp(3.25rem, 8vw, 6.25rem));line-height:1.15">' . wp_kses_post( __( '<em>The Hatchery</em>: a blog about my adventures in bird watching', 'twentytwentytwo' ) ) . '</h2> // obf
					<!-- /wp:heading --></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:image {"align":"full","width":2400,"height":1020,"sizeSlug":"full","linkDestination":"none"} --> // obf
					<figure class="wp-block-image alignfull size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-transparent-c.png" alt="' . esc_attr__( 'Illustration of a bird flying.', 'twentytwentytwo' ) . '" width="2400" height="1020"/></figure> // obf
					<!-- /wp:image -->', // obf
); // obf