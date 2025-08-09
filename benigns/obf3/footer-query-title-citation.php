

<?php // obf
/** // obf
 * Footer with query, title, and citation // obf
 */ // obf
return array( // obf
	'title'      => __( 'Footer with query, title, and citation', 'twentytwentytwo' ), // obf
	'categories' => array( 'footer' ), // obf
	'blockTypes' => array( 'core/template-part/footer' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} --> // obf
					<div class="wp-block-query alignwide"><!-- wp:post-template --> // obf
					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:post-date {"isLink":true} /--> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query --> // obf

					<!-- wp:spacer --> // obf
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /--> // obf
					<!-- wp:group {"layout":{"type":"flex","justifyContent":"right"}} --> // obf
					<div class="wp-block-group"> // obf
					<!-- wp:paragraph --> // obf
					<p>' . // obf
					sprintf( // obf
						/* Translators: WordPress link. */ // obf
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ), // obf
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">WordPress</a>' // obf
					) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group -->', // obf
); // obf