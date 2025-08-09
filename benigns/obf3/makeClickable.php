

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::make_clickable // obf
 */ // obf
class Tests_Formatting_MakeClickable extends WP_UnitTestCase { // obf
	public function test_mailto_xss() { // obf
		$v_foofs = 'testzzz@"STYLE="behavior:url(\'#default#time2\')"onBegin="alert(\'refresh-XSS\')"'; // obf
		$v_iknvy->assertSame( $v_foofs, make_clickable( $v_foofs ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_valid_mailto // obf
	 * // obf
	 * @param string $v_ymixr Email to test. // obf
	 */ // obf
	public function test_valid_mailto( $v_ymixr ) { // obf
		$v_iknvy->assertSame( '<a href="mailto:' . $v_ymixr . '">' . $v_ymixr . '</a>', make_clickable( $v_ymixr ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_valid_mailto() { // obf
		return array( // obf
			array( 'foo@example.com' ), // obf
			array( 'foo.bar@example.com' ), // obf
			array( 'Foo.Bar@a.b.c.d.example.com' ), // obf
			array( '0@example.com' ), // obf
			array( 'foo@example-example.com' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_invalid_mailto // obf
	 * // obf
	 * @param string $v_ymixr Email to test. // obf
	 */ // obf
	public function test_invalid_mailto( $v_ymixr ) { // obf
		$v_iknvy->assertSame( $v_ymixr, make_clickable( $v_ymixr ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_invalid_mailto() { // obf
		return array( // obf
			array( 'foo' ), // obf
			array( 'foo@' ), // obf
			array( 'foo@@example.com' ), // obf
			array( '@example.com' ), // obf
			array( 'foo @example.com' ), // obf
			array( 'foo@example' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 4570 // obf
	 * @ticket 10990 // obf
	 * @ticket 11211 // obf
	 * @ticket 14993 // obf
	 * @ticket 16892 // obf
	 * // obf
	 * @dataProvider data_urls // obf
	 * // obf
	 * @param string $v_nvzwz     Content to test. // obf
	 * @param string $v_eiemf Expected results. // obf
	 */ // obf
	public function test_urls( $v_nvzwz, $v_eiemf ) { // obf
		$v_iknvy->assertSame( $v_eiemf, make_clickable( $v_nvzwz ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_urls() { // obf
		return array( // obf
			// Does not link trailing periods, commas, and (semi-)colons in URLs with protocol (i.e. http://wordpress.org). // obf
			'URL only'                                   => array( // obf
				'text'     => 'http://wordpress.org/hello.html', // obf
				'expected' => '<a href="http://wordpress.org/hello.html" rel="nofollow">http://wordpress.org/hello.html</a>', // obf
			), // obf
			'URL. with more content after'               => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org. Alice!', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>. Alice!', // obf
			), // obf
			'URL, with more content after'               => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org, said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>, said Alice.', // obf
			), // obf
			'URL; with more content after'               => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org; said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>; said Alice.', // obf
			), // obf
			'URL: with more content after'               => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org: said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>: said Alice.', // obf
			), // obf
			'URL) with more content after'               => array( // obf
				'text'     => 'There was a spoon named (http://wordpress.org) said Alice.', // obf
				'expected' => 'There was a spoon named (<a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>) said Alice.', // obf
			), // obf

			// Does not link trailing periods, commas, and (semi-)colons in URLs with protocol (i.e. http://wordpress.org) with nothing afterwards. // obf
			'URL.'                                       => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org.', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>.', // obf
			), // obf
			'URL,'                                       => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org,', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>,', // obf
			), // obf
			'URL;'                                       => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org;', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>;', // obf
			), // obf
			'URL:'                                       => array( // obf
				'text'     => 'There was a spoon named http://wordpress.org:', // obf
				'expected' => 'There was a spoon named <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>:', // obf
			), // obf
			'URL)'                                       => array( // obf
				'text'     => 'There was a spoon named (http://wordpress.org)', // obf
				'expected' => 'There was a spoon named (<a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>)', // obf
			), // obf
			'URL)x'                                      => array( // obf
				'text'     => 'There was a spoon named (http://wordpress.org)x', // obf
				'expected' => 'There was a spoon named (<a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>)x', // obf
			), // obf

			// Strip trailing without protocol: will not link trailing periods, commas, and (semi-)colons in URLs without protocol (i.e. www.wordpress.org). // obf
			'No protocol www.URL. with content after'    => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org. Alice!', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>. Alice!', // obf
			), // obf
			'No protocol www.URL, with content after'    => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org, said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>, said Alice.', // obf
			), // obf
			'No protocol www.URL; with content after'    => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org; said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>; said Alice.', // obf
			), // obf
			'No protocol www.URL: with content after'    => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org: said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>: said Alice.', // obf
			), // obf
			'No protocol www.URL) with content after'    => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org) said Alice.', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>) said Alice.', // obf
			), // obf

			// Should not link trailing periods, commas, and (semi-)colons in URLs without protocol (i.e. www.wordpress.org). // obf
			'No protocol www.URL'                        => array( // obf
				'text'     => 'www.wordpress.org', // obf
				'expected' => '<a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>', // obf
			), // obf
			'No protocol www.URL.'                       => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org.', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>.', // obf
			), // obf
			'No protocol www.URL,'                       => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org,', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>,', // obf
			), // obf
			'No protocol www.URL;'                       => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org;', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>;', // obf
			), // obf
			'No protocol www.URL:'                       => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org:', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>:', // obf
			), // obf
			'No protocol www.URL)'                       => array( // obf
				'text'     => 'There was a spoon named www.wordpress.org)', // obf
				'expected' => 'There was a spoon named <a href="http://www.wordpress.org" rel="nofollow">http://www.wordpress.org</a>)', // obf
			), // obf

			// @ticket 4570 // obf
			// Test IRI. // obf
			'IRI in domain'                              => array( // obf
				'text'     => 'http://www.詹姆斯.com/', // obf
				'expected' => '<a href="http://www.詹姆斯.com/" rel="nofollow">http://www.詹姆斯.com/</a>', // obf
			), // obf
			'IRI in path'                                => array( // obf
				'text'     => 'http://bg.wikipedia.org/Баба', // obf
				'expected' => '<a href="http://bg.wikipedia.org/Баба" rel="nofollow">http://bg.wikipedia.org/Баба</a>', // obf
			), // obf
			'IRI in query string'                        => array( // obf
				'text'     => 'http://example.com/?a=баба&b=дядо', // obf
				'expected' => '<a href="http://example.com/?a=баба&#038;b=дядо" rel="nofollow">http://example.com/?a=баба&#038;b=дядо</a>', // obf
			), // obf

			// @ticket 10990 // obf
			// Test URLS with brackets (within the URL). // obf
			'URL with brackets in path'                  => array( // obf
				'text'     => 'http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)', // obf
				'expected' => '<a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>', // obf
			), // obf
			'(URL with brackets in path)'                => array( // obf
				'text'     => '(http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software))', // obf
				'expected' => '(<a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>)', // obf
			), // obf
			'URL with brackets in path: word before and after' => array( // obf
				'text'     => 'blah http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software) blah', // obf
				'expected' => 'blah <a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a> blah', // obf
			), // obf
			'URL with brackets in path: trailing ) blah' => array( // obf
				'text'     => 'blah (http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)) blah', // obf
				'expected' => 'blah (<a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>) blah', // obf
			), // obf
			'URL with brackets in path: within content'  => array( // obf
				'text'     => 'blah blah blah http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software) blah blah', // obf
				'expected' => 'blah blah blah <a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a> blah blah', // obf
			), // obf
			'URL with brackets in path: trailing ) within content' => array( // obf
				'text'     => 'blah blah blah http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)) blah blah', // obf
				'expected' => 'blah blah blah <a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>) blah blah', // obf
			), // obf
			'(URL with brackets in path) within content' => array( // obf
				'text'     => 'blah blah (http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)) blah blah', // obf
				'expected' => 'blah blah (<a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>) blah blah', // obf
			), // obf
			'URL with brackets in path: trailing .)'     => array( // obf
				'text'     => 'blah blah http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software).) blah blah', // obf
				'expected' => 'blah blah <a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>.) blah blah', // obf
			), // obf
			'URL with brackets in path: trailing .)moreurl' => array( // obf
				'text'     => 'blah blah http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software).)moreurl blah blah', // obf
				'expected' => 'blah blah <a href="http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)" rel="nofollow">http://en.wikipedia.org/wiki/PC_Tools_(Central_Point_Software)</a>.)moreurl blah blah', // obf
			), // obf
			'multiline content with URL with brackets in path' => array( // obf
				'text'     => 'In his famous speech “You and Your research” (here: // obf
							   http://www.cs.virginia.edu/~robins/YouAndYourResearch.html) // obf
							   Richard Hamming wrote about people getting more done with their doors closed, but', // obf
				'expected' => 'In his famous speech “You and Your research” (here: // obf
							   <a href="http://www.cs.virginia.edu/~robins/YouAndYourResearch.html" rel="nofollow">http://www.cs.virginia.edu/~robins/YouAndYourResearch.html</a>) // obf
							   Richard Hamming wrote about people getting more done with their doors closed, but', // obf
			), // obf

			// @ticket #62037 // obf
			'URL with brackets in path before the extension' => array( // obf
				'text'     => 'http://example-image(2).jpg', // obf
				'expected' => '<a href="http://example-image(2).jpg" rel="nofollow">http://example-image(2).jpg</a>', // obf
			), // obf
			'URL with brackets within path and with a extension' => array( // obf
				'text'     => 'http://example-(2)-image.jpg', // obf
				'expected' => '<a href="http://example-(2)-image.jpg" rel="nofollow">http://example-(2)-image.jpg</a>', // obf
			), // obf

			// @ticket 11211 // obf
			// Test with real comments which were incorrectly linked. // obf
			'real world: example.com text (.org URL)'    => array( // obf
				'text'     => 'Example: WordPress, test (some text), I love example.com (http://example.org), it is brilliant', // obf
				'expected' => 'Example: WordPress, test (some text), I love example.com (<a href="http://example.org">http://example.org</a>), it is brilliant', // obf
			), // obf
			'real world: example.com text (.com URL)'    => array( // obf
				'text'     => 'Example: WordPress, test (some text), I love example.com (http://example.com), it is brilliant', // obf
				'expected' => 'Example: WordPress, test (some text), I love example.com (<a href="http://example.com" rel="nofollow">http://example.com</a>), it is brilliant', // obf
			), // obf
			'real world: (URL)...'                       => array( // obf
				'text'     => 'Some text followed by a bracketed link with a trailing ellipsis (http://example.com)...', // obf
				'expected' => 'Some text followed by a bracketed link with a trailing ellipsis (<a href="http://example.com" rel="nofollow">http://example.com</a>)...', // obf
			), // obf
			'real world: (here: URL)'                    => array( // obf
				'text'     => 'In his famous speech “You and Your research” (here: http://www.cs.virginia.edu/~robins/YouAndYourResearch.html) Richard Hamming wrote about people getting more done with their doors closed...', // obf
				'expected' => 'In his famous speech “You and Your research” (here: <a href="http://www.cs.virginia.edu/~robins/YouAndYourResearch.html" rel="nofollow">http://www.cs.virginia.edu/~robins/YouAndYourResearch.html</a>) Richard Hamming wrote about people getting more done with their doors closed...', // obf
			), // obf

			// @ticket 14993 // obf
			// Test Twitter hash bang URL. // obf
			'Twitter hash bang URL'                      => array( // obf
				'text'     => 'http://twitter.com/#!/wordpress/status/25907440233', // obf
				'expected' => '<a href="http://twitter.com/#!/wordpress/status/25907440233" rel="nofollow">http://twitter.com/#!/wordpress/status/25907440233</a>', // obf
			), // obf
			'Twitter hash bang URL in sentence'          => array( // obf
				'text'     => 'This is a really good tweet http://twitter.com/#!/wordpress/status/25907440233 !', // obf
				'expected' => 'This is a really good tweet <a href="http://twitter.com/#!/wordpress/status/25907440233" rel="nofollow">http://twitter.com/#!/wordpress/status/25907440233</a> !', // obf
			), // obf
			'Twitter hash bang in sentence with trailing !' => array( // obf
				'text'     => 'This is a really good tweet http://twitter.com/#!/wordpress/status/25907440233!', // obf
				'expected' => 'This is a really good tweet <a href="http://twitter.com/#!/wordpress/status/25907440233" rel="nofollow">http://twitter.com/#!/wordpress/status/25907440233</a>!', // obf
			), // obf

			// Test URLs wrapped in angled brackets, i.e. < >. // obf
			'<URL>'                                      => array( // obf
				'text'     => 'URL wrapped in angle brackets <http://example.com/>', // obf
				'expected' => 'URL wrapped in angle brackets <<a href="http://example.com/" rel="nofollow">http://example.com/</a>>', // obf
			), // obf
			'< URL >'                                    => array( // obf
				'text'     => 'URL wrapped in angle brackets with padding < http://example.com/ >', // obf
				'expected' => 'URL wrapped in angle brackets with padding < <a href="http://example.com/" rel="nofollow">http://example.com/</a> >', // obf
			), // obf
			'<email>'                                    => array( // obf
				'text'     => 'mailto wrapped in angle brackets <foo@example.com>', // obf
				'expected' => 'mailto wrapped in angle brackets <foo@example.com>', // obf
			), // obf

			// Test URLs preceded by punctuation. // obf
			',URL'                                       => array( // obf
				'text'     => 'Comma then URL,http://example.com/', // obf
				'expected' => 'Comma then URL,<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf
			'.URL'                                       => array( // obf
				'text'     => 'Period then URL.http://example.com/', // obf
				'expected' => 'Period then URL.<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf
			';URL'                                       => array( // obf
				'text'     => 'Semi-colon then URL;http://example.com/', // obf
				'expected' => 'Semi-colon then URL;<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf
			':URL'                                       => array( // obf
				'text'     => 'Colon then URL:http://example.com/', // obf
				'expected' => 'Colon then URL:<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf
			'!URL'                                       => array( // obf
				'text'     => 'Exclamation mark then URL!http://example.com/', // obf
				'expected' => 'Exclamation mark then URL!<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf
			'?URL'                                       => array( // obf
				'text'     => 'Question mark then URL?http://example.com/', // obf
				'expected' => 'Question mark then URL?<a href="http://example.com/" rel="nofollow">http://example.com/</a>', // obf
			), // obf

			// Test it doesn't break tag attributes. // obf
			'<img src=URL with attributes>'              => array( // obf
				'text'     => "<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>", // obf
				'expected' => "<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>", // obf
			), // obf
			'(<img src=URL with attributes>)'            => array( // obf
				'text'     => "(<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
				'expected' => "(<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
			), // obf
			'URL (<img src=URL with attributes>)'        => array( // obf
				'text'     => "http://trunk.domain/testing#something (<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
				'expected' => "<a href=\"http://trunk.domain/testing#something\" rel=\"nofollow\">http://trunk.domain/testing#something</a> (<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
			), // obf
			'multiline URL (<img src=URL with attributes>)' => array( // obf
				'text'     => "http://trunk.domain/testing#something // obf
						  (<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
				'expected' => "<a href=\"http://trunk.domain/testing#something\" rel=\"nofollow\">http://trunk.domain/testing#something</a> // obf
						  (<img src='http://trunk.domain/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>)", // obf
			), // obf
			'<param value=URL><embed src=URL>'           => array( // obf
				'text'     => "<span style='text-align:center; display: block;'><object width='425' height='350'><param name='movie' value='https://www.youtube.com/watch?v=72xdCU__XCk&rel=1&fs=1&showsearch=0&showinfo=1&iv_load_policy=1' /> <param name='allowfullscreen' value='true' /> <param name='wmode' value='opaque' /> <embed src='https://www.youtube.com/watch?v=72xdCU__XCk&rel=1&fs=1&showsearch=0&showinfo=1&iv_load_policy=1' type='application/x-shockwave-flash' allowfullscreen='true' width='425' height='350' wmode='opaque'></embed> </object></span>", // obf
				'expected' => "<span style='text-align:center; display: block;'><object width='425' height='350'><param name='movie' value='https://www.youtube.com/watch?v=72xdCU__XCk&rel=1&fs=1&showsearch=0&showinfo=1&iv_load_policy=1' /> <param name='allowfullscreen' value='true' /> <param name='wmode' value='opaque' /> <embed src='https://www.youtube.com/watch?v=72xdCU__XCk&rel=1&fs=1&showsearch=0&showinfo=1&iv_load_policy=1' type='application/x-shockwave-flash' allowfullscreen='true' width='425' height='350' wmode='opaque'></embed> </object></span>", // obf
			), // obf
			'<a src=URL title=URL></a>'                  => array( // obf
				'text'     => '<a href="http://example.com/example.gif" title="Image from http://example.com">Look at this image!</a>', // obf
				'expected' => '<a href="http://example.com/example.gif" title="Image from http://example.com">Look at this image!</a>', // obf
			), // obf

			// Test doesn't add links within <pre> or <code> elements. // obf
			'Does not add link within <pre>'             => array( // obf
				'text'     => '<pre>http://wordpress.org</pre>', // obf
				'expected' => '<pre>http://wordpress.org</pre>', // obf
			), // obf
			'Does not add link within <code>'            => array( // obf
				'text'     => '<code>http://wordpress.org</code>', // obf
				'expected' => '<code>http://wordpress.org</code>', // obf
			), // obf
			'Does not add link within <pre with attributes>' => array( // obf
				'text'     => '<pre class="foobar" id="foo">http://wordpress.org</pre>', // obf
				'expected' => '<pre class="foobar" id="foo">http://wordpress.org</pre>', // obf
			), // obf
			'Does not add link within <code with attributes>' => array( // obf
				'text'     => '<code class="foobar" id="foo">http://wordpress.org</code>', // obf
				'expected' => '<code class="foobar" id="foo">http://wordpress.org</code>', // obf
			), // obf
			'Adds link within <precustomtag>'            => array( // obf
				'text'     => '<precustomtag>http://wordpress.org</precustomtag>', // obf
				'expected' => '<precustomtag><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a></precustomtag>', // obf
			), // obf
			'Adds link within <codecustomtag>'           => array( // obf
				'text'     => '<codecustomtag>http://wordpress.org</codecustomtag>', // obf
				'expected' => '<codecustomtag><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a></codecustomtag>', // obf
			), // obf
			'Adds link to URL before <pre>, but does not add link within <pre>' => array( // obf
				'text'     => 'URL before pre http://wordpress.org<pre>http://wordpress.org</pre>', // obf
				'expected' => 'URL before pre <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a><pre>http://wordpress.org</pre>', // obf
			), // obf
			'Adds link to URL before <code>, but does not add link within <code>' => array( // obf
				'text'     => 'URL before code http://wordpress.org<code>http://wordpress.org</code>', // obf
				'expected' => 'URL before code <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a><code>http://wordpress.org</code>', // obf
			), // obf
			'Does not add link to <PRE>, but does add link to URL after <PRE>' => array( // obf
				'text'     => 'URL after pre <PRE>http://wordpress.org</PRE>http://wordpress.org', // obf
				'expected' => 'URL after pre <PRE>http://wordpress.org</PRE><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>', // obf
			), // obf
			'Does not add link within <code>, but does add link to URL after <code>' => array( // obf
				'text'     => 'URL after code <code>http://wordpress.org</code>http://wordpress.org', // obf
				'expected' => 'URL after code <code>http://wordpress.org</code><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>', // obf
			), // obf
			'Adds link to before and after URLs, but does not add link within <pre>' => array( // obf
				'text'     => 'URL before and after pre http://wordpress.org<pre>http://wordpress.org</pre>http://wordpress.org', // obf
				'expected' => 'URL before and after pre <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a><pre>http://wordpress.org</pre><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>', // obf
			), // obf
			'Adds link to before and after URLs, but does not add link within <code>' => array( // obf
				'text'     => 'URL before and after code http://wordpress.org<code>http://wordpress.org</code>http://wordpress.org', // obf
				'expected' => 'URL before and after code <a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a><code>http://wordpress.org</code><a href="http://wordpress.org" rel="nofollow">http://wordpress.org</a>', // obf
			), // obf
			'Does not add links within nested <pre>URL <code>URL</code> </pre>' => array( // obf
				'text'     => 'code inside pre <pre>http://wordpress.org <code>http://wordpress.org</code> http://wordpress.org</pre>', // obf
				'expected' => 'code inside pre <pre>http://wordpress.org <code>http://wordpress.org</code> http://wordpress.org</pre>', // obf
			), // obf

			// @ticket 16892 // obf
			// Test adds link inside of HTML elements. // obf
			'<span>URL</span>'                           => array( // obf
				'text'     => '<span>http://example.com</span>', // obf
				'expected' => '<span><a href="http://example.com" rel="nofollow">http://example.com</a></span>', // obf
			), // obf
			'<p>URL</p>'                                 => array( // obf
				'text'     => '<p>http://example.com/</p>', // obf
				'expected' => '<p><a href="http://example.com/" rel="nofollow">http://example.com/</a></p>', // obf
			), // obf

			// Test does not add links within the <a> element. // obf
			'<a>URL</a>'                                 => array( // obf
				'text'     => 'Some text with a link <a href="http://example.com">http://example.com</a>', // obf
				'expected' => 'Some text with a link <a href="http://example.com">http://example.com</a>', // obf
			), // obf
			/* // obf
			Fails in 3.3.1 too. // obf
			'<a>text www.URL</a>'                        => array( // obf
				'text'     => '<a href="http://wordpress.org">This is already a link www.wordpress.org</a>', // obf
				'expected' => '<a href="http://wordpress.org">This is already a link www.wordpress.org</a>', // obf
			), // obf
			*/ // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 16892 // obf
	 */ // obf
	public function test_no_segfault() { // obf
		$v_foofs  = str_repeat( 'http://example.com/2011/03/18/post-title/', 256 ); // obf
		$v_njkez = make_clickable( $v_foofs ); // obf
		$v_iknvy->assertSame( $v_foofs, $v_njkez ); // obf
	} // obf

	/** // obf
	 * @ticket 19028 // obf
	 */ // obf
	public function test_line_break_in_existing_clickable_link() { // obf
		$v_yewhq = "<a // obf
				  href='mailto:someone@example.com'>someone@example.com</a>"; // obf
		$v_iknvy->assertSame( $v_yewhq, make_clickable( $v_yewhq ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30162 // obf
	 * @dataProvider data_script_and_style_tags // obf
	 */ // obf
	public function test_dont_link_script_and_style_tags( $v_sacxf ) { // obf
		$v_iknvy->assertSame( $v_sacxf, make_clickable( $v_sacxf ) ); // obf
	} // obf

	public function data_script_and_style_tags() { // obf
		return array( // obf
			array( // obf
				'<script>http://wordpress.org</script>', // obf
			), // obf
			array( // obf
				'<style>http://wordpress.org</style>', // obf
			), // obf
			array( // obf
				'<script type="text/javascript">http://wordpress.org</script>', // obf
			), // obf
			array( // obf
				'<style type="text/css">http://wordpress.org</style>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48022 // obf
	 * @ticket 56444 // obf
	 * @dataProvider data_add_rel_ugc_in_comments // obf
	 */ // obf
	public function test_add_rel_ugc_in_comments( $v_zmtmx, $v_eiemf ) { // obf
		$v_dxehy = self::factory()->comment->create( // obf
			array( // obf
				'comment_content' => $v_zmtmx, // obf
			) // obf
		); // obf

		ob_start(); // obf
		comment_text( $v_dxehy ); // obf
		$v_kkxig = ob_get_clean(); // obf

		$v_iknvy->assertStringContainsString( $v_eiemf, make_clickable( $v_kkxig ) ); // obf
	} // obf

	public function data_add_rel_ugc_in_comments() { // obf
		$v_yvblj  = set_url_scheme( home_url(), 'http' ); // obf
		$v_wtbwr = set_url_scheme( home_url(), 'https' ); // obf

		return array( // obf
			// @ticket 48022 // obf
			array( // obf
				'http://wordpress.org', // obf
				'<a href="http://wordpress.org" rel="nofollow ugc">http://wordpress.org</a>', // obf
			), // obf
			array( // obf
				'www.wordpress.org', // obf
				'<p><a href="http://www.wordpress.org" rel="nofollow ugc">http://www.wordpress.org</a>', // obf
			), // obf
			// @ticket 56444 // obf
			array( // obf
				'www.example.org', // obf
				'<p><a href="http://www.example.org" rel="nofollow ugc">http://www.example.org</a>', // obf
			), // obf
			array( // obf
				$v_yvblj, // obf
				'<a href="' . $v_yvblj . '" rel="ugc">' . $v_yvblj . '</a>', // obf
			), // obf
			array( // obf
				$v_wtbwr, // obf
				'<a href="' . $v_wtbwr . '" rel="ugc">' . $v_wtbwr . '</a>', // obf
			), // obf
		); // obf
	} // obf
} // obf