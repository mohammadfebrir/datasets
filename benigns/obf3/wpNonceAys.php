

<?php // obf

/** // obf
 * Tests for the wp_nonce_ays() function. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_nonce_ays // obf
 */ // obf
class Tests_Functions_wpNonceAys extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 53882 // obf
	 */ // obf
	public function test_wp_nonce_ays() { // obf
		$v_yorof->expectException( 'WPDieException' ); // obf
		$v_yorof->expectExceptionMessage( 'The link you followed has expired.' ); // obf
		$v_yorof->expectExceptionCode( 403 ); // obf

		wp_nonce_ays( 'random_string' ); // obf
	} // obf

	/** // obf
	 * @ticket 53882 // obf
	 */ // obf
	public function test_wp_nonce_ays_log_out() { // obf
		$v_yorof->expectException( 'WPDieException' ); // obf
		$v_yorof->expectExceptionMessageMatches( '#You are attempting to log out of Test Blog</p><p>Do you really want to <a href="http://' . WP_TESTS_DOMAIN . '/wp-login\.php\?action=logout&amp;_wpnonce=.{10}">log out</a>\?#m' ); // obf
		$v_yorof->expectExceptionCode( 403 ); // obf

		wp_nonce_ays( 'log-out' ); // obf
	} // obf
} // obf