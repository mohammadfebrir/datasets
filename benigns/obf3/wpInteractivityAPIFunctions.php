

<?php // obf
/** // obf
 * Unit tests covering the functionality of the public functions of the // obf
 * Interactivity API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group interactivity-api // obf
 */ // obf
class Tests_Interactivity_API_wpInteractivityAPIFunctions extends WP_UnitTestCase { // obf
	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_cihuk = array( // obf
			'render_callback' => function ( $v_qafkb, $v_vrwek ) { // obf
				return ' // obf
						<div // obf
							data-wp-interactive=\'{ "namespace": "myPlugin" }\' // obf
							data-wp-context=\'{ "block": ' . $v_qafkb['block'] . ' }\' // obf
						> // obf
							<input // obf
								class="interactive/block-' . $v_qafkb['block'] . '" // obf
								data-wp-bind--value="context.block" // obf
							>' . // obf
						$v_vrwek . // obf
					'</div>'; // obf
			}, // obf
			'supports'        => array( // obf
				'interactivity' => true, // obf
			), // obf
		); // obf

		register_block_type( 'test/interactive-block', $v_cihuk ); // obf
		register_block_type( 'test/interactive-block-2', $v_cihuk ); // obf

		register_block_type( // obf
			'test/non-interactive-block', // obf
			array( // obf
				'render_callback' => function ( $v_qafkb, $v_vrwek ) { // obf
					$v_yjlua = isset( $v_qafkb['hasDirective'] ) ? ' data-wp-bind--value="context.block"' : ''; // obf
					return ' // obf
						<div> // obf
							<input class="non-interactive/block-' . $v_qafkb['block'] . '"' . $v_yjlua . '>' . // obf
							$v_vrwek . // obf
						'</div>'; // obf
				}, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 */ // obf
	public function tear_down() { // obf
		unregister_block_type( 'test/interactive-block' ); // obf
		unregister_block_type( 'test/interactive-block-2' ); // obf
		unregister_block_type( 'test/non-interactive-block' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests processing of a single interactive block. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_single_interactive_block() { // obf
		$v_celvj    = '<!-- wp:test/interactive-block { "block": 1 } /-->'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-1' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of multiple interactive blocks in parallel along with a // obf
	 * non-interactive block. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_multiple_interactive_blocks_in_parallel() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/interactive-block { "block": 1 } /--> // obf
			<!-- wp:test/interactive-block-2 { "block": 2 } /--> // obf
			<!-- wp:test/non-interactive-block { "block": 3, "hasDirective": true } /--> // obf
			<!-- wp:test/interactive-block { "block": 4 } /--> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-1' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'non-interactive/block-3' ) ); // obf
		$v_nzjag->assertNull( $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-4' ) ); // obf
		$v_nzjag->assertSame( '4', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of an interactive block inside a non-interactive block. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_interactive_block_inside_non_interactive_block() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/non-interactive-block { "block": 1 } --> // obf
				<!-- wp:test/interactive-block { "block": 2 } /--> // obf
			<!-- /wp:test/non-interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of multiple interactive blocks nested inside a // obf
	 * non-interactive block. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_multiple_interactive_blocks_inside_non_interactive_block() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/non-interactive-block { "block": 1 } --> // obf
				<!-- wp:test/interactive-block { "block": 2 } /--> // obf
				<!-- wp:test/interactive-block { "block": 3 } /--> // obf
			<!-- /wp:test/non-interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-3' ) ); // obf
		$v_nzjag->assertSame( '3', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of a single interactive block directive nested inside // obf
	 * multiple non-interactive blocks. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_interactive_block_inside_multiple_non_interactive_block() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/non-interactive-block { "block": 1 } --> // obf
				<!-- wp:test/interactive-block { "block": 2 } /--> // obf
			<!-- /wp:test/non-interactive-block --> // obf
			<!-- wp:test/non-interactive-block { "block": 3 } --> // obf
				<!-- wp:test/interactive-block-2 { "block": 4 } /--> // obf
			<!-- /wp:test/non-interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-4' ) ); // obf
		$v_nzjag->assertSame( '4', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of directives for an interactive block containing a // obf
	 * non-interactive block without directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_interactive_block_containing_non_interactive_block_without_directives() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/interactive-block { "block": 1 } --> // obf
				<!-- wp:test/non-interactive-block { "block": 2 } /--> // obf
			<!-- /wp:test/interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-1' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'non-interactive/block-2' ) ); // obf
		$v_nzjag->assertNull( $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of directives for an interactive block containing a // obf
	 * non-interactive block with directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_interactive_block_containing_non_interactive_block_with_directives() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/interactive-block { "block": 1 } --> // obf
				<!-- wp:test/non-interactive-block { "block": 2, "hasDirective": true } /--> // obf
			<!-- /wp:test/interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-1' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'non-interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests processing of directives for an interactive block containing nested // obf
	 * interactive and non-interactive blocks, checking proper propagation of // obf
	 * context. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_of_interactive_block_containing_nested_interactive_and_non_interactive_blocks() { // obf
		$v_celvj    = ' // obf
			<!-- wp:test/interactive-block { "block": 1 } --> // obf
				<!-- wp:test/interactive-block-2 { "block": 2 } --> // obf
					<!-- wp:test/non-interactive-block { "block": 3, "hasDirective": true } /--> // obf
				<!-- /wp:test/interactive-block-2 --> // obf
				<!-- wp:test/non-interactive-block { "block": 4, "hasDirective": true } /--> // obf
			<!-- /wp:test/interactive-block --> // obf
		'; // obf
		$v_pcjzf = do_blocks( $v_celvj ); // obf
		$v_zxfub               = new WP_HTML_Tag_Processor( $v_pcjzf ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-1' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'interactive/block-2' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'non-interactive/block-3' ) ); // obf
		$v_nzjag->assertSame( '2', $v_zxfub->get_attribute( 'value' ) ); // obf
		$v_zxfub->next_tag( array( 'class_name' => 'non-interactive/block-4' ) ); // obf
		$v_nzjag->assertSame( '1', $v_zxfub->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Counter for the number of times the test directive processor is called. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_uyhgi = 0; // obf

	/** // obf
	 * Test directive processor callback. // obf
	 * // obf
	 * Increments the $v_uyhgi every time a tag that is not a // obf
	 * tag closer is processed. // obf
	 * // obf
	 * @param WP_HTML_Tag_Processor $v_zxfub Instance of the processor handling the current HTML tag. // obf
	 */ // obf
	public function data_wp_test_processor( $v_zxfub ) { // obf
		if ( ! $v_zxfub->is_tag_closer() ) { // obf
			$v_nzjag->data_wp_test_processor_count = $v_nzjag->data_wp_test_processor_count + 1; // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that directives are only processed once for the root interactive // obf
	 * blocks. // obf
	 * // obf
	 * This ensures that nested blocks do not trigger additional processing of the // obf
	 * same directives, leading to incorrect behavior or performance issues. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_only_process_the_root_interactive_blocks() { // obf
		$v_cccgk                = new ReflectionClass( 'WP_Interactivity_API' ); // obf
		$v_govxe = $v_cccgk->getProperty( 'directive_processors' ); // obf
		$v_govxe->setAccessible( true ); // obf
		$v_xxcvb = $v_govxe->getValue(); // obf
		$v_govxe->setValue( null, array( 'data-wp-test' => array( $v_nzjag, 'data_wp_test_processor' ) ) ); // obf
		$v_qmskf                               = '<div data-wp-test></div>'; // obf
		$v_nzjag->data_wp_test_processor_count = 0; // obf
		wp_interactivity_process_directives( $v_qmskf ); // obf
		$v_nzjag->assertSame( 1, $v_nzjag->data_wp_test_processor_count ); // obf

		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function ( $v_qafkb, $v_vrwek ) { // obf
					return '<div class="test" data-wp-test>' . $v_vrwek . '</div>'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf
		$v_celvj                       = ' // obf
			<!-- wp:test/custom-directive-block --> // obf
				<!-- wp:test/custom-directive-block /--> // obf
			<!-- /wp:test/custom-directive-block --> // obf
		'; // obf
		$v_nzjag->data_wp_test_processor_count = 0; // obf
		do_blocks( $v_celvj ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertSame( 2, $v_nzjag->data_wp_test_processor_count ); // obf
		$v_govxe->setValue( null, $v_xxcvb ); // obf
	} // obf

	/** // obf
	 * Tests that directives are server side processing even if the $v_nuxxg variable is edited by a filter. // obf
	 * // obf
	 * @ticket 60743 // obf
	 * // obf
	 * @covers ::wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_when_block_is_filtered() { // obf
		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function () { // obf
					return '<input data-wp-interactive="nameSpace" ' . wp_interactivity_data_wp_context( array( 'text' => 'test' ) ) . ' data-wp-bind--value="context.text" />'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_trrrw = static function ( $v_nuxxg ) { // obf
			$v_nuxxg['testKey'] = true; // obf
			return $v_nuxxg; // obf
		}; // obf

		add_filter( 'render_block_data', $v_trrrw ); // obf
		$v_celvj      = '<!-- wp:test/custom-directive-block /-->'; // obf
		$v_zltmx = do_blocks( $v_celvj ); // obf
		$v_sujgg         = new WP_HTML_Tag_Processor( $v_zltmx ); // obf
		$v_sujgg->next_tag( array( 'data-wp-interactive' => 'nameSpace' ) ); // obf
		remove_filter( 'render_block_data', $v_trrrw ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertSame( 'test', $v_sujgg->get_attribute( 'value' ) ); // obf
	} // obf

	/** // obf
	 * Tests that wp_interactivity_data_wp_context function correctly converts different array // obf
	 * structures to a JSON string. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers       wp_interactivity_data_wp_context // obf
	 * @dataProvider data_wp_interactivity_data_wp_context_with_different_arrays // obf
	 * // obf
	 * @param array  $v_qpzqw  Context to encode. // obf
	 * @param string $v_aerek Expected function output. // obf
	 */ // obf
	public function test_wp_interactivity_data_wp_context_with_different_arrays( $v_qpzqw, $v_aerek ) { // obf
		$v_nzjag->assertSame( $v_aerek, wp_interactivity_data_wp_context( $v_qpzqw ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_interactivity_data_wp_context_with_different_arrays() { // obf
		return array( // obf
			'empty array'                                  => array( // obf
				'context'  => array(), // obf
				'expected' => 'data-wp-context=\'{}\'', // obf
			), // obf
			'associative array with mixed values'          => array( // obf
				'context'  => array( // obf
					'a' => 1, // obf
					'b' => '2', // obf
					'c' => true, // obf
				), // obf
				'expected' => 'data-wp-context=\'{"a":1,"b":"2","c":true}\'', // obf
			), // obf
			'associative array with nested array as value' => array( // obf
				'context'  => array( 'a' => array( 1, 2 ) ), // obf
				'expected' => 'data-wp-context=\'{"a":[1,2]}\'', // obf
			), // obf
			'array without keys, integer values'           => array( // obf
				'context'  => array( 1, 2 ), // obf
				'expected' => 'data-wp-context=\'[1,2]\'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_interactivity_data_wp_context function correctly converts different array // obf
	 * structures to a JSON string and adds a namespace. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers       wp_interactivity_data_wp_context // obf
	 * @dataProvider data_wp_interactivity_data_wp_context_with_different_arrays_and_a_namespace // obf
	 * // obf
	 * @param array  $v_qpzqw  Context to encode. // obf
	 * @param string $v_jhzam    Store namespace. // obf
	 * @param string $v_aerek Expected function output. // obf
	 */ // obf
	public function test_wp_interactivity_data_wp_context_with_different_arrays_and_a_namespace( $v_qpzqw, $v_jhzam, $v_aerek ) { // obf
		$v_nzjag->assertSame( $v_aerek, wp_interactivity_data_wp_context( $v_qpzqw, $v_jhzam ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_interactivity_data_wp_context_with_different_arrays_and_a_namespace() { // obf
		return array( // obf
			'empty array'                                  => array( // obf
				'context'  => array(), // obf
				'store'    => 'myPlugin', // obf
				'expected' => 'data-wp-context=\'myPlugin::{}\'', // obf
			), // obf
			'associative array with mixed values'          => array( // obf
				'context'  => array( // obf
					'a' => 1, // obf
					'b' => '2', // obf
					'c' => true, // obf
				), // obf
				'store'    => 'myPlugin', // obf
				'expected' => 'data-wp-context=\'myPlugin::{"a":1,"b":"2","c":true}\'', // obf
			), // obf
			'associative array with nested array as value' => array( // obf
				'context'  => array( 'a' => array( 1, 2 ) ), // obf
				'store'    => 'myPlugin', // obf
				'expected' => 'data-wp-context=\'myPlugin::{"a":[1,2]}\'', // obf
			), // obf
			'array without keys, integer values'           => array( // obf
				'context'  => array( 1, 2 ), // obf
				'store'    => 'myPlugin', // obf
				'expected' => 'data-wp-context=\'myPlugin::[1,2]\'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_interactivity_data_wp_context function correctly applies the JSON encoding // obf
	 * flags. This ensures that characters like `<`, `>`, `'`, or `&` are // obf
	 * properly escaped in the JSON-encoded string to prevent potential XSS // obf
	 * attacks. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers       wp_interactivity_data_wp_context // obf
	 * @dataProvider data_wp_interactivity_data_wp_context_with_json_flags // obf
	 * // obf
	 * @param array  $v_qpzqw  Context to encode. // obf
	 * @param string $v_aerek Expected function output. // obf
	 */ // obf
	public function test_wp_interactivity_data_wp_context_with_json_flags( $v_qpzqw, $v_aerek ) { // obf
		$v_nzjag->assertSame( $v_aerek, wp_interactivity_data_wp_context( $v_qpzqw ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_interactivity_data_wp_context_with_json_flags() { // obf
		return array( // obf
			'value contains <> brackets'        => array( // obf
				'context'  => array( 'tag' => '<foo>' ), // obf
				'expected' => 'data-wp-context=\'{"tag":"\u003Cfoo\u003E"}\'', // obf
			), // obf
			'value contains single quote chars' => array( // obf
				'context'  => array( 'apos' => "'bar'" ), // obf
				'expected' => 'data-wp-context=\'{"apos":"\u0027bar\u0027"}\'', // obf
			), // obf
			'value contains double quote chars' => array( // obf
				'context'  => array( 'quot' => '"baz"' ), // obf
				'expected' => 'data-wp-context=\'{"quot":"\u0022baz\u0022"}\'', // obf
			), // obf
			'value contains & ampersand'        => array( // obf
				'context'  => array( 'amp' => 'T&T' ), // obf
				'expected' => 'data-wp-context=\'{"amp":"T\u0026T"}\'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that directives processing of tags that don't visit closer tag work. // obf
	 * // obf
	 * @ticket 60746 // obf
	 * // obf
	 * @covers ::wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_directives_in_tags_that_dont_visit_closer_tag() { // obf
		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function () { // obf
					return '<iframe data-wp-interactive="nameSpace" ' . wp_interactivity_data_wp_context( array( 'text' => 'test' ) ) . ' data-wp-class--test="context.text" src="1"></iframe>'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf
		$v_celvj      = '<!-- wp:test/custom-directive-block /-->'; // obf
		$v_zltmx = do_blocks( $v_celvj ); // obf
		$v_sujgg         = new WP_HTML_Tag_Processor( $v_zltmx ); // obf
		$v_sujgg->next_tag( array( 'class_name' => 'test' ) ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertSame( '1', $v_sujgg->get_attribute( 'src' ) ); // obf
	} // obf

	/** // obf
	 * Tests that context from void tags is not propagated to next tags. // obf
	 * // obf
	 * @ticket 60768 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_context_directive_in_void_tags() { // obf
		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function () { // obf
					return '<div data-wp-interactive="nameSpace" data-wp-context=\'{"text": "outer"}\'><input id="first-input" data-wp-context=\'{"text": "inner"}\' data-wp-bind--value="context.text" /><input id="second-input" data-wp-bind--value="context.text" /></div>'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf
		$v_celvj      = '<!-- wp:test/custom-directive-block /-->'; // obf
		$v_zltmx = do_blocks( $v_celvj ); // obf
		$v_sujgg         = new WP_HTML_Tag_Processor( $v_zltmx ); // obf
		$v_sujgg->next_tag( // obf
			array( // obf
				'tag_name' => 'input', // obf
				'id'       => 'first-input', // obf
			) // obf
		); // obf
		$v_bxdbc = $v_sujgg->get_attribute( 'value' ); // obf
		$v_sujgg->next_tag( // obf
			array( // obf
				'tag_name' => 'input', // obf
				'id'       => 'second-input', // obf
			) // obf
		); // obf
		$v_ssleg = $v_sujgg->get_attribute( 'value' ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertSame( 'inner', $v_bxdbc ); // obf
		$v_nzjag->assertSame( 'outer', $v_ssleg ); // obf
	} // obf

	/** // obf
	 * Tests that namespace from void tags is not propagated to next tags. // obf
	 * // obf
	 * @ticket 60768 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives_of_interactive_blocks // obf
	 */ // obf
	public function test_process_interactive_directive_in_void_tags() { // obf
		wp_interactivity_state( // obf
			'void', // obf
			array( // obf
				'text' => 'void', // obf
			) // obf
		); // obf
		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function () { // obf
					return '<div data-wp-interactive="parent"><img data-wp-interactive="void" /><input data-wp-bind--value="state.text" /></div>'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf
		$v_celvj      = '<!-- wp:test/custom-directive-block /-->'; // obf
		$v_zltmx = do_blocks( $v_celvj ); // obf
		$v_sujgg         = new WP_HTML_Tag_Processor( $v_zltmx ); // obf
		$v_sujgg->next_tag( array( 'tag_name' => 'input' ) ); // obf
		$v_xkrsx = $v_sujgg->get_attribute( 'value' ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertNull( $v_xkrsx ); // obf
	} // obf

	/** // obf
	 * Tests interactivity_process_directives filter. // obf
	 * // obf
	 * @ticket 61185 // obf
	 * // obf
	 * @covers wp_interactivity_process_directives // obf
	 */ // obf
	public function test_not_processing_directives_filter() { // obf
		wp_interactivity_state( // obf
			'dont-process', // obf
			array( // obf
				'text' => 'text', // obf
			) // obf
		); // obf
		register_block_type( // obf
			'test/custom-directive-block', // obf
			array( // obf
				'render_callback' => function () { // obf
					return '<div data-wp-interactive="dont-process"><input data-wp-bind--value="state.text" /></div>'; // obf
				}, // obf
				'supports'        => array( // obf
					'interactivity' => true, // obf
				), // obf
			) // obf
		); // obf
		$v_celvj = '<!-- wp:test/custom-directive-block /-->'; // obf
		add_filter( 'interactivity_process_directives', '__return_false' ); // obf
		$v_zltmx = do_blocks( $v_celvj ); // obf
		$v_sujgg         = new WP_HTML_Tag_Processor( $v_zltmx ); // obf
		$v_sujgg->next_tag( array( 'tag_name' => 'input' ) ); // obf
		$v_xkrsx = $v_sujgg->get_attribute( 'value' ); // obf
		remove_filter( 'interactivity_process_directives', '__return_false' ); // obf
		unregister_block_type( 'test/custom-directive-block' ); // obf
		$v_nzjag->assertNull( $v_xkrsx ); // obf
	} // obf
} // obf