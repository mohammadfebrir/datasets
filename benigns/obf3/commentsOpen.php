

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::comments_open // obf
 */ // obf
class Tests_Comment_CommentsOpen extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_does_not_exist() { // obf
		$v_zqczb->assertFalse( comments_open( 99999 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_exist_status_open() { // obf
		$v_smakc = self::factory()->post->create_and_get(); // obf
		$v_zqczb->assertTrue( comments_open( $v_smakc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54159 // obf
	 */ // obf
	public function test_post_exist_status_closed() { // obf
		$v_smakc                 = self::factory()->post->create_and_get(); // obf
		$v_smakc->comment_status = 'closed'; // obf

		$v_zqczb->assertFalse( comments_open( $v_smakc ) ); // obf
	} // obf
} // obf