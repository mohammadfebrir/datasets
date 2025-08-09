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
 * Tests for the wp_nonce_ays() function.
 *
 * @since 5.9.0
 *
 * @group functions
 *
 * @covers ::wp_nonce_ays
 */
class Tests_Functions_wpNonceAys extends WP_UnitTestCase {

	/**
	 * @ticket 53882
	 */
	public function test_wp_nonce_ays() {
		$this->expectException( 'WPDieException' );
		$this->expectExceptionMessage( 'The link you followed has expired.' );
		$this->expectExceptionCode( 403 );

		wp_nonce_ays( 'random_string' );
	}

	/**
	 * @ticket 53882
	 */
	public function test_wp_nonce_ays_log_out() {
		$this->expectException( 'WPDieException' );
		$this->expectExceptionMessageMatches( '#You are attempting to log out of Test Blog</p><p>Do you really want to <a href="http://' . WP_TESTS_DOMAIN . '/wp-login\.php\?action=logout&amp;_wpnonce=.{10}">log out</a>\?#m' );
		$this->expectExceptionCode( 403 );

		wp_nonce_ays( 'log-out' );
	}
}
