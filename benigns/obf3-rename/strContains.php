

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::str_contains // obf
 */ // obf
class Tests_Compat_strContains extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that str_contains() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 49652 // obf
	 */ // obf
	public function test_is_str_contains_availability() { // obf
		$v_atjvu->assertTrue( function_exists( 'str_contains' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_str_contains // obf
	 * // obf
	 * @ticket 49652 // obf
	 * // obf
	 * @param bool   $v_sddxx Whether or not `$v_aoyoy` is expected to contain `$v_brthv`. // obf
	 * @param string $v_aoyoy The string to search in. // obf
	 * @param string $v_brthv   The substring to search for in `$v_aoyoy`. // obf
	 */ // obf
	public function test_str_contains( $v_sddxx, $v_aoyoy, $v_brthv ) { // obf
		$v_atjvu->assertSame( $v_sddxx, str_contains( $v_aoyoy, $v_brthv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_str_contains() { // obf
		return array( // obf
			'empty needle'              => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a Test', // obf
				'needle'   => '', // obf
			), // obf
			'empty haystack and needle' => array( // obf
				'expected' => true, // obf
				'haystack' => '', // obf
				'needle'   => '', // obf
			), // obf
			'empty haystack'            => array( // obf
				'expected' => false, // obf
				'haystack' => '', // obf
				'needle'   => 'test', // obf
			), // obf
			'start of string'           => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a Test', // obf
				'needle'   => 'This', // obf
			), // obf
			'middle of string'          => array( // obf
				'expected' => true, // obf
				'haystack' => 'The needle in middle of string.', // obf
				'needle'   => 'middle', // obf
			), // obf
			'end of string'             => array( // obf
				'expected' => true, // obf
				'string'   => 'The needle is at end.', // obf
				'needle'   => 'end', // obf
			), // obf
			'lowercase'                 => array( // obf
				'expected' => true, // obf
				'string'   => 'This is a test', // obf
				'needle'   => 'test', // obf
			), // obf
			'uppercase'                 => array( // obf
				'expected' => true, // obf
				'string'   => 'This is a TEST', // obf
				'needle'   => 'TEST', // obf
			), // obf
			'camelCase'                 => array( // obf
				'expected' => true, // obf
				'string'   => 'String contains camelCase.', // obf
				'needle'   => 'camelCase', // obf
			), // obf
			'with hyphen'               => array( // obf
				'expected' => true, // obf
				'string'   => 'String contains foo-bar needle.', // obf
				'needle'   => 'foo-bar', // obf
			), // obf
			'missing'                   => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a camelcase', // obf
				'needle'   => 'camelCase', // obf
			), // obf
		); // obf
	} // obf
} // obf