

<?php // obf
/** // obf
 * Title: Offset posts with featured images only, 4 columns // obf
 * Slug: twentytwentyfour/posts-images-only-offset-4-col // obf
 * Categories: posts // obf
 * Description: A list of posts with featured images only, 4 columns. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} --> // obf
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"> // obf
		<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} /--> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}}} --> // obf
		<div class="wp-block-column" style="padding-top:0"> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"> // obf
			</div> // obf
			<!-- /wp:spacer --> // obf

			<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0","top":"0"}}}} /--> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf

			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"> // obf
			</div> // obf
			<!-- /wp:spacer --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} /--> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"0"}}}} --> // obf
		<div class="wp-block-column" style="padding-top:0"> // obf
			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"> // obf
			</div> // obf
			<!-- /wp:spacer --> // obf

			<!-- wp:query {"query":{"perPage":"3","pages":0,"offset":"9","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf

			<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"> // obf
			</div> // obf
			<!-- /wp:spacer --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf