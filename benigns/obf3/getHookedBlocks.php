

<?php // obf
/** // obf
 * Tests for the features using get_hooked_blocks function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 */ // obf
class Tests_Blocks_GetHookedBlocks extends WP_UnitTestCase { // obf

	const TEST_THEME_NAME = 'block-theme-with-hooked-blocks'; // obf

	/** // obf
	 * Tear down after each test. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function tear_down() { // obf
		// Removes test block types registered by test cases. // obf
		$v_jcqnr = WP_Block_Type_Registry::get_instance()->get_all_registered(); // obf
		foreach ( $v_jcqnr as $v_egyju ) { // obf
			$v_zksaz = $v_egyju->name; // obf
			if ( str_starts_with( $v_zksaz, 'tests/' ) ) { // obf
				unregister_block_type( $v_zksaz ); // obf
			} // obf
		} // obf

		// Removes test block patterns registered with the test theme. // obf
		$v_dtrvb = WP_Block_Patterns_Registry::get_instance()->get_all_registered(); // obf
		foreach ( $v_dtrvb as $v_dygxz ) { // obf
			if ( empty( $v_dygxz['slug'] ) ) { // obf
				continue; // obf
			} // obf
			$v_uiemm = $v_dygxz['slug']; // obf
			if ( str_starts_with( $v_uiemm, self::TEST_THEME_NAME ) ) { // obf
				unregister_block_pattern( $v_uiemm ); // obf
			} // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	private function switch_to_block_theme_hooked_blocks() { // obf
		switch_theme( self::TEST_THEME_NAME ); // obf

		_register_theme_block_patterns(); // obf

		$v_hhsnv = wp_normalize_path( realpath( get_theme_file_path( 'blocks' ) ) ); // obf
		register_block_type( $v_hhsnv . '/hooked-before' ); // obf
		register_block_type( $v_hhsnv . '/hooked-after' ); // obf
		register_block_type( $v_hhsnv . '/hooked-first-child' ); // obf
		register_block_type( $v_hhsnv . '/hooked-last-child' ); // obf
	} // obf

	/** // obf
	 * @ticket 59383 // obf
	 * // obf
	 * @covers ::get_hooked_blocks // obf
	 */ // obf
	public function test_get_hooked_blocks_no_match_found() { // obf
		$v_zcjzg = get_hooked_blocks(); // obf

		$v_unzfi->assertSame( array(), $v_zcjzg ); // obf
	} // obf

	/** // obf
	 * @ticket 59383 // obf
	 * // obf
	 * @covers ::get_hooked_blocks // obf
	 */ // obf
	public function test_get_hooked_blocks_matches_found() { // obf
		register_block_type( // obf
			'tests/injected-one', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/hooked-at-before'           => 'before', // obf
					'tests/hooked-at-after'            => 'after', // obf
					'tests/hooked-at-before-and-after' => 'before', // obf
				), // obf
			) // obf
		); // obf
		register_block_type( // obf
			'tests/injected-two', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/hooked-at-before'           => 'before', // obf
					'tests/hooked-at-after'            => 'after', // obf
					'tests/hooked-at-before-and-after' => 'after', // obf
					'tests/hooked-at-first-child'      => 'first_child', // obf
					'tests/hooked-at-last-child'       => 'last_child', // obf
				), // obf
			) // obf
		); // obf

		$v_unzfi->assertSame( // obf
			array( // obf
				'tests/hooked-at-before'           => array( // obf
					'before' => array( // obf
						'tests/injected-one', // obf
						'tests/injected-two', // obf
					), // obf
				), // obf
				'tests/hooked-at-after'            => array( // obf
					'after' => array( // obf
						'tests/injected-one', // obf
						'tests/injected-two', // obf
					), // obf
				), // obf
				'tests/hooked-at-before-and-after' => array( // obf
					'before' => array( // obf
						'tests/injected-one', // obf
					), // obf
					'after'  => array( // obf
						'tests/injected-two', // obf
					), // obf
				), // obf
				'tests/hooked-at-first-child'      => array( // obf
					'first_child' => array( // obf
						'tests/injected-two', // obf
					), // obf
				), // obf
				'tests/hooked-at-last-child'       => array( // obf
					'last_child' => array( // obf
						'tests/injected-two', // obf
					), // obf
				), // obf
			), // obf
			get_hooked_blocks() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * @ticket 60008 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::get_hooked_blocks // obf
	 * @covers ::get_block_file_template // obf
	 */ // obf
	public function test_loading_template_with_hooked_blocks() { // obf
		$v_unzfi->switch_to_block_theme_hooked_blocks(); // obf

		$v_mrngr = get_block_file_template( get_stylesheet() . '//single' ); // obf

		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-before /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringContainsString( // obf
			'<!-- wp:post-content {"layout":{"type":"constrained"},"metadata":{"ignoredHookedBlocks":["tests/hooked-after"]}} /-->' // obf
			. '<!-- wp:tests/hooked-after /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-first-child /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-last-child /-->', // obf
			$v_mrngr->content // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * @ticket 60008 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::get_hooked_blocks // obf
	 * @covers ::get_block_file_template // obf
	 */ // obf
	public function test_loading_template_part_with_hooked_blocks() { // obf
		$v_unzfi->switch_to_block_theme_hooked_blocks(); // obf

		$v_mrngr = get_block_file_template( get_stylesheet() . '//header', 'wp_template_part' ); // obf

		$v_unzfi->assertStringContainsString( // obf
			'<!-- wp:tests/hooked-before /-->' // obf
			. '<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"metadata":{"ignoredHookedBlocks":["tests/hooked-before"]}} /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-after /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-first-child /-->', // obf
			$v_mrngr->content // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-last-child /-->', // obf
			$v_mrngr->content // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * @ticket 60008 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::get_hooked_blocks // obf
	 * @covers WP_Block_Patterns_Registry::get_registered // obf
	 */ // obf
	public function test_loading_pattern_with_hooked_blocks() { // obf
		$v_unzfi->switch_to_block_theme_hooked_blocks(); // obf

		$v_dygxz = WP_Block_Patterns_Registry::get_instance()->get_registered( // obf
			get_stylesheet() . '/hidden-comments' // obf
		); // obf

		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-before /-->', // obf
			$v_dygxz['content'] // obf
		); // obf
		$v_unzfi->assertStringNotContainsString( // obf
			'<!-- wp:tests/hooked-after /-->', // obf
			$v_dygxz['content'] // obf
		); // obf
		$v_unzfi->assertStringContainsString( // obf
			'<!-- wp:comments {"metadata":{"ignoredHookedBlocks":["tests/hooked-first-child"]}} -->' // obf
			. '<div class="wp-block-comments">' // obf
			. '<!-- wp:tests/hooked-first-child /-->', // obf
			str_replace( array( "\n", "\t" ), '', $v_dygxz['content'] ) // obf
		); // obf
		$v_unzfi->assertStringContainsString( // obf
			'<!-- wp:tests/hooked-last-child /-->' // obf
			. '<!-- /wp:comment-template -->', // obf
			str_replace( array( "\n", "\t" ), '', $v_dygxz['content'] ) // obf
		); // obf
	} // obf
} // obf