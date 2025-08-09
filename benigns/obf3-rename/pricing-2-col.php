

<?php // obf
/** // obf
 * Title: Pricing, 2 columns // obf
 * Slug: twentytwentyfive/pricing-2-col // obf
 * Categories: call-to-action // obf
 * Viewport width: 1400 // obf
 * Description: Pricing section with two columns, pricing plan, description, and call-to-action buttons. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:heading {"textAlign":"center","align":"wide"} --> // obf
	<h2 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Pricing', 'twentytwentyfive' ); ?></h2> // obf
	<!-- /wp:heading --> // obf

	<!-- wp:paragraph {"align":"center"} --> // obf
	<p class="has-text-align-center"><?php esc_html_e( 'Cancel or pause anytime.', 'twentytwentyfive' ); ?></p> // obf
	<!-- /wp:paragraph --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}}} --> // obf
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:heading {"level":3} --> // obf
			<h3 class="wp-block-heading" id="free"><?php esc_html_e( 'Free', 'twentytwentyfive' ); ?></h3> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph {"fontSize":"large"} --> // obf
			<p class="has-large-font-size"><?php esc_html_e( '0€', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} --> // obf
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list is-style-checkmark-list has-small-font-size"> // obf
				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf
			</ul> // obf
			<!-- /wp:list --> // obf

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button {"width":100} --> // obf
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div> // obf
				<!-- /wp:button --> // obf
			</div> // obf
			<!-- /wp:buttons --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"width":"1px","color":"var:preset|color|accent-6","radius":"10px"}},"layout":{"type":"default"}} --> // obf
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--accent-6);border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:heading {"level":3} --> // obf
			<h3 class="wp-block-heading" id="single"><?php echo esc_html_x( 'Single', 'Name of membership package.', 'twentytwentyfive' ); ?></h3> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph {"fontSize":"large"} --> // obf
			<p class="has-large-font-size"><?php esc_html_e( '20€/month', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf

			<!-- wp:list {"className":"is-style-checkmark-list","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"fontSize":"small"} --> // obf
			<ul style="padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)" class="wp-block-list is-style-checkmark-list has-small-font-size"> // obf
				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Get access to our paid articles and weekly newsletter.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Join our IRL events.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Get a free tote bag.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'An elegant addition of home decor collection.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php esc_html_e( 'Join our forums.', 'twentytwentyfive' ); ?></li> // obf
				<!-- /wp:list-item --> // obf
			</ul> // obf
			<!-- /wp:list --> // obf

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button {"width":100} --> // obf
				<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Join', 'Button text, refers to joining a community. Verb.', 'twentytwentyfive' ); ?></a></div> // obf
				<!-- /wp:button --> // obf
			</div> // obf
			<!-- /wp:buttons --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf