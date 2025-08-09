

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Tests wp_get_global_stylesheet(). // obf
 * // obf
 * @group themes // obf
 * // obf
 * @covers ::wp_get_global_stylesheet // obf
 */ // obf
class Tests_Theme_WpGetGlobalStylesheet extends WP_Theme_UnitTestCase { // obf

	/** // obf
	 * Flag to indicate whether to remove 'editor-font-sizes' theme support at tear_down(). // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_mibkv = false; // obf

	/** // obf
	 * Flag to indicate whether to remove 'border' theme support at tear_down(). // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_butgm = false; // obf

	/** // obf
	 * Flag to indicate whether to switch back to the default theme at tear down. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_bcjwt = false; // obf

	public function tear_down() { // obf
		// Reset development mode after each test. // obf
		unset( $v_yqdxe['_wp_tests_development_mode'] ); // obf

		// Reset the theme support. // obf
		if ( $v_uoqyl->remove_theme_support_at_teardown ) { // obf
			$v_uoqyl->remove_theme_support_at_teardown = false; // obf
			remove_theme_support( 'editor-font-sizes' ); // obf
		} // obf

		if ( $v_uoqyl->switch_to_default_theme_at_teardown ) { // obf
			$v_uoqyl->switch_to_default_theme_at_teardown = false; // obf
			switch_theme( WP_DEFAULT_THEME ); // obf
		} // obf

		if ( $v_uoqyl->remove_border_support_at_teardown ) { // obf
			$v_uoqyl->remove_border_support_at_teardown = false; // obf
			remove_theme_support( 'border' ); // obf
			remove_theme_support( 'editor-color-palette' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 54782 // obf
	 * // obf
	 * @dataProvider data_should_conditionally_include_font_sizes // obf
	 * // obf
	 * @param array  $v_tkehw            Expected CSS for each font size. // obf
	 * @param string $v_lhpmm               The theme to switch to / use. // obf
	 * @param array  $v_rnlaz               Optional. Types of styles to load. Default empty array. // obf
	 * @param bool   $v_rsrag Optional. Whether to apply presets for classic theme tests. Default false. // obf
	 */ // obf
	public function test_should_conditionally_include_font_sizes( array $v_tkehw, $v_lhpmm, array $v_rnlaz = array(), $v_rsrag = false ) { // obf
		$v_uoqyl->maybe_switch_theme( $v_lhpmm ); // obf
		$v_uoqyl->add_custom_font_sizes( $v_rsrag ); // obf

		$v_sqvbr = wp_get_global_stylesheet( $v_rnlaz ); // obf

		$v_uoqyl->assertStringContainsString( $v_tkehw['small'], $v_sqvbr, 'The small font size should be included.' ); // obf
		$v_uoqyl->assertStringContainsString( $v_tkehw['medium'], $v_sqvbr, 'The medium font size should be included.' ); // obf
		$v_uoqyl->assertStringContainsString( $v_tkehw['large'], $v_sqvbr, 'The large font size should be included.' ); // obf
		$v_uoqyl->assertStringContainsString( $v_tkehw['x-large'], $v_sqvbr, 'The x-large font size should be included.' ); // obf

		if ( 'default' !== $v_lhpmm ) { // obf
			$v_uoqyl->assertStringContainsString( $v_tkehw['custom'], $v_sqvbr, 'The custom font size should be included.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_conditionally_include_font_sizes() { // obf
		return array( // obf
			'block theme using defaults'                   => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
					'custom'  => '--wp--preset--font-size--custom: 100px;', // obf
				), // obf
				'theme'    => 'block-theme', // obf
			), // obf
			'block theme using variables'                  => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
					'custom'  => '--wp--preset--font-size--custom: 100px;', // obf
				), // obf
				'theme'    => 'block-theme', // obf
				'types'    => array( 'variables' ), // obf
			), // obf
			'classic theme without presets using defaults' => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'    => 'default', // obf
			), // obf
			'classic theme without presets using variables' => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'    => 'default', // obf
				'types'    => array( 'variables' ), // obf
			), // obf
			'classic theme with presets using defaults'    => array( // obf
				'expected'            => array( // obf
					'small'   => '--wp--preset--font-size--small: 18px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 26.25px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'               => 'default', // obf
				'types'               => array(), // obf
				'classic_has_presets' => true, // obf
			), // obf
			'classic theme with presets using variables'   => array( // obf
				'expected'            => array( // obf
					'small'   => '--wp--preset--font-size--small: 18px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 26.25px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'               => 'default', // obf
				'types'               => array( 'variables' ), // obf
				'classic_has_presets' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54782 // obf
	 * // obf
	 * @dataProvider data_should_not_conditionally_include_font_sizes // obf
	 * // obf
	 * @param array  $v_tkehw            Expected CSS for each font size. // obf
	 * @param string $v_lhpmm               The theme to switch to / use. // obf
	 * @param array  $v_rnlaz               Optional. Types of styles to load. Default empty array. // obf
	 * @param bool   $v_rsrag Optional. Whether to apply presets for classic theme tests. Default false. // obf
	 */ // obf
	public function test_should_not_conditionally_include_font_sizes( array $v_tkehw, $v_lhpmm, array $v_rnlaz = array(), $v_rsrag = false ) { // obf
		$v_uoqyl->maybe_switch_theme( $v_lhpmm ); // obf
		$v_uoqyl->add_custom_font_sizes( $v_rsrag ); // obf

		$v_sqvbr = wp_get_global_stylesheet( $v_rnlaz ); // obf

		$v_uoqyl->assertStringNotContainsString( $v_tkehw['small'], $v_sqvbr, 'The small font size should not be included.' ); // obf
		$v_uoqyl->assertStringNotContainsString( $v_tkehw['medium'], $v_sqvbr, 'The medium font size should not be included.' ); // obf
		$v_uoqyl->assertStringNotContainsString( $v_tkehw['large'], $v_sqvbr, 'The large font size should not be included.' ); // obf
		$v_uoqyl->assertStringNotContainsString( $v_tkehw['x-large'], $v_sqvbr, 'The x-large font size should not be included.' ); // obf

		if ( 'default' !== $v_lhpmm ) { // obf
			$v_uoqyl->assertStringNotContainsString( $v_tkehw['custom'], $v_sqvbr, 'The custom font size should not be included.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_not_conditionally_include_font_sizes() { // obf
		return array( // obf
			'block theme using presets'                   => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
					'custom'  => '--wp--preset--font-size--custom: 100px;', // obf
				), // obf
				'theme'    => 'block-theme', // obf
				'types'    => array( 'presets' ), // obf
			), // obf
			'classic theme without presets using presets' => array( // obf
				'expected' => array( // obf
					'small'   => '--wp--preset--font-size--small: 13px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 36px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'    => 'default', // obf
				'types'    => array( 'presets' ), // obf
			), // obf
			'classic theme with presets using presets'    => array( // obf
				'expected'            => array( // obf
					'small'   => '--wp--preset--font-size--small: 18px', // obf
					'medium'  => '--wp--preset--font-size--medium: 20px', // obf
					'large'   => '--wp--preset--font-size--large: 26.25px', // obf
					'x-large' => '--wp--preset--font-size--x-large: 42px', // obf
				), // obf
				'theme'               => 'default', // obf
				'types'               => array( 'presets' ), // obf
				'classic_has_presets' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56970 // obf
	 */ // obf
	public function test_switching_themes_should_recalculate_stylesheet() { // obf
		$v_tkehw = '--wp--preset--font-size--custom: 100px;'; // obf

		$v_mjcmo = wp_get_global_stylesheet(); // obf
		$v_uoqyl->assertStringNotContainsString( $v_tkehw, $v_mjcmo, 'Custom font size (100px) should not present for default theme' ); // obf

		$v_uoqyl->maybe_switch_theme( 'block-theme' ); // obf
		$v_chjun = wp_get_global_stylesheet(); // obf
		$v_uoqyl->assertStringContainsString( $v_tkehw, $v_chjun, 'Custom font size (100px) should be present for block theme' ); // obf
	} // obf

	/** // obf
	 * Tests that the function relies on the development mode for whether to use caching. // obf
	 * // obf
	 * @ticket 57487 // obf
	 */ // obf
	public function test_caching_is_used_when_developing_theme() { // obf
		global $v_pcnnc; // obf

		$v_uoqyl->maybe_switch_theme( 'block-theme' ); // obf

		// Store CSS in cache. // obf
		$v_dehqe = '.my-class { display: block; }'; // obf
		wp_cache_set( 'wp_get_global_stylesheet', $v_dehqe, 'theme_json' ); // obf

		// By default, caching should be used, so the above value will be returned. // obf
		$v_pcnnc = ''; // obf
		$v_uoqyl->assertSame( $v_dehqe, wp_get_global_stylesheet(), 'Caching was not used despite development mode disabled' ); // obf

		// When the development mode is set to 'theme', caching should not be used. // obf
		$v_pcnnc = 'theme'; // obf
		$v_uoqyl->assertNotSame( $v_dehqe, wp_get_global_stylesheet(), 'Caching was used despite theme development mode' ); // obf
	} // obf

	/** // obf
	 * Tests that theme color palette presets are output when appearance tools are enabled via theme support. // obf
	 * // obf
	 * @ticket 60134 // obf
	 */ // obf
	public function test_theme_color_palette_presets_output_when_border_support_enabled() { // obf

		$v_dxlfq = array( // obf
			array( // obf
				'name'  => 'Black', // obf
				'slug'  => 'nice-black', // obf
				'color' => '#000000', // obf
			), // obf
			array( // obf
				'name'  => 'Dark Gray', // obf
				'slug'  => 'dark-gray', // obf
				'color' => '#28303D', // obf
			), // obf
			array( // obf
				'name'  => 'Green', // obf
				'slug'  => 'haunted-green', // obf
				'color' => '#D1E4DD', // obf
			), // obf
			array( // obf
				'name'  => 'Blue', // obf
				'slug'  => 'soft-blue', // obf
				'color' => '#D1DFE4', // obf
			), // obf
			array( // obf
				'name'  => 'Purple', // obf
				'slug'  => 'cool-purple', // obf
				'color' => '#D1D1E4', // obf
			), // obf
		); // obf

		// Add theme support for appearance tools. // obf
		add_theme_support( 'border' ); // obf
		add_theme_support( 'editor-color-palette', $v_dxlfq ); // obf
		$v_uoqyl->remove_border_support_at_teardown = true; // obf

		// Check for both the variable declaration and its use as a value. // obf
		$v_ljflj = wp_get_global_stylesheet( array( 'variables' ) ); // obf

		$v_uoqyl->assertStringContainsString( '--wp--preset--color--nice-black: #000000', $v_ljflj ); // obf
		$v_uoqyl->assertStringContainsString( '--wp--preset--color--dark-gray: #28303D', $v_ljflj ); // obf
		$v_uoqyl->assertStringContainsString( '--wp--preset--color--haunted-green: #D1E4DD', $v_ljflj ); // obf
		$v_uoqyl->assertStringContainsString( '--wp--preset--color--soft-blue: #D1DFE4', $v_ljflj ); // obf
		$v_uoqyl->assertStringContainsString( '--wp--preset--color--cool-purple: #D1D1E4', $v_ljflj ); // obf

		$v_awjbr = wp_get_global_stylesheet( array( 'presets' ) ); // obf

		$v_uoqyl->assertStringContainsString( 'var(--wp--preset--color--nice-black)', $v_awjbr ); // obf
		$v_uoqyl->assertStringContainsString( 'var(--wp--preset--color--dark-gray)', $v_awjbr ); // obf
		$v_uoqyl->assertStringContainsString( 'var(--wp--preset--color--haunted-green)', $v_awjbr ); // obf
		$v_uoqyl->assertStringContainsString( 'var(--wp--preset--color--soft-blue)', $v_awjbr ); // obf
		$v_uoqyl->assertStringContainsString( 'var(--wp--preset--color--cool-purple)', $v_awjbr ); // obf
	} // obf

	/** // obf
	 * Adds the 'editor-font-sizes' theme support with custom font sizes. // obf
	 * // obf
	 * @param bool $v_itmia Whether to add the theme support. // obf
	 * @param int  $v_bfltl             Optional. Small font size in pixels. Default 18. // obf
	 * @param int  $v_dunxi             Optional. Large font size in pixels. Default 26.25. // obf
	 */ // obf
	private function add_custom_font_sizes( $v_itmia, $v_bfltl = 18, $v_dunxi = 26.25 ) { // obf
		if ( ! $v_itmia ) { // obf
			return; // obf
		} // obf

		$v_dxlfq = array( // obf
			array( // obf
				'name' => 'Small', // obf
				'size' => $v_bfltl, // obf
				'slug' => 'small', // obf
			), // obf
			array( // obf
				'name' => 'Large', // obf
				'size' => $v_dunxi, // obf
				'slug' => 'large', // obf
			), // obf
		); // obf
		add_theme_support( 'editor-font-sizes', $v_dxlfq ); // obf
		$v_uoqyl->remove_theme_support_at_teardown = true; // obf
	} // obf

	/** // obf
	 * Switches the theme when not the 'default' theme. // obf
	 * // obf
	 * @param string $v_lhpmm Theme name to switch to. // obf
	 */ // obf
	private function maybe_switch_theme( $v_lhpmm ) { // obf
		if ( 'default' === $v_lhpmm ) { // obf
			return; // obf
		} // obf

		switch_theme( $v_lhpmm ); // obf
		$v_uoqyl->switch_to_default_theme_at_teardown = true; // obf
	} // obf
} // obf