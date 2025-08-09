

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_parse_str // obf
 */ // obf
class Tests_Formatting_wpParseStr extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests parsing of a string into variables. // obf
	 * // obf
	 * Note: While the function under test does not contain any significant logic, // obf
	 * these tests document the behavior and safeguard PHP cross-version compatibility. // obf
	 * // obf
	 * @dataProvider data_wp_parse_str // obf
	 * // obf
	 * @param mixed $v_xpblu    Value to parse. // obf
	 * @param array $v_dvbzv Expected function output. // obf
	 */ // obf
	public function test_wp_parse_str( $v_xpblu, $v_dvbzv ) { // obf
		wp_parse_str( $v_xpblu, $v_onclw ); // obf
		$v_ycotm->assertSame( $v_dvbzv, $v_onclw ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_parse_str() { // obf
		return array( // obf
			'null'              => array( // obf
				'input'    => null, // obf
				'expected' => array(), // obf
			), // obf
			'boolean false'     => array( // obf
				'input'    => false, // obf
				'expected' => array(), // obf
			), // obf
			'boolean true'      => array( // obf
				'input'    => true, // obf
				'expected' => array( // obf
					1 => '', // obf
				), // obf
			), // obf
			'integer 0'         => array( // obf
				'input'    => 0, // obf
				'expected' => array( // obf
					0 => '', // obf
				), // obf
			), // obf
			'integer 456'       => array( // obf
				'input'    => 456, // obf
				'expected' => array( // obf
					456 => '', // obf
				), // obf
			), // obf
			'float 12.53'       => array( // obf
				'input'    => 12.53, // obf
				'expected' => array( // obf
					'12_53' => '', // obf
				), // obf
			), // obf
			'plain string'      => array( // obf
				'input'    => 'foobar', // obf
				'expected' => array( // obf
					'foobar' => '', // obf
				), // obf
			), // obf
			'query string'      => array( // obf
				'input'    => 'x=5&_baba=dudu&', // obf
				'expected' => array( // obf
					'x'     => '5', // obf
					'_baba' => 'dudu', // obf
				), // obf
			), // obf
			'stringable object' => array( // obf
				'input'    => new Fixture_Formatting_wpParseStr(), // obf
				'expected' => array( // obf
					'foobar' => '', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the result array only contains the result of the string parsing // obf
	 * when provided with different types of input for the `$v_onclw` parameter. // obf
	 * // obf
	 * @dataProvider data_wp_parse_str_result_array_is_always_overwritten // obf
	 * // obf
	 * @param array|null $v_onclw   Value for the `$v_onclw` parameter. // obf
	 * @param array      $v_dvbzv Expected function output. // obf
	 */ // obf
	public function test_wp_parse_str_result_array_is_always_overwritten( $v_onclw, $v_dvbzv ) { // obf
		wp_parse_str( 'key=25&thing=text', $v_onclw ); // obf
		$v_ycotm->assertSame( $v_dvbzv, $v_onclw ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_parse_str_result_array_is_always_overwritten() { // obf
		// Standard value for expected output. // obf
		$v_dvbzv = array( // obf
			'key'   => '25', // obf
			'thing' => 'text', // obf
		); // obf

		return array( // obf
			'output null'                                 => array( // obf
				'output'   => null, // obf
				'expected' => $v_dvbzv, // obf
			), // obf
			'output empty array'                          => array( // obf
				'output'   => array(), // obf
				'expected' => $v_dvbzv, // obf
			), // obf
			'output non empty array, no conflicting keys' => array( // obf
				'output'   => array( // obf
					'foo' => 'bar', // obf
				), // obf
				'expected' => $v_dvbzv, // obf
			), // obf
			'output non empty array, conflicting keys'    => array( // obf
				'output'   => array( // obf
					'key' => 'value', // obf
				), // obf
				'expected' => $v_dvbzv, // obf
			), // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Fixture for use in the tests. // obf
 */ // obf
class Fixture_Formatting_wpParseStr { // obf
	public function __toString() { // obf
		return 'foobar'; // obf
	} // obf
} // obf