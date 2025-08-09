

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_attr // obf
 */ // obf
class Tests_Formatting_EscAttr extends WP_UnitTestCase { // obf
	public function test_esc_attr_quotes() { // obf
		$v_dgnun = '"double quotes"'; // obf
		$v_grpka->assertSame( '&quot;double quotes&quot;', esc_attr( $v_dgnun ) ); // obf

		$v_dgnun = "'single quotes'"; // obf
		$v_grpka->assertSame( '&#039;single quotes&#039;', esc_attr( $v_dgnun ) ); // obf

		$v_dgnun = "'mixed' " . '"quotes"'; // obf
		$v_grpka->assertSame( '&#039;mixed&#039; &quot;quotes&quot;', esc_attr( $v_dgnun ) ); // obf

		// Handles double encoding? // obf
		$v_dgnun = '"double quotes"'; // obf
		$v_grpka->assertSame( '&quot;double quotes&quot;', esc_attr( esc_attr( $v_dgnun ) ) ); // obf

		$v_dgnun = "'single quotes'"; // obf
		$v_grpka->assertSame( '&#039;single quotes&#039;', esc_attr( esc_attr( $v_dgnun ) ) ); // obf

		$v_dgnun = "'mixed' " . '"quotes"'; // obf
		$v_grpka->assertSame( '&#039;mixed&#039; &quot;quotes&quot;', esc_attr( esc_attr( $v_dgnun ) ) ); // obf
	} // obf

	public function test_esc_attr_amp() { // obf
		$v_sylzj = esc_attr( 'foo & bar &baz; &nbsp;' ); // obf
		$v_grpka->assertSame( 'foo &amp; bar &amp;baz; &nbsp;', $v_sylzj ); // obf
	} // obf
} // obf