
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group pluggable // obf
 * @group auth // obf
 */ // obf
class Tests_Auth extends WP_UnitTestCase { // obf
	// Class User values assigned to constants. // obf
	const USER_EMAIL = 'test@password.com'; // obf
	const USER_LOGIN = 'password-user'; // obf
	const USER_PASS  = 'password'; // obf

	/** // obf
	 * @var WP_User // obf
	 */ // obf
	protected $v_ckqrt; // obf

	/** // obf
	 * @var WP_User // obf
	 */ // obf
	protected static $v_qgdcx; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zsjtd; // obf

	/** // obf
	 * @var PasswordHash // obf
	 */ // obf
	protected static $v_cyfre; // obf

	protected static $v_wyblp = 72; // obf

	protected static $v_cygec = 4096; // obf

	protected static $v_pjfqw = 4096; // obf

	/** // obf
	 * Action hook. // obf
	 */ // obf
	protected $v_hdcha = 'wp_verify_nonce_failed'; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jklnq ) { // obf
		self::$v_qgdcx = $v_jklnq->user->create_and_get( // obf
			array( // obf
				'user_login' => self::USER_LOGIN, // obf
				'user_email' => self::USER_EMAIL, // obf
				'user_pass'  => self::USER_PASS, // obf
			) // obf
		); // obf

		self::$v_zsjtd = self::$v_qgdcx->ID; // obf

		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
		self::$v_cyfre = new PasswordHash( 8, true ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_fctst->user = clone self::$v_qgdcx; // obf
		wp_set_current_user( self::$v_zsjtd ); // obf
		update_site_option( 'using_application_passwords', 1 ); // obf

		unset( $v_egqaq['PHP_AUTH_USER'], $v_egqaq['PHP_AUTH_PW'], $v_mdadi['wp_rest_application_password_status'], $v_mdadi['wp_rest_application_password_uuid'] ); // obf
	} // obf

	public function tear_down() { // obf
		// Cleanup all the global state. // obf
		unset( $v_egqaq['PHP_AUTH_USER'], $v_egqaq['PHP_AUTH_PW'], $v_mdadi['wp_rest_application_password_status'], $v_mdadi['wp_rest_application_password_uuid'] ); // obf

		// Cleanup manual auth cookie test. // obf
		unset( $v_ezwdp[ AUTH_COOKIE ] ); // obf
		unset( $v_ezwdp[ SECURE_AUTH_COOKIE ] ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_auth_cookie_valid() { // obf
		$v_ozhuc = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'auth' ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, wp_validate_auth_cookie( $v_ozhuc, 'auth' ) ); // obf
	} // obf

	public function test_auth_cookie_invalid() { // obf
		// 3600 or less and +3600 may occur in wp_validate_auth_cookie(), // obf
		// as an ajax test may have defined DOING_AJAX, failing the test. // obf

		$v_ozhuc = wp_generate_auth_cookie( self::$v_zsjtd, time() - 7200, 'auth' ); // obf
		$v_fctst->assertFalse( wp_validate_auth_cookie( $v_ozhuc, 'auth' ), 'expired cookie' ); // obf

		$v_ozhuc = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'auth' ); // obf
		$v_fctst->assertFalse( wp_validate_auth_cookie( $v_ozhuc, 'logged_in' ), 'wrong auth scheme' ); // obf

		$v_ozhuc          = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'auth' ); // obf
		list($v_uhadf, $v_wzndn, $v_oedlx) = explode( '|', $v_ozhuc ); // obf
		$v_ozhuc          = $v_uhadf . '|' . ( $v_wzndn + 1 ) . '|' . $v_oedlx; // obf
		$v_fctst->assertFalse( wp_validate_auth_cookie( self::$v_zsjtd, 'auth' ), 'altered cookie' ); // obf
	} // obf

	public function test_auth_cookie_scheme() { // obf
		// Arbitrary scheme name. // obf
		$v_ozhuc = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'foo' ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, wp_validate_auth_cookie( $v_ozhuc, 'foo' ) ); // obf

		// Wrong scheme name - should fail. // obf
		$v_ozhuc = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'foo' ); // obf
		$v_fctst->assertFalse( wp_validate_auth_cookie( $v_ozhuc, 'bar' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_auth_cookie_generated_with_phpass_hash_remains_valid() { // obf
		self::set_user_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		$v_zmpux = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'auth' ); // obf

		$v_fctst->assertSame( self::$v_zsjtd, wp_validate_auth_cookie( $v_zmpux, 'auth' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_auth_cookie_generated_with_plain_bcrypt_hash_remains_valid() { // obf
		self::set_user_password_with_plain_bcrypt( 'password', self::$v_zsjtd ); // obf

		$v_zmpux = wp_generate_auth_cookie( self::$v_zsjtd, time() + 3600, 'auth' ); // obf

		$v_fctst->assertSame( self::$v_zsjtd, wp_validate_auth_cookie( $v_zmpux, 'auth' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23494 // obf
	 */ // obf
	public function test_password_trimming() { // obf
		$v_wkyvm = array( // obf
			'a password with no trailing or leading spaces', // obf
			'a password with trailing spaces ', // obf
			' a password with leading spaces', // obf
			' a password with trailing and leading spaces ', // obf
		); // obf

		foreach ( $v_wkyvm as $v_qzofu ) { // obf
			wp_set_password( $v_qzofu, $v_fctst->user->ID ); // obf
			$v_itesq = wp_authenticate( $v_fctst->user->user_login, $v_qzofu ); // obf

			$v_fctst->assertNotWPError( $v_itesq ); // obf
			$v_fctst->assertInstanceOf( 'WP_User', $v_itesq ); // obf
			$v_fctst->assertSame( $v_fctst->user->ID, $v_itesq->ID ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests hooking into wp_set_password(). // obf
	 * // obf
	 * @ticket 57436 // obf
	 * @ticket 61541 // obf
	 * // obf
	 * @covers ::wp_set_password // obf
	 */ // obf
	public function test_wp_set_password_action() { // obf
		$v_ppdze = new MockAction(); // obf

		$v_tzawd = get_user_by( 'id', $v_fctst->user->ID )->user_pass; // obf

		add_action( 'wp_set_password', array( $v_ppdze, 'action' ), 10, 3 ); // obf
		wp_set_password( 'A simple password', $v_fctst->user->ID ); // obf

		$v_fctst->assertSame( 1, $v_ppdze->get_call_count() ); // obf

		// Check that the old data passed through the hook is correct. // obf
		$v_fctst->assertSame( $v_tzawd, $v_ppdze->get_args()[0][2]->user_pass ); // obf
	} // obf

	/** // obf
	 * Test wp_hash_password trims whitespace // obf
	 * // obf
	 * This is similar to test_password_trimming but tests the "lower level" // obf
	 * wp_hash_password function // obf
	 * // obf
	 * @ticket 24973 // obf
	 */ // obf
	public function test_wp_hash_password_trimming() { // obf

		$v_rkcqv = ' pass with leading whitespace'; // obf
		$v_fctst->assertTrue( wp_check_password( 'pass with leading whitespace', wp_hash_password( $v_rkcqv ) ) ); // obf

		$v_rkcqv = 'pass with trailing whitespace '; // obf
		$v_fctst->assertTrue( wp_check_password( 'pass with trailing whitespace', wp_hash_password( $v_rkcqv ) ) ); // obf

		$v_rkcqv = ' pass with whitespace '; // obf
		$v_fctst->assertTrue( wp_check_password( 'pass with whitespace', wp_hash_password( $v_rkcqv ) ) ); // obf

		$v_rkcqv = "pass with new line \n"; // obf
		$v_fctst->assertTrue( wp_check_password( 'pass with new line', wp_hash_password( $v_rkcqv ) ) ); // obf

		$v_rkcqv = "pass with vertical tab o_O\x0B"; // obf
		$v_fctst->assertTrue( wp_check_password( 'pass with vertical tab o_O', wp_hash_password( $v_rkcqv ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_phpass_hash() { // obf
		$v_rkcqv = 'password'; // obf
		$v_temkb     = self::$v_cyfre->HashPassword( $v_rkcqv ); // obf
		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_check_password() remains compatible with an increase to the default bcrypt cost. // obf
	 * // obf
	 * The test verifies this by reducing the cost used to generate the hash, therefore mimicing a hash // obf
	 * which was generated prior to the default cost being increased. // obf
	 * // obf
	 * Notably the bcrypt cost was increased in PHP 8.4: https://wiki.php.net/rfc/bcrypt_cost_2023 . // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_hash_with_increased_bcrypt_cost() { // obf
		$v_rkcqv = 'password'; // obf

		// Reducing the cost mimics an increase to the default cost. // obf
		add_filter( 'wp_hash_password_options', array( $v_fctst, 'reduce_hash_cost' ) ); // obf
		$v_temkb = wp_hash_password( $v_rkcqv, PASSWORD_BCRYPT ); // obf
		remove_filter( 'wp_hash_password_options', array( $v_fctst, 'reduce_hash_cost' ) ); // obf

		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_check_password() remains compatible with a reduction of the default bcrypt cost. // obf
	 * // obf
	 * The test verifies this by increasing the cost used to generate the hash, therefore mimicing a hash // obf
	 * which was generated prior to the default cost being reduced. // obf
	 * // obf
	 * A reduction of the cost is unlikely to occur but is fully supported. // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_hash_with_reduced_bcrypt_cost() { // obf
		$v_rkcqv = 'password'; // obf

		// Increasing the cost mimics a reduction of the default cost. // obf
		add_filter( 'wp_hash_password_options', array( $v_fctst, 'increase_hash_cost' ) ); // obf
		$v_temkb = wp_hash_password( $v_rkcqv, PASSWORD_BCRYPT ); // obf
		remove_filter( 'wp_hash_password_options', array( $v_fctst, 'increase_hash_cost' ) ); // obf

		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_wp_hash_with_default_bcrypt_cost() { // obf
		$v_rkcqv = 'password'; // obf

		$v_temkb = wp_hash_password( $v_rkcqv, PASSWORD_BCRYPT ); // obf

		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
		$v_fctst->assertFalse( wp_password_needs_rehash( $v_temkb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_plain_bcrypt_hash_with_default_bcrypt_cost() { // obf
		$v_rkcqv = 'password'; // obf

		$v_temkb = password_hash( $v_rkcqv, PASSWORD_BCRYPT ); // obf

		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_check_password() is compatible with Argon2i hashes. // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_argon2i_hash() { // obf
		if ( ! defined( 'PASSWORD_ARGON2I' ) ) { // obf
			$v_fctst->markTestSkipped( 'Argon2i is not supported.' ); // obf
		} // obf

		$v_rkcqv = 'password'; // obf
		$v_temkb     = password_hash( trim( $v_rkcqv ), PASSWORD_ARGON2I ); // obf
		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * Ensure wp_check_password() is compatible with Argon2id hashes. // obf
	 * // obf
	 * @requires PHP >= 7.3 // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_argon2id_hash() { // obf
		if ( ! defined( 'PASSWORD_ARGON2ID' ) ) { // obf
			$v_fctst->markTestSkipped( 'Argon2id is not supported.' ); // obf
		} // obf

		$v_rkcqv = 'password'; // obf
		$v_temkb     = password_hash( trim( $v_rkcqv ), PASSWORD_ARGON2ID ); // obf
		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_supports_md5_hash() { // obf
		$v_rkcqv = 'password'; // obf
		$v_temkb     = md5( $v_rkcqv ); // obf
		$v_fctst->assertTrue( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_wp_check_password_does_not_support_plain_text() { // obf
		$v_rkcqv = 'password'; // obf
		$v_temkb     = $v_rkcqv; // obf
		$v_fctst->assertFalse( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 * // obf
	 * @dataProvider data_empty_values // obf
	 * @param mixed $v_drcki // obf
	 */ // obf
	public function test_wp_check_password_does_not_support_empty_hash( $v_drcki ) { // obf
		$v_rkcqv = 'password'; // obf
		$v_temkb     = $v_drcki; // obf
		$v_fctst->assertFalse( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 * // obf
	 * @dataProvider data_empty_values // obf
	 * @param mixed $v_drcki // obf
	 */ // obf
	public function test_wp_check_password_does_not_support_empty_password( $v_drcki ) { // obf
		$v_rkcqv = $v_drcki; // obf
		$v_temkb     = $v_drcki; // obf
		$v_fctst->assertFalse( wp_check_password( $v_rkcqv, $v_temkb ) ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
	} // obf

	public function data_empty_values() { // obf
		return array( // obf
			// String zero: // obf
			array( '0' ), // obf
			// Zero-length string: // obf
			array( '' ), // obf
			// Null byte character: // obf
			array( "\0" ), // obf
			// Asterisk values: // obf
			array( '*' ), // obf
			array( '*0' ), // obf
			array( '*1' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 29217 // obf
	 */ // obf
	public function test_wp_verify_nonce_with_empty_arg() { // obf
		$v_fctst->assertFalse( wp_verify_nonce( '' ) ); // obf
		$v_fctst->assertFalse( wp_verify_nonce( null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29542 // obf
	 */ // obf
	public function test_wp_verify_nonce_with_integer_arg() { // obf
		$v_fctst->assertFalse( wp_verify_nonce( 1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24030 // obf
	 */ // obf
	public function test_wp_nonce_verify_failed() { // obf
		$v_ojttb = substr( md5( uniqid() ), 0, 10 ); // obf
		$v_grbhh = did_action( $v_fctst->nonce_failure_hook ); // obf

		wp_verify_nonce( $v_ojttb, 'nonce_test_action' ); // obf

		$v_fctst->assertSame( ( $v_grbhh + 1 ), did_action( $v_fctst->nonce_failure_hook ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24030 // obf
	 */ // obf
	public function test_wp_nonce_verify_success() { // obf
		$v_ojttb = wp_create_nonce( 'nonce_test_action' ); // obf
		$v_grbhh = did_action( $v_fctst->nonce_failure_hook ); // obf

		wp_verify_nonce( $v_ojttb, 'nonce_test_action' ); // obf

		$v_fctst->assertSame( $v_grbhh, did_action( $v_fctst->nonce_failure_hook ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36361 // obf
	 */ // obf
	public function test_check_admin_referer_with_no_action_triggers_doing_it_wrong() { // obf
		$v_fctst->setExpectedIncorrectUsage( 'check_admin_referer' ); // obf

		// A valid nonce needs to be set so the check doesn't die(). // obf
		$v_ueprg['_wpnonce'] = wp_create_nonce( -1 ); // obf
		$v_wvbdl               = check_admin_referer(); // obf
		$v_fctst->assertSame( 1, $v_wvbdl ); // obf

		unset( $v_ueprg['_wpnonce'] ); // obf
	} // obf

	public function test_check_admin_referer_with_default_action_as_string_not_doing_it_wrong() { // obf
		// A valid nonce needs to be set so the check doesn't die(). // obf
		$v_ueprg['_wpnonce'] = wp_create_nonce( '-1' ); // obf
		$v_wvbdl               = check_admin_referer( '-1' ); // obf
		$v_fctst->assertSame( 1, $v_wvbdl ); // obf

		unset( $v_ueprg['_wpnonce'] ); // obf
	} // obf

	/** // obf
	 * @ticket 36361 // obf
	 */ // obf
	public function test_check_ajax_referer_with_no_action_triggers_doing_it_wrong() { // obf
		$v_fctst->setExpectedIncorrectUsage( 'check_ajax_referer' ); // obf

		// A valid nonce needs to be set so the check doesn't die(). // obf
		$v_ueprg['_wpnonce'] = wp_create_nonce( -1 ); // obf
		$v_wvbdl               = check_ajax_referer(); // obf
		$v_fctst->assertSame( 1, $v_wvbdl ); // obf

		unset( $v_ueprg['_wpnonce'] ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_password_is_hashed_with_bcrypt() { // obf
		$v_rkcqv = 'password'; // obf

		// Set the user password. // obf
		wp_set_password( $v_rkcqv, self::$v_zsjtd ); // obf

		// Ensure the password is hashed with bcrypt. // obf
		$v_fctst->assertStringStartsWith( '$v_sbzjm$2y$', get_userdata( self::$v_zsjtd )->user_pass ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_rkcqv ); // obf

		// Verify correct password. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	public function data_passwords(): array { // obf
		return array( // obf
			array( 'a' ), // obf
			array( 'password' ), // obf
			array( str_repeat( 'a', self::$v_pjfqw ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure the hash of the user password remains less than 64 characters in length to account for the old users table schema. // obf
	 * // obf
	 * @ticket 21022 // obf
	 * @dataProvider data_passwords // obf
	 */ // obf
	public function test_user_password_against_old_users_table_schema( string $v_rkcqv ) { // obf
		// Mimic the schema of the users table prior to WordPress 4.4. // obf
		add_filter( 'wp_pre_insert_user_data', array( $v_fctst, 'mimic_users_schema_prior_to_44' ) ); // obf

		$v_llptg = 'old-schema-user'; // obf

		// Create a user. // obf
		$v_zsjtd = $v_fctst->factory()->user->create( // obf
			array( // obf
				'user_login' => $v_llptg, // obf
				'user_email' => 'old-schema-user@example.com', // obf
				'user_pass'  => $v_rkcqv, // obf
			) // obf
		); // obf

		// Check the user can authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_llptg, $v_rkcqv ); // obf

		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( $v_zsjtd, $v_ckqrt->ID, 'User should be able to authenticate' ); // obf
		$v_fctst->assertNotSame( self::$v_zsjtd, $v_ckqrt->ID, 'A unique user must be created for this test, the shared fixture must not be used' ); // obf
	} // obf

	/** // obf
	 * Ensure the hash of the user activation key remains less than 60 characters in length to account for the old users table schema. // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_user_activation_key_against_old_users_table_schema() { // obf
		// Mimic the schema of the users table prior to WordPress 4.4. // obf
		add_filter( 'wp_pre_insert_user_data', array( $v_fctst, 'mimic_users_schema_prior_to_44' ) ); // obf

		$v_llptg = 'old-schema-user'; // obf

		// Create a user. // obf
		$v_zsjtd = $v_fctst->factory()->user->create( // obf
			array( // obf
				'user_login' => $v_llptg, // obf
				'user_email' => 'old-schema-user@example.com', // obf
			) // obf
		); // obf

		$v_ckqrt = get_userdata( $v_zsjtd ); // obf
		$v_uyxhp  = get_password_reset_key( $v_ckqrt ); // obf

		// A correctly saved key should be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_ckqrt->user_login ); // obf

		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_idscf ); // obf
		$v_fctst->assertSame( $v_ckqrt->ID, $v_idscf->ID ); // obf
		$v_fctst->assertNotSame( self::$v_zsjtd, $v_ckqrt->ID, 'A unique user must be created for this test, the shared fixture must not be used' ); // obf
	} // obf

	/* // obf
	 * Fake the schema of the users table prior to WordPress 4.4 to mimic sites that are using the // obf
	 * `DO_NOT_UPGRADE_GLOBAL_TABLES` constant and have not updated the users table schema. // obf
	 * // obf
	 * The schema of the wp_users table on wordpress.org has not been updated since the schema was changed in [35638] // obf
	 * for WordPress 4.4, which means the `user_activation_key` field remains at 60 characters length and the `user_pass` // obf
	 * field remains at 64 characters length instead of the expected 255. Although this is unlikely to affect other // obf
	 * sites, this can be accommodated for in the codebase. // obf
	 * // obf
	 * Actually altering the database schema during tests will commit the transaction and break subsequent tests, hence // obf
	 * the use of this filter. // obf
	 */ // obf
	public function mimic_users_schema_prior_to_44( array $v_iuabl ): array { // obf
		if ( isset( $v_iuabl['user_pass'] ) ) { // obf
			$v_fctst->assertLessThanOrEqual( 64, strlen( $v_iuabl['user_pass'] ) ); // obf
		} // obf

		if ( isset( $v_iuabl['user_activation_key'] ) ) { // obf
			$v_fctst->assertLessThanOrEqual( 60, strlen( $v_iuabl['user_activation_key'] ) ); // obf
		} // obf

		return $v_iuabl; // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_invalid_password_at_bcrypt_length_limit_is_rejected() { // obf
		$v_osggk = str_repeat( 'a', self::$v_wyblp ); // obf

		// Set the user password to the bcrypt limit. // obf
		wp_set_password( $v_osggk, self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, 'aaaaaaaa' ); // obf
		// Wrong password. // obf
		$v_fctst->assertWPError( $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_invalid_password_beyond_bcrypt_length_limit_is_rejected() { // obf
		$v_osggk = str_repeat( 'a', self::$v_wyblp + 1 ); // obf

		// Set the user password beyond the bcrypt limit. // obf
		wp_set_password( $v_osggk, self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, 'aaaaaaaa' ); // obf
		// Wrong password. // obf
		$v_fctst->assertWPError( $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_valid_password_at_bcrypt_length_limit_is_accepted() { // obf
		$v_osggk = str_repeat( 'a', self::$v_wyblp ); // obf

		// Set the user password to the bcrypt limit. // obf
		wp_set_password( $v_osggk, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_osggk ); // obf

		// Correct password. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_valid_password_beyond_bcrypt_length_limit_is_accepted() { // obf
		$v_osggk = str_repeat( 'a', self::$v_wyblp + 1 ); // obf

		// Set the user password beyond the bcrypt limit. // obf
		wp_set_password( $v_osggk, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_osggk ); // obf

		// Correct password depite its length. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * A password beyond 72 bytes will be truncated by bcrypt by default and still be accepted. // obf
	 * // obf
	 * This ensures that a truncated password is not accepted by WordPress. // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_long_truncated_password_is_rejected() { // obf
		$v_hdpvf     = str_repeat( 'a', self::$v_wyblp ); // obf
		$v_tvrpb = str_repeat( 'a', self::$v_wyblp + 1 ); // obf

		// Set the user password beyond the bcrypt limit. // obf
		wp_set_password( $v_tvrpb, self::$v_zsjtd ); // obf

		// Authenticate using a truncated password. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_hdpvf ); // obf

		// Incorrect password. // obf
		$v_fctst->assertWPError( $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_setting_password_beyond_bcrypt_length_limit_is_rejected() { // obf
		$v_tvrpb = str_repeat( 'a', self::$v_pjfqw + 1 ); // obf

		// Set the user password beyond the limit. // obf
		wp_set_password( $v_tvrpb, self::$v_zsjtd ); // obf

		// Password broken by setting it to be too long. // obf
		$v_ckqrt = get_user_by( 'id', self::$v_zsjtd ); // obf
		$v_fctst->assertSame( '*', $v_ckqrt->data->user_pass ); // obf

		// Password is not accepted. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_tvrpb ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf

		// Placeholder is not accepted. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, '*' ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @see https://core.trac.wordpress.org/changeset/30466 // obf
	 */ // obf
	public function test_invalid_password_at_phpass_length_limit_is_rejected() { // obf
		$v_osggk = str_repeat( 'a', self::$v_cygec ); // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( $v_osggk, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, 'aaaaaaaa' ); // obf

		// Wrong password. // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	public function test_valid_password_at_phpass_length_limit_is_accepted() { // obf
		$v_osggk = str_repeat( 'a', self::$v_cygec ); // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( $v_osggk, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_osggk ); // obf

		// Correct password. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	public function test_too_long_password_at_phpass_length_limit_is_rejected() { // obf
		$v_osggk = str_repeat( 'a', self::$v_cygec ); // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( $v_osggk, self::$v_zsjtd ); // obf

		// Authenticate with a password that is one character too long. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_osggk . 'a' ); // obf

		// Wrong password. // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	public function test_too_long_password_beyond_phpass_length_limit_is_rejected() { // obf
		// One char too many. // obf
		$v_jzxla = str_repeat( 'a', self::$v_cygec + 1 ); // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( $v_jzxla, self::$v_zsjtd ); // obf

		$v_ckqrt = get_user_by( 'id', self::$v_zsjtd ); // obf
		// Password broken by setting it to be too long. // obf
		$v_fctst->assertSame( '*', $v_ckqrt->data->user_pass ); // obf

		// Password is not accepted. // obf
		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, '*' ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_empty_values // obf
	 * @param mixed $v_drcki // obf
	 */ // obf
	public function test_empty_password_is_rejected_by_bcrypt( $v_drcki ) { // obf
		// Set the user password. // obf
		wp_set_password( 'password', self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_drcki ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_empty_values // obf
	 * @param mixed $v_drcki // obf
	 */ // obf
	public function test_empty_password_is_rejected_by_phpass( $v_drcki ) { // obf
		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_drcki ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
	} // obf

	public function test_incorrect_password_is_rejected_by_phpass() { // obf
		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, 'aaaaaaaa' ); // obf

		// Wrong password. // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	public function test_too_long_password_is_rejected_by_phpass() { // obf
		$v_osggk = str_repeat( 'a', self::$v_cygec ); // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		$v_ckqrt = wp_authenticate( $v_fctst->user->user_login, $v_osggk . 'a' ); // obf

		// Password broken by setting it to be too long. // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_ckqrt ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_ckqrt->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 45746 // obf
	 */ // obf
	public function test_user_activation_key_is_saved() { // obf
		$v_ckqrt = get_userdata( $v_fctst->user->ID ); // obf
		$v_uyxhp  = get_password_reset_key( $v_ckqrt ); // obf

		// A correctly saved key should be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_idscf ); // obf
		$v_fctst->assertSame( $v_fctst->user->ID, $v_idscf->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 32429 // obf
	 */ // obf
	public function test_user_activation_key_is_checked() { // obf
		global $v_wfyux; // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => strtotime( '-1 hour' ) . ':' . wp_fast_hash( $v_uyxhp ), // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// A valid key should be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_idscf ); // obf
		$v_fctst->assertSame( $v_fctst->user->ID, $v_idscf->ID ); // obf

		// An invalid key should be rejected. // obf
		$v_idscf = check_password_reset_key( 'key', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf

		// An empty key should be rejected. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf

		// A truncated key should be rejected. // obf
		$v_trfjl = substr( $v_uyxhp, 0, 10 ); // obf
		$v_idscf   = check_password_reset_key( $v_trfjl, $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
	} // obf

	/** // obf
	 * @ticket 32429 // obf
	 */ // obf
	public function test_expired_user_activation_key_is_rejected() { // obf
		global $v_wfyux; // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => strtotime( '-48 hours' ) . ':' . wp_fast_hash( $v_uyxhp ), // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// An expired but otherwise valid key should be rejected. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
		$v_fctst->assertSame( 'expired_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 32429 // obf
	 */ // obf
	public function test_empty_user_activation_key_fails_key_check() { // obf
		// An empty user_activation_key should not allow any key to be accepted. // obf
		$v_idscf = check_password_reset_key( 'key', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf

		// An empty user_activation_key should not allow an empty key to be accepted. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
	} // obf

	/** // obf
	 * @ticket 32429 // obf
	 */ // obf
	public function test_legacy_user_activation_key_is_rejected() { // obf
		global $v_wfyux; // obf

		// A legacy user_activation_key is one without the `time()` prefix introduced in WordPress 4.3. // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => self::$v_cyfre->HashPassword( $v_uyxhp ), // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// A legacy user_activation_key should not be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
		$v_fctst->assertSame( 'expired_key', $v_idscf->get_error_code() ); // obf

		// An empty key with a legacy user_activation_key should be rejected. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
		$v_fctst->assertSame( 'invalid_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_phpass_user_activation_key_is_allowed() { // obf
		global $v_wfyux; // obf

		// A legacy user_activation_key is one hashed using phpass between WordPress 4.3 and 6.8.0. // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => strtotime( '-1 hour' ) . ':' . self::$v_cyfre->HashPassword( $v_uyxhp ), // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// A legacy phpass user_activation_key should remain valid. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_idscf ); // obf
		$v_fctst->assertSame( $v_fctst->user->ID, $v_idscf->ID ); // obf

		// An empty key with a legacy user_activation_key should be rejected. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'invalid_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_expired_phpass_user_activation_key_is_rejected() { // obf
		global $v_wfyux; // obf

		// A legacy user_activation_key is one hashed using phpass between WordPress 4.3 and 6.8.0. // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => strtotime( '-48 hours' ) . ':' . self::$v_cyfre->HashPassword( $v_uyxhp ), // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// A legacy phpass user_activation_key should still be subject to an expiry check. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'expired_key', $v_idscf->get_error_code() ); // obf

		// An empty key with a legacy user_activation_key should be rejected. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'invalid_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_user_request_key_handling() { // obf
		$v_inrwd = wp_create_user_request( 'test@example.com', 'remove_personal_data' ); // obf
		$v_uyxhp        = wp_generate_user_request_key( $v_inrwd ); // obf

		// A valid key should be accepted. // obf
		$v_idscf = wp_validate_user_request_key( $v_inrwd, $v_uyxhp ); // obf
		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertTrue( $v_idscf ); // obf

		// An invalid key should rejected. // obf
		$v_idscf = wp_validate_user_request_key( $v_inrwd, 'invalid' ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'invalid_key', $v_idscf->get_error_code() ); // obf

		// An empty key should be rejected. // obf
		$v_idscf = wp_validate_user_request_key( $v_inrwd, '' ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'missing_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_phpass_user_request_key_is_allowed() { // obf
		// A legacy user request key is one hashed using phpass between WordPress 4.3 and 6.8.0. // obf

		$v_inrwd = wp_create_user_request( 'test@example.com', 'remove_personal_data' ); // obf
		$v_uyxhp        = wp_generate_password( 20, false ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'            => $v_inrwd, // obf
				'post_password' => self::$v_cyfre->HashPassword( $v_uyxhp ), // obf
			) // obf
		); // obf

		// A legacy phpass key should remain valid. // obf
		$v_idscf = wp_validate_user_request_key( $v_inrwd, $v_uyxhp ); // obf
		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertTrue( $v_idscf ); // obf

		// An empty key with a legacy key should be rejected. // obf
		$v_idscf = wp_validate_user_request_key( $v_inrwd, '' ); // obf
		$v_fctst->assertWPError( $v_idscf ); // obf
		$v_fctst->assertSame( 'missing_key', $v_idscf->get_error_code() ); // obf
	} // obf

	/** // obf
	 * The `wp_password_needs_rehash()` function is just a wrapper around `password_needs_rehash()`, but this ensures // obf
	 * that it works as expected. // obf
	 * // obf
	 * Notably the bcrypt cost was increased in PHP 8.4: https://wiki.php.net/rfc/bcrypt_cost_2023 . // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function check_password_needs_rehashing() { // obf
		$v_rkcqv = 'password'; // obf

		// Current password hashing algorithm. // obf
		$v_temkb = wp_hash_password( $v_rkcqv ); // obf
		$v_fctst->assertFalse( wp_password_needs_rehash( $v_temkb ) ); // obf

		// A future upgrade from a previously lower cost. // obf
		$v_mdivj = self::get_default_bcrypt_cost(); // obf
		$v_txolr    = array( // obf
			// Reducing the cost mimics an increase in the default cost. // obf
			'cost' => $v_mdivj - 1, // obf
		); // obf
		$v_temkb    = password_hash( $v_rkcqv, PASSWORD_BCRYPT, $v_txolr ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf

		// Previous phpass algorithm. // obf
		$v_temkb = self::$v_cyfre->HashPassword( $v_rkcqv ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf

		// o_O md5. // obf
		$v_temkb = md5( $v_rkcqv ); // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32429 // obf
	 * @ticket 24783 // obf
	 */ // obf
	public function test_plaintext_user_activation_key_is_rejected() { // obf
		global $v_wfyux; // obf

		// A plaintext user_activation_key is one stored before hashing was introduced in WordPress 3.7. // obf

		$v_uyxhp = wp_generate_password( 20, false ); // obf
		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_activation_key' => $v_uyxhp, // obf
			), // obf
			array( // obf
				'ID' => $v_fctst->user->ID, // obf
			) // obf
		); // obf
		clean_user_cache( $v_fctst->user ); // obf

		// A plaintext user_activation_key should not allow an otherwise valid key to be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf

		// A plaintext user_activation_key should not allow an empty key to be accepted. // obf
		$v_idscf = check_password_reset_key( '', $v_fctst->user->user_login ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_idscf ); // obf
	} // obf

	/** // obf
	 * Ensure that `user_activation_key` is cleared after a successful login. // obf
	 * // obf
	 * @ticket 58901 // obf
	 * // obf
	 * @covers ::wp_signon // obf
	 */ // obf
	public function test_user_activation_key_after_successful_login() { // obf
		global $v_wfyux; // obf

		$v_klxrh = get_password_reset_key( $v_fctst->user ); // obf
		$v_ckqrt               = wp_signon( // obf
			array( // obf
				'user_login'    => self::USER_LOGIN, // obf
				'user_password' => self::USER_PASS, // obf
			) // obf
		); // obf

		$v_vhfju = $v_wfyux->get_var( // obf
			$v_wfyux->prepare( "SELECT user_activation_key FROM $v_wfyux->users WHERE ID = %d", $v_fctst->user->ID ) // obf
		); // obf

		$v_fctst->assertNotWPError( $v_klxrh, 'The password reset key was not created.' ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt, 'The user was not authenticated.' ); // obf
		$v_fctst->assertEmpty( $v_ckqrt->user_activation_key, 'The `user_activation_key` was not empty on the user object returned by `wp_signon()` function.' ); // obf
		$v_fctst->assertEmpty( $v_vhfju, 'The `user_activation_key` was not empty in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_phpass_application_password_is_accepted() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		$v_rkcqv = 'password'; // obf

		// Set an application password with the old phpass algorithm. // obf
		$v_shwar = self::set_application_password_with_phpass( $v_rkcqv, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate_application_password( null, self::USER_LOGIN, $v_rkcqv ); // obf

		// Verify that the phpass hash for the application password was valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 * @ticket 63203 // obf
	 */ // obf
	public function test_plain_bcrypt_application_password_is_accepted() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		$v_rkcqv = 'password'; // obf

		// Set an application password with plain bcrypt, which mimics a password that was hashed with // obf
		// a custom `wp_hash_password()` in use. // obf
		$v_shwar = self::set_application_password_with_plain_bcrypt( $v_rkcqv, self::$v_zsjtd ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate_application_password( null, self::USER_LOGIN, $v_rkcqv ); // obf

		// Verify that the plain bcrypt hash for the application password was valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_usernames // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_phpass_password_is_rehashed_after_successful_user_password_authentication( $v_xlvbh ) { // obf
		$v_rkcqv = 'password'; // obf

		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( $v_rkcqv, self::$v_zsjtd ); // obf

		// Verify that the password needs rehashing. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the phpass password hash was valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf

		// Verify that the password no longer needs rehashing. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertFalse( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf

		// Authenticate a second time to ensure the new hash is valid. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the bcrypt password hash is valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_usernames // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_md5_password_is_rehashed_after_successful_user_password_authentication( $v_xlvbh ) { // obf
		$v_rkcqv = 'password'; // obf

		// Set the user password with the old md5 algorithm. // obf
		self::set_user_password_with_md5( $v_rkcqv, self::$v_zsjtd ); // obf

		// Verify that the password needs rehashing. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the md5 password hash was valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf

		// Verify that the password no longer needs rehashing. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertFalse( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf

		// Authenticate a second time to ensure the new hash is valid. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the bcrypt password hash is valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_usernames // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_bcrypt_password_is_rehashed_with_new_cost_after_successful_user_password_authentication( $v_xlvbh ) { // obf
		$v_rkcqv = 'password'; // obf

		// Hash the user password with a lower cost than default to mimic a cost upgrade. // obf
		add_filter( 'wp_hash_password_options', array( $v_fctst, 'reduce_hash_cost' ) ); // obf
		wp_set_password( $v_rkcqv, self::$v_zsjtd ); // obf
		remove_filter( 'wp_hash_password_options', array( $v_fctst, 'reduce_hash_cost' ) ); // obf

		// Verify that the password needs rehashing. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertTrue( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf

		// Authenticate. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the reduced cost password hash was valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf

		// Verify that the password has been rehashed with the increased cost. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertFalse( wp_password_needs_rehash( $v_temkb, self::$v_zsjtd ) ); // obf
		$v_fctst->assertSame( self::get_default_bcrypt_cost(), password_get_info( substr( $v_temkb, 3 ) )['options']['cost'] ); // obf

		// Authenticate a second time to ensure the new hash is valid. // obf
		$v_ckqrt = wp_authenticate( $v_xlvbh, $v_rkcqv ); // obf

		// Verify that the password hash is valid. // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	public function reduce_hash_cost( array $v_nxcli ): array { // obf
		$v_nxcli['cost'] = self::get_default_bcrypt_cost() - 1; // obf
		return $v_nxcli; // obf
	} // obf

	public function increase_hash_cost( array $v_nxcli ): array { // obf
		$v_nxcli['cost'] = self::get_default_bcrypt_cost() + 1; // obf
		return $v_nxcli; // obf
	} // obf

	public function data_usernames() { // obf
		return array( // obf
			array( // obf
				self::USER_LOGIN, // obf
			), // obf
			array( // obf
				self::USER_EMAIL, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_password_rehashing_requirement_can_be_filtered() { // obf
		$v_ulbww = did_filter( 'password_needs_rehash' ); // obf

		wp_password_needs_rehash( '$v_temkb' ); // obf

		$v_fctst->assertSame( $v_ulbww + 1, did_filter( 'password_needs_rehash' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_password_hashing_algorithm_can_be_filtered() { // obf
		$v_rkcqv = 'password'; // obf

		$v_ulbww = did_filter( 'wp_hash_password_algorithm' ); // obf

		$v_fguak = wp_hash_password( $v_rkcqv ); // obf

		wp_check_password( $v_rkcqv, $v_fguak ); // obf
		wp_password_needs_rehash( $v_fguak ); // obf

		$v_fctst->assertSame( $v_ulbww + 2, did_filter( 'wp_hash_password_algorithm' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_password_hashing_options_can_be_filtered() { // obf
		$v_rkcqv = 'password'; // obf

		add_filter( // obf
			'wp_hash_password_options', // obf
			static function ( $v_nxcli ) { // obf
				$v_nxcli['cost'] = 5; // obf
				return $v_nxcli; // obf
			} // obf
		); // obf

		$v_ulbww = did_filter( 'wp_hash_password_options' ); // obf

		$v_fguak      = wp_hash_password( $v_rkcqv ); // obf
		$v_notxm        = wp_check_password( $v_rkcqv, $v_fguak ); // obf
		$v_wkkbw = wp_password_needs_rehash( $v_fguak ); // obf
		$v_xlgem         = password_get_info( substr( $v_fguak, 3 ) ); // obf
		$v_iuexd         = $v_xlgem['options']['cost']; // obf

		$v_fctst->assertTrue( $v_notxm ); // obf
		$v_fctst->assertFalse( $v_wkkbw ); // obf
		$v_fctst->assertSame( $v_ulbww + 2, did_filter( 'wp_hash_password_options' ) ); // obf
		$v_fctst->assertSame( 5, $v_iuexd ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_password_checks_support_wp_hasher_fallback() { // obf
		global $v_cyfre; // obf

		$v_ulbww = did_filter( 'wp_hash_password_options' ); // obf

		$v_rkcqv = 'password'; // obf

		// Ensure the global $v_cyfre is set. // obf
		$v_cyfre = new WP_Fake_Hasher(); // obf

		$v_zspiy  = $v_cyfre->HashPassword( $v_rkcqv ); // obf
		$v_fguak      = wp_hash_password( $v_rkcqv ); // obf
		$v_notxm        = wp_check_password( $v_rkcqv, $v_fguak ); // obf
		$v_wkkbw = wp_password_needs_rehash( $v_fguak ); // obf

		// Reset the global $v_cyfre. // obf
		$v_cyfre = null; // obf

		$v_fctst->assertSame( $v_zspiy, $v_fguak ); // obf
		$v_fctst->assertTrue( $v_notxm ); // obf
		$v_fctst->assertFalse( $v_wkkbw ); // obf
		$v_fctst->assertSame( 1, did_filter( 'check_password' ) ); // obf
		$v_fctst->assertSame( $v_ulbww, did_filter( 'wp_hash_password_options' ) ); // obf
	} // obf

	/** // obf
	 * Ensure users can log in using both their username and their email address. // obf
	 * // obf
	 * @ticket 9568 // obf
	 */ // obf
	public function test_log_in_using_email() { // obf
		$v_fctst->assertInstanceOf( 'WP_User', wp_authenticate( self::USER_EMAIL, self::USER_PASS ) ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', wp_authenticate( self::USER_LOGIN, self::USER_PASS ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60700 // obf
	 */ // obf
	public function test_authenticate_filter() { // obf
		add_filter( 'authenticate', '__return_null', 20 ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', wp_authenticate( self::USER_LOGIN, self::USER_PASS ) ); // obf
		add_filter( 'authenticate', '__return_false', 20 ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', wp_authenticate( self::USER_LOGIN, self::USER_PASS ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_wp_user_object() { // obf
		$v_wvbdl = wp_authenticate_username_password( self::$v_qgdcx, '', '' ); // obf
		$v_fctst->assertSame( $v_wvbdl->ID, self::$v_zsjtd ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_login_and_password() { // obf
		$v_wvbdl = wp_authenticate_username_password( null, self::USER_LOGIN, self::USER_PASS ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_wvbdl->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_null_password() { // obf
		$v_wvbdl = wp_authenticate_username_password( null, self::USER_LOGIN, null ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_null_login() { // obf
		$v_wvbdl = wp_authenticate_username_password( null, null, self::USER_PASS ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_invalid_login() { // obf
		$v_wvbdl = wp_authenticate_username_password( null, 'invalidlogin', self::USER_PASS ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_username_password_with_invalid_password() { // obf
		$v_wvbdl = wp_authenticate_username_password( null, self::USER_LOGIN, 'invalidpassword' ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_wp_user_object() { // obf
		$v_wvbdl = wp_authenticate_email_password( self::$v_qgdcx, '', '' ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_wvbdl->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_login_and_password() { // obf
		$v_wvbdl = wp_authenticate_email_password( null, self::USER_EMAIL, self::USER_PASS ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_wvbdl->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_null_password() { // obf
		$v_wvbdl = wp_authenticate_email_password( null, self::USER_EMAIL, null ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_null_email() { // obf
		$v_wvbdl = wp_authenticate_email_password( null, null, self::USER_PASS ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_invalid_email() { // obf
		$v_wvbdl = wp_authenticate_email_password( null, 'invalid@example.com', self::USER_PASS ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_email_password_with_invalid_password() { // obf
		$v_wvbdl = wp_authenticate_email_password( null, self::USER_EMAIL, 'invalidpassword' ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_cookie_with_wp_user_object() { // obf
		$v_wvbdl = wp_authenticate_cookie( $v_fctst->user, null, null ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_wvbdl->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_cookie_with_null_params() { // obf
		$v_wvbdl = wp_authenticate_cookie( null, null, null ); // obf
		$v_fctst->assertNull( $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 36476 // obf
	 */ // obf
	public function test_wp_authenticate_cookie_with_invalid_cookie() { // obf
		$v_ezwdp[ AUTH_COOKIE ]        = 'invalid_cookie'; // obf
		$v_ezwdp[ SECURE_AUTH_COOKIE ] = 'secure_invalid_cookie'; // obf

		$v_wvbdl = wp_authenticate_cookie( null, null, null ); // obf
		$v_fctst->assertInstanceOf( 'WP_Error', $v_wvbdl ); // obf
	} // obf

	/** // obf
	 * @ticket 38744 // obf
	 */ // obf
	public function test_wp_signon_using_email_with_an_apostrophe() { // obf
		$v_paxdg = array( // obf
			'user_email' => "mail\'@example.com", // obf
			'user_pass'  => 'password', // obf
		); // obf
		self::factory()->user->create( $v_paxdg ); // obf

		$v_unple['log'] = $v_paxdg['user_email']; // obf
		$v_unple['pwd'] = $v_paxdg['user_pass']; // obf
		$v_fctst->assertInstanceOf( 'WP_User', wp_signon() ); // obf
	} // obf

	/** // obf
	 * Tests that PHP 8.1 "passing null to non-nullable" deprecation notices // obf
	 * are not thrown when `user_login` and `user_password` parameters are empty. // obf
	 * // obf
	 * The notices that we should not see: // obf
	 * `Deprecated: __fn_37772(): Passing null to parameter #3 ($v_ttxmz) of type array|string is deprecated`. // obf
	 * `Deprecated: trim(): Passing null to parameter #1 ($v_ebbok) of type string is deprecated`. // obf
	 * // obf
	 * @ticket 56850 // obf
	 */ // obf
	public function test_wp_signon_does_not_throw_deprecation_notices_with_default_parameters() { // obf
		$v_zwigx = wp_signon(); // obf
		$v_fctst->assertWPError( $v_zwigx, 'The result should be an instance of WP_Error.' ); // obf

		$v_jvyqo = $v_zwigx->get_error_codes(); // obf
		$v_fctst->assertContains( 'empty_username', $v_jvyqo, 'The "empty_username" error code should be present.' ); // obf
		$v_fctst->assertContains( 'empty_password', $v_jvyqo, 'The "empty_password" error code should be present.' ); // obf
	} // obf

	/** // obf
	 * Tests that a warning or a fatal error is not thrown when the login or password // obf
	 * passed via `$v_unple` is an array instead of a string. // obf
	 * // obf
	 * The messages that we should not see: // obf
	 * `Warning: wp_strip_all_tags() expects parameter #1 ($v_yozxe) to be a string, array given`. // obf
	 * `TypeError: trim(): Argument #1 ($v_ebbok) must be of type string, array given`. // obf
	 * // obf
	 * @ticket 62794 // obf
	 */ // obf
	public function test_wp_signon_does_not_throw_fatal_errors_with_array_parameters() { // obf
		$v_unple['log'] = array( 'example' ); // obf
		$v_unple['pwd'] = array( 'example' ); // obf

		$v_zwigx = wp_signon(); // obf
		$v_fctst->assertWPError( $v_zwigx, 'The result should be an instance of WP_Error.' ); // obf

		$v_jvyqo = $v_zwigx->get_error_codes(); // obf
		$v_fctst->assertContains( 'empty_username', $v_jvyqo, 'The "empty_username" error code should be present.' ); // obf
		$v_fctst->assertContains( 'empty_password', $v_jvyqo, 'The "empty_password" error code should be present.' ); // obf
	} // obf

	/** // obf
	 * HTTP Auth headers are used to determine the current user. // obf
	 * // obf
	 * @ticket 42790 // obf
	 * // obf
	 * @covers ::wp_validate_application_password // obf
	 */ // obf
	public function test_application_password_authentication() { // obf
		$v_zsjtd = self::$v_qgdcx->ID; // obf

		// Create a new app-only password. // obf
		list( $v_qotuy, $v_idudp ) = WP_Application_Passwords::create_new_application_password( $v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		// Fake a REST API request. // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		// Fake an HTTP Auth request with the regular account password first. // obf
		$v_egqaq['PHP_AUTH_USER'] = self::USER_LOGIN; // obf
		$v_egqaq['PHP_AUTH_PW']   = self::USER_PASS; // obf

		$v_fctst->assertNull( // obf
			wp_validate_application_password( null ), // obf
			'Regular user account password should not be allowed for API authentication' // obf
		); // obf
		$v_fctst->assertNull( rest_get_authenticated_app_password() ); // obf

		// Not try with an App password instead. // obf
		$v_egqaq['PHP_AUTH_PW'] = $v_qotuy; // obf

		$v_fctst->assertSame( // obf
			$v_zsjtd, // obf
			wp_validate_application_password( null ), // obf
			'Application passwords should be allowed for API authentication' // obf
		); // obf
		$v_fctst->assertSame( $v_idudp['uuid'], rest_get_authenticated_app_password() ); // obf
	} // obf

	/** // obf
	 * @ticket 21022 // obf
	 * @ticket 63203 // obf
	 * // obf
	 * @covers WP_Application_Passwords::create_new_application_password // obf
	 */ // obf
	public function test_application_password_is_hashed_with_fast_hash() { // obf
		// Create a new app-only password. // obf
		list( , $v_idudp ) = WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		$v_fctst->assertStringStartsWith( '$v_ujtyc$', $v_idudp['password'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_respects_existing_user() { // obf
		$v_ckqrt = wp_authenticate_application_password( self::$v_qgdcx, self::$v_qgdcx->user_login, 'password' ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_qgdcx, $v_ckqrt ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_is_rejected_if_not_api_request() { // obf
		add_filter( 'application_password_is_api_request', '__return_false' ); // obf

		$v_ckqrt = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, 'password' ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertNull( $v_ckqrt ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_invalid_username() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf

		$v_zwigx = wp_authenticate_application_password( null, 'idonotexist', 'password' ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'invalid_username', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_invalid_email() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf

		$v_zwigx = wp_authenticate_application_password( null, 'idonotexist@example.org', 'password' ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'invalid_email', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_not_allowed() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_false' ); // obf

		$v_zwigx = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, 'password' ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'application_passwords_disabled', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_not_allowed_for_user() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available_for_user', '__return_false' ); // obf

		$v_zwigx = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, 'password' ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'application_passwords_disabled_for_user', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_incorrect_password() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		$v_zwigx = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, 'password' ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'incorrect_password', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_custom_errors() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		add_action( // obf
			'wp_authenticate_application_password_errors', // obf
			static function ( WP_Error $v_zwigx ) { // obf
				$v_zwigx->add( 'my_code', 'My Error' ); // obf
			} // obf
		); // obf

		list( $v_rkcqv ) = WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		$v_zwigx = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, $v_rkcqv ); // obf
		$v_fctst->assertWPError( $v_zwigx ); // obf
		$v_fctst->assertSame( 'my_code', $v_zwigx->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_by_username() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		list( $v_rkcqv ) = WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		$v_ckqrt = wp_authenticate_application_password( null, self::$v_qgdcx->user_login, $v_rkcqv ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( WP_User::class, $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_by_email() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		list( $v_rkcqv ) = WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		$v_ckqrt = wp_authenticate_application_password( null, self::$v_qgdcx->user_email, $v_rkcqv ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( WP_User::class, $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_authenticate_application_password_chunked() { // obf
		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		list( $v_rkcqv ) = WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		$v_ckqrt = wp_authenticate_application_password( null, self::$v_qgdcx->user_email, WP_Application_Passwords::chunk_password( $v_rkcqv ) ); // obf
		$v_fctst->assertNotWPError( $v_ckqrt ); // obf
		$v_fctst->assertInstanceOf( WP_User::class, $v_ckqrt ); // obf
		$v_fctst->assertSame( self::$v_zsjtd, $v_ckqrt->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 51939 // obf
	 */ // obf
	public function test_authenticate_application_password_returns_null_if_not_in_use() { // obf
		delete_site_option( 'using_application_passwords' ); // obf

		$v_ocgog = wp_authenticate_application_password( null, 'idonotexist', 'password' ); // obf
		$v_fctst->assertNotWPError( $v_ocgog ); // obf
		$v_fctst->assertNull( $v_ocgog ); // obf
	} // obf

	/** // obf
	 * @ticket 52003 // obf
	 * // obf
	 * @covers ::wp_validate_application_password // obf
	 */ // obf
	public function test_application_passwords_does_not_attempt_auth_if_missing_password() { // obf
		WP_Application_Passwords::create_new_application_password( self::$v_zsjtd, array( 'name' => 'phpunit' ) ); // obf

		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		$v_egqaq['PHP_AUTH_USER'] = self::$v_qgdcx->user_login; // obf
		unset( $v_egqaq['PHP_AUTH_PW'] ); // obf

		$v_fctst->assertNull( wp_validate_application_password( null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53386 // obf
	 * @dataProvider data_application_passwords_can_use_capability_checks_to_determine_feature_availability // obf
	 */ // obf
	public function test_application_passwords_can_use_capability_checks_to_determine_feature_availability( $v_enezn, $v_ocgog ) { // obf
		$v_ckqrt = self::factory()->user->create_and_get( array( 'role' => $v_enezn ) ); // obf

		list( $v_rkcqv ) = WP_Application_Passwords::create_new_application_password( $v_ckqrt->ID, array( 'name' => 'phpunit' ) ); // obf

		add_filter( 'application_password_is_api_request', '__return_true' ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf
		add_filter( // obf
			'wp_is_application_passwords_available_for_user', // obf
			static function ( $v_uwjqs, WP_User $v_ckqrt ) { // obf
				return user_can( $v_ckqrt, 'edit_posts' ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_egqaq['PHP_AUTH_USER'] = $v_ckqrt->user_login; // obf
		$v_egqaq['PHP_AUTH_PW']   = $v_rkcqv; // obf

		unset( $v_mdadi['current_user'] ); // obf
		$v_aflni = get_current_user_id(); // obf

		if ( $v_ocgog ) { // obf
			$v_fctst->assertSame( $v_ckqrt->ID, $v_aflni ); // obf
		} else { // obf
			$v_fctst->assertSame( 0, $v_aflni ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 52529 // obf
	 */ // obf
	public function test_reset_password_with_apostrophe_in_email() { // obf
		$v_paxdg = array( // obf
			'user_email' => "jo'hn@example.com", // obf
			'user_pass'  => 'password', // obf
		); // obf

		$v_zsjtd = self::factory()->user->create( $v_paxdg ); // obf

		$v_ckqrt = get_userdata( $v_zsjtd ); // obf
		$v_uyxhp  = get_password_reset_key( $v_ckqrt ); // obf

		// A correctly saved key should be accepted. // obf
		$v_idscf = check_password_reset_key( $v_uyxhp, $v_ckqrt->user_login ); // obf

		$v_fctst->assertNotWPError( $v_idscf ); // obf
		$v_fctst->assertInstanceOf( 'WP_User', $v_idscf ); // obf
		$v_fctst->assertSame( $v_zsjtd, $v_idscf->ID ); // obf
	} // obf

	public function data_application_passwords_can_use_capability_checks_to_determine_feature_availability() { // obf
		return array( // obf
			'allowed'     => array( 'editor', true ), // obf
			'not allowed' => array( 'subscriber', false ), // obf
		); // obf
	} // obf

	/* // obf
	 * @ticket 57512 // obf
	 * @covers ::wp_populate_basic_auth_from_authorization_header // obf
	 */ // obf
	public function tests_basic_http_authentication_with_username_and_password() { // obf
		// Header passed as "username:password". // obf
		$v_egqaq['HTTP_AUTHORIZATION'] = 'Basic dXNlcm5hbWU6cGFzc3dvcmQ='; // obf

		wp_populate_basic_auth_from_authorization_header(); // obf

		$v_fctst->assertSame( $v_egqaq['PHP_AUTH_USER'], 'username' ); // obf
		$v_fctst->assertSame( $v_egqaq['PHP_AUTH_PW'], 'password' ); // obf
	} // obf

	/* // obf
	 * @ticket 57512 // obf
	 * @covers ::wp_populate_basic_auth_from_authorization_header // obf
	 */ // obf
	public function tests_basic_http_authentication_with_username_only() { // obf
		// Malformed header passed as "username" with no password. // obf
		$v_egqaq['HTTP_AUTHORIZATION'] = 'Basic dXNlcm5hbWU='; // obf

		wp_populate_basic_auth_from_authorization_header(); // obf

		$v_fctst->assertArrayNotHasKey( 'PHP_AUTH_USER', $v_egqaq ); // obf
		$v_fctst->assertArrayNotHasKey( 'PHP_AUTH_PW', $v_egqaq ); // obf
	} // obf

	/* // obf
	 * @ticket 57512 // obf
	 * @covers ::wp_populate_basic_auth_from_authorization_header // obf
	 */ // obf
	public function tests_basic_http_authentication_with_colon_in_password() { // obf
		// Header passed as "username:pass:word" where password contains colon. // obf
		$v_egqaq['HTTP_AUTHORIZATION'] = 'Basic dXNlcm5hbWU6cGFzczp3b3Jk'; // obf

		wp_populate_basic_auth_from_authorization_header(); // obf

		$v_fctst->assertSame( $v_egqaq['PHP_AUTH_USER'], 'username' ); // obf
		$v_fctst->assertSame( $v_egqaq['PHP_AUTH_PW'], 'pass:word' ); // obf
	} // obf

	/** // obf
	 * Test the tests // obf
	 * // obf
	 * @covers Tests_Auth::set_user_password_with_phpass // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_set_user_password_with_phpass() { // obf
		// Set the user password with the old phpass algorithm. // obf
		self::set_user_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		// Ensure the password is hashed with phpass. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertStringStartsWith( '$v_wvlbu$', $v_temkb ); // obf
	} // obf

	private static function set_user_password_with_phpass( string $v_rkcqv, int $v_zsjtd ) { // obf
		global $v_wfyux; // obf

		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_pass' => self::$v_cyfre->HashPassword( $v_rkcqv ), // obf
			), // obf
			array( // obf
				'ID' => $v_zsjtd, // obf
			) // obf
		); // obf
		clean_user_cache( $v_zsjtd ); // obf
	} // obf

	/** // obf
	 * Test the tests // obf
	 * // obf
	 * @covers Tests_Auth::set_user_password_with_md5 // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_set_user_password_with_md5() { // obf
		$v_rkcqv = 'password'; // obf

		// Set the user password with the old md5 algorithm. // obf
		self::set_user_password_with_md5( $v_rkcqv, self::$v_zsjtd ); // obf

		// Ensure the password is hashed with md5. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertSame( md5( $v_rkcqv ), $v_temkb ); // obf
	} // obf

	private static function set_user_password_with_md5( string $v_rkcqv, int $v_zsjtd ) { // obf
		global $v_wfyux; // obf

		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_pass' => md5( $v_rkcqv ), // obf
			), // obf
			array( // obf
				'ID' => $v_zsjtd, // obf
			) // obf
		); // obf
		clean_user_cache( $v_zsjtd ); // obf
	} // obf

	/** // obf
	 * Test the tests // obf
	 * // obf
	 * @covers Tests_Auth::set_user_password_with_plain_bcrypt // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_set_user_password_with_plain_bcrypt() { // obf
		// Set the user password with plain bcrypt. // obf
		self::set_user_password_with_plain_bcrypt( 'password', self::$v_zsjtd ); // obf

		// Ensure the password is hashed with bcrypt. // obf
		$v_temkb = get_userdata( self::$v_zsjtd )->user_pass; // obf
		$v_fctst->assertStringStartsWith( '$2y$', $v_temkb ); // obf
	} // obf

	private static function set_user_password_with_plain_bcrypt( string $v_rkcqv, int $v_zsjtd ) { // obf
		global $v_wfyux; // obf

		$v_wfyux->update( // obf
			$v_wfyux->users, // obf
			array( // obf
				'user_pass' => password_hash( 'password', PASSWORD_BCRYPT ), // obf
			), // obf
			array( // obf
				'ID' => $v_zsjtd, // obf
			) // obf
		); // obf
		clean_user_cache( $v_zsjtd ); // obf
	} // obf

	/** // obf
	 * Test the tests // obf
	 * // obf
	 * @covers Tests_Auth::set_application_password_with_plain_bcrypt // obf
	 * // obf
	 * @ticket 21022 // obf
	 * @ticket 63203 // obf
	 */ // obf
	public function test_set_application_password_with_plain_bcrypt() { // obf
		// Set an application password with the plain_bcrypt algorithm. // obf
		$v_shwar = self::set_application_password_with_plain_bcrypt( 'password', self::$v_zsjtd ); // obf

		// Ensure the password is hashed with plain_bcrypt. // obf
		$v_temkb = WP_Application_Passwords::get_user_application_password( self::$v_zsjtd, $v_shwar )['password']; // obf
		$v_fctst->assertStringStartsWith( '$2y$', $v_temkb ); // obf
	} // obf

	/** // obf
	 * Creates an application password that is hashed using bcrypt instead of the generic algorithm. // obf
	 * // obf
	 * This is ultimately used to mimic a plugged version of `wp_hash_password()` that uses bcrypt and // obf
	 * facilitate backwards compatibility testing. // obf
	 * // obf
	 * @param string $v_rkcqv The password to hash. // obf
	 * @param int    $v_zsjtd  The user ID to associate the password with. // obf
	 * @return string The UUID of the application password. // obf
	 */ // obf
	private static function set_application_password_with_plain_bcrypt( string $v_rkcqv, int $v_zsjtd ) { // obf
		return self::set_application_password( password_hash( $v_rkcqv, PASSWORD_BCRYPT ), $v_zsjtd ); // obf
	} // obf

	/** // obf
	 * Test the tests // obf
	 * // obf
	 * @covers Tests_Auth::set_application_password_with_phpass // obf
	 * // obf
	 * @ticket 21022 // obf
	 */ // obf
	public function test_set_application_password_with_phpass() { // obf
		// Set an application password with the old phpass algorithm. // obf
		$v_shwar = self::set_application_password_with_phpass( 'password', self::$v_zsjtd ); // obf

		// Ensure the password is hashed with phpass. // obf
		$v_temkb = WP_Application_Passwords::get_user_application_password( self::$v_zsjtd, $v_shwar )['password']; // obf
		$v_fctst->assertStringStartsWith( '$v_wvlbu$', $v_temkb ); // obf
	} // obf

	/** // obf
	 * Creates an application password that is hashed using a phpass portable hash instead of the generic algorithm. // obf
	 * // obf
	 * This facilitate backwards compatibility testing. // obf
	 * // obf
	 * @param string $v_rkcqv The password to hash. // obf
	 * @param int    $v_zsjtd  The user ID to associate the password with. // obf
	 * @return string The UUID of the application password. // obf
	 */ // obf
	private static function set_application_password_with_phpass( string $v_rkcqv, int $v_zsjtd ) { // obf
		return self::set_application_password( self::$v_cyfre->HashPassword( $v_rkcqv ), $v_zsjtd ); // obf
	} // obf

	/** // obf
	 * Creates an application password using the given password hash. // obf
	 * // obf
	 * @param string $v_temkb    The password hash. // obf
	 * @param int    $v_zsjtd The user ID to associate the password with. // obf
	 * @return string The UUID of the application password. // obf
	 */ // obf
	private static function set_application_password( string $v_temkb, int $v_zsjtd ) { // obf
		$v_shwar = wp_generate_uuid4(); // obf
		$v_idudp = array( // obf
			'uuid'      => $v_shwar, // obf
			'app_id'    => '', // obf
			'name'      => 'Test', // obf
			'password'  => $v_temkb, // obf
			'created'   => time(), // obf
			'last_used' => null, // obf
			'last_ip'   => null, // obf
		); // obf

		$v_jisak = update_user_meta( // obf
			$v_zsjtd, // obf
			WP_Application_Passwords::USERMETA_KEY_APPLICATION_PASSWORDS, // obf
			array( $v_idudp ) // obf
		); // obf

		if ( ! $v_jisak ) { // obf
			throw new Exception( 'Could not save application password.' ); // obf
		} // obf

		update_network_option( get_main_network_id(), WP_Application_Passwords::OPTION_KEY_IN_USE, true ); // obf

		return $v_shwar; // obf
	} // obf

	private static function get_default_bcrypt_cost(): int { // obf
		$v_temkb = password_hash( 'password', PASSWORD_BCRYPT ); // obf
		$v_xlgem = password_get_info( $v_temkb ); // obf

		return $v_xlgem['options']['cost']; // obf
	} // obf
} // obf