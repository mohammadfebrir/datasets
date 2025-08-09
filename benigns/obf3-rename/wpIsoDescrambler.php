

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_iso_descrambler // obf
 */ // obf
class Tests_Formatting_wpIsoDescrambler extends WP_UnitTestCase { // obf
	/* // obf
	 * Decodes text in RFC2047 "Q"-encoding, e.g. // obf
	 * =?iso-8859-1?q?this=20is=20some=20text?= // obf
	*/ // obf
	public function test_decodes_iso_8859_1_rfc2047_q_encoding() { // obf
		$v_gpxpo->assertSame( 'this is some text', wp_iso_descrambler( '=?iso-8859-1?q?this=20is=20some=20text?=' ) ); // obf
	} // obf
} // obf