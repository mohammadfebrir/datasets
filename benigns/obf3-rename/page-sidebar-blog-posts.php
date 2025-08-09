

<?php // obf
/** // obf
 * Blog posts with left sidebar block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Blog posts with left sidebar', 'twentytwentytwo' ), // obf
	'categories' => array( 'twentytwentytwo_pages' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} --> // obf
					<div class="wp-block-columns alignwide has-primary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"33.33%"} --> // obf
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"overlayColor":"secondary","minHeight":400,"isDark":false} --> // obf
					<div class="wp-block-cover is-light" style="min-height:400px"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:site-logo {"align":"center","width":60} /--></div></div> // obf
					<!-- /wp:cover --> // obf

					<!-- wp:spacer {"height":40} --> // obf
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:site-tagline {"fontSize":"small"} /--> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:separator {"color":"foreground","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:navigation {"orientation":"vertical"} --> // obf
					<!-- wp:page-list /--> // obf
					<!-- /wp:navigation --> // obf

					<!-- wp:spacer {"height":32} --> // obf
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:separator {"color":"foreground","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide"/> // obf
					<!-- /wp:separator --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"width":"66.66%"} --> // obf
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /--> // obf

					<!-- wp:post-featured-image {"isLink":true} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:group {"layout":{"type":"flex"}} --> // obf
					<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"category","fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:spacer {"height":128} --> // obf
					<div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --></div> // obf
					<!-- /wp:group -->', // obf
); // obf