

<?php // obf
/** // obf
 * Grid of image posts block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Grid of image posts', 'twentytwentytwo' ), // obf
	'categories' => array( 'query' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'content'    => '<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false,"perPage":12},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /--> // obf

					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0.5rem"}}} --> // obf
					<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0.2em"}}},"fontSize":"small","fontFamily":"system-font"} /--></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"width":"4em"} --> // obf
					<div class="wp-block-column" style="flex-basis:4em"><!-- wp:post-date {"textAlign":"right","format":"m.d.y","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:separator {"className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator alignwide is-style-wide"/> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query -->', // obf
); // obf