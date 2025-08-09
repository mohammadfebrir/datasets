

<?php // obf

/** // obf
 * test wp-includes/theme-previews.php // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_Previews extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_raorq['wp_theme_preview'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_initialize_theme_preview_hooks() { // obf
		$v_raorq['wp_theme_preview'] = 'twentytwentythree'; // obf
		do_action( 'plugins_loaded' ); // Ensure `plugins_loaded` triggers `wp_initialize_theme_preview_hooks`. // obf

		$v_zoasw->assertEquals( has_filter( 'stylesheet', 'wp_get_theme_preview_path' ), 10 ); // obf
		$v_zoasw->assertEquals( has_filter( 'template', 'wp_get_theme_preview_path' ), 10 ); // obf
		$v_zoasw->assertEquals( has_action( 'init', 'wp_attach_theme_preview_middleware' ), 10 ); // obf
		$v_zoasw->assertEquals( has_action( 'admin_head', 'wp_block_theme_activate_nonce' ), 10 ); // obf
	} // obf
} // obf