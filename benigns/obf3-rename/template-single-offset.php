

<?php // obf
/** // obf
 * Title: Offset post without featured image // obf
 * Slug: twentytwentyfive/template-single-offset // obf
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

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"default"}} --> // obf
<main class="wp-block-group alignwide"> // obf
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40)"> // obf
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:post-title {"level":1,"align":"wide","fontSize":"xx-large"} /--> // obf
			<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide"> // obf
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column {"width":"30%"} --> // obf
				<div class="wp-block-column" style="flex-basis:30%"> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
					<div class="wp-block-group has-small-font-size"> // obf
						<!-- wp:paragraph --><p><?php echo esc_html_x( 'Published on', 'Prefix before the post date block.', 'twentytwentyfive' ); ?></p><!-- /wp:paragraph --> // obf
						<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
				</div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column {"width":"70%"} --> // obf
				<div class="wp-block-column" style="flex-basis:70%"> // obf
					<!-- wp:post-content {"layout":{"type":"default"}} /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"> // obf
		<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
		<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
			<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--> // obf
			<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--> // obf
		</nav> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"30%"} --> // obf
			<div class="wp-block-column" style="flex-basis:30%"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} --> // obf
			<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:70%"> // obf
				<!-- wp:pattern {"slug":"twentytwentyfive/comments"} /--> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf