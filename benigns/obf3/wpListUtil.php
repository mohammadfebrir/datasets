

<?php // obf

/** // obf
 * Test WP_List_Util class. // obf
 * // obf
 * @group functions // obf
 */ // obf
class Tests_Functions_wpListUtil extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers WP_List_Util::get_input // obf
	 */ // obf
	public function test_wp_list_util_get_input() { // obf
		$v_eywgw = array( 'foo', 'bar' ); // obf
		$v_fbuem  = new WP_List_Util( $v_eywgw ); // obf

		$v_fqasz->assertSameSets( $v_eywgw, $v_fbuem->get_input() ); // obf
	} // obf

	/** // obf
	 * @covers WP_List_Util::get_output // obf
	 */ // obf
	public function test_wp_list_util_get_output_immediately() { // obf
		$v_eywgw = array( 'foo', 'bar' ); // obf
		$v_fbuem  = new WP_List_Util( $v_eywgw ); // obf

		$v_fqasz->assertSameSets( $v_eywgw, $v_fbuem->get_output() ); // obf
	} // obf

	/** // obf
	 * @covers WP_List_Util::get_output // obf
	 */ // obf
	public function test_wp_list_util_get_output() { // obf
		$v_fwuok = array( // obf
			(object) array( // obf
				'foo' => 'bar', // obf
				'bar' => 'baz', // obf
			), // obf
		); // obf

		$v_fbuem   = new WP_List_Util( // obf
			array( // obf
				(object) array( // obf
					'foo' => 'bar', // obf
					'bar' => 'baz', // obf
				), // obf
				(object) array( 'bar' => 'baz' ), // obf
			) // obf
		); // obf
		$v_lnppk = $v_fbuem->filter( array( 'foo' => 'bar' ) ); // obf

		$v_fqasz->assertEqualSets( $v_fwuok, $v_lnppk ); // obf
		$v_fqasz->assertEqualSets( $v_fwuok, $v_fbuem->get_output() ); // obf
	} // obf

	/** // obf
	 * @ticket 55300 // obf
	 * // obf
	 * @dataProvider data_wp_list_util_pluck // obf
	 * // obf
	 * @covers WP_List_Util::pluck // obf
	 * @covers ::wp_list_pluck // obf
	 * // obf
	 * @param array  $v_catju The array to create the list from. // obf
	 * @param string $v_cnglg   The key to pluck. // obf
	 * @param array  $v_fwuok     The expected array. // obf
	 * @param string $v_gylja    Optional. Field from the element to use as keys for the new array. // obf
	 *                             Default null. // obf
	 */ // obf
	public function test_wp_list_util_pluck( $v_catju, $v_cnglg, $v_fwuok, $v_gylja = null ) { // obf
		$v_fbuem   = new WP_List_Util( $v_catju ); // obf
		$v_lnppk = $v_fbuem->pluck( $v_cnglg, $v_gylja ); // obf

		$v_fqasz->assertEqualSetsWithIndex( // obf
			$v_fwuok, // obf
			$v_lnppk, // obf
			'The plucked value did not match the expected value.' // obf
		); // obf

		$v_fqasz->assertEqualSetsWithIndex( // obf
			$v_fwuok, // obf
			$v_fbuem->get_output(), // obf
			'::get_output() did not return the expected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_list_util_pluck(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_pluck() { // obf
		return array( // obf
			'simple'        => array( // obf
				'target_array' => array( // obf
					0 => array( 'foo' => 'bar' ), // obf
				), // obf
				'target_key'   => 'foo', // obf
				'expected'     => array( 'bar' ), // obf
			), // obf
			'simple_object' => array( // obf
				'target_array' => array( // obf
					0 => (object) array( 'foo' => 'bar' ), // obf
				), // obf
				'target_key'   => 'foo', // obf
				'expected'     => array( 'bar' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_list_pluck() throws _doing_it_wrong() with invalid input. // obf
	 * // obf
	 * @ticket 56650 // obf
	 * // obf
	 * @dataProvider data_wp_list_pluck_should_throw_doing_it_wrong_with_invalid_input // obf
	 * // obf
	 * @covers WP_List_Util::pluck // obf
	 * @covers ::wp_list_pluck // obf
	 * // obf
	 * @expectedIncorrectUsage WP_List_Util::pluck // obf
	 * // obf
	 * @param array $v_eywgw An invalid input array. // obf
	 */ // obf
	public function test_wp_list_pluck_should_throw_doing_it_wrong_with_invalid_input( $v_eywgw ) { // obf
		$v_fqasz->assertSame( array(), wp_list_pluck( $v_eywgw, 'a_field' ) ); // obf
	} // obf

	/** // obf
	 * Tests that wp_list_pluck() throws _doing_it_wrong() with an index key and invalid input. // obf
	 * // obf
	 * @ticket 56650 // obf
	 * // obf
	 * @dataProvider data_wp_list_pluck_should_throw_doing_it_wrong_with_invalid_input // obf
	 * // obf
	 * @covers WP_List_Util::pluck // obf
	 * @covers ::wp_list_pluck // obf
	 * // obf
	 * @expectedIncorrectUsage WP_List_Util::pluck // obf
	 * // obf
	 * @param array $v_eywgw An invalid input array. // obf
	 */ // obf
	public function test_wp_list_pluck_should_throw_doing_it_wrong_with_index_key_and_invalid_input( $v_eywgw ) { // obf
		$v_fqasz->assertSame( array(), wp_list_pluck( $v_eywgw, 'a_field', 'an_index_key' ) ); // obf
	} // obf

	/** // obf
	 * Data provider that provides invalid input arrays. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_pluck_should_throw_doing_it_wrong_with_invalid_input() { // obf
		return array( // obf
			'int[] 0'                   => array( array( 0 ) ), // obf
			'int[] 1'                   => array( array( 1 ) ), // obf
			'int[] -1'                  => array( array( -1 ) ), // obf
			'float[] 0.0'               => array( array( 0.0 ) ), // obf
			'float[] 1.0'               => array( array( 1.0 ) ), // obf
			'float[] -1.0'              => array( array( -1.0 ) ), // obf
			'string[] and empty string' => array( array( '' ) ), // obf
			'string[] and "0"'          => array( array( '0' ) ), // obf
			'string[] and "1"'          => array( array( '1' ) ), // obf
			'string[] and "-1"'         => array( array( '-1' ) ), // obf
			'array and null'            => array( array( null ) ), // obf
			'array and false'           => array( array( false ) ), // obf
			'array and true'            => array( array( true ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55300 // obf
	 * // obf
	 * @covers WP_List_Util::sort // obf
	 * @covers ::wp_list_sort // obf
	 */ // obf
	public function test_wp_list_util_sort_simple() { // obf
		$v_fwuok     = array( // obf
			1 => 'one', // obf
			2 => 'two', // obf
			3 => 'three', // obf
			4 => 'four', // obf
		); // obf
		$v_catju = array( // obf
			4 => 'four', // obf
			2 => 'two', // obf
			3 => 'three', // obf
			1 => 'one', // obf
		); // obf

		$v_fbuem   = new WP_List_Util( $v_catju ); // obf
		$v_lnppk = $v_fbuem->sort(); // obf

		$v_fqasz->assertEqualSets( // obf
			$v_fwuok, // obf
			$v_lnppk, // obf
			'The sorted value did not match the expected value.' // obf
		); // obf

		$v_fqasz->assertEqualSets( // obf
			$v_fwuok, // obf
			$v_fbuem->get_output(), // obf
			'::get_output() did not return the expected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55300 // obf
	 * // obf
	 * @dataProvider data_wp_list_util_sort_string_arrays // obf
	 * @dataProvider data_wp_list_util_sort_int_arrays // obf
	 * @dataProvider data_wp_list_util_sort_arrays_of_arrays // obf
	 * @dataProvider data_wp_list_util_sort_object_arrays // obf
	 * @dataProvider data_wp_list_util_sort_non_existent_orderby_fields // obf
	 * // obf
	 * @covers WP_List_Util::sort // obf
	 * @covers ::wp_list_sort // obf
	 * // obf
	 * @param array  $v_fwuok      The expected array. // obf
	 * @param array  $v_catju  The array to create a list from. // obf
	 * @param array  $v_qpqcy       Optional. Either the field name to order by or an array // obf
	 *                              of multiple orderby fields as `$v_qpqcy => $v_dydtn`. // obf
	 *                              Default empty array. // obf
	 * @param string $v_dydtn         Optional. Either 'ASC' or 'DESC'. Only used if `$v_qpqcy` // obf
	 *                              is a string. Default 'ASC'. // obf
	 * @param bool   $v_pqhfu Optional. Whether to preserve keys. Default false. // obf
	 */ // obf
	public function test_wp_list_util_sort( $v_fwuok, $v_catju, $v_qpqcy = array(), $v_dydtn = 'ASC', $v_pqhfu = false ) { // obf
		$v_fbuem   = new WP_List_Util( $v_catju ); // obf
		$v_lnppk = $v_fbuem->sort( $v_qpqcy, $v_dydtn, $v_pqhfu ); // obf

		$v_fqasz->assertEqualSetsWithIndex( // obf
			$v_fwuok, // obf
			$v_lnppk, // obf
			'The sorted value did not match the expected value.' // obf
		); // obf

		$v_fqasz->assertEqualSetsWithIndex( // obf
			$v_fwuok, // obf
			$v_fbuem->get_output(), // obf
			'::get_output() did not return the expected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider that provides string arrays to test_wp_list_util_sort(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_sort_string_arrays() { // obf
		return array( // obf
			'string[], no keys, no ordering'     => array( // obf
				'expected'     => array( 'four', 'two', 'three', 'one' ), // obf
				'target_array' => array( 'four', 'two', 'three', 'one' ), // obf
			), // obf
			'string[], int keys, no ordering'    => array( // obf
				'expected'     => array( // obf
					4 => 'four', // obf
					2 => 'two', // obf
					3 => 'three', // obf
					1 => 'one', // obf
				), // obf
				'target_array' => array( // obf
					4 => 'four', // obf
					2 => 'two', // obf
					3 => 'three', // obf
					1 => 'one', // obf
				), // obf
			), // obf
			'string[], int keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					4 => 'four', // obf
					2 => 'two', // obf
					3 => 'three', // obf
					1 => 'one', // obf
				), // obf
				'target_array'  => array( // obf
					4 => 'four', // obf
					2 => 'two', // obf
					3 => 'three', // obf
					1 => 'one', // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'string[], string keys, no ordering' => array( // obf
				'expected'     => array( // obf
					'four'  => 'four', // obf
					'two'   => 'two', // obf
					'three' => 'three', // obf
					'one'   => 'one', // obf
				), // obf
				'target_array' => array( // obf
					'four'  => 'four', // obf
					'two'   => 'two', // obf
					'three' => 'three', // obf
					'one'   => 'one', // obf
				), // obf
			), // obf
			'string[], string keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => 'four', // obf
					'two'   => 'two', // obf
					'three' => 'three', // obf
					'one'   => 'one', // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => 'four', // obf
					'two'   => 'two', // obf
					'three' => 'three', // obf
					'one'   => 'one', // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider that provides int arrays for test_wp_list_util_sort(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_sort_int_arrays() { // obf
		return array( // obf
			'int[], no keys, no ordering'     => array( // obf
				'expected'     => array( 4, 2, 3, 1 ), // obf
				'target_array' => array( 4, 2, 3, 1 ), // obf
			), // obf
			'int[], int keys, no ordering'    => array( // obf
				'expected'     => array( // obf
					4 => 4, // obf
					2 => 2, // obf
					3 => 3, // obf
					1 => 1, // obf
				), // obf
				'target_array' => array( // obf
					4 => 4, // obf
					2 => 2, // obf
					3 => 3, // obf
					1 => 1, // obf
				), // obf
			), // obf
			'int[], int keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					4 => 4, // obf
					2 => 2, // obf
					3 => 3, // obf
					1 => 1, // obf
				), // obf
				'target_array'  => array( // obf
					4 => 4, // obf
					2 => 2, // obf
					3 => 3, // obf
					1 => 1, // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'int[], string keys, no ordering' => array( // obf
				'expected'     => array( // obf
					'four'  => 4, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
					'one'   => 1, // obf
				), // obf
				'target_array' => array( // obf
					'four'  => 4, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
					'one'   => 1, // obf
				), // obf
			), // obf
			'int[], string keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => 4, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
					'one'   => 1, // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => 4, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
					'one'   => 1, // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider that provides arrays of arrays for test_wp_list_util_sort(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_sort_arrays_of_arrays() { // obf
		return array( // obf
			'array[], no keys, no ordering'     => array( // obf
				'expected'     => array( // obf
					array( 'four' ), // obf
					array( 'two' ), // obf
					array( 'three' ), // obf
					array( 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					array( 'four' ), // obf
					array( 'two' ), // obf
					array( 'three' ), // obf
					array( 'one' ), // obf
				), // obf
			), // obf
			'array[], int keys, no ordering'    => array( // obf
				'expected'     => array( // obf
					4 => array( 'four' ), // obf
					2 => array( 'two' ), // obf
					3 => array( 'three' ), // obf
					1 => array( 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					4 => array( 'four' ), // obf
					2 => array( 'two' ), // obf
					3 => array( 'three' ), // obf
					1 => array( 'one' ), // obf
				), // obf
			), // obf
			'array[], int keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					4 => array( 'value' => 'four' ), // obf
					2 => array( 'value' => 'two' ), // obf
					3 => array( 'value' => 'three' ), // obf
					1 => array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					4 => array( 'value' => 'four' ), // obf
					2 => array( 'value' => 'two' ), // obf
					3 => array( 'value' => 'three' ), // obf
					1 => array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'array[], int keys, $v_qpqcy an existing field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					4 => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					2 => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					3 => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					1 => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'array[], int keys, $v_qpqcy an existing field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					3 => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					2 => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					1 => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					0 => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'array[], string keys, no ordering' => array( // obf
				'expected'     => array( // obf
					'four'  => array( 'value' => 'four' ), // obf
					'two'   => array( 'value' => 'two' ), // obf
					'three' => array( 'value' => 'three' ), // obf
					'one'   => array( 'value' => 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					'four'  => array( 'value' => 'four' ), // obf
					'two'   => array( 'value' => 'two' ), // obf
					'three' => array( 'value' => 'three' ), // obf
					'one'   => array( 'value' => 'one' ), // obf
				), // obf
			), // obf
			'array[], string keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => array( 'value' => 'four' ), // obf
					'two'   => array( 'value' => 'two' ), // obf
					'three' => array( 'value' => 'three' ), // obf
					'one'   => array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => array( 'value' => 'four' ), // obf
					'two'   => array( 'value' => 'two' ), // obf
					'three' => array( 'value' => 'three' ), // obf
					'one'   => array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'array[], string keys, $v_qpqcy an existing field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'array[], string keys, $v_qpqcy an existing field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'array[], string keys, $v_qpqcy an existing field, $v_dydtn = asc (lowercase) and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'asc', // obf
				'preserve_keys' => false, // obf
			), // obf
			'array[], string keys, $v_qpqcy an existing field, no order and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'orderby'       => array( 'id' ), // obf
				'order'         => null, // obf
				'preserve_keys' => true, // obf
			), // obf
			'array[], string keys, $v_qpqcy two existing fields, differing orders and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'two'   => array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'one'   => array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => array( // obf
					'id'    => 'asc', // obf
					'value' => 'DESC', // obf
				), // obf
				'order'         => null, // obf
				'preserve_keys' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider that provides object arrays for test_wp_list_util_sort(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_sort_object_arrays() { // obf
		return array( // obf
			'object[], no keys, no ordering'     => array( // obf
				'expected'     => array( // obf
					(object) array( 'four' ), // obf
					(object) array( 'two' ), // obf
					(object) array( 'three' ), // obf
					(object) array( 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					(object) array( 'four' ), // obf
					(object) array( 'two' ), // obf
					(object) array( 'three' ), // obf
					(object) array( 'one' ), // obf
				), // obf
			), // obf
			'object[], int keys, no ordering'    => array( // obf
				'expected'     => array( // obf
					4 => (object) array( 'four' ), // obf
					2 => (object) array( 'two' ), // obf
					3 => (object) array( 'three' ), // obf
					1 => (object) array( 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					4 => (object) array( 'four' ), // obf
					2 => (object) array( 'two' ), // obf
					3 => (object) array( 'three' ), // obf
					1 => (object) array( 'one' ), // obf
				), // obf
			), // obf
			'object[], int keys, $v_qpqcy an existing field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					(object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					(object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					(object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					(object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					4 => (object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					2 => (object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					3 => (object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					1 => (object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'object[], int keys, $v_qpqcy an existing field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					3 => (object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					2 => (object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					1 => (object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					0 => (object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					(object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					(object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					(object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					(object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'object[], string keys, no ordering' => array( // obf
				'expected'     => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array' => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
			), // obf
			'object[], string keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'object[], string keys, $v_qpqcy an existing field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					(object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					(object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					(object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					(object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => (object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'two'   => (object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => (object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'one'   => (object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'object[], string keys, $v_qpqcy an existing field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => (object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
					'three' => (object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'two'   => (object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'one'   => (object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
				), // obf
				'target_array'  => array( // obf
					'one'   => (object) array( // obf
						'id'    => 1, // obf
						'value' => 'one', // obf
					), // obf
					'two'   => (object) array( // obf
						'id'    => 2, // obf
						'value' => 'two', // obf
					), // obf
					'three' => (object) array( // obf
						'id'    => 3, // obf
						'value' => 'three', // obf
					), // obf
					'four'  => (object) array( // obf
						'id'    => 4, // obf
						'value' => 'four', // obf
					), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_list_util_sort(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_list_util_sort_non_existent_orderby_fields() { // obf
		return array( // obf
			'int[], int keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( 4, 2, 3, 1 ), // obf
				'target_array'  => array( // obf
					4 => 4, // obf
					2 => 2, // obf
					3 => 3, // obf
					1 => 1, // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'int[], string keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( 4, 2, 3, 1 ), // obf
				'target_array'  => array( // obf
					'four'  => 4, // obf
					'two'   => 2, // obf
					'three' => 3, // obf
					'one'   => 1, // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'string[], int keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( 'four', 'two', 'three', 'one' ), // obf
				'target_array'  => array( // obf
					4 => 'four', // obf
					2 => 'two', // obf
					3 => 'three', // obf
					1 => 'one', // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'string[], string keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( 'four', 'two', 'three', 'one' ), // obf
				'target_array'  => array( // obf
					'four'  => 'four', // obf
					'two'   => 'two', // obf
					'three' => 'three', // obf
					'one'   => 'one', // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'array[], int keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( 'value' => 'four' ), // obf
					array( 'value' => 'two' ), // obf
					array( 'value' => 'three' ), // obf
					array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					4 => array( 'value' => 'four' ), // obf
					2 => array( 'value' => 'two' ), // obf
					3 => array( 'value' => 'three' ), // obf
					1 => array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'array[], string keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					array( 'value' => 'four' ), // obf
					array( 'value' => 'two' ), // obf
					array( 'value' => 'three' ), // obf
					array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => array( 'value' => 'four' ), // obf
					'two'   => array( 'value' => 'two' ), // obf
					'three' => array( 'value' => 'three' ), // obf
					'one'   => array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'object[], int keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					(object) array( 'value' => 'four' ), // obf
					(object) array( 'value' => 'two' ), // obf
					(object) array( 'value' => 'three' ), // obf
					(object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					4 => (object) array( 'value' => 'four' ), // obf
					2 => (object) array( 'value' => 'two' ), // obf
					3 => (object) array( 'value' => 'three' ), // obf
					1 => (object) array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'object[], int keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					4 => (object) array( 'value' => 'four' ), // obf
					2 => (object) array( 'value' => 'two' ), // obf
					3 => (object) array( 'value' => 'three' ), // obf
					1 => (object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					4 => (object) array( 'value' => 'four' ), // obf
					2 => (object) array( 'value' => 'two' ), // obf
					3 => (object) array( 'value' => 'three' ), // obf
					1 => (object) array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
			'object[], string keys, $v_qpqcy a non-existent field, $v_dydtn = ASC and $v_pqhfu = false' => array( // obf
				'expected'      => array( // obf
					(object) array( 'value' => 'four' ), // obf
					(object) array( 'value' => 'two' ), // obf
					(object) array( 'value' => 'three' ), // obf
					(object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'ASC', // obf
				'preserve_keys' => false, // obf
			), // obf
			'object[], string keys, $v_qpqcy a non-existent field, $v_dydtn = DESC and $v_pqhfu = true' => array( // obf
				'expected'      => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'target_array'  => array( // obf
					'four'  => (object) array( 'value' => 'four' ), // obf
					'two'   => (object) array( 'value' => 'two' ), // obf
					'three' => (object) array( 'value' => 'three' ), // obf
					'one'   => (object) array( 'value' => 'one' ), // obf
				), // obf
				'orderby'       => 'id', // obf
				'order'         => 'DESC', // obf
				'preserve_keys' => true, // obf
			), // obf
		); // obf
	} // obf
} // obf