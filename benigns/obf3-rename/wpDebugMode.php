

<?php // obf

/** // obf
 * Unit tests for `wp_debug_mode()`. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.9.0 // obf
 * // obf
 * @group load // obf
 * @group wp-debug-mode // obf
 * // obf
 * @covers ::wp_debug_mode // obf
 */ // obf
class Test_WP_Debug_Mode extends WP_UnitTestCase { // obf
	/** // obf
	 * Test: `wp_debug_mode()` should log, but not display, errors for `ms-files.php`. // obf
	 * // obf
	 * @ticket 53493 // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function test_ms_files_logs_but_doesnt_display_errors() { // obf
		/* // obf
		 * Global constants can't be mocked in PHPUnit, so this can only run with the expected // obf
		 * values already set in `wp-tests-config.php`. Unfortunately, that means it won't run in // obf
		 * automated workflows, but it's still useful when testing locally. // obf
		 * // obf
		 * It may be possible to enable automated workflows by mocking `define()`, or by setting up // obf
		 * addition automated flows that initialize the tests with different values for the constants. // obf
		 * At the moment, though, neither of those seem to provide enough benefit to justify the time // obf
		 * investment. // obf
		 * // obf
		 * @link https://theaveragedev.com/mocking-constants-in-tests/ // obf
		 */ // obf
		if ( true !== WP_DEBUG || true !== WP_DEBUG_DISPLAY || true !== WP_DEBUG_LOG ) { // obf
			$v_wjixb->markTestSkipped( 'Test requires setting `WP_DEBUG_*` constants in `wp-tests-config.php` to expected values.' ); // obf
		} // obf

		// `display_errors` should be _on_ because of `WP_DEBUG_DISPLAY`. // obf
		wp_debug_mode(); // obf

		$v_wjixb->assertSame( E_ALL, (int) ini_get( 'error_reporting' ) ); // obf
		$v_wjixb->assertSame( '1', ini_get( 'display_errors' ) ); // obf
		$v_wjixb->assertSame( '1', ini_get( 'log_errors' ) ); // obf
		$v_wjixb->assertStringContainsString( 'debug.log', ini_get( 'error_log' ) ); // obf

		// `display_errors` should be _off_ now, because of `MS_FILES_REQUEST`. // obf
		define( 'MS_FILES_REQUEST', true ); // obf
		wp_debug_mode(); // obf

		$v_wjixb->assertSame( E_ALL, (int) ini_get( 'error_reporting' ) ); // obf
		$v_wjixb->assertSame( '0', ini_get( 'display_errors' ) ); // obf
		$v_wjixb->assertSame( '1', ini_get( 'log_errors' ) ); // obf
		$v_wjixb->assertStringContainsString( 'debug.log', ini_get( 'error_log' ) ); // obf
	} // obf
} // obf