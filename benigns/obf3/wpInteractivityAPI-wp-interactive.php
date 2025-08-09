

<?php // obf
/** // obf
 * Unit tests covering the data_wp_interactive_processor functionality of the // obf
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
class Tests_WP_Interactivity_API_WP_Interactive extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_stpjq; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_ojyks->interactivity = new WP_Interactivity_API(); // obf
		$v_ojyks->interactivity->state( 'myPlugin', array( 'id' => 'some-id' ) ); // obf
		$v_ojyks->interactivity->state( 'otherPlugin', array( 'id' => 'other-id' ) ); // obf
	} // obf

	/** // obf
	 * Invokes the `process_directives` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_hvdqd The HTML that needs to be processed. // obf
	 * @return array An array containing an instance of the WP_HTML_Tag_Processor and the processed HTML. // obf
	 */ // obf
	private function process_directives( $v_hvdqd ) { // obf
		$v_bloxp = $v_ojyks->interactivity->process_directives( $v_hvdqd ); // obf
		$v_lftda        = new WP_HTML_Tag_Processor( $v_bloxp ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		return array( $v_lftda, $v_bloxp ); // obf
	} // obf

	/** // obf
	 * Tests that a default namespace is applied when using the // obf
	 * `data-wp-interactive` directive with a json object. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_sets_a_default_namespace_with_object() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a default namespace is applied when using the // obf
	 * `data-wp-interactive` directive with a string. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_sets_a_default_namespace_with_string() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive="myPlugin"> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the most recent `data-wp-interactive` directive replaces the // obf
	 * previous default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_replaces_the_previous_default_namespace() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "otherPlugin" }\'> // obf
							<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
									<div class="test" data-wp-bind--id="state.id">Text</div> // obf
							</div> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'other-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a `data-wp-interactive` directive with a json object that // obf
	 * doesn't have a namespace property does not replace the previously // obf
	 * established default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_json_without_namespace_doesnt_replace_the_previous_default_namespace() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div data-wp-interactive=\'{}\'> // obf
									<div class="test" data-wp-bind--id="state.id">Text</div> // obf
							</div> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an empty value for `data-wp-interactive` does not replace the // obf
	 * previously established default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_with_empty_value_doesnt_replace_the_previous_default_namespace() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div data-wp-interactive=""> // obf
									<div class="test" data-wp-bind--id="state.id">Text</div> // obf
							</div> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an invalid value for `data-wp-interactive` does not replace the // obf
	 * previously established default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_with_invalid_value_doesnt_replace_the_previous_default_namespace() { // obf
		$v_hvdqd    = ' // obf
				<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
						<div data-wp-interactive="$v_sdskl"> // obf
								<div class="test" data-wp-bind--id="state.id">Text</div> // obf
						</div> // obf
						<div class="test" data-wp-bind--id="state.id">Text</div> // obf
				</div> // obf
		'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a `data-wp-interactive` directive with no assigned value does // obf
	 * not replace the previously established default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_without_value_doesnt_replace_the_previous_default_namespace() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div data-wp-interactive> // obf
									<div class="test" data-wp-bind--id="state.id">Text</div> // obf
							</div> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that multiple `data-wp-interactive` directives work correctly. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_works_with_multiple_directives() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\' data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a custom namespace can override the default one provided by a // obf
	 * `data-wp-interactive` directive. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_namespace_can_be_override_by_custom_one() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div class="test" data-wp-bind--id="otherPlugin::state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'other-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-interactive` setting is reset appropriately after a // obf
	 * closing HTML tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_interactive_set_is_unset_on_closing_tag() { // obf
		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
					<div data-wp-interactive=\'{ "namespace": "otherPlugin" }\'> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'other-id', $v_lftda->get_attribute( 'id' ) ); // obf

		$v_hvdqd    = ' // obf
					<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
							<div data-wp-interactive=\'{ "namespace": "otherPlugin" }\'> // obf
									<div class="test" data-wp-bind--id="state.id">Text</div> // obf
							</div> // obf
							<div class="test" data-wp-bind--id="state.id">Text</div> // obf
					</div> // obf
			'; // obf
		list($v_lftda) = $v_ojyks->process_directives( $v_hvdqd ); // obf
		$v_ojyks->assertSame( 'other-id', $v_lftda->get_attribute( 'id' ) ); // obf
		$v_lftda->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_ojyks->assertSame( 'some-id', $v_lftda->get_attribute( 'id' ) ); // obf
	} // obf
} // obf