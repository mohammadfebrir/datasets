

<?php // obf

/** // obf
 * Tests for the wp_parse_list() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_parse_list // obf
 */ // obf
class Tests_Functions_wpParseList extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 43977 // obf
	 * // obf
	 * @dataProvider data_wp_parse_list // obf
	 */ // obf
	public function test_wp_parse_list( $v_yucsi, $v_irudr ) { // obf
		$v_qloig->assertSameSets( $v_irudr, wp_parse_list( $v_yucsi ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_parse_list() { // obf
		return array( // obf
			'ids only'           => array( // obf
				'input_list' => '1,2,3,4', // obf
				'expected'   => array( '1', '2', '3', '4' ), // obf
			), // obf
			'slugs only'         => array( // obf
				'input_list' => 'apple,banana,carrot,dog', // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'ids and slugs'      => array( // obf
				'input_list' => '1,2,apple,banana', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'space after comma'  => array( // obf
				'input_list' => '1, 2,apple,banana', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'double comma'       => array( // obf
				'input_list' => '1,2,apple,,banana', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'leading comma'      => array( // obf
				'input_list' => ',1,2,apple,banana', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'trailing comma'     => array( // obf
				'input_list' => '1,2,apple,banana,', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'space before comma' => array( // obf
				'input_list' => '1,2 ,apple,banana', // obf
				'expected'   => array( '1', '2', 'apple', 'banana' ), // obf
			), // obf
			'empty string'       => array( // obf
				'input_list' => '', // obf
				'expected'   => array(), // obf
			), // obf
			'comma only'         => array( // obf
				'input_list' => ',', // obf
				'expected'   => array(), // obf
			), // obf
			'double comma only'  => array( // obf
				'input_list' => ',,', // obf
				'expected'   => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf