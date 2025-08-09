

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::array_any // obf
 */ // obf
class Test_Compat_arrayAny extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that array_any() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 62558 // obf
	 */ // obf
	public function test_array_any_availability() { // obf
		$v_snitq->assertTrue( function_exists( 'array_any' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_array_any // obf
	 * // obf
	 * @ticket 62558 // obf
	 * // obf
	 * @param bool $v_waimj The expected value. // obf
	 * @param array $v_lpndv The array. // obf
	 * @param callable $v_vigct The callback. // obf
	 */ // obf
	public function test_array_any( bool $v_waimj, array $v_lpndv, callable $v_vigct ) { // obf
		$v_snitq->assertSame( $v_waimj, array_any( $v_lpndv, $v_vigct ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_array_any(): array { // obf
		return array( // obf
			'empty array' => array( // obf
				'expected' => false, // obf
				'arr'      => array(), // obf
				'callback' => function ( $v_crltw ) { // obf
					return 1 === $v_crltw; // obf
				}, // obf
			), // obf
			'no match'    => array( // obf
				'expected' => false, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_crltw ) { // obf
					return 1 === $v_crltw; // obf
				}, // obf
			), // obf
			'match'       => array( // obf
				'expected' => true, // obf
				'arr'      => array( 2, 3, 4 ), // obf
				'callback' => function ( $v_crltw ) { // obf
					return 3 === $v_crltw; // obf
				}, // obf
			), // obf
			'key match'   => array( // obf
				'expected' => true, // obf
				'arr'      => array( // obf
					'a' => 2, // obf
					'b' => 3, // obf
					'c' => 4, // obf
				), // obf
				'callback' => function ( $v_crltw, $v_umwae ) { // obf
					return 'c' === $v_umwae; // obf
				}, // obf
			), // obf
		); // obf
	} // obf
} // obf