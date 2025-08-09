

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_find // obf
 */ // obf
class Tests_Compat_arrayFind extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_find() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 62558 // obf
	 */ // obf
	public function test_array_find_availability() { // obf
		$v_mpfdx->assertTrue( function_exists( 'array_find' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_find // obf
	 * // obf
	 * @ticket 62558 // obf
	 * // obf
	 * @param mixed $v_izzua The expected value. // obf
	 * @param array $v_unabe      The array. // obf
	 * @param callable $v_vszlv The needle. // obf
	 */ // obf
	public function test_array_find( $v_izzua, array $v_unabe, callable $v_vszlv ) { // obf
		$v_mpfdx->assertSame( $v_izzua, array_find( $v_unabe, $v_vszlv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_find(): array { // obf
		return array( // obf
			'empty array'          => array( // obf
				'expected' => null, // obf
				'arr'      => array(), // obf
				'callback' => function ( $v_gtswg ) { // obf
					return 1 === $v_gtswg; // obf
				}, // obf
			), // obf
			'no match'             => array( // obf
				'expected' => null, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_gtswg ) { // obf
					return 1 === $v_gtswg; // obf
				}, // obf
			), // obf
			'match'                => array( // obf
				'expected' => 3, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_gtswg ) { // obf
					return 3 === $v_gtswg; // obf
				}, // obf
			), // obf
			'key match'            => array( // obf
				'expected' => 3, // obf
				'arr'      => array( // obf
					'a' => 2, // obf
					'b' => 3, // obf
					'c' => 4, // obf
				), // obf
				'callback' => function ( $v_gtswg ) { // obf
					return 3 === $v_gtswg; // obf
				}, // obf
			), // obf
			'two callback matches' => array( // obf
				'expected' => 2, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_gtswg ) { // obf
					return 0 === $v_gtswg % 2; // obf
				}, // obf
			), // obf

		); // obf
	} // obf
} // obf