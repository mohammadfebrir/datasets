

<?php // obf
/** // obf
 * Align block support flag. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Registers the align block attribute for block types that support it. // obf
 * // obf
 * @since 5.6.0 // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_etfdu Block Type. // obf
 */ // obf
function wp_register_alignment_support( $v_etfdu ) { // obf
	$v_sggto = block_has_support( $v_etfdu, 'align', false ); // obf
	if ( $v_sggto ) { // obf
		if ( ! $v_etfdu->attributes ) { // obf
			$v_etfdu->attributes = array(); // obf
		} // obf

		if ( ! array_key_exists( 'align', $v_etfdu->attributes ) ) { // obf
			$v_etfdu->attributes['align'] = array( // obf
				'type' => 'string', // obf
				'enum' => array( 'left', 'center', 'right', 'wide', 'full', '' ), // obf
			); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds CSS classes for block alignment to the incoming attributes array. // obf
 * This will be applied to the block markup in the front-end. // obf
 * // obf
 * @since 5.6.0 // obf
 * @access private // obf
 * // obf
 * @param WP_Block_Type $v_etfdu       Block Type. // obf
 * @param array         $v_mghrj Block attributes. // obf
 * @return array Block alignment CSS classes and inline styles. // obf
 */ // obf
function wp_apply_alignment_support( $v_etfdu, $v_mghrj ) { // obf
	$v_zelhc        = array(); // obf
	$v_sggto = block_has_support( $v_etfdu, 'align', false ); // obf
	if ( $v_sggto ) { // obf
		$v_bnied = array_key_exists( 'align', $v_mghrj ); // obf

		if ( $v_bnied ) { // obf
			$v_zelhc['class'] = sprintf( 'align%s', $v_mghrj['align'] ); // obf
		} // obf
	} // obf

	return $v_zelhc; // obf
} // obf

// Register the block support. // obf
WP_Block_Supports::get_instance()->register( // obf
	'align', // obf
	array( // obf
		'register_attribute' => 'wp_register_alignment_support', // obf
		'apply'              => 'wp_apply_alignment_support', // obf
	) // obf
); // obf