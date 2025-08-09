

<?php // obf
/** // obf
 * Unit tests covering the data_wp_class_processor functionality of the // obf
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
class Tests_WP_Interactivity_API_WP_Class extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_vkozz; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_rxeap->interactivity = new WP_Interactivity_API(); // obf
		$v_rxeap->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'true'  => true, // obf
				'false' => false, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Invokes the `process_directives` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_sefqt The HTML that needs to be processed. // obf
	 * @return array An array containing an instance of the WP_HTML_Tag_Processor and the processed HTML. // obf
	 */ // obf
	private function process_directives( $v_sefqt ) { // obf
		$v_nzyld = $v_rxeap->interactivity->process_directives( $v_sefqt ); // obf
		$v_nuvab        = new WP_HTML_Tag_Processor( $v_nzyld ); // obf
		$v_nuvab->next_tag(); // obf
		return array( $v_nuvab, $v_nzyld ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-class` adds a class when the condition is true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_sets_class_name() { // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-class` can add multiple classes based on true // obf
	 * conditions. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_sets_multiple_class_names() { // obf
		$v_sefqt    = ' // obf
			<div // obf
				data-wp-class--some-class="myPlugin::state.true" // obf
				data-wp-class--other-class="myPlugin::state.true" // obf
			>Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests handling of adding one and not adding another class based on // obf
	 * different boolean values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_handles_multiple_class_names_with_different_values() { // obf
		$v_sefqt    = ' // obf
			<div // obf
				data-wp-class--some-class="myPlugin::state.true" // obf
				data-wp-class--other-class="myPlugin::state.false" // obf
			>Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_sefqt    = ' // obf
			<div // obf
				class="other-class" // obf
				data-wp-class--some-class="myPlugin::state.true" // obf
				data-wp-class--other-class="myPlugin::state.false" // obf
			>Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `data-wp-class` adds new classes alongside existing ones. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_sets_class_name_when_class_attribute_exists() { // obf
		$v_sefqt    = '<div class="other-class" data-wp-class--some-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that no class is added when the associated state is false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_doesnt_add_class_attribute_on_false() { // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.false">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that existing class names are preserved when the directive condition // obf
	 * is false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_doesnt_add_class_name_on_false() { // obf
		$v_sefqt    = '<div class="other-class" data-wp-class--some-class="myPlugin::state.false">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that existing class names remain intact when they should be re-added // obf
	 * as per their directive. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_keeps_class_name_when_class_name_exists() { // obf
		$v_sefqt    = '<div class="some-class" data-wp-class--some-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests preservation of existing class names, even when one is repeated in a // obf
	 * directive that evaluates to true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_keeps_class_name_when_class_name_exists_and_is_not_the_only_one() { // obf
		$v_sefqt    = '<div class="other-class some-class" data-wp-class--some-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a class attribute with only one class name is removed when the // obf
	 * directive evaluates to false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_removes_class_attribute_when_class_name_exists_and_is_the_only_one() { // obf
		$v_sefqt    = '<div class="some-class" data-wp-class--some-class="myPlugin::state.false">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that one of several class names is removed when its directive // obf
	 * evaluates to false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_removes_class_name_when_class_name_exists_and_is_not_the_only_one() { // obf
		$v_sefqt    = '<div class="other-class some-class" data-wp-class--some-class="myPlugin::state.false">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an empty class attribute is not removed even if a directive // obf
	 * evaluates to false. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_doesnt_remove_empty_class_attribute() { // obf
		$v_sefqt    = '<div class data-wp-class--some-class="myPlugin::state.false">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertTrue( $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the class attribute remains unchanged if the data-wp-class // obf
	 * suffix is empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_doesnt_change_class_attribute_with_empty_directive_suffix() { // obf
		$v_sefqt    = '<div class="other-class" data-wp-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the class attribute is not altered if the value of the // obf
	 * `data-wp-class` directive is empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_class_doesnt_change_class_attribute_with_empty_value() { // obf
		$v_sefqt    = '<div class="other-class" data-wp-class--some-class="">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an existing class attribute is not affected by a `data-wp-class` // obf
	 * directive without a value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_class_doesnt_change_class_attribute_without_value() { // obf
		$v_sefqt    = '<div class="other-class" data-wp-class--some-class>Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'other-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that multiple directives for the same class yield the correct result // obf
	 * when the condition is true. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_works_with_multiple_directives() { // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.true" data-wp-class--some-class="myPlugin::state.true">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests setting class names based on truthy values other than just true // obf
	 * booleans. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_sets_class_name_on_truthy_values() { // obf
		$v_rxeap->interactivity->state( 'myPlugin', array( 'text' => 'some text' ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.text">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_rxeap->interactivity->state( 'myPlugin', array( 'array' => array( 1, 2 ) ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.array">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_rxeap->interactivity->state( 'myPlugin', array( 'number' => 1 ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.number">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertSame( 'some-class', $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf

	/** // obf
	 * Tests that class attributes aren't set for falsy values other than just // obf
	 * false booleans. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_class_sets_class_name_on_falsy_values() { // obf
		$v_rxeap->interactivity->state( 'myPlugin', array( 'text' => '' ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.text">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_rxeap->interactivity->state( 'myPlugin', array( 'array' => array() ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.array">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_rxeap->interactivity->state( 'myPlugin', array( 'number' => 0 ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.number">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf

		$v_rxeap->interactivity->state( 'myPlugin', array( 'null' => null ) ); // obf
		$v_sefqt    = '<div data-wp-class--some-class="myPlugin::state.null">Text</div>'; // obf
		list($v_nuvab) = $v_rxeap->process_directives( $v_sefqt ); // obf
		$v_rxeap->assertNull( $v_nuvab->get_attribute( 'class' ) ); // obf
	} // obf
} // obf