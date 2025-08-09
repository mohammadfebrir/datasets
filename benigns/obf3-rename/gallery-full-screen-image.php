

<?php // obf
/** // obf
 * Title: Full screen image // obf
 * Slug: twentytwentyfour/gallery-full-screen-image // obf
 * Categories: gallery, portfolio // obf
 * Description: A cover image section that covers the entire width. // obf
 */ // obf
?> // obf

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp","hasParallax":true,"dimRatio":0,"overlayColor":"base","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"> // obf
	<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"> // obf
	</span> // obf
	<div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/art-gallery.webp)"> // obf
	</div> // obf
	<div class="wp-block-cover__inner-container"> // obf
		<!-- wp:spacer {"height":"500px"} --> // obf
		<div style="height:500px" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
	</div> // obf
</div> // obf
<!-- /wp:cover --> // obf