

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group block-templates // obf
 * @covers ::_build_block_template_result_from_file // obf
 */ // obf
class Tests_Block_Templates_BuildBlockTemplateResultFromFile extends WP_Block_Templates_UnitTestCase { // obf
	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_xnmyh = WP_Block_Type_Registry::get_instance(); // obf

		if ( $v_xnmyh->is_registered( 'tests/my-block' ) ) { // obf
			$v_xnmyh->unregister( 'tests/my-block' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 54335 // obf
	 */ // obf
	public function test_should_build_template() { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug' => 'single', // obf
				'path' => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template' // obf
		); // obf

		$v_qcxid->assertSame( get_stylesheet() . '//single', $v_lsmlm->id ); // obf
		$v_qcxid->assertSame( get_stylesheet(), $v_lsmlm->theme ); // obf
		$v_qcxid->assertSame( 'single', $v_lsmlm->slug ); // obf
		$v_qcxid->assertSame( 'publish', $v_lsmlm->status ); // obf
		$v_qcxid->assertSame( 'theme', $v_lsmlm->source ); // obf
		$v_qcxid->assertSame( 'Single Posts', $v_lsmlm->title ); // obf
		$v_qcxid->assertSame( 'Displays a single post on your website unless a custom template has been applied to that post or a dedicated template exists.', $v_lsmlm->description ); // obf
		$v_qcxid->assertSame( 'wp_template', $v_lsmlm->type ); // obf
		$v_qcxid->assertEmpty( $v_lsmlm->modified ); // obf
	} // obf

	/** // obf
	 * @ticket 59325 // obf
	 */ // obf
	public function test_should_build_template_using_custom_properties() { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'  => 'custom', // obf
				'title' => 'Custom Title', // obf
				'path'  => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template' // obf
		); // obf

		$v_qcxid->assertSame( 'custom', $v_lsmlm->slug ); // obf
		$v_qcxid->assertSame( 'Custom Title', $v_lsmlm->title ); // obf
		$v_qcxid->assertTrue( $v_lsmlm->is_custom ); // obf
	} // obf

	/** // obf
	 * @ticket 59325 // obf
	 */ // obf
	public function test_should_enforce_default_properties_when_building_template() { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'  => 'single', // obf
				'title' => 'Custom title', // obf
				'path'  => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template' // obf
		); // obf

		$v_qcxid->assertSame( 'single', $v_lsmlm->slug ); // obf
		$v_qcxid->assertSame( 'Single Posts', $v_lsmlm->title ); // obf
		$v_qcxid->assertSame( 'Displays a single post on your website unless a custom template has been applied to that post or a dedicated template exists.', $v_lsmlm->description ); // obf
		$v_qcxid->assertFalse( $v_lsmlm->is_custom ); // obf
	} // obf

	/** // obf
	 * @ticket 59325 // obf
	 */ // obf
	public function test_should_respect_post_types_property_when_building_template() { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'      => 'single', // obf
				'postTypes' => array( 'post' ), // obf
				'path'      => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template' // obf
		); // obf

		$v_qcxid->assertSameSets( array( 'post' ), $v_lsmlm->post_types ); // obf
	} // obf

	/** // obf
	 * @ticket 59325 // obf
	 * // obf
	 * @dataProvider data_build_template_injects_theme_attribute // obf
	 * // obf
	 * @param string $v_tynqw The template's filename. // obf
	 * @param string $v_vxrjr The expected block markup. // obf
	 */ // obf
	public function test_should_build_template_and_inject_theme_attribute( $v_tynqw, $v_vxrjr ) { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug' => 'single', // obf
				'path' => DIR_TESTDATA . "/templates/$v_tynqw", // obf
			), // obf
			'wp_template' // obf
		); // obf
		$v_qcxid->assertSame( $v_vxrjr, $v_lsmlm->content ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_build_template_injects_theme_attribute() { // obf
		return array( // obf
			'a template with a template part block'  => array( // obf
				'filename' => 'template-with-template-part.html', // obf
				'expected' => sprintf( // obf
					'<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /-->', // obf
					self::TEST_THEME // obf
				), // obf
			), // obf
			'a template with a template part block nested inside another block' => array( // obf
				'filename' => 'template-with-nested-template-part.html', // obf
				'expected' => sprintf( // obf
					'<!-- wp:group --> // obf
<!-- wp:template-part {"slug":"header","align":"full","tagName":"header","className":"site-header","theme":"%s"} /--> // obf
<!-- /wp:group -->', // obf
					self::TEST_THEME // obf
				), // obf
			), // obf
			'a template with a template part block with an existing theme attribute' => array( // obf
				'filename' => 'template-with-template-part-with-existing-theme-attribute.html', // obf
				'expected' => '<!-- wp:template-part {"slug":"header","theme":"fake-theme","align":"full","tagName":"header","className":"site-header"} /-->', // obf
			), // obf
			'a template with no template part block' => array( // obf
				'filename' => 'template.html', // obf
				'expected' => '<!-- wp:paragraph --> // obf
<p>Just a paragraph</p> // obf
<!-- /wp:paragraph -->', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 54335 // obf
	 */ // obf
	public function test_should_build_template_part() { // obf
		$v_fjeey = _build_block_template_result_from_file( // obf
			array( // obf
				'slug' => 'header', // obf
				'path' => DIR_TESTDATA . '/templates/template.html', // obf
				'area' => WP_TEMPLATE_PART_AREA_HEADER, // obf
			), // obf
			'wp_template_part' // obf
		); // obf
		$v_qcxid->assertSame( get_stylesheet() . '//header', $v_fjeey->id ); // obf
		$v_qcxid->assertSame( get_stylesheet(), $v_fjeey->theme ); // obf
		$v_qcxid->assertSame( 'header', $v_fjeey->slug ); // obf
		$v_qcxid->assertSame( 'publish', $v_fjeey->status ); // obf
		$v_qcxid->assertSame( 'theme', $v_fjeey->source ); // obf
		$v_qcxid->assertSame( 'header', $v_fjeey->title ); // obf
		$v_qcxid->assertSame( '', $v_fjeey->description ); // obf
		$v_qcxid->assertSame( 'wp_template_part', $v_fjeey->type ); // obf
		$v_qcxid->assertSame( WP_TEMPLATE_PART_AREA_HEADER, $v_fjeey->area ); // obf
		$v_qcxid->assertEmpty( $v_fjeey->modified ); // obf
	} // obf

	/** // obf
	 * @ticket 59325 // obf
	 */ // obf
	public function test_should_ignore_post_types_property_when_building_template_part() { // obf
		$v_lsmlm = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'      => 'header', // obf
				'postTypes' => array( 'post' ), // obf
				'path'      => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template_part' // obf
		); // obf

		$v_qcxid->assertEmpty( $v_lsmlm->post_types ); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 */ // obf
	public function test_should_inject_hooked_block_into_template_part() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/paragraph' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_fjeey = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'      => 'header', // obf
				'postTypes' => array( 'post' ), // obf
				'path'      => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template_part' // obf
		); // obf
		$v_qcxid->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_fjeey->content ); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_should_injected_hooked_block_into_template_part_first_child() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/template-part' => 'first_child', // obf
				), // obf
			) // obf
		); // obf

		$v_fjeey = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'      => 'header', // obf
				'postTypes' => array( 'post' ), // obf
				'path'      => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template_part' // obf
		); // obf
		$v_qcxid->assertStringStartsWith( '<!-- wp:tests/my-block /-->', $v_fjeey->content ); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_should_injected_hooked_block_into_template_part_last_child() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/template-part' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_fjeey = _build_block_template_result_from_file( // obf
			array( // obf
				'slug'      => 'header', // obf
				'postTypes' => array( 'post' ), // obf
				'path'      => DIR_TESTDATA . '/templates/template.html', // obf
			), // obf
			'wp_template_part' // obf
		); // obf
		$v_qcxid->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_fjeey->content ); // obf
	} // obf
} // obf