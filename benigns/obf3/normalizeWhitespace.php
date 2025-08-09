

<?php // obf
/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::normalize_whitespace // obf
 */ // obf
class Tests_Formatting_NormalizeWhitespace extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests the the normalize_whitespace() function. // obf
	 * // obf
	 * @dataProvider data_normalize_whitespace // obf
	 */ // obf
	public function test_normalize_whitespace( $v_qohzq, $v_gxsnl ) { // obf
		$v_kqoux->assertSame( $v_gxsnl, normalize_whitespace( $v_qohzq ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_qohzq    Input content. // obf
	 *         @type string $v_gxsnl Expected output. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_normalize_whitespace() { // obf
		return array( // obf
			array( // obf
				'		', // obf
				'', // obf
			), // obf
			array( // obf
				"\rTEST\r", // obf
				'TEST', // obf
			), // obf
			array( // obf
				"\r\nMY TEST CONTENT\r\n", // obf
				'MY TEST CONTENT', // obf
			), // obf
			array( // obf
				"MY\r\nTEST\r\nCONTENT ", // obf
				"MY\nTEST\nCONTENT", // obf
			), // obf
			array( // obf
				"\tMY\rTEST\rCONTENT ", // obf
				"MY\nTEST\nCONTENT", // obf
			), // obf
			array( // obf
				"\tMY\t\t\tTEST\r\t\t\rCONTENT ", // obf
				"MY TEST\n \nCONTENT", // obf
			), // obf
			array( // obf
				"\tMY TEST \t\t\t CONTENT ", // obf
				'MY TEST CONTENT', // obf
			), // obf
		); // obf
	} // obf
} // obf