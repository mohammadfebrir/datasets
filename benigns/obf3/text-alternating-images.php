

<?php // obf
/** // obf
 * Title: Text with alternating images // obf
 * Slug: twentytwentyfour/text-alternating-images // obf
 * Categories: text, about // obf
 * Viewport width: 1400 // obf
 * Description: A text section, then a two-column section with text in one column and an image in the other. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} --> // obf
		<div class="wp-block-group"> // obf

			<!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} --> // obf
			<h2 class="wp-block-heading has-text-align-center is-style-asterisk"><?php echo esc_html_x( 'An array of resources', 'Sample heading content', 'twentytwentyfour' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} --> // obf
			<p class="has-text-align-center"><?php echo esc_html_x( 'Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.', 'Sample subheading content', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} --> // obf
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"> // obf
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} --> // obf
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Études Architect App', 'Sample list heading', 'twentytwentyfour' ); ?></h3> // obf
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
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"50%"} --> // obf
			<div class="wp-block-column" style="flex-basis:50%"> // obf
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
				<figure class="wp-block-image size-large is-style-rounded"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tourist-and-building.webp" alt="<?php esc_attr_e( 'Tourist taking photo of a building', 'twentytwentyfour' ); ?>" /> // obf
				</figure> // obf
				<!-- /wp:image --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"50%"} --> // obf
			<div class="wp-block-column" style="flex-basis:50%"> // obf
				<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --> // obf
				<figure class="wp-block-image size-large is-style-rounded"> // obf
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/windows.webp" alt="<?php esc_attr_e( 'Windows of a building in Nuremberg, Germany', 'twentytwentyfour' ); ?>" /> // obf
				</figure> // obf
				<!-- /wp:image --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"verticalAlignment":"center","width":"40%"} --> // obf
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"> // obf
				<!-- wp:heading {"level":3,"className":"is-style-asterisk"} --> // obf
				<h3 class="wp-block-heading is-style-asterisk"><?php echo esc_html_x( 'Études Newsletter', 'Sample heading', 'twentytwentyfour' ); ?></h3> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} --> // obf
				<ul class="is-style-checkmark-list" style="line-height:1.75"> // obf
					<!-- wp:list-item --> // obf
					<li><?php echo esc_html_x( 'A world of thought-provoking articles.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
					<!-- /wp:list-item --> // obf

					<!-- wp:list-item --> // obf
					<li><?php echo esc_html_x( 'Case studies that celebrate architecture.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
					<!-- /wp:list-item --> // obf

					<!-- wp:list-item --> // obf
					<li><?php echo esc_html_x( 'Exclusive access to design insights.', 'Sample list item', 'twentytwentyfour' ); ?></li> // obf
					<!-- /wp:list-item --> // obf
				</ul> // obf
				<!-- /wp:list --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf