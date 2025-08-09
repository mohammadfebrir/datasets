

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_editPost extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'username', 'password', 0, array() ) ); // obf
		$v_ydvur->assertIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 403, $v_ovufa->code ); // obf
	} // obf

	public function test_edit_own_post() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_ludvn = 'Post test (updated)'; // obf
		$v_dzvhx     = array( 'post_title' => $v_ludvn ); // obf
		$v_ovufa    = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'contributor', 'contributor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertTrue( $v_ovufa ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( $v_ludvn, $v_nyteh->post_title ); // obf
	} // obf

	public function test_capable_edit_others_post() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf
		$v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_ludvn = 'Post test (updated)'; // obf
		$v_dzvhx     = array( 'post_title' => $v_ludvn ); // obf
		$v_ovufa    = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertTrue( $v_ovufa ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( $v_ludvn, $v_nyteh->post_title ); // obf
	} // obf

	public function test_incapable_edit_others_post() { // obf
		$v_ydvur->make_user_by_role( 'contributor' ); // obf
		$v_rahwd = $v_ydvur->make_user_by_role( 'author' ); // obf

		$v_zrqhu = 'Post test'; // obf
		$v_hkxvp           = array( // obf
			'post_title'  => $v_zrqhu, // obf
			'post_author' => $v_rahwd, // obf
		); // obf
		$v_renjq        = wp_insert_post( $v_hkxvp ); // obf

		$v_ludvn = 'Post test (updated)'; // obf
		$v_dzvhx     = array( 'post_title' => $v_ludvn ); // obf
		$v_ovufa    = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'contributor', 'contributor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 401, $v_ovufa->code ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( $v_zrqhu, $v_nyteh->post_title ); // obf
	} // obf

	public function test_capable_reassign_author() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf
		$v_rahwd      = $v_ydvur->make_user_by_role( 'author' ); // obf
		$v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_dzvhx  = array( 'post_author' => $v_rahwd ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertTrue( $v_ovufa ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertEquals( $v_rahwd, $v_nyteh->post_author ); // obf
	} // obf

	public function test_incapable_reassign_author() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf
		$v_rahwd      = $v_ydvur->make_user_by_role( 'author' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_dzvhx  = array( 'post_author' => $v_rahwd ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'contributor', 'contributor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 401, $v_ovufa->code ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertEquals( $v_dyzgq, $v_nyteh->post_author ); // obf
	} // obf

	/** // obf
	 * @ticket 24916 // obf
	 */ // obf
	public function test_capable_reassign_author_to_self() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf
		$v_jaazh      = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_dzvhx  = array( 'post_author' => $v_jaazh ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertTrue( $v_ovufa ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertEquals( $v_jaazh, $v_nyteh->post_author ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_post_thumbnail() { // obf
		add_theme_support( 'post-thumbnails' ); // obf

		$v_rahwd = $v_ydvur->make_user_by_role( 'author' ); // obf

		$v_hkxvp    = array( // obf
			'post_title'  => 'Post Thumbnail Test', // obf
			'post_author' => $v_rahwd, // obf
		); // obf
		$v_renjq = wp_insert_post( $v_hkxvp ); // obf

		$v_ydvur->assertSame( '', get_post_meta( $v_renjq, '_thumbnail_id', true ) ); // obf

		// Create attachment. // obf
		$v_dmths      = ( DIR_TESTDATA . '/images/a2-small.jpg' ); // obf
		$v_lbxbx = self::factory()->attachment->create_upload_object( $v_dmths, $v_renjq ); // obf

		// Add post thumbnail to post that does not have one. // obf
		$v_dzvhx  = array( 'post_thumbnail' => $v_lbxbx ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'author', 'author', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertEquals( $v_lbxbx, get_post_meta( $v_renjq, '_thumbnail_id', true ) ); // obf

		// Fetch the post to verify that it appears. // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_getPost( array( 1, 'author', 'author', $v_renjq ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertArrayHasKey( 'post_thumbnail', $v_ovufa ); // obf
		$v_ydvur->assertIsArray( $v_ovufa['post_thumbnail'] ); // obf
		$v_ydvur->assertEquals( $v_lbxbx, $v_ovufa['post_thumbnail']['attachment_id'] ); // obf

		// Edit the post without supplying a post_thumbnail and check that it didn't change. // obf
		$v_ouhej  = array( 'post_content' => 'Updated post' ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'author', 'author', $v_renjq, $v_ouhej ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertEquals( $v_lbxbx, get_post_meta( $v_renjq, '_thumbnail_id', true ) ); // obf

		// Create another attachment. // obf
		$v_qjinp = self::factory()->attachment->create_upload_object( $v_dmths, $v_renjq ); // obf

		// Change the post's post_thumbnail. // obf
		$v_gqglc  = array( 'post_thumbnail' => $v_qjinp ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'author', 'author', $v_renjq, $v_gqglc ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertEquals( $v_qjinp, get_post_meta( $v_renjq, '_thumbnail_id', true ) ); // obf

		// Unset the post's post_thumbnail. // obf
		$v_ydcxa  = array( 'post_thumbnail' => '' ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'author', 'author', $v_renjq, $v_ydcxa ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( '', get_post_meta( $v_renjq, '_thumbnail_id', true ) ); // obf

		// Use invalid ID. // obf
		$v_qjsgr  = array( 'post_thumbnail' => 398420983409 ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'author', 'author', $v_renjq, $v_qjsgr ) ); // obf
		$v_ydvur->assertIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 404, $v_ovufa->code ); // obf

		remove_theme_support( 'post-thumbnails' ); // obf
	} // obf

	public function test_edit_custom_fields() { // obf
		$v_dyzgq = $v_ydvur->make_user_by_role( 'contributor' ); // obf

		$v_hkxvp       = array( // obf
			'post_title'  => 'Post test', // obf
			'post_author' => $v_dyzgq, // obf
		); // obf
		$v_renjq    = wp_insert_post( $v_hkxvp ); // obf
		$v_ghtzq   = add_post_meta( $v_renjq, 'custom_field_key', '12345678' ); // obf
		$v_dgpcw = add_post_meta( $v_renjq, 'custom_field_to_delete', '12345678' ); // obf

		$v_ludvn = 'Post test (updated)'; // obf
		$v_dzvhx     = array( // obf
			'post_title'    => $v_ludvn, // obf
			'custom_fields' => // obf
				array( // obf
					array( 'id' => $v_dgpcw ), // obf
					array( // obf
						'id'    => $v_ghtzq, // obf
						'key'   => 'custom_field_key', // obf
						'value' => '87654321', // obf
					), // obf
					array( // obf
						'key'   => 'custom_field_to_create', // obf
						'value' => '12345678', // obf
					), // obf
				), // obf
		); // obf

		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'contributor', 'contributor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertTrue( $v_ovufa ); // obf

		$v_nyteh = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( $v_ludvn, $v_nyteh->post_title ); // obf

		$v_ekiwo = get_metadata_by_mid( 'post', $v_ghtzq ); // obf
		$v_ydvur->assertSame( '87654321', $v_ekiwo->meta_value ); // obf
		$v_ydvur->assertFalse( get_metadata_by_mid( 'post', $v_dgpcw ) ); // obf

		$v_fieli = get_post_meta( $v_renjq, 'custom_field_to_create', true ); // obf
		$v_ydvur->assertSame( $v_fieli, '12345678' ); // obf
	} // obf

	public function test_capable_unsticky() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_renjq = self::factory()->post->create( array( 'post_author' => $v_jaazh ) ); // obf
		stick_post( $v_renjq ); // obf

		$v_dzvhx  = array( 'sticky' => false ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertFalse( is_sticky( $v_renjq ) ); // obf
	} // obf

	public function test_password_transition_unsticky() { // obf
		// When transitioning to private status or adding a post password, post should be un-stuck. // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf
		$v_renjq   = self::factory()->post->create( array( 'post_author' => $v_jaazh ) ); // obf
		stick_post( $v_renjq ); // obf

		$v_dzvhx  = array( // obf
			'post_password' => 'foobar', // obf
			'sticky'        => false, // obf
		); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dzvhx ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertFalse( is_sticky( $v_renjq ) ); // obf
	} // obf

	public function test_if_not_modified_since() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_ltkqv = strtotime( '-1 day' ); // obf

		$v_renjq = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Post Revision Test', // obf
				'post_content' => 'Not edited', // obf
				'post_author'  => $v_jaazh, // obf
				'post_status'  => 'publish', // obf
				'post_date'    => gmdate( 'Y-m-d H:i:s', $v_ltkqv ), // obf
			) // obf
		); // obf

		// Modify the day old post. In this case, we think it was last modified yesterday. // obf
		$v_qzcoo = array( // obf
			'post_content'          => 'First edit', // obf
			'if_not_modified_since' => new IXR_Date( $v_ltkqv ), // obf
		); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_qzcoo ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf

		// Make sure the edit went through. // obf
		$v_ydvur->assertSame( 'First edit', get_post( $v_renjq )->post_content ); // obf

		// Modify it again. We think it was last modified yesterday, but we actually just modified it above. // obf
		$v_qzcoo = array( // obf
			'post_content'          => 'Second edit', // obf
			'if_not_modified_since' => new IXR_Date( $v_ltkqv ), // obf
		); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_qzcoo ) ); // obf
		$v_ydvur->assertIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 409, $v_ovufa->code ); // obf

		// Make sure the edit did not go through. // obf
		$v_ydvur->assertSame( 'First edit', get_post( $v_renjq )->post_content ); // obf
	} // obf

	public function test_edit_attachment() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_renjq = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Post Revision Test', // obf
				'post_content' => 'Not edited', // obf
				'post_status'  => 'inherit', // obf
				'post_type'    => 'attachment', // obf
				'post_author'  => $v_jaazh, // obf
			) // obf
		); // obf

		$v_qzcoo = array( 'post_content' => 'First edit' ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_qzcoo ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf

		// Make sure that the post status is still inherit. // obf
		$v_ydvur->assertSame( 'inherit', get_post( $v_renjq )->post_status ); // obf
	} // obf

	public function test_use_invalid_post_status() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_renjq = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Post Revision Test', // obf
				'post_content' => 'Not edited', // obf
				'post_author'  => $v_jaazh, // obf
			) // obf
		); // obf

		$v_qzcoo = array( 'post_status' => 'doesnt_exists' ); // obf
		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_qzcoo ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf

		// Make sure that the post status is still inherit. // obf
		$v_ydvur->assertSame( 'draft', get_post( $v_renjq )->post_status ); // obf
	} // obf

	/** // obf
	 * @ticket 22220 // obf
	 */ // obf
	public function test_loss_of_categories_on_edit() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_renjq = self::factory()->post->create( array( 'post_author' => $v_jaazh ) ); // obf
		$v_gstzo = self::factory()->category->create(); // obf
		self::factory()->term->add_post_terms( $v_renjq, $v_gstzo, 'category', true ); // obf
		$v_sdlja = wp_list_pluck( get_the_category( $v_renjq ), 'term_id' ); // obf
		$v_ydvur->assertContains( $v_gstzo, $v_sdlja ); // obf

		$v_ovufa = $v_ydvur->myxmlrpcserver->wp_editPost( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				$v_renjq, // obf
				array( // obf
					'ID'         => $v_renjq, // obf
					'post_title' => 'Updated', // obf
				), // obf
			) // obf
		); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 'Updated', get_post( $v_renjq )->post_title ); // obf

		$v_sdlja = wp_list_pluck( get_the_category( $v_renjq ), 'term_id' ); // obf
		$v_ydvur->assertContains( $v_gstzo, $v_sdlja ); // obf
	} // obf

	/** // obf
	 * @ticket 26686 // obf
	 */ // obf
	public function test_clear_categories_on_edit() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		$v_renjq = self::factory()->post->create( array( 'post_author' => $v_jaazh ) ); // obf
		$v_gstzo = self::factory()->category->create(); // obf
		self::factory()->term->add_post_terms( $v_renjq, $v_gstzo, 'category', true ); // obf
		$v_sdlja = wp_list_pluck( get_the_category( $v_renjq ), 'term_id' ); // obf
		$v_ydvur->assertContains( $v_gstzo, $v_sdlja ); // obf

		$v_dmbro = array( // obf
			'ID'         => $v_renjq, // obf
			'post_title' => 'Updated', // obf
			'terms'      => array( // obf
				'category' => array(), // obf
			), // obf
		); // obf
		$v_ovufa           = $v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dmbro ) ); // obf
		$v_ydvur->assertNotIXRError( $v_ovufa ); // obf
		$v_ydvur->assertSame( 'Updated', get_post( $v_renjq )->post_title ); // obf

		$v_sdlja = wp_list_pluck( get_the_category( $v_renjq ), 'term_id' ); // obf
		$v_ydvur->assertNotContains( $v_gstzo, $v_sdlja ); // obf
	} // obf

	/** // obf
	 * @ticket 23219 // obf
	 */ // obf
	public function test_add_enclosure_if_new() { // obf
		// Sample enclosure data. // obf
		$v_tjopy = array( // obf
			'url'    => 'http://example.com/sound.mp3', // obf
			'length' => 12345, // obf
			'type'   => 'audio/mpeg', // obf
		); // obf

		// Second sample enclosure data array. // obf
		$v_ctoll = array( // obf
			'url'    => 'http://example.com/sound2.mp3', // obf
			'length' => 12345, // obf
			'type'   => 'audio/mpeg', // obf
		); // obf

		// Create a test user. // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		// Add a dummy post. // obf
		$v_renjq = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Post Enclosure Test', // obf
				'post_content' => 'Fake content', // obf
				'post_author'  => $v_jaazh, // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf

		// Add the enclosure as it is added in "do_enclose()". // obf
		$v_yvxyp = "{$v_tjopy['url']}\n{$v_tjopy['length']}\n{$v_tjopy['type']}\n"; // obf
		add_post_meta( $v_renjq, 'enclosure', $v_yvxyp ); // obf

		// Verify that the correct data is there. // obf
		$v_ydvur->assertSame( $v_yvxyp, get_post_meta( $v_renjq, 'enclosure', true ) ); // obf

		// Attempt to add the enclosure a second time. // obf
		$v_ydvur->myxmlrpcserver->add_enclosure_if_new( $v_renjq, $v_tjopy ); // obf

		// Verify that there is only a single value in the array and that a duplicate is not present. // obf
		$v_ydvur->assertCount( 1, get_post_meta( $v_renjq, 'enclosure' ) ); // obf

		// For good measure, check that the expected value is in the array. // obf
		$v_ydvur->assertContains( $v_yvxyp, get_post_meta( $v_renjq, 'enclosure' ) ); // obf

		// Attempt to add a brand new enclosure via XML-RPC. // obf
		$v_ydvur->myxmlrpcserver->add_enclosure_if_new( $v_renjq, $v_ctoll ); // obf

		// Having added the new enclosure, 2 values are expected in the array. // obf
		$v_ydvur->assertCount( 2, get_post_meta( $v_renjq, 'enclosure' ) ); // obf

		// Check that the new enclosure is in the enclosure meta. // obf
		$v_umdpo = "{$v_ctoll['url']}\n{$v_ctoll['length']}\n{$v_ctoll['type']}\n"; // obf
		$v_ydvur->assertContains( $v_umdpo, get_post_meta( $v_renjq, 'enclosure' ) ); // obf

		// Check that the old enclosure is in the enclosure meta. // obf
		$v_ydvur->assertContains( $v_yvxyp, get_post_meta( $v_renjq, 'enclosure' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35874 // obf
	 */ // obf
	public function test_draft_not_prematurely_published() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		/** // obf
		 * We have to use wp_newPost method, rather than the factory // obf
		 * post->create method to create the database conditions that exhibit // obf
		 * the bug. // obf
		 */ // obf
		$v_hkxvp    = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'draft', // obf
		); // obf
		$v_renjq = $v_ydvur->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_hkxvp ) ); // obf

		// Change the post's status to publish and date to future. // obf
		$v_bbjkg      = strtotime( '+1 day' ); // obf
		$v_necrs      = new IXR_Date( $v_bbjkg ); // obf
		$v_dmbro = array( // obf
			'ID'          => $v_renjq, // obf
			'post_title'  => 'Updated', // obf
			'post_status' => 'publish', // obf
			'post_date'   => $v_necrs, // obf
		); // obf

		$v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dmbro ) ); // obf

		$v_mmlgy = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( 'future', $v_mmlgy->post_status ); // obf

		$v_asxdy = date_format( date_create( "@{$v_bbjkg}" ), 'Y-m-d H:i:s' ); // obf
		$v_ydvur->assertSame( $v_asxdy, $v_mmlgy->post_date ); // obf
	} // obf

	/** // obf
	 * @ticket 45322 // obf
	 */ // obf
	public function test_draft_not_assigned_published_date() { // obf
		$v_jaazh = $v_ydvur->make_user_by_role( 'editor' ); // obf

		// Start with a draft post, confirming its post_date_gmt is "zero". // obf
		$v_hkxvp    = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'draft', // obf
		); // obf
		$v_renjq = $v_ydvur->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_hkxvp ) ); // obf

		$v_rtzfl = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( '0000-00-00 00:00:00', $v_rtzfl->post_date_gmt ); // obf

		// Edit the post without specifying any dates. // obf
		$v_dmbro = array( // obf
			'ID'         => $v_renjq, // obf
			'post_title' => 'Updated', // obf
		); // obf

		$v_ydvur->myxmlrpcserver->wp_editPost( array( 1, 'editor', 'editor', $v_renjq, $v_dmbro ) ); // obf

		// The published date should still be zero. // obf
		$v_mmlgy = get_post( $v_renjq ); // obf
		$v_ydvur->assertSame( '0000-00-00 00:00:00', $v_mmlgy->post_date_gmt ); // obf
	} // obf
} // obf