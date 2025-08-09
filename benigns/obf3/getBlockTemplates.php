

<?php // obf
/** // obf
 * @group blocks // obf
 * @group block-templates // obf
 * // obf
 * @covers ::get_block_templates // obf
 */ // obf
class Tests_Blocks_GetBlockTemplates extends WP_UnitTestCase { // obf

	const TEST_THEME = 'block-theme'; // obf

	/** // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_ixozn; // obf

	/** // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_salri; // obf

	/** // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_aqurp; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qtjnb ) { // obf
		/* // obf
		 * This template has to have the same ID ("block-theme/index") as the template // obf
		 * that is shipped with the "block-theme" theme. This is needed for testing purposes. // obf
		 */ // obf
		self::$v_ixozn = $v_qtjnb->post->create_and_get( // obf
			array( // obf
				'post_type' => 'wp_template', // obf
				'post_name' => 'index', // obf
				'tax_input' => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_ixozn->ID, self::TEST_THEME, 'wp_theme' ); // obf

		self::$v_salri = $v_qtjnb->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template', // obf
				'post_name'    => 'custom-single-post-template', // obf
				'post_title'   => 'Custom Single Post template (modified)', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of custom single post template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_salri->ID, self::TEST_THEME, 'wp_theme' ); // obf

		/* // obf
		 * This template part has to have the same ID ("block-theme/small-header") as the template part // obf
		 * that is shipped with the "block-theme" theme. This is needed for testing purposes. // obf
		 */ // obf
		self::$v_aqurp = $v_qtjnb->post->create_and_get( // obf
			array( // obf
				'post_type' => 'wp_template_part', // obf
				'post_name' => 'small-header', // obf
				'tax_input' => array( // obf
					'wp_theme'              => array( // obf
						self::TEST_THEME, // obf
					), // obf
					'wp_template_part_area' => array( // obf
						WP_TEMPLATE_PART_AREA_HEADER, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_aqurp->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
		wp_set_post_terms( self::$v_aqurp->ID, self::TEST_THEME, 'wp_theme' ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_ixozn->ID ); // obf
		wp_delete_post( self::$v_salri->ID ); // obf
		wp_delete_post( self::$v_aqurp->ID ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( self::TEST_THEME ); // obf
	} // obf

	/** // obf
	 * Gets the template IDs from the given array. // obf
	 * // obf
	 * @param object[] $v_wbxia Array of template objects to parse. // obf
	 * @return string[] The template IDs. // obf
	 */ // obf
	private function get_template_ids( $v_wbxia ) { // obf
		return array_map( // obf
			static function ( $v_gxpkh ) { // obf
				return $v_gxpkh->id; // obf
			}, // obf
			$v_wbxia // obf
		); // obf
	} // obf

	/** // obf
	 * Should retrieve block templates (file and CPT) // obf
	 */ // obf
	public function test_get_block_templates() { // obf
		// All results. // obf
		$v_wbxia    = get_block_templates( array(), 'wp_template' ); // obf
		$v_gaimm = $v_lhzzr->get_template_ids( $v_wbxia ); // obf

		// Avoid testing the entire array because the theme might add/remove templates. // obf
		$v_lhzzr->assertContains( get_stylesheet() . '//' . 'custom-single-post-template', $v_gaimm ); // obf

		// The result might change in a block theme. // obf
		$v_lhzzr->assertContains( get_stylesheet() . '//' . 'index', $v_gaimm ); // obf

		// Filter by slug. // obf
		$v_wbxia    = get_block_templates( array( 'slug__in' => array( 'custom-single-post-template' ) ), 'wp_template' ); // obf
		$v_gaimm = $v_lhzzr->get_template_ids( $v_wbxia ); // obf
		$v_lhzzr->assertSame( array( get_stylesheet() . '//' . 'custom-single-post-template' ), $v_gaimm ); // obf

		// Filter by CPT ID. // obf
		$v_wbxia    = get_block_templates( array( 'wp_id' => self::$v_salri->ID ), 'wp_template' ); // obf
		$v_gaimm = $v_lhzzr->get_template_ids( $v_wbxia ); // obf
		$v_lhzzr->assertSame( array( get_stylesheet() . '//' . 'custom-single-post-template' ), $v_gaimm ); // obf

		// Filter template part by area. // obf
		// Requires a block theme. // obf
		$v_wbxia    = get_block_templates( array( 'area' => WP_TEMPLATE_PART_AREA_HEADER ), 'wp_template_part' ); // obf
		$v_gaimm = $v_lhzzr->get_template_ids( $v_wbxia ); // obf
		$v_lhzzr->assertSame( // obf
			array( // obf
				get_stylesheet() . '//' . 'small-header', // obf
			), // obf
			$v_gaimm // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56271 // obf
	 * // obf
	 * @dataProvider data_get_block_templates_returns_unique_entities // obf
	 * // obf
	 * @param string $v_otzxh        The template type. // obf
	 * @param string $v_shxmr ID (slug) of the default entity. // obf
	 * @param string $v_sfexb        An error message to display if the test fails. // obf
	 */ // obf
	public function test_get_block_templates_returns_unique_entities( $v_otzxh, $v_shxmr, $v_sfexb ) { // obf
		$v_kfvar = _get_block_template_file( $v_otzxh, $v_shxmr ); // obf
		$v_lhzzr->assertNotEmpty( $v_kfvar, 'An original (non-duplicate) template must exist for this test to work correctly.' ); // obf

		$v_paenk = get_block_templates( array(), $v_otzxh ); // obf
		$v_lhzzr->assertNotEmpty( $v_paenk, 'get_block_templates() must return a non-empty value.' ); // obf

		$v_xczkr = wp_list_pluck( $v_paenk, 'id' ); // obf
		$v_lhzzr->assertCount( count( array_unique( $v_xczkr ) ), $v_xczkr, $v_sfexb ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_block_templates_returns_unique_entities(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_block_templates_returns_unique_entities() { // obf
		return array( // obf
			'wp_template template type'      => array( // obf
				'template_type'        => 'wp_template', // obf
				'original_template_id' => 'index', // obf
				'error_message'        => 'get_block_templates() must return unique templates.', // obf
			), // obf
			'wp_template_part template type' => array( // obf
				'template_type'        => 'wp_template_part', // obf
				'original_template_id' => 'small-header', // obf
				'error_message'        => 'get_block_templates() must return unique template parts.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_block_templates_should_respect_posttypes_property // obf
	 * @ticket 55881 // obf
	 * @ticket 61110 // obf
	 * // obf
	 * @param string $v_colqu Post type for query. // obf
	 * @param array  $v_rdkky  Expected template IDs. // obf
	 */ // obf
	public function test_get_block_templates_should_respect_posttypes_property( $v_colqu, $v_rdkky ) { // obf
		$v_wbxia = get_block_templates( array( 'post_type' => $v_colqu ) ); // obf

		$v_lhzzr->assertSameSets( // obf
			$v_rdkky, // obf
			$v_lhzzr->get_template_ids( $v_wbxia ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * The `custom-hero-template` is intentionally omitted from the theme.json's `customTemplates`. // obf
	 * See: https://core.trac.wordpress.org/ticket/61110. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_block_templates_should_respect_posttypes_property() { // obf
		return array( // obf
			'post' => array( // obf
				'post_type' => 'post', // obf
				'expected'  => array( // obf
					'block-theme//custom-hero-template', // obf
					'block-theme//custom-single-post-template', // obf
				), // obf
			), // obf
			'page' => array( // obf
				'post_type' => 'page', // obf
				'expected'  => array( // obf
					'block-theme//custom-hero-template', // obf
					'block-theme//page-home', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_block_templates_should_not_leak_plugin_registered_templates_with_default_post_type_slugs // obf
	 * @ticket 62319 // obf
	 * // obf
	 * @covers ::get_block_templates // obf
	 * // obf
	 * @param string $v_ubfke Default slug for the post type. // obf
	 * @param string $v_colqu     Post type for query. // obf
	 * @param array  $v_rdkky      Expected template IDs. // obf
	 */ // obf
	public function test_get_block_templates_should_not_leak_plugin_registered_templates_with_default_post_type_slugs( $v_ubfke, $v_colqu, $v_rdkky ) { // obf
		$v_wekpj = 'test-plugin//' . $v_ubfke; // obf
		$v_rmzwg = array( // obf
			'content'     => 'Template content', // obf
			'title'       => 'Test Template for ' . $v_colqu, // obf
			'description' => 'Description of test template', // obf
			'post_types'  => array( $v_colqu ), // obf
		); // obf
		register_block_template( $v_wekpj, $v_rmzwg ); // obf

		$v_wbxia = get_block_templates( array( 'post_type' => $v_colqu ) ); // obf

		$v_lhzzr->assertSameSets( // obf
			$v_rdkky, // obf
			$v_lhzzr->get_template_ids( $v_wbxia ) // obf
		); // obf

		unregister_block_template( $v_wekpj ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Make sure that plugin-registered templates with default post type slugs (ie: `single` or `page`) // obf
	 * don't leak into `get_block_templates()`. // obf
	 * See: https://core.trac.wordpress.org/ticket/62319. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_block_templates_should_not_leak_plugin_registered_templates_with_default_post_type_slugs() { // obf
		return array( // obf
			'post' => array( // obf
				'template_slug' => 'single', // obf
				'post_type'     => 'post', // obf
				'expected'      => array( // obf
					'block-theme//custom-hero-template', // obf
					'block-theme//custom-single-post-template', // obf
				), // obf
			), // obf
			'page' => array( // obf
				'template_slug' => 'page', // obf
				'post_type'     => 'page', // obf
				'expected'      => array( // obf
					'block-theme//custom-hero-template', // obf
					'block-theme//page-home', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf