

<?php // obf
/** // obf
 * Test cases for the `wp_privacy_send_personal_data_export_email()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.6 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_privacy_send_personal_data_export_email // obf
 */ // obf
class Tests_Privacy_wpPrivacySendPersonalDataExportEmail extends WP_UnitTestCase { // obf
	/** // obf
	 * Request ID. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var int $v_xnpfn // obf
	 */ // obf
	protected static $v_xnpfn; // obf

	/** // obf
	 * Requester Email. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_tkocy // obf
	 */ // obf
	protected static $v_tkocy; // obf

	/** // obf
	 * Request user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var WP_User $v_hehbf // obf
	 */ // obf
	protected static $v_hehbf; // obf

	/** // obf
	 * Test administrator user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var WP_User $v_ezdtd // obf
	 */ // obf
	protected static $v_ezdtd; // obf

	/** // obf
	 * Create user request fixtures shared by test methods. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ywkxw Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ywkxw ) { // obf
		self::$v_tkocy = 'requester@example.com'; // obf
		self::$v_hehbf    = $v_ywkxw->user->create_and_get( // obf
			array( // obf
				'user_email' => self::$v_tkocy, // obf
				'role'       => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_ezdtd      = $v_ywkxw->user->create_and_get( // obf
			array( // obf
				'user_email' => 'admin@local.dev', // obf
				'role'       => 'administrator', // obf
			) // obf
		); // obf

		self::$v_xnpfn = wp_create_user_request( self::$v_tkocy, 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( self::$v_xnpfn ); // obf
	} // obf

	/** // obf
	 * Reset the mocked phpmailer instance before each test method. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	/** // obf
	 * Reset the mocked phpmailer instance after each test method. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function tear_down() { // obf
		reset_phpmailer_instance(); // obf
		restore_previous_locale(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * The function should error when the request ID does not exist. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_should_return_wp_error_when_not_a_valid_request_id() { // obf
		$v_xnpfn = 0; // obf
		$v_sbnbe = wp_privacy_send_personal_data_export_email( $v_xnpfn ); // obf
		$v_vxwfl->assertWPError( $v_sbnbe ); // obf
		$v_vxwfl->assertSame( 'invalid_request', $v_sbnbe->get_error_code() ); // obf

		$v_xnpfn = PHP_INT_MAX; // obf
		$v_sbnbe = wp_privacy_send_personal_data_export_email( $v_xnpfn ); // obf
		$v_vxwfl->assertWPError( $v_sbnbe ); // obf
		$v_vxwfl->assertSame( 'invalid_request', $v_sbnbe->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should error when the ID passed does not correspond to a user request. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @ticket 46560 // obf
	 */ // obf
	public function test_should_return_wp_error_when_not_a_user_request() { // obf
		$v_lnzqm = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // Should be 'user_request'. // obf
			) // obf
		); // obf

		$v_sbnbe = wp_privacy_send_personal_data_export_email( $v_lnzqm ); // obf
		$v_vxwfl->assertWPError( $v_sbnbe ); // obf
		$v_vxwfl->assertSame( 'invalid_request', $v_sbnbe->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should error when the email was not sent. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_should_return_wp_error_when_sending_fails() { // obf
		add_filter( 'wp_mail_from', '__return_empty_string' ); // Cause `wp_mail()` to return false. // obf
		$v_sbnbe = wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_vxwfl->assertWPError( $v_sbnbe ); // obf
		$v_vxwfl->assertSame( 'privacy_email_error', $v_sbnbe->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The function should send an export link to the requester when the user request is confirmed. // obf
	 */ // obf
	public function test_should_send_export_link_to_requester() { // obf
		$v_bmfzz      = wp_privacy_exports_url(); // obf
		$v_qbamk = 'wp-personal-data-file-Wv0RfMnGIkl4CFEDEEkSeIdfLmaUrLsl.zip'; // obf
		$v_mxsyn  = $v_bmfzz . $v_qbamk; // obf
		update_post_meta( self::$v_xnpfn, '_export_file_name', $v_qbamk ); // obf

		$v_sbnbe = wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf
		$v_wkuvj     = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertSame( 'request-confirmed', get_post_status( self::$v_xnpfn ) ); // obf
		$v_vxwfl->assertSame( self::$v_tkocy, $v_wkuvj->get_recipient( 'to' )->address ); // obf
		$v_vxwfl->assertStringContainsString( 'Personal Data Export', $v_wkuvj->get_sent()->subject ); // obf
		$v_vxwfl->assertStringContainsString( $v_mxsyn, $v_wkuvj->get_sent()->body ); // obf
		$v_vxwfl->assertStringContainsString( 'please download it', $v_wkuvj->get_sent()->body ); // obf
		$v_vxwfl->assertTrue( $v_sbnbe ); // obf
	} // obf

	/** // obf
	 * The export expiration should be filterable. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_export_expiration_should_be_filterable() { // obf
		add_filter( 'wp_privacy_export_expiration', array( $v_vxwfl, 'modify_export_expiration' ) ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf
		$v_vxwfl->assertStringContainsString( 'we will automatically delete the file on December 18, 2017,', $v_wkuvj->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the lifetime, in seconds, of a personal data export file. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param int $v_jnpow The expiration age of the export, in seconds. // obf
	 * @return int The expiration age of the export, in seconds. // obf
	 */ // obf
	public function modify_export_expiration( $v_jnpow ) { // obf
		// Set date to always be "Mon, 18 Dec 2017 21:30:00 GMT", so can assert a fixed date. // obf
		return 1513632600 - time(); // obf
	} // obf

	/** // obf
	 * The email address of the recipient of the personal data export notification should be filterable. // obf
	 * // obf
	 * @ticket 46303 // obf
	 */ // obf
	public function test_email_address_of_recipient_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_email_to', array( $v_vxwfl, 'filter_email_address' ) ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertSame( 'modified-' . self::$v_tkocy, $v_wkuvj->get_recipient( 'to' )->address ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email address of the recipient of the personal data export notification. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param  string $v_gjhgw The email address of the notification recipient. // obf
	 * @return string The modified email address of the notification recipient. // obf
	 */ // obf
	public function filter_email_address( $v_gjhgw ) { // obf
		return 'modified-' . $v_gjhgw; // obf
	} // obf

	/** // obf
	 * The email subject of the personal data export notification should be filterable. // obf
	 * // obf
	 * @ticket 46303 // obf
	 */ // obf
	public function test_email_subject_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_email_subject', array( $v_vxwfl, 'filter_email_subject' ) ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertSame( 'Modified subject', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email subject of the data erasure fulfillment notification. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_zvjyy The email subject. // obf
	 * @return string The email subject. // obf
	 */ // obf
	public function filter_email_subject( $v_zvjyy ) { // obf
		return 'Modified subject'; // obf
	} // obf

	/** // obf
	 * The email content should be filterable. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_email_content_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_email_content', array( $v_vxwfl, 'modify_email_content' ), 10, 2 ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf
		$v_vxwfl->assertStringContainsString( 'Custom content for request ID: ' . self::$v_xnpfn, $v_wkuvj->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the text of the email sent with a personal data export file. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param string $v_ktmyj Text in the email. // obf
	 * @param int    $v_xnpfn The request ID for this personal data export. // obf
	 * @return string Text in the email. // obf
	 */ // obf
	public function modify_email_content( $v_ktmyj, $v_xnpfn ) { // obf
		return 'Custom content for request ID: ' . $v_xnpfn; // obf
	} // obf

	/** // obf
	 * The email headers should be filterable. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 44501 // obf
	 */ // obf
	public function test_email_headers_should_be_filterable() { // obf
		add_filter( 'wp_privacy_personal_data_email_headers', array( $v_vxwfl, 'modify_email_headers' ) ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'From: Tester <tester@example.com>', $v_wkuvj->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * Filter callback to modify the headers of the email sent with a personal data export file. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param string|array $v_kvjes The email headers. // obf
	 * @return array The new email headers. // obf
	 */ // obf
	public function modify_email_headers( $v_kvjes ) { // obf
		$v_kvjes = array( // obf
			'From: Tester <tester@example.com>', // obf
		); // obf

		return $v_kvjes; // obf
	} // obf

	/** // obf
	 * The email content should be filterable using the $v_jques // obf
	 * // obf
	 * @ticket 46303 // obf
	 */ // obf
	public function test_email_content_should_be_filterable_using_email_data() { // obf
		add_filter( 'wp_privacy_personal_data_email_content', array( $v_vxwfl, 'modify_email_content_with_email_data' ), 10, 3 ); // obf
		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_xaxjd = home_url(); // obf
		$v_wkuvj   = tests_retrieve_phpmailer_instance(); // obf
		$v_vxwfl->assertStringContainsString( 'Custom content using the $v_xaxjd of $v_jques: ' . $v_xaxjd, $v_wkuvj->get_sent()->body ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the text of the email by using the $v_jques sent with a personal data export file. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_ktmyj Text in the email. // obf
	 * @param int    $v_xnpfn The request ID for this personal data export. // obf
	 * @param array  $v_jques { // obf
	 *     Data relating to the account action email. // obf
	 * // obf
	 *     @type WP_User_Request $v_fhjfl           User request object. // obf
	 *     @type int             $v_jnpow        The time in seconds until the export file expires. // obf
	 *     @type string          $v_nkuoa   The localized date and time when the export file expires. // obf
	 *     @type string          $v_qfarw The address that the email will be sent to. Defaults // obf
	 *                                              to the value of `$v_fhjfl->email`, but can be changed // obf
	 *                                              by the `wp_privacy_personal_data_email_to` filter. // obf
	 *     @type string          $v_mxsyn   The export file URL. // obf
	 *     @type string          $v_lzyqa          The site name sending the mail. // obf
	 *     @type string          $v_hlnic           The site URL sending the mail. // obf
	 * } // obf
	 * // obf
	 * @return string Text in the email. // obf
	 */ // obf
	public function modify_email_content_with_email_data( $v_ktmyj, $v_xnpfn, $v_jques ) { // obf
		return 'Custom content using the $v_xaxjd of $v_jques: ' . $v_jques['siteurl']; // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site uses the default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_user_locale() { // obf
		update_user_meta( self::$v_hehbf->ID, 'locale', 'es_ES' ); // obf

		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Exportación de datos personales', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site does not use en_US, the administrator // obf
	 * uses the site's default locale, and the user has a different locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_user_locale_when_site_is_not_en_us() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_hehbf->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ezdtd->ID ); // obf

		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Export personenbezogener Daten', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US, the administrator // obf
	 * has a different selected locale, and the user uses the site's default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_user_locale_when_admin_and_site_have_different_locales() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ezdtd->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ezdtd->ID ); // obf

		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Exportación de datos personales', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US and both the // obf
	 * administrator and the user use different locales. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_user_locale_when_both_have_different_locales_than_site() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ezdtd->ID, 'locale', 'en_US' ); // obf
		update_user_meta( self::$v_hehbf->ID, 'locale', 'de_DE' ); // obf

		wp_set_current_user( self::$v_ezdtd->ID ); // obf

		wp_privacy_send_personal_data_export_email( self::$v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Export personenbezogener Daten', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when the request is for an unregistered user and the // obf
	 * administrator does not use the site's locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_site_locale() { // obf
		update_user_meta( self::$v_ezdtd->ID, 'locale', 'es_ES' ); // obf
		wp_set_current_user( self::$v_ezdtd->ID ); // obf

		$v_xnpfn = wp_create_user_request( 'export-user-not-registered@example.com', 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( self::$v_xnpfn ); // obf
		wp_privacy_send_personal_data_export_email( $v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Personal Data Export', $v_wkuvj->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when it is not en_US, the request is for an // obf
	 * unregistered user, and the administrator does not use the site's default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 46056 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_personal_data_export_email_in_site_locale_when_not_en_us_and_admin_has_different_locale() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ezdtd->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ezdtd->ID ); // obf

		$v_xnpfn = wp_create_user_request( 'export-user-not-registered@example.com', 'export_personal_data' ); // obf

		_wp_privacy_account_request_confirmed( self::$v_xnpfn ); // obf
		wp_privacy_send_personal_data_export_email( $v_xnpfn ); // obf

		$v_wkuvj = tests_retrieve_phpmailer_instance(); // obf

		$v_vxwfl->assertStringContainsString( 'Exportación de datos personales', $v_wkuvj->get_sent()->subject ); // obf
	} // obf
} // obf