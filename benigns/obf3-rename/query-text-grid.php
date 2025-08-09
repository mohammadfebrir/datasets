

<?php // obf
/** // obf
 * Text-based grid of posts block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Text-based grid of posts', 'twentytwentytwo' ), // obf
	'categories' => array( 'query' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} --> // obf
					<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} --> // obf

					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /--> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:separator {"align":"wide","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator alignwide is-style-wide"/> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query -->', // obf
); // obf