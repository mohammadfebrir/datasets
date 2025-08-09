

<?php // obf
/** // obf
 * Title: Hero book // obf
 * Slug: twentytwentyfive/hero-book // obf
 * Categories: banner // obf
 * Keywords: podcast, hero, stories // obf
 * Description: A hero section for the book with a description and pre-order link. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0"}}}} --> // obf
	<div class="wp-block-columns alignfull"> // obf
		<!-- wp:column {"width":"55%"} --> // obf
		<div class="wp-block-column" style="flex-basis:55%"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp","dimRatio":0,"customOverlayColor":"#6b6b6b","isUserOverlayColor":true,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-cover is-light"> // obf
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6b6b6b"></span> // obf
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Image of the book', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/book-image-landing.webp" data-object-fit="cover"/> // obf
				<div class="wp-block-cover__inner-container"> // obf
					<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
					<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
				</div> // obf
			</div> // obf
			<!-- /wp:cover --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} --> // obf
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"> // obf
<!-- wp:heading --> // obf
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'The Stories Book', 'Heading of the hero section.', 'twentytwentyfive' ); ?></h2> // obf
<!-- /wp:heading --> // obf

<!-- wp:paragraph --> // obf
<p><?php echo esc_html_x( 'A fine collection of moments in time featuring photographs from Louis Fleckenstein, Paul Strand and Asahachi Kōno.', 'Content of the hero section.', 'twentytwentyfive' ); ?></p> // obf
<!-- /wp:paragraph --> // obf

<!-- wp:paragraph {"fontSize":"medium"} --> // obf
<p class="has-medium-font-size"><?php echo esc_html_x( 'Available for pre-order now.', 'CTA text of the hero section.', 'twentytwentyfive' ); ?></p> // obf
<!-- /wp:paragraph --></div> // obf
<!-- /wp:column --></div> // obf
<!-- /wp:columns --></div> // obf
<!-- /wp:group --> // obf