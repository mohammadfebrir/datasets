

<?php // obf
/** // obf
 * Title: Call to action with image on right // obf
 * Slug: twentytwentyfour/cta-content-image-on-right // obf
 * Categories: call-to-action, banner // obf
 * Viewport width: 1400 // obf
 * Description: A title, paragraph, two CTA buttons, and an image for a general CTA section. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide are-vertically-aligned-center"> // obf
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"> // obf
			<!-- wp:heading --> // obf
			<h2 class="wp-block-heading"><?php echo esc_html_x( 'Enhance your architectural journey with the Études Architect app.', 'Sample heading', 'twentytwentyfour' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} --> // obf
			<ul class="is-style-checkmark-list" style="line-height:1.75"> // obf
				<!-- wp:list-item --> // obf
				<li><?php echo esc_html_x( 'Collaborate with fellow architects.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php echo esc_html_x( 'Showcase your projects.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
				<!-- /wp:list-item --> // obf

				<!-- wp:list-item --> // obf
				<li><?php echo esc_html_x( 'Experience the world of architecture.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
				<!-- /wp:list-item --> // obf
			</ul> // obf
			<!-- /wp:list --> // obf

			<!-- wp:buttons --> // obf
			<div class="wp-block-buttons"> // obf
				<!-- wp:button --> // obf
				<div class="wp-block-button"> // obf
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Download app', 'Button text of this section', 'twentytwentyfour' ); ?></a> // obf
				</div> // obf
				<!-- /wp:button --> // obf

				<!-- wp:button {"className":"is-style-outline"} --> // obf
				<div class="wp-block-button is-style-outline"> // obf
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'How it works', 'Button text of this section', 'twentytwentyfour' ); ?></a> // obf
				</div> // obf
				<!-- /wp:button --> // obf
			</div> // obf
			<!-- /wp:buttons --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} --> // obf
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"> // obf
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} --> // obf
			<figure class="wp-block-image size-full is-style-rounded"> // obf
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/abstract-geometric-art.webp" alt="<?php esc_attr_e( 'White abstract geometric artwork from Dresden, Germany', 'twentytwentyfour' ); ?>" style="aspect-ratio:4/3;object-fit:cover" /> // obf
			</figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf