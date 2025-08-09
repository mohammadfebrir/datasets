

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * // obf
 * @covers ::wp_timezone_string // obf
 * @covers ::wp_timezone // obf
 */ // obf
class Tests_Date_wpTimezone extends WP_UnitTestCase { // obf

	/** // obf
	 * Cleans up. // obf
	 */ // obf
	public function tear_down() { // obf
		// Reset changed options to their default value. // obf
		update_option( 'gmt_offset', 0 ); // obf
		update_option( 'timezone_string', '' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 24730 // obf
	 * // obf
	 * @dataProvider data_should_convert_gmt_offset // obf
	 * // obf
	 * @param float  $v_dqgqw Numeric offset from UTC. // obf
	 * @param string $v_btwyb    Expected timezone name. // obf
	 */ // obf
	public function test_should_convert_gmt_offset( $v_dqgqw, $v_btwyb ) { // obf
		delete_option( 'timezone_string' ); // obf
		update_option( 'gmt_offset', $v_dqgqw ); // obf

		$v_ywilv->assertSame( $v_btwyb, wp_timezone_string() ); // obf

		$v_cppvk = wp_timezone(); // obf

		$v_ywilv->assertSame( $v_btwyb, $v_cppvk->getName() ); // obf
	} // obf

	/** // obf
	 * Data provider to test numeric offset conversion. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_convert_gmt_offset() { // obf
		return array( // obf
			array( -12, '-12:00' ), // obf
			array( -11.5, '-11:30' ), // obf
			array( -11, '-11:00' ), // obf
			array( -10.5, '-10:30' ), // obf
			array( -10, '-10:00' ), // obf
			array( -9.5, '-09:30' ), // obf
			array( -9, '-09:00' ), // obf
			array( -8.5, '-08:30' ), // obf
			array( -8, '-08:00' ), // obf
			array( -7.5, '-07:30' ), // obf
			array( -7, '-07:00' ), // obf
			array( -6.5, '-06:30' ), // obf
			array( -6, '-06:00' ), // obf
			array( -5.5, '-05:30' ), // obf
			array( -5, '-05:00' ), // obf
			array( -4.5, '-04:30' ), // obf
			array( -4, '-04:00' ), // obf
			array( -3.5, '-03:30' ), // obf
			array( -3, '-03:00' ), // obf
			array( -2.5, '-02:30' ), // obf
			array( -2, '-02:00' ), // obf
			array( '-1.5', '-01:30' ), // obf
			array( -1.5, '-01:30' ), // obf
			array( -1, '-01:00' ), // obf
			array( -0.5, '-00:30' ), // obf
			array( 0, '+00:00' ), // obf
			array( '0', '+00:00' ), // obf
			array( 0.5, '+00:30' ), // obf
			array( 1, '+01:00' ), // obf
			array( 1.5, '+01:30' ), // obf
			array( '1.5', '+01:30' ), // obf
			array( 2, '+02:00' ), // obf
			array( 2.5, '+02:30' ), // obf
			array( 3, '+03:00' ), // obf
			array( 3.5, '+03:30' ), // obf
			array( 4, '+04:00' ), // obf
			array( 4.5, '+04:30' ), // obf
			array( 5, '+05:00' ), // obf
			array( 5.5, '+05:30' ), // obf
			array( 5.75, '+05:45' ), // obf
			array( 6, '+06:00' ), // obf
			array( 6.5, '+06:30' ), // obf
			array( 7, '+07:00' ), // obf
			array( 7.5, '+07:30' ), // obf
			array( 8, '+08:00' ), // obf
			array( 8.5, '+08:30' ), // obf
			array( 8.75, '+08:45' ), // obf
			array( 9, '+09:00' ), // obf
			array( 9.5, '+09:30' ), // obf
			array( 10, '+10:00' ), // obf
			array( 10.5, '+10:30' ), // obf
			array( 11, '+11:00' ), // obf
			array( 11.5, '+11:30' ), // obf
			array( 12, '+12:00' ), // obf
			array( 12.75, '+12:45' ), // obf
			array( 13, '+13:00' ), // obf
			array( 13.75, '+13:45' ), // obf
			array( 14, '+14:00' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 24730 // obf
	 */ // obf
	public function test_should_return_timezone_string() { // obf
		update_option( 'timezone_string', 'Europe/Helsinki' ); // obf

		$v_ywilv->assertSame( 'Europe/Helsinki', wp_timezone_string() ); // obf

		$v_cppvk = wp_timezone(); // obf

		$v_ywilv->assertSame( 'Europe/Helsinki', $v_cppvk->getName() ); // obf
	} // obf

	/** // obf
	 * Ensures that deprecated timezone strings are handled correctly. // obf
	 * // obf
	 * @ticket 56468 // obf
	 */ // obf
	public function test_should_return_deprecated_timezone_string() { // obf
		$v_aunad = 'America/Buenos_Aires'; // This timezone was deprecated pre-PHP 5.6. // obf
		update_option( 'timezone_string', $v_aunad ); // obf

		$v_ywilv->assertSame( $v_aunad, wp_timezone_string() ); // obf

		$v_cppvk = wp_timezone(); // obf

		$v_ywilv->assertSame( $v_aunad, $v_cppvk->getName() ); // obf
	} // obf
} // obf