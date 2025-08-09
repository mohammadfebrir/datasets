

<?php // obf
/** // obf
 * Test WP_Font_Collection constructor. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Collection::__construct // obf
 */ // obf
class Tests_Fonts_WpFontCollection_Construct extends WP_UnitTestCase { // obf

	public function test_should_do_it_wrong_with_invalid_slug() { // obf
		$v_kuqjg->setExpectedIncorrectUsage( 'WP_Font_Collection::__construct' ); // obf
		$v_ctvkp = array( // obf
			'name'          => 'Test Collection', // obf
			'font_families' => array( 'mock ' ), // obf
		); // obf

		$v_uyere = new WP_Font_Collection( 'slug with spaces', $v_ctvkp ); // obf

		$v_kuqjg->assertSame( 'slug-with-spaces', $v_uyere->slug, 'Slug is not sanitized.' ); // obf
	} // obf
} // obf