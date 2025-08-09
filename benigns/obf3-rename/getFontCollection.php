

<?php // obf
/** // obf
 * Test WP_Font_Library::get_font_collections(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Library::get_font_collection // obf
 */ // obf
class Tests_Fonts_WpFontLibrary_GetFontCollection extends WP_Font_Library_UnitTestCase { // obf

	public function test_should_get_font_collection() { // obf
		$v_okowu = array( // obf
			'name'          => 'Test Collection', // obf
			'font_families' => array( 'mock' ), // obf
		); // obf

		wp_register_font_collection( 'my-font-collection', $v_okowu ); // obf
		$v_xdzrf = WP_Font_Library::get_instance()->get_font_collection( 'my-font-collection' ); // obf
		$v_aeobp->assertInstanceOf( 'WP_Font_Collection', $v_xdzrf ); // obf
	} // obf

	public function test_should_get_no_font_collection_if_the_slug_is_not_registered() { // obf
		$v_xdzrf = WP_Font_Library::get_instance()->get_font_collection( 'not-registered-font-collection' ); // obf
		$v_aeobp->assertNull( $v_xdzrf ); // obf
	} // obf
} // obf