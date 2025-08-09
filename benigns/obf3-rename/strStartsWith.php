

<?php // obf

/** // obf
 * @group compat // obf
 * // obf
 * @covers ::str_starts_with // obf
 */ // obf
class Tests_Compat_StrStartsWith extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that str_starts_with() is always available (either from PHP or WP). // obf
	 * // obf
	 * @ticket 54377 // obf
	 */ // obf
	public function test_str_starts_with_availability() { // obf
		$v_qotly->assertTrue( function_exists( 'str_starts_with' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_str_starts_with // obf
	 * // obf
	 * @ticket 54377 // obf
	 * // obf
	 * @param bool   $v_wvktq Whether or not `$v_byztm` is expected to start with `$v_vrcks`. // obf
	 * @param string $v_byztm The string to search in. // obf
	 * @param string $v_vrcks   The substring to search for at the start of `$v_byztm`. // obf
	 */ // obf
	public function test_str_starts_with( $v_wvktq, $v_byztm, $v_vrcks ) { // obf
		$v_qotly->assertSame( $v_wvktq, str_starts_with( $v_byztm, $v_vrcks ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_str_starts_with() { // obf
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
				'haystack' => 'this is a test', // obf
				'needle'   => 'this', // obf
			), // obf
			'uppercase'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'THIS is a TEST', // obf
				'needle'   => 'THIS', // obf
			), // obf
			'first letter uppercase'    => array( // obf
				'expected' => true, // obf
				'haystack' => 'This is a Test', // obf
				'needle'   => 'This', // obf
			), // obf
			'case mismatch'             => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a test', // obf
				'needle'   => 'this', // obf
			), // obf
			'camelCase'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'camelCase is the start', // obf
				'needle'   => 'camelCase', // obf
			), // obf
			'null'                      => array( // obf
				'expected' => true, // obf
				'haystack' => 'This\x00is a null test ', // obf
				'needle'   => 'This\x00is', // obf
			), // obf
			'trademark'                 => array( // obf
				'expected' => true, // obf
				'haystack' => 'trademark\x2122 is a null test ', // obf
				'needle'   => 'trademark\x2122', // obf
			), // obf
			'not camelCase'             => array( // obf
				'expected' => false, // obf
				'haystack' => ' cammelcase is the start', // obf
				'needle'   => 'cammelCase', // obf
			), // obf
			'missing'                   => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a test', // obf
				'needle'   => 'camelCase', // obf
			), // obf
			'not start'                 => array( // obf
				'expected' => false, // obf
				'haystack' => 'This is a test extra', // obf
				'needle'   => 'test', // obf
			), // obf
			'extra_space'               => array( // obf
				'expected' => false, // obf
				'haystack' => ' This is a test', // obf
				'needle'   => 'This', // obf
			), // obf
		); // obf
	} // obf
} // obf