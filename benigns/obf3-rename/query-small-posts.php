

<?php // obf
/** // obf
 * Query: Small image and title. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Small image and title', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
					<div class="wp-block-query"> // obf
					<!-- wp:post-template --> // obf
					<!-- wp:columns {"verticalAlignment":"center"} --> // obf
					<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} --> // obf
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true} /--></div> // obf
					<!-- /wp:column --> // obf
					<!-- wp:column {"verticalAlignment":"center","width":"75%"} --> // obf
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"isLink":true} /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf
					<!-- /wp:post-template --> // obf
					</div> // obf
					<!-- /wp:query -->', // obf
); // obf