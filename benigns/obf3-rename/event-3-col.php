

<?php // obf
/** // obf
 * Title: Events, 3 columns with event images and titles // obf
 * Slug: twentytwentyfive/event-3-col // obf
 * Categories: banner // obf
 * Description: A header with title and text and three columns that show 3 events with their images and titles. // obf
 * Keywords: events, columns, images // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:heading {"fontSize":"x-large"} --> // obf
		<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Events', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:paragraph --> // obf
		<p><?php esc_html_e( 'These are some of the upcoming events.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|50"},"padding":{"top":"0","bottom":"0"}}}} --> // obf
	<div class="wp-block-columns alignwide" style="padding-top:0;padding-bottom:0"> // obf
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"0"}}} --> // obf
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--70)"> // obf
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php esc_attr_e( 'Event image', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} --> // obf
				<h3 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"medium"} --> // obf
				<p class="has-accent-4-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} --> // obf
			<p style="padding-top:var(--wp--preset--spacing--40)"><a href="#"><?php esc_html_e( 'Event details', 'twentytwentyfive' ); ?></a></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"0"}}} --> // obf
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--70)"> // obf
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php esc_attr_e( 'Event image', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} --> // obf
				<h3 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"medium"} --> // obf
				<p class="has-accent-4-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} --> // obf
			<p style="padding-top:var(--wp--preset--spacing--40)"><a href="#"><?php esc_html_e( 'Event details', 'twentytwentyfive' ); ?></a></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"0"}}} --> // obf
		<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--70)"> // obf
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/ruins-image.webp' ); ?>" alt="<?php esc_attr_e( 'Event image', 'twentytwentyfive' ); ?>"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} --> // obf
				<h3 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--20)"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}}},"textColor":"accent-4","fontSize":"medium"} --> // obf
				<p class="has-accent-4-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} --> // obf
			<p style="padding-top:var(--wp--preset--spacing--40)"><a href="#"><?php esc_html_e( 'Event details', 'twentytwentyfive' ); ?></a></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf