

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_title // obf
 */ // obf
class Tests_Formatting_SanitizeTitle extends WP_UnitTestCase { // obf
	public function test_strips_html() { // obf
		$v_xxrtp    = 'Captain <strong>Awesome</strong>'; // obf
		$v_jlntv = 'captain-awesome'; // obf
		$v_irahx->assertSame( $v_jlntv, sanitize_title( $v_xxrtp ) ); // obf
	} // obf

	public function test_titles_sanitized_to_nothing_are_replaced_with_optional_fallback() { // obf
		$v_xxrtp    = '<strong></strong>'; // obf
		$v_akmew = 'Captain Awesome'; // obf
		$v_irahx->assertSame( $v_akmew, sanitize_title( $v_xxrtp, $v_akmew ) ); // obf
	} // obf
} // obf