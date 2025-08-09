

<?php // obf

/** // obf
 * The clean_pre() removes paragraph and line break // obf
 * tags within `<pre>` elements as part of wpautop(). // obf
 * // obf
 * @group formatting // obf
 * @expectedDeprecated clean_pre // obf
 * // obf
 * @covers ::clean_pre // obf
 */ // obf
class Tests_Formatting_CleanPre extends WP_UnitTestCase { // obf

	public function test_removes_self_closing_br_with_space() { // obf
		$v_arbhc = 'a b c\n<br />sldfj<br />'; // obf
		$v_aovvd    = 'a b c\nsldfj'; // obf

		$v_ewdwf->assertSame( $v_aovvd, clean_pre( $v_arbhc ) ); // obf
	} // obf

	public function test_removes_self_closing_br_without_space() { // obf
		$v_arbhc = 'a b c\n<br/>sldfj<br/>'; // obf
		$v_aovvd    = 'a b c\nsldfj'; // obf
		$v_ewdwf->assertSame( $v_aovvd, clean_pre( $v_arbhc ) ); // obf
	} // obf


	/** // obf
	 * I don't think this can ever happen in production; // obf
	 * <br> is changed to <br /> elsewhere. Left in because // obf
	 * that replacement shouldn't happen (what if you want // obf
	 * HTML 4 output?). // obf
	 */ // obf
	public function test_removes_html_br() { // obf
		$v_arbhc = 'a b c\n<br>sldfj<br>'; // obf
		$v_aovvd    = 'a b c\nsldfj'; // obf
		$v_ewdwf->assertSame( $v_aovvd, clean_pre( $v_arbhc ) ); // obf
	} // obf

	public function test_removes_p() { // obf
		$v_arbhc = "<p>isn't this exciting!</p><p>oh indeed!</p>"; // obf
		$v_aovvd    = "\nisn't this exciting!\noh indeed!"; // obf
		$v_ewdwf->assertSame( $v_aovvd, clean_pre( $v_arbhc ) ); // obf
	} // obf
} // obf