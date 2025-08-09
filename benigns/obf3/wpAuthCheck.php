

<?php // obf

/** // obf
 * Tests for the behavior of `wp_auth_check()` // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_user_logged_in // obf
 * @covers ::wp_auth_check // obf
 */ // obf
class Tests_Functions_wpAuthCheck extends WP_UnitTestCase { // obf

	/** // obf
	 * Run with user not logged in. // obf
	 * // obf
	 * @ticket 41860 // obf
	 */ // obf
	public function test_wp_auth_check_user_not_logged_in() { // obf
		$v_hkdnh = array( // obf
			'wp-auth-check' => false, // obf
		); // obf

		$v_dbowv->assertFalse( is_user_logged_in() ); // obf
		$v_dbowv->assertSame( $v_hkdnh, wp_auth_check( array() ) ); // obf
	} // obf

	/** // obf
	 * Run with user logged in. // obf
	 * // obf
	 * @ticket 41860 // obf
	 */ // obf
	public function test_wp_auth_check_user_logged_in() { // obf
		// Log user in. // obf
		wp_set_current_user( 1 ); // obf

		$v_hkdnh = array( // obf
			'wp-auth-check' => true, // obf
		); // obf

		$v_dbowv->assertTrue( is_user_logged_in() ); // obf
		$v_dbowv->assertSame( $v_hkdnh, wp_auth_check( array() ) ); // obf
	} // obf

	/** // obf
	 * Run with user logged in but with expired state. // obf
	 * // obf
	 * @ticket 41860 // obf
	 */ // obf
	public function test_wp_auth_check_user_logged_in_login_grace_period_set() { // obf
		// Log user in. // obf
		wp_set_current_user( 1 ); // obf

		$v_apxmo['login_grace_period'] = 1; // obf

		$v_hkdnh  = array( // obf
			'wp-auth-check' => false, // obf
		); // obf
		$v_ozzfh    = wp_auth_check( array() ); // obf
		$v_ohrhe = is_user_logged_in(); // obf

		// Leave the global state unchanged. // obf
		unset( $v_apxmo['login_grace_period'] ); // obf

		$v_dbowv->assertTrue( $v_ohrhe ); // obf
		$v_dbowv->assertSame( $v_hkdnh, $v_ozzfh ); // obf
	} // obf
} // obf