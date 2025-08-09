

<?php // obf
/** // obf
 * Title: Right-aligned single post // obf
 * Slug: twentytwentyfive/template-single-vertical-header-blog // obf
 * Template Types: posts, single // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} --> // obf
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
	<!-- wp:column {"width":"8rem"} --> // obf
	<div class="wp-block-column" style="flex-basis:8rem"> // obf
		<!-- wp:template-part {"slug":"vertical-header"} /--> // obf
	</div> // obf
	<!-- /wp:column --> // obf
	<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"0"}}},"layout":{"type":"default"}} --> // obf
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:90%"> // obf
		<!-- wp:group {"tagName":"main","layout":{"type":"default"}} --> // obf
		<main class="wp-block-group"> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"0"}}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:0"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-title {"level":1,"style":{"layout":{"selfStretch":"fixed","flexSize":"70vw"}},"fontSize":"xx-large"} /--> // obf
					<!-- wp:post-date {"textAlign":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"small"} /--> // obf
					</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
			<!-- wp:post-featured-image {"aspectRatio":"16/9"} /--> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)"> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:avatar {"size":30,"isLink":true,"style":{"border":{"radius":"100px"}}} /--> // obf
						<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
					<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} --> // obf
				<div class="wp-block-columns"> // obf
					<!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} --> // obf
					<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:75%"> // obf
						<!-- wp:post-content {"layout":{"type":"default"}} /--> // obf
					</div> // obf
					<!-- /wp:column --> // obf
					<!-- wp:column {"width":"25%"} --> // obf
					<div class="wp-block-column" style="flex-basis:25%"> // obf
						<!-- wp:template-part {"slug":"sidebar"} /--> // obf
					</div> // obf
					<!-- /wp:column --> // obf
				</div> // obf
				<!-- /wp:columns --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
			<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"full","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} --> // obf
			<nav class="wp-block-group alignfull" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--> // obf
				<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--> // obf
			</nav> // obf
			<!-- /wp:group --> // obf
		</main> // obf
		<!-- /wp:group --> // obf
		<!-- wp:group {"tagName":"aside","align":"wide","layout":{"type":"constrained","justifyContent":"left"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} --> // obf
		<aside class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
			<!-- wp:pattern {"slug":"twentytwentyfive/comments"} /--> // obf
		</aside> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:column --> // obf
</div> // obf
<!-- /wp:columns --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf