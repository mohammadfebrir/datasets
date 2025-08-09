

<?php // obf
/** // obf
 * Unit tests covering the data_wp_text_processor functionality of the // obf
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
class Tests_Interactivity_API_WpInteractivityAPIWPText extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_ffcug; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_nqrpc->interactivity = new WP_Interactivity_API(); // obf
		$v_nqrpc->interactivity->state( 'myPlugin', array( 'text' => 'Updated' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive sets inner text content. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_sets_inner_content() { // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.text">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.text">Updated</div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive works with numerical values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_sets_inner_content_numbers() { // obf
		$v_nqrpc->interactivity->state( 'myPlugin', array( 'number' => 100 ) ); // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.number">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.number">100</div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive removes inner text content when the // obf
	 * state is not a string or number. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_removes_inner_content_on_types_that_are_not_strings_or_numbers() { // obf
		$v_nqrpc->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'true'  => true, // obf
				'false' => false, // obf
				'null'  => null, // obf
				'array' => array(), // obf
				'func'  => function () {}, // obf
			) // obf
		); // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.true">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.true"></div>', $v_besdi ); // obf

		$v_ldwcz     = '<div data-wp-text="myPlugin::state.false">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.false"></div>', $v_besdi ); // obf

		$v_ldwcz     = '<div data-wp-text="myPlugin::state.null">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.null"></div>', $v_besdi ); // obf

		$v_ldwcz     = '<div data-wp-text="myPlugin::state.array">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.array"></div>', $v_besdi ); // obf

		$v_ldwcz     = '<div data-wp-text="myPlugin::state.func">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.func"></div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive overwrites entire inner content, // obf
	 * including nested tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_sets_inner_content_with_nested_tags() { // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.text"><div><div>Text</div><div>Another text</div></div></div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.text">Updated</div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive works even with unbalanced tags // obf
	 * when they are different tags (div -> unbalanced span). // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_sets_inner_content_even_with_unbalanced_but_different_tags_inside_content() { // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.text"><span>Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.text">Updated</div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` fails to overwrite inner content if there are // obf
	 * unbalanced when they are the same tags (div -> unbalanced div). // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 */ // obf
	public function test_wp_text_fails_with_unbalanced_and_same_tags_inside_content() { // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.text">Text<div></div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.text">Text<div></div>', $v_besdi ); // obf
	} // obf

	/** // obf
	 * Tests that the `data-wp-text` directive cannot set inner HTML content and // obf
	 * it will be encoded as text. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_wp_text_cant_set_inner_html_in_the_content() { // obf
		$v_nqrpc->interactivity->state( 'myPlugin', array( 'text' => '<span>Updated</span>' ) ); // obf
		$v_ldwcz     = '<div data-wp-text="myPlugin::state.text">Text</div>'; // obf
		$v_besdi = $v_nqrpc->interactivity->process_directives( $v_ldwcz ); // obf
		$v_nqrpc->assertSame( '<div data-wp-text="myPlugin::state.text">&lt;span&gt;Updated&lt;/span&gt;</div>', $v_besdi ); // obf
	} // obf
} // obf