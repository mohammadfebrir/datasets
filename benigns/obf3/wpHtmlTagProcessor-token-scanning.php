

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Tag_Processor token-scanning functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Tag_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessor_Token_Scanning extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that scanning finishes in a complete form when the document is empty. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_completes_empty_document() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '' ); // obf

		$v_xivyu->assertFalse( // obf
			$v_oauzu->next_token(), // obf
			"Should not have found any tokens but found {$v_oauzu->get_token_type()}." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative text nodes are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_text_node() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( 'Hello, World!' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#text', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found #text token type but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'Hello, World!', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that `get_modifiable_text()` properly transforms text content. // obf
	 * // obf
	 * The newline and NULL byte (U+0000) behaviors can be complicated since they depend // obf
	 * on where the bytes were found and whether they were raw bytes in the input stream // obf
	 * or decoded from character references. // obf
	 * // obf
	 * @ticket 61576 // obf
	 * // obf
	 * @dataProvider data_modifiable_text_needing_transformation // obf
	 * // obf
	 * @param string $v_pzbnp    HTML with node containing `target` or `target-next` attribute. // obf
	 * @param string $v_hyqit Expected modifiable text from target node or following node. // obf
	 */ // obf
	public function test_modifiable_text_proper_transforms( string $v_pzbnp, string $v_hyqit ) { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( $v_pzbnp ); // obf

		// Find the expected target node. // obf
		while ( $v_oauzu->next_token() ) { // obf
			$v_cucio = $v_oauzu->get_attribute( 'target' ); // obf
			if ( true === $v_cucio ) { // obf
				break; // obf
			} // obf

			if ( is_numeric( $v_cucio ) ) { // obf
				for ( $v_tlxdw = (int) $v_cucio; $v_tlxdw > 0; $v_tlxdw-- ) { // obf
					$v_oauzu->next_token(); // obf
				} // obf
				break; // obf
			} // obf
		} // obf

		$v_xivyu->assertSame( // obf
			$v_hyqit, // obf
			$v_oauzu->get_modifiable_text(), // obf
			"Should have properly decoded and transformed modifiable text, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_modifiable_text_needing_transformation() { // obf
		return array( // obf
			'Text node + NULL byte'      => array( "<span target=1>NULL byte in \x00 text nodes disappears.", 'NULL byte in  text nodes disappears.' ), // obf
			'LISTING + newline'          => array( "<listing target=1>\nNo newline</listing>", 'No newline' ), // obf
			'LISTING + CR + LF'          => array( "<listing target=1>\r\nNo newline</listing>", 'No newline' ), // obf
			'LISTING + Encoded LF'       => array( '<listing target=1>&#x0a;No newline</listing>', 'No newline' ), // obf
			'LISTING + Encoded CR'       => array( '<listing target=1>&#x0d;Newline</listing>', "\rNewline" ), // obf
			'LISTING + Encoded CR + LF'  => array( '<listing target=1>&#x0d;&#x0a;Newline</listing>', "\r\nNewline" ), // obf
			'PRE + newline'              => array( "<pre target=1>\nNo newline</pre>", 'No newline' ), // obf
			'PRE + CR + LF'              => array( "<pre target=1>\r\nNo newline</pre>", 'No newline' ), // obf
			'PRE + Encoded LF'           => array( '<pre target=1>&#x0a;No newline</pre>', 'No newline' ), // obf
			'PRE + Encoded CR'           => array( '<pre target=1>&#x0d;Newline</pre>', "\rNewline" ), // obf
			'PRE + Encoded CR + LF'      => array( '<pre target=1>&#x0d;&#x0a;Newline</pre>', "\r\nNewline" ), // obf
			'TEXTAREA + newline'         => array( "<textarea target>\nNo newline</textarea>", 'No newline' ), // obf
			'TEXTAREA + CR + LF'         => array( "<textarea target>\r\nNo newline</textarea>", 'No newline' ), // obf
			'TEXTAREA + Encoded LF'      => array( '<textarea target>&#x0a;No newline</textarea>', 'No newline' ), // obf
			'TEXTAREA + Encoded CR'      => array( '<textarea target>&#x0d;Newline</textarea>', "\rNewline" ), // obf
			'TEXTAREA + Encoded CR + LF' => array( '<textarea target>&#x0d;&#x0a;Newline</textarea>', "\r\nNewline" ), // obf
			'TEXTAREA + Comment-like'    => array( "<textarea target><!-- comment -->\nNo newline</textarea>", "<!-- comment -->\nNo newline" ), // obf
			'PRE + Comment'              => array( "<pre target=2><!-- comment -->\nNo newline</pre>", "\nNo newline" ), // obf
			'PRE + CDATA-like'           => array( "<pre target=2><![CDATA[test]]>\nNo newline</pre>", "\nNo newline" ), // obf
			'LISTING + NULL byte'        => array( "<listing target=1>\x00 is missing</listing>", ' is missing' ), // obf
			'PRE + NULL byte'            => array( "<pre target=1>\x00 is missing</pre>", ' is missing' ), // obf
			'TEXTAREA + NULL byte'       => array( "<textarea target>\x00 is U+FFFD</textarea>", "\u{FFFD} is U+FFFD" ), // obf
			'SCRIPT + NULL byte'         => array( "<script target>\x00 is U+FFFD</script>", "\u{FFFD} is U+FFFD" ), // obf
			'esc(SCRIPT) + NULL byte'    => array( "<script target><!-- <script> \x00 </script> --> is U+FFFD</script>", "<!-- <script> \u{FFFD} </script> --> is U+FFFD" ), // obf
			'STYLE + NULL byte'          => array( "<style target>\x00 is U+FFFD</style>", "\u{FFFD} is U+FFFD" ), // obf
			'XMP + NULL byte'            => array( "<xmp target>\x00 is U+FFFD</xmp>", "\u{FFFD} is U+FFFD" ), // obf
			'CDATA-like + NULL byte'     => array( "<span target=1><![CDATA[just a \x00comment]]>", "just a \u{FFFD}comment" ), // obf
			'Funky comment + NULL byte'  => array( "<span target=1></%just a \x00comment>", "%just a \u{FFFD}comment" ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative Elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_element() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<div id="test" inert>Hello, World!</div>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'DIV', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found DIV tag name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'test', // obf
			$v_oauzu->get_attribute( 'id' ), // obf
			"Should have found id attribute value 'test' but found {$v_oauzu->get_attribute( 'id' )} instead." // obf
		); // obf

		$v_xivyu->assertTrue( // obf
			$v_oauzu->get_attribute( 'inert' ), // obf
			"Should have found boolean attribute 'inert' but didn't." // obf
		); // obf

		$v_jokpu     = $v_oauzu->get_attribute_names_with_prefix( '' ); // obf
		$v_yukzk = array_map( 'Tests_HtmlApi_WpHtmlProcessor_Token_Scanning::quoted', $v_jokpu ); // obf
		$v_xivyu->assertSame( // obf
			array( 'id', 'inert' ), // obf
			$v_jokpu, // obf
			'Should have found only two attributes but found ' . implode( ', ', $v_yukzk ) . ' instead.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'', // obf
			$v_oauzu->get_modifiable_text(), // obf
			"Should have found empty modifiable text but found '{$v_oauzu->get_modifiable_text()}' instead." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative SCRIPT elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_script_element() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<script type="module">console.log( "Hello, World!" );</script>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'SCRIPT', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found SCRIPT tag name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'module', // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			"Should have found type attribute value 'module' but found {$v_oauzu->get_attribute( 'type' )} instead." // obf
		); // obf

		$v_jokpu     = $v_oauzu->get_attribute_names_with_prefix( '' ); // obf
		$v_yukzk = array_map( 'Tests_HtmlApi_WpHtmlProcessor_Token_Scanning::quoted', $v_jokpu ); // obf
		$v_xivyu->assertSame( // obf
			array( 'type' ), // obf
			$v_jokpu, // obf
			"Should have found single 'type' attribute but found " . implode( ', ', $v_yukzk ) . ' instead.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'console.log( "Hello, World!" );', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative TEXTAREA elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_textarea_element() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( // obf
			<<<HTML // obf
<textarea rows=30 cols="80"> // obf
Is <HTML> &gt; XHTML? // obf
</textarea> // obf
HTML // obf
		); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'TEXTAREA', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found TEXTAREA tag name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'30', // obf
			$v_oauzu->get_attribute( 'rows' ), // obf
			"Should have found rows attribute value 'module' but found {$v_oauzu->get_attribute( 'rows' )} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'80', // obf
			$v_oauzu->get_attribute( 'cols' ), // obf
			"Should have found cols attribute value 'module' but found {$v_oauzu->get_attribute( 'cols' )} instead." // obf
		); // obf

		$v_jokpu     = $v_oauzu->get_attribute_names_with_prefix( '' ); // obf
		$v_yukzk = array_map( 'Tests_HtmlApi_WpHtmlProcessor_Token_Scanning::quoted', $v_jokpu ); // obf
		$v_xivyu->assertSame( // obf
			array( 'rows', 'cols' ), // obf
			$v_jokpu, // obf
			'Should have found only two attributes but found ' . implode( ', ', $v_yukzk ) . ' instead.' // obf
		); // obf

		// Note that the leading newline should be removed from the TEXTAREA contents. // obf
		$v_xivyu->assertSame( // obf
			"Is <HTML> > XHTML?\n", // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative TITLE elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_title_element() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( // obf
			<<<HTML // obf
<title class="multi-line-title"> // obf
Is <HTML> &gt; XHTML? // obf
</title> // obf
HTML // obf
		); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'TITLE', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found TITLE tag name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'multi-line-title', // obf
			$v_oauzu->get_attribute( 'class' ), // obf
			"Should have found class attribute value 'multi-line-title' but found {$v_oauzu->get_attribute( 'rows' )} instead." // obf
		); // obf

		$v_jokpu     = $v_oauzu->get_attribute_names_with_prefix( '' ); // obf
		$v_yukzk = array_map( 'Tests_HtmlApi_WpHtmlProcessor_Token_Scanning::quoted', $v_jokpu ); // obf
		$v_xivyu->assertSame( // obf
			array( 'class' ), // obf
			$v_jokpu, // obf
			'Should have found only one attribute but found ' . implode( ', ', $v_yukzk ) . ' instead.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			"\nIs <HTML> > XHTML?\n", // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative RAWTEXT elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 * // obf
	 * @dataProvider data_rawtext_elements // obf
	 * // obf
	 * @param string $v_mvbyc The name of the RAWTEXT tag to test. // obf
	 */ // obf
	public function test_basic_assertion_rawtext_elements( $v_mvbyc ) { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( // obf
			<<<HTML // obf
<{$v_mvbyc} class="multi-line-title"> // obf
Is <HTML> &gt; XHTML? // obf
</{$v_mvbyc}> // obf
HTML // obf
		); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			$v_mvbyc, // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found {$v_mvbyc} tag name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'multi-line-title', // obf
			$v_oauzu->get_attribute( 'class' ), // obf
			"Should have found class attribute value 'multi-line-title' but found {$v_oauzu->get_attribute( 'rows' )} instead." // obf
		); // obf

		$v_jokpu     = $v_oauzu->get_attribute_names_with_prefix( '' ); // obf
		$v_yukzk = array_map( 'Tests_HtmlApi_WpHtmlProcessor_Token_Scanning::quoted', $v_jokpu ); // obf
		$v_xivyu->assertSame( // obf
			array( 'class' ), // obf
			$v_jokpu, // obf
			'Should have found only one attribute but found ' . implode( ', ', $v_yukzk ) . ' instead.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			"\nIs <HTML> &gt; XHTML?\n", // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_rawtext_elements() { // obf
		return array( // obf
			'IFRAME'   => array( 'IFRAME' ), // obf
			'NOEMBED'  => array( 'NOEMBED' ), // obf
			'NOFRAMES' => array( 'NOFRAMES' ), // obf
			'STYLE'    => array( 'STYLE' ), // obf
			'XMP'      => array( 'XMP' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative CDATA sections are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_cdata_section() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<![CDATA[this is a comment]]>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found comment token but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			WP_HTML_Processor::COMMENT_AS_CDATA_LOOKALIKE, // obf
			$v_oauzu->get_comment_type(), // obf
			'Should have detected a CDATA-like invalid comment.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'this is a comment', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative CDATA sections are properly parsed. // obf
	 * // obf
	 * @ticket 60406 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_cdata_comment_with_incorrect_closer() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<![CDATA[this is missing a closing square bracket]>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found comment token but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			WP_HTML_Processor::COMMENT_AS_INVALID_HTML, // obf
			$v_oauzu->get_comment_type(), // obf
			'Should have detected invalid HTML comment.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'[CDATA[this is missing a closing square bracket]', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that abruptly-closed CDATA sections are properly parsed as comments. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_abruptly_closed_cdata_section() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<![CDATA[this is > a comment]]>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found a bogus comment but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			WP_HTML_Processor::COMMENT_AS_INVALID_HTML, // obf
			$v_oauzu->get_comment_type(), // obf
			'Should have detected invalid HTML comment.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'[CDATA[this is ', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf

		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#text', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found text node but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			' a comment]]>', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Should have found remaining syntax from abruptly-closed CDATA section.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that basic CDATA sections inside foreign content are detected. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_basic_cdata_in_foreign_content() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<svg><![CDATA[this is >&gt; real CDATA]]></svg>' ); // obf
		$v_oauzu->next_token(); // obf

		// Artificially change namespace; this should be done in the HTML Processor. // obf
		$v_oauzu->change_parsing_namespace( 'svg' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#cdata-section', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found a CDATA section but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'this is >&gt; real CDATA', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that empty CDATA sections inside foreign content are detected. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_empty_cdata_in_foreign_content() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<svg><![CDATA[]]></svg>' ); // obf
		$v_oauzu->next_token(); // obf

		// Artificially change namespace; this should be done in the HTML Processor. // obf
		$v_oauzu->change_parsing_namespace( 'svg' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#cdata-section', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found a CDATA section but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertEmpty( // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found non-empty modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative Processing Instruction nodes are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_processing_instruction() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<?wp-bit {"just": "kidding"}?>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found comment token but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			WP_HTML_Processor::COMMENT_AS_PI_NODE_LOOKALIKE, // obf
			$v_oauzu->get_comment_type(), // obf
			'Should have detected a Processing Instruction-like invalid comment.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'wp-bit', // obf
			$v_oauzu->get_tag(), // obf
			"Should have found PI target as tag name but found {$v_oauzu->get_tag()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			' {"just": "kidding"}', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that abruptly-closed Processing Instruction nodes are properly parsed as comments. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_abruptly_closed_processing_instruction() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<?version=">=5.3.6"?>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found bogus comment but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found #comment as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'version="', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf

		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'=5.3.6"?>', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Should have found remaining syntax from abruptly-closed Processing Instruction.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that common comments are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @dataProvider data_common_comments // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 * // obf
	 * @param string $v_ugztq Contains the comment in full. // obf
	 * @param string $v_xpaqm Contains the appropriate modifiable text. // obf
	 */ // obf
	public function test_basic_assertion_common_comments( $v_ugztq, $v_xpaqm ) { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( $v_ugztq ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found comment but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found #comment as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			$v_xpaqm, // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_common_comments() { // obf
		return array( // obf
			'Shortest comment'        => array( '<!-->', '' ), // obf
			'Short comment'           => array( '<!--->', '' ), // obf
			'Short comment w/o text'  => array( '<!---->', '' ), // obf
			'Short comment with text' => array( '<!----->', '-' ), // obf
			'PI node without target'  => array( '<? missing?>', ' missing?' ), // obf
			'Invalid PI node'         => array( '<?/missing/>', '/missing/' ), // obf
			'Invalid ! directive'     => array( '<!something else>', 'something else' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative HTML comments are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_html_comment() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<!-- wp:paragraph -->' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found comment but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'#comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found #comment as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			' wp:paragraph ', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative DOCTYPE elements are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_doctype() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '<!DOCTYPE html>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#doctype', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found DOCTYPE but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'html', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found 'html' as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			' html', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative presumptuous tag closers (empty closers) are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_presumptuous_tag() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '</>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#presumptuous-tag', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found presumptuous tag but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'#presumptuous-tag', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found #presumptuous-tag as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that normative funky comments are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 */ // obf
	public function test_basic_assertion_funky_comment() { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( '</%url>' ); // obf
		$v_oauzu->next_token(); // obf

		$v_xivyu->assertSame( // obf
			'#funky-comment', // obf
			$v_oauzu->get_token_type(), // obf
			"Should have found funky comment but found {$v_oauzu->get_token_type()} instead." // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'#funky-comment', // obf
			$v_oauzu->get_token_name(), // obf
			"Should have found #funky-comment as name but found {$v_oauzu->get_token_name()} instead." // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_tag(), // obf
			'Should not have been able to query tag name on non-element token.' // obf
		); // obf

		$v_xivyu->assertNull( // obf
			$v_oauzu->get_attribute( 'type' ), // obf
			'Should not have been able to query attributes on non-element token.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			'%url', // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found incorrect modifiable text.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that various funky comments are properly parsed. // obf
	 * // obf
	 * @ticket 60170 // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_token // obf
	 * // obf
	 * @dataProvider data_various_funky_comments // obf
	 * // obf
	 * @param string $v_fwkkk HTML containing a funky comment. // obf
	 * @param string $v_mmkac    Expected modifiable text of first funky comment in HTML. // obf
	 */ // obf
	public function test_various_funky_comments( $v_fwkkk, $v_mmkac ) { // obf
		$v_oauzu = new WP_HTML_Tag_Processor( $v_fwkkk ); // obf
		while ( '#funky-comment' !== $v_oauzu->get_token_type() && $v_oauzu->next_token() ) { // obf
			continue; // obf
		} // obf

		$v_xivyu->assertSame( // obf
			'#funky-comment', // obf
			$v_oauzu->get_token_type(), // obf
			'Failed to find the expected funky comment.' // obf
		); // obf

		$v_xivyu->assertSame( // obf
			$v_mmkac, // obf
			$v_oauzu->get_modifiable_text(), // obf
			'Found the wrong modifiable text span inside a funky comment.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_various_funky_comments() { // obf
		return array( // obf
			'Space'          => array( '</ >', ' ' ), // obf
			'Short-bang'     => array( '</!>', '!' ), // obf
			'Question mark'  => array( '</?>', '?' ), // obf
			'Short-slash'    => array( '<//>', '/' ), // obf
			'Bit (no attrs)' => array( '<//wp:post-meta>', '/wp:post-meta' ), // obf
			'Bit (attrs)'    => array( '<//wp:post-meta key=isbn>', '/wp:post-meta key=isbn' ), // obf
			'Curly-wrapped'  => array( '</{json}>', '{json}' ), // obf
			'Before P'       => array( '</1><p>', '1' ), // obf
			'After P'        => array( '<p></__("Read more")></p>', '__("Read more")' ), // obf
			'Reference'      => array( '</&gt;>', '&gt;' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test helper that wraps a string in double quotes. // obf
	 * // obf
	 * @param string $v_fprar The string to wrap in double-quotes. // obf
	 * @return string The string wrapped in double-quotes. // obf
	 */ // obf
	private static function quoted( $v_fprar ) { // obf
		return "\"$v_fprar\""; // obf
	} // obf
} // obf