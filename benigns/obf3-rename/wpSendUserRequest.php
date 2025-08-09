

<?php // obf
/** // obf
 * Test cases for the `wp_send_user_request()` function. // obf
 * // obf
 * @package WordPress // obf
 * @since 4.9.9 // obf
 * // obf
 * @group privacy // obf
 * @group user // obf
 * @covers ::wp_send_user_request // obf
 */ // obf
class Tests_User_wpSendUserRequest extends WP_UnitTestCase { // obf

	/** // obf
	 * Test administrator user. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @var WP_User $v_rixsh // obf
	 */ // obf
	protected static $v_rixsh; // obf

	/** // obf
	 * Test subscriber user. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @var WP_User $v_sohkd // obf
	 */ // obf
	protected static $v_sohkd; // obf

	/** // obf
	 * Create users for tests. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_blqxd Test fixture factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_blqxd ) { // obf
		self::$v_rixsh = $v_blqxd->user->create_and_get( // obf
			array( // obf
				'user_email' => 'admin@local.dev', // obf
				'role'       => 'administrator', // obf
			) // obf
		); // obf

		self::$v_sohkd = $v_blqxd->user->create_and_get( // obf
			array( // obf
				'user_email' => 'export-user@local.dev', // obf
				'role'       => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Reset the mocked phpmailer instance before each test method. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		set_current_screen( 'dashboard' ); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	/** // obf
	 * Reset the mocked phpmailer instance after each test method. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 */ // obf
	public function tear_down() { // obf
		reset_phpmailer_instance(); // obf

		unset( $v_atfij['locale'] ); // obf

		restore_previous_locale(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * The function should error when the request ID is invalid. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_should_error_when_invalid_request_id() { // obf
		$v_ntoos = wp_send_user_request( null ); // obf

		$v_mggjf->assertWPError( $v_ntoos ); // obf
		$v_mggjf->assertSame( 'invalid_request', $v_ntoos->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should send a user request export email when the requester is a registered user. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_should_send_user_request_export_email_when_requester_registered_user() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'export_personal_data' ); // obf

		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertSame( self::$v_sohkd->user_email, $v_kccjk->get_recipient( 'to' )->address ); // obf
		$v_mggjf->assertStringContainsString( 'Confirm Action: Export Personal Data', $v_kccjk->get_sent()->subject ); // obf
		$v_mggjf->assertStringContainsString( 'action=confirmaction&request_id=', $v_kccjk->get_sent()->body ); // obf
		$v_mggjf->assertStringContainsString( 'Export Personal Data', $v_kccjk->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * The function should send a user request erase email when the requester is a registered user. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_should_send_user_request_erase_email_when_requester_registered_user() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertSame( self::$v_sohkd->user_email, $v_kccjk->get_recipient( 'to' )->address ); // obf
		$v_mggjf->assertStringContainsString( 'Confirm Action: Erase Personal Data', $v_kccjk->get_sent()->subject ); // obf
		$v_mggjf->assertStringContainsString( 'action=confirmaction&request_id=', $v_kccjk->get_sent()->body ); // obf
		$v_mggjf->assertStringContainsString( 'Erase Personal Data', $v_kccjk->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * The function should send a user request export email when the requester is an un-registered user. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_should_send_user_request_export_email_when_user_not_registered() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'export_personal_data' ); // obf

		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertSame( self::$v_sohkd->user_email, $v_kccjk->get_recipient( 'to' )->address ); // obf
		$v_mggjf->assertStringContainsString( 'Confirm Action: Export Personal Data', $v_kccjk->get_sent()->subject ); // obf
		$v_mggjf->assertStringContainsString( 'action=confirmaction&request_id=', $v_kccjk->get_sent()->body ); // obf
		$v_mggjf->assertStringContainsString( 'Export Personal Data', $v_kccjk->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * The function should send a user request erase email when the requester is an un-registered user. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_should_send_user_request_erase_email_when_user_not_registered() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertSame( self::$v_sohkd->user_email, $v_kccjk->get_recipient( 'to' )->address ); // obf
		$v_mggjf->assertStringContainsString( 'Confirm Action: Erase Personal Data', $v_kccjk->get_sent()->subject ); // obf
		$v_mggjf->assertStringContainsString( 'action=confirmaction&request_id=', $v_kccjk->get_sent()->body ); // obf
		$v_mggjf->assertStringContainsString( 'Erase Personal Data', $v_kccjk->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * The email subject should be filterable. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_email_subject_should_be_filterable() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		add_filter( 'user_request_action_email_subject', array( $v_mggjf, 'modify_email_subject' ) ); // obf
		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertSame( 'Custom Email Subject', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * Filter callback to modify the subject of the email sent when an account action is attempted. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @param string $v_euzws The email subject. // obf
	 * @return string Filtered email subject. // obf
	 */ // obf
	public function modify_email_subject( $v_euzws ) { // obf
		return 'Custom Email Subject'; // obf
	} // obf

	/** // obf
	 * The email content should be filterable. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_email_content_should_be_filterable() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		add_filter( 'user_request_action_email_content', array( $v_mggjf, 'modify_email_content' ), 10, 2 ); // obf
		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertTrue( $v_ntoos ); // obf
		$v_mggjf->assertStringContainsString( 'Custom Email Content.', $v_kccjk->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * Filter callback to modify the content of the email sent when an account action is attempted. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @param string $v_yatmj Confirmation email text. // obf
	 * @return string Filtered email text. // obf
	 */ // obf
	public function modify_email_content( $v_yatmj ) { // obf
		return 'Custom Email Content.'; // obf
	} // obf

	/** // obf
	 * The email headers should be filterable. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 44501 // obf
	 */ // obf
	public function test_email_headers_should_be_filterable() { // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		add_filter( 'user_request_action_email_headers', array( $v_mggjf, 'modify_email_headers' ) ); // obf
		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf

		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'From: Tester <tester@example.com>', $v_kccjk->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * Filter callback to modify the headers of the email sent when an account action is attempted. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param string|array $v_ntuir The email headers. // obf
	 * @return array The new email headers. // obf
	 */ // obf
	public function modify_email_headers( $v_ntuir ) { // obf
		$v_ntuir = array( // obf
			'From: Tester <tester@example.com>', // obf
		); // obf

		return $v_ntuir; // obf
	} // obf

	/** // obf
	 * The function should error when the email was not sent. // obf
	 * // obf
	 * @ticket 43985 // obf
	 */ // obf
	public function test_return_wp_error_when_sending_fails() { // obf
		$v_hpmku = wp_create_user_request( 'erase.request.from.unregistered.user@example.com', 'remove_personal_data' ); // obf

		add_filter( 'wp_mail_from', '__return_empty_string' ); // Cause `wp_mail()` to return false. // obf
		$v_ntoos = wp_send_user_request( $v_hpmku ); // obf

		$v_mggjf->assertWPError( $v_ntoos ); // obf
		$v_mggjf->assertSame( 'privacy_email_error', $v_ntoos->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site uses the default locale. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_user_locale() { // obf
		update_user_meta( self::$v_sohkd->ID, 'locale', 'es_ES' ); // obf

		wp_set_current_user( self::$v_rixsh->ID ); // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'export_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Confirmar la', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site does not use en_US, the administrator // obf
	 * uses the site's default locale, and the user has a different locale. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_user_locale_when_site_is_not_en_us() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_sohkd->ID, 'locale', 'de_DE' ); // obf

		wp_set_current_user( self::$v_rixsh->ID ); // obf
		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'remove_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Aktion bestätigen', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US, the administrator // obf
	 * has a different selected locale, and the user uses the site's default locale. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_user_locale_when_admin_and_site_have_different_locales() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_rixsh->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_rixsh->ID ); // obf

		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'export_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Confirmar la', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US and both the // obf
	 * administrator and the user use different locales. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_user_locale_when_both_have_different_locales_than_site() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_rixsh->ID, 'locale', 'de_DE' ); // obf
		update_user_meta( self::$v_sohkd->ID, 'locale', 'en_US' ); // obf

		wp_set_current_user( self::$v_rixsh->ID ); // obf

		$v_hpmku = wp_create_user_request( self::$v_sohkd->user_email, 'export_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Confirm Action', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when the request is for an unregistered user and the // obf
	 * administrator does not use the site's locale. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_site_locale() { // obf
		update_user_meta( self::$v_rixsh->ID, 'locale', 'es_ES' ); // obf
		wp_set_current_user( self::$v_rixsh->ID ); // obf

		$v_hpmku = wp_create_user_request( 'erase-user-not-registered@example.com', 'remove_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Confirm Action', $v_kccjk->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when it is not en_US, the request is for an // obf
	 * unregistered user, and the administrator does not use the site's default locale. // obf
	 * // obf
	 * @ticket 43985 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_user_request_email_in_site_locale_when_not_en_us_and_admin_has_different_locale() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_rixsh->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_rixsh->ID ); // obf

		$v_hpmku = wp_create_user_request( 'export-user-not-registered@example.com', 'remove_personal_data' ); // obf

		wp_send_user_request( $v_hpmku ); // obf
		$v_kccjk = tests_retrieve_phpmailer_instance(); // obf

		$v_mggjf->assertStringContainsString( 'Confirmar la', $v_kccjk->get_sent()->subject ); // obf
	} // obf
} // obf