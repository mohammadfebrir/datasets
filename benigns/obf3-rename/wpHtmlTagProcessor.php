

<?php // obf
/** // obf
 * Unit tests covering WP_HTML_Tag_Processor functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 */ // obf

/** // obf
 * @group html-api // obf
 * // obf
 * @coversDefaultClass WP_HTML_Tag_Processor // obf
 */ // obf
class Tests_HtmlApi_WpHtmlTagProcessor extends WP_UnitTestCase { // obf
	const HTML_SIMPLE       = '<div id="first"><span id="second">Text</span></div>'; // obf
	const HTML_WITH_CLASSES = '<div class="main with-border" id="first"><span class="not-main bold with-border" id="second">Text</span></div>'; // obf
	const HTML_MALFORMED    = '<div><span class="d-md-none" Notifications</span><span class="d-none d-md-inline">Back to notifications</span></div>'; // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_tag // obf
	 */ // obf
	public function test_get_tag_returns_null_before_finding_tags() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf

		$v_pymon->assertNull( $v_ilmtj->get_tag(), 'Calling get_tag() without selecting a tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_tag // obf
	 */ // obf
	public function test_get_tag_returns_null_when_not_in_open_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'p' ), 'Querying a non-existing tag did not return false' ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_tag(), 'Accessing a non-existing tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_tag // obf
	 */ // obf
	public function test_get_tag_returns_open_tag_name() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'div' ), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertSame( 'DIV', $v_ilmtj->get_tag(), 'Accessing an existing tag name did not return "div"' ); // obf
	} // obf

	/** // obf
	 * @ticket 58009 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_self_closing_flag // obf
	 * // obf
	 * @dataProvider data_has_self_closing_flag // obf
	 * // obf
	 * @param string $v_djilv Input HTML whose first tag might contain the self-closing flag `/`. // obf
	 * @param bool $v_calyb Whether the input HTML's first tag contains the self-closing flag. // obf
	 */ // obf
	public function test_has_self_closing_flag_matches_input_html( $v_djilv, $v_calyb ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ); // obf

		if ( $v_calyb ) { // obf
			$v_pymon->assertTrue( $v_ilmtj->has_self_closing_flag(), 'Did not find the self-closing tag when it was present.' ); // obf
		} else { // obf
			$v_pymon->assertFalse( $v_ilmtj->has_self_closing_flag(), 'Found the self-closing tag when it was absent.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. HTML tags which might have a self-closing flag, and an indicator if they do. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_has_self_closing_flag() { // obf
		return array( // obf
			// These should not have a self-closer, and will leave an element un-closed if it's assumed they are self-closing. // obf
			'Self-closing flag on non-void HTML element' => array( '<div />', true ), // obf
			'No self-closing flag on non-void HTML element' => array( '<div>', false ), // obf
			// These should not have a self-closer, but are benign when used because the elements are void. // obf
			'Self-closing flag on void HTML element'     => array( '<img />', true ), // obf
			'No self-closing flag on void HTML element'  => array( '<img>', false ), // obf
			'Self-closing flag on void HTML element without spacing' => array( '<img/>', true ), // obf
			// These should not have a self-closer, but as part of a tag closer they are entirely ignored. // obf
			'Self-closing flag on tag closer'            => array( '</textarea />', true ), // obf
			'No self-closing flag on tag closer'         => array( '</textarea>', false ), // obf
			// These can and should have self-closers, and will leave an element un-closed if it's assumed they aren't self-closing. // obf
			'Self-closing flag on a foreign element'     => array( '<circle />', true ), // obf
			'No self-closing flag on a foreign element'  => array( '<circle>', false ), // obf
			// These involve syntax peculiarities. // obf
			'Self-closing flag after extra spaces'       => array( '<div      />', true ), // obf
			'Self-closing flag after attribute'          => array( '<div id=test/>', true ), // obf
			'Self-closing flag after quoted attribute'   => array( '<div id="test"/>', true ), // obf
			'Self-closing flag after boolean attribute'  => array( '<div enabled/>', true ), // obf
			'Boolean attribute that looks like a self-closer' => array( '<div / >', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_null_before_finding_tags() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf

		$v_pymon->assertNull( $v_ilmtj->get_attribute( 'class' ), 'Accessing an attribute without selecting a tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_null_when_not_in_open_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'p' ), 'Querying a non-existing tag did not return false' ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute( 'class' ), 'Accessing an attribute of a non-existing tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_null_when_in_closing_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'div' ), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), 'Querying an existing closing tag did not return true' ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute( 'class' ), 'Accessing an attribute of a closing tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_null_when_attribute_missing() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'div' ), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute( 'test-id' ), 'Accessing a non-existing attribute did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_attribute_value() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'div' ), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertSame( 'test', $v_ilmtj->get_attribute( 'class' ), 'Accessing a class="test" attribute value did not return "test"' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_true_for_boolean_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div enabled class="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'class_name' => 'test' ) ), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->get_attribute( 'enabled' ), 'Accessing a boolean "enabled" attribute value did not return true' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_string_for_truthy_attributes() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div enabled=enabled checked=1 hidden="true" class="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag(), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertSame( 'enabled', $v_ilmtj->get_attribute( 'enabled' ), 'Accessing a boolean "enabled" attribute value did not return true' ); // obf
		$v_pymon->assertSame( '1', $v_ilmtj->get_attribute( 'checked' ), 'Accessing a checked=1 attribute value did not return "1"' ); // obf
		$v_pymon->assertSame( 'true', $v_ilmtj->get_attribute( 'hidden' ), 'Accessing a hidden="true" attribute value did not return "true"' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_decodes_html_character_references() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div id="the &quot;grande&quot; is &lt; &#x033;&#50;oz&dagger;"></div>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertSame( 'the "grande" is < 32oz†', $v_ilmtj->get_attribute( 'id' ), 'HTML Attribute value was returned without decoding character references' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_attributes_parser_treats_slash_as_attribute_separator() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div a/b/c/d/e="test">Test</div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag(), 'Querying an existing tag did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->get_attribute( 'a' ), 'Accessing an existing attribute did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->get_attribute( 'b' ), 'Accessing an existing attribute did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->get_attribute( 'c' ), 'Accessing an existing attribute did not return true' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->get_attribute( 'd' ), 'Accessing an existing attribute did not return true' ); // obf
		$v_pymon->assertSame( 'test', $v_ilmtj->get_attribute( 'e' ), 'Accessing an existing e="test" did not return "test"' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 * // obf
	 * @dataProvider data_attribute_name_case_variants // obf
	 * // obf
	 * @param string $v_zyzxc Name of data-enabled attribute with case variations. // obf
	 */ // obf
	public function test_get_attribute_is_case_insensitive_for_attributes_with_values( $v_zyzxc ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div DATA-enabled="true">Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertSame( // obf
			'true', // obf
			$v_ilmtj->get_attribute( $v_zyzxc ), // obf
			'Accessing an attribute by a differently-cased name did not return its value' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 * // obf
	 * @dataProvider data_attribute_name_case_variants // obf
	 * // obf
	 * @param string $v_zyzxc Name of data-enabled attribute with case variations. // obf
	 */ // obf
	public function test_attributes_parser_is_case_insensitive_for_attributes_without_values( $v_zyzxc ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div DATA-enabled>Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertTrue( // obf
			$v_ilmtj->get_attribute( $v_zyzxc ), // obf
			'Accessing an attribute by a differently-cased name did not return its value' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_attribute_name_case_variants() { // obf
		return array( // obf
			array( 'DATA-enabled' ), // obf
			array( 'data-enabled' ), // obf
			array( 'DATA-ENABLED' ), // obf
			array( 'DatA-EnABled' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_remove_attribute_is_case_insensitive() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div DATA-enabled="true">Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'data-enabled' ); // obf

		$v_pymon->assertSame( '<div >Test</div>', $v_ilmtj->get_updated_html(), 'A case-insensitive remove_attribute call did not remove the attribute' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_is_case_insensitive() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div DATA-enabled="true">Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'data-enabled', 'abc' ); // obf

		$v_pymon->assertSame( '<div data-enabled="abc">Test</div>', $v_ilmtj->get_updated_html(), 'A case-insensitive set_attribute call did not update the existing attribute' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_null_before_finding_tags() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div data-foo="bar">Test</div>' ); // obf
		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute_names_with_prefix( 'data-' ), // obf
			'Accessing attributes by their prefix did not return null when no tag was selected' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_null_when_not_in_open_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div data-foo="bar">Test</div>' ); // obf
		$v_ilmtj->next_tag( 'p' ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute_names_with_prefix( 'data-' ), 'Accessing attributes of a non-existing tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_null_when_in_closing_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div data-foo="bar">Test</div>' ); // obf
		$v_ilmtj->next_tag( 'div' ); // obf
		$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ); // obf

		$v_pymon->assertNull( $v_ilmtj->get_attribute_names_with_prefix( 'data-' ), 'Accessing attributes of a closing tag did not return null' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_empty_array_when_no_attributes_present() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>Test</div>' ); // obf
		$v_ilmtj->next_tag( 'div' ); // obf

		$v_pymon->assertSame( array(), $v_ilmtj->get_attribute_names_with_prefix( 'data-' ), 'Accessing the attributes on a tag without any did not return an empty array' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_matching_attribute_names_in_lowercase() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div DATA-enabled class="test" data-test-ID="14">Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertSame( // obf
			array( 'data-enabled', 'data-test-id' ), // obf
			$v_ilmtj->get_attribute_names_with_prefix( 'data-' ), // obf
			'Accessing attributes by their prefix did not return their lowercase names' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute_names_with_prefix // obf
	 */ // obf
	public function test_get_attribute_names_with_prefix_returns_attribute_added_by_set_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div data-foo="bar">Test</div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'data-test-id', '14' ); // obf

		$v_pymon->assertSame( // obf
			'<div data-test-id="14" data-foo="bar">Test</div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Updated HTML doesn't include attribute added via set_attribute" // obf
		); // obf
		$v_pymon->assertSame( // obf
			array( 'data-test-id', 'data-foo' ), // obf
			$v_ilmtj->get_attribute_names_with_prefix( 'data-' ), // obf
			"Accessing attribute names doesn't find attribute added via set_attribute" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::__toString // obf
	 */ // obf
	public function test_to_string_returns_updated_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<hr id="remove" /><div enabled class="test">Test</div><span id="span-id"></span>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'id', 'div-id-1' ); // obf
		$v_ilmtj->add_class( 'new_class_1' ); // obf

		$v_pymon->assertSame( // obf
			$v_ilmtj->get_updated_html(), // obf
			(string) $v_ilmtj, // obf
			'get_updated_html() returned a different value than __toString()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_updated_html // obf
	 */ // obf
	public function test_get_updated_html_applies_the_updates_so_far_and_keeps_the_processor_on_the_current_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<hr id="remove" /><div enabled class="test">Test</div><span id="span-id"></span>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'id', 'div-id-1' ); // obf
		$v_ilmtj->add_class( 'new_class_1' ); // obf

		$v_pymon->assertSame( // obf
			'<hr  /><div id="div-id-1" enabled class="test new_class_1">Test</div><span id="span-id"></span>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Calling get_updated_html after updating the attributes of the second tag returned different HTML than expected' // obf
		); // obf

		$v_ilmtj->set_attribute( 'id', 'div-id-2' ); // obf
		$v_ilmtj->add_class( 'new_class_2' ); // obf

		$v_pymon->assertSame( // obf
			'<hr  /><div id="div-id-2" enabled class="test new_class_1 new_class_2">Test</div><span id="span-id"></span>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Calling get_updated_html after updating the attributes of the second tag for the second time returned different HTML than expected' // obf
		); // obf

		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertSame( // obf
			'<hr  /><div id="div-id-2" enabled class="test new_class_1 new_class_2">Test</div><span ></span>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Calling get_updated_html after removing the id attribute of the third tag returned different HTML than expected' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_updated_html // obf
	 */ // obf
	public function test_get_updated_html_without_updating_any_attributes_returns_the_original_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf

		$v_pymon->assertSame( // obf
			self::HTML_SIMPLE, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Casting WP_HTML_Tag_Processor to a string without performing any updates did not return the initial HTML snippet' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that when seeking to an earlier spot in the document that // obf
	 * all previously-enqueued updates are applied as they ought to be. // obf
	 * // obf
	 * @ticket 58160 // obf
	 */ // obf
	public function test_get_updated_html_applies_updates_to_content_after_seeking_to_before_parsed_bytes() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div><img hidden></div>' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'wonky', true ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_bookmark( 'here' ); // obf

		$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ); // obf
		$v_ilmtj->seek( 'here' ); // obf

		$v_pymon->assertSame( '<div wonky><img hidden></div>', $v_ilmtj->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Ensures that bookmarks start and length correctly describe a given token in HTML. // obf
	 * // obf
	 * @ticket 61301 // obf
	 * // obf
	 * @dataProvider data_html_nth_token_substring // obf
	 * // obf
	 * @param string $v_djilv            Input HTML. // obf
	 * @param int    $v_tawgv Which token to inspect from input HTML. // obf
	 * @param string $v_zuiqi  Expected full raw token bookmark should capture. // obf
	 */ // obf
	public function test_token_bookmark_span( string $v_djilv, int $v_tawgv, string $v_zuiqi ) { // obf
		$v_ilmtj = new class( $v_djilv ) extends WP_HTML_Tag_Processor { // obf
			/** // obf
			 * Returns the raw span of HTML for the currently-matched // obf
			 * token, or null if not paused on any token. // obf
			 * // obf
			 * @return string|null Raw HTML content of currently-matched token, // obf
			 *                     otherwise `null` if not matched. // obf
			 */ // obf
			public function get_raw_token() { // obf
				if ( // obf
					WP_HTML_Tag_Processor::STATE_READY === $v_pymon->parser_state || // obf
					WP_HTML_Tag_Processor::STATE_INCOMPLETE_INPUT === $v_pymon->parser_state || // obf
					WP_HTML_Tag_Processor::STATE_COMPLETE === $v_pymon->parser_state // obf
				) { // obf
					return null; // obf
				} // obf

				$v_pymon->set_bookmark( 'mark' ); // obf
				$v_yxudu = $v_pymon->bookmarks['mark']; // obf

				return substr( $v_pymon->html, $v_yxudu->start, $v_yxudu->length ); // obf
			} // obf
		}; // obf

		for ( $v_erxzh = 0; $v_erxzh < $v_tawgv; $v_erxzh++ ) { // obf
			$v_ilmtj->next_token(); // obf
		} // obf

		$v_aytuo = $v_ilmtj->get_raw_token(); // obf
		$v_pymon->assertIsString( // obf
			$v_aytuo, // obf
			"Failed to find raw token at position {$v_tawgv}: check test data provider." // obf
		); // obf

		$v_pymon->assertSame( // obf
			$v_zuiqi, // obf
			$v_aytuo, // obf
			'Bookmarked wrong span of text for full matched token.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_html_nth_token_substring() { // obf
		return array( // obf
			// Tags. // obf
			'DIV start tag'                 => array( '<div>', 1, '<div>' ), // obf
			'DIV start tag with attributes' => array( '<div class="x" disabled>', 1, '<div class="x" disabled>' ), // obf
			'DIV end tag'                   => array( '</div>', 1, '</div>' ), // obf
			'DIV end tag with attributes'   => array( '</div class="x" disabled>', 1, '</div class="x" disabled>' ), // obf
			'Nested DIV'                    => array( '<div><div b>', 2, '<div b>' ), // obf
			'Sibling DIV'                   => array( '<div></div><div b>', 3, '<div b>' ), // obf
			'DIV after text'                => array( 'text <div>', 2, '<div>' ), // obf
			'DIV before text'               => array( '<div> text', 1, '<div>' ), // obf
			'DIV after comment'             => array( '<!-- comment --><div>', 2, '<div>' ), // obf
			'DIV before comment'            => array( '<div><!-- c --> ', 1, '<div>' ), // obf
			'Start "self-closing" tag'      => array( '<div />', 1, '<div />' ), // obf
			'Void tag'                      => array( '<img src="img.png">', 1, '<img src="img.png">' ), // obf
			'Void tag w/self-closing flag'  => array( '<img src="img.png" />', 1, '<img src="img.png" />' ), // obf
			'Void tag inside DIV'           => array( '<div><img src="img.png"></div>', 2, '<img src="img.png">' ), // obf

			// Special atomic tags. // obf
			'SCRIPT tag'                    => array( '<script>inside text</script>', 1, '<script>inside text</script>' ), // obf
			'SCRIPT double-escape'          => array( '<script><!-- <script> echo "</script>"; </script><div>', 1, '<script><!-- <script> echo "</script>"; </script>' ), // obf

			// Text. // obf
			'Text'                          => array( 'Just text', 1, 'Just text' ), // obf
			'Text in DIV'                   => array( '<div>Text<div>', 2, 'Text' ), // obf
			'Text before DIV'               => array( 'Text<div>', 1, 'Text' ), // obf
			'Text after DIV'                => array( '<div></div>Text', 3, 'Text' ), // obf
			'Text after comment'            => array( '<!-- comment -->Text', 2, 'Text' ), // obf
			'Text before comment'           => array( 'Text<!-- c --> ', 1, 'Text' ), // obf

			// Comments. // obf
			'Comment'                       => array( '<!-- comment -->', 1, '<!-- comment -->' ), // obf
			'Comment in DIV'                => array( '<div><!-- comment --><div>', 2, '<!-- comment -->' ), // obf
			'Comment before DIV'            => array( '<!-- comment --><div>', 1, '<!-- comment -->' ), // obf
			'Comment after DIV'             => array( '<div></div><!-- comment -->', 3, '<!-- comment -->' ), // obf
			'Comment after comment'         => array( '<!-- comment --><!-- comment -->', 2, '<!-- comment -->' ), // obf
			'Comment before comment'        => array( '<!-- comment --><!-- c --> ', 1, '<!-- comment -->' ), // obf
			'Abruptly closed comment'       => array( '<!-->', 1, '<!-->' ), // obf
			'Empty comment'                 => array( '<!---->', 1, '<!---->' ), // obf
			'Funky comment'                 => array( '</_ funk >', 1, '</_ funk >' ), // obf
			'PI lookalike comment'          => array( '<?processing instruction?>', 1, '<?processing instruction?>' ), // obf
			'CDATA lookalike comment'       => array( '<![CDATA[ see? data ]]>', 1, '<![CDATA[ see? data ]]>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_next_tag_with_no_arguments_should_find_the_next_existing_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag(), 'Querying an existing tag did not return true' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_next_tag_should_return_false_for_a_non_existing_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'p' ), 'Querying a non-existing tag did not return false' ); // obf
	} // obf

	/** // obf
	 * @ticket 61545 // obf
	 */ // obf
	public function test_next_tag_should_not_match_on_substrings_of_a_requested_tag() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<p><pic><picture>' ); // obf

		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( 'PICTURE' ), // obf
			'Failed to find a tag when requested: check test setup.' // obf
		); // obf

		$v_pymon->assertSame( // obf
			'PICTURE', // obf
			$v_ilmtj->get_tag(), // obf
			'Should have skipped past substring tag matches, directly finding the PICTURE element.' // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( '<p><pic>' ); // obf

		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag( 'PICTURE' ), // obf
			"Should not have found any PICTURE element, but found '{$v_ilmtj->get_token_name()}' instead." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_next_tag_matches_decoded_class_names() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="&lt;egg&gt;">' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'class_name' => '<egg>' ) ), 'Failed to find tag with HTML-encoded class name.' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * @ticket 57852 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::is_tag_closer // obf
	 */ // obf
	public function test_next_tag_should_stop_on_closers_only_when_requested() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div><img /></div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_name' => 'div' ) ), 'Did not find desired tag opener' ); // obf
		$v_pymon->assertFalse( $v_ilmtj->next_tag( array( 'tag_name' => 'div' ) ), 'Visited an unwanted tag, a tag closer' ); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( '<div><img /></div>' ); // obf
		$v_ilmtj->next_tag( // obf
			array( // obf
				'tag_name'    => 'div', // obf
				'tag_closers' => 'visit', // obf
			) // obf
		); // obf

		$v_pymon->assertFalse( $v_ilmtj->is_tag_closer(), 'Indicated a tag opener is a tag closer' ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( // obf
				array( // obf
					'tag_name'    => 'div', // obf
					'tag_closers' => 'visit', // obf
				) // obf
			), // obf
			'Did not stop at desired tag closer' // obf
		); // obf
		$v_pymon->assertTrue( $v_ilmtj->is_tag_closer(), 'Indicated a tag closer is a tag opener' ); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), "Did not find a tag opener when tag_closers was set to 'visit'" ); // obf
		$v_pymon->assertFalse( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), "Found a closer where there wasn't one" ); // obf
	} // obf

	/** // obf
	 * @ticket 57852 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::is_tag_closer // obf
	 */ // obf
	public function test_next_tag_should_stop_on_rcdata_and_script_tag_closers_when_requested() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<script>abc</script>' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), // obf
			'Should not have found closing SCRIPT tag when closing an opener.' // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( 'abc</script>' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), 'Did not find the </script> tag closer when there was no tag opener' ); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( '<textarea>abc</textarea>' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), // obf
			'Should not have found closing TEXTAREA when closing an opener.' // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( 'abc</textarea>' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), 'Did not find the </textarea> tag closer when there was no tag opener' ); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( '<title>abc</title>' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), // obf
			'Should not have found closing TITLE when closing an opener.' // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( 'abc</title>' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), 'Did not find the </title> tag closer when there was no tag opener' ); // obf
	} // obf

	/** // obf
	 * Verifies that updates to a document before calls to `get_updated_html()` don't // obf
	 * lead to the Tag Processor jumping to the wrong tag after the updates. // obf
	 * // obf
	 * @ticket 58179 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_updated_html // obf
	 */ // obf
	public function test_internal_pointer_returns_to_original_spot_after_inserting_content_before_cursor() { // obf
		$v_jhlqh = new WP_HTML_Tag_Processor( '<div>outside</div><section><div><img>inside</div></section>' ); // obf

		$v_jhlqh->next_tag(); // obf
		$v_jhlqh->add_class( 'foo' ); // obf
		$v_jhlqh->next_tag( 'section' ); // obf

		// Return to this spot after moving ahead. // obf
		$v_jhlqh->set_bookmark( 'here' ); // obf

		// Move ahead. // obf
		$v_jhlqh->next_tag( 'img' ); // obf
		$v_jhlqh->seek( 'here' ); // obf
		$v_pymon->assertSame( '<div class="foo">outside</div><section><div><img>inside</div></section>', $v_jhlqh->get_updated_html() ); // obf
		$v_pymon->assertSame( 'SECTION', $v_jhlqh->get_tag() ); // obf
		$v_pymon->assertFalse( $v_jhlqh->is_tag_closer() ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_on_a_non_existing_tag_does_not_change_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'p' ), 'Querying a non-existing tag did not return false' ); // obf
		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'div' ), 'Querying a non-existing tag did not return false' ); // obf

		$v_ilmtj->set_attribute( 'id', 'primary' ); // obf

		$v_pymon->assertSame( // obf
			self::HTML_SIMPLE, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Calling get_updated_html after updating a non-existing tag returned an HTML that was different from the original HTML' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_attribute_ops_on_tag_closer_do_not_change_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div id=3></div invalid-id=4>' ); // obf
		$v_ilmtj->next_tag( // obf
			array( // obf
				'tag_name'    => 'div', // obf
				'tag_closers' => 'visit', // obf
			) // obf
		); // obf

		$v_pymon->assertFalse( $v_ilmtj->is_tag_closer(), 'Skipped tag opener' ); // obf

		$v_ilmtj->next_tag( // obf
			array( // obf
				'tag_name'    => 'div', // obf
				'tag_closers' => 'visit', // obf
			) // obf
		); // obf

		$v_pymon->assertTrue( $v_ilmtj->is_tag_closer(), 'Skipped tag closer' ); // obf
		$v_pymon->assertFalse( $v_ilmtj->set_attribute( 'id', 'test' ), "Allowed setting an attribute on a tag closer when it shouldn't have" ); // obf
		$v_pymon->assertFalse( $v_ilmtj->remove_attribute( 'invalid-id' ), "Allowed removing an attribute on a tag closer when it shouldn't have" ); // obf
		$v_pymon->assertFalse( $v_ilmtj->add_class( 'sneaky' ), "Allowed adding a class on a tag closer when it shouldn't have" ); // obf
		$v_pymon->assertFalse( $v_ilmtj->remove_class( 'not-appearing-in-this-test' ), "Allowed removing a class on a tag closer when it shouldn't have" ); // obf
		$v_pymon->assertSame( // obf
			'<div id=3></div invalid-id=4>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Calling get_updated_html after updating a non-existing tag returned an HTML that was different from the original HTML' // obf
		); // obf
	} // obf

	/** // obf
	 * Passing a double quote inside of an attribute value could lead to an XSS attack as follows: // obf
	 * // obf
	 * ```php // obf
	 *     $v_ilmtj = new WP_HTML_Tag_Processor( '<div class="header"></div>' ); // obf
	 *     $v_ilmtj->next_tag(); // obf
	 *     $v_ilmtj->set_attribute('class', '" onclick="alert'); // obf
	 *     echo $v_nsluv; // obf
	 *     // <div class="" onclick="alert"></div> // obf
	 * ``` // obf
	 * // obf
	 * To prevent it, `set_attribute` calls `esc_attr()` on its given values. // obf
	 * // obf
	 * ```php // obf
	 *    <div class="&quot; onclick=&quot;alert"></div> // obf
	 * ``` // obf
	 * // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @dataProvider data_set_attribute_prevents_xss // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 * // obf
	 * @param string $v_hxuxz A value with potential XSS exploit. // obf
	 */ // obf
	public function test_set_attribute_prevents_xss( $v_hxuxz ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div></div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'test', $v_hxuxz ); // obf

		/* // obf
		 * Testing the escaping is hard using tools that properly parse // obf
		 * HTML because they might interpret the escaped values. It's hard // obf
		 * with tools that don't understand HTML because they might get // obf
		 * confused by improperly-escaped values. // obf
		 * // obf
		 * Since the input HTML is known, the test will do what looks like // obf
		 * the opposite of what is expected to be done with this library. // obf
		 * But by doing so, the test (a) has full control over the // obf
		 * content and (b) looks at the raw values. // obf
		 */ // obf
		$v_omlhk = null; // obf
		preg_match( '~^<div test=(.*)></div>$~', $v_ilmtj->get_updated_html(), $v_omlhk ); // obf
		list( , $v_hrkdb ) = $v_omlhk; // obf

		$v_pymon->assertSame( '"' . esc_attr( $v_hxuxz ) . '"', $v_hrkdb, 'Entities were not properly escaped in the attribute value' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return string[][]. // obf
	 */ // obf
	public static function data_set_attribute_prevents_xss() { // obf
		return array( // obf
			array( '"' ), // obf
			array( '&quot;' ), // obf
			array( '&' ), // obf
			array( '&amp;' ), // obf
			array( '&euro;' ), // obf
			array( "'" ), // obf
			array( '<>' ), // obf
			array( '&quot";' ), // obf
			array( '" onclick="alert(\'1\');"><span onclick=""></span><script>alert("1")</script>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_with_a_non_existing_attribute_adds_a_new_attribute_to_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'test-attribute', 'test-value' ); // obf

		$v_pymon->assertSame( // obf
			'<div test-attribute="test-value" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include attribute added via set_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'test-value', // obf
			$v_ilmtj->get_attribute( 'test-attribute' ), // obf
			'get_attribute() (called after get_updated_html()) did not return attribute added via set_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_updated_values_before_they_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'test-attribute', 'test-value' ); // obf

		$v_pymon->assertSame( // obf
			'test-value', // obf
			$v_ilmtj->get_attribute( 'test-attribute' ), // obf
			'get_attribute() (called before get_updated_html()) did not return attribute added via set_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div test-attribute="test-value" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include attribute added via set_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_returns_updated_values_before_they_are_applied_with_different_name_casing() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'test-ATTribute', 'test-value' ); // obf

		$v_pymon->assertSame( // obf
			'test-value', // obf
			$v_ilmtj->get_attribute( 'test-attribute' ), // obf
			'get_attribute() (called before get_updated_html()) did not return attribute added via set_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div test-ATTribute="test-value" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include attribute added via set_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_added_class_names_before_they_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'my-class' ); // obf

		$v_pymon->assertSame( // obf
			'my-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) did not return class name added via add_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="my-class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include class name added via add_class()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_added_class_names_before_they_are_applied_and_retains_classes_from_previous_add_class_calls() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'my-class' ); // obf

		$v_pymon->assertSame( // obf
			'my-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) did not return class name added via add_class()' // obf
		); // obf

		$v_ilmtj->add_class( 'my-other-class' ); // obf

		$v_pymon->assertSame( // obf
			'my-class my-other-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) did not return class names added via subsequent add_class() calls' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="my-class my-other-class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include class names added via subsequent add_class() calls' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_removed_attribute_before_it_is_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'id' ), // obf
			'get_attribute() (called before get_updated_html()) returned attribute that was removed by remove_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div ><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes attribute that was removed by remove_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_adding_and_then_removing_an_attribute_before_those_updates_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'test-attribute', 'test-value' ); // obf
		$v_ilmtj->remove_attribute( 'test-attribute' ); // obf

		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'test-attribute' ), // obf
			'get_attribute() (called before get_updated_html()) returned attribute that was added via set_attribute() and then removed by remove_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			self::HTML_SIMPLE, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes attribute that was added via set_attribute() and then removed by remove_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_setting_and_then_removing_an_existing_attribute_before_those_updates_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'id', 'test-value' ); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'id' ), // obf
			'get_attribute() (called before get_updated_html()) returned attribute that was overwritten by set_attribute() and then removed by remove_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div ><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes attribute that was overwritten by set_attribute() and then removed by remove_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_removed_class_names_before_they_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'with-border' ); // obf

		$v_pymon->assertSame( // obf
			'main', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) returned the wrong attribute after calling remove_attribute()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="main" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes wrong attribute after calling remove_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_setting_and_then_removing_a_class_name_before_those_updates_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'foo-class' ); // obf
		$v_ilmtj->remove_class( 'foo-class' ); // obf

		$v_pymon->assertSame( // obf
			'main with-border', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) returned class name that was added via add_class() and then removed by remove_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			self::HTML_WITH_CLASSES, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes class that was added via add_class() and then removed by remove_class()' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::get_attribute // obf
	 */ // obf
	public function test_get_attribute_reflects_duplicating_and_then_removing_an_existing_class_name_before_those_updates_are_applied() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'with-border' ); // obf
		$v_ilmtj->remove_class( 'with-border' ); // obf

		$v_pymon->assertSame( // obf
			'main', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			'get_attribute() (called before get_updated_html()) returned class name that was duplicated via add_class() and then removed by remove_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="main" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes class that was duplicated via add_class() and then removed by remove_class()' // obf
		); // obf
	} // obf

	/** // obf
	 * According to HTML spec, only the first instance of an attribute counts. // obf
	 * The other ones are ignored. // obf
	 * // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_update_first_attribute_when_duplicated_attributes_exist() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div id="update-me" id="ignored-id"><span id="second">Text</span></div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'id', 'updated-id' ); // obf

		$v_pymon->assertSame( // obf
			'<div id="updated-id" id="ignored-id"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Proper (first) appearance of attribute was not updated when duplicates exist' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_with_an_existing_attribute_name_updates_its_value_in_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'id', 'new-id' ); // obf
		$v_pymon->assertSame( // obf
			'<div id="new-id"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Existing attribute was not updated' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that when setting an attribute multiple times that only // obf
	 * one update flushes out into the updated HTML. // obf
	 * // obf
	 * @ticket 58146 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_with_case_variants_updates_only_the_original_first_copy() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div data-enabled="5">' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'DATA-ENABLED', 'canary' ); // obf
		$v_ilmtj->set_attribute( 'Data-Enabled', 'canary' ); // obf
		$v_ilmtj->set_attribute( 'dATa-EnABled', 'canary' ); // obf

		$v_pymon->assertSame( '<div data-enabled="canary">', strtolower( $v_ilmtj->get_updated_html() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_next_tag_and_set_attribute_in_a_loop_update_all_tags_in_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		while ( $v_ilmtj->next_tag() ) { // obf
			$v_ilmtj->set_attribute( 'data-foo', 'bar' ); // obf
		} // obf

		$v_pymon->assertSame( // obf
			'<div data-foo="bar" id="first"><span data-foo="bar" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Not all tags were updated when looping with next_tag() and set_attribute()' // obf
		); // obf
	} // obf

	/** // obf
	 * Removing an attribute that's listed many times, e.g. `<div id="a" id="b" />` should remove // obf
	 * all its instances and output just `<div />`. // obf
	 * // obf
	 * @since 6.3.2 Removes all duplicated attributes as expected. // obf
	 * // obf
	 * @ticket 58119 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_remove_first_when_duplicated_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div id="update-me" id="ignored-id"><span id="second">Text</span></div>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertStringNotContainsString( // obf
			'update-me', // obf
			$v_ilmtj->get_updated_html(), // obf
			'First attribute (when duplicates exist) was not removed' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_remove_attribute_with_an_existing_attribute_name_removes_it_from_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertSame( // obf
			'<div ><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Attribute was not removed' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58119 // obf
	 * // obf
	 * @since 6.3.2 Removes all duplicated attributes as expected. // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 * // obf
	 * @dataProvider data_html_with_duplicated_attributes // obf
	 */ // obf
	public function test_remove_attribute_with_duplicated_attributes_removes_all_of_them( $v_qstrk, $v_fbjxp ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_qstrk ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_ilmtj->remove_attribute( $v_fbjxp ); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute( $v_fbjxp ), 'Failed to remove all copies of an attribute when duplicated in modified source.' ); // obf

		// Recreate a tag processor with the updated HTML after removing the attribute. // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_ilmtj->get_updated_html() ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertNull( $v_ilmtj->get_attribute( $v_fbjxp ), 'Failed to remove all copies of duplicated attributes when getting updated HTML.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58119 // obf
	 * // obf
	 * @since 6.3.2 Removes all duplicated attributes as expected. // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_previous_duplicated_attributes_are_not_removed_on_successive_tag_removal() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<span id=one id=two id=three><span id=four>' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf

		$v_pymon->assertSame( '<span id=one id=two id=three><span >', $v_ilmtj->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @ticket 58119 // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_with_duplicated_attributes() { // obf
		return array( // obf
			'Double attributes'               => array( '<div id=one id=two>', 'id' ), // obf
			'Triple attributes'               => array( '<div id=one id=two id=three>', 'id' ), // obf
			'Duplicates around another'       => array( '<img src="test.png" alt="kites flying in the wind" src="kites.jpg">', 'src' ), // obf
			'Case-variants of attribute'      => array( '<button disabled inert DISABLED dISaBled INERT DisABleD>', 'disabled' ), // obf
			'Case-variants of attribute name' => array( '<button disabled inert DISABLED dISaBled INERT DisABleD>', 'DISABLED' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_remove_attribute_with_a_non_existing_attribute_name_does_not_change_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_attribute( 'no-such-attribute' ); // obf

		$v_pymon->assertSame( // obf
			self::HTML_SIMPLE, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Content was changed when attempting to remove an attribute that did not exist' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_creates_a_class_attribute_when_there_is_none() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'foo-class' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="foo-class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include class name added via add_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'foo-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) did not return class name added via add_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_calling_add_class_twice_creates_a_class_attribute_with_both_class_names_when_there_is_no_class_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'foo-class' ); // obf
		$v_ilmtj->add_class( 'bar-class' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="foo-class bar-class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not include class names added via subsequent add_class() calls' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'foo-class bar-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) did not return class names added via subsequent add_class() calls" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_remove_class_does_not_change_the_markup_when_there_is_no_class_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'foo-class' ); // obf

		$v_pymon->assertSame( // obf
			self::HTML_SIMPLE, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML includes class name that was removed by remove_class()' // obf
		); // obf
		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) did not return null for class name that was removed by remove_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_appends_class_names_to_the_existing_class_attribute_when_one_already_exists() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'foo-class' ); // obf
		$v_ilmtj->add_class( 'bar-class' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="main with-border foo-class bar-class" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect class names added to existing class attribute via subsequent add_class() calls' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'main with-border foo-class bar-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect class names added to existing class attribute via subsequent add_class() calls" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_remove_class_removes_a_single_class_from_the_class_attribute_when_one_exists() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'main' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="with-border" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect class name removed from existing class attribute via remove_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'with-border', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect class name removed from existing class attribute via remove_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_calling_remove_class_with_all_listed_class_names_removes_the_existing_class_attribute_from_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'main' ); // obf
		$v_ilmtj->remove_class( 'with-border' ); // obf

		$v_pymon->assertSame( // obf
			'<div  id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect class attribute removed via subesequent remove_class() calls' // obf
		); // obf
		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) did not return null for class attribute removed via subesequent remove_class() calls" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_does_not_add_duplicate_class_names() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'with-border' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="main with-border" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect deduplicated class name added via add_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'main with-border', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect deduplicated class name added via add_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_preserves_class_name_order_when_a_duplicate_class_name_is_added() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'main' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="main with-border" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect class name order after adding duplicated class name via add_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'main with-border', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect class name order after adding duplicated class name added via add_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_when_there_is_a_class_attribute_with_excessive_whitespaces() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<div class="   main   with-border   " id="first"><span class="not-main bold with-border" id="second">Text</span></div>' // obf
		); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'foo-class' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="main   with-border foo-class" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect existing excessive whitespace after adding class name via add_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'main   with-border foo-class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect existing excessive whitespace after adding class name via add_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_remove_class_preserves_whitespaces_when_there_is_a_class_attribute_with_excessive_whitespaces() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<div class="   main   with-border   " id="first"><span class="not-main bold with-border" id="second">Text</span></div>' // obf
		); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'with-border' ); // obf

		$v_pymon->assertSame( // obf
			'<div class="main" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect existing excessive whitespace after removing class name via remove_class()' // obf
		); // obf
		$v_pymon->assertSame( // obf
			'main', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) does not reflect existing excessive whitespace after removing class name via removing_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 */ // obf
	public function test_removing_all_classes_removes_the_existing_class_attribute_from_the_markup_even_when_excessive_whitespaces_are_present() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<div class="   main   with-border   " id="first"><span class="not-main bold with-border" id="second">Text</span></div>' // obf
		); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->remove_class( 'main' ); // obf
		$v_ilmtj->remove_class( 'with-border' ); // obf
		$v_pymon->assertSame( // obf
			'<div  id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Updated HTML does not reflect removed class attribute after removing all class names via remove_class()' // obf
		); // obf
		$v_pymon->assertNull( // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute( 'class' ) did not return null after removing all class names via remove_class()" // obf
		); // obf
	} // obf

	/** // obf
	 * When add_class( $v_pwbtz ) is called _after_ set_attribute( 'class', $v_njpow ), the // obf
	 * final class name should be "$v_njpow $v_pwbtz". In other words, the `add_class` call // obf
	 * should append its class to the one(s) set by `set_attribute`. When `add_class( $v_pwbtz )` // obf
	 * is called _before_ `set_attribute( 'class', $v_njpow )`, however, the final class name should be // obf
	 * "$v_njpow" instead, as any direct updates to the `class` attribute supersede any changes enqueued // obf
	 * via the class builder methods. // obf
	 * // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_takes_priority_over_add_class() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_ilmtj->set_attribute( 'class', 'set_attribute' ); // obf
		$v_pymon->assertSame( // obf
			'<div class="set_attribute" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Calling get_updated_html after updating first tag's attributes did not return the expected HTML" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'set_attribute', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"Calling get_attribute after updating first tag's attributes did not return the expected class name" // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'class', 'set_attribute' ); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_pymon->assertSame( // obf
			'<div class="set_attribute add_class" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Calling get_updated_html after updating first tag's attributes did not return the expected HTML" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'set_attribute add_class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"Calling get_attribute after updating first tag's attributes did not return the expected class name" // obf
		); // obf
	} // obf

	/** // obf
	 * When add_class( $v_pwbtz ) is called _after_ set_attribute( 'class', $v_njpow ), the // obf
	 * final class name should be "$v_njpow $v_pwbtz". In other words, the `add_class` call // obf
	 * should append its class to the one(s) set by `set_attribute`. When `add_class( $v_pwbtz )` // obf
	 * is called _before_ `set_attribute( 'class', $v_njpow )`, however, the final class name should be // obf
	 * "$v_njpow" instead, as any direct updates to the `class` attribute supersede any changes enqueued // obf
	 * via the class builder methods. // obf
	 * // obf
	 * This is still true when reading enqueued updates before calling `get_updated_html()`. // obf
	 * // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_takes_priority_over_add_class_even_before_updating() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_ilmtj->set_attribute( 'class', 'set_attribute' ); // obf
		$v_pymon->assertSame( // obf
			'set_attribute', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"Calling get_attribute after updating first tag's attributes did not return the expected class name" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="set_attribute" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Calling get_updated_html after updating first tag's attributes did not return the expected HTML" // obf
		); // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_WITH_CLASSES ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'class', 'set_attribute' ); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_pymon->assertSame( // obf
			'set_attribute add_class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"Calling get_attribute after updating first tag's attributes did not return the expected class name" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="set_attribute add_class" id="first"><span class="not-main bold with-border" id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Calling get_updated_html after updating first tag's attributes did not return the expected HTML" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_overrides_boolean_class_attribute() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'class', true ); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_pymon->assertSame( // obf
			'<div class="add_class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Updated HTML doesn't reflect class added via add_class that was originally set as boolean attribute" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'add_class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute (called after get_updated_html()) doesn't reflect class added via add_class that was originally set as boolean attribute" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 */ // obf
	public function test_add_class_overrides_boolean_class_attribute_even_before_updating() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_SIMPLE ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'class', true ); // obf
		$v_ilmtj->add_class( 'add_class' ); // obf
		$v_pymon->assertSame( // obf
			'add_class', // obf
			$v_ilmtj->get_attribute( 'class' ), // obf
			"get_attribute (called before get_updated_html()) doesn't reflect class added via add_class that was originally set as boolean attribute" // obf
		); // obf
		$v_pymon->assertSame( // obf
			'<div class="add_class" id="first"><span id="second">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			"Updated HTML doesn't reflect class added via add_class that was originally set as boolean attribute" // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::remove_class // obf
	 * @covers WP_HTML_Tag_Processor::get_updated_html // obf
	 */ // obf
	public function test_advanced_use_case() { // obf
		$v_ndzja = <<<HTML // obf
<div selected class="merge-message" checked> // obf
	<div class="select-menu d-inline-block"> // obf
		<div checked class="BtnGroup MixedCaseHTML position-relative" /> // obf
		<div checked class="BtnGroup MixedCaseHTML position-relative"> // obf
			<button type="button" class="merge-box-button btn-group-merge rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Merge pull request // obf
			</button> // obf

			<button type="button" class="merge-box-button btn-group-squash rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Squash and merge // obf
			</button> // obf

			<button type="button" class="merge-box-button btn-group-rebase rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Rebase and merge // obf
			</button> // obf

			<button aria-label="Select merge method" disabled="disabled" type="button" data-view-component="true" class="select-menu-button btn BtnGroup-item"></button> // obf
		</div> // obf
	</div> // obf
</div> // obf
HTML; // obf

		$v_elpvt = <<<HTML // obf
<div data-details="{ &quot;key&quot;: &quot;value&quot; }" selected class="merge-message is-processed" checked> // obf
	<div class="select-menu d-inline-block"> // obf
		<div checked class="MixedCaseHTML position-relative button-group Another-Mixed-Case" /> // obf
		<div checked class="MixedCaseHTML position-relative button-group Another-Mixed-Case"> // obf
			<button type="button" class="merge-box-button btn-group-merge rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Merge pull request // obf
			</button> // obf

			<button type="button" class="merge-box-button btn-group-squash rounded-left-2 btn  BtnGroup-item js-details-target hx_create-pr-button" aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Squash and merge // obf
			</button> // obf

			<button type="button"  aria-expanded="false" data-details-container=".js-merge-pr" disabled=""> // obf
			  Rebase and merge // obf
			</button> // obf

			<button aria-label="Select merge method" disabled="disabled" type="button" data-view-component="true" class="select-menu-button btn BtnGroup-item"></button> // obf
		</div> // obf
	</div> // obf
</div> // obf
HTML; // obf

		$v_ilmtj = new WP_HTML_Tag_Processor( $v_ndzja ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'div' ), 'Did not find first DIV tag in input.' ); // obf
		$v_ilmtj->set_attribute( 'data-details', '{ "key": "value" }' ); // obf
		$v_ilmtj->add_class( 'is-processed' ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( // obf
				array( // obf
					'tag_name'   => 'div', // obf
					'class_name' => 'BtnGroup', // obf
				) // obf
			), // obf
			'Did not find the first BtnGroup DIV tag' // obf
		); // obf
		$v_ilmtj->remove_class( 'BtnGroup' ); // obf
		$v_ilmtj->add_class( 'button-group' ); // obf
		$v_ilmtj->add_class( 'Another-Mixed-Case' ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( // obf
				array( // obf
					'tag_name'   => 'div', // obf
					'class_name' => 'BtnGroup', // obf
				) // obf
			), // obf
			'Did not find the second BtnGroup DIV tag' // obf
		); // obf
		$v_ilmtj->remove_class( 'BtnGroup' ); // obf
		$v_ilmtj->add_class( 'button-group' ); // obf
		$v_ilmtj->add_class( 'Another-Mixed-Case' ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( // obf
				array( // obf
					'tag_name'     => 'button', // obf
					'class_name'   => 'btn', // obf
					'match_offset' => 3, // obf
				) // obf
			), // obf
			'Did not find third BUTTON tag with "btn" CSS class' // obf
		); // obf
		$v_ilmtj->remove_attribute( 'class' ); // obf
		$v_pymon->assertFalse( $v_ilmtj->next_tag( 'non-existent' ), "Found a {$v_ilmtj->get_tag()} tag when none should have been found." ); // obf
		$v_ilmtj->set_attribute( 'class', 'test' ); // obf
		$v_pymon->assertSame( $v_elpvt, $v_ilmtj->get_updated_html(), 'Calling get_updated_html after updating the attributes did not return the expected HTML' ); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_correctly_parses_html_attributes_wrapped_in_single_quotation_marks() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<div id=\'first\'><span id=\'second\'>Text</span></div>' // obf
		); // obf
		$v_ilmtj->next_tag( // obf
			array( // obf
				'tag_name' => 'div', // obf
				'id'       => 'first', // obf
			) // obf
		); // obf
		$v_ilmtj->remove_attribute( 'id' ); // obf
		$v_ilmtj->next_tag( // obf
			array( // obf
				'tag_name' => 'span', // obf
				'id'       => 'second', // obf
			) // obf
		); // obf
		$v_ilmtj->set_attribute( 'id', 'single-quote' ); // obf
		$v_pymon->assertSame( // obf
			'<div ><span id="single-quote">Text</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not remove single-quoted attribute' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_set_attribute_with_value_equal_to_true_adds_a_boolean_html_attribute_with_implicit_value() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<form action="/action_page.php"><input type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>' // obf
		); // obf
		$v_ilmtj->next_tag( 'input' ); // obf
		$v_ilmtj->set_attribute( 'checked', true ); // obf
		$v_pymon->assertSame( // obf
			'<form action="/action_page.php"><input checked type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not add "checked" as an expected boolean attribute' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_setting_a_boolean_attribute_to_false_removes_it_from_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<form action="/action_page.php"><input checked type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>' // obf
		); // obf
		$v_ilmtj->next_tag( 'input' ); // obf
		$v_ilmtj->set_attribute( 'checked', false ); // obf
		$v_pymon->assertSame( // obf
			'<form action="/action_page.php"><input  type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not remove boolean attribute when set to false' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_setting_a_missing_attribute_to_false_does_not_change_the_markup() { // obf
		$v_huguk = '<form action="/action_page.php"><input type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>'; // obf
		$v_ilmtj  = new WP_HTML_Tag_Processor( $v_huguk ); // obf
		$v_ilmtj->next_tag( 'input' ); // obf
		$v_ilmtj->set_attribute( 'checked', false ); // obf
		$v_pymon->assertSame( // obf
			$v_huguk, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Changed the markup unexpectedly when setting a non-existing attribute to false' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_setting_a_boolean_attribute_to_a_string_value_adds_explicit_value_to_the_markup() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<form action="/action_page.php"><input checked type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>' // obf
		); // obf
		$v_ilmtj->next_tag( 'input' ); // obf
		$v_ilmtj->set_attribute( 'checked', 'checked' ); // obf
		$v_pymon->assertSame( // obf
			'<form action="/action_page.php"><input checked="checked" type="checkbox" name="vehicle" value="Bike"><label for="vehicle">I have a bike</label></form>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not add string value to existing boolean attribute' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::paused_at_incomplete_token // obf
	 */ // obf
	public function test_unclosed_script_tag_should_not_cause_an_infinite_loop() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<script><div>' ); // obf
		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag(), // obf
			'Should not have stopped on an opening SCRIPT tag without a proper closing tag in the document.' // obf
		); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->paused_at_incomplete_token(), // obf
			"Should have paused the parser because of the incomplete SCRIPT tag but didn't." // obf
		); // obf

		// Run this to ensure that the test ends (not in an infinite loop). // obf
		$v_ilmtj->next_tag(); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_next_tag_ignores_script_tag_contents // obf
	 * // obf
	 * @param string $v_pudvx HTML to test. // obf
	 */ // obf
	public function test_next_tag_ignores_script_tag_contents( $v_pudvx ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_pudvx ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'SCRIPT', $v_ilmtj->get_tag(), 'The first found tag was not "script"' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'DIV', $v_ilmtj->get_tag(), 'The second found tag was not "div"' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_next_tag_ignores_script_tag_contents() { // obf
		return array( // obf
			'Simple script tag'                          => array( // obf
				'<script><span class="d-none d-md-inline">Back to notifications</span></script><div></div>', // obf
			), // obf

			'Simple uppercase script tag'                => array( // obf
				'<script><span class="d-none d-md-inline">Back to notifications</span></SCRIPT><div></div>', // obf
			), // obf

			'Script with a comment opener inside should end at the next script tag closer (dash dash escaped state)' => array( // obf
				'<script class="d-md-none"><!--</script><div></div>-->', // obf
			), // obf

			'Script with a comment opener and a script tag opener inside should end two script tag closer later (double escaped state)' => array( // obf
				'<script class="d-md-none"><!--<script><span1></script><span2></span2></script><div></div>-->', // obf
			), // obf

			'Double escaped script with a tricky opener' => array( // obf
				'<script class="d-md-none"><!--<script attr="</script>"></script>"><div></div>', // obf
			), // obf

			'Double escaped script with a tricky closer' => array( // obf
				'<script class="d-md-none"><!--<script><span></script attr="</script>"><div></div>', // obf
			), // obf

			'Double escaped, then escaped, then double escaped' => array( // obf
				'<script class="d-md-none"><!--<script></script><script></script><span></span></script><div></div>', // obf
			), // obf

			'Script with a commented a script tag opener inside should at the next tag closer (dash dash escaped state)' => array( // obf
				'<script class="d-md-none"><!--<script>--><span></script><div></div>-->', // obf
			), // obf

			'Script closer with another script tag in closer attributes' => array( // obf
				'<script><span class="d-none d-md-inline">Back to notifications</title</span></script <script><div></div>', // obf
			), // obf

			'Script closer with attributes'              => array( // obf
				'<script class="d-md-none"><span class="d-none d-md-inline">Back to notifications</span></script id="test"><div></div>', // obf
			), // obf

			'Script opener with title closer inside'     => array( // obf
				'<script class="d-md-none"></title></script><div></div>', // obf
			), // obf

			'Complex script with many parsing states'    => array( // obf
				'<script class="d-md-none"><!--<script>--><scRipt><span><!--<span><Script</script>--></scripT><div></div>-->', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Invalid tag names are comments on tag closers. // obf
	 * // obf
	 * @ticket 58007 // obf
	 * // obf
	 * @link https://html.spec.whatwg.org/#parse-error-invalid-first-character-of-tag-name // obf
	 * // obf
	 * @dataProvider data_next_tag_ignores_invalid_first_character_of_tag_name_comments // obf
	 * // obf
	 * @param string $v_fparo HTML containing an invalid tag closer whose element before and // obf
	 *                                  element after contain the "start" and "end" CSS classes. // obf
	 */ // obf
	public function test_next_tag_ignores_invalid_first_character_of_tag_name_comments( $v_fparo ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_fparo ); // obf
		$v_ilmtj->next_tag( array( 'class_name' => 'start' ) ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertSame( 'end', $v_ilmtj->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_next_tag_ignores_invalid_first_character_of_tag_name_comments() { // obf
		return array( // obf
			'Invalid tag openers as normal text'           => array( // obf
				'<ul><li><div class=start>I <3 when outflow > inflow</div><img class=end></li></ul>', // obf
			), // obf

			'Invalid tag closers as comments'              => array( // obf
				'<ul><li><div class=start>I </3 when <img> outflow <br class=end> inflow</div></li></ul>', // obf
			), // obf

			'Unexpected question mark instead of tag name' => array( // obf
				'<div class=start><?xml-stylesheet type="text/css" href="style.css"?><hr class=end>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_next_tag_ignores_contents_of_rcdata_tag // obf
	 * // obf
	 * @param string $v_haxrd HTML with RCDATA before a DIV. // obf
	 * @param string $v_oczqk      RCDATA tag. // obf
	 */ // obf
	public function test_next_tag_ignores_contents_of_rcdata_tag( $v_haxrd, $v_oczqk ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_haxrd ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( $v_oczqk, $v_ilmtj->get_tag(), "The first found tag was not '$v_oczqk'" ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'DIV', $v_ilmtj->get_tag(), "The second found tag was not 'div'" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_next_tag_ignores_contents_of_rcdata_tag() { // obf
		return array( // obf
			'simple textarea'                          => array( // obf
				'rcdata_then_div' => '<textarea><span class="d-none d-md-inline">Back to notifications</span></textarea><div></div>', // obf
				'rcdata_tag'      => 'TEXTAREA', // obf
			), // obf
			'simple title'                             => array( // obf
				'rcdata_then_div' => '<title><span class="d-none d-md-inline">Back to notifications</title</span></title><div></div>', // obf
				'rcdata_tag'      => 'TITLE', // obf
			), // obf
			'comment opener inside a textarea tag should be ignored' => array( // obf
				'rcdata_then_div' => '<textarea class="d-md-none"><!--</textarea><div></div>-->', // obf
				'rcdata_tag'      => 'TEXTAREA', // obf
			), // obf
			'textarea closer with another textarea tag in closer attributes' => array( // obf
				'rcdata_then_div' => '<textarea><span class="d-none d-md-inline">Back to notifications</title</span></textarea <textarea><div></div>', // obf
				'rcdata_tag'      => 'TEXTAREA', // obf
			), // obf
			'textarea closer with attributes'          => array( // obf
				'rcdata_then_div' => '<textarea class="d-md-none"><span class="d-none d-md-inline">Back to notifications</span></textarea id="test"><div></div>', // obf
				'rcdata_tag'      => 'TEXTAREA', // obf
			), // obf
			'textarea opener with title closer inside' => array( // obf
				'rcdata_then_div' => '<textarea class="d-md-none"></title></textarea><div></div>', // obf
				'rcdata_tag'      => 'TEXTAREA', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures matching elements inside NOSCRIPT elements. // obf
	 * // obf
	 * In a browser when the scripting flag is enabled, everything inside // obf
	 * the NOSCRIPT element will be ignored and treated at RAW TEXT. This // obf
	 * means that it's valid to send what looks like incomplete or partial // obf
	 * HTML syntax without impacting a rendered page. The Tag Processor is // obf
	 * a parser with the scripting flag disabled, however, and needs to // obf
	 * expose all the potential content that some code might want to modify. // obf
	 * // obf
	 * Were it not for this then the NOSCRIPT tag would be handled like the // obf
	 * other tags in the RAW TEXT special group, e.g. NOEMBED or STYLE. // obf
	 * // obf
	 * @ticket 60122 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_processes_inside_of_noscript_elements() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<noscript><input type="submit"></noscript><div>' ); // obf

		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'INPUT' ), 'Failed to find INPUT element inside NOSCRIPT element.' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag( 'DIV' ), 'Failed to find DIV element after NOSCRIPT element.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59292 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_next_tag_ignores_contents_of_rawtext_tags // obf
	 * // obf
	 * @param string $v_bdpey HTML starting with a RAWTEXT-specifying element such as STYLE, // obf
	 *                                                 then an element afterward containing the "target" attribute. // obf
	 */ // obf
	public function test_next_tag_ignores_contents_of_rawtext_tags( $v_bdpey ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_bdpey ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertNotNull( // obf
			$v_ilmtj->get_attribute( 'target' ), // obf
			"Expected to find element with target attribute but found {$v_ilmtj->get_tag()} instead." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_next_tag_ignores_contents_of_rawtext_tags() { // obf
		return array( // obf
			'IFRAME'           => array( '<iframe><section>Inside</section></iframe><section target>' ), // obf
			'NOEMBED'          => array( '<noembed><p></p></noembed><div target>' ), // obf
			'NOFRAMES'         => array( '<noframes><p>Check the rules here.</p></noframes><div target>' ), // obf
			'STYLE'            => array( '<style>* { margin: 0 }</style><div target>' ), // obf
			'STYLE hiding DIV' => array( '<style>li::before { content: "<div non-target>" }</style><div target>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_empty_when_missing_class() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = false; // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv = true; // obf
		} // obf

		$v_pymon->assertFalse( $v_sbvfv, 'Found classes when none exist.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_empty_when_class_is_boolean() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class>' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = false; // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv = true; // obf
		} // obf

		$v_pymon->assertFalse( $v_sbvfv, 'Found classes when none exist.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_empty_when_class_is_empty() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="">' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = false; // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv = true; // obf
		} // obf

		$v_pymon->assertFalse( $v_sbvfv, 'Found classes when none exist.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_visits_each_class_in_order() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="one two three">' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = array(); // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv[] = $v_uzkzb; // obf
		} // obf

		$v_pymon->assertSame( array( 'one', 'two', 'three' ), $v_sbvfv, 'Failed to visit the class names in their original order.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_decodes_class_names() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="&notin;-class &lt;egg&gt; &#xff03;">' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = array(); // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv[] = $v_uzkzb; // obf
		} // obf

		$v_pymon->assertSame( array( '∉-class', '<egg>', "\u{ff03}" ), $v_sbvfv, 'Failed to report class names in their decoded form.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_visits_unique_class_names_only_once() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<div class="one one &#x6f;ne">' ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = array(); // obf
		foreach ( $v_ilmtj->class_list() as $v_uzkzb ) { // obf
			$v_sbvfv[] = $v_uzkzb; // obf
		} // obf

		$v_pymon->assertSame( array( 'one' ), $v_sbvfv, 'Visited multiple copies of the same class name when it should have skipped the duplicates.' ); // obf
	} // obf

	/** // obf
	 * Ensures that null bytes are replaced with the replacement character (U+FFFD) in class_list. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::class_list // obf
	 */ // obf
	public function test_class_list_null_bytes_replaced() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( "<div class='a \0 b\0 \0c\0'>" ); // obf
		$v_ilmtj->next_tag(); // obf

		$v_sbvfv = iterator_to_array( $v_ilmtj->class_list() ); // obf

		$v_pymon->assertSame( array( 'a', "\u{FFFD}", "b\u{FFFD}", "\u{FFFD}c\u{FFFD}" ), $v_sbvfv ); // obf
	} // obf

	/** // obf
	 * Ensures that the tag processor matches class names with null bytes correctly. // obf
	 * // obf
	 * @ticket 61531 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_class // obf
	 */ // obf
	public function test_has_class_null_byte_class_name() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( "<div class='null-byte-\0-there'>" ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertTrue( $v_ilmtj->has_class( 'null-byte-�-there' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 59209 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::has_class // obf
	 * // obf
	 * @dataProvider data_html_with_variations_of_class_values_and_sought_class_names // obf
	 * // obf
	 * @param string $v_djilv         Contains a tag optionally containing a `class` attribute. // obf
	 * @param string $v_moicp Name of class to find in the input tag's `class`. // obf
	 * @param bool   $v_jzcdl    Whether the sought class exists in the given HTML. // obf
	 */ // obf
	public function test_has_class_handles_expected_class_name_variations( $v_djilv, $v_moicp, $v_jzcdl ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_ilmtj->next_tag(); // obf

		if ( $v_jzcdl ) { // obf
			$v_pymon->assertTrue( $v_ilmtj->has_class( $v_moicp ), "Failed to find expected class {$v_moicp}." ); // obf
		} else { // obf
			$v_pymon->assertFalse( $v_ilmtj->has_class( $v_moicp ), "Found class {$v_moicp} when it doesn't exist." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_html_with_variations_of_class_values_and_sought_class_names() { // obf
		return array( // obf
			'Tag without any classes'      => array( '<div>', 'foo', false ), // obf
			'Tag with boolean class'       => array( '<img class>', 'foo', false ), // obf
			'Tag with empty class'         => array( '<p class="">', 'foo', false ), // obf
			'Tag with exact match'         => array( '<button class="foo">', 'foo', true ), // obf
			'Tag with duplicate matches'   => array( '<span class="foo bar foo">', 'foo', true ), // obf
			'Tag with non-initial match'   => array( '<section class="bar foo">', 'foo', true ), // obf
			'Tag with encoded match'       => array( '<main class="&hellip;">', '…', true ), // obf
			'Class with tab separator'     => array( "<div class='one\ttwo'>", 'two', true ), // obf
			'Class with newline separator' => array( "<div class='one\ntwo\n'>", 'two', true ), // obf
			'False duplicate attribute'    => array( '<img class=dog class=cat>', 'cat', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the invalid comment closing syntax "--!>" properly closes a comment. // obf
	 * // obf
	 * @ticket 58007 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 */ // obf
	public function test_allows_incorrectly_closed_comments() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<img id=before><!-- <img id=inside> --!><img id=after>--><img id=final>' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'before', $v_ilmtj->get_attribute( 'id' ), 'Did not find starting tag.' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'after', $v_ilmtj->get_attribute( 'id' ), 'Did not properly close improperly-closed comment.' ); // obf

		$v_ilmtj->next_tag(); // obf
		$v_pymon->assertSame( 'final', $v_ilmtj->get_attribute( 'id' ), 'Did not skip over unopened comment-closer.' ); // obf
	} // obf

	/** // obf
	 * Ensures that unclosed and invalid comments don't trigger warnings or errors. // obf
	 * // obf
	 * @ticket 58007 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::paused_at_incomplete_token // obf
	 * // obf
	 * @dataProvider data_html_with_unclosed_comments // obf
	 * // obf
	 * @param string $v_dnoip HTML with opened comments that aren't closed. // obf
	 */ // obf
	public function test_documents_may_end_with_unclosed_comment( $v_dnoip ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_dnoip ); // obf

		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag(), // obf
			"Should not have found any tag, but found {$v_ilmtj->get_tag()}." // obf
		); // obf

		$v_pymon->assertTrue( // obf
			$v_ilmtj->paused_at_incomplete_token(), // obf
			"Should have indicated that the parser found an incomplete token but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_html_with_unclosed_comments() { // obf
		return array( // obf
			'Shortest open valid comment'      => array( '<!--' ), // obf
			'Basic truncated comment'          => array( '<!-- this ends --' ), // obf
			'Comment with closer look-alike'   => array( '<!-- this ends --x' ), // obf
			'Comment with closer look-alike 2' => array( '<!-- this ends --!x' ), // obf
			'Invalid tag-closer comment'       => array( '</(when will this madness end?)' ), // obf
			'Invalid tag-closer comment 2'     => array( '</(when will this madness end?)--' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that abruptly-closed empty comments are properly closed. // obf
	 * // obf
	 * @ticket 58007 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_abruptly_closed_empty_comments // obf
	 * // obf
	 * @param string $v_snrto HTML to test with "id=after" on element immediately following an abruptly closed comment. // obf
	 */ // obf
	public function test_closes_abrupt_closing_of_empty_comment( $v_snrto ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_snrto ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->next_tag(); // obf

		$v_pymon->assertSame( 'after', $v_ilmtj->get_attribute( 'id' ), 'Did not find tag after closing abruptly-closed comment' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_abruptly_closed_empty_comments() { // obf
		return array( // obf
			'Empty comment with two dashes only' => array( '<hr><!--><hr id=after>' ), // obf
			'Empty comment with two dashes only, improperly closed' => array( '<hr><!--!><hr id=inside>--><hr id=after>' ), // obf
			'Comment with two dashes only, improperly closed twice' => array( '<hr><!--!><hr id=inside>--!><hr id=after>' ), // obf
			'Empty comment with three dashes'    => array( '<hr><!---><hr id=after>' ), // obf
			'Empty comment with three dashes, improperly closed' => array( '<hr><!---!><hr id=inside>--><hr id=after>' ), // obf
			'Comment with three dashes, improperly closed twice' => array( '<hr><!---!><hr id=inside>--!><hr id=after>' ), // obf
			'Empty comment with four dashes'     => array( '<hr><!----><hr id=after>' ), // obf
			'Empty comment with four dashes, improperly closed' => array( '<hr><!----!><hr id=after>--><hr id=final>' ), // obf
			'Comment with four dashes, improperly closed twice' => array( '<hr><!----!><hr id=after>--!><hr id=final>' ), // obf
			'Comment with almost-closer inside'  => array( '<hr><!-- ---!><hr id=after>--!><hr id=final>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * // obf
	 * @dataProvider data_skips_contents_of_script_and_rcdata_regions // obf
	 * // obf
	 * @param $v_cfcdc HTML with multiple divs, one of which carries the "target" attribute. // obf
	 */ // obf
	public function test_skips_contents_of_script_and_rcdata_regions( $v_cfcdc ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_cfcdc ); // obf
		$v_ilmtj->next_tag( 'div' ); // obf

		$v_pymon->assertTrue( // obf
			$v_ilmtj->get_attribute( 'target' ), // obf
			'Did not properly skip over script and rcdata regions; incorrectly found tags inside' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_skips_contents_of_script_and_rcdata_regions() { // obf
		return array( // obf
			'Balanced SCRIPT tags'                => array( '<script>console.log("<div>");</script><div target><div>' ), // obf
			'Unexpected SCRIPT closer after DIV'  => array( 'console.log("<div target>")</script><div><div>' ), // obf
			'Unexpected SCRIPT closer before DIV' => array( 'console.log("<span>")</script><div target><div>' ), // obf
			'Missing SCRIPT closer'               => array( '<script>console.log("<div>");<div><div></script><div target>' ), // obf
			'TITLE before DIV'                    => array( '<title><div></title><div target><div>' ), // obf
			'SCRIPT inside TITLE'                 => array( '<title><script><div></title><div target><div></script><div>' ), // obf
			'TITLE in TEXTAREA'                   => array( '<textarea><div><title><div></textarea><div target></title><div>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_can_query_and_update_wrongly_nested_tags() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( // obf
			'<span>123<p>456</span>789</p>' // obf
		); // obf
		$v_ilmtj->next_tag( 'span' ); // obf
		$v_ilmtj->set_attribute( 'class', 'span-class' ); // obf
		$v_ilmtj->next_tag( 'p' ); // obf
		$v_ilmtj->set_attribute( 'class', 'p-class' ); // obf
		$v_pymon->assertSame( // obf
			'<span class="span-class">123<p class="p-class">456</span>789</p>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not find overlapping p tag' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::remove_attribute // obf
	 */ // obf
	public function test_removing_specific_attributes_in_malformed_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_MALFORMED ); // obf
		$v_ilmtj->next_tag( 'span' ); // obf
		$v_ilmtj->remove_attribute( 'Notifications<' ); // obf
		$v_pymon->assertSame( // obf
			'<div><span class="d-md-none" /span><span class="d-none d-md-inline">Back to notifications</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not remove "Notifications<" attribute in malformed input' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that no tags are matched in a document containing only non-tag content. // obf
	 * // obf
	 * @ticket 60122 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::paused_at_incomplete_token // obf
	 * // obf
	 * @dataProvider data_html_without_tags // obf
	 * // obf
	 * @param string $v_ypite HTML without any tags in it. // obf
	 */ // obf
	public function test_next_tag_returns_false_when_there_are_no_tags( $v_ypite ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_ypite ); // obf

		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag(), // obf
			"Shouldn't have found any tags but found {$v_ilmtj->get_tag()}." // obf
		); // obf

		$v_pymon->assertFalse( // obf
			$v_ilmtj->paused_at_incomplete_token(), // obf
			'Should have indicated that end of document was reached without evidence that elements were truncated.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_html_without_tags() { // obf
		return array( // obf
			'DOCTYPE declaration'    => array( '<!DOCTYPE html>Just some HTML' ), // obf
			'No tags'                => array( 'this is nothing more than a text node' ), // obf
			'Text with comments'     => array( 'One <!-- sneaky --> comment.' ), // obf
			'Empty tag closer'       => array( '</>' ), // obf
			'CDATA as HTML comment'  => array( '<![CDATA[this closes at the first &gt;]>' ), // obf
			'Processing instruction' => array( '<?xml version="1.0"?>' ), // obf
			'Combination XML-like'   => array( '<!DOCTYPE xml><?xml version=""?><!-- this is not a real document. --><![CDATA[it only serves as a test]]>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that the processor doesn't attempt to match an incomplete token. // obf
	 * // obf
	 * @ticket 58637 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 * @covers WP_HTML_Tag_Processor::paused_at_incomplete_token // obf
	 * // obf
	 * @dataProvider data_incomplete_syntax_elements // obf
	 * // obf
	 * @param string $v_flnke HTML text containing some kind of incomplete syntax. // obf
	 */ // obf
	public function test_next_tag_returns_false_for_incomplete_syntax_elements( $v_flnke ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_flnke ); // obf

		$v_pymon->assertFalse( // obf
			$v_ilmtj->next_tag(), // obf
			"Shouldn't have found any tags but found {$v_ilmtj->get_tag()}." // obf
		); // obf

		$v_pymon->assertTrue( // obf
			$v_ilmtj->paused_at_incomplete_token(), // obf
			"Should have indicated that the parser found an incomplete token but didn't." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_incomplete_syntax_elements() { // obf
		return array( // obf
			'Incomplete tag name'                  => array( '<swit' ), // obf
			'Incomplete tag (no attributes)'       => array( '<div' ), // obf
			'Incomplete tag (attributes)'          => array( '<div inert title="test"' ), // obf
			'Incomplete attribute (unquoted)'      => array( '<button disabled' ), // obf
			'Incomplete attribute (single quoted)' => array( "<li class='just-another class" ), // obf
			'Incomplete attribute (double quoted)' => array( '<iframe src="https://www.example.com/embed/abcdef' ), // obf
			'Incomplete comment (normative)'       => array( '<!-- without end' ), // obf
			'Incomplete comment (missing --)'      => array( '<!-- without end --' ), // obf
			'Incomplete comment (--!)'             => array( '<!-- without end --!' ), // obf
			'Incomplete comment (bogus comment)'   => array( '</3 is not a tag' ), // obf
			'Incomplete DOCTYPE'                   => array( '<!DOCTYPE html' ), // obf
			'Partial DOCTYPE'                      => array( '<!DOCTY' ), // obf
			'Incomplete CDATA'                     => array( '<![CDATA[something inside of here needs to get out' ), // obf
			'Partial CDATA'                        => array( '<![CDA' ), // obf
			'Partially closed CDATA]'              => array( '<![CDATA[cannot escape]' ), // obf
			'Unclosed IFRAME'                      => array( '<iframe><div>' ), // obf
			'Unclosed NOEMBED'                     => array( '<noembed><div>' ), // obf
			'Unclosed NOFRAMES'                    => array( '<noframes><div>' ), // obf
			'Unclosed SCRIPT'                      => array( '<script><div>' ), // obf
			'Unclosed STYLE'                       => array( '<style><div>' ), // obf
			'Unclosed TEXTAREA'                    => array( '<textarea><div>' ), // obf
			'Unclosed TITLE'                       => array( '<title><div>' ), // obf
			'Unclosed XMP'                         => array( '<xmp><div>' ), // obf
			'Partially closed IFRAME'              => array( '<iframe><div></iframe' ), // obf
			'Partially closed NOEMBED'             => array( '<noembed><div></noembed' ), // obf
			'Partially closed NOFRAMES'            => array( '<noframes><div></noframes' ), // obf
			'Partially closed SCRIPT'              => array( '<script><div></script' ), // obf
			'Partially closed STYLE'               => array( '<style><div></style' ), // obf
			'Partially closed TEXTAREA'            => array( '<textarea><div></textarea' ), // obf
			'Partially closed TITLE'               => array( '<title><div></title' ), // obf
			'Partially closed XMP'                 => array( '<xmp><div></xmp' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 */ // obf
	public function test_updating_specific_attributes_in_malformed_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( self::HTML_MALFORMED ); // obf
		$v_ilmtj->next_tag( 'span' ); // obf
		$v_ilmtj->set_attribute( 'id', 'first' ); // obf
		$v_ilmtj->next_tag( 'span' ); // obf
		$v_ilmtj->set_attribute( 'id', 'second' ); // obf
		$v_pymon->assertSame( // obf
			'<div><span id="first" class="d-md-none" Notifications</span><span id="second" class="d-none d-md-inline">Back to notifications</span></div>', // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not add id attributes properly to malformed input' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 * // obf
	 * @dataProvider data_updating_attributes // obf
	 * // obf
	 * @param string $v_djilv     HTML to process. // obf
	 * @param string $v_qqffx Expected updated HTML. // obf
	 */ // obf
	public function test_updating_attributes( $v_djilv, $v_qqffx ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->set_attribute( 'foo', 'bar' ); // obf
		$v_ilmtj->add_class( 'firstTag' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'secondTag' ); // obf

		$v_pymon->assertSame( // obf
			$v_qqffx, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not properly add attributes and class names' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_updating_attributes() { // obf
		return array( // obf
			'tags inside of a comment' => array( // obf
				'input'    => '<!-- this is a comment. no <strong>tags</strong> allowed --><span>test</span>', // obf
				'expected' => '<!-- this is a comment. no <strong>tags</strong> allowed --><span class="firstTag" foo="bar">test</span>', // obf
			), // obf
			'does not parse <3'        => array( // obf
				'input'    => '<3 is a heart but <t3> is a tag.<span>test</span>', // obf
				'expected' => '<3 is a heart but <t3 class="firstTag" foo="bar"> is a tag.<span class="secondTag">test</span>', // obf
			), // obf
			'does not parse <*'        => array( // obf
				'input'    => 'The applicative operator <* works well in Haskell; is what?<span>test</span>', // obf
				'expected' => 'The applicative operator <* works well in Haskell; is what?<span class="firstTag" foo="bar">test</span>', // obf
			), // obf
			'</> in content'           => array( // obf
				'input'    => '</><span>test</span>', // obf
				'expected' => '</><span class="firstTag" foo="bar">test</span>', // obf
			), // obf
			'custom asdf attribute'    => array( // obf
				'input'    => '<hr asdf="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" asdf="test"><span class="secondTag">test</span>', // obf
			), // obf
			'custom data-* attribute'  => array( // obf
				'input'    => '<div data-foo="bar"><p>Some content for a <span>test</span></p></div>', // obf
				'expected' => '<div class="firstTag" foo="bar" data-foo="bar"><p class="secondTag">Some content for a <span>test</span></p></div>', // obf
			), // obf
			'tag inside of CDATA'      => array( // obf
				'input'    => '<![CDATA[This <is> a <strong id="yes">HTML Tag</strong>]]><span>test</span>', // obf
				'expected' => '<![CDATA[This <is> a <strong class="firstTag" foo="bar" id="yes">HTML Tag</strong>]]><span class="secondTag">test</span>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56299 // obf
	 * // obf
	 * @covers WP_HTML_Tag_Processor::add_class // obf
	 * @covers WP_HTML_Tag_Processor::set_attribute // obf
	 * // obf
	 * @dataProvider data_updating_attributes_in_malformed_html // obf
	 * // obf
	 * @param string $v_djilv     HTML to process. // obf
	 * @param string $v_qqffx Expected updated HTML. // obf
	 */ // obf
	public function test_updating_attributes_in_malformed_html( $v_djilv, $v_qqffx ) { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag(), 'Could not find first tag.' ); // obf
		$v_ilmtj->set_attribute( 'foo', 'bar' ); // obf
		$v_ilmtj->add_class( 'firstTag' ); // obf
		$v_ilmtj->next_tag(); // obf
		$v_ilmtj->add_class( 'secondTag' ); // obf

		$v_pymon->assertSame( // obf
			$v_qqffx, // obf
			$v_ilmtj->get_updated_html(), // obf
			'Did not properly update attributes and classnames given malformed input' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_updating_attributes_in_malformed_html() { // obf
		return array( // obf
			'Invalid entity inside attribute value'        => array( // obf
				'input'    => '<img src="https://s0.wp.com/i/atat.png" title="&; First &lt;title&gt; is &notit;" TITLE="second title" title="An Imperial &imperial; AT-AT"><span>test</span>', // obf
				'expected' => '<img class="firstTag" foo="bar" src="https://s0.wp.com/i/atat.png" title="&; First &lt;title&gt; is &notit;" TITLE="second title" title="An Imperial &imperial; AT-AT"><span class="secondTag">test</span>', // obf
			), // obf
			'HTML tag opening inside attribute value'      => array( // obf
				'input'    => '<pre id="<code" class="wp-block-code <code is poetry&gt;"><code>This &lt;is> a &lt;strong is="true">thing.</code></pre><span>test</span>', // obf
				'expected' => '<pre foo="bar" id="<code" class="wp-block-code &lt;code is poetry&gt; firstTag"><code class="secondTag">This &lt;is> a &lt;strong is="true">thing.</code></pre><span>test</span>', // obf
			), // obf
			'HTML tag brackets in attribute values and data markup' => array( // obf
				'input'    => '<pre id="<code-&gt;-block-&gt;" class="wp-block-code <code is poetry&gt;"><code>This &lt;is> a &lt;strong is="true">thing.</code></pre><span>test</span>', // obf
				'expected' => '<pre foo="bar" id="<code-&gt;-block-&gt;" class="wp-block-code &lt;code is poetry&gt; firstTag"><code class="secondTag">This &lt;is> a &lt;strong is="true">thing.</code></pre><span>test</span>', // obf
			), // obf
			'Single and double quotes in attribute value'  => array( // obf
				'input'    => '<p title="Demonstrating how to use single quote (\') and double quote (&quot;)"><span>test</span>', // obf
				'expected' => '<p class="firstTag" foo="bar" title="Demonstrating how to use single quote (\') and double quote (&quot;)"><span class="secondTag">test</span>', // obf
			), // obf
			'Unquoted attribute values'                    => array( // obf
				'input'    => '<hr a=1 a=2 a=3 a=5 /><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" a=1 a=2 a=3 a=5 /><span class="secondTag">test</span>', // obf
			), // obf
			'Double-quotes escaped in double-quote attribute value' => array( // obf
				'input'    => '<hr title="This is a &quot;double-quote&quot;"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" title="This is a &quot;double-quote&quot;"><span class="secondTag">test</span>', // obf
			), // obf
			'Unquoted attribute value'                     => array( // obf
				'input'    => '<hr id=code><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id=code><span class="secondTag">test</span>', // obf
			), // obf
			'Unquoted attribute value with tag-like value' => array( // obf
				'input'    => '<hr id= 	<code> ><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id= 	<code> ><span class="secondTag">test</span>', // obf
			), // obf
			'Unquoted attribute value with tag-like value followed by tag-like data' => array( // obf
				'input'    => '<hr id=code>><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id=code>><span class="secondTag">test</span>', // obf
			), // obf
			'id=&quo;code'                                 => array( // obf
				'input'    => '<hr id=&quo;code><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id=&quo;code><span class="secondTag">test</span>', // obf
			), // obf
			'id/test=5'                                    => array( // obf
				'input'    => '<hr id/test=5><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id/test=5><span class="secondTag">test</span>', // obf
			), // obf
			'<hr> as the id value'                         => array( // obf
				'input'    => '<hr title="<hr>"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" title="<hr>"><span class="secondTag">test</span>', // obf
			), // obf
			'id=>code'                                     => array( // obf
				'input'    => '<hr id=>code><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id=>code><span class="secondTag">test</span>', // obf
			), // obf
			'id"quo="test"'                                => array( // obf
				'input'    => '<hr id"quo="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id"quo="test"><span class="secondTag">test</span>', // obf
			), // obf
			'id without double quotation marks around null byte' => array( // obf
				'input'    => "<hr id\x00zero=\"test\"><span>test</span>", // obf
				'expected' => "<hr class=\"firstTag\" foo=\"bar\" id\x00zero=\"test\"><span class=\"secondTag\">test</span>", // obf
			), // obf
			'Unexpected > before an attribute'             => array( // obf
				'input'    => '<hr >id="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" >id="test"><span class="secondTag">test</span>', // obf
			), // obf
			'Unexpected = before an attribute'             => array( // obf
				'input'    => '<hr =id="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" =id="test"><span class="secondTag">test</span>', // obf
			), // obf
			'Unexpected === before an attribute'           => array( // obf
				'input'    => '<hr ===name="value"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" ===name="value"><span class="secondTag">test</span>', // obf
			), // obf
			'Missing closing data-tag tag'                 => array( // obf
				'input'    => 'The applicative operator <* works well in Haskell; <data-tag> is what?<span>test</span>', // obf
				'expected' => 'The applicative operator <* works well in Haskell; <data-tag class="firstTag" foo="bar"> is what?<span class="secondTag">test</span>', // obf
			), // obf
			'Missing closing t3 tag'                       => array( // obf
				'input'    => '<3 is a heart but <t3> is a tag.<span>test</span>', // obf
				'expected' => '<3 is a heart but <t3 class="firstTag" foo="bar"> is a tag.<span class="secondTag">test</span>', // obf
			), // obf
			'invalid comment opening tag'                  => array( // obf
				'input'    => '<?comment --><span>test</span>', // obf
				'expected' => '<?comment --><span class="firstTag" foo="bar">test</span>', // obf
			), // obf
			'=asdf as attribute name'                      => array( // obf
				'input'    => '<hr =asdf="tes"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" =asdf="tes"><span class="secondTag">test</span>', // obf
			), // obf
			'== as attribute name with value'              => array( // obf
				'input'    => '<hr ==="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" ==="test"><span class="secondTag">test</span>', // obf
			), // obf
			'=5 as attribute'                              => array( // obf
				'input'    => '<hr =5><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" =5><span class="secondTag">test</span>', // obf
			), // obf
			'= as attribute'                               => array( // obf
				'input'    => '<hr =><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" =><span class="secondTag">test</span>', // obf
			), // obf
			'== as attribute'                              => array( // obf
				'input'    => '<hr ==><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" ==><span class="secondTag">test</span>', // obf
			), // obf
			'=== as attribute'                             => array( // obf
				'input'    => '<hr ===><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" ===><span class="secondTag">test</span>', // obf
			), // obf
			'unsupported disabled attribute'               => array( // obf
				'input'    => '<hr disabled><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" disabled><span class="secondTag">test</span>', // obf
			), // obf
			'malformed custom attributes'                  => array( // obf
				'input'    => '<hr a"sdf="test"><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" a"sdf="test"><span class="secondTag">test</span>', // obf
			), // obf
			'Multiple unclosed tags treated as a single tag' => array( // obf
				'input'    => <<<HTML // obf
					<hr id=">"code // obf
					<hr id="value>"code // obf
					<hr id="/>"code // obf
					<hr id="value/>"code // obf
					/> // obf
					<span>test</span> // obf
HTML // obf
				, // obf
				'expected' => <<<HTML // obf
					<hr class="firstTag" foo="bar" id=">"code // obf
					<hr id="value>"code // obf
					<hr id="/>"code // obf
					<hr id="value/>"code // obf
					/> // obf
					<span class="secondTag">test</span> // obf
HTML // obf
			, // obf
			), // obf
			'<hr id   =5>'                                 => array( // obf
				'input'    => '<hr id   =5><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id   =5><span class="secondTag">test</span>', // obf
			), // obf
			'<hr id a  =5>'                                => array( // obf
				'input'    => '<hr id a  =5><span>test</span>', // obf
				'expected' => '<hr class="firstTag" foo="bar" id a  =5><span class="secondTag">test</span>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_handles_malformed_taglike_open_short_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<' ); // obf
		$v_mggfs    = $v_ilmtj->next_tag(); // obf
		$v_pymon->assertFalse( $v_mggfs, 'Did not handle "<" html properly.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_HTML_Tag_Processor::next_tag // obf
	 */ // obf
	public function test_handles_malformed_taglike_close_short_html() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '</ ' ); // obf
		$v_mggfs    = $v_ilmtj->next_tag(); // obf
		$v_pymon->assertFalse( $v_mggfs, 'Did not handle "</ " html properly.' ); // obf
	} // obf

	/** // obf
	 * Ensures that non-tag syntax starting with `<` is consumed inside a text node. // obf
	 * // obf
	 * @ticket 60385 // obf
	 */ // obf
	public function test_single_text_node_with_taglike_text() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( 'test< /A>' ); // obf
		$v_ilmtj->next_token(); // obf
		$v_pymon->assertSame( '#text', $v_ilmtj->get_token_type(), 'Did not find text node.' ); // obf
		$v_pymon->assertSame( 'test< /A>', $v_ilmtj->get_modifiable_text(), 'Did not find complete text node.' ); // obf
	} // obf

	/** // obf
	 * Ensures that updates which are enqueued in front of the cursor // obf
	 * are applied before moving forward in the document. // obf
	 * // obf
	 * @ticket 60697 // obf
	 */ // obf
	public function test_applies_updates_before_proceeding() { // obf
		$v_djilv = '<div><img></div><div><img></div>'; // obf

		$v_xkpog = new class( $v_djilv ) extends WP_HTML_Tag_Processor { // obf
			/** // obf
			 * Inserts raw text after the current token. // obf
			 * // obf
			 * @param string $v_xyqzu Raw text to insert. // obf
			 */ // obf
			public function insert_after( $v_xyqzu ) { // obf
				$v_pymon->set_bookmark( 'here' ); // obf
				$v_pymon->lexical_updates[] = new WP_HTML_Text_Replacement( // obf
					$v_pymon->bookmarks['here']->start + $v_pymon->bookmarks['here']->length, // obf
					0, // obf
					$v_xyqzu // obf
				); // obf
			} // obf
		}; // obf

		$v_xkpog->next_tag( 'img' ); // obf
		$v_xkpog->insert_after( '<p>snow-capped</p>' ); // obf

		$v_xkpog->next_tag(); // obf
		$v_pymon->assertSame( // obf
			'P', // obf
			$v_xkpog->get_tag(), // obf
			'Should have matched inserted HTML as next tag.' // obf
		); // obf

		$v_xkpog->next_tag( 'img' ); // obf
		$v_xkpog->set_attribute( 'alt', 'mountain' ); // obf

		$v_pymon->assertSame( // obf
			'<div><img><p>snow-capped</p></div><div><img alt="mountain"></div>', // obf
			$v_xkpog->get_updated_html(), // obf
			'Should have properly applied the update from in front of the cursor.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test an infinite loop bugfix in incomplete script tag parsing. // obf
	 * // obf
	 * @small // obf
	 * // obf
	 * @ticket 61810 // obf
	 */ // obf
	public function test_script_tag_processing_no_infinite_loop_final_dash() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<script>-' ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag() ); // obf
		$v_pymon->assertTrue( $v_ilmtj->paused_at_incomplete_token() ); // obf
	} // obf

	/** // obf
	 * Test an infinite loop bugfix in incomplete script tag parsing. // obf
	 * // obf
	 * @small // obf
	 * // obf
	 * @ticket 61810 // obf
	 */ // obf
	public function test_script_tag_processing_no_infinite_loop_final_left_angle_bracket() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<script><' ); // obf

		$v_pymon->assertFalse( $v_ilmtj->next_tag() ); // obf
		$v_pymon->assertTrue( $v_ilmtj->paused_at_incomplete_token() ); // obf
	} // obf

	/** // obf
	 * Test a bugfix where the input ends abruptly with a funky comment started. // obf
	 * // obf
	 * @ticket 61831 // obf
	 */ // obf
	public function test_unclosed_funky_comment_input_too_short() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '</#' ); // obf
		$v_pymon->assertFalse( $v_ilmtj->next_tag() ); // obf
		$v_pymon->assertTrue( $v_ilmtj->paused_at_incomplete_token() ); // obf
	} // obf

	/** // obf
	 * Test basic DOCTYPE handling. // obf
	 * // obf
	 * @ticket 61576 // obf
	 */ // obf
	public function test_doctype_doc_name() { // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( '<!DOCTYPE html>' ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_token() ); // obf
		$v_priyf = $v_ilmtj->get_doctype_info(); // obf
		$v_pymon->assertNotNull( $v_priyf ); // obf
		$v_pymon->assertSame( 'html', $v_priyf->name ); // obf
		$v_pymon->assertSame( 'no-quirks', $v_priyf->indicated_compatability_mode ); // obf
		$v_pymon->assertNull( $v_priyf->public_identifier ); // obf
		$v_pymon->assertNull( $v_priyf->system_identifier ); // obf
	} // obf

	/** // obf
	 * @ticket 62522 // obf
	 * // obf
	 * @dataProvider data_alphabet_by_characters_lowercase // obf
	 */ // obf
	public function test_recognizes_lowercase_tag_name( string $v_wdxfh ) { // obf
		/* // obf
		 * The spacing in the HTML string is important to the problematic // obf
		 * codepath in ticket #62522. // obf
		 */ // obf
		$v_djilv      = " <{$v_wdxfh}> </{$v_wdxfh}>"; // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag(), "Failed to find open tag in '{$v_djilv}'." ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), // obf
			"Failed to find close tag in '{$v_djilv}'." // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62522 // obf
	 * // obf
	 * @dataProvider data_alphabet_by_characters_uppercase // obf
	 */ // obf
	public function test_recognizes_uppercase_tag_name( string $v_wdxfh ) { // obf
		/* // obf
		 * The spacing in the HTML string is important to the problematic // obf
		 * codepath in ticket #62522. // obf
		 */ // obf
		$v_djilv      = " <{$v_wdxfh}> </{$v_wdxfh}>"; // obf
		$v_ilmtj = new WP_HTML_Tag_Processor( $v_djilv ); // obf
		$v_pymon->assertTrue( $v_ilmtj->next_tag(), "Failed to find open tag in '{$v_djilv}'." ); // obf
		$v_pymon->assertTrue( // obf
			$v_ilmtj->next_tag( array( 'tag_closers' => 'visit' ) ), // obf
			"Failed to find close tag in '{$v_djilv}'." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return Generator<array> // obf
	 */ // obf
	public static function data_alphabet_by_characters_lowercase() { // obf
		$v_wdxfh = 'a'; // obf
		while ( $v_wdxfh <= 'z' ) { // obf
			yield $v_wdxfh => array( $v_wdxfh ); // obf
			$v_wdxfh = chr( ord( $v_wdxfh ) + 1 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return Generator<array> // obf
	 */ // obf
	public static function data_alphabet_by_characters_uppercase() { // obf
		foreach ( self::data_alphabet_by_characters_lowercase() as $v_qauat ) { // obf
			yield strtoupper( $v_qauat[0] ) => array( strtoupper( $v_qauat[0] ) ); // obf
		} // obf
	} // obf
} // obf