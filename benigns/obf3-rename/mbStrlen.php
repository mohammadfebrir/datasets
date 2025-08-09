

<?php // obf

/** // obf
 * @group compat // obf
 * @group security-153 // obf
 * // obf
 * @covers ::mb_strlen // obf
 * @covers ::_mb_strlen // obf
 */ // obf
class Tests_Compat_mbStrlen extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that mb_strlen() is always available (either from PHP or WP). // obf
	 */ // obf
	public function test_mb_strlen_availability() { // obf
		$v_dfpzu->assertTrue( function_exists( 'mb_strlen' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_string_lengths // obf
	 */ // obf
	public function test_mb_strlen( $v_flfbq, $v_esszf ) { // obf
		$v_dfpzu->assertSame( $v_esszf, _mb_strlen( $v_flfbq, 'UTF-8' ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_string_lengths // obf
	 */ // obf
	public function test_mb_strlen_via_regex( $v_flfbq, $v_esszf ) { // obf
		_wp_can_use_pcre_u( false ); // obf
		$v_dfpzu->assertSame( $v_esszf, _mb_strlen( $v_flfbq, 'UTF-8' ) ); // obf
		_wp_can_use_pcre_u( 'reset' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_utf8_string_lengths // obf
	 */ // obf
	public function test_8bit_mb_strlen( $v_flfbq, $v_esszf, $v_ihtvc ) { // obf
		$v_dfpzu->assertSame( $v_ihtvc, _mb_strlen( $v_flfbq, '8bit' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_utf8_string_lengths() { // obf
		return array( // obf
			array( // obf
				'input_string'              => 'баба', // obf
				'expected_character_length' => 4, // obf
				'expected_byte_length'      => 8, // obf
			), // obf
			array( // obf
				'input_string'              => 'баб', // obf
				'expected_character_length' => 3, // obf
				'expected_byte_length'      => 6, // obf
			), // obf
			array( // obf
				'input_string'              => 'I am your б', // obf
				'expected_character_length' => 11, // obf
				'expected_byte_length'      => 12, // obf
			), // obf
			array( // obf
				'input_string'              => '1111111111', // obf
				'expected_character_length' => 10, // obf
				'expected_byte_length'      => 10, // obf
			), // obf
			array( // obf
				'input_string'              => '²²²²²²²²²²', // obf
				'expected_character_length' => 10, // obf
				'expected_byte_length'      => 20, // obf
			), // obf
			array( // obf
				'input_string'              => '３３３３３３３３３３', // obf
				'expected_character_length' => 10, // obf
				'expected_byte_length'      => 30, // obf
			), // obf
			array( // obf
				'input_string'              => '𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜', // obf
				'expected_character_length' => 10, // obf
				'expected_byte_length'      => 40, // obf
			), // obf
			array( // obf
				'input_string'              => '1²３𝟜1²３𝟜1²３𝟜', // obf
				'expected_character_length' => 12, // obf
				'expected_byte_length'      => 30, // obf
			), // obf
		); // obf
	} // obf
} // obf