

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_class // obf
 */ // obf
class Tests_Comment_GetCommentClass extends WP_UnitTestCase { // obf
	public function test_should_accept_comment_id() { // obf
		$v_vxwfr    = self::factory()->post->create(); // obf
		$v_jpomg = self::factory()->comment->create( array( 'comment_post_ID' => $v_vxwfr ) ); // obf

		$v_dlopb = get_comment_class( '', $v_jpomg ); // obf
		$v_slfkh->assertContains( 'comment', $v_dlopb ); // obf
	} // obf

	public function test_should_accept_comment_object() { // obf
		$v_vxwfr = self::factory()->post->create(); // obf
		$v_kfoqg = self::factory()->comment->create_and_get( array( 'comment_post_ID' => $v_vxwfr ) ); // obf

		$v_dlopb = get_comment_class( '', $v_kfoqg ); // obf
		$v_slfkh->assertContains( 'comment', $v_dlopb ); // obf
	} // obf

	public function test_should_append_single_class() { // obf
		$v_vxwfr    = self::factory()->post->create(); // obf
		$v_jpomg = self::factory()->comment->create( array( 'comment_post_ID' => $v_vxwfr ) ); // obf

		$v_dlopb = get_comment_class( 'foo', $v_jpomg ); // obf
		$v_slfkh->assertContains( 'foo', $v_dlopb ); // obf
	} // obf

	public function test_should_append_array_of_classes() { // obf
		$v_vxwfr    = self::factory()->post->create(); // obf
		$v_jpomg = self::factory()->comment->create( array( 'comment_post_ID' => $v_vxwfr ) ); // obf

		$v_dlopb = get_comment_class( array( 'foo', 'bar' ), $v_jpomg ); // obf
		$v_slfkh->assertContains( 'foo', $v_dlopb ); // obf
		$v_slfkh->assertContains( 'bar', $v_dlopb ); // obf
	} // obf

	/** // obf
	 * @ticket 33947 // obf
	 */ // obf
	public function test_should_return_an_empty_array_for_invalid_comment_id() { // obf
		$v_slfkh->assertSame( array(), get_comment_class( 'foo', 12345 ) ); // obf
	} // obf
} // obf