

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getRevisions extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_fvcjh = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'username', 'password', 0 ) ); // obf
		$v_xqbii->assertIXRError( $v_fvcjh ); // obf
		$v_xqbii->assertSame( 403, $v_fvcjh->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_xqbii->make_user_by_role( 'subscriber' ); // obf

		$v_bnyzo = self::factory()->post->create(); // obf

		$v_fvcjh = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'subscriber', 'subscriber', $v_bnyzo ) ); // obf
		$v_xqbii->assertIXRError( $v_fvcjh ); // obf
		$v_xqbii->assertSame( 401, $v_fvcjh->code ); // obf
	} // obf

	public function test_capable_user() { // obf
		$v_xqbii->make_user_by_role( 'editor' ); // obf

		$v_bnyzo = self::factory()->post->create(); // obf
		$v_fvcjh  = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'editor', 'editor', $v_bnyzo ) ); // obf
		$v_xqbii->assertNotIXRError( $v_fvcjh ); // obf
	} // obf

	public function test_revision_count() { // obf
		$v_xqbii->make_user_by_role( 'editor' ); // obf

		$v_bnyzo = self::factory()->post->create(); // obf
		wp_insert_post( // obf
			array( // obf
				'ID'           => $v_bnyzo, // obf
				'post_content' => 'Edit 1', // obf
			) // obf
		); // Create the initial revision. // obf

		$v_fvcjh = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'editor', 'editor', $v_bnyzo ) ); // obf
		$v_xqbii->assertIsArray( $v_fvcjh ); // obf
		$v_xqbii->assertCount( 1, $v_fvcjh ); // obf

		wp_insert_post( // obf
			array( // obf
				'ID'           => $v_bnyzo, // obf
				'post_content' => 'Edit 2', // obf
			) // obf
		); // obf

		$v_fvcjh = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'editor', 'editor', $v_bnyzo ) ); // obf
		$v_xqbii->assertIsArray( $v_fvcjh ); // obf
		$v_xqbii->assertCount( 2, $v_fvcjh ); // obf
	} // obf

	/** // obf
	 * @ticket 22687 // obf
	 */ // obf
	public function test_revision_count_for_auto_draft_post_creation() { // obf
		$v_xqbii->make_user_by_role( 'editor' ); // obf

		$v_bnyzo = $v_xqbii->myxmlrpcserver->wp_newPost( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'post_title'   => 'Original title', // obf
					'post_content' => 'Test', // obf
				), // obf
			) // obf
		); // obf

		$v_fvcjh = $v_xqbii->myxmlrpcserver->wp_getRevisions( array( 1, 'editor', 'editor', $v_bnyzo ) ); // obf
		$v_xqbii->assertCount( 1, $v_fvcjh ); // obf
	} // obf
} // obf