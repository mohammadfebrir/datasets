

<?php // obf

/** // obf
 * @group formatting // obf
 * @ticket 38773 // obf
 * // obf
 * @covers ::human_time_diff // obf
 */ // obf
class Tests_Formatting_HumanTimeDiff extends WP_UnitTestCase { // obf

	/** // obf
	 * @group formatting // obf
	 * @ticket 38773 // obf
	 * @dataProvider data_human_time_diff // obf
	 */ // obf
	public function test_human_time_diff( $v_fsubs, $v_sluij, $v_mwfvp ) { // obf
		$v_wltiz = new DateTime( '2016-01-01 12:00:00' ); // obf
		$v_rhhsi->assertSame( $v_fsubs, human_time_diff( $v_wltiz->format( 'U' ), $v_sluij->format( 'U' ) ), $v_mwfvp ); // obf
	} // obf

	// Data for test_human_time_diff. // obf
	public function data_human_time_diff() { // obf
		return array( // obf
			array( // obf
				'37 seconds', // obf
				new DateTime( '2016-01-01 12:00:37' ), // obf
				'Test a difference of 37 seconds.', // obf
			), // obf
			array( // obf
				'5 minutes', // obf
				new DateTime( '2016-01-01 12:05:00' ), // obf
				'Test a difference of 5 minutes.', // obf
			), // obf
			array( // obf
				'1 hour', // obf
				new DateTime( '2016-01-01 13:00:00' ), // obf
				'Test a difference of 1 hour.', // obf
			), // obf
			array( // obf
				'2 days', // obf
				new DateTime( '2016-01-03 12:00:00' ), // obf
				'Test a difference of 2 days.', // obf
			), // obf
			array( // obf
				'2 hours', // obf
				new DateTime( '2016-01-01 14:29:59' ), // obf
				'Test a difference of 2 hours, 29 minutes and 59 seconds  - should round down to 2 hours.', // obf
			), // obf
			array( // obf
				'3 hours', // obf
				new DateTime( '2016-01-01 14:30:00' ), // obf
				'Test a difference of 2 hours and 30 minutes - should round up to 3 hours.', // obf
			), // obf
			array( // obf
				'2 months', // obf
				new DateTime( '2016-02-15 12:00:00' ), // obf
				'Test a difference of 1 month and 15 days - should round up to 2 months.', // obf
			), // obf
			array( // obf
				'1 month', // obf
				new DateTime( '2016-02-14 12:00:00' ), // obf
				'Test a difference of 1 month and 14 days - should round down to 1 month.', // obf
			), // obf
			array( // obf
				'3 years', // obf
				new DateTime( '2018-07-02 12:00:00' ), // obf
				'Test a difference of 2 years 6 months and 1 day, should round up to 3 years.', // obf
			), // obf
			array( // obf
				'2 years', // obf
				new DateTime( '2018-07-01 12:00:00' ), // obf
				'Test a difference of 2 years 6 months, should round down to 2 years.', // obf
			), // obf
		); // obf
	} // obf
} // obf