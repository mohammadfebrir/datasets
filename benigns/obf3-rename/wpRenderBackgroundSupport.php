

<?php // obf
/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_render_background_support // obf
 */ // obf
class Tests_Block_Supports_WpRenderBackgroundSupport extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_vyusc; // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_byapt; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_xyogx; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_wzymz->test_block_name = null; // obf
		$v_wzymz->theme_root      = realpath( DIR_TESTDATA . '/themedir1' ); // obf
		$v_wzymz->orig_theme_dir  = $v_hdhou['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_hdhou['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_wzymz->theme_root ); // obf

		add_filter( 'theme_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_hdhou['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
	} // obf

	public function tear_down() { // obf
		$v_hdhou['wp_theme_directories'] = $v_wzymz->orig_theme_dir; // obf

		// Clear up the filters to modify the theme root. // obf
		remove_filter( 'theme_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_wzymz, 'filter_set_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_hdhou['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		unregister_block_type( $v_wzymz->test_block_name ); // obf
		$v_wzymz->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_wzymz->theme_root; // obf
	} // obf

	/** // obf
	 * Tests that background image block support works as expected. // obf
	 * // obf
	 * @ticket 59357 // obf
	 * @ticket 60175 // obf
	 * @ticket 61123 // obf
	 * @ticket 61720 // obf
	 * @ticket 61858 // obf
	 * // obf
	 * @covers ::wp_render_background_support // obf
	 * // obf
	 * @dataProvider data_background_block_support // obf
	 * // obf
	 * @param string $v_vqxpw          The theme to switch to. // obf
	 * @param string $v_pkfyy          The test block name to register. // obf
	 * @param mixed  $v_osgry The background block support settings. // obf
	 * @param mixed  $v_bwqve    The background styles within the block attributes. // obf
	 * @param string $v_lncfl    Expected markup for the block wrapper. // obf
	 * @param string $v_sswdz             Existing markup for the block wrapper. // obf
	 */ // obf
	public function test_background_block_support( $v_vqxpw, $v_pkfyy, $v_osgry, $v_bwqve, $v_lncfl, $v_sswdz ) { // obf
		switch_theme( $v_vqxpw ); // obf
		$v_wzymz->test_block_name = $v_pkfyy; // obf

		register_block_type( // obf
			$v_wzymz->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'background' => $v_osgry, // obf
				), // obf
			) // obf
		); // obf

		$v_vxwyo = array( // obf
			'blockName' => $v_pkfyy, // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'background' => $v_bwqve, // obf
				), // obf
			), // obf
		); // obf

		$v_swkws = wp_render_background_support( $v_sswdz, $v_vxwyo ); // obf

		$v_wzymz->assertSame( // obf
			$v_lncfl, // obf
			$v_swkws, // obf
			'Background block wrapper markup should be correct' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_background_block_support() { // obf
		return array( // obf
			'background image style is applied' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-output', // obf
				'background_settings' => array( // obf
					'backgroundImage' => true, // obf
				), // obf
				'background_style'    => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'https://example.com/image.jpg', // obf
					), // obf
				), // obf
				'expected_wrapper'    => '<div class="has-background" style="background-image:url(&#039;https://example.com/image.jpg&#039;);background-size:cover;">Content</div>', // obf
				'wrapper'             => '<div>Content</div>', // obf
			), // obf
			'background image style with contain, position, attachment, and repeat is applied' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-output', // obf
				'background_settings' => array( // obf
					'backgroundImage' => true, // obf
				), // obf
				'background_style'    => array( // obf
					'backgroundImage'      => array( // obf
						'url' => 'https://example.com/image.jpg', // obf
					), // obf
					'backgroundRepeat'     => 'no-repeat', // obf
					'backgroundSize'       => 'contain', // obf
					'backgroundAttachment' => 'fixed', // obf
				), // obf
				'expected_wrapper'    => '<div class="has-background" style="background-image:url(&#039;https://example.com/image.jpg&#039;);background-position:50% 50%;background-repeat:no-repeat;background-size:contain;background-attachment:fixed;">Content</div>', // obf
				'wrapper'             => '<div>Content</div>', // obf
			), // obf
			'background image style is appended if a style attribute already exists' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-output', // obf
				'background_settings' => array( // obf
					'backgroundImage' => true, // obf
				), // obf
				'background_style'    => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'https://example.com/image.jpg', // obf
					), // obf
				), // obf
				'expected_wrapper'    => '<div class="wp-block-test has-background" style="color: red;background-image:url(&#039;https://example.com/image.jpg&#039;);background-size:cover;">Content</div>', // obf
				'wrapper'             => '<div class="wp-block-test" style="color: red">Content</div>', // obf
			), // obf
			'background image style is appended if a style attribute containing multiple styles already exists' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-output', // obf
				'background_settings' => array( // obf
					'backgroundImage' => true, // obf
				), // obf
				'background_style'    => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'https://example.com/image.jpg', // obf
					), // obf
				), // obf
				'expected_wrapper'    => '<div class="wp-block-test has-background" style="color: red;font-size: 15px;background-image:url(&#039;https://example.com/image.jpg&#039;);background-size:cover;">Content</div>', // obf
				'wrapper'             => '<div class="wp-block-test" style="color: red;font-size: 15px;">Content</div>', // obf
			), // obf
			'background image style is not applied if the block does not support background image' => array( // obf
				'theme_name'          => 'block-theme-child-with-fluid-typography', // obf
				'block_name'          => 'test/background-rules-are-not-output', // obf
				'background_settings' => array( // obf
					'backgroundImage' => false, // obf
				), // obf
				'background_style'    => array( // obf
					'backgroundImage' => array( // obf
						'url' => 'https://example.com/image.jpg', // obf
					), // obf
				), // obf
				'expected_wrapper'    => '<div>Content</div>', // obf
				'wrapper'             => '<div>Content</div>', // obf
			), // obf
		); // obf
	} // obf
} // obf