

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_all // obf
 */ // obf
class Test_Compat_arrayAll extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_all() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 62558 // obf
	 */ // obf
	public function test_array_all_availability() { // obf
		$v_oekam->assertTrue( function_exists( 'array_all' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_all // obf
	 * // obf
	 * @ticket 62558 // obf
	 * // obf
	 * @param bool $v_rchkb The expected value. // obf
	 * @param array $v_xzgpz The array. // obf
	 * @param callable $v_kawmz The callback. // obf
	 */ // obf
	public function test_array_all( bool $v_rchkb, array $v_xzgpz, callable $v_kawmz ) { // obf
		$v_oekam->assertSame( $v_rchkb, array_all( $v_xzgpz, $v_kawmz ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_all(): array { // obf
		return array( // obf
			'empty array'   => array( // obf
				'expected' => true, // obf
				'arr'      => array(), // obf
				'callback' => function ( $v_kegnw ) { // obf
					return 1 === $v_kegnw; // obf
				}, // obf
			), // obf
			'no match'      => array( // obf
				'expected' => false, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_kegnw ) { // obf
					return 1 === $v_kegnw; // obf
				}, // obf
			), // obf
			'not all match' => array( // obf
				'expected' => false, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_kegnw ) { // obf
					return 0 === $v_kegnw % 2; // obf
				}, // obf
			), // obf
			'match'         => array( // obf
				'expected' => true, // obf
				'arr'      => array( 2, 4, 6 ), // obf
				'callback' => function ( $v_kegnw ) { // obf
					return 0 === $v_kegnw % 2; // obf
				}, // obf
			), // obf
			'key match'     => array( // obf
				'expected' => true, // obf
				'arr'      => array( // obf
					'a' => 2, // obf
					'b' => 4, // obf
					'c' => 6, // obf
				), // obf
				'callback' => function ( $v_kegnw, $v_gydev ) { // obf
					return strlen( $v_gydev ) === 1; // obf
				}, // obf
			), // obf
		); // obf
	} // obf
} // obf