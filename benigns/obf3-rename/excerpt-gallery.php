

<?php // obf
/** // obf
 * Show the appropriate content for the Gallery post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

// Print the 1st gallery found. // obf
if ( has_block( 'core/gallery', get_the_content() ) ) { // obf

	twenty_twenty_one_print_first_instance_of_block( 'core/gallery', get_the_content() ); // obf
} // obf

the_excerpt(); // obf