

<?php // obf
/** // obf
 * Title: Audio format // obf
 * Slug: twentytwentyfive/format-audio // obf
 * Categories: twentytwentyfive_post-format // obf
 * Description: An audio post format with an image, title, audio player, and description. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"> // obf
	<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} --> // obf
	<div class="wp-block-columns is-not-stacked-on-mobile"> // obf
		<!-- wp:column {"width":"100px"} --> // obf
		<div class="wp-block-column" style="flex-basis:100px"><!-- wp:image {"width":"100px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} --> // obf
		<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php esc_attr_e( 'Event image', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover;width:100px;height:auto"/></figure> // obf
		<!-- /wp:image --></div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":""} --> // obf
		<div class="wp-block-column"><!-- wp:paragraph --> // obf
		<p><?php esc_html_e( 'Episode 1: Acoma Pueblo with Prof. Fiona Presley', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:paragraph {"fontSize":"small"} --> // obf
		<p class="has-small-font-size"><?php esc_html_e( 'Acoma Pueblo, in New Mexico, stands as a testament to the resilience and cultural heritage of the Acoma people', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:audio --> // obf
		<figure class="wp-block-audio"><audio controls="" src="#"></audio></figure> // obf
		<!-- /wp:audio --></div> // obf
		<!-- /wp:column --></div> // obf
	<!-- /wp:columns --></div> // obf
<!-- /wp:group --> // obf