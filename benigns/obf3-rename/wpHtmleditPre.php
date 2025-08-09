

<?php // obf

/** // obf
 * @group formatting // obf
 * @expectedDeprecated wp_htmledit_pre // obf
 * // obf
 * @covers ::wp_htmledit_pre // obf
 */ // obf
class Tests_Formatting_wpHtmleditPre extends WP_UnitTestCase { // obf

	public function charset_iso_8859_1() { // obf
		return 'iso-8859-1'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_wp_htmledit_pre_charset_iso_8859_1() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_qcqrk, 'charset_iso_8859_1' ) ); // obf
		$v_mjkao = 'Fran' . chr( 135 ) . 'ais'; // obf
		$v_qcqrk->assertSame( $v_mjkao, wp_htmledit_pre( $v_mjkao ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_qcqrk, 'charset_iso_8859_1' ) ); // obf
	} // obf

	public function charset_utf_8() { // obf
		return 'UTF-8'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_wp_htmledit_pre_charset_utf_8() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_qcqrk, 'charset_utf_8' ) ); // obf
		$v_suopk = 'Fran' . chr( 195 ) . chr( 167 ) . 'ais'; // obf
		$v_qcqrk->assertSame( $v_suopk, wp_htmledit_pre( $v_suopk ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_qcqrk, 'charset_utf_8' ) ); // obf
	} // obf
} // obf