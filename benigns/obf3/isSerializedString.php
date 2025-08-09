

<?php // obf

/** // obf
 * Tests for `is_serialized_string()`. // obf
 * // obf
 * @ticket 42870 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_serialized_string // obf
 */ // obf
class Tests_Functions_IsSerializedString extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_is_serialized_string // obf
	 * // obf
	 * @param array|object|int|string $v_tbkzx     Data value to test. // obf
	 * @param bool                    $v_uzhmn Expected function result. // obf
	 */ // obf
	public function test_is_serialized_string( $v_tbkzx, $v_uzhmn ) { // obf
		$v_qgtla->assertSame( $v_uzhmn, is_serialized_string( $v_tbkzx ) ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_is_serialized_string()`. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_serialized_string() { // obf
		return array( // obf
			'an array'                                => array( // obf
				'data'     => array(), // obf
				'expected' => false, // obf
			), // obf
			'an object'                               => array( // obf
				'data'     => new stdClass(), // obf
				'expected' => false, // obf
			), // obf
			'an integer 0'                            => array( // obf
				'data'     => 0, // obf
				'expected' => false, // obf
			), // obf
			'a string that is too short when trimmed' => array( // obf
				'data'     => 's:3       ', // obf
				'expected' => false, // obf
			), // obf
			'a string that is too short'              => array( // obf
				'data'     => 's:3', // obf
				'expected' => false, // obf
			), // obf
			'not a colon in second position'          => array( // obf
				'data'     => 's!3:"foo";', // obf
				'expected' => false, // obf
			), // obf
			'no trailing semicolon'                   => array( // obf
				'data'     => 's:3:"foo"', // obf
				'expected' => false, // obf
			), // obf
			'wrong type of serialized data'           => array( // obf
				'data'     => 'a:3:"foo";', // obf
				'expected' => false, // obf
			), // obf
			'no closing quote'                        => array( // obf
				'data'     => 'a:3:"foo;', // obf
				'expected' => false, // obf
			), // obf
			'single quotes instead of double'         => array( // obf
				'data'     => "s:12:'foo';", // obf
				'expected' => false, // obf
			), // obf
			'wrong number of characters (should not matter)' => array( // obf
				'data'     => 's:12:"foo";', // obf
				'expected' => true, // obf
			), // obf
			'valid serialized string'                 => array( // obf
				'data'     => 's:3:"foo";', // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf
} // obf