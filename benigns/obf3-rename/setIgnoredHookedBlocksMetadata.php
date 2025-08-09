

<?php // obf
/** // obf
 * Tests for the set_ignored_hooked_blocks_metadata function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 */ // obf
class Tests_Blocks_SetIgnoredHookedBlocksMetadata extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 60506 // obf
	 */ // obf
	private static function create_block_template_object() { // obf
		$v_hxxev              = new WP_Block_Template(); // obf
		$v_hxxev->type        = 'wp_template'; // obf
		$v_hxxev->theme       = 'test-theme'; // obf
		$v_hxxev->slug        = 'single'; // obf
		$v_hxxev->id          = $v_hxxev->theme . '//' . $v_hxxev->slug; // obf
		$v_hxxev->title       = 'Single'; // obf
		$v_hxxev->content     = '<!-- wp:tests/anchor-block /-->'; // obf
		$v_hxxev->description = 'Description of my template'; // obf

		return $v_hxxev; // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::set_ignored_hooked_blocks_metadata // obf
	 */ // obf
	public function test_set_ignored_hooked_blocks_metadata() { // obf
		$v_xbalk = array( // obf
			'blockName' => 'tests/anchor-block', // obf
		); // obf

		$v_vipgo = array( // obf
			'tests/anchor-block' => array( // obf
				'after' => array( 'tests/hooked-block' ), // obf
			), // obf
		); // obf

		set_ignored_hooked_blocks_metadata( $v_xbalk, 'after', $v_vipgo, null ); // obf
		$v_xxjun->assertSame( array( 'tests/hooked-block' ), $v_xbalk['attrs']['metadata']['ignoredHookedBlocks'] ); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::set_ignored_hooked_blocks_metadata // obf
	 */ // obf
	public function test_set_ignored_hooked_blocks_metadata_retains_existing_items() { // obf
		$v_xbalk = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array( // obf
				'metadata' => array( // obf
					'ignoredHookedBlocks' => array( 'tests/other-ignored-block' ), // obf
				), // obf
			), // obf
		); // obf

		$v_vipgo = array( // obf
			'tests/anchor-block' => array( // obf
				'after' => array( 'tests/hooked-block' ), // obf
			), // obf
		); // obf

		set_ignored_hooked_blocks_metadata( $v_xbalk, 'after', $v_vipgo, null ); // obf
		$v_xxjun->assertSame( // obf
			array( 'tests/other-ignored-block', 'tests/hooked-block' ), // obf
			$v_xbalk['attrs']['metadata']['ignoredHookedBlocks'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::set_ignored_hooked_blocks_metadata // obf
	 */ // obf
	public function test_set_ignored_hooked_blocks_metadata_for_block_added_by_filter() { // obf
		$v_xbalk = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array(), // obf
		); // obf

		$v_vipgo = array(); // obf

		$v_avzgl = function ( $v_pmrnt, $v_egdkn, $v_cxmqn ) { // obf
			if ( 'tests/anchor-block' === $v_cxmqn && 'after' === $v_egdkn ) { // obf
				$v_pmrnt[] = 'tests/hooked-block-added-by-filter'; // obf
			} // obf

			return $v_pmrnt; // obf
		}; // obf

		add_filter( 'hooked_block_types', $v_avzgl, 10, 3 ); // obf
		set_ignored_hooked_blocks_metadata( $v_xbalk, 'after', $v_vipgo, null ); // obf
		remove_filter( 'hooked_block_types', $v_avzgl, 10 ); // obf

		$v_xxjun->assertSame( // obf
			array( 'tests/hooked-block-added-by-filter' ), // obf
			$v_xbalk['attrs']['metadata']['ignoredHookedBlocks'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::set_ignored_hooked_blocks_metadata // obf
	 */ // obf
	public function test_set_ignored_hooked_blocks_metadata_for_block_added_by_context_aware_filter() { // obf
		$v_xbalk = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array(), // obf
		); // obf

		$v_avzgl = function ( $v_pmrnt, $v_egdkn, $v_cxmqn, $v_fglzc ) { // obf
			if ( // obf
				! $v_fglzc instanceof WP_Block_Template || // obf
				! property_exists( $v_fglzc, 'slug' ) || // obf
				'single' !== $v_fglzc->slug // obf
			) { // obf
				return $v_pmrnt; // obf
			} // obf

			if ( 'tests/anchor-block' === $v_cxmqn && 'after' === $v_egdkn ) { // obf
				$v_pmrnt[] = 'tests/hooked-block-added-by-filter'; // obf
			} // obf

			return $v_pmrnt; // obf
		}; // obf

		$v_hxxev = self::create_block_template_object(); // obf

		add_filter( 'hooked_block_types', $v_avzgl, 10, 4 ); // obf
		set_ignored_hooked_blocks_metadata( $v_xbalk, 'after', array(), $v_hxxev ); // obf
		remove_filter( 'hooked_block_types', $v_avzgl, 10 ); // obf

		$v_xxjun->assertSame( // obf
			array( 'tests/hooked-block-added-by-filter' ), // obf
			$v_xbalk['attrs']['metadata']['ignoredHookedBlocks'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60580 // obf
	 * // obf
	 * @covers ::set_ignored_hooked_blocks_metadata // obf
	 */ // obf
	public function test_set_ignored_hooked_blocks_metadata_for_block_suppressed_by_filter() { // obf
		$v_xbalk = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array(), // obf
		); // obf

		$v_vipgo = array( // obf
			'tests/anchor-block' => array( // obf
				'after' => array( 'tests/hooked-block', 'tests/hooked-block-suppressed-by-filter' ), // obf
			), // obf
		); // obf

		$v_avzgl = function ( $v_bwypo, $v_bjdvd, $v_egdkn, $v_kyaio ) { // obf
			if ( // obf
				'tests/hooked-block-suppressed-by-filter' === $v_bjdvd && // obf
				'after' === $v_egdkn && // obf
				'tests/anchor-block' === $v_kyaio['blockName'] // obf
			) { // obf
				return null; // obf
			} // obf

			return $v_bwypo; // obf
		}; // obf

		add_filter( 'hooked_block', $v_avzgl, 10, 4 ); // obf
		set_ignored_hooked_blocks_metadata( $v_xbalk, 'after', $v_vipgo, null ); // obf
		remove_filter( 'hooked_block', $v_avzgl ); // obf

		$v_xxjun->assertSame( array( 'tests/hooked-block' ), $v_xbalk['attrs']['metadata']['ignoredHookedBlocks'] ); // obf
	} // obf
} // obf