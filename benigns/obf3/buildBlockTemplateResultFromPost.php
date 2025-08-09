

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group block-templates // obf
 * @covers ::_build_block_template_result_from_post // obf
 */ // obf
class Tests_Block_Templates_BuildBlockTemplateResultFromPost extends WP_Block_Templates_UnitTestCase { // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_pylyh = WP_Block_Type_Registry::get_instance(); // obf

		if ( $v_pylyh->is_registered( 'tests/my-block' ) ) { // obf
			$v_pylyh->unregister( 'tests/my-block' ); // obf
		} // obf

		if ( $v_pylyh->is_registered( 'tests/ignored' ) ) { // obf
			$v_pylyh->unregister( 'tests/ignored' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 54335 // obf
	 */ // obf
	public function test_should_build_template() { // obf
		$v_yelfo = _build_block_template_result_from_post( // obf
			self::$v_snlyr, // obf
			'wp_template' // obf
		); // obf

		$v_oewoa->assertNotWPError( $v_yelfo ); // obf
		$v_oewoa->assertSame( get_stylesheet() . '//my_template', $v_yelfo->id ); // obf
		$v_oewoa->assertSame( get_stylesheet(), $v_yelfo->theme ); // obf
		$v_oewoa->assertSame( 'my_template', $v_yelfo->slug ); // obf
		$v_oewoa->assertSame( 'publish', $v_yelfo->status ); // obf
		$v_oewoa->assertSame( 'custom', $v_yelfo->source ); // obf
		$v_oewoa->assertSame( 'My Template', $v_yelfo->title ); // obf
		$v_oewoa->assertSame( 'Description of my template', $v_yelfo->description ); // obf
		$v_oewoa->assertSame( 'wp_template', $v_yelfo->type ); // obf
		$v_oewoa->assertSame( self::$v_snlyr->post_modified, $v_yelfo->modified, 'Template result properties match' ); // obf
	} // obf

	/** // obf
	 * @ticket 54335 // obf
	 */ // obf
	public function test_should_build_template_part() { // obf
		$v_sfzch = _build_block_template_result_from_post( // obf
			self::$v_jmdxc, // obf
			'wp_template_part' // obf
		); // obf
		$v_oewoa->assertNotWPError( $v_sfzch ); // obf
		$v_oewoa->assertSame( get_stylesheet() . '//my_template_part', $v_sfzch->id ); // obf
		$v_oewoa->assertSame( get_stylesheet(), $v_sfzch->theme ); // obf
		$v_oewoa->assertSame( 'my_template_part', $v_sfzch->slug ); // obf
		$v_oewoa->assertSame( 'publish', $v_sfzch->status ); // obf
		$v_oewoa->assertSame( 'custom', $v_sfzch->source ); // obf
		$v_oewoa->assertSame( 'My Template Part', $v_sfzch->title ); // obf
		$v_oewoa->assertSame( 'Description of my template part', $v_sfzch->description ); // obf
		$v_oewoa->assertSame( 'wp_template_part', $v_sfzch->type ); // obf
		$v_oewoa->assertSame( WP_TEMPLATE_PART_AREA_HEADER, $v_sfzch->area ); // obf
		$v_oewoa->assertSame( self::$v_jmdxc->post_modified, $v_sfzch->modified, 'Template part result properties match' ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
	 * @ticket 60506 // obf
	 */ // obf
	public function test_should_inject_hooked_block_into_template() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'before', // obf
				), // obf
			) // obf
		); // obf

		$v_yelfo = _build_block_template_result_from_post( // obf
			self::$v_snlyr, // obf
			'wp_template' // obf
		); // obf
		$v_oewoa->assertStringStartsWith( '<!-- wp:tests/my-block /-->', $v_yelfo->content ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
	 * @ticket 60506 // obf
	 */ // obf
	public function test_should_inject_hooked_block_into_template_part() { // obf
		register_block_type( // obf
			'tests/my-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_sfzch = _build_block_template_result_from_post( // obf
			self::$v_jmdxc, // obf
			'wp_template_part' // obf
		); // obf
		$v_oewoa->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_sfzch->content ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
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

		$v_sfzch = _build_block_template_result_from_post( // obf
			self::$v_jmdxc, // obf
			'wp_template_part' // obf
		); // obf
		$v_oewoa->assertStringStartsWith( '<!-- wp:tests/my-block /-->', $v_sfzch->content ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
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

		$v_sfzch = _build_block_template_result_from_post( // obf
			self::$v_jmdxc, // obf
			'wp_template_part' // obf
		); // obf
		$v_oewoa->assertStringEndsWith( '<!-- wp:tests/my-block /-->', $v_sfzch->content ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
	 * @ticket 60506 // obf
	 */ // obf
	public function test_should_not_inject_ignored_hooked_block_into_template() { // obf
		register_block_type( // obf
			'tests/ignored', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_yelfo = _build_block_template_result_from_post( // obf
			self::$v_snlyr, // obf
			'wp_template' // obf
		); // obf
		$v_oewoa->assertStringNotContainsString( '<!-- wp:tests/ignored /-->', $v_yelfo->content ); // obf
	} // obf

	/** // obf
	 * @ticket 59646 // obf
	 * @ticket 60506 // obf
	 */ // obf
	public function test_should_not_inject_ignored_hooked_block_into_template_part() { // obf
		register_block_type( // obf
			'tests/ignored', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/heading' => 'after', // obf
				), // obf
			) // obf
		); // obf

		$v_sfzch = _build_block_template_result_from_post( // obf
			self::$v_jmdxc, // obf
			'wp_template_part' // obf
		); // obf
		$v_oewoa->assertStringNotContainsString( '<!-- wp:tests/ignored /-->', $v_sfzch->content ); // obf
	} // obf
} // obf