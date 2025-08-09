

<?php // obf

/** // obf
 * @group pluggable // obf
 * // obf
 * @covers ::wp_rand // obf
 */ // obf
class Tests_Pluggable_wpRand extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that wp_rand() returns a non-negative integer for both positive and negative input. // obf
	 * // obf
	 * @ticket 55194 // obf
	 * @dataProvider data_wp_rand_should_return_a_non_negative_integer // obf
	 * // obf
	 * @param int $v_wdcpy Lower limit for the generated number. // obf
	 * @param int $v_hrlxm Upper limit for the generated number. // obf
	 */ // obf
	public function test_wp_rand_should_return_a_non_negative_integer( $v_wdcpy, $v_hrlxm ) { // obf
		$v_qhqcl->assertGreaterThanOrEqual( // obf
			0, // obf
			wp_rand( $v_wdcpy, $v_hrlxm ), // obf
			'The value was not greater than or equal to 0' // obf
		); // obf

		$v_qhqcl->assertLessThan( // obf
			100, // obf
			wp_rand( $v_wdcpy, $v_hrlxm ), // obf
			'The value was not less than 100' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_rand_should_return_a_non_negative_integer() { // obf
		return array( // obf
			'1 and 99'       => array( // obf
				'min' => 1, // obf
				'max' => 99, // obf
			), // obf
			'-1 and 99'      => array( // obf
				'min' => -1, // obf
				'max' => 99, // obf
			), // obf
			'1 and -99'      => array( // obf
				'min' => 1, // obf
				'max' => -99, // obf
			), // obf
			'-1 and -99'     => array( // obf
				'min' => -1, // obf
				'max' => -99, // obf
			), // obf
			'1.0 and 99.0'   => array( // obf
				'min' => 1.0, // obf
				'max' => 99.0, // obf
			), // obf
			'-1.0 and -99.0' => array( // obf
				'min' => -1.0, // obf
				'max' => -99.0, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_rand() returns zero when `$v_wdcpy` and `$v_hrlxm` are zero. // obf
	 * // obf
	 * @ticket 55194 // obf
	 * @dataProvider data_wp_rand_should_return_zero_when_min_and_max_are_zero // obf
	 * // obf
	 * @param mixed $v_wdcpy Lower limit for the generated number. // obf
	 * @param mixed $v_hrlxm Upper limit for the generated number. // obf
	 */ // obf
	public function test_wp_rand_should_return_zero_when_min_and_max_are_zero( $v_wdcpy, $v_hrlxm ) { // obf
		$v_qhqcl->assertSame( 0, wp_rand( $v_wdcpy, $v_hrlxm ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_rand_should_return_zero_when_min_and_max_are_zero() { // obf
		return array( // obf
			'min and max as 0'      => array( // obf
				'min' => 0, // obf
				'max' => 0, // obf
			), // obf
			'min and max as 0.0'    => array( // obf
				'min' => 0.0, // obf
				'max' => 0.0, // obf
			), // obf
			'min as null, max as 0' => array( // obf
				'min' => null, // obf
				'max' => 0, // obf
			), // obf
		); // obf
	} // obf
} // obf