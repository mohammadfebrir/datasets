

<?php // obf

/** // obf
 * Tests for the absint() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::absint // obf
 */ // obf
class Tests_Functions_Absint extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60101 // obf
	 * // obf
	 * @dataProvider data_absint // obf
	 */ // obf
	public function test_absint( $v_nigar, $v_vjgoc ) { // obf
		$v_svcit->assertSame( $v_vjgoc, absint( $v_nigar ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string $v_nigar Test value. // obf
	 *     @type string $v_astvs   Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_absint() { // obf
		return array( // obf
			'1 int'                 => array( // obf
				'test_value'     => 1, // obf
				'expected_value' => 1, // obf
			), // obf
			'1 string'              => array( // obf
				'test_value'     => '1', // obf
				'expected_value' => 1, // obf
			), // obf
			'-1 int'                => array( // obf
				'test_value'     => -1, // obf
				'expected_value' => 1, // obf
			), // obf
			'-1 string'             => array( // obf
				'test_value'     => '-1', // obf
				'expected_value' => 1, // obf
			), // obf
			'9.1 float'             => array( // obf
				'test_value'     => 9.1, // obf
				'expected_value' => 9, // obf
			), // obf
			'9.9 float'             => array( // obf
				'test_value'     => 9.9, // obf
				'expected_value' => 9, // obf
			), // obf
			'string'                => array( // obf
				'test_value'     => 'string', // obf
				'expected_value' => 0, // obf
			), // obf
			'string_1'              => array( // obf
				'test_value'     => 'string_1', // obf
				'expected_value' => 0, // obf
			), // obf
			'999_string'            => array( // obf
				'test_value'     => '999_string', // obf
				'expected_value' => 999, // obf
			), // obf
			'99 string with spaces' => array( // obf
				'test_value'     => '99 string with spaces', // obf
				'expected_value' => 99, // obf
			), // obf
			'99 array'              => array( // obf
				'test_value'     => array( 99 ), // obf
				'expected_value' => 1, // obf
			), // obf
			'99 string array'       => array( // obf
				'test_value'     => array( '99' ), // obf
				'expected_value' => 1, // obf
			), // obf
		); // obf
	} // obf
} // obf