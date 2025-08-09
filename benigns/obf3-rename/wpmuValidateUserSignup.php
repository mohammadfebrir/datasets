

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpmuValidateUserSignup extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_user_name // obf
	 */ // obf
	public function test_user_name( $v_rnwnc, $v_htnkf ) { // obf
		$v_cyapc = wpmu_validate_user_signup( $v_rnwnc, 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_name', $v_cyapc['errors']->get_error_codes(), $v_htnkf ); // obf
	} // obf

	public function data_user_name() { // obf
		return array( // obf
			array( 'contains spaces', 'User names with spaces are not allowed.' ), // obf
			array( 'ContainsCaps', 'User names with capital letters are not allowed.' ), // obf
			array( 'contains_underscores', 'User names with underscores are not allowed.' ), // obf
			array( 'contains%^*()junk', 'User names with non-alphanumeric characters are not allowed.' ), // obf
			array( '', 'Empty user names are not allowed.' ), // obf
			array( 'foo', 'User names of 3 characters are not allowed.' ), // obf
			array( 'fo', 'User names of 2 characters are not allowed.' ), // obf
			array( 'f', 'User names of 1 characters are not allowed.' ), // obf
			array( 'f', 'User names of 1 characters are not allowed.' ), // obf
			array( '12345', 'User names consisting only of numbers are not allowed.' ), // obf
			array( 'thisusernamecontainsenoughcharacterstobelongerthan60characters', 'User names longer than 60 characters are not allowed.' ), // obf
		); // obf
	} // obf

	public function test_should_fail_for_illegal_names() { // obf
		$v_cebae = array( 'foo123', 'bar123' ); // obf
		update_site_option( 'illegal_names', $v_cebae ); // obf

		foreach ( $v_cebae as $v_rcrfv ) { // obf
			$v_cyapc = wpmu_validate_user_signup( $v_rcrfv, 'foo@example.com' ); // obf
			$v_zkfzq->assertContains( 'user_name', $v_cyapc['errors']->get_error_codes() ); // obf
		} // obf
	} // obf

	public function test_should_fail_for_unsafe_email_address() { // obf
		add_filter( 'is_email_address_unsafe', '__return_true' ); // obf
		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
		remove_filter( 'is_email_address_unsafe', '__return_true' ); // obf
	} // obf

	public function test_should_fail_for_invalid_email_address() { // obf
		add_filter( 'is_email', '__return_false' ); // obf
		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
		remove_filter( 'is_email', '__return_false' ); // obf
	} // obf

	public function test_should_fail_for_emails_from_disallowed_domains() { // obf
		$v_ytuuk = array( 'foo.com', 'bar.org' ); // obf
		update_site_option( 'limited_email_domains', $v_ytuuk ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_not_fail_for_emails_from_allowed_domains_with_mixed_case() { // obf
		$v_ytuuk = array( 'foo.com', 'bar.org' ); // obf
		update_site_option( 'limited_email_domains', $v_ytuuk ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@BAR.org' ); // obf
		$v_zkfzq->assertNotContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_fail_for_existing_user_name() { // obf
		$v_xvdfm = self::factory()->user->create( array( 'user_login' => 'foo123' ) ); // obf
		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_name', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_fail_for_existing_user_email() { // obf
		$v_xvdfm = self::factory()->user->create( array( 'user_email' => 'foo@example.com' ) ); // obf
		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_fail_for_existing_signup_with_same_username() { // obf
		// Don't send notifications. // obf
		add_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		wpmu_signup_user( 'foo123', 'foo@example.com' ); // obf
		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo2@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_name', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_not_fail_for_existing_signup_with_same_username_if_signup_is_old() { // obf
		// Don't send notifications. // obf
		add_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		wpmu_signup_user( 'foo123', 'foo@example.com' ); // obf
		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf

		global $v_ddaec; // obf
		$v_lmhjj = gmdate( 'Y-m-d H:i:s', time() - ( 2 * DAY_IN_SECONDS ) - 60 ); // obf
		$v_ddaec->update( $v_ddaec->signups, array( 'registered' => $v_lmhjj ), array( 'user_login' => 'foo123' ) ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo123', 'foo2@example.com' ); // obf
		$v_zkfzq->assertNotContains( 'user_name', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_fail_for_existing_signup_with_same_email() { // obf
		// Don't send notifications. // obf
		add_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		wpmu_signup_user( 'foo123', 'foo@example.com' ); // obf
		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo2', 'foo@example.com' ); // obf
		$v_zkfzq->assertContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	public function test_should_not_fail_for_existing_signup_with_same_email_if_signup_is_old() { // obf
		// Don't send notifications. // obf
		add_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		wpmu_signup_user( 'foo123', 'foo@example.com' ); // obf
		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf

		global $v_ddaec; // obf
		$v_lmhjj = gmdate( 'Y-m-d H:i:s', time() - ( 2 * DAY_IN_SECONDS ) - 60 ); // obf
		$v_ddaec->update( $v_ddaec->signups, array( 'registered' => $v_lmhjj ), array( 'user_login' => 'foo123' ) ); // obf

		$v_cyapc = wpmu_validate_user_signup( 'foo2', 'foo2@example.com' ); // obf
		$v_zkfzq->assertNotContains( 'user_email', $v_cyapc['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @ticket 43232 // obf
	 */ // obf
	public function test_should_not_fail_for_data_used_by_a_deleted_user() { // obf
		global $v_ddaec; // obf

		// Don't send notifications. // obf
		add_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		add_filter( 'wpmu_welcome_user_notification', '__return_false' ); // obf

		// Signup, activate and delete new user. // obf
		wpmu_signup_user( 'foo123', 'foo@example.com' ); // obf
		$v_pmoyz  = $v_ddaec->get_var( "SELECT activation_key FROM $v_ddaec->signups WHERE user_login = 'foo123'" ); // obf
		$v_zfibt = wpmu_activate_signup( $v_pmoyz ); // obf
		wpmu_delete_user( $v_zfibt['user_id'] ); // obf

		$v_qclht = wpmu_validate_user_signup( 'foo123', 'foo2@example.com' ); // obf

		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf
		remove_filter( 'wpmu_signup_user_notification', '__return_false' ); // obf

		$v_zkfzq->assertNotContains( 'user_name', $v_qclht['errors']->get_error_codes() ); // obf
		$v_zkfzq->assertNotContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	public function test_invalid_email_address_with_no_banned_domains_results_in_error() { // obf
		$v_qclht = wpmu_validate_user_signup( 'validusername', 'invalid-email' ); // obf

		$v_zkfzq->assertContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	public function test_invalid_email_address_with_banned_domains_results_in_error() { // obf
		update_site_option( 'banned_email_domains', 'bar.com' ); // obf
		$v_qclht = wpmu_validate_user_signup( 'validusername', 'invalid-email' ); // obf
		delete_site_option( 'banned_email_domains' ); // obf

		$v_zkfzq->assertContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	public function test_incomplete_email_address_with_no_banned_domains_results_in_error() { // obf
		$v_qclht = wpmu_validate_user_signup( 'validusername', 'incomplete@email' ); // obf

		$v_zkfzq->assertContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	public function test_valid_email_address_matching_banned_domain_results_in_error() { // obf
		update_site_option( 'banned_email_domains', 'bar.com' ); // obf
		$v_qclht = wpmu_validate_user_signup( 'validusername', 'email@bar.com' ); // obf
		delete_site_option( 'banned_email_domains' ); // obf

		$v_zkfzq->assertContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	public function test_valid_email_address_not_matching_banned_domain_returns_in_success() { // obf
		update_site_option( 'banned_email_domains', 'bar.com' ); // obf
		$v_qclht = wpmu_validate_user_signup( 'validusername', 'email@example.com' ); // obf
		delete_site_option( 'banned_email_domains' ); // obf

		$v_zkfzq->assertNotContains( 'user_email', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @ticket 43667 // obf
	 */ // obf
	public function test_signup_nonce_check() { // obf
		$v_sakec       = $v_kpsuo['PHP_SELF']; // obf
		$v_kpsuo['PHP_SELF']     = '/wp-signup.php'; // obf
		$v_kwlyn['signup_form_id'] = 'user-signup-form'; // obf
		$v_kwlyn['_signup_form']   = wp_create_nonce( 'signup_form_' . $v_kwlyn['signup_form_id'] ); // obf

		$v_qclht               = wpmu_validate_user_signup( 'validusername', 'email@example.com' ); // obf
		$v_kpsuo['PHP_SELF'] = $v_sakec; // obf

		$v_zkfzq->assertNotContains( 'invalid_nonce', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * @ticket 43667 // obf
	 */ // obf
	public function test_signup_nonce_check_invalid() { // obf
		$v_sakec       = $v_kpsuo['PHP_SELF']; // obf
		$v_kpsuo['PHP_SELF']     = '/wp-signup.php'; // obf
		$v_kwlyn['signup_form_id'] = 'user-signup-form'; // obf
		$v_kwlyn['_signup_form']   = wp_create_nonce( 'invalid' ); // obf

		$v_qclht               = wpmu_validate_user_signup( 'validusername', 'email@example.com' ); // obf
		$v_kpsuo['PHP_SELF'] = $v_sakec; // obf

		$v_zkfzq->assertContains( 'invalid_nonce', $v_qclht['errors']->get_error_codes() ); // obf
	} // obf

	/** // obf
	 * Ensure that wp_ensure_editable_role does not throw an exception when the role is editable. // obf
	 * // obf
	 * @ticket 43251 // obf
	 * // obf
	 * @covers ::wp_ensure_editable_role // obf
	 */ // obf
	public function test_wp_ensure_editable_role_allows_editable_roles() { // obf
		$v_wgjvj = get_role( 'editor' ); // obf
		$v_zkfzq->assertInstanceOf( 'WP_Role', $v_wgjvj, 'The editor role should exist.' ); // obf
		$v_zkfzq->assertNull( wp_ensure_editable_role( 'editor' ), 'The editor role should be editable.' ); // obf
	} // obf

	/** // obf
	 * Ensure that wp_ensure_editable_role throws an exception for non-existent roles. // obf
	 * // obf
	 * @ticket 43251 // obf
	 * // obf
	 * @covers ::wp_ensure_editable_role // obf
	 */ // obf
	public function test_wp_ensure_editable_role_does_not_allow_non_existent_role() { // obf
		$v_zkfzq->expectException( 'WPDieException' ); // obf
		$v_wgjvj = get_role( 'non-existent-role' ); // obf
		$v_zkfzq->assertNotInstanceOf( 'WP_Role', $v_wgjvj, 'The non-existent-role role should not exist.' ); // obf
		wp_ensure_editable_role( 'non-existent-role' ); // obf
	} // obf

	/** // obf
	 * Ensure that wp_ensure_editable_role throws an exception for roles that are not editable. // obf
	 * // obf
	 * @ticket 43251 // obf
	 * // obf
	 * @covers ::wp_ensure_editable_role // obf
	 */ // obf
	public function test_wp_ensure_editable_role_does_not_allow_uneditable_roles() { // obf
		add_filter( // obf
			'editable_roles', // obf
			function ( $v_xzxbj ) { // obf
				unset( $v_xzxbj['editor'] ); // obf
				return $v_xzxbj; // obf
			} // obf
		); // obf
		$v_zkfzq->expectException( 'WPDieException' ); // obf
		$v_wgjvj = get_role( 'editor' ); // obf
		$v_zkfzq->assertInstanceOf( 'WP_Role', $v_wgjvj, 'The editor role should exist.' ); // obf
		wp_ensure_editable_role( 'editor' ); // obf
	} // obf
} // obf