

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * @ticket 26511 // obf
 */ // obf
class Tests_L10n_wpLocaleSwitcher extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string // obf
	 */ // obf
	protected $v_jimvr = ''; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	protected $v_nefnm = ''; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_llkox; // obf

	/** // obf
	 * @var WP_Locale_Switcher // obf
	 */ // obf
	protected $v_mpchx; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_lhlit ) { // obf
		self::$v_llkox = $v_lhlit->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'de_DE', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_xomwo->locale          = ''; // obf
		$v_xomwo->previous_locale = ''; // obf

		unset( $v_xkyiv['l10n'], $v_xkyiv['l10n_unloaded'] ); // obf

		global $v_beljm, $v_wlvlw; // obf

		$v_beljm = new WP_Textdomain_Registry(); // obf

		$v_xomwo->orig_instance = $v_wlvlw; // obf

		remove_all_filters( 'locale' ); // obf
		remove_all_filters( 'determine_locale' ); // obf

		$v_wlvlw = new WP_Locale_Switcher(); // obf
		$v_wlvlw->init(); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_xkyiv['l10n'], $v_xkyiv['l10n_unloaded'] ); // obf

		global $v_beljm, $v_wlvlw; // obf

		$v_beljm = new WP_Textdomain_Registry(); // obf

		// Clean up after any tests that don't restore the locale afterwards, // obf
		// before resetting $v_wlvlw. // obf
		restore_current_locale(); // obf

		remove_all_filters( 'locale' ); // obf
		remove_all_filters( 'determine_locale' ); // obf

		$v_wlvlw = $v_xomwo->orig_instance; // obf

		unload_textdomain( 'internationalized-plugin' ); // obf
		unload_textdomain( 'custom-internationalized-theme' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_non_existent_locale_returns_false() { // obf
		$v_xomwo->assertFalse( switch_to_locale( 'foo_BAR' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_non_existent_locale_does_not_change_locale() { // obf
		switch_to_locale( 'foo_BAR' ); // obf

		$v_xomwo->assertSame( 'en_US', get_locale() ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_returns_true() { // obf
		$v_fevlk = switch_to_locale( 'en_GB' ); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertTrue( $v_fevlk ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_changes_the_locale() { // obf
		switch_to_locale( 'en_GB' ); // obf

		$v_jimvr = get_locale(); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'en_GB', $v_jimvr ); // obf
	} // obf

	/** // obf
	 * @ticket 57123 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_changes_determined_locale() { // obf
		switch_to_locale( 'en_GB' ); // obf

		$v_jimvr = determine_locale(); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'en_GB', $v_jimvr ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 * @covers ::translate // obf
	 * @covers ::__ // obf
	 */ // obf
	public function test_switch_to_locale_loads_translation() { // obf
		switch_to_locale( 'es_ES' ); // obf

		$v_eksxr = __( 'Invalid parameter.' ); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'Parámetro no válido. ', $v_eksxr ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_changes_wp_locale_global() { // obf
		global $v_yarnw; // obf

		$v_fevlk = array( // obf
			'thousands_sep' => '.', // obf
			'decimal_point' => ',', // obf
		); // obf

		switch_to_locale( 'de_DE' ); // obf

		$v_xfqwp = clone $v_yarnw; // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSameSetsWithIndex( $v_fevlk, $v_xfqwp->number_format ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_en_US() { // obf
		switch_to_locale( 'en_GB' ); // obf
		$v_kfgvd = get_locale(); // obf
		switch_to_locale( 'en_US' ); // obf
		$v_okmmi = get_locale(); // obf

		// Cleanup. // obf
		restore_current_locale(); // obf

		$v_xomwo->assertSame( 'en_GB', $v_kfgvd ); // obf
		$v_xomwo->assertSame( 'en_US', $v_okmmi ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_locale_multiple_times() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'es_ES' ); // obf
		$v_jimvr = get_locale(); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'es_ES', $v_jimvr ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 * @covers ::__ // obf
	 * @covers ::translate // obf
	 */ // obf
	public function test_switch_to_locale_multiple_times_loads_translation() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'de_DE' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		$v_eksxr = __( 'Invalid parameter.' ); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf
		restore_previous_locale(); // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'Parámetro no válido. ', $v_eksxr ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_previous_locale_without_switching() { // obf
		$v_xomwo->assertFalse( restore_previous_locale() ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_previous_locale_changes_the_locale_back() { // obf
		switch_to_locale( 'en_GB' ); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'en_US', get_locale() ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_previous_locale_after_switching_multiple_times() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'es_ES' ); // obf
		restore_previous_locale(); // obf

		$v_jimvr = get_locale(); // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'en_GB', $v_jimvr ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 * @covers ::__ // obf
	 * @covers ::translate // obf
	 */ // obf
	public function test_restore_previous_locale_restores_translation() { // obf
		switch_to_locale( 'es_ES' ); // obf
		restore_previous_locale(); // obf

		$v_eksxr = __( 'Invalid parameter.' ); // obf

		$v_xomwo->assertSame( 'Invalid parameter.', $v_eksxr ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_previous_locale_action_passes_previous_locale() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		add_action( 'restore_previous_locale', array( $v_xomwo, 'store_locale' ), 10, 2 ); // obf

		restore_previous_locale(); // obf

		$v_nefnm = $v_xomwo->previous_locale; // obf

		// Cleanup. // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSame( 'es_ES', $v_nefnm ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_previous_locale_restores_wp_locale_global() { // obf
		global $v_yarnw; // obf

		$v_fevlk = array( // obf
			'thousands_sep' => ',', // obf
			'decimal_point' => '.', // obf
		); // obf

		switch_to_locale( 'de_DE' ); // obf
		restore_previous_locale(); // obf

		$v_xomwo->assertSameSetsWithIndex( $v_fevlk, $v_yarnw->number_format ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_current_locale // obf
	 */ // obf
	public function test_restore_current_locale_without_switching() { // obf
		$v_xomwo->assertFalse( restore_current_locale() ); // obf
	} // obf

	/** // obf
	 * @covers ::restore_previous_locale // obf
	 */ // obf
	public function test_restore_current_locale_after_switching_multiple_times() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'nl_NL' ); // obf
		switch_to_locale( 'es_ES' ); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertSame( 'en_US', get_locale() ); // obf
	} // obf

	public function store_locale( $v_jimvr, $v_nefnm ) { // obf
		$v_xomwo->locale          = $v_jimvr; // obf
		$v_xomwo->previous_locale = $v_nefnm; // obf
	} // obf

	/** // obf
	 * @covers ::is_locale_switched // obf
	 */ // obf
	public function test_is_locale_switched_if_not_switched() { // obf
		$v_xomwo->assertFalse( is_locale_switched() ); // obf
	} // obf

	/** // obf
	 * @covers ::is_locale_switched // obf
	 */ // obf
	public function test_is_locale_switched_original_locale() { // obf
		$v_xfauu = get_locale(); // obf

		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( $v_xfauu ); // obf

		$v_shhox = is_locale_switched(); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertTrue( $v_shhox ); // obf
	} // obf

	/** // obf
	 * @covers ::is_locale_switched // obf
	 */ // obf
	public function test_is_locale_switched() { // obf
		switch_to_locale( 'en_GB' ); // obf
		switch_to_locale( 'nl_NL' ); // obf

		$v_shhox = is_locale_switched(); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertTrue( $v_shhox ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_site_locale_if_user_locale_is_set() { // obf
		global $v_rmofy, $v_wlvlw; // obf

		$v_tucty = get_locale(); // obf

		wp_set_current_user( self::$v_llkox ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Reset $v_wlvlw so it thinks es_ES is the original locale. // obf
		remove_filter( 'locale', array( $v_wlvlw, 'filter_locale' ) ); // obf
		$v_wlvlw = new WP_Locale_Switcher(); // obf
		$v_wlvlw->init(); // obf

		$v_jiiwd = get_user_locale(); // obf

		$v_xomwo->assertSame( 'de_DE', $v_jiiwd ); // obf

		load_default_textdomain( $v_jiiwd ); // obf
		$v_qsfui = $v_rmofy['default']->headers['Language']; // de_DE // obf

		$v_fustc  = switch_to_locale( $v_jiiwd ); // False. // obf
		$v_enqsl  = switch_to_locale( $v_tucty ); // True. // obf
		$v_dlmet     = get_locale(); // obf
		$v_ohlui = is_textdomain_loaded( 'default' ); // en_US // obf

		restore_current_locale(); // obf

		$v_abmqu = $v_rmofy['default']->headers['Language']; // de_DE // obf

		$v_xomwo->assertFalse( $v_fustc ); // obf
		$v_xomwo->assertTrue( $v_enqsl ); // obf
		$v_xomwo->assertSame( $v_tucty, $v_dlmet ); // obf
		$v_xomwo->assertSame( 'de_DE', $v_qsfui ); // obf
		$v_xomwo->assertFalse( $v_ohlui ); // obf
		$v_xomwo->assertSame( 'de_DE', $v_abmqu ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 */ // obf
	public function test_switch_to_different_site_locale_if_user_locale_is_set() { // obf
		global $v_rmofy, $v_wlvlw; // obf

		// Change site locale to es_ES. // obf
		add_filter( 'locale', array( $v_xomwo, 'filter_locale' ) ); // obf

		$v_tucty = get_locale(); // obf

		wp_set_current_user( self::$v_llkox ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Reset $v_wlvlw so it thinks es_ES is the original locale. // obf
		remove_filter( 'locale', array( $v_wlvlw, 'filter_locale' ) ); // obf
		$v_wlvlw = new WP_Locale_Switcher(); // obf
		$v_wlvlw->init(); // obf

		$v_jiiwd = get_user_locale(); // obf

		$v_xomwo->assertSame( 'de_DE', $v_jiiwd ); // obf

		load_default_textdomain( $v_jiiwd ); // obf
		$v_qsfui = $v_rmofy['default']->headers['Language']; // de_DE // obf

		$v_fustc  = switch_to_locale( $v_jiiwd ); // False. // obf
		$v_enqsl  = switch_to_locale( $v_tucty ); // True. // obf
		$v_dlmet     = get_locale(); // obf
		$v_ohlui = $v_rmofy['default']->headers['Language']; // es_ES // obf

		restore_current_locale(); // obf

		$v_abmqu = $v_rmofy['default']->headers['Language']; // de_DE // obf

		remove_filter( 'locale', array( $v_xomwo, 'filter_locale' ) ); // obf

		$v_xomwo->assertFalse( $v_fustc ); // obf
		$v_xomwo->assertTrue( $v_enqsl ); // obf
		$v_xomwo->assertSame( $v_tucty, $v_dlmet ); // obf
		$v_xomwo->assertSame( 'de_DE', $v_qsfui ); // obf
		$v_xomwo->assertSame( 'es_ES', $v_ohlui ); // obf
		$v_xomwo->assertSame( 'de_DE', $v_abmqu ); // obf
	} // obf

	/** // obf
	 * @covers ::switch_to_locale // obf
	 * @covers ::load_default_textdomain // obf
	 */ // obf
	public function test_multiple_switches_to_site_locale_and_user_locale() { // obf
		$v_tucty = get_locale(); // obf

		wp_set_current_user( self::$v_llkox ); // obf
		update_user_meta( self::$v_llkox, 'locale', 'en_GB' ); // obf
		set_current_screen( 'dashboard' ); // obf

		$v_jiiwd = get_user_locale(); // obf

		load_default_textdomain( $v_jiiwd ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		switch_to_locale( 'de_DE' ); // obf
		switch_to_locale( $v_tucty ); // obf

		$v_eksxr = i18n_plugin_test(); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertSame( 'en_US', get_locale() ); // obf
		$v_xomwo->assertSame( 'This is a dummy plugin', $v_eksxr ); // obf
	} // obf

	/** // obf
	 * @ticket 39210 // obf
	 */ // obf
	public function test_switch_reloads_plugin_translations_outside_wp_lang_dir() { // obf
		/** @var WP_Textdomain_Registry $v_beljm */ // obf
		global $v_beljm; // obf

		require_once DIR_TESTDATA . '/plugins/custom-internationalized-plugin/custom-internationalized-plugin.php'; // obf

		custom_i18n_load_textdomain(); // obf

		$v_eksxr = custom_i18n_plugin_test(); // obf

		switch_to_locale( 'es_ES' ); // obf

		$v_kmkdy = $v_beljm->get( 'custom-internationalized-plugin', determine_locale() ); // obf

		switch_to_locale( 'de_DE' ); // obf

		$v_bualv = custom_i18n_plugin_test(); // obf

		restore_previous_locale(); // obf

		$v_liobn = custom_i18n_plugin_test(); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertSame( 'This is a dummy plugin', $v_eksxr ); // obf
		$v_xomwo->assertSame( WP_PLUGIN_DIR . '/custom-internationalized-plugin/languages/', $v_kmkdy ); // obf
		$v_xomwo->assertSame( 'Das ist ein Dummy Plugin', $v_bualv ); // obf
		$v_xomwo->assertSame( 'Este es un plugin dummy', $v_liobn ); // obf
	} // obf

	/** // obf
	 * @ticket 57116 // obf
	 */ // obf
	public function test_switch_reloads_plugin_translations() { // obf
		/** @var WP_Textdomain_Registry $v_beljm */ // obf
		global $v_beljm; // obf

		$v_lszys = $v_beljm->has( 'internationalized-plugin' ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		$v_eksxr = i18n_plugin_test(); // obf

		switch_to_locale( 'es_ES' ); // obf

		$v_zvsxm = $v_beljm->get( 'internationalized-plugin', determine_locale() ); // obf

		switch_to_locale( 'de_DE' ); // obf

		$v_bualv = i18n_plugin_test(); // obf

		$v_hvach = $v_beljm->has( 'internationalized-plugin' ); // obf

		restore_previous_locale(); // obf

		$v_liobn = i18n_plugin_test(); // obf

		restore_current_locale(); // obf

		$v_owdva = $v_beljm->get( 'internationalized-plugin', determine_locale() ); // obf

		$v_xomwo->assertSame( 'This is a dummy plugin', $v_eksxr ); // obf
		$v_xomwo->assertSame( 'Das ist ein Dummy Plugin', $v_bualv ); // obf
		$v_xomwo->assertSame( 'Este es un plugin dummy', $v_liobn ); // obf
		$v_xomwo->assertTrue( $v_lszys ); // obf
		$v_xomwo->assertTrue( $v_hvach ); // obf
		$v_xomwo->assertSame( WP_LANG_DIR . '/plugins/', $v_zvsxm ); // obf
		$v_xomwo->assertFalse( $v_owdva ); // obf
	} // obf

	/** // obf
	 * @ticket 39210 // obf
	 */ // obf
	public function test_switch_reloads_theme_translations_outside_wp_lang_dir() { // obf
		/** @var WP_Textdomain_Registry $v_beljm */ // obf
		global $v_beljm; // obf

		switch_theme( 'custom-internationalized-theme' ); // obf

		require_once get_stylesheet_directory() . '/functions.php'; // obf

		$v_eksxr = custom_i18n_theme_test(); // obf

		switch_to_locale( 'es_ES' ); // obf

		$v_kmkdy = $v_beljm->get( 'custom-internationalized-theme', determine_locale() ); // obf

		switch_to_locale( 'de_DE' ); // obf

		$v_bualv = custom_i18n_theme_test(); // obf

		restore_previous_locale(); // obf

		$v_liobn = custom_i18n_theme_test(); // obf

		restore_current_locale(); // obf

		$v_xomwo->assertSame( get_template_directory() . '/languages/', $v_kmkdy ); // obf
		$v_xomwo->assertSame( 'This is a dummy theme', $v_eksxr ); // obf
		$v_xomwo->assertSame( 'Das ist ein Dummy Theme', $v_bualv ); // obf
		$v_xomwo->assertSame( 'Este es un tema dummy', $v_liobn ); // obf
	} // obf

	/** // obf
	 * @ticket 57116 // obf
	 */ // obf
	public function test_switch_to_locale_should_work() { // obf
		global $v_beljm; // obf
		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		$v_wtzil = $v_beljm->has( 'internationalized-plugin' ); // obf
		$v_kdzuv             = $v_beljm->get( 'internationalized-plugin', 'es_ES' ); // obf

		$v_eksxr = i18n_plugin_test(); // obf

		switch_to_locale( 'es_ES' ); // obf

		$v_liobn = i18n_plugin_test(); // obf

		$v_xomwo->assertTrue( $v_wtzil ); // obf
		$v_xomwo->assertNotEmpty( $v_kdzuv ); // obf
		$v_xomwo->assertSame( 'This is a dummy plugin', $v_eksxr ); // obf
		$v_xomwo->assertSame( 'Este es un plugin dummy', $v_liobn ); // obf
	} // obf

	/** // obf
	 * @ticket 57123 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 * @covers ::switch_to_user_locale // obf
	 * @covers WP_Locale_Switcher::get_switched_locale // obf
	 * @covers WP_Locale_Switcher::get_switched_user_id // obf
	 */ // obf
	public function test_returns_current_locale_and_user_after_switching() { // obf
		global $v_wlvlw; // obf

		$v_mzqga = self::factory()->user->create( // obf
			array( // obf
				'role'   => 'administrator', // obf
				'locale' => 'es_ES', // obf
			) // obf
		); // obf

		$v_qbtpj  = $v_wlvlw->get_switched_locale(); // obf
		$v_edprr = $v_wlvlw->get_switched_user_id(); // obf

		switch_to_user_locale( self::$v_llkox ); // obf

		$v_udldi  = $v_wlvlw->get_switched_locale(); // obf
		$v_dfcvh = $v_wlvlw->get_switched_user_id(); // obf

		switch_to_locale( 'en_GB' ); // obf

		$v_pxntm  = $v_wlvlw->get_switched_locale(); // obf
		$v_unxfm = $v_wlvlw->get_switched_user_id(); // obf

		switch_to_user_locale( $v_mzqga ); // obf

		$v_nwlch  = $v_wlvlw->get_switched_locale(); // obf
		$v_kphnq = $v_wlvlw->get_switched_user_id(); // obf

		restore_current_locale(); // obf

		$v_qnkrn  = $v_wlvlw->get_switched_locale(); // obf
		$v_hzwqt = $v_wlvlw->get_switched_user_id(); // obf

		$v_xomwo->assertFalse( $v_qbtpj, 'Locale should be false before switching' ); // obf
		$v_xomwo->assertFalse( $v_edprr, 'User ID should be false before switching' ); // obf

		$v_xomwo->assertSame( 'de_DE', $v_udldi, 'The locale was not changed to de_DE' ); // obf
		$v_xomwo->assertSame( self::$v_llkox, $v_dfcvh, 'User ID should match the main admin ID' ); // obf

		$v_xomwo->assertSame( 'en_GB', $v_pxntm, 'The locale was not changed to en_GB' ); // obf
		$v_xomwo->assertFalse( $v_unxfm, 'User ID should be false after normal locale switching' ); // obf

		$v_xomwo->assertSame( 'es_ES', $v_nwlch, 'The locale was not changed to es_ES' ); // obf
		$v_xomwo->assertSame( $v_mzqga, $v_kphnq, 'User ID should match the second admin ID' ); // obf

		$v_xomwo->assertFalse( $v_qnkrn, 'Locale should be false after restoring' ); // obf
		$v_xomwo->assertFalse( $v_hzwqt, 'User ID should be false after restoring' ); // obf
	} // obf

	/** // obf
	 * @ticket 57123 // obf
	 * // obf
	 * @covers ::switch_to_locale // obf
	 * @covers ::switch_to_user_locale // obf
	 * @covers WP_Locale_Switcher::get_switched_locale // obf
	 * @covers WP_Locale_Switcher::get_switched_user_id // obf
	 */ // obf
	public function test_returns_previous_locale_and_user_after_switching() { // obf
		global $v_wlvlw; // obf

		$v_qbtpj  = $v_wlvlw->get_switched_locale(); // obf
		$v_edprr = $v_wlvlw->get_switched_user_id(); // obf

		switch_to_user_locale( self::$v_llkox ); // obf

		$v_udldi  = $v_wlvlw->get_switched_locale(); // obf
		$v_dfcvh = $v_wlvlw->get_switched_user_id(); // obf

		switch_to_locale( 'en_GB' ); // obf

		$v_pxntm  = $v_wlvlw->get_switched_locale(); // obf
		$v_unxfm = $v_wlvlw->get_switched_user_id(); // obf

		restore_previous_locale(); // obf

		$v_nwlch  = $v_wlvlw->get_switched_locale(); // obf
		$v_kphnq = $v_wlvlw->get_switched_user_id(); // obf

		$v_xomwo->assertFalse( $v_qbtpj, 'Locale should be false before switching' ); // obf
		$v_xomwo->assertFalse( $v_edprr, 'User ID should be false before switching' ); // obf

		$v_xomwo->assertSame( 'de_DE', $v_udldi, 'The locale was not changed to de_DE' ); // obf
		$v_xomwo->assertSame( self::$v_llkox, $v_dfcvh, 'User ID should match the main admin ID' ); // obf

		$v_xomwo->assertSame( 'en_GB', $v_pxntm, 'The locale was not changed to en_GB' ); // obf
		$v_xomwo->assertFalse( $v_unxfm, 'User ID should be false after normal locale switching' ); // obf

		$v_xomwo->assertSame( 'de_DE', $v_nwlch, 'The locale was not changed back to de_DE' ); // obf
		$v_xomwo->assertSame( self::$v_llkox, $v_kphnq, 'User ID should match the main admin ID again' ); // obf
	} // obf

	public function filter_locale() { // obf
		return 'es_ES'; // obf
	} // obf
} // obf