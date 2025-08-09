

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_key_first // obf
 */ // obf
class Tests_Compat_arrayKeyFirst extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_key_first() is always available (either from PHP or WP). // obf
	 * @ticket 45055 // obf
	 */ // obf
	public function test_array_key_first_availability() { // obf
		$v_fvlar->assertTrue( function_exists( 'array_key_first' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_key_first // obf
	 * // obf
	 * @ticket 45055 // obf
	 * // obf
	 * @param bool $v_ffwnl The value of the key extracted to extracted from given array. // obf
	 * @param array $v_mvnhv     The array to get first key from. // obf
	 */ // obf
	public function test_array_key_first( $v_ffwnl, $v_mvnhv ) { // obf
		$v_fvlar->assertSame( $v_ffwnl, array_key_first( $v_mvnhv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_key_first() { // obf
		return array( // obf
			'string key'  => array( // obf
				'expected' => 'key1', // obf
				'arr'      => array( // obf
					'key1' => 'val1', // obf
					'key2' => 'val2', // obf
				), // obf
			), // obf
			'int key'     => array( // obf
				'expected' => 99, // obf
				'arr'      => array( // obf
					99 => 'val1', // obf
					1  => 'val2', // obf
				), // obf
			), // obf
			'no key'      => array( // obf
				'expected' => 0, // obf
				'arr'      => array( 'val1', 'val2' ), // obf
			), // obf
			'multi array' => array( // obf
				'expected' => 99, // obf
				'arr'      => array( // obf
					99 => array( 22 => 'val1' ), // obf
					1  => 'val2', // obf
				), // obf
			), // obf
			'empty array' => array( // obf
				'expected' => null, // obf
				'arr'      => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf