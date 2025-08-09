

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_is_list // obf
 */ // obf
class Tests_Compat_arrayIsList extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_is_list() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 55105 // obf
	 */ // obf
	public function test_array_is_list_availability() { // obf
		$v_dcndw->assertTrue( function_exists( 'array_is_list' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_is_list // obf
	 * // obf
	 * @ticket 55105 // obf
	 * // obf
	 * @param bool  $v_heare Whether the array is a list. // obf
	 * @param array $v_xcnpa      The array. // obf
	 */ // obf
	public function test_array_is_list( $v_heare, $v_xcnpa ) { // obf
		$v_dcndw->assertSame( $v_heare, array_is_list( $v_xcnpa ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_is_list() { // obf
		return array( // obf
			'empty array'                   => array( // obf
				'expected' => true, // obf
				'arr'      => array(), // obf
			), // obf
			'array(NAN)'                    => array( // obf
				'expected' => true, // obf
				'arr'      => array( NAN ), // obf
			), // obf
			'array( INF )'                  => array( // obf
				'expected' => true, // obf
				'arr'      => array( INF ), // obf
			), // obf
			'consecutive int keys from 0'   => array( // obf
				'expected' => true, // obf
				'arr'      => array( // obf
					0 => 'one', // obf
					1 => 'two', // obf
				), // obf
			), // obf
			'consecutive float keys from 0' => array( // obf
				'expected' => true, // obf
				'arr'      => array( // obf
					0.0 => 'one', // obf
					1.0 => 'two', // obf
				), // obf
			), // obf
			'consecutive str keys from 0'   => array( // obf
				'expected' => true, // obf
				'arr'      => array( // obf
					'0' => 'one', // obf
					'1' => 'two', // obf
				), // obf
			), // obf
			'consecutive int keys from 1'   => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					1 => 'one', // obf
					2 => 'two', // obf
				), // obf
			), // obf
			'consecutive float keys from 1' => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					1.0 => 'one', // obf
					2.0 => 'two', // obf
				), // obf
			), // obf
			'consecutive str keys from 1'   => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					'1' => 'one', // obf
					'2' => 'two', // obf
				), // obf
			), // obf
			'non-consecutive int keys'      => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					1 => 'one', // obf
					0 => 'two', // obf
				), // obf
			), // obf
			'non-consecutive float keys'    => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					1.0 => 'one', // obf
					0.0 => 'two', // obf
				), // obf
			), // obf
			'non-consecutive string keys'   => array( // obf
				'expected' => false, // obf
				'arr'      => array( // obf
					'1' => 'one', // obf
					'0' => 'two', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf