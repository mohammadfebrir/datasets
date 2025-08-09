

<?php // obf
/** // obf
 * Title: Sidebar // obf
 * Slug: twentytwentyfive/hidden-sidebar // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small"} --> // obf
<h2 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Other Posts', 'twentytwentyfive' ); ?></h2> // obf
<!-- /wp:heading --> // obf

<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
<!-- /wp:spacer --> // obf

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
<div class="wp-block-query"> // obf
	<!-- wp:post-template --> // obf
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /--> // obf
			<!-- wp:post-date {"fontSize":"small","isLink":true} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
		<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
	<!-- /wp:post-template --> // obf

	<!-- wp:query-no-results --> // obf
		<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>","fontSize":"medium"} --> // obf
		<p class="has-medium-font-size"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
	<!-- /wp:query-no-results --> // obf
</div> // obf
<!-- /wp:query --> // obf