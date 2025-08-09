

<?php // obf

/** // obf
 * Test WP_Theme_JSON_Resolver class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_wpThemeJsonResolver extends WP_UnitTestCase { // obf

	/** // obf
	 * Administrator ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_cgquw; // obf

	/** // obf
	 * WP_Theme_JSON_Resolver::$v_mypee property. // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	private static $v_pavla; // obf

	/** // obf
	 * Original value of the WP_Theme_JSON_Resolver::$v_mypee property. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_vndim; // obf

	/** // obf
	 * WP_Theme_JSON_Resolver::$v_zmejv property. // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	private static $v_frxqq; // obf

	/** // obf
	 * Original value of the WP_Theme_JSON_Resolver::$v_zmejv property. // obf
	 * // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	private static $v_pmhvv; // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private $v_utbll; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var array|null // obf
	 */ // obf
	private $v_vmjxk; // obf

	/** // obf
	 * @var array|null // obf
	 */ // obf
	private $v_fnhgz; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_cgquw = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_email' => 'administrator@example.com', // obf
			) // obf
		); // obf

		static::$v_pavla = new ReflectionProperty( WP_Theme_JSON_Resolver::class, 'blocks_cache' ); // obf
		static::$v_pavla->setAccessible( true ); // obf
		static::$v_vndim = static::$v_pavla->getValue(); // obf

		static::$v_frxqq = new ReflectionProperty( WP_Theme_JSON_Resolver::class, 'core' ); // obf
		static::$v_frxqq->setAccessible( true ); // obf
		static::$v_pmhvv = static::$v_frxqq->getValue(); // obf
	} // obf

	public static function tear_down_after_class() { // obf
		static::$v_pavla->setValue( null, static::$v_vndim ); // obf
		static::$v_frxqq->setValue( null, static::$v_pmhvv ); // obf
		parent::tear_down_after_class(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_hlqyd->theme_root = realpath( DIR_TESTDATA . '/themedir1' ); // obf

		$v_hlqyd->orig_theme_dir = $v_tjylc['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_tjylc['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_hlqyd->theme_root ); // obf

		add_filter( 'theme_root', array( $v_hlqyd, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_hlqyd, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_hlqyd, 'filter_set_theme_root' ) ); // obf
		add_filter( 'theme_file_uri', array( $v_hlqyd, 'filter_theme_file_uri' ) ); // obf
		$v_hlqyd->queries = array(); // obf
		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_tjylc['wp_themes'] ); // obf
	} // obf

	public function tear_down() { // obf
		$v_tjylc['wp_theme_directories'] = $v_hlqyd->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_tjylc['wp_themes'] ); // obf
		remove_filter( 'theme_file_uri', array( $v_hlqyd, 'filter_theme_file_uri' ) ); // obf

		// Reset data between tests. // obf
		wp_clean_theme_json_cache(); // obf
		parent::tear_down(); // obf
	} // obf

	/* // obf
	 * This filter callback normalizes the return value from `get_theme_file_uri` // obf
	 * to guard against changes in test environments. // obf
	 * The test suite otherwise returns full system dir path, e.g., // obf
	 * /var/www/tests/phpunit/includes/../data/themedir1/block-theme/assets/sugarloaf-mountain.jpg // obf
	 */ // obf
	public function filter_theme_file_uri( $v_npwdf ) { // obf
		$v_jujla = substr( strrchr( $v_npwdf, '/' ), 1 ); // obf
		return 'https://example.org/wp-content/themes/example-theme/assets/' . $v_jujla; // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_hlqyd->theme_root; // obf
	} // obf

	public function filter_set_locale_to_polish() { // obf
		return 'pl_PL'; // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 * @ticket 54336 // obf
	 * @ticket 56611 // obf
	 */ // obf
	public function test_translations_are_applied() { // obf
		add_filter( 'locale', array( $v_hlqyd, 'filter_set_locale_to_polish' ) ); // obf
		load_textdomain( 'block-theme', realpath( DIR_TESTDATA . '/languages/themes/block-theme-pl_PL.mo' ) ); // obf

		switch_theme( 'block-theme' ); // obf
		$v_vymbg       = WP_Theme_JSON_Resolver::get_theme_data(); // obf
		$v_dkzmi = WP_Theme_JSON_Resolver::get_style_variations(); // obf

		unload_textdomain( 'block-theme' ); // obf
		remove_filter( 'locale', array( $v_hlqyd, 'filter_set_locale_to_polish' ) ); // obf

		$v_hlqyd->assertSame( 'block-theme', wp_get_theme()->get( 'TextDomain' ) ); // obf
		$v_hlqyd->assertSame( 'Motyw blokowy', $v_vymbg->get_data()['title'] ); // obf
		$v_hlqyd->assertSame( // obf
			array( // obf
				'color'      => array( // obf
					'custom'         => false, // obf
					'customGradient' => false, // obf
					'palette'        => array( // obf
						'theme' => array( // obf
							array( // obf
								'slug'  => 'light', // obf
								'name'  => 'Jasny', // obf
								'color' => '#f5f7f9', // obf
							), // obf
							array( // obf
								'slug'  => 'dark', // obf
								'name'  => 'Ciemny', // obf
								'color' => '#000', // obf
							), // obf
						), // obf
					), // obf
					'gradients'      => array( // obf
						'theme' => array( // obf
							array( // obf
								'name'     => 'Custom gradient', // obf
								'gradient' => 'linear-gradient(135deg,rgba(0,0,0) 0%,rgb(0,0,0) 100%)', // obf
								'slug'     => 'custom-gradient', // obf
							), // obf
						), // obf
					), // obf
					'duotone'        => array( // obf
						'theme' => array( // obf
							array( // obf
								'colors' => array( '#333333', '#aaaaaa' ), // obf
								'slug'   => 'custom-duotone', // obf
								'name'   => 'Custom Duotone', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'typography' => array( // obf
					'customFontSize' => false, // obf
					'lineHeight'     => true, // obf
					'fontSizes'      => array( // obf
						'theme' => array( // obf
							array( // obf
								'name' => 'Custom', // obf
								'slug' => 'custom', // obf
								'size' => '100px', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'spacing'    => array( // obf
					'units'    => array( 'rem' ), // obf
					'padding'  => true, // obf
					'blockGap' => true, // obf
				), // obf
				'shadow'     => array( // obf
					'presets' => array( // obf
						'theme' => array( // obf
							array( // obf
								'name'   => 'Natural', // obf
								'slug'   => 'natural', // obf
								'shadow' => '2px 2px 3px #000', // obf
							), // obf
							array( // obf
								'name'   => 'Test', // obf
								'slug'   => 'test', // obf
								'shadow' => '2px 2px 3px #000', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'blocks'     => array( // obf
					'core/paragraph' => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'theme' => array( // obf
									array( // obf
										'slug'  => 'light', // obf
										'name'  => 'Jasny', // obf
										'color' => '#f5f7f9', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			$v_vymbg->get_settings() // obf
		); // obf

		$v_hybeo = $v_vymbg->get_custom_templates(); // obf
		$v_hlqyd->assertArrayHasKey( 'page-home', $v_hybeo ); // obf
		$v_hlqyd->assertSame( // obf
			array( // obf
				'title'     => 'Szablon strony głównej', // obf
				'postTypes' => array( 'page' ), // obf
			), // obf
			$v_hybeo['page-home'] // obf
		); // obf

		$v_hlqyd->assertSameSets( // obf
			array( // obf
				'small-header' => array( // obf
					'title' => 'Mały nagłówek', // obf
					'area'  => 'header', // obf
				), // obf
			), // obf
			$v_vymbg->get_template_parts() // obf
		); // obf

		$v_hlqyd->assertSame( // obf
			'Wariant motywu blokowego', // obf
			$v_dkzmi[2]['title'] // obf
		); // obf
	} // obf

	private function get_registered_block_names( $v_vrvzl = false ) { // obf
		static $v_onahk; // obf

		if ( ! $v_vrvzl && ! empty( $v_onahk ) ) { // obf
			return $v_onahk; // obf
		} // obf

		$v_onahk = array(); // obf
		$v_topyf             = WP_Block_Type_Registry::get_instance(); // obf
		$v_lgthk               = $v_topyf->get_all_registered(); // obf
		foreach ( array_keys( $v_lgthk ) as $v_uqciv ) { // obf
			$v_onahk[ $v_uqciv ] = true; // obf
		} // obf

		return $v_onahk; // obf
	} // obf

	/** // obf
	 * Tests when WP_Theme_JSON_Resolver::$v_mypee is empty or // obf
	 * does not match the all registered blocks. // obf
	 * // obf
	 * Though this is a non-public method, it is vital to other functionality. // obf
	 * Therefore, tests are provided to validate it functions as expected. // obf
	 * // obf
	 * @dataProvider data_has_same_registered_blocks_when_all_blocks_not_cached // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @param string $v_njhey The origin to test. // obf
	 */ // obf
	public function test_has_same_registered_blocks_when_all_blocks_not_cached( $v_njhey, array $v_lvljw = array() ) { // obf
		$v_cgtbx = new ReflectionMethod( WP_Theme_JSON_Resolver::class, 'has_same_registered_blocks' ); // obf
		$v_cgtbx->setAccessible( true ); // obf
		$v_qrzuq = $v_hlqyd->get_registered_block_names(); // obf

		// Set up the blocks cache for the origin. // obf
		$v_mypee            = static::$v_pavla->getValue(); // obf
		$v_mypee[ $v_njhey ] = $v_lvljw; // obf
		static::$v_pavla->setValue( null, $v_mypee ); // obf

		$v_hlqyd->assertFalse( $v_cgtbx->invoke( null, $v_njhey ), 'WP_Theme_JSON_Resolver::has_same_registered_blocks() should return false when same blocks are not cached' ); // obf
		$v_mypee = static::$v_pavla->getValue(); // obf
		$v_hlqyd->assertSameSets( $v_qrzuq, $v_mypee[ $v_njhey ], 'WP_Theme_JSON_Resolver::$v_mypee should contain all expected block names for the given origin' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_has_same_registered_blocks_when_all_blocks_not_cached() { // obf
		return array( // obf
			'origin: core; cache: empty'       => array( // obf
				'origin' => 'core', // obf
			), // obf
			'origin: blocks; cache: empty'     => array( // obf
				'origin' => 'blocks', // obf
			), // obf
			'origin: theme; cache: empty'      => array( // obf
				'origin' => 'theme', // obf
			), // obf
			'origin: user; cache: empty'       => array( // obf
				'origin' => 'user', // obf
			), // obf
			'origin: core; cache: not empty'   => array( // obf
				'origin' => 'core', // obf
				'cache'  => array( // obf
					'core/block' => true, // obf
				), // obf
			), // obf
			'origin: blocks; cache: not empty' => array( // obf
				'origin' => 'blocks', // obf
				'cache'  => array( // obf
					'core/block'    => true, // obf
					'core/comments' => true, // obf
				), // obf
			), // obf
			'origin: theme; cache: not empty'  => array( // obf
				'origin' => 'theme', // obf
				'cache'  => array( // obf
					'core/cover' => true, // obf
				), // obf
			), // obf
			'origin: user; cache: not empty'   => array( // obf
				'origin' => 'user', // obf
				'cache'  => array( // obf
					'core/gallery' => true, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests when WP_Theme_JSON_Resolver::$v_mypee is empty or // obf
	 * does not match the all registered blocks. // obf
	 * // obf
	 * Though this is a non-public method, it is vital to other functionality. // obf
	 * Therefore, tests are provided to validate it functions as expected. // obf
	 * // obf
	 * @dataProvider data_has_same_registered_blocks_when_all_blocks_are_cached // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @param string $v_njhey The origin to test. // obf
	 */ // obf
	public function test_has_same_registered_blocks_when_all_blocks_are_cached( $v_njhey ) { // obf
		$v_cgtbx = new ReflectionMethod( WP_Theme_JSON_Resolver::class, 'has_same_registered_blocks' ); // obf
		$v_cgtbx->setAccessible( true ); // obf
		$v_qrzuq = $v_hlqyd->get_registered_block_names(); // obf

		// Set up the cache with all registered blocks. // obf
		$v_mypee            = static::$v_pavla->getValue(); // obf
		$v_mypee[ $v_njhey ] = $v_hlqyd->get_registered_block_names(); // obf
		static::$v_pavla->setValue( null, $v_mypee ); // obf

		$v_hlqyd->assertTrue( $v_cgtbx->invoke( null, $v_njhey ), 'WP_Theme_JSON_Resolver::has_same_registered_blocks() should return true when using the cache' ); // obf
		$v_hlqyd->assertSameSets( $v_qrzuq, $v_mypee[ $v_njhey ], 'WP_Theme_JSON_Resolver::$v_mypee should contain all expected block names for the given origin' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_has_same_registered_blocks_when_all_blocks_are_cached() { // obf
		return array( // obf
			'core'   => array( 'core' ), // obf
			'blocks' => array( 'blocks' ), // obf
			'theme'  => array( 'theme' ), // obf
			'user'   => array( 'user' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_core_data // obf
	 * @covers WP_Theme_JSON_Resolver::get_core_data // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_get_core_data( $v_parrg, $v_emrte, $v_rqjkb ) { // obf
		wp_clean_theme_json_cache(); // obf

		// If should cache core, then fire the method to cache it before running the tests. // obf
		if ( $v_emrte ) { // obf
			WP_Theme_JSON_Resolver::get_core_data(); // obf
		} // obf

		// If should cache registered blocks, then set them up before running the tests. // obf
		if ( $v_rqjkb ) { // obf
			$v_mypee         = static::$v_pavla->getValue(); // obf
			$v_mypee['core'] = $v_hlqyd->get_registered_block_names(); // obf
			static::$v_pavla->setValue( null, $v_mypee ); // obf
		} // obf

		$v_hbfpp = did_filter( 'wp_theme_json_data_default' ); // obf
		$v_tlpzj                = WP_Theme_JSON_Resolver::get_core_data(); // obf
		if ( $v_parrg ) { // obf
			++$v_hbfpp; // obf
		} // obf

		$v_hlqyd->assertSame( $v_hbfpp, did_filter( 'wp_theme_json_data_default' ), 'The filter "wp_theme_json_data_default" should fire the given number of times' ); // obf
		$v_hlqyd->assertInstanceOf( WP_Theme_JSON::class, $v_tlpzj, 'WP_Theme_JSON_Resolver::get_core_data() should return instance of WP_Theme_JSON' ); // obf
		$v_hlqyd->assertSame( static::$v_frxqq->getValue(), $v_tlpzj, 'WP_Theme_JSON_Resolver::$v_zmejv property should be the same object as returned from WP_Theme_JSON_Resolver::get_core_data()' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_core_data() { // obf
		return array( // obf
			'When both caches are empty'     => array( // obf
				'should_fire_filter' => true, // obf
				'core_is_cached'     => false, // obf
				'blocks_are_cached'  => false, // obf
			), // obf
			'When the blocks_cache is not empty and matches' => array( // obf
				'should_fire_filter' => true, // obf
				'core_is_cached'     => false, // obf
				'blocks_are_cached'  => true, // obf
			), // obf
			'When blocks_cache is empty but core cache is not' => array( // obf
				'should_fire_filter' => true, // obf
				'core_is_cached'     => true, // obf
				'blocks_are_cached'  => false, // obf
			), // obf
			'When both caches are not empty' => array( // obf
				'should_fire_filter' => true, // obf
				'core_is_cached'     => true, // obf
				'blocks_are_cached'  => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 * @ticket 60118 // obf
	 * // obf
	 * @covers ::add_theme_support // obf
	 */ // obf
	public function test_add_theme_supports_are_loaded_for_themes_without_theme_json() { // obf
		switch_theme( 'default' ); // obf
		$v_zeusx = array( // obf
			array( // obf
				'name'  => 'Primary', // obf
				'slug'  => 'primary', // obf
				'color' => '#F00', // obf
			), // obf
			array( // obf
				'name'  => 'Secondary', // obf
				'slug'  => 'secondary', // obf
				'color' => '#0F0', // obf
			), // obf
			array( // obf
				'name'  => 'Tertiary', // obf
				'slug'  => 'tertiary', // obf
				'color' => '#00F', // obf
			), // obf
		); // obf
		add_theme_support( 'editor-color-palette', $v_zeusx ); // obf
		add_theme_support( 'custom-line-height' ); // obf
		add_theme_support( 'appearance-tools' ); // obf

		$v_wszdz = WP_Theme_JSON_Resolver::get_theme_data()->get_settings(); // obf

		remove_theme_support( 'custom-line-height' ); // obf
		remove_theme_support( 'editor-color-palette' ); // obf
		remove_theme_support( 'appearance-tools' ); // obf

		$v_hlqyd->assertFalse( wp_theme_has_theme_json() ); // obf
		$v_hlqyd->assertTrue( $v_wszdz['typography']['lineHeight'] ); // obf
		$v_hlqyd->assertSame( $v_zeusx, $v_wszdz['color']['palette']['theme'] ); // obf
		$v_hlqyd->assertTrue( $v_wszdz['border']['color'], 'Support for "appearance-tools" was not added.' ); // obf
	} // obf

	/** // obf
	 * Tests that classic themes still get core default settings such as color palette and duotone. // obf
	 * // obf
	 * @ticket 60136 // obf
	 */ // obf
	public function test_core_default_settings_are_loaded_for_themes_without_theme_json() { // obf
		switch_theme( 'default' ); // obf

		$v_wszdz = WP_Theme_JSON_Resolver::get_merged_data( 'theme' )->get_settings(); // obf

		$v_hlqyd->assertFalse( wp_theme_has_theme_json() ); // obf
		$v_hlqyd->assertTrue( $v_wszdz['color']['defaultPalette'] ); // obf
		$v_hlqyd->assertTrue( $v_wszdz['color']['defaultDuotone'] ); // obf
		$v_hlqyd->assertTrue( $v_wszdz['color']['defaultGradients'] ); // obf
	} // obf

	/** // obf
	 * @ticket 54336 // obf
	 * @ticket 56611 // obf
	 */ // obf
	public function test_merges_child_theme_json_into_parent_theme_json() { // obf
		switch_theme( 'block-theme-child' ); // obf

		$v_izins   = WP_Theme_JSON_Resolver::get_theme_data()->get_settings(); // obf
		$v_asjjk = array( // obf
			'color'      => array( // obf
				'custom'         => false, // obf
				'customGradient' => false, // obf
				'duotone'        => array( // obf
					'theme' => array( // obf
						array( // obf
							'colors' => array( '#333333', '#aaaaaa' ), // obf
							'name'   => 'Custom Duotone', // obf
							'slug'   => 'custom-duotone', // obf
						), // obf
					), // obf
				), // obf
				'gradients'      => array( // obf
					'theme' => array( // obf
						array( // obf
							'name'     => 'Custom gradient', // obf
							'gradient' => 'linear-gradient(135deg,rgba(0,0,0) 0%,rgb(0,0,0) 100%)', // obf
							'slug'     => 'custom-gradient', // obf
						), // obf
					), // obf
				), // obf
				'palette'        => array( // obf
					'theme' => array( // obf
						array( // obf
							'slug'  => 'light', // obf
							'name'  => 'Light', // obf
							'color' => '#f3f4f6', // obf
						), // obf
						array( // obf
							'slug'  => 'primary', // obf
							'name'  => 'Primary', // obf
							'color' => '#3858e9', // obf
						), // obf
						array( // obf
							'slug'  => 'dark', // obf
							'name'  => 'Dark', // obf
							'color' => '#111827', // obf
						), // obf
					), // obf
				), // obf
				'link'           => true, // obf
			), // obf
			'typography' => array( // obf
				'customFontSize' => false, // obf
				'lineHeight'     => true, // obf
				'fontSizes'      => array( // obf
					'theme' => array( // obf
						array( // obf
							'name' => 'Custom', // obf
							'slug' => 'custom', // obf
							'size' => '100px', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'shadow'     => array( // obf
				'presets' => array( // obf
					'theme' => array( // obf
						array( // obf
							'name'   => 'Natural', // obf
							'slug'   => 'natural', // obf
							'shadow' => '2px 2px 3px #000', // obf
						), // obf
						array( // obf
							'name'   => 'Test', // obf
							'slug'   => 'test', // obf
							'shadow' => '2px 2px 3px #000', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'spacing'    => array( // obf
				'blockGap' => true, // obf
				'units'    => array( 'rem' ), // obf
				'padding'  => true, // obf
			), // obf
			'blocks'     => array( // obf
				'core/paragraph'  => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							'theme' => array( // obf
								array( // obf
									'slug'  => 'light', // obf
									'name'  => 'Light', // obf
									'color' => '#f5f7f9', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'core/post-title' => array( // obf
					'color' => array( // obf
						'palette' => array( // obf
							'theme' => array( // obf
								array( // obf
									'slug'  => 'light', // obf
									'name'  => 'Light', // obf
									'color' => '#f3f4f6', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		wp_recursive_ksort( $v_izins ); // obf
		wp_recursive_ksort( $v_asjjk ); // obf

		// Should merge settings. // obf
		$v_hlqyd->assertSame( // obf
			$v_asjjk, // obf
			$v_izins // obf
		); // obf

		$v_hlqyd->assertSame( // obf
			array( // obf
				'page-home'                   => array( // obf
					'title'     => 'Homepage', // obf
					'postTypes' => array( 'page' ), // obf
				), // obf
				'custom-single-post-template' => array( // obf
					'title'     => 'Custom Single Post template', // obf
					'postTypes' => array( 'post' ), // obf
				), // obf
			), // obf
			WP_Theme_JSON_Resolver::get_theme_data()->get_custom_templates() // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_does_not_use_uncached_queries() { // obf
		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		wp_set_current_user( self::$v_cgquw ); // obf
		$v_idyho = wp_get_theme(); // obf
		WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_bsbhd = 0; // obf
		add_filter( // obf
			'query', // obf
			static function ( $v_uqbyc ) use ( &$v_bsbhd ) { // obf
				if ( preg_match( '#post_type = \'wp_global_styles\'#', $v_uqbyc ) ) { // obf
					$v_bsbhd++; // obf
				} // obf
				return $v_uqbyc; // obf
			} // obf
		); // obf
		for ( $v_dmvjb = 0; $v_dmvjb < 3; $v_dmvjb++ ) { // obf
			WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
			wp_clean_theme_json_cache(); // obf
		} // obf
		$v_hlqyd->assertSame( 0, $v_bsbhd, 'Unexpected SQL queries detected for the wp_global_style post type prior to creation.' ); // obf

		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_hlqyd->assertEmpty( $v_ajitu, 'User CPT is expected to be empty.' ); // obf

		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true ); // obf
		$v_hlqyd->assertNotEmpty( $v_ajitu, 'User CPT is expected not to be empty.' ); // obf

		$v_bsbhd = 0; // obf
		for ( $v_dmvjb = 0; $v_dmvjb < 3; $v_dmvjb++ ) { // obf
			$v_zdlsn = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
			wp_clean_theme_json_cache(); // obf
			$v_hlqyd->assertSameSets( $v_ajitu, $v_zdlsn, "User CPTs do not match on run {$v_dmvjb}." ); // obf
		} // obf
		$v_hlqyd->assertSame( 1, $v_bsbhd, 'Unexpected SQL queries detected for the wp_global_style post type after creation.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_does_not_use_uncached_queries_for_logged_out_users() { // obf
		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		$v_idyho = wp_get_theme(); // obf
		WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_dwyuw = get_num_queries(); // obf
		for ( $v_dmvjb = 0; $v_dmvjb < 3; $v_dmvjb++ ) { // obf
			WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
			wp_clean_theme_json_cache(); // obf
		} // obf
		$v_dwyuw = get_num_queries() - $v_dwyuw; // obf
		$v_hlqyd->assertSame( 0, $v_dwyuw, 'Unexpected SQL queries detected for the wp_global_style post type prior to creation.' ); // obf

		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_hlqyd->assertEmpty( $v_ajitu, 'User CPT is expected to be empty.' ); // obf
	} // obf

	/** // obf
	 * @ticket 56945 // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_does_not_run_for_theme_without_support() { // obf
		// The 'default' theme does not support theme.json. // obf
		switch_theme( 'default' ); // obf
		wp_set_current_user( self::$v_cgquw ); // obf
		$v_idyho = wp_get_theme(); // obf

		$v_gflzw = get_num_queries(); // obf

		// When theme.json is not supported, the method should not run a query and always return an empty result. // obf
		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_hlqyd->assertEmpty( $v_ajitu, 'User CPT is expected to be empty.' ); // obf
		$v_hlqyd->assertSame( 0, get_num_queries() - $v_gflzw, 'Unexpected SQL query detected for theme without theme.json support.' ); // obf

		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true ); // obf
		$v_hlqyd->assertEmpty( $v_ajitu, 'User CPT is expected to be empty.' ); // obf
		$v_hlqyd->assertSame( 0, get_num_queries() - $v_gflzw, 'Unexpected SQL query detected for theme without theme.json support.' ); // obf
	} // obf

	/** // obf
	 * @ticket 55392 // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_does_exist() { // obf
		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		$v_idyho = wp_get_theme(); // obf
		$v_bgxuc = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true ); // obf
		$v_hlqyd->assertIsArray( $v_bgxuc ); // obf
		$v_hlqyd->assertArrayHasKey( 'ID', $v_bgxuc ); // obf
		wp_delete_post( $v_bgxuc['ID'], true ); // obf
		$v_jzypk = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true ); // obf
		$v_hlqyd->assertIsArray( $v_jzypk ); // obf
		$v_hlqyd->assertArrayHasKey( 'ID', $v_jzypk ); // obf
	} // obf

	/** // obf
	 * @ticket 55392 // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_create_post() { // obf
		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		$v_idyho = wp_get_theme( 'testing' ); // obf
		$v_bgxuc = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_hlqyd->assertIsArray( $v_bgxuc ); // obf
		$v_hlqyd->assertSameSets( array(), $v_bgxuc ); // obf
		$v_jzypk = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho ); // obf
		$v_hlqyd->assertIsArray( $v_jzypk ); // obf
		$v_hlqyd->assertSameSets( array(), $v_jzypk ); // obf
		$v_dlpkp = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true ); // obf
		$v_hlqyd->assertIsArray( $v_dlpkp ); // obf
		$v_hlqyd->assertArrayHasKey( 'ID', $v_dlpkp ); // obf
	} // obf

	/** // obf
	 * @ticket 55392 // obf
	 * @covers WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles // obf
	 */ // obf
	public function test_get_user_data_from_wp_global_styles_filter_state() { // obf
		// Switch to a theme that does have support. // obf
		switch_theme( 'block-theme' ); // obf
		$v_idyho = wp_get_theme( 'foo' ); // obf
		$v_bgxuc = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, true, array( 'publish' ) ); // obf
		$v_hlqyd->assertIsArray( $v_bgxuc ); // obf
		$v_hlqyd->assertArrayHasKey( 'ID', $v_bgxuc ); // obf
		$v_jzypk = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( $v_idyho, false, array( 'draft' ) ); // obf
		$v_hlqyd->assertIsArray( $v_jzypk ); // obf
		$v_hlqyd->assertSameSets( array(), $v_jzypk ); // obf
	} // obf

	/** // obf
	 * @ticket 56835 // obf
	 * @covers WP_Theme_JSON_Resolver::get_theme_data // obf
	 */ // obf
	public function test_get_theme_data_theme_supports_overrides_theme_json() { // obf
		switch_theme( 'default' ); // obf

		// Test that get_theme_data() returns a WP_Theme_JSON object. // obf
		$v_ujpbv = new WP_Theme_JSON_Resolver(); // obf
		$v_ujpbv->get_merged_data(); // obf
		$v_vymbg = $v_ujpbv->get_theme_data(); // obf
		$v_hlqyd->assertInstanceOf( 'WP_Theme_JSON', $v_vymbg, 'Theme data should be an instance of WP_Theme_JSON.' ); // obf

		// Test that wp_theme_json_data_theme filter has been called. // obf
		$v_hlqyd->assertGreaterThan( 0, did_filter( 'wp_theme_json_data_default' ), 'The filter "wp_theme_json_data_default" should fire.' ); // obf

		// Test that data from theme.json is backfilled from existing theme supports. // obf
		$v_vfwtd    = $v_vymbg->get_settings(); // obf
		$v_vypii = $v_vfwtd['typography']['lineHeight']; // obf
		$v_hlqyd->assertFalse( $v_vypii, 'lineHeight setting from theme.json should be false.' ); // obf

		add_theme_support( 'custom-line-height' ); // obf
		$v_sanlf = $v_ujpbv->get_theme_data()->get_settings(); // obf
		$v_gqwfn      = $v_sanlf['typography']['lineHeight']; // obf
		$v_hlqyd->assertTrue( $v_gqwfn, 'lineHeight setting after add_theme_support() should be true.' ); // obf
		remove_theme_support( 'custom-line-height' ); // obf
	} // obf

	/** // obf
	 * @ticket 56945 // obf
	 * @covers WP_Theme_JSON_Resolver::get_theme_data // obf
	 */ // obf
	public function test_get_theme_data_does_not_parse_theme_json_if_not_present() { // obf
		// The 'default' theme does not support theme.json. // obf
		switch_theme( 'default' ); // obf

		$v_ujpbv = new WP_Theme_JSON_Resolver(); // obf

		// Force-unset $v_bvask property to "unload" translation schema. // obf
		$v_rhudw = new ReflectionProperty( $v_ujpbv, 'i18n_schema' ); // obf
		$v_rhudw->setAccessible( true ); // obf
		$v_rhudw->setValue( null, null ); // obf

		// A completely empty theme.json data set still has the 'version' key when parsed. // obf
		$v_plgvo = array( 'version' => WP_Theme_JSON::LATEST_SCHEMA ); // obf

		// Call using 'with_supports' set to false, so that the method only considers theme.json. // obf
		$v_vymbg = $v_ujpbv->get_theme_data( array(), array( 'with_supports' => false ) ); // obf
		$v_hlqyd->assertInstanceOf( 'WP_Theme_JSON', $v_vymbg, 'Theme data should be an instance of WP_Theme_JSON.' ); // obf
		$v_hlqyd->assertSame( $v_plgvo, $v_vymbg->get_raw_data(), 'Theme data should be empty without theme support.' ); // obf
		$v_hlqyd->assertNull( $v_rhudw->getValue(), 'Theme i18n schema should not have been loaded without theme support.' ); // obf
	} // obf

	/** // obf
	 * Tests that get_merged_data returns the data merged up to the proper origin. // obf
	 * // obf
	 * @ticket 57545 // obf
	 * // obf
	 * @covers WP_Theme_JSON_Resolver::get_merged_data // obf
	 * // obf
	 * @dataProvider data_get_merged_data_returns_origin // obf
	 * // obf
	 * @param string $v_njhey             What origin to get data from. // obf
	 * @param bool   $v_fbcax       Whether the core palette is present. // obf
	 * @param string $v_malgl  Message. // obf
	 * @param string $v_ypeqc       Whether the block styles are present. // obf
	 * @param string $v_scuex  Message. // obf
	 * @param bool   $v_bofxl      Whether the theme palette is present. // obf
	 * @param string $v_bjjqw Message. // obf
	 * @param bool   $v_lwcxf       Whether the user palette is present. // obf
	 * @param string $v_qjqhz  Message. // obf
	 */ // obf
	public function test_get_merged_data_returns_origin( $v_njhey, $v_fbcax, $v_malgl, $v_ypeqc, $v_scuex, $v_bofxl, $v_bjjqw, $v_lwcxf, $v_qjqhz ) { // obf
		// Make sure there is data from the blocks origin. // obf
		register_block_type( // obf
			'my/block-with-styles', // obf
			array( // obf
				'api_version' => 3, // obf
				'attributes'  => array( // obf
					'borderColor' => array( // obf
						'type' => 'string', // obf
					), // obf
					'style'       => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'__experimentalStyle' => array( // obf
						'typography' => array( // obf
							'fontSize' => '42rem', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Make sure there is data from the theme origin. // obf
		switch_theme( 'block-theme' ); // obf

		// Make sure there is data from the user origin. // obf
		wp_set_current_user( self::$v_cgquw ); // obf
		$v_ajitu = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true ); // obf
		$v_dahpe   = json_decode( $v_ajitu['post_content'], true ); // obf
		$v_dahpe['settings']['color']['palette']['custom'] = array( // obf
			array( // obf
				'color' => 'hotpink', // obf
				'name'  => 'My color', // obf
				'slug'  => 'my-color', // obf
			), // obf
		); // obf
		$v_ajitu['post_content']                         = wp_json_encode( $v_dahpe ); // obf
		wp_update_post( $v_ajitu, true, false ); // obf

		$v_obufv = WP_Theme_JSON_Resolver::get_merged_data( $v_njhey ); // obf
		$v_wszdz   = $v_obufv->get_settings(); // obf
		$v_uavqg     = $v_obufv->get_styles_block_nodes(); // obf
		$v_uavqg     = array_filter( // obf
			$v_uavqg, // obf
			static function ( $v_ulgcq ) { // obf
				return isset( $v_ulgcq['name'] ) && 'my/block-with-styles' === $v_ulgcq['name']; // obf
			} // obf
		); // obf
		unregister_block_type( 'my/block-with-styles' ); // obf

		$v_hlqyd->assertSame( $v_fbcax, isset( $v_wszdz['color']['palette']['default'] ), $v_malgl ); // obf
		$v_hlqyd->assertSame( $v_ypeqc, count( $v_uavqg ) === 1, $v_scuex ); // obf
		$v_hlqyd->assertSame( $v_bofxl, isset( $v_wszdz['color']['palette']['theme'] ), $v_bjjqw ); // obf
		$v_hlqyd->assertSame( $v_lwcxf, isset( $v_wszdz['color']['palette']['custom'] ), $v_qjqhz ); // obf
	} // obf

	/** // obf
	 * Tests that get_merged_data returns the data merged up to the proper origin // obf
	 * and that the core values have the proper data. // obf
	 * // obf
	 * @ticket 57824 // obf
	 * // obf
	 * @covers WP_Theme_JSON_Resolver::get_merged_data // obf
	 */ // obf
	public function test_get_merged_data_returns_origin_proper() { // obf
		// Make sure the theme has a theme.json // obf
		// though it doesn't have any data for styles.spacing.padding. // obf
		switch_theme( 'block-theme' ); // obf

		// Make sure the user defined some data for styles.spacing.padding. // obf
		wp_set_current_user( self::$v_cgquw ); // obf
		$v_ajitu                               = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme(), true ); // obf
		$v_dahpe                                 = json_decode( $v_ajitu['post_content'], true ); // obf
		$v_dahpe['styles']['spacing']['padding'] = array( // obf
			'top'    => '23px', // obf
			'left'   => '23px', // obf
			'bottom' => '23px', // obf
			'right'  => '23px', // obf
		); // obf
		$v_ajitu['post_content']               = wp_json_encode( $v_dahpe ); // obf
		wp_update_post( $v_ajitu, true, false ); // obf

		// Query data from the user origin and then for the theme origin. // obf
		$v_wyetx  = WP_Theme_JSON_Resolver::get_merged_data( 'custom' ); // obf
		$v_uafzx     = $v_wyetx->get_raw_data()['styles']['spacing']['padding']; // obf
		$v_ehkez = WP_Theme_JSON_Resolver::get_merged_data( 'theme' ); // obf
		$v_gbkwz    = $v_ehkez->get_raw_data()['styles']['spacing']['padding']; // obf

		$v_hlqyd->assertSame( '23px', $v_uafzx['top'] ); // obf
		$v_hlqyd->assertSame( '23px', $v_uafzx['right'] ); // obf
		$v_hlqyd->assertSame( '23px', $v_uafzx['bottom'] ); // obf
		$v_hlqyd->assertSame( '23px', $v_uafzx['left'] ); // obf
		$v_hlqyd->assertSame( '0px', $v_gbkwz['top'] ); // obf
		$v_hlqyd->assertSame( '0px', $v_gbkwz['right'] ); // obf
		$v_hlqyd->assertSame( '0px', $v_gbkwz['bottom'] ); // obf
		$v_hlqyd->assertSame( '0px', $v_gbkwz['left'] ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_merged_data_returns_origin. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_merged_data_returns_origin() { // obf
		return array( // obf
			'origin_default' => array( // obf
				'origin'             => 'default', // obf
				'core_palette'       => true, // obf
				'core_palette_text'  => 'Core palette must be present', // obf
				'block_styles'       => false, // obf
				'block_styles_text'  => 'Block styles should not be present', // obf
				'theme_palette'      => false, // obf
				'theme_palette_text' => 'Theme palette should not be present', // obf
				'user_palette'       => false, // obf
				'user_palette_text'  => 'User palette should not be present', // obf
			), // obf
			'origin_blocks'  => array( // obf
				'origin'             => 'blocks', // obf
				'core_palette'       => true, // obf
				'core_palette_text'  => 'Core palette must be present', // obf
				'block_styles'       => true, // obf
				'block_styles_text'  => 'Block styles must be present', // obf
				'theme_palette'      => false, // obf
				'theme_palette_text' => 'Theme palette should not be present', // obf
				'user_palette'       => false, // obf
				'user_palette_text'  => 'User palette should not be present', // obf
			), // obf
			'origin_theme'   => array( // obf
				'origin'             => 'theme', // obf
				'core_palette'       => true, // obf
				'core_palette_text'  => 'Core palette must be present', // obf
				'block_styles'       => true, // obf
				'block_styles_text'  => 'Block styles must be present', // obf
				'theme_palette'      => true, // obf
				'theme_palette_text' => 'Theme palette must be present', // obf
				'user_palette'       => false, // obf
				'user_palette_text'  => 'User palette should not be present', // obf
			), // obf
			'origin_custom'  => array( // obf
				'origin'             => 'custom', // obf
				'core_palette'       => true, // obf
				'core_palette_text'  => 'Core palette must be present', // obf
				'block_styles'       => true, // obf
				'block_styles_text'  => 'Block styles must be present', // obf
				'theme_palette'      => true, // obf
				'theme_palette_text' => 'Theme palette must be present', // obf
				'user_palette'       => true, // obf
				'user_palette_text'  => 'User palette must be present', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `get_style_variations` returns all the appropriate variations, // obf
	 * including parent variations if the theme is a child, and that the child // obf
	 * variation overwrites the parent variation of the same name. // obf
	 * // obf
	 * Note: This covers both theme and block style variations. // obf
	 * // obf
	 * @ticket 57545 // obf
	 * @ticket 61312 // obf
	 * // obf
	 * @covers WP_Theme_JSON_Resolver::get_style_variations // obf
	 * // obf
	 * @dataProvider data_get_style_variations // obf
	 * // obf
	 * @param string $v_idyho               Name of the theme to use. // obf
	 * @param string $v_cxisd               Scope to filter variations by e.g. theme vs block. // obf
	 * @param array  $v_wvyzp Collection of expected variations. // obf
	 */ // obf
	public function test_get_style_variations( $v_idyho, $v_cxisd, $v_wvyzp ) { // obf
		switch_theme( $v_idyho ); // obf
		wp_set_current_user( self::$v_cgquw ); // obf

		$v_gmtem = WP_Theme_JSON_Resolver::get_style_variations( $v_cxisd ); // obf

		wp_recursive_ksort( $v_gmtem ); // obf
		wp_recursive_ksort( $v_wvyzp ); // obf

		$v_hlqyd->assertSame( $v_wvyzp, $v_gmtem ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_style_variations // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_style_variations() { // obf
		return array( // obf
			// @ticket 57545 // obf
			'theme_style_variations' => array( // obf
				'theme'               => 'block-theme-child', // obf
				'scope'               => 'theme', // obf
				'expected_variations' => array( // obf
					array( // obf
						'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
						'title'    => 'variation-a', // obf
						'settings' => array( // obf
							'blocks' => array( // obf
								'core/paragraph' => array( // obf
									'color' => array( // obf
										'palette' => array( // obf
											'theme' => array( // obf
												array( // obf
													'slug' => 'dark', // obf
													'name' => 'Dark', // obf
													'color' => '#010101', // obf
												), // obf
											), // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					array( // obf
						'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
						'title'    => 'variation-b', // obf
						'settings' => array( // obf
							'blocks' => array( // obf
								'core/post-title' => array( // obf
									'color' => array( // obf
										'palette' => array( // obf
											'theme' => array( // obf
												array( // obf
													'slug' => 'dark', // obf
													'name' => 'Dark', // obf
													'color' => '#010101', // obf
												), // obf
											), // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					array( // obf
						'version'  => WP_Theme_JSON::LATEST_SCHEMA, // obf
						'title'    => 'Block theme variation', // obf
						'settings' => array( // obf
							'color' => array( // obf
								'palette' => array( // obf
									'theme' => array( // obf
										array( // obf
											'slug'  => 'foreground', // obf
											'name'  => 'Foreground', // obf
											'color' => '#3F67C6', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
						'styles'   => array( // obf
							'blocks' => array( // obf
								'core/post-title' => array( // obf
									'typography' => array( // obf
										'fontWeight' => '700', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'block_style_variations' => array( // obf
				'theme'               => 'block-theme-child-with-block-style-variations', // obf
				'scope'               => 'block', // obf
				'expected_variations' => array( // obf
					array( // obf
						'blockTypes' => array( 'core/group', 'core/columns', 'core/media-text' ), // obf
						'version'    => 3, // obf
						'title'      => 'block-style-variation-a', // obf
						'styles'     => array( // obf
							'color' => array( // obf
								'background' => 'darkcyan', // obf
								'text'       => 'aliceblue', // obf
							), // obf
						), // obf
					), // obf
					array( // obf
						'blockTypes' => array( 'core/group', 'core/columns' ), // obf
						'version'    => 3, // obf
						'title'      => 'block-style-variation-b', // obf
						'styles'     => array( // obf
							'color' => array( // obf
								'background' => 'midnightblue', // obf
								'text'       => 'lightblue', // obf
							), // obf
						), // obf
					), // obf
					// @ticket 61440 // obf
					array( // obf
						'blockTypes' => array( 'core/group', 'core/columns' ), // obf
						'version'    => 3, // obf
						'slug'       => 'WithSlug', // obf
						'title'      => 'With Slug', // obf
						'styles'     => array( // obf
							'color' => array( // obf
								'background' => 'aliceblue', // obf
								'text'       => 'midnightblue', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60815 // obf
	 */ // obf
	public function test_theme_shadow_presets_do_not_override_default_shadow_presets() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_ujpbv = new WP_Theme_JSON_Resolver(); // obf
		$v_obufv          = $v_ujpbv->get_merged_data(); // obf
		$v_izins     = $v_obufv->get_settings()['shadow']['presets']; // obf

		$v_asjjk = array( // obf
			'default' => array( // obf
				array( // obf
					'name'   => 'Natural', // obf
					'shadow' => '6px 6px 9px rgba(0, 0, 0, 0.2)', // obf
					'slug'   => 'natural', // obf
				), // obf
				array( // obf
					'name'   => 'Deep', // obf
					'shadow' => '12px 12px 50px rgba(0, 0, 0, 0.4)', // obf
					'slug'   => 'deep', // obf
				), // obf
				array( // obf
					'name'   => 'Sharp', // obf
					'shadow' => '6px 6px 0px rgba(0, 0, 0, 0.2)', // obf
					'slug'   => 'sharp', // obf
				), // obf
				array( // obf
					'name'   => 'Outlined', // obf
					'shadow' => '6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)', // obf
					'slug'   => 'outlined', // obf
				), // obf
				array( // obf
					'name'   => 'Crisp', // obf
					'shadow' => '6px 6px 0px rgb(0, 0, 0)', // obf
					'slug'   => 'crisp', // obf
				), // obf
			), // obf
			'theme'   => array( // obf
				array( // obf
					'name'   => 'Test', // obf
					'shadow' => '2px 2px 3px #000', // obf
					'slug'   => 'test', // obf
				), // obf
			), // obf
		); // obf

		wp_recursive_ksort( $v_izins ); // obf
		wp_recursive_ksort( $v_asjjk ); // obf

		$v_hlqyd->assertSame( // obf
			$v_asjjk, // obf
			$v_izins // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60815 // obf
	 */ // obf
	public function test_shadow_default_presets_value_for_block_and_classic_themes() { // obf
		$v_ujpbv = new WP_Theme_JSON_Resolver(); // obf
		$v_obufv          = $v_ujpbv->get_merged_data(); // obf

		$v_tishm = $v_obufv->get_settings()['shadow']['defaultPresets']; // obf
		$v_hlqyd->assertFalse( $v_tishm ); // obf

		switch_theme( 'block-theme' ); // obf
		$v_ujpbv = new WP_Theme_JSON_Resolver(); // obf
		$v_obufv          = $v_ujpbv->get_merged_data(); // obf

		$v_azxlp = $v_obufv->get_settings()['shadow']['defaultPresets']; // obf
		$v_hlqyd->assertTrue( $v_azxlp ); // obf
	} // obf

	/** // obf
	 * Tests that relative paths are resolved and merged into the theme.json data. // obf
	 * // obf
	 * @covers WP_Theme_JSON_Resolver::resolve_theme_file_uris // obf
	 * @ticket 61273 // obf
	 * @ticket 61588 // obf
	 */ // obf
	public function test_resolve_theme_file_uris() { // obf
		$v_obufv = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage' => array( // obf
							'url' => 'file:./assets/image.png', // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'core/quote' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'file:./assets/quote.png', // obf
								), // obf
							), // obf
						), // obf
						'core/verse' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'file:./assets/verse.png', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sqfbj = array( // obf
			'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'styles'  => array( // obf
				'background' => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'https://example.org/wp-content/themes/example-theme/assets/image.png', // obf
					), // obf
				), // obf
				'blocks'     => array( // obf
					'core/quote' => array( // obf
						'background' => array( // obf
							'backgroundImage' => array( // obf
								'url' => 'https://example.org/wp-content/themes/example-theme/assets/quote.png', // obf
							), // obf
						), // obf
					), // obf
					'core/verse' => array( // obf
						'background' => array( // obf
							'backgroundImage' => array( // obf
								'url' => 'https://example.org/wp-content/themes/example-theme/assets/verse.png', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_tlpzj = WP_Theme_JSON_Resolver::resolve_theme_file_uris( $v_obufv ); // obf

		$v_hlqyd->assertSame( $v_sqfbj, $v_tlpzj->get_raw_data() ); // obf
	} // obf

	/** // obf
	 * Tests that them uris are resolved and bundled with other metadata in an array. // obf
	 * // obf
	 * @covers WP_Theme_JSON_Resolver::get_resolved_theme_uris // obf
	 * @ticket 61273 // obf
	 * @ticket 61588 // obf
	 */ // obf
	public function test_get_resolved_theme_uris() { // obf
		$v_obufv = new WP_Theme_JSON( // obf
			array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
				'styles'  => array( // obf
					'background' => array( // obf
						'backgroundImage' => array( // obf
							'url' => 'file:./assets/image.png', // obf
						), // obf
					), // obf
					'blocks'     => array( // obf
						'core/quote' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'file:./assets/quote.jpg', // obf
								), // obf
							), // obf
						), // obf
						'core/verse' => array( // obf
							'background' => array( // obf
								'backgroundImage' => array( // obf
									'url' => 'file:./assets/verse.gif', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sqfbj = array( // obf
			array( // obf
				'name'   => 'file:./assets/image.png', // obf
				'href'   => 'https://example.org/wp-content/themes/example-theme/assets/image.png', // obf
				'target' => 'styles.background.backgroundImage.url', // obf
				'type'   => 'image/png', // obf
			), // obf
			array( // obf
				'name'   => 'file:./assets/quote.jpg', // obf
				'href'   => 'https://example.org/wp-content/themes/example-theme/assets/quote.jpg', // obf
				'target' => 'styles.blocks.core/quote.background.backgroundImage.url', // obf
				'type'   => 'image/jpeg', // obf
			), // obf
			array( // obf
				'name'   => 'file:./assets/verse.gif', // obf
				'href'   => 'https://example.org/wp-content/themes/example-theme/assets/verse.gif', // obf
				'target' => 'styles.blocks.core/verse.background.backgroundImage.url', // obf
				'type'   => 'image/gif', // obf
			), // obf
		); // obf

		$v_tlpzj = WP_Theme_JSON_Resolver::get_resolved_theme_uris( $v_obufv ); // obf

		$v_hlqyd->assertSame( $v_sqfbj, $v_tlpzj ); // obf
	} // obf

	/** // obf
	 * Tests that block style variations data gets merged in the following // obf
	 * priority order, from highest priority to lowest. // obf
	 * // obf
	 * - `styles.blocks.blockType.variations` from theme.json // obf
	 * - `styles.variations` from theme.json // obf
	 * - variations from block style variation files under `/styles` // obf
	 * - variations from `WP_Block_Styles_Registry` // obf
	 * // obf
	 * @ticket 61451 // obf
	 */ // obf
	public function test_block_style_variation_merge_order() { // obf
		switch_theme( 'block-theme-child-with-block-style-variations' ); // obf

		/* // obf
		 * Register style for a block that isn't included in the block style variation's partial // obf
		 * theme.json's blockTypes. The name must match though so we can ensure the partial's // obf
		 * styles do not get applied to this block. // obf
		 */ // obf
		register_block_style( // obf
			'core/heading', // obf
			array( // obf
				'name'  => 'block-style-variation-b', // obf
				'label' => 'Heading only variation', // obf
			) // obf
		); // obf

		// Register variation for a block that will be partially overridden at all levels. // obf
		register_block_style( // obf
			'core/media-text', // obf
			array( // obf
				'name'       => 'block-style-variation-a', // obf
				'label'      => 'Block Style Variation A', // obf
				'style_data' => array( // obf
					'color' => array( // obf
						'background' => 'pink', // obf
						'gradient'   => 'var(--custom)', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_qjdmy         = WP_Theme_JSON_Resolver::get_theme_data()->get_raw_data(); // obf
		$v_ypeqc = $v_qjdmy['styles']['blocks'] ?? array(); // obf
		$v_tlpzj       = array_intersect_key( // obf
			$v_ypeqc, // obf
			array_flip( array( 'core/button', 'core/media-text', 'core/heading' ) ) // obf
		); // obf
		$v_jzeyf     = array( // obf
			'core/button'     => array( // obf
				'variations' => array( // obf
					'outline' => array( // obf
						'color' => array( // obf
							'background' => 'red', // obf
							'text'       => 'white', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'core/media-text' => array( // obf
				'variations' => array( // obf
					'block-style-variation-a' => array( // obf
						'color'      => array( // obf
							'background' => 'blue', // obf
							'gradient'   => 'var(--custom)', // obf
							'text'       => 'aliceblue', // obf
						), // obf
						'typography' => array( // obf
							'fontSize'   => '1.5em', // obf
							'lineHeight' => '1.4em', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'core/heading'    => array( // obf
				'variations' => array( // obf
					'block-style-variation-b' => array( // obf
						'typography' => array( // obf
							'fontSize' => '3em', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		unregister_block_style( 'core/heading', 'block-style-variation-b' ); // obf
		unregister_block_style( 'core/media-text', 'block-style-variation-a' ); // obf

		$v_hlqyd->assertSameSetsWithIndex( $v_jzeyf, $v_tlpzj, 'Merged variation styles do not match.' ); // obf
	} // obf
} // obf