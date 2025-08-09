

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group post // obf
 * // obf
 * @covers ::get_the_date // obf
 */ // obf
class Tests_Date_GetTheDate extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 13771 // obf
	 */ // obf
	public function test_get_the_date_returns_correct_time_with_post_id() { // obf
		$v_kwyvy = self::factory()->post->create( array( 'post_date' => '2014-03-01 16:35:00' ) ); // obf

		$v_xqcrh->assertSame( 'March 1, 2014', get_the_date( 'F j, Y', $v_kwyvy ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_the_date_returns_false_with_null_or_non_existing_post() { // obf
		$v_xqcrh->assertFalse( get_the_date() ); // obf
		$v_xqcrh->assertFalse( get_the_date( 'F j, Y h:i:s' ) ); // obf
		$v_xqcrh->assertFalse( get_the_date( '', 9 ) ); // obf
		$v_xqcrh->assertFalse( get_the_date( 'F j, Y h:i:s', 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_date_returns_correct_time_with_empty_format() { // obf
		$v_kwyvy = self::factory()->post->create( array( 'post_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_xqcrh->assertSame( 'August 29, 2020', get_the_date( '', $v_kwyvy ) ); // obf
		$v_xqcrh->assertSame( 'August 29, 2020', get_the_date( false, $v_kwyvy ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_the_time_returns_correct_time_with_post_id() { // obf
		$v_kwyvy = self::factory()->post->create( array( 'post_date' => '2014-03-01 16:35:00' ) ); // obf

		$v_xqcrh->assertSame( '16:35:00', get_the_time( 'H:i:s', $v_kwyvy ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28310 // obf
	 */ // obf
	public function test_get_the_time_returns_false_with_null_or_non_existing_post() { // obf
		$v_xqcrh->assertFalse( get_the_time() ); // obf
		$v_xqcrh->assertFalse( get_the_time( 'h:i:s' ) ); // obf
		$v_xqcrh->assertFalse( get_the_time( '', 9 ) ); // obf
		$v_xqcrh->assertFalse( get_the_time( 'h:i:s', 9 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51184 // obf
	 */ // obf
	public function test_get_the_time_returns_correct_time_with_empty_format() { // obf
		$v_kwyvy = self::factory()->post->create( array( 'post_date' => '2020-08-29 01:51:00' ) ); // obf

		$v_xqcrh->assertSame( '1:51 am', get_the_time( '', $v_kwyvy ) ); // obf
		$v_xqcrh->assertSame( '1:51 am', get_the_time( false, $v_kwyvy ) ); // obf
	} // obf
} // obf