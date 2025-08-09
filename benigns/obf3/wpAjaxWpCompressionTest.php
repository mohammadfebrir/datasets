

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax compression test functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_wp_compression_test // obf
 */ // obf
class Tests_Ajax_wpAjaxWpCompressionTest extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Test as a logged out user // obf
	 */ // obf
	public function test_logged_out() { // obf
		$v_thudg->logout(); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = '1'; // obf

		// Make the request. // obf
		$v_thudg->expectException( 'WPAjaxDieStopException' ); // obf
		$v_thudg->expectExceptionMessage( '-1' ); // obf
		$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
	} // obf

	/** // obf
	 * Fetch the test text // obf
	 */ // obf
	public function test_text() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = '1'; // obf

		// Make the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieContinueException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_thudg->assertStringContainsString( 'wpCompressionTest', $v_thudg->_last_response ); // obf
	} // obf

	/** // obf
	 * Fetch the test text (gzdeflate) // obf
	 * // obf
	 * @requires function gzdeflate // obf
	 */ // obf
	public function test_gzdeflate() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = '2'; // obf

		$v_weccl['HTTP_ACCEPT_ENCODING'] = 'deflate'; // obf

		// Make the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieContinueException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_thudg->assertStringContainsString( 'wpCompressionTest', gzinflate( $v_thudg->_last_response ) ); // obf
	} // obf

	/** // obf
	 * Fetch the test text (gzencode) // obf
	 * // obf
	 * @requires function gzencode // obf
	 */ // obf
	public function test_gzencode() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = '2'; // obf

		$v_weccl['HTTP_ACCEPT_ENCODING'] = 'gzip'; // obf

		// Make the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieContinueException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_thudg->assertStringContainsString( 'wpCompressionTest', $v_thudg->_gzdecode( $v_thudg->_last_response ) ); // obf
	} // obf

	/** // obf
	 * Fetch the test text (unknown encoding) // obf
	 */ // obf
	public function test_unknown_encoding() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = '2'; // obf

		$v_weccl['HTTP_ACCEPT_ENCODING'] = 'unknown'; // obf

		// Make the request. // obf
		$v_thudg->expectException( 'WPAjaxDieStopException' ); // obf
		$v_thudg->expectExceptionMessage( '-1' ); // obf
		$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
	} // obf

	/** // obf
	 * Set the 'can_compress_scripts' site option to true // obf
	 */ // obf
	public function test_set_yes() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = 'yes'; // obf

		// Set the option to false. // obf
		update_site_option( 'can_compress_scripts', 0 ); // obf

		// Make the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieStopException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Check the site option is not changed due to lack of nonce. // obf
		$v_thudg->assertSame( 0, get_site_option( 'can_compress_scripts' ) ); // obf

		// Add a nonce. // obf
		$v_kgbtg['_ajax_nonce'] = wp_create_nonce( 'update_can_compress_scripts' ); // obf

		// Retry the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieStopException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Check the site option is changed. // obf
		$v_thudg->assertSame( 1, get_site_option( 'can_compress_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Set the 'can_compress_scripts' site option to false // obf
	 */ // obf
	public function test_set_no() { // obf

		// Become an administrator. // obf
		$v_thudg->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_kgbtg['test'] = 'no'; // obf

		// Set the option to true. // obf
		update_site_option( 'can_compress_scripts', 1 ); // obf

		// Make the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieStopException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Check the site option is not changed due to lack of nonce. // obf
		$v_thudg->assertSame( 1, get_site_option( 'can_compress_scripts' ) ); // obf

		// Add a nonce. // obf
		$v_kgbtg['_ajax_nonce'] = wp_create_nonce( 'update_can_compress_scripts' ); // obf

		// Retry the request. // obf
		try { // obf
			$v_thudg->_handleAjax( 'wp-compression-test' ); // obf
		} catch ( WPAjaxDieStopException $v_itmfb ) { // obf
			unset( $v_itmfb ); // obf
		} // obf

		// Check the site option is changed. // obf
		$v_thudg->assertSame( 0, get_site_option( 'can_compress_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Undo gzencode.  This is ugly, but there's no stock gzdecode() function. // obf
	 * // obf
	 * @param string $v_ahrhv // obf
	 * @return string // obf
	 */ // obf
	protected function _gzdecode( $v_ahrhv ) { // obf

		// Save the encoded data to a temp file. // obf
		$v_zclok = wp_tempnam( 'gzdecode' ); // obf
		file_put_contents( $v_zclok, $v_ahrhv ); // obf

		// Flush it to the output buffer and delete the temp file. // obf
		ob_start(); // obf
		readgzfile( $v_zclok ); // obf
		unlink( $v_zclok ); // obf

		// Save the data stop buffering. // obf
		$v_cifyd = ob_get_clean(); // obf

		// Done. // obf
		return $v_cifyd; // obf
	} // obf
} // obf