

<?php // obf
/** // obf
 * Title: News blog archive // obf
 * Slug: twentytwentyfive/template-archive-news-blog // obf
 * Template Types: archive // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header-large-title"} /--> // obf

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|80"} --> // obf
		<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
		<!-- wp:query-title {"type":"archive"} /--> // obf
		<!-- wp:term-description /--> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:pattern {"slug":"twentytwentyfive/template-query-loop-news-blog"} /--> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer-newsletter"} /--> // obf