

<?php // obf
/** // obf
 * Test cases for the `_wp_privacy_send_request_confirmation_notification()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.8 // obf
 * // obf
 * @group privacy // obf
 * @group user // obf
 * @covers ::_wp_privacy_send_request_confirmation_notification // obf
 */ // obf
class Tests_Privacy_wpPrivacySendRequestConfirmationNotification extends WP_UnitTestCase { // obf
	/** // obf
	 * Reset the mocked PHPMailer instance before each test method. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	/** // obf
	 * Reset the mocked PHPMailer instance after each test method. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 */ // obf
	public function tear_down() { // obf
		reset_phpmailer_instance(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * The function should not send an email when the request ID does not exist. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_should_not_send_email_when_not_a_valid_request_id() { // obf
		_wp_privacy_send_request_confirmation_notification( 1234567890 ); // obf
		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf

		$v_gcaaq->assertEmpty( $v_pejzx->mock_sent ); // obf
	} // obf

	/** // obf
	 * The function should not send an email when the ID passed does not correspond to a user request. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_should_not_send_email_when_not_a_user_request() { // obf
		$v_ocqyx = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // Should be 'user_request'. // obf
			) // obf
		); // obf

		_wp_privacy_send_request_confirmation_notification( $v_ocqyx ); // obf
		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf

		$v_gcaaq->assertEmpty( $v_pejzx->mock_sent ); // obf
	} // obf

	/** // obf
	 * The function should send an email to the site admin when a user request is confirmed. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_should_send_email_to_site_admin_when_user_request_confirmed() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( $v_yblnd ); // obf

		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf

		$v_gcaaq->assertSame( 'request-confirmed', get_post_status( $v_yblnd ) ); // obf
		$v_gcaaq->assertTrue( (bool) get_post_meta( $v_yblnd, '_wp_user_request_confirmed_timestamp', true ) ); // obf
		$v_gcaaq->assertTrue( (bool) get_post_meta( $v_yblnd, '_wp_admin_notified', true ) ); // obf
		$v_gcaaq->assertSame( get_site_option( 'admin_email' ), $v_pejzx->get_recipient( 'to' )->address ); // obf
		$v_gcaaq->assertStringContainsString( 'Action Confirmed', $v_pejzx->get_sent()->subject ); // obf
		$v_gcaaq->assertStringContainsString( 'Request: Export Personal Data', $v_pejzx->get_sent()->body ); // obf
		$v_gcaaq->assertStringContainsString( 'A user data privacy request has been confirmed', $v_pejzx->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * The function should only send an email to the site admin when a user request is confirmed. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_should_only_send_email_to_site_admin_when_user_request_is_confirmed() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf

		// Non-confirmed request. // obf
		$v_gcaaq->assertSame( 'request-pending', get_post_status( $v_yblnd ) ); // obf

		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf
		// Email not sent. // obf
		$v_gcaaq->assertEmpty( $v_pejzx->mock_sent ); // obf
		$v_gcaaq->assertEmpty( get_post_meta( $v_yblnd, '_wp_admin_notified', true ) ); // obf
	} // obf

	/** // obf
	 * The function should only send an email once to the site admin when a user request is confirmed. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_should_only_send_email_once_to_admin_when_user_request_is_confirmed() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( $v_yblnd ); // obf

		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		$v_qorkl = tests_retrieve_phpmailer_instance(); // obf
		reset_phpmailer_instance(); // obf
		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		$v_mgmyt = tests_retrieve_phpmailer_instance(); // obf

		$v_gcaaq->assertSame( 'request-confirmed', get_post_status( $v_yblnd ) ); // obf
		// First email sent. // obf
		$v_gcaaq->assertNotEmpty( $v_qorkl->mock_sent ); // obf
		// Second email not sent. // obf
		$v_gcaaq->assertEmpty( $v_mgmyt->mock_sent ); // obf
	} // obf

	/** // obf
	 * The email address should be filterable. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_email_address_should_be_filterable() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( $v_yblnd ); // obf

		add_filter( 'user_request_confirmed_email_to', array( $v_gcaaq, 'modify_email_address' ), 10, 2 ); // obf
		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		remove_all_filters( 'user_request_confirmed_email_to' ); // obf

		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf
		$v_gcaaq->assertSame( $v_iajpi, $v_pejzx->get_recipient( 'to' )->address ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the recipient of the user request confirmation notification. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param string          $v_shavs The email address of the notification recipient. // obf
	 * @param WP_User_Request $v_vknwc     The request that is initiating the notification. // obf
	 * @return string Admin email address. // obf
	 */ // obf
	public function modify_email_address( $v_shavs, $v_vknwc ) { // obf
		$v_shavs = $v_vknwc->email; // obf
		return $v_shavs; // obf
	} // obf

	/** // obf
	 * The email content should be filterable. // obf
	 * // obf
	 * @ticket 43967 // obf
	 */ // obf
	public function test_email_content_should_be_filterable() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( $v_yblnd ); // obf

		add_filter( 'user_request_confirmed_email_content', array( $v_gcaaq, 'modify_email_content' ), 10, 2 ); // obf
		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		remove_filter( 'user_request_confirmed_email_content', array( $v_gcaaq, 'modify_email_content' ), 10 ); // obf

		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf
		$v_gcaaq->assertStringContainsString( 'Custom content containing email address:' . $v_iajpi, $v_pejzx->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the body of the user request confirmation email. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param string $v_bmzvb Email text. // obf
	 * @param array  $v_htzvs { // obf
	 *     Data relating to the account action email. // obf
	 * // obf
	 *     @type WP_User_Request $v_vknwc     User request object. // obf
	 *     @type string          $v_mtsxq  The email address confirming a request // obf
	 *     @type string          $v_hwsua Description of the action being performed so the user knows what the email is for. // obf
	 *     @type string          $v_wkzef  The link to click manage privacy requests of this type. // obf
	 *     @type string          $v_baujr    The site name sending the mail. // obf
	 *     @type string          $v_nwjya     The site URL sending the mail. // obf
	 * } // obf
	 * @return string Email text. // obf
	 */ // obf
	public function modify_email_content( $v_bmzvb, $v_htzvs ) { // obf
		$v_bmzvb = 'Custom content containing email address:' . $v_htzvs['user_email']; // obf
		return $v_bmzvb; // obf
	} // obf

	/** // obf
	 * The email headers should be filterable. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 44501 // obf
	 */ // obf
	public function test_email_headers_should_be_filterable() { // obf
		$v_iajpi      = 'export.request.from.unregistered.user@example.com'; // obf
		$v_yblnd = wp_create_user_request( $v_iajpi, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( $v_yblnd ); // obf

		add_filter( 'user_request_confirmed_email_headers', array( $v_gcaaq, 'modify_email_headers' ) ); // obf
		_wp_privacy_send_request_confirmation_notification( $v_yblnd ); // obf
		remove_filter( 'user_request_confirmed_email_headers', array( $v_gcaaq, 'modify_email_headers' ) ); // obf

		$v_pejzx = tests_retrieve_phpmailer_instance(); // obf

		$v_gcaaq->assertStringContainsString( 'From: Tester <tester@example.com>', $v_pejzx->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the headers of the user request confirmation email. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param string|array $v_riqxo The email headers. // obf
	 * @return array The new email headers. // obf
	 */ // obf
	public function modify_email_headers( $v_riqxo ) { // obf
		$v_riqxo = array( // obf
			'From: Tester <tester@example.com>', // obf
		); // obf

		return $v_riqxo; // obf
	} // obf
} // obf