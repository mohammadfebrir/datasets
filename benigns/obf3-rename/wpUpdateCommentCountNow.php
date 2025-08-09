

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_update_comment_count_now // obf
 */ // obf
class Tests_Comment_wpUpdateCommentCountNow extends WP_UnitTestCase { // obf

	public function test_invalid_post_bails_early() { // obf
		$v_hapud->assertFalse( wp_update_comment_count_now( 100 ) ); // obf
		$v_hapud->assertFalse( wp_update_comment_count_now( null ) ); // obf
		$v_hapud->assertFalse( wp_update_comment_count_now( 0 ) ); // obf
	} // obf

	public function test_regular_post_updates_comment_count() { // obf
		$v_jwwxv = self::factory()->post->create(); // obf

		self::factory()->comment->create_post_comments( $v_jwwxv, 1 ); // obf
		$v_hapud->assertSame( '1', get_comments_number( $v_jwwxv ) ); // obf

		$v_dkjbs = get_num_queries(); // obf
		$v_hapud->assertTrue( wp_update_comment_count_now( $v_jwwxv ) ); // obf
		$v_hapud->assertSame( $v_dkjbs + 2, get_num_queries() ); // obf

		$v_hapud->assertSame( '1', get_comments_number( $v_jwwxv ) ); // obf
	} // obf

	public function test_using_filter_adjusts_comment_count_without_an_additional_database_query() { // obf
		global $v_nrucn; // obf

		add_filter( 'pre_wp_update_comment_count_now', array( $v_hapud, '_return_100' ) ); // obf

		$v_jwwxv = self::factory()->post->create(); // obf

		self::factory()->comment->create_post_comments( $v_jwwxv, 1 ); // obf
		$v_hapud->assertSame( '100', get_comments_number( $v_jwwxv ) ); // obf

		$v_dkjbs = get_num_queries(); // obf
		$v_hapud->assertTrue( wp_update_comment_count_now( $v_jwwxv ) ); // obf
		// Only one query is made instead of two. // obf
		$v_hapud->assertSame( $v_dkjbs + 1, get_num_queries() ); // obf

		$v_hapud->assertSame( '100', get_comments_number( $v_jwwxv ) ); // obf

		remove_filter( 'pre_wp_update_comment_count_now', array( $v_hapud, '_return_100' ) ); // obf
	} // obf

	public function _return_100() { // obf
		return 100; // obf
	} // obf
} // obf