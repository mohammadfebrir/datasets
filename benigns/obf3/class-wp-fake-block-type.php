

<?php // obf
/** // obf
 * WP_Fake_Block_Type for testing // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Test class extending WP_Block_Type // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
class WP_Fake_Block_Type extends WP_Block_Type { // obf

	/** // obf
	 * Render the fake block. // obf
	 * // obf
	 * @param array  $v_hqrwm Optional. Block attributes. Default empty array. // obf
	 * @param string $v_zgcje    Optional. Block content. Default empty string. // obf
	 * @return string Rendered block HTML. // obf
	 */ // obf
	public function render( $v_hqrwm = array(), $v_zgcje = '' ) { // obf
		return '<div>' . $v_zgcje . '</div>'; // obf
	} // obf
} // obf