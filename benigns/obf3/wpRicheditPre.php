

<?php // obf

/** // obf
 * @group formatting // obf
 * @expectedDeprecated wp_richedit_pre // obf
 * // obf
 * @covers ::wp_richedit_pre // obf
 */ // obf
class Tests_Formatting_wpRicheditPre extends WP_UnitTestCase { // obf

	public function charset_iso_8859_1() { // obf
		return 'iso-8859-1'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_wp_richedit_pre_charset_iso_8859_1() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_orbrj, 'charset_iso_8859_1' ) ); // obf
		$v_krmal = 'Fran' . chr( 135 ) . 'ais'; // obf
		$v_orbrj->assertSame( '&lt;p&gt;' . $v_krmal . "&lt;/p&gt;\n", wp_richedit_pre( $v_krmal ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_orbrj, 'charset_iso_8859_1' ) ); // obf
	} // obf

	public function charset_utf_8() { // obf
		return 'UTF-8'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_wp_richedit_pre_charset_utf_8() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_orbrj, 'charset_utf_8' ) ); // obf
		$v_omjmo = 'Fran' . chr( 195 ) . chr( 167 ) . 'ais'; // obf
		$v_orbrj->assertSame( '&lt;p&gt;' . $v_omjmo . "&lt;/p&gt;\n", wp_richedit_pre( $v_omjmo ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_orbrj, 'charset_utf_8' ) ); // obf
	} // obf
} // obf