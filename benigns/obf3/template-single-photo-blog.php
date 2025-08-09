

<?php // obf
/** // obf
 * Title: Photo blog single post // obf
 * Slug: twentytwentyfive/template-single-photo-blog // obf
 * Template Types: posts, single // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header"} /--> // obf

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"60%"} --> // obf
			<div class="wp-block-column" style="flex-basis:60%"> // obf
				<!-- wp:post-title {"level":1} /--> // obf
				</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"40%"} --> // obf
			<div class="wp-block-column" style="flex-basis:40%"> // obf
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"constrained"}} --> // obf
						<div class="wp-block-group has-small-font-size"> // obf
							<!-- wp:paragraph --><p><?php echo esc_html_x( 'Published on', 'Prefix before the post date block.', 'twentytwentyfive' ); ?></p><!-- /wp:paragraph --> // obf
							<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","layout":{"type":"constrained"}} --> // obf
						<div class="wp-block-group has-small-font-size"> // obf
							<!-- wp:paragraph --><p><?php echo esc_html_x( 'Posted by', 'Prefix before the author name. The post author name is displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p><!-- /wp:paragraph --> // obf
							<!-- wp:post-author-name {"isLink":true} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
					</div> // obf
					<!-- /wp:group --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} --> // obf
						<div class="wp-block-group"> // obf
							<!-- wp:paragraph {"fontSize":"small"} --> // obf
							<p class="has-small-font-size"><?php echo esc_html_x( 'Categories:', 'Prefix before one or more categories. The categories are displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p> // obf
							<!-- /wp:paragraph --> // obf
							<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} --> // obf
						<div class="wp-block-group"> // obf
							<!-- wp:paragraph {"fontSize":"small"} --> // obf
							<p class="has-small-font-size"><?php echo esc_html_x( 'Tagged:', 'Prefix before one or more tags. The tags are displayed in a separate block on the next line.', 'twentytwentyfive' ); ?></p> // obf
							<!-- /wp:paragraph --> // obf
							<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
						</div> // obf
					<!-- /wp:group --> // obf
					</div> // obf
				<!-- /wp:group --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:0"> // obf
			<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
			<nav aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
				<!-- wp:post-navigation-link {"type":"previous","label":"<?php esc_html_e( 'Previous Photo', 'twentytwentyfive' ); ?>","fontSize":"small"} /--> // obf
				<!-- wp:post-navigation-link {"label":"<?php esc_html_e( 'Next Photo', 'twentytwentyfive' ); ?>","fontSize":"small"} /--> // obf
			</nav> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:post-featured-image {"aspectRatio":"auto","align":"wide"} /--> // obf
		</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:post-content {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /--> // obf

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:pattern {"slug":"twentytwentyfive/comments"} /--> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</main> // obf
<!-- /wp:group --> // obf
<!-- wp:template-part {"slug":"footer"} /--> // obf