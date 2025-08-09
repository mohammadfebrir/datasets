

<?php // obf
/** // obf
 * Pattern Overrides source for the Block Bindings. // obf
 * // obf
 * @since 6.5.0 // obf
 * @package WordPress // obf
 * @subpackage Block Bindings // obf
 */ // obf

/** // obf
 * Gets value for the Pattern Overrides source. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 * // obf
 * @param array    $v_brkob    Array containing source arguments used to look up the override value. // obf
 *                                 Example: array( "key" => "foo" ). // obf
 * @param WP_Block $v_fqign The block instance. // obf
 * @param string   $v_hvnij The name of the target attribute. // obf
 * @return mixed The value computed for the source. // obf
 */ // obf
function _block_bindings_pattern_overrides_get_value( array $v_brkob, $v_fqign, string $v_hvnij ) { // obf
	if ( empty( $v_fqign->attributes['metadata']['name'] ) ) { // obf
		return null; // obf
	} // obf
	$v_wzyxo = $v_fqign->attributes['metadata']['name']; // obf
	return _wp_array_get( $v_fqign->context, array( 'pattern/overrides', $v_wzyxo, $v_hvnij ), null ); // obf
} // obf

/** // obf
 * Registers Pattern Overrides source in the Block Bindings registry. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 */ // obf
function _register_block_bindings_pattern_overrides_source() { // obf
	register_block_bindings_source( // obf
		'core/pattern-overrides', // obf
		array( // obf
			'label'              => _x( 'Pattern Overrides', 'block bindings source' ), // obf
			'get_value_callback' => '_block_bindings_pattern_overrides_get_value', // obf
			'uses_context'       => array( 'pattern/overrides' ), // obf
		) // obf
	); // obf
} // obf

add_action( 'init', '_register_block_bindings_pattern_overrides_source' ); // obf