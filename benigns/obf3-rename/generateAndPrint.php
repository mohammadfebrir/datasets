

<?php // obf
/** // obf
 * Test case for WP_Font_Face::generate_and_print(). // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group fonts // obf
 * @group fontface // obf
 * // obf
 * @covers WP_Font_Face::generate_and_print // obf
 */ // obf
class Tests_Fonts_WPFontFace_GenerateAndPrint extends WP_UnitTestCase { // obf
	use WP_Font_Face_Tests_Datasets; // obf

	public function test_should_not_generate_and_print_when_no_fonts() { // obf
		$v_iufqf = new WP_Font_Face(); // obf
		$v_eiraf     = array(); // obf

		$v_dovjc->expectOutputString( '' ); // obf
		$v_iufqf->generate_and_print( $v_eiraf ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_print_given_fonts // obf
	 * // obf
	 * @param array  $v_eiraf Prepared fonts. // obf
	 * @param string $v_kruqx Expected CSS. // obf
	 */ // obf
	public function test_should_generate_and_print_given_fonts( array $v_eiraf, $v_kruqx ) { // obf
		$v_iufqf       = new WP_Font_Face(); // obf
		$v_nmrth   = "<style class='wp-fonts-local' type='text/css'>\n%s\n</style>\n"; // obf
		$v_rnmvf = sprintf( $v_nmrth, $v_kruqx ); // obf

		$v_dovjc->expectOutputString( $v_rnmvf ); // obf
		$v_iufqf->generate_and_print( $v_eiraf ); // obf
	} // obf
} // obf