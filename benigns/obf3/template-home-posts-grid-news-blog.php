

<?php // obf
/** // obf
 * Title: News blog with featured posts grid // obf
 * Slug: twentytwentyfive/template-home-posts-grid-news-blog // obf
 * Template Types: front-page, index, home // obf
 * Inserter: no // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:template-part {"slug":"header-large-title"} /--> // obf

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} --> // obf
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;"> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} --> // obf
		<div class="wp-block-query alignwide"> // obf
			<!-- wp:post-template --> // obf
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","align":"wide"} /--> // obf
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"> // obf
					<!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"fontSize":"xx-large"} /--> // obf
					<!-- wp:post-terms {"term":"category","textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"1.4px"}}} /--> // obf
					<!-- wp:post-date {"textAlign":"center","isLink":true} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			<!-- /wp:post-template --> // obf
			<!-- wp:query-no-results --> // obf
				<!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'twentytwentyfive' ); ?>"} --> // obf
				<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
			<!-- /wp:query-no-results --> // obf
		</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"40rem"}} --> // obf
		<div class="wp-block-group alignwide"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf
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
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> // obf
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
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide"} --> // obf
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
			<!-- wp:query-no-results --> // obf
			<!-- wp:paragraph --> // obf
			<p><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
			<!-- /wp:query-no-results --> // obf
		</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
		<!-- wp:heading {"align":"wide"} --> // obf
		<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Architecture', 'twentytwentyfive' ); ?></h2> // obf
		<!-- /wp:heading --> // obf
		<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
		<div class="wp-block-query alignwide"> // obf
			<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} --> // obf
				<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} --> // obf
				<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> // obf
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--> // obf
					<!-- wp:post-date {"textAlign":"right","isLink":true} /--> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			<!-- /wp:post-template --> // obf
			</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf

</main> // obf
<!-- /wp:group --> // obf

<!-- wp:pattern {"slug":"twentytwentyfive/cta-newsletter"} /--> // obf

<!-- wp:template-part {"slug":"footer-columns"} /--> // obf