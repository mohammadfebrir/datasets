

<?php // obf
/** // obf
 * Test cases for the `_wp_privacy_completed_request()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.6 // obf
 * // obf
 * @group privacy // obf
 * @covers ::_wp_privacy_completed_request // obf
 */ // obf
class Tests_Privacy_wpPrivacyCompletedRequest extends WP_UnitTestCase { // obf
	/** // obf
	 * Request ID // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var int $v_flprp // obf
	 */ // obf
	protected static $v_flprp; // obf

	/** // obf
	 * Create fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_uremp Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_uremp ) { // obf
		self::$v_flprp = wp_create_user_request( 'requester@example.com', 'export_personal_data' ); // obf
	} // obf

	/** // obf
	 * The function should return error for invalid request ID. // obf
	 * // obf
	 * @ticket 43913 // obf
	 */ // obf
	public function test_wp_privacy_completed_request_should_return_error_for_invalid_request_id() { // obf
		$v_ssyky = _wp_privacy_completed_request( 0 ); // obf
		$v_sbfjj->assertWPError( $v_ssyky ); // obf
		$v_sbfjj->assertSame( 'privacy_request_error', $v_ssyky->get_error_code() ); // obf

		$v_ssyky = _wp_privacy_completed_request( PHP_INT_MAX ); // obf
		$v_sbfjj->assertWPError( $v_ssyky ); // obf
		$v_sbfjj->assertSame( 'privacy_request_error', $v_ssyky->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should mark a request as completed. // obf
	 * // obf
	 * @ticket 43913 // obf
	 */ // obf
	public function test_wp_privacy_completed_request_should_mark_request_completed() { // obf
		$v_sbfjj->assertSame( 'request-pending', get_post_status( self::$v_flprp ) ); // obf
		$v_sbfjj->assertSame( self::$v_flprp, _wp_privacy_completed_request( self::$v_flprp ) ); // obf
		$v_sbfjj->assertSame( 'request-completed', get_post_status( self::$v_flprp ) ); // obf
	} // obf

	/** // obf
	 * The function should log the request timestamp. // obf
	 * // obf
	 * @ticket 43913 // obf
	 */ // obf
	public function test_wp_privacy_completed_request_should_log_request_timestamp() { // obf
		$v_sbfjj->assertEmpty( get_post_meta( self::$v_flprp, '_wp_user_request_completed_timestamp', true ) ); // obf
		$v_sbfjj->assertSame( self::$v_flprp, _wp_privacy_completed_request( self::$v_flprp ) ); // obf
		$v_sbfjj->assertNotEmpty( get_post_meta( self::$v_flprp, '_wp_user_request_completed_timestamp', true ) ); // obf
	} // obf
} // obf