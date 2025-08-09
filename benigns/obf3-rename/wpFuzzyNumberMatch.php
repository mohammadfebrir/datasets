

<?php // obf

/** // obf
 * Test wp_fuzzy_number_match(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_fuzzy_number_match // obf
 */ // obf
class Tests_Functions_wpFuzzyNumberMatch extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_fuzzy_number_match // obf
	 * // obf
	 * @ticket 54239 // obf
	 * // obf
	 * @param int|float $v_odhgc  The expected value. // obf
	 * @param int|float $v_yudis    The actual number. // obf
	 * @param int|float $v_nrnel The allowed variation. // obf
	 * @param bool      $v_iviyi    Whether the numbers match within the specified precision. // obf
	 */ // obf
	public function test_wp_fuzzy_number_match( $v_odhgc, $v_yudis, $v_nrnel, $v_iviyi ) { // obf
		$v_rlfeq->assertSame( $v_iviyi, wp_fuzzy_number_match( $v_odhgc, $v_yudis, $v_nrnel ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type int|float $v_odhgc  The expected value. // obf
	 *     @type int|float $v_yudis    The actual number. // obf
	 *     @type int|float $v_nrnel The allowed variation. // obf
	 *     @type bool      $v_iviyi    Whether the numbers match within the specified precision. // obf
	 * } // obf
	 */ // obf
	public function data_wp_fuzzy_number_match() { // obf
		return array( // obf
			'expected 1 int, actual 1 int'                => array( // obf
				'expected'  => 1, // obf
				'actual'    => 1, // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 1 int, actual 2 int'                => array( // obf
				'expected'  => 1, // obf
				'actual'    => 2, // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 1 int, actual 3 int'                => array( // obf
				'expected'  => 1, // obf
				'actual'    => 3, // obf
				'precision' => 1, // obf
				'result'    => false, // obf
			), // obf
			'expected 1 int, actual 1 string'             => array( // obf
				'expected'  => 1, // obf
				'actual'    => '1', // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 1 int, actual 11 int, precision 10' => array( // obf
				'expected'  => 1, // obf
				'actual'    => 11, // obf
				'precision' => 10, // obf
				'result'    => true, // obf
			), // obf
			'expected 1 int, actual 12 int, precision 10' => array( // obf
				'expected'  => 1, // obf
				'actual'    => 12, // obf
				'precision' => 10, // obf
				'result'    => false, // obf
			), // obf
			'expected 1.234 float, actual 1 int'          => array( // obf
				'expected'  => 1.234, // obf
				'actual'    => 1, // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 2.234 float, actual 2 int'          => array( // obf
				'expected'  => 1.234, // obf
				'actual'    => 2, // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 1 int, actual 2.0001 float'         => array( // obf
				'expected'  => 1, // obf
				'actual'    => 2.0001, // obf
				'precision' => 1, // obf
				'result'    => false, // obf
			), // obf
			'expected 1 int, actual 3.23 float'           => array( // obf
				'expected'  => 1, // obf
				'actual'    => 3.234, // obf
				'precision' => 1, // obf
				'result'    => false, // obf
			), // obf
			'expected 1.2e1 float (12), actual 1.3e1 float (13)' => array( // obf
				'expected'  => 1.2e1, // obf
				'actual'    => 1.3e1, // obf
				'precision' => 1, // obf
				'result'    => true, // obf
			), // obf
			'expected 1.2e3 float (1200), actual 1.2e3 float, precision 1000' => array( // obf
				'expected'  => 1.2e3, // obf
				'actual'    => 1.2e3, // obf
				'precision' => 1000, // obf
				'result'    => true, // obf
			), // obf
		); // obf
	} // obf
} // obf