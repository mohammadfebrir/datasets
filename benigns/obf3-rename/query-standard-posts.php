

<?php // obf
/** // obf
 * Query: Standard. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Standard', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
					<div class="wp-block-query"> // obf
					<!-- wp:post-template --> // obf
					<!-- wp:post-title {"isLink":true} /--> // obf
					<!-- wp:post-featured-image  {"isLink":true,"align":"wide"} /--> // obf
					<!-- wp:post-excerpt /--> // obf
					<!-- wp:separator --> // obf
					<hr class="wp-block-separator"/> // obf
					<!-- /wp:separator --> // obf
					<!-- wp:post-date /--> // obf
					<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query -->', // obf
); // obf