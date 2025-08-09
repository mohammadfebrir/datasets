

<?php // obf
/** // obf
 * Unit tests covering the data_wp_style_processor functionality of the // obf
 * WP_Interactivity_API class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API // obf
 * // obf
 * @group interactivity-api // obf
 */ // obf
class Tests_WP_Interactivity_API_WP_Style extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_rsuyr; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_xught->interactivity = new WP_Interactivity_API(); // obf
		$v_xught->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'green' => 'green', // obf
				'false' => false, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Invokes the private `merge_style_property` method of WP_Interactivity_API // obf
	 * class. // obf
	 * // obf
	 * @param string            $v_nmmmo The current style attribute value. // obf
	 * @param string            $v_jqdlg   The style property name to set. // obf
	 * @param string|false|null $v_rqved  The value to set for the style property. With false, null or an // obf
	 *                                                 empty string, it removes the style property. // obf
	 * @return string The new style attribute value after the specified property has been added, updated or removed. // obf
	 */ // obf
	private function merge_style_property( $v_nmmmo, $v_jqdlg, $v_rqved ) { // obf
		$v_rkbxp = new ReflectionMethod( $v_xught->interactivity, 'merge_style_property' ); // obf
		$v_rkbxp->setAccessible( true ); // obf
		return $v_rkbxp->invokeArgs( $v_xught->interactivity, array( $v_nmmmo, $v_jqdlg, $v_rqved ) ); // obf
	} // obf

	/** // obf
	 * Tests that `merge_style_property` correctly sets style properties. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::merge_style_property // obf
	 */ // obf
	public function test_merge_style_property_sets_properties() { // obf
		// Adds property on empty style attribute. // obf
		$v_fbahn = $v_xught->merge_style_property( '', 'color', 'green' ); // obf
		$v_xught->assertSame( 'color:green;', $v_fbahn ); // obf

		// Changes style property when there is an existing property. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'color', 'green' ); // obf
		$v_xught->assertSame( 'color:green;', $v_fbahn ); // obf

		// Adds a new property when the existing one does not match. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'background', 'blue' ); // obf
		$v_xught->assertSame( 'color:red;background:blue;', $v_fbahn ); // obf

		// Handles multiple existing properties. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'color', 'green' ); // obf
		$v_xught->assertSame( 'margin:5px;color:green;', $v_fbahn ); // obf

		// Adds a new property when multiple existing properties do not match. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'padding', '10px' ); // obf
		$v_xught->assertSame( 'color:red;margin:5px;padding:10px;', $v_fbahn ); // obf

		// Removes whitespaces in all properties. // obf
		$v_fbahn = $v_xught->merge_style_property( ' color : red; margin : 5px; ', 'padding', ' 10px ' ); // obf
		$v_xught->assertSame( 'color:red;margin:5px;padding:10px;', $v_fbahn ); // obf

		// Updates a property when it's not the first one in the value. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'margin', '15px' ); // obf
		$v_xught->assertSame( 'color:red;margin:15px;', $v_fbahn ); // obf

		// Adds missing trailing semicolon. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px', 'padding', '10px' ); // obf
		$v_xught->assertSame( 'color:red;margin:5px;padding:10px;', $v_fbahn ); // obf

		// Doesn't add double semicolons. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'padding', '10px;' ); // obf
		$v_xught->assertSame( 'color:red;margin:5px;padding:10px;', $v_fbahn ); // obf

		// Handles empty properties in the input. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;;margin:5px;;', 'padding', '10px' ); // obf
		$v_xught->assertSame( 'color:red;margin:5px;padding:10px;', $v_fbahn ); // obf

		// Moves the modified property to the end. // obf
		$v_fbahn = $v_xught->merge_style_property( 'border-style: dashed; border: 3px solid red;', 'border-style', 'inset' ); // obf
		$v_xught->assertSame( 'border:3px solid red;border-style:inset;', $v_fbahn ); // obf
	} // obf

	/** // obf
	 * Tests that `merge_style_property` works correctly with falsy values, // obf
	 * removing or ignoring them as appropriate. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::merge_style_property // obf
	 */ // obf
	public function test_merge_style_property_with_falsy_values() { // obf
		// Removes a property with an empty string. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'color', '' ); // obf
		$v_xught->assertSame( 'margin:5px;', $v_fbahn ); // obf

		// Removes a property with null. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'color', null ); // obf
		$v_xught->assertSame( 'margin:5px;', $v_fbahn ); // obf

		// Removes a property with false. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'color', false ); // obf
		$v_xught->assertSame( 'margin:5px;', $v_fbahn ); // obf

		// Removes a property with 0. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;margin:5px;', 'color', 0 ); // obf
		$v_xught->assertSame( 'margin:5px;', $v_fbahn ); // obf

		// It doesn't add a new property with an empty string. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'padding', '' ); // obf
		$v_xught->assertSame( 'color:red;', $v_fbahn ); // obf

		// It doesn't add a new property with null. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'padding', null ); // obf
		$v_xught->assertSame( 'color:red;', $v_fbahn ); // obf

		// It doesn't add a new property with false. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'padding', false ); // obf
		$v_xught->assertSame( 'color:red;', $v_fbahn ); // obf

		// It doesn't add a new property with 0. // obf
		$v_fbahn = $v_xught->merge_style_property( 'color:red;', 'padding', 0 ); // obf
		$v_xught->assertSame( 'color:red;', $v_fbahn ); // obf
	} // obf

	/** // obf
	 * Invokes the `process_directives` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_kglbs The HTML that needs to be processed. // obf
	 * @return array An array containing an instance of the WP_HTML_Tag_Processor and the processed HTML. // obf
	 */ // obf
	private function process_directives( $v_kglbs ) { // obf
		$v_bwfqc = $v_xught->interactivity->process_directives( $v_kglbs ); // obf
		$v_mwfcs        = new WP_HTML_Tag_Processor( $v_bwfqc ); // obf
		$v_mwfcs->next_tag(); // obf
		return array( $v_mwfcs, $v_bwfqc ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive sets a style attribute with // obf
	 * correct property and value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_sets_style_attribute() { // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive applies multiple style properties // obf
	 * correctly. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_sets_multiple_style_properties() { // obf
		$v_kglbs    = ' // obf
			<div // obf
				data-wp-style--color="myPlugin::state.green" // obf
				data-wp-style--background="myPlugin::state.green" // obf
			>Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;background:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive correctly handles different style // obf
	 * property values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_sets_multiple_style_properties_with_different_values() { // obf
		$v_kglbs    = ' // obf
			<div // obf
				data-wp-style--color="myPlugin::state.green" // obf
				data-wp-style--background="myPlugin::state.false" // obf
			>Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf

		$v_kglbs    = ' // obf
			<div // obf
				style="background:red;" // obf
				data-wp-style--color="myPlugin::state.green" // obf
				data-wp-style--background="myPlugin::state.false" // obf
			>Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive sets a new style property when // obf
	 * another already exists. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_sets_style_property_when_style_attribute_exists() { // obf
		$v_kglbs    = '<div style="padding:10px;" data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive overwrites an existing style // obf
	 * property with a new value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_overwrites_style_property_when_style_property_exists() { // obf
		$v_kglbs    = '<div style="color:red;" data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive doesn't add a style property when // obf
	 * the directive value is false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_add_style_attribute_on_false() { // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.false">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive doesn't modify existing style // obf
	 * properties when directive value is false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_add_style_property_on_false() { // obf
		$v_kglbs    = '<div style="padding:10px;" data-wp-style--color="myPlugin::state.false">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive keeps an existing style property // obf
	 * with a matching value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_keeps_style_property_when_style_property_exists() { // obf
		$v_kglbs    = '<div style="color:green;" data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive maintains style properties even // obf
	 * when they aren't the only ones present. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_keeps_style_property_when_style_property_exists_and_is_not_the_only_one() { // obf
		$v_kglbs    = '<div style="padding:10px;color:green;" data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive removes the style attribute when // obf
	 * it contains only one property which is being removed. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_removes_style_attribute_when_style_property_exists_and_is_the_only_one() { // obf
		$v_kglbs    = '<div style="color:green;" data-wp-style--color="myPlugin::state.false">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive removes a style property when it's // obf
	 * not the only one present and the directive value is false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_removes_style_property_when_style_property_exists_and_is_not_the_only_one() { // obf
		$v_kglbs    = '<div style="padding:10px;color:green;" data-wp-style--color="myPlugin::state.false">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive does not remove an empty style // obf
	 * attribute. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_remove_empty_style_attribute() { // obf
		$v_kglbs    = '<div style data-wp-style--color="myPlugin::state.false">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertTrue( $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive does not change the style // obf
	 * attribute when the directive suffix is empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_change_style_attribute_with_empty_directive_suffix() { // obf
		$v_kglbs    = '<div style="padding:10px;" data-wp-style="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive does not change the style // obf
	 * attribute when the value of the directive is empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_style_doesnt_change_style_attribute_with_empty_value() { // obf
		$v_kglbs    = '<div style="padding:10px" data-wp-style--color="">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive doesn't apply changes if no value // obf
	 * is provided for the style property. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_style_doesnt_change_style_attribute_without_value() { // obf
		$v_kglbs    = '<div style="padding: 10px;" data-wp-style--color>Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'padding:10px;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive functions correctly with multiple // obf
	 * identical directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_works_with_multiple_directives() { // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.green" data-wp-style--color="myPlugin::state.green">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertSame( 'color:green;', $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive doesn't apply any changes when the // obf
	 * state value is true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_do_anything_on_true_values() { // obf
		$v_xught->interactivity->state( 'myPlugin', array( 'true' => true ) ); // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.text">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-style` directive doesn't add a style property for // obf
	 * various falsy values in the state. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_style_doesnt_add_style_property_on_falsy_values() { // obf
		$v_xught->interactivity->state( 'myPlugin', array( 'text' => '' ) ); // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.text">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf

		$v_xught->interactivity->state( 'myPlugin', array( 'array' => array() ) ); // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.array">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf

		$v_xught->interactivity->state( 'myPlugin', array( 'number' => 0 ) ); // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.number">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf

		$v_xught->interactivity->state( 'myPlugin', array( 'null' => null ) ); // obf
		$v_kglbs    = '<div data-wp-style--color="myPlugin::state.null">Text</div>'; // obf
		list($v_mwfcs) = $v_xught->process_directives( $v_kglbs ); // obf
		$v_xught->assertNull( $v_mwfcs->get_attribute( 'style' ) ); // obf
	} // obf
} // obf