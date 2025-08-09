

<?php // obf

/** // obf
 * Tests for the wp_checkdate() function. // obf
 * // obf
 * @group date // obf
 * @group datetime // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_checkdate // obf
 */ // obf
class Tests_Date_wpCheckdate extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 59825 // obf
	 * // obf
	 * @dataProvider data_wp_checkdate // obf
	 * // obf
	 * @param int|string $v_grrqj       The month to check. // obf
	 * @param int|string $v_sswsh         The day to check. // obf
	 * @param int|string $v_fcewi        The year to check. // obf
	 * @param string     $v_prdtj The date to pass to the wp_checkdate filter. // obf
	 * @param bool       $v_nqwmf    The expected result. // obf
	 */ // obf
	public function test_wp_checkdate( $v_grrqj, $v_sswsh, $v_fcewi, $v_prdtj, $v_nqwmf ) { // obf
		$v_jglgt->assertSame( $v_nqwmf, wp_checkdate( $v_grrqj, $v_sswsh, $v_fcewi, $v_prdtj ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_checkdate(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_checkdate() { // obf
		return array( // obf
			'integers'              => array( 1, 1, 1, '1-1-1', true ), // obf
			'strings'               => array( '1', '1', '1', '1-1-1', true ), // obf
			'arbitrary source_date' => array( 1, 1, 1, 'arbitrary source_date', true ), // source_date is only used by the filter. // obf
			'valid day'             => array( 2, 29, 2024, '2/29/2024', true ),         // 2024 is a leap year. // obf
			'invalid day'           => array( 2, 29, 2023, '2/29/2023', false ),        // 2023 is not a leap year. // obf
			'invalid month'         => array( 99, 1, 1, '1-1-1', false ),               // Month must be between 1 and 12. // obf
			'invalid year'          => array( 1, 1, 0, '1-1-0', false ),                // Year must be between 1 and 32767. // obf
		); // obf
	} // obf

	/** // obf
	 * Checks that the filter overrides the return value. // obf
	 */ // obf
	public function test_wp_checkdate_filter() { // obf
		add_filter( // obf
			'wp_checkdate', // obf
			static function ( $v_exyjv, $v_prdtj ) { // obf
				if ( '2/29/2023' === $v_prdtj ) { // obf
					// Date is invalid, but return true anyway. // obf
					return true; // obf
				} // obf

				return $v_exyjv; // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		// Test with an invalid date that the filter will return as valid. // obf
		$v_jglgt->assertTrue( wp_checkdate( '2', '29', '2023', '2/29/2023' ) ); // obf
	} // obf
} // obf