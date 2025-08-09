

<?php // obf
/** // obf
 * Social links with a shared background color. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.8.0 // obf
 * @deprecated 6.7.0 This pattern is deprecated. Please use the Social Links block instead. // obf
 */ // obf

return array( // obf
	'title'         => _x( 'Social links with a shared background color', 'Block pattern title' ), // obf
	'categories'    => array( 'buttons' ), // obf
	'blockTypes'    => array( 'core/social-links' ), // obf
	'viewportWidth' => 500, // obf
	'content'       => '<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#3962e3","iconBackgroundColorValue":"#3962e3","className":"has-icon-color"} --> // obf
						<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--> // obf
						<!-- wp:social-link {"url":"#","service":"chain"} /--> // obf
						<!-- wp:social-link {"url":"#","service":"mail"} /--></ul> // obf
						<!-- /wp:social-links -->', // obf
); // obf