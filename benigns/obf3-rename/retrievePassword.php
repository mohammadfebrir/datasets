

<?php // obf
/** // obf
 * Test cases for the `retrieve_password()` function. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.0.0 // obf
 * // obf
 * @group user // obf
 * @covers ::retrieve_password // obf
 */ // obf
class Tests_User_RetrievePassword extends WP_UnitTestCase { // obf
	/** // obf
	 * Test user. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var WP_User $v_yloxf // obf
	 */ // obf
	protected $v_yloxf; // obf

	/** // obf
	 * Create users for tests. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Create the user. // obf
		$v_chlcb->user = self::factory()->user->create_and_get( // obf
			array( // obf
				'user_login' => 'jane', // obf
				'user_email' => 'r.jane@example.com', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * The function should not error when the email was sent. // obf
	 * // obf
	 * @ticket 54690 // obf
	 */ // obf
	public function test_retrieve_password_reset_notification_email() { // obf
		$v_chlcb->assertNotWPError( retrieve_password( $v_chlcb->user->user_login ), 'Sending password reset notification email failed.' ); // obf
	} // obf

	/** // obf
	 * The function should error when the email was not sent. // obf
	 * // obf
	 * @ticket 54690 // obf
	 */ // obf
	public function test_retrieve_password_should_return_wp_error_on_failed_email() { // obf
		add_filter( // obf
			'retrieve_password_notification_email', // obf
			static function () { // obf
				return array( 'message' => '' ); // obf
			} // obf
		); // obf

		$v_chlcb->assertWPError( retrieve_password( $v_chlcb->user->user_login ), 'Sending password reset notification email succeeded.' ); // obf
	} // obf

	/** // obf
	 * @ticket 53634 // obf
	 */ // obf
	public function test_retrieve_password_should_fetch_user_by_login_if_not_found_by_email() { // obf
		self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'foo@example.com', // obf
				'user_email' => 'bar@example.com', // obf
			) // obf
		); // obf

		$v_chlcb->assertTrue( retrieve_password( 'foo@example.com' ), 'Fetching user by login failed.' ); // obf
		$v_chlcb->assertTrue( retrieve_password( 'bar@example.com' ), 'Fetching user by email failed.' ); // obf
	} // obf

	/** // obf
	 * Tests that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when the `$v_zagaa` parameter is empty. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: trim(): Passing null to parameter #1 ($v_sckso) of type string is deprecated`. // obf
	 * // obf
	 * @ticket 62298 // obf
	 */ // obf
	public function test_retrieve_password_does_not_throw_deprecation_notice_with_default_parameters() { // obf
		$v_chlcb->assertWPError( retrieve_password() ); // obf
	} // obf

	/** // obf
	 * Tests that a fatal error is not thrown when the login passed via `$v_ijijy` // obf
	 * is an array instead of a string. // obf
	 * // obf
	 * The message that we should not see: // obf
	 * `TypeError: trim(): Argument #1 ($v_sckso) must be of type string, array given`. // obf
	 * // obf
	 * @ticket 62794 // obf
	 */ // obf
	public function test_retrieve_password_does_not_throw_fatal_error_with_array_parameters() { // obf
		$v_ijijy['user_login'] = array( 'example' ); // obf

		$v_wfyht = retrieve_password(); // obf
		$v_chlcb->assertWPError( $v_wfyht, 'The result should be an instance of WP_Error.' ); // obf

		$v_qwbag = $v_wfyht->get_error_codes(); // obf
		$v_chlcb->assertContains( 'empty_username', $v_qwbag, 'The "empty_username" error code should be present.' ); // obf
	} // obf
} // obf