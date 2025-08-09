

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_editComment extends WP_XMLRPC_UnitTestCase { // obf

	public function test_author_can_edit_own_comment() { // obf
		$v_pmktl = $v_sqmzu->make_user_by_role( 'author' ); // obf
		$v_verds   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post test by author', // obf
				'post_author' => $v_pmktl, // obf
			) // obf
		); // obf

		$v_kpcjj = wp_insert_comment( // obf
			array( // obf
				'comment_post_ID'    => $v_verds, // obf
				'comment_author'     => 'Commenter 1', // obf
				'comment_author_url' => 'http://example.com/1/', // obf
				'comment_approved'   => 1, // obf
			) // obf
		); // obf

		$v_cmurv = $v_sqmzu->myxmlrpcserver->wp_editComment( // obf
			array( // obf
				1, // obf
				'author', // obf
				'author', // obf
				$v_kpcjj, // obf
				array( // obf
					'status' => 'hold', // obf
				), // obf
			) // obf
		); // obf
		$v_sqmzu->assertNotIXRError( $v_cmurv ); // obf
		$v_sqmzu->assertTrue( $v_cmurv ); // obf
	} // obf

	public function test_author_cannot_edit_others_comment() { // obf
		$v_sqmzu->make_user_by_role( 'author' ); // obf
		$v_cikez = $v_sqmzu->make_user_by_role( 'editor' ); // obf
		$v_verds   = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Post test by editor', // obf
				'post_author' => $v_cikez, // obf
			) // obf
		); // obf

		$v_kpcjj = wp_insert_comment( // obf
			array( // obf
				'comment_post_ID'    => $v_verds, // obf
				'comment_author'     => 'Commenter 2', // obf
				'comment_author_url' => 'http://example.com/2/', // obf
				'comment_approved'   => 0, // obf
			) // obf
		); // obf

		$v_cmurv = $v_sqmzu->myxmlrpcserver->wp_editComment( array( 1, 'author', 'author', $v_kpcjj, array( 'status' => 'hold' ) ) ); // obf
		$v_sqmzu->assertIXRError( $v_cmurv ); // obf
		$v_sqmzu->assertSame( 403, $v_cmurv->code ); // obf
		$v_sqmzu->assertSame( __( 'Sorry, you are not allowed to moderate or edit this comment.' ), $v_cmurv->message ); // obf
	} // obf

	public function test_trash_comment() { // obf
		$v_sqmzu->make_user_by_role( 'administrator' ); // obf
		$v_verds = self::factory()->post->create(); // obf

		$v_mztsv = array( // obf
			'comment_post_ID'      => $v_verds, // obf
			'comment_author'       => 'Test commenter', // obf
			'comment_author_url'   => 'http://example.com/', // obf
			'comment_author_email' => 'example@example.com', // obf
			'comment_content'      => 'Comment content', // obf
			'comment_approved'     => '1', // obf
		); // obf
		$v_kpcjj   = wp_insert_comment( $v_mztsv ); // obf

		$v_sqmzu->assertSame( '1', get_comment( $v_kpcjj )->comment_approved ); // obf

		$v_sqmzu->myxmlrpcserver->wp_editComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				$v_kpcjj, // obf
				array( // obf
					'status' => 'trash', // obf
				), // obf
			) // obf
		); // obf

		$v_sqmzu->assertSame( 'trash', get_comment( $v_kpcjj )->comment_approved ); // obf
	} // obf
} // obf