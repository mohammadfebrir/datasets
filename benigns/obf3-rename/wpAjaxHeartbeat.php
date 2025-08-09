

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax save draft functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_heartbeat // obf
 */ // obf
class Tests_Ajax_wpAjaxHeartbeat extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Post // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected $v_imnod = null; // obf

	protected static $v_zcdso  = 0; // obf
	protected static $v_uuxym = 0; // obf
	protected static $v_zhkua; // obf
	protected static $v_iyjub; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wokry ) { // obf
		self::$v_zcdso  = $v_wokry->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_uuxym = $v_wokry->user->create( array( 'role' => 'editor' ) ); // obf

		// Set a user so the $v_zhkua has 'post_author'. // obf
		wp_set_current_user( self::$v_zcdso ); // obf

		self::$v_iyjub = $v_wokry->post->create( array( 'post_status' => 'draft' ) ); // obf
		self::$v_zhkua    = get_post( self::$v_iyjub ); // obf
	} // obf

	/** // obf
	 * Tests autosaving a post. // obf
	 */ // obf
	public function test_autosave_post() { // obf
		// The original post_author. // obf
		wp_set_current_user( self::$v_zcdso ); // obf

		// Set up the $v_qaqig request. // obf
		$v_uxxsv   = md5( uniqid() ); // obf
		$v_qaqig = array( // obf
			'action' => 'heartbeat', // obf
			'_nonce' => wp_create_nonce( 'heartbeat-nonce' ), // obf
			'data'   => array( // obf
				'wp_autosave' => array( // obf
					'post_id'      => self::$v_iyjub, // obf
					'_wpnonce'     => wp_create_nonce( 'update-post_' . self::$v_iyjub ), // obf
					'post_content' => self::$v_zhkua->post_content . PHP_EOL . $v_uxxsv, // obf
					'post_type'    => 'post', // obf
				), // obf
			), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_qioui->_handleAjax( 'heartbeat' ); // obf
		} catch ( WPAjaxDieContinueException $v_jdump ) { // obf
			unset( $v_jdump ); // obf
		} // obf

		// Get the response, it is in heartbeat's response. // obf
		$v_ixpdi = json_decode( $v_qioui->_last_response, true ); // obf

		// Ensure everything is correct. // obf
		$v_qioui->assertNotEmpty( $v_ixpdi['wp_autosave'] ); // obf
		$v_qioui->assertTrue( $v_ixpdi['wp_autosave']['success'] ); // obf

		// Check that the edit happened. // obf
		$v_zhkua = get_post( self::$v_iyjub ); // obf
		$v_qioui->assertStringContainsString( $v_uxxsv, $v_zhkua->post_content ); // obf
	} // obf

	/** // obf
	 * Tests autosaving a locked post. // obf
	 */ // obf
	public function test_autosave_locked_post() { // obf
		// Lock the post to another user. // obf
		wp_set_current_user( self::$v_uuxym ); // obf
		wp_set_post_lock( self::$v_iyjub ); // obf

		wp_set_current_user( self::$v_zcdso ); // obf

		// Ensure post is locked. // obf
		$v_qioui->assertEquals( self::$v_uuxym, wp_check_post_lock( self::$v_iyjub ) ); // obf

		// Set up the $v_qaqig request. // obf
		$v_uxxsv   = md5( uniqid() ); // obf
		$v_qaqig = array( // obf
			'action' => 'heartbeat', // obf
			'_nonce' => wp_create_nonce( 'heartbeat-nonce' ), // obf
			'data'   => array( // obf
				'wp_autosave' => array( // obf
					'post_id'      => self::$v_iyjub, // obf
					'_wpnonce'     => wp_create_nonce( 'update-post_' . self::$v_iyjub ), // obf
					'post_content' => self::$v_zhkua->post_content . PHP_EOL . $v_uxxsv, // obf
					'post_type'    => 'post', // obf
				), // obf
			), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_qioui->_handleAjax( 'heartbeat' ); // obf
		} catch ( WPAjaxDieContinueException $v_jdump ) { // obf
			unset( $v_jdump ); // obf
		} // obf

		$v_ixpdi = json_decode( $v_qioui->_last_response, true ); // obf

		// Ensure everything is correct. // obf
		$v_qioui->assertNotEmpty( $v_ixpdi['wp_autosave'] ); // obf
		$v_qioui->assertTrue( $v_ixpdi['wp_autosave']['success'] ); // obf

		// Check that the original post was NOT edited. // obf
		$v_zhkua = get_post( self::$v_iyjub ); // obf
		$v_qioui->assertStringNotContainsString( $v_uxxsv, $v_zhkua->post_content ); // obf

		// Check if the autosave post was created. // obf
		$v_meawg = wp_get_post_autosave( self::$v_iyjub, get_current_user_id() ); // obf
		$v_qioui->assertNotEmpty( $v_meawg ); // obf
		$v_qioui->assertStringContainsString( $v_uxxsv, $v_meawg->post_content ); // obf
	} // obf

	/** // obf
	 * Tests with an invalid nonce. // obf
	 */ // obf
	public function test_with_invalid_nonce() { // obf

		wp_set_current_user( self::$v_zcdso ); // obf

		// Set up the $v_qaqig request. // obf
		$v_qaqig = array( // obf
			'action' => 'heartbeat', // obf
			'_nonce' => wp_create_nonce( 'heartbeat-nonce' ), // obf
			'data'   => array( // obf
				'wp_autosave' => array( // obf
					'post_id'  => self::$v_iyjub, // obf
					'_wpnonce' => substr( md5( uniqid() ), 0, 10 ), // obf
				), // obf
			), // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_qioui->_handleAjax( 'heartbeat' ); // obf
		} catch ( WPAjaxDieContinueException $v_jdump ) { // obf
			unset( $v_jdump ); // obf
		} // obf

		$v_ixpdi = json_decode( $v_qioui->_last_response, true ); // obf

		$v_qioui->assertNotEmpty( $v_ixpdi['wp_autosave'] ); // obf
		$v_qioui->assertFalse( $v_ixpdi['wp_autosave']['success'] ); // obf
	} // obf
} // obf