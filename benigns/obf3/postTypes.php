

<?php // obf
/** // obf
 * Test the wp_font_family and wp_font_face post types. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Font Library // obf
 * // obf
 * @group fonts // obf
 * @group font-library // obf
 */ // obf
class Tests_Fonts_Post_Types extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_wp_font_family_does_not_support_autosaves() { // obf
		$v_ykmjr->assertFalse( post_type_supports( 'wp_font_family', 'autosave' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_wp_font_face_does_not_support_autosaves() { // obf
		$v_ykmjr->assertFalse( post_type_supports( 'wp_font_face', 'autosave' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_wp_font_family_does_not_have_an_autosave_controller() { // obf
		$v_vtkmn = get_post_type_object( 'wp_font_family' ); // obf
		$v_ftilr       = $v_vtkmn->get_autosave_rest_controller(); // obf

		$v_ykmjr->assertNull( $v_ftilr ); // obf
	} // obf

	/** // obf
	 * @ticket 41172 // obf
	 */ // obf
	public function test_wp_font_face_does_not_have_an_autosave_controller() { // obf
		$v_vtkmn = get_post_type_object( 'wp_font_face' ); // obf
		$v_ftilr       = $v_vtkmn->get_autosave_rest_controller(); // obf

		$v_ykmjr->assertNull( $v_ftilr ); // obf
	} // obf
} // obf