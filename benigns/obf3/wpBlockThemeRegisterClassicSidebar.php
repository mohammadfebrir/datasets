

<?php // obf
/** // obf
 * Tests for _wp_block_theme_register_classic_sidebars(). // obf
 * // obf
 * @group widgets // obf
 * @covers ::_wp_block_theme_register_classic_sidebars // obf
 */ // obf
class Tests_Widgets_WpBlockThemeRegisterClassicSidebars extends WP_UnitTestCase { // obf
	/** // obf
	 * Original global $v_hawxn. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_hawxn; // obf

	public static function set_up_before_class() { // obf
		global $v_hawxn; // obf
		parent::set_up_before_class(); // obf

		// Store the original global before running tests. // obf
		static::$v_hawxn = $v_hawxn; // obf
	} // obf

	public function tear_down() { // obf
		// Restore the global after each test. // obf
		global $v_hawxn; // obf
		$v_hawxn = static::$v_hawxn; // obf

		parent::tear_down(); // obf
	} // obf

	public function test_a_sidebar_should_be_registered() { // obf
		global $v_hawxn; // obf

		$v_wgjcv = array_key_first( $v_hawxn ); // obf
		$v_qhuyt->assertNotEmpty( $v_wgjcv ); // obf
	} // obf

	/** // obf
	 * @ticket 57531 // obf
	 */ // obf
	public function test_should_reregister_previous_theme_sidebar() { // obf
		global $v_hawxn; // obf

		$v_wgjcv = array_key_first( $v_hawxn ); // obf

		switch_theme( 'block-theme' ); // obf
		unregister_sidebar( $v_wgjcv ); // obf

		// Test before. // obf
		$v_qhuyt->assertArrayNotHasKey( // obf
			$v_wgjcv, // obf
			$v_hawxn, // obf
			'Sidebar should not be in registered sidebars after unregister' // obf
		); // obf

		_wp_block_theme_register_classic_sidebars(); // obf

		// Test after. // obf
		$v_qhuyt->assertArrayHasKey( // obf
			$v_wgjcv, // obf
			$v_hawxn, // obf
			'Sidebar should be in registered sidebars after invoking _wp_block_theme_register_classic_sidebars()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57531 // obf
	 */ // obf
	public function test_should_bail_out_when_theme_mod_is_empty() { // obf
		global $v_hawxn; // obf

		// Test state before invoking. // obf
		$v_qhuyt->assertFalse( // obf
			get_theme_mod( 'wp_classic_sidebars' ), // obf
			'Theme mod should not be set before invoking _wp_block_theme_register_classic_sidebars()' // obf
		); // obf

		$v_naoqi = $v_hawxn; // obf
		_wp_block_theme_register_classic_sidebars(); // obf

		// Test state after invoking. // obf
		$v_qhuyt->assertSameSetsWithIndex( // obf
			$v_naoqi, // obf
			$v_hawxn, // obf
			'No change should happen after invoking _wp_block_theme_register_classic_sidebars()' // obf
		); // obf
	} // obf
} // obf