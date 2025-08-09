

<?php // obf
/** // obf
 * Adds the wp-block-list class to the rendered list block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Adds the wp-block-list class to the rendered list block. // obf
 * Ensures that pre-existing list blocks use the class name on the front. // obf
 * For example, <ol> is transformed to <ol class="wp-block-list">. // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @see https://github.com/WordPress/gutenberg/issues/12420 // obf
 * // obf
 * @param array  $v_fjdbq Attributes of the block being rendered. // obf
 * @param string $v_ewxno Content of the block being rendered. // obf
 * // obf
 * @return string The content of the block being rendered. // obf
 */ // obf
function block_core_list_render( $v_fjdbq, $v_ewxno ) { // obf
	if ( ! $v_ewxno ) { // obf
		return $v_ewxno; // obf
	} // obf

	$v_lkczi = new WP_HTML_Tag_Processor( $v_ewxno ); // obf

	$v_lrmnw = array( 'OL', 'UL' ); // obf
	while ( $v_lkczi->next_tag() ) { // obf
		if ( in_array( $v_lkczi->get_tag(), $v_lrmnw, true ) ) { // obf
			$v_lkczi->add_class( 'wp-block-list' ); // obf
			break; // obf
		} // obf
	} // obf

	return $v_lkczi->get_updated_html(); // obf
} // obf

/** // obf
 * Registers the `core/list` block on server. // obf
 * // obf
 * @since 6.6.0 // obf
 */ // obf
function register_block_core_list() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/list', // obf
		array( // obf
			'render_callback' => 'block_core_list_render', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_list' ); // obf