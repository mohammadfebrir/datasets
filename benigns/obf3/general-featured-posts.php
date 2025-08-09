

<?php // obf
/** // obf
 * Featured posts block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Featured posts', 'twentytwentytwo' ), // obf
	'categories' => array( 'featured', 'query' ), // obf
	'content'    => '<!-- wp:group {"align":"wide","layout":{"inherit":false}} --> // obf
					<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase">' . esc_html__( 'Latest posts', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-featured-image {"isLink":true,"width":"","height":"310px"} /--> // obf

					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:post-date {"fontSize":"small"} /--> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:group -->', // obf
); // obf