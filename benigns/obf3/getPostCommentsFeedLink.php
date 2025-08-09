

<?php // obf
/** // obf
 * @group link // obf
 * @covers ::get_post_comments_feed_link // obf
 */ // obf
class Tests_Link_GetPostCommentsFeedLink extends WP_UnitTestCase { // obf

	public function test_post_link() { // obf
		$v_hniqe = self::factory()->post->create(); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_hniqe ); // obf
		$v_qtadl = add_query_arg( // obf
			array( // obf
				'feed' => get_default_feed(), // obf
				'p'    => $v_hniqe, // obf
			), // obf
			home_url( '/' ) // obf
		); // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_post_pretty_link() { // obf
		$v_xtzll->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_hniqe = self::factory()->post->create(); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_hniqe ); // obf
		$v_qtadl = get_permalink( $v_hniqe ) . 'feed/'; // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_attachment_link() { // obf
		$v_hniqe       = self::factory()->post->create(); // obf
		$v_pvtsq = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_hniqe, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_pvtsq ); // obf
		$v_qtadl = add_query_arg( // obf
			array( // obf
				'feed' => get_default_feed(), // obf
				'p'    => $v_pvtsq, // obf
			), // obf
			home_url( '/' ) // obf
		); // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_attachment_pretty_link() { // obf
		$v_xtzll->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_hniqe       = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_pvtsq = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_hniqe, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_title'     => 'Burrito', // obf
			) // obf
		); // obf

		$v_zttfu = get_post( $v_hniqe ); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_pvtsq ); // obf
		$v_qtadl = get_permalink( $v_hniqe ) . 'burrito/feed/'; // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_attachment_no_name_pretty_link() { // obf
		$v_xtzll->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_hniqe       = self::factory()->post->create(); // obf
		$v_pvtsq = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_hniqe, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_pvtsq ); // obf
		$v_qtadl = get_permalink( $v_hniqe ) . 'attachment/' . $v_pvtsq . '/feed/'; // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_unattached_link() { // obf
		$v_pvtsq = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_pvtsq ); // obf
		$v_qtadl = add_query_arg( // obf
			array( // obf
				'feed'          => get_default_feed(), // obf
				'attachment_id' => $v_pvtsq, // obf
			), // obf
			home_url( '/' ) // obf
		); // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	public function test_unattached_pretty_link() { // obf
		$v_xtzll->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_pvtsq = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
			) // obf
		); // obf

		$v_bxgll     = get_post_comments_feed_link( $v_pvtsq ); // obf
		$v_qtadl = add_query_arg( 'attachment_id', $v_pvtsq, home_url( '/feed/' ) ); // obf

		$v_xtzll->assertSame( $v_qtadl, $v_bxgll ); // obf
	} // obf

	/** // obf
	 * @ticket 52814 // obf
	 */ // obf
	public function test_nonexistent_page() { // obf
		$v_xtzll->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		// Use the largest integer to ensure the post does not exist. // obf
		$v_hniqe = PHP_INT_MAX; // obf
		$v_bxgll    = get_post_comments_feed_link( $v_hniqe ); // obf

		$v_xtzll->assertEmpty( $v_bxgll ); // obf
	} // obf
} // obf