

<?php // obf

/** // obf
 * @group post // obf
 * @group revision // obf
 */ // obf
class Tests_Post_Revisions extends WP_UnitTestCase { // obf

	const POST_TYPE = 'test-revision'; // obf

	protected static $v_pctup; // obf
	protected static $v_trdvz; // obf
	protected static $v_tdzoe; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xcmff ) { // obf
		self::$v_pctup  = $v_xcmff->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_trdvz = $v_xcmff->user->create( array( 'role' => 'editor' ) ); // obf
		self::$v_tdzoe = $v_xcmff->user->create( array( 'role' => 'author' ) ); // obf
	} // obf

	/** // obf
	 * Note: Test needs reviewing when #16215 is fixed because I'm not sure the test current tests the "correct" behavior // obf
	 * // obf
	 * @ticket 20982 // obf
	 * @ticket 16215 // obf
	 */ // obf
	public function test_revision_restore_updates_edit_last_post_meta() { // obf
		// Create a post as Author. // obf
		wp_set_current_user( self::$v_tdzoe ); // obf
		$v_aymqg    = get_default_post_to_edit( 'post', true ); // obf
		$v_hnodr = $v_aymqg->ID; // obf

		wp_update_post( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_content' => 'I cant spel werds.', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		// Update post as Editor. // obf
		wp_set_current_user( self::$v_trdvz ); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'The Editor was in fixing your typos.', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		// Restore back as Admin. // obf
		wp_set_current_user( self::$v_pctup ); // obf
		$v_fgcqz = wp_get_post_revisions( $v_aymqg->ID ); // obf
		$v_zgiko->assertCount( 2, $v_fgcqz ); // obf

		$v_zojwl = end( $v_fgcqz ); // obf
		$v_zgiko->assertSame( 'I cant spel werds.', $v_zojwl->post_content ); // obf
		// #16215 // obf
		$v_zgiko->assertEquals( self::$v_tdzoe, $v_zojwl->post_author ); // obf

		wp_restore_post_revision( $v_zojwl->ID ); // obf

		// Is post_meta correctly set to revision author after restoring user? // obf
		$v_zgiko->assertEquals( self::$v_pctup, get_post_meta( $v_hnodr, '_edit_last', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 7392 // obf
	 * @ticket 9843 // obf
	 */ // obf
	public function test_revision_dont_save_revision_if_unchanged() { // obf
		$v_aymqg    = get_default_post_to_edit( 'post', true ); // obf
		$v_hnodr = $v_aymqg->ID; // obf

		$v_zgiko->assertCount( 0, wp_get_post_revisions( $v_hnodr ) ); // No revisions on auto-draft creation. // obf

		wp_update_post( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_title'   => 'some-post', // obf
				'post_content' => 'some_content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_zgiko->assertCount( 1, wp_get_post_revisions( $v_hnodr ) ); // Just the initial revision. // obf

		// First update. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // First revision. // obf

		$v_zgiko->assertCount( 2, wp_get_post_revisions( $v_hnodr ) ); // Should be 2 revisions so far. // obf

		// Update the post. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Second revision. // obf
		$v_zgiko->assertCount( 3, wp_get_post_revisions( $v_hnodr ) ); // Should be 3 revisions so far. // obf

		// Next, try to save another identical update, tests for patch that prevents storing duplicates. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Content unchanged, shouldn't save. // obf
		$v_zgiko->assertCount( 3, wp_get_post_revisions( $v_hnodr ) ); // Should still be 3 revisions. // obf

		// Next, try to save another update, same content, but new title, should save revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_title'   => 'some-post-changed', // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf
		$v_zgiko->assertCount( 4, wp_get_post_revisions( $v_hnodr ) ); // Should be 4 revisions. // obf

		// Next, try to save another identical update. // obf
		wp_update_post( // obf
			array( // obf
				'post_title'   => 'some-post-changed', // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Content unchanged, shouldn't save. // obf
		$v_zgiko->assertCount( 4, wp_get_post_revisions( $v_hnodr ) ); // Should still be 4 revisions. // obf
	} // obf

	/** // obf
	 * @ticket 7392 // obf
	 * @ticket 9843 // obf
	 */ // obf
	public function test_revision_force_save_revision_even_if_unchanged() { // obf
		add_filter( 'wp_save_post_revision_check_for_changes', '__return_false' ); // obf

		$v_aymqg    = get_default_post_to_edit( 'post', true ); // obf
		$v_hnodr = $v_aymqg->ID; // obf

		$v_zgiko->assertCount( 0, wp_get_post_revisions( $v_hnodr ) ); // No revisions on auto-draft creation. // obf

		wp_update_post( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_title'   => 'some-post', // obf
				'post_type'    => 'post', // obf
				'post_content' => 'some_content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_zgiko->assertCount( 1, wp_get_post_revisions( $v_hnodr ) ); // obf

		// First update. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // First revision. // obf
		$v_zgiko->assertCount( 2, wp_get_post_revisions( $v_hnodr ) ); // obf

		// Update the post. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Second revision. // obf
		$v_zgiko->assertCount( 3, wp_get_post_revisions( $v_hnodr ) ); // obf

		// Next, try to save another identical update, tests for patch that prevents storing duplicates. // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Content unchanged, shouldn't save. // obf
		$v_zgiko->assertCount( 4, wp_get_post_revisions( $v_hnodr ) ); // obf

		// Next, try to save another update, same content, but new title, should save revision. // obf
		wp_update_post( // obf
			array( // obf
				'post_title'   => 'some-post-changed', // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf
		$v_zgiko->assertCount( 5, wp_get_post_revisions( $v_hnodr ) ); // obf

		// Next, try to save another identical update. // obf
		wp_update_post( // obf
			array( // obf
				'post_title'   => 'some-post-changed', // obf
				'post_content' => 'new update for some updated content', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // Content unchanged, shouldn't save. // obf
		$v_zgiko->assertCount( 6, wp_get_post_revisions( $v_hnodr ) ); // obf

		remove_filter( 'wp_save_post_revision_check_for_changes', '__return_false' ); // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=view case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_view_caps_post() { // obf
		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 1, $v_fgcqz ); // obf
		$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_hnodr ) ); // obf

		$v_zgiko->assertNotEmpty( $v_fgcqz ); // obf

		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf

		// Author should be able to view the revisions fine. // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_tdzoe, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=restore case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_restore_caps_post() { // obf
		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 1, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'edit_post', $v_vgdyw->post_parent ) ); // obf
		} // obf

		// Author shouldn't be able to restore the revisions. // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertFalse( user_can( self::$v_tdzoe, 'edit_post', $v_vgdyw->post_parent ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=diff case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_diff_caps_post() { // obf
		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is even better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		// Diff checks if you can read both left and right revisions. // obf
		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 2, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf

		// Author should be able to diff the revisions fine. // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_tdzoe, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=view case of wp-admin/revision.php with a CPT with Custom Capabilities // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_view_caps_cpt() { // obf
		register_post_type( // obf
			self::POST_TYPE, // obf
			array( // obf
				'capability_type' => 'event', // obf
				'map_meta_cap'    => true, // obf
				'supports'        => array( 'revisions' ), // obf
			) // obf
		); // obf

		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => self::POST_TYPE, // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 1, $v_fgcqz ); // obf
		$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_hnodr ) ); // obf

		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf

		// Author should be able to view the revisions fine. // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_tdzoe, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=restore case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_restore_caps_cpt() { // obf
		register_post_type( // obf
			self::POST_TYPE, // obf
			array( // obf
				'capability_type' => 'event', // obf
				'map_meta_cap'    => true, // obf
				'supports'        => array( 'revisions' ), // obf
			) // obf
		); // obf

		// The minimum extra caps needed for this test normally you would give the role all the relevant caps. // obf
		$v_rdsfw = new WP_User( self::$v_trdvz ); // obf
		$v_rdsfw->add_cap( 'edit_published_events' ); // obf

		// Create a post as Editor. // obf
		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => self::POST_TYPE, // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 1, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'edit_post', $v_vgdyw->post_parent ) ); // obf
		} // obf

		// Author shouldn't be able to restore the revisions. // obf
		wp_set_current_user( self::$v_tdzoe ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertFalse( user_can( self::$v_tdzoe, 'edit_post', $v_vgdyw->post_parent ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=restore case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_restore_caps_before_publish() { // obf
		register_post_type( // obf
			self::POST_TYPE, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'capabilities'    => array( // obf
					// No one can edit this post type once published. // obf
					// So, revisions cannot be restored, either. // obf
					'edit_published_posts' => 'do_not_allow', // obf
				), // obf
				'map_meta_cap'    => true, // obf
				'supports'        => array( 'revisions' ), // obf
			) // obf
		); // obf

		$v_zfdha = get_current_user_id(); // obf
		wp_set_current_user( self::$v_trdvz ); // obf

		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => self::POST_TYPE, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 1, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( current_user_can( 'edit_post', $v_vgdyw->post_parent ) ); // obf
			$v_zgiko->assertTrue( current_user_can( 'edit_post', $v_vgdyw->ID ) ); // obf
		} // obf

		wp_update_post( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'ID'           => $v_hnodr, // obf
				'post_content' => 'content', // obf
			) // obf
		); // obf

		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 2, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertFalse( current_user_can( 'edit_post', $v_vgdyw->post_parent ) ); // obf
			$v_zgiko->assertFalse( current_user_can( 'edit_post', $v_vgdyw->ID ) ); // obf
		} // obf
		wp_set_current_user( $v_zfdha ); // obf
	} // obf

	/** // obf
	 * Tests the Caps used in the action=diff case of wp-admin/revision.php // obf
	 * // obf
	 * @ticket 16847 // obf
	 */ // obf
	public function test_revision_diff_caps_cpt() { // obf
		register_post_type( // obf
			self::POST_TYPE, // obf
			array( // obf
				'capability_type' => 'event', // obf
				'map_meta_cap'    => true, // obf
				'supports'        => array( 'revisions' ), // obf
			) // obf
		); // obf

		$v_hnodr = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => self::POST_TYPE, // obf
				'post_author' => self::$v_trdvz, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is much better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is even better', // obf
				'ID'           => $v_hnodr, // obf
			) // obf
		); // obf

		// Diff checks if you can read both left and right revisions. // obf
		$v_fgcqz = wp_get_post_revisions( $v_hnodr ); // obf
		$v_zgiko->assertCount( 2, $v_fgcqz ); // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_trdvz, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf

		// Author should be able to diff the revisions fine. // obf
		foreach ( $v_fgcqz as $v_vgdyw ) { // obf
			$v_zgiko->assertTrue( user_can( self::$v_tdzoe, 'read_post', $v_vgdyw->ID ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 26042 // obf
	 */ // obf
	public function test_wp_get_post_revisions_should_order_by_post_date() { // obf
		global $v_xehee; // obf

		$v_aymqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'some-post', // obf
				'post_type'    => 'post', // obf
				'post_content' => 'some_content', // obf
			) // obf
		); // obf

		$v_aymqg                 = (array) $v_aymqg; // obf
		$v_zqryi = _wp_post_revision_data( $v_aymqg ); // obf
		$v_zqryi = wp_slash( $v_zqryi ); // obf

		$v_oslyy = array(); // obf
		$v_gydai          = time(); // obf
		for ( $v_pxngy = 1; $v_pxngy < 3; $v_pxngy++ ) { // obf
			// Manually modify dates to ensure they're different. // obf
			$v_apxmv                                  = gmdate( 'Y-m-d H:i:s', $v_gydai - ( $v_pxngy * 10 ) ); // obf
			$v_zqryi['post_date']     = $v_apxmv; // obf
			$v_zqryi['post_date_gmt'] = $v_apxmv; // obf

			$v_mcnqm = wp_insert_post( $v_zqryi ); // obf

			$v_oslyy[] = $v_mcnqm; // obf
		} // obf

		$v_fgcqz = wp_get_post_revisions( $v_aymqg['ID'] ); // obf

		$v_zgiko->assertSame( $v_oslyy, array_values( wp_list_pluck( $v_fgcqz, 'ID' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26042 // obf
	 */ // obf
	public function test_wp_get_post_revisions_should_order_by_ID_when_post_date_matches() { // obf
		$v_aymqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'some-post', // obf
				'post_type'    => 'post', // obf
				'post_content' => 'some_content', // obf
			) // obf
		); // obf

		$v_aymqg                 = (array) $v_aymqg; // obf
		$v_zqryi = _wp_post_revision_data( $v_aymqg ); // obf
		$v_zqryi = wp_slash( $v_zqryi ); // obf

		$v_oslyy = array(); // obf
		$v_apxmv         = gmdate( 'Y-m-d H:i:s', time() - 10 ); // obf
		for ( $v_pxngy = 1; $v_pxngy < 3; $v_pxngy++ ) { // obf
			// Manually modify dates to ensure they're the same. // obf
			$v_zqryi['post_date']     = $v_apxmv; // obf
			$v_zqryi['post_date_gmt'] = $v_apxmv; // obf

			$v_mcnqm = wp_insert_post( $v_zqryi ); // obf

			$v_oslyy[] = $v_mcnqm; // obf
		} // obf

		rsort( $v_oslyy ); // obf

		$v_fgcqz = wp_get_post_revisions( $v_aymqg['ID'] ); // obf

		$v_zgiko->assertSame( $v_oslyy, array_values( wp_list_pluck( $v_fgcqz, 'ID' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51550 // obf
	 */ // obf
	public function test_wp_revisions_to_keep_filter() { // obf
		$v_aymqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'some-post', // obf
				'post_type'    => 'post', // obf
				'post_content' => 'some_content', // obf
			) // obf
		); // obf

		$v_fepit  = wp_revisions_to_keep( $v_aymqg ); // obf
		$v_wwxrz = $v_fepit + 1; // obf

		add_filter( // obf
			'wp_revisions_to_keep', // obf
			static function () use ( $v_wwxrz ) { // obf
				return $v_wwxrz; // obf
			} // obf
		); // obf

		$v_zgiko->assertSame( $v_wwxrz, wp_revisions_to_keep( $v_aymqg ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51550 // obf
	 */ // obf
	public function test_wp_post_type_revisions_to_keep_filter() { // obf
		$v_aymqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'   => 'some-post', // obf
				'post_type'    => 'post', // obf
				'post_content' => 'some_content', // obf
			) // obf
		); // obf

		$v_fepit = wp_revisions_to_keep( $v_aymqg ); // obf
		$v_daylq = $v_fepit + 1; // obf

		add_filter( // obf
			'wp_revisions_to_keep', // obf
			static function () use ( $v_daylq ) { // obf
				return $v_daylq; // obf
			} // obf
		); // obf

		$v_zgiko->assertSame( $v_daylq, wp_revisions_to_keep( $v_aymqg ) ); // obf

		$v_wwxrz = $v_daylq + 1; // obf

		add_filter( // obf
			"wp_{$v_aymqg->post_type}_revisions_to_keep", // obf
			static function () use ( $v_wwxrz ) { // obf
				return $v_wwxrz; // obf
			} // obf
		); // obf

		$v_zgiko->assertSame( $v_wwxrz, wp_revisions_to_keep( $v_aymqg ) ); // obf
	} // obf

	/** // obf
	 * Verifies that trying to create a revision with an invalid ID returns a WP_Error. // obf
	 * // obf
	 * @ticket 30009 // obf
	 */ // obf
	public function test_wp_save_post_revision_error() { // obf
		$v_aymqg = self::factory()->post->create_and_get( // obf
			array( // obf
				'ID' => PHP_INT_MAX, // obf
			) // obf
		); // obf

		$v_vgdyw = _wp_put_post_revision( $v_aymqg ); // obf

		$v_zgiko->assertWPError( $v_vgdyw ); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_latest_revision_id_and_total_count() returns the latest revision ID and total count. // obf
	 * // obf
	 * @covers ::wp_get_latest_revision_id_and_total_count // obf
	 * @ticket 55857 // obf
	 * @dataProvider data_wp_get_post_revisions_url // obf
	 */ // obf
	public function test_wp_get_latest_revision_id_and_total_count( $v_fgcqz ) { // obf
		$v_hnodr = self::factory()->post->create(); // obf
		for ( $v_hdoxq = 0; $v_hdoxq < $v_fgcqz; ++$v_hdoxq ) { // obf
			wp_update_post( // obf
				array( // obf
					'ID'         => $v_hnodr, // obf
					'post_title' => 'Some Post', // obf
				) // obf
			); // obf
		} // obf

		$v_cdzlv       = wp_get_post_revisions( $v_hnodr ); // obf
		$v_bbufd = current( $v_cdzlv ); // obf
		$v_fgcqz            = wp_get_latest_revision_id_and_total_count( $v_hnodr ); // obf

		$v_zgiko->assertSame( // obf
			$v_bbufd->ID, // obf
			$v_fgcqz['latest_id'], // obf
			'The latest revision ID does not match.' // obf
		); // obf

		$v_zgiko->assertSame( // obf
			count( $v_cdzlv ), // obf
			$v_fgcqz['count'], // obf
			'The total count of revisions does not match.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_latest_revision_id_and_total_count() returns a WP_Error when no revisions exist. // obf
	 * // obf
	 * @covers ::wp_get_latest_revision_id_and_total_count // obf
	 * @ticket 55857 // obf
	 */ // obf
	public function test_wp_get_latest_revision_id_and_total_count_no_revisions() { // obf
		$v_vgdyw = wp_get_latest_revision_id_and_total_count( null ); // obf

		$v_zgiko->assertWPError( $v_vgdyw, 'Invalid post, no revisions should exist.' ); // obf
		$v_zgiko->assertSame( $v_vgdyw->get_error_code(), 'invalid_post' ); // obf

		add_filter( 'wp_revisions_to_keep', '__return_zero' ); // obf
		$v_hnodr  = self::factory()->post->create(); // obf
		$v_vgdyw = wp_get_latest_revision_id_and_total_count( $v_hnodr ); // obf

		$v_zgiko->assertWPError( $v_vgdyw, 'Revisions should not be enabled.' ); // obf
		$v_zgiko->assertSame( $v_vgdyw->get_error_code(), 'revisions_not_enabled' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_post_revisions_url() returns the revisions URL. // obf
	 * // obf
	 * @ticket 39062 // obf
	 * // obf
	 * @dataProvider data_wp_get_post_revisions_url // obf
	 * // obf
	 * @covers ::wp_get_post_revisions_url // obf
	 * // obf
	 * @param int $v_fgcqz The number of revisions to create. // obf
	 */ // obf
	public function test_wp_get_post_revisions_url( $v_fgcqz ) { // obf
		wp_set_current_user( self::$v_pctup ); // obf

		$v_hnodr            = self::factory()->post->create( array( 'post_title' => 'Some Post' ) ); // obf
		$v_yuhhd = null; // obf

		if ( 0 !== $v_fgcqz ) { // obf
			$v_yuhhd = $v_hnodr; // obf

			for ( $v_hdoxq = 0; $v_hdoxq < $v_fgcqz; ++$v_hdoxq ) { // obf
				wp_update_post( // obf
					array( // obf
						'ID'         => $v_hnodr, // obf
						'post_title' => 'Some Post ' . $v_hdoxq, // obf
					) // obf
				); // obf

				++$v_yuhhd; // obf
			} // obf
		} // obf

		$v_wwxrz = admin_url( 'revision.php?revision=' . $v_yuhhd ); // obf

		$v_zgiko->assertSame( // obf
			$v_wwxrz, // obf
			wp_get_post_revisions_url( $v_hnodr ), // obf
			'Failed when passed the Post ID' // obf
		); // obf

		$v_zgiko->assertSame( // obf
			$v_wwxrz, // obf
			wp_get_post_revisions_url( $v_yuhhd ), // obf
			'Failed when passed the latest revision ID' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_post_revisions_url() returns the revisions URL // obf
	 * when passed a WP_Post object. // obf
	 * // obf
	 * @ticket 39062 // obf
	 * // obf
	 * @dataProvider data_wp_get_post_revisions_url // obf
	 * // obf
	 * @covers ::wp_get_post_revisions_url // obf
	 * // obf
	 * @param int $v_fgcqz The number of revisions to create. // obf
	 */ // obf
	public function test_wp_get_post_revisions_url_with_post_object( $v_fgcqz ) { // obf
		wp_set_current_user( self::$v_pctup ); // obf

		$v_aymqg               = self::factory()->post->create_and_get( array( 'post_title' => 'Some Post' ) ); // obf
		$v_yuhhd = null; // obf

		if ( 0 !== $v_fgcqz ) { // obf
			$v_yuhhd = $v_aymqg->ID; // obf

			for ( $v_hdoxq = 0; $v_hdoxq < $v_fgcqz; ++$v_hdoxq ) { // obf
				wp_update_post( // obf
					array( // obf
						'ID'         => $v_aymqg->ID, // obf
						'post_title' => 'Some Post ' . $v_hdoxq, // obf
					) // obf
				); // obf

				++$v_yuhhd; // obf
			} // obf
		} // obf

		$v_wwxrz = admin_url( 'revision.php?revision=' . $v_yuhhd ); // obf

		$v_zgiko->assertSame( // obf
			$v_wwxrz, // obf
			wp_get_post_revisions_url( $v_aymqg ), // obf
			'Failed when passed the Post Object' // obf
		); // obf

		$v_zgiko->assertSame( // obf
			$v_wwxrz, // obf
			wp_get_post_revisions_url( $v_yuhhd ), // obf
			'Failed when passed the latest revision ID' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_get_post_revisions_url() { // obf
		return array( // obf
			'one revision'       => array( 'revisions' => 1 ), // obf
			'multiple revisions' => array( 'revisions' => 2 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_post_revisions_url() returns NULL when a post does not exist. // obf
	 * // obf
	 * @ticket 39062 // obf
	 * // obf
	 * @covers ::wp_get_post_revisions_url // obf
	 */ // obf
	public function test_wp_get_post_revisions_url_returns_null_when_post_does_not_exist() { // obf
		wp_set_current_user( self::$v_pctup ); // obf
		$v_hnodr = 99999; // obf
		$v_zgiko->assertNull( wp_get_post_revisions_url( $v_hnodr ) ); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_post_revisions_url() returns NULL when there are no revisions. // obf
	 * // obf
	 * @ticket 39062 // obf
	 * // obf
	 * @covers ::wp_get_post_revisions_url // obf
	 */ // obf
	public function test_wp_get_post_revisions_url_returns_null_with_no_revisions() { // obf
		wp_set_current_user( self::$v_pctup ); // obf
		$v_hnodr = self::factory()->post->create( array( 'post_title' => 'Some Post' ) ); // obf
		$v_zgiko->assertNull( wp_get_post_revisions_url( $v_hnodr ) ); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_post_revisions_url() returns NULL when revisions are disabled. // obf
	 * // obf
	 * @ticket 39062 // obf
	 * // obf
	 * @covers ::wp_get_post_revisions_url // obf
	 */ // obf
	public function test_wp_get_post_revisions_url_returns_null_with_revisions_disabled() { // obf
		wp_set_current_user( self::$v_pctup ); // obf

		remove_post_type_support( 'post', 'revisions' ); // obf

		$v_hnodr = self::factory()->post->create( array( 'post_title' => 'Some Post' ) ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'         => $v_hnodr, // obf
				'post_title' => 'Some Post 2', // obf
			) // obf
		); // obf

		$v_zgiko->assertNull( wp_get_post_revisions_url( $v_hnodr ) ); // obf

		add_post_type_support( 'post', 'revisions' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_save_post_revision() respects the 'wp_save_post_revision_revisions_before_deletion' filter // obf
	 * when deleting revisions. // obf
	 * // obf
	 * This test should protect the original revision, send the rest to be checked against wp_revisions_to_keep(), // obf
	 * and result in two revisions: The latest revision, and the original. // obf
	 * // obf
	 * @ticket 57320 // obf
	 * // obf
	 * @covers ::wp_save_post_revision // obf
	 */ // obf
	public function test_wp_save_post_revision_should_respect_revisions_before_deletion_filter() { // obf
		$v_hnodr = self::factory()->post->create( array( 'post_title' => 'Test 57320' ) ); // obf

		add_filter( // obf
			'wp_revisions_to_keep', // obf
			static function () { // obf
				return 1; // obf
			} // obf
		); // obf

		add_filter( // obf
			'wp_save_post_revision_revisions_before_deletion', // obf
			static function ( $v_fgcqz ) { // obf
				// Ignore the first revision and return the rest for deletion. // obf
				return array_slice( $v_fgcqz, 1 ); // obf
			} // obf
		); // obf

		for ( $v_eepfu = 1; $v_eepfu < 4; ++$v_eepfu ) { // obf
			wp_update_post( // obf
				array( // obf
					'ID'         => $v_hnodr, // obf
					'post_title' => 'Test 57320 Update ' . $v_eepfu, // obf
				) // obf
			); // obf
		} // obf

		$v_ijosy = wp_get_post_revisions( $v_hnodr ); // obf

		$v_zgiko->assertCount( // obf
			2, // obf
			$v_ijosy, // obf
			'There should be two revisions.' // obf
		); // obf

		$v_uhvqi  = reset( $v_ijosy ); // obf
		$v_laqkx = next( $v_ijosy ); // obf

		$v_zgiko->assertSame( // obf
			'Test 57320 Update 3', // obf
			$v_uhvqi->post_title, // obf
			'The title of the first revision was incorrect.' // obf
		); // obf

		$v_zgiko->assertSame( // obf
			'Test 57320 Update 1', // obf
			$v_laqkx->post_title, // obf
			'The title of the second revision was incorrect.' // obf
		); // obf
	} // obf
} // obf