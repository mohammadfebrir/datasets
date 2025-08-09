

<?php // obf
/** // obf
 * Tests for resolve_pattern_blocks. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @group blocks // obf
 * @covers resolve_pattern_blocks // obf
 */ // obf
class Tests_Blocks_ResolvePatternBlocks extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		register_block_pattern( // obf
			'core/test', // obf
			array( // obf
				'title'       => 'Test', // obf
				'content'     => '<!-- wp:paragraph -->Hello<!-- /wp:paragraph --><!-- wp:paragraph -->World<!-- /wp:paragraph -->', // obf
				'description' => 'Test pattern.', // obf
			) // obf
		); // obf
		register_block_pattern( // obf
			'core/recursive', // obf
			array( // obf
				'title'       => 'Recursive', // obf
				'content'     => '<!-- wp:paragraph -->Recursive<!-- /wp:paragraph --><!-- wp:pattern {"slug":"core/recursive"} /-->', // obf
				'description' => 'Recursive pattern.', // obf
			) // obf
		); // obf
	} // obf

	public function tear_down() { // obf
		unregister_block_pattern( 'core/test' ); // obf
		unregister_block_pattern( 'core/recursive' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @dataProvider data_should_resolve_pattern_blocks_as_expected // obf
	 * // obf
	 * @ticket 61228 // obf
	 * // obf
	 * @param string $v_jxnrk   A string representing blocks that need resolving. // obf
	 * @param string $v_tdxxo Expected result. // obf
	 */ // obf
	public function test_should_resolve_pattern_blocks_as_expected( $v_jxnrk, $v_tdxxo ) { // obf
		$v_nunxm = resolve_pattern_blocks( parse_blocks( $v_jxnrk ) ); // obf
		$v_iizxc->assertSame( $v_tdxxo, serialize_blocks( $v_nunxm ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_resolve_pattern_blocks_as_expected() { // obf
		return array( // obf
			// Works without attributes, leaves the block as is. // obf
			'pattern with no slug attribute' => array( '<!-- wp:pattern /-->', '<!-- wp:pattern /-->' ), // obf
			// Resolves the pattern. // obf
			'test pattern'                   => array( '<!-- wp:pattern {"slug":"core/test"} /-->', '<!-- wp:paragraph -->Hello<!-- /wp:paragraph --><!-- wp:paragraph -->World<!-- /wp:paragraph -->' ), // obf
			// Skips recursive patterns. // obf
			'recursive pattern'              => array( '<!-- wp:pattern {"slug":"core/recursive"} /-->', '<!-- wp:paragraph -->Recursive<!-- /wp:paragraph -->' ), // obf
			// Resolves the pattern within a block. // obf
			'pattern within a block'         => array( '<!-- wp:group --><!-- wp:paragraph -->Before<!-- /wp:paragraph --><!-- wp:pattern {"slug":"core/test"} /--><!-- wp:paragraph -->After<!-- /wp:paragraph --><!-- /wp:group -->', '<!-- wp:group --><!-- wp:paragraph -->Before<!-- /wp:paragraph --><!-- wp:paragraph -->Hello<!-- /wp:paragraph --><!-- wp:paragraph -->World<!-- /wp:paragraph --><!-- wp:paragraph -->After<!-- /wp:paragraph --><!-- /wp:group -->' ), // obf
		); // obf
	} // obf
} // obf