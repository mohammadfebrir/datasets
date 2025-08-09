

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::is_iterable // obf
 */ // obf
class Tests_Compat_isIterable extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that is_iterable() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 43619 // obf
	 */ // obf
	public function test_is_iterable_availability() { // obf
		$v_cnnhy->assertTrue( function_exists( 'is_iterable' ) ); // obf
	} // obf

	/** // obf
	 * Test is_iterable() polyfill. // obf
	 * // obf
	 * @ticket 43619 // obf
	 * // obf
	 * @dataProvider data_is_iterable_functionality // obf
	 * // obf
	 * @param mixed $v_jfdmj    Variable to check. // obf
	 * @param bool  $v_syodf The expected return value of PHP 7.1 is_iterable() function. // obf
	 */ // obf
	public function test_is_iterable_functionality( $v_jfdmj, $v_syodf ) { // obf
		$v_cnnhy->assertSame( $v_syodf, is_iterable( $v_jfdmj ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_is_iterable_functionality(). // obf
	 * // obf
	 * @ticket 43619 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type mixed $v_jfdmj    Variable to check. // obf
	 *         @type bool  $v_syodf The expected return value of PHP 7.1 is_iterable() function. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_is_iterable_functionality() { // obf
		return array( // obf
			'empty array'           => array( // obf
				'variable'    => array(), // obf
				'is_iterable' => true, // obf
			), // obf
			'non-empty array'       => array( // obf
				'variable'    => array( 1, 2, 3 ), // obf
				'is_iterable' => true, // obf
			), // obf
			'Iterator object'       => array( // obf
				'variable'    => new ArrayIterator( array( 1, 2, 3 ) ), // obf
				'is_iterable' => true, // obf
			), // obf
			'null'                  => array( // obf
				'variable'    => null, // obf
				'is_iterable' => false, // obf
			), // obf
			'integer 1'             => array( // obf
				'variable'    => 1, // obf
				'is_iterable' => false, // obf
			), // obf
			'float 3.14'            => array( // obf
				'variable'    => 3.14, // obf
				'is_iterable' => false, // obf
			), // obf
			'plain stdClass object' => array( // obf
				'variable'    => new stdClass(), // obf
				'is_iterable' => false, // obf
			), // obf
		); // obf
	} // obf
} // obf