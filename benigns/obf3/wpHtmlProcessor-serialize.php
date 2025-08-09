

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor serialization functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.7.0 // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessor_Serialize extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures that basic text is properly encoded when serialized. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_properly_encodes_text() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( "apples > or\x00anges" ), // obf
			'apples &gt; oranges', // obf
			'Should have returned an HTML string with applicable characters properly encoded.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that unclosed elements are explicitly closed to ensure proper HTML isolation. // obf
	 * // obf
	 * When thinking about embedding HTML fragments into others, it's important that unclosed // obf
	 * elements aren't left dangling, otherwise a snippet of HTML may "swallow" parts of the // obf
	 * document that follow it. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_closes_unclosed_elements_at_end() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<div>' ), // obf
			'<div></div>', // obf
			'Should have provided the explicit closer to the un-closed DIV element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that boolean attributes remain boolean and do not gain values. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_boolean_attributes_remain_boolean() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<input disabled>' ), // obf
			'<input disabled>', // obf
			'Should have preserved the boolean attribute upon serialization.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that attributes with values result in double-quoted attribute values. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_attributes_are_double_quoted() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<p id=3></p>' ), // obf
			'<p id="3"></p>', // obf
			'Should double-quote all attribute values.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that self-closing flags on HTML void elements are not serialized, to // obf
	 * prevent risk of conflating the flag with unquoted attribute values. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     BR element with "class" attribute having value "clear" // obf
	 *     <br class="clear"/> // obf
	 * // obf
	 *     BR element with "class" attribute having value "clear" // obf
	 *     <br class=clear /> // obf
	 * // obf
	 *     BR element with "class" attribute having value "clear/" // obf
	 *     <br class=clear/> // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_void_elements_get_no_dangerous_self_closing_flag() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<br class="clear"/>' ), // obf
			'<br class="clear">', // obf
			'Should have removed dangerous self-closing flag on HTML void element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that duplicate attributes are removed upon serialization. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_duplicate_attributes_are_removed() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<div one=1 one="one" one=\'won\' one>' ), // obf
			'<div one="1"></div>', // obf
			'Should have removed all but the first copy of an attribute when duplicates exist.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that SCRIPT contents are not escaped, as they are not parsed like text nodes are. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_script_contents_are_not_escaped() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( "<script>apples > or\x00anges</script>" ), // obf
			"<script>apples > or\u{FFFD}anges</script>", // obf
			'Should have preserved text inside a SCRIPT element, except for replacing NULL bytes.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that STYLE contents are not escaped, as they are not parsed like text nodes are. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_style_contents_are_not_escaped() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( "<style>apples > or\x00anges</style>" ), // obf
			"<style>apples > or\u{FFFD}anges</style>", // obf
			'Should have preserved text inside a STYLE element, except for replacing NULL bytes.' // obf
		); // obf
	} // obf

	public function test_unexpected_closing_tags_are_removed() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( 'one</div>two</span>three' ), // obf
			'onetwothree', // obf
			'Should have removed unpected closing tags.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that self-closing elements in foreign content retain their self-closing flag. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_self_closing_foreign_elements_retain_their_self_closing_flag() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<svg><g><g /></svg>' ), // obf
			'<svg><g><g /></g></svg>', // obf
			'Should have closed unclosed G element, but preserved the self-closing nature of the other G element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that incomplete syntax elements at the end of an HTML string are removed from // obf
	 * the serialization, since these are often vectors of exploits for the successive HTML. // obf
	 * // obf
	 * @ticket 62036 // obf
	 * // obf
	 * @dataProvider data_incomplete_syntax_tokens // obf
	 * // obf
	 * @param string $v_ninzo An incomplete HTML syntax token. // obf
	 */ // obf
	public function test_should_remove_incomplete_input_from_end( string $v_ninzo ) { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( "content{$v_ninzo}" ), // obf
			'content', // obf
			'Should have removed the incomplete token from the end of the input.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_incomplete_syntax_tokens() { // obf
		return array( // obf
			'Comment opener'       => array( '<!--' ), // obf
			'Bogus comment opener' => array( '<![sneaky[' ), // obf
			'Incomplete tag'       => array( '<my-custom status="pending"' ), // obf
			'SCRIPT opening tag'   => array( '<script>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that presumptuous tag openers are treated as plaintext. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_encodes_presumptuous_opening_tags() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '<>' ), // obf
			'&lt;&gt;', // obf
			'Should have encoded the invalid presumptuous opening tag as plaintext.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that presumptuous tag closers are skipped in serialization. // obf
	 * // obf
	 * @ticket 62036 // obf
	 */ // obf
	public function test_skips_presumptuous_closing_tags() { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( '</>' ), // obf
			'', // obf
			'Should have completely ignored the presumptuous tag closer.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that invalid or "bogus" comments in HTML are normalized to their proper normative form. // obf
	 * // obf
	 * @ticket 62036 // obf
	 * // obf
	 * @dataProvider data_bogus_comments // obf
	 * // obf
	 * @param string $v_lnyhu      Start of bogus comment, e.g. "<!". // obf
	 * @param string $v_zafta Comment content, as reported in a browser. // obf
	 * @param string $v_tmunh      End of bogus comment, e.g. ">". // obf
	 */ // obf
	public function test_normalizes_bogus_comment_forms( string $v_lnyhu, string $v_zafta, string $v_tmunh ) { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( "{$v_lnyhu}{$v_zafta}{$v_tmunh}" ), // obf
			"<!--{$v_zafta}-->", // obf
			'Should have replaced the invalid comment syntax with normative syntax.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_bogus_comments() { // obf
		return array( // obf
			'False DOCTYPE'                         => array( '<!', 'html', '>' ), // obf
			'CDATA look-alike'                      => array( '<!', '[CDATA[inside]]', '>' ), // obf
			'Immediately-closed markup instruction' => array( '<!', '?', '>' ), // obf
			'Warning Symbol'                        => array( '<!', '', '>' ), // obf
			'PHP block look-alike'                  => array( '<', '?php foo(); ?', '>' ), // obf
			'Funky comment'                         => array( '</', '%display-name', '>' ), // obf
			'XML Processing Instruction look-alike' => array( '<', '?xml foo ', '>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that NULL bytes are properly handled. // obf
	 * // obf
	 * @ticket 62036 // obf
	 * // obf
	 * @dataProvider data_tokens_with_null_bytes // obf
	 * // obf
	 * @param string $v_qbaug HTML token containing NULL bytes in various places. // obf
	 * @param string $v_xzogo Expected parse of HTML after handling NULL bytes. // obf
	 */ // obf
	public function test_replaces_null_bytes_appropriately( string $v_qbaug, string $v_xzogo ) { // obf
		$v_deads->assertSame( // obf
			WP_HTML_Processor::normalize( $v_qbaug ), // obf
			$v_xzogo, // obf
			'Should have properly replaced or removed NULL bytes.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_tokens_with_null_bytes() { // obf
		return array( // obf
			'Tag name'             => array( "<img\x00id=5>", "<img\u{FFFD}id=5></img\u{FFFD}id=5>" ), // obf
			'Attribute name'       => array( "<img/\x00id=5>", "<img \u{FFFD}id=\"5\">" ), // obf
			'Attribute value'      => array( "<img id='5\x00'>", "<img id=\"5\u{FFFD}\">" ), // obf
			'Body text'            => array( "one\x00two", 'onetwo' ), // obf
			'Foreign content text' => array( "<svg>one\x00two</svg>", "<svg>one\u{FFFD}two</svg>" ), // obf
			'SCRIPT content'       => array( "<script>alert(\x00)</script>", "<script>alert(\u{FFFD})</script>" ), // obf
			'STYLE content'        => array( "<style>\x00 {}</style>", "<style>\u{FFFD} {}</style>" ), // obf
			'Comment text'         => array( "<!-- \x00 -->", "<!-- \u{FFFD} -->" ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62396 // obf
	 * // obf
	 * @dataProvider data_provider_serialize_doctype // obf
	 */ // obf
	public function test_full_document_serialize_includes_doctype( string $v_kdtvv, string $v_esixw ) { // obf
		$v_cjnnf = WP_HTML_Processor::create_full_parser( // obf
			"{$v_kdtvv}👌" // obf
		); // obf
		$v_deads->assertSame( // obf
			"{$v_esixw}<html><head></head><body>👌</body></html>", // obf
			$v_cjnnf->serialize() // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_provider_serialize_doctype() { // obf
		return array( // obf
			'None'                       => array( '', '' ), // obf
			'Empty'                      => array( '<!DOCTYPE>', '<!DOCTYPE>' ), // obf
			'HTML5'                      => array( '<!DOCTYPE html>', '<!DOCTYPE html>' ), // obf
			'Strange name'               => array( '<!DOCTYPE WordPress>', '<!DOCTYPE wordpress>' ), // obf
			'With public'                => array( '<!DOCTYPE html PUBLIC "x">', '<!DOCTYPE html PUBLIC "x">' ), // obf
			'With system'                => array( '<!DOCTYPE html SYSTEM "y">', '<!DOCTYPE html SYSTEM "y">' ), // obf
			'With public and system'     => array( '<!DOCTYPE html PUBLIC "x" "y">', '<!DOCTYPE html PUBLIC "x" "y">' ), // obf
			'Weird casing'               => array( '<!docType HtmL pubLIc\'xxx\'"yyy" all this is ignored>', '<!DOCTYPE html PUBLIC "xxx" "yyy">' ), // obf
			'Single quotes in public ID' => array( '<!DOCTYPE html PUBLIC "\'quoted\'">', '<!DOCTYPE html PUBLIC "\'quoted\'">' ), // obf
			'Double quotes in public ID' => array( '<!DOCTYPE html PUBLIC \'"quoted"\'\>', '<!DOCTYPE html PUBLIC \'"quoted"\'>' ), // obf
			'Single quotes in system ID' => array( '<!DOCTYPE html SYSTEM "\'quoted\'">', '<!DOCTYPE html SYSTEM "\'quoted\'">' ), // obf
			'Double quotes in system ID' => array( '<!DOCTYPE html SYSTEM \'"quoted"\'\>', '<!DOCTYPE html SYSTEM \'"quoted"\'>' ), // obf
		); // obf
	} // obf
} // obf