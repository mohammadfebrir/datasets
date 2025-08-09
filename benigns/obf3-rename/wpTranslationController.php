

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 */ // obf
class WP_Translation_Controller_Tests extends WP_UnitTestCase { // obf
	public function tear_down() { // obf
		remove_all_filters( 'translation_file_format' ); // obf
		unload_textdomain( 'wp-tests-domain' ); // obf
		unload_textdomain( 'internationalized-plugin' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 * @covers WP_Translation_Controller::get_entries // obf
	 * @covers WP_Translation_Controller::get_headers // obf
	 * @covers WP_Translation_Controller::normalize_header // obf
	 */ // obf
	public function test_load_textdomain() { // obf
		global $v_lquva; // obf

		$v_vbrrv = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_ddxaf = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_gidho = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_laqfg = $v_lquva['wp-tests-domain'] ?? null; // obf

		$v_gjqck = WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'wp-tests-domain' ); // obf
		$v_ztayj   = WP_Translation_Controller::get_instance()->get_headers( 'wp-tests-domain' ); // obf
		$v_rbixx   = WP_Translation_Controller::get_instance()->get_entries( 'wp-tests-domain' ); // obf

		$v_huzml = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_jlrcl = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_doggy->assertFalse( $v_vbrrv, 'Text domain was already loaded at beginning of the test' ); // obf
		$v_doggy->assertTrue( $v_ddxaf, 'Text domain not successfully loaded' ); // obf
		$v_doggy->assertTrue( $v_gidho, 'Text domain is not considered loaded' ); // obf
		$v_doggy->assertInstanceOf( WP_Translations::class, $v_laqfg, 'No compat provider instance used' ); // obf
		$v_doggy->assertTrue( $v_huzml, 'Text domain not successfully unloaded' ); // obf
		$v_doggy->assertFalse( $v_jlrcl, 'Text domain still considered loaded after unload' ); // obf
		$v_doggy->assertTrue( $v_gjqck, 'Text domain not considered loaded' ); // obf
		$v_doggy->assertEqualSetsWithIndex( // obf
			array( // obf
				'Project-Id-Version'   => 'WordPress 2.6-bleeding', // obf
				'Report-Msgid-Bugs-To' => 'wp-polyglots@lists.automattic.com', // obf
			), // obf
			$v_ztayj, // obf
			'Actual translation headers do not match expected ones' // obf
		); // obf
		$v_doggy->assertEqualSetsWithIndex( // obf
			array( // obf
				'baba'       => 'dyado', // obf
				"kuku\nruku" => 'yes', // obf
			), // obf
			$v_rbixx, // obf
			'Actual translation entries do not match expected ones' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 * @covers WP_Translation_Controller::get_entries // obf
	 * @covers WP_Translation_Controller::get_headers // obf
	 * @covers WP_Translation_Controller::normalize_header // obf
	 */ // obf
	public function test_load_textdomain_existing_override() { // obf
		add_filter( 'override_load_textdomain', '__return_true' ); // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_glzym = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_gjqck = WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'wp-tests-domain' ); // obf

		remove_filter( 'override_load_textdomain', '__return_true' ); // obf

		$v_doggy->assertFalse( $v_glzym ); // obf
		$v_doggy->assertFalse( $v_gjqck ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_php_files() { // obf
		$v_onqgx = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.l10n.php' ); // obf

		$v_sxbow = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_doggy->assertTrue( $v_onqgx, 'PHP file not successfully loaded' ); // obf
		$v_doggy->assertTrue( $v_sxbow ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_prefers_php_files_by_default() { // obf
		$v_ddxaf = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_jtwfq = WP_Translation_Controller::get_instance(); // obf

		$v_gjqck = $v_jtwfq->is_textdomain_loaded( 'wp-tests-domain', 'en_US' ); // obf

		$v_bucnn  = $v_jtwfq->unload_file( DIR_TESTDATA . '/pomo/simple.mo', 'wp-tests-domain' ); // obf
		$v_tggmd = $v_jtwfq->unload_file( DIR_TESTDATA . '/pomo/simple.l10n.php', 'wp-tests-domain' ); // obf

		$v_huzml = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_doggy->assertTrue( $v_ddxaf, 'Translation not successfully loaded' ); // obf
		$v_doggy->assertTrue( $v_gjqck ); // obf
		$v_doggy->assertFalse( $v_bucnn ); // obf
		$v_doggy->assertTrue( $v_tggmd ); // obf
		$v_doggy->assertTrue( $v_huzml ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_reads_php_files_if_filtered_format_is_unsupported() { // obf
		add_filter( // obf
			'translation_file_format', // obf
			static function () { // obf
				return 'unknown-format'; // obf
			} // obf
		); // obf

		$v_tzapb = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_dqjbg = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_onqgx = load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.l10n.php' ); // obf

		$v_sxbow = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_doggy->assertTrue( $v_tzapb, 'MO file not successfully loaded' ); // obf
		$v_doggy->assertTrue( $v_dqjbg ); // obf
		$v_doggy->assertTrue( $v_onqgx, 'PHP file not successfully loaded' ); // obf
		$v_doggy->assertTrue( $v_sxbow ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_existing_translation_is_kept() { // obf
		global $v_lquva; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf

		$v_ybayn = new MO(); // obf
		$v_ybayn->import_from_file( DIR_TESTDATA . '/pomo/context.mo' ); // obf
		$v_ybayn->merge_with( $v_lquva['wp-tests-domain'] ); // obf
		$v_lquva['wp-tests-domain'] = $v_ybayn; // obf

		$v_wokcs  = __( 'baba', 'wp-tests-domain' ); // obf
		$v_mkihd = _x( 'one dragon', 'not so dragon', 'wp-tests-domain' ); // obf

		$v_doggy->assertSame( 'dyado', $v_wokcs ); // obf
		$v_doggy->assertSame( 'oney dragoney', $v_mkihd ); // obf
		$v_doggy->assertInstanceOf( Translations::class, $v_lquva['wp-tests-domain'] ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_loads_existing_translation() { // obf
		global $v_lquva; // obf

		$v_ybayn = new MO(); // obf
		$v_ybayn->import_from_file( DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_lquva['wp-tests-domain'] = $v_ybayn; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf

		$v_wokcs  = __( 'baba', 'wp-tests-domain' ); // obf
		$v_mkihd = _x( 'one dragon', 'not so dragon', 'wp-tests-domain' ); // obf

		$v_doggy->assertSame( 'dyado', $v_wokcs ); // obf
		$v_doggy->assertSame( 'oney dragoney', $v_mkihd ); // obf
		$v_doggy->assertInstanceOf( WP_Translations::class, $v_lquva['wp-tests-domain'] ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_loads_existing_translation_mo_files() { // obf
		global $v_lquva; // obf

		add_filter( // obf
			'translation_file_format', // obf
			static function () { // obf
				return 'mo'; // obf
			} // obf
		); // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_ybayn = new MO(); // obf
		$v_ybayn->import_from_file( DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_lquva['wp-tests-domain'] = $v_ybayn; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf

		$v_wokcs  = __( 'baba', 'wp-tests-domain' ); // obf
		$v_mkihd = _x( 'one dragon', 'not so dragon', 'wp-tests-domain' ); // obf

		$v_doggy->assertSame( 'dyado', $v_wokcs ); // obf
		$v_doggy->assertSame( 'oney dragoney', $v_mkihd ); // obf
		$v_doggy->assertInstanceOf( WP_Translations::class, $v_lquva['wp-tests-domain'] ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 */ // obf
	public function test_load_textdomain_loads_existing_translation_php_files() { // obf
		global $v_lquva; // obf

		// Just to ensure the PHP files exist. // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf
		unload_textdomain( 'wp-tests-domain' ); // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_ybayn = new MO(); // obf
		$v_ybayn->import_from_file( DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_lquva['wp-tests-domain'] = $v_ybayn; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/context.mo' ); // obf

		$v_wokcs  = __( 'baba', 'wp-tests-domain' ); // obf
		$v_mkihd = _x( 'one dragon', 'not so dragon', 'wp-tests-domain' ); // obf

		$v_doggy->assertSame( 'dyado', $v_wokcs ); // obf
		$v_doggy->assertSame( 'oney dragoney', $v_mkihd ); // obf
		$v_doggy->assertInstanceOf( WP_Translations::class, $v_lquva['wp-tests-domain'] ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 * @covers WP_Translation_Controller::get_entries // obf
	 * @covers WP_Translation_Controller::get_headers // obf
	 * @covers WP_Translation_Controller::normalize_header // obf
	 */ // obf
	public function test_unload_textdomain() { // obf
		global $v_lquva; // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_huzml = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_jlrcl = is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_laqfg = $v_lquva['wp-tests-domain'] ?? null; // obf

		$v_gjqck = WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'wp-tests-domain' ); // obf
		$v_ztayj   = WP_Translation_Controller::get_instance()->get_headers( 'wp-tests-domain' ); // obf
		$v_rbixx   = WP_Translation_Controller::get_instance()->get_entries( 'wp-tests-domain' ); // obf

		$v_doggy->assertNull( $v_laqfg, 'Compat instance was not removed' ); // obf
		$v_doggy->assertTrue( $v_huzml, 'Text domain not successfully unloaded' ); // obf
		$v_doggy->assertFalse( $v_jlrcl, 'Text domain still considered loaded after unload' ); // obf
		$v_doggy->assertFalse( $v_gjqck, 'Text domain still considered loaded' ); // obf
		$v_doggy->assertEmpty( $v_ztayj, 'Actual translation headers are not empty' ); // obf
		$v_doggy->assertEmpty( $v_rbixx, 'Actual translation entries are not empty' ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_textdomain_existing_override() { // obf
		add_filter( 'override_unload_textdomain', '__return_true' ); // obf

		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf

		$v_huzml = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_gjqck = WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'wp-tests-domain' ); // obf

		remove_filter( 'override_unload_textdomain', '__return_true' ); // obf

		$v_bkglg = unload_textdomain( 'wp-tests-domain' ); // obf

		$v_eoigz = WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'wp-tests-domain' ); // obf

		$v_doggy->assertTrue( $v_huzml ); // obf
		$v_doggy->assertTrue( $v_gjqck ); // obf
		$v_doggy->assertTrue( $v_bkglg ); // obf
		$v_doggy->assertFalse( $v_eoigz ); // obf
	} // obf

	/** // obf
	 * @covers ::unload_file // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_unload_non_existent_files_and_textdomains() { // obf
		$v_vvhlr = new WP_Translation_Controller(); // obf
		$v_doggy->assertFalse( $v_vvhlr->unload_textdomain( 'foobarbaz' ) ); // obf
		$v_doggy->assertFalse( $v_vvhlr->unload_textdomain( 'foobarbaz', 'es_ES' ) ); // obf
		$v_doggy->assertFalse( $v_vvhlr->unload_textdomain( 'default', 'es_ES' ) ); // obf
		$v_doggy->assertFalse( $v_vvhlr->unload_file( DIR_TESTDATA . '/l10n/fa_IR.mo' ) ); // obf
		$v_doggy->assertFalse( $v_vvhlr->unload_file( DIR_TESTDATA . '/l10n/fa_IR.mo', 'es_ES' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 * @covers ::unload_textdomain // obf
	 */ // obf
	public function test_switch_to_locale_translations_stay_loaded_default_textdomain() { // obf
		switch_to_locale( 'es_ES' ); // obf

		$v_ufpvr = __( 'Invalid parameter.' ); // obf

		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded() ); // obf
		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'default', 'es_ES' ) ); // obf

		restore_previous_locale(); // obf

		$v_qomlp = __( 'Invalid parameter.' ); // obf

		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'default', 'es_ES' ) ); // obf

		$v_doggy->assertSame( 'Parámetro no válido. ', $v_ufpvr ); // obf
		$v_doggy->assertSame( 'Invalid parameter.', $v_qomlp ); // obf
	} // obf

	/** // obf
	 * @covers ::load_textdomain // obf
	 * @covers ::unload_textdomain // obf
	 * @covers ::change_locale // obf
	 */ // obf
	public function test_switch_to_locale_translations_stay_loaded_custom_textdomain() { // obf
		$v_doggy->assertSame( 'en_US', WP_Translation_Controller::get_instance()->get_locale() ); // obf

		require_once DIR_TESTDATA . '/plugins/internationalized-plugin.php'; // obf

		$v_ttsaf = i18n_plugin_test(); // obf

		switch_to_locale( 'es_ES' ); // obf

		$v_ufpvr = i18n_plugin_test(); // obf

		$v_doggy->assertSame( 'es_ES', WP_Translation_Controller::get_instance()->get_locale() ); // obf
		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'internationalized-plugin', 'es_ES' ) ); // obf
		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'default', 'es_ES' ) ); // obf
		$v_doggy->assertFalse( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'foo-bar', 'es_ES' ) ); // obf

		restore_previous_locale(); // obf

		$v_hvemc = i18n_plugin_test(); // obf

		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->is_textdomain_loaded( 'internationalized-plugin', 'es_ES' ) ); // obf

		$v_doggy->assertSame( 'This is a dummy plugin', $v_ttsaf ); // obf
		$v_doggy->assertSame( 'Este es un plugin dummy', $v_ufpvr ); // obf
		$v_doggy->assertSame( 'This is a dummy plugin', $v_hvemc ); // obf
	} // obf

	/** // obf
	 * @ticket 52696 // obf
	 * @covers ::has_translation // obf
	 */ // obf
	public function test_has_translation_with_existing_translation() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->has_translation( 'baba', 'wp-tests-domain', 'en_US' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 52696 // obf
	 * @covers ::has_translation // obf
	 */ // obf
	public function test_has_translation_with_no_translation() { // obf
		$v_doggy->assertFalse( WP_Translation_Controller::get_instance()->has_translation( 'Goodbye', 'wp-tests-domain', 'en_US' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 52696 // obf
	 * @covers ::has_translation // obf
	 */ // obf
	public function test_has_translation_with_different_textdomain() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_doggy->assertFalse( WP_Translation_Controller::get_instance()->has_translation( 'baba', 'custom-domain', 'en_US' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 52696 // obf
	 * @covers ::has_translation // obf
	 */ // obf
	public function test_has_translation_with_different_locale() { // obf
		switch_to_locale( 'es_ES' ); // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_ufpvr = WP_Translation_Controller::get_instance()->has_translation( 'baba', 'wp-tests-domain', 'es_ES' ); // obf
		restore_previous_locale(); // obf
		$v_doggy->assertTrue( $v_ufpvr ); // obf
	} // obf

	/** // obf
	 * @ticket 52696 // obf
	 * @covers ::has_translation // obf
	 */ // obf
	public function test_has_translation_with_no_locale_provided() { // obf
		load_textdomain( 'wp-tests-domain', DIR_TESTDATA . '/pomo/simple.mo' ); // obf
		$v_doggy->assertTrue( WP_Translation_Controller::get_instance()->has_translation( 'baba', 'wp-tests-domain' ) ); // obf
	} // obf
} // obf