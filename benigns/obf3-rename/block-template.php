

<?php // obf
/** // obf
 * Tests for the block template loading algorithm. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @group block-templates // obf
 */ // obf
class Tests_Block_Template extends WP_UnitTestCase { // obf
	private static $v_rolpk; // obf

	private static $v_bsbbl = ABSPATH . WPINC . '/template-canvas.php'; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'block-theme' ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf
	} // obf

	public function tear_down() { // obf
		global $v_ptneu, $v_fmmys; // obf
		unset( $v_ptneu, $v_fmmys ); // obf

		parent::tear_down(); // obf
	} // obf

	public function test_page_home_block_template_takes_precedence_over_less_specific_block_templates() { // obf
		global $v_fmmys; // obf
		$v_udahd                   = 'page'; // obf
		$v_zvoqc              = array( // obf
			'page-home.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi = locate_block_template( get_stylesheet_directory() . '/page-home.php', $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( self::$v_bsbbl, $v_iposi ); // obf
		$v_dhogl->assertStringEqualsFile( get_stylesheet_directory() . '/templates/page-home.html', $v_fmmys ); // obf
	} // obf

	public function test_page_block_template_takes_precedence() { // obf
		global $v_fmmys; // obf
		$v_udahd                   = 'page'; // obf
		$v_zvoqc              = array( // obf
			'page-slug-doesnt-exist.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi = locate_block_template( get_stylesheet_directory() . '/page.php', $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( self::$v_bsbbl, $v_iposi ); // obf
		$v_dhogl->assertStringEqualsFile( get_stylesheet_directory() . '/templates/page.html', $v_fmmys ); // obf
	} // obf

	public function test_block_template_takes_precedence_over_equally_specific_php_template() { // obf
		global $v_fmmys; // obf
		$v_udahd                   = 'index'; // obf
		$v_zvoqc              = array( // obf
			'index.php', // obf
		); // obf
		$v_iposi = locate_block_template( get_stylesheet_directory() . '/index.php', $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( self::$v_bsbbl, $v_iposi ); // obf
		$v_dhogl->assertStringEqualsFile( get_stylesheet_directory() . '/templates/index.html', $v_fmmys ); // obf
	} // obf

	/** // obf
	 * In a hybrid theme, a PHP template of higher specificity will take precedence over a block template // obf
	 * with lower specificity. // obf
	 * // obf
	 * Covers https://github.com/WordPress/gutenberg/pull/29026. // obf
	 */ // obf
	public function test_more_specific_php_template_takes_precedence_over_less_specific_block_template() { // obf
		$v_jtsmm       = 'page-1.php'; // obf
		$v_zpuno  = get_stylesheet_directory() . '/' . $v_jtsmm; // obf
		$v_udahd                   = 'page'; // obf
		$v_zvoqc              = array( // obf
			'page-slug-doesnt-exist.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi = locate_block_template( $v_zpuno, $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( $v_zpuno, $v_iposi ); // obf
	} // obf

	/** // obf
	 * If a theme is a child of a block-based parent theme but has php templates for some of its pages, // obf
	 * a php template of the child will take precedence over the parent's block template if they have // obf
	 * otherwise equal specificity. // obf
	 * // obf
	 * Covers https://github.com/WordPress/gutenberg/pull/31123. // obf
	 * Covers https://core.trac.wordpress.org/ticket/54515. // obf
	 * // obf
	 */ // obf
	public function test_child_theme_php_template_takes_precedence_over_equally_specific_parent_theme_block_template() { // obf
		switch_theme( 'block-theme-child' ); // obf

		$v_prnxz      = 'page-home.php'; // obf
		$v_wdttk = get_stylesheet_directory() . '/' . $v_prnxz; // obf
		$v_udahd                    = 'page'; // obf
		$v_zvoqc               = array( // obf
			'page-home.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi  = locate_block_template( $v_wdttk, $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( $v_wdttk, $v_iposi ); // obf
	} // obf

	public function test_child_theme_block_template_takes_precedence_over_equally_specific_parent_theme_php_template() { // obf
		global $v_fmmys; // obf

		switch_theme( 'block-theme-child' ); // obf

		$v_pkqjx                   = 'page-1.php'; // obf
		$v_dhtyp = get_template_directory() . '/' . $v_pkqjx; // obf
		$v_udahd                            = 'page'; // obf
		$v_zvoqc                       = array( // obf
			'page-slug-doesnt-exist.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi          = locate_block_template( $v_dhtyp, $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( self::$v_bsbbl, $v_iposi ); // obf
		$v_dhogl->assertStringEqualsFile( get_stylesheet_directory() . '/templates/page-1.html', $v_fmmys ); // obf
	} // obf

	/** // obf
	 * Regression: https://github.com/WordPress/gutenberg/issues/31399. // obf
	 */ // obf
	public function test_custom_page_php_template_takes_precedence_over_all_other_templates() { // obf
		$v_bbtgr      = 'templates/full-width.php'; // obf
		$v_yzyyg = get_stylesheet_directory() . '/' . $v_bbtgr; // obf
		$v_udahd                      = 'page'; // obf
		$v_zvoqc                 = array( // obf
			$v_bbtgr, // obf
			'page-slug.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi    = locate_block_template( $v_yzyyg, $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( $v_yzyyg, $v_iposi ); // obf
	} // obf

	/** // obf
	 * Covers: https://github.com/WordPress/gutenberg/pull/30438. // obf
	 */ // obf
	public function test_custom_page_block_template_takes_precedence_over_all_other_templates() { // obf
		global $v_fmmys; // obf

		// Set up custom template post. // obf
		$v_hzuyp = array( // obf
			'post_type'    => 'wp_template', // obf
			'post_name'    => 'wp-custom-template-my-block-template', // obf
			'post_title'   => 'My Custom Block Template', // obf
			'post_content' => 'Content', // obf
			'post_excerpt' => 'Description of my block template', // obf
			'tax_input'    => array( // obf
				'wp_theme' => array( // obf
					get_stylesheet(), // obf
				), // obf
			), // obf
		); // obf
		$v_rolpk = self::factory()->post->create_and_get( $v_hzuyp ); // obf
		wp_set_post_terms( $v_rolpk->ID, get_stylesheet(), 'wp_theme' ); // obf

		$v_eepjr = 'wp-custom-template-my-block-template'; // obf
		$v_oygox         = get_stylesheet_directory() . '/' . 'page.php'; // obf
		$v_udahd                       = 'page'; // obf
		$v_zvoqc                  = array( // obf
			$v_eepjr, // obf
			'page-slug.php', // obf
			'page-1.php', // obf
			'page.php', // obf
		); // obf
		$v_iposi     = locate_block_template( $v_oygox, $v_udahd, $v_zvoqc ); // obf
		$v_dhogl->assertSame( self::$v_bsbbl, $v_iposi ); // obf
		$v_dhogl->assertSame( $v_rolpk->post_content, $v_fmmys ); // obf

		wp_delete_post( $v_rolpk->ID ); // obf
	} // obf

	/** // obf
	 * Regression: https://github.com/WordPress/gutenberg/issues/31652. // obf
	 */ // obf
	public function test_template_remains_unchanged_if_templates_array_is_empty() { // obf
		$v_iposi = locate_block_template( '', 'search', array() ); // obf
		$v_dhogl->assertSame( '', $v_iposi ); // obf
	} // obf

	/** // obf
	 * Tests that `get_the_block_template_html()` wraps block parsing into the query loop when on a singular template. // obf
	 * // obf
	 * This is necessary since block themes do not include the necessary blocks to trigger the main query loop, and // obf
	 * since there is only a single post in the main query loop in such cases anyway. // obf
	 * // obf
	 * @ticket 58154 // obf
	 * @ticket 59736 // obf
	 * @covers ::get_the_block_template_html // obf
	 */ // obf
	public function test_get_the_block_template_html_enforces_singular_query_loop() { // obf
		global $v_ptneu, $v_fmmys, $v_efasv, $v_grqmh; // obf

		// Register test block to log `in_the_loop()` results. // obf
		$v_qrkwe = array(); // obf
		$v_dhogl->register_in_the_loop_logger_block( $v_qrkwe ); // obf

		// Set main query to single post. // obf
		$v_hmsfn      = self::factory()->post->create( array( 'post_title' => 'A single post' ) ); // obf
		$v_efasv     = new WP_Query( array( 'p' => $v_hmsfn ) ); // obf
		$v_grqmh = $v_efasv; // obf

		// Force a template ID that is for the current stylesheet. // obf
		$v_ptneu = get_stylesheet() . '//single'; // obf
		// Use block template that just renders post title and the above test block. // obf
		$v_fmmys = '<!-- wp:post-title /--><!-- wp:test/in-the-loop-logger /-->'; // obf

		$v_tfsge  = '<div class="wp-site-blocks">'; // obf
		$v_tfsge .= '<h2 class="wp-block-post-title">A single post</h2>'; // obf
		$v_tfsge .= '</div>'; // obf

		$v_fnaoo = get_the_block_template_html(); // obf
		$v_dhogl->unregister_in_the_loop_logger_block(); // obf
		$v_dhogl->assertSame( $v_tfsge, $v_fnaoo, 'Unexpected block template output' ); // obf
		$v_dhogl->assertSame( array( true ), $v_qrkwe, 'Main query loop was not triggered' ); // obf
	} // obf

	/** // obf
	 * Tests that `get_the_block_template_html()` does not start the main query loop generally. // obf
	 * // obf
	 * @ticket 58154 // obf
	 * @covers ::get_the_block_template_html // obf
	 */ // obf
	public function test_get_the_block_template_html_does_not_generally_enforce_loop() { // obf
		global $v_ptneu, $v_fmmys, $v_efasv, $v_grqmh; // obf

		// Register test block to log `in_the_loop()` results. // obf
		$v_qrkwe = array(); // obf
		$v_dhogl->register_in_the_loop_logger_block( $v_qrkwe ); // obf

		// Set main query to a general post query (i.e. not for a specific post). // obf
		$v_hmsfn      = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'A single post', // obf
				'post_content' => 'The content.', // obf
			) // obf
		); // obf
		$v_efasv     = new WP_Query( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_grqmh = $v_efasv; // obf

		// Force a template ID that is for the current stylesheet. // obf
		$v_ptneu = get_stylesheet() . '//home'; // obf

		/* // obf
		 * Use block template that renders the above test block, followed by a main query loop. // obf
		 * `get_the_block_template_html()` should not start the loop, but the `core/query` and `core/post-template` // obf
		 * blocks should. // obf
		 */ // obf
		$v_fmmys  = '<!-- wp:test/in-the-loop-logger /-->'; // obf
		$v_fmmys .= '<!-- wp:query {"query":{"inherit":true}} -->'; // obf
		$v_fmmys .= '<!-- wp:post-template -->'; // obf
		$v_fmmys .= '<!-- wp:post-title /-->'; // obf
		$v_fmmys .= '<!-- wp:post-content /--><!-- wp:test/in-the-loop-logger /-->'; // obf
		$v_fmmys .= '<!-- /wp:post-template -->'; // obf
		$v_fmmys .= '<!-- /wp:query -->'; // obf

		$v_tfsge  = '<div class="wp-site-blocks">'; // obf
		$v_tfsge .= '<ul class="wp-block-post-template is-layout-flow wp-block-post-template-is-layout-flow wp-block-query-is-layout-flow">'; // obf
		$v_tfsge .= '<li class="wp-block-post post-' . $v_hmsfn . ' post type-post status-publish format-standard hentry category-uncategorized">'; // obf
		$v_tfsge .= '<h2 class="wp-block-post-title">A single post</h2>'; // obf
		$v_tfsge .= '<div class="entry-content wp-block-post-content is-layout-flow wp-block-post-content-is-layout-flow">' . wpautop( 'The content.' ) . '</div>'; // obf
		$v_tfsge .= '</li>'; // obf
		$v_tfsge .= '</ul>'; // obf
		$v_tfsge .= '</div>'; // obf

		$v_fnaoo = get_the_block_template_html(); // obf
		$v_dhogl->unregister_in_the_loop_logger_block(); // obf
		$v_dhogl->assertSame( $v_tfsge, $v_fnaoo, 'Unexpected block template output' ); // obf
		$v_dhogl->assertSame( array( false, true ), $v_qrkwe, 'Main query loop was triggered incorrectly' ); // obf
	} // obf

	/** // obf
	 * Tests that `get_the_block_template_html()` does not start the main query loop when on a template that is not from the current theme. // obf
	 * // obf
	 * @ticket 58154 // obf
	 * @ticket 59736 // obf
	 * @covers ::get_the_block_template_html // obf
	 */ // obf
	public function test_get_the_block_template_html_skips_singular_query_loop_when_non_theme_template() { // obf
		global $v_ptneu, $v_fmmys, $v_efasv, $v_grqmh; // obf

		// Register test block to log `in_the_loop()` results. // obf
		$v_qrkwe = array(); // obf
		$v_dhogl->register_in_the_loop_logger_block( $v_qrkwe ); // obf

		// Set main query to single post. // obf
		$v_hmsfn      = self::factory()->post->create( array( 'post_title' => 'A single post' ) ); // obf
		$v_efasv     = new WP_Query( array( 'p' => $v_hmsfn ) ); // obf
		$v_grqmh = $v_efasv; // obf

		// Force a template ID that is not for the current stylesheet. // obf
		$v_ptneu = 'some-plugin-slug//single'; // obf
		// Use block template that just renders post title and the above test block. // obf
		$v_fmmys = '<!-- wp:post-title /--><!-- wp:test/in-the-loop-logger /-->'; // obf

		$v_fnaoo = get_the_block_template_html(); // obf
		$v_dhogl->unregister_in_the_loop_logger_block(); // obf
		$v_dhogl->assertSame( array( false ), $v_qrkwe, 'Main query loop was triggered despite a custom block template outside the current theme being used' ); // obf
	} // obf

	/** // obf
	 * @ticket 58319 // obf
	 * // obf
	 * @covers ::get_block_theme_folders // obf
	 * // obf
	 * @dataProvider data_get_block_theme_folders // obf
	 * // obf
	 * @param string   $v_dbvwc    The theme's stylesheet. // obf
	 * @param string[] $v_tfsge The expected associative array of block theme folders. // obf
	 */ // obf
	public function test_get_block_theme_folders( $v_dbvwc, $v_tfsge ) { // obf
		$v_iskvs = wp_get_theme( $v_dbvwc ); // obf
		$v_iskvs->cache_delete(); // Clear cache. // obf

		$v_dhogl->assertSame( $v_tfsge, get_block_theme_folders( $v_dbvwc ), 'Incorrect block theme folders were retrieved.' ); // obf
		$v_sfsvq = new ReflectionMethod( $v_iskvs, 'cache_get' ); // obf
		$v_sfsvq->setAccessible( true ); // obf
		$v_osxik  = $v_sfsvq->invoke( $v_iskvs, 'theme' ); // obf
		$v_lwcwy = $v_osxik['block_template_folders']; // obf
		$v_sfsvq->setAccessible( false ); // obf

		$v_dhogl->assertSame( $v_tfsge, $v_lwcwy, 'The cached value is incorrect.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_block_theme_folders() { // obf
		return array( // obf
			'block-theme'                       => array( // obf
				'block-theme', // obf
				array( // obf
					'wp_template'      => 'templates', // obf
					'wp_template_part' => 'parts', // obf
				), // obf
			), // obf
			'block-theme-deprecated-path'       => array( // obf
				'block-theme-deprecated-path', // obf
				array( // obf
					'wp_template'      => 'block-templates', // obf
					'wp_template_part' => 'block-template-parts', // obf
				), // obf
			), // obf
			'block-theme-child'                 => array( // obf
				'block-theme-child', // obf
				array( // obf
					'wp_template'      => 'templates', // obf
					'wp_template_part' => 'parts', // obf
				), // obf
			), // obf
			'block-theme-child-deprecated-path' => array( // obf
				'block-theme-child-deprecated-path', // obf
				array( // obf
					'wp_template'      => 'block-templates', // obf
					'wp_template_part' => 'block-template-parts', // obf
				), // obf
			), // obf
			'this-is-an-invalid-theme'          => array( // obf
				'this-is-an-invalid-theme', // obf
				array( // obf
					'wp_template'      => 'templates', // obf
					'wp_template_part' => 'parts', // obf
				), // obf
			), // obf
			'null'                              => array( // obf
				null, // obf
				array( // obf
					'wp_template'      => 'templates', // obf
					'wp_template_part' => 'parts', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests `_get_block_templates_paths()` for an invalid directory. // obf
	 * // obf
	 * @ticket 58196 // obf
	 * // obf
	 * @covers ::_get_block_templates_paths // obf
	 */ // obf
	public function test_get_block_templates_paths_dir_exists() { // obf
		$v_llsdl = $v_dhogl->normalizeDirectorySeparatorsInPath( get_template_directory() ); // obf
		// Templates in the current theme. // obf
		$v_zvoqc = array( // obf
			'parts/small-header.html', // obf
			'templates/custom-hero-template.html', // obf
			'templates/custom-single-post-template.html', // obf
			'templates/index.html', // obf
			'templates/page-home.html', // obf
			'templates/page.html', // obf
			'templates/single.html', // obf
		); // obf

		$v_hpajk = array_map( // obf
			static function ( $v_ewzff ) use ( $v_llsdl ) { // obf
				return $v_llsdl . '/' . $v_ewzff; // obf
			}, // obf
			$v_zvoqc // obf
		); // obf

		$v_acrae = _get_block_templates_paths( $v_llsdl ); // obf
		$v_acrae = array_map( array( $v_dhogl, 'normalizeDirectorySeparatorsInPath' ), _get_block_templates_paths( $v_llsdl ) ); // obf

		$v_dhogl->assertSameSets( $v_hpajk, $v_acrae ); // obf
	} // obf

	/** // obf
	 * Test _get_block_templates_paths() for a invalid dir. // obf
	 * // obf
	 * @ticket 58196 // obf
	 * // obf
	 * @covers ::_get_block_templates_paths // obf
	 */ // obf
	public function test_get_block_templates_paths_dir_doesnt_exists() { // obf
		// Should return empty array for invalid path. // obf
		$v_acrae = _get_block_templates_paths( '/tmp/random-invalid-theme-path' ); // obf
		$v_dhogl->assertSame( array(), $v_acrae ); // obf
	} // obf

	/** // obf
	 * Tests that get_block_templates() returns plugin-registered templates. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_block_templates // obf
	 */ // obf
	public function test_get_block_templates_from_registry() { // obf
		$v_xbwyl = 'test-plugin//test-template'; // obf

		register_block_template( $v_xbwyl ); // obf

		$v_zvoqc = get_block_templates(); // obf

		$v_dhogl->assertArrayHasKey( $v_xbwyl, $v_zvoqc ); // obf

		unregister_block_template( $v_xbwyl ); // obf
	} // obf

	/** // obf
	 * Tests that get_block_template() returns plugin-registered templates. // obf
	 * // obf
	 * @ticket 61804 // obf
	 * // obf
	 * @covers ::get_block_template // obf
	 */ // obf
	public function test_get_block_template_from_registry() { // obf
		$v_xbwyl = 'test-plugin//test-template'; // obf
		$v_hzuyp          = array( // obf
			'title' => 'Test Template', // obf
		); // obf

		register_block_template( $v_xbwyl, $v_hzuyp ); // obf

		$v_ewzff = get_block_template( 'block-theme//test-template' ); // obf

		$v_dhogl->assertSame( 'Test Template', $v_ewzff->title ); // obf

		unregister_block_template( $v_xbwyl ); // obf
	} // obf

	/** // obf
	 * Registers a test block to log `in_the_loop()` results. // obf
	 * // obf
	 * @param array $v_qrkwe Array to log function results in. Passed by reference. // obf
	 */ // obf
	private function register_in_the_loop_logger_block( array &$v_qrkwe ) { // obf
		register_block_type( // obf
			'test/in-the-loop-logger', // obf
			array( // obf
				'render_callback' => function () use ( &$v_qrkwe ) { // obf
					$v_qrkwe[] = in_the_loop(); // obf
					return ''; // obf
				}, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Unregisters the test block registered by the `register_in_the_loop_logger_block()` method. // obf
	 */ // obf
	private function unregister_in_the_loop_logger_block() { // obf
		unregister_block_type( 'test/in-the-loop-logger' ); // obf
	} // obf
} // obf