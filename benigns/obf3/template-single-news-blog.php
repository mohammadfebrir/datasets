

<?php // obf
/** // obf
 * Title: News blog single post with sidebar // obf
 * Slug: twentytwentyfive/template-single-news-blog // obf
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

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group"> // obf

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide"> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|80"} --> // obf
			<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf
			<!-- wp:post-title {"level":1,"align":"wide","fontSize":"xx-large"} /--> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf
			<!-- wp:group {"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
					<div class="wp-block-group has-small-font-size"> // obf
						<!-- wp:post-date /--> // obf
						<!-- wp:paragraph --> // obf
						<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p> // obf
						<!-- /wp:paragraph --> // obf
						<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:avatar {"size":30,"isLink":true,"style":{"border":{"radius":"100px"}}} /--> // obf
						<!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /--> // obf
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

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"align":"wide"} /--></div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} --> // obf
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} --> // obf
			<div class="wp-block-column" style="padding-bottom:var(--wp--preset--spacing--60);flex-basis:65%"> // obf
				<!-- wp:post-content {"layout":{"type":"default"}} /--> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
				<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
				<!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /--> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"25%"} --> // obf
			<div class="wp-block-column" style="flex-basis:25%"><!-- wp:template-part {"slug":"sidebar"} /--></div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"> // obf
		<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>","tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} --> // obf
		<nav class="wp-block-group alignwide" aria-label="<?php esc_attr_e( 'Post navigation', 'twentytwentyfive' ); ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
			<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /--> // obf
			<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--> // obf
		</nav> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"center"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} --> // obf
		<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"> // obf
			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"65%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} --> // obf
			<div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:65%"> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} --> // obf
				<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"> // obf
					<!-- wp:pattern {"slug":"twentytwentyfive/comments"} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"25%"} --> // obf
			<div class="wp-block-column" style="flex-basis:25%"></div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"5%"} --> // obf
			<div class="wp-block-column" style="flex-basis:5%"></div> // obf
			<!-- /wp:column --> // obf

		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer-newsletter"} /--> // obf