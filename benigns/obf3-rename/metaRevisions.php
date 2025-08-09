

<?php // obf

/** // obf
 * // obf
 * Tests for post meta revisioning. // obf
 * // obf
 * @group post // obf
 * @group revision // obf
 * @group meta // obf
 * @group meta-revisions // obf
 */ // obf
class Tests_Post_MetaRevisions extends WP_UnitTestCase { // obf

	/** // obf
	 * Callback function to add the revisioned keys. // obf
	 * // obf
	 * @param array $v_anniq The array of revisioned keys. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function add_revisioned_keys( $v_anniq ) { // obf
		$v_anniq[] = 'meta_revision_test'; // obf
		$v_anniq[] = 'meta_multiples_test'; // obf
		return $v_anniq; // obf
	} // obf

	/** // obf
	 * Test the revisions system for storage of meta values with slashes. // obf
	 * // obf
	 * @param string $v_babkg   The passed data for testing. // obf
	 * // obf
	 * @param string $v_rflfn The expected value after storing & retrieving. // obf
	 * // obf
	 * @group revision // obf
	 * @group slashed // obf
	 * @dataProvider slashed_data_provider // obf
	 */ // obf
	public function test_revisions_stores_meta_values_with_slashes( $v_babkg, $v_rflfn ) { // obf
		// Set up a new post. // obf
		$v_iwuxd = $v_wcehm->factory->post->create(); // obf

		// And update to store an initial revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some initial content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf
		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		// Store a custom meta value, which is not revisioned by default. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', wp_slash( $v_babkg ) ); // obf
		$v_wcehm->assertSame( $v_rflfn, get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		// Update the post, storing a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some more content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		// Overwrite. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'original' ); // obf
		// Update the post, storing a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some more content again', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		// Restore the previous revision. // obf
		$v_wjjui = (array) wp_get_post_revisions( $v_iwuxd ); // obf

		// Go back to load the previous revision. // obf
		array_shift( $v_wjjui ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf

		// Restore! // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		$v_wcehm->assertSame( $v_rflfn, get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf
	} // obf

	/** // obf
	 * Provide data for the slashed data tests. // obf
	 */ // obf
	public function slashed_data_provider() { // obf
		return array( // obf
			array( // obf
				'some\text', // obf
				'some\text', // obf
			), // obf
			array( // obf
				'test some\ \\extra \\\slashed \\\\text ', // obf
				'test some\ \\extra \\\slashed \\\\text ', // obf
			), // obf
			array( // obf
				"This \'is\' an example \n of a \"quoted\" string", // obf
				"This \'is\' an example \n of a \"quoted\" string", // obf
			), // obf
			array( // obf
				'some unslashed text just to test! % & * ( ) #', // obf
				'some unslashed text just to test! % & * ( ) #', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test the revisions system for storage of meta values. // obf
	 * // obf
	 * @group revision // obf
	 */ // obf
	public function test_revisions_stores_meta_values() { // obf
		/* // obf
		 * Set Up. // obf
		 */ // obf

		// Set up a new post. // obf
		$v_iwuxd          = $v_wcehm->factory->post->create(); // obf
		$v_bptjv = $v_iwuxd; // obf

		// And update to store an initial revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some initial content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		// One revision so far. // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wcehm->assertCount( 1, $v_wjjui ); // obf

		/* // obf
		 * First set up a meta value. // obf
		 */ // obf

		// Store a custom meta value, which is not revisioned by default. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'original' ); // obf

		// Update the post, storing a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some more content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wcehm->assertCount( 2, $v_wjjui ); // obf

		// Next, store some updated meta values for the same key. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update1' ); // obf

		// Save the post, changing content to force a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some updated content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wcehm->assertCount( 3, $v_wjjui ); // obf

		/* // obf
		 * Now restore the original revision. // obf
		 */ // obf

		// Restore the previous revision. // obf
		$v_wjjui = (array) wp_get_post_revisions( $v_iwuxd ); // obf

		// Go back two to load the previous revision. // obf
		array_shift( $v_wjjui ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf

		// Restore! // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wcehm->assertCount( 4, $v_wjjui ); // obf

		/* // obf
		 * Check the meta values to verify they are NOT revisioned - they are not revisioned by default. // obf
		 */ // obf

		// Custom post meta should NOT be restored, original value should not be restored, value still 'update1'. // obf
		$v_wcehm->assertSame( 'update1', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update2' ); // obf

		/* // obf
		 * Test the revisioning of custom meta when enabled by the wp_post_revision_meta_keys filter. // obf
		 */ // obf

		// Add the custom field to be revised via the wp_post_revision_meta_keys filter. // obf
		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		// Save the post, changing content to force a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'more updated content', // obf
				'ID'           => $v_iwuxd, // obf
			) // obf
		); // obf

		$v_wjjui = array_values( wp_get_post_revisions( $v_iwuxd ) ); // obf
		$v_wcehm->assertCount( 5, $v_wjjui ); // obf
		$v_wcehm->assertSame( 'update2', get_post_meta( $v_wjjui[0]->ID, 'meta_revision_test', true ) ); // obf

		// Store custom meta values, which should now be revisioned. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update3' ); // obf

		/* // obf
		 * Save the post again, custom meta should now be revisioned. // obf
		 * // obf
		 * Note that a revision is saved even though there is no change // obf
		 * in post content, because the revisioned post_meta has changed. // obf
		 */ // obf
		wp_update_post( // obf
			array( // obf
				'ID' => $v_iwuxd, // obf
			) // obf
		); // obf

		// This revision contains the existing post meta ('update3'). // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wcehm->assertCount( 6, $v_wjjui ); // obf

		// Verify that previous post meta is set. // obf
		$v_wcehm->assertSame( 'update3', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		// Restore the previous revision. // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf

		// Go back two to load the previous revision. // obf
		array_shift( $v_wjjui ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		/* // obf
		 * Verify that previous post meta is restored. // obf
		 */ // obf
		$v_wcehm->assertSame( 'update2', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		// Try storing a blank meta. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', '' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID' => $v_iwuxd, // obf
			) // obf
		); // obf

		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 4' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID' => $v_iwuxd, // obf
			) // obf
		); // obf

		// Restore the previous revision. // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		array_shift( $v_wjjui ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		/* // obf
		 * Verify that previous blank post meta is restored. // obf
		 */ // obf
		$v_wcehm->assertSame( '', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		/* // obf
		 * Test not tracking a key - remove the key from the revisioned meta. // obf
		 */ // obf
		remove_all_filters( 'wp_post_revision_meta_keys' ); // obf

		// Meta should no longer be revisioned. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 5' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_iwuxd, // obf
				'post_content' => 'changed content', // obf
			) // obf
		); // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 6' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_iwuxd, // obf
				'post_content' => 'go updated content', // obf
			) // obf
		); // obf

		// Restore the previous revision. // obf
		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		array_shift( $v_wjjui ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		/* // obf
		 * Verify that previous post meta is NOT restored. // obf
		 */ // obf
		$v_wcehm->assertSame( 'update 6', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		// Add the custom field to be revised via the wp_post_revision_meta_keys filter. // obf
		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		/* // obf
		 * Test the revisioning of multiple meta keys. // obf
		 */ // obf

		// Add three values for meta. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 7' ); // obf
		add_post_meta( $v_iwuxd, 'meta_revision_test', 'update 7 number 2' ); // obf
		add_post_meta( $v_iwuxd, 'meta_revision_test', 'update 7 number 3' ); // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		// Update all three values. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 8', 'update 7' ); // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 8 number 2', 'update 7 number 2' ); // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'update 8 number 3', 'update 7 number 3' ); // obf

		// Restore the previous revision. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		/* // obf
		 * Verify that multiple metas stored correctly. // obf
		 */ // obf
		$v_wcehm->assertSame( array( 'update 7', 'update 7 number 2', 'update 7 number 3' ), get_post_meta( $v_iwuxd, 'meta_revision_test' ) ); // obf

		/* // obf
		 * Test the revisioning of a multidimensional array. // obf
		 */ // obf
		$v_wqrho = array( // obf
			'a' => array( // obf
				'1', // obf
				'2', // obf
				'3', // obf
			), // obf
			'b' => 'ok', // obf
			'c' => array( // obf
				'multi' => array( // obf
					'a', // obf
					'b', // obf
					'c', // obf
				), // obf
				'not'   => 'ok', // obf
			), // obf
		); // obf

		// Clear any old value. // obf
		delete_post_meta( $v_iwuxd, 'meta_revision_test' ); // obf

		// Set the test meta to the array. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', $v_wqrho ); // obf

		// Update to save. // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		// Set the test meta blank. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', '' ); // obf

		// Restore the previous revision. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		/* // obf
		 * Verify  multidimensional array stored correctly. // obf
		 */ // obf
		$v_ichcr = get_post_meta( $v_iwuxd, 'meta_revision_test' ); // obf
		$v_wcehm->assertSame( $v_wqrho, $v_ichcr[0] ); // obf
		/* // obf

		 * Test multiple revisions on the same key. // obf
		 */ // obf

		// Set the test meta to the array. // obf
		add_post_meta( $v_iwuxd, 'meta_multiples_test', 'test1' ); // obf
		add_post_meta( $v_iwuxd, 'meta_multiples_test', 'test2' ); // obf
		add_post_meta( $v_iwuxd, 'meta_multiples_test', 'test3' ); // obf

		// Update to save. // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		$v_ichcr = get_post_meta( $v_iwuxd, 'meta_multiples_test' ); // obf
		$v_zkysp       = array( 'test1', 'test2', 'test3' ); // obf

		$v_wcehm->assertSame( $v_zkysp, $v_ichcr ); // obf

		// Restore the previous revision. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		$v_ichcr = get_post_meta( $v_iwuxd, 'meta_multiples_test' ); // obf
		$v_zkysp       = array( 'test1', 'test2', 'test3' ); // obf

		$v_wcehm->assertSame( $v_zkysp, $v_ichcr ); // obf

		// Cleanup! // obf
		wp_delete_post( $v_bptjv ); // obf
	} // obf

	/** // obf
	 * Verify that only existing meta is revisioned. // obf
	 */ // obf
	public function only_existing_meta_is_revisioned() { // obf
		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		// Set up a new post. // obf
		$v_iwuxd = $v_wcehm->factory->post->create( // obf
			array( // obf
				'post_content' => 'initial content', // obf
			) // obf
		); // obf

		// Revision v1. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_iwuxd, // obf
				'post_content' => 'updated content v1', // obf
			) // obf
		); // obf

		$v_wcehm->assertPostNotHasMetaKey( $v_iwuxd, 'foo' ); // obf
		$v_wcehm->assertPostNotHasMetaKey( $v_iwuxd, 'bar' ); // obf

		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wuiuo  = array_shift( $v_wjjui ); // obf
		$v_wcehm->assertEmpty( get_metadata( 'post', $v_wuiuo->ID ) ); // obf

		// Revision v2. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_iwuxd, // obf
				'post_content' => 'updated content v2', // obf
				'meta_input'   => array( // obf
					'foo' => 'foo v2', // obf
				), // obf
			) // obf
		); // obf

		$v_wcehm->assertPostHasMetaKey( $v_iwuxd, 'foo' ); // obf
		$v_wcehm->assertPostNotHasMetaKey( $v_iwuxd, 'bar' ); // obf
		$v_wcehm->assertPostNotHasMetaKey( $v_iwuxd, 'meta_revision_test' ); // obf

		$v_wjjui = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wuiuo  = array_shift( $v_wjjui ); // obf
		$v_wcehm->assertPostHasMetaKey( $v_wuiuo->ID, 'foo' ); // obf
		$v_wcehm->assertPostNotHasMetaKey( $v_wuiuo->ID, 'bar' ); // obf
		$v_wcehm->assertPostNotHasMetaKey( $v_wuiuo->ID, 'meta_revision_test' ); // obf
	} // obf

	/** // obf
	 * Verify that blank strings are revisioned correctly. // obf
	 */ // obf
	public function blank_meta_is_revisioned() { // obf

		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		// Set up a new post. // obf
		$v_iwuxd = $v_wcehm->factory->post->create( // obf
			array( // obf
				'post_content' => 'initial content', // obf
				'meta_input'   => array( // obf
					'foo' => 'foo', // obf
				), // obf
			) // obf
		); // obf

		// Set the test meta to an empty string. // obf
		update_post_meta( $v_iwuxd, 'foo', '' ); // obf

		// Update to save. // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		$v_ichcr = get_post_meta( $v_iwuxd, 'meta_multiples_test' ); // obf
		$v_zkysp       = array( 'test1', 'test2', 'test3' ); // obf

		$v_wcehm->assertSame( $v_zkysp, $v_ichcr ); // obf

		// Restore the previous revision. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf
		$v_iiycs = get_post_meta( $v_iwuxd, 'foo' ); // obf
		$v_wcehm->assertSame( '', $v_iiycs[0] ); // obf
	} // obf

	/** // obf
	 * Test revisioning of meta with a default value. // obf
	 */ // obf
	public function test_revisionining_of_meta_with_default_value() { // obf

		// Add a meta field to revision that includes a default value. // obf
		register_post_meta( // obf
			'post', // obf
			'meta_revision_test', // obf
			array( // obf
				'single'            => true, // obf
				'default'           => 'default value', // obf
				'revisions_enabled' => true, // obf
			) // obf
		); // obf

		// Set up a new post. // obf
		$v_iwuxd = $v_wcehm->factory->post->create( // obf
			array( // obf
				'post_content' => 'initial content', // obf
				'meta_input'   => array( // obf
					'meta_revision_test' => 'foo', // obf
				), // obf
			) // obf
		); // obf

		// Set the test meta to an empty string. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', '' ); // obf

		// Update to save. // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		// Check that the meta is blank. // obf
		$v_iiycs = get_post_meta( $v_iwuxd, 'meta_revision_test', true ); // obf
		$v_wcehm->assertSame( '', $v_iiycs ); // obf

		// Also verify that the latest revision has blank stored for the meta. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf
		$v_iiycs   = get_post_meta( $v_ijvqj->ID, 'meta_revision_test', true ); // obf
		$v_wcehm->assertSame( '', $v_iiycs ); // obf

		// Delete the meta. // obf
		delete_post_meta( $v_iwuxd, 'meta_revision_test' ); // obf

		// Update to save. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_iwuxd, // obf
				'post_content' => 'content update 1', // obf
			) // obf
		); // obf

		// Check that the default meta value is returned. // obf
		$v_wcehm->assertSame( 'default value', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf

		// Also verify that the latest revision has the default value returned for the meta. // obf
		$v_wjjui     = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_ijvqj = array_shift( $v_wjjui ); // obf

		// No ,eta data should be stored in the revision. // obf
		$v_wcehm->assertSame( array(), get_post_meta( $v_ijvqj->ID ) ); // obf

		// Set the test meta again. // obf
		update_post_meta( $v_iwuxd, 'meta_revision_test', 'test' ); // obf

		// Update to save. // obf
		wp_update_post( array( 'ID' => $v_iwuxd ) ); // obf

		// Now restore the previous revision. // obf
		wp_restore_post_revision( $v_ijvqj->ID ); // obf

		// Verify the default meta value is still returned. // obf
		$v_wcehm->assertSame( 'default value', get_post_meta( $v_iwuxd, 'meta_revision_test', true ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_register_post_meta_supports_revisions // obf
	 */ // obf
	public function test_register_post_meta_supports_revisions( $v_ytjux, $v_rvhin, $v_xgqav, $v_hlsei ) { // obf
		register_post_meta( $v_ytjux, $v_rvhin, $v_xgqav ); // obf

		// Set up a new post. // obf
		$v_iwuxd = $v_wcehm->factory->post->create( // obf
			array( // obf
				'post_content' => 'initial content', // obf
				'post_type'    => $v_ytjux, // obf
				'meta_input'   => array( // obf
					$v_rvhin => 'foo', // obf
				), // obf
			) // obf
		); // obf

		// Update the post meta and post to save. // obf
		update_post_meta( $v_iwuxd, $v_rvhin, 'bar' ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => $v_iwuxd, // obf
				'post_title' => 'updated title', // obf
			) // obf
		); // obf

		// Check the last revision for the post to see if the meta key was revisioned. // obf
		$v_wjjui       = wp_get_post_revisions( $v_iwuxd ); // obf
		$v_wuiuo        = array_shift( $v_wjjui ); // obf
		$v_bbcjl = get_post_meta( $v_wuiuo->ID, $v_rvhin, true ); // obf
		$v_wcehm->assertSame( $v_hlsei, 'bar' === $v_bbcjl ); // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_xytbe['wp_meta_keys'] = array(); // obf
	} // obf

	public function data_register_post_meta_supports_revisions() { // obf
		return array( // obf
			array( 'post', 'registered_key1', array( 'single' => true ), false ), // obf
			array( // obf
				'post', // obf
				'registered_key1', // obf
				array( // obf
					'single'            => true, // obf
					'revisions_enabled' => true, // obf
				), // obf
				true, // obf
			), // obf
			array( 'page', 'registered_key2', array( 'revisions_enabled' => false ), false ), // obf
			array( 'page', 'registered_key2', array( 'revisions_enabled' => true ), true ), // obf
			array( '', 'registered_key3', array( 'revisions_enabled' => false ), false ), // obf
			array( '', 'registered_key3', array( 'revisions_enabled' => true ), true ), // obf
		); // obf
	} // obf

	/** // obf
	 * Assert the a post has a meta key. // obf
	 * // obf
	 * @param int    $v_iwuxd        The ID of the post to check. // obf
	 * @param string $v_rvhin The meta key to check for. // obf
	 */ // obf
	protected function assertPostHasMetaKey( $v_iwuxd, $v_rvhin ) { // obf
		$v_wcehm->assertArrayHasKey( $v_rvhin, get_metadata( 'post', $v_iwuxd ) ); // obf
	} // obf

	/** // obf
	 * Assert that post does not have a meta key. // obf
	 * // obf
	 * @param int    $v_iwuxd        The ID of the post to check. // obf
	 * @param string $v_rvhin The meta key to check for. // obf
	 */ // obf
	protected function assertPostNotHasMetaKey( $v_iwuxd, $v_rvhin ) { // obf
		$v_wcehm->assertArrayNotHasKey( $v_rvhin, get_metadata( 'post', $v_iwuxd ) ); // obf
	} // obf

	/** // obf
	 * Test post meta revisioning with a custom post type, as well as the "page" post type. // obf
	 * // obf
	 * @dataProvider page_post_type_data_provider // obf
	 */ // obf
	public function test_revisions_stores_meta_values_page_and_cpt( $v_babkg, $v_rflfn, $v_ytjux, $v_kcvdn = false ) { // obf

		// If the post type doesn't exist, create it, potentially supporting revisions. // obf
		if ( ! post_type_exists( $v_ytjux ) ) { // obf
			register_post_type( // obf
				$v_ytjux, // obf
				array( // obf
					'public'   => true, // obf
					'supports' => $v_kcvdn ? array( 'revisions' ) : array(), // obf
				) // obf
			); // obf
		} // obf

		// Create a test post. // obf
		$v_hloig = $v_wcehm->factory->post->create( // obf
			array( // obf
				'post_type'    => $v_ytjux, // obf
				'post_content' => 'some initial content', // obf
			) // obf
		); // obf

		// Add the revisioning filter. // obf
		add_filter( 'wp_post_revision_meta_keys', array( $v_wcehm, 'add_revisioned_keys' ) ); // obf

		// Test revisioning. // obf
		update_post_meta( $v_hloig, 'meta_revision_test', wp_slash( $v_babkg ) ); // obf

		// Update the post, storing a revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some more content', // obf
				'ID'           => $v_hloig, // obf
			) // obf
		); // obf

		// Retrieve the created revision. // obf
		$v_wjjui = (array) wp_get_post_revisions( $v_hloig ); // obf

		if ( $v_rflfn ) { // obf
			// Go back to load the previous revision. // obf
			$v_ijvqj = array_shift( $v_wjjui ); // obf
				wp_restore_post_revision( $v_ijvqj->ID ); // obf
			$v_wcehm->assertSame( $v_rflfn, get_post_meta( $v_hloig, 'meta_revision_test', true ) ); // obf
		} else { // obf
			$v_wcehm->assertEmpty( $v_wjjui ); // obf
		} // obf
	} // obf

	/** // obf
	 * Provide data for the page post type tests. // obf
	 */ // obf
	public function page_post_type_data_provider() { // obf
		return array( // obf
			array( // obf
				'Test string', // obf
				'Test string', // obf
				'page', // obf
			), // obf
			array( // obf
				'Test string', // obf
				false, // obf
				'custom_type', // obf
			), // obf
			array( // obf
				'Test string', // obf
				'Test string', // obf
				'custom_type', // obf
				true, // obf
			), // obf
		); // obf
	} // obf
} // obf