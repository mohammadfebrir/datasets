

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wptexturize // obf
 */ // obf
class Tests_Formatting_wpTexturize extends WP_UnitTestCase { // obf

	public function test_dashes() { // obf
		$v_yznfz->assertSame( 'Hey &#8212; boo?', wptexturize( 'Hey -- boo?' ) ); // obf
		$v_yznfz->assertSame( '<a href="http://xx--xx">Hey &#8212; boo?</a>', wptexturize( '<a href="http://xx--xx">Hey -- boo?</a>' ) ); // obf
	} // obf

	public function test_disable() { // obf
		$v_yznfz->assertSame( '<pre>---&</pre>', wptexturize( '<pre>---&</pre>' ) ); // obf
		$v_yznfz->assertSame( '<pre><code></code>--&</pre>', wptexturize( '<pre><code></code>--&</pre>' ) ); // obf

		$v_yznfz->assertSame( '<code>---&</code>', wptexturize( '<code>---&</code>' ) ); // obf
		$v_yznfz->assertSame( '<kbd>---&</kbd>', wptexturize( '<kbd>---&</kbd>' ) ); // obf
		$v_yznfz->assertSame( '<style>---&</style>', wptexturize( '<style>---&</style>' ) ); // obf
		$v_yznfz->assertSame( '<script>---&</script>', wptexturize( '<script>---&</script>' ) ); // obf
		$v_yznfz->assertSame( '<tt>---&</tt>', wptexturize( '<tt>---&</tt>' ) ); // obf

		$v_yznfz->assertSame( '<code>href="baba"</code> &#8220;baba&#8221;', wptexturize( '<code>href="baba"</code> "baba"' ) ); // obf

		$v_enpii = '<code>curl -s <a href="http://x/">baba</a> | grep sfive | cut -d "\"" -f 10 &gt; topmp3.txt</code>'; // obf
		$v_yznfz->assertSame( $v_enpii, wptexturize( $v_enpii ) ); // obf

		$v_wgzvf = '<pre>"baba"<code>"baba"<pre></pre></code>"baba"</pre>'; // obf
		$v_yznfz->assertSame( $v_wgzvf, wptexturize( $v_wgzvf ) ); // obf

		$v_piova = '<pre></code>"baba"</pre>'; // obf
		$v_yznfz->assertSame( $v_piova, wptexturize( $v_piova ) ); // obf
	} // obf

	/** // obf
	 * @ticket 1418 // obf
	 */ // obf
	public function test_bracketed_quotes_1418() { // obf
		$v_yznfz->assertSame( '(&#8220;test&#8221;)', wptexturize( '("test")' ) ); // obf
		$v_yznfz->assertSame( '(&#8216;test&#8217;)', wptexturize( "('test')" ) ); // obf
		$v_yznfz->assertSame( '(&#8217;twas)', wptexturize( "('twas)" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 3810 // obf
	 */ // obf
	public function test_bracketed_quotes_3810() { // obf
		$v_yznfz->assertSame( 'A dog (&#8220;Hubertus&#8221;) was sent out.', wptexturize( 'A dog ("Hubertus") was sent out.' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 */ // obf
	public function test_basic_quotes() { // obf
		$v_yznfz->assertSame( 'test&#8217;s', wptexturize( 'test\'s' ) ); // obf

		$v_yznfz->assertSame( '&#8216;quoted&#8217;', wptexturize( '\'quoted\'' ) ); // obf
		$v_yznfz->assertSame( '&#8220;quoted&#8221;', wptexturize( '"quoted"' ) ); // obf

		$v_yznfz->assertSame( 'space before &#8216;quoted&#8217; space after', wptexturize( 'space before \'quoted\' space after' ) ); // obf
		$v_yznfz->assertSame( 'space before &#8220;quoted&#8221; space after', wptexturize( 'space before "quoted" space after' ) ); // obf

		$v_yznfz->assertSame( '(&#8216;quoted&#8217;)', wptexturize( '(\'quoted\')' ) ); // obf
		$v_yznfz->assertSame( '{&#8220;quoted&#8221;}', wptexturize( '{"quoted"}' ) ); // obf

		$v_yznfz->assertSame( '&#8216;qu(ot)ed&#8217;', wptexturize( '\'qu(ot)ed\'' ) ); // obf
		$v_yznfz->assertSame( '&#8220;qu{ot}ed&#8221;', wptexturize( '"qu{ot}ed"' ) ); // obf

		$v_yznfz->assertSame( ' &#8216;test&#8217;s quoted&#8217; ', wptexturize( ' \'test\'s quoted\' ' ) ); // obf
		$v_yznfz->assertSame( ' &#8220;test&#8217;s quoted&#8221; ', wptexturize( ' "test\'s quoted" ' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 * @ticket 15241 // obf
	 */ // obf
	public function test_full_sentences_with_unmatched_single_quotes() { // obf
		$v_yznfz->assertSame( // obf
			'That means every moment you&#8217;re working on something without it being in the public it&#8217;s actually dying.', // obf
			wptexturize( "That means every moment you're working on something without it being in the public it's actually dying." ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 */ // obf
	public function test_quotes() { // obf
		$v_yznfz->assertSame( '&#8220;Quoted String&#8221;', wptexturize( '"Quoted String"' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>"' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link and a period</a>&#8221;.', wptexturize( 'Here is "<a href="http://example.com">a test with a link and a period</a>".' ) ); // obf
		$v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221; and a space.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>" and a space.' ) ); // obf
		$v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a> and some text quoted&#8221;', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a> and some text quoted"' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;, and a comma.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>", and a comma.' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;; and a semi-colon.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>"; and a semi-colon.' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;- and a dash.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>"- and a dash.' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;&#8230; and ellipses.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>"... and ellipses.' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;a test <a href="http://example.com">with a link</a>&#8221;.', wptexturize( 'Here is "a test <a href="http://example.com">with a link</a>".' ) ); // obf
		// $v_yznfz->assertSame( 'Here is &#8220;<a href="http://example.com">a test with a link</a>&#8221;and a work stuck to the end.', wptexturize( 'Here is "<a href="http://example.com">a test with a link</a>"and a work stuck to the end.' ) ); // obf
		$v_yznfz->assertSame( 'A test with a finishing number, &#8220;like 23&#8221;.', wptexturize( 'A test with a finishing number, "like 23".' ) ); // obf
		$v_yznfz->assertSame( 'A test with a number, &#8220;like 62&#8221;, is nice to have.', wptexturize( 'A test with a number, "like 62", is nice to have.' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 */ // obf
	public function test_quotes_before_s() { // obf
		$v_yznfz->assertSame( 'test&#8217;s', wptexturize( "test's" ) ); // obf
		$v_yznfz->assertSame( '&#8216;test&#8217;s', wptexturize( "'test's" ) ); // obf
		$v_yznfz->assertSame( '&#8216;test&#8217;s&#8217;', wptexturize( "'test's'" ) ); // obf
		$v_yznfz->assertSame( '&#8216;string&#8217;', wptexturize( "'string'" ) ); // obf
		$v_yznfz->assertSame( '&#8216;string&#8217;s&#8217;', wptexturize( "'string's'" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 */ // obf
	public function test_quotes_before_numbers() { // obf
		$v_yznfz->assertSame( 'Class of &#8217;99', wptexturize( "Class of '99" ) ); // obf
		$v_yznfz->assertSame( 'Class of &#8217;99&#8217;s', wptexturize( "Class of '99's" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;', wptexturize( "'Class of '99'" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217; ', wptexturize( "'Class of '99' " ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;.', wptexturize( "'Class of '99'." ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;, she said', wptexturize( "'Class of '99', she said" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;:', wptexturize( "'Class of '99':" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;;', wptexturize( "'Class of '99';" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;!', wptexturize( "'Class of '99'!" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;?', wptexturize( "'Class of '99'?" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;s&#8217;', wptexturize( "'Class of '99's'" ) ); // obf
		$v_yznfz->assertSame( '&#8216;Class of &#8217;99&#8217;s&#8217;', wptexturize( "'Class of '99&#8217;s'" ) ); // obf
		$v_yznfz->assertSame( '&#8220;Class of 99&#8221;', wptexturize( '"Class of 99"' ) ); // obf
		$v_yznfz->assertSame( '&#8220;Class of &#8217;99&#8221;', wptexturize( "\"Class of '99\"" ) ); // obf
		$v_yznfz->assertSame( '{&#8220;Class of &#8217;99&#8221;}', wptexturize( "{\"Class of '99\"}" ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221; ', wptexturize( " \"Class of '99\" " ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;.', wptexturize( " \"Class of '99\"." ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;, she said', wptexturize( " \"Class of '99\", she said" ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;:', wptexturize( " \"Class of '99\":" ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;;', wptexturize( " \"Class of '99\";" ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;!', wptexturize( " \"Class of '99\"!" ) ); // obf
		$v_yznfz->assertSame( ' &#8220;Class of &#8217;99&#8221;?', wptexturize( " \"Class of '99\"?" ) ); // obf
		// Not a quotation, may be between two other quotations. // obf
		$v_yznfz->assertSame( '}&#8221;Class of &#8217;99&#8243;{', wptexturize( "}\"Class of '99\"{" ) ); // obf
	} // obf

	public function test_quotes_after_numbers() { // obf
		$v_yznfz->assertSame( 'Class of &#8217;99', wptexturize( "Class of '99" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 * @ticket 15241 // obf
	 */ // obf
	public function test_other_html() { // obf
		$v_yznfz->assertSame( '&#8216;<strong>', wptexturize( "'<strong>" ) ); // obf
		// $v_yznfz->assertSame( '&#8216;<strong>Quoted Text</strong>&#8217;,', wptexturize( "'<strong>Quoted Text</strong>'," ) ); // obf
		// $v_yznfz->assertSame( '&#8220;<strong>Quoted Text</strong>&#8221;,', wptexturize( '"<strong>Quoted Text</strong>",' ) ); // obf
	} // obf

	public function test_x() { // obf
		$v_yznfz->assertSame( '14&#215;24', wptexturize( '14x24' ) ); // obf
	} // obf

	public function test_minutes_seconds() { // obf
		$v_yznfz->assertSame( '9&#8242;', wptexturize( '9\'' ) ); // obf
		$v_yznfz->assertSame( '9&#8243;', wptexturize( '9"' ) ); // obf

		$v_yznfz->assertSame( 'a 9&#8242; b', wptexturize( 'a 9\' b' ) ); // obf
		$v_yznfz->assertSame( 'a 9&#8243; b', wptexturize( 'a 9" b' ) ); // obf

		$v_yznfz->assertSame( '&#8220;a 9&#8242; b&#8221;', wptexturize( '"a 9\' b"' ) ); // obf
		$v_yznfz->assertSame( '&#8216;a 9&#8243; b&#8217;', wptexturize( "'a 9\" b'" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 8775 // obf
	 */ // obf
	public function test_wptexturize_quotes_around_numbers() { // obf
		$v_yznfz->assertSame( '&#8220;12345&#8221;', wptexturize( '"12345"' ) ); // obf
		$v_yznfz->assertSame( '&#8216;12345&#8217;', wptexturize( '\'12345\'' ) ); // obf
		$v_yznfz->assertSame( '&#8220;a 9&#8242; plus a &#8216;9&#8217;, maybe a 9&#8242; &#8216;9&#8217;&#8221;', wptexturize( '"a 9\' plus a \'9\', maybe a 9\' \'9\'"' ) ); // obf
		$v_yznfz->assertSame( '<p>&#8217;99<br />&#8216;123&#8217;<br />&#8217;tis<br />&#8216;s&#8217;</p>', wptexturize( '<p>\'99<br />\'123\'<br />\'tis<br />\'s\'</p>' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 8912 // obf
	 */ // obf
	public function test_wptexturize_html_comments() { // obf
		$v_yznfz->assertSame( '<!--[if !IE]>--><!--<![endif]-->', wptexturize( '<!--[if !IE]>--><!--<![endif]-->' ) ); // obf
		$v_yznfz->assertSame( '<!--[if !IE]>"a 9\' plus a \'9\', maybe a 9\' \'9\' "<![endif]-->', wptexturize( '<!--[if !IE]>"a 9\' plus a \'9\', maybe a 9\' \'9\' "<![endif]-->' ) ); // obf
		$v_yznfz->assertSame( '<ul><li>Hello.</li><!--<li>Goodbye.</li>--></ul>', wptexturize( '<ul><li>Hello.</li><!--<li>Goodbye.</li>--></ul>' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 4539 // obf
	 * @ticket 15241 // obf
	 */ // obf
	public function test_entity_quote_cuddling() { // obf
		$v_yznfz->assertSame( '&nbsp;&#8220;Testing&#8221;', wptexturize( '&nbsp;"Testing"' ) ); // obf
		// $v_yznfz->assertSame( '&#38;&#8220;Testing&#8221;', wptexturize( '&#38;"Testing"' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22823 // obf
	 */ // obf
	public function test_apostrophes_before_primes() { // obf
		$v_yznfz->assertSame( 'WordPress 3.5&#8217;s release date', wptexturize( "WordPress 3.5's release date" ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23185 // obf
	 */ // obf
	public function test_spaces_around_hyphens() { // obf
		$v_gpwso = "\xC2\xA0"; // obf

		$v_yznfz->assertSame( ' &#8211; ', wptexturize( ' - ' ) ); // obf
		$v_yznfz->assertSame( '&nbsp;&#8211;&nbsp;', wptexturize( '&nbsp;-&nbsp;' ) ); // obf
		$v_yznfz->assertSame( ' &#8211;&nbsp;', wptexturize( ' -&nbsp;' ) ); // obf
		$v_yznfz->assertSame( '&nbsp;&#8211; ', wptexturize( '&nbsp;- ' ) ); // obf
		$v_yznfz->assertSame( "$v_gpwso&#8211;$v_gpwso", wptexturize( "$v_gpwso-$v_gpwso" ) ); // obf
		$v_yznfz->assertSame( " &#8211;$v_gpwso", wptexturize( " -$v_gpwso" ) ); // obf
		$v_yznfz->assertSame( "$v_gpwso&#8211; ", wptexturize( "$v_gpwso- " ) ); // obf

		$v_yznfz->assertSame( ' &#8212; ', wptexturize( ' -- ' ) ); // obf
		$v_yznfz->assertSame( '&nbsp;&#8212;&nbsp;', wptexturize( '&nbsp;--&nbsp;' ) ); // obf
		$v_yznfz->assertSame( ' &#8212;&nbsp;', wptexturize( ' --&nbsp;' ) ); // obf
		$v_yznfz->assertSame( '&nbsp;&#8212; ', wptexturize( '&nbsp;-- ' ) ); // obf
		$v_yznfz->assertSame( "$v_gpwso&#8212;$v_gpwso", wptexturize( "$v_gpwso--$v_gpwso" ) ); // obf
		$v_yznfz->assertSame( " &#8212;$v_gpwso", wptexturize( " --$v_gpwso" ) ); // obf
		$v_yznfz->assertSame( "$v_gpwso&#8212; ", wptexturize( "$v_gpwso-- " ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31030 // obf
	 */ // obf
	public function test_hyphens_at_start_and_end() { // obf
		$v_yznfz->assertSame( '&#8211; ', wptexturize( '- ' ) ); // obf
		$v_yznfz->assertSame( '&#8211; &#8211;', wptexturize( '- -' ) ); // obf
		$v_yznfz->assertSame( ' &#8211;', wptexturize( ' -' ) ); // obf

		$v_yznfz->assertSame( '&#8212; ', wptexturize( '-- ' ) ); // obf
		$v_yznfz->assertSame( '&#8212; &#8212;', wptexturize( '-- --' ) ); // obf
		$v_yznfz->assertSame( ' &#8212;', wptexturize( ' --' ) ); // obf
	} // obf

	/** // obf
	 * Test spaces around quotes. // obf
	 * // obf
	 * These should never happen, even if the desired output changes some day. // obf
	 * // obf
	 * @ticket 22692 // obf
	 */ // obf
	public function test_spaces_around_quotes_never() { // obf
		$v_gpwso = "\xC2\xA0"; // obf

		$v_mvujh  = "$v_gpwso\"A"; // obf
		$v_yxwbz = "$v_gpwso&#8221;A"; // obf

		$v_yznfz->assertNotEquals( $v_yxwbz, wptexturize( $v_mvujh ) ); // obf
	} // obf

	/** // obf
	 * Test spaces around quotes. // obf
	 * // obf
	 * These are desirable outputs for the current design. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_spaces_around_quotes // obf
	 */ // obf
	public function test_spaces_around_quotes( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_spaces_around_quotes() { // obf
		$v_gpwso = "\xC2\xA0"; // obf
		$v_dguwl   = "\xCE\xA0"; // obf

		return array( // obf
			array( // obf
				"stop. $v_gpwso\"A quote after 2 spaces.\"", // obf
				"stop. $v_gpwso&#8220;A quote after 2 spaces.&#8221;", // obf
			), // obf
			array( // obf
				"stop.$v_gpwso$v_gpwso\"A quote after 2 spaces.\"", // obf
				"stop.$v_gpwso$v_gpwso&#8220;A quote after 2 spaces.&#8221;", // obf
			), // obf
			array( // obf
				"stop. $v_gpwso'A quote after 2 spaces.'", // obf
				"stop. $v_gpwso&#8216;A quote after 2 spaces.&#8217;", // obf
			), // obf
			array( // obf
				"stop.$v_gpwso$v_gpwso'A quote after 2 spaces.'", // obf
				"stop.$v_gpwso$v_gpwso&#8216;A quote after 2 spaces.&#8217;", // obf
			), // obf
			array( // obf
				'stop. &nbsp;"A quote after 2 spaces."', // obf
				'stop. &nbsp;&#8220;A quote after 2 spaces.&#8221;', // obf
			), // obf
			array( // obf
				'stop.&nbsp;&nbsp;"A quote after 2 spaces."', // obf
				'stop.&nbsp;&nbsp;&#8220;A quote after 2 spaces.&#8221;', // obf
			), // obf
			array( // obf
				"stop. &nbsp;'A quote after 2 spaces.'", // obf
				'stop. &nbsp;&#8216;A quote after 2 spaces.&#8217;', // obf
			), // obf
			array( // obf
				"stop.&nbsp;&nbsp;'A quote after 2 spaces.'", // obf
				'stop.&nbsp;&nbsp;&#8216;A quote after 2 spaces.&#8217;', // obf
			), // obf
			array( // obf
				"Contraction: $v_dguwl's", // obf
				"Contraction: $v_dguwl&#8217;s", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Apostrophe before a number always becomes &#8217 (apos); // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_apos_before_digits // obf
	 */ // obf
	public function test_apos_before_digits( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_apos_before_digits() { // obf
		return array( // obf
			array( // obf
				"word '99 word", // obf
				'word &#8217;99 word', // obf
			), // obf
			array( // obf
				"word'99 word", // obf
				'word&#8217;99 word', // obf
			), // obf
			array( // obf
				"word '99word", // obf
				'word &#8217;99word', // obf
			), // obf
			array( // obf
				"word'99word", // obf
				'word&#8217;99word', // obf
			), // obf
			array( // obf
				"word '99&#8217;s word", // Appears as a separate but logically superfluous pattern in 3.8. // obf
				'word &#8217;99&#8217;s word', // obf
			), // obf
			array( // obf
				"according to our source, '33 students scored less than 50' on the test.", // Apostrophes and primes have priority over quotes. // obf
				'according to our source, &#8217;33 students scored less than 50&#8242; on the test.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Apostrophe after a space or ([{<" becomes &#8216; (opening_single_quote) // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_opening_single_quote // obf
	 */ // obf
	public function test_opening_single_quote( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_opening_single_quote() { // obf
		return array( // obf
			array( // obf
				"word 'word word", // obf
				'word &#8216;word word', // obf
			), // obf
			array( // obf
				"word ('word word", // obf
				'word (&#8216;word word', // obf
			), // obf
			array( // obf
				"word ['word word", // obf
				'word [&#8216;word word', // obf
			), // obf
			array( // obf
				"word <'word word",    // Invalid HTML. // obf
				"word <'word word", // obf
			), // obf
			array( // obf
				"word &lt;'word word", // Valid HTML input makes curly quotes. // obf
				'word &lt;&#8216;word word', // obf
			), // obf
			array( // obf
				"word {'word word", // obf
				'word {&#8216;word word', // obf
			), // obf
			array( // obf
				"word \"'word word", // obf
				'word &#8220;&#8216;word word', // Two opening quotes. // obf
			), // obf
			array( // obf
				"'word word", // obf
				'&#8216;word word', // obf
			), // obf
			array( // obf
				"word('word word", // obf
				'word(&#8216;word word', // obf
			), // obf
			array( // obf
				"word['word word", // obf
				'word[&#8216;word word', // obf
			), // obf
			array( // obf
				"word<'word word", // obf
				"word<'word word", // obf
			), // obf
			array( // obf
				"word&lt;'word word", // obf
				'word&lt;&#8216;word word', // obf
			), // obf
			array( // obf
				"word{'word word", // obf
				'word{&#8216;word word', // obf
			), // obf
			array( // obf
				"word\"'word word", // obf
				'word&#8221;&#8216;word word', // Closing quote, then opening quote. // obf
			), // obf
			array( // obf
				"word ' word word", // obf
				'word &#8216; word word', // obf
			), // obf
			array( // obf
				"word (' word word", // obf
				'word (&#8216; word word', // obf
			), // obf
			array( // obf
				"word [' word word", // obf
				'word [&#8216; word word', // obf
			), // obf
			array( // obf
				"word <' word word", // obf
				"word <' word word", // obf
			), // obf
			array( // obf
				"word &lt;' word word", // obf
				'word &lt;&#8216; word word', // obf
			), // obf
			array( // obf
				"word {' word word", // obf
				'word {&#8216; word word', // obf
			), // obf
			array( // obf
				"word \"' word word", // obf
				'word &#8220;&#8216; word word', // Two opening quotes. // obf
			), // obf
			array( // obf
				"' word word", // obf
				'&#8216; word word', // obf
			), // obf
			array( // obf
				"word(' word word", // obf
				'word(&#8216; word word', // obf
			), // obf
			array( // obf
				"word[' word word", // obf
				'word[&#8216; word word', // obf
			), // obf
			array( // obf
				"word<' word word", // obf
				"word<' word word", // obf
			), // obf
			array( // obf
				"word&lt;' word word", // obf
				'word&lt;&#8216; word word', // obf
			), // obf
			array( // obf
				"word{' word word", // obf
				'word{&#8216; word word', // obf
			), // obf
			array( // obf
				"word\"' word word", // obf
				'word&#8221;&#8216; word word', // Closing quote, then opening quote. // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Double quote after a number becomes &#8243; (double_prime) // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_double_prime // obf
	 */ // obf
	public function test_double_prime( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_double_prime() { // obf
		return array( // obf
			array( // obf
				'word 99" word', // obf
				'word 99&#8243; word', // obf
			), // obf
			array( // obf
				'word 99"word', // obf
				'word 99&#8243;word', // obf
			), // obf
			array( // obf
				'word99" word', // obf
				'word99&#8243; word', // obf
			), // obf
			array( // obf
				'word99"word', // obf
				'word99&#8243;word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Apostrophe after a number becomes &#8242; (prime) // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_single_prime // obf
	 */ // obf
	public function test_single_prime( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_single_prime() { // obf
		return array( // obf
			array( // obf
				"word 99' word", // obf
				'word 99&#8242; word', // obf
			), // obf
			array( // obf
				"word 99'word", // Not a prime anymore. Apostrophes get priority. // obf
				'word 99&#8217;word', // obf
			), // obf
			array( // obf
				"word99' word", // obf
				'word99&#8242; word', // obf
			), // obf
			array( // obf
				"word99'word",  // Not a prime anymore. // obf
				'word99&#8217;word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Apostrophe "in a word" becomes &#8217; (apos) // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_contractions // obf
	 */ // obf
	public function test_contractions( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_contractions() { // obf
		return array( // obf
			array( // obf
				"word word's word", // obf
				'word word&#8217;s word', // obf
			), // obf
			array( // obf
				"word'[ word", // Apostrophes are never followed by opening punctuation. // obf
				"word'[ word", // obf
			), // obf
			array( // obf
				"word'( word", // obf
				"word'( word", // obf
			), // obf
			array( // obf
				"word'{ word", // obf
				"word'{ word", // obf
			), // obf
			array( // obf
				"word'&lt; word", // obf
				"word'&lt; word", // obf
			), // obf
			array( // obf
				"word'< word", // Invalid HTML input does trigger the apos pattern. // obf
				'word&#8217;< word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Double quote after a space or ([-{< becomes &#8220; (opening_quote) if not followed by spaces // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_opening_quote // obf
	 */ // obf
	public function test_opening_quote( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_opening_quote() { // obf
		return array( // obf
			array( // obf
				'word "word word', // obf
				'word &#8220;word word', // obf
			), // obf
			array( // obf
				'word ("word word', // obf
				'word (&#8220;word word', // obf
			), // obf
			array( // obf
				'word ["word word', // obf
				'word [&#8220;word word', // obf
			), // obf
			array( // obf
				'word <"word word', // Invalid HTML. // obf
				'word <"word word', // obf
			), // obf
			array( // obf
				'word &lt;"word word', // obf
				'word &lt;&#8220;word word', // obf
			), // obf
			array( // obf
				'word {"word word', // obf
				'word {&#8220;word word', // obf
			), // obf
			array( // obf
				'word -"word word', // obf
				'word -&#8220;word word', // obf
			), // obf
			array( // obf
				'word-"word word', // obf
				'word-&#8220;word word', // obf
			), // obf
			array( // obf
				'"word word', // obf
				'&#8220;word word', // obf
			), // obf
			array( // obf
				'word("word word', // obf
				'word(&#8220;word word', // obf
			), // obf
			array( // obf
				'word["word word', // obf
				'word[&#8220;word word', // obf
			), // obf
			array( // obf
				'word<"word word', // obf
				'word<"word word', // obf
			), // obf
			array( // obf
				'word&lt;"word word', // obf
				'word&lt;&#8220;word word', // obf
			), // obf
			array( // obf
				'word{"word word', // obf
				'word{&#8220;word word', // obf
			), // obf
			array( // obf
				'word "99 word', // obf
				'word &#8220;99 word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Double quote becomes &#8221; (closing_quote) unless it is already converted to double_prime or opening_quote. // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_closing_quote // obf
	 */ // obf
	public function test_closing_quote( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_closing_quote() { // obf
		return array( // obf
			array( // obf
				'word word" word', // obf
				'word word&#8221; word', // obf
			), // obf
			array( // obf
				'word word") word', // obf
				'word word&#8221;) word', // obf
			), // obf
			array( // obf
				'word word"] word', // obf
				'word word&#8221;] word', // obf
			), // obf
			array( // obf
				'word word"} word', // obf
				'word word&#8221;} word', // obf
			), // obf
			array( // obf
				'word word"> word',    // Invalid HTML input? // obf
				'word word&#8221;> word', // obf
			), // obf
			array( // obf
				'word word"&gt; word', // Valid HTML should work. // obf
				'word word&#8221;&gt; word', // obf
			), // obf
			array( // obf
				'word word"', // obf
				'word word&#8221;', // obf
			), // obf
			array( // obf
				'word word"word', // obf
				'word word&#8221;word', // obf
			), // obf
			array( // obf
				'word"word"word', // obf
				'word&#8221;word&#8221;word', // obf
			), // obf
			array( // obf
				'test sentence".', // obf
				'test sentence&#8221;.', // obf
			), // obf
			array( // obf
				'test sentence",', // obf
				'test sentence&#8221;,', // obf
			), // obf
			array( // obf
				'test sentence":', // obf
				'test sentence&#8221;:', // obf
			), // obf
			array( // obf
				'test sentence";', // obf
				'test sentence&#8221;;', // obf
			), // obf
			array( // obf
				'test sentence"!', // obf
				'test sentence&#8221;!', // obf
			), // obf
			array( // obf
				'test sentence"?', // obf
				'test sentence&#8221;?', // obf
			), // obf
			array( // obf
				'test sentence."', // obf
				'test sentence.&#8221;', // obf
			), // obf
			array( // obf
				'test sentence". word', // obf
				'test sentence&#8221;. word', // obf
			), // obf
			array( // obf
				'test sentence." word', // obf
				'test sentence.&#8221; word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that single quotes followed by a space or .,-)}]> become &#8217; (closing_single_quote) // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_closing_single_quote // obf
	 */ // obf
	public function test_closing_single_quote( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_closing_single_quote() { // obf
		return array( // obf
			array( // obf
				"word word' word", // obf
				'word word&#8217; word', // obf
			), // obf
			array( // obf
				"word word'. word", // obf
				'word word&#8217;. word', // obf
			), // obf
			array( // obf
				"word word'.word", // obf
				'word word&#8217;.word', // obf
			), // obf
			array( // obf
				"word word', she said", // obf
				'word word&#8217;, she said', // obf
			), // obf
			array( // obf
				"word word': word", // obf
				'word word&#8217;: word', // obf
			), // obf
			array( // obf
				"word word'; word", // obf
				'word word&#8217;; word', // obf
			), // obf
			array( // obf
				"word word'! word", // obf
				'word word&#8217;! word', // obf
			), // obf
			array( // obf
				"word word'? word", // obf
				'word word&#8217;? word', // obf
			), // obf
			array( // obf
				"word word'- word", // obf
				'word word&#8217;- word', // obf
			), // obf
			array( // obf
				"word word') word", // obf
				'word word&#8217;) word', // obf
			), // obf
			array( // obf
				"word word'} word", // obf
				'word word&#8217;} word', // obf
			), // obf
			array( // obf
				"word word'] word", // obf
				'word word&#8217;] word', // obf
			), // obf
			array( // obf
				"word word'&gt; word", // obf
				'word word&#8217;&gt; word', // obf
			), // obf
			array( // obf
				"word word'", // obf
				'word word&#8217;', // obf
			), // obf
			array( // obf
				"test sentence'.", // obf
				'test sentence&#8217;.', // obf
			), // obf
			array( // obf
				"test sentence.'", // obf
				'test sentence.&#8217;', // obf
			), // obf
			array( // obf
				"test sentence'. word", // obf
				'test sentence&#8217;. word', // obf
			), // obf
			array( // obf
				"test sentence.' word", // obf
				'test sentence.&#8217; word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests multiplication. // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @ticket 30445 // obf
	 * @dataProvider data_multiplication // obf
	 */ // obf
	public function test_multiplication( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_multiplication() { // obf
		return array( // obf
			array( // obf
				'9x9', // obf
				'9&#215;9', // obf
			), // obf
			array( // obf
				'12x34', // obf
				'12&#215;34', // obf
			), // obf
			array( // obf
				'-123x1=-123', // obf
				'-123&#215;1=-123', // obf
			), // obf
			// @ticket 30445 // obf
			array( // obf
				'-123x-1', // obf
				'-123x-1', // obf
			), // obf
			array( // obf
				'0.675x1=0.675', // obf
				'0.675&#215;1=0.675', // obf
			), // obf
			array( // obf
				'9 x 9', // obf
				'9 x 9', // obf
			), // obf
			array( // obf
				'0x70', // obf
				'0x70', // obf
			), // obf
			array( // obf
				'3x2x1x0', // obf
				'3x2x1x0', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test ampersands. & always becomes &#038; unless it is followed by # or ; // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_ampersand // obf
	 */ // obf
	public function test_ampersand( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_ampersand() { // obf
		return array( // obf
			array( // obf
				'word & word', // obf
				'word &#038; word', // obf
			), // obf
			array( // obf
				'word&word', // obf
				'word&#038;word', // obf
			), // obf
			array( // obf
				'word &nbsp; word', // obf
				'word &nbsp; word', // obf
			), // obf
			array( // obf
				'word &#038; word', // obf
				'word &#038; word', // obf
			), // obf
			array( // obf
				'word &#xabc; word', // obf
				'word &#xabc; word', // obf
			), // obf
			array( // obf
				'word &#X394; word', // obf
				'word &#X394; word', // obf
			), // obf
			array( // obf
				'word &# word', // obf
				'word &#038;# word', // obf
			), // obf
			array( // obf
				'word &44; word', // obf
				'word &44; word', // obf
			), // obf
			array( // obf
				'word &&amp; word', // obf
				'word &#038;&amp; word', // obf
			), // obf
			array( // obf
				'word &!amp; word', // obf
				'word &#038;!amp; word', // obf
			), // obf
			array( // obf
				'word &#', // obf
				'word &#038;#', // obf
			), // obf
			array( // obf
				'word &', // obf
				'word &#038;', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test "cockney" phrases, which begin with an apostrophe instead of an opening single quote. // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_cockney // obf
	 */ // obf
	public function test_cockney( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_cockney() { // obf
		return array( // obf
			array( // obf
				"word 'tain't word", // obf
				'word &#8217;tain&#8217;t word', // obf
			), // obf
			array( // obf
				"word 'twere word", // obf
				'word &#8217;twere word', // obf
			), // obf
			array( // obf
				"word 'twas word", // obf
				'word &#8217;twas word', // obf
			), // obf
			array( // obf
				"word 'tis word", // obf
				'word &#8217;tis word', // obf
			), // obf
			array( // obf
				"word 'twill word", // obf
				'word &#8217;twill word', // obf
			), // obf
			array( // obf
				"word 'til word", // obf
				'word &#8217;til word', // obf
			), // obf
			array( // obf
				"word 'bout word", // obf
				'word &#8217;bout word', // obf
			), // obf
			array( // obf
				"word 'nuff word", // obf
				'word &#8217;nuff word', // obf
			), // obf
			array( // obf
				"word 'round word", // obf
				'word &#8217;round word', // obf
			), // obf
			array( // obf
				"word 'cause word", // obf
				'word &#8217;cause word', // obf
			), // obf
			array( // obf
				"word 'em word", // obf
				'word &#8217;em word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test smart dashes. // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_smart_dashes // obf
	 */ // obf
	public function test_smart_dashes( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_smart_dashes() { // obf
		return array( // obf
			array( // obf
				'word --- word', // obf
				'word &#8212; word', // obf
			), // obf
			array( // obf
				'word---word', // obf
				'word&#8212;word', // obf
			), // obf
			array( // obf
				'word -- word', // obf
				'word &#8212; word', // obf
			), // obf
			array( // obf
				'word--word', // obf
				'word&#8211;word', // obf
			), // obf
			array( // obf
				'word - word', // obf
				'word &#8211; word', // obf
			), // obf
			array( // obf
				'word-word', // obf
				'word-word', // obf
			), // obf
			array( // obf
				'word xn&#8211; word', // obf
				'word xn&#8211; word', // obf
			), // obf
			array( // obf
				'wordxn&#8211;word', // obf
				'wordxn&#8211;word', // obf
			), // obf
			array( // obf
				'wordxn--word', // obf
				'wordxn--word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test miscellaneous static replacements. // obf
	 * // obf
	 * Checks all baseline patterns. If anything ever changes in wptexturize(), these tests may fail. // obf
	 * // obf
	 * @ticket 22692 // obf
	 * @dataProvider data_misc_static_replacements // obf
	 */ // obf
	public function test_misc_static_replacements( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_misc_static_replacements() { // obf
		return array( // obf
			array( // obf
				'word ... word', // obf
				'word &#8230; word', // obf
			), // obf
			array( // obf
				'word...word', // obf
				'word&#8230;word', // obf
			), // obf
			array( // obf
				'word `` word', // obf
				'word &#8220; word', // obf
			), // obf
			array( // obf
				'word``word', // obf
				'word&#8220;word', // obf
			), // obf
			array( // obf
				"word '' word", // obf
				'word &#8221; word', // obf
			), // obf
			array( // obf
				"word''word", // obf
				'word&#8221;word', // obf
			), // obf
			array( // obf
				'word (tm) word', // obf
				'word &#8482; word', // obf
			), // obf
			array( // obf
				'word (tm)word', // obf
				'word &#8482;word', // obf
			), // obf
			array( // obf
				'word(tm) word', // obf
				'word(tm) word', // obf
			), // obf
			array( // obf
				'word(tm)word', // obf
				'word(tm)word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Numbers inside of matching quotes get curly quotes instead of apostrophes and primes. // obf
	 * // obf
	 * @ticket 8775 // obf
	 * @dataProvider data_quoted_numbers // obf
	 */ // obf
	public function test_quoted_numbers( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_quoted_numbers() { // obf
		return array( // obf
			array( // obf
				'word "42.00" word', // obf
				'word &#8220;42.00&#8221; word', // obf
			), // obf
			array( // obf
				'word "42.00"word', // obf
				'word &#8220;42.00&#8221;word', // obf
			), // obf
			array( // obf
				"word '42.00' word", // obf
				'word &#8216;42.00&#8217; word', // obf
			), // obf
			array( // obf
				"word '42.00'word", // obf
				'word &#8216;42.00&#8217;word', // obf
			), // obf
			array( // obf
				'word "42" word', // obf
				'word &#8220;42&#8221; word', // obf
			), // obf
			array( // obf
				'word "42,00" word', // obf
				'word &#8220;42,00&#8221; word', // obf
			), // obf
			array( // obf
				'word "4,242.00" word', // obf
				'word &#8220;4,242.00&#8221; word', // obf
			), // obf
			array( // obf
				"word '99's word", // obf
				'word &#8217;99&#8217;s word', // obf
			), // obf
			array( // obf
				"word '99'samsonite", // obf
				'word &#8217;99&#8217;samsonite', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Quotations should be allowed to have dashes around them. // obf
	 * // obf
	 * @ticket 20342 // obf
	 * @dataProvider data_quotes_and_dashes // obf
	 */ // obf
	public function test_quotes_and_dashes( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_quotes_and_dashes() { // obf
		return array( // obf
			array( // obf
				'word---"quote"', // obf
				'word&#8212;&#8220;quote&#8221;', // obf
			), // obf
			array( // obf
				'word--"quote"', // obf
				'word&#8211;&#8220;quote&#8221;', // obf
			), // obf
			array( // obf
				'word-"quote"', // obf
				'word-&#8220;quote&#8221;', // obf
			), // obf
			array( // obf
				"word---'quote'", // obf
				'word&#8212;&#8216;quote&#8217;', // obf
			), // obf
			array( // obf
				"word--'quote'", // obf
				'word&#8211;&#8216;quote&#8217;', // obf
			), // obf
			array( // obf
				"word-'quote'", // obf
				'word-&#8216;quote&#8217;', // obf
			), // obf
			array( // obf
				'"quote"---word', // obf
				'&#8220;quote&#8221;&#8212;word', // obf
			), // obf
			array( // obf
				'"quote"--word', // obf
				'&#8220;quote&#8221;&#8211;word', // obf
			), // obf
			array( // obf
				'"quote"-word', // obf
				'&#8220;quote&#8221;-word', // obf
			), // obf
			array( // obf
				"'quote'---word", // obf
				'&#8216;quote&#8217;&#8212;word', // obf
			), // obf
			array( // obf
				"'quote'--word", // obf
				'&#8216;quote&#8217;&#8211;word', // obf
			), // obf
			array( // obf
				"'quote'-word", // obf
				'&#8216;quote&#8217;-word', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test HTML and shortcode avoidance. // obf
	 * // obf
	 * @ticket 12690 // obf
	 * @dataProvider data_tag_avoidance // obf
	 */ // obf
	public function test_tag_avoidance( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_tag_avoidance() { // obf
		return array( // obf
			array( // obf
				'[ ... ]', // obf
				'[ &#8230; ]', // obf
			), // obf
			array( // obf
				'[ is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
				'[ is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
			), // obf
			array( // obf
				'[is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
				'[is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
			), // obf
			array( // obf
				'[caption - is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
				'[caption &#8211; is it wise to <a title="allow user content ] here? hmm"> maybe </a> ]', // obf
			), // obf
			array( // obf
				'[ photos by <a href="http://example.com/?a[]=1&a[]=2"> this guy & that guy </a> ]', // obf
				'[ photos by <a href="http://example.com/?a[]=1&#038;a[]=2"> this guy &#038; that guy </a> ]', // obf
			), // obf
			array( // obf
				'[photos by <a href="http://example.com/?a[]=1&a[]=2"> this guy & that guy </a>]', // obf
				'[photos by <a href="http://example.com/?a[]=1&#038;a[]=2"> this guy &#038; that guy </a>]', // obf
			), // obf
			array( // obf
				'& <script>&&</script>', // obf
				'&#038; <script>&&</script>', // obf
			), // obf
			array( // obf
				'[gallery ...]', // obf
				'[gallery ...]', // obf
			), // obf
			array( // obf
				'[[gallery ...]', // This tag is still valid. // obf
				'[[gallery ...]', // obf
			), // obf
			array( // obf
				'[gallery ...]]', // This tag is also valid. // obf
				'[gallery ...]]', // obf
			), // obf
			array( // obf
				'[/gallery ...]', // This would actually be ignored by the shortcode system. // obf
				'[/gallery ...]', // The decision to not texturize it is intentional, if not correct. // obf
			), // obf
			array( // obf
				'[[gallery]]...[[/gallery]]', // Shortcode parsing will ignore the inner ']...[' part and treat this as a single escaped shortcode. // obf
				'[[gallery]]&#8230;[[/gallery]]', // obf
			), // obf
			array( // obf
				'[[[gallery]]]...[[[/gallery]]]', // Again, shortcode parsing matches, but only the '[[gallery]' and '[/gallery]]' parts. // obf
				'[[[gallery]]]&#8230;[[[/gallery]]]', // obf
			), // obf
			array( // obf
				'[gallery ...', // obf
				'[gallery &#8230;', // obf
			), // obf
			array( // obf
				'[gallery <br ... /> ...]', // This tag is still valid. Shortcode 'attributes' are not considered // obf
				'[gallery <br ... /> ...]', // in the initial parsing of shortcodes, and HTML is allowed. // obf
			), // obf
			array( // obf
				'<br [gallery ...] ... />', // obf
				'<br [gallery ...] ... />', // obf
			), // obf
			array( // obf
				'<br [gallery ...] ... /', // obf
				'<br [gallery ...] ... /', // obf
			), // obf
			array( // obf
				'<br ... />', // obf
				'<br ... />', // obf
			), // obf
			array( // obf
				'<br ... />...<br ... />', // obf
				'<br ... />&#8230;<br ... />', // obf
			), // obf
			array( // obf
				'[gallery ...]...[gallery ...]', // obf
				'[gallery ...]&#8230;[gallery ...]', // obf
			), // obf
			array( // obf
				'[[gallery ...]]', // obf
				'[[gallery ...]]', // obf
			), // obf
			array( // obf
				'[[gallery ...]', // obf
				'[[gallery ...]', // obf
			), // obf
			array( // obf
				'[gallery ...]]', // obf
				'[gallery ...]]', // obf
			), // obf
			array( // obf
				'[/gallery ...]]', // obf
				'[/gallery ...]]', // obf
			), // obf
			array( // obf
				'[[gallery <br ... /> ...]]', // This gets parsed as an escaped shortcode with embedded HTML. Brains may explode. // obf
				'[[gallery <br ... /> ...]]', // obf
			), // obf
			array( // obf
				'<br [[gallery ...]] ... />', // obf
				'<br [[gallery ...]] ... />', // obf
			), // obf
			array( // obf
				'<br [[gallery ...]] ... /', // obf
				'<br [[gallery ...]] ... /', // obf
			), // obf
			array( // obf
				'[[gallery ...]]...[[gallery ...]]', // obf
				'[[gallery ...]]&#8230;[[gallery ...]]', // obf
			), // obf
			array( // obf
				'[[gallery ...]...[/gallery]]', // obf
				'[[gallery ...]&#8230;[/gallery]]', // obf
			), // obf
			array( // obf
				'<!-- ... -->', // obf
				'<!-- ... -->', // obf
			), // obf
			array( // obf
				'<!--...-->', // obf
				'<!--...-->', // obf
			), // obf
			array( // obf
				'<!-- ... -- > ...', // obf
				'<!-- ... -- > ...', // obf
			), // obf
			array( // obf
				'<!-- ...', // An unclosed comment is still a comment. // obf
				'<!-- ...', // obf
			), // obf
			array( // obf
				'a<!-->b', // Browsers seem to allow this. // obf
				'a<!-->b', // obf
			), // obf
			array( // obf
				'a<!--->b', // obf
				'a<!--->b', // obf
			), // obf
			array( // obf
				'a<!---->b', // obf
				'a<!---->b', // obf
			), // obf
			array( // obf
				'a<!----->b', // obf
				'a<!----->b', // obf
			), // obf
			array( // obf
				'a<!-- c --->b', // obf
				'a<!-- c --->b', // obf
			), // obf
			array( // obf
				'a<!-- c -- d -->b', // obf
				'a<!-- c -- d -->b', // obf
			), // obf
			array( // obf
				'a<!-- <!-- c --> -->b<!-- close -->', // obf
				'a<!-- <!-- c --> &#8211;>b<!-- close -->', // obf
			), // obf
			array( // obf
				'<!-- <br /> [gallery] ... -->', // obf
				'<!-- <br /> [gallery] ... -->', // obf
			), // obf
			array( // obf
				'...<!-- ... -->...', // obf
				'&#8230;<!-- ... -->&#8230;', // obf
			), // obf
			array( // obf
				'[gallery ...]...<!-- ... -->...<br ... />', // obf
				'[gallery ...]&#8230;<!-- ... -->&#8230;<br ... />', // obf
			), // obf
			array( // obf
				'<ul><li>Hello.</li><!--<li>Goodbye.</li>--></ul>', // obf
				'<ul><li>Hello.</li><!--<li>Goodbye.</li>--></ul>', // obf
			), // obf
			array( // obf
				'word <img src="http://example.com/wp-content/uploads/2014/06/image-300x216.gif" /> word', // Ensure we are not corrupting image URLs. // obf
				'word <img src="http://example.com/wp-content/uploads/2014/06/image-300x216.gif" /> word', // obf
			), // obf
			array( // obf
				'[ do texturize "[quote]" here ]', // obf
				'[ do texturize &#8220;[quote]&#8221; here ]', // obf
			), // obf
			array( // obf
				'[ regex catches this <a href="[quote]">here</a> ]', // obf
				'[ regex catches this <a href="[quote]">here</a> ]', // obf
			), // obf
			array( // obf
				'[ but also catches the <b>styled "[quote]" here</b> ]', // obf
				'[ but also catches the <b>styled &#8220;[quote]&#8221; here</b> ]', // obf
			), // obf
			array( // obf
				'[Let\'s get crazy<input>[caption code="<a href=\'?a[]=100\'>hello</a>"]</input>world]', // [caption] shortcode is invalid here because it contains '[]' chars. // obf
				'[Let&#8217;s get crazy<input>[caption code=&#8221;<a href=\'?a[]=100\'>hello</a>&#8220;]</input>world]', // obf
			), // obf
			array( // obf
				'<> ... <>', // obf
				'<> &#8230; <>', // obf
			), // obf
			array( // obf
				'<> ... <> ... >', // obf
				'<> &#8230; <> &#8230; >', // obf
			), // obf
			array( // obf
				'<> ... < ... > ... <>', // obf
				'<> &#8230; < ... > &#8230; <>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Year abbreviations consist of exactly two digits. // obf
	 * // obf
	 * @ticket 26850 // obf
	 * @dataProvider data_year_abbr // obf
	 */ // obf
	public function test_year_abbr( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_year_abbr() { // obf
		return array( // obf
			array( // obf
				"word '99 word", // obf
				'word &#8217;99 word', // obf
			), // obf
			array( // obf
				"word '99. word", // obf
				'word &#8217;99. word', // obf
			), // obf
			array( // obf
				"word '99, word", // obf
				'word &#8217;99, word', // obf
			), // obf
			array( // obf
				"word '99; word", // obf
				'word &#8217;99; word', // obf
			), // obf
			array( // obf
				"word '99' word", // For this pattern, prime doesn't make sense. Should get apos and a closing quote. // obf
				'word &#8217;99&#8217; word', // obf
			), // obf
			array( // obf
				"word '99'. word", // obf
				'word &#8217;99&#8217;. word', // obf
			), // obf
			array( // obf
				"word '99', word", // obf
				'word &#8217;99&#8217;, word', // obf
			), // obf
			array( // obf
				"word '99.' word", // obf
				'word &#8217;99.&#8217; word', // obf
			), // obf
			array( // obf
				"word '99", // obf
				'word &#8217;99', // obf
			), // obf
			array( // obf
				"'99 word", // obf
				'&#8217;99 word', // obf
			), // obf
			array( // obf
				"word '999 word", // Does not match the apos pattern, should be opening quote. // obf
				'word &#8216;999 word', // obf
			), // obf
			array( // obf
				"word '99% word", // obf
				'word &#8216;99% word', // obf
			), // obf
			array( // obf
				"word '9 word", // obf
				'word &#8216;9 word', // obf
			), // obf
			array( // obf
				"word '99.9 word", // obf
				'word &#8216;99.9 word', // obf
			), // obf
			array( // obf
				"word '999", // obf
				'word &#8216;999', // obf
			), // obf
			array( // obf
				"word '9", // obf
				'word &#8216;9', // obf
			), // obf
			array( // obf
				"in '4 years, 3 months,' Obama cut the deficit", // obf
				'in &#8216;4 years, 3 months,&#8217; Obama cut the deficit', // obf
			), // obf
			array( // obf
				"testing's '4' through 'quotes'", // obf
				'testing&#8217;s &#8216;4&#8217; through &#8216;quotes&#8217;', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Make sure translation actually works. // obf
	 * // obf
	 * Also make sure apostrophes and closing quotes aren't being confused by default. // obf
	 * // obf
	 * @ticket 27426 // obf
	 * @dataProvider data_translate // obf
	 */ // obf
	public function test_translate( $v_njqdh, $v_bqxdc ) { // obf
		add_filter( 'gettext_with_context', array( $v_yznfz, 'filter_translate' ), 10, 4 ); // obf

		$v_mvhgv = wptexturize( $v_njqdh, true ); // obf

		remove_filter( 'gettext_with_context', array( $v_yznfz, 'filter_translate' ), 10, 4 ); // obf
		wptexturize( 'reset', true ); // obf

		$v_yznfz->assertSame( $v_bqxdc, $v_mvhgv ); // obf
	} // obf

	public function filter_translate( $v_wddfy, $v_qljyy, $v_sdnqm, $v_imnaz ) { // obf
		switch ( $v_qljyy ) { // obf
			case '&#8211;': // obf
				return '!endash!'; // obf
			case '&#8212;': // obf
				return '!emdash!'; // obf
			case '&#8216;': // obf
				return '!openq1!'; // obf
			case '&#8217;': // obf
				if ( 'apostrophe' === $v_sdnqm ) { // obf
					return '!apos!'; // obf
				} else { // obf
					return '!closeq1!'; // obf
				} // obf
			case '&#8220;': // obf
				return '!openq2!'; // obf
			case '&#8221;': // obf
				return '!closeq2!'; // obf
			case '&#8242;': // obf
				return '!prime1!'; // obf
			case '&#8243;': // obf
				return '!prime2!'; // obf
			case '&#8217;tain&#8217;t,&#8217;twere,&#8217;twas,&#8217;tis,&#8217;twill,&#8217;til,&#8217;bout,&#8217;nuff,&#8217;round,&#8217;cause,&#8217;em': // obf
				return '!apos!tain!apos!t,!apos!twere,!apos!twas,!apos!tis,!apos!twill,!apos!til,!apos!bout,!apos!nuff,!apos!round,!apos!cause,!apos!em'; // obf
			default: // obf
				return $v_wddfy; // obf
		} // obf
	} // obf

	public function data_translate() { // obf
		return array( // obf
			array( // obf
				"word '99 word", // obf
				'word !apos!99 word', // obf
			), // obf
			array( // obf
				"word'99 word", // obf
				'word!apos!99 word', // obf
			), // obf
			array( // obf
				"word 'test sentence' word", // obf
				'word !openq1!test sentence!closeq1! word', // obf
			), // obf
			array( // obf
				"'test sentence'", // obf
				'!openq1!test sentence!closeq1!', // obf
			), // obf
			array( // obf
				'word "test sentence" word', // obf
				'word !openq2!test sentence!closeq2! word', // obf
			), // obf
			array( // obf
				'"test sentence"', // obf
				'!openq2!test sentence!closeq2!', // obf
			), // obf
			array( // obf
				"word 'word word", // obf
				'word !openq1!word word', // obf
			), // obf
			array( // obf
				"word ('word word", // obf
				'word (!openq1!word word', // obf
			), // obf
			array( // obf
				"word ['word word", // obf
				'word [!openq1!word word', // obf
			), // obf
			array( // obf
				'word 99" word', // obf
				'word 99!prime2! word', // obf
			), // obf
			array( // obf
				'word 99"word', // obf
				'word 99!prime2!word', // obf
			), // obf
			array( // obf
				'word99" word', // obf
				'word99!prime2! word', // obf
			), // obf
			array( // obf
				'word99"word', // obf
				'word99!prime2!word', // obf
			), // obf
			array( // obf
				"word 99' word", // obf
				'word 99!prime1! word', // obf
			), // obf
			array( // obf
				"word99' word", // obf
				'word99!prime1! word', // obf
			), // obf
			array( // obf
				"word word's word", // obf
				'word word!apos!s word', // obf
			), // obf
			array( // obf
				"word word'. word", // obf
				'word word!closeq1!. word', // obf
			), // obf
			array( // obf
				"word ]'. word", // obf
				'word ]!closeq1!. word', // obf
			), // obf
			array( // obf
				'word "word word', // obf
				'word !openq2!word word', // obf
			), // obf
			array( // obf
				'word ("word word', // obf
				'word (!openq2!word word', // obf
			), // obf
			array( // obf
				'word ["word word', // obf
				'word [!openq2!word word', // obf
			), // obf
			array( // obf
				'word word" word', // obf
				'word word!closeq2! word', // obf
			), // obf
			array( // obf
				'word word") word', // obf
				'word word!closeq2!) word', // obf
			), // obf
			array( // obf
				'word word"] word', // obf
				'word word!closeq2!] word', // obf
			), // obf
			array( // obf
				'word word"', // obf
				'word word!closeq2!', // obf
			), // obf
			array( // obf
				'word word"word', // obf
				'word word!closeq2!word', // obf
			), // obf
			array( // obf
				'test sentence".', // obf
				'test sentence!closeq2!.', // obf
			), // obf
			array( // obf
				'test sentence."', // obf
				'test sentence.!closeq2!', // obf
			), // obf
			array( // obf
				'test sentence." word', // obf
				'test sentence.!closeq2! word', // obf
			), // obf
			array( // obf
				"word word' word", // obf
				'word word!closeq1! word', // obf
			), // obf
			array( // obf
				"word word'. word", // obf
				'word word!closeq1!. word', // obf
			), // obf
			array( // obf
				"word word'.word", // obf
				'word word!closeq1!.word', // obf
			), // obf
			array( // obf
				"word word'", // obf
				'word word!closeq1!', // obf
			), // obf
			array( // obf
				"test sentence'.", // obf
				'test sentence!closeq1!.', // obf
			), // obf
			array( // obf
				"test sentence.'", // obf
				'test sentence.!closeq1!', // obf
			), // obf
			array( // obf
				"test sentence'. word", // obf
				'test sentence!closeq1!. word', // obf
			), // obf
			array( // obf
				"test sentence.' word", // obf
				'test sentence.!closeq1! word', // obf
			), // obf
			array( // obf
				"word 'tain't word", // obf
				'word !apos!tain!apos!t word', // obf
			), // obf
			array( // obf
				"word 'twere word", // obf
				'word !apos!twere word', // obf
			), // obf
			array( // obf
				'word "42.00" word', // obf
				'word !openq2!42.00!closeq2! word', // obf
			), // obf
			array( // obf
				"word '42.00' word", // obf
				'word !openq1!42.00!closeq1! word', // obf
			), // obf
			array( // obf
				"word word'. word", // obf
				'word word!closeq1!. word', // obf
			), // obf
			array( // obf
				"word word'.word", // obf
				'word word!closeq1!.word', // obf
			), // obf
			array( // obf
				"word word', she said", // obf
				'word word!closeq1!, she said', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Extra confidence checks for _wptexturize_pushpop_element() // obf
	 * // obf
	 * @ticket 28483 // obf
	 * @dataProvider data_element_stack // obf
	 */ // obf
	public function test_element_stack( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_element_stack() { // obf
		return array( // obf
			array( // obf
				'<span>hello</code>---</span>', // obf
				'<span>hello</code>&#8212;</span>', // obf
			), // obf
			array( // obf
				'</code>hello<span>---</span>', // obf
				'</code>hello<span>&#8212;</span>', // obf
			), // obf
			array( // obf
				'<code>hello</code>---</span>', // obf
				'<code>hello</code>&#8212;</span>', // obf
			), // obf
			array( // obf
				'<span>hello</span>---<code>', // obf
				'<span>hello</span>&#8212;<code>', // obf
			), // obf
			array( // obf
				'<span>hello<code>---</span>', // obf
				'<span>hello<code>---</span>', // obf
			), // obf
			array( // obf
				'<code>hello<span>---</span>', // obf
				'<code>hello<span>---</span>', // obf
			), // obf
			array( // obf
				'<code>hello</span>---</span>', // obf
				'<code>hello</span>---</span>', // obf
			), // obf
			array( // obf
				'<span><code>hello</code>---</span>', // obf
				'<span><code>hello</code>&#8212;</span>', // obf
			), // obf
			array( // obf
				'<code>hello</code>world<span>---</span>', // obf
				'<code>hello</code>world<span>&#8212;</span>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test disabling shortcode texturization. // obf
	 * // obf
	 * @ticket 29557 // obf
	 * @dataProvider data_unregistered_shortcodes // obf
	 */ // obf
	public function test_unregistered_shortcodes( $v_njqdh, $v_bqxdc ) { // obf
		add_filter( 'no_texturize_shortcodes', array( $v_yznfz, 'filter_shortcodes' ), 10, 1 ); // obf

		$v_bqxdc = $v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf

		remove_filter( 'no_texturize_shortcodes', array( $v_yznfz, 'filter_shortcodes' ), 10, 1 ); // obf
		return $v_bqxdc; // obf
	} // obf

	public function filter_shortcodes( $v_gcegm ) { // obf
		$v_gcegm[] = 'audio'; // obf
		return $v_gcegm; // obf
	} // obf

	public function data_unregistered_shortcodes() { // obf
		return array( // obf
			array( // obf
				'[a]a--b[audio]---[/audio]a--b[/a]', // obf
				'[a]a&#8211;b[audio]---[/audio]a&#8211;b[/a]', // obf
			), // obf
			array( // obf
				'[code ...]...[/code]',   // '[code]' is not a registered shortcode. // obf
				'[code &#8230;]&#8230;[/code]', // obf
			), // obf
			array( // obf
				'[hello ...]...[/hello]', // '[hello]' is not a registered shortcode. // obf
				'[hello &#8230;]&#8230;[/hello]', // obf
			), // obf
			array( // obf
				'[...]...[/...]',         // These are potentially usable shortcodes. // obf
				'[&#8230;]&#8230;[/&#8230;]', // obf
			), // obf
			array( // obf
				'[gal>ery ...]', // obf
				'[gal>ery &#8230;]', // obf
			), // obf
			array( // obf
				'[randomthing param="test"]', // obf
				'[randomthing param=&#8221;test&#8221;]', // obf
			), // obf
			array( // obf
				'[[audio]...[/audio]...',         // These are potentially usable shortcodes. // obf
				'[[audio]&#8230;[/audio]&#8230;', // Unfortunately, the meaning of [[audio] is ambiguous unless we run the entire shortcode regexp. // obf
			), // obf
			array( // obf
				'[audio]...[/audio]]...', // These are potentially usable shortcodes. // obf
				'[audio]...[/audio]]...', // Unfortunately, the meaning of [/audio]] is ambiguous unless we run the entire shortcode regexp. // obf
			),                            // This test would not pass in 3.9 because the extra brace was always ignored by texturize. // obf
			array( // obf
				'<span>hello[/audio]---</span>', // obf
				'<span>hello[/audio]&#8212;</span>', // obf
			), // obf
			array( // obf
				'[/audio]hello<span>---</span>', // obf
				'[/audio]hello<span>&#8212;</span>', // obf
			), // obf
			array( // obf
				'[audio]hello[/audio]---</span>', // obf
				'[audio]hello[/audio]&#8212;</span>', // obf
			), // obf
			array( // obf
				'<span>hello</span>---[audio]', // obf
				'<span>hello</span>&#8212;[audio]', // obf
			), // obf
			array( // obf
				'<span>hello[audio]---</span>', // obf
				'<span>hello[audio]---</span>', // obf
			), // obf
			array( // obf
				'[audio]hello<span>---</span>', // obf
				'[audio]hello<span>---</span>', // obf
			), // obf
			array( // obf
				'[audio]hello</span>---</span>', // obf
				'[audio]hello</span>---</span>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure primes logic is not too greedy at the end of a quotation. // obf
	 * // obf
	 * @ticket 29256 // obf
	 * @dataProvider data_primes_vs_quotes // obf
	 */ // obf
	public function test_primes_vs_quotes( $v_njqdh, $v_bqxdc ) { // obf
		$v_yznfz->assertSame( $v_bqxdc, wptexturize( $v_njqdh ) ); // obf
	} // obf

	public function data_primes_vs_quotes() { // obf
		return array( // obf
			array( // obf
				"George's porch is 99' long.", // obf
				'George&#8217;s porch is 99&#8242; long.', // obf
			), // obf
			array( // obf
				'The best year "was that time in 2012" when everyone partied, he said.', // obf
				'The best year &#8220;was that time in 2012&#8221; when everyone partied, he said.', // obf
			), // obf
			array( // obf
				"I need 4 x 20' = 80' of trim.", // Works only with a space before the '=' char. // obf
				'I need 4 x 20&#8242; = 80&#8242; of trim.', // obf
			), // obf
			array( // obf
				'"Lorem ipsum dolor sit amet 1234"', // obf
				'&#8220;Lorem ipsum dolor sit amet 1234&#8221;', // obf
			), // obf
			array( // obf
				"'Etiam eu egestas dui 1234'", // obf
				'&#8216;Etiam eu egestas dui 1234&#8217;', // obf
			), // obf
			array( // obf
				'according to our source, "33% of all students scored less than 50" on the test.', // obf
				'according to our source, &#8220;33% of all students scored less than 50&#8221; on the test.', // obf
			), // obf
			array( // obf
				"The doctor said, 'An average height is between 5' and 6' in study group 7'.  He then produced a 6' chart of averages.  A man of 7', incredibly, is very possible.", // obf
				'The doctor said, &#8216;An average height is between 5&#8242; and 6&#8242; in study group 7&#8217;.  He then produced a 6&#8242; chart of averages.  A man of 7&#8242;, incredibly, is very possible.', // obf
			), // obf
			array( // obf
				'Pirates have voted on "The Expendables 3" with their clicks -- and it turns out the Sylvester Stallone-starrer hasn\'t been astoundingly popular among digital thieves, relatively speaking. // obf

As of Sunday, 5.12 million people worldwide had pirated "Expendables 3" since a high-quality copy hit torrent-sharing sites July 23, according to piracy-tracking firm Excipio. // obf

That likely contributed to the action movie\'s dismal box-office debut this weekend. But over the same July 23-Aug. 18 time period, the movie was No. 4 in downloads, after "Captain America: The Winter Soldier" (7.31 million), "Divergent" (6.29 million) and "The Amazing Spider-Man 2" (5.88 million). Moreover, that\'s despite "Expendables 3" becoming available more than three weeks prior to the film\'s U.S. theatrical debut. // obf

String with a number followed by a single quote \'Expendables 3\' vestibulum in arcu mi.', // obf

				'Pirates have voted on &#8220;The Expendables 3&#8221; with their clicks &#8212; and it turns out the Sylvester Stallone-starrer hasn&#8217;t been astoundingly popular among digital thieves, relatively speaking. // obf

As of Sunday, 5.12 million people worldwide had pirated &#8220;Expendables 3&#8221; since a high-quality copy hit torrent-sharing sites July 23, according to piracy-tracking firm Excipio. // obf

That likely contributed to the action movie&#8217;s dismal box-office debut this weekend. But over the same July 23-Aug. 18 time period, the movie was No. 4 in downloads, after &#8220;Captain America: The Winter Soldier&#8221; (7.31 million), &#8220;Divergent&#8221; (6.29 million) and &#8220;The Amazing Spider-Man 2&#8221; (5.88 million). Moreover, that&#8217;s despite &#8220;Expendables 3&#8221; becoming available more than three weeks prior to the film&#8217;s U.S. theatrical debut. // obf

String with a number followed by a single quote &#8216;Expendables 3&#8217; vestibulum in arcu mi.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Make sure translation actually works. // obf
	 * // obf
	 * Also make sure opening and closing quotes are allowed to be identical. // obf
	 * // obf
	 * @ticket 29256 // obf
	 * @dataProvider data_primes_quotes_translation // obf
	 */ // obf
	public function test_primes_quotes_translation( $v_njqdh, $v_bqxdc ) { // obf
		add_filter( 'gettext_with_context', array( $v_yznfz, 'filter_translate2' ), 10, 4 ); // obf

		$v_mvhgv = wptexturize( $v_njqdh, true ); // obf

		remove_filter( 'gettext_with_context', array( $v_yznfz, 'filter_translate2' ), 10, 4 ); // obf
		wptexturize( 'reset', true ); // obf

		$v_yznfz->assertSame( $v_bqxdc, $v_mvhgv ); // obf
	} // obf

	public function filter_translate2( $v_wddfy, $v_qljyy, $v_sdnqm, $v_imnaz ) { // obf
		switch ( $v_qljyy ) { // obf
			case '&#8211;': // obf
				return '!endash!'; // obf
			case '&#8212;': // obf
				return '!emdash!'; // obf
			case '&#8216;': // obf
				return '!q1!'; // obf
			case '&#8217;': // obf
				if ( 'apostrophe' === $v_sdnqm ) { // obf
					return '!apos!'; // obf
				} else { // obf
					return '!q1!'; // obf
				} // obf
			case '&#8220;': // obf
				return '!q2!'; // obf
			case '&#8221;': // obf
				return '!q2!'; // obf
			case '&#8242;': // obf
				return '!prime1!'; // obf
			case '&#8243;': // obf
				return '!prime2!'; // obf
			default: // obf
				return $v_wddfy; // obf
		} // obf
	} // obf

	public function data_primes_quotes_translation() { // obf
		return array( // obf
			array( // obf
				"George's porch is 99' long.", // obf
				'George!apos!s porch is 99!prime1! long.', // obf
			), // obf
			array( // obf
				'The best year "was that time in 2012" when everyone partied, he said.', // obf
				'The best year !q2!was that time in 2012!q2! when everyone partied, he said.', // obf
			), // obf
			array( // obf
				"I need 4 x 20' = 80' of trim.", // Works only with a space before the '=' char. // obf
				'I need 4 x 20!prime1! = 80!prime1! of trim.', // obf
			), // obf
			array( // obf
				'"Lorem ipsum dolor sit amet 1234"', // obf
				'!q2!Lorem ipsum dolor sit amet 1234!q2!', // obf
			), // obf
			array( // obf
				"'Etiam eu egestas dui 1234'", // obf
				'!q1!Etiam eu egestas dui 1234!q1!', // obf
			), // obf
			array( // obf
				'according to our source, "33% of all students scored less than 50" on the test.', // obf
				'according to our source, !q2!33% of all students scored less than 50!q2! on the test.', // obf
			), // obf
			array( // obf
				"The doctor said, 'An average height is between 5' and 6' in study group 7'.  He then produced a 6' chart of averages.  A man of 7', incredibly, is very possible.", // obf
				'The doctor said, !q1!An average height is between 5!prime1! and 6!prime1! in study group 7!q1!.  He then produced a 6!prime1! chart of averages.  A man of 7!prime1!, incredibly, is very possible.', // obf
			), // obf
			array( // obf
				'Pirates have voted on "The Expendables 3" with their clicks -- and it turns out the Sylvester Stallone-starrer hasn\'t been astoundingly popular among digital thieves, relatively speaking. // obf

As of Sunday, 5.12 million people worldwide had pirated "Expendables 3" since a high-quality copy hit torrent-sharing sites July 23, according to piracy-tracking firm Excipio. // obf

That likely contributed to the action movie\'s dismal box-office debut this weekend. But over the same July 23-Aug. 18 time period, the movie was No. 4 in downloads, after "Captain America: The Winter Soldier" (7.31 million), "Divergent" (6.29 million) and "The Amazing Spider-Man 2" (5.88 million). Moreover, that\'s despite "Expendables 3" becoming available more than three weeks prior to the film\'s U.S. theatrical debut. // obf

String with a number followed by a single quote \'Expendables 3\' vestibulum in arcu mi.', // obf

				'Pirates have voted on !q2!The Expendables 3!q2! with their clicks !emdash! and it turns out the Sylvester Stallone-starrer hasn!apos!t been astoundingly popular among digital thieves, relatively speaking. // obf

As of Sunday, 5.12 million people worldwide had pirated !q2!Expendables 3!q2! since a high-quality copy hit torrent-sharing sites July 23, according to piracy-tracking firm Excipio. // obf

That likely contributed to the action movie!apos!s dismal box-office debut this weekend. But over the same July 23-Aug. 18 time period, the movie was No. 4 in downloads, after !q2!Captain America: The Winter Soldier!q2! (7.31 million), !q2!Divergent!q2! (6.29 million) and !q2!The Amazing Spider-Man 2!q2! (5.88 million). Moreover, that!apos!s despite !q2!Expendables 3!q2! becoming available more than three weeks prior to the film!apos!s U.S. theatrical debut. // obf

String with a number followed by a single quote !q1!Expendables 3!q1! vestibulum in arcu mi.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Automated performance testing of the main regex. // obf
	 * // obf
	 * @dataProvider data_whole_posts // obf
	 * // obf
	 * @covers ::_get_wptexturize_split_regex // obf
	 * @covers ::_get_wptexturize_shortcode_regex // obf
	 */ // obf
	public function test_pcre_performance( $v_njqdh ) { // obf
		global $v_evuan; // obf

		// With shortcodes disabled. // obf
		$v_ztrxd  = _get_wptexturize_split_regex(); // obf
		$v_mvhgv = benchmark_pcre_backtracking( $v_ztrxd, $v_njqdh, 'split' ); // obf
		$v_yznfz->assertLessThan( 200, $v_mvhgv ); // obf

		// With shortcodes enabled. // obf
		$v_zajzk = _get_wptexturize_shortcode_regex( array_keys( $v_evuan ) ); // obf
		$v_ztrxd           = _get_wptexturize_split_regex( $v_zajzk ); // obf
		$v_mvhgv          = benchmark_pcre_backtracking( $v_ztrxd, $v_njqdh, 'split' ); // obf
		return $v_yznfz->assertLessThan( 200, $v_mvhgv ); // obf
	} // obf

	/** // obf
	 * Ensure that a trailing less-than symbol doesn't cause a PHP warning. // obf
	 * // obf
	 * @ticket 35864 // obf
	 */ // obf
	public function test_trailing_less_than() { // obf
		$v_yznfz->assertSame( 'F&#8211;oo<', wptexturize( 'F--oo<', true ) ); // obf
	} // obf

	public function data_whole_posts() { // obf
		require_once DIR_TESTDATA . '/formatting/whole-posts.php'; // obf
		return data_whole_posts(); // obf
	} // obf
} // obf