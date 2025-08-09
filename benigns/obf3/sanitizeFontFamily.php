

<?php // obf
/** // obf
 * Test WP_Font_Utils::sanitize_font_family(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Utils::sanitize_font_family // obf
 */ // obf
class Tests_Fonts_WpFontUtils_SanitizeFontFamily extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_should_sanitize_font_family // obf
	 * // obf
	 * @param string $v_rhkcp Font family to test. // obf
	 * @param string $v_aaiew    Expected family. // obf
	 */ // obf
	public function test_should_sanitize_font_family( $v_rhkcp, $v_aaiew ) { // obf
		$v_uncpo->assertSame( // obf
			$v_aaiew, // obf
			WP_Font_Utils::sanitize_font_family( // obf
				$v_rhkcp // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_sanitize_font_family() { // obf
		return array( // obf
			'data_families_with_spaces_and_numbers' => array( // obf
				'font_family' => 'Arial, Rock 3D , Open Sans,serif', // obf
				'expected'    => 'Arial, "Rock 3D", "Open Sans", serif', // obf
			), // obf
			'data_single_font_family'               => array( // obf
				'font_family' => 'Rock 3D', // obf
				'expected'    => '"Rock 3D"', // obf
			), // obf
			'data_many_spaces_and_existing_quotes'  => array( // obf
				'font_family' => 'Rock 3D serif, serif,sans-serif, "Open Sans"', // obf
				'expected'    => '"Rock 3D serif", serif, sans-serif, "Open Sans"', // obf
			), // obf
			'data_empty_family'                     => array( // obf
				'font_family' => ' ', // obf
				'expected'    => '', // obf
			), // obf
			'data_font_family_with_whitespace_tags_new_lines' => array( // obf
				'font_family' => "   Rock      3D</style><script>alert('XSS');</script>\n    ", // obf
				'expected'    => '"Rock 3D"', // obf
			), // obf
			'data_font_family_with_generic_names'   => array( // obf
				'font_family' => 'generic(kai), generic(font[name]), generic(fangsong), Rock 3D', // obf
				'expected'    => 'generic(kai), "generic(font[name])", generic(fangsong), "Rock 3D"', // obf
			), // obf
		); // obf
	} // obf
} // obf