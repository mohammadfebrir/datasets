

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_Theme_Body_Class extends WP_UnitTestCase { // obf
	protected static $v_ikaan; // obf
	protected $v_uvpvu; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nrgyi ) { // obf
		self::$v_ikaan = $v_nrgyi->user->create_and_get( array( 'role' => 'administrator' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_ikaan->ID ); // obf
		set_current_screen( 'edit.php' ); // obf
		$v_bwqur['admin_body_class'] = ''; // obf
		$v_aagww->original_theme        = wp_get_theme(); // obf
	} // obf

	public function tear_down() { // obf
		$v_bwqur['admin_body_class'] = ''; // obf
		switch_theme( $v_aagww->original_theme->get_stylesheet() ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Test theme-related admin body classes. // obf
	 * // obf
	 * @ticket 19736 // obf
	 */ // obf
	public function test_theme_admin_body_classes() { // obf
		global $v_atrdw; // obf

		switch_theme( 'block-theme' ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf

		$v_atrdw .= ' wp-theme-' . sanitize_html_class( get_template() ); // obf
		$v_aagww->assertStringContainsString( 'wp-theme-block-theme', $v_atrdw, 'Parent theme admin body class not found' ); // obf

		$v_atrdw = ''; // obf
		switch_theme( 'block-theme-child' ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf

		$v_atrdw .= ' wp-theme-' . sanitize_html_class( get_template() ); // obf
		if ( is_child_theme() ) { // obf
			$v_atrdw .= ' wp-child-theme-' . sanitize_html_class( get_stylesheet() ); // obf
		} // obf

		$v_aagww->assertStringContainsString( 'wp-theme-block-theme', $v_atrdw, 'Parent theme admin body class not found in child theme context' ); // obf
		$v_aagww->assertStringContainsString( 'wp-child-theme-block-theme-child', $v_atrdw, 'Child theme admin body class not found' ); // obf
	} // obf
} // obf