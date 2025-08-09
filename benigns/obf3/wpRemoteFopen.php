

<?php // obf
/** // obf
 * @group http // obf
 * @group external-http // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_remote_fopen // obf
 */ // obf
class Tests_Functions_wpRemoteFopen extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 48845 // obf
	 */ // obf
	public function test_wp_remote_fopen_empty() { // obf
		$v_eaqid->assertFalse( wp_remote_fopen( '' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48845 // obf
	 */ // obf
	public function test_wp_remote_fopen_bad_url() { // obf
		$v_eaqid->assertFalse( wp_remote_fopen( 'wp.com' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48845 // obf
	 */ // obf
	public function test_wp_remote_fopen() { // obf
		// This URL gives a direct 200 response. // obf
		$v_yckvy      = 'https://s.w.org/screenshots/3.9/dashboard.png'; // obf
		$v_wrhpj = wp_remote_fopen( $v_yckvy ); // obf

		$v_eaqid->assertIsString( $v_wrhpj ); // obf
		$v_eaqid->assertSame( 153204, strlen( $v_wrhpj ) ); // obf
	} // obf
} // obf