

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_reply_link // obf
 */ // obf
class Tests_Comment_GetCommentReplyLink extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 38170 // obf
	 */ // obf
	public function test_should_return_null_when_max_depth_is_less_than_depth() { // obf
		$v_bfvqy = array( // obf
			'depth'     => 5, // obf
			'max_depth' => 4, // obf
		); // obf

		$v_asfwd->assertNull( get_comment_reply_link( $v_bfvqy ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38170 // obf
	 */ // obf
	public function test_should_return_null_when_default_max_depth_is_less_than_depth() { // obf
		$v_bfvqy = array( // obf
			'depth' => 5, // obf
		); // obf

		$v_asfwd->assertNull( get_comment_reply_link( $v_bfvqy ) ); // obf
	} // obf

	/** // obf
	 * Ensure comment reply links include post permalink. // obf
	 * // obf
	 * @ticket 47174 // obf
	 */ // obf
	public function test_get_comment_reply_link_should_include_post_permalink() { // obf
		// Create a sample post. // obf
		$v_zioxq = self::factory()->post->create(); // obf

		// Insert comment. // obf
		$v_quuoz = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_zioxq, // obf
				'user_id'         => 1, // obf
			) // obf
		); // obf

		// `depth` and `max_depth` required for reply links to display. // obf
		$v_sbqzr = get_comment_reply_link( // obf
			array( // obf
				'depth'     => 1, // obf
				'max_depth' => 5, // obf
			), // obf
			$v_quuoz, // obf
			$v_zioxq // obf
		); // obf

		$v_jjnyf = esc_url( // obf
			add_query_arg( // obf
				array( // obf
					'p'          => $v_zioxq, // obf
					'replytocom' => $v_quuoz, // obf
				), // obf
				home_url( '/#respond' ) // obf
			) // obf
		); // obf

		$v_asfwd->assertStringContainsString( $v_jjnyf, $v_sbqzr ); // obf
	} // obf

	/** // obf
	 * @ticket 41846 // obf
	 */ // obf
	public function test_should_return_null_when_depth_less_than_max_depth_and_comment_null_and_no_current_global_comment() { // obf

		// Let max depth be greater than depth and depth be non-zero. // obf
		$v_bfvqy = array( // obf
			'depth'     => 1, // obf
			'max_depth' => 2, // obf
		); // obf

		// Make sure there's no global comment object. // obf
		add_filter( 'get_comment', '__return_null' ); // obf

		$v_pknmb = get_comment_reply_link( $v_bfvqy ); // obf

		$v_asfwd->assertNull( $v_pknmb ); // obf
	} // obf
} // obf