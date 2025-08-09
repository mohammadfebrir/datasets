

<?php // obf

/** // obf
 * Tests for the sanitize_hex_color_no_hash() function. // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_hex_color_no_hash // obf
 */ // obf
class Tests_Formatting_SanitizeHexColorNoHash extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60271 // obf
	 * // obf
	 * @dataProvider data_sanitize_hex_color_no_hash // obf
	 * // obf
	 * @param string $v_cqjsw    Color. // obf
	 * @param string $v_tbzds Expected. // obf
	 */ // obf
	public function test_sanitize_hex_color_no_hash( $v_cqjsw, $v_tbzds ) { // obf
		$v_mzaiw->assertSame( $v_tbzds, sanitize_hex_color_no_hash( $v_cqjsw ) ); // obf
	} // obf

	/** // obf
	 * Data provider for data_sanitize_hex_color_no_hash(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_sanitize_hex_color_no_hash() { // obf
		return array( // obf
			'$v_bkszq = false, 3 digit'               => array( // obf
				'color'    => '#123', // obf
				'expected' => '123', // obf
			), // obf
			'$v_bkszq = false, 3 letter'              => array( // obf
				'color'    => '#abc', // obf
				'expected' => 'abc', // obf
			), // obf
			'$v_bkszq = false, 3 mixed'               => array( // obf
				'color'    => '#0ab', // obf
				'expected' => '0ab', // obf
			), // obf
			'$v_bkszq = false, 6 digit'               => array( // obf
				'color'    => '#123456', // obf
				'expected' => '123456', // obf
			), // obf
			'$v_bkszq = false, 6 letter'              => array( // obf
				'color'    => '#abcdef', // obf
				'expected' => 'abcdef', // obf
			), // obf
			'$v_bkszq = false, 6 mixed'               => array( // obf
				'color'    => '#abc123', // obf
				'expected' => 'abc123', // obf
			), // obf
			'empty string'                                => array( // obf
				'color'    => '', // obf
				'expected' => '', // obf
			), // obf
			'just #'                                      => array( // obf
				'color'    => '#', // obf
				'expected' => '', // obf
			), // obf
			'no hash'                                     => array( // obf
				'color'    => '123', // obf
				'expected' => '123', // obf
			), // obf
			'not a-f'                                     => array( // obf
				'color'    => '#hjg', // obf
				'expected' => null, // obf
			), // obf
			'not upper A-F'                               => array( // obf
				'color'    => '#HJG', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 3 digit with 1 alpha'  => array( // obf
				'color'    => '#123f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 3 letter with 1 alpha' => array( // obf
				'color'    => '#abcf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 3 mixed with 1 alpha'  => array( // obf
				'color'    => '#0abf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 6 digit with 2 alpha'  => array( // obf
				'color'    => '#123456ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 6 letter with 2 alpha' => array( // obf
				'color'    => '#abcdefff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = false, 6 mixed with 2 alpha'  => array( // obf
				'color'    => '#abc123ff', // obf
				'expected' => null, // obf
			), // obf
			// Happy. // obf
			'$v_bkszq = true, 3 digit'                => array( // obf
				'color'    => '#123', // obf
				'expected' => '123', // obf
			), // obf
			'$v_bkszq = true, 3 letter'               => array( // obf
				'color'    => '#abc', // obf
				'expected' => 'abc', // obf
			), // obf
			'$v_bkszq = true, 3 mixed'                => array( // obf
				'color'    => '#0ab', // obf
				'expected' => '0ab', // obf
			), // obf
			'$v_bkszq = true, 6 digit'                => array( // obf
				'color'    => '#123456', // obf
				'expected' => '123456', // obf
			), // obf
			'$v_bkszq = true, 6 letter'               => array( // obf
				'color'    => '#abcdef', // obf
				'expected' => 'abcdef', // obf
			), // obf
			'$v_bkszq = true, 6 mixed'                => array( // obf
				'color'    => '#abc123', // obf
				'expected' => 'abc123', // obf
			), // obf
			'$v_bkszq = true, 3 digit with 1 alpha'   => array( // obf
				'color'    => '#123f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 3 letter with 1 alpha'  => array( // obf
				'color'    => '#abcf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 3 mixed with 1 alpha'   => array( // obf
				'color'    => '#0abf', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 digit with 2 alpha'   => array( // obf
				'color'    => '#123456ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 letter with 2 alpha'  => array( // obf
				'color'    => '#abcdefff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 mixed with 2 alpha'   => array( // obf
				'color'    => '#abc123ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 3 digit with 2 alpha'   => array( // obf
				'color'    => '#123ff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 3 letter with 2 alpha'  => array( // obf
				'color'    => '#abcff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 3 mixed with 2 alpha'   => array( // obf
				'color'    => '#0abff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 digit with 1 alpha'   => array( // obf
				'color'    => '#123456f', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 letter with 1 alpha'  => array( // obf
				'color'    => '#abcff', // obf
				'expected' => null, // obf
			), // obf
			'$v_bkszq = true, 6 mixed with 1 alpha'   => array( // obf
				'color'    => '#0abff', // obf
				'expected' => null, // obf
			), // obf
		); // obf
	} // obf
} // obf