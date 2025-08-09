

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessorBreadcrumbs extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::step // obf
	 * // obf
	 * @dataProvider data_single_tag_of_supported_elements // obf
	 * // obf
	 * @param string $v_ezpfk     HTML with at least one tag to scan. // obf
	 * @param string $v_dzeay Name of first tag in HTML (because HTML treats IMAGE as IMG this may not match the HTML). // obf
	 */ // obf
	public function test_navigates_into_normative_html_for_supported_elements( $v_ezpfk, $v_dzeay ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		$v_cvuql->assertTrue( $v_pyeir->next_token(), "Failed to step into supported {$v_dzeay} element." ); // obf
		$v_cvuql->assertSame( $v_dzeay, $v_pyeir->get_tag(), "Misread {$v_dzeay} as a {$v_pyeir->get_tag()} element." ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_single_tag_of_supported_elements() { // obf
		$v_hgccn = array( // obf
			'A', // obf
			'ABBR', // obf
			'ACRONYM', // Neutralized. // obf
			'ADDRESS', // obf
			'APPLET', // Deprecated. // obf
			'AREA', // obf
			'ARTICLE', // obf
			'ASIDE', // obf
			'AUDIO', // obf
			'B', // obf
			'BASE', // obf
			'BDI', // obf
			'BDO', // obf
			'BGSOUND', // Deprectated. // obf
			'BIG', // obf
			'BLINK', // Deprecated. // obf
			'BR', // obf
			'BUTTON', // obf
			'CANVAS', // obf
			'CENTER', // Neutralized. // obf
			'CITE', // obf
			'CODE', // obf
			'DATA', // obf
			'DD', // obf
			'DATALIST', // obf
			'DFN', // obf
			'DEL', // obf
			'DETAILS', // obf
			'DIALOG', // obf
			'DIR', // obf
			'DIV', // obf
			'DL', // obf
			'DT', // obf
			'EM', // obf
			'EMBED', // obf
			'FIELDSET', // obf
			'FIGCAPTION', // obf
			'FIGURE', // obf
			'FONT', // obf
			'FORM', // obf
			'FOOTER', // obf
			'H1', // obf
			'H2', // obf
			'H3', // obf
			'H4', // obf
			'H5', // obf
			'H6', // obf
			'HEADER', // obf
			'HGROUP', // obf
			'HR', // obf
			'I', // obf
			'IMG', // obf
			'INS', // obf
			'LI', // obf
			'LINK', // obf
			'ISINDEX', // Deprecated. // obf
			'KBD', // obf
			'KEYGEN', // Deprecated. // obf
			'LABEL', // obf
			'LEGEND', // obf
			'LINK', // obf
			'LISTING', // Deprecated. // obf
			'MAIN', // obf
			'MAP', // obf
			'MARK', // obf
			'MARQUEE', // Deprecated. // obf
			'MENU', // obf
			'META', // obf
			'METER', // obf
			'MULTICOL', // Deprecated. // obf
			'NAV', // obf
			'NEXTID', // Deprecated. // obf
			'NOBR', // Neutralized. // obf
			'NOEMBED', // Neutralized. // obf
			'NOFRAMES', // Neutralized. // obf
			'NOSCRIPT', // obf
			'OBJECT', // obf
			'OL', // obf
			'OUTPUT', // obf
			'P', // obf
			'PICTURE', // obf
			'PROGRESS', // obf
			'Q', // obf
			'RB', // Neutralized. // obf
			'RP', // obf
			'RT', // obf
			'RTC', // Neutralized. // obf
			'RUBY', // obf
			'SAMP', // obf
			'SCRIPT', // obf
			'SEARCH', // obf
			'SECTION', // obf
			'SLOT', // obf
			'SMALL', // obf
			'SPACER', // Deprecated. // obf
			'SPAN', // obf
			'STRIKE', // obf
			'STRONG', // obf
			'STYLE', // obf
			'SUB', // obf
			'SUMMARY', // obf
			'SUP', // obf
			'TABLE', // obf
			'TEXTAREA', // obf
			'TIME', // obf
			'TITLE', // obf
			'TT', // obf
			'U', // obf
			'UL', // obf
			'VAR', // obf
			'VIDEO', // obf
			'XMP', // Deprecated, use PRE instead. // obf
		); // obf

		$v_asecm = array(); // obf
		foreach ( $v_hgccn as $v_dzeay ) { // obf
			$v_vyfle = in_array( $v_dzeay, array( 'NOEMBED', 'NOFRAMES', 'SCRIPT', 'STYLE', 'TEXTAREA', 'TITLE', 'XMP' ), true ) // obf
				? "</{$v_dzeay}>" // obf
				: ''; // obf

			$v_asecm[ $v_dzeay ] = array( "<{$v_dzeay}>{$v_vyfle}", $v_dzeay ); // obf
		} // obf

		$v_asecm['IMAGE (treated as an IMG)'] = array( '<image>', 'IMG' ); // obf

		return $v_asecm; // obf
	} // obf

	/** // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @dataProvider data_unsupported_markup // obf
	 * // obf
	 * @param string $v_ezpfk HTML containing unsupported markup. // obf
	 */ // obf
	public function test_fails_when_encountering_unsupported_markup( $v_ezpfk, $v_xqewl ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		while ( $v_pyeir->next_token() && null === $v_pyeir->get_attribute( 'supported' ) ) { // obf
			continue; // obf
		} // obf

		$v_cvuql->assertNull( // obf
			$v_pyeir->get_last_error(), // obf
			'Bailed on unsupported input before finding supported checkpoint: check test code.' // obf
		); // obf

		$v_cvuql->assertTrue( $v_pyeir->get_attribute( 'supported' ), 'Did not find required supported element.' ); // obf
		$v_pyeir->next_token(); // obf
		$v_cvuql->assertNotNull( $v_pyeir->get_last_error(), "Didn't properly reject unsupported markup: {$v_xqewl}" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_unsupported_markup() { // obf
		return array( // obf
			'A with formatting following unclosed A' => array( // obf
				'<a><strong>Click <span supported><a unsupported><big>Here</big></a></strong></a>', // obf
				'Unclosed formatting requires complicated reconstruction.', // obf
			), // obf

			'A after unclosed A inside DIV'          => array( // obf
				'<a><div supported><a unsupported></div></a>', // obf
				'A is a formatting element, which requires more complicated reconstruction.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_html_target_with_breadcrumbs // obf
	 * // obf
	 * @param string $v_ezpfk        HTML string with tags in it, one of which contains the "target" attribute. // obf
	 * @param array  $v_japex Breadcrumbs of element with "target" attribute set. // obf
	 * @param int    $v_mhqdr           How many breadcrumb matches to scan through in order to find "target" element. // obf
	 */ // obf
	public function test_finds_correct_tag_given_breadcrumbs( $v_ezpfk, $v_japex, $v_mhqdr ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		$v_pyeir->next_tag( // obf
			array( // obf
				'breadcrumbs'  => $v_japex, // obf
				'match_offset' => $v_mhqdr, // obf
			) // obf
		); // obf

		$v_cvuql->assertNotNull( $v_pyeir->get_tag(), 'Failed to find target node.' ); // obf
		$v_cvuql->assertTrue( $v_pyeir->get_attribute( 'target' ), "Found {$v_pyeir->get_tag()} element didn't contain the necessary 'target' attribute." ); // obf
	} // obf

	/** // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::get_breadcrumbs // obf
	 * // obf
	 * @dataProvider data_html_target_with_breadcrumbs // obf
	 * // obf
	 * @param string $v_ezpfk        HTML string with tags in it, one of which contains the "target" attribute. // obf
	 * @param array  $v_japex Breadcrumbs of element with "target" attribute set. // obf
	 * @param int    $v_qtnbb   Not used in this test but provided in the dataset for other tests. // obf
	 */ // obf
	public function test_reports_correct_breadcrumbs_for_html( $v_ezpfk, $v_japex, $v_qtnbb ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		while ( $v_pyeir->next_tag() && null === $v_pyeir->get_attribute( 'target' ) ) { // obf
			continue; // obf
		} // obf

		$v_cvuql->assertNotNull( $v_pyeir->get_tag(), 'Failed to find the target node.' ); // obf
		$v_cvuql->assertSame( $v_japex, $v_pyeir->get_breadcrumbs(), 'Found the wrong path from the root of the HTML document to the target node.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_html_target_with_breadcrumbs() { // obf
		return array( // obf
			'Simple IMG tag'                        => array( '<img target>', array( 'HTML', 'BODY', 'IMG' ), 1 ), // obf
			'Two sibling IMG tags'                  => array( '<img><img target>', array( 'HTML', 'BODY', 'IMG' ), 2 ), // obf
			'Three sibling IMG tags, an IMAGE in last place' => array( '<img><img><image target>', array( 'HTML', 'BODY', 'IMG' ), 3 ), // obf
			'IMG inside a DIV'                      => array( '<div><img target></div>', array( 'HTML', 'BODY', 'DIV', 'IMG' ), 1 ), // obf
			'DIV inside a DIV'                      => array( '<div><div target></div>', array( 'HTML', 'BODY', 'DIV', 'DIV' ), 1 ), // obf
			'IMG inside many DIVS'                  => array( '<div><div><div><div><img target></div></div></div></div>', array( 'HTML', 'BODY', 'DIV', 'DIV', 'DIV', 'DIV', 'IMG' ), 1 ), // obf
			'DIV inside DIV after IMG'              => array( '<div><img><div target></div></div>', array( 'HTML', 'BODY', 'DIV', 'DIV' ), 1 ), // obf
			'IMG after DIV'                         => array( '<div></div><img target>', array( 'HTML', 'BODY', 'IMG' ), 1 ), // obf
			'IMG after two DIVs'                    => array( '<div></div><div></div><img target>', array( 'HTML', 'BODY', 'IMG' ), 1 ), // obf
			'IMG after two DIVs with nesting'       => array( '<div><div><img></div></div><div></div><img target>', array( 'HTML', 'BODY', 'IMG' ), 1 ), // obf
			'IMG after invalid DIV closer'          => array( '</div><img target>', array( 'HTML', 'BODY', 'IMG' ), 1 ), // obf
			'EM inside DIV'                         => array( '<div>The weather is <em target>beautiful</em>.</div>', array( 'HTML', 'BODY', 'DIV', 'EM' ), 1 ), // obf
			'EM after closed EM'                    => array( '<em></em><em target></em>', array( 'HTML', 'BODY', 'EM' ), 2 ), // obf
			'EM after closed EMs'                   => array( '<em></em><em><em></em></em><em></em><em></em><em target></em>', array( 'HTML', 'BODY', 'EM' ), 5 ), // obf
			'EM after unclosed EM'                  => array( '<em><em target></em>', array( 'HTML', 'BODY', 'EM', 'EM' ), 1 ), // obf
			'EM after unclosed EM after DIV'        => array( '<em><div><em target>', array( 'HTML', 'BODY', 'EM', 'DIV', 'EM' ), 1 ), // obf
			// This should work for all formatting elements, but if two work, the others probably do too. // obf
			'CODE after unclosed CODE after DIV'    => array( '<code><div><code target>', array( 'HTML', 'BODY', 'CODE', 'DIV', 'CODE' ), 1 ), // obf
			'P after unclosed P'                    => array( '<p><p target>', array( 'HTML', 'BODY', 'P' ), 2 ), // obf
			'Unclosed EM inside P after unclosed P' => array( '<em><p><p><em target>', array( 'HTML', 'BODY', 'EM', 'P', 'EM' ), 1 ), // obf
			'P after closed P'                      => array( '<p><i>something</i></p><p target>This one</p>', array( 'HTML', 'BODY', 'P' ), 2 ), // obf
			'A after unclosed A'                    => array( '<a><a target>', array( 'HTML', 'BODY', 'A' ), 2 ), // obf
			'A after unclosed A, after a P'         => array( '<p><a><a target>', array( 'HTML', 'BODY', 'P', 'A' ), 2 ), // obf
			// This one adds a test at a deep stack depth to ensure things work for situations beyond short test docs. // obf
			'Large HTML document with deep P'       => array( // obf
				'<div><div><div><div><div><div><div><div><p></p><p></p><p><div><strong><em><code></code></em></strong></div></p></div></div></div></div></div></div></div></div><div><div><div><div><div><div><div><div><p></p><p></p><p><div><strong><em><code target></code></em></strong></div></p></div></div></div></div></div></div></div></div>', // obf
				array( 'HTML', 'BODY', 'DIV', 'DIV', 'DIV', 'DIV', 'DIV', 'DIV', 'DIV', 'DIV', 'DIV', 'STRONG', 'EM', 'CODE' ), // obf
				2, // obf
			), // obf
			'MAIN inside MAIN inside SPAN'          => array( '<span><main><main target>', array( 'HTML', 'BODY', 'SPAN', 'MAIN', 'MAIN' ), 1 ), // obf
			'MAIN next to unclosed P'               => array( '<p><main target>', array( 'HTML', 'BODY', 'MAIN' ), 1 ), // obf
			'LI after unclosed LI'                  => array( '<li>one<li>two<li target>three', array( 'HTML', 'BODY', 'LI' ), 3 ), // obf
			'LI in UL in LI'                        => array( '<ul><li>one<ul><li target>two', array( 'HTML', 'BODY', 'UL', 'LI', 'UL', 'LI' ), 1 ), // obf
			'DD and DT mutually close, LI self-closes (dt 2)' => array( '<dd><dd><dt><dt target><dd><li><li>', array( 'HTML', 'BODY', 'DT' ), 2 ), // obf
			'DD and DT mutually close, LI self-closes (dd 3)' => array( '<dd><dd><dt><dt><dd target><li><li>', array( 'HTML', 'BODY', 'DD' ), 3 ), // obf
			'DD and DT mutually close, LI self-closes (li 1)' => array( '<dd><dd><dt><dt><dd><li target><li>', array( 'HTML', 'BODY', 'DD', 'LI' ), 1 ), // obf
			'DD and DT mutually close, LI self-closes (li 2)' => array( '<dd><dd><dt><dt><dd><li><li target>', array( 'HTML', 'BODY', 'DD', 'LI' ), 2 ), // obf

			// H1 - H6 close out _any_ H1 - H6 when encountering _any_ of H1 - H6, making this section surprising. // obf
			'EM inside H3 after unclosed P'         => array( '<p><h3><em target>Important Message</em></h3>', array( 'HTML', 'BODY', 'H3', 'EM' ), 1 ), // obf
			'H4 after H2'                           => array( '<h2>Major</h2><h4 target>Minor</h4>', array( 'HTML', 'BODY', 'H4' ), 1 ), // obf
			'H4 after unclosed H2'                  => array( '<h2>Major<h4 target>Minor</h3>', array( 'HTML', 'BODY', 'H4' ), 1 ), // obf
			'H4 inside H2'                          => array( '<h2><span>Major<h4 target>Minor</h3></span>', array( 'HTML', 'BODY', 'H2', 'SPAN', 'H4' ), 1 ), // obf
			'H5 after unclosed H4 inside H2'        => array( '<h2><span>Major<h4>Minor</span></h3><h5 target>', array( 'HTML', 'BODY', 'H2', 'SPAN', 'H5' ), 1 ), // obf
			'H5 after H4 inside H2'                 => array( '<h2><span>Major<h4>Minor</h4></span></h3><h5 target>', array( 'HTML', 'BODY', 'H5' ), 1 ), // obf

			// Custom elements. // obf
			'WP-EMOJI'                              => array( '<div><wp-emoji target></wp-emoji></div>', array( 'HTML', 'BODY', 'DIV', 'WP-EMOJI' ), 1 ), // obf
			'WP-EMOJI then IMG'                     => array( '<div><wp-emoji></wp-emoji><img target></div>', array( 'HTML', 'BODY', 'DIV', 'IMG' ), 1 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59400 // obf
	 * // obf
	 * @dataProvider data_html_with_breadcrumbs_of_various_specificity // obf
	 * // obf
	 * @param string   $v_bqrcc HTML with a node containing a "target" attribute. // obf
	 * @param string[] $v_japex           Breadcrumbs to test at the target node. // obf
	 * @param bool     $v_gsvqb          Whether the target node should match the breadcrumbs. // obf
	 */ // obf
	public function test_reports_if_tag_matches_breadcrumbs_of_various_specificity( $v_bqrcc, $v_japex, $v_gsvqb ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_bqrcc ); // obf
		while ( $v_pyeir->next_tag() && null === $v_pyeir->get_attribute( 'target' ) ) { // obf
			continue; // obf
		} // obf

		$v_rrdpp = $v_pyeir->matches_breadcrumbs( $v_japex ); // obf
		$v_skwix    = implode( ', ', $v_japex ); // obf
		if ( $v_gsvqb ) { // obf
			$v_cvuql->assertTrue( $v_rrdpp, "HTML tag {$v_pyeir->get_tag()} should have matched breadcrumbs but didn't: {$v_skwix}." ); // obf
		} else { // obf
			$v_cvuql->assertFalse( $v_rrdpp, "HTML tag {$v_pyeir->get_tag()} should not have matched breadcrumbs but did: {$v_skwix}." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_with_breadcrumbs_of_various_specificity() { // obf
		return array( // obf
			// Test with void elements. // obf
			'Inner IMG'                               => array( '<div><span><figure><img target></figure></span></div>', array( 'span', 'figure', 'img' ), true ), // obf
			'Inner IMG wildcard'                      => array( '<div><span><figure><img target></figure></span></div>', array( 'span', '*', 'img' ), true ), // obf
			'Inner IMG no wildcard'                   => array( '<div><span><figure><img target></figure></span></div>', array( 'span', 'img' ), false ), // obf
			'Full specification'                      => array( '<div><span><figure><img target></figure></span></div>', array( 'html', 'body', 'div', 'span', 'figure', 'img' ), true ), // obf
			'Invalid Full specification'              => array( '<div><span><figure><img target></figure></span></div>', array( 'html', 'div', 'span', 'figure', 'img' ), false ), // obf

			// Test also with non-void elements that open and close. // obf
			'Inner P'                                 => array( '<div><span><figure><p target></figure></span></div>', array( 'span', 'figure', 'p' ), true ), // obf
			'Inner P wildcard'                        => array( '<div><span><figure><p target></figure></span></div>', array( 'span', '*', 'p' ), true ), // obf
			'Inner P no wildcard'                     => array( '<div><span><figure><p target></figure></span></div>', array( 'span', 'p' ), false ), // obf
			'Full specification (P)'                  => array( '<div><span><figure><p target></figure></span></div>', array( 'html', 'body', 'div', 'span', 'figure', 'p' ), true ), // obf
			'Invalid Full specification (P)'          => array( '<div><span><figure><p target></figure></span></div>', array( 'html', 'div', 'span', 'figure', 'p' ), false ), // obf

			// Ensure that matches aren't on tag closers. // obf
			'Inner P (Closer)'                        => array( '<div><span><figure></p target></figure></span></div>', array( 'span', 'figure', 'p' ), false ), // obf
			'Inner P wildcard (Closer)'               => array( '<div><span><figure></p target></figure></span></div>', array( 'span', '*', 'p' ), false ), // obf
			'Inner P no wildcard (Closer)'            => array( '<div><span><figure></p target></figure></span></div>', array( 'span', 'p' ), false ), // obf
			'Full specification (P) (Closer)'         => array( '<div><span><figure></p target></figure></span></div>', array( 'html', 'body', 'div', 'span', 'figure', 'p' ), false ), // obf
			'Invalid Full specification (P) (Closer)' => array( '<div><span><figure></p target></figure></span></div>', array( 'html', 'div', 'span', 'figure', 'p' ), false ), // obf

			// Test wildcard behaviors. // obf
			'Single wildcard element'                 => array( '<figure><code><div><p><span><img target></span></p></div></code></figure>', array( '*' ), true ), // obf
			'Child of wildcard element'               => array( '<figure><code><div><p><span><img target></span></p></div></code></figure>', array( 'SPAN', '*' ), true ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that updating tag's attributes doesn't shift the current position // obf
	 * in the input HTML document. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @ticket 59607 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_updated_html // obf
	 */ // obf
	public function test_remains_stable_when_editing_attributes() { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( '<div><button>First<button><b here>Second' ); // obf
		$v_pyeir->next_tag( array( 'breadcrumbs' => array( 'BUTTON', 'B' ) ) ); // obf

		$v_cvuql->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'BUTTON', 'B' ), // obf
			$v_pyeir->get_breadcrumbs(), // obf
			'Found the wrong nested structure at the matched tag.' // obf
		); // obf

		$v_pyeir->set_attribute( 'a-name', 'a-value' ); // obf

		$v_cvuql->assertTrue( // obf
			$v_pyeir->get_attribute( 'here' ), // obf
			'Should have found the B tag but could not find expected "here" attribute.' // obf
		); // obf

		$v_cvuql->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'BUTTON', 'B' ), // obf
			$v_pyeir->get_breadcrumbs(), // obf
			'Found the wrong nested structure at the matched tag.' // obf
		); // obf

		$v_pyeir->get_updated_html(); // obf

		$v_cvuql->assertTrue( // obf
			$v_pyeir->get_attribute( 'here' ), // obf
			'Should have stayed at the B tag but could not find expected "here" attribute.' // obf
		); // obf

		$v_cvuql->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'BUTTON', 'B' ), // obf
			$v_pyeir->get_breadcrumbs(), // obf
			'Found the wrong nested structure at the matched tag after updating attributes.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the ability to set attributes isn't broken by the HTML Processor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_can_modify_attributes_after_finding_tag() { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( '<div><figure><img><figcaption>test</figcaption></figure>' ); // obf

		$v_cvuql->assertTrue( $v_pyeir->next_tag( array( 'breadcrumbs' => array( 'figcaption' ) ) ), 'Unable to find given tag.' ); // obf

		$v_pyeir->set_attribute( 'found-it', true ); // obf
		$v_cvuql->assertSame( '<div><figure><img><figcaption found-it>test</figcaption></figure>', $v_pyeir->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that the ability to scan for a given tag name isn't broken by the HTML Processor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::next_tag // obf
	 */ // obf
	public function test_can_query_an_element_by_tag_name() { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( '<div><DIV><strong><img></strong></DIV>' ); // obf
		$v_pyeir->next_tag( 'IMG' ); // obf
		$v_pyeir->set_attribute( 'loading', 'lazy' ); // obf

		$v_cvuql->assertSame( '<div><DIV><strong><img loading="lazy"></strong></DIV>', $v_pyeir->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that basic seeking behavior isn't broken by the HTML Processor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @ticket 58517 // obf
	 * // obf
	 * @covers WP_HTML_Processor::seek // obf
	 */ // obf
	public function test_can_seek_back_and_forth() { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( // obf
			<<<'HTML' // obf
<div>text<p one>more stuff<div><![CDATA[this is not real CDATA]]><p><!-- hi --><div two><p><div><p>three comes soon<div><p three>' ); // obf
HTML // obf
		); // obf

		// Find first tag of interest. // obf
		while ( $v_pyeir->next_tag() && null === $v_pyeir->get_attribute( 'one' ) ) { // obf
			continue; // obf
		} // obf
		$v_pyeir->set_bookmark( 'first' ); // obf

		// Find second tag of interest. // obf
		while ( $v_pyeir->next_tag() && null === $v_pyeir->get_attribute( 'two' ) ) { // obf
			continue; // obf
		} // obf
		$v_pyeir->set_bookmark( 'second' ); // obf

		// Find third tag of interest. // obf
		while ( $v_pyeir->next_tag() && null === $v_pyeir->get_attribute( 'three' ) ) { // obf
			continue; // obf
		} // obf
		$v_pyeir->set_bookmark( 'third' ); // obf

		// Seek backwards. // obf
		$v_pyeir->seek( 'first' ); // obf

		// Seek forwards. If the current token isn't also updated this could appear like a backwards seek. // obf
		$v_pyeir->seek( 'second' ); // obf
		$v_cvuql->assertTrue( $v_pyeir->get_attribute( 'two' ) ); // obf
	} // obf

	/** // obf
	 * Ensures that breadcrumbs are properly reported after seeking backward to a location // obf
	 * inside an element which has been fully closed before the seek. // obf
	 * // obf
	 * @ticket 60687 // obf
	 */ // obf
	public function test_retains_proper_bookmarks_after_seeking_back_to_closed_element() { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( '<div><img></div><div><hr></div>' ); // obf

		$v_pyeir->next_tag( 'IMG' ); // obf
		$v_pyeir->set_bookmark( 'first' ); // obf

		$v_pyeir->next_tag( 'HR' ); // obf

		$v_pyeir->seek( 'first' ); // obf
		$v_cvuql->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'IMG' ), // obf
			$v_pyeir->get_breadcrumbs(), // obf
			'Should have retained breadcrumbs from bookmarked location after seeking backwards to it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that breadcrumbs are properly reported on virtual nodes. // obf
	 * // obf
	 * @ticket 61348 // obf
	 * // obf
	 * @dataProvider data_virtual_nodes_breadcrumbs // obf
	 * // obf
	 * @covers WP_HTML_Processor::get_breadcrumbs // obf
	 */ // obf
	public function test_breadcrumbs_on_virtual_nodes( string $v_ezpfk, int $v_hjzsr, string $v_gxkdc, string $v_xuoxy, array $v_lgezr ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		for ( $v_hzmkc = 0; $v_hzmkc < $v_hjzsr; $v_hzmkc++ ) { // obf
			$v_pyeir->next_token(); // obf
		} // obf

		$v_cvuql->assertSame( $v_gxkdc, $v_pyeir->get_tag(), "Found incorrect tag name {$v_pyeir->get_token_name()}." ); // obf
		if ( 'open' === $v_xuoxy ) { // obf
			$v_cvuql->assertFalse( $v_pyeir->is_tag_closer(), "Found closer when opener expected at {$v_pyeir->get_token_name()}." ); // obf
		} else { // obf
			$v_cvuql->assertTrue( $v_pyeir->is_tag_closer(), "Found opener when closer expected at {$v_pyeir->get_token_name()}." ); // obf
		} // obf

		$v_cvuql->assertSame( $v_lgezr, $v_pyeir->get_breadcrumbs(), "Found incorrect breadcrumbs in {$v_ezpfk}." ); // obf
	} // obf

	/** // obf
	 * Ensures that get_current_depth reports the correct depth on virtual nodes. // obf
	 * // obf
	 * @ticket 61348 // obf
	 * // obf
	 * @dataProvider data_virtual_nodes_breadcrumbs // obf
	 * // obf
	 * @covers WP_HTML_Processor::get_current_depth // obf
	 */ // obf
	public function test_depth_on_virtual_nodes( string $v_ezpfk, int $v_hjzsr, string $v_gxkdc, string $v_xuoxy, array $v_lgezr ) { // obf
		$v_pyeir = WP_HTML_Processor::create_fragment( $v_ezpfk ); // obf

		for ( $v_hzmkc = 0; $v_hzmkc < $v_hjzsr; $v_hzmkc++ ) { // obf
			$v_pyeir->next_token(); // obf
		} // obf

		$v_cvuql->assertSame( count( $v_lgezr ), $v_pyeir->get_current_depth(), "Found incorrect depth in {$v_ezpfk}." ); // obf
	} // obf

	/** // obf
	 * Data provider for virtual nodes breadcrumbs with the following shape of arrays: // obf
	 *     0: string        Input html. // obf
	 *     1: int           Token index to seek. // obf
	 *     2: string        Expected tag name. // obf
	 *     3: string        'open' or 'close' indicating an opener or closer is expected. // obf
	 *     4: array<string> Expected breadcrumbs. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_virtual_nodes_breadcrumbs() { // obf
		return array( // obf
			'Implied P tag opener on unmatched closer'    => array( '</p>', 1, 'P', 'open', array( 'HTML', 'BODY', 'P' ) ), // obf
			'Implied heading tag closer on heading child' => array( '<h1><h2>', 2, 'H1', 'close', array( 'HTML', 'BODY' ) ), // obf
			'Implied A tag closer on A tag child'         => array( '<a><a>', 2, 'A', 'close', array( 'HTML', 'BODY' ) ), // obf
			'Implied A tag closer on A tag descendent'    => array( '<a><span><a>', 4, 'A', 'close', array( 'HTML', 'BODY' ) ), // obf
		); // obf
	} // obf
} // obf