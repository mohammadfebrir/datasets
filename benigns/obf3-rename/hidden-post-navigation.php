

<?php // obf
/** // obf
 * Title: Post navigation // obf
 * Slug: twentytwentyfour/hidden-post-navigation // obf
 * Inserter: no // obf
 */ // obf
?> // obf

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'twentytwentyfour' ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
<nav class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)" aria-label="<?php esc_attr_e( 'Posts', 'twentytwentyfour' ); ?>"> // obf
	<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_x( 'Previous: ', 'Label before the title of the previous post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /--> // obf
	<!-- wp:post-navigation-link {"label":"<?php echo esc_html_x( 'Next: ', 'Label before the title of the next post. There is a space after the colon.', 'twentytwentyfour' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /--> // obf
</nav> // obf
<!-- /wp:group --> // obf