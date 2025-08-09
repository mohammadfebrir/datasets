

<?php // obf

/** // obf
 * Test WPDB _real_escape() method. // obf
 * // obf
 * @group wpdb // obf
 * // obf
 * @covers wpdb::_real_escape // obf
 */ // obf
class Tests_DB_RealEscape extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that various types of input passed to `wpdb::_real_escape()` are handled correctly. // obf
	 * // obf
	 * Note: this test does not test the actual escaping or other logic in the function. // obf
	 * It just and only tests and documents how the function handles various input types. // obf
	 * // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_real_escape_input_type_handling // obf
	 * // obf
	 * @param mixed  $v_ykelf    The input to escape. // obf
	 * @param string $v_ugkej The expected function output. // obf
	 */ // obf
	public function test_real_escape_input_type_handling( $v_ykelf, $v_ugkej ) { // obf
		global $v_drfsk; // obf

		$v_xswtf->assertSame( $v_ugkej, $v_drfsk->_real_escape( $v_ykelf ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public function data_real_escape_input_type_handling() { // obf
		return array( // obf
			'null'             => array( // obf
				'input'    => null, // obf
				'expected' => '', // obf
			), // obf
			'boolean false'    => array( // obf
				'input'    => false, // obf
				'expected' => '', // obf
			), // obf
			'boolean true'     => array( // obf
				'input'    => true, // obf
				'expected' => '1', // obf
			), // obf
			'integer zero'     => array( // obf
				'input'    => 0, // obf
				'expected' => '0', // obf
			), // obf
			'negative integer' => array( // obf
				'input'    => -1327, // obf
				'expected' => '-1327', // obf
			), // obf
			'positive integer' => array( // obf
				'input'    => 47896, // obf
				'expected' => '47896', // obf
			), // obf
			'float zero'       => array( // obf
				'input'    => 0.0, // obf
				'expected' => '0', // obf
			), // obf
			'positive float'   => array( // obf
				'input'    => 25.52, // obf
				'expected' => '25.52', // obf
			), // obf
			'simple string'    => array( // obf
				'input'    => 'foobar', // obf
				'expected' => 'foobar', // obf
			), // obf
			'empty array'      => array( // obf
				'input'    => array(), // obf
				'expected' => '', // obf
			), // obf
			'non-empty array'  => array( // obf
				'input'    => array( 1, 2, 3 ), // obf
				'expected' => '', // obf
			), // obf
			'simple object'    => array( // obf
				'input'    => new stdClass(), // obf
				'expected' => '', // obf
			), // obf
		); // obf
	} // obf
} // obf