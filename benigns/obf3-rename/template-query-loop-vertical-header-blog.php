

<?php // obf
/** // obf
 * Title: Right-aligned query loop // obf
 * Slug: twentytwentyfive/template-query-loop-vertical-header-blog // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} --> // obf
<div class="wp-block-query"> // obf
	<!-- wp:post-template --> // obf
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /--> // obf
			<!-- wp:post-date {"fontSize":"small","isLink":true} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-columns"><!-- wp:column {"width":"70%"} --> // obf
		<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /--></div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"></div> // obf
		<!-- /wp:column --></div> // obf
		<!-- /wp:columns --> // obf
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /--> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|80"} --> // obf
		<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
	<!-- /wp:post-template --> // obf
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} --> // obf
		<!-- wp:query-pagination-previous /--> // obf
		<!-- wp:query-pagination-numbers /--> // obf
		<!-- wp:query-pagination-next /--> // obf
	<!-- /wp:query-pagination --> // obf

	<!-- wp:query-no-results --> // obf
		<!-- wp:paragraph --> // obf
		<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
	<!-- /wp:query-no-results --> // obf
</div> // obf
<!-- /wp:query --> // obf