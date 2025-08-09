

<?php // obf
/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax handler for deleting a plugin. // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_delete_plugin // obf
 */ // obf
class Tests_Ajax_wpAjaxDeletePlugin extends WP_Ajax_UnitTestCase { // obf

	public function test_missing_nonce() { // obf
		$v_anxhx->expectException( 'WPAjaxDieStopException' ); // obf
		$v_anxhx->expectExceptionMessage( '-1' ); // obf
		$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
	} // obf

	public function test_missing_plugin() { // obf
		$v_tmzzc['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_tmzzc['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_vjiym ) { // obf
			unset( $v_vjiym ); // obf
		} // obf

		// Get the response. // obf
		$v_jppyb = json_decode( $v_anxhx->_last_response, true ); // obf

		$v_goncn = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => 'No plugin specified.', // obf
			), // obf
		); // obf

		$v_anxhx->assertSameSets( $v_goncn, $v_jppyb ); // obf
	} // obf

	public function test_missing_slug() { // obf
		$v_tmzzc['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_tmzzc['plugin']      = 'foo/bar.php'; // obf

		// Make the request. // obf
		try { // obf
			$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_vjiym ) { // obf
			unset( $v_vjiym ); // obf
		} // obf

		// Get the response. // obf
		$v_jppyb = json_decode( $v_anxhx->_last_response, true ); // obf

		$v_goncn = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'slug'         => '', // obf
				'errorCode'    => 'no_plugin_specified', // obf
				'errorMessage' => 'No plugin specified.', // obf
			), // obf
		); // obf

		$v_anxhx->assertSameSets( $v_goncn, $v_jppyb ); // obf
	} // obf

	public function test_missing_capability() { // obf
		$v_tmzzc['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_tmzzc['plugin']      = 'foo/bar.php'; // obf
		$v_tmzzc['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_vjiym ) { // obf
			unset( $v_vjiym ); // obf
		} // obf

		// Get the response. // obf
		$v_jppyb = json_decode( $v_anxhx->_last_response, true ); // obf

		$v_goncn = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'delete'       => 'plugin', // obf
				'slug'         => 'foo', // obf
				'errorMessage' => 'Sorry, you are not allowed to delete plugins for this site.', // obf
			), // obf
		); // obf

		$v_anxhx->assertSameSets( $v_goncn, $v_jppyb ); // obf
	} // obf

	public function test_invalid_file() { // obf
		$v_anxhx->_setRole( 'administrator' ); // obf

		$v_tmzzc['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_tmzzc['plugin']      = '../foo/bar.php'; // obf
		$v_tmzzc['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_vjiym ) { // obf
			unset( $v_vjiym ); // obf
		} // obf

		// Get the response. // obf
		$v_jppyb = json_decode( $v_anxhx->_last_response, true ); // obf

		$v_goncn = array( // obf
			'success' => false, // obf
			'data'    => array( // obf
				'delete'       => 'plugin', // obf
				'slug'         => 'foo', // obf
				'errorMessage' => 'Sorry, you are not allowed to delete plugins for this site.', // obf
			), // obf
		); // obf

		$v_anxhx->assertSameSets( $v_goncn, $v_jppyb ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::delete_plugins // obf
	 */ // obf
	public function test_delete_plugin() { // obf
		$v_anxhx->_setRole( 'administrator' ); // obf

		$v_tmzzc['_ajax_nonce'] = wp_create_nonce( 'updates' ); // obf
		$v_tmzzc['plugin']      = 'foo.php'; // obf
		$v_tmzzc['slug']        = 'foo'; // obf

		// Make the request. // obf
		try { // obf
			$v_anxhx->_handleAjax( 'delete-plugin' ); // obf
		} catch ( WPAjaxDieContinueException $v_vjiym ) { // obf
			unset( $v_vjiym ); // obf
		} // obf

		// Get the response. // obf
		$v_jppyb = json_decode( $v_anxhx->_last_response, true ); // obf

		$v_goncn = array( // obf
			'success' => true, // obf
			'data'    => array( // obf
				'delete'     => 'plugin', // obf
				'slug'       => 'foo', // obf
				'plugin'     => 'foo.php', // obf
				'pluginName' => '', // obf
			), // obf
		); // obf

		$v_anxhx->assertSameSets( $v_goncn, $v_jppyb ); // obf
	} // obf
} // obf