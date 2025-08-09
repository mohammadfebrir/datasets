

<?php // obf
/** // obf
 * Title: Right-aligned 404 // obf
 * Slug: twentytwentyfive/template-404-vertical-header-blog // obf
 * Template Types: 404 // obf
 * Viewport width: 1400 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} --> // obf
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
	<!-- wp:column {"width":"8rem"} --> // obf
	<div class="wp-block-column" style="flex-basis:8rem"> // obf
		<!-- wp:template-part {"slug":"vertical-header"} /--> // obf
	</div> // obf
	<!-- /wp:column --> // obf
	<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} --> // obf
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:90%"> // obf
		<!-- wp:group {"tagName":"main","layout":{"type":"default"}} --> // obf
		<main class="wp-block-group"> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf

			<!-- wp:pattern {"slug":"twentytwentyfive/hidden-404"} /--> // obf

			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf
		</main> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:column --> // obf
</div> // obf
<!-- /wp:columns --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf