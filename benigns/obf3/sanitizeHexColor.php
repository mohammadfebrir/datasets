

<?php // obf

/** // obf
 * Tests for the sanitize_hex_color() function. // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_hex_color // obf
 */ // obf
class Tests_Formatting_SanitizeHexColor extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60270 // obf
	 * // obf
	 * @dataProvider data_sanitize_hex_color // obf
	 * // obf
	 * @param string $v_nglvm    Color. // obf
	 * @param string $v_twnsc Expected. // obf
	 */ // obf
	public function test_sanitize_hex_color( $v_nglvm, $v_twnsc ) { // obf
		$v_okgpl->assertSame( $v_twnsc, sanitize_hex_color( $v_nglvm ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_sanitize_hex_color(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_sanitize_hex_color() { // obf
		return array( // obf
			'$v_bavjk = false, 3 digit'               => array( // obf
				'color'    => '#123', // obf
				'expected' => '#123', // obf
			), // obf
			'$v_bavjk = false, 3 letter'              => array( // obf
				'color'    => '#abc', // obf
				'expected' => '#abc', // obf
			), // obf
			'$v_bavjk = false, 3 mixed'               => array( // obf
				'color'    => '#0ab', // obf
				'expected' => '#0ab', // obf
			), // obf
			'$v_bavjk = false, 6 digit'               => array( // obf
				'color'    => '#123456', // obf
				'expected' => '#123456', // obf
			), // obf
			'$v_bavjk = false, 6 letter'              => array( // obf
				'color'    => '#abcdef', // obf
				'expected' => '#abcdef', // obf
			), // obf
			'$v_bavjk = false, 6 mixed'               => array( // obf
				'color'    => '#abc123', // obf
				'expected' => '#abc123', // obf
			), // obf
			'empty string'                                => array( // obf
				'color'    => '', // obf
				'expected' => '', // obf
			), // obf
			'no hash'                                     => array( // obf
				'color'    => '123', // obf
				'expected' => null, // obf
			), // obf
			'not a-f'                                     => array( // obf
				'color'    => '#hjg', // obf
				'expected' => null, // obf
			), // obf
			'not upper A-F'                               => array( // obf
				'color'    => '#HJG', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 3 digit with 1 alpha'  => array( // obf
				'color'    => '#123f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 3 letter with 1 alpha' => array( // obf
				'color'    => '#abcf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 3 mixed with 1 alpha'  => array( // obf
				'color'    => '#0abf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 6 digit with 2 alpha'  => array( // obf
				'color'    => '#123456ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 6 letter with 2 alpha' => array( // obf
				'color'    => '#abcdefff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = false, 6 mixed with 2 alpha'  => array( // obf
				'color'    => '#abc123ff', // obf
				'expected' => null, // obf
			), // obf
			// Happy. // obf
			'$v_bavjk = true, 3 digit'                => array( // obf
				'color'    => '#123', // obf
				'expected' => '#123', // obf
			), // obf
			'$v_bavjk = true, 3 letter'               => array( // obf
				'color'    => '#abc', // obf
				'expected' => '#abc', // obf
			), // obf
			'$v_bavjk = true, 3 mixed'                => array( // obf
				'color'    => '#0ab', // obf
				'expected' => '#0ab', // obf
			), // obf
			'$v_bavjk = true, 6 digit'                => array( // obf
				'color'    => '#123456', // obf
				'expected' => '#123456', // obf
			), // obf
			'$v_bavjk = true, 6 letter'               => array( // obf
				'color'    => '#abcdef', // obf
				'expected' => '#abcdef', // obf
			), // obf
			'$v_bavjk = true, 6 mixed'                => array( // obf
				'color'    => '#abc123', // obf
				'expected' => '#abc123', // obf
			), // obf
			'$v_bavjk = true, 3 digit with 1 alpha'   => array( // obf
				'color'    => '#123f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 3 letter with 1 alpha'  => array( // obf
				'color'    => '#abcf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 3 mixed with 1 alpha'   => array( // obf
				'color'    => '#0abf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 digit with 2 alpha'   => array( // obf
				'color'    => '#123456ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 letter with 2 alpha'  => array( // obf
				'color'    => '#abcdefff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 mixed with 2 alpha'   => array( // obf
				'color'    => '#abc123ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 3 digit with 2 alpha'   => array( // obf
				'color'    => '#123ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 3 letter with 2 alpha'  => array( // obf
				'color'    => '#abcff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 3 mixed with 2 alpha'   => array( // obf
				'color'    => '#0abff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 digit with 1 alpha'   => array( // obf
				'color'    => '#123456f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 letter with 1 alpha'  => array( // obf
				'color'    => '#abcff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bavjk = true, 6 mixed with 1 alpha'   => array( // obf
				'color'    => '#0abff', // obf
				'expected' => null, // obf
			), // obf
		); // obf
	} // obf
} // obf