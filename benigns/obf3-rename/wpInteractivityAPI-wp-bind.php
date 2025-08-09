

<?php // obf
/** // obf
 * Unit tests covering the data_wp_bind_processor functionality of the // obf
 * WP_Interactivity_API class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group interactivity-api // obf
 */ // obf
class Tests_WP_Interactivity_API_WP_Bind extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_tcqgi; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_pbxdg->interactivity = new WP_Interactivity_API(); // obf
		$v_pbxdg->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'id'          => 'some-id', // obf
				'width'       => 100, // obf
				'isOpen'      => false, // obf
				'null'        => null, // obf
				'trueString'  => 'true', // obf
				'falseString' => 'false', // obf
				'trueValue'   => true, // obf
				'falseValue'  => false, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Invokes the `process_directives` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_fxstu The HTML that needs to be processed. // obf
	 * @return array An array containing an instance of the WP_HTML_Tag_Processor and the processed HTML. // obf
	 */ // obf
	private function process_directives( $v_fxstu ) { // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_rfojw        = new WP_HTML_Tag_Processor( $v_dwrkv ); // obf
		$v_rfojw->next_tag(); // obf
		return array( $v_rfojw, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests setting an attribute via `data-wp-bind`. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_sets_attribute() { // obf
		$v_fxstu    = '<div data-wp-bind--id="myPlugin::state.id">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'some-id', $v_rfojw->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests replacing an existing attribute via `data-wp-bind`. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_replaces_attribute() { // obf
		$v_fxstu    = '<div id="other-id" data-wp-bind--id="myPlugin::state.id">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'some-id', $v_rfojw->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests setting a numerical value as an attribute via `data-wp-bind`. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_sets_number_value() { // obf
		$v_fxstu    = '<img data-wp-bind--width="myPlugin::state.width">'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( '100', $v_rfojw->get_attribute( 'width' ) ); // obf
	} // obf

	/** // obf
	 * Tests that true strings are set properly as attribute values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_sets_true_string() { // obf
		$v_fxstu               = '<div data-wp-bind--id="myPlugin::state.trueString">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'true', $v_rfojw->get_attribute( 'id' ) ); // obf
		$v_pbxdg->assertSame( '<div id="true" data-wp-bind--id="myPlugin::state.trueString">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that false strings are set properly as attribute values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_sets_false_string() { // obf
		$v_fxstu               = '<div data-wp-bind--id="myPlugin::state.falseString">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'false', $v_rfojw->get_attribute( 'id' ) ); // obf
		$v_pbxdg->assertSame( '<div id="false" data-wp-bind--id="myPlugin::state.falseString">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` ignores directives with no suffix. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_ignores_empty_bound_attribute() { // obf
		$v_fxstu     = '<div data-wp-bind="myPlugin::state.id">Text</div>'; // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` does nothing when referencing non-existent // obf
	 * references. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_doesnt_do_anything_on_non_existent_references() { // obf
		$v_fxstu     = '<div data-wp-bind--id="myPlugin::state.nonExistengKey">Text</div>'; // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` ignores directives with empty values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_bind_ignores_empty_value() { // obf
		$v_fxstu     = '<div data-wp-bind--id="">Text</div>'; // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` ignores directives without values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_bind_ignores_without_value() { // obf
		$v_fxstu     = '<div data-wp-bind--id>Text</div>'; // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` works with multiple instances of the same // obf
	 * directive on a tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_works_with_multiple_same_directives() { // obf
		$v_fxstu    = '<div data-wp-bind--id="myPlugin::state.id" data-wp-bind--id="myPlugin::state.id">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'some-id', $v_rfojw->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-bind` works with multiple instances of different // obf
	 * directives on a tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_works_with_multiple_different_directives() { // obf
		$v_fxstu    = '<img data-wp-bind--id="myPlugin::state.id" data-wp-bind--width="myPlugin::state.width">'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'some-id', $v_rfojw->get_attribute( 'id' ) ); // obf
		$v_pbxdg->assertSame( '100', $v_rfojw->get_attribute( 'width' ) ); // obf
	} // obf

	/** // obf
	 * Tests adding boolean attributes to a tag using `data-wp-bind`. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_adds_boolean_attribute_if_true() { // obf
		$v_fxstu               = '<div data-wp-bind--hidden="myPlugin::!state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertTrue( $v_rfojw->get_attribute( 'hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div hidden data-wp-bind--hidden="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests replacing a pre-existing boolean attribute on a tag using // obf
	 * `data-wp-bind`. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_replaces_existing_attribute_if_true() { // obf
		$v_fxstu               = '<div hidden="true" data-wp-bind--hidden="myPlugin::!state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertTrue( $v_rfojw->get_attribute( 'hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div hidden data-wp-bind--hidden="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests that boolean attributes are not added when bound to false or null // obf
	 * values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_doesnt_add_boolean_attribute_if_false_or_null() { // obf
		$v_fxstu               = '<div data-wp-bind--hidden="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'hidden' ) ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf

		$v_fxstu               = '<div data-wp-bind--hidden="myPlugin::state.null">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'hidden' ) ); // obf
		$v_pbxdg->assertSame( $v_fxstu, $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests removing boolean attributes from a tag using `data-wp-bind` and a // obf
	 * false or null value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_removes_boolean_attribute_if_false_or_null() { // obf
		$v_fxstu    = '<div hidden data-wp-bind--hidden="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'hidden' ) ); // obf

		$v_fxstu    = '<div hidden data-wp-bind--hidden="myPlugin::state.null">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'hidden' ) ); // obf
	} // obf

	/** // obf
	 * Tests adding values to aria or data attributes when the condition evaluates // obf
	 * to true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_adds_value_if_true_in_aria_or_data_attributes() { // obf
		$v_fxstu               = '<div data-wp-bind--aria-hidden="myPlugin::!state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'true', $v_rfojw->get_attribute( 'aria-hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div aria-hidden="true" data-wp-bind--aria-hidden="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf

		$v_fxstu               = '<div data-wp-bind--data-is-closed="myPlugin::!state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'true', $v_rfojw->get_attribute( 'data-is-closed' ) ); // obf
		$v_pbxdg->assertSame( '<div data-is-closed="true" data-wp-bind--data-is-closed="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests replacing values in aria or data attributes when the condition // obf
	 * evaluates to true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_replaces_value_if_true_in_aria_or_data_attributes() { // obf
		$v_fxstu               = '<div aria-hidden="false" data-wp-bind--aria-hidden="myPlugin::!state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'true', $v_rfojw->get_attribute( 'aria-hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div aria-hidden="true" data-wp-bind--aria-hidden="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf

		$v_fxstu     = '<div data-is-closed="false" data-wp-bind--data-is-closed="myPlugin::!state.isOpen">Text</div>'; // obf
		$v_dwrkv = $v_pbxdg->interactivity->process_directives( $v_fxstu ); // obf
		$v_rfojw        = new WP_HTML_Tag_Processor( $v_dwrkv ); // obf
		$v_rfojw->next_tag(); // obf
		$v_pbxdg->assertSame( 'true', $v_rfojw->get_attribute( 'data-is-closed' ) ); // obf
		$v_pbxdg->assertSame( '<div data-is-closed="true" data-wp-bind--data-is-closed="myPlugin::!state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests adding the value 'false' to aria or data attributes when the // obf
	 * condition evaluates to false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_adds_value_if_false_in_aria_or_data_attributes() { // obf
		$v_fxstu               = '<div data-wp-bind--aria-hidden="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'false', $v_rfojw->get_attribute( 'aria-hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div aria-hidden="false" data-wp-bind--aria-hidden="myPlugin::state.isOpen">Text</div>', $v_dwrkv ); // obf

		$v_fxstu               = '<div data-wp-bind--data-is-closed="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'false', $v_rfojw->get_attribute( 'data-is-closed' ) ); // obf
		$v_pbxdg->assertSame( '<div data-is-closed="false" data-wp-bind--data-is-closed="myPlugin::state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests replacing values in aria or data attributes when the condition // obf
	 * evaluates to false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_replaces_value_if_false_in_aria_or_data_attributes() { // obf
		$v_fxstu               = '<div aria-hidden="true" data-wp-bind--aria-hidden="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'false', $v_rfojw->get_attribute( 'aria-hidden' ) ); // obf
		$v_pbxdg->assertSame( '<div aria-hidden="false" data-wp-bind--aria-hidden="myPlugin::state.isOpen">Text</div>', $v_dwrkv ); // obf

		$v_fxstu               = '<div data-is-closed="true" data-wp-bind--data-is-closed="myPlugin::state.isOpen">Text</div>'; // obf
		list($v_rfojw, $v_dwrkv) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'false', $v_rfojw->get_attribute( 'data-is-closed' ) ); // obf
		$v_pbxdg->assertSame( '<div data-is-closed="false" data-wp-bind--data-is-closed="myPlugin::state.isOpen">Text</div>', $v_dwrkv ); // obf
	} // obf

	/** // obf
	 * Tests removing values from aria or data attributes when the value is null. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_removes_value_if_null_in_aria_or_data_attributes() { // obf
		$v_fxstu    = '<div aria-hidden="true" data-wp-bind--aria-hidden="myPlugin::state.null">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'aria-hidden' ) ); // obf

		$v_fxstu    = '<div data-is-closed="true" data-wp-bind--data-is-closed="myPlugin::state.null">Text</div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertNull( $v_rfojw->get_attribute( 'data-is-closed' ) ); // obf
	} // obf

	/** // obf
	 * Tests handling of bindings within nested tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_handles_nested_bindings() { // obf
		$v_fxstu    = '<div data-wp-bind--id="myPlugin::state.id"><img data-wp-bind--width="myPlugin::state.width"></div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( 'some-id', $v_rfojw->get_attribute( 'id' ) ); // obf
		$v_rfojw->next_tag(); // obf
		$v_pbxdg->assertSame( '100', $v_rfojw->get_attribute( 'width' ) ); // obf
	} // obf

	/** // obf
	 * Tests handling bindings to boolean values. // obf
	 * // obf
	 * @ticket 60758 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_bind_handles_true_value() { // obf
		$v_fxstu    = '<div data-wp-bind--id="myPlugin::state.trueValue"></div>'; // obf
		list($v_rfojw) = $v_pbxdg->process_directives( $v_fxstu ); // obf
		$v_pbxdg->assertSame( true, $v_rfojw->get_attribute( 'id' ) ); // obf
	} // obf
} // obf