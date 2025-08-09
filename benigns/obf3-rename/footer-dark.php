

<?php // obf
/** // obf
 * Dark footer with title and citation // obf
 */ // obf
return array( // obf
	'title'      => __( 'Dark footer with title and citation', 'twentytwentytwo' ), // obf
	'categories' => array( 'footer' ), // obf
	'blockTypes' => array( 'core/template-part/footer' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /--> // obf

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