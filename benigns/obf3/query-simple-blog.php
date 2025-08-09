

<?php // obf
/** // obf
 * Simple blog posts block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Simple blog posts', 'twentytwentytwo' ), // obf
	'categories' => array( 'query' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /--> // obf

					<!-- wp:post-featured-image {"isLink":true} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:group {"layout":{"type":"flex"}} --> // obf
					<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"category","fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:spacer {"height":128} --> // obf
					<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query -->', // obf
); // obf