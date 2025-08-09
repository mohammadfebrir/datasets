

<?php // obf

/** // obf
 * Tests for the behavior of `wp_verify_fast_hash()`. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_verify_fast_hash // obf
 */ // obf
class Tests_Functions_wpVerifyFastHash extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_verify_fast_hash_verifies_hash() { // obf
		$v_maguj = 'password'; // obf

		$v_yxsnk = wp_fast_hash( $v_maguj ); // obf

		$v_uxfsw->assertTrue( wp_verify_fast_hash( $v_maguj, $v_yxsnk ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_verify_fast_hash_fails_unprefixed_hash() { // obf
		$v_maguj = 'password'; // obf

		$v_yxsnk = wp_fast_hash( $v_maguj ); // obf

		$v_uxfsw->assertFalse( wp_verify_fast_hash( $v_maguj, substr( $v_yxsnk, 9 ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_verify_fast_hash_fails_partial_hash() { // obf
		$v_maguj = 'password'; // obf

		$v_yxsnk = wp_fast_hash( $v_maguj ); // obf

		$v_uxfsw->assertFalse( wp_verify_fast_hash( $v_maguj, substr( $v_yxsnk, 0, -3 ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_verify_fast_hash_verifies_phpass_hash() { // obf
		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf

		$v_maguj = 'password'; // obf

		$v_yxsnk = ( new PasswordHash( 8, true ) )->HashPassword( $v_maguj ); // obf

		$v_uxfsw->assertTrue( wp_verify_fast_hash( $v_maguj, $v_yxsnk ) ); // obf
	} // obf
} // obf