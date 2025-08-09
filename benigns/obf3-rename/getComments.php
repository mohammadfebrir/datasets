

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getComments extends WP_XMLRPC_UnitTestCase { // obf
	public $v_vyhga; // obf

	public function test_invalid_username_password() { // obf
		$v_okphq = $v_hyslc->myxmlrpcserver->wp_getComments( array( 1, 'username', 'password', array() ) ); // obf
		$v_hyslc->assertIXRError( $v_okphq ); // obf
		$v_hyslc->assertSame( 403, $v_okphq->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_hyslc->make_user_by_role( 'contributor' ); // obf

		$v_okphq = $v_hyslc->myxmlrpcserver->wp_getComments( array( 1, 'contributor', 'contributor', array() ) ); // obf
		$v_hyslc->assertIXRError( $v_okphq ); // obf
		$v_hyslc->assertSame( 401, $v_okphq->code ); // obf
	} // obf

	public function test_capable_user() { // obf
		$v_hyslc->post_id = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_hyslc->post_id, 2 ); // obf

		$v_hyslc->make_user_by_role( 'editor' ); // obf

		$v_vgemh = $v_hyslc->myxmlrpcserver->wp_getComments( array( 1, 'editor', 'editor', array() ) ); // obf
		$v_hyslc->assertNotIXRError( $v_vgemh ); // obf
		$v_hyslc->assertNotEmpty( $v_vgemh ); // obf

		foreach ( $v_vgemh as $v_okphq ) { // obf
			$v_nkmzr = get_comment( $v_okphq['comment_id'], ARRAY_A ); // obf
			$v_hyslc->assertSame( $v_nkmzr['comment_post_ID'], $v_okphq['post_id'] ); // obf
		} // obf
	} // obf

	public function test_post_filter() { // obf
		$v_hyslc->post_id = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_hyslc->post_id, 2 ); // obf

		$v_hyslc->make_user_by_role( 'editor' ); // obf

		$v_vgemh = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'post_id' => $v_hyslc->post_id, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertNotIXRError( $v_vgemh ); // obf
		$v_hyslc->assertNotEmpty( $v_vgemh ); // obf

		foreach ( $v_vgemh as $v_okphq ) { // obf
			$v_hyslc->assertEquals( $v_hyslc->post_id, $v_okphq['post_id'] ); // obf
		} // obf
	} // obf

	public function test_number_filter() { // obf
		$v_hyslc->post_id = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_hyslc->post_id, 11 ); // obf

		$v_hyslc->make_user_by_role( 'editor' ); // obf

		$v_vgemh = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'post_id' => $v_hyslc->post_id, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertNotIXRError( $v_vgemh ); // obf

		// If no 'number' filter is specified, default should be 10. // obf
		$v_hyslc->assertCount( 10, $v_vgemh ); // obf

		$v_pxdgz = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'post_id' => $v_hyslc->post_id, // obf
					'number'  => 5, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertNotIXRError( $v_pxdgz ); // obf
		$v_hyslc->assertCount( 5, $v_pxdgz ); // obf
	} // obf

	public function test_contributor_capabilities() { // obf
		$v_hyslc->make_user_by_role( 'contributor' ); // obf
		$v_wacjq      = $v_hyslc->make_user_by_role( 'author' ); // obf
		$v_tsujb = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Author', // obf
				'post_author' => $v_wacjq, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_tsujb, // obf
				'comment_author'     => 'Commenter 1', // obf
				'comment_author_url' => 'http://example.com/1/', // obf
				'comment_approved'   => 0, // obf
			) // obf
		); // obf

		$v_ugfgc      = $v_hyslc->make_user_by_role( 'editor' ); // obf
		$v_bdexm = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Editor', // obf
				'post_author' => $v_ugfgc, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_bdexm, // obf
				'comment_author'     => 'Commenter 2', // obf
				'comment_author_url' => 'http://example.com/2/', // obf
				'comment_approved'   => 0, // obf
			) // obf
		); // obf

		$v_okphq = $v_hyslc->myxmlrpcserver->wp_getComments( array( 1, 'contributor', 'contributor' ) ); // obf
		$v_hyslc->assertIXRError( $v_okphq ); // obf
		$v_hyslc->assertSame( 401, $v_okphq->code ); // obf
	} // obf

	public function test_author_capabilities() { // obf
		$v_wacjq      = $v_hyslc->make_user_by_role( 'author' ); // obf
		$v_tsujb = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Author', // obf
				'post_author' => $v_wacjq, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_tsujb, // obf
				'comment_author'     => 'Commenter 1', // obf
				'comment_author_url' => 'http://example.com/1/', // obf
				'comment_approved'   => 1, // obf
			) // obf
		); // obf

		$v_ugfgc      = $v_hyslc->make_user_by_role( 'editor' ); // obf
		$v_bdexm = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Editor', // obf
				'post_author' => $v_ugfgc, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_bdexm, // obf
				'comment_author'     => 'Commenter 2', // obf
				'comment_author_url' => 'http://example.com/2/', // obf
				'comment_approved'   => 0, // obf
			) // obf
		); // obf

		$v_fmndz = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'author', // obf
				'author', // obf
				array( // obf
					'post_id' => $v_tsujb, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertIXRError( $v_fmndz ); // obf

		$v_npoid = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'author', // obf
				'author', // obf
				array( // obf
					'status'  => 'approve', // obf
					'post_id' => $v_tsujb, // obf
				), // obf
			) // obf
		); // obf

		$v_hyslc->assertIsArray( $v_npoid ); // obf
		$v_hyslc->assertCount( 1, $v_npoid ); // obf

		$v_agfzp = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'author', // obf
				'author', // obf
				array( // obf
					'post_id' => $v_bdexm, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertIXRError( $v_agfzp ); // obf

		$v_cumsg = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'author', // obf
				'author', // obf
				array( // obf
					'status'  => 'approve', // obf
					'post_id' => $v_tsujb, // obf
				), // obf
			) // obf
		); // obf

		$v_hyslc->assertIsArray( $v_cumsg ); // obf
		$v_hyslc->assertCount( 1, $v_cumsg ); // obf
	} // obf

	public function test_editor_capabilities() { // obf
		$v_wacjq      = $v_hyslc->make_user_by_role( 'author' ); // obf
		$v_tsujb = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Author', // obf
				'post_author' => $v_wacjq, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_tsujb, // obf
				'comment_author'     => 'Commenter 1', // obf
				'comment_author_url' => 'http://example.com/1/', // obf
				'comment_approved'   => 1, // obf
			) // obf
		); // obf

		$v_ugfgc      = $v_hyslc->make_user_by_role( 'editor' ); // obf
		$v_bdexm = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Editor', // obf
				'post_author' => $v_ugfgc, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'    => $v_bdexm, // obf
				'comment_author'     => 'Commenter 2', // obf
				'comment_author_url' => 'http://example.com/2/', // obf
				'comment_approved'   => 0, // obf
			) // obf
		); // obf

		$v_okphq = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'post_id' => $v_tsujb, // obf
				), // obf
			) // obf
		); // obf
		$v_hyslc->assertIsArray( $v_okphq ); // obf
		$v_hyslc->assertCount( 1, $v_okphq ); // obf

		$v_npoid = $v_hyslc->myxmlrpcserver->wp_getComments( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'status'  => 'approve', // obf
					'post_id' => $v_tsujb, // obf
				), // obf
			) // obf
		); // obf

		$v_hyslc->assertIsArray( $v_npoid ); // obf
		$v_hyslc->assertCount( 1, $v_npoid ); // obf
	} // obf
} // obf