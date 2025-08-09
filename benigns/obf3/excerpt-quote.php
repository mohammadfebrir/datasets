

<?php // obf
/** // obf
 * Show the appropriate content for the Quote post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

$v_nhxsx = get_the_content(); // obf

// If there is no quote or pullquote print the content. // obf
if ( has_block( 'core/quote', $v_nhxsx ) ) { // obf
	twenty_twenty_one_print_first_instance_of_block( 'core/quote', $v_nhxsx ); // obf
} elseif ( has_block( 'core/pullquote', $v_nhxsx ) ) { // obf
	twenty_twenty_one_print_first_instance_of_block( 'core/pullquote', $v_nhxsx ); // obf
} else { // obf
	the_excerpt(); // obf
} // obf