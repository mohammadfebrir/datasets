

<?php // obf
/** // obf
 * Title: News blog with sidebar // obf
 * Slug: twentytwentyfive/template-home-with-sidebar-news-blog // obf
 * Template Types: front-page, index, home // obf
 * Viewport width: 1400 // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header-large-title"} /--> // obf

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"75%"} --> // obf
		<div class="wp-block-column" style="flex-basis:75%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide"} /--> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
						<!-- wp:post-title {"level":1,"isLink":true} /--> // obf
						<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
						<!-- wp:post-date {"isLink":true} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
		<!-- wp:column {"width":"25%"} --> // obf
		<div class="wp-block-column" style="flex-basis:25%"> // obf
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small"} --> // obf
			<h2 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'The Latest', 'twentytwentyfive' ); ?></h2> // obf
			<!-- /wp:heading --> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
			<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf
			<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--> // obf
						<!-- wp:post-date {"fontSize":"small","isLink":true} /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf
					<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
					<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
				<!-- /wp:post-template --> // obf
				<!-- wp:query-no-results --> // obf
					<!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>","fontSize":"medium"} --> // obf
					<p class="has-medium-font-size"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				<!-- /wp:query-no-results --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} --> // obf
	<div class="wp-block-query alignwide"> // obf
		<!-- wp:post-template --> // obf
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"}}}} --> // obf
			<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:column {"verticalAlignment":"center","width":"60%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-title {"fontSize":"x-large"} /--> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} --> // obf
						<div class="wp-block-group has-small-font-size"> // obf
							<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							<!-- wp:paragraph --> // obf
							<p><?php echo esc_html_x( '·', 'Separator between date and categories.', 'twentytwentyfive' ); ?></p> // obf
							<!-- /wp:paragraph --> // obf
							<!-- wp:post-date {"isLink":true} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
					</div> // obf
					<!-- /wp:group --> // obf
				</div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"width":"20%"} --> // obf
				<div class="wp-block-column" style="flex-basis:20%"></div> // obf
				<!-- /wp:column --> // obf
				<!-- wp:column {"width":"13.33%"} --> // obf
				<div class="wp-block-column" style="flex-basis:13.33%"> // obf
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"layout":{"selfStretch":"fixed","flexSize":"180px"}}} /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		<!-- /wp:post-template --> // obf
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} --> // obf
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> // obf
			<!-- wp:query-pagination {"fontSize":"medium","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
				<!-- wp:query-pagination-previous /--> // obf
				<!-- wp:query-pagination-numbers /--> // obf
				<!-- wp:query-pagination-next /--> // obf
			<!-- /wp:query-pagination --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
		<!-- wp:query-no-results --> // obf
			<!-- wp:paragraph --> // obf
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		<!-- /wp:query-no-results --> // obf
	</div> // obf
	<!-- /wp:query --> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer-columns"} /--> // obf