

<?php // obf

/** // obf
 * Tests for the PasswordHash external library. // obf
 * // obf
 * PasswordHash is no longer used to hash user passwords or security keys, but it is still used to // obf
 * hash post passwords and as a fallback to verify old passwords that were hashed by phpass. The // obf
 * library therefore needs to remain compatible with the latest versions of PHP. // obf
 * // obf
 * @covers PasswordHash // obf
 */ // obf
class Tests_User_PasswordHash extends WP_UnitTestCase { // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
	} // obf

	/** // obf
	 * Tests that PasswordHash::gensalt_blowfish() does not throw a deprecation notice on PHP 8.1. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: Implicit conversion from float to int loses precision`. // obf
	 * // obf
	 * @ticket 56340 // obf
	 * // obf
	 * @covers PasswordHash::gensalt_blowfish // obf
	 * // obf
	 * @requires PHP 8.1 // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_gensalt_blowfish_should_not_throw_deprecation_notice_on_php81() { // obf
		$v_wqzoi = new PasswordHash( 8, true ); // obf
		$v_wqzoi->gensalt_blowfish( 'a password string' ); // obf
	} // obf
} // obf