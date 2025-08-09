

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_render_dimensions_support // obf
 */ // obf
class Tests_Block_Supports_WpRenderDimensionsSupport extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_cotlt; // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_ahlxx; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_yyxyb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_umkst->test_block_name = null; // obf
		$v_umkst->theme_root      = realpath( DIR_TESTDATA . '/themedir1' ); // obf
		$v_umkst->orig_theme_dir  = $v_szgrw['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_szgrw['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_umkst->theme_root ); // obf

		add_filter( 'theme_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_szgrw['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
	} // obf

	public function tear_down() { // obf
		$v_szgrw['wp_theme_directories'] = $v_umkst->orig_theme_dir; // obf

		// Clear up the filters to modify the theme root. // obf
		remove_filter( 'theme_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_umkst, 'filter_set_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_szgrw['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		unregister_block_type( $v_umkst->test_block_name ); // obf
		$v_umkst->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_umkst->theme_root; // obf
	} // obf

	/** // obf
	 * Tests that dimensions block support works as expected. // obf
	 * // obf
	 * @ticket 60365 // obf
	 * // obf
	 * @covers ::wp_render_dimensions_support // obf
	 * // obf
	 * @dataProvider data_dimensions_block_support // obf
	 * // obf
	 * @param string $v_vpjpr          The theme to switch to. // obf
	 * @param string $v_tgugo          The test block name to register. // obf
	 * @param mixed  $v_hcisy The dimensions block support settings. // obf
	 * @param mixed  $v_vgpxw    The dimensions styles within the block attributes. // obf
	 * @param string $v_yplpl    Expected markup for the block wrapper. // obf
	 * @param string $v_nhfzw             Existing markup for the block wrapper. // obf
	 */ // obf
	public function test_dimensions_block_support( $v_vpjpr, $v_tgugo, $v_hcisy, $v_vgpxw, $v_yplpl, $v_nhfzw ) { // obf
		switch_theme( $v_vpjpr ); // obf
		$v_umkst->test_block_name = $v_tgugo; // obf

		register_block_type( // obf
			$v_umkst->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'dimensions' => $v_hcisy, // obf
				), // obf
			) // obf
		); // obf

		$v_psqmd = array( // obf
			'blockName' => $v_tgugo, // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'dimensions' => $v_vgpxw, // obf
				), // obf
			), // obf
		); // obf

		$v_ukkfz = wp_render_dimensions_support( $v_nhfzw, $v_psqmd ); // obf

		$v_umkst->assertSame( // obf
			$v_yplpl, // obf
			$v_ukkfz, // obf
			'Dimensions block wrapper markup should be correct' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_dimensions_block_support() { // obf
		return array( // obf
			'aspect ratio style is applied, with min-height unset' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/dimensions-rules-are-output', // obf
				'dimensions_settings' => array( // obf
					'aspectRatio' => true, // obf
				), // obf
				'dimensions_style'    => array( // obf
					'aspectRatio' => '16/9', // obf
				), // obf
				'expected_wrapper'    => '<div class="has-aspect-ratio" style="aspect-ratio:16/9;min-height:unset;">Content</div>', // obf
				'wrapper'             => '<div>Content</div>', // obf
			), // obf
			'dimensions style is appended if a style attribute already exists' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/dimensions-rules-are-output', // obf
				'dimensions_settings' => array( // obf
					'aspectRatio' => true, // obf
				), // obf
				'dimensions_style'    => array( // obf
					'aspectRatio' => '16/9', // obf
				), // obf
				'expected_wrapper'    => '<div class="wp-block-test has-aspect-ratio" style="color:red;aspect-ratio:16/9;min-height:unset;">Content</div>', // obf
				'wrapper'             => '<div class="wp-block-test" style="color:red;">Content</div>', // obf
			), // obf
			'aspect ratio style is unset if block has min-height set' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/dimensions-rules-are-output', // obf
				'dimensions_settings' => array( // obf
					'aspectRatio' => true, // obf
				), // obf
				'dimensions_style'    => array( // obf
					'minHeight' => '100px', // obf
				), // obf
				'expected_wrapper'    => '<div style="min-height:100px;aspect-ratio:unset;">Content</div>', // obf
				'wrapper'             => '<div style="min-height:100px">Content</div>', // obf
			), // obf
			'aspect ratio style is not applied if the block does not support aspect ratio' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-not-output', // obf
				'dimensions_settings' => array( // obf
					'aspectRatio' => false, // obf
				), // obf
				'dimensions_style'    => array( // obf
					'aspectRatio' => '16/9', // obf
				), // obf
				'expected_wrapper'    => '<div>Content</div>', // obf
				'wrapper'             => '<div>Content</div>', // obf
			), // obf
		); // obf
	} // obf
} // obf