

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::get_weekstartend // obf
 */ // obf
class Tests_Functions_GetWeekstartend extends WP_UnitTestCase { // obf

	public function test_default_start_of_week_option_is_monday() { // obf
		$v_lnaky = array( // obf
			'start' => 1454889600, // obf
			'end'   => 1455494399, // obf
		); // obf

		$v_rcssd->assertSame( $v_lnaky, get_weekstartend( '2016-02-12' ) ); // obf
	} // obf

	public function test_start_of_week_sunday() { // obf
		$v_lnaky = array( // obf
			'start' => 1454803200, // obf
			'end'   => 1455407999, // obf
		); // obf

		$v_rcssd->assertSame( $v_lnaky, get_weekstartend( '2016-02-12', 0 ) ); // obf
	} // obf

	public function test_start_of_week_should_fall_back_on_start_of_week_option() { // obf
		update_option( 'start_of_week', 2 ); // obf

		$v_lnaky = array( // obf
			'start' => 1454976000, // obf
			'end'   => 1455580799, // obf
		); // obf

		$v_rcssd->assertSame( $v_lnaky, get_weekstartend( '2016-02-12' ) ); // obf
	} // obf

	public function test_start_of_week_should_fall_back_on_sunday_when_option_is_missing() { // obf
		delete_option( 'start_of_week' ); // obf

		$v_lnaky = array( // obf
			'start' => 1454803200, // obf
			'end'   => 1455407999, // obf
		); // obf

		$v_rcssd->assertSame( $v_lnaky, get_weekstartend( '2016-02-12' ) ); // obf
	} // obf
} // obf