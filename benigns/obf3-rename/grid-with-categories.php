

<?php // obf
/** // obf
 * Title: Grid with categories // obf
 * Slug: twentytwentyfive/grid-with-categories // obf
 * Categories: banner // obf
 * Viewport width: 1400 // obf
 * Description: A grid section with different categories. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","minimumColumnWidth":"16rem"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:heading {"fontSize":"x-large"} --> // obf
			<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Top Categories', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-anthuriums.webp","alt":"Close up of a red anthurium.","dimRatio":0,"customOverlayColor":"#833d3a","isUserOverlayColor":true,"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#833d3a"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Close up of a red anthurium.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-anthuriums.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf
			<!-- wp:paragraph {"align":"center"} --> // obf
			<p class="has-text-align-center"><?php esc_html_e( 'Anthuriums', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-cactus.webp","dimRatio":0,"customOverlayColor":"#828282","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#828282"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-cactus.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf
			<!-- wp:paragraph {"align":"center"} --> // obf
			<p class="has-text-align-center"><?php esc_html_e( 'Cactus', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-sunflowers.webp","dimRatio":0,"customOverlayColor":"#d6bc98","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d6bc98"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/category-sunflowers.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf
			<!-- wp:paragraph {"align":"center"} --> // obf
			<p class="has-text-align-center"><?php esc_html_e( 'Sunflowers', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf