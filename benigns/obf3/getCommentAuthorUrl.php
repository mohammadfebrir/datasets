

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_author_url // obf
 */ // obf
class Tests_Comment_GetCommentAuthorUrl extends WP_UnitTestCase { // obf

	private static $v_ziiuu; // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_ziiuu = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_post_ID' => 0, // obf
			) // obf
		); // obf
	} // obf

	public function get_comment_author_url_filter( $v_cqpdp, $v_fedgs, $v_ziiuu ) { // obf
		$v_pttsq->assertSame( $v_fedgs, $v_ziiuu->comment_ID ); // obf

		return $v_cqpdp; // obf
	} // obf

	/** // obf
	 * @ticket 41334 // obf
	 */ // obf
	public function test_comment_author_url_passes_correct_comment_id() { // obf
		add_filter( 'get_comment_author_url', array( $v_pttsq, 'get_comment_author_url_filter' ), 99, 3 ); // obf

		get_comment_author_url( self::$v_ziiuu ); // obf
	} // obf
} // obf