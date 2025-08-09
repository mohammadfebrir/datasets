

<?php // obf
/** // obf
 * Tests for the Block Templates abstraction layer. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @group block-templates // obf
 */ // obf
class Tests_Block_Template_Utils extends WP_UnitTestCase { // obf

	const TEST_THEME = 'block-theme'; // obf

	private static $v_lnjkj; // obf
	private static $v_aaxwa; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vlkea ) { // obf
		/* // obf
		 * Set up a template post corresponding to a different theme. // obf
		 * We do this to ensure resolution and slug creation works as expected, // obf
		 * even with another post of that same name present for another theme. // obf
		 */ // obf
		self::$v_lnjkj = $v_vlkea->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template', // obf
				'post_name'    => 'my_template', // obf
				'post_title'   => 'My Template', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						'this-theme-should-not-resolve', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_lnjkj->ID, 'this-theme-should-not-resolve', 'wp_theme' ); // obf

		// Set up template post. // obf
		self::$v_lnjkj = $v_vlkea->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template', // obf
				'post_name'    => 'my_template', // obf
				'post_title'   => 'My Template', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_lnjkj->ID, self::TEST_THEME, 'wp_theme' ); // obf

		// Set up template part post. // obf
		self::$v_aaxwa = $v_vlkea->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'wp_template_part', // obf
				'post_name'    => 'my_template_part', // obf
				'post_title'   => 'My Template Part', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template part', // obf
				'tax_input'    => array( // obf
					'wp_theme'              => array( // obf
						self::TEST_THEME, // obf
					), // obf
					'wp_template_part_area' => array( // obf
						WP_TEMPLATE_PART_AREA_HEADER, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		wp_set_post_terms( self::$v_aaxwa->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
		wp_set_post_terms( self::$v_aaxwa->ID, self::TEST_THEME, 'wp_theme' ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_lnjkj->ID ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( self::TEST_THEME ); // obf
	} // obf

	/** // obf
	 * Tear down after each test. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function tear_down() { // obf
		if ( WP_Block_Type_Registry::get_instance()->is_registered( 'tests/hooked-block' ) ) { // obf
			unregister_block_type( 'tests/hooked-block' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 59338 // obf
	 * // obf
	 * @covers ::_inject_theme_attribute_in_template_part_block // obf
	 */ // obf
	public function test_inject_theme_attribute_in_template_part_block() { // obf
		$v_ljvnt = array( // obf
			'blockName'    => 'core/template-part', // obf
			'attrs'        => array( // obf
				'slug'      => 'header', // obf
				'align'     => 'full', // obf
				'tagName'   => 'header', // obf
				'className' => 'site-header', // obf
			), // obf
			'innerHTML'    => '', // obf
			'innerContent' => array(), // obf
			'innerBlocks'  => array(), // obf
		); // obf

		_inject_theme_attribute_in_template_part_block( $v_ljvnt ); // obf
		$v_kbhmk = array( // obf
			'blockName'    => 'core/template-part', // obf
			'attrs'        => array( // obf
				'slug'      => 'header', // obf
				'align'     => 'full', // obf
				'tagName'   => 'header', // obf
				'className' => 'site-header', // obf
				'theme'     => get_stylesheet(), // obf
			), // obf
			'innerHTML'    => '', // obf
			'innerContent' => array(), // obf
			'innerBlocks'  => array(), // obf
		); // obf
		$v_vbdpm->assertSame( // obf
			$v_kbhmk, // obf
			$v_ljvnt, // obf
			'`theme` attribute was not correctly injected in template part block.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59338 // obf
	 * // obf
	 * @covers ::_inject_theme_attribute_in_template_part_block // obf
	 */ // obf
	public function test_not_inject_theme_attribute_in_template_part_block_theme_attribute_exists() { // obf
		$v_ljvnt = array( // obf
			'blockName'    => 'core/template-part', // obf
			'attrs'        => array( // obf
				'slug'      => 'header', // obf
				'align'     => 'full', // obf
				'tagName'   => 'header', // obf
				'className' => 'site-header', // obf
				'theme'     => 'fake-theme', // obf
			), // obf
			'innerHTML'    => '', // obf
			'innerContent' => array(), // obf
			'innerBlocks'  => array(), // obf
		); // obf

		$v_kbhmk = $v_ljvnt; // obf
		_inject_theme_attribute_in_template_part_block( $v_ljvnt ); // obf
		$v_vbdpm->assertSame( // obf
			$v_kbhmk, // obf
			$v_ljvnt, // obf
			'Existing `theme` attribute in template part block was not respected by attribute injection.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59338 // obf
	 * // obf
	 * @covers ::_inject_theme_attribute_in_template_part_block // obf
	 */ // obf
	public function test_not_inject_theme_attribute_non_template_part_block() { // obf
		$v_eellp = array( // obf
			'blockName'    => 'core/post-content', // obf
			'attrs'        => array(), // obf
			'innerHTML'    => '', // obf
			'innerContent' => array(), // obf
			'innerBlocks'  => array(), // obf
		); // obf

		$v_kbhmk = $v_eellp; // obf
		_inject_theme_attribute_in_template_part_block( $v_eellp ); // obf
		$v_vbdpm->assertSame( // obf
			$v_kbhmk, // obf
			$v_eellp, // obf
			'`theme` attribute injection modified non-template-part block.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59452 // obf
	 * // obf
	 * @covers ::_inject_theme_attribute_in_block_template_content // obf
	 * // obf
	 * @expectedDeprecated _inject_theme_attribute_in_block_template_content // obf
	 */ // obf
	public function test_inject_theme_attribute_in_block_template_content() { // obf
		$v_xxgea                           = get_stylesheet(); // obf
		$v_yaury = '<!-- wp:template-part {"slug":"header","align":"full", "tagName":"header","className":"site-header"} /-->'; // obf
		$v_etbjo                = _inject_theme_attribute_in_block_template_content( // obf
			$v_yaury, // obf
			$v_xxgea // obf
		); // obf
		$v_kbhmk                        = sprintf( // obf
			'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /-->', // obf
			get_stylesheet() // obf
		); // obf
		$v_vbdpm->assertSame( $v_kbhmk, $v_etbjo ); // obf

		$v_ycbda = '<!-- wp:group --><!-- wp:template-part {"slug":"header","align":"full", "tagName":"header","className":"site-header"} /--><!-- /wp:group -->'; // obf
		$v_etbjo                       = _inject_theme_attribute_in_block_template_content( // obf
			$v_ycbda, // obf
			$v_xxgea // obf
		); // obf
		$v_kbhmk                               = sprintf( // obf
			'<!-- wp:group --><!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /--><!-- /wp:group -->', // obf
			get_stylesheet() // obf
		); // obf
		$v_vbdpm->assertSame( $v_kbhmk, $v_etbjo ); // obf

		// Does not inject theme when there is an existing theme attribute. // obf
		$v_wyfwf = '<!-- wp:template-part {"slug":"header","theme":"fake-theme","align":"full", "tagName":"header","className":"site-header"} /-->'; // obf
		$v_etbjo                      = _inject_theme_attribute_in_block_template_content( // obf
			$v_wyfwf, // obf
			$v_xxgea // obf
		); // obf
		$v_vbdpm->assertSame( $v_wyfwf, $v_etbjo ); // obf

		// Does not inject theme when there is no template part. // obf
		$v_sabrl = '<!-- wp:post-content /-->'; // obf
		$v_etbjo              = _inject_theme_attribute_in_block_template_content( // obf
			$v_sabrl, // obf
			$v_xxgea // obf
		); // obf
		$v_vbdpm->assertSame( $v_sabrl, $v_etbjo ); // obf
	} // obf

	/** // obf
	 * @ticket 54448 // obf
	 * @ticket 59460 // obf
	 * // obf
	 * @dataProvider data_remove_theme_attribute_in_block_template_content // obf
	 * // obf
	 * @expectedDeprecated _remove_theme_attribute_in_block_template_content // obf
	 */ // obf
	public function test_remove_theme_attribute_in_block_template_content( $v_etbjo, $v_kbhmk ) { // obf
		$v_vbdpm->assertSame( $v_kbhmk, _remove_theme_attribute_in_block_template_content( $v_etbjo ) ); // obf
	} // obf

	/** // obf
	 * @ticket 59460 // obf
	 * // obf
	 * @covers ::_remove_theme_attribute_from_template_part_block // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 * // obf
	 * @dataProvider data_remove_theme_attribute_in_block_template_content // obf
	 * // obf
	 * @param string $v_etbjo The template markup. // obf
	 * @param string $v_kbhmk         The expected markup after removing the theme attribute from Template Part blocks. // obf
	 */ // obf
	public function test_remove_theme_attribute_from_template_part_block( $v_etbjo, $v_kbhmk ) { // obf
		$v_yzvxc = parse_blocks( $v_etbjo ); // obf

		$v_vbdpm->assertSame( // obf
			$v_kbhmk, // obf
			traverse_and_serialize_blocks( // obf
				$v_yzvxc, // obf
				'_remove_theme_attribute_from_template_part_block' // obf
			) // obf
		); // obf
	} // obf

	public function data_remove_theme_attribute_in_block_template_content() { // obf
		return array( // obf
			array( // obf
				'<!-- wp:template-part {"slug":"header","theme":"tt1-blocks","align":"full","tagName":"header","className":"site-header"} /-->', // obf
				'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /-->', // obf
			), // obf
			array( // obf
				'<!-- wp:group --><!-- wp:template-part {"slug":"header","theme":"tt1-blocks","align":"full","tagName":"header","className":"site-header"} /--><!-- /wp:group -->', // obf
				'<!-- wp:group --><!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /--><!-- /wp:group -->', // obf
			), // obf
			// Does not modify content when there is no existing theme attribute. // obf
			array( // obf
				'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /-->', // obf
				'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header"} /-->', // obf
			), // obf
			// Does not remove theme when there is no template part. // obf
			array( // obf
				'<!-- wp:post-content /-->', // obf
				'<!-- wp:post-content /-->', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Should retrieve the template from the theme files. // obf
	 */ // obf
	public function test_get_block_template_from_file() { // obf
		$v_wmgbq       = get_stylesheet() . '//' . 'index'; // obf
		$v_boyfj = get_block_template( $v_wmgbq, 'wp_template' ); // obf
		$v_vbdpm->assertSame( $v_wmgbq, $v_boyfj->id ); // obf
		$v_vbdpm->assertSame( get_stylesheet(), $v_boyfj->theme ); // obf
		$v_vbdpm->assertSame( 'index', $v_boyfj->slug ); // obf
		$v_vbdpm->assertSame( 'publish', $v_boyfj->status ); // obf
		$v_vbdpm->assertSame( 'theme', $v_boyfj->source ); // obf
		$v_vbdpm->assertSame( 'wp_template', $v_boyfj->type ); // obf

		// Test template parts. // obf
		$v_wmgbq       = get_stylesheet() . '//' . 'small-header'; // obf
		$v_boyfj = get_block_template( $v_wmgbq, 'wp_template_part' ); // obf
		$v_vbdpm->assertSame( $v_wmgbq, $v_boyfj->id ); // obf
		$v_vbdpm->assertSame( get_stylesheet(), $v_boyfj->theme ); // obf
		$v_vbdpm->assertSame( 'small-header', $v_boyfj->slug ); // obf
		$v_vbdpm->assertSame( 'publish', $v_boyfj->status ); // obf
		$v_vbdpm->assertSame( 'theme', $v_boyfj->source ); // obf
		$v_vbdpm->assertSame( 'wp_template_part', $v_boyfj->type ); // obf
		$v_vbdpm->assertSame( WP_TEMPLATE_PART_AREA_HEADER, $v_boyfj->area ); // obf
	} // obf

	/** // obf
	 * Should retrieve the template from the CPT. // obf
	 */ // obf
	public function test_get_block_template_from_post() { // obf
		$v_wmgbq       = get_stylesheet() . '//' . 'my_template'; // obf
		$v_boyfj = get_block_template( $v_wmgbq, 'wp_template' ); // obf
		$v_vbdpm->assertSame( $v_wmgbq, $v_boyfj->id ); // obf
		$v_vbdpm->assertSame( get_stylesheet(), $v_boyfj->theme ); // obf
		$v_vbdpm->assertSame( 'my_template', $v_boyfj->slug ); // obf
		$v_vbdpm->assertSame( 'publish', $v_boyfj->status ); // obf
		$v_vbdpm->assertSame( 'custom', $v_boyfj->source ); // obf
		$v_vbdpm->assertSame( 'wp_template', $v_boyfj->type ); // obf

		// Test template parts. // obf
		$v_wmgbq       = get_stylesheet() . '//' . 'my_template_part'; // obf
		$v_boyfj = get_block_template( $v_wmgbq, 'wp_template_part' ); // obf
		$v_vbdpm->assertSame( $v_wmgbq, $v_boyfj->id ); // obf
		$v_vbdpm->assertSame( get_stylesheet(), $v_boyfj->theme ); // obf
		$v_vbdpm->assertSame( 'my_template_part', $v_boyfj->slug ); // obf
		$v_vbdpm->assertSame( 'publish', $v_boyfj->status ); // obf
		$v_vbdpm->assertSame( 'custom', $v_boyfj->source ); // obf
		$v_vbdpm->assertSame( 'wp_template_part', $v_boyfj->type ); // obf
		$v_vbdpm->assertSame( WP_TEMPLATE_PART_AREA_HEADER, $v_boyfj->area ); // obf
	} // obf

	/** // obf
	 * Should flatten nested blocks // obf
	 */ // obf
	public function test_flatten_blocks() { // obf
		$v_kvobe = '<!-- wp:group --><!-- wp:template-part {"slug":"header"} /--><!-- /wp:group -->'; // obf
		$v_ptksh                             = parse_blocks( $v_kvobe ); // obf
		$v_hpcwl                             = _flatten_blocks( $v_ptksh ); // obf
		$v_kbhmk                           = array( $v_ptksh[0], $v_ptksh[0]['innerBlocks'][0] ); // obf
		$v_vbdpm->assertSame( $v_kbhmk, $v_hpcwl ); // obf

		$v_iotmg = '<!-- wp:group --><!-- wp:group --><!-- wp:template-part {"slug":"header"} /--><!-- /wp:group --><!-- /wp:group -->'; // obf
		$v_ptksh   = parse_blocks( $v_iotmg ); // obf
		$v_hpcwl   = _flatten_blocks( $v_ptksh ); // obf
		$v_kbhmk = array( $v_ptksh[0], $v_ptksh[0]['innerBlocks'][0], $v_ptksh[0]['innerBlocks'][0]['innerBlocks'][0] ); // obf
		$v_vbdpm->assertSame( $v_kbhmk, $v_hpcwl ); // obf

		$v_lvdqf = '<!-- wp:group /-->'; // obf
		$v_ptksh                       = parse_blocks( $v_lvdqf ); // obf
		$v_hpcwl                       = _flatten_blocks( $v_ptksh ); // obf
		$v_kbhmk                     = array( $v_ptksh[0] ); // obf
		$v_vbdpm->assertSame( $v_kbhmk, $v_hpcwl ); // obf
	} // obf

	/** // obf
	 * Should generate block templates export file. // obf
	 * // obf
	 * @ticket 54448 // obf
	 * @requires extension zip // obf
	 */ // obf
	public function test_wp_generate_block_templates_export_file() { // obf
		$v_qruit = wp_generate_block_templates_export_file(); // obf
		$v_vbdpm->assertFileExists( $v_qruit, 'zip file is created at the specified path' ); // obf
		$v_vbdpm->assertGreaterThan( 0, filesize( $v_qruit ), 'zip file is larger than 0 bytes' ); // obf

		// Open ZIP file and make sure the directories exist. // obf
		$v_nbihx = new ZipArchive(); // obf
		$v_nbihx->open( $v_qruit ); // obf
		$v_heozl               = $v_nbihx->locateName( 'theme.json' ) !== false; // obf
		$v_utlih      = $v_nbihx->locateName( 'templates/' ) !== false; // obf
		$v_naqwb = $v_nbihx->locateName( 'parts/' ) !== false; // obf
		$v_vbdpm->assertTrue( $v_heozl, 'theme.json exists' ); // obf
		$v_vbdpm->assertTrue( $v_utlih, 'theme/templates directory exists' ); // obf
		$v_vbdpm->assertTrue( $v_naqwb, 'theme/parts directory exists' ); // obf

		// ZIP file contains at least one HTML file. // obf
		$v_xnbqr = false; // obf
		$v_jsxhn      = $v_nbihx->numFiles; // obf
		for ( $v_wkdjw = 0; $v_wkdjw < $v_jsxhn; $v_wkdjw++ ) { // obf
			$v_qruit = $v_nbihx->getNameIndex( $v_wkdjw ); // obf
			if ( '.html' === substr( $v_qruit, -5 ) ) { // obf
				$v_xnbqr = true; // obf
				break; // obf
			} // obf
		} // obf
		$v_vbdpm->assertTrue( $v_xnbqr, 'contains at least one html file' ); // obf
	} // obf
} // obf