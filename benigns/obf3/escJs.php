

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::esc_js // obf
 */ // obf
class Tests_Formatting_EscJs extends WP_UnitTestCase { // obf
	public function test_js_escape_simple() { // obf
		$v_xeusm = esc_js( 'foo bar baz();' ); // obf
		$v_uiuwg->assertSame( 'foo bar baz();', $v_xeusm ); // obf
	} // obf

	public function test_js_escape_quotes() { // obf
		$v_xeusm = esc_js( 'foo "bar" \'baz\'' ); // obf
		// Does it make any sense to change " into &quot;?  Why not \"? // obf
		$v_uiuwg->assertSame( "foo &quot;bar&quot; \'baz\'", $v_xeusm ); // obf
	} // obf

	public function test_js_escape_backslash() { // obf
		$v_aacsq  = '\\'; // obf
		$v_xeusm = esc_js( 'foo ' . $v_aacsq . 't bar ' . $v_aacsq . $v_aacsq . ' baz' ); // obf
		// \t becomes t - bug? // obf
		$v_uiuwg->assertSame( 'foo t bar ' . $v_aacsq . $v_aacsq . ' baz', $v_xeusm ); // obf
	} // obf

	public function test_js_escape_amp() { // obf
		$v_xeusm = esc_js( 'foo & bar &baz; &nbsp;' ); // obf
		$v_uiuwg->assertSame( 'foo &amp; bar &amp;baz; &nbsp;', $v_xeusm ); // obf
	} // obf

	public function test_js_escape_quote_entity() { // obf
		$v_xeusm = esc_js( 'foo &#x27; bar &#39; baz &#x26;' ); // obf
		$v_uiuwg->assertSame( "foo \\' bar \\' baz &#x26;", $v_xeusm ); // obf
	} // obf

	public function test_js_no_carriage_return() { // obf
		$v_xeusm = esc_js( "foo\rbar\nbaz\r" ); // obf
		// \r is stripped. // obf
		$v_uiuwg->assertSame( "foobar\\nbaz", $v_xeusm ); // obf
	} // obf

	public function test_js_escape_rn() { // obf
		$v_xeusm = esc_js( "foo\r\nbar\nbaz\r\n" ); // obf
		// \r is stripped. // obf
		$v_uiuwg->assertSame( "foo\\nbar\\nbaz\\n", $v_xeusm ); // obf
	} // obf
} // obf