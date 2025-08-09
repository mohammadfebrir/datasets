

<?php // obf
/** // obf
 * Title: News blog home // obf
 * Slug: twentytwentyfive/template-home-news-blog // obf
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

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} --> // obf
<main class="wp-block-group"> // obf
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"width":"25%"} --> // obf
			<div class="wp-block-column" style="flex-basis:25%"> // obf
				<!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
					<div class="wp-block-query"> // obf
						<!-- wp:post-template --> // obf
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
								<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
								<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						<!-- /wp:post-template --> // obf
						<!-- wp:query-no-results --> // obf
							<!-- wp:paragraph --> // obf
							<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
							<!-- /wp:paragraph --> // obf
						<!-- /wp:query-no-results --> // obf
					</div> // obf
					<!-- /wp:query --> // obf
					<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
					<div class="wp-block-query"> // obf
						<!-- wp:post-template --> // obf
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
								<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
								<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"50%"} --> // obf
			<div class="wp-block-column" style="flex-basis:50%"> // obf
				<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
				<div class="wp-block-query"> // obf
					<!-- wp:post-template --> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} --> // obf
						<div class="wp-block-group"> // obf
							<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--> // obf
							<!-- wp:post-title {"level":1,"isLink":true} /--> // obf
							<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							<!-- wp:post-excerpt {"fontSize":"medium"} /--> // obf
						</div> // obf
						<!-- /wp:group --> // obf
					<!-- /wp:post-template --> // obf
				</div> // obf
				<!-- /wp:query --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"25%"} --> // obf
			<div class="wp-block-column" style="flex-basis:25%"> // obf
				<!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
					<div class="wp-block-query"> // obf
						<!-- wp:post-template --> // obf
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
								<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
								<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query --> // obf
					<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
					<div class="wp-block-query"> // obf
						<!-- wp:post-template --> // obf
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
							<div class="wp-block-group"> // obf
								<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
								<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
								<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
							</div> // obf
							<!-- /wp:group --> // obf
						<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:query {"query":{"perPage":2,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} --> // obf
		<div class="wp-block-query alignwide"> // obf
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} --> // obf
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf
					<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			<!-- /wp:post-template --> // obf
		</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} --> // obf
		<div class="wp-block-query alignwide"> // obf
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} --> // obf
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--> // obf
					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf
					<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			<!-- /wp:post-template --> // obf
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} --> // obf
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
				<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous /--> // obf
					<!-- wp:query-pagination-numbers /--> // obf
					<!-- wp:query-pagination-next /--> // obf
				<!-- /wp:query-pagination --> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</main> // obf
<!-- /wp:group --> // obf

<!-- wp:template-part {"slug":"footer-newsletter"} /--> // obf