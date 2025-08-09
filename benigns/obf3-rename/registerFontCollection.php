

<?php // obf
/** // obf
 * Test WP_Font_Library::register_font_collection(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Library::register_font_collection // obf
 */ // obf
class Tests_Fonts_WpFontLibrary_RegisterFontCollection extends WP_Font_Library_UnitTestCase { // obf
	public function test_should_register_font_collection() { // obf
		$v_evslb = array( // obf
			'name'          => 'My Collection', // obf
			'font_families' => array( 'mock' ), // obf
		); // obf

		$v_kjgba = WP_Font_Library::get_instance()->register_font_collection( 'my-collection', $v_evslb ); // obf
		$v_elfzh->assertInstanceOf( 'WP_Font_Collection', $v_kjgba ); // obf
	} // obf

	public function test_should_return_error_if_slug_is_repeated() { // obf
		$v_arrxq = array( // obf
			'name'          => 'Test Collection', // obf
			'font_families' => array( 'mock' ), // obf
		); // obf

		// Register first collection. // obf
		$v_brtlv = WP_Font_Library::get_instance()->register_font_collection( 'my-collection-1', $v_arrxq ); // obf
		$v_elfzh->assertInstanceOf( 'WP_Font_Collection', $v_brtlv, 'A collection should be registered.' ); // obf

		// Expects a _doing_it_wrong notice. // obf
		$v_elfzh->setExpectedIncorrectUsage( 'WP_Font_Library::register_font_collection' ); // obf

		// Try to register a second collection with same slug. // obf
		WP_Font_Library::get_instance()->register_font_collection( 'my-collection-1', $v_arrxq ); // obf
	} // obf
} // obf