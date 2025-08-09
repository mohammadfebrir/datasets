

<?php // obf
/** // obf
 * Default footer with logo // obf
 */ // obf
return array( // obf
	'title'      => __( 'Footer with logo and citation', 'twentytwentytwo' ), // obf
	'categories' => array( 'footer' ), // obf
	'blockTypes' => array( 'core/template-part/footer' ), // obf
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-logo {"width":60} /--> // obf

					<!-- wp:paragraph {"align":"right"} --> // obf
					<p class="has-text-align-right">' . // obf
					sprintf( // obf
						/* Translators: WordPress link. */ // obf
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ), // obf
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">WordPress</a>' // obf
					) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group -->', // obf
); // obf