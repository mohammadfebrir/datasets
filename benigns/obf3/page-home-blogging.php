

<?php // obf
/** // obf
 * Title: Blogging home // obf
 * Slug: twentytwentyfour/page-home-blogging // obf
 * Categories: twentytwentyfour_page // obf
 * Keywords: page, starter // obf
 * Post Types: page, wp_template // obf
 * Viewport width: 1400 // obf
 * Description: A blogging home page with a hero section, a text section, a blog section, and a CTA section. // obf
 */ // obf
?> // obf

<!-- wp:pattern {"slug":"twentytwentyfour/text-centered-statement-small"}	/--> // obf

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"10%"} --> // obf
		<div class="wp-block-column" style="flex-basis:10%"> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"60%"} --> // obf
		<div class="wp-block-column" style="flex-basis:60%"> // obf
			<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template --> // obf
				<!-- wp:group {"tagName":"article","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<article class="wp-block-group"> // obf
					<!-- wp:post-featured-image /--> // obf

					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /--> // obf

					<!-- wp:template-part {"slug":"post-meta"} /--> // obf

				</article> // obf
				<!-- /wp:group --> // obf

				<!-- wp:post-excerpt {"moreText":"","excerptLength":40} /--> // obf

				<!-- wp:spacer --> // obf
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf
				<!-- /wp:post-template --> // obf

				<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
				<!-- wp:query-pagination-previous /--> // obf

				<!-- wp:query-pagination-numbers /--> // obf

				<!-- wp:query-pagination-next /--> // obf
				<!-- /wp:query-pagination --> // obf

				<!-- wp:query-no-results --> // obf
				<!-- wp:pattern {"slug":"twentytwentyfour/hidden-no-results"} /--> // obf
				<!-- /wp:query-no-results --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"10%"} --> // obf
		<div class="wp-block-column" style="flex-basis:10%"> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"30%"} --> // obf
		<div class="wp-block-column" style="flex-basis:30%"> // obf
			<!-- wp:template-part {"slug":"sidebar","tagName":"aside"} /--> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"10%"} --> // obf
		<div class="wp-block-column" style="flex-basis:10%"> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf

<!-- wp:pattern {"slug":"twentytwentyfour/cta-subscribe-centered"}	/--> // obf