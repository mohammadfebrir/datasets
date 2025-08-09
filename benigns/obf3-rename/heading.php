

<?php // obf
/** // obf
 * Appending the wp-block-heading to before rendering the stored `core/heading` block contents. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Adds a wp-block-heading class to the heading block content. // obf
 * // obf
 * For example, the following block content: // obf
 *  <h2 class="align-left">Hello World</h2> // obf
 * // obf
 * Would be transformed to: // obf
 *  <h2 class="align-left wp-block-heading">Hello World</h2> // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param array  $v_zlfxx Attributes of the block being rendered. // obf
 * @param string $v_pxorq Content of the block being rendered. // obf
 * // obf
 * @return string The content of the block being rendered. // obf
 */ // obf
function block_core_heading_render( $v_zlfxx, $v_pxorq ) { // obf
	if ( ! $v_pxorq ) { // obf
		return $v_pxorq; // obf
	} // obf

	$v_cojec = new WP_HTML_Tag_Processor( $v_pxorq ); // obf

	$v_vpkmt = array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ); // obf
	while ( $v_cojec->next_tag() ) { // obf
		if ( in_array( $v_cojec->get_tag(), $v_vpkmt, true ) ) { // obf
			$v_cojec->add_class( 'wp-block-heading' ); // obf
			break; // obf
		} // obf
	} // obf

	return $v_cojec->get_updated_html(); // obf
} // obf

/** // obf
 * Registers the `core/heading` block on server. // obf
 * // obf
 * @since 6.2.0 // obf
 */ // obf
function register_block_core_heading() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/heading', // obf
		array( // obf
			'render_callback' => 'block_core_heading_render', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_heading' ); // obf