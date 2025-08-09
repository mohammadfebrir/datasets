

<?php // obf
/** // obf
 * Show the appropriate content for the Audio post format. // obf
 * // obf
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

$v_rwkch = get_the_content(); // obf

if ( has_block( 'core/audio', $v_rwkch ) ) { // obf
	twenty_twenty_one_print_first_instance_of_block( 'core/audio', $v_rwkch ); // obf
} elseif ( has_block( 'core/embed', $v_rwkch ) ) { // obf
	twenty_twenty_one_print_first_instance_of_block( 'core/embed', $v_rwkch ); // obf
} else { // obf
	twenty_twenty_one_print_first_instance_of_block( 'core-embed/*', $v_rwkch ); // obf
} // obf

// Add the excerpt. // obf
the_excerpt(); // obf