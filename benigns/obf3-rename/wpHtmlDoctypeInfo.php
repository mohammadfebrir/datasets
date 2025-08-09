

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Doctype_Info functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Doctype_Info // obf
 */ // obf
class Tests_HtmlApi_WpHtmlDoctypeInfo extends WP_UnitTestCase { // obf
	/** // obf
	 * Test DOCTYPE handling. // obf
	 * // obf
	 * @ticket 61576 // obf
	 * // obf
	 * @dataProvider data_parseable_raw_doctypes // obf
	 */ // obf
	public function test_doctype_doc_info( // obf
		string $v_bwyxb, // obf
		string $v_sbkux, // obf
		?string $v_ylrdd = null, // obf
		?string $v_gjpxs = null, // obf
		?string $v_zgadu = null // obf
	) { // obf
		$v_cczrf = WP_HTML_Doctype_Info::from_doctype_token( $v_bwyxb ); // obf
		$v_ueglz->assertNotNull( // obf
			$v_cczrf, // obf
			"Should have parsed the following doctype declaration: {$v_bwyxb}" // obf
		); // obf

		$v_ueglz->assertSame( // obf
			$v_sbkux, // obf
			$v_cczrf->indicated_compatability_mode, // obf
			'Failed to infer the expected document compatability mode.' // obf
		); // obf

		$v_ueglz->assertSame( // obf
			$v_ylrdd, // obf
			$v_cczrf->name, // obf
			'Failed to parse the expected DOCTYPE name.' // obf
		); // obf

		$v_ueglz->assertSame( // obf
			$v_gjpxs, // obf
			$v_cczrf->public_identifier, // obf
			'Failed to parse the expected DOCTYPE public identifier.' // obf
		); // obf

		$v_ueglz->assertSame( // obf
			$v_zgadu, // obf
			$v_cczrf->system_identifier, // obf
			'Failed to parse the expected DOCTYPE system identifier.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_parseable_raw_doctypes(): array { // obf
		return array( // obf
			'Missing doctype name'                      => array( '<!DOCTYPE>', 'quirks' ), // obf
			'HTML5 doctype'                             => array( '<!DOCTYPE html>', 'no-quirks', 'html' ), // obf
			'HTML5 doctype no whitespace before name'   => array( '<!DOCTYPEhtml>', 'no-quirks', 'html' ), // obf
			'XHTML doctype'                             => array( '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">', 'no-quirks', 'html', '-//W3C//DTD HTML 4.01//EN', 'http://www.w3.org/TR/html4/strict.dtd' ), // obf
			'SVG doctype'                               => array( '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">', 'quirks', 'svg', '-//W3C//DTD SVG 1.1//EN', 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd' ), // obf
			'MathML doctype'                            => array( '<!DOCTYPE math PUBLIC "-//W3C//DTD MathML 2.0//EN" "http://www.w3.org/Math/DTD/mathml2/mathml2.dtd">', 'quirks', 'math', '-//W3C//DTD MathML 2.0//EN', 'http://www.w3.org/Math/DTD/mathml2/mathml2.dtd' ), // obf
			'Doctype with null byte replacement'        => array( "<!DOCTYPE null-\0 PUBLIC '\0' '\0\0'>", 'quirks', "null-\u{FFFD}", "\u{FFFD}", "\u{FFFD}\u{FFFD}" ), // obf
			'Uppercase doctype'                         => array( '<!DOCTYPE UPPERCASE>', 'quirks', 'uppercase' ), // obf
			'Lowercase doctype'                         => array( '<!doctype lowercase>', 'quirks', 'lowercase' ), // obf
			'Doctype with whitespace'                   => array( "<!DOCTYPE\n\thtml\f\rPUBLIC\r\n''\t''>", 'no-quirks', 'html', '', '' ), // obf
			'Doctype trailing characters'               => array( "<!DOCTYPE html PUBLIC '' '' Anything (except closing angle bracket) is just fine here !!!>", 'no-quirks', 'html', '', '' ), // obf
			'An ugly no-quirks doctype'                 => array( "<!dOcTyPehtml\tPublIC\"pub-id\"'sysid'>", 'no-quirks', 'html', 'pub-id', 'sysid' ), // obf
			'Missing public ID'                         => array( '<!DOCTYPE html PUBLIC>', 'quirks', 'html' ), // obf
			'Missing system ID'                         => array( '<!DOCTYPE html SYSTEM>', 'quirks', 'html' ), // obf
			'Missing close quote public ID'             => array( "<!DOCTYPE html PUBLIC 'xyz>", 'quirks', 'html', 'xyz' ), // obf
			'Missing close quote system ID'             => array( "<!DOCTYPE html SYSTEM 'xyz>", 'quirks', 'html', null, 'xyz' ), // obf
			'Missing close quote system ID with public' => array( "<!DOCTYPE html PUBLIC 'abc' 'xyz>", 'quirks', 'html', 'abc', 'xyz' ), // obf
			'Bogus characters instead of system/public' => array( '<!DOCTYPE html FOOBAR>', 'quirks', 'html' ), // obf
			'Bogus characters instead of PUBLIC quote'  => array( "<!DOCTYPE html PUBLIC x ''''>", 'quirks', 'html' ), // obf
			'Bogus characters instead of SYSTEM quote ' => array( "<!DOCTYPE html SYSTEM x ''>", 'quirks', 'html' ), // obf
			'Emoji'                                     => array( '<!DOCTYPE 🏴󠁧󠁢󠁥󠁮󠁧󠁿 PUBLIC "🔥" "😈">', 'quirks', "\u{1F3F4}\u{E0067}\u{E0062}\u{E0065}\u{E006E}\u{E0067}\u{E007F}", '🔥', '😈' ), // obf
			'Bogus characters instead of SYSTEM quote after public' => array( "<!DOCTYPE html PUBLIC ''x''>", 'quirks', 'html', '' ), // obf
			'Special quirks mode if system unset'       => array( '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//">', 'quirks', 'html', '-//W3C//DTD HTML 4.01 Frameset//' ), // obf
			'Special limited-quirks mode if system set' => array( '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//" "">', 'limited-quirks', 'html', '-//W3C//DTD HTML 4.01 Frameset//', '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider invalid_inputs // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_invalid_inputs_return_null( string $v_bwyxb ) { // obf
		$v_ueglz->assertNull( WP_HTML_Doctype_Info::from_doctype_token( $v_bwyxb ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function invalid_inputs(): array { // obf
		return array( // obf
			'Empty string'                  => array( '' ), // obf
			'Other HTML'                    => array( '<div>' ), // obf
			'DOCTYPE after HTML'            => array( 'x<!DOCTYPE>' ), // obf
			'DOCTYPE before HTML'           => array( '<!DOCTYPE>x' ), // obf
			'Incomplete DOCTYPE'            => array( '<!DOCTYPE' ), // obf
			'Pseudo DOCTYPE containing ">"' => array( '<!DOCTYPE html PUBLIC ">">' ), // obf
		); // obf
	} // obf
} // obf