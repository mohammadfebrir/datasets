

<?php // obf
/** // obf
 * Title: Poster-like section // obf
 * Slug: twentytwentyfive/banner-poster // obf
 * Categories: banner, media // obf
 * Description: A section that can be used as a banner or a landing page to announce an event. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/poster-image-background.webp","alt":"Picture of a historical building in ruins.","dimRatio":30,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-1","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-cover alignfull has-accent-1-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Picture of a historical building in ruins.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/poster-image-background.webp" data-object-fit="cover"/> // obf
<div class="wp-block-cover__inner-container"> // obf
	<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} --> // obf
	<div class="wp-block-group alignwide" style="min-height:100vh"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"80%"} --> // obf
			<div class="wp-block-column" style="flex-basis:80%"> // obf
				<!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"fontSize":"12vw","lineHeight":"0.9","fontStyle":"normal","fontWeight":"300"}}} --> // obf
				<h2 class="wp-block-heading alignwide has-text-align-left" style="font-size:12vw;font-style:normal;font-weight:300;line-height:0.9"> // obf
					<?php // obf
					echo wp_kses_post( // obf
						/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */ // obf
						_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' ) // obf
					); // obf
					?> // obf
				</h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"20%"} --> // obf
			<div class="wp-block-column" style="flex-basis:20%"> // obf
				<!-- wp:paragraph {"align":"right"} --> // obf
				<p class="has-text-align-right"><?php echo esc_html_x( 'Aug 08—10 2025', 'Example event date in pattern.', 'twentytwentyfive' ); ?><br><?php esc_html_e( 'Fuego Bar, Mexico City', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf

		<!-- wp:columns {"verticalAlignment":"bottom","isStackedOnMobile":false,"align":"wide"} --> // obf
		<div class="wp-block-columns alignwide are-vertically-aligned-bottom is-not-stacked-on-mobile"> // obf
			<!-- wp:column {"verticalAlignment":"bottom","width":"80%"} --> // obf
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:80%"> // obf
				<!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"lineHeight":"0.9","fontStyle":"normal","fontWeight":"300"}},"fontSize":"xx-large"} --> // obf
				<h2 class="wp-block-heading alignwide has-text-align-left has-xx-large-font-size" style="font-style:normal;font-weight:300;line-height:0.9"><?php esc_html_e( 'Let’s hear them.', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"verticalAlignment":"bottom","width":"20%"} --> // obf
			<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:20%"> // obf
				<!-- wp:paragraph {"align":"right"} --> // obf
				<p class="has-text-align-right"><?php esc_html_e( '#stories', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
	</div> // obf
</div> // obf
<!-- /wp:cover --> // obf