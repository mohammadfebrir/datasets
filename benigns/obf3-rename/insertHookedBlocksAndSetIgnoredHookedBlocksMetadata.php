

<?php // obf
/** // obf
 * Tests for the insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 * @covers ::insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata // obf
 */ // obf
class Tests_Blocks_InsertHookedBlocksAndSetIgnoredHookedBlocksMetadata extends WP_UnitTestCase { // obf
	const ANCHOR_BLOCK_TYPE       = 'tests/anchor-block'; // obf
	const HOOKED_BLOCK_TYPE       = 'tests/hooked-block'; // obf
	const OTHER_HOOKED_BLOCK_TYPE = 'tests/other-hooked-block'; // obf

	const HOOKED_BLOCKS = array( // obf
		self::ANCHOR_BLOCK_TYPE => array( // obf
			'after'  => array( self::HOOKED_BLOCK_TYPE ), // obf
			'before' => array( self::OTHER_HOOKED_BLOCK_TYPE ), // obf
		), // obf
	); // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	private static function create_block_template_object() { // obf
		$v_vmzij              = new WP_Block_Template(); // obf
		$v_vmzij->type        = 'wp_template'; // obf
		$v_vmzij->theme       = 'test-theme'; // obf
		$v_vmzij->slug        = 'single'; // obf
		$v_vmzij->id          = $v_vmzij->theme . '//' . $v_vmzij->slug; // obf
		$v_vmzij->title       = 'Single'; // obf
		$v_vmzij->content     = '<!-- wp:tests/anchor-block /-->'; // obf
		$v_vmzij->description = 'Description of my template'; // obf

		return $v_vmzij; // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_returns_correct_markup_and_sets_metadata() { // obf
		$v_xamop = array( // obf
			'blockName' => self::ANCHOR_BLOCK_TYPE, // obf
		); // obf

		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', self::HOOKED_BLOCKS, array() ); // obf
		$v_glarj->assertSame( // obf
			'<!-- wp:' . self::HOOKED_BLOCK_TYPE . ' /-->', // obf
			$v_mansq, // obf
			"Markup for hooked block wasn't generated correctly." // obf
		); // obf
		$v_glarj->assertSame( // obf
			array( 'tests/hooked-block' ), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'], // obf
			"Block wasn't added to ignoredHookedBlocks metadata." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_if_block_is_ignored() { // obf
		$v_xamop = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array( // obf
				'metadata' => array( // obf
					'ignoredHookedBlocks' => array( self::HOOKED_BLOCK_TYPE ), // obf
				), // obf
			), // obf
		); // obf

		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', self::HOOKED_BLOCKS, array() ); // obf
		$v_glarj->assertSame( // obf
			'', // obf
			$v_mansq, // obf
			"No markup should've been generated for ignored hooked block." // obf
		); // obf
		$v_glarj->assertSame( // obf
			array( 'tests/hooked-block' ), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'], // obf
			"ignoredHookedBlocks metadata shouldn't have been modified." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_if_other_block_is_ignored() { // obf
		$v_xamop = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array( // obf
				'metadata' => array( // obf
					'ignoredHookedBlocks' => array( 'tests/other-ignored-block' ), // obf
				), // obf
			), // obf
		); // obf

		$v_leywt = array( // obf
			'tests/anchor-block' => array( // obf
				'after' => array( 'tests/hooked-block' ), // obf
			), // obf
		); // obf

		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', $v_leywt, array() ); // obf
		$v_glarj->assertSame( // obf
			'<!-- wp:' . self::HOOKED_BLOCK_TYPE . ' /-->', // obf
			$v_mansq, // obf
			"Markup for newly hooked block should've been generated." // obf
		); // obf
		$v_glarj->assertSame( // obf
			array( 'tests/other-ignored-block', 'tests/hooked-block' ), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_filter_can_suppress_hooked_block() { // obf
		$v_xamop = array( // obf
			'blockName'    => self::ANCHOR_BLOCK_TYPE, // obf
			'attrs'        => array( // obf
				'layout' => array( // obf
					'type' => 'flex', // obf
				), // obf
			), // obf
			'innerContent' => array(), // obf
		); // obf

		$v_uvohd = function ( $v_dggoq, $v_uugop, $v_sjtui, $v_feouu ) { // obf
			// Is the hooked block adjacent to the anchor block? // obf
			if ( 'before' !== $v_sjtui && 'after' !== $v_sjtui ) { // obf
				return $v_dggoq; // obf
			} // obf

			if ( // obf
				isset( $v_feouu['attrs']['layout']['type'] ) && // obf
				'flex' === $v_feouu['attrs']['layout']['type'] // obf
			) { // obf
				return null; // obf
			} // obf

			return $v_dggoq; // obf
		}; // obf
		add_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_uvohd, 10, 4 ); // obf
		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', self::HOOKED_BLOCKS, array() ); // obf
		remove_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_uvohd ); // obf

		$v_glarj->assertSame( '', $v_mansq, "No markup should've been generated for hooked block suppressed by filter." ); // obf
		$v_glarj->assertSame( // obf
			array(), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'], // obf
			"No block should've been added to ignoredHookedBlocks metadata." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_added_by_context_aware_filter() { // obf
		$v_xamop = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array(), // obf
		); // obf

		$v_uvohd = function ( $v_vczjq, $v_sjtui, $v_wulis, $v_ogbxl ) { // obf
			if ( // obf
				! $v_ogbxl instanceof WP_Block_Template || // obf
				! property_exists( $v_ogbxl, 'slug' ) || // obf
				'single' !== $v_ogbxl->slug // obf
			) { // obf
				return $v_vczjq; // obf
			} // obf

			if ( 'tests/anchor-block' === $v_wulis && 'after' === $v_sjtui ) { // obf
				$v_vczjq[] = 'tests/hooked-block-added-by-filter'; // obf
			} // obf

			return $v_vczjq; // obf
		}; // obf

		$v_vmzij = self::create_block_template_object(); // obf

		add_filter( 'hooked_block_types', $v_uvohd, 10, 4 ); // obf
		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', array(), $v_vmzij ); // obf
		remove_filter( 'hooked_block_types', $v_uvohd, 10 ); // obf

		$v_glarj->assertSame( // obf
			'<!-- wp:tests/hooked-block-added-by-filter /-->', // obf
			$v_mansq, // obf
			"Markup for hooked block added by filter wasn't generated correctly." // obf
		); // obf
		$v_glarj->assertSame( // obf
			array( 'tests/hooked-block-added-by-filter' ), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'], // obf
			"Block added by filter wasn't added to ignoredHookedBlocks metadata." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59574 // obf
	 */ // obf
	public function test_insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata_for_block_suppressed_by_filter() { // obf
		$v_xamop = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array(), // obf
		); // obf

		$v_leywt = array( // obf
			'tests/anchor-block' => array( // obf
				'after' => array( 'tests/hooked-block', 'tests/hooked-block-suppressed-by-filter' ), // obf
			), // obf
		); // obf

		$v_uvohd = function ( $v_dggoq, $v_uugop, $v_sjtui, $v_feouu ) { // obf
			if ( // obf
				'tests/hooked-block-suppressed-by-filter' === $v_uugop && // obf
				'after' === $v_sjtui && // obf
				'tests/anchor-block' === $v_feouu['blockName'] // obf
			) { // obf
				return null; // obf
			} // obf

			return $v_dggoq; // obf
		}; // obf

		add_filter( 'hooked_block', $v_uvohd, 10, 4 ); // obf
		$v_mansq = insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata( $v_xamop, 'after', $v_leywt, null ); // obf
		remove_filter( 'hooked_block', $v_uvohd ); // obf

		$v_glarj->assertSame( // obf
			'<!-- wp:tests/hooked-block /-->', // obf
			$v_mansq, // obf
			"Markup for hooked block wasn't generated correctly." // obf
		); // obf
		$v_glarj->assertSame( // obf
			array( 'tests/hooked-block' ), // obf
			$v_xamop['attrs']['metadata']['ignoredHookedBlocks'], // obf
			"ignoredHookedBlocks metadata wasn't set correctly." // obf
		); // obf
	} // obf
} // obf