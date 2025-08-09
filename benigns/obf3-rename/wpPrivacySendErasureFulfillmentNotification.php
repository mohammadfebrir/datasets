

<?php // obf
/** // obf
 * Test cases for the `_wp_privacy_send_erasure_fulfillment_notification()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.1.0 // obf
 * // obf
 * @group privacy // obf
 * @covers ::_wp_privacy_send_erasure_fulfillment_notification // obf
 */ // obf
class Tests_Privacy_wpPrivacySendErasureFulfillmentNotification extends WP_UnitTestCase { // obf
	/** // obf
	 * Request ID. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @var int $v_pyalj // obf
	 */ // obf
	protected static $v_pyalj; // obf

	/** // obf
	 * Requester Email. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @var string $v_vrirl // obf
	 */ // obf
	protected static $v_vrirl; // obf

	/** // obf
	 * Request user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var WP_User $v_ehfcr // obf
	 */ // obf
	protected static $v_ehfcr; // obf

	/** // obf
	 * Test administrator user. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var WP_User $v_ramzq // obf
	 */ // obf
	protected static $v_ramzq; // obf

	/** // obf
	 * Create user request fixtures shared by test methods. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_angtk Factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_angtk ) { // obf
		self::$v_vrirl = 'erase-my-data@local.test'; // obf
		self::$v_ehfcr    = $v_angtk->user->create_and_get( // obf
			array( // obf
				'user_email' => self::$v_vrirl, // obf
				'role'       => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_ramzq      = $v_angtk->user->create_and_get( // obf
			array( // obf
				'user_email' => 'admin@local.dev', // obf
				'role'       => 'administrator', // obf
			) // obf
		); // obf

		self::$v_pyalj = wp_create_user_request( self::$v_vrirl, 'remove_personal_data' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_pyalj, // obf
				'post_status' => 'request-completed', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Reset the mocked PHPMailer instance before each test method. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	/** // obf
	 * Reset the mocked PHPMailer instance after each test method. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 */ // obf
	public function tear_down() { // obf
		reset_phpmailer_instance(); // obf
		restore_previous_locale(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * The function should not send an email when the request ID does not exist. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_not_send_email_when_not_a_valid_request_id() { // obf
		_wp_privacy_send_erasure_fulfillment_notification( 1234567890 ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertEmpty( $v_zxjlf->mock_sent ); // obf
	} // obf

	/** // obf
	 * The function should not send an email when the ID passed does not correspond to a user request. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_not_send_email_when_not_a_user_request() { // obf
		$v_npafv = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'post', // Should be 'user_request'. // obf
			) // obf
		); // obf

		_wp_privacy_send_erasure_fulfillment_notification( $v_npafv ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertEmpty( $v_zxjlf->mock_sent ); // obf
	} // obf

	/** // obf
	 * The function should not send an email when the request is not completed. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_not_send_email_when_request_not_completed() { // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_pyalj, // obf
				'post_status' => 'request-confirmed', // Should be 'request-completed'. // obf
			) // obf
		); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertEmpty( $v_zxjlf->mock_sent ); // obf
		$v_aokno->assertFalse( metadata_exists( 'post', self::$v_pyalj, '_wp_user_notified' ) ); // obf
	} // obf

	/** // obf
	 * The function should send an email when a valid request ID is passed. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_send_email_no_privacy_policy() { // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf
		$v_aokno->assertStringContainsString( self::$v_vrirl, $v_zxjlf->get_recipient( 'to' )->address ); // obf
		$v_aokno->assertStringContainsString( 'Erasure Request Fulfilled', $v_zxjlf->get_sent()->subject ); // obf
		$v_aokno->assertStringContainsString( 'Your request to erase your personal data', $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertStringContainsString( 'has been completed.', $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertStringContainsString( wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES ), $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertStringContainsString( home_url(), $v_zxjlf->get_sent()->body ); // obf

		$v_aokno->assertStringNotContainsString( 'you can also read our privacy policy', $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertTrue( (bool) get_post_meta( self::$v_pyalj, '_wp_user_notified', true ) ); // obf
	} // obf

	/** // obf
	 * The email should include a link to the site's privacy policy when set. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_send_email_with_privacy_policy() { // obf
		$v_zwqib = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'title'       => 'Site Privacy Policy', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		update_option( 'wp_page_for_privacy_policy', $v_zwqib ); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( self::$v_vrirl, $v_zxjlf->get_recipient( 'to' )->address ); // obf
		$v_aokno->assertStringContainsString( 'you can also read our privacy policy', $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertStringContainsString( get_privacy_policy_url(), $v_zxjlf->get_sent()->body ); // obf
		$v_aokno->assertTrue( (bool) get_post_meta( self::$v_pyalj, '_wp_user_notified', true ) ); // obf
	} // obf

	/** // obf
	 * The function should send a fulfillment email only once. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_should_send_email_only_once() { // obf
		// First function call. // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		// Should send an email. // obf
		$v_aokno->assertStringContainsString( self::$v_vrirl, $v_zxjlf->get_recipient( 'to' )->address ); // obf
		$v_aokno->assertStringContainsString( 'Erasure Request Fulfilled', $v_zxjlf->get_sent()->subject ); // obf
		$v_aokno->assertTrue( (bool) get_post_meta( self::$v_pyalj, '_wp_user_notified', true ) ); // obf

		reset_phpmailer_instance(); // obf

		// Second function call. // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		// Should not send an email. // obf
		$v_aokno->assertEmpty( $v_zxjlf->mock_sent ); // obf
		$v_aokno->assertTrue( metadata_exists( 'post', self::$v_pyalj, '_wp_user_notified' ) ); // obf
	} // obf

	/** // obf
	 * The email address of the recipient of the fulfillment notification should be filterable. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_email_address_of_recipient_should_be_filterable() { // obf
		add_filter( 'user_erasure_fulfillment_email_to', array( $v_aokno, 'filter_email_address' ) ); // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertSame( 'modified-' . self::$v_vrirl, $v_zxjlf->get_recipient( 'to' )->address ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email address of the recipient of the fulfillment notification. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_nyxyd The email address of the notification recipient. // obf
	 * @return string The email address of the notification recipient. // obf
	 */ // obf
	public function filter_email_address( $v_nyxyd ) { // obf
		return 'modified-' . $v_nyxyd; // obf
	} // obf

	/** // obf
	 * The email subject of the fulfillment notification should be filterable. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_email_subject_should_be_filterable() { // obf
		add_filter( 'user_erasure_fulfillment_email_subject', array( $v_aokno, 'filter_email_subject' ) ); // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertSame( 'Modified subject', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email subject of the data erasure fulfillment notification. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_eouek The email subject. // obf
	 * @return string The email subject. // obf
	 */ // obf
	public function filter_email_subject( $v_eouek ) { // obf
		return 'Modified subject'; // obf
	} // obf

	/** // obf
	 * The email body text of the fulfillment notification should be filterable. // obf
	 * // obf
	 * @ticket 44234 // obf
	 */ // obf
	public function test_email_body_text_should_be_filterable() { // obf
		add_filter( 'user_erasure_fulfillment_email_content', array( $v_aokno, 'filter_email_body_text' ) ); // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertSame( 'Modified text', trim( $v_zxjlf->get_sent()->body ) ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email body text of the data erasure fulfillment notification. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_tffpa Text in the email. // obf
	 * @return string Text in the email. // obf
	 */ // obf
	public function filter_email_body_text( $v_tffpa ) { // obf
		return 'Modified text'; // obf
	} // obf

	/** // obf
	 * The email headers of the fulfillment notification should be filterable. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @ticket 44501 // obf
	 */ // obf
	public function test_email_headers_should_be_filterable() { // obf
		add_filter( 'user_erasure_fulfillment_email_headers', array( $v_aokno, 'modify_email_headers' ) ); // obf
		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf

		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'From: Tester <tester@example.com>', $v_zxjlf->get_sent()->header ); // obf
	} // obf

	/** // obf
	 * Filter callback that modifies the email headers of the data erasure fulfillment notification. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * // obf
	 * @param string|array $v_bvjeo The email headers. // obf
	 * @return array The new email headers. // obf
	 */ // obf
	public function modify_email_headers( $v_bvjeo ) { // obf
		$v_bvjeo = array( // obf
			'From: Tester <tester@example.com>', // obf
		); // obf

		return $v_bvjeo; // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site uses the default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_user_locale() { // obf
		update_user_meta( self::$v_ehfcr->ID, 'locale', 'es_ES' ); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Solicitud de borrado completada', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site does not use en_US, the administrator // obf
	 * uses the site's default locale, and the user has a different locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_user_locale_when_site_is_not_en_us() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ehfcr->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ramzq->ID ); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Löschauftrag ausgeführt', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US, the administrator // obf
	 * has a different selected locale, and the user uses the site's default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_user_locale_when_admin_and_site_have_different_locales() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ramzq->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ramzq->ID ); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Solicitud de borrado completada', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the user locale settings when the site is not en_US and both the // obf
	 * administrator and the user use different locales. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_user_locale_when_both_have_different_locales_than_site() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ramzq->ID, 'locale', 'en_US' ); // obf
		update_user_meta( self::$v_ehfcr->ID, 'locale', 'de_DE' ); // obf

		wp_set_current_user( self::$v_ramzq->ID ); // obf

		_wp_privacy_send_erasure_fulfillment_notification( self::$v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Löschauftrag ausgeführt', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when the request is for an unregistered user and the // obf
	 * administrator does not use the site's locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_site_locale() { // obf
		update_user_meta( self::$v_ramzq->ID, 'locale', 'es_ES' ); // obf
		wp_set_current_user( self::$v_ramzq->ID ); // obf

		$v_pyalj = wp_create_user_request( 'erase-user-not-registered@example.com', 'remove_personal_data' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_pyalj, // obf
				'post_status' => 'request-completed', // obf
			) // obf
		); // obf

		_wp_privacy_send_erasure_fulfillment_notification( $v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Erasure Request Fulfilled', $v_zxjlf->get_sent()->subject ); // obf
	} // obf

	/** // obf
	 * The function should respect the site's locale when it is not en_US, the request is for an // obf
	 * unregistered user, and the administrator does not use the site's default locale. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @ticket 44721 // obf
	 * @group l10n // obf
	 */ // obf
	public function test_should_send_fulfillment_email_in_site_locale_when_not_en_us_and_admin_has_different_locale() { // obf
		update_option( 'WPLANG', 'es_ES' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		update_user_meta( self::$v_ramzq->ID, 'locale', 'de_DE' ); // obf
		wp_set_current_user( self::$v_ramzq->ID ); // obf

		$v_pyalj = wp_create_user_request( 'erase-user-not-registered@example.com', 'remove_personal_data' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_pyalj, // obf
				'post_status' => 'request-completed', // obf
			) // obf
		); // obf

		_wp_privacy_send_erasure_fulfillment_notification( $v_pyalj ); // obf
		$v_zxjlf = tests_retrieve_phpmailer_instance(); // obf

		$v_aokno->assertStringContainsString( 'Solicitud de borrado completada', $v_zxjlf->get_sent()->subject ); // obf
	} // obf
} // obf