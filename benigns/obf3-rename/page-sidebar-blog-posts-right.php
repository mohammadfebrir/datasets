

<?php // obf
/** // obf
 * Blog posts with right sidebar block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Blog posts with right sidebar', 'twentytwentytwo' ), // obf
	'categories' => array( 'twentytwentytwo_pages' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"layout":{"type":"flex"}} --> // obf
					<div class="wp-block-group"><!-- wp:site-logo {"width":64} /--></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} --> // obf
					<!-- wp:page-list /--> // obf
					<!-- /wp:navigation --></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:spacer {"height":64} --> // obf
					<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} --> // obf
					<div class="wp-block-columns alignwide has-foreground-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"bottom":"6rem"}}}} --> // obf
					<div class="wp-block-column" style="padding-bottom:6rem;flex-basis:66.66%"><!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /--> // obf

					<!-- wp:post-featured-image {"isLink":true} /--> // obf

					<!-- wp:post-excerpt /--> // obf

					<!-- wp:group {"layout":{"type":"flex"}} --> // obf
					<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"category","fontSize":"small"} /--> // obf

					<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:spacer {"height":64} --> // obf
					<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- /wp:post-template --> // obf

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<!-- wp:query-pagination-previous {"fontSize":"small"} /--> // obf

					<!-- wp:query-pagination-numbers /--> // obf

					<!-- wp:query-pagination-next {"fontSize":"small"} /--> // obf
					<!-- /wp:query-pagination --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"width":"33.33%"} --> // obf
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"width":768,"height":1160,"sizeSlug":"large","linkDestination":"none"} --> // obf
					<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a flying bird.', 'twentytwentytwo' ) . '" width="768" height="1160"/></figure> // obf
					<!-- /wp:image --> // obf

					<!-- wp:spacer {"height":4} --> // obf
					<div style="height:4px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:site-title {"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2"}},"fontSize":"large","fontFamily":"source-serif-pro"} /--> // obf

					<!-- wp:site-tagline /--> // obf

					<!-- wp:spacer {"height":16} --> // obf
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:heading {"level":4,"fontSize":"large"} --> // obf
					<h4 class="has-large-font-size"><em>' . esc_html__( 'Categories', 'twentytwentytwo' ) . '</em></h4> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:tag-cloud {"taxonomy":"category","showTagCounts":true} /--> // obf

					<!-- wp:heading {"level":4,"fontSize":"large"} --> // obf
					<h4 class="has-large-font-size"><em>' . esc_html__( 'Tags', 'twentytwentytwo' ) . '</em></h4> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:tag-cloud {"showTagCounts":true} /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --></div> // obf
					<!-- /wp:group -->', // obf
); // obf