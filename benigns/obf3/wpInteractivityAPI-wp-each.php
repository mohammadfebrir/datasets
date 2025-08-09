

<?php // obf
/** // obf
 * Unit tests covering the data_wp_each_processor functionality of the // obf
 * WP_Interactivity_API class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API // obf
 * // obf
 * @group interactivity-api // obf
 */ // obf
class Tests_WP_Interactivity_API_WP_Each extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_kwkva; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_fuydl->interactivity = new WP_Interactivity_API(); // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => array( 1, 2 ) ) ); // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'after' => 'after-wp-each' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't do anything if it's not on // obf
	 * a template tag. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_doesnt_do_anything_on_non_template_tags() { // obf
		$v_yyhso = ' // obf
			<div data-wp-each="myPlugin::state.list"> // obf
				<span data-wp-text="myPlugin::context.item"></span> // obf
			</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't do anything if the array // obf
	 * is associative instead of indexed. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_doesnt_do_anything_on_associative_arrays() { // obf
		$v_fuydl->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'assoc' => array( // obf
					'one' => 1, // obf
					'two' => 2, // obf
				), // obf
			) // obf
		); // obf
		$v_yyhso = ' // obf
			<template data-wp-each="myPlugin::state.assoc"> // obf
				<span data-wp-text="myPlugin::context.item"></span> // obf
			</template>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with simple tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_simple_tags() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't do anything if the array is // obf
	 * empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_empty_array() { // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'empty' => array() ) ); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.empty">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.empty">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive merges the item with the previous // obf
	 * context correctly. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_merges_context_correctly() { // obf
		$v_yyhso = '' . // obf
			'<div data-wp-context=\'myPlugin::{ "item": "New text", "id": "some-id", "after": "after-wp-each" }\'>' . // obf
				'<template data-wp-each="myPlugin::state.list">' . // obf
					'<span data-wp-bind--id="myPlugin::context.id" data-wp-text="myPlugin::context.item"></span>' . // obf
				'</template>' . // obf
				'<div data-wp-bind--id="myPlugin::context.after" data-wp-text="myPlugin::context.item">Text</div>' . // obf
			'</div>'; // obf
		$v_yhxpt = '' . // obf
			'<div data-wp-context=\'myPlugin::{ "item": "New text", "id": "some-id", "after": "after-wp-each" }\'>' . // obf
				'<template data-wp-each="myPlugin::state.list">' . // obf
					'<span data-wp-bind--id="myPlugin::context.id" data-wp-text="myPlugin::context.item"></span>' . // obf
				'</template>' . // obf
				'<span data-wp-each-child id="some-id" data-wp-bind--id="myPlugin::context.id" data-wp-text="myPlugin::context.item">1</span>' . // obf
				'<span data-wp-each-child id="some-id" data-wp-bind--id="myPlugin::context.id" data-wp-text="myPlugin::context.item">2</span>' . // obf
				'<div id="after-wp-each" data-wp-bind--id="myPlugin::context.after" data-wp-text="myPlugin::context.item">New text</div>' . // obf
			'</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with arrays from the context. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_gets_arrays_from_context() { // obf
		$v_yyhso = '' . // obf
			'<div data-wp-context=\'myPlugin::{ "list": [ 1, 2 ] }\'>' . // obf
				'<template data-wp-each="myPlugin::context.list">' . // obf
					'<span data-wp-text="myPlugin::context.item"></span>' . // obf
				'</template>' . // obf
				'<div data-wp-bind--id="myPlugin::state.after">Text</div>' . // obf
			'</div>'; // obf
		$v_yhxpt = '' . // obf
			'<div data-wp-context=\'myPlugin::{ "list": [ 1, 2 ] }\'>' . // obf
				'<template data-wp-each="myPlugin::context.list">' . // obf
					'<span data-wp-text="myPlugin::context.item"></span>' . // obf
				'</template>' . // obf
				'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
				'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
				'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>' . // obf
			'</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with the default namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_default_namespace() { // obf
		$v_yyhso = '' . // obf
			'<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'>' . // obf
				'<template data-wp-each="state.list">' . // obf
					'<span data-wp-text="context.item"></span>' . // obf
				'</template>' . // obf
				'<div data-wp-bind--id="state.after">Text</div>' . // obf
			'</div>'; // obf
		$v_yhxpt = '' . // obf
			'<div data-wp-interactive=\'{ "namespace": "myPlugin" }\'>' . // obf
				'<template data-wp-each="state.list">' . // obf
					'<span data-wp-text="context.item"></span>' . // obf
				'</template>' . // obf
				'<span data-wp-each-child data-wp-text="context.item">1</span>' . // obf
				'<span data-wp-each-child data-wp-text="context.item">2</span>' . // obf
				'<div id="after-wp-each" data-wp-bind--id="state.after">Text</div>' . // obf
			'</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with multiple tags per item. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_multiple_tags_per_item() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with void tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_void_tags() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
			'</template>' . // obf
			'<img data-wp-each-child id="1" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<img data-wp-each-child id="1" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<img data-wp-each-child id="2" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<img data-wp-each-child id="2" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with combinations of void and // obf
	 * non-void tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_void_and_non_void_tags() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<img data-wp-bind--id="myPlugin::context.item">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<img data-wp-each-child id="1" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<img data-wp-each-child id="2" data-wp-bind--id="myPlugin::context.item">' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with nested tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_nested_tags() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<div data-wp-bind--id="myPlugin::context.item">' . // obf
					'id: <span data-wp-text="myPlugin::context.item"></span>' . // obf
				'</div>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<div data-wp-bind--id="myPlugin::context.item">' . // obf
					'id: <span data-wp-text="myPlugin::context.item"></span>' . // obf
				'</div>' . // obf
			'</template>' . // obf
			'<div data-wp-each-child id="1" data-wp-bind--id="myPlugin::context.item">' . // obf
				'id: <span data-wp-text="myPlugin::context.item">1</span>' . // obf
			'</div>' . // obf
			'<div data-wp-each-child id="2" data-wp-bind--id="myPlugin::context.item">' . // obf
				'id: <span data-wp-text="myPlugin::context.item">2</span>' . // obf
			'</div>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with nested item properties. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_nested_item_properties() { // obf
		$v_fuydl->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'list' => array( // obf
					array( // obf
						'id'   => 1, // obf
						'name' => 'one', // obf
					), // obf
					array( // obf
						'id'   => 2, // obf
						'name' => 'two', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item.id"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item.name"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item.id"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item.name"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item.id">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item.name">one</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item.id">2</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item.name">two</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with different item names. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_different_item_names() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--myitem="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.myitem"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each--myitem="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.myitem"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.myitem">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.myitem">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive transforms kebab-case into // obf
	 * camelCase. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_different_item_names_transforms_camelcase() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--my-item="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.myItem"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each--my-item="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.myItem"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.myItem">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.myItem">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't work with top-level texts. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_doesnt_work_with_top_level_text() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'id: <span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf

		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>!' . // obf
			'</template>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf

		// But it should work fine with spaces and linebreaks. // obf
		$v_yyhso = ' // obf
			<template data-wp-each="myPlugin::state.list"> // obf
				<span class="test" data-wp-bind--id="myPlugin::context.item"></span> // obf
			</template>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fslks        = new WP_HTML_Tag_Processor( $v_donok ); // obf
		$v_fslks->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_fslks->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_fuydl->assertSame( '1', $v_fslks->get_attribute( 'id' ) ); // obf
		$v_fslks->next_tag( array( 'class_name' => 'test' ) ); // obf
		$v_fuydl->assertSame( '2', $v_fslks->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with nested template tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_nested_template_tags() { // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'list2' => array( 3, 4 ) ) ); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--item1="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
				'<template data-wp-each--item2="myPlugin::state.list2">' . // obf
					'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each--item1="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
				'<template data-wp-each--item2="myPlugin::state.list2">' . // obf
					'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">1</span>' . // obf
			'<template data-wp-each-child data-wp-each--item2="myPlugin::state.list2">' . // obf
				'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">3</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">4</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">2</span>' . // obf
			'<template data-wp-each-child data-wp-each--item2="myPlugin::state.list2">' . // obf
				'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">3</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">4</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with directly nested template // obf
	 * tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_directly_nested_template_tags() { // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'list2' => array( 3, 4 ) ) ); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--item1="myPlugin::state.list">' . // obf
				'<template data-wp-each--item2="myPlugin::state.list2">' . // obf
					'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
					'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each--item1="myPlugin::state.list">' . // obf
				'<template data-wp-each--item2="myPlugin::state.list2">' . // obf
					'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
					'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<template data-wp-each-child data-wp-each--item2="myPlugin::state.list2">' . // obf
				'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">3</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">4</span>' . // obf
			'<template data-wp-each-child data-wp-each--item2="myPlugin::state.list2">' . // obf
				'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
				'<span data-wp-text="myPlugin::context.item2"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">2</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">3</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item1">2</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item2">4</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive works with nestded template tags // obf
	 * that use a previous item as a list. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_nested_template_tags_using_previous_item_as_list() { // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'list2' => array( array( 1, 2 ), array( 3, 4 ) ) ) ); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--list="myPlugin::state.list2">' . // obf
				'<template data-wp-each--number="myPlugin::context.list">' . // obf
					'<span data-wp-text="myPlugin::context.number"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each--list="myPlugin::state.list2">' . // obf
				'<template data-wp-each--number="myPlugin::context.list">' . // obf
					'<span data-wp-text="myPlugin::context.number"></span>' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<template data-wp-each-child data-wp-each--number="myPlugin::context.list">' . // obf
				'<span data-wp-text="myPlugin::context.number"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.number">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.number">2</span>' . // obf
			'<template data-wp-each-child data-wp-each--number="myPlugin::context.list">' . // obf
				'<span data-wp-text="myPlugin::context.number"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.number">3</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.number">4</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't process unbalanced tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 */ // obf
	public function test_wp_each_unbalanced_tags() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item">' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't process unbalanced tags in // obf
	 * nested templates. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 */ // obf
	public function test_wp_each_unbalanced_tags_in_nested_template_tags() { // obf
		$v_fuydl->interactivity->state( 'myPlugin', array( 'list2' => array( 3, 4 ) ) ); // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each--item1="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item1"></span>' . // obf
				'<template data-wp-each--item2="myPlugin::state.list2">' . // obf
					'<span data-wp-text="myPlugin::context.item2">' . // obf
				'</template>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yyhso, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't process if it doesn't get // obf
	 * an array. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_doesnt_process_if_not_array() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf

		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => null ) ); // obf
		$v_donok = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf

		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => 'Text' ) ); // obf
		$v_donok = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf

		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => 100 ) ); // obf
		$v_donok = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf

		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => false ) ); // obf
		$v_donok = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf

		$v_fuydl->interactivity->state( 'myPlugin', array( 'list' => true ) ); // obf
		$v_donok = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-each` directive doesn't process anything if it // obf
	 * detects manual server-side processing. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_each_doesnt_process_with_manual_server_directive_processing() { // obf
		$v_yyhso = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<div data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_yhxpt = '' . // obf
			'<template data-wp-each="myPlugin::state.list">' . // obf
				'<span data-wp-text="myPlugin::context.item"></span>' . // obf
			'</template>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">1</span>' . // obf
			'<span data-wp-each-child data-wp-text="myPlugin::context.item">2</span>' . // obf
			'<div id="after-wp-each" data-wp-bind--id="myPlugin::state.after">Text</div>'; // obf
		$v_donok      = $v_fuydl->interactivity->process_directives( $v_yyhso ); // obf
		$v_fuydl->assertSame( $v_yhxpt, $v_donok ); // obf
	} // obf
} // obf