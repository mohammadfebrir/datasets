

<?php // obf
/** // obf
 * Title: Text blog search results // obf
 * Slug: twentytwentyfive/template-search-text-blog // obf
 * Template Types: search // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header"} /--> // obf

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:query-title {"type":"search","align":"wide","fontSize":"x-large"} /--> // obf
		<!-- wp:pattern {"slug":"twentytwentyfive/hidden-search"} /--> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:pattern {"slug":"twentytwentyfive/template-query-loop-text-blog"} /--> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf