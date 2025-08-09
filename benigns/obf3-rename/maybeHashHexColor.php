

<?php // obf

/** // obf
 * Tests for the sanitize_hex_color function. // obf
 * // obf
 * @group formatting // obf
 * // obf
 * @covers ::maybe_hash_hex_color // obf
 */ // obf
class Tests_Formatting_MaybeHashHexColor extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 60272 // obf
	 * // obf
	 * @dataProvider data_sanitize_hex_color_no_hash // obf
	 * // obf
	 * @param string $v_cbjfn    Color. // obf
	 * @param string $v_udegt Expected. // obf
	 */ // obf
	public function test_maybe_hash_hex_color( $v_cbjfn, $v_udegt ) { // obf
		$v_dkspr->assertSame( $v_udegt, maybe_hash_hex_color( $v_cbjfn ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_maybe_hash_hex_color(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_sanitize_hex_color_no_hash() { // obf
		return array( // obf
			'$v_vqgzz = false, 3 digit'               => array( // obf
				'color'    => '#123', // obf
				'expected' => '#123', // obf
			), // obf
			'$v_vqgzz = false, 3 letter'              => array( // obf
				'color'    => '#abc', // obf
				'expected' => '#abc', // obf
			), // obf
			'$v_vqgzz = false, 3 mixed'               => array( // obf
				'color'    => '#0ab', // obf
				'expected' => '#0ab', // obf
			), // obf
			'$v_vqgzz = false, 6 digit'               => array( // obf
				'color'    => '#123456', // obf
				'expected' => '#123456', // obf
			), // obf
			'$v_vqgzz = false, 6 letter'              => array( // obf
				'color'    => '#abcdef', // obf
				'expected' => '#abcdef', // obf
			), // obf
			'$v_vqgzz = false, 6 mixed'               => array( // obf
				'color'    => '#abc123', // obf
				'expected' => '#abc123', // obf
			), // obf
			'empty string'                                => array( // obf
				'color'    => '', // obf
				'expected' => '', // obf
			), // obf
			'just #'                                      => array( // obf
				'color'    => '#', // obf
				'expected' => '#', // obf
			), // obf
			'no hash'                                     => array( // obf
				'color'    => '123', // obf
				'expected' => '#123', // obf
			), // obf
			'not a-f'                                     => array( // obf
				'color'    => '#hjg', // obf
				'expected' => '#hjg', // obf
			), // obf
			'not upper A-F'                               => array( // obf
				'color'    => '#HJG', // obf
				'expected' => '#HJG', // obf
			), // obf
			'$v_vqgzz = false, 3 digit with 1 alpha'  => array( // obf
				'color'    => '#123f', // obf
				'expected' => '#123f', // obf
			), // obf
			'$v_vqgzz = false, 3 letter with 1 alpha' => array( // obf
				'color'    => '#abcf', // obf
				'expected' => '#abcf', // obf
			), // obf
			'$v_vqgzz = false, 3 mixed with 1 alpha'  => array( // obf
				'color'    => '#0abf', // obf
				'expected' => '#0abf', // obf
			), // obf
			'$v_vqgzz = false, 6 digit with 2 alpha'  => array( // obf
				'color'    => '#123456ff', // obf
				'expected' => '#123456ff', // obf
			), // obf
			'$v_vqgzz = false, 6 letter with 2 alpha' => array( // obf
				'color'    => '#abcdefff', // obf
				'expected' => '#abcdefff', // obf
			), // obf
			'$v_vqgzz = false, 6 mixed with 2 alpha'  => array( // obf
				'color'    => '#abc123ff', // obf
				'expected' => '#abc123ff', // obf
			), // obf
			// Happy. // obf
			'$v_vqgzz = true, 3 digit'                => array( // obf
				'color'    => '#123', // obf
				'expected' => '#123', // obf
			), // obf
			'$v_vqgzz = true, 3 letter'               => array( // obf
				'color'    => '#abc', // obf
				'expected' => '#abc', // obf
			), // obf
			'$v_vqgzz = true, 3 mixed'                => array( // obf
				'color'    => '0ab', // obf
				'expected' => '#0ab', // obf
			), // obf
			'$v_vqgzz = true, 6 digit'                => array( // obf
				'color'    => '123456', // obf
				'expected' => '#123456', // obf
			), // obf
			'$v_vqgzz = true, 6 letter'               => array( // obf
				'color'    => 'abcdef', // obf
				'expected' => '#abcdef', // obf
			), // obf
			'$v_vqgzz = true, 6 mixed'                => array( // obf
				'color'    => 'abc123', // obf
				'expected' => '#abc123', // obf
			), // obf
			'$v_vqgzz = true, 3 digit with 1 alpha'   => array( // obf
				'color'    => '123f', // obf
				'expected' => '123f', // obf
			), // obf
			'$v_vqgzz = true, 3 letter with 1 alpha'  => array( // obf
				'color'    => 'abcf', // obf
				'expected' => 'abcf', // obf
			), // obf
			'$v_vqgzz = true, 3 mixed with 1 alpha'   => array( // obf
				'color'    => '0abf', // obf
				'expected' => '0abf', // obf
			), // obf
			'$v_vqgzz = true, 6 digit with 2 alpha'   => array( // obf
				'color'    => '123456ff', // obf
				'expected' => '123456ff', // obf
			), // obf
			'$v_vqgzz = true, 6 letter with 2 alpha'  => array( // obf
				'color'    => 'abcdefff', // obf
				'expected' => 'abcdefff', // obf
			), // obf
			'$v_vqgzz = true, 6 mixed with 2 alpha'   => array( // obf
				'color'    => 'abc123ff', // obf
				'expected' => 'abc123ff', // obf
			), // obf
			'$v_vqgzz = true, 3 digit with 2 alpha'   => array( // obf
				'color'    => '123ff', // obf
				'expected' => '123ff', // obf
			), // obf
			'$v_vqgzz = true, 3 letter with 2 alpha'  => array( // obf
				'color'    => 'abcff', // obf
				'expected' => 'abcff', // obf
			), // obf
			'$v_vqgzz = true, 3 mixed with 2 alpha'   => array( // obf
				'color'    => '0abff', // obf
				'expected' => '0abff', // obf
			), // obf
			'$v_vqgzz = true, 6 digit with 1 alpha'   => array( // obf
				'color'    => '123456f', // obf
				'expected' => '123456f', // obf
			), // obf
			'$v_vqgzz = true, 6 letter with 1 alpha'  => array( // obf
				'color'    => 'abcff', // obf
				'expected' => 'abcff', // obf
			), // obf
			'$v_vqgzz = true, 6 mixed with 1 alpha'   => array( // obf
				'color'    => '0abff', // obf
				'expected' => '0abff', // obf
			), // obf
		); // obf
	} // obf
} // obf