

<?php // obf
/** // obf
 * Title: Link in bio heading, paragraph, links and full-height image // obf
 * Slug: twentytwentyfive/page-link-in-bio-heading-paragraph-links-image // obf
 * Categories: twentytwentyfive_page, banner, featured // obf
 * Keywords: starter // obf
 * Block Types: core/post-content // obf
 * Viewport width: 1400 // obf
 * Description: A link in bio landing page with a heading, paragraph, links and a full height image. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-4","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull is-style-section-4" style="min-height:100vh;margin-top:0;margin-bottom:0"> // obf
	<!-- wp:columns {"align":"full"} --> // obf
	<div class="wp-block-columns alignfull"> // obf
		<!-- wp:column {"verticalAlignment":"center"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center"> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
				<!-- wp:heading --> // obf
				<h2 class="wp-block-heading"><?php esc_html_e( 'Lewis Hine', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph --> // obf
				<p><?php esc_html_e( 'Lewis W. Hine studied sociology before moving to New York in 1901 to work at the Ethical Culture School, where he took up photography to enhance his teaching practices', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph --> // obf
					<p><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfive' ); ?></a></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:paragraph --> // obf
					<p><a href="#"><?php echo esc_html_x( 'X', 'Refers to the social media platform formerly known as Twitter.', 'twentytwentyfive' ); ?></a></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:paragraph --> // obf
					<p><a href="#"><?php esc_html_e( 'TikTok', 'twentytwentyfive' ); ?></a></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp","alt":"Photo of a woman worker.","dimRatio":0,"customOverlayColor":"#6b6b6b","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","layout":{"type":"default"}} --> // obf
			<div class="wp-block-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6b6b6b"></span> // obf
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Photo of a woman worker.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf