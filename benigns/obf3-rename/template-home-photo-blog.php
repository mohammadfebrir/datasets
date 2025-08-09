

<?php // obf
/** // obf
 * Title: Photo blog home // obf
 * Slug: twentytwentyfive/template-home-photo-blog // obf
 * Template Types: front-page, index, home // obf
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
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-text-annotation"} --> // obf
		<h1 class="wp-block-heading has-text-align-center is-style-text-annotation"><?php esc_html_e( 'Stories', 'twentytwentyfive' ); ?></h1> // obf
		<!-- /wp:heading --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"xx-large"} --> // obf
	<h2 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h2> // obf
	<!-- /wp:heading --> // obf
	<!-- wp:pattern {"slug":"twentytwentyfive/template-query-loop-photo-blog"} /--> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf