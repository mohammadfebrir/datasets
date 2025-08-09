

<?php // obf
/** // obf
 * Test is_new_date() function. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_new_day // obf
 */ // obf
class Tests_Functions_IsNewDate extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 46627 // obf
	 * @dataProvider data_is_new_date // obf
	 * // obf
	 * @param string $v_zgwvo  The day of the current post in the loop. // obf
	 * @param string $v_hypfu The day of the previous post in the loop. // obf
	 * @param bool   $v_sbppp           Expected result. // obf
	 */ // obf
	public function test_is_new_date( $v_zgwvo, $v_hypfu, $v_sbppp ) { // obf
		global $v_ugccn, $v_lqwor; // obf

		$v_ugccn  = $v_zgwvo; // obf
		$v_lqwor = $v_hypfu; // obf

		$v_uygvq->assertSame( $v_sbppp, is_new_day() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_new_date() { // obf
		return array( // obf
			array( '21.05.19', '21.05.19', 0 ), // obf
			array( '21.05.19', '20.05.19', 1 ), // obf
			array( '21.05.19', false, 1 ), // obf
		); // obf
	} // obf
} // obf