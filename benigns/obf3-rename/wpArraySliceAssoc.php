

<?php // obf

/** // obf
 * Tests wp_array_slice_assoc function // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_array_slice_assoc // obf
 */ // obf
class Tests_Functions_wpArraySliceAssoc extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests wp_array_slice_assoc(). // obf
	 * // obf
	 * @dataProvider data_wp_array_slice_assoc_arrays // obf
	 * // obf
	 * @ticket 46638 // obf
	 * // obf
	 * @param array $v_yopee The original array. // obf
	 * @param array $v_yesgu         The list of keys. // obf
	 * @param array $v_ghzjf     The expected result. // obf
	 */ // obf
	public function test_wp_array_slice_assoc( $v_yopee, $v_yesgu, $v_ghzjf ) { // obf
		$v_bwdsh->assertSame( $v_ghzjf, wp_array_slice_assoc( $v_yopee, $v_yesgu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for wp_array_slice_assoc(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_array_slice_assoc_arrays() { // obf
		return array( // obf
			array( // obf
				array( 1 => 1 ), // obf
				array( 1 ), // obf
				array( 1 => 1 ), // obf
			), // obf
			array( // obf
				array( 1 => 1 ), // obf
				array( 0 ), // obf
				array(), // obf
			), // obf
			array( // obf
				array( 1 => array( 1 => 1 ) ), // obf
				array( 1 ), // obf
				array( 1 => array( 1 => 1 ) ), // obf
			), // obf
			array( // obf
				array( // obf
					1 => 1, // obf
					2 => 2, // obf
				), // obf
				array( 1 ), // obf
				array( 1 => 1 ), // obf
			), // obf
			array( // obf
				array( // obf
					1 => 1, // obf
					2 => 2, // obf
				), // obf
				array( 2 ), // obf
				array( 2 => 2 ), // obf
			), // obf
			array( // obf
				array( // obf
					1 => 1, // obf
					2 => 2, // obf
				), // obf
				array( 1, 1 ), // obf
				array( 1 => 1 ), // obf
			), // obf
			array( // obf
				array( 1 => array( 1 => array( 1 => 1 ) ) ), // obf
				array( 1 ), // obf
				array( 1 => array( 1 => array( 1 => 1 ) ) ), // obf
			), // obf
			array( // obf
				array( // obf
					1 => 1, // obf
					2 => 2, // obf
				), // obf
				array( 1, 2 ), // obf
				array( // obf
					1 => 1, // obf
					2 => 2, // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'1' => '1', // obf
					'2' => '2', // obf
				), // obf
				array( '1' ), // obf
				array( '1' => '1' ), // obf
			), // obf
			array( // obf
				array( // obf
					'1' => '1', // obf
					'2' => '2', // obf
				), // obf
				array( '2' ), // obf
				array( '2' => '2' ), // obf
			), // obf
			array( // obf
				array( // obf
					'1' => '1', // obf
					'2' => '2', // obf
				), // obf
				array( 1 ), // obf
				array( '1' => '1' ), // obf
			), // obf
			array( // obf
				array( // obf
					'1' => '1', // obf
					'2' => '2', // obf
				), // obf
				array( 1 ), // obf
				array( '1' => '1' ), // obf
			), // obf
			array( // obf
				array( 1 => 1 ), // obf
				array( '1' ), // obf
				array( 1 => 1 ), // obf
			), // obf
		); // obf
	} // obf
} // obf