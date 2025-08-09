

<?php // obf
/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax handler for updating a plugin. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_update_plugin // obf
 */ // obf
class Tests_Ajax_wpAjaxUpdatePlugin extends WP_Ajax_UnitTestCase { // obf

	public function test_missing_nonce() { // obf
		$v_lvwml->expectException( 'WPAjaxDieStopException' ); // obf
		$v_lvwml->expectExceptionMessage( '-1' ); // obf
		$v_lvwml->_handleAjax( 'update-plugin' ); // obf
	} // obf

	public function test_missing_plugin() { // obf
		$v_jbpre['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jbpre['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_lvwml->_handleAjax( 'update-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_dcowq ) { // obf
			unset( $v_dcowq ); // obf
		} // obf

		// Get the response. // obf
		$v_buuio = json_decode( $v_lvwml->_last_response, true ); // obf

		$v_fkgqg = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => 'No plugin specified.', // obf
			), // obf
		); // obf

		$v_lvwml->assertSameSets( $v_fkgqg, $v_buuio ); // obf
	} // obf

	public function test_missing_slug() { // obf
		$v_jbpre['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jbpre['plugin']      = 'foo/bar.php'; // obf

		// Make the request. // obf
		try { // obf
			$v_lvwml->_handleAjax( 'update-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_dcowq ) { // obf
			unset( $v_dcowq ); // obf
		} // obf

		// Get the response. // obf
		$v_buuio = json_decode( $v_lvwml->_last_response, true ); // obf

		$v_fkgqg = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => 'No plugin specified.', // obf
			), // obf
		); // obf

		$v_lvwml->assertSameSets( $v_fkgqg, $v_buuio ); // obf
	} // obf

	public function test_missing_capability() { // obf
		$v_jbpre['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jbpre['plugin']      = 'foo/bar.php'; // obf
		$v_jbpre['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_lvwml->_handleAjax( 'update-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_dcowq ) { // obf
			unset( $v_dcowq ); // obf
		} // obf

		// Get the response. // obf
		$v_buuio = json_decode( $v_lvwml->_last_response, true ); // obf

		$v_fkgqg = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'plugin', // obf
				'slug'         => 'foo', // obf
				'oldVersion'   => '', // obf
				'newVersion'   => '', // obf
				'errorMessage' => 'Sorry, you are not allowed to update plugins for this site.', // obf
			), // obf
		); // obf

		$v_lvwml->assertSameSets( $v_fkgqg, $v_buuio ); // obf
	} // obf

	public function test_invalid_file() { // obf
		$v_lvwml->_setRole( 'administrator' ); // obf

		$v_jbpre['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jbpre['plugin']      = '../foo/bar.php'; // obf
		$v_jbpre['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_lvwml->_handleAjax( 'update-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_dcowq ) { // obf
			unset( $v_dcowq ); // obf
		} // obf

		// Get the response. // obf
		$v_buuio = json_decode( $v_lvwml->_last_response, true ); // obf

		$v_fkgqg = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'plugin', // obf
				'slug'         => 'foo', // obf
				'oldVersion'   => '', // obf
				'newVersion'   => '', // obf
				'errorMessage' => 'Sorry, you are not allowed to update plugins for this site.', // obf
			), // obf
		); // obf

		$v_lvwml->assertSameSets( $v_fkgqg, $v_buuio ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_update_plugin() { // obf
		$v_lvwml->_setRole( 'administrator' ); // obf

		$v_jbpre['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_jbpre['plugin']      = 'hello.php'; // obf
		$v_jbpre['slug']        = 'hello-dolly'; // obf

		// Prevent wp_update_plugins() from running. // obf
		wp_installing( true ); // obf

		// Make the request. // obf
		try { // obf
			$v_lvwml->_handleAjax( 'update-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_dcowq ) { // obf
			unset( $v_dcowq ); // obf
		} // obf

		wp_installing( false ); // obf

		// Get the response. // obf
		$v_buuio = json_decode( $v_lvwml->_last_response, true ); // obf

		$v_fkgqg = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'update'       => 'plugin', // obf
				'slug'         => 'hello-dolly', // obf
				'oldVersion'   => 'Version 1.7.2', // obf
				'newVersion'   => '', // obf
				'plugin'       => 'hello.php', // obf
				'pluginName'   => 'Hello Dolly', // obf
				'debug'        => array( 'The plugin is at the latest version.' ), // obf
				'errorMessage' => 'The plugin is at the latest version.', // obf
			), // obf
		); // obf

		$v_lvwml->assertSameSets( $v_fkgqg, $v_buuio ); // obf
	} // obf
} // obf