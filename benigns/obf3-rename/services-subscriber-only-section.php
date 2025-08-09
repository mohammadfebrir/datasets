

<?php // obf
/** // obf
 * Title: Services, subscriber only section // obf
 * Slug: twentytwentyfive/services-subscriber-only-section // obf
 * Categories: call-to-action, services // obf
 * Description: A subscriber-only section highlighting exclusive services and offerings. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"verticalAlignment":"center"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:heading {"fontSize":"xx-large"} --> // obf
			<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Subscribe to get unlimited access', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"left":"var:preset|spacing|30"}}}} --> // obf
			<ul style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)" class="wp-block-list is-style-checkmark-list"> // obf
				<!-- wp:list-item {"fontSize":"medium"} --> // obf
				<li class="has-medium-font-size"><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item {"fontSize":"medium"} --> // obf
				<li class="has-medium-font-size"><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item {"fontSize":"medium"} --> // obf
				<li class="has-medium-font-size"><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item {"fontSize":"medium"} --> // obf
				<li class="has-medium-font-size"><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item {"fontSize":"medium"} --> // obf
				<li class="has-medium-font-size"><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf
			</ul> // obf
			<!-- /wp:list --> // obf

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button {"className":"is-style-fill"} --> // obf
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Subscribe', 'twentytwentyfive' ); ?></a></div> // obf
				<!-- /wp:button --> // obf

				<!-- wp:button {"className":"is-style-outline"} --> // obf
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View plans', 'twentytwentyfive' ); ?></a></div> // obf
				<!-- /wp:button --> // obf
			</div> // obf
			<!-- /wp:buttons --> // obf

			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"><?php esc_html_e( 'Cancel or pause anytime.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services-subscriber-photo.webp" alt="<?php esc_attr_e( 'Smartphones capturing a scenic wildflower meadow with trees', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf