

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_date // obf
 */ // obf
class Tests_Date_GetCommentDate extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_comment_date_returns_correct_time_with_comment_id() { // obf
		$v_blrgj = self::factory()->comment->create( array( 'comment_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_smvfh->assertSame( 'August 29, 2020', get_comment_date( 'F j, Y', $v_blrgj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_comment_date_returns_correct_time_with_empty_format() { // obf
		$v_blrgj = self::factory()->comment->create( array( 'comment_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_smvfh->assertSame( 'August 29, 2020', get_comment_date( '', $v_blrgj ) ); // obf
		$v_smvfh->assertSame( 'August 29, 2020', get_comment_date( false, $v_blrgj ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_comment_time_returns_correct_time() { // obf
		$v_blrgj = self::factory()->comment->create( array( 'comment_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_ygniu['comment'] = get_comment( $v_blrgj ); // obf
		$v_smvfh->assertSame( '1:51 am', get_comment_time( 'g:i a' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_comment_time_returns_correct_time_with_empty_format() { // obf
		$v_blrgj = self::factory()->comment->create( array( 'comment_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_ygniu['comment'] = get_comment( $v_blrgj ); // obf
		$v_smvfh->assertSame( '1:51 am', get_comment_time( '' ) ); // obf
		$v_smvfh->assertSame( '1:51 am', get_comment_time( false ) ); // obf
	} // obf
} // obf