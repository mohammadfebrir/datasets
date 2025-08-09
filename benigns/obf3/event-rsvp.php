

<?php // obf
/** // obf
 * Title: Event RSVP // obf
 * Slug: twentytwentyfive/event-rsvp // obf
 * Keywords: call-to-action, rsvp, event // obf
 * Categories: call-to-action // obf
 * Block Types: core/post-content // obf
 * Viewport width: 1400 // obf
 * Description: RSVP for an upcoming event with a cover image and event details. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:columns {"isStackedOnMobile":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} --> // obf
	<div class="wp-block-columns alignfull is-not-stacked-on-mobile" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"> // obf
		<!-- wp:column {"width":"66.66%"} --> // obf
		<div class="wp-block-column" style="flex-basis:66.66%"> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:heading {"fontSize":"xx-large"} --> // obf
				<h2 class="wp-block-heading has-xx-large-font-size"> // obf
					<?php // obf
					echo wp_kses_post( // obf
						/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */ // obf
						_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' ) // obf
					); // obf
					?> // obf
				</h2> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:paragraph {"fontSize":"x-large"} --> // obf
				<p class="has-x-large-font-size"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:spacer {"height":"0px","style":{"layout":{"selfStretch":"fixed","flexSize":"140px"}}} --> // obf
				<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"12vw"} --> // obf
		<div class="wp-block-column" style="flex-basis:12vw"></div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph {"align":"left","style":{"typography":{"writingMode":"vertical-rl","textTransform":"uppercase","lineHeight":"0.6"}}} --> // obf
				<p class="has-text-align-left" style="line-height:0.6;text-transform:uppercase;writing-mode:vertical-rl"><?php esc_html_e( 'Free Workshop', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf

	<!-- wp:columns {"align":"full","className":"is-style-section-2","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0"}}}} --> // obf
	<div class="wp-block-columns alignfull is-style-section-2" style="padding-top:0;padding-bottom:0"> // obf
		<!-- wp:column {"width":"50%"} --> // obf
		<div class="wp-block-column" style="flex-basis:50%"> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"33vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} --> // obf
			<div class="wp-block-group" style="min-height:33vh;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
				<!-- wp:paragraph --> // obf
				<p><?php esc_html_e( 'This immersive event celebrates the universal human experience through the lenses of history and ancestry, featuring a diverse array of photographers whose works capture the essence of different cultures and historical moments.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} --> // obf
				<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:heading {"fontSize":"xx-large"} --> // obf
				<h2 class="wp-block-heading has-xx-large-font-size"><a href="#"><?php echo esc_html_x( 'RSVP', 'Abbreviation for "Please respond".', 'twentytwentyfive' ); ?></a></h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"50%"} --> // obf
		<div class="wp-block-column" style="flex-basis:50%"> // obf
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers-closeup.webp","dimRatio":0,"isDark":false} --> // obf
			<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Close up photo of white flowers on a grey background', 'twentytwentyfive' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/botany-flowers-closeup.webp" data-object-fit="cover"/> // obf
			<div class="wp-block-cover__inner-container"> // obf
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