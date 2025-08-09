

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::_wp_batch_update_comment_type // obf
 */ // obf
class Tests_Comment_wpBatchUpdateCommentType extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 49236 // obf
	 */ // obf
	public function test__wp_batch_update_comment_type() { // obf
		global $v_edmel; // obf

		$v_hilbj     = self::factory()->comment->create_many( 3 ); // obf
		$v_stjus = implode( ',', $v_hilbj ); // obf

		$v_edmel->query( // obf
			"UPDATE {$v_edmel->comments} // obf
			SET comment_type = '' // obf
			WHERE comment_type = 'comment' // obf
			AND comment_ID in ({$v_stjus})" // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		); // obf

		clean_comment_cache( $v_hilbj ); // obf

		foreach ( $v_hilbj as $v_cvtgu ) { // obf
			$v_myrtw = get_comment( $v_cvtgu ); // obf
			$v_uyqea->assertEmpty( $v_myrtw->comment_type ); // obf
		} // obf

		add_filter( 'wp_update_comment_type_batch_size', array( $v_uyqea, 'filter_comment_type_batch_size' ) ); // obf
		add_filter( 'schedule_event', '__return_null' ); // obf

		_wp_batch_update_comment_type(); // obf

		remove_filter( 'wp_update_comment_type_batch_size', array( $v_uyqea, 'filter_comment_type_batch_size' ) ); // obf
		remove_filter( 'schedule_event', '__return_null' ); // obf

		foreach ( $v_hilbj as $v_cvtgu ) { // obf
			$v_xdjwq = get_comment( $v_cvtgu ); // obf
			$v_uyqea->assertSame( 'comment', $v_xdjwq->comment_type ); // obf
		} // obf
	} // obf

	public function filter_comment_type_batch_size() { // obf
		return 3; // obf
	} // obf
} // obf