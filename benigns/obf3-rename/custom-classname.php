

<?php // obf
/** // obf
 * Custom classname block support flag. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Registers the custom classname block attribute for block types that support it. // obf
 * // obf
 * @since 5.6.0 // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_skftm Block Type. // obf
 */ // obf
function wp_register_custom_classname_support( $v_skftm ) { // obf
	$v_kzuip = block_has_support( $v_skftm, 'customClassName', true ); // obf

	if ( $v_kzuip ) { // obf
		if ( ! $v_skftm->attributes ) { // obf
			$v_skftm->attributes = array(); // obf
		} // obf

		if ( ! array_key_exists( 'className', $v_skftm->attributes ) ) { // obf
			$v_skftm->attributes['className'] = array( // obf
				'type' => 'string', // obf
			); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds the custom classnames to the output. // obf
 * // obf
 * @since 5.6.0 // obf
 * @access private // obf
 * // obf
 * @param  WP_Block_Type $v_skftm       Block Type. // obf
 * @param  array         $v_vpucw Block attributes. // obf
 * // obf
 * @return array Block CSS classes and inline styles. // obf
 */ // obf
function wp_apply_custom_classname_support( $v_skftm, $v_vpucw ) { // obf
	$v_kzuip = block_has_support( $v_skftm, 'customClassName', true ); // obf
	$v_wlmdt                   = array(); // obf
	if ( $v_kzuip ) { // obf
		$v_zkncc = array_key_exists( 'className', $v_vpucw ); // obf

		if ( $v_zkncc ) { // obf
			$v_wlmdt['class'] = $v_vpucw['className']; // obf
		} // obf
	} // obf

	return $v_wlmdt; // obf
} // obf

// Register the block support. // obf
WP_Block_Supports::get_instance()->register( // obf
	'custom-classname', // obf
	array( // obf
		'register_attribute' => 'wp_register_custom_classname_support', // obf
		'apply'              => 'wp_apply_custom_classname_support', // obf
	) // obf
); // obf