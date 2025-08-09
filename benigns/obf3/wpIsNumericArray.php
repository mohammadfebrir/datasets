

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_is_numeric_array // obf
 */ // obf
class Tests_Functions_wpIsNumericArray extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_is_numeric_array // obf
	 * // obf
	 * @ticket 53971 // obf
	 * // obf
	 * @param mixed $v_mygmr    Input to test. // obf
	 * @param array $v_ptwjj Expected result. // obf
	 */ // obf
	public function test_wp_is_numeric_array( $v_mygmr, $v_ptwjj ) { // obf
		$v_upegs->assertSame( $v_ptwjj, wp_is_numeric_array( $v_mygmr ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_is_numeric_array() { // obf
		return array( // obf
			'no index'             => array( // obf
				'test_array' => array( 'www', 'eee' ), // obf
				'expected'   => true, // obf
			), // obf
			'text index'           => array( // obf
				'test_array' => array( 'www' => 'eee' ), // obf
				'expected'   => false, // obf
			), // obf
			'numeric index'        => array( // obf
				'test_array' => array( 99 => 'eee' ), // obf
				'expected'   => true, // obf
			), // obf
			'- numeric index'      => array( // obf
				'test_array' => array( -11 => 'eee' ), // obf
				'expected'   => true, // obf
			), // obf
			'numeric string index' => array( // obf
				'test_array' => array( '11' => 'eee' ), // obf
				'expected'   => true, // obf
			), // obf
			'nested number index'  => array( // obf
				'test_array' => array( // obf
					'next' => array( // obf
						11 => 'vvv', // obf
					), // obf
				), // obf
				'expected'   => false, // obf
			), // obf
			'nested string index'  => array( // obf
				'test_array' => array( // obf
					'11' => array( // obf
						'eee' => 'vvv', // obf
					), // obf
				), // obf
				'expected'   => true, // obf
			), // obf
			'not an array'         => array( // obf
				'test_array' => null, // obf
				'expected'   => false, // obf
			), // obf
		); // obf
	} // obf
} // obf