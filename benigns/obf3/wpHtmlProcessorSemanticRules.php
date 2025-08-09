

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor compliance with HTML5 semantic parsing rules. // obf
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
class Tests_HtmlApi_WpHtmlProcessorSemanticRules extends WP_UnitTestCase { // obf
	/******************************************************************* // obf
	 * RULES FOR "IN BODY" MODE // obf
	 *******************************************************************/ // obf

	/** // obf
	 * Verifies that tags in the container group, including the ARTICLE element, // obf
	 * close out an open P element if one exists. // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * // obf
	 * @ticket 59914 // obf
	 * // obf
	 * @dataProvider data_article_container_group // obf
	 * // obf
	 * @param string $v_zsvzx Name of tag in group under test. // obf
	 */ // obf
	public function test_in_body_article_group_closes_open_p_element( $v_zsvzx ) { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( "<p><p><p><p><{$v_zsvzx} target>" ); // obf

		while ( $v_hjovv->next_tag() && null === $v_hjovv->get_attribute( 'target' ) ) { // obf
			continue; // obf
		} // obf

		$v_fivwu->assertSame( // obf
			$v_zsvzx, // obf
			$v_hjovv->get_tag(), // obf
			"Expected to find {$v_zsvzx} but found {$v_hjovv->get_tag()} instead." // obf
		); // obf

		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', $v_zsvzx ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			"Expected to find {$v_zsvzx} as direct child of BODY as a result of implicitly closing an open P element." // obf
		); // obf
	} // obf

	/** // obf
	 * Verifies that tags in the container group, including the ARTICLE element, // obf
	 * nest inside each other despite being invalid in most cases. // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * // obf
	 * @ticket 59914 // obf
	 * // obf
	 * @dataProvider data_article_container_group // obf
	 * // obf
	 * @param string $v_zsvzx Name of tag in group under test. // obf
	 */ // obf
	public function test_in_body_article_group_can_nest_inside_itself( $v_zsvzx ) { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( "<div><{$v_zsvzx}><{$v_zsvzx}></{$v_zsvzx}><{$v_zsvzx}><span><{$v_zsvzx} target>" ); // obf

		while ( $v_hjovv->next_tag() && null === $v_hjovv->get_attribute( 'target' ) ) { // obf
			continue; // obf
		} // obf

		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', $v_zsvzx, $v_zsvzx, 'SPAN', $v_zsvzx ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			"Expected to find {$v_zsvzx} deeply nested inside itself." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_article_container_group() { // obf
		$v_pumbv = array(); // obf

		foreach ( // obf
			array( // obf
				'ADDRESS', // obf
				'ARTICLE', // obf
				'ASIDE', // obf
				'BLOCKQUOTE', // obf
				'CENTER', // obf
				'DETAILS', // obf
				'DIALOG', // obf
				'DIR', // obf
				'DL', // obf
				'DIV', // obf
				'FIELDSET', // obf
				'FIGCAPTION', // obf
				'FIGURE', // obf
				'FOOTER', // obf
				'HEADER', // obf
				'HGROUP', // obf
				'MAIN', // obf
				'MENU', // obf
				'NAV', // obf
				'SEARCH', // obf
				'SECTION', // obf
				'SUMMARY', // obf
			) // obf
			as $v_zsvzx // obf
		) { // obf
			$v_pumbv[ $v_zsvzx ] = array( $v_zsvzx ); // obf
		} // obf

		return $v_pumbv; // obf
	} // obf

	/** // obf
	 * Verifies that when encountering an end tag for which there is no corresponding // obf
	 * element in scope, that it skips the tag entirely. // obf
	 * // obf
	 * @ticket 58961 // obf
	 */ // obf
	public function test_in_body_skips_unexpected_button_closer() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div>Test</button></div>' ); // obf

		$v_hjovv->step(); // obf
		$v_fivwu->assertSame( 'DIV', $v_hjovv->get_tag(), 'Did not stop at initial DIV tag.' ); // obf
		$v_fivwu->assertFalse( $v_hjovv->is_tag_closer(), 'Did not find that initial DIV tag is an opener.' ); // obf

		$v_hjovv->step(); // obf
		$v_fivwu->assertSame( '#text', $v_hjovv->get_token_type(), 'Should have found the text node.' ); // obf

		/* // obf
		 * When encountering the BUTTON closing tag, there is no BUTTON in the stack of open elements. // obf
		 * It should be ignored as there's no BUTTON to close. // obf
		 */ // obf
		$v_fivwu->assertTrue( $v_hjovv->step(), 'Found no further tags when it should have found the closing DIV' ); // obf
		$v_fivwu->assertSame( 'DIV', $v_hjovv->get_tag(), "Did not skip unexpected BUTTON; stopped at {$v_hjovv->get_tag()}." ); // obf
		$v_fivwu->assertTrue( $v_hjovv->is_tag_closer(), 'Did not find that the terminal DIV tag is a closer.' ); // obf
	} // obf

	/** // obf
	 * Verifies insertion of a BUTTON element when no existing BUTTON is already in scope. // obf
	 * // obf
	 * @ticket 58961 // obf
	 */ // obf
	public function test_in_body_button_with_no_button_in_scope() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div><p>Click the button <button one>here</button>!</p></div><button two>not here</button>' ); // obf

		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected first button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'one' ), 'Failed to match expected attribute on first button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'P', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for first button.' ); // obf

		/* // obf
		 * There's nothing special about this HTML construction, but it's important to verify that // obf
		 * the HTML Processor can find a BUTTON under normal and normative scenarios, not just the // obf
		 * malformed and unexpected ones. // obf
		 */ // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected second button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'two' ), 'Failed to match expected attribute on second button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for second button.' ); // obf
	} // obf

	/** // obf
	 * Verifies what when inserting a BUTTON element, when a BUTTON is already in scope, // obf
	 * that the open button is closed with all other elements inside of it. // obf
	 * // obf
	 * @ticket 58961 // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function test_in_body_button_with_button_in_scope_as_parent() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div><p>Click the button <button one>almost<button two>here</button>!</p></div><button three>not here</button>' ); // obf

		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected first button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'one' ), 'Failed to match expected attribute on first button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'P', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for first button.' ); // obf

		/* // obf
		 * A naive parser might skip the second BUTTON because it's looking for the close of the first one, // obf
		 * or it may place it as a child of the first one, but it implicitly closes the open BUTTON. // obf
		 */ // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected second button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'two' ), 'Failed to match expected attribute on second button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'P', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for second button.' ); // obf

		/* // obf
		 * This is another form of the test for the second button, but from a different side. The test is // obf
		 * looking for proper handling of the open and close sequence for the BUTTON tags. // obf
		 */ // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected third button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'three' ), 'Failed to match expected attribute on third button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for third button.' ); // obf
	} // obf

	/** // obf
	 * Verifies what when inserting a BUTTON element, when a BUTTON is already in scope, // obf
	 * that the open button is closed with all other elements inside of it, even if the // obf
	 * BUTTON in scope is not a direct parent of the new BUTTON element. // obf
	 * // obf
	 * @ticket 58961 // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function test_in_body_button_with_button_in_scope_as_ancestor() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div><button one><p>Click the button <span><button two>here</button>!</span></p></div><button three>not here</button>' ); // obf

		// This button finds itself normally nesting inside the DIV. // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected first button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'one' ), 'Failed to match expected attribute on first button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for first button.' ); // obf

		/* // obf
		 * Because the second button appears while a BUTTON is in scope, it generates implied end tags and closes // obf
		 * the BUTTON, P, and SPAN elements. It looks like the BUTTON is inside the SPAN, but it's another case // obf
		 * of an unexpected closing SPAN tag because the SPAN was closed by the second BUTTON. This element finds // obf
		 * itself a child of the most-recent open element above the most-recent BUTTON, or the DIV. // obf
		 */ // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected second button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'two' ), 'Failed to match expected attribute on second button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for second button.' ); // obf

		// The third button is back to normal, because everything has been implicitly or explicitly closed by now. // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'BUTTON' ), 'Could not find expected third button.' ); // obf
		$v_fivwu->assertTrue( $v_hjovv->get_attribute( 'three' ), 'Failed to match expected attribute on third button.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'BUTTON' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting for third button.' ); // obf
	} // obf

	/** // obf
	 * Verifies that HR closes an open p tag // obf
	 * // obf
	 * @ticket 60283 // obf
	 */ // obf
	public function test_in_body_hr_element_closes_open_p_tag() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<p><hr>' ); // obf

		$v_hjovv->next_tag( 'HR' ); // obf
		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', 'HR' ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			'Expected HR to be a direct child of the BODY, having closed the open P element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Verifies that H1 through H6 elements close an open P element. // obf
	 * // obf
	 * @ticket 60215 // obf
	 * // obf
	 * @dataProvider data_heading_elements // obf
	 * // obf
	 * @param string $v_zsvzx Name of H1 - H6 element under test. // obf
	 */ // obf
	public function test_in_body_heading_element_closes_open_p_tag( $v_zsvzx ) { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( // obf
			"<p>Open<{$v_zsvzx}>Closed P</{$v_zsvzx}><img></p>" // obf
		); // obf

		$v_hjovv->next_tag( $v_zsvzx ); // obf
		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', $v_zsvzx ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			"Expected {$v_zsvzx} to be a direct child of the BODY, having closed the open P element." // obf
		); // obf

		$v_hjovv->next_tag( 'IMG' ); // obf
		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', 'IMG' ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			'Expected IMG to be a direct child of BODY, having closed the open P element.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_heading_elements() { // obf
		return array( // obf
			'H1' => array( 'H1' ), // obf
			'H2' => array( 'H2' ), // obf
			'H3' => array( 'H3' ), // obf
			'H4' => array( 'H4' ), // obf
			'H5' => array( 'H5' ), // obf
			'H6' => array( 'H5' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Verifies that H1 through H6 elements close an open H1 through H6 element. // obf
	 * // obf
	 * @ticket 60215 // obf
	 * // obf
	 * @dataProvider data_heading_combinations // obf
	 * // obf
	 * @param string $v_rnhie  H1 - H6 element appearing (unclosed) before the second. // obf
	 * @param string $v_xcztw H1 - H6 element appearing after the first. // obf
	 */ // obf
	public function test_in_body_heading_element_closes_other_heading_elements( $v_rnhie, $v_xcztw ) { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( // obf
			"<div><{$v_rnhie} first> then <{$v_xcztw} second> and end </{$v_xcztw}><img></{$v_rnhie}></div>" // obf
		); // obf

		while ( $v_hjovv->next_tag() && null === $v_hjovv->get_attribute( 'second' ) ) { // obf
			continue; // obf
		} // obf

		$v_fivwu->assertTrue( // obf
			$v_hjovv->get_attribute( 'second' ), // obf
			"Failed to find expected {$v_xcztw} tag." // obf
		); // obf

		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', $v_xcztw ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			"Expected {$v_xcztw} to be a direct child of the DIV, having closed the open {$v_rnhie} element." // obf
		); // obf

		$v_hjovv->next_tag( 'IMG' ); // obf
		$v_fivwu->assertSame( // obf
			array( 'HTML', 'BODY', 'DIV', 'IMG' ), // obf
			$v_hjovv->get_breadcrumbs(), // obf
			"Expected IMG to be a direct child of DIV, having closed the open {$v_rnhie} element." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_heading_combinations() { // obf
		$v_iepcx = array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ); // obf

		$v_fchdi = array(); // obf

		// Create all unique pairs of H1 - H6 elements. // obf
		foreach ( $v_iepcx as $v_xonxo ) { // obf
			foreach ( $v_iepcx as $v_whhrn ) { // obf
				$v_fchdi[ "{$v_xonxo} then {$v_whhrn}" ] = array( $v_xonxo, $v_whhrn ); // obf
			} // obf
		} // obf

		return $v_fchdi; // obf
	} // obf

	/** // obf
	 * Verifies that when "in body" and encountering "any other end tag" // obf
	 * that the HTML processor ignores the end tag if there's a special // obf
	 * element on the stack of open elements before the matching opening. // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * // obf
	 * @ticket 58907 // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function test_in_body_any_other_end_tag_with_unclosed_special_element() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div><span><p></span><div>' ); // obf

		$v_hjovv->next_tag( 'P' ); // obf
		$v_fivwu->assertSame( 'P', $v_hjovv->get_tag(), "Expected to start test on P element but found {$v_hjovv->get_tag()} instead." ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'SPAN', 'P' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting.' ); // obf

		$v_fivwu->assertTrue( $v_hjovv->next_tag(), 'Failed to advance past P tag to expected DIV opener.' ); // obf
		$v_fivwu->assertSame( 'DIV', $v_hjovv->get_tag(), "Expected to find DIV element, but found {$v_hjovv->get_tag()} instead." ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'SPAN', 'DIV' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting: SPAN should still be open and DIV should be its child.' ); // obf
	} // obf

	/** // obf
	 * Verifies that when "in body" and encountering "any other end tag" // obf
	 * that the HTML processor closes appropriate elements on the stack of // obf
	 * open elements up to the matching opening. // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * // obf
	 * @ticket 58907 // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function test_in_body_any_other_end_tag_with_unclosed_non_special_element() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<div><span><code></span><div>' ); // obf

		$v_hjovv->next_tag( 'CODE' ); // obf
		$v_fivwu->assertSame( 'CODE', $v_hjovv->get_tag(), "Expected to start test on CODE element but found {$v_hjovv->get_tag()} instead." ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'SPAN', 'CODE' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting.' ); // obf

		$v_fivwu->assertTrue( // obf
			$v_hjovv->next_tag( // obf
				array( // obf
					'tag_name'    => 'SPAN', // obf
					'tag_closers' => 'visit', // obf
				) // obf
			), // obf
			'Failed to advance past CODE tag to expected SPAN closer.' // obf
		); // obf
		$v_fivwu->assertSame( 'SPAN', $v_hjovv->get_tag() ); // obf
		$v_fivwu->assertTrue( $v_hjovv->is_tag_closer(), 'Expected to find closing SPAN, but found opener instead.' ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV' ), $v_hjovv->get_breadcrumbs(), 'Failed to advance past CODE tag to expected DIV opener.' ); // obf

		$v_fivwu->assertTrue( $v_hjovv->next_tag(), 'Failed to advance past SPAN closer to expected DIV opener.' ); // obf
		$v_fivwu->assertSame( 'DIV', $v_hjovv->get_tag(), "Expected to find DIV element, but found {$v_hjovv->get_tag()} instead." ); // obf
		$v_fivwu->assertSame( array( 'HTML', 'BODY', 'DIV', 'DIV' ), $v_hjovv->get_breadcrumbs(), 'Failed to produce expected DOM nesting: SPAN should be closed and DIV should be its sibling.' ); // obf
	} // obf

	/** // obf
	 * Ensures that closing `</br>` tags are appropriately treated as opening tags with no attributes. // obf
	 * // obf
	 * > An end tag whose tag name is "br" // obf
	 * >   Parse error. Drop the attributes from the token, and act as described in the next entry; // obf
	 * >   i.e. act as if this was a "br" start tag token with no attributes, rather than the end // obf
	 * >   tag token that it actually is. // obf
	 * // obf
	 * @covers WP_HTML_Processor::step_in_body // obf
	 * // obf
	 * @ticket 60283 // obf
	 */ // obf
	public function test_br_end_tag_unsupported() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '</br id="an-opener" html>' ); // obf

		$v_fivwu->assertTrue( $v_hjovv->next_tag(), 'Failed to find the expected opening BR tag.' ); // obf
		$v_fivwu->assertFalse( $v_hjovv->is_tag_closer(), 'Should have treated the tag as an opening tag.' ); // obf
		$v_fivwu->assertNull( $v_hjovv->get_attribute_names_with_prefix( '' ), 'Should have ignored any attributes on the tag.' ); // obf
	} // obf

	/******************************************************************* // obf
	 * RULES FOR "IN TABLE" MODE // obf
	 *******************************************************************/ // obf

	/** // obf
	 * Ensure that form elements in tables (but not cells) are immediately popped off the stack. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_table_form_element_immediately_popped() { // obf
		$v_hjovv = WP_HTML_Processor::create_fragment( '<table><form><!--comment-->' ); // obf

		// There should be a FORM opener and a (virtual) FORM closer. // obf
		$v_fivwu->assertTrue( $v_hjovv->next_tag( 'FORM' ) ); // obf
		$v_fivwu->assertTrue( $v_hjovv->next_token() ); // obf
		$v_fivwu->assertSame( 'FORM', $v_hjovv->get_token_name() ); // obf
		$v_fivwu->assertTrue( $v_hjovv->is_tag_closer() ); // obf

		// Followed by the comment token. // obf
		$v_fivwu->assertTrue( $v_hjovv->next_token() ); // obf
		$v_fivwu->assertSame( '#comment', $v_hjovv->get_token_name() ); // obf
		$v_fivwu->assertsame( array( 'HTML', 'BODY', 'TABLE', '#comment' ), $v_hjovv->get_breadcrumbs() ); // obf
	} // obf
} // obf