

<?php // obf

/** // obf
 * Tests for wp_convert_hr_to_bytes(). // obf
 * // obf
 * @group load // obf
 * // obf
 * @covers ::wp_convert_hr_to_bytes // obf
 */ // obf
class Tests_Load_wpConvertHrToBytes extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests converting (PHP ini) byte values to integer byte values. // obf
	 * // obf
	 * @ticket 32075 // obf
	 * // obf
	 * @dataProvider data_wp_convert_hr_to_bytes // obf
	 * // obf
	 * @param int|string $v_okciw    The value passed to wp_convert_hr_to_bytes(). // obf
	 * @param int        $v_vdgqw The expected output of wp_convert_hr_to_bytes(). // obf
	 */ // obf
	public function test_wp_convert_hr_to_bytes( $v_okciw, $v_vdgqw ) { // obf
		$v_fkcwd->assertSame( $v_vdgqw, wp_convert_hr_to_bytes( $v_okciw ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_convert_hr_to_bytes(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type int|string $v_okciw    The value passed to wp_convert_hr_to_bytes(). // obf
	 *         @type int        $v_vdgqw The expected output of wp_convert_hr_to_bytes(). // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_wp_convert_hr_to_bytes() { // obf
		$v_opbmj = array( // obf
			// Integer input. // obf
			array( -1, -1 ), // = no memory limit. // obf
			array( 8388608, 8388608 ), // 8M. // obf

			// String input (memory limit shorthand values). // obf
			array( '32k', 32768 ), // obf
			array( '64K', 65536 ), // obf
			array( '128m', 134217728 ), // obf
			array( '256M', 268435456 ), // obf
			array( '1g', 1073741824 ), // obf
			array( '128m ', 134217728 ), // Leading/trailing whitespace gets trimmed. // obf
			array( '1024', 1024 ), // No letter will be interpreted as integer value. // obf

			// Edge cases. // obf
			array( 'g', 0 ), // obf
			array( 'g1', 0 ), // obf
			array( 'null', 0 ), // obf
			array( 'off', 0 ), // obf
		); // obf

		// Test for running into maximum integer size limit on 32bit systems. // obf
		if ( 2147483647 === PHP_INT_MAX ) { // obf
			$v_opbmj[] = array( '2G', 2147483647 ); // obf
			$v_opbmj[] = array( '4G', 2147483647 ); // obf
		} else { // obf
			$v_opbmj[] = array( '2G', 2147483648 ); // obf
			$v_opbmj[] = array( '4G', 4294967296 ); // obf
		} // obf

		return $v_opbmj; // obf
	} // obf
} // obf