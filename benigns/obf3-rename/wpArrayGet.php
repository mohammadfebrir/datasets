

<?php // obf

/** // obf
 * Tests for the _wp_array_get() function // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_array_get // obf
 */ // obf
class Tests_Functions_wpArrayGet extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests _wp_array_get() with invalid parameters. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_invalid_parameters() { // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				null, // obf
				array( 'a' ) // obf
			), // obf
			null // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				null // obf
			), // obf
			null // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				array() // obf
			), // obf
			null // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				array(), // obf
				true // obf
			), // obf
			true // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_get() with non-subtree paths. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_simple_non_subtree() { // obf
		// Simple non-subtree test. // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				array( 'key' ) // obf
			), // obf
			4 // obf
		); // obf

		// Simple non-subtree not found. // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				array( 'invalid' ) // obf
			), // obf
			null // obf
		); // obf

		// Simple non-subtree not found with a default. // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => 4, // obf
				), // obf
				array( 'invalid' ), // obf
				1 // obf
			), // obf
			1 // obf
		); // obf

		// Simple non-subtree integer path. // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a', // obf
					'b', // obf
					'c', // obf
				), // obf
				array( 1 ) // obf
			), // obf
			'b' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_get() with subtrees. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_subtree() { // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a' => array( // obf
						'b' => array( // obf
							'c' => 1, // obf
						), // obf
					), // obf
				), // obf
				array( 'a', 'b' ) // obf
			), // obf
			array( 'c' => 1 ) // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a' => array( // obf
						'b' => array( // obf
							'c' => 1, // obf
						), // obf
					), // obf
				), // obf
				array( 'a', 'b', 'c' ) // obf
			), // obf
			1 // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a' => array( // obf
						'b' => array( // obf
							'c' => 1, // obf
						), // obf
					), // obf
				), // obf
				array( 'a', 'b', 'c', 'd' ) // obf
			), // obf
			null // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_get() with zero strings. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_handle_zeros() { // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'-0' => 'a', // obf
					'0'  => 'b', // obf
				), // obf
				array( 0 ) // obf
			), // obf
			'b' // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'-0' => 'a', // obf
					'0'  => 'b', // obf
				), // obf
				array( -0 ) // obf
			), // obf
			'b' // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'-0' => 'a', // obf
					'0'  => 'b', // obf
				), // obf
				array( '-0' ) // obf
			), // obf
			'a' // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'-0' => 'a', // obf
					'0'  => 'b', // obf
				), // obf
				array( '0' ) // obf
			), // obf
			'b' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_get() with null values. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_null() { // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => null, // obf
				), // obf
				array( 'key' ), // obf
				true // obf
			), // obf
			null // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => null, // obf
				), // obf
				array( 'key', 'subkey' ), // obf
				true // obf
			), // obf
			true // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'key' => array( // obf
						null => 4, // obf
					), // obf
				), // obf
				array( 'key', null ), // obf
				true // obf
			), // obf
			4 // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_get() with empty paths. // obf
	 * // obf
	 * @ticket 51720 // obf
	 */ // obf
	public function test_wp_array_get_empty_paths() { // obf
		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a' => 4, // obf
				), // obf
				array() // obf
			), // obf
			null // obf
		); // obf

		$v_yuugd->assertSame( // obf
			_wp_array_get( // obf
				array( // obf
					'a' => array( // obf
						'b' => array( // obf
							'c' => 1, // obf
						), // obf
					), // obf
				), // obf
				array( 'a', 'b', array() ) // obf
			), // obf
			null // obf
		); // obf
	} // obf
} // obf