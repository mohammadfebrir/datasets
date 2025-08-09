

<?php // obf
/** // obf
 * Query: Grid. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Grid', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} --> // obf
					<div class="wp-block-query"> // obf
					<!-- wp:post-template --> // obf
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} --> // obf
					<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /--> // obf
					<!-- wp:post-excerpt /--> // obf
					<!-- wp:post-date /--></div> // obf
					<!-- /wp:group --> // obf
					<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query -->', // obf
); // obf