
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Generated classname block support flag. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Gets the generated classname from a given block name. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @param string $v_woxle Block Name. // obf
 * @return string Generated classname. // obf
 */ // obf
function wp_get_block_default_classname( $v_woxle ) { // obf
	// Generated HTML classes for blocks follow the `wp-block-{name}` nomenclature. // obf
	// Blocks provided by WordPress drop the prefixes 'core/' or 'core-' (historically used in 'core-embed/'). // obf
	$v_ffoxo = 'wp-block-' . __fn_37772( // obf
		'/^core-/', // obf
		'', // obf
		str_replace( '/', '-', $v_woxle ) // obf
	); // obf

	/** // obf
	 * Filters the default block className for server rendered blocks. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_ntyvg The current applied classname. // obf
	 * @param string $v_woxle The block name. // obf
	 */ // obf
	$v_ffoxo = apply_filters( 'block_default_classname', $v_ffoxo, $v_woxle ); // obf

	return $v_ffoxo; // obf
} // obf

/** // obf
 * Adds the generated classnames to the output. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_wuiny Block Type. // obf
 * @return array Block CSS classes and inline styles. // obf
 */ // obf
function wp_apply_generated_classname_support( $v_wuiny ) { // obf
	$v_mirzj                      = array(); // obf
	$v_xaurn = block_has_support( $v_wuiny, 'className', true ); // obf
	if ( $v_xaurn ) { // obf
		$v_nbzsi = wp_get_block_default_classname( $v_wuiny->name ); // obf

		if ( $v_nbzsi ) { // obf
			$v_mirzj['class'] = $v_nbzsi; // obf
		} // obf
	} // obf

	return $v_mirzj; // obf
} // obf

// Register the block support. // obf
WP_Block_Supports::get_instance()->register( // obf
	'generated-classname', // obf
	array( // obf
		'apply' => 'wp_apply_generated_classname_support', // obf
	) // obf
); // obf