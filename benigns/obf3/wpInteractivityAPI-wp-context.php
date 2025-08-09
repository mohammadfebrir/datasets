

<?php // obf
/** // obf
 * Unit tests covering the data_wp_context_processor functionality of the // obf
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
class Tests_WP_Interactivity_API_WP_Context extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_ndupu; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_xlpea->interactivity = new WP_Interactivity_API(); // obf
	} // obf

	/** // obf
	 * Invokes the `process_directives` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_mduik The HTML that needs to be processed. // obf
	 * @return array An array containing an instance of the WP_HTML_Tag_Processor and the processed HTML. // obf
	 */ // obf
	private function process_directives( $v_mduik ) { // obf
		$v_jjqah = $v_xlpea->interactivity->process_directives( $v_mduik ); // obf
		$v_kcpli        = new WP_HTML_Tag_Processor( $v_jjqah ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		return array( $v_kcpli, $v_jjqah ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive can set a context in a custom // obf
	 * namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_sets_a_context_in_a_custom_namespace() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id" }\'> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive can set a context in the same // obf
	 * tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_can_set_a_context_in_the_same_tag() { // obf
		$v_mduik    = ' // obf
			<div // obf
				class="test" // obf
				data-wp-context=\'myPlugin::{ "id": "some-id" }\' // obf
				data-wp-bind--id="myPlugin::context.id" // obf
			> // obf
				Text // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive merges context in the same // obf
	 * custom namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_merges_context_in_the_same_custom_namespace() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id1": "some-id-1" }\'> // obf
				<div data-wp-context=\'myPlugin::{ "id2": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id1">Text</div> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id2">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive overwrites context in the same // obf
	 * custom namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_overwrites_context_in_the_same_custom_namespace() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context=\'myPlugin::{ "id": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive replaces the old context after a // obf
	 * closing tag in the same custom namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_replaces_old_context_after_closing_tag_in_the_same_custom_namespace() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context=\'myPlugin::{ "id": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive merges context in different // obf
	 * custom namespaces. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_merges_context_in_different_custom_namespaces() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context=\'otherPlugin::{ "id": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
					<div class="test" data-wp-bind--id="otherPlugin::context.id">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't throw on malformed // obf
	 * context objects. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_throw_on_malformed_context_objects() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ id: "some-id" }\'> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertNull( $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't overwrite context on // obf
	 * malformed context objects. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_overwrite_context_on_malformed_context_objects() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context=\'myPlugin::{ id: "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't throw on an empty // obf
	 * context object. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_throw_on_empty_context() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=""> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertNull( $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't overwrite the context on // obf
	 * empty context directive. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_overwrite_context_on_empty_context() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context=""> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't throw on context without // obf
	 * value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_throw_on_context_without_value() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertNull( $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't overwrite context on // obf
	 * context without value. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_overwrite_context_on_context_without_value() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id-1" }\'> // obf
				<div data-wp-context> // obf
					<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive works with multiple directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_works_with_multiple_directives() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'myPlugin::{ "id": "some-id" }\' data-wp-context=\'myPlugin::{ "id": "some-id" }\'> // obf
				<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive doesn't work without any // obf
	 * namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_wp_context_directive_doesnt_work_without_any_namespace() { // obf
		$v_mduik    = ' // obf
			<div data-wp-context=\'{ "id": "some-id" }\'> // obf
				<div class="test" data-wp-bind--id="context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertNull( $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive works with a default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_works_with_default_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
			 data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
			 data-wp-context=\'{ "id": "some-id" }\' // obf
			> // obf
				<div class="test" data-wp-bind--id="context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive overrides a default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_overrides_default_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
			 data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
			 data-wp-context=\'otherPlugin::{ "id": "some-id" }\' // obf
			> // obf
				<div data-wp-interactive=\'{ "namespace": "otherPlugin" }\'> // obf
					<div class="test" data-wp-bind--id="context.id">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive overrides the default namespace // obf
	 * with the same namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_overrides_default_namespace_with_same_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
			 data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
			 data-wp-context=\'myPlugin::{ "id": "some-id" }\' // obf
			> // obf
				<div class="test" data-wp-bind--id="context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive works with nested default // obf
	 * namespaces. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_works_with_nested_default_namespaces() { // obf
		$v_mduik    = ' // obf
			<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'> // obf
				<div data-wp-context=\'{ "id": "some-id" }\'> // obf
					<div data-wp-interactive=\'{ "namespace": "otherPlugin" }\'> // obf
						<div data-wp-context=\'{ "id": "other-id" }\'> // obf
							<div class="test" data-wp-bind--id="context.id">Text</div> // obf
							<div class="test" data-wp-bind--id="myPlugin::context.id">Text</div> // obf
						</div> // obf
					</div> // obf
					<div class="test" data-wp-bind--id="context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'other-id', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertNull( $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive works with a default namespace // obf
	 * in the same tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_works_with_default_namespace_in_the_same_tag() { // obf
		$v_mduik    = ' // obf
			<div // obf
			 class="test" // obf
			 data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
			 data-wp-context=\'{ "id": "some-id" }\' // obf
			 data-wp-bind--id="context.id" // obf
			> // obf
				Text // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive merges the context in the same // obf
	 * default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_merges_context_in_the_same_default_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
				data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
				data-wp-context=\'{ "id1": "some-id-1" }\' // obf
			> // obf
				<div data-wp-context=\'{ "id2": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="context.id1">Text</div> // obf
					<div class="test" data-wp-bind--id="context.id2">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive overwrites context in the same // obf
	 * default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_overwrites_context_in_the_same_default_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
				data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
				data-wp-context=\'{ "id": "some-id-1" }\' // obf
			> // obf
				<div data-wp-context=\'{ "id": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="context.id">Text</div> // obf
				</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-context` directive replaces the old context after // obf
	 * the closing tag in the same default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_context_directive_replaces_old_context_after_closing_tag_in_the_same_default_namespace() { // obf
		$v_mduik    = ' // obf
			<div // obf
				data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
				data-wp-context=\'{ "id": "some-id-1" }\' // obf
			> // obf
				<div data-wp-context=\'{ "id": "some-id-2" }\'> // obf
					<div class="test" data-wp-bind--id="context.id">Text</div> // obf
				</div> // obf
				<div class="test" data-wp-bind--id="context.id">Text</div> // obf
			</div> // obf
		'; // obf
		list($v_kcpli) = $v_xlpea->process_directives( $v_mduik ); // obf
		$v_xlpea->assertSame( 'some-id-2', $v_kcpli->get_attribute( 'id' ) ); // obf
		$v_kcpli->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_xlpea->assertSame( 'some-id-1', $v_kcpli->get_attribute( 'id' ) ); // obf
	} // obf
} // obf