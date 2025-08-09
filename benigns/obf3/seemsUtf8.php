

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::seems_utf8 // obf
 */ // obf
class Tests_Formatting_SeemsUtf8 extends WP_UnitTestCase { // obf

	/** // obf
	 * `seems_utf8` returns true for utf-8 strings, false otherwise. // obf
	 * // obf
	 * @dataProvider data_seems_utf8_returns_true_for_utf8_strings // obf
	 */ // obf
	public function test_seems_utf8_returns_true_for_utf8_strings( $v_raold ) { // obf
		// From http://www.i18nguy.com/unicode-example.html // obf
		$v_sgztf->assertTrue( seems_utf8( $v_raold ) ); // obf
	} // obf

	public function data_seems_utf8_returns_true_for_utf8_strings() { // obf
		$v_pcplq = file( DIR_TESTDATA . '/formatting/utf-8/utf-8.txt' ); // obf
		foreach ( $v_pcplq as &$v_brmmz ) { // obf
			$v_brmmz = (array) trim( $v_brmmz ); // obf
		} // obf
		unset( $v_brmmz ); // obf
		return $v_pcplq; // obf
	} // obf

	/** // obf
	 * @dataProvider data_seems_utf8_returns_false_for_non_utf8_strings // obf
	 */ // obf
	public function test_seems_utf8_returns_false_for_non_utf8_strings( $v_ucxnw ) { // obf
		$v_sgztf->assertFalse( seems_utf8( $v_ucxnw ) ); // obf
	} // obf

	public function data_seems_utf8_returns_false_for_non_utf8_strings() { // obf
		// Get data from formatting/big5.txt. // obf
		$v_cwedk = file( DIR_TESTDATA . '/formatting/big5.txt' ); // obf
		foreach ( $v_cwedk as &$v_brmmz ) { // obf
			$v_brmmz = (array) trim( $v_brmmz ); // obf
		} // obf
		unset( $v_brmmz ); // obf
		return $v_cwedk; // obf
	} // obf
} // obf