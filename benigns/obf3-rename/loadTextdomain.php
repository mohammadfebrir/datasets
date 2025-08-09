

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class Tests_L10n_LoadTextdomain extends WP_UnitTestCase { // obf
	protected static $v_ypdtg; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_dyjtx ) { // obf
		self::$v_ypdtg = $v_dyjtx->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'de_DE', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		/** @var WP_Textdomain_Registry $v_mplrs */ // obf
		global $v_mplrs; // obf

		$v_mplrs = new WP_Textdomain_Registry(); // obf
	} // obf

	public function tear_down() { // obf

		/** @var WP_Textdomain_Registry $v_mplrs */ // obf
		global $v_mplrs; // obf

		$v_mplrs = new WP_Textdomain_Registry(); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_is_textdomain_loaded() { // obf
		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_textdomain() { // obf
		$v_upjfa->assertFalse( unload_textdomain( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_load_textdomain() { // obf
		$v_rutal = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		unload_textdomain( 'wp-tests-domain' ); // obf

		$v_upjfa->assertTrue( $v_rutal ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_is_textdomain_loaded_after_loading() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_rutal = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		unload_textdomain( 'wp-tests-domain' ); // obf

		$v_upjfa->assertTrue( $v_rutal ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_textdomain_after_loading() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_upjfa->assertTrue( unload_textdomain( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_is_textdomain_loaded_after_unloading() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		unload_textdomain( 'wp-tests-domain' ); // obf

		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21319 // obf
	 * // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_non_existent_file() { // obf
		$v_upjfa->assertFalse( load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/non-existent-file' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21319 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_is_textdomain_loaded_non_existent_file() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/non-existent-file' ); // obf

		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21319 // obf
	 * // obf
	 * @covers ::get_translations_for_domain // obf
	 */ // obf
	public function test_get_translations_for_domain_non_existent_file() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/non-existent-file' ); // obf

		$v_upjfa->assertInstanceOf( 'NOOP_Translations', get_translations_for_domain( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21319 // obf
	 * // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_textdomain_non_existent_file() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/non-existent-file' ); // obf

		$v_upjfa->assertFalse( unload_textdomain( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21319 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_is_textdomain_is_not_loaded_after_gettext_call_with_no_translations() { // obf
		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
		__( 'just some string', 'wp-tests-domain' ); // obf
		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_override_load_textdomain_noop() { // obf
		add_filter( 'override_load_textdomain', '__return_true' ); // obf
		$v_cybza = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/non-existent-file' ); // obf
		remove_filter( 'override_load_textdomain', '__return_true' ); // obf

		$v_upjfa->assertTrue( $v_cybza ); // obf
		$v_upjfa->assertFalse( is_textdomain_loaded( 'wp-tests-domain' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_override_load_textdomain_non_existent_mofile() { // obf
		add_filter( 'override_load_textdomain', array( $v_upjfa, 'override_load_textdomain_filter' ), 10, 3 ); // obf
		$v_cybza = load_textdomain( 'wp-tests-domain', WP_LANG_DIR . '/non-existent-file.mo' ); // obf
		remove_filter( 'override_load_textdomain', array( $v_upjfa, 'override_load_textdomain_filter' ) ); // obf

		$v_bfzew = is_textdomain_loaded( 'wp-tests-domain' ); // obf
		unload_textdomain( 'wp-tests-domain' ); // obf
		$v_gecew = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_upjfa->assertFalse( $v_cybza ); // obf
		$v_upjfa->assertFalse( $v_bfzew ); // obf
		$v_upjfa->assertFalse( $v_gecew ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_override_load_textdomain_custom_mofile() { // obf
		add_filter( 'override_load_textdomain', array( $v_upjfa, 'override_load_textdomain_filter' ), 10, 3 ); // obf
		$v_cybza = load_textdomain( 'wp-tests-domain', WP_LANG_DIR . '/plugins/internationalized-plugin-de_DE.mo' ); // obf
		remove_filter( 'override_load_textdomain', array( $v_upjfa, 'override_load_textdomain_filter' ) ); // obf

		$v_bfzew = is_textdomain_loaded( 'wp-tests-domain' ); // obf
		unload_textdomain( 'wp-tests-domain' ); // obf
		$v_gecew = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_upjfa->assertTrue( $v_cybza ); // obf
		$v_upjfa->assertTrue( $v_bfzew ); // obf
		$v_upjfa->assertFalse( $v_gecew ); // obf
	} // obf

	/** // obf
	 * @param bool   $v_ydryn Whether to override the .mo file loading. Default false. // obf
	 * @param string $v_bztqo   Text domain. Unique identifier for retrieving translated strings. // obf
	 * @param string $v_lpbiq     Path to the MO file. // obf
	 * @return bool // obf
	 */ // obf
	public function override_load_textdomain_filter( $v_ydryn, $v_bztqo, $v_lpbiq ) { // obf
		global $v_ltwtk; // obf

		if ( ! is_readable( $v_lpbiq ) ) { // obf
			return false; // obf
		} // obf

		$v_zqqty = new MO(); // obf

		if ( ! $v_zqqty->import_from_file( $v_lpbiq ) ) { // obf
			return false; // obf
		} // obf

		if ( isset( $v_ltwtk[ $v_bztqo ] ) ) { // obf
			$v_zqqty->merge_with( $v_ltwtk[ $v_bztqo ] ); // obf
		} // obf

		$v_ltwtk[ $v_bztqo ] = &$v_zqqty; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @ticket 58035 // obf
	 * // obf
	 * @covers ::load_theme_textdomain // obf
	 */ // obf
	public function test_pre_load_textdomain_filter() { // obf
		$v_qsnls = new MockAction(); // obf
		add_filter( 'override_load_textdomain', array( $v_qsnls, 'action' ) ); // obf

		add_filter( 'pre_load_textdomain', '__return_true' ); // obf
		load_plugin_textdomain( 'wp-tests-domain' ); // obf
		remove_filter( 'pre_load_textdomain', '__return_true' ); // obf

		$v_upjfa->assertSame( 0, $v_qsnls->get_call_count(), 'Expected override_load_textdomain not to be called.' ); // obf
	} // obf

	/** // obf
	 * @ticket 60888 // obf
	 * @covers ::load_plugin_textdomain // obf
	 */ // obf
	public function test_load_plugin_textdomain_invalid_domain() { // obf
		$v_upjfa->assertFalse( load_plugin_textdomain( null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60888 // obf
	 * @covers ::load_muplugin_textdomain // obf
	 */ // obf
	public function test_load_muplugin_textdomain_invalid_domain() { // obf
		$v_upjfa->assertFalse( load_muplugin_textdomain( null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60888 // obf
	 * @covers ::load_theme_textdomain // obf
	 */ // obf
	public function test_load_theme_textdomain_invalid_domain() { // obf
		$v_upjfa->assertFalse( load_theme_textdomain( null ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60888 // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_invalid_domain() { // obf
		$v_upjfa->assertFalse( load_textdomain( null, DIR_TESTDATA . '/pomo/thisfiledoesnotexist.mo' ) ); // obf
	} // obf
} // obf