

<?php // obf
/** // obf
 * Title: News blog query loop // obf
 * Slug: twentytwentyfive/template-query-loop-news-blog // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} --> // obf
<div class="wp-block-query"><!-- wp:post-template --> // obf
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}}} --> // obf
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"20%"} --> // obf
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:post-date {"isLink":true} /--></div> // obf
<!-- /wp:column --> // obf

<!-- wp:column --> // obf
<div class="wp-block-column"><!-- wp:post-title /--> // obf

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"fontSize":"medium"} /--> // obf

<!-- wp:group {"style":{"spacing":{"blockGap":"0.12em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
<div class="wp-block-group"> // obf
	<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"small"} --> // obf
	<p class="has-accent-4-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Written by', 'Prefix before the author name. The post author name is displayed in a separate block.', 'twentytwentyfive' ); ?></p> // obf
	<!-- /wp:paragraph --> // obf
	<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /--> // obf
</div> // obf
<!-- /wp:group --></div> // obf
<!-- /wp:column --> // obf

<!-- wp:column {"width":"20%"} --> // obf
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:post-featured-image {"aspectRatio":"1"} /--></div> // obf
<!-- /wp:column --></div> // obf
<!-- /wp:columns --> // obf
<!-- /wp:post-template --> // obf

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} --> // obf
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
<!-- wp:query-pagination-previous {"label":"<?php esc_html_e( 'Newer Posts', 'twentytwentyfive' ); ?>"} /--> // obf

<!-- wp:query-pagination-numbers /--> // obf

<!-- wp:query-pagination-next {"label":"<?php esc_html_e( 'Older Posts', 'twentytwentyfive' ); ?>"} /--> // obf
<!-- /wp:query-pagination --></div> // obf
<!-- /wp:group --> // obf

<!-- wp:query-no-results --> // obf
<!-- wp:paragraph --> // obf
<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
<!-- /wp:paragraph --> // obf
<!-- /wp:query-no-results --> // obf

<!-- wp:spacer {"height":"var:preset|spacing|70"} --> // obf
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div> // obf
<!-- /wp:spacer --></div> // obf
<!-- /wp:query --> // obf