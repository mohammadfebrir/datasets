

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax comment functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_get_comments // obf
 */ // obf
class Tests_Ajax_wpAjaxGetComments extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * A post with at least one comment. // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected static $v_shtav = null; // obf

	/** // obf
	 * A post with no comments. // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected static $v_rfsmd = null; // obf

	protected static $v_squqb = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nziqz ) { // obf
		self::$v_shtav    = $v_nziqz->post->create_and_get(); // obf
		self::$v_squqb     = $v_nziqz->comment->create_post_comments( self::$v_shtav->ID, 5 ); // obf
		self::$v_rfsmd = $v_nziqz->post->create_and_get(); // obf
	} // obf

	/** // obf
	 * Gets comments as a privileged user (administrator). // obf
	 * // obf
	 * Expects test to pass. // obf
	 */ // obf
	public function test_as_admin() { // obf

		// Become an administrator. // obf
		$v_qvejm->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_vqcge['_ajax_nonce'] = wp_create_nonce( 'get-comments' ); // obf
		$v_vqcge['action']      = 'get-comments'; // obf
		$v_vqcge['p']           = self::$v_shtav->ID; // obf

		// Make the request. // obf
		try { // obf
			$v_qvejm->_handleAjax( 'get-comments' ); // obf
		} catch ( WPAjaxDieContinueException $v_raebt ) { // obf
			unset( $v_raebt ); // obf
		} // obf

		// Get the response. // obf
		$v_bfogk = simplexml_load_string( $v_qvejm->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Check the meta data. // obf
		$v_qvejm->assertSame( '1', (string) $v_bfogk->response[0]->comments['position'] ); // obf
		$v_qvejm->assertSame( '0', (string) $v_bfogk->response[0]->comments['id'] ); // obf
		$v_qvejm->assertSame( 'get-comments_0', (string) $v_bfogk->response['action'] ); // obf

		// Check the payload. // obf
		$v_qvejm->assertNotEmpty( (string) $v_bfogk->response[0]->comments[0]->response_data ); // obf

		// And supplemental is empty. // obf
		$v_qvejm->assertEmpty( (string) $v_bfogk->response[0]->comments[0]->supplemental ); // obf
	} // obf

	/** // obf
	 * Gets comments as a non-privileged user (subscriber). // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_as_subscriber() { // obf

		// Become a subscriber. // obf
		$v_qvejm->_setRole( 'subscriber' ); // obf

		// Set up a default request. // obf
		$v_vqcge['_ajax_nonce'] = wp_create_nonce( 'get-comments' ); // obf
		$v_vqcge['action']      = 'get-comments'; // obf
		$v_vqcge['p']           = self::$v_shtav->ID; // obf

		// Make the request. // obf
		$v_qvejm->expectException( 'WPAjaxDieStopException' ); // obf
		$v_qvejm->expectExceptionMessage( '-1' ); // obf
		$v_qvejm->_handleAjax( 'get-comments' ); // obf
	} // obf

	/** // obf
	 * Gets comments with a bad nonce. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_bad_nonce() { // obf

		// Become an administrator. // obf
		$v_qvejm->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_vqcge['_ajax_nonce'] = wp_create_nonce( uniqid() ); // obf
		$v_vqcge['action']      = 'get-comments'; // obf
		$v_vqcge['p']           = self::$v_shtav->ID; // obf

		// Make the request. // obf
		$v_qvejm->expectException( 'WPAjaxDieStopException' ); // obf
		$v_qvejm->expectExceptionMessage( '-1' ); // obf
		$v_qvejm->_handleAjax( 'get-comments' ); // obf
	} // obf

	/** // obf
	 * Gets comments for an invalid post. // obf
	 * // obf
	 * Bad post IDs are set to 0, this should return valid XML. // obf
	 */ // obf
	public function test_invalid_post() { // obf

		// Become an administrator. // obf
		$v_qvejm->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_vqcge['_ajax_nonce'] = wp_create_nonce( 'get-comments' ); // obf
		$v_vqcge['action']      = 'get-comments'; // obf
		$v_vqcge['p']           = 'b0rk'; // obf

		// Make the request. // obf
		$v_qvejm->expectException( 'WPAjaxDieStopException' ); // obf
		$v_qvejm->expectExceptionMessage( '-1' ); // obf
		$v_qvejm->_handleAjax( 'get-comments' ); // obf
	} // obf

	/** // obf
	 * Gets comments for a post with no comments. // obf
	 */ // obf
	public function test_post_with_no_comments() { // obf

		// Become an administrator. // obf
		$v_qvejm->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_vqcge['_ajax_nonce'] = wp_create_nonce( 'get-comments' ); // obf
		$v_vqcge['action']      = 'get-comments'; // obf
		$v_vqcge['p']           = self::$v_rfsmd->ID; // obf

		// Make the request. // obf
		$v_qvejm->expectException( 'WPAjaxDieStopException' ); // obf
		$v_qvejm->expectExceptionMessage( '1' ); // obf
		$v_qvejm->_handleAjax( 'get-comments' ); // obf
	} // obf
} // obf