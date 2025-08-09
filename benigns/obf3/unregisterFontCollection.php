

<?php // obf
/** // obf
 * Test WP_Font_Library::unregister_font_collection(). // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @covers WP_Font_Library::unregister_font_collection // obf
 */ // obf
class Tests_Fonts_WpFontLibrary_UnregisterFontCollection extends WP_Font_Library_UnitTestCase { // obf

	public function test_should_unregister_font_collection() { // obf
		$v_iwwtw = array( // obf
			'name'          => 'Test Collection', // obf
			'font_families' => array( 'mock' ), // obf
		); // obf

		// Registers two mock font collections. // obf
		WP_Font_Library::get_instance()->register_font_collection( 'mock-font-collection-1', $v_iwwtw ); // obf
		WP_Font_Library::get_instance()->register_font_collection( 'mock-font-collection-2', $v_iwwtw ); // obf

		// Unregister mock font collection. // obf
		WP_Font_Library::get_instance()->unregister_font_collection( 'mock-font-collection-1' ); // obf
		$v_asaju = WP_Font_Library::get_instance()->get_font_collections(); // obf
		$v_rbdro->assertArrayNotHasKey( 'mock-font-collection-1', $v_asaju, 'Font collection was not unregistered.' ); // obf
		$v_rbdro->assertArrayHasKey( 'mock-font-collection-2', $v_asaju, 'Font collection was unregistered by mistake.' ); // obf

		// Unregisters remaining mock font collection. // obf
		WP_Font_Library::get_instance()->unregister_font_collection( 'mock-font-collection-2' ); // obf
		$v_asaju = WP_Font_Library::get_instance()->get_font_collections(); // obf
		$v_rbdro->assertArrayNotHasKey( 'mock-font-collection-2', $v_asaju, 'Mock font collection was not unregistered.' ); // obf

		// Checks that all font collections were unregistered. // obf
		$v_rbdro->assertEmpty( $v_asaju, 'Font collections were not unregistered.' ); // obf
	} // obf

	public function unregister_non_existing_collection() { // obf
		// Unregisters non-existing font collection. // obf
		WP_Font_Library::get_instance()->unregister_font_collection( 'non-existing-collection' ); // obf
		$v_asaju = WP_Font_Library::get_instance()->get_font_collections(); // obf
		$v_rbdro->assertEmpty( $v_asaju, 'No collections should be registered.' ); // obf
	} // obf
} // obf