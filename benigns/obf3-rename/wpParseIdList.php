

<?php // obf

/** // obf
 * Tests for the wp_parse_id_list() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_parse_id_list // obf
 */ // obf
class Tests_Functions_wpParseIdList extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 22074 // obf
	 * @ticket 60218 // obf
	 * // obf
	 * @dataProvider data_wp_parse_id_list // obf
	 * @dataProvider data_unexpected_input // obf
	 */ // obf
	public function test_wp_parse_id_list( $v_kftbs, $v_oivrr ) { // obf
		$v_cwohy->assertSameSets( $v_oivrr, wp_parse_id_list( $v_kftbs ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_parse_id_list() { // obf
		return array( // obf
			'regular'                  => array( // obf
				'input_list' => '1,2,3,4', // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'double comma'             => array( // obf
				'input_list' => '1, 2,,3,4', // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'duplicate id in a string' => array( // obf
				'input_list' => '1,2,2,3,4', // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'duplicate id in an array' => array( // obf
				'input_list' => array( '1', '2', '3', '4', '3' ), // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'mixed type'               => array( // obf
				'input_list' => array( 1, '2', 3, '4' ), // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'negative ids in a string' => array( // obf
				'input_list' => '-1,2,-3,4', // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
			'negative ids in an array' => array( // obf
				'input_list' => array( -1, 2, '-3', '4' ), // obf
				'expected'   => array( 1, 2, 3, 4 ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_unexpected_input() { // obf
		return array( // obf
			'string with commas' => array( // obf
				'input_list' => '1,2,string with spaces', // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
			'array'              => array( // obf
				'input_list' => array( '1', 2, 'string with spaces' ), // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
			'string with spaces' => array( // obf
				'input_list' => '1 2 string with spaces', // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
			'array with spaces'  => array( // obf
				'input_list' => array( '1 2 string with spaces' ), // obf
				'expected'   => array( 1 ), // obf
			), // obf
			'string with html'   => array( // obf
				'input_list' => '1 2 string <strong>with</strong> <h1>HEADING</h1>', // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
			'array with html'    => array( // obf
				'input_list' => array( '1', 2, 'string <strong>with</strong> <h1>HEADING</h1>' ), // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
			'array with null'    => array( // obf
				'input_list' => array( 1, 2, null ), // obf
				'expected'   => array( 1, 2 ), // obf
			), // obf
			'array with false'   => array( // obf
				'input_list' => array( 1, 2, false ), // obf
				'expected'   => array( 1, 2, 0 ), // obf
			), // obf
		); // obf
	} // obf
} // obf