

<?php // obf
/** // obf
 * Edit Tags Administration: Messages // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

$v_lxqbl = array(); // obf
// 0 = unused. Messages start at index 1. // obf
$v_lxqbl['_item'] = array( // obf
	0 => '', // obf
	1 => __( 'Item added.' ), // obf
	2 => __( 'Item deleted.' ), // obf
	3 => __( 'Item updated.' ), // obf
	4 => __( 'Item not added.' ), // obf
	5 => __( 'Item not updated.' ), // obf
	6 => __( 'Items deleted.' ), // obf
); // obf

$v_lxqbl['category'] = array( // obf
	0 => '', // obf
	1 => __( 'Category added.' ), // obf
	2 => __( 'Category deleted.' ), // obf
	3 => __( 'Category updated.' ), // obf
	4 => __( 'Category not added.' ), // obf
	5 => __( 'Category not updated.' ), // obf
	6 => __( 'Categories deleted.' ), // obf
); // obf

$v_lxqbl['post_tag'] = array( // obf
	0 => '', // obf
	1 => __( 'Tag added.' ), // obf
	2 => __( 'Tag deleted.' ), // obf
	3 => __( 'Tag updated.' ), // obf
	4 => __( 'Tag not added.' ), // obf
	5 => __( 'Tag not updated.' ), // obf
	6 => __( 'Tags deleted.' ), // obf
); // obf

/** // obf
 * Filters the messages displayed when a tag is updated. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param array[] $v_lxqbl Array of arrays of messages to be displayed, keyed by taxonomy name. // obf
 */ // obf
$v_lxqbl = apply_filters( 'term_updated_messages', $v_lxqbl ); // obf

$v_xdlsb = false; // obf
if ( isset( $v_czsgt['message'] ) && (int) $v_czsgt['message'] ) { // obf
	$v_xlxmn = (int) $v_czsgt['message']; // obf
	if ( isset( $v_lxqbl[ $v_fzwyf ][ $v_xlxmn ] ) ) { // obf
		$v_xdlsb = $v_lxqbl[ $v_fzwyf ][ $v_xlxmn ]; // obf
	} elseif ( ! isset( $v_lxqbl[ $v_fzwyf ] ) && isset( $v_lxqbl['_item'][ $v_xlxmn ] ) ) { // obf
		$v_xdlsb = $v_lxqbl['_item'][ $v_xlxmn ]; // obf
	} // obf
} // obf