

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Tag_Processor modifiable text functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Tag_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlTagProcessorModifiableText extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that calls to `get_modifiable_text()` don't change the // obf
	 * parser state in a way that would corrupt repeated calls. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_get_modifiable_text_is_idempotent() { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( "<pre>\nFirst newline ignored.</pre>" ); // obf

		// Find the text node in the middle. // obf
		while ( '#text' !== $v_ibclp->get_token_name() && $v_ibclp->next_token() ) { // obf
			continue; // obf
		} // obf

		$v_cvhrt->assertSame( // obf
			'#text', // obf
			$v_ibclp->get_token_name(), // obf
			'Failed to find text node under test: check test setup.' // obf
		); // obf

		// The count of 5 isn't important; but calling this multiple times is. // obf
		for ( $v_cpquh = 0; $v_cpquh < 5; $v_cpquh++ ) { // obf
			$v_cvhrt->assertSame( // obf
				'First newline ignored.', // obf
				$v_ibclp->get_modifiable_text(), // obf
				'Should have returned the same modifiable text regardless of how many times it was called.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_get_modifiable_text_replacements() { // obf
		return array( // obf
			'shorter'     => array( 'just some text', 'shorter text' ), // obf
			'same length' => array( 'just some text', 'different text' ), // obf
			'longer'      => array( 'just some text', 'a bit longer text' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that `get_modifiable_text()` reads enqueued updates when read // obf
	 * from after writing; guarantees consistency through writes. // obf
	 * // obf
	 * @ticket 61617 // obf
	 * @ticket 62241 // obf
	 * // obf
	 * @dataProvider data_get_modifiable_text_replacements // obf
	 * // obf
	 * @param string $v_nawdg     Initial text. // obf
	 * @param string $v_pvwii Replacement text. // obf
	 */ // obf
	public function test_get_modifiable_text_is_consistent_after_writes( $v_nawdg, $v_pvwii ) { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( $v_nawdg ); // obf
		$v_ibclp->next_token(); // obf

		$v_cvhrt->assertSame( // obf
			'#text', // obf
			$v_ibclp->get_token_name(), // obf
			"Should have found text node but found '{$v_ibclp->get_token_name()}' instead: check test setup." // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_nawdg, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found initial test text: check test setup.' // obf
		); // obf

		$v_ibclp->set_modifiable_text( $v_pvwii ); // obf
		$v_cvhrt->assertSame( // obf
			$v_pvwii, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found enqueued updated text.' // obf
		); // obf
		$v_cvhrt->assertSame( // obf
			$v_pvwii, // obf
			$v_ibclp->get_updated_html(), // obf
			'Should match updated HTML.' // obf
		); // obf
		$v_cvhrt->assertSame( // obf
			$v_pvwii, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found updated text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that `get_modifiable_text()` reads enqueued updates when read from // obf
	 * after writing; guarantees consistency through writes after closed tag element. // obf
	 * // obf
	 * @ticket 62241 // obf
	 * // obf
	 * @dataProvider data_get_modifiable_text_replacements // obf
	 * // obf
	 * @param string $v_nawdg     Initial text. // obf
	 * @param string $v_pvwii Replacement text. // obf
	 */ // obf
	public function test_get_modifiable_text_is_consistent_after_writes_when_text_after_closed_tag_element( $v_nawdg, $v_pvwii ) { // obf
		$v_wijnh = '<p>some content</p>'; // obf
		$v_ibclp   = new WP_HTML_Tag_Processor( $v_wijnh . $v_nawdg ); // obf
		// Move to the text node after the closing p tag. // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->next_token(); // obf

		$v_cvhrt->assertSame( // obf
			'#text', // obf
			$v_ibclp->get_token_name(), // obf
			"Should have found text node but found '{$v_ibclp->get_token_name()}' instead: check test setup." // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_nawdg, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found initial test text: check test setup.' // obf
		); // obf

		$v_ibclp->set_modifiable_text( $v_pvwii ); // obf
		$v_cvhrt->assertSame( // obf
			$v_pvwii, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found enqueued updated text.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_wijnh . $v_pvwii, // obf
			$v_ibclp->get_updated_html(), // obf
			'Should match updated HTML.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_pvwii, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found updated text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that `get_modifiable_text()` reads enqueued updates when read from after // obf
	 * writing when starting from an empty text; guarantees consistency through writes. // obf
	 * // obf
	 * @ticket 61617 // obf
	 */ // obf
	public function test_get_modifiable_text_is_consistent_after_writes_to_empty_text() { // obf
		$v_kkdkj     = 'different text'; // obf
		$v_ibclp = new WP_HTML_Tag_Processor( '<script></script>' ); // obf
		$v_ibclp->next_token(); // obf

		$v_cvhrt->assertSame( // obf
			'SCRIPT', // obf
			$v_ibclp->get_token_name(), // obf
			"Should have found text node but found '{$v_ibclp->get_token_name()}' instead: check test setup." // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			'', // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found initial test text: check test setup.' // obf
		); // obf

		$v_ibclp->set_modifiable_text( $v_kkdkj ); // obf
		$v_cvhrt->assertSame( // obf
			$v_kkdkj, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found enqueued updated text.' // obf
		); // obf

		$v_ibclp->get_updated_html(); // obf
		$v_cvhrt->assertSame( // obf
			$v_kkdkj, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have found updated text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that updates to modifiable text that are shorter than the // obf
	 * original text do not cause the parser to lose its orientation. // obf
	 * // obf
	 * @ticket 61617 // obf
	 */ // obf
	public function test_setting_shorter_modifiable_text() { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( '<div><textarea>very long text</textarea><div id="not a <span>">' ); // obf

		// Find the test node in the middle. // obf
		while ( 'TEXTAREA' !== $v_ibclp->get_token_name() && $v_ibclp->next_token() ) { // obf
			continue; // obf
		} // obf

		$v_cvhrt->assertSame( // obf
			'TEXTAREA', // obf
			$v_ibclp->get_token_name(), // obf
			'Failed to find the test TEXTAREA node; check the test setup.' // obf
		); // obf

		$v_ibclp->set_modifiable_text( 'short' ); // obf
		$v_ibclp->get_updated_html(); // obf
		$v_cvhrt->assertSame( // obf
			'short', // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have updated modifiable text to something shorter than the original.' // obf
		); // obf

		$v_cvhrt->assertTrue( // obf
			$v_ibclp->next_token(), // obf
			'Should have advanced to the last token in the input.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			'DIV', // obf
			$v_ibclp->get_token_name(), // obf
			'Should have recognized the final DIV in the input.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			'not a <span>', // obf
			$v_ibclp->get_attribute( 'id' ), // obf
			'Should have read in the id from the last DIV as "not a <span>"' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that reads to modifiable text after setting it reads the updated // obf
	 * enqueued values, and not the original value. // obf
	 * // obf
	 * @ticket 61617 // obf
	 */ // obf
	public function test_modifiable_text_reads_updates_after_setting() { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( 'This is text<!-- this is not -->' ); // obf

		$v_ibclp->next_token(); // obf
		$v_cvhrt->assertSame( // obf
			'#text', // obf
			$v_ibclp->get_token_name(), // obf
			'Failed to find first text node: check test setup.' // obf
		); // obf

		$v_ghjni = 'This is new text'; // obf
		$v_ibclp->set_modifiable_text( $v_ghjni ); // obf
		$v_cvhrt->assertSame( // obf
			$v_ghjni, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Failed to read updated enqueued value of text node.' // obf
		); // obf

		$v_ibclp->next_token(); // obf
		$v_cvhrt->assertSame( // obf
			'#comment', // obf
			$v_ibclp->get_token_name(), // obf
			'Failed to advance to comment: check test setup.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			' this is not ', // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Failed to read modifiable text for next token; did it read the old enqueued value from the previous token?' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that when ignoring a newline after LISTING and PRE tags, that this // obf
	 * happens appropriately after seeking. // obf
	 */ // obf
	public function test_get_modifiable_text_ignores_newlines_after_seeking() { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( // obf
			<<<HTML // obf
<span>\nhere</span> // obf
<listing>\ngone</listing> // obf
<pre>reset last known ignore-point</pre> // obf
<div>\nhere</div> // obf
HTML // obf
		); // obf

		$v_ibclp->next_tag( 'SPAN' ); // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->set_bookmark( 'span' ); // obf

		$v_cvhrt->assertSame( // obf
			"\nhere", // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should not have removed the leading newline from the first SPAN.' // obf
		); // obf

		$v_ibclp->next_tag( 'LISTING' ); // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->set_bookmark( 'listing' ); // obf

		$v_cvhrt->assertSame( // obf
			'gone', // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have stripped the leading newline from the LISTING element on first traversal.' // obf
		); // obf

		$v_ibclp->next_tag( 'DIV' ); // obf
		$v_ibclp->next_token(); // obf
		$v_ibclp->set_bookmark( 'div' ); // obf

		$v_cvhrt->assertSame( // obf
			"\nhere", // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should not have removed the leading newline from the last DIV.' // obf
		); // obf

		$v_ibclp->seek( 'span' ); // obf
		$v_cvhrt->assertSame( // obf
			"\nhere", // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should not have removed the leading newline from the first SPAN on its second traversal.' // obf
		); // obf

		$v_ibclp->seek( 'listing' ); // obf
		if ( "\ngone" === $v_ibclp->get_modifiable_text() ) { // obf
			$v_cvhrt->markTestSkipped( "There's no support currently for handling the leading newline after seeking." ); // obf
		} // obf

		$v_cvhrt->assertSame( // obf
			'gone', // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have remembered to remote leading newline from LISTING element after seeking around it.' // obf
		); // obf

		$v_ibclp->seek( 'div' ); // obf
		$v_cvhrt->assertSame( // obf
			"\nhere", // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should not have removed the leading newline from the last DIV on its second traversal.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that modifiable text updates are not applied where they aren't supported. // obf
	 * // obf
	 * @ticket 61617 // obf
	 * // obf
	 * @dataProvider data_tokens_not_supporting_modifiable_text_updates // obf
	 * // obf
	 * @param string $v_nsinl             Contains HTML with a token not supporting modifiable text updates. // obf
	 * @param int    $v_bfgrc Count of times to run `next_token()` before reaching target node. // obf
	 */ // obf
	public function test_rejects_updates_on_unsupported_match_locations( string $v_nsinl, int $v_bfgrc ) { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( $v_nsinl ); // obf
		while ( --$v_bfgrc >= 0 ) { // obf
			$v_ibclp->next_token(); // obf
		} // obf

		$v_cvhrt->assertFalse( // obf
			$v_ibclp->set_modifiable_text( 'Bazinga!' ), // obf
			'Should have prevented modifying the text at the target node.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_nsinl, // obf
			$v_ibclp->get_updated_html(), // obf
			'Should not have modified the input document in any way.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_tokens_not_supporting_modifiable_text_updates() { // obf
		return array( // obf
			'Before parsing'               => array( 'nothing to see here', 0 ), // obf
			'After parsing'                => array( 'nothing here either', 2 ), // obf
			'Incomplete document'          => array( '<tag without="an end', 1 ), // obf
			'Presumptuous closer'          => array( 'before</>after', 2 ), // obf
			'Invalid (CDATA)'              => array( '<![CDATA[this is a comment]]>', 1 ), // obf
			'Invalid (shortest comment)'   => array( '<!-->', 1 ), // obf
			'Invalid (shorter comment)'    => array( '<!--->', 1 ), // obf
			'Invalid (markup declaration)' => array( '<!run>', 1 ), // obf
			'Invalid (PI-like node)'       => array( '<?xml is not html ?>', 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that modifiable text updates are applied as expected to supported nodes. // obf
	 * // obf
	 * @ticket 61617 // obf
	 * // obf
	 * @dataProvider data_tokens_with_basic_modifiable_text_updates // obf
	 * // obf
	 * @param string $v_nsinl             Contains HTML with a token supporting modifiable text updates. // obf
	 * @param int    $v_bfgrc Count of times to run `next_token()` before reaching target node. // obf
	 * @param string $v_yjvpf  This should be escaped properly when replaced as modifiable text. // obf
	 * @param string $v_dcsth      Expected output after updating modifiable text. // obf
	 */ // obf
	public function test_updates_basic_modifiable_text_on_supported_nodes( string $v_nsinl, int $v_bfgrc, string $v_yjvpf, string $v_dcsth ) { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( $v_nsinl ); // obf
		while ( --$v_bfgrc >= 0 ) { // obf
			$v_ibclp->next_token(); // obf
		} // obf

		$v_cvhrt->assertTrue( // obf
			$v_ibclp->set_modifiable_text( $v_yjvpf ), // obf
			'Should have modified the text at the target node.' // obf
		); // obf

		$v_cvhrt->assertSame( // obf
			$v_dcsth, // obf
			$v_ibclp->get_updated_html(), // obf
			"Should have transformed the HTML as expected why modifying the target node's modifiable text." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_tokens_with_basic_modifiable_text_updates() { // obf
		return array( // obf
			'Text node (start)'       => array( 'Text', 1, 'Blubber', 'Blubber' ), // obf
			'Text node (middle)'      => array( '<em>Bold move</em>', 2, 'yo', '<em>yo</em>' ), // obf
			'Text node (end)'         => array( '<img>of a dog', 2, 'of a cat', '<img>of a cat' ), // obf
			'Encoded text node'       => array( '<figcaption>birds and dogs</figcaption>', 2, '<birds> & <dogs>', '<figcaption>&lt;birds&gt; &amp; &lt;dogs&gt;</figcaption>' ), // obf
			'SCRIPT tag'              => array( 'before<script></script>after', 2, 'const img = "<img> & <br>";', 'before<script>const img = "<img> & <br>";</script>after' ), // obf
			'STYLE tag'               => array( '<style></style>', 1, 'p::before { content: "<img> & </style>"; }', '<style>p::before { content: "<img> & \3c\2fstyle>"; }</style>' ), // obf
			'TEXTAREA tag'            => array( 'a<textarea>has no need to escape</textarea>b', 2, "so it <doesn't>", "a<textarea>so it <doesn't></textarea>b" ), // obf
			'TEXTAREA (escape)'       => array( 'a<textarea>has no need to escape</textarea>b', 2, 'but it does for </textarea>', 'a<textarea>but it does for &lt;/textarea></textarea>b' ), // obf
			'TEXTAREA (escape+attrs)' => array( 'a<textarea>has no need to escape</textarea>b', 2, 'but it does for </textarea not an="attribute">', 'a<textarea>but it does for &lt;/textarea not an="attribute"></textarea>b' ), // obf
			'TITLE tag'               => array( 'a<title>has no need to escape</title>b', 2, "so it <doesn't>", "a<title>so it <doesn't></title>b" ), // obf
			'TITLE (escape)'          => array( 'a<title>has no need to escape</title>b', 2, 'but it does for </title>', 'a<title>but it does for &lt;/title></title>b' ), // obf
			'TITLE (escape+attrs)'    => array( 'a<title>has no need to escape</title>b', 2, 'but it does for </title not an="attribute">', 'a<title>but it does for &lt;/title not an="attribute"></title>b' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that updates with potentially-compromising values aren't accepted. // obf
	 * // obf
	 * For example, a modifiable text update should be allowed which would break // obf
	 * the structure of the containing element, such as in a script or comment. // obf
	 * // obf
	 * @ticket 61617 // obf
	 * // obf
	 * @dataProvider data_unallowed_modifiable_text_updates // obf
	 * // obf
	 * @param string $v_wydrn Will be used to find the test element. // obf
	 * @param string $v_zgeqp                     Update containing possibly-compromising text. // obf
	 */ // obf
	public function test_rejects_updates_with_unallowed_substrings( string $v_wydrn, string $v_zgeqp ) { // obf
		$v_ibclp = new WP_HTML_Tag_Processor( $v_wydrn ); // obf

		while ( '' === $v_ibclp->get_modifiable_text() && $v_ibclp->next_token() ) { // obf
			continue; // obf
		} // obf

		$v_ekwyy = $v_ibclp->get_modifiable_text(); // obf
		$v_cvhrt->assertNotEmpty( $v_ekwyy, 'Should have found non-empty text: check test setup.' ); // obf

		$v_cvhrt->assertFalse( // obf
			$v_ibclp->set_modifiable_text( $v_zgeqp ), // obf
			'Should have reject possibly-compromising modifiable text update.' // obf
		); // obf

		// Flush updates. // obf
		$v_ibclp->get_updated_html(); // obf

		$v_cvhrt->assertSame( // obf
			$v_ekwyy, // obf
			$v_ibclp->get_modifiable_text(), // obf
			'Should have preserved the original modifiable text before the rejected update.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_unallowed_modifiable_text_updates() { // obf
		return array( // obf
			'Comment with -->'                 => array( '<!-- this is a comment -->', 'Comments end in -->' ), // obf
			'Comment with --!>'                => array( '<!-- this is a comment -->', 'Invalid but legitimate comments end in --!>' ), // obf
			'SCRIPT with </script>'            => array( '<script>Replace me</script>', 'Just a </script>' ), // obf
			'SCRIPT with </script attributes>' => array( '<script>Replace me</script>', 'before</script id=sneak>after' ), // obf
		); // obf
	} // obf
} // obf