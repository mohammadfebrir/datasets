

<?php // obf
/** // obf
 * Title: Text blog query loop // obf
 * Slug: twentytwentyfive/template-query-loop-text-blog // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
<div class="wp-block-query alignwide"> // obf
	<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:query-no-results {"align":"wide","fontSize":"medium"} --> // obf
			<!-- wp:paragraph --> // obf
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		<!-- /wp:query-no-results --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} --> // obf
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} --> // obf
		<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> // obf
			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
			<!-- wp:post-date {"textAlign":"right","isLink":true,"fontSize":"small"} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	<!-- /wp:post-template --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);"> // obf
		<!-- wp:query-pagination {"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} --> // obf
		<!-- wp:query-pagination-previous /--> // obf
		<!-- wp:query-pagination-numbers /--> // obf
		<!-- wp:query-pagination-next /--> // obf
		<!-- /wp:query-pagination --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:query --> // obf