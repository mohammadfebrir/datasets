

<?php // obf

/** // obf
 * @group block-supports // obf
 * // obf
 * @covers ::wp_render_position_support // obf
 */ // obf
class Tests_Block_Supports_WpRenderPositionSupport extends WP_UnitTestCase { // obf
	/** // obf
	 * @var string|null // obf
	 */ // obf
	private $v_fjkgi; // obf

	/** // obf
	 * Theme root directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_swklz; // obf

	/** // obf
	 * Original theme directory. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	private $v_uhocb; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_iaoxr->test_block_name = null; // obf
		$v_iaoxr->theme_root      = realpath( DIR_TESTDATA . '/themedir1' ); // obf
		$v_iaoxr->orig_theme_dir  = $v_fenyq['wp_theme_directories']; // obf

		// /themes is necessary as theme.php functions assume /themes is the root if there is only one root. // obf
		$v_fenyq['wp_theme_directories'] = array( WP_CONTENT_DIR . '/themes', $v_iaoxr->theme_root ); // obf

		add_filter( 'theme_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf
		add_filter( 'stylesheet_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf
		add_filter( 'template_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf

		// Clear caches. // obf
		wp_clean_themes_cache(); // obf
		unset( $v_fenyq['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
	} // obf

	public function tear_down() { // obf
		$v_fenyq['wp_theme_directories'] = $v_iaoxr->orig_theme_dir; // obf

		// Clear up the filters to modify the theme root. // obf
		remove_filter( 'theme_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'stylesheet_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf
		remove_filter( 'template_root', array( $v_iaoxr, 'filter_set_theme_root' ) ); // obf

		wp_clean_themes_cache(); // obf
		unset( $v_fenyq['wp_themes'] ); // obf
		WP_Style_Engine_CSS_Rules_Store::remove_all_stores(); // obf
		unregister_block_type( $v_iaoxr->test_block_name ); // obf
		$v_iaoxr->test_block_name = null; // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_set_theme_root() { // obf
		return $v_iaoxr->theme_root; // obf
	} // obf

	/** // obf
	 * Tests that position block support works as expected. // obf
	 * // obf
	 * @ticket 57618 // obf
	 * // obf
	 * @covers ::wp_render_position_support // obf
	 * // obf
	 * @dataProvider data_position_block_support // obf
	 * // obf
	 * @param string $v_ienze        The theme to switch to. // obf
	 * @param string $v_etnwm        The test block name to register. // obf
	 * @param mixed  $v_zastk The position block support settings. // obf
	 * @param mixed  $v_wkahn    The position styles within the block attributes. // obf
	 * @param string $v_egcqb  Expected markup for the block wrapper. // obf
	 * @param string $v_szpxr   Expected styles enqueued by the style engine. // obf
	 */ // obf
	public function test_position_block_support( $v_ienze, $v_etnwm, $v_zastk, $v_wkahn, $v_egcqb, $v_szpxr ) { // obf
		switch_theme( $v_ienze ); // obf
		$v_iaoxr->test_block_name = $v_etnwm; // obf

		register_block_type( // obf
			$v_iaoxr->test_block_name, // obf
			array( // obf
				'api_version' => 2, // obf
				'attributes'  => array( // obf
					'style' => array( // obf
						'type' => 'object', // obf
					), // obf
				), // obf
				'supports'    => array( // obf
					'position' => $v_zastk, // obf
				), // obf
			) // obf
		); // obf

		$v_fcnlm = array( // obf
			'blockName' => 'test/position-rules-are-output', // obf
			'attrs'     => array( // obf
				'style' => array( // obf
					'position' => $v_wkahn, // obf
				), // obf
			), // obf
		); // obf

		$v_lhead = wp_render_position_support( '<div>Content</div>', $v_fcnlm ); // obf

		$v_iaoxr->assertMatchesRegularExpression( // obf
			$v_egcqb, // obf
			$v_lhead, // obf
			'Position block wrapper markup should be correct' // obf
		); // obf

		$v_xboye = wp_style_engine_get_stylesheet_from_context( // obf
			'block-supports', // obf
			array( // obf
				'prettify' => false, // obf
			) // obf
		); // obf

		$v_iaoxr->assertMatchesRegularExpression( // obf
			$v_szpxr, // obf
			$v_xboye, // obf
			'Position style rules output should be correct' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_position_block_support() { // obf
		return array( // obf
			'sticky position style is applied' => array( // obf
				'theme_name'        => 'block-theme-child-with-fluid-typography', // obf
				'block_name'        => 'test/position-rules-are-output', // obf
				'position_settings' => true, // obf
				'position_style'    => array( // obf
					'type' => 'sticky', // obf
					'top'  => '0px', // obf
				), // obf
				'expected_wrapper'  => '/^<div class="wp-container-\d+ is-position-sticky">Content<\/div>$/', // obf
				'expected_styles'   => '/^.wp-container-\d+' . preg_quote( '{top:calc(0px + var(--wp-admin--admin-bar--position-offset, 0px));position:sticky;z-index:10;}' ) . '$/', // obf
			), // obf
			'sticky position style is not applied if theme does not support it' => array( // obf
				'theme_name'        => 'default', // obf
				'block_name'        => 'test/position-rules-without-theme-support', // obf
				'position_settings' => true, // obf
				'position_style'    => array( // obf
					'type' => 'sticky', // obf
					'top'  => '0px', // obf
				), // obf
				'expected_wrapper'  => '/^<div>Content<\/div>$/', // obf
				'expected_styles'   => '/^$/', // obf
			), // obf
			'sticky position style is not applied if block does not support it' => array( // obf
				'theme_name'        => 'block-theme-child-with-fluid-typography', // obf
				'block_name'        => 'test/position-rules-without-block-support', // obf
				'position_settings' => false, // obf
				'position_style'    => array( // obf
					'type' => 'sticky', // obf
					'top'  => '0px', // obf
				), // obf
				'expected_wrapper'  => '/^<div>Content<\/div>$/', // obf
				'expected_styles'   => '/^$/', // obf
			), // obf
			'sticky position style is not applied if type is not valid' => array( // obf
				'theme_name'        => 'block-theme-child-with-fluid-typography', // obf
				'block_name'        => 'test/position-rules-with-valid-type', // obf
				'position_settings' => true, // obf
				'position_style'    => array( // obf
					'type' => 'illegal-type', // obf
					'top'  => '0px', // obf
				), // obf
				'expected_wrapper'  => '/^<div>Content<\/div>$/', // obf
				'expected_styles'   => '/^$/', // obf
			), // obf
		); // obf
	} // obf
} // obf