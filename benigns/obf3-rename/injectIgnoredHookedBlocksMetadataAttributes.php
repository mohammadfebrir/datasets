

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group block-templates // obf
 * @covers ::inject_ignored_hooked_blocks_metadata_attributes // obf
 */ // obf
class Tests_Block_Templates_InjectIgnoredHookedBlocksMetadataAttributes extends WP_Block_Templates_UnitTestCase { // obf

	/** // obf
	 * Tear down after each test. // obf
	 * // obf
	 * @since 6.5.3 // obf
	 */ // obf
	public function tear_down() { // obf
		if ( WP_Block_Type_Registry::get_instance()->is_registered( 'tests/hooked-block' ) ) { // obf
			unregister_block_type( 'tests/hooked-block' ); // obf
		} // obf
		delete_post_meta( self::$v_tceyp->ID, '_wp_ignored_hooked_blocks' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_newly_created_template() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_type    = 'wp_template'; // obf
		$v_qcgwx->post_status  = 'publish'; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf
		$v_qcgwx->tax_input    = array( // obf
			'wp_theme' => get_stylesheet(), // obf
		); // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_type, // obf
			$v_cvwsc->type, // obf
			'The type field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_status, // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertFalse( // obf
			$v_cvwsc->has_theme_file, // obf
			'The has_theme_file field of the context passed to the hooked_block_types filter isn\'t set to false.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_newly_created_template_part() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_type    = 'wp_template_part'; // obf
		$v_qcgwx->post_status  = 'publish'; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf
		$v_qcgwx->tax_input    = array( // obf
			'wp_theme'              => get_stylesheet(), // obf
			'wp_template_part_area' => WP_TEMPLATE_PART_AREA_HEADER, // obf
		); // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
				'first_child', // obf
				'before', // obf
				'after', // obf
				'last_child', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
				'core/template-part', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertInstanceOf( // obf
			'WP_Block_Template', // obf
			$v_cvwsc, // obf
			'The context passed to the hooked_block_types filter is not an instance of WP_Block_Template.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_type, // obf
			$v_cvwsc->type, // obf
			'The type field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_status, // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertFalse( // obf
			$v_cvwsc->has_theme_file, // obf
			'The has_theme_file field of the context passed to the hooked_block_types filter isn\'t set to false.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->tax_input['wp_template_part_area'], // obf
			$v_cvwsc->area, // obf
			'The area field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_existing_template_file() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_name    = 'index'; // obf
		$v_qcgwx->post_type    = 'wp_template'; // obf
		$v_qcgwx->post_status  = 'publish'; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf
		$v_qcgwx->meta_input   = array( // obf
			'origin' => 'theme', // obf
		); // obf
		$v_qcgwx->tax_input    = array( // obf
			'wp_theme' => get_stylesheet(), // obf
		); // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_name, // obf
			$v_cvwsc->slug, // obf
			'The slug field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_type, // obf
			$v_cvwsc->type, // obf
			'The type field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_status, // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertTrue( // obf
			$v_cvwsc->has_theme_file, // obf
			'The has_theme_file field of the context passed to the hooked_block_types filter isn\'t set to true.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->meta_input['origin'], // obf
			$v_cvwsc->origin, // obf
			'The origin field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_existing_template_part_file() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_name    = 'small-header'; // obf
		$v_qcgwx->post_type    = 'wp_template_part'; // obf
		$v_qcgwx->post_status  = 'publish'; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf
		$v_qcgwx->meta_input   = array( // obf
			'origin' => 'theme', // obf
		); // obf
		$v_qcgwx->tax_input    = array( // obf
			'wp_theme'              => get_stylesheet(), // obf
			'wp_template_part_area' => WP_TEMPLATE_PART_AREA_HEADER, // obf
		); // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
				'first_child', // obf
				'before', // obf
				'after', // obf
				'last_child', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
				'core/template-part', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertInstanceOf( // obf
			'WP_Block_Template', // obf
			$v_cvwsc, // obf
			'The context passed to the hooked_block_types filter is not an instance of WP_Block_Template.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_name, // obf
			$v_cvwsc->slug, // obf
			'The slug field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_type, // obf
			$v_cvwsc->type, // obf
			'The type field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_status, // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertTrue( // obf
			$v_cvwsc->has_theme_file, // obf
			'The has_theme_file field of the context passed to the hooked_block_types filter isn\'t set to true.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->meta_input['origin'], // obf
			$v_cvwsc->origin, // obf
			'The origin field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->tax_input['wp_template_part_area'], // obf
			$v_cvwsc->area, // obf
			'The area field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_existing_template_post() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_name    = 'my-updated-template'; // obf
		$v_qcgwx->ID           = self::$v_bptac->ID; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_name, // obf
			$v_cvwsc->slug, // obf
			'The slug field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->ID, // obf
			$v_cvwsc->wp_id, // obf
			'The wp_id field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			'publish', // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter isn\'t set to publish.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			self::$v_bptac->post_title, // obf
			$v_cvwsc->title, // obf
			'The title field of the context passed to the hooked_block_types filter doesn\'t match the template post object.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			self::$v_bptac->post_excerpt, // obf
			$v_cvwsc->description, // obf
			'The description field of the context passed to the hooked_block_types filter doesn\'t match the template post object.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60754 // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_hooked_block_types_filter_with_existing_template_part_post() { // obf
		$v_thtpy = new MockAction(); // obf
		add_filter( 'hooked_block_types', array( $v_thtpy, 'filter' ), 10, 4 ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->post_name    = 'my-updated-template-part'; // obf
		$v_qcgwx->ID           = self::$v_tceyp->ID; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf

		$v_qcgwx->tax_input = array( // obf
			'wp_template_part_area' => WP_TEMPLATE_PART_AREA_FOOTER, // obf
		); // obf

		inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf

		$v_pdyju               = $v_thtpy->get_args(); // obf
		$v_xfdsr = array_column( $v_pdyju, 1 ); // obf
		$v_qmukc = array_column( $v_pdyju, 2 ); // obf
		$v_arpbm           = array_column( $v_pdyju, 3 ); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'before', // obf
				'after', // obf
				'first_child', // obf
				'before', // obf
				'after', // obf
				'last_child', // obf
			), // obf
			$v_xfdsr, // obf
			'The relative positions passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			array( // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'core/template-part', // obf
				'tests/anchor-block', // obf
				'tests/anchor-block', // obf
				'core/template-part', // obf
			), // obf
			$v_qmukc, // obf
			'The anchor block types passed to the hooked_block_types filter are incorrect.' // obf
		); // obf

		$v_cvwsc = $v_arpbm[0]; // obf
		$v_lognz->assertSame( // obf
			array_fill( 0, count( $v_arpbm ), $v_cvwsc ), // obf
			$v_arpbm, // obf
			'The context passed to the hooked_block_types filter should be the same for all calls.' // obf
		); // obf
		$v_lognz->assertInstanceOf( // obf
			'WP_Block_Template', // obf
			$v_cvwsc, // obf
			'The context passed to the hooked_block_types filter is not an instance of WP_Block_Template.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_name, // obf
			$v_cvwsc->slug, // obf
			'The slug field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->ID, // obf
			$v_cvwsc->wp_id, // obf
			'The wp_id field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			'publish', // obf
			$v_cvwsc->status, // obf
			'The status field of the context passed to the hooked_block_types filter isn\'t set to publish.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_cvwsc->content, // obf
			'The content field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->tax_input['wp_template_part_area'], // obf
			$v_cvwsc->area, // obf
			'The area field of the context passed to the hooked_block_types filter doesn\'t match the template changes.' // obf
		); // obf

		$v_lognz->assertSame( // obf
			self::$v_tceyp->post_title, // obf
			$v_cvwsc->title, // obf
			'The title field of the context passed to the hooked_block_types filter doesn\'t match the template post object.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			self::$v_tceyp->post_excerpt, // obf
			$v_cvwsc->description, // obf
			'The description field of the context passed to the hooked_block_types filter doesn\'t match the template post object.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60671 // obf
	 */ // obf
	public function test_inject_ignored_hooked_blocks_metadata_attributes_into_template() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/anchor-block' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_eogml       = self::TEST_THEME . '//' . 'my_template'; // obf
		$v_pkyhq = get_block_template( $v_eogml, 'wp_template' ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->ID           = $v_pkyhq->wp_id; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf

		$v_jhlbk = inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf
		$v_lognz->assertSame( // obf
			'<!-- wp:tests/anchor-block {"metadata":{"ignoredHookedBlocks":["tests/hooked-block"]}} -->Hello<!-- /wp:tests/anchor-block -->', // obf
			$v_jhlbk->post_content, // obf
			'The hooked block was not injected into the anchor block\'s ignoredHookedBlocks metadata.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60671 // obf
	 */ // obf
	public function test_inject_ignored_hooked_blocks_metadata_attributes_into_template_part() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/anchor-block' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_eogml       = self::TEST_THEME . '//' . 'my_template_part'; // obf
		$v_pkyhq = get_block_template( $v_eogml, 'wp_template_part' ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->ID           = $v_pkyhq->wp_id; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf

		$v_jhlbk = inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf
		$v_lognz->assertSame( // obf
			'<!-- wp:tests/anchor-block {"metadata":{"ignoredHookedBlocks":["tests/hooked-block"]}} -->Hello<!-- /wp:tests/anchor-block -->', // obf
			$v_jhlbk->post_content, // obf
			'The hooked block was not injected into the anchor block\'s ignoredHookedBlocks metadata.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60854 // obf
	 */ // obf
	public function test_inject_ignored_hooked_blocks_metadata_attributes_into_template_part_postmeta() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/template-part' => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_eogml       = self::TEST_THEME . '//' . 'my_template_part'; // obf
		$v_pkyhq = get_block_template( $v_eogml, 'wp_template_part' ); // obf

		$v_qcgwx               = new stdClass(); // obf
		$v_qcgwx->ID           = $v_pkyhq->wp_id; // obf
		$v_qcgwx->post_content = '<!-- wp:tests/anchor-block -->Hello<!-- /wp:tests/anchor-block -->'; // obf

		$v_jhlbk = inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf
		$v_lognz->assertSame( // obf
			array( 'tests/hooked-block' ), // obf
			json_decode( $v_jhlbk->meta_input['_wp_ignored_hooked_blocks'], true ), // obf
			'The hooked block was not injected into the wp_template_part\'s _wp_ignored_hooked_blocks postmeta.' // obf
		); // obf
		$v_lognz->assertSame( // obf
			$v_qcgwx->post_content, // obf
			$v_jhlbk->post_content, // obf
			'The template part\'s post content was modified.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61550 // obf
	 */ // obf
	public function test_inject_ignored_hooked_blocks_metadata_attributes_into_template_with_no_changes_to_post_content() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_eogml       = self::TEST_THEME . '//' . 'my_template'; // obf
		$v_pkyhq = get_block_template( $v_eogml, 'wp_template' ); // obf

		$v_qcgwx     = new stdClass(); // obf
		$v_qcgwx->ID = $v_pkyhq->wp_id; // obf

		// Note that we're not setting `$v_qcgwx->post_content`! // obf

		$v_jhlbk = inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf
		$v_lognz->assertFalse( // obf
			isset( $v_jhlbk->post_content ), // obf
			"post_content shouldn't have been set." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61550 // obf
	 */ // obf
	public function test_inject_ignored_hooked_blocks_metadata_attributes_into_template_part_with_no_changes_to_post_content() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_eogml       = self::TEST_THEME . '//' . 'my_template_part'; // obf
		$v_pkyhq = get_block_template( $v_eogml, 'wp_template_part' ); // obf

		$v_qcgwx     = new stdClass(); // obf
		$v_qcgwx->ID = $v_pkyhq->wp_id; // obf
		// Note that we're not setting `$v_qcgwx->post_content`! // obf

		$v_jhlbk = inject_ignored_hooked_blocks_metadata_attributes( $v_qcgwx ); // obf
		$v_lognz->assertFalse( // obf
			isset( $v_jhlbk->post_content ), // obf
			"post_content shouldn't have been set." // obf
		); // obf
	} // obf
} // obf