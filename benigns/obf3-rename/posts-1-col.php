

<?php // obf
/** // obf
 * Title: List of posts, 1 column // obf
 * Slug: twentytwentyfour/posts-1-col // obf
 * Categories: query // obf
 * Block Types: core/query // obf
 * Description: A list of posts, 1 column. // obf
 */ // obf
?> // obf

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-query"> // obf
	<!-- wp:query-no-results --> // obf
	<!-- wp:pattern {"slug":"twentytwentyfour/hidden-no-results"} /--> // obf
	<!-- /wp:query-no-results --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"> // obf
		<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default","columnCount":3}} --> // obf
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /--> // obf
		<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"x-large"} /--> // obf
			<!-- wp:template-part {"slug":"post-meta"} /--> // obf
			<!-- wp:post-excerpt {"fontSize":"small"} /--> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"> // obf
			</div> // obf
			<!-- /wp:spacer --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- /wp:post-template --> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} --> // obf
		<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
		<!-- wp:query-pagination-previous /--> // obf
		<!-- wp:query-pagination-next /--> // obf
		<!-- /wp:query-pagination --> // obf

	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:query --> // obf