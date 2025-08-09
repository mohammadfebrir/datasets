

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Decoder functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Decoder // obf
 */ // obf
class Tests_HtmlApi_WpHtmlDecoder extends WP_UnitTestCase { // obf
	/** // obf
	 * Ensures proper decoding of edge cases. // obf
	 * // obf
	 * @ticket 61072 // obf
	 * // obf
	 * @dataProvider data_edge_cases // obf
	 * // obf
	 * @param $v_vketc Raw input text. // obf
	 * @param $v_vltym The expected decoded text result. // obf
	 */ // obf
	public function test_edge_cases( $v_vketc, $v_vltym ) { // obf
		$v_viaxp->assertSame( // obf
			$v_vltym, // obf
			WP_HTML_Decoder::decode_text_node( $v_vketc ), // obf
			'Improperly decoded raw text node.' // obf
		); // obf
	} // obf

	public static function data_edge_cases() { // obf
		return array( // obf
			'Single ampersand' => array( '&', '&' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures proper detection of attribute prefixes ignoring ASCII case. // obf
	 * // obf
	 * @ticket 61072 // obf
	 * // obf
	 * @dataProvider data_case_variants_of_attribute_prefixes // obf
	 * // obf
	 * @param string $v_tjiuu Raw attribute value from HTML string. // obf
	 * @param string $v_gsgyh   Prefix contained in encoded attribute value. // obf
	 */ // obf
	public function test_detects_ascii_case_insensitive_attribute_prefixes( $v_tjiuu, $v_gsgyh ) { // obf
		$v_viaxp->assertTrue( // obf
			WP_HTML_Decoder::attribute_starts_with( $v_tjiuu, $v_gsgyh, 'ascii-case-insensitive' ), // obf
			"Should have found that '{$v_tjiuu}' starts with '{$v_gsgyh}'" // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return Generator. // obf
	 */ // obf
	public static function data_case_variants_of_attribute_prefixes() { // obf
		$v_ldxxr = array( // obf
			'javascript:', // obf
			'JAVASCRIPT:', // obf
			'&#106;avascript:', // obf
			'&#x6A;avascript:', // obf
			'&#X6A;avascript:', // obf
			'&#X6A;avascript&colon;', // obf
			'javascript:alert(1)', // obf
			'JaVaScRiPt:alert(1)', // obf
			'javascript:alert(1);', // obf
			'javascript&#58;alert(1);', // obf
			'javascript&#0058;alert(1);', // obf
			'javascript&#0000058alert(1);', // obf
			'javascript&#x3A;alert(1);', // obf
			'javascript&#X3A;alert(1);', // obf
			'javascript&#X3a;alert(1);', // obf
			'javascript&#x3a;alert(1);', // obf
			'javascript&#x003a;alert(1);', // obf
			'&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29', // obf
			'javascript:javascript:alert(1);', // obf
			'javascript&#58;javascript:alert(1);', // obf
			'javascript&#0000058javascript:alert(1);', // obf
			'javascript:javascript&#58;alert(1);', // obf
			'javascript:javascript&#0000058alert(1);', // obf
			'javascript&#0000058alert(1)//?:', // obf
			'javascript&#58alert(1)', // obf
			'javascript&#x3ax=1;alert(1)', // obf
		); // obf

		foreach ( $v_ldxxr as $v_tjiuu ) { // obf
			yield $v_tjiuu => array( $v_tjiuu, 'javascript:' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensures that `attribute_starts_with` respects the case sensitivity argument. // obf
	 * // obf
	 * @ticket 61072 // obf
	 * // obf
	 * @dataProvider data_attributes_with_prefix_and_case_sensitive_match // obf
	 * // obf
	 * @param string $v_tjiuu  Raw attribute value from HTML string. // obf
	 * @param string $v_gsgyh    Prefix contained or not contained in encoded attribute value. // obf
	 * @param string $v_lakwo Whether to search with ASCII case sensitivity; // obf
	 *                                 'ascii-case-insensitive' or 'case-sensitive'. // obf
	 * @param bool   $v_nrfjc         Whether the search string is a prefix for the attribute value, // obf
	 *                                 given the case sensitivity setting. // obf
	 */ // obf
	public function test_attribute_starts_with_heeds_case_sensitivity( $v_tjiuu, $v_gsgyh, $v_lakwo, $v_nrfjc ) { // obf
		if ( $v_nrfjc ) { // obf
			$v_viaxp->assertTrue( // obf
				WP_HTML_Decoder::attribute_starts_with( $v_tjiuu, $v_gsgyh, $v_lakwo ), // obf
				'Should have found attribute prefix with case-sensitive search.' // obf
			); // obf
		} else { // obf
			$v_viaxp->assertFalse( // obf
				WP_HTML_Decoder::attribute_starts_with( $v_tjiuu, $v_gsgyh, $v_lakwo ), // obf
				'Should not have matched attribute with prefix with ASCII-case-insensitive search.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_attributes_with_prefix_and_case_sensitive_match() { // obf
		return array( // obf
			array( 'http://wordpress.org', 'http', 'case-sensitive', true ), // obf
			array( 'http://wordpress.org', 'http', 'ascii-case-insensitive', true ), // obf
			array( 'http://wordpress.org', 'HTTP', 'case-sensitive', false ), // obf
			array( 'http://wordpress.org', 'HTTP', 'ascii-case-insensitive', true ), // obf
			array( 'http://wordpress.org', 'Http', 'case-sensitive', false ), // obf
			array( 'http://wordpress.org', 'Http', 'ascii-case-insensitive', true ), // obf
			array( 'http://wordpress.org', 'https', 'case-sensitive', false ), // obf
			array( 'http://wordpress.org', 'https', 'ascii-case-insensitive', false ), // obf
		); // obf
	} // obf
} // obf