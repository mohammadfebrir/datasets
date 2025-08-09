

<?php // obf
/** // obf
 * Title: Event schedule // obf
 * Slug: twentytwentyfive/event-schedule // obf
 * Categories: about // obf
 * Description: A section with specified dates and times for an event. // obf
 * Keywords: events, agenda, schedule, lectures // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:heading {"fontSize":"xx-large"} --> // obf
		<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Agenda', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf
		<!-- wp:paragraph --> // obf
		<p><?php esc_html_e( 'These are some of the upcoming events.', 'twentytwentyfive' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
		<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
			<!-- wp:columns --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"> // obf
					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --> // obf
					<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"> // obf
						<!-- wp:column {"width":"33.33%"} --> // obf
						<div class="wp-block-column" style="flex-basis:33.33%"> // obf
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} --> // obf
							<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marshland-birds-square.webp" alt="<?php esc_attr_e( 'Birds on a lake.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
							<!-- /wp:image --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
						<!-- wp:column {"width":"66.66%"} --> // obf
						<div class="wp-block-column" style="flex-basis:66.66%"> // obf
							<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
								<div class="wp-block-group"> // obf
									<!-- wp:heading {"level":4} --> // obf
									<h4 class="wp-block-heading"><a href="#"><?php esc_html_e( 'Fauna from North America and its characteristics', 'twentytwentyfive' ); ?></a></h4> // obf
									<!-- /wp:heading --> // obf
									<!-- wp:paragraph --> // obf
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p> // obf
									<!-- /wp:paragraph --> // obf
								</div> // obf
								<!-- /wp:group --> // obf
								<!-- wp:paragraph {"fontSize":"small"} --> // obf
								<p class="has-small-font-size"><?php echo wp_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p> // obf
								<!-- /wp:paragraph --> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
					</div> // obf
					<!-- /wp:columns --> // obf
					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --> // obf
					<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"> // obf
						<!-- wp:column {"width":"33.33%"} --> // obf
						<div class="wp-block-column" style="flex-basis:33.33%"> // obf
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} --> // obf
							<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coral-square.webp" alt="<?php esc_attr_e( 'View of the deep ocean.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
							<!-- /wp:image --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
						<!-- wp:column {"width":"66.66%"} --> // obf
						<div class="wp-block-column" style="flex-basis:66.66%"> // obf
							<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
								<div class="wp-block-group"> // obf
									<!-- wp:heading {"level":4} --> // obf
									<h4 class="wp-block-heading"><a href="#"><?php esc_html_e( 'Things you didn’t know about the deep ocean', 'twentytwentyfive' ); ?></a></h4> // obf
									<!-- /wp:heading --> // obf
									<!-- wp:paragraph --> // obf
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p> // obf
									<!-- /wp:paragraph --> // obf
								</div> // obf
								<!-- /wp:group --> // obf
								<!-- wp:paragraph {"fontSize":"small"} --> // obf
								<p class="has-small-font-size"><?php echo wp_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p> // obf
								<!-- /wp:paragraph --> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
					</div> // obf
					<!-- /wp:columns --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
		<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
			<!-- wp:columns --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column {"verticalAlignment":"top","width":"40%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"> // obf
					<!-- wp:heading {"level":3} --> // obf
					<h3 class="wp-block-heading"><?php echo esc_html_x( 'Mon, Jan 1', 'Example event date in pattern.', 'twentytwentyfive' ); ?></h3> // obf
					<!-- /wp:heading --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"verticalAlignment":"top","width":"60%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"> // obf
					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --> // obf
					<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"> // obf
						<!-- wp:column {"width":"33.33%"} --> // obf
						<div class="wp-block-column" style="flex-basis:33.33%"> // obf
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} --> // obf
							<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parthenon-square.webp" alt="<?php esc_attr_e( 'The Acropolis of Athens.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
							<!-- /wp:image --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
						<!-- wp:column {"width":"66.66%"} --> // obf
						<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
								<div class="wp-block-group"> // obf
									<!-- wp:heading {"level":4} --> // obf
									<h4 class="wp-block-heading"><a href="#"><?php esc_html_e( 'Ancient buildings and symbols', 'twentytwentyfive' ); ?></a></h4> // obf
									<!-- /wp:heading --> // obf
									<!-- wp:paragraph --> // obf
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p> // obf
									<!-- /wp:paragraph --> // obf
								</div> // obf
								<!-- /wp:group --> // obf
								<!-- wp:paragraph {"fontSize":"small"} --> // obf
								<p class="has-small-font-size"><?php echo wp_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p> // obf
								<!-- /wp:paragraph --> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
					</div> // obf
					<!-- /wp:columns --> // obf
					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} --> // obf
					<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"> // obf
						<!-- wp:column {"width":"33.33%"} --> // obf
						<div class="wp-block-column" style="flex-basis:33.33%"> // obf
							<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"270px"}}} --> // obf
							<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agenda-img-4.webp" alt="<?php esc_attr_e( 'Black and white photo of an African woman.', 'twentytwentyfive' ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure> // obf
							<!-- /wp:image --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
						<!-- wp:column {"width":"66.66%"} --> // obf
						<div class="wp-block-column" style="flex-basis:66.66%"> // obf
							<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
								<div class="wp-block-group"> // obf
									<!-- wp:heading {"level":4} --> // obf
									<h4 class="wp-block-heading"><a href="#"><?php esc_html_e( 'An introduction to African dialects', 'twentytwentyfive' ); ?></a></h4> // obf
									<!-- /wp:heading --> // obf
									<!-- wp:paragraph --> // obf
									<p><?php echo esc_html_x( '9 AM — 11 AM', 'Example event time in pattern.', 'twentytwentyfive' ); ?></p> // obf
									<!-- /wp:paragraph --> // obf
								</div> // obf
								<!-- /wp:group --> // obf
								<!-- wp:paragraph {"fontSize":"small"} --> // obf
								<p class="has-small-font-size"><?php echo wp_kses_post( _x( 'Lecture by <a href="#">Prof. Fiona Presley</a>', 'Pattern placeholder text with link.', 'twentytwentyfive' ) ); ?></p> // obf
								<!-- /wp:paragraph --> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						</div> // obf
						<!-- /wp:column --> // obf
					</div> // obf
					<!-- /wp:columns --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf