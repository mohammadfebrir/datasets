

<?php // obf
/** // obf
 * Title: Events list // obf
 * Slug: twentytwentyfive/cta-events-list // obf
 * Categories: call-to-action // obf
 * Description: A list of events with call to action. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:heading --> // obf
		<h2 class="wp-block-heading"><?php esc_html_e( 'Upcoming events', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:paragraph --> // obf
		<p><?php esc_html_e( 'These are some of the upcoming events', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} --> // obf
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
				<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:paragraph --> // obf
					<p><?php esc_html_e( 'Atlanta, GA, USA', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button {"fontSize":"small"} --> // obf
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div> // obf
						<!-- /wp:button --> // obf
					</div> // obf
					<!-- /wp:buttons --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"> // obf
						<?php // obf
						echo wp_kses_post( // obf
							/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */ // obf
							_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' ) // obf
						); // obf
						?> // obf
					</h3> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:paragraph --> // obf
					<p><?php esc_html_e( 'Mexico City, Mexico', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button {"fontSize":"small"} --> // obf
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div> // obf
						<!-- /wp:button --> // obf
					</div> // obf
					<!-- /wp:buttons --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"><?php esc_html_e( 'Tell your story', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:paragraph --> // obf
					<p><?php esc_html_e( 'Thornville, OH, USA', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button {"fontSize":"small"} --> // obf
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div> // obf
						<!-- /wp:button --> // obf
					</div> // obf
					<!-- /wp:buttons --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"> // obf
						<?php // obf
						echo wp_kses_post( // obf
							/* translators: This string contains the word "Stories" in four different languages with the first item in the locale's language. */ // obf
							_x( '“Stories, <span lang="es">historias</span>, <span lang="uk">iсторії</span>, <span lang="el">iστορίες</span>”', 'Placeholder heading in four languages.', 'twentytwentyfive' ) // obf
						); // obf
						?> // obf
					</h3> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:paragraph --> // obf
					<p><?php esc_html_e( 'Thornville, OH, USA', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"> // obf
						<!-- wp:button {"fontSize":"small"} --> // obf
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Buy Tickets', 'twentytwentyfive' ); ?></a></div> // obf
						<!-- /wp:button --> // obf
					</div> // obf
					<!-- /wp:buttons --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf