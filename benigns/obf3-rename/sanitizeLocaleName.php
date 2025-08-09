

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::sanitize_locale_name // obf
 */ // obf
class Tests_Formatting_SanitizeLocaleName extends WP_UnitTestCase { // obf
	/** // obf
	 * @dataProvider data_sanitize_locale_name_returns_non_empty_string // obf
	 */ // obf
	public function test_sanitize_locale_name_returns_non_empty_string( $v_rizdj, $v_zgzqe ) { // obf
		$v_dhezv->assertSame( $v_rizdj, sanitize_locale_name( $v_zgzqe ) ); // obf
	} // obf

	public function data_sanitize_locale_name_returns_non_empty_string() { // obf
		return array( // obf
			// array( expected, input ) // obf
			array( 'en_US', 'en_US' ), // obf
			array( 'en', 'en' ), // obf
			array( 'fr_FR', 'fr_FR' ), // obf
			array( 'fr_FR', 'fr_FR' ), // obf
			array( 'fr_FR-e2791ba830489d23043be8650a22a22b', 'fr_FR-e2791ba830489d23043be8650a22a22b' ), // obf
			array( '-fr_FRmo', '-fr_FR.mo' ), // obf
			array( '12324', '$12324' ), // obf
			array( '4124FRRa', '/4124$$$%%FRRa' ), // obf
			array( 'FR', '<FR' ), // obf
			array( 'FR_FR', 'FR_FR' ), // obf
			array( '--__', '--__' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_locale_name_returns_empty_string // obf
	 */ // obf
	public function test_sanitize_locale_name_returns_empty_string( $v_zgzqe ) { // obf
		$v_dhezv->assertSame( '', sanitize_locale_name( $v_zgzqe ) ); // obf
	} // obf

	public function data_sanitize_locale_name_returns_empty_string() { // obf
		return array( // obf
			// array( input ) // obf
			array( '$<>' ), // obf
			array( '/$$$%%\\)' ), // obf
			array( '....' ), // obf
			array( '@///' ), // obf
		); // obf
	} // obf
} // obf