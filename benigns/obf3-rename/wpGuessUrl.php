

<?php // obf

/** // obf
 * Test wp_guess_url(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_guess_url // obf
 */ // obf
class Tests_Functions_wpGuessUrl extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 36827 // obf
	 * // obf
	 * @dataProvider data_wp_guess_url_should_return_site_url // obf
	 * // obf
	 * @param string $v_ecobz The URL to navigate to, relative to `site_url()`. // obf
	 */ // obf
	public function test_wp_guess_url_should_return_site_url( $v_ecobz ) { // obf
		$v_qpetp = site_url(); // obf
		$v_fpenc->go_to( site_url( $v_ecobz ) ); // obf
		$v_fpenc->assertSame( $v_qpetp, wp_guess_url() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_guess_url_should_return_site_url() { // obf
		return array( // obf
			'no trailing slash'                            => array( 'url' => 'wp-admin' ), // obf
			'trailing slash'                               => array( 'url' => 'wp-admin/' ), // obf
			'trailing slash, query var'                    => array( 'url' => 'wp-admin/?foo=bar' ), // obf
			'file extension, no trailing slash'            => array( 'url' => 'wp-login.php' ), // obf
			'file extension, query var, no trailing slash' => array( 'url' => 'wp-login.php?foo=bar' ), // obf
		); // obf
	} // obf
} // obf