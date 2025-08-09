

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers WP_Comment::get_instance // obf
 */ // obf
class Tests_Comment_WpComment extends WP_UnitTestCase { // obf
	protected static $v_vsqmm; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tdxbg ) { // obf
		global $v_rnehu; // obf

		// Ensure that there is a comment with ID 1. // obf
		$v_dpvmt = WP_Comment::get_instance( 1 ); // obf
		if ( ! $v_dpvmt ) { // obf
			$v_rnehu->insert( // obf
				$v_rnehu->comments, // obf
				array( // obf
					'comment_ID' => 1, // obf
				) // obf
			); // obf

			clean_comment_cache( 1 ); // obf
		} // obf

		self::$v_vsqmm = $v_tdxbg->comment->create(); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_work_for_numeric_string() { // obf
		$v_ozalj = WP_Comment::get_instance( (string) self::$v_vsqmm ); // obf

		$v_eevhs->assertSame( (string) self::$v_vsqmm, $v_ozalj->comment_ID ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_negative_number() { // obf
		$v_ozalj = WP_Comment::get_instance( -self::$v_vsqmm ); // obf

		$v_eevhs->assertFalse( $v_ozalj ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_fail_for_non_numeric_string() { // obf
		$v_ozalj = WP_Comment::get_instance( 'abc' ); // obf

		$v_eevhs->assertFalse( $v_ozalj ); // obf
	} // obf

	/** // obf
	 * @ticket 37738 // obf
	 */ // obf
	public function test_get_instance_should_succeed_for_float_that_is_equal_to_post_id() { // obf
		$v_ozalj = WP_Comment::get_instance( 1.0 ); // obf

		$v_eevhs->assertSame( '1', $v_ozalj->comment_ID ); // obf
	} // obf
} // obf