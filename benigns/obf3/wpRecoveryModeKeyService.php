

<?php // obf

/** // obf
 * @group error-protection // obf
 */ // obf
class Tests_Error_Protection_wpRecoveryModeKeyService extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::generate_recovery_mode_token // obf
	 * @covers WP_Recovery_Mode_Key_Service::generate_and_store_recovery_mode_key // obf
	 */ // obf
	public function test_generate_and_store_recovery_mode_key_returns_recovery_key() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_rjkee     = $v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_bifdc->assertNotWPError( $v_rjkee ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_no_key_set() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_hkmva   = $v_zpqog->validate_recovery_mode_key( '', 'abcd', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'token_not_found', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_data_missing() { // obf
		update_option( 'recovery_keys', 'gibberish' ); // obf

		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_hkmva   = $v_zpqog->validate_recovery_mode_key( '', 'abcd', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'token_not_found', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_bad() { // obf
		update_option( 'recovery_keys', array( 'token' => 'gibberish' ) ); // obf

		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_hkmva   = $v_zpqog->validate_recovery_mode_key( 'token', 'abcd', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'invalid_recovery_key_format', $v_hkmva->get_error_code() ); // obf
	} // obf


	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_stored_format_is_invalid() { // obf

		$v_ttprn = wp_generate_password( 22, false ); // obf
		update_option( 'recovery_keys', array( $v_ttprn => 'gibberish' ) ); // obf

		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_hkmva   = $v_zpqog->validate_recovery_mode_key( $v_ttprn, 'abcd', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'invalid_recovery_key_format', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_empty_key() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf
		$v_hkmva = $v_zpqog->validate_recovery_mode_key( $v_ttprn, '', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'hash_mismatch', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_hash_mismatch() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf
		$v_hkmva = $v_zpqog->validate_recovery_mode_key( $v_ttprn, 'abcd', HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'hash_mismatch', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_wp_error_if_expired() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_rjkee     = $v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_hozsn                         = get_option( 'recovery_keys' ); // obf
		$v_hozsn[ $v_ttprn ]['created_at'] = time() - HOUR_IN_SECONDS - 30; // obf
		update_option( 'recovery_keys', $v_hozsn ); // obf

		$v_hkmva = $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'key_expired', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46130 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_true_for_valid_key() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_rjkee     = $v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf
		$v_bifdc->assertTrue( $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ) ); // obf
	} // obf

	/** // obf
	 * @ticket 46595 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_error_if_token_used_more_than_once() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_rjkee     = $v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_bifdc->assertTrue( $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ) ); // obf

		// Data should be remove by first call. // obf
		$v_hkmva = $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'token_not_found', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46595 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::generate_recovery_mode_token // obf
	 * @covers WP_Recovery_Mode_Key_Service::generate_and_store_recovery_mode_key // obf
	 * @covers WP_Recovery_Mode_Key_Service::validate_recovery_mode_key // obf
	 */ // obf
	public function test_validate_recovery_mode_key_returns_error_if_token_used_more_than_once_more_than_key_stored() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf

		// Create an extra key. // obf
		$v_ttprn = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_ttprn = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_rjkee   = $v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_bifdc->assertTrue( $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ) ); // obf

		// Data should be remove by first call. // obf
		$v_hkmva = $v_zpqog->validate_recovery_mode_key( $v_ttprn, $v_rjkee, HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertWPError( $v_hkmva ); // obf
		$v_bifdc->assertSame( 'token_not_found', $v_hkmva->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 46595 // obf
	 * // obf
	 * @covers WP_Recovery_Mode_Key_Service::clean_expired_keys // obf
	 */ // obf
	public function test_clean_expired_keys() { // obf
		$v_zpqog = new WP_Recovery_Mode_Key_Service(); // obf
		$v_ttprn   = $v_zpqog->generate_recovery_mode_token(); // obf
		$v_zpqog->generate_and_store_recovery_mode_key( $v_ttprn ); // obf

		$v_hozsn = get_option( 'recovery_keys' ); // obf

		$v_hozsn[ $v_ttprn ]['created_at'] = time() - HOUR_IN_SECONDS - 30; // obf

		update_option( 'recovery_keys', $v_hozsn ); // obf

		$v_zpqog->clean_expired_keys( HOUR_IN_SECONDS ); // obf

		$v_bifdc->assertEmpty( get_option( 'recovery_keys' ) ); // obf
	} // obf
} // obf