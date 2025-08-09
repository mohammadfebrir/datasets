

<?php // obf
/** // obf
 * Title: Link in bio with tight margins // obf
 * Slug: twentytwentyfive/page-link-in-bio-with-tight-margins // obf
 * Categories: twentytwentyfive_page, banner // obf
 * Keywords: starter // obf
 * Block Types: core/post-content // obf
 * Post Types: page, wp_template // obf
 * Viewport width: 1400 // obf
 * Description: A full-width, full-height link in bio section with an image, a paragraph and social links. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"default"}} --> // obf
<div class="wp-block-group alignfull is-style-section-5" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignfull"> // obf
		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-image.webp","alt":"Black and white photo focusing on a woman and a child from afar.","dimRatio":0,"customOverlayColor":"#818181","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"layout":{"type":"default"}} --> // obf
			<div class="wp-block-cover is-light" style="min-height:100vh"> // obf
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#818181"></span> // obf
				<img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Black and white photo focusing on a woman and a child from afar.', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-image.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","flexWrap":"nowrap","justifyContent":"stretch"}} --> // obf
			<div class="wp-block-group" style="min-height:100%"> // obf
				<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} --> // obf
				<p class="has-text-align-left has-x-large-font-size" style="line-height:1.2"><?php esc_html_e( 'I’m Asahachi Kōno, a Japanese photographer, a member of Los Angeles’s Japanese Camera Pictorialists of California. Before returning to Japan, I worked as a photo retoucher.', 'twentytwentyfive' ); ?></p> // obf
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
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf