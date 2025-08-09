

<?php // obf
/** // obf
 * Query: Large title. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

return array( // obf
	'title'      => _x( 'Large title', 'Block pattern title' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'categories' => array( 'query' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"100px","left":"100px"}},"color":{"text":"#ffffff","background":"#000000"}}} --> // obf
					<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#000000;color:#ffffff;padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
					<div class="wp-block-query"><!-- wp:post-template --> // obf
					<!-- wp:separator {"customColor":"#ffffff","align":"wide","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator alignwide has-text-color has-background is-style-wide" style="background-color:#ffffff;color:#ffffff"/> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:columns {"verticalAlignment":"center","align":"wide"} --> // obf
					<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} --> // obf
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:post-date {"style":{"color":{"text":"#ffffff"}},"fontSize":"extra-small"} /--></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"verticalAlignment":"center","width":"80%"} --> // obf
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"72px","lineHeight":"1.1"},"color":{"text":"#ffffff","link":"#ffffff"}}} /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query --></div> // obf
					<!-- /wp:group -->', // obf
); // obf