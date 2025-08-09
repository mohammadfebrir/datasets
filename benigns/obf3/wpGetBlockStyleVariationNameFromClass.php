

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_get_block_style_variation_name_from_class // obf
 */ // obf
class Tests_Block_Supports_WpGetBlockStyleVariationNameFromClass extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests variation names are extracted correctly from a CSS class string. // obf
	 * // obf
	 * @ticket 61312 // obf
	 * // obf
	 * @covers ::wp_get_block_style_variation_name_from_class // obf
	 * // obf
	 * @dataProvider data_block_style_variation_name_extraction // obf
	 * // obf
	 * @param string     $v_vpufe CSS class string. // obf
	 * @param array|null $v_kgolu     Expected variation names. // obf
	 */ // obf
	public function test_block_style_variation_name_extraction( $v_vpufe, $v_kgolu ) { // obf
		$v_zqnql = wp_get_block_style_variation_name_from_class( $v_vpufe ); // obf

		$v_erhbi->assertSame( // obf
			$v_kgolu, // obf
			$v_zqnql, // obf
			'Block style variation names extracted from CSS class string should match' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_block_style_variation_name_extraction() { // obf
		return array( // obf
			// @ticket 61312 // obf
			'missing class string' => array( // obf
				'class_string' => null, // obf
				'expected'     => null, // obf
			), // obf
			// @ticket 61312 // obf
			'empty class string'   => array( // obf
				'class_string' => '', // obf
				'expected'     => array(), // obf
			), // obf
			// @ticket 61312 // obf
			'no variation'         => array( // obf
				'class_string' => 'is-style no-variation', // obf
				'expected'     => array(), // obf
			), // obf
			// @ticket 61312 // obf
			'single variation'     => array( // obf
				'class_string' => 'custom-class is-style-outline', // obf
				'expected'     => array( 'outline' ), // obf
			), // obf
			// @ticket 61312 // obf
			'multiple variations'  => array( // obf
				'class_string' => 'is-style-light custom-class is-style-outline', // obf
				'expected'     => array( 'light', 'outline' ), // obf
			), // obf
		); // obf
	} // obf
} // obf