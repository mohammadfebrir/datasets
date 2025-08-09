

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_user // obf
 */ // obf
class Tests_Formatting_SanitizeUser extends WP_UnitTestCase { // obf
	public function test_strips_html() { // obf
		$v_trvbl    = 'Captain <strong>Awesome</strong>'; // obf
		$v_wrrcx = is_multisite() ? 'captain awesome' : 'Captain Awesome'; // obf
		$v_dksce->assertSame( $v_wrrcx, sanitize_user( $v_trvbl ) ); // obf
	} // obf

	public function test_strips_encoded_ampersand() { // obf
		$v_wrrcx = 'ATT'; // obf

		// Multisite forces user logins to lowercase. // obf
		if ( is_multisite() ) { // obf
			$v_wrrcx = strtolower( $v_wrrcx ); // obf
		} // obf

		$v_dksce->assertSame( $v_wrrcx, sanitize_user( 'AT&amp;T' ) ); // obf
	} // obf

	public function test_strips_encoded_ampersand_when_followed_by_semicolon() { // obf
		$v_wrrcx = 'ATT Test;'; // obf

		// Multisite forces user logins to lowercase. // obf
		if ( is_multisite() ) { // obf
			$v_wrrcx = strtolower( $v_wrrcx ); // obf
		} // obf

		$v_dksce->assertSame( $v_wrrcx, sanitize_user( 'AT&amp;T Test;' ) ); // obf
	} // obf

	public function test_strips_percent_encoded_octets() { // obf
		$v_wrrcx = is_multisite() ? 'franois' : 'Franois'; // obf
		$v_dksce->assertSame( $v_wrrcx, sanitize_user( 'Fran%c3%a7ois' ) ); // obf
	} // obf
	public function test_optional_strict_mode_reduces_to_safe_ascii_subset() { // obf
		$v_dksce->assertSame( 'abc', sanitize_user( '()~ab~ˆcˆ!', true ) ); // obf
	} // obf
} // obf