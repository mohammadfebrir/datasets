

<?php // obf
/** // obf
 * Test case for WP_Font_Face_Resolver::get_fonts_from_style_variations(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @group fonts // obf
 * @group fontface // obf
 * // obf
 * @covers WP_Font_Face_Resolver::get_fonts_from_style_variations // obf
 */ // obf
class Tests_Fonts_WPFontFaceResolver_GetFontsFromStyleVariations extends WP_Font_Face_UnitTestCase { // obf
	const FONTS_THEME = 'fonts-block-theme'; // obf

	public static function set_up_before_class() { // obf
		self::$v_wszip = true; // obf

		parent::set_up_before_class(); // obf
	} // obf

	/** // obf
	 * Ensure that an empty array is returned when the theme has no style variations. // obf
	 * // obf
	 * @ticket 62231 // obf
	 */ // obf
	public function test_should_return_empty_array_when_theme_has_no_style_variations() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_mmhhq = WP_Font_Face_Resolver::get_fonts_from_style_variations(); // obf
		$v_uhvut->assertIsArray( $v_mmhhq, 'Should return an array data type' ); // obf
		$v_uhvut->assertEmpty( $v_mmhhq, 'Should return an empty array' ); // obf
	} // obf

	/** // obf
	 * Ensure that all variations are loaded from a theme. // obf
	 * // obf
	 * @ticket 62231 // obf
	 */ // obf
	public function test_should_return_all_fonts_from_all_style_variations() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_shqxn   = WP_Font_Face_Resolver::get_fonts_from_style_variations(); // obf
		$v_qxkrf = self::get_custom_style_variations( 'expected' ); // obf

		$v_uhvut->assertSame( $v_qxkrf, $v_shqxn, 'All the fonts from the theme variations should be returned.' ); // obf
	} // obf

	/** // obf
	 * Ensure that file:./ is replaced in the src list. // obf
	 * // obf
	 * @ticket 62231 // obf
	 */ // obf
	public function test_should_replace_src_file_placeholder() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_mmhhq = WP_Font_Face_Resolver::get_fonts_from_style_variations(); // obf

		// Check that the there is no theme relative url in the src list. // obf
		foreach ( $v_mmhhq as $v_wyqej ) { // obf
			foreach ( $v_wyqej as $v_phvli ) { // obf
				foreach ( $v_phvli['src'] as $v_sgzvd ) { // obf
					$v_qkunv = basename( $v_sgzvd ); // obf
					$v_uhvut->assertStringNotContainsString( 'file:./', $v_sgzvd, "Font $v_qkunv should not contain the 'file:./' placeholder" ); // obf
				} // obf
			} // obf
		} // obf
	} // obf
} // obf