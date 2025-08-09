

<?php // obf
/** // obf
 * Large post titles block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Large post titles', 'twentytwentytwo' ), // obf
	'categories' => array( 'query' ), // obf
	'blockTypes' => array( 'core/query' ), // obf
	'content'    => '<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":8},"align":"wide"} --> // obf
					<div class="wp-block-query alignwide"><!-- wp:post-template --> // obf
					<!-- wp:columns --> // obf
					<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"4em"} --> // obf
					<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:4em"><!-- wp:post-date {"format":"M j","fontSize":"small"} /--></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"verticalAlignment":"center","width":""} --> // obf
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf

					<!-- wp:separator {"className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator is-style-wide"/> // obf
					<!-- /wp:separator --> // obf
					<!-- /wp:post-template --></div> // obf
					<!-- /wp:query -->', // obf
); // obf