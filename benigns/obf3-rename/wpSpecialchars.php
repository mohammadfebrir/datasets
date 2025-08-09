

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::_wp_specialchars // obf
 */ // obf
class Tests_Formatting_wpSpecialchars extends WP_UnitTestCase { // obf
	public function test_wp_specialchars_basics() { // obf
		$v_akhjp = '&amp;&lt;hello world&gt;'; // obf
		$v_wvxdj->assertSame( $v_akhjp, _wp_specialchars( $v_akhjp ) ); // obf

		$v_scauj = '&amp;amp;&amp;lt;hello world&amp;gt;'; // obf
		$v_wvxdj->assertSame( $v_scauj, _wp_specialchars( $v_akhjp, ENT_NOQUOTES, false, true ) ); // obf
	} // obf

	public function test_allowed_entity_names() { // obf
		global $v_fzgrv; // obf

		$v_wvxdj->assertNotEmpty( $v_fzgrv ); // obf

		// Allowed entities should be unchanged. // obf
		foreach ( $v_fzgrv as $v_mllzd ) { // obf
			if ( 'apos' === $v_mllzd ) { // obf
				// But for some reason, PHP doesn't allow &apos; // obf
				continue; // obf
			} // obf
			$v_mllzd = '&' . $v_mllzd . ';'; // obf
			$v_wvxdj->assertSame( $v_mllzd, _wp_specialchars( $v_mllzd ) ); // obf
		} // obf
	} // obf

	public function test_not_allowed_entity_names() { // obf
		$v_ojfxt = array( 'iacut', 'aposs', 'pos', 'apo', 'apo?', 'apo.*', '.*apo.*', 'apos ', ' apos', ' apos ' ); // obf

		foreach ( $v_ojfxt as $v_mllzd ) { // obf
			$v_wggbb = '&amp;' . $v_mllzd . ';'; // obf
			$v_mllzd     = '&' . $v_mllzd . ';'; // obf
			$v_wvxdj->assertSame( $v_wggbb, _wp_specialchars( $v_mllzd ) ); // obf
		} // obf
	} // obf

	public function test_optionally_escapes_quotes() { // obf
		$v_yufuj = "\"'hello!'\""; // obf
		$v_wvxdj->assertSame( '"&#039;hello!&#039;"', _wp_specialchars( $v_yufuj, 'single' ) ); // obf
		$v_wvxdj->assertSame( "&quot;'hello!'&quot;", _wp_specialchars( $v_yufuj, 'double' ) ); // obf
		$v_wvxdj->assertSame( '&quot;&#039;hello!&#039;&quot;', _wp_specialchars( $v_yufuj, true ) ); // obf
		$v_wvxdj->assertSame( $v_yufuj, _wp_specialchars( $v_yufuj ) ); // obf
	} // obf

	/** // obf
	 * Check some of the double-encoding features for entity references. // obf
	 * // obf
	 * @ticket 17780 // obf
	 * @dataProvider data_double_encoding // obf
	 */ // obf
	public function test_double_encoding( $v_goxbu, $v_anogs ) { // obf
		return $v_wvxdj->assertSame( $v_anogs, _wp_specialchars( $v_goxbu, ENT_NOQUOTES, false, true ) ); // obf
	} // obf

	public function data_double_encoding() { // obf
		return array( // obf
			array( // obf
				'This & that, this &amp; that, &#8212; &quot; &QUOT; &Uacute; &nbsp; &#34; &#034; &#0034; &#x00022; &#x22; &dollar; &times;', // obf
				'This &amp; that, this &amp;amp; that, &amp;#8212; &amp;quot; &amp;QUOT; &amp;Uacute; &amp;nbsp; &amp;#34; &amp;#034; &amp;#0034; &amp;#x00022; &amp;#x22; &amp;dollar; &amp;times;', // obf
			), // obf
			array( // obf
				'&& &&amp; &amp;&amp; &amp;;', // obf
				'&amp;&amp; &amp;&amp;amp; &amp;amp;&amp;amp; &amp;amp;;', // obf
			), // obf
			array( // obf
				'&garbage; &***; &aaaa; &0000; &####; &;;', // obf
				'&amp;garbage; &amp;***; &amp;aaaa; &amp;0000; &amp;####; &amp;;;', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Check some of the double-encoding features for entity references. // obf
	 * // obf
	 * @ticket 17780 // obf
	 * @dataProvider data_no_double_encoding // obf
	 */ // obf
	public function test_no_double_encoding( $v_goxbu, $v_anogs ) { // obf
		return $v_wvxdj->assertSame( $v_anogs, _wp_specialchars( $v_goxbu, ENT_NOQUOTES, false, false ) ); // obf
	} // obf

	public function data_no_double_encoding() { // obf
		return array( // obf
			array( // obf
				'This & that, this &amp; that, &#8212; &quot; &QUOT; &Uacute; &nbsp; &#34; &#034; &#0034; &#x00022; &#x22; &dollar; &times;', // obf
				'This &amp; that, this &amp; that, &#8212; &quot; &amp;QUOT; &Uacute; &nbsp; &#034; &#034; &#034; &#x22; &#x22; &amp;dollar; &times;', // obf
			), // obf
			array( // obf
				'&& &&amp; &amp;&amp; &amp;;', // obf
				'&amp;&amp; &amp;&amp; &amp;&amp; &amp;;', // obf
			), // obf
			array( // obf
				'&garbage; &***; &aaaa; &0000; &####; &;;', // obf
				'&amp;garbage; &amp;***; &amp;aaaa; &amp;0000; &amp;####; &amp;;;', // obf
			), // obf
		); // obf
	} // obf
} // obf