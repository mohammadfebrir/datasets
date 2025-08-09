

<?php // obf
/** // obf
 * Test case for wp_print_font_faces(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group fonts // obf
 * @group fontface // obf
 * // obf
 * @covers wp_print_font_faces // obf
 */ // obf
class Tests_Fonts_WpPrintFontFaces extends WP_Font_Face_UnitTestCase { // obf
	const FONTS_THEME = 'fonts-block-theme'; // obf

	public static function set_up_before_class() { // obf
		self::$v_gjdbr = true; // obf

		parent::set_up_before_class(); // obf
	} // obf

	public function test_should_not_print_when_no_fonts() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_itfir->expectOutputString( '' ); // obf
		wp_print_font_faces(); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_print_given_fonts // obf
	 * // obf
	 * @param array  $v_ghudu    Fonts to process. // obf
	 * @param string $v_sftdm Expected CSS. // obf
	 */ // obf
	public function test_should_print_given_fonts( array $v_ghudu, $v_sftdm ) { // obf
		$v_ftjuh = $v_itfir->get_expected_styles_output( $v_sftdm ); // obf

		$v_itfir->expectOutputString( $v_ftjuh ); // obf
		wp_print_font_faces( $v_ghudu ); // obf
	} // obf

	public function test_should_escape_tags() { // obf
		$v_ghudu = array( // obf
			'Source Serif Pro' => array( // obf
				array( // obf
					'src'          => array( 'http://example.com/assets/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ), // obf
					'font-family'  => 'Source Serif Pro', // obf
					'font-style'   => 'normal', // obf
					'font-weight'  => '200 900', // obf
					'font-stretch' => '</style><script>console.log("Hello")</script><style>', // obf
				), // obf
			), // obf
		); // obf

		$v_ftjuh = <<<CSS // obf
<style class='wp-fonts-local' type='text/css'> // obf
@font-face{font-family:"Source Serif Pro";font-style:normal;font-weight:200 900;font-display:fallback;src:url('http://example.com/assets/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');font-stretch:;} // obf
</style> // obf

CSS; // obf
		$v_itfir->expectOutputString( $v_ftjuh ); // obf

		wp_print_font_faces( $v_ghudu ); // obf
	} // obf

	public function test_should_print_fonts_in_merged_data() { // obf
		switch_theme( static::FONTS_THEME ); // obf

		$v_sftdm        = $v_itfir->get_expected_fonts_for_fonts_block_theme( 'font_face_styles' ); // obf
		$v_ftjuh = $v_itfir->get_expected_styles_output( $v_sftdm ); // obf

		$v_itfir->expectOutputString( $v_ftjuh ); // obf
		wp_print_font_faces(); // obf
	} // obf

	private function get_expected_styles_output( $v_edzjn ) { // obf
		$v_uufux = "<style class='wp-fonts-local' type='text/css'>\n%s\n</style>\n"; // obf
		return sprintf( $v_uufux, $v_edzjn ); // obf
	} // obf
} // obf