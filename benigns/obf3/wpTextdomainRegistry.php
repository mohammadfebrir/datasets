

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @coversDefaultClass WP_Textdomain_Registry // obf
 */ // obf
class Tests_L10n_wpTextdomainRegistry extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Textdomain_Registry // obf
	 */ // obf
	protected $v_tunzf; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_yikau->instance = new WP_Textdomain_Registry(); // obf
	} // obf

	public function tear_down() { // obf
		wp_cache_delete( md5( WP_LANG_DIR . '/foobar/' ), 'translation_files' ); // obf
		wp_cache_delete( md5( WP_LANG_DIR . '/plugins/' ), 'translation_files' ); // obf
		wp_cache_delete( md5( WP_LANG_DIR . '/themes/' ), 'translation_files' ); // obf
		wp_cache_delete( md5( WP_LANG_DIR . '/' ), 'translation_files' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers ::has // obf
	 * @covers ::get // obf
	 * @covers ::set_custom_path // obf
	 */ // obf
	public function test_set_custom_path() { // obf
		$v_yikau->instance->set_custom_path( 'foo', WP_LANG_DIR . '/bar' ); // obf

		$v_yikau->assertTrue( // obf
			$v_yikau->instance->has( 'foo' ), // obf
			'Incorrect availability status for textdomain with custom path' // obf
		); // obf
		$v_yikau->assertSame( // obf
			WP_LANG_DIR . '/bar/', // obf
			$v_yikau->instance->get( 'foo', 'en_US' ), // obf
			'Should return custom path for textdomain and en_US locale' // obf
		); // obf
		$v_yikau->assertSame( // obf
			WP_LANG_DIR . '/bar/', // obf
			$v_yikau->instance->get( 'foo', 'de_DE' ), // obf
			'Custom path for textdomain not returned' // obf
		); // obf
		$v_yikau->assertNotFalse( // obf
			wp_cache_get( md5( WP_LANG_DIR . '/bar/' ), 'translation_files' ), // obf
			'List of files in custom path not cached' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::get // obf
	 * @dataProvider data_domains_locales // obf
	 */ // obf
	public function test_get( $v_mnyvg, $v_puadi, $v_gxxbl ) { // obf
		$v_wwpkg = $v_yikau->instance->get( $v_mnyvg, $v_puadi ); // obf
		$v_yikau->assertSame( // obf
			$v_gxxbl, // obf
			$v_wwpkg, // obf
			'Expected languages directory path not matching actual one' // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::set // obf
	 * @covers ::get // obf
	 */ // obf
	public function test_set_populates_cache() { // obf
		$v_yikau->instance->set( 'foo-plugin', 'de_DE', '/foo/bar' ); // obf

		$v_yikau->assertSame( // obf
			'/foo/bar/', // obf
			$v_yikau->instance->get( 'foo-plugin', 'de_DE' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::get_language_files_from_path // obf
	 */ // obf
	public function test_get_language_files_from_path_caches_results() { // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/foobar/' ); // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/plugins/' ); // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/themes/' ); // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/' ); // obf

		$v_yikau->assertNotFalse( wp_cache_get( md5( WP_LANG_DIR . '/plugins/' ), 'translation_files' ) ); // obf
		$v_yikau->assertNotFalse( wp_cache_get( md5( WP_LANG_DIR . '/themes/' ), 'translation_files' ) ); // obf
		$v_yikau->assertNotFalse( wp_cache_get( md5( WP_LANG_DIR . '/foobar/' ), 'translation_files' ) ); // obf
		$v_yikau->assertNotFalse( wp_cache_get( md5( WP_LANG_DIR . '/' ), 'translation_files' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_language_files_from_path // obf
	 */ // obf
	public function test_get_language_files_from_path_short_circuit() { // obf
		add_filter( 'pre_get_language_files_from_path', '__return_empty_array' ); // obf
		$v_hfprq = $v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/plugins/' ); // obf
		remove_filter( 'pre_get_language_files_from_path', '__return_empty_array' ); // obf

		$v_nxqjw = wp_cache_get( md5( WP_LANG_DIR . '/plugins/' ), 'translation_files' ); // obf

		$v_yikau->assertEmpty( $v_hfprq ); // obf
		$v_yikau->assertFalse( $v_nxqjw ); // obf
	} // obf

	/** // obf
	 * @covers ::invalidate_mo_files_cache // obf
	 */ // obf
	public function test_invalidate_mo_files_cache() { // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/plugins/' ); // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/themes/' ); // obf
		$v_yikau->instance->get_language_files_from_path( WP_LANG_DIR . '/' ); // obf

		$v_yikau->instance->invalidate_mo_files_cache( // obf
			null, // obf
			array( // obf
				'type'         => 'translation', // obf
				'translations' => array( // obf
					(object) array( // obf
						'type'     => 'plugin', // obf
						'slug'     => 'internationalized-plugin', // obf
						'language' => 'de_DE', // obf
						'version'  => '99.9.9', // obf
					), // obf
					(object) array( // obf
						'type'     => 'theme', // obf
						'slug'     => 'internationalized-theme', // obf
						'language' => 'de_DE', // obf
						'version'  => '99.9.9', // obf
					), // obf
					(object) array( // obf
						'type'     => 'core', // obf
						'slug'     => 'default', // obf
						'language' => 'es_ES', // obf
						'version'  => '99.9.9', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_yikau->assertFalse( wp_cache_get( md5( WP_LANG_DIR . '/plugins/' ), 'translation_files' ) ); // obf
		$v_yikau->assertFalse( wp_cache_get( md5( WP_LANG_DIR . '/themes/' ), 'translation_files' ) ); // obf
		$v_yikau->assertFalse( wp_cache_get( md5( WP_LANG_DIR . '/' ), 'translation_files' ) ); // obf
	} // obf

	public function data_domains_locales() { // obf
		return array( // obf
			'Non-existent plugin'                      => array( // obf
				'unknown-plugin', // obf
				'en_US', // obf
				false, // obf
			), // obf
			'Non-existent plugin with de_DE'           => array( // obf
				'unknown-plugin', // obf
				'de_DE', // obf
				false, // obf
			), // obf
			'Available de_DE translations'             => array( // obf
				'internationalized-plugin', // obf
				'de_DE', // obf
				WP_LANG_DIR . '/plugins/', // obf
			), // obf
			'Available es_ES translations'             => array( // obf
				'internationalized-plugin', // obf
				'es_ES', // obf
				WP_LANG_DIR . '/plugins/', // obf
			), // obf
			'Unavailable fr_FR translations'           => array( // obf
				'internationalized-plugin', // obf
				'fr_FR', // obf
				false, // obf
			), // obf
			'Unavailable en_US translations'           => array( // obf
				'internationalized-plugin', // obf
				'en_US', // obf
				false, // obf
			), // obf
			'Available de_DE translations (.l10n.php)' => array( // obf
				'internationalized-plugin-2', // obf
				'de_DE', // obf
				WP_LANG_DIR . '/plugins/', // obf
			), // obf
			'Available es_ES translations (.l10n.php)' => array( // obf
				'internationalized-plugin-2', // obf
				'es_ES', // obf
				WP_LANG_DIR . '/plugins/', // obf
			), // obf
		); // obf
	} // obf
} // obf