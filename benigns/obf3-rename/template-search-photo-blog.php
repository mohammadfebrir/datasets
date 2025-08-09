

<?php // obf
/** // obf
 * Title: Photo blog search results // obf
 * Slug: twentytwentyfive/template-search-photo-blog // obf
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
	<!-- wp:query-title {"type":"search","textAlign":"center","align":"wide"} /--> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:pattern {"slug":"twentytwentyfive/hidden-search"} /--> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:pattern {"slug":"twentytwentyfive/template-query-loop-photo-blog"} /--> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf