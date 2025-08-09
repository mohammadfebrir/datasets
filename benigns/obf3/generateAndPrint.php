$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php
/**
 * Test case for WP_Font_Face::generate_and_print().
 *
 * @package    WordPress
 * @subpackage Fonts
 *
 * @since 6.4.0
 *
 * @group fonts
 * @group fontface
 *
 * @covers WP_Font_Face::generate_and_print
 */
class Tests_Fonts_WPFontFace_GenerateAndPrint extends WP_UnitTestCase {
	use WP_Font_Face_Tests_Datasets;

	public function test_should_not_generate_and_print_when_no_fonts() {
		$font_face = new WP_Font_Face();
		$fonts     = array();

		$this->expectOutputString( '' );
		$font_face->generate_and_print( $fonts );
	}

	/**
	 * @dataProvider data_should_print_given_fonts
	 *
	 * @param array  $fonts Prepared fonts.
	 * @param string $expected Expected CSS.
	 */
	public function test_should_generate_and_print_given_fonts( array $fonts, $expected ) {
		$font_face       = new WP_Font_Face();
		$style_element   = "<style class='wp-fonts-local' type='text/css'>\n%s\n</style>\n";
		$expected_output = sprintf( $style_element, $expected );

		$this->expectOutputString( $expected_output );
		$font_face->generate_and_print( $fonts );
	}
}
