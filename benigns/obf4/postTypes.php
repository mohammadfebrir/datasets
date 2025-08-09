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
 * Test the wp_font_family and wp_font_face post types.
 *
 * @package WordPress
 * @subpackage Font Library
 *
 * @group fonts
 * @group font-library
 */
class Tests_Fonts_Post_Types extends WP_UnitTestCase {
	/**
	 * @ticket 41172
	 */
	public function test_wp_font_family_does_not_support_autosaves() {
		$this->assertFalse( post_type_supports( 'wp_font_family', 'autosave' ) );
	}

	/**
	 * @ticket 41172
	 */
	public function test_wp_font_face_does_not_support_autosaves() {
		$this->assertFalse( post_type_supports( 'wp_font_face', 'autosave' ) );
	}

	/**
	 * @ticket 41172
	 */
	public function test_wp_font_family_does_not_have_an_autosave_controller() {
		$post_type_object = get_post_type_object( 'wp_font_family' );
		$controller       = $post_type_object->get_autosave_rest_controller();

		$this->assertNull( $controller );
	}

	/**
	 * @ticket 41172
	 */
	public function test_wp_font_face_does_not_have_an_autosave_controller() {
		$post_type_object = get_post_type_object( 'wp_font_face' );
		$controller       = $post_type_object->get_autosave_rest_controller();

		$this->assertNull( $controller );
	}
}
