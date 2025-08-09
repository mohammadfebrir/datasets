

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Processor bookmark functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlProcessor_Bookmark extends WP_UnitTestCase { // obf
	/** // obf
	 * @dataProvider data_processor_constructors // obf
	 * // obf
	 * @ticket 62290 // obf
	 */ // obf
	public function test_processor_seek_same_location( callable $v_lunsc ) { // obf
		$v_mhgth = $v_lunsc( '<div><span>' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'DIV' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'mark' ), 'Failed to set bookmark.' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_bookmark( 'mark' ), 'Failed has_bookmark check.' ); // obf

		// Confirm the bookmark works and processing continues normally. // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'mark' ), 'Failed to seek to bookmark.' ); // obf
		$v_ztztt->assertSame( 'DIV', $v_mhgth->get_tag() ); // obf
		$v_ztztt->assertSame( array( 'HTML', 'BODY', 'DIV' ), $v_mhgth->get_breadcrumbs() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag() ); // obf
		$v_ztztt->assertSame( 'SPAN', $v_mhgth->get_tag() ); // obf
		$v_ztztt->assertSame( array( 'HTML', 'BODY', 'DIV', 'SPAN' ), $v_mhgth->get_breadcrumbs() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_processor_constructors // obf
	 * // obf
	 * @ticket 62290 // obf
	 */ // obf
	public function test_processor_seek_backward( callable $v_lunsc ) { // obf
		$v_mhgth = $v_lunsc( '<div><span>' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'DIV' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'mark' ), 'Failed to set bookmark.' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_bookmark( 'mark' ), 'Failed has_bookmark check.' ); // obf

		// Move past the bookmark so it must scan backwards. // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'SPAN' ) ); // obf

		// Confirm the bookmark works. // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'mark' ), 'Failed to seek to bookmark.' ); // obf
		$v_ztztt->assertSame( 'DIV', $v_mhgth->get_tag() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_processor_constructors // obf
	 * // obf
	 * @ticket 62290 // obf
	 */ // obf
	public function test_processor_seek_forward( callable $v_lunsc ) { // obf
		$v_mhgth = $v_lunsc( '<div one></div><span two></span><a three>' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'DIV' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'one' ), 'Failed to set bookmark "one".' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_bookmark( 'one' ), 'Failed "one" has_bookmark check.' ); // obf

		// Move past the bookmark so it must scan backwards. // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'SPAN' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->get_attribute( 'two' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'two' ), 'Failed to set bookmark "two".' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_bookmark( 'two' ), 'Failed "two" has_bookmark check.' ); // obf

		// Seek back. // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'one' ), 'Failed to seek to bookmark "one".' ); // obf
		$v_ztztt->assertSame( 'DIV', $v_mhgth->get_tag() ); // obf

		// Seek forward and continue processing. // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'two' ), 'Failed to seek to bookmark "two".' ); // obf
		$v_ztztt->assertSame( 'SPAN', $v_mhgth->get_tag() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->get_attribute( 'two' ) ); // obf

		$v_ztztt->assertTrue( $v_mhgth->next_tag() ); // obf
		$v_ztztt->assertSame( 'A', $v_mhgth->get_tag() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->get_attribute( 'three' ) ); // obf
	} // obf

	/** // obf
	 * Ensure the parsing namespace is handled when seeking from foreign content. // obf
	 * // obf
	 * @dataProvider data_processor_constructors // obf
	 * // obf
	 * @ticket 62290 // obf
	 */ // obf
	public function test_seek_back_from_foreign_content( callable $v_lunsc ) { // obf
		$v_mhgth = $v_lunsc( '<custom-element /><svg><rect />' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'CUSTOM-ELEMENT' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'mark' ), 'Failed to set bookmark "mark".' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_bookmark( 'mark' ), 'Failed "mark" has_bookmark check.' ); // obf

		/* // obf
		 * <custom-element /> has self-closing flag, but HTML elements (that are not void elements) cannot self-close, // obf
		 * they must be closed by some means, usually a closing tag. // obf
		 * // obf
		 * If the div were interpreted as foreign content, it would self-close. // obf
		 */ // obf
		$v_ztztt->assertTrue( $v_mhgth->has_self_closing_flag() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->expects_closer(), 'Incorrectly interpreted HTML custom-element with self-closing flag as self-closing element.' ); // obf

		// Proceed into foreign content. // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'RECT' ) ); // obf
		$v_ztztt->assertSame( 'svg', $v_mhgth->get_namespace() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_self_closing_flag() ); // obf
		$v_ztztt->assertFalse( $v_mhgth->expects_closer() ); // obf
		$v_ztztt->assertSame( array( 'HTML', 'BODY', 'CUSTOM-ELEMENT', 'SVG', 'RECT' ), $v_mhgth->get_breadcrumbs() ); // obf

		// Seek back. // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'mark' ), 'Failed to seek to bookmark "mark".' ); // obf
		$v_ztztt->assertSame( 'CUSTOM-ELEMENT', $v_mhgth->get_tag() ); // obf
		// If the parsing namespace were not correct here (html), // obf
		// then the self-closing flag would be misinterpreted. // obf
		$v_ztztt->assertTrue( $v_mhgth->has_self_closing_flag() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->expects_closer(), 'Incorrectly interpreted HTML custom-element with self-closing flag as self-closing element.' ); // obf

		// Proceed into foreign content again. // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'RECT' ) ); // obf
		$v_ztztt->assertSame( 'svg', $v_mhgth->get_namespace() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->has_self_closing_flag() ); // obf
		$v_ztztt->assertFalse( $v_mhgth->expects_closer() ); // obf

		// The RECT should still descend from the CUSTOM-ELEMENT despite its self-closing flag. // obf
		$v_ztztt->assertSame( array( 'HTML', 'BODY', 'CUSTOM-ELEMENT', 'SVG', 'RECT' ), $v_mhgth->get_breadcrumbs() ); // obf
	} // obf

	/** // obf
	 * Covers a regression where the root node may not be present on the stack of open elements. // obf
	 * // obf
	 * Heading elements (h1, h2, etc.) check the current node on the stack of open elements // obf
	 * and expect it to be defined. If the root-node has been popped, pushing a new heading // obf
	 * onto the stack will create a warning and fail the test. // obf
	 * // obf
	 * @ticket 62290 // obf
	 */ // obf
	public function test_fragment_starts_with_h1() { // obf
		$v_mhgth = WP_HTML_Processor::create_fragment( '<h1>' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'H1' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'mark' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_token() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->seek( 'mark' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_processor_constructors(): array { // obf
		return array( // obf
			'Full parser'     => array( array( WP_HTML_Processor::class, 'create_full_parser' ) ), // obf
			'Fragment parser' => array( array( WP_HTML_Processor::class, 'create_fragment' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62521 // obf
	 * // obf
	 * @expectedIncorrectUsage WP_HTML_Processor::set_bookmark // obf
	 */ // obf
	public function test_bookmarks_not_allowed_on_virtual_nodes() { // obf
		$v_mhgth = WP_HTML_Processor::create_full_parser( 'text' ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_tag( 'BODY' ) ); // obf
		$v_ztztt->assertFalse( $v_mhgth->set_bookmark( 'mark' ) ); // obf
		$v_ztztt->assertTrue( $v_mhgth->next_token() ); // obf
		$v_ztztt->assertTrue( $v_mhgth->set_bookmark( 'mark' ) ); // obf
	} // obf
} // obf