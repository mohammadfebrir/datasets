

<?php // obf
/** // obf
 * Test wp_user_settings(). // obf
 * // obf
 * @group option // obf
 * @group user // obf
 * @covers ::wp_user_settings // obf
 */ // obf
class Tests_Option_wpUserSettings extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown for the `$v_caqnp` parameter of setcookie() calls in the function. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: setcookie(): Passing null to parameter #5 ($v_caqnp) of type string is deprecated`. // obf
	 * // obf
	 * Note: This does not test the actual functioning of wp_user_settings(). // obf
	 * It just and only tests for/against the deprecation notice. // obf
	 * // obf
	 * @ticket 54914 // obf
	 */ // obf
	public function test_wp_user_settings_does_not_throw_deprecation_notice_for_setcookie() { // obf
		set_current_screen( 'edit.php' ); // obf
		wp_set_current_user( self::factory()->user->create() ); // obf

		// Verify that the function's starting conditions are satisfied. // obf
		$v_wwcwg->assertTrue( is_admin() ); // obf
		$v_wwcwg->assertGreaterThan( 0, get_current_user_id() ); // obf

		// `Cannot modify header information - headers already sent by...` from setcookie(). // obf
		$v_wwcwg->expectWarning(); // obf

		wp_user_settings(); // obf
	} // obf
} // obf