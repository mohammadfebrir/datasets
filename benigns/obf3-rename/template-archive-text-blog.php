

<?php // obf
/** // obf
 * Title: Text blog archive // obf
 * Slug: twentytwentyfive/template-archive-text-blog // obf
 * Template Types: archive // obf
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
	<!-- wp:query-title {"type":"archive","align":"wide","fontSize":"x-large"} /--> // obf
	<!-- wp:term-description {"align":"wide"} /--> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:pattern {"slug":"twentytwentyfive/template-query-loop-text-blog"} /--> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf