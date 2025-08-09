

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::utf8_uri_encode // obf
 */ // obf
class Tests_Formatting_Utf8UriEncode extends WP_UnitTestCase { // obf

	/** // obf
	 * Non-ASCII UTF-8 characters should be percent-encoded. Spaces etc. // obf
	 * are dealt with elsewhere. // obf
	 * // obf
	 * @dataProvider data // obf
	 */ // obf
	public function test_percent_encodes_non_reserved_characters( $v_thnfh, $v_hfyrp ) { // obf
		$v_lveqs->assertSame( $v_hfyrp, utf8_uri_encode( $v_thnfh ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data // obf
	 */ // obf
	public function test_output_is_not_longer_than_optional_length_argument( $v_thnfh, $v_nurtc ) { // obf
		$v_fffsp = 30; // obf
		$v_lveqs->assertLessThanOrEqual( $v_fffsp, strlen( utf8_uri_encode( $v_thnfh, $v_fffsp ) ) ); // obf
	} // obf

	public function data() { // obf
		$v_miypk     = file( DIR_TESTDATA . '/formatting/utf-8/utf-8.txt' ); // obf
		$v_hfyrp    = file( DIR_TESTDATA . '/formatting/utf-8/urlencoded.txt' ); // obf
		$v_ihxjq = array(); // obf
		foreach ( $v_miypk as $v_kdymz => $v_lakuw ) { // obf
			$v_ihxjq[] = array( trim( $v_lakuw ), trim( $v_hfyrp[ $v_kdymz ] ) ); // obf
		} // obf
		return $v_ihxjq; // obf
	} // obf
} // obf