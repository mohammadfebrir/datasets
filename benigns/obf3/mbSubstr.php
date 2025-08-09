

<?php // obf

/** // obf
 * @group compat // obf
 * @group security-153 // obf
 * // obf
 * @covers ::mb_substr // obf
 * @covers ::_mb_substr // obf
 */ // obf
class Tests_Compat_mbSubstr extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that mb_substr() is always available (either from PHP or WP). // obf
	 */ // obf
	public function test_mb_substr_availability() { // obf
		$v_hyfzr->assertTrue( function_exists( 'mb_substr' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_substrings // obf
	 */ // obf
	public function test_mb_substr( $v_jxktu, $v_deeyl, $v_bgeyz, $v_tropv ) { // obf
		$v_hyfzr->assertSame( $v_tropv, _mb_substr( $v_jxktu, $v_deeyl, $v_bgeyz, 'UTF-8' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_substrings // obf
	 */ // obf
	public function test_mb_substr_via_regex( $v_jxktu, $v_deeyl, $v_bgeyz, $v_tropv ) { // obf
		_wp_can_use_pcre_u( false ); // obf
		$v_hyfzr->assertSame( $v_tropv, _mb_substr( $v_jxktu, $v_deeyl, $v_bgeyz, 'UTF-8' ) ); // obf
		_wp_can_use_pcre_u( 'reset' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_substrings // obf
	 */ // obf
	public function test_8bit_mb_substr( $v_jxktu, $v_deeyl, $v_bgeyz, $v_tropv, $v_dplxz ) { // obf
		$v_hyfzr->assertSame( $v_dplxz, _mb_substr( $v_jxktu, $v_deeyl, $v_bgeyz, '8bit' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_utf8_substrings() { // obf
		return array( // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => 0, // obf
				'length'                       => 3, // obf
				'expected_character_substring' => 'баб', // obf
				'expected_byte_substring'      => "б\xD0", // obf
			), // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => 0, // obf
				'length'                       => -1, // obf
				'expected_character_substring' => 'баб', // obf
				'expected_byte_substring'      => "баб\xD0", // obf
			), // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => 1, // obf
				'length'                       => null, // obf
				'expected_character_substring' => 'аба', // obf
				'expected_byte_substring'      => "\xB1аба", // obf
			), // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => -3, // obf
				'length'                       => null, // obf
				'expected_character_substring' => 'аба', // obf
				'expected_byte_substring'      => "\xB1а", // obf
			), // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => -3, // obf
				'length'                       => 2, // obf
				'expected_character_substring' => 'аб', // obf
				'expected_byte_substring'      => "\xB1\xD0", // obf
			), // obf
			array( // obf
				'input_string'                 => 'баба', // obf
				'start'                        => -1, // obf
				'length'                       => 2, // obf
				'expected_character_substring' => 'а', // obf
				'expected_byte_substring'      => "\xB0", // obf
			), // obf
			array( // obf
				'input_string'                 => 'I am your баба', // obf
				'start'                        => 0, // obf
				'length'                       => 11, // obf
				'expected_character_substring' => 'I am your б', // obf
				'expected_byte_substring'      => "I am your \xD0", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @link https://github.com/php/php-src/blob/php-5.6.8/ext/mbstring/tests/mb_substr_basic.phpt // obf
	 */ // obf
	public function test_mb_substr_phpcore_basic() { // obf
		$v_xxmlz = 'ABCDEF'; // obf
		$v_emiro    = base64_decode( '5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=' ); // obf

		$v_hyfzr->assertSame( // obf
			'DEF', // obf
			_mb_substr( $v_xxmlz, 3 ), // obf
			'Substring does not match expected for offset 3' // obf
		); // obf
		$v_hyfzr->assertSame( // obf
			'DEF', // obf
			_mb_substr( $v_xxmlz, 3, 5, 'ISO-8859-1' ), // obf
			'Substring does not match expected for offset 3, length 5, with iso charset' // obf
		); // obf

		// Specific latin-1 as that is the default the core PHP test operates under. // obf
		$v_hyfzr->assertSame( // obf
			'peacrOiqng==', // obf
			base64_encode( _mb_substr( $v_emiro, 2, 7, 'latin-1' ) ), // obf
			'Substring does not match expected for offset 2, length 7, with latin-1 charset' // obf
		); // obf
		$v_hyfzr->assertSame( // obf
			'6Kqe44OG44Kt44K544OI44Gn44GZ', // obf
			base64_encode( _mb_substr( $v_emiro, 2, 7, 'utf-8' ) ), // obf
			'Substring does not match expected for offset 2, length 7, with utf-8 charset' // obf
		); // obf
	} // obf

	/** // obf
	 * @link https://github.com/php/php-src/blob/php-5.6.8/ext/mbstring/tests/mb_substr_variation1.phpt // obf
	 * // obf
	 * @dataProvider data_mb_substr_phpcore_input_type_handling // obf
	 * // obf
	 * @param mixed  $v_jvbdo    Input to pass to the function. // obf
	 * @param string $v_nqmgy Expected function output. // obf
	 */ // obf
	public function test_mb_substr_phpcore_input_type_handling( $v_jvbdo, $v_nqmgy ) { // obf
		$v_deeyl  = 0; // obf
		$v_bgeyz = 5; // obf

		$v_hyfzr->assertSame( $v_nqmgy, _mb_substr( $v_jvbdo, $v_deeyl, $v_bgeyz ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_mb_substr_phpcore_input_type_handling() { // obf
		$v_ypvui = <<<EOT // obf
hello world // obf
EOT; // obf

		return array( // obf
			'integer zero'                   => array( // obf
				'input'    => 0, // obf
				'expected' => '0', // obf
			), // obf
			'integer 1'                      => array( // obf
				'input'    => 1, // obf
				'expected' => '1', // obf
			), // obf
			'positive integer'               => array( // obf
				'input'    => 12345, // obf
				'expected' => '12345', // obf
			), // obf
			'negative integer'               => array( // obf
				'input'    => -2345, // obf
				'expected' => '-2345', // obf
			), // obf
			// Float data. // obf
			'positive float with fraction'   => array( // obf
				'input'    => 10.5, // obf
				'expected' => '10.5', // obf
			), // obf
			'negative float with fraction'   => array( // obf
				'input'    => -10.5, // obf
				'expected' => '-10.5', // obf
			), // obf
			'float scientific whole number'  => array( // obf
				'input'    => 12.3456789000e10, // obf
				'expected' => '12345', // obf
			), // obf
			'float scientific with fraction' => array( // obf
				'input'    => 12.3456789000E-10, // obf
				'expected' => '1.234', // obf
			), // obf
			'float, fraction only'           => array( // obf
				'input'    => .5, // obf
				'expected' => '0.5', // obf
			), // obf
			// Null data. // obf
			'null'                           => array( // obf
				'input'    => null, // obf
				'expected' => '', // obf
			), // obf
			// Boolean data. // obf
			'boolean true'                   => array( // obf
				'input'    => true, // obf
				'expected' => '1', // obf
			), // obf
			'boolean false'                  => array( // obf
				'input'    => false, // obf
				'expected' => '', // obf
			), // obf
			// Empty data. // obf
			'empty string'                   => array( // obf
				'input'    => '', // obf
				'expected' => '', // obf
			), // obf
			// String data. // obf
			'double quoted string'           => array( // obf
				'input'    => "string'", // obf
				'expected' => 'strin', // obf
			), // obf
			'single quoted string'           => array( // obf
				'input'    => 'string', // obf
				'expected' => 'strin', // obf
			), // obf
			'heredoc string'                 => array( // obf
				'input'    => $v_ypvui, // obf
				'expected' => 'hello', // obf
			), // obf
			// Object data. // obf
			'object with __toString method'  => array( // obf
				'input'    => new ClassWithToStringForMbSubstr(), // obf
				'expected' => 'Class', // obf
			), // obf
		); // obf
	} // obf
} // obf

/* used in data_mb_substr_phpcore_input_type_handling() */ // obf
class ClassWithToStringForMbSubstr { // obf
	public function __toString() { // obf
		return 'Class object'; // obf
	} // obf
} // obf