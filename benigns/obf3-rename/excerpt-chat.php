

<?php // obf
/** // obf
 * Show the appropriate content for the Chat post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

// If there are paragraph blocks, print up to two. // obf
// Otherwise this is legacy content, so print the excerpt. // obf
if ( has_block( 'core/paragraph', get_the_content() ) ) { // obf

	twenty_twenty_one_print_first_instance_of_block( 'core/paragraph', get_the_content(), 2 ); // obf
} else { // obf

	the_excerpt(); // obf
} // obf