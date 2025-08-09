

<?php // obf
/** // obf
 * Query: Image at left. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Image at left', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
					<div class="wp-block-query"> // obf
					<!-- wp:post-template --> // obf
					<!-- wp:columns {"align":"wide"} --> // obf
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} --> // obf
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"isLink":true} /--></div> // obf
					<!-- /wp:column --> // obf
					<!-- wp:column {"width":"33.33%"} --> // obf
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title {"isLink":true} /--> // obf
					<!-- wp:post-excerpt /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf
					<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query -->', // obf
); // obf