

<?php // obf
/** // obf
 * Title: Post navigation // obf
 * Slug: twentytwentyfive/post-navigation // obf
 * Categories: text // obf
 * Description: Next and previous post links. // obf
 * Block Types: core/post-navigation-link // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} --> // obf
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);"> // obf
	<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
	<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
		<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--> // obf
		<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--> // obf
	</nav> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf