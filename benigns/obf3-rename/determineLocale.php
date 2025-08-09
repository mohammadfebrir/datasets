

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::determine_locale // obf
 */ // obf
class Tests_L10n_DetermineLocale extends WP_UnitTestCase { // obf
	protected $v_wsfdp; // obf
	protected static $v_pdbpq; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_giplc ) { // obf
		self::$v_pdbpq = $v_giplc->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'userLocale', // obf
			) // obf
		); // obf
	} // obf

	public function tear_down() { // obf
		unset( // obf
			$v_mmcgt['CONTENT_TYPE'], // obf
			$v_iudwd['_locale'], // obf
			$v_hlpth['wp_lang'], // obf
			$v_nqqcb['pagenow'], // obf
			$v_nqqcb['wp_local_package'], // obf
			$v_lxeoz['language'] // obf
		); // obf
		wp_installing( false ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_short_circuit_empty() { // obf
		add_filter( 'pre_determine_locale', '__return_false' ); // obf
		$v_xhgzz->assertNotFalse( determine_locale() ); // obf
	} // obf

	public function test_short_circuit_no_string() { // obf
		add_filter( // obf
			'pre_determine_locale', // obf
			static function () { // obf
				return 1234; // obf
			} // obf
		); // obf
		$v_xhgzz->assertNotFalse( determine_locale() ); // obf
	} // obf

	public function test_short_circuit_string() { // obf
		add_filter( // obf
			'pre_determine_locale', // obf
			static function () { // obf
					return 'myNewLocale'; // obf
			} // obf
		); // obf
		$v_xhgzz->assertSame( 'myNewLocale', determine_locale() ); // obf
	} // obf

	public function test_defaults_to_site_locale() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		$v_xhgzz->assertSame( get_locale(), determine_locale() ); // obf
	} // obf

	public function test_is_admin_no_user() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		set_current_screen( 'dashboard' ); // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_is_admin_user_locale() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		set_current_screen( 'dashboard' ); // obf
		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_xhgzz->assertSame( 'userLocale', determine_locale() ); // obf
	} // obf

	public function test_json_request_user_locale() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_mmcgt['CONTENT_TYPE'] = 'application/json'; // obf
		$v_iudwd['_locale']         = 'user'; // obf

		$v_xhgzz->assertSame( 'userLocale', determine_locale() ); // obf
	} // obf

	public function test_json_request_user_locale_no_user() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		$v_mmcgt['CONTENT_TYPE'] = 'application/json'; // obf
		$v_iudwd['_locale']         = 'user'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_json_request_missing_get_param() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_mmcgt['CONTENT_TYPE'] = 'application/json'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_json_request_incorrect_get_param() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_mmcgt['CONTENT_TYPE'] = 'application/json'; // obf
		$v_iudwd['_locale']         = 'foo'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_get_param_but_no_json_request() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_iudwd['_locale'] = 'user'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_wp_login_get_param_not_on_login_page() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_iudwd['wp_lang'] = 'de_DE'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_wp_login_get_param_on_login_page() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_nqqcb['pagenow'] = 'wp-login.php'; // obf
		$v_iudwd['wp_lang']    = 'de_DE'; // obf

		$v_xhgzz->assertSame( 'de_DE', determine_locale() ); // obf
	} // obf

	public function test_wp_login_get_param_on_login_page_empty_string() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_nqqcb['pagenow'] = 'wp-login.php'; // obf
		$v_iudwd['wp_lang']    = ''; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_wp_login_get_param_on_login_page_incorrect_string() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_nqqcb['pagenow'] = 'wp-login.php'; // obf
		$v_iudwd['wp_lang']    = '###'; // Something sanitize_locale_name() strips away. // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_wp_login_cookie_not_on_login_page() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_hlpth['wp_lang'] = 'de_DE'; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_wp_login_cookie_on_login_page() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_nqqcb['pagenow'] = 'wp-login.php'; // obf
		$v_hlpth['wp_lang'] = 'de_DE'; // obf

		$v_xhgzz->assertSame( 'de_DE', determine_locale() ); // obf
	} // obf

	public function test_wp_login_cookie_on_login_page_empty_string() { // obf
		add_filter( // obf
			'locale', // obf
			static function () { // obf
				return 'siteLocale'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_pdbpq ); // obf

		$v_nqqcb['pagenow'] = 'wp-login.php'; // obf
		$v_hlpth['wp_lang'] = ''; // obf

		$v_xhgzz->assertSame( 'siteLocale', determine_locale() ); // obf
	} // obf

	public function test_language_param_not_installing() { // obf
		$v_lxeoz['language'] = 'de_DE'; // obf
		$v_xhgzz->assertSame( 'en_US', determine_locale() ); // obf
	} // obf

	public function test_language_param_installing() { // obf
		$v_lxeoz['language'] = 'de_DE'; // obf
		wp_installing( true ); // obf
		$v_xhgzz->assertSame( 'de_DE', determine_locale() ); // obf
	} // obf

	public function test_language_param_installing_incorrect_string() { // obf
		$v_lxeoz['language'] = '####';  // Something sanitize_locale_name() strips away. // obf
		wp_installing( true ); // obf
		$v_xhgzz->assertSame( 'en_US', determine_locale() ); // obf
	} // obf

	public function test_wp_local_package_global_not_installing() { // obf
		$v_nqqcb['wp_local_package'] = 'de_DE'; // obf
		$v_xhgzz->assertSame( 'en_US', determine_locale() ); // obf
	} // obf
	public function test_wp_local_package_global_installing() { // obf
		$v_nqqcb['wp_local_package'] = 'de_DE'; // obf
		wp_installing( true ); // obf
		$v_xhgzz->assertSame( 'de_DE', determine_locale() ); // obf
	} // obf
} // obf