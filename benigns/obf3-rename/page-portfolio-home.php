

<?php // obf
/** // obf
 * Title: Portfolio homepage // obf
 * Slug: twentytwentyfive/page-portfolio-home // obf
 * Categories: twentytwentyfive_page, posts // obf
 * Keywords: starter // obf
 * Block Types: core/post-content // obf
 * Post Types: page, wp_template // obf
 * Viewport width: 1400 // obf
 * Description: A portfolio homepage pattern. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","layout":{"type":"default"}} --> // obf
<div class="wp-block-group alignfull"> // obf
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50"}}}} --> // obf
		<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--50)"> // obf
			<!-- wp:column {"width":"50%"} --> // obf
			<div class="wp-block-column" style="flex-basis:50%"> // obf
				<!-- wp:heading {"align":"wide","fontSize":"x-large"} --> // obf
				<h2 class="wp-block-heading alignwide has-x-large-font-size"><?php esc_html_e( 'My name is Anna Möller and these are some of my photo projects.', 'twentytwentyfive' ); ?></h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"width":"50%"} --> // obf
			<div class="wp-block-column" style="flex-basis:50%"> // obf
				<!-- wp:spacer {"height":"var:preset|spacing|20"} --> // obf
				<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div> // obf
				<!-- /wp:spacer --> // obf
				</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"66.66%"} --> // obf
		<div class="wp-block-column" style="flex-basis:66.66%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true} /--> // obf
						<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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
		<!-- /wp:column --> // obf
		<!-- wp:column {"width":"33.33%"} --> // obf
		<div class="wp-block-column" style="flex-basis:33.33%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true} /--> // obf
						<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
</div> // obf
<!-- /wp:group --> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-query alignwide"> // obf
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} --> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
				<!-- wp:post-title {"isLink":true} /--> // obf
				<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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
	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
</div> // obf
<!-- /wp:group --> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"33.33%"} --> // obf
		<div class="wp-block-column" style="flex-basis:33.33%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true} /--> // obf
						<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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
		<!-- /wp:column --> // obf
		<!-- wp:column {"width":"66.66%"} --> // obf
		<div class="wp-block-column" style="flex-basis:66.66%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
						<!-- wp:post-title {"isLink":true} /--> // obf
						<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|70"} --> // obf
	<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":"7","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-query alignwide"> // obf
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} --> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /--> // obf
				<!-- wp:post-title {"isLink":true} /--> // obf
				<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-4"}}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} /--> // obf
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

	<!-- wp:separator {"align":"full"} --> // obf
	<hr class="wp-block-separator alignfull has-alpha-channel-opacity"/> // obf
	<!-- /wp:separator --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
	<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
	<!-- /wp:spacer --> // obf
</div> // obf
<!-- /wp:group --> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
		<div class="wp-block-group alignwide"> // obf
			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"><?php esc_html_e( 'Twenty Twenty-Five', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"><?php esc_html_e( 'email@example.com', 'twentytwentyfive' ); ?><br><?php echo esc_html_x( '+1 555 349 1806', 'Phone number.', 'twentytwentyfive' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf