

<?php // obf
/** // obf
 * Title: Post with left-aligned content // obf
 * Slug: twentytwentyfive/post-with-left-aligned-content // obf
 * Template Types: posts, single // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header-large-title"} /--> // obf

	<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} --> // obf
	<main class="wp-block-group alignwide"> // obf
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
			<div class="wp-block-columns alignwide"> // obf
				<!-- wp:column {"width":"40%"} --> // obf
				<div class="wp-block-column" style="flex-basis:40%"> // obf
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
					<div class="wp-block-group alignwide"> // obf
						<!-- wp:post-title {"level":1,"align":"wide","fontSize":"x-large"} /--> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
						<div class="wp-block-group has-small-font-size"> // obf
							<!-- wp:paragraph --> // obf
							<p><?php echo esc_html_x( 'by', 'Prefix before the author name. The post author name is displayed in a separate block.', 'twentytwentyfive' ); ?></p> // obf
							<!-- /wp:paragraph --> // obf
							<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
					</div> // obf
					<!-- /wp:group --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"width":"60%"} --> // obf
				<div class="wp-block-column" style="flex-basis:60%"> // obf
					<!-- wp:post-featured-image /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
			<div class="wp-block-columns alignwide"> // obf
				<!-- wp:column {"width":"100%"} --> // obf
				<div class="wp-block-column" style="flex-basis:100%"> // obf
					<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
					<div class="wp-block-group alignwide has-small-font-size"> // obf
						<!-- wp:post-date /--> // obf
						<!-- wp:paragraph --> // obf
						<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p> // obf
						<!-- /wp:paragraph --> // obf
						<!-- wp:post-terms {"term":"category"} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"> // obf
			<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px"> // obf
				<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
				<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
					<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--> // obf
					<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--> // obf
				</nav> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
			<div class="wp-block-columns alignwide"> // obf
				<!-- wp:column {"width":"40%"} --> // obf
				<div class="wp-block-column" style="flex-basis:40%"> // obf
					<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
					<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} --> // obf
				<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:60%"> // obf
					<!-- wp:pattern {"slug":"twentytwentyfive/comments"} /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</main> // obf
	<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer-columns"} /--> // obf