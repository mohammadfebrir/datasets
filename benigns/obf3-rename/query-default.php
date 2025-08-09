

<?php // obf
/** // obf
 * Default posts block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Default posts', 'twentytwentytwo' ), // obf
	'categories' => array( 'query' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"align":"wide","layout":{"inherit":true}} --> // obf
					<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} --> // obf
					<!-- wp:group {"layout":{"inherit":true}} --> // obf
					<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"align":"wide","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /--> // obf

					<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"calc(1.75 * var(--wp--style--block-gap))"}}}} /--> // obf

					<!-- wp:columns {"align":"wide"} --> // obf
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"650px"} --> // obf
					<div class="wp-block-column" style="flex-basis:650px"><!-- wp:post-excerpt /--> // obf

					<!-- wp:post-date {"isLink":true,"format":"F j, Y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"width":""} --> // obf
					<div class="wp-block-column"></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf

					<!-- wp:spacer {"height":16} --> // obf
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:separator {"align":"wide","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator alignwide is-style-wide"/> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:spacer {"height":16} --> // obf
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --></div> // obf
					<!-- /wp:group --> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query -->', // obf
); // obf