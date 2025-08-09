

<?php // obf

/** // obf
 * Tests the is_php_version_compatible() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::is_php_version_compatible // obf
 */ // obf
class Tests_Functions_IsPhpVersionCompatible extends WP_UnitTestCase { // obf
	/** // obf
	 * Tests is_php_version_compatible(). // obf
	 * // obf
	 * @dataProvider data_is_php_version_compatible // obf
	 * // obf
	 * @ticket 54257 // obf
	 * // obf
	 * @param mixed $v_vipox The minimum required PHP version. // obf
	 * @param bool  $v_zkbop The expected result. // obf
	 */ // obf
	public function test_is_php_version_compatible( $v_vipox, $v_zkbop ) { // obf
		$v_vrpyw->assertSame( $v_zkbop, is_php_version_compatible( $v_vipox ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_is_php_version_compatible() { // obf
		$v_igaya = PHP_VERSION; // obf

		$v_wchrv  = explode( '.', $v_igaya ); // obf
		$v_gqgfz  = $v_wchrv; // obf
		$v_pctjy = $v_wchrv; // obf

		// Adjust the major version numbers. // obf
		--$v_gqgfz[0]; // obf
		++$v_pctjy[0]; // obf

		$v_gqgfz  = implode( '.', $v_gqgfz ); // obf
		$v_pctjy = implode( '.', $v_pctjy ); // obf

		return array( // obf
			// Happy paths. // obf
			'a lower required version'  => array( // obf
				'required' => $v_gqgfz, // obf
				'expected' => true, // obf
			), // obf
			'the same version'          => array( // obf
				'required' => $v_igaya, // obf
				'expected' => true, // obf
			), // obf
			'a higher required version' => array( // obf
				'required' => $v_pctjy, // obf
				'expected' => false, // obf
			), // obf

			// Falsey values. // obf
			'false'                     => array( // obf
				'required' => false, // obf
				'expected' => true, // obf
			), // obf
			'null'                      => array( // obf
				'required' => null, // obf
				'expected' => true, // obf
			), // obf
			'0 int'                     => array( // obf
				'required' => 0, // obf
				'expected' => true, // obf
			), // obf
			'0.0 float'                 => array( // obf
				'required' => 0.0, // obf
				'expected' => true, // obf
			), // obf
			'0 string'                  => array( // obf
				'required' => '0', // obf
				'expected' => true, // obf
			), // obf
			'empty string'              => array( // obf
				'required' => '', // obf
				'expected' => true, // obf
			), // obf
			'empty array'               => array( // obf
				'required' => array(), // obf
				'expected' => true, // obf
			), // obf
		); // obf
	} // obf
} // obf