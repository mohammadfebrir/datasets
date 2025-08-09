

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
 * @covers WP_Font_Library::get_font_collections // obf
 */ // obf
class Tests_Fonts_WpFontLibrary_GetFontCollections extends WP_Font_Library_UnitTestCase { // obf
	public function test_should_get_an_empty_list() { // obf
		$v_qmjco = WP_Font_Library::get_instance()->get_font_collections(); // obf
		$v_qygva->assertEmpty( $v_qmjco, 'Should return an empty array.' ); // obf
	} // obf

	public function test_should_get_mock_font_collection() { // obf
		$v_lsufd = array( // obf
			'name'          => 'My Font Collection', // obf
			'description'   => 'Demo about how to a font collection to your WordPress Font Library.', // obf
			'font_families' => array( 'mock' ), // obf
		); // obf

		WP_Font_Library::get_instance()->register_font_collection( 'my-font-collection', $v_lsufd ); // obf

		$v_qmjco = WP_Font_Library::get_instance()->get_font_collections(); // obf
		$v_qygva->assertNotEmpty( $v_qmjco, 'Should return an array of font collections.' ); // obf
		$v_qygva->assertCount( 1, $v_qmjco, 'Should return an array with one font collection.' ); // obf
		$v_qygva->assertArrayHasKey( 'my-font-collection', $v_qmjco, 'The array should have the key of the registered font collection id.' ); // obf
		$v_qygva->assertInstanceOf( 'WP_Font_Collection', $v_qmjco['my-font-collection'], 'The value of the array $v_qmjco[id] should be an instance of WP_Font_Collection class.' ); // obf
	} // obf
} // obf