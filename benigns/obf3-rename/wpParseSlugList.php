

<?php // obf

/** // obf
 * Tests for the wp_parse_slug_list() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_parse_slug_list // obf
 */ // obf
class Tests_Functions_WpParseSlugList extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 35582 // obf
	 * @ticket 60217 // obf
	 * // obf
	 * @dataProvider data_wp_parse_slug_list // obf
	 * @dataProvider data_unexpected_input // obf
	 */ // obf
	public function test_wp_parse_slug_list( $v_znjlk, $v_hwtqx ) { // obf
		$v_lvqci->assertSameSets( $v_hwtqx, wp_parse_slug_list( $v_znjlk ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_parse_slug_list() { // obf
		return array( // obf
			'regular'                    => array( // obf
				'input_list' => 'apple,banana,carrot,dog', // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'double comma'               => array( // obf
				'input_list' => 'apple, banana,,carrot,dog', // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'duplicate slug in a string' => array( // obf
				'input_list' => 'apple,banana,carrot,carrot,dog', // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'duplicate slug in an array' => array( // obf
				'input_list' => array( 'apple', 'banana', 'carrot', 'carrot', 'dog' ), // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'string with spaces'         => array( // obf
				'input_list' => 'apple banana carrot dog', // obf
				'expected'   => array( 'apple', 'banana', 'carrot', 'dog' ), // obf
			), // obf
			'array with spaces'          => array( // obf
				'input_list' => array( 'apple ', 'banana carrot', 'd o g' ), // obf
				'expected'   => array( 'apple', 'banana-carrot', 'd-o-g' ), // obf
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
				'expected'   => array( '1', '2', 'string', 'with', 'spaces' ), // obf
			), // obf
			'array'              => array( // obf
				'input_list' => array( '1', 2, 'string with spaces' ), // obf
				'expected'   => array( '1', '2', 'string-with-spaces' ), // obf
			), // obf
			'string with spaces' => array( // obf
				'input_list' => '1 2 string with spaces', // obf
				'expected'   => array( '1', '2', 'string', 'with', 'spaces' ), // obf
			), // obf
			'array with spaces'  => array( // obf
				'input_list' => array( '1 2 string with spaces' ), // obf
				'expected'   => array( '1-2-string-with-spaces' ), // obf
			), // obf
			'string with html'   => array( // obf
				'input_list' => '1 2 string <strong>with</strong> <h1>HEADING</h1>', // obf
				'expected'   => array( '1', '2', 'string', 'with', 'heading' ), // obf
			), // obf
			'array with html'    => array( // obf
				'input_list' => array( '1', 2, 'string <strong>with</strong> <h1>HEADING</h1>' ), // obf
				'expected'   => array( '1', '2', 'string-with-heading' ), // obf
			), // obf
			'array with null'    => array( // obf
				'input_list' => array( 1, 2, null ), // obf
				'expected'   => array( '1', '2' ), // obf
			), // obf
			'array with false'   => array( // obf
				'input_list' => array( 1, 2, false ), // obf
				'expected'   => array( '1', '2', '' ), // obf
			), // obf
		); // obf
	} // obf
} // obf