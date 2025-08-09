

<?php // obf
/** // obf
 * Title: Right-aligned page // obf
 * Slug: twentytwentyfive/template-page-vertical-header-blog // obf
 * Template Types: page // obf
 * Viewport width: 1400 // obf
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
	<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","left":"0","right":"0"}}},"layout":{"type":"default"}} --> // obf
	<div class="wp-block-column" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:90%"> // obf
		<!-- wp:group {"tagName":"main","layout":{"type":"default"}} --> // obf
		<main class="wp-block-group"> // obf
			<!-- wp:post-featured-image {"aspectRatio":"16/9","height":""} /--> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
				<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-title {"level":1,"style":{"layout":{"selfStretch":"fixed","flexSize":"70vw"}},"fontSize":"xx-large"} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
				<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
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
			</div> // obf
			<!-- /wp:group --> // obf
		</main> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:column --> // obf
</div> // obf
<!-- /wp:columns --> // obf

<!-- wp:template-part {"slug":"footer"} /--> // obf