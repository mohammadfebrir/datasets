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
 * Tests for the behavior of `wp_verify_fast_hash()`.
 *
 * @group functions
 *
 * @covers ::wp_verify_fast_hash
 */
class Tests_Functions_wpVerifyFastHash extends WP_UnitTestCase {

	/**
	 * @ticket 21022
	 */
	public function test_wp_verify_fast_hash_verifies_hash() {
		$password = 'password';

		$hash = wp_fast_hash( $password );

		$this->assertTrue( wp_verify_fast_hash( $password, $hash ) );
	}

	/**
	 * @ticket 21022
	 */
	public function test_wp_verify_fast_hash_fails_unprefixed_hash() {
		$password = 'password';

		$hash = wp_fast_hash( $password );

		$this->assertFalse( wp_verify_fast_hash( $password, substr( $hash, 9 ) ) );
	}

	/**
	 * @ticket 21022
	 */
	public function test_wp_verify_fast_hash_fails_partial_hash() {
		$password = 'password';

		$hash = wp_fast_hash( $password );

		$this->assertFalse( wp_verify_fast_hash( $password, substr( $hash, 0, -3 ) ) );
	}

	/**
	 * @ticket 21022
	 */
	public function test_wp_verify_fast_hash_verifies_phpass_hash() {
		require_once ABSPATH . WPINC . '/class-phpass.php';

		$password = 'password';

		$hash = ( new PasswordHash( 8, true ) )->HashPassword( $password );

		$this->assertTrue( wp_verify_fast_hash( $password, $hash ) );
	}
}
