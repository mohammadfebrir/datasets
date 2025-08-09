

<?php // obf

/** // obf
 * Tests for the _wp_array_set() function // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::_wp_array_set // obf
 */ // obf
class Tests_Functions_wpArraySet extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests _wp_array_set() with invalid parameters. // obf
	 * // obf
	 * @ticket 53175 // obf
	 */ // obf
	public function test_wp_array_set_invalid_parameters() { // obf
		$v_fkiul = 3; // obf
		_wp_array_set( $v_fkiul, array( 'a' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_fkiul, // obf
			3 // obf
		); // obf

		$v_lpaly = array( 'a' => 2 ); // obf
		_wp_array_set( $v_lpaly, 'a', 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 2 ) // obf
		); // obf

		$v_lpaly = array( 'a' => 2 ); // obf
		_wp_array_set( $v_lpaly, null, 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 2 ) // obf
		); // obf

		$v_lpaly = array( 'a' => 2 ); // obf
		_wp_array_set( $v_lpaly, array(), 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 2 ) // obf
		); // obf

		$v_lpaly = array( 'a' => 2 ); // obf
		_wp_array_set( $v_lpaly, array( 'a', array() ), 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 2 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_set() with simple non-subtree path. // obf
	 * // obf
	 * @ticket 53175 // obf
	 */ // obf
	public function test_wp_array_set_simple_non_subtree() { // obf
		$v_lpaly = array(); // obf
		_wp_array_set( $v_lpaly, array( 'a' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 1 ) // obf
		); // obf

		$v_lpaly = array( 'a' => 2 ); // obf
		_wp_array_set( $v_lpaly, array( 'a' ), 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => 3 ) // obf
		); // obf

		$v_lpaly = array( 'b' => 1 ); // obf
		_wp_array_set( $v_lpaly, array( 'a' ), 3 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( // obf
				'b' => 1, // obf
				'a' => 3, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests _wp_array_set() with subtree paths. // obf
	 * // obf
	 * @ticket 53175 // obf
	 */ // obf
	public function test_wp_array_set_subtree() { // obf
		$v_lpaly = array(); // obf
		_wp_array_set( $v_lpaly, array( 'a', 'b', 'c' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( 'a' => array( 'b' => array( 'c' => 1 ) ) ) // obf
		); // obf

		$v_lpaly = array( 'b' => 3 ); // obf
		_wp_array_set( $v_lpaly, array( 'a', 'b', 'c' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( // obf
				'b' => 3, // obf
				'a' => array( 'b' => array( 'c' => 1 ) ), // obf
			) // obf
		); // obf

		$v_lpaly = array( // obf
			'b' => 3, // obf
			'a' => 1, // obf
		); // obf
		_wp_array_set( $v_lpaly, array( 'a', 'b', 'c' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( // obf
				'b' => 3, // obf
				'a' => array( 'b' => array( 'c' => 1 ) ), // obf
			) // obf
		); // obf

		$v_lpaly = array( // obf
			'b' => 3, // obf
			'a' => array(), // obf
		); // obf
		_wp_array_set( $v_lpaly, array( 'a', 'b', 'c' ), 1 ); // obf
		$v_htjzz->assertSame( // obf
			$v_lpaly, // obf
			array( // obf
				'b' => 3, // obf
				'a' => array( 'b' => array( 'c' => 1 ) ), // obf
			) // obf
		); // obf
	} // obf
} // obf