

<?php // obf
/** // obf
 * Test cases for the `wp_create_user_request()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.2.0 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_create_user_request // obf
 */ // obf
class Tests_Privacy_wpCreateUserRequest extends WP_UnitTestCase { // obf
	/** // obf
	 * Request ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var int $v_bjycw // obf
	 */ // obf
	protected static $v_bjycw; // obf

	/** // obf
	 * Request email for a registered user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_moooe // obf
	 */ // obf
	protected static $v_moooe; // obf

	/** // obf
	 * Request email for a non-registered user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_hejyn // obf
	 */ // obf
	protected static $v_hejyn; // obf

	/** // obf
	 * Test user ID. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var string $v_clgtb // obf
	 */ // obf
	protected static $v_clgtb; // obf

	/** // obf
	 * Create fixtures. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_hnghl Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_hnghl ) { // obf
		self::$v_moooe     = 'export@local.test'; // obf
		self::$v_hejyn = 'non-registered-user@local.test'; // obf

		self::$v_clgtb = $v_hnghl->user->create( // obf
			array( // obf
				'user_email' => self::$v_moooe, // obf
			) // obf
		); // obf

		self::$v_bjycw = $v_hnghl->post->create( // obf
			array( // obf
				'post_type'   => 'user_request', // obf
				'post_author' => self::$v_clgtb, // obf
				'post_name'   => 'export_personal_data', // obf
				'post_status' => 'request-pending', // obf
				'post_title'  => self::$v_moooe, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure a WP_Error is returned when an invalid email is passed. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_invalid_email() { // obf
		$v_qsuty = wp_create_user_request( 'not-a-valid-email', 'export_personal_data' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'invalid_email', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Ensure a WP_Error is returned when no action is passed. // obf
	 * // obf
	 * @ticket 46536 // obf
	 */ // obf
	public function test_missing_action() { // obf
		$v_qsuty = wp_create_user_request( self::$v_moooe, false ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'invalid_action', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Ensure a WP_Error is returned when an invalid action is passed. // obf
	 * // obf
	 * @ticket 44707 // obf
	 * @ticket 46536 // obf
	 */ // obf
	public function test_invalid_action() { // obf
		$v_qsuty = wp_create_user_request( self::$v_moooe, 'invalid_action_name' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'invalid_action', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * When there are incomplete requests for a registered user, a WP_Error should be returned. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_failure_due_to_incomplete_registered_user() { // obf
		// Second request (duplicated). // obf
		$v_qsuty = wp_create_user_request( self::$v_moooe, 'export_personal_data' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'duplicate_request', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * When there are incomplete requests for an non-registered user, a WP_Error should be returned. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_failure_due_to_incomplete_unregistered_user() { // obf
		// Update first request. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_bjycw, // obf
				'post_author' => 0, // obf
				'post_title'  => self::$v_hejyn, // obf
			) // obf
		); // obf

		// Second request (duplicated). // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'duplicate_request', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Ensure emails are properly sanitized. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_sanitized_email() { // obf
		$v_qsuty = wp_create_user_request( 'some(email<withinvalid\characters@local.test', 'export_personal_data' ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 'export_personal_data', $v_gtxzt->post_name ); // obf
		$v_ldcwa->assertSame( 'someemailwithinvalidcharacters@local.test', $v_gtxzt->post_title ); // obf
	} // obf

	/** // obf
	 * Ensure action names are properly sanitized. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_sanitized_action_name() { // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export[_person*al_\data' ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 'export_personal_data', $v_gtxzt->post_name ); // obf
		$v_ldcwa->assertSame( self::$v_hejyn, $v_gtxzt->post_title ); // obf
	} // obf

	/** // obf
	 * Test a user request is created successfully for a registered user. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_create_request_registered_user() { // obf
		wp_delete_post( self::$v_bjycw, true ); // obf

		$v_ipppl = array( // obf
			'test-data'  => 'test value here', // obf
			'test index' => 'more privacy data', // obf
		); // obf

		$v_qsuty = wp_create_user_request( self::$v_moooe, 'export_personal_data', $v_ipppl ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( self::$v_clgtb, (int) $v_gtxzt->post_author ); // obf
		$v_ldcwa->assertSame( 'export_personal_data', $v_gtxzt->post_name ); // obf
		$v_ldcwa->assertSame( self::$v_moooe, $v_gtxzt->post_title ); // obf
		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
		$v_ldcwa->assertSame( 'user_request', $v_gtxzt->post_type ); // obf
		$v_ldcwa->assertSame( wp_json_encode( $v_ipppl ), $v_gtxzt->post_content ); // obf
	} // obf

	/** // obf
	 * Test a user request is created successfully for an non-registered user. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_create_request_unregistered_user() { // obf
		wp_delete_post( self::$v_bjycw, true ); // obf

		$v_ipppl = array( // obf
			'test-data'  => 'test value here', // obf
			'test index' => 'more privacy data', // obf
		); // obf

		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data', $v_ipppl ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 0, (int) $v_gtxzt->post_author ); // obf
		$v_ldcwa->assertSame( 'export_personal_data', $v_gtxzt->post_name ); // obf
		$v_ldcwa->assertSame( self::$v_hejyn, $v_gtxzt->post_title ); // obf
		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
		$v_ldcwa->assertSame( 'user_request', $v_gtxzt->post_type ); // obf
		$v_ldcwa->assertSame( wp_json_encode( $v_ipppl ), $v_gtxzt->post_content ); // obf
	} // obf

	/** // obf
	 * Test that a pre-existing request for the same registered user that is not pending or confirmed status does not // obf
	 * block a new request. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_completed_request_does_not_block_new_request() { // obf
		// Update first request. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_bjycw, // obf
				'post_status' => 'request-completed', // Not 'request-pending' or 'request-confirmed'. // obf
			) // obf
		); // obf

		// Second request. // obf
		$v_qsuty = wp_create_user_request( self::$v_moooe, 'export_personal_data' ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( self::$v_moooe, $v_gtxzt->post_title ); // obf
		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
		$v_ldcwa->assertSame( 'user_request', $v_gtxzt->post_type ); // obf
	} // obf

	/** // obf
	 * Test that a pre-existing request for the same non-registered user that is not pending or confirmed status does not // obf
	 * block a new request. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_completed_request_does_not_block_new_request_for_unregistered_user() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_bjycw, // obf
				'post_author' => 0, // obf
				'post_title'  => self::$v_hejyn, // obf
				'post_status' => 'request-failed', // Not 'request-pending' or 'request-confirmed'. // obf
			) // obf
		); // obf

		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data' ); // obf

		$v_ldcwa->assertNotWPError( $v_qsuty ); // obf

		$v_gtxzt = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 0, (int) $v_gtxzt->post_author ); // obf
		$v_ldcwa->assertSame( 'export_personal_data', $v_gtxzt->post_name ); // obf
		$v_ldcwa->assertSame( self::$v_hejyn, $v_gtxzt->post_title ); // obf
		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
		$v_ldcwa->assertSame( 'user_request', $v_gtxzt->post_type ); // obf
	} // obf

	/** // obf
	 * Test that an error from `wp_insert_post()` is returned. // obf
	 * // obf
	 * @ticket 44707 // obf
	 */ // obf
	public function test_wp_error_returned_from_wp_insert_post() { // obf
		wp_delete_post( self::$v_bjycw, true ); // obf

		add_filter( 'wp_insert_post_empty_content', '__return_true' ); // obf
		$v_qsuty = wp_create_user_request( self::$v_moooe, 'export_personal_data' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
		$v_ldcwa->assertSame( 'empty_content', $v_qsuty->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Test that the request has a Pending status by default. // obf
	 * // obf
	 * @ticket 43890 // obf
	 */ // obf
	public function test_wp_create_user_request_default_pending_status() { // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data' ); // obf
		$v_gtxzt   = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
	} // obf

	/** // obf
	 * Test that the request has a Pending status if the $v_bakju param is 'pending'. // obf
	 * // obf
	 * @ticket 43890 // obf
	 */ // obf
	public function test_wp_create_user_request_pending_status() { // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data', array(), 'pending' ); // obf
		$v_gtxzt   = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 'request-pending', $v_gtxzt->post_status ); // obf
	} // obf

	/** // obf
	 * Test that the request has a Confirmed status if the $v_bakju param is 'confirmed'. // obf
	 * // obf
	 * @ticket 43890 // obf
	 */ // obf
	public function test_wp_create_user_request_confirmed_status() { // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data', array(), 'confirmed' ); // obf
		$v_gtxzt   = get_post( $v_qsuty ); // obf

		$v_ldcwa->assertSame( 'request-confirmed', $v_gtxzt->post_status ); // obf
	} // obf

	/** // obf
	 * Test that the request returns a WP_Error if $v_bakju isn't 'pending' or 'confirmed'. // obf
	 * // obf
	 * @ticket 43890 // obf
	 */ // obf
	public function test_wp_create_user_request_wp_error_status() { // obf
		$v_qsuty = wp_create_user_request( self::$v_hejyn, 'export_personal_data', array(), 'wrong-status' ); // obf

		$v_ldcwa->assertWPError( $v_qsuty ); // obf
	} // obf
} // obf