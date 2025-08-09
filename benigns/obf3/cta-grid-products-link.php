

<?php // obf
/** // obf
 * Title: Call to action with grid layout with products and link // obf
 * Slug: twentytwentyfive/cta-grid-products-link // obf
 * Categories: call-to-action, featured // obf
 * Viewport width: 1400 // obf
 * Description: A call to action featuring product images. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:heading {"style":{"typography":{"fontSize":"9.6rem","letterSpacing":"-0.02em"}}} --> // obf
		<h2 class="wp-block-heading" style="font-size:9.6rem;letter-spacing:-0.02em"><?php esc_html_e( 'Our online store.', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:group {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"10rem"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/grid-flower-2.webp' ); ?>" alt="<?php esc_attr_e( 'Black and white flower', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} --> // obf
			<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color has-medium-font-size"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:paragraph {"align":"center"} --> // obf
				<p class="has-text-align-center"><?php esc_html_e( 'Delivered every week', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/malibu-plantlife.webp' ); ?>" alt="<?php esc_attr_e( 'Closeup of plantlife in the Malibu Canyon area', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} --> // obf
			<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} --> // obf
				<div class="wp-block-group has-medium-font-size" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"> // obf
					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"> // obf
						<?php // obf
						printf( // obf
							/* translators: %s: Starting price, split into three rows using HTML <br> tags. The price value has a font size set.*/ // obf
							esc_html__( 'Starting at%s/month', 'twentytwentyfive' ), // obf
							'<br /><span style="font-size:2.63rem;">' . esc_html__( '30€', 'twentytwentyfive' ) . '</span><br />' // obf
						); // obf
						?> // obf
					</p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/akaka-falls-state-park-flora.webp' ); ?>" alt="<?php esc_attr_e( 'Flora of Akaka Falls State Park', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} --> // obf
			<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color has-medium-font-size"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:paragraph {"align":"center"} --> // obf
				<p class="has-text-align-center"><?php esc_html_e( 'Tailored to your needs', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} --> // obf
			<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color has-medium-font-size"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:paragraph {"align":"center"} --> // obf
				<p class="has-text-align-center"><?php esc_html_e( 'Free shipping', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:cover {"overlayColor":"accent-2","isUserOverlayColor":true,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-accent-2-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:cover {"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} --> // obf
			<div class="wp-block-cover is-light has-contrast-color has-text-color has-link-color has-medium-font-size"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:paragraph {"align":"center"} --> // obf
				<p class="has-text-align-center"><?php esc_html_e( 'Cancel anytime', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:cover {"overlayColor":"accent-3","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-accent-3-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/botany-flowers.webp' ); ?>" alt="<?php esc_attr_e( 'Botany flowers', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf

			<!-- wp:cover {"overlayColor":"accent-1","isUserOverlayColor":true,"isDark":false,"style":{"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-accent-1-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div></div> // obf
			<!-- /wp:cover --> // obf

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} --> // obf
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/star-thristle-flower.webp' ); ?>" alt="<?php esc_attr_e( 'Black and white flower', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
			<!-- /wp:image --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:buttons --> // obf
		<div class="wp-block-buttons"> // obf
			<!-- wp:button {"width":100} --> // obf
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Shop now', 'twentytwentyfive' ); ?></a></div> // obf
			<!-- /wp:button --> // obf
		</div> // obf
		<!-- /wp:buttons --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf