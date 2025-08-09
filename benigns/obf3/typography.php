

<?php // obf
/** // obf
 * @group block-supports // obf
 */ // obf
class Tests_Block_Supports_Typography extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_nicuq; // obf

	/** // obf
	 * Stores the current test theme root. // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private $v_bseqp; // obf

	/** // obf
	 * Caches the original theme directory global value in order // obf
	 * to restore it in tear_down(). // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private $v_ecvqy; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ugugw->test_block_name = null; // obf

		// Sets up the `wp-content/themes/` directory to ensure consistency when running tests. // obf
		$v_ugugw->theme_root                = realpath( DIR_TESTDATA . '/themedir1' ); // obf
		$v_ugugw->orig_theme_dir            = $v_fybpv['wp_theme_directories']; // obf
		$v_fybpv['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_ugugw->theme_root ); // obf

		$v_acayx = function () { // obf
			return $v_ugugw->theme_root; // obf
		}; // obf
		add_filter( 'theme_root', $v_acayx ); // obf
		add_filter( 'stylesheet_root', $v_acayx ); // obf
		add_filter( 'template_root', $v_acayx ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_fybpv['wp_themes'] ); // obf
	} // obf

	/** // obf
	 * Unregisters block type after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		// Restores the original theme directory setup. // obf
		$v_fybpv['wp_theme_directories'] = $v_ugugw->orig_theme_dir; // obf
		wp_clean_themes_cache(); // obf
		unset( $v_fybpv['wp_themes'] ); // obf

		// Resets test block name. // obf
		unregister_block_type( $v_ugugw->test_block_name ); // obf
		$v_ugugw->test_block_name = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests whether slugs with numbers are kebab cased. // obf
	 * // obf
	 * @ticket 54337 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_kebab_case_font_size_slug_with_numbers() { // obf
		$v_ugugw->test_block_name = 'test/font-size-slug-with-numbers'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'fontSize' => array( // obf
						'type' => 'string', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'fontSize' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf

		$v_vfsef = array( 'fontSize' => 'h1' ); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array( 'class' => 'has-h-1-font-size' ); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests legacy inline styles for font family. // obf
	 * // obf
	 * @ticket 54337 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_generate_font_family_with_legacy_inline_styles_using_a_value() { // obf
		$v_ugugw->test_block_name = 'test/font-family-with-inline-styles-using-value'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'__experimentalFontFamily' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_vfsef = array( 'style' => array( 'typography' => array( 'fontFamily' => 'serif' ) ) ); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array( 'style' => 'font-family:serif;' ); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests skipping serialization. // obf
	 * // obf
	 * @ticket 55505 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_skip_serialization_for_typography_block_supports() { // obf
		$v_ugugw->test_block_name = 'test/typography-with-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'fontSize'                        => true, // obf
						'lineHeight'                      => true, // obf
						'__experimentalFontFamily'        => true, // obf
						'__experimentalLetterSpacing'     => true, // obf
						'__experimentalSkipSerialization' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_vfsef = array( // obf
			'style' => array( // obf
				'typography' => array( // obf
					'fontSize'      => 'serif', // obf
					'lineHeight'    => 'serif', // obf
					'fontFamily'    => '22px', // obf
					'letterSpacing' => '22px', // obf
				), // obf
			), // obf
		); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array(); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests skipping serialization of individual block supports properties. // obf
	 * // obf
	 * @ticket 55505 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_skip_serialization_for_letter_spacing_block_supports() { // obf
		$v_ugugw->test_block_name = 'test/letter-spacing-with-individual-skipped-serialization-block-supports'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'__experimentalLetterSpacing'     => true, // obf
						'__experimentalSkipSerialization' => array( // obf
							'letterSpacing', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_vfsef = array( 'style' => array( 'typography' => array( 'letterSpacing' => '22px' ) ) ); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array(); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests legacy css var inline styles for font family. // obf
	 * // obf
	 * @ticket 54337 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_generate_css_var_for_font_family_with_legacy_inline_styles() { // obf
		$v_ugugw->test_block_name = 'test/font-family-with-inline-styles-using-css-var'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'__experimentalFontFamily' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_vfsef = array( 'style' => array( 'typography' => array( 'fontFamily' => 'var:preset|font-family|h1' ) ) ); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array( 'style' => 'font-family:var(--wp--preset--font-family--h-1);' ); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests that a classname is generated for font family. // obf
	 * // obf
	 * @ticket 54337 // obf
	 * // obf
	 * @covers ::wp_apply_typography_support // obf
	 */ // obf
	public function test_should_generate_classname_for_font_family() { // obf
		$v_ugugw->test_block_name = 'test/font-family-with-class'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'__experimentalFontFamily' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov   = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_vfsef = array( 'fontFamily' => 'h1' ); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_vfsef ); // obf
		$v_utybv = array( 'class' => 'has-h-1-font-family' ); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Tests generating font size values, including fluid formulae, from fontSizes preset. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 57065 // obf
	 * @ticket 58523 // obf
	 * @ticket 61118 // obf
	 * @ticket 61932 // obf
	 * // obf
	 * @covers ::wp_get_typography_font_size_value // obf
	 * // obf
	 * @dataProvider data_generate_font_size_preset_fixtures // obf
	 * // obf
	 * @param array  $v_ogelm { // obf
	 *      Required. fontSizes preset value as seen in theme.json. // obf
	 * // obf
	 *     @type string $v_pyijf Name of the font size preset. // obf
	 *     @type string $v_xibcg Kebab-case unique identifier for the font size preset. // obf
	 *     @type string $v_tevgn CSS font-size value, including units where applicable. // obf
	 * } // obf
	 * @param bool   $v_rvris         Theme JSON settings array that overrides any global theme settings. // obf
	 * @param string $v_jnxfn Expected output. // obf
	 */ // obf
	public function test_wp_get_typography_font_size_value( $v_ogelm, $v_rvris, $v_jnxfn ) { // obf
		$v_akixu = wp_get_typography_font_size_value( $v_ogelm, $v_rvris ); // obf

		$v_ugugw->assertSame( $v_jnxfn, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_font_size_preset_fixtures() { // obf
		return array( // obf
			'returns value when fluid typography is deactivated' => array( // obf
				'font_size_preset' => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'         => null, // obf
				'expected_output'  => '28px', // obf
			), // obf

			'returns value where font size is 0'         => array( // obf
				'font_size_preset' => array( // obf
					'size' => 0, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 0, // obf
			), // obf

			"returns value where font size is '0'"       => array( // obf
				'font_size_preset' => array( // obf
					'size' => '0', // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => '0', // obf
			), // obf

			'returns value where `size` is `null`'       => array( // obf
				'font_size_preset' => array( // obf
					'size' => null, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => null, // obf
			), // obf

			'returns value when fluid is `false`'        => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '28px', // obf
					'fluid' => false, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => false, // obf
					), // obf
				), // obf
				'expected_output'  => '28px', // obf
			), // obf
			'returns value when fluid is empty array'    => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => array(), // obf
					), // obf
				), // obf
				'expected_output' => '28px', // obf
			), // obf
			'returns clamp value with minViewportWidth override' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => array( // obf
							'minViewportWidth' => '500px', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 5px) * 0.918), 28px)', // obf
			), // obf
			'returns clamp value with maxViewportWidth override' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => array( // obf
							'maxViewportWidth' => '500px', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 5.608), 28px)', // obf
			), // obf

			'returns clamp value with layout.wideSize override' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
					'layout'     => array( // obf
						'wideSize' => '500px', // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 5.608), 28px)', // obf
			), // obf
			'returns already clamped value'              => array( // obf
				'font_size_preset' => array( // obf
					'size' => 'clamp(21px, 1.313rem + ((1vw - 7.68px) * 2.524), 42px)', // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(21px, 1.313rem + ((1vw - 7.68px) * 2.524), 42px)', // obf
			), // obf

			'returns value with unsupported unit'        => array( // obf
				'font_size_preset' => array( // obf
					'size' => '1000%', // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => '1000%', // obf
			), // obf

			'returns clamp value with rem min and max units' => array( // obf
				'font_size_preset' => array( // obf
					'size' => '1.75rem', // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(1.119rem, 1.119rem + ((1vw - 0.2rem) * 0.789), 1.75rem)', // obf
			), // obf

			'returns clamp value with em min and max units' => array( // obf
				'font_size'       => array( // obf
					'size' => '1.75em', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(1.119em, 1.119rem + ((1vw - 0.2em) * 0.789), 1.75em)', // obf
			), // obf

			'returns clamp value for floats'             => array( // obf
				'font_size'       => array( // obf
					'size' => '70.175px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(37.897px, 2.369rem + ((1vw - 3.2px) * 2.522), 70.175px)', // obf
			), // obf

			'coerces integer to `px` and returns clamp value' => array( // obf
				'font_size_preset' => array( // obf
					'size' => 33, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(20.515px, 1.282rem + ((1vw - 3.2px) * 0.975), 33px)', // obf
			), // obf

			'coerces float to `px` and returns clamp value' => array( // obf
				'font_size_preset' => array( // obf
					'size' => 70.175, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(37.897px, 2.369rem + ((1vw - 3.2px) * 2.522), 70.175px)', // obf
			), // obf

			'returns clamp value when `fluid` is empty array' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '28px', // obf
					'fluid' => array(), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 0.789), 28px)', // obf
			), // obf

			'returns clamp value when `fluid` is `null`' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '28px', // obf
					'fluid' => null, // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 0.789), 28px)', // obf
			), // obf

			'returns clamp value where min and max fluid values defined' => array( // obf
				'font_size'       => array( // obf
					'size'  => '80px', // obf
					'fluid' => array( // obf
						'min' => '70px', // obf
						'max' => '125px', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(70px, 4.375rem + ((1vw - 3.2px) * 4.297), 125px)', // obf
			), // obf

			'returns clamp value where max is equal to size' => array( // obf
				'font_size'       => array( // obf
					'size'  => '7.8125rem', // obf
					'fluid' => array( // obf
						'min' => '4.375rem', // obf
						'max' => '7.8125rem', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(4.375rem, 4.375rem + ((1vw - 0.2rem) * 4.298), 7.8125rem)', // obf
			), // obf

			'returns clamp value if min font size is greater than max' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '3rem', // obf
					'fluid' => array( // obf
						'min' => '5rem', // obf
						'max' => '32px', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(5rem, 5rem + ((1vw - 0.2rem) * -3.75), 32px)', // obf
			), // obf

			'returns value with invalid min/max fluid units' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '10em', // obf
					'fluid' => array( // obf
						'min' => '20vw', // obf
						'max' => '50%', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => '10em', // obf
			), // obf

			'returns value when size is < lower bounds and no fluid min/max set' => array( // obf
				'font_size_preset' => array( // obf
					'size' => '3px', // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => '3px', // obf
			), // obf

			'returns value when size is equal to lower bounds and no fluid min/max set' => array( // obf
				'font_size'       => array( // obf
					'size' => '14px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => '14px', // obf
			), // obf

			'returns clamp value with different min max units' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '28px', // obf
					'fluid' => array( // obf
						'min' => '20px', // obf
						'max' => '50rem', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(20px, 1.25rem + ((1vw - 3.2px) * 60.938), 50rem)', // obf
			), // obf

			'returns clamp value where no fluid max size is set' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '50px', // obf
					'fluid' => array( // obf
						'min' => '2.6rem', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(2.6rem, 2.6rem + ((1vw - 0.2rem) * 0.656), 50px)', // obf
			), // obf

			'returns clamp value where no fluid min size is set' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '28px', // obf
					'fluid' => array( // obf
						'max' => '80px', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 4.851), 80px)', // obf
			), // obf

			'should not apply lower bound test when fluid values are set' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '1.5rem', // obf
					'fluid' => array( // obf
						'min' => '0.5rem', // obf
						'max' => '5rem', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(0.5rem, 0.5rem + ((1vw - 0.2rem) * 5.625), 5rem)', // obf
			), // obf

			'should not apply lower bound test when only fluid min is set' => array( // obf
				'font_size'       => array( // obf
					'size'  => '20px', // obf
					'fluid' => array( // obf
						'min' => '12px', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(12px, 0.75rem + ((1vw - 3.2px) * 0.625), 20px)', // obf
			), // obf

			'should not apply lower bound test when only fluid max is set' => array( // obf
				'font_size'       => array( // obf
					'size'  => '0.875rem', // obf
					'fluid' => array( // obf
						'max' => '20rem', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 23.906), 20rem)', // obf
			), // obf

			'returns clamp value when min and max font sizes are equal' => array( // obf
				'font_size_preset' => array( // obf
					'size'  => '4rem', // obf
					'fluid' => array( // obf
						'min' => '30px', // obf
						'max' => '30px', // obf
					), // obf
				), // obf
				'settings'         => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output'  => 'clamp(30px, 1.875rem + ((1vw - 3.2px) * 1), 30px)', // obf
			), // obf

			'should apply scaled min font size for em values when custom min font size is not set' => array( // obf
				'font_size'       => array( // obf
					'size' => '12rem', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(5.174rem, 5.174rem + ((1vw - 0.2rem) * 8.533), 12rem)', // obf
			), // obf

			'should apply scaled min font size for px values when custom min font size is not set' => array( // obf
				'font_size'       => array( // obf
					'size' => '200px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(85.342px, 5.334rem + ((1vw - 3.2px) * 8.958), 200px)', // obf
			), // obf

			'should not apply scaled min font size for minimum font size when custom min font size is set' => array( // obf
				'font_size'       => array( // obf
					'size'  => '200px', // obf
					'fluid' => array( // obf
						'min' => '100px', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => true, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(100px, 6.25rem + ((1vw - 3.2px) * 7.813), 200px)', // obf
			), // obf

			// Individual preset settings override global settings. // obf
			'should convert individual preset size to fluid if fluid is disabled in global settings' => array( // obf
				'font_size'       => array( // obf
					'size'  => '17px', // obf
					'fluid' => true, // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array(), // obf
				), // obf
				'expected_output' => 'clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.234), 17px)', // obf
			), // obf
			'should use individual preset settings if fluid is disabled in global settings' => array( // obf
				'font_size'       => array( // obf
					'size'  => '17px', // obf
					'fluid' => array( // obf
						'min' => '16px', // obf
						'max' => '26px', // obf
					), // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => false, // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(16px, 1rem + ((1vw - 3.2px) * 0.781), 26px)', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests backwards compatibility for deprecated second argument $v_wlpdl. // obf
	 * // obf
	 * @ticket 61118 // obf
	 * // obf
	 * @covers ::wp_get_typography_font_size_value // obf
	 * // obf
	 * @expectedDeprecated wp_get_typography_font_size_value // obf
	 * // obf
	 * @dataProvider data_generate_font_size_preset_should_use_fluid_typography_deprecated_fixtures // obf
	 * // obf
	 * @param array  $v_vjpwj                     { // obf
	 *     Required. A font size as represented in the fontSizes preset format as seen in theme.json. // obf
	 * // obf
	 *     @type string $v_pyijf Name of the font size preset. // obf
	 *     @type string $v_xibcg Kebab-case unique identifier for the font size preset. // obf
	 *     @type string $v_tevgn CSS font-size value, including units where applicable. // obf
	 * } // obf
	 * @param bool   $v_wlpdl An override to switch fluid typography "on". Can be used for unit testing. // obf
	 * @param string $v_jnxfn Expected output of wp_get_typography_font_size_value(). // obf
	 */ // obf
	public function test_wp_get_typography_font_size_value_should_use_fluid_typography_deprecated( $v_vjpwj, $v_wlpdl, $v_jnxfn ) { // obf
		$v_akixu = wp_get_typography_font_size_value( $v_vjpwj, $v_wlpdl ); // obf

		$v_ugugw->assertSame( $v_jnxfn, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_get_typography_font_size_value_should_use_fluid_typography_deprecated. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_font_size_preset_should_use_fluid_typography_deprecated_fixtures() { // obf
		return array( // obf
			'returns value when fluid typography is deactivated' => array( // obf
				'font_size'                   => array( // obf
					'size' => '28px', // obf
				), // obf
				'should_use_fluid_typography' => false, // obf
				'expected_output'             => '28px', // obf
			), // obf
			'returns clamp value when fluid typography is activated' => array( // obf
				'font_size'                   => array( // obf
					'size' => '28px', // obf
				), // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 0.789), 28px)', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that theme json settings passed to wp_get_typography_font_size_value // obf
	 * override global theme settings. // obf
	 * // obf
	 * @ticket 61118 // obf
	 * // obf
	 * @covers ::wp_get_typography_font_size_value // obf
	 * // obf
	 * @dataProvider data_generate_should_override_theme_settings_fixtures // obf
	 * // obf
	 * @param array  $v_vjpwj                     { // obf
	 *     Required. A font size as represented in the fontSizes preset format as seen in theme.json. // obf
	 * // obf
	 *     @type string $v_pyijf Name of the font size preset. // obf
	 *     @type string $v_xibcg Kebab-case unique identifier for the font size preset. // obf
	 *     @type string $v_tevgn CSS font-size value, including units where applicable. // obf
	 * } // obf
	 * @param bool   $v_rvris        Theme JSON settings array that overrides any global theme settings. // obf
	 * @param string $v_jnxfn Expected output of wp_get_typography_font_size_value(). // obf
	 */ // obf
	public function test_should_override_theme_settings( $v_vjpwj, $v_rvris, $v_jnxfn ) { // obf
		switch_theme( 'block-theme-child-with-fluid-typography' ); // obf
		$v_akixu = wp_get_typography_font_size_value( $v_vjpwj, $v_rvris ); // obf

		$v_ugugw->assertSame( $v_jnxfn, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_get_typography_font_size_value_should_use_fluid_typography_deprecated. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_should_override_theme_settings_fixtures() { // obf
		return array( // obf
			'returns clamp value when theme activates fluid typography' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => null, // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 0.789), 28px)', // obf
			), // obf
			'returns value when settings argument deactivates fluid typography' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => false, // obf
					), // obf
				), // obf
				'expected_output' => '28px', // obf
			), // obf

			'returns clamp value when settings argument sets a fluid.minViewportWidth value' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => array( // obf
							'minViewportWidth' => '500px', // obf
						), // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 5px) * 0.918), 28px)', // obf
			), // obf

			'returns clamp value when settings argument sets a layout.wideSize value' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'layout' => array( // obf
						'wideSize' => '500px', // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 5.608), 28px)', // obf
			), // obf

			'returns clamp value with maxViewportWidth preferred over fallback layout.wideSize value' => array( // obf
				'font_size'       => array( // obf
					'size' => '28px', // obf
				), // obf
				'settings'        => array( // obf
					'typography' => array( // obf
						'fluid' => array( // obf
							'maxViewportWidth' => '1000px', // obf
						), // obf
					), // obf
					'layout'     => array( // obf
						'wideSize' => '500px', // obf
					), // obf
				), // obf
				'expected_output' => 'clamp(17.905px, 1.119rem + ((1vw - 3.2px) * 1.485), 28px)', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that custom font sizes are converted to fluid values // obf
	 * in inline block supports styles // obf
	 * when "settings.typography.fluid" is set to true. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 57065 // obf
	 * @ticket 57529 // obf
	 * @ticket 58522 // obf
	 * @ticket 58523 // obf
	 * @ticket 59048 // obf
	 * // obf
	 * @covers ::wp_register_typography_support // obf
	 * // obf
	 * @dataProvider data_generate_block_supports_font_size_fixtures // obf
	 * // obf
	 * @param string $v_uzjqf The block supports custom font size value. // obf
	 * @param string $v_fqgpz      A theme slug corresponding to an available test theme. // obf
	 * @param string $v_jnxfn Expected value of style property from wp_apply_typography_support(). // obf
	 */ // obf
	public function test_should_covert_font_sizes_to_fluid_values( $v_uzjqf, $v_fqgpz, $v_jnxfn ) { // obf
		switch_theme( $v_fqgpz ); // obf

		$v_ugugw->test_block_name = 'test/font-size-fluid-value'; // obf
		register_block_type( // obf
			$v_ugugw->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'typography' => array( // obf
						'fontSize' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_eleov         = WP_Block_Type_Registry::get_instance(); // obf
		$v_qefss       = $v_eleov->get_registered( $v_ugugw->test_block_name ); // obf
		$v_lumfy = array( // obf
			'style' => array( // obf
				'typography' => array( // obf
					'fontSize' => $v_uzjqf, // obf
				), // obf
			), // obf
		); // obf

		$v_akixu   = wp_apply_typography_support( $v_qefss, $v_lumfy ); // obf
		$v_utybv = array( 'style' => $v_jnxfn ); // obf

		$v_ugugw->assertSame( $v_utybv, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_covert_font_sizes_to_fluid_values(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_block_supports_font_size_fixtures() { // obf
		return array( // obf
			'returns value when fluid typography is not active' => array( // obf
				'font_size_value' => '15px', // obf
				'theme_slug'      => 'default', // obf
				'expected_output' => 'font-size:15px;', // obf
			), // obf
			'returns clamp value using default config' => array( // obf
				'font_size_value' => '15px', // obf
				'theme_slug'      => 'block-theme-child-with-fluid-typography', // obf
				'expected_output' => 'font-size:clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.078), 15px);', // obf
			), // obf
			'returns value when font size <= default min font size bound' => array( // obf
				'font_size_value' => '13px', // obf
				'theme_slug'      => 'block-theme-child-with-fluid-typography', // obf
				'expected_output' => 'font-size:13px;', // obf
			), // obf
			'returns clamp value using custom fluid config' => array( // obf
				'font_size_value' => '17px', // obf
				'theme_slug'      => 'block-theme-child-with-fluid-typography-config', // obf
				'expected_output' => 'font-size:clamp(16px, 1rem + ((1vw - 6.4px) * 0.179), 17px);', // obf
			), // obf
			'returns value when font size <= custom min font size bound' => array( // obf
				'font_size_value' => '15px', // obf
				'theme_slug'      => 'block-theme-child-with-fluid-typography-config', // obf
				'expected_output' => 'font-size:15px;', // obf
			), // obf
			'returns clamp value using default config if layout is fluid' => array( // obf
				'font_size_value' => '15px', // obf
				'theme_slug'      => 'block-theme-child-with-fluid-layout', // obf
				'expected_output' => 'font-size:clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.078), 15px);', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a block element's custom font size in the inline style attribute // obf
	 * is replaced with a fluid value when "settings.typography.fluid" is set to true, // obf
	 * and the correct block content is generated. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * @ticket 57065 // obf
	 * @ticket 58523 // obf
	 * // obf
	 * @dataProvider data_generate_replace_inline_font_styles_with_fluid_values_fixtures // obf
	 * // obf
	 * @param string $v_mljod               HTML block content. // obf
	 * @param string $v_uzjqf             The block supports custom font size value. // obf
	 * @param bool   $v_wlpdl An override to switch fluid typography "on". Can be used for unit testing. // obf
	 * @param string $v_jnxfn             Expected value of style property from wp_apply_typography_support(). // obf
	 */ // obf
	public function test_should_replace_inline_font_styles_with_fluid_values( $v_mljod, $v_uzjqf, $v_wlpdl, $v_jnxfn ) { // obf
		if ( $v_wlpdl ) { // obf
			switch_theme( 'block-theme-child-with-fluid-typography' ); // obf
		} else { // obf
			switch_theme( 'default' ); // obf
		} // obf

		$v_pplqd  = array( // obf
			'blockName' => 'core/image', // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'typography' => array( // obf
						'fontSize' => $v_uzjqf, // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_akixu = wp_render_typography_support( $v_mljod, $v_pplqd ); // obf

		$v_ugugw->assertSame( $v_jnxfn, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_replace_inline_font_styles_with_fluid_values(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_generate_replace_inline_font_styles_with_fluid_values_fixtures() { // obf
		return array( // obf
			'default_return_content'                       => array( // obf
				'block_content'               => '<h2 class="has-vivid-red-background-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--60);font-size:4rem;font-style:normal;font-weight:600;letter-spacing:29px;text-decoration:underline;text-transform:capitalize">This is a heading</h2>', // obf
				'font_size_value'             => '4rem', // obf
				'should_use_fluid_typography' => false, // obf
				'expected_output'             => '<h2 class="has-vivid-red-background-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--60);font-size:4rem;font-style:normal;font-weight:600;letter-spacing:29px;text-decoration:underline;text-transform:capitalize">This is a heading</h2>', // obf
			), // obf
			'return_content_with_replaced_fluid_font_size_inline_style' => array( // obf
				'block_content'               => '<h2 class="has-vivid-red-background-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--60);font-size:4rem;font-style:normal;font-weight:600;letter-spacing:29px;text-decoration:underline;text-transform:capitalize">This is a heading</h2>', // obf
				'font_size_value'             => '4rem', // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => '<h2 class="has-vivid-red-background-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--60);font-size:clamp(2.2rem, 2.2rem + ((1vw - 0.2rem) * 2.25), 4rem);font-style:normal;font-weight:600;letter-spacing:29px;text-decoration:underline;text-transform:capitalize">This is a heading</h2>', // obf
			), // obf
			'return_content_if_no_inline_font_size_found'  => array( // obf
				'block_content'               => '<p class="has-medium-font-size" style="font-style:normal;font-weight:600;letter-spacing:29px;">A paragraph inside a group</p>', // obf
				'font_size_value'             => '20px', // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => '<p class="has-medium-font-size" style="font-style:normal;font-weight:600;letter-spacing:29px;">A paragraph inside a group</p>', // obf
			), // obf
			'return_content_css_var'                       => array( // obf
				'block_content'               => '<p class="has-medium-font-size" style="font-size:var(--wp--preset--font-size--x-large);">A paragraph inside a group</p>', // obf
				'font_size_value'             => 'var:preset|font-size|x-large', // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => '<p class="has-medium-font-size" style="font-size:var(--wp--preset--font-size--x-large);">A paragraph inside a group</p>', // obf
			), // obf
			'return_content_with_spaces'                   => array( // obf
				'block_content'               => '<p class="has-medium-font-size" style="    font-size:   20px   ;    ">A paragraph inside a group</p>', // obf
				'font_size_value'             => '20px', // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => '<p class="has-medium-font-size" style="    font-size:clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.469), 20px);    ">A paragraph inside a group</p>', // obf
			), // obf
			'return_content_with_first_match_replace_only' => array( // obf
				'block_content'               => "<div class=\"wp-block-group\" style=\"font-size:1.5em\"> \n \n<p style=\"font-size:1.5em\">A paragraph inside a group</p></div>", // obf
				'font_size_value'             => '1.5em', // obf
				'should_use_fluid_typography' => true, // obf
				'expected_output'             => "<div class=\"wp-block-group\" style=\"font-size:clamp(0.984em, 0.984rem + ((1vw - 0.2em) * 0.645), 1.5em);\"> \n \n<p style=\"font-size:1.5em\">A paragraph inside a group</p></div>", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that valid font size values are parsed. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_get_typography_value_and_unit // obf
	 * // obf
	 * @dataProvider data_valid_size_wp_get_typography_value_and_unit // obf
	 * // obf
	 * @param mixed $v_ukhfu Raw size value to test. // obf
	 * @param mixed $v_utybv  An expected return value. // obf
	 */ // obf
	public function test_valid_size_wp_get_typography_value_and_unit( $v_ukhfu, $v_utybv ) { // obf
		$v_ugugw->assertSame( $v_utybv, wp_get_typography_value_and_unit( $v_ukhfu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_valid_size_wp_get_typography_value_and_unit(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_valid_size_wp_get_typography_value_and_unit() { // obf
		return array( // obf
			'size: 10vh with default units do not match' => array( // obf
				'raw_value' => '10vh', // obf
				'expected'  => null, // obf
			), // obf
			'size: calc() values do not match'           => array( // obf
				'raw_value' => 'calc(2 * 10px)', // obf
				'expected'  => null, // obf
			), // obf
			'size: clamp() values do not match'          => array( // obf
				'raw_value' => 'clamp(15px, 0.9375rem + ((1vw - 7.68px) * 5.409), 60px)', // obf
				'expected'  => null, // obf
			), // obf
			'size: `"10"`'                               => array( // obf
				'raw_value' => '10', // obf
				'expected'  => array( // obf
					'value' => 10.0, // obf
					'unit'  => 'px', // obf
				), // obf
			), // obf
			'size: `11`'                                 => array( // obf
				'raw_value' => 11, // obf
				'expected'  => array( // obf
					'value' => 11.0, // obf
					'unit'  => 'px', // obf
				), // obf
			), // obf
			'size: `11.234`'                             => array( // obf
				'raw_value' => '11.234', // obf
				'expected'  => array( // obf
					'value' => 11.234, // obf
					'unit'  => 'px', // obf
				), // obf
			), // obf
			'size: `"12rem"`'                            => array( // obf
				'raw_value' => '12rem', // obf
				'expected'  => array( // obf
					'value' => 12.0, // obf
					'unit'  => 'rem', // obf
				), // obf
			), // obf
			'size: `"12px"`'                             => array( // obf
				'raw_value' => '12px', // obf
				'expected'  => array( // obf
					'value' => 12.0, // obf
					'unit'  => 'px', // obf
				), // obf
			), // obf
			'size: `"12em"`'                             => array( // obf
				'raw_value' => '12em', // obf
				'expected'  => array( // obf
					'value' => 12.0, // obf
					'unit'  => 'em', // obf
				), // obf
			), // obf
			'size: `"12.74em"`'                          => array( // obf
				'raw_value' => '12.74em', // obf
				'expected'  => array( // obf
					'value' => 12.74, // obf
					'unit'  => 'em', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that invalid font size values are not parsed and trigger incorrect usage. // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers ::wp_get_typography_value_and_unit // obf
	 * // obf
	 * @dataProvider data_invalid_size_wp_get_typography_value_and_unit // obf
	 * @expectedIncorrectUsage wp_get_typography_value_and_unit // obf
	 * // obf
	 * @param mixed $v_ukhfu Raw size value to test. // obf
	 */ // obf
	public function test_invalid_size_wp_get_typography_value_and_unit( $v_ukhfu ) { // obf
		$v_ugugw->assertNull( wp_get_typography_value_and_unit( $v_ukhfu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_invalid_size_wp_get_typography_value_and_unit(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_invalid_size_wp_get_typography_value_and_unit() { // obf
		return array( // obf
			'size: null'  => array( null ), // obf
			'size: false' => array( false ), // obf
			'size: true'  => array( true ), // obf
			'size: array' => array( array( '10' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests computed font size values. // obf
	 * // obf
	 * @ticket 58522 // obf
	 * @ticket 60263 // obf
	 * // obf
	 * @covers ::wp_get_computed_fluid_typography_value // obf
	 * // obf
	 * @dataProvider data_wp_get_computed_fluid_typography_value // obf
	 * // obf
	 * @param array  $v_mtgno { // obf
	 *      Optional. An associative array of values to calculate a fluid formula for font size. Default is empty array. // obf
	 * // obf
	 *     @type string $v_legwf Maximum size up to which type will have fluidity. // obf
	 *     @type string $v_esbul Minimum viewport size from which type will have fluidity. // obf
	 *     @type string $v_rfosz      Maximum font size for any clamp() calculation. // obf
	 *     @type string $v_tnzfu      Minimum font size for any clamp() calculation. // obf
	 *     @type int    $v_lsypk           A scale factor to determine how fast a font scales within boundaries. // obf
	 * } // obf
	 * @param string $v_jnxfn             Expected value of style property from wp_apply_typography_support(). // obf
	 */ // obf
	public function test_wp_get_computed_fluid_typography_value( $v_mtgno, $v_jnxfn ) { // obf
		$v_akixu = wp_get_computed_fluid_typography_value( $v_mtgno ); // obf
		$v_ugugw->assertSame( $v_jnxfn, $v_akixu ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_get_computed_fluid_typography_value() { // obf
		return array( // obf
			'returns clamped value with valid args' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => '320px', // obf
					'maximum_viewport_width' => '1000px', // obf
					'minimum_font_size'      => '50px', // obf
					'maximum_font_size'      => '100px', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => 'clamp(50px, 3.125rem + ((1vw - 3.2px) * 7.353), 100px)', // obf
			), // obf
			'returns `null` when maximum and minimum viewport width are equal' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => '800px', // obf
					'maximum_viewport_width' => '800px', // obf
					'minimum_font_size'      => '50px', // obf
					'maximum_font_size'      => '100px', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => null, // obf
			), // obf
			'returns `null` when `maximum_viewport_width` is an unsupported unit' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => '320px', // obf
					'maximum_viewport_width' => 'calc(100% - 60px)', // obf
					'minimum_font_size'      => '50px', // obf
					'maximum_font_size'      => '100px', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => null, // obf
			), // obf
			'returns `null` when `minimum_viewport_width` is an unsupported unit' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => 'calc(100% - 60px)', // obf
					'maximum_viewport_width' => '1000px', // obf
					'minimum_font_size'      => '50px', // obf
					'maximum_font_size'      => '100px', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => null, // obf
			), // obf
			'returns `null` when `minimum_font_size` is an unsupported unit' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => '320em', // obf
					'maximum_viewport_width' => '1000em', // obf
					'minimum_font_size'      => '10vw', // obf
					'maximum_font_size'      => '100em', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => null, // obf
			), // obf
			'returns `null` when `maximum_font_size` is an unsupported unit' => array( // obf
				'args'            => array( // obf
					'minimum_viewport_width' => '320em', // obf
					'maximum_viewport_width' => '1000em', // obf
					'minimum_font_size'      => '50px', // obf
					'maximum_font_size'      => '100%', // obf
					'scale_factor'           => 1, // obf
				), // obf
				'expected_output' => null, // obf
			), // obf
		); // obf
	} // obf
} // obf