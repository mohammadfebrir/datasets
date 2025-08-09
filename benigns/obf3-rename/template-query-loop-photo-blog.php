

<?php // obf
/** // obf
 * Title: Photo blog posts // obf
 * Slug: twentytwentyfive/template-query-loop-photo-blog // obf
 * Categories: query // obf
 * Block Types: core/query // obf
 * Viewport width: 1400 // obf
 * Description: A list of posts, 3 columns, with only featured images. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
<div class="wp-block-query alignwide"> // obf
		<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group"> // obf
		<!-- wp:query-no-results --> // obf
		<!-- wp:paragraph {"align":"center"} --> // obf
		<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
		<!-- /wp:query-no-results --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} --> // obf
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);"> // obf
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"23rem"}} --> // obf
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /--> // obf
		<!-- /wp:post-template --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"layout":{"type":"default"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"full","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
		<!-- wp:query-pagination-previous /--> // obf
		<!-- wp:query-pagination-numbers /--> // obf
		<!-- wp:query-pagination-next /--> // obf
		<!-- /wp:query-pagination --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:query --> // obf