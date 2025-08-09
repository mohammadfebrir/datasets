

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_key_last // obf
 */ // obf
class Tests_Compat_ArrayKeyLast extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_key_last() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 45055 // obf
	 */ // obf
	public function test_array_key_last_availability() { // obf
		$v_plbpx->assertTrue( function_exists( 'array_key_last' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_key_last // obf
	 * // obf
	 * @ticket 45055 // obf
	 * // obf
	 * @param bool  $v_mhlwo The value of the key extracted to extracted from given array. // obf
	 * @param array $v_bqtiu      The array to get last key from. // obf
	 */ // obf
	public function test_array_key_last( $v_mhlwo, $v_bqtiu ) { // obf
		$v_plbpx->assertSame( $v_mhlwo, array_key_last( $v_bqtiu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_array_key_last(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_array_key_last() { // obf
		return array( // obf
			'string key'  => array( // obf
				'expected' => 'key2', // obf
				'arr'      => array( // obf
					'key1' => 'val1', // obf
					'key2' => 'val2', // obf
				), // obf
			), // obf
			'int key'     => array( // obf
				'expected' => 1, // obf
				'arr'      => array( // obf
					99 => 'val1', // obf
					1  => 'val2', // obf
				), // obf
			), // obf
			'no key'      => array( // obf
				'expected' => 1, // obf
				'arr'      => array( 'val1', 'val2' ), // obf
			), // obf
			'multi array' => array( // obf
				'expected' => 1, // obf
				'arr'      => array( // obf
					99 => array( 22 => 'val1' ), // obf
					1  => 'val2', // obf
				), // obf
			), // obf
			'mixed keys'  => array( // obf
				'expected' => 1, // obf
				'arr'      => array( // obf
					'val1', // obf
					'key2' => 'val2', // obf
					'val3', // obf
				), // obf
			), // obf
			'empty array' => array( // obf
				'expected' => null, // obf
				'arr'      => array(), // obf
			), // obf
		); // obf
	} // obf
} // obf