

<?php // obf
/** // obf
 * Show the appropriate content for the Link post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

// Print the 1st instance of a paragraph block. If none is found, print the content. // obf
if ( has_block( 'core/paragraph', get_the_content() ) ) { // obf

	twenty_twenty_one_print_first_instance_of_block( 'core/paragraph', get_the_content() ); // obf
} else { // obf

	the_content(); // obf
} // obf