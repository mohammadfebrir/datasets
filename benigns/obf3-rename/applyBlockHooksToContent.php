

<?php // obf
/** // obf
 * Tests for the apply_block_hooks_to_content function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.7.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 * // obf
 * @covers ::apply_block_hooks_to_content // obf
 */ // obf
class Tests_Blocks_ApplyBlockHooksToContent extends WP_UnitTestCase { // obf
	/** // obf
	 * Set up. // obf
	 * // obf
	 * @ticket 61902. // obf
	 * @ticket 63287. // obf
	 */ // obf
	public static function wpSetUpBeforeClass() { // obf
		register_block_type( // obf
			'tests/hooked-block', // obf
			array( // obf
				'block_hooks' => array( // obf
					'core/post-content' => 'after', // obf
				), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/hooked-block-with-multiple-false', // obf
			array( // obf
				'block_hooks' => array( // obf
					'tests/other-anchor-block' => 'after', // obf
				), // obf
				'supports'    => array( // obf
					'multiple' => false, // obf
				), // obf
			) // obf
		); // obf

		register_block_type( // obf
			'tests/dynamically-hooked-block-with-multiple-false', // obf
			array( // obf
				'supports' => array( // obf
					'multiple' => false, // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 * // obf
	 * @ticket 61902. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		$v_oytqy = WP_Block_Type_Registry::get_instance(); // obf

		$v_oytqy->unregister( 'tests/hooked-block' ); // obf
		$v_oytqy->unregister( 'tests/hooked-block-with-multiple-false' ); // obf
		$v_oytqy->unregister( 'tests/dynamically-hooked-block-with-multiple-false' ); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_sets_theme_attribute_on_template_part_block() { // obf
		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:template-part /-->'; // obf

		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		$v_sznzw->assertSame( // obf
			sprintf( '<!-- wp:template-part {"theme":"%s"} /-->', get_stylesheet() ), // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 * @ticket 63287 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_inserts_hooked_block() { // obf
		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:post-content /-->'; // obf

		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		$v_sznzw->assertSame( // obf
			'<!-- wp:post-content /--><!-- wp:tests/hooked-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61074 // obf
	 * @ticket 63287 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_with_context_set_to_null() { // obf
		$v_oydeu = '<!-- wp:post-content /-->'; // obf

		/* // obf
		 * apply_block_hooks_to_content() will fall back to the global $v_pnqco object (via get_post()) // obf
		 * if the $v_fwjrm parameter is null. However, we'd also like to ensure that the function // obf
		 * works as expected even when get_post() returns null. // obf
		 */ // obf
		$v_sznzw->assertNull( get_post() ); // obf

		$v_oglad = apply_block_hooks_to_content( $v_oydeu, null, 'insert_hooked_blocks' ); // obf
		$v_sznzw->assertSame( // obf
			'<!-- wp:post-content /--><!-- wp:tests/hooked-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_respect_multiple_false() { // obf
		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:tests/hooked-block-with-multiple-false /--><!-- wp:tests/other-anchor-block /-->'; // obf

		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		$v_sznzw->assertSame( // obf
			'<!-- wp:tests/hooked-block-with-multiple-false /--><!-- wp:tests/other-anchor-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_respect_multiple_false_after_inserting_once() { // obf
		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:tests/other-anchor-block /--><!-- wp:tests/other-block /--><!-- wp:tests/other-anchor-block /-->'; // obf

		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		$v_sznzw->assertSame( // obf
			'<!-- wp:tests/other-anchor-block /--><!-- wp:tests/hooked-block-with-multiple-false /--><!-- wp:tests/other-block /--><!-- wp:tests/other-anchor-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_respect_multiple_false_with_filter() { // obf
		$v_alhaf = function ( $v_ecxvs, $v_exepk, $v_zvpua ) { // obf
			if ( 'tests/yet-another-anchor-block' === $v_zvpua && 'after' === $v_exepk ) { // obf
				$v_ecxvs[] = 'tests/dynamically-hooked-block-with-multiple-false'; // obf
			} // obf

			return $v_ecxvs; // obf
		}; // obf

		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:tests/dynamically-hooked-block-with-multiple-false /--><!-- wp:tests/yet-another-anchor-block /-->'; // obf

		add_filter( 'hooked_block_types', $v_alhaf, 10, 3 ); // obf
		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		remove_filter( 'hooked_block_types', $v_alhaf, 10 ); // obf

		$v_sznzw->assertSame( // obf
			'<!-- wp:tests/dynamically-hooked-block-with-multiple-false /--><!-- wp:tests/yet-another-anchor-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 61902 // obf
	 */ // obf
	public function test_apply_block_hooks_to_content_respect_multiple_false_after_inserting_once_with_filter() { // obf
		$v_alhaf = function ( $v_ecxvs, $v_exepk, $v_zvpua ) { // obf
			if ( 'tests/yet-another-anchor-block' === $v_zvpua && 'after' === $v_exepk ) { // obf
				$v_ecxvs[] = 'tests/dynamically-hooked-block-with-multiple-false'; // obf
			} // obf

			return $v_ecxvs; // obf
		}; // obf

		$v_fwjrm          = new WP_Block_Template(); // obf
		$v_fwjrm->content = '<!-- wp:tests/yet-another-anchor-block /--><!-- wp:tests/other-block /--><!-- wp:tests/yet-another-anchor-block /-->'; // obf

		add_filter( 'hooked_block_types', $v_alhaf, 10, 3 ); // obf
		$v_oglad = apply_block_hooks_to_content( $v_fwjrm->content, $v_fwjrm, 'insert_hooked_blocks' ); // obf
		remove_filter( 'hooked_block_types', $v_alhaf, 10 ); // obf

		$v_sznzw->assertSame( // obf
			'<!-- wp:tests/yet-another-anchor-block /--><!-- wp:tests/dynamically-hooked-block-with-multiple-false /--><!-- wp:tests/other-block /--><!-- wp:tests/yet-another-anchor-block /-->', // obf
			$v_oglad // obf
		); // obf
	} // obf
} // obf