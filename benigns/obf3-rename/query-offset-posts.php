

<?php // obf
/** // obf
 * Query: Offset. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Offset', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} --> // obf
					<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:columns --> // obf
					<div class="wp-block-columns"><!-- wp:column {"width":"50%"} --> // obf
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:post-featured-image /--> // obf
					<!-- wp:post-title /--> // obf
					<!-- wp:post-date /--> // obf
					<!-- wp:spacer {"height":200} --> // obf
					<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:column --> // obf
					<!-- wp:column {"width":"50%"} --> // obf
					<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"query":{"perPage":2,"pages":0,"offset":2,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list"}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:spacer {"height":200} --> // obf
					<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf
					<!-- wp:post-featured-image /--> // obf
					<!-- wp:post-title /--> // obf
					<!-- wp:post-date /--> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --></div> // obf
					<!-- /wp:group -->', // obf
); // obf