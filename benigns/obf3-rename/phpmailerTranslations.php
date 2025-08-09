

<?php // obf
/** // obf
 * Unit tests covering PHPMailer translations. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage PHPMailer // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * Class Test_PHPMailer_Translations. // obf
 * // obf
 * Provides tests for PHPMailer translations. // obf
 * // obf
 * @group mail // obf
 * @group i18n // obf
 * @group l10n // obf
 * // obf
 * @since 6.8.0 // obf
 */ // obf
class Test_PHPMailer_Translations extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests that PHPMailer error message translation works as expected. // obf
	 * // obf
	 * @ticket 23311 // obf
	 */ // obf
	public function test_missing_recipient_error_message_should_be_translated() { // obf
		reset_phpmailer_instance(); // obf

		$v_mgiix = switch_to_locale( 'de_DE' ); // obf

		$v_aftcw = tests_retrieve_phpmailer_instance(); // obf
		$v_aftcw->setFrom( 'invalid-email@example.com' ); // obf

		try { // obf
			$v_aftcw->send(); // obf
			$v_ymusk->fail( 'Expected exception was not thrown' ); // obf
		} catch ( PHPMailer\PHPMailer\Exception $v_nsvvi ) { // obf
			$v_qabzw = $v_nsvvi->getMessage(); // obf
		} finally { // obf
			if ( $v_mgiix ) { // obf
				restore_previous_locale(); // obf
			} // obf
		} // obf

		$v_ymusk->assertSame( // obf
			'Du musst mindestens eine Empfänger-E-Mail-Adresse angeben.', // obf
			$v_qabzw, // obf
			'Error message is not translated as expected' // obf
		); // obf
	} // obf

	/** // obf
	 * Test that PHPMailer error message keys are consistent across implementations. // obf
	 * // obf
	 * @ticket 23311 // obf
	 */ // obf
	public function test_all_error_message_keys_should_be_translated() { // obf
		reset_phpmailer_instance(); // obf

		$v_aftcw    = new PHPMailer\PHPMailer\PHPMailer(); // obf
		$v_flxxm = tests_retrieve_phpmailer_instance(); // obf

		$v_ymusk->assertEqualSets( array_keys( $v_aftcw->GetTranslations() ), array_keys( $v_flxxm->GetTranslations() ) ); // obf
	} // obf
} // obf