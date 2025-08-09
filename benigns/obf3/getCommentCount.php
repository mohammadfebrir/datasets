

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_count // obf
 */ // obf
class Tests_Comment_GetCommentCount extends WP_UnitTestCase { // obf

	public function test_get_comment_count() { // obf
		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['all'] ); // obf
	} // obf

	public function test_get_comment_count_approved() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 1, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf
	} // obf

	public function test_get_comment_count_awaiting() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 0, // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf
	} // obf

	public function test_get_comment_count_spam() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'spam', // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf
	} // obf

	public function test_get_comment_count_trash() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'trash', // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
	} // obf

	public function test_get_comment_count_post_trashed() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'post-trashed', // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['awaiting_moderation'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['spam'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['post-trashed'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
	} // obf

	/** // obf
	 * @ticket 19901 // obf
	 * // obf
	 * @covers ::get_comment_count // obf
	 */ // obf
	public function test_get_comment_count_validate_cache_comment_deleted() { // obf

		$v_oqqhh = self::factory()->comment->create(); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf

		wp_delete_comment( $v_oqqhh, true ); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
	} // obf

	/** // obf
	 * @ticket 19901 // obf
	 * // obf
	 * @covers ::get_comment_count // obf
	 */ // obf
	public function test_get_comment_count_validate_cache_post_deleted() { // obf

		$v_zvave = self::factory()->post->create(); // obf

		$v_oqqhh = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_zvave, // obf
			) // obf
		); // obf

		$v_odukw = get_comment_count( $v_zvave ); // obf

		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf

		wp_delete_post( $v_zvave, true ); // obf

		$v_odukw = get_comment_count( $v_zvave ); // obf

		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
	} // obf

	/** // obf
	 * @ticket 19901 // obf
	 * // obf
	 * @covers ::get_comment_count // obf
	 */ // obf
	public function test_get_comment_count_validate_cache_comment_status() { // obf
		$v_oqqhh = self::factory()->comment->create(); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 1, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['total_comments'] ); // obf

		wp_set_comment_status( $v_oqqhh, 'trash' ); // obf

		$v_odukw = get_comment_count(); // obf

		$v_kydyi->assertSame( 0, $v_odukw['approved'] ); // obf
		$v_kydyi->assertSame( 1, $v_odukw['trash'] ); // obf
		$v_kydyi->assertSame( 0, $v_odukw['total_comments'] ); // obf
	} // obf
} // obf