

<?php // obf
/** // obf
 * Tests for the insert_hooked_blocks function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group blocks // obf
 * @group block-hooks // obf
 */ // obf
class Tests_Blocks_InsertHookedBlocks extends WP_UnitTestCase { // obf
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
	 * @ticket 59572 // obf
	 * @ticket 60126 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_returns_correct_markup() { // obf
		$v_jdgdv = array( // obf
			'blockName' => self::ANCHOR_BLOCK_TYPE, // obf
		); // obf

		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'after', self::HOOKED_BLOCKS, array() ); // obf
		$v_panxh->assertSame( // obf
			'<!-- wp:' . self::HOOKED_BLOCK_TYPE . ' /-->', // obf
			$v_aflkx, // obf
			"Markup for hooked block wasn't generated correctly." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59572 // obf
	 * @ticket 60126 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_if_block_is_ignored() { // obf
		$v_jdgdv = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array( // obf
				'metadata' => array( // obf
					'ignoredHookedBlocks' => array( self::HOOKED_BLOCK_TYPE ), // obf
				), // obf
			), // obf
		); // obf

		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'after', self::HOOKED_BLOCKS, array() ); // obf
		$v_panxh->assertSame( // obf
			'', // obf
			$v_aflkx, // obf
			"No markup should've been generated for ignored hooked block." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59572 // obf
	 * @ticket 60126 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_if_other_block_is_ignored() { // obf
		$v_jdgdv = array( // obf
			'blockName' => 'tests/anchor-block', // obf
			'attrs'     => array( // obf
				'metadata' => array( // obf
					'ignoredHookedBlocks' => array( self::HOOKED_BLOCK_TYPE ), // obf
				), // obf
			), // obf
		); // obf

		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'before', self::HOOKED_BLOCKS, array() ); // obf
		$v_panxh->assertSame( // obf
			'<!-- wp:' . self::OTHER_HOOKED_BLOCK_TYPE . ' /-->', // obf
			$v_aflkx, // obf
			"Markup for newly hooked block should've been generated." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59572 // obf
	 * @ticket 60126 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_filter_can_set_attributes() { // obf
		$v_jdgdv = array( // obf
			'blockName'    => self::ANCHOR_BLOCK_TYPE, // obf
			'attrs'        => array( // obf
				'layout' => array( // obf
					'type' => 'constrained', // obf
				), // obf
			), // obf
			'innerContent' => array(), // obf
		); // obf

		$v_crzoy = function ( $v_ummkk, $v_zzaxz, $v_hrdid, $v_nflyn ) { // obf
			// Is the hooked block adjacent to the anchor block? // obf
			if ( 'before' !== $v_hrdid && 'after' !== $v_hrdid ) { // obf
				return $v_ummkk; // obf
			} // obf

			// Does the anchor block have a layout attribute? // obf
			if ( isset( $v_nflyn['attrs']['layout'] ) ) { // obf
				// Copy the anchor block's layout attribute to the hooked block. // obf
				$v_ummkk['attrs']['layout'] = $v_nflyn['attrs']['layout']; // obf
			} // obf

			return $v_ummkk; // obf
		}; // obf
		add_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy, 10, 4 ); // obf
		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'after', self::HOOKED_BLOCKS, array() ); // obf
		remove_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy ); // obf

		$v_panxh->assertSame( // obf
			'<!-- wp:' . self::HOOKED_BLOCK_TYPE . ' {"layout":{"type":"constrained"}} /-->', // obf
			$v_aflkx, // obf
			"Markup wasn't generated correctly for hooked block with attribute set by filter." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59572 // obf
	 * @ticket 60126 // obf
	 * @ticket 60506 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_filter_can_wrap_block() { // obf
		$v_jdgdv = array( // obf
			'blockName'    => self::ANCHOR_BLOCK_TYPE, // obf
			'attrs'        => array( // obf
				'layout' => array( // obf
					'type' => 'constrained', // obf
				), // obf
			), // obf
			'innerContent' => array(), // obf
		); // obf

		$v_crzoy = function ( $v_ummkk ) { // obf
			if ( self::HOOKED_BLOCK_TYPE !== $v_ummkk['blockName'] ) { // obf
				return $v_ummkk; // obf
			} // obf

			// Wrap the block in a Group block. // obf
			return array( // obf
				'blockName'    => 'core/group', // obf
				'attrs'        => array(), // obf
				'innerBlocks'  => array( $v_ummkk ), // obf
				'innerContent' => array( // obf
					'<div class="wp-block-group">', // obf
					null, // obf
					'</div>', // obf
				), // obf
			); // obf
		}; // obf
		add_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy, 10, 3 ); // obf
		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'after', self::HOOKED_BLOCKS, array() ); // obf
		remove_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy ); // obf

		$v_panxh->assertSame( // obf
			'<!-- wp:group --><div class="wp-block-group"><!-- wp:' . self::HOOKED_BLOCK_TYPE . ' /--></div><!-- /wp:group -->', // obf
			$v_aflkx, // obf
			"Markup wasn't generated correctly for hooked block wrapped in Group block by filter." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 60580 // obf
	 * // obf
	 * @covers ::insert_hooked_blocks // obf
	 */ // obf
	public function test_insert_hooked_blocks_filter_can_suppress_hooked_block() { // obf
		$v_jdgdv = array( // obf
			'blockName'    => self::ANCHOR_BLOCK_TYPE, // obf
			'attrs'        => array( // obf
				'layout' => array( // obf
					'type' => 'flex', // obf
				), // obf
			), // obf
			'innerContent' => array(), // obf
		); // obf

		$v_crzoy = function ( $v_ummkk, $v_zzaxz, $v_hrdid, $v_nflyn ) { // obf
			// Is the hooked block adjacent to the anchor block? // obf
			if ( 'before' !== $v_hrdid && 'after' !== $v_hrdid ) { // obf
				return $v_ummkk; // obf
			} // obf

			if ( // obf
				isset( $v_nflyn['attrs']['layout']['type'] ) && // obf
				'flex' === $v_nflyn['attrs']['layout']['type'] // obf
			) { // obf
				return null; // obf
			} // obf

			return $v_ummkk; // obf
		}; // obf
		add_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy, 10, 4 ); // obf
		$v_aflkx = insert_hooked_blocks( $v_jdgdv, 'after', self::HOOKED_BLOCKS, array() ); // obf
		remove_filter( 'hooked_block_' . self::HOOKED_BLOCK_TYPE, $v_crzoy ); // obf

		$v_panxh->assertSame( '', $v_aflkx, "No markup should've been generated for hooked block suppressed by filter." ); // obf
	} // obf
} // obf