

<?php // obf
/** // obf
 * Title: Post meta // obf
 * Slug: twentytwentyfour/hidden-post-meta // obf
 * Inserter: no // obf
 */ // obf
?> // obf

<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group"> // obf
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} --> // obf
	<div class="wp-block-group"> // obf
		<!-- wp:post-date {"format":"M j, Y","isLink":true} /--> // obf

		<!-- wp:paragraph {"textColor":"contrast-2"} --> // obf
		<p class="has-contrast-2-color has-text-color">—</p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} --> // obf
		<p class="has-small-font-size has-contrast-2-color has-text-color"><?php echo esc_html_x( 'by', 'Prefix for the post author block: By author name', 'twentytwentyfour' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:post-author-name {"isLink":true} /--> // obf

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'twentytwentyfour' ); ?>"} /--> // obf

	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf