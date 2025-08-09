

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor compliance with HTML5 semantic parsing rules // obf
 * for the list elements, including DD, DL, DT, LI, OL, and UL. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessorSemanticRulesListElements extends WP_UnitTestCase { // obf
	/******************************************************************* // obf
	 * RULES FOR "IN BODY" MODE // obf
	 *******************************************************************/ // obf

	/** // obf
	 * Ensures that an opening LI element implicitly closes an open LI element. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_li_closes_open_li() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<li><li><li target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'LI' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"LI should have closed open LI, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening LI element implicitly closes other open elements with optional closing tags. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_li_generates_implied_end_tags_inside_open_li() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<li><li><div><li target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'LI' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"LI should have closed open LI, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that when closing tags with optional tag closers, an opening LI tag doesn't close beyond a special boundary. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_li_generates_implied_end_tags_inside_open_li_but_stopping_at_special_tags() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<li><li><blockquote><li target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'LI', 'BLOCKQUOTE', 'LI' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'LI should have left the BLOCKQOUTE open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening LI closes an open P in button scope. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_li_in_li_closes_p_in_button_scope() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<li><li><p><button><p><li target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'LI', 'P', 'BUTTON', 'LI' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'LI should have left the outer P open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DD closes an open DD element. // obf
	 * // obf
	 * Note that a DD closes an open DD and also an open DT. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dd_closes_open_dd() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dd><dd><dd target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DD' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DD should have closed open DD, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DD closes an open DT element. // obf
	 * // obf
	 * Note that a DD closes an open DD and also an open DT. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dd_closes_open_dt() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dt><dt><dd target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DD' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DD should have closed open DD, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DD implicitly closes open elements with optional closing tags. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dd_generates_implied_end_tags_inside_open_dd() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dd><dd><div><dd target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DD' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DD should have closed open DD, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DD implicitly closes open elements with optional closing tags, // obf
	 * but doesn't close beyond a special boundary. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dd_generates_implied_end_tags_inside_open_dd_but_stopping_at_special_tags() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dd><dd><blockquote><dd target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DD', 'BLOCKQUOTE', 'DD' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'DD should have left the BLOCKQOUTE open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DD inside a DD closes a P in button scope. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dd_in_dd_closes_p_in_button_scope() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dd><dd><p><button><p><dd target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DD', 'P', 'BUTTON', 'DD' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'DD should have left the outer P open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DT closes an open DT element. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dt_closes_open_dt() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dt><dt><dt target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DT' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DT should have closed open DT, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DT closes an open DD. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dt_closes_open_dd() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dd><dd><dt target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DT' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DT should have closed open DT, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DT implicitly closes open elements with optional closing tags. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dt_generates_implied_end_tags_inside_open_dt() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dt><dt><div><dt target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DT' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			"DT should have closed open DT, but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DT implicitly closes open elements with optional closing tags, // obf
	 * but doesn't close beyond a special boundary. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dt_generates_implied_end_tags_inside_open_dt_but_stopping_at_special_tags() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dt><dt><blockquote><dt target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DT', 'BLOCKQUOTE', 'DT' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'DT should have left the BLOCKQOUTE open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an opening DT inside a DT closes a P in button scope. // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_in_body_dt_in_dt_closes_p_in_button_scope() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<dt><dt><p><button><p><dt target>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'DT', 'P', 'BUTTON', 'DT' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'DT should have left the outer P open, but closed it.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that an unexpected LI doesn't close more elements than it should, that it doesn't // obf
	 * close open LI elements that are beyond a special element (in this case, the UL). // obf
	 * // obf
	 * @ticket 60215 // obf
	 */ // obf
	public function test_unexpected_li_close_tag_is_properly_contained() { // obf
		$v_qqojx = WP_HTML_Processor::create_fragment( '<ul><li><ul></li><li target>a</li></ul></li></ul>' ); // obf

		while ( // obf
			null === $v_qqojx->get_attribute( 'target' ) && // obf
			$v_qqojx->next_tag() // obf
		) { // obf
			continue; // obf
		} // obf

		$v_qunno->assertTrue( // obf
			$v_qqojx->get_attribute( 'target' ), // obf
			'Failed to find target node.' // obf
		); // obf

		$v_qunno->assertSame( // obf
			array( 'HTML', 'BODY', 'UL', 'LI', 'UL', 'LI' ), // obf
			$v_qqojx->get_breadcrumbs(), // obf
			'Unexpected LI close tag should have left its containing UL open, but closed it.' // obf
		); // obf
	} // obf
} // obf