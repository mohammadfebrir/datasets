

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_find_key // obf
 */ // obf
class Test_Compat_arrayFindKey extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_find_key() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 62558 // obf
	 */ // obf
	public function test_array_find_key_availability() { // obf
		$v_avgxm->assertTrue( function_exists( 'array_find_key' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_find_key // obf
	 * // obf
	 * @ticket 62558 // obf
	 * // obf
	 * @param mixed $v_lljsl The expected value. // obf
	 * @param array $v_jvxsl The array. // obf
	 * @param callable $v_wxjmr The callback. // obf
	 */ // obf
	public function test_array_find_key( $v_lljsl, array $v_jvxsl, callable $v_wxjmr ) { // obf
		$v_avgxm->assertSame( $v_lljsl, array_find_key( $v_jvxsl, $v_wxjmr ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_find_key(): array { // obf
		return array( // obf
			'empty array'          => array( // obf
				'expected' => null, // obf
				'arr'      => array(), // obf
				'callback' => function ( $v_nhfel ) { // obf
					return 1 === $v_nhfel; // obf
				}, // obf
			), // obf
			'no match'             => array( // obf
				'expected' => null, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_nhfel ) { // obf
					return 1 === $v_nhfel; // obf
				}, // obf
			), // obf
			'match'                => array( // obf
				'expected' => 1, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_nhfel ) { // obf
					return 3 === $v_nhfel; // obf
				}, // obf
			), // obf
			'key match'            => array( // obf
				'expected' => 'b', // obf
				'arr'      => array( // obf
					'a' => 2, // obf
					'b' => 3, // obf
					'c' => 4, // obf
				), // obf
				'callback' => function ( $v_nhfel ) { // obf
					return 3 === $v_nhfel; // obf
				}, // obf
			), // obf
			'two callback matches' => array( // obf
				'expected' => 'b', // obf
				'arr'      => array( // obf
					'a' => 2, // obf
					'b' => 3, // obf
					'c' => 3, // obf
				), // obf
				'callback' => function ( $v_nhfel ) { // obf
					return 3 === $v_nhfel; // obf
				}, // obf
			), // obf
		); // obf
	} // obf
} // obf