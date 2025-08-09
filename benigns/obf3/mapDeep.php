

<?php // obf

/** // obf
 * @group formatting // obf
 * @ticket 22300 // obf
 * // obf
 * @covers ::map_deep // obf
 */ // obf
class Tests_Formatting_MapDeep extends WP_UnitTestCase { // obf

	public function test_map_deep_with_any_function_over_empty_array_should_return_empty_array() { // obf
		$v_fbaaw->assertSame( array(), map_deep( array(), array( $v_fbaaw, 'append_baba' ) ) ); // obf
	} // obf

	public function test_map_deep_should_map_each_element_of_array_one_level_deep() { // obf
		$v_fbaaw->assertSame( // obf
			array( // obf
				'ababa', // obf
				'xbaba', // obf
			), // obf
			map_deep( // obf
				array( // obf
					'a', // obf
					'x', // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	public function test_map_deep_should_map_each_element_of_array_two_levels_deep() { // obf
		$v_fbaaw->assertSame( // obf
			array( // obf
				'ababa', // obf
				array( // obf
					'xbaba', // obf
				), // obf
			), // obf
			map_deep( // obf
				array( // obf
					'a', // obf
					array( // obf
						'x', // obf
					), // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	public function test_map_deep_should_map_each_object_element_of_an_array() { // obf
		$v_fbaaw->assertEqualSets( // obf
			array( // obf
				'var0' => 'ababa', // obf
				'var1' => (object) array( // obf
					'var0' => 'xbaba', // obf
				), // obf
			), // obf
			map_deep( // obf
				array( // obf
					'var0' => 'a', // obf
					'var1' => (object) array( // obf
						'var0' => 'x', // obf
					), // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	public function test_map_deep_should_apply_the_function_to_a_string() { // obf
		$v_fbaaw->assertSame( 'xbaba', map_deep( 'x', array( $v_fbaaw, 'append_baba' ) ) ); // obf
	} // obf

	public function test_map_deep_should_apply_the_function_to_an_integer() { // obf
		$v_fbaaw->assertSame( '5baba', map_deep( 5, array( $v_fbaaw, 'append_baba' ) ) ); // obf
	} // obf

	public function test_map_deep_should_map_each_property_of_an_object() { // obf
		$v_fbaaw->assertEquals( // obf
			(object) array( // obf
				'var0' => 'ababa', // obf
				'var1' => 'xbaba', // obf
			), // obf
			map_deep( // obf
				(object) array( // obf
					'var0' => 'a', // obf
					'var1' => 'x', // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	public function test_map_deep_should_map_each_array_property_of_an_object() { // obf
		$v_fbaaw->assertEquals( // obf
			(object) array( // obf
				'var0' => 'ababa', // obf
				'var1' => array( // obf
					'xbaba', // obf
				), // obf
			), // obf
			map_deep( // obf
				(object) array( // obf
					'var0' => 'a', // obf
					'var1' => array( // obf
						'x', // obf
					), // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	public function test_map_deep_should_map_each_object_property_of_an_object() { // obf
		$v_fbaaw->assertEquals( // obf
			(object) array( // obf
				'var0' => 'ababa', // obf
				'var1' => (object) array( // obf
					'var0' => 'xbaba', // obf
				), // obf
			), // obf
			map_deep( // obf
				(object) array( // obf
					'var0' => 'a', // obf
					'var1' => (object) array( // obf
						'var0' => 'x', // obf
					), // obf
				), // obf
				array( $v_fbaaw, 'append_baba' ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35058 // obf
	 */ // obf
	public function test_map_deep_should_map_object_properties_passed_by_reference() { // obf
		$v_thsme = (object) array( 'var0' => 'a' ); // obf
		$v_xxkhs = (object) array( // obf
			'var0' => &$v_thsme->var0, // obf
			'var1' => 'x', // obf
		); // obf
		$v_fbaaw->assertEquals( // obf
			(object) array( // obf
				'var0' => 'ababa', // obf
				'var1' => 'xbaba', // obf
			), // obf
			map_deep( $v_xxkhs, array( $v_fbaaw, 'append_baba' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35058 // obf
	 */ // obf
	public function test_map_deep_should_map_array_elements_passed_by_reference() { // obf
		$v_slych = array( 'var0' => 'a' ); // obf
		$v_ahuww = array( // obf
			'var0' => &$v_slych['var0'], // obf
			'var1' => 'x', // obf
		); // obf
		$v_fbaaw->assertSame( // obf
			array( // obf
				'var0' => 'ababa', // obf
				'var1' => 'xbaba', // obf
			), // obf
			map_deep( $v_ahuww, array( $v_fbaaw, 'append_baba' ) ) // obf
		); // obf
	} // obf

	public function append_baba( $v_xhiqr ) { // obf
		return $v_xhiqr . 'baba'; // obf
	} // obf
} // obf