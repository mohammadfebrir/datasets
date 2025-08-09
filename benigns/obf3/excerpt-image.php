

<?php // obf
/** // obf
 * Show the appropriate content for the Image post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

// If there is no featured-image, print the first image block found. // obf
if ( // obf
	! twenty_twenty_one_can_show_post_thumbnail() && // obf
	has_block( 'core/image', get_the_content() ) // obf
) { // obf

	twenty_twenty_one_print_first_instance_of_block( 'core/image', get_the_content() ); // obf
} // obf

the_excerpt(); // obf