

<?php // obf
/** // obf
 * Title: List of posts, 1 column // obf
 * Slug: twentytwentyfive/template-query-loop // obf
 * Categories: query // obf
 * Block Types: core/query // obf
 * Description: A list of posts, 1 column, with featured image and post date. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} --> // obf
<div class="wp-block-query alignfull"> // obf
	<!-- wp:post-template {"align":"full","layout":{"type":"default"}} --> // obf
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf
			<!-- wp:post-content {"align":"full","fontSize":"medium","layout":{"type":"constrained"}} /--> // obf
			<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	<!-- /wp:post-template --> // obf
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
		<!-- wp:query-no-results --> // obf
		<!-- wp:paragraph --> // obf
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
		<!-- /wp:query-no-results --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
			<!-- wp:query-pagination-previous /--> // obf
			<!-- wp:query-pagination-numbers /--> // obf
			<!-- wp:query-pagination-next /--> // obf
		<!-- /wp:query-pagination --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:query --> // obf