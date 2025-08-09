
<?php

/**
 * @group compat
 * @group security-153
 *
 * @covers ::mb_strlen
 * @covers ::_mb_strlen
 */
class Tests_Compat_mbStrlen extends WP_UnitTestCase {

	/**
	 * Test that mb_strlen() is always available (either from PHP or WP).
	 */
	public function test_mb_strlen_availability() {
		$this->assertTrue( function_exists( 'mb_strlen' ) );
	}

	/**
	 * @dataProvider data_utf8_string_lengths
	 */
	public function test_mb_strlen( $input_string, $expected_character_length ) {
		$this->assertSame( $expected_character_length, _mb_strlen( $input_string, 'UTF-8' ) );
	}

	/**
	 * @dataProvider data_utf8_string_lengths
	 */
	public function test_mb_strlen_via_regex( $input_string, $expected_character_length ) {
		_wp_can_use_pcre_u( false );
		$this->assertSame( $expected_character_length, _mb_strlen( $input_string, 'UTF-8' ) );
		_wp_can_use_pcre_u( 'reset' );
	}

	/**
	 * @dataProvider data_utf8_string_lengths
	 */
	public function test_8bit_mb_strlen( $input_string, $expected_character_length, $expected_byte_length ) {
		$this->assertSame( $expected_byte_length, _mb_strlen( $input_string, '8bit' ) );
	}

	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public function data_utf8_string_lengths() {
		return array(
			array(
				'input_string'              => 'баба',
				'expected_character_length' => 4,
				'expected_byte_length'      => 8,
			),
			array(
				'input_string'              => 'баб',
				'expected_character_length' => 3,
				'expected_byte_length'      => 6,
			),
			array(
				'input_string'              => 'I am your б',
				'expected_character_length' => 11,
				'expected_byte_length'      => 12,
			),
			array(
				'input_string'              => '1111111111',
				'expected_character_length' => 10,
				'expected_byte_length'      => 10,
			),
			array(
				'input_string'              => '²²²²²²²²²²',
				'expected_character_length' => 10,
				'expected_byte_length'      => 20,
			),
			array(
				'input_string'              => '３３３３３３３３３３',
				'expected_character_length' => 10,
				'expected_byte_length'      => 30,
			),
			array(
				'input_string'              => '𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜𝟜',
				'expected_character_length' => 10,
				'expected_byte_length'      => 40,
			),
			array(
				'input_string'              => '1²３𝟜1²３𝟜1²３𝟜',
				'expected_character_length' => 12,
				'expected_byte_length'      => 30,
			),
		);
	}
}
