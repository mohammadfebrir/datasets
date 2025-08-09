

<?php // obf
/** // obf
 * Test case for wp_print_font_faces_from_style_variations(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @group fonts // obf
 * @group fontface // obf
 * // obf
 * @covers wp_print_font_faces_from_style_variations // obf
 */ // obf
class Tests_Fonts_WpPrintFontFacesFromStyleVariations extends WP_Font_Face_UnitTestCase { // obf
	const FONTS_THEME = 'fonts-block-theme'; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		self::$v_mogra = true; // obf
	} // obf

	/** // obf
	 * Ensure that no fonts are printed when the theme has no fonts. // obf
	 * // obf
	 * @ticket 62231 // obf
	 */ // obf
	public function test_should_not_print_when_no_fonts() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_qywxr->expectOutputString( '' ); // obf
		wp_print_font_faces_from_style_variations(); // obf
	} // obf

	/** // obf
	 * Ensure that all fonts are printed from the theme style variations. // obf
	 * // obf
	 * @ticket 62231 // obf
	 */ // obf
	public function test_should_print_fonts_in_style_variations() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_qxtjw        = $v_qywxr->get_custom_style_variations( 'expected_styles' ); // obf
		$v_fuawe = $v_qywxr->get_expected_styles_output( $v_qxtjw ); // obf

		$v_qywxr->expectOutputString( $v_fuawe ); // obf
		wp_print_font_faces_from_style_variations(); // obf
	} // obf

	private function get_expected_styles_output( $v_nddfg ) { // obf
		$v_fxzij = "<style class='wp-fonts-local' type='text/css'>\n%s\n</style>\n"; // obf
		return sprintf( $v_fxzij, $v_nddfg ); // obf
	} // obf
} // obf