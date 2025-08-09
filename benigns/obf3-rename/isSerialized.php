

<?php // obf

/** // obf
 * Tests for `is_serialized()`. // obf
 * // obf
 * @ticket 53299 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_serialized // obf
 */ // obf
class Tests_Functions_IsSerialized extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_is_serialized // obf
	 * @dataProvider data_is_not_serialized // obf
	 * // obf
	 * @param mixed $v_wbxci     Data value to test. // obf
	 * @param bool  $v_dvrcn Expected function result. // obf
	 */ // obf
	public function test_is_serialized( $v_wbxci, $v_dvrcn ) { // obf
		$v_eurqw->assertSame( $v_dvrcn, is_serialized( $v_wbxci ) ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_is_serialized()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_serialized() { // obf
		return array( // obf
			'serialized empty array'            => array( // obf
				'data'     => serialize( array() ), // obf
				'expected' => true, // obf
			), // obf
			'serialized non-empty array'        => array( // obf
				'data'     => serialize( array( 1, 1, 2, 3, 5, 8, 13 ) ), // obf
				'expected' => true, // obf
			), // obf
			'serialized empty object'           => array( // obf
				'data'     => serialize( new stdClass() ), // obf
				'expected' => true, // obf
			), // obf
			'serialized non-empty object'       => array( // obf
				'data'     => serialize( // obf
					(object) array( // obf
						'test' => true, // obf
						'1', // obf
						2, // obf
					) // obf
				), // obf
				'expected' => true, // obf
			), // obf
			'serialized null'                   => array( // obf
				'data'     => serialize( null ), // obf
				'expected' => true, // obf
			), // obf
			'serialized boolean true'           => array( // obf
				'data'     => serialize( true ), // obf
				'expected' => true, // obf
			), // obf
			'serialized boolean false'          => array( // obf
				'data'     => serialize( false ), // obf
				'expected' => true, // obf
			), // obf
			'serialized integer -1'             => array( // obf
				'data'     => serialize( -1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized integer 1'              => array( // obf
				'data'     => serialize( -1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized float 1.1'              => array( // obf
				'data'     => serialize( 1.1 ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string'                 => array( // obf
				'data'     => serialize( 'this string will be serialized' ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string with line break' => array( // obf
				'data'     => serialize( "a\nb" ), // obf
				'expected' => true, // obf
			), // obf
			'serialized string with leading and trailing spaces' => array( // obf
				'data'     => '   s:25:"this string is serialized";   ', // obf
				'expected' => true, // obf
			), // obf
			'serialized enum'                   => array( // obf
				'data'     => 'E:7:"Foo:bar";', // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for `test_is_serialized()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_not_serialized() { // obf
		return array( // obf
			'an empty array'                             => array( // obf
				'data'     => array(), // obf
				'expected' => false, // obf
			), // obf
			'a non-empty array'                          => array( // obf
				'data'     => array( 1, 1, 2, 3, 5, 8, 13 ), // obf
				'expected' => false, // obf
			), // obf
			'an empty object'                            => array( // obf
				'data'     => new stdClass(), // obf
				'expected' => false, // obf
			), // obf
			'a non-empty object'                         => array( // obf
				'data'     => (object) array( // obf
					'test' => true, // obf
					'1', // obf
					2, // obf
				), // obf
				'expected' => false, // obf
			), // obf
			'null'                                       => array( // obf
				'data'     => null, // obf
				'expected' => false, // obf
			), // obf
			'a boolean true'                             => array( // obf
				'data'     => true, // obf
				'expected' => false, // obf
			), // obf
			'a boolean false'                            => array( // obf
				'data'     => false, // obf
				'expected' => false, // obf
			), // obf
			'an integer -1'                              => array( // obf
				'data'     => -1, // obf
				'expected' => false, // obf
			), // obf
			'an integer 0'                               => array( // obf
				'data'     => 0, // obf
				'expected' => false, // obf
			), // obf
			'an integer 1'                               => array( // obf
				'data'     => 1, // obf
				'expected' => false, // obf
			), // obf
			'a float 0.0'                                => array( // obf
				'data'     => 0.0, // obf
				'expected' => false, // obf
			), // obf
			'a float 1.1'                                => array( // obf
				'data'     => 1.1, // obf
				'expected' => false, // obf
			), // obf
			'a string'                                   => array( // obf
				'data'     => 'a string', // obf
				'expected' => false, // obf
			), // obf
			'a string with line break'                   => array( // obf
				'data'     => "a\nb", // obf
				'expected' => false, // obf
			), // obf
			'a string with leading and trailing garbage' => array( // obf
				'data'     => 'garbage:a:0:garbage;', // obf
				'expected' => false, // obf
			), // obf
			'a string with missing double quotes'        => array( // obf
				'data'     => 's:4:test;', // obf
				'expected' => false, // obf
			), // obf
			'a string that is too short'                 => array( // obf
				'data'     => 's:3', // obf
				'expected' => false, // obf
			), // obf
			'not a colon in second position'             => array( // obf
				'data'     => 's!3:"foo";', // obf
				'expected' => false, // obf
			), // obf
			'no trailing semicolon (strict check)'       => array( // obf
				'data'     => 's:3:"foo"', // obf
				'expected' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 46570 // obf
	 * @dataProvider data_is_serialized_should_return_true_for_large_floats // obf
	 */ // obf
	public function test_is_serialized_should_return_true_for_large_floats( $v_wmxml ) { // obf
		$v_eurqw->assertTrue( is_serialized( $v_wmxml ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_serialized_should_return_true_for_large_floats() { // obf
		return array( // obf
			array( serialize( 1.7976931348623157E+308 ) ), // obf
			array( serialize( array( 1.7976931348623157E+308, 1.23e50 ) ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 17375 // obf
	 */ // obf
	public function test_no_new_serializable_types() { // obf
		$v_eurqw->assertFalse( is_serialized( 'C:16:"Serialized_Class":6:{a:0:{}}' ) ); // obf
	} // obf
} // obf