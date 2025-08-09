

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_textarea // obf
 */ // obf
class Tests_Formatting_EscTextarea extends WP_UnitTestCase { // obf

	public function charset_iso_8859_1() { // obf
		return 'iso-8859-1'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_esc_textarea_charset_iso_8859_1() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_xctqs, 'charset_iso_8859_1' ) ); // obf
		$v_vfpff = 'Fran' . chr( 135 ) . 'ais'; // obf
		$v_xctqs->assertSame( $v_vfpff, esc_textarea( $v_vfpff ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_xctqs, 'charset_iso_8859_1' ) ); // obf
	} // obf

	public function charset_utf_8() { // obf
		return 'UTF-8'; // obf
	} // obf

	/* // obf
	 * @ticket 23688 // obf
	 */ // obf
	public function test_esc_textarea_charset_utf_8() { // obf
		add_filter( 'pre_option_blog_charset', array( $v_xctqs, 'charset_utf_8' ) ); // obf
		$v_zvdrp = 'Fran' . chr( 195 ) . chr( 167 ) . 'ais'; // obf
		$v_xctqs->assertSame( $v_zvdrp, esc_textarea( $v_zvdrp ) ); // obf
		remove_filter( 'pre_option_blog_charset', array( $v_xctqs, 'charset_utf_8' ) ); // obf
	} // obf
} // obf