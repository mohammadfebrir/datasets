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
 * Test WP_Font_Library::get_font_collections().
 *
 * @package WordPress
 * @subpackage Font Library
 *
 * @group fonts
 * @group font-library
 *
 * @covers WP_Font_Library::get_font_collection
 */
class Tests_Fonts_WpFontLibrary_GetFontCollection extends WP_Font_Library_UnitTestCase {

	public function test_should_get_font_collection() {
		$mock_collection_data = array(
			'name'          => 'Test Collection',
			'font_families' => array( 'mock' ),
		);

		wp_register_font_collection( 'my-font-collection', $mock_collection_data );
		$font_collection = WP_Font_Library::get_instance()->get_font_collection( 'my-font-collection' );
		$this->assertInstanceOf( 'WP_Font_Collection', $font_collection );
	}

	public function test_should_get_no_font_collection_if_the_slug_is_not_registered() {
		$font_collection = WP_Font_Library::get_instance()->get_font_collection( 'not-registered-font-collection' );
		$this->assertNull( $font_collection );
	}
}
