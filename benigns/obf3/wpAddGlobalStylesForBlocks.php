

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Tests wp_add_global_styles_for_blocks(). // obf
 * // obf
 * @group themes // obf
 * // obf
 * @covers ::wp_add_global_styles_for_blocks // obf
 */ // obf
class Tests_Theme_WpAddGlobalStylesForBlocks extends WP_Theme_UnitTestCase { // obf

	/** // obf
	 * Test blocks to unregister at cleanup. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_oufyt = array(); // obf

	/** // obf
	 * Administrator ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_ptcat; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf
		self::$v_ptcat = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_email' => 'administrator@example.com', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		remove_action( 'wp_print_styles', 'print_emoji_styles' ); // obf
	} // obf

	public function tear_down() { // obf
		// Unregister test blocks. // obf
		if ( ! empty( $v_rsazs->test_blocks ) ) { // obf
			foreach ( $v_rsazs->test_blocks as $v_rrloh ) { // obf
				unregister_block_type( $v_rrloh ); // obf
			} // obf
			$v_rsazs->test_blocks = array(); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 56915 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_not_register_to_global_styles() { // obf
		switch_theme( 'block-theme' ); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_rsazs->assertNotContains( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_rsazs->get_global_styles() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56915 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_get_registered_to_global_styles() { // obf
		$v_rsazs->set_up_third_party_block(); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf

		$v_rsazs->assertNotContains( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_rsazs->get_global_styles(), // obf
			'Third party block inline style should not be registered before running wp_add_global_styles_for_blocks()' // obf
		); // obf

		wp_add_global_styles_for_blocks(); // obf

		$v_rsazs->assertContains( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_rsazs->get_global_styles(), // obf
			'Third party block inline style should be registered after running wp_add_global_styles_for_blocks()' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the block cache is set for global styles. // obf
	 * // obf
	 * @ticket 61679 // obf
	 */ // obf
	public function test_styles_for_blocks_cache_is_set() { // obf
		$v_rsazs->set_up_third_party_block(); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf

		$v_mdsdd                = 'wp_styles_for_blocks'; // obf
		$v_wqhyn = get_transient( $v_mdsdd ); // obf
		$v_rsazs->assertFalse( $v_wqhyn, 'No block styles should be cached yet.' ); // obf

		wp_add_global_styles_for_blocks(); // obf

		$v_bvrqz = get_transient( $v_mdsdd ); // obf
		$v_rsazs->assertNotEmpty( $v_bvrqz, 'No block styles were cached.' ); // obf
	} // obf

	/** // obf
	 * Tests that the block cache is skipped when in dev mode for themes. // obf
	 * // obf
	 * @ticket 61679 // obf
	 */ // obf
	public function test_styles_for_blocks_skips_cache_in_dev_mode() { // obf
		global $v_gjxxm; // obf

		$v_xlojk = $v_gjxxm; // obf

		// Setting development mode to theme should skip the cache. // obf
		$v_gjxxm = 'theme'; // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf

		// Initial register of global styles. // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_pkjvg = get_transient( 'wp_styles_for_blocks' ); // obf

		// Cleanup. // obf
		$v_gjxxm = $v_xlojk; // obf

		$v_rsazs->assertFalse( $v_pkjvg ); // obf
	} // obf

	/** // obf
	 * Tests that the block cache is updated if the block meta has changed. // obf
	 * // obf
	 * @ticket 61679 // obf
	 */ // obf
	public function test_styles_for_blocks_cache_is_skipped() { // obf
		wp_register_style( 'global-styles', false, array(), true, true ); // obf

		// Initial register of global styles. // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_pkjvg = get_transient( 'wp_styles_for_blocks' ); // obf
		$v_rsazs->assertNotEmpty( $v_pkjvg, 'Initial cache was not set.' ); // obf

		$v_rsazs->set_up_third_party_block(); // obf

		/* // obf
		 * Call register of global styles again to ensure the cache is updated. // obf
		 * In normal conditions, this function is only called once per request. // obf
		 */ // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_agcvx = get_transient( 'wp_styles_for_blocks' ); // obf
		$v_rsazs->assertNotEmpty( $v_agcvx, 'Updated cache was not set.' ); // obf

		$v_rsazs->assertNotSame( // obf
			$v_pkjvg, // obf
			$v_agcvx, // obf
			'Block style cache was not updated.' // obf
		); // obf
	} // obf

	/** // obf
	 * Confirms that `wp_styles_for_blocks` cache is cleared when a user modifies global styles. // obf
	 * @ticket 61679 // obf
	 */ // obf
	public function test_styles_for_blocks_cache_is_reset_when_user_styles_change() { // obf
		// Only administrators can update the global styles post. // obf
		wp_set_current_user( self::$v_ptcat ); // obf

		$v_rsazs->set_up_third_party_block(); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_mdsdd                = 'wp_styles_for_blocks'; // obf
		$v_wqhyn = get_transient( $v_mdsdd ); // obf

		// Update the global styles post. // obf
		$v_xjumc     = WP_Theme_JSON_Resolver::get_user_global_styles_post_id(); // obf
		$v_entuu      = WP_Theme_JSON_Resolver::get_user_data_from_wp_global_styles( wp_get_theme() ); // obf
		$v_xcoii = json_decode( $v_entuu['post_content'], true ); // obf

		// Mock a change in the global styles. // obf
		$v_slzng = array_merge( // obf
			$v_xcoii, // obf
			array( // obf
				'styles' => array( // obf
					'elements' => array( // obf
						'button' => array( // obf
							'color' => array( // obf
								'background' => 'orange', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_update_post( // obf
			array( // obf
				'ID'           => $v_xjumc, // obf
				'post_content' => wp_json_encode( $v_slzng ), // obf
			) // obf
		); // obf

		// Reset the static cache, since this would be reset between requests. // obf
		WP_Theme_JSON_Resolver::clean_cached_data(); // obf

		/* // obf
		 * Call register of global styles again to ensure the cache is updated. // obf
		 * In normal conditions, this function is only called once per request. // obf
		 */ // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_mdsdd               = 'wp_styles_for_blocks'; // obf
		$v_bvrqz = get_transient( $v_mdsdd ); // obf

		$v_rsazs->assertNotSame( // obf
			$v_wqhyn, // obf
			$v_bvrqz, // obf
			'Block style cache was not updated.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56915 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_get_registered_to_global_styles_when_per_block() { // obf
		$v_rsazs->set_up_third_party_block(); // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf

		$v_rsazs->assertNotContains( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_rsazs->get_global_styles(), // obf
			'Third party block inline style should not be registered before running wp_add_global_styles_for_blocks()' // obf
		); // obf

		wp_add_global_styles_for_blocks(); // obf

		$v_rsazs->assertContains( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_rsazs->get_global_styles(), // obf
			'Third party block inline style should be registered after running wp_add_global_styles_for_blocks()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56915 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_get_rendered_when_per_block() { // obf
		$v_rsazs->set_up_third_party_block(); // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_enqueue_style( 'global-styles' ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_msdqf = get_echo( 'wp_print_styles' ); // obf

		$v_rsazs->assertStringContainsString( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_msdqf, // obf
			'Third party block inline style should render' // obf
		); // obf
		$v_rsazs->assertStringNotContainsString( // obf
			'.wp-block-post-featured-image', // obf
			$v_msdqf, // obf
			'Core block should not render' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56915 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_blocks_inline_styles_get_rendered() { // obf
		$v_rsazs->set_up_third_party_block(); // obf
		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_enqueue_style( 'global-styles' ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_msdqf = get_echo( 'wp_print_styles' ); // obf

		$v_rsazs->assertStringContainsString( // obf
			':root :where(.wp-block-my-third-party-block){background-color: hotpink;}', // obf
			$v_msdqf, // obf
			'Third party block inline style should render' // obf
		); // obf
		$v_rsazs->assertStringContainsString( // obf
			'.wp-block-post-featured-image', // obf
			$v_msdqf, // obf
			'Core block should render' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57868 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_for_elements_get_rendered_when_per_block() { // obf
		$v_rsazs->set_up_third_party_block(); // obf
		add_filter( 'should_load_separate_core_block_assets', '__return_true' ); // obf

		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_enqueue_style( 'global-styles' ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_msdqf = get_echo( 'wp_print_styles' ); // obf

		$v_rsazs->assertStringContainsString( // obf
			':root :where(.wp-block-my-third-party-block cite){color: white;}', // obf
			$v_msdqf // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57868 // obf
	 * @ticket 61165 // obf
	 */ // obf
	public function test_third_party_blocks_inline_styles_for_elements_get_rendered() { // obf
		$v_rsazs->set_up_third_party_block(); // obf
		wp_register_style( 'global-styles', false, array(), true, true ); // obf
		wp_enqueue_style( 'global-styles' ); // obf
		wp_add_global_styles_for_blocks(); // obf

		$v_msdqf = get_echo( 'wp_print_styles' ); // obf

		$v_rsazs->assertStringContainsString( // obf
			':root :where(.wp-block-my-third-party-block cite){color: white;}', // obf
			$v_msdqf // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57868 // obf
	 * // obf
	 * @dataProvider data_wp_get_block_name_from_theme_json_path // obf
	 * // obf
	 * @param array  $v_xiury     An array of keys describing the path to a property in theme.json. // obf
	 * @param string $v_xjqsx The expected block name. // obf
	 */ // obf
	public function test_wp_get_block_name_from_theme_json_path( $v_xiury, $v_xjqsx ) { // obf
		$v_zpeeb = wp_get_block_name_from_theme_json_path( $v_xiury ); // obf
		$v_rsazs->assertSame( $v_xjqsx, $v_zpeeb ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_get_block_name_from_theme_json_path() { // obf
		return array( // obf
			'core block styles'             => array( // obf
				array( 'styles', 'blocks', 'core/navigation' ), // obf
				'core/navigation', // obf
			), // obf
			'core block element styles'     => array( // obf
				array( 'styles', 'blocks', 'core/navigation', 'elements', 'link' ), // obf
				'core/navigation', // obf
			), // obf
			'custom block styles'           => array( // obf
				array( 'styles', 'blocks', 'my/third-party-block' ), // obf
				'my/third-party-block', // obf
			), // obf
			'custom block element styles'   => array( // obf
				array( 'styles', 'blocks', 'my/third-party-block', 'elements', 'cite' ), // obf
				'my/third-party-block', // obf
			), // obf
			'custom block wrong format'     => array( // obf
				array( 'styles', 'my/third-party-block' ), // obf
				'', // obf
			), // obf
			'invalid path but works for BC' => array( // obf
				array( 'something', 'core/image' ), // obf
				'core/image', // obf
			), // obf
		); // obf
	} // obf

	private function set_up_third_party_block() { // obf
		switch_theme( 'block-theme' ); // obf

		$v_tvcvq     = 'my/third-party-block'; // obf
		$v_devnk = array( // obf
			'icon'            => 'text', // obf
			'category'        => 'common', // obf
			'render_callback' => 'foo', // obf
		); // obf
		register_block_type( $v_tvcvq, $v_devnk ); // obf

		$v_rsazs->test_blocks[] = $v_tvcvq; // obf
	} // obf

	private function get_global_styles() { // obf
		$v_msdqf = wp_styles()->get_data( 'global-styles', 'after' ); // obf
		return is_array( $v_msdqf ) ? $v_msdqf : array(); // obf
	} // obf
} // obf