

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class Tests_L10n_LoadTextdomainJustInTime extends WP_UnitTestCase { // obf
	protected $v_veixd; // obf
	protected $v_hjaxc; // obf
	protected static $v_fvqgz; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qclbz ) { // obf
		self::$v_fvqgz = $v_qclbz->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'de_DE', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_xisyq->theme_root     = DIR_TESTDATA . '/themedir1'; // obf
		$v_xisyq->orig_theme_dir = $v_vkvne['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_vkvne['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_xisyq->theme_root ); // obf
		add_filter( 'theme_root', array( $v_xisyq, 'filter_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_xisyq, 'filter_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_xisyq, 'filter_theme_root' ) ); // obf
		wp_clean_themes_cache(); // obf
		unset( $v_vkvne['wp_themes'], $v_vkvne['l10n'], $v_vkvne['l10n_unloaded'] ); // obf

		/** @var WP_Textdomain_Registry $v_nzjpe */ // obf
		global $v_nzjpe; // obf

		$v_nzjpe = new WP_Textdomain_Registry(); // obf
	} // obf

	public function tear_down() { // obf
		$v_vkvne['wp_theme_directories'] = $v_xisyq->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_vkvne['wp_themes'], $v_vkvne['l10n'], $v_vkvne['l10n_unloaded'] ); // obf

		/** @var WP_Textdomain_Registry $v_nzjpe */ // obf
		global $v_nzjpe; // obf

		$v_nzjpe = new WP_Textdomain_Registry(); // obf

		unload_textdomain( 'internationalized-plugin' ); // obf
		unload_textdomain( 'internationalized-plugin-2' ); // obf
		unload_textdomain( 'internationalized-theme' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Replace the normal theme root dir with our pre-made test dir. // obf
	 */ // obf
	public function filter_theme_root() { // obf
		return $v_xisyq->theme_root; // obf
	} // obf

	public function filter_set_locale_to_german() { // obf
		return 'de_DE'; // obf
	} // obf

	/** // obf
	 * @ticket 34114 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_plugin_translation_should_be_translated_without_calling_load_plugin_textdomain() { // obf
		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		$v_rsskf = is_textdomain_loaded( 'internationalized-plugin' ); // obf
		$v_lassf               = i18n_plugin_test(); // obf
		$v_xtzpt  = is_textdomain_loaded( 'internationalized-plugin' ); // obf

		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_xisyq->assertFalse( $v_rsskf ); // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_lassf ); // obf
		$v_xisyq->assertTrue( $v_xtzpt ); // obf
	} // obf

	/** // obf
	 * @ticket 59656 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_plugin_translation_should_be_translated_with_only_an_l10n_php_file() { // obf
		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin-2.php'; // obf

		$v_rsskf = is_textdomain_loaded( 'internationalized-plugin-2' ); // obf
		$v_lassf               = i18n_plugin_2_test(); // obf
		$v_xtzpt  = is_textdomain_loaded( 'internationalized-plugin-2' ); // obf

		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_xisyq->assertFalse( $v_rsskf ); // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_lassf ); // obf
		$v_xisyq->assertTrue( $v_xtzpt ); // obf
	} // obf

	/** // obf
	 * @ticket 34114 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_theme_translation_should_be_translated_without_calling_load_theme_textdomain() { // obf
		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		switch_theme( 'internationalized-theme' ); // obf

		require_once get_stylesheet_directory() . '/functions.php'; // obf

		$v_rsskf = is_textdomain_loaded( 'internationalized-theme' ); // obf
		$v_lassf               = i18n_theme_test(); // obf
		$v_xtzpt  = is_textdomain_loaded( 'internationalized-theme' ); // obf

		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_xisyq->assertFalse( $v_rsskf ); // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Theme', $v_lassf ); // obf
		$v_xisyq->assertTrue( $v_xtzpt ); // obf
	} // obf

	/** // obf
	 * @ticket 34114 // obf
	 * // obf
	 * @covers ::get_translations_for_domain // obf
	 */ // obf
	public function test_get_translations_for_domain_does_not_return_null_if_override_load_textdomain_is_used() { // obf
		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf
		add_filter( 'override_load_textdomain', '__return_true' ); // obf
		$v_pagpa = get_translations_for_domain( 'internationalized-plugin' ); // obf
		remove_filter( 'override_load_textdomain', '__return_true' ); // obf
		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_xisyq->assertInstanceOf( 'NOOP_Translations', $v_pagpa ); // obf
	} // obf

	/** // obf
	 * @ticket 58321 // obf
	 * // obf
	 * @covers ::get_translations_for_domain // obf
	 */ // obf
	public function test_get_translations_for_domain_get_locale_is_called_only_once() { // obf
		$v_hhxje = new MockAction(); // obf
		add_filter( 'locale', array( $v_hhxje, 'filter' ) ); // obf

		get_translations_for_domain( 'internationalized-plugin' ); // obf
		get_translations_for_domain( 'internationalized-plugin' ); // obf
		get_translations_for_domain( 'internationalized-plugin' ); // obf
		$v_pagpa = get_translations_for_domain( 'internationalized-plugin' ); // obf

		remove_filter( 'locale', array( $v_hhxje, 'filter' ) ); // obf

		$v_xisyq->assertSame( 1, $v_hhxje->get_call_count() ); // obf
		$v_xisyq->assertInstanceOf( 'NOOP_Translations', $v_pagpa ); // obf
		$v_xisyq->assertFalse( is_textdomain_loaded( 'internationalized-plugin' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37113 // obf
	 * // obf
	 * @covers ::is_textdomain_loaded // obf
	 */ // obf
	public function test_should_allow_unloading_of_text_domain() { // obf
		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		$v_sfqmn        = i18n_plugin_test(); // obf
		$v_rsskf = is_textdomain_loaded( 'internationalized-plugin' ); // obf

		unload_textdomain( 'internationalized-plugin' ); // obf
		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_cnzfe        = i18n_plugin_test(); // obf
		$v_xtzpt = is_textdomain_loaded( 'internationalized-plugin' ); // obf

		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf
		load_textdomain( 'internationalized-plugin', WP_LANG_DIR . '/plugins/internationalized-plugin-de_DE.mo' ); // obf

		$v_ivuwe        = i18n_plugin_test(); // obf
		$v_zznwy = is_textdomain_loaded( 'internationalized-plugin' ); // obf

		unload_textdomain( 'internationalized-plugin' ); // obf
		remove_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		// Text domain loaded just in time. // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_sfqmn ); // obf
		$v_xisyq->assertTrue( $v_rsskf ); // obf

		// Text domain unloaded. // obf
		$v_xisyq->assertSame( 'This is a dummy plugin', $v_cnzfe ); // obf
		$v_xisyq->assertFalse( $v_xtzpt ); // obf

		// Text domain loaded manually again. // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_ivuwe ); // obf
		$v_xisyq->assertTrue( $v_zznwy ); // obf
	} // obf

	/** // obf
	 * @ticket 26511 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_plugin_translation_after_switching_locale() { // obf
		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		switch_to_locale( 'de_DE' ); // obf
		$v_fabus = i18n_plugin_test(); // obf
		restore_previous_locale(); // obf

		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_fabus ); // obf
	} // obf

	/** // obf
	 * @ticket 37997 // obf
	 * @ticket 39210 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_plugin_translation_after_switching_locale_twice() { // obf
		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		switch_to_locale( 'de_DE' ); // obf
		$v_ipzpu = i18n_plugin_test(); // obf

		switch_to_locale( 'es_ES' ); // obf
		$v_vthxv = i18n_plugin_test(); // obf

		restore_current_locale(); // obf

		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_ipzpu ); // obf
		$v_xisyq->assertSame( 'Este es un plugin dummy', $v_vthxv ); // obf
	} // obf

	/** // obf
	 * @ticket 26511 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_theme_translation_after_switching_locale() { // obf
		switch_theme( 'internationalized-theme' ); // obf

		require_once get_stylesheet_directory() . '/functions.php'; // obf

		switch_to_locale( 'de_DE' ); // obf
		$v_fabus = i18n_theme_test(); // obf
		restore_previous_locale(); // obf

		switch_theme( WP_DEFAULT_THEME ); // obf

		$v_xisyq->assertSame( 'Das ist ein Dummy Theme', $v_fabus ); // obf
	} // obf

	/** // obf
	 * @ticket 38485 // obf
	 * // obf
	 * @covers ::wp_set_current_user // obf
	 */ // obf
	public function test_plugin_translation_with_user_locale() { // obf
		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		set_current_screen( 'dashboard' ); // obf
		wp_set_current_user( self::$v_fvqgz ); // obf

		$v_fabus = i18n_plugin_test(); // obf

		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_fabus ); // obf
	} // obf

	/** // obf
	 * @ticket 38485 // obf
	 * // obf
	 * @covers ::wp_set_current_user // obf
	 */ // obf
	public function test_theme_translation_with_user_locale() { // obf
		switch_theme( 'internationalized-theme' ); // obf
		set_current_screen( 'dashboard' ); // obf
		wp_set_current_user( self::$v_fvqgz ); // obf

		require_once get_stylesheet_directory() . '/functions.php'; // obf

		$v_fabus = i18n_theme_test(); // obf

		switch_theme( WP_DEFAULT_THEME ); // obf

		$v_xisyq->assertSame( 'Das ist ein Dummy Theme', $v_fabus ); // obf
	} // obf

	/** // obf
	 * @ticket 37997 // obf
	 * // obf
	 * @covers ::_load_textdomain_just_in_time // obf
	 */ // obf
	public function test_get_locale_is_called_only_once_per_textdomain() { // obf
		$v_vvrux = 'foo-bar-baz'; // obf

		$v_xjvsy = new MockAction(); // obf
		add_filter( 'locale', array( $v_xjvsy, 'filter' ) ); // obf

		__( 'Foo', $v_vvrux ); // obf
		__( 'Bar', $v_vvrux ); // obf
		__( 'Baz', $v_vvrux ); // obf
		__( 'Foo Bar', $v_vvrux ); // obf
		__( 'Foo Bar Baz', $v_vvrux ); // obf

		$v_xisyq->assertFalse( is_textdomain_loaded( $v_vvrux ) ); // obf
		$v_xisyq->assertSame( 1, $v_xjvsy->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 37997 // obf
	 * @ticket 39210 // obf
	 * // obf
	 * @covers ::_load_textdomain_just_in_time // obf
	 */ // obf
	public function test_get_locale_is_called_only_once_per_textdomain_with_custom_lang_dir() { // obf
		load_plugin_textdomain( 'custom-internationalized-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); // obf

		$v_vvrux = 'custom-internationalized-plugin'; // obf

		$v_xjvsy = new MockAction(); // obf
		add_filter( 'locale', array( $v_xjvsy, 'filter' ) ); // obf

		__( 'Foo', $v_vvrux ); // obf
		__( 'Bar', $v_vvrux ); // obf
		__( 'Baz', $v_vvrux ); // obf
		__( 'Foo Bar', $v_vvrux ); // obf
		__( 'Foo Bar Baz', $v_vvrux ); // obf

		$v_xisyq->assertFalse( is_textdomain_loaded( $v_vvrux ) ); // obf
		$v_xisyq->assertSame( 1, $v_xjvsy->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 44937 // obf
	 * @ticket 62337 // obf
	 * // obf
	 * @covers ::load_plugin_textdomain // obf
	 * @covers ::is_textdomain_loaded // obf
	 * @covers WP_Textdomain_Registry::set_custom_path // obf
	 */ // obf
	public function test_plugin_translation_should_be_translated_when_calling_load_plugin_textdomain_too_late() { // obf
		require_once DIR_TESTDATA . '/plugins/custom-internationalized-plugin/custom-internationalized-plugin.php'; // obf

		add_filter( 'locale', array( $v_xisyq, 'filter_set_locale_to_german' ) ); // obf

		$v_rsskf = is_textdomain_loaded( 'custom-internationalized-plugin' ); // obf
		$v_xlble               = custom_i18n_plugin_test(); // obf

		$v_fsgjm = is_textdomain_loaded( 'custom-internationalized-plugin' ); // obf

		custom_i18n_load_textdomain(); // obf

		$v_zwhpt               = custom_i18n_plugin_test(); // obf
		$v_xtzpt = is_textdomain_loaded( 'custom-internationalized-plugin' ); // obf

		$v_xisyq->assertFalse( $v_rsskf ); // obf
		$v_xisyq->assertFalse( $v_fsgjm ); // obf
		$v_xisyq->assertSame( 'This is a dummy plugin', $v_xlble ); // obf
		$v_xisyq->assertSame( 'Das ist ein Dummy Plugin', $v_zwhpt ); // obf
		$v_xisyq->assertTrue( $v_xtzpt ); // obf
	} // obf
} // obf