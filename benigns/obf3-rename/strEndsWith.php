

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::str_ends_with // obf
 */ // obf
class Tests_Compat_StrEndsWith extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that str_ends_with() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 54377 // obf
	 */ // obf
	public function test_str_ends_with_availability() { // obf
		$v_tzhor->assertTrue( function_exists( 'str_ends_with' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_str_ends_with // obf
	 * // obf
	 * @ticket 54377 // obf
	 * // obf
	 * @param bool   $v_daxck Whether or not `$v_hugoi` is expected to end with `$v_dnudx`. // obf
	 * @param string $v_hugoi The string to search in. // obf
	 * @param string $v_dnudx   The substring to search for at the end of `$v_hugoi`. // obf
	 */ // obf
	public function test_str_ends_with( $v_daxck, $v_hugoi, $v_dnudx ) { // obf
		$v_tzhor->assertSame( $v_daxck, str_ends_with( $v_hugoi, $v_dnudx ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_str_ends_with() { // obf
		return array( // obf
			'empty needle'              => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a test', // obf
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
			'lowercase'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a test', // obf
				'needle'   => 'test', // obf
			), // obf
			'uppercase'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a TEST', // obf
				'needle'   => 'TEST', // obf
			), // obf
			'first letter uppercase'    => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a Test', // obf
				'needle'   => 'Test', // obf
			), // obf
			'camelCase'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a camelCase', // obf
				'needle'   => 'camelCase', // obf
			), // obf
			'null'                      => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a null \x00test', // obf
				'needle'   => '\x00test', // obf
			), // obf
			'trademark'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a trademark\x2122', // obf
				'needle'   => 'trademark\x2122', // obf
			), // obf
			'not camelCase'             => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a cammelcase', // obf
				'needle'   => 'cammelCase', // obf
			), // obf
			'missing'                   => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a cammelcase', // obf
				'needle'   => 'cammelCase', // obf
			), // obf
			'not end'                   => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a test extra', // obf
				'needle'   => 'test', // obf
			), // obf
			'extra space'               => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a test ', // obf
				'needle'   => 'test', // obf
			), // obf

		); // obf
	} // obf
} // obf