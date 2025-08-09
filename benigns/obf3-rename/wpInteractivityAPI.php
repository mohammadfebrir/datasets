

<?php // obf
/** // obf
 * Unit tests covering WP_Interactivity_API functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Interactivity API // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group interactivity-api // obf
 * // obf
 * @coversDefaultClass WP_Interactivity_API // obf
 */ // obf
class Tests_Interactivity_API_WpInteractivityAPI extends WP_UnitTestCase { // obf
	/** // obf
	 * Instance of WP_Interactivity_API. // obf
	 * // obf
	 * @var WP_Interactivity_API // obf
	 */ // obf
	protected $v_dvkuq; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_luvjm->interactivity = new WP_Interactivity_API(); // obf
	} // obf

	public function charset_iso_8859_1() { // obf
		return 'iso-8859-1'; // obf
	} // obf

	/** // obf
	 * Modifies the internal namespace stack as if the WP_Interactivity_API // obf
	 * instance had found `data-wp-interactive` directives during // obf
	 * `process_directives` execution. // obf
	 * // obf
	 * @param array<string> $v_cbxso Values for the internal namespace stack. // obf
	 */ // obf
	private function set_internal_namespace_stack( ...$v_cbxso ) { // obf
		$v_dvkuq   = new ReflectionClass( $v_luvjm->interactivity ); // obf
		$v_ssfeq = $v_dvkuq->getProperty( 'namespace_stack' ); // obf
		$v_ssfeq->setAccessible( true ); // obf
		$v_ssfeq->setValue( $v_luvjm->interactivity, $v_cbxso ); // obf
	} // obf

	/** // obf
	 * Modifies the internal context stack as if the WP_Interactivity_API // obf
	 * instance had found `data-wp-context` directives during // obf
	 * `process_directives` execution. // obf
	 * // obf
	 * @param array<array<mixed>> $v_cbxso Values for the internal context stack. // obf
	 */ // obf
	private function set_internal_context_stack( ...$v_cbxso ) { // obf
		$v_dvkuq = new ReflectionClass( $v_luvjm->interactivity ); // obf
		$v_rnmwx = $v_dvkuq->getProperty( 'context_stack' ); // obf
		$v_rnmwx->setAccessible( true ); // obf
		$v_rnmwx->setValue( $v_luvjm->interactivity, $v_cbxso ); // obf
	} // obf

	/** // obf
	 * Tests that the state and config methods return an empty array at the // obf
	 * beginning. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::state // obf
	 * @covers ::config // obf
	 */ // obf
	public function test_state_and_config_should_be_empty() { // obf
		$v_luvjm->assertSame( array(), $v_luvjm->interactivity->state( 'myPlugin' ) ); // obf
		$v_luvjm->assertSame( array(), $v_luvjm->interactivity->config( 'myPlugin' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the state and config methods can change the state and // obf
	 * configuration. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::state // obf
	 * @covers ::config // obf
	 */ // obf
	public function test_state_and_config_can_be_changed() { // obf
		$v_jxapy  = array( // obf
			'a'      => 1, // obf
			'b'      => 2, // obf
			'nested' => array( 'c' => 3 ), // obf
		); // obf
		$v_ywcvi = $v_luvjm->interactivity->state( 'myPlugin', $v_jxapy ); // obf
		$v_luvjm->assertSame( $v_jxapy, $v_ywcvi ); // obf
		$v_ywcvi = $v_luvjm->interactivity->config( 'myPlugin', $v_jxapy ); // obf
		$v_luvjm->assertSame( $v_jxapy, $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests that different initial states and configurations can be merged. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::state // obf
	 * @covers ::config // obf
	 */ // obf
	public function test_state_and_config_can_be_merged() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'b' => 2 ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'c' => 3 ) ); // obf
		$v_luvjm->assertSame( // obf
			array( // obf
				'a' => 1, // obf
				'b' => 2, // obf
			), // obf
			$v_luvjm->interactivity->state( 'myPlugin' ) // obf
		); // obf
		$v_luvjm->assertSame( // obf
			array( 'c' => 3 ), // obf
			$v_luvjm->interactivity->state( 'otherPlugin' ) // obf
		); // obf

		$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->config( 'myPlugin', array( 'b' => 2 ) ); // obf
		$v_luvjm->interactivity->config( 'otherPlugin', array( 'c' => 3 ) ); // obf
		$v_luvjm->assertSame( // obf
			array( // obf
				'a' => 1, // obf
				'b' => 2, // obf
			), // obf
			$v_luvjm->interactivity->config( 'myPlugin' ) // obf
		); // obf
		$v_luvjm->assertSame( // obf
			array( 'c' => 3 ), // obf
			$v_luvjm->interactivity->config( 'otherPlugin' ) // obf
		);  } // obf

	/** // obf
	 * Tests that existing keys in the initial state and configuration can be // obf
	 * overwritten. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::state // obf
	 * @covers ::config // obf
	 */ // obf
	public function test_state_and_config_existing_props_can_be_overwritten() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 2 ) ); // obf
		$v_luvjm->assertSame( // obf
			array( 'a' => 2 ), // obf
			$v_luvjm->interactivity->state( 'myPlugin' ) // obf
		); // obf

		$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => 2 ) ); // obf
		$v_luvjm->assertSame( // obf
			array( 'a' => 2 ), // obf
			$v_luvjm->interactivity->config( 'myPlugin' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that existing indexed arrays in the initial state and configuration // obf
	 * are replaced, not merged. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::state // obf
	 * @covers ::config // obf
	 */ // obf
	public function test_state_and_config_existing_indexed_arrays_are_replaced() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => array( 1, 2 ) ) ); // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => array( 3, 4 ) ) ); // obf
		$v_luvjm->assertSame( // obf
			array( 'a' => array( 3, 4 ) ), // obf
			$v_luvjm->interactivity->state( 'myPlugin' ) // obf
		); // obf

		$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => array( 1, 2 ) ) ); // obf
		$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => array( 3, 4 ) ) ); // obf
		$v_luvjm->assertSame( // obf
			array( 'a' => array( 3, 4 ) ), // obf
			$v_luvjm->interactivity->config( 'myPlugin' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the wp-interactivity-data script is not printed if both state // obf
	 * and config are empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_state_and_config_dont_print_when_empty() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result(); // obf

		$v_luvjm->assertSame( array(), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Test that the print_client_interactivity_data is deprecated and produces no output. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * @ticket 61512 // obf
	 * // obf
	 * @covers ::print_client_interactivity_data // obf
	 * // obf
	 * @expectedDeprecated WP_Interactivity_API::print_client_interactivity_data // obf
	 */ // obf
	public function test_config_not_printed_when_empty() { // obf
		$v_luvjm->interactivity->print_client_interactivity_data(); // obf
		$v_luvjm->expectOutputString( '' ); // obf
	} // obf

	/** // obf
	 * Test that the deprecated register_script_modules method is deprecated but does not throw. // obf
	 * // obf
	 * @ticket 60647 // obf
	 * // obf
	 * @expectedDeprecated WP_Interactivity_API::register_script_modules // obf
	 */ // obf
	public function test_register_script_modules_deprecated() { // obf
		$v_luvjm->interactivity->register_script_modules(); // obf
	} // obf

	/** // obf
	 * Sets up an activity, runs an optional callback, and returns a MockAction for inspection. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param  ?Closure $v_cuftp Optional. Callback to run to set up interactivity state and config. // obf
	 * @return MockAction // obf
	 */ // obf
	private function get_script_data_filter_result( ?Closure $v_cuftp = null ): MockAction { // obf
		$v_luvjm->interactivity->add_hooks(); // obf
		wp_enqueue_script_module( '@wordpress/interactivity' ); // obf
		$v_thtoa = new MockAction(); // obf
		add_filter( 'script_module_data_@wordpress/interactivity', array( $v_thtoa, 'filter' ) ); // obf

		if ( $v_cuftp ) { // obf
			$v_cuftp(); // obf
		} // obf

		ob_start(); // obf
		wp_script_modules()->print_script_module_data(); // obf
		ob_end_clean(); // obf

		return $v_thtoa; // obf
	} // obf

	/** // obf
	 * Tests that the state is not included in client data if it's empty. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_state_not_printed_when_empty() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->config( 'myPlugin', array( 'a' => 1 ) ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array( 'config' => array( 'myPlugin' => array( 'a' => 1 ) ) ), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that empty state objects are pruned from printed data. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_state_not_printed_when_empty_array() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->state( 'pluginWithEmptyState_prune', array() ); // obf
				$v_luvjm->interactivity->state( 'pluginWithState_include', array( 'value' => 'excellent' ) ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array( 'state' => array( 'pluginWithState_include' => array( 'value' => 'excellent' ) ) ), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that data consisting of only empty state objects is not printed. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_state_not_printed_when_only_empty_arrays() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->state( 'pluginWithEmptyState_prune', array() ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array(), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that nested empty state objects are printed correctly. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_state_printed_correctly_with_nested_empty_array() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->state( 'myPlugin', array( 'emptyArray' => array() ) ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array( 'state' => array( 'myPlugin' => array( 'emptyArray' => array() ) ) ), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that empty config objects are pruned from printed data. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_config_not_printed_when_empty_array() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->config( 'pluginWithEmptyConfig_prune', array() ); // obf
				$v_luvjm->interactivity->config( 'pluginWithConfig_include', array( 'value' => 'excellent' ) ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array( 'config' => array( 'pluginWithConfig_include' => array( 'value' => 'excellent' ) ) ), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that data consisting of only empty config objects is not printed. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_config_not_printed_when_only_empty_arrays() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->config( 'pluginWithEmptyConfig_prune', array() ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array(), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Tests that nested empty config objects are printed correctly. // obf
	 * // obf
	 * @ticket 60761 // obf
	 * @ticket 61512 // obf
	 */ // obf
	public function test_config_printed_correctly_with_nested_empty_array() { // obf
		$v_thtoa = $v_luvjm->get_script_data_filter_result( // obf
			function () { // obf
				$v_luvjm->interactivity->config( 'myPlugin', array( 'emptyArray' => array() ) ); // obf
			} // obf
		); // obf

		$v_luvjm->assertSame( array( 'config' => array( 'myPlugin' => array( 'emptyArray' => array() ) ) ), $v_thtoa->get_args()[0][0] ); // obf
	} // obf

	/** // obf
	 * Test that calling state without a namespace arg returns the state data // obf
	 * for the current namespace in the internal namespace stack. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::state // obf
	 */ // obf
	public function test_state_without_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'b' => 2 ) ); // obf

		$v_luvjm->assertSame( // obf
			array( 'a' => 1 ), // obf
			$v_luvjm->interactivity->state() // obf
		); // obf
	} // obf

	/** // obf
	 * Test that passing state data without a valid namespace does nothing and // obf
	 * just returns an empty array. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::state // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::state // obf
	 */ // obf
	public function test_state_with_data_and_invalid_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'b' => 2 ) ); // obf

		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->state( null, array( 'newProp' => 'value' ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that calling state with an empty string as namespace is not allowed. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::state // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::state // obf
	 */ // obf
	public function test_state_with_empty_string_as_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_luvjm->interactivity->state( 'myPlugin', array( 'a' => 1 ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'b' => 2 ) ); // obf

		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->state( '' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that calling state without namespace outside of // obf
	 * `process_directives` execution is not allowed. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::state // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::state // obf
	 */ // obf
	public function test_state_without_namespace_outside_directive_processing() { // obf
		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->state() // obf
		); // obf
	} // obf

	/** // obf
	 * Test that `get_context` returns the latest context value for the given // obf
	 * namespace. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 */ // obf
	public function test_get_context_with_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin' => array( 'a' => 0 ), // obf
			), // obf
			array( // obf
				'myPlugin'    => array( 'a' => 1 ), // obf
				'otherPlugin' => array( 'b' => 2 ), // obf
			) // obf
		); // obf

		$v_luvjm->assertSame( // obf
			array( 'a' => 1 ), // obf
			$v_luvjm->interactivity->get_context( 'myPlugin' ) // obf
		); // obf
		$v_luvjm->assertSame( // obf
			array( 'b' => 2 ), // obf
			$v_luvjm->interactivity->get_context( 'otherPlugin' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that `get_context` uses the current namespace in the internal // obf
	 * namespace stack when the parameter is omitted. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 */ // obf
	public function test_get_context_without_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin' => array( 'a' => 0 ), // obf
			), // obf
			array( // obf
				'myPlugin'    => array( 'a' => 1 ), // obf
				'otherPlugin' => array( 'b' => 2 ), // obf
			) // obf
		); // obf

		$v_luvjm->assertSame( // obf
			array( 'a' => 1 ), // obf
			$v_luvjm->interactivity->get_context() // obf
		); // obf
	} // obf

	/** // obf
	 * Test that `get_context` returns an empty array when the context stack is // obf
	 * empty. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 */ // obf
	public function test_get_context_with_empty_context_stack() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf
		$v_luvjm->set_internal_context_stack(); // obf

		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->get_context( 'myPlugin' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that `get_context` returns an empty array if the given namespace is // obf
	 * not defined. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 */ // obf
	public function test_get_context_with_undefined_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin' => array( 'a' => 0 ), // obf
			), // obf
			array( // obf
				'myPlugin' => array( 'a' => 1 ), // obf
			) // obf
		); // obf

		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->get_context( 'otherPlugin' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test that `get_context` should not be called with an empty string. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::get_context // obf
	 */ // obf
	public function test_get_context_with_empty_namespace() { // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin' => array( 'a' => 0 ), // obf
			), // obf
			array( // obf
				'myPlugin' => array( 'a' => 1 ), // obf
			) // obf
		); // obf

		$v_luvjm->assertSame( // obf
			array(), // obf
			$v_luvjm->interactivity->get_context( '' ) // obf
		); // obf
	} // obf


	/** // obf
	 * Tests that `get_context` should not be called outside of // obf
	 * `process_directives` execution. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::get_context // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::get_context // obf
	 */ // obf
	public function test_get_context_outside_of_directive_processing() { // obf
		$v_biyvb = $v_luvjm->interactivity->get_context(); // obf
		$v_luvjm->assertSame( array(), $v_biyvb ); // obf
	} // obf

	/** // obf
	 * Tests extracting directive values from different string formats. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::extract_directive_value // obf
	 */ // obf
	public function test_extract_directive_value() { // obf
		$v_otipm = new ReflectionMethod( $v_luvjm->interactivity, 'extract_directive_value' ); // obf
		$v_otipm->setAccessible( true ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'state.foo', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', 'state.foo' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::state.foo', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', 'state.foo' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '{ "isOpen": false }', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', array( 'isOpen' => false ) ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::{ "isOpen": false }', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', array( 'isOpen' => false ) ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'true', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', true ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'false', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', false ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'null', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '100', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', 100 ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '1.2', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', 1.2 ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '1.2.3', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', '1.2.3' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::true', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', true ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::false', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', false ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::null', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', null ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::100', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', 100 ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::1.2', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', 1.2 ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::1.2.3', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', '1.2.3' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'otherPlugin::[{"o":4}, null, 3e6]', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'otherPlugin', array( array( 'o' => 4 ), null, 3000000.0 ) ), $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests extracting directive values with empty or invalid input. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::extract_directive_value // obf
	 */ // obf
	public function test_extract_directive_value_empty_values() { // obf
		$v_otipm = new ReflectionMethod( $v_luvjm->interactivity, 'extract_directive_value' ); // obf
		$v_otipm->setAccessible( true ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf

		// This is a boolean attribute. // obf
		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, true, 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, false, 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf

		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, null, 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf

		// A string ending in `::` without any extra characters is not considered a // obf
		// namespace. // obf
		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'myPlugin::', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', 'myPlugin::' ), $v_ywcvi ); // obf

		// A namespace with invalid characters is not considered a valid namespace. // obf
		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '$v_tzvkc::state.foo', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', '$v_tzvkc::state.foo' ), $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests extracting directive values from invalid JSON strings. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::extract_directive_value // obf
	 */ // obf
	public function test_extract_directive_value_invalid_json() { // obf
		$v_otipm = new ReflectionMethod( $v_luvjm->interactivity, 'extract_directive_value' ); // obf
		$v_otipm->setAccessible( true ); // obf

		// Invalid JSON due to missing quotes. Returns the original value. // obf
		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, '{ isOpen: false }', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', '{ isOpen: false }' ), $v_ywcvi ); // obf

		// Null string. Returns null. // obf
		$v_ywcvi = $v_otipm->invoke( $v_luvjm->interactivity, 'null', 'myPlugin' ); // obf
		$v_luvjm->assertSame( array( 'myPlugin', null ), $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the ability to extract prefix and suffix from a directive attribute // obf
	 * name. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::extract_prefix_and_suffix // obf
	 */ // obf
	public function test_extract_prefix_and_suffix() { // obf
		$v_osykz = new ReflectionMethod( $v_luvjm->interactivity, 'extract_prefix_and_suffix' ); // obf
		$v_osykz->setAccessible( true ); // obf

		$v_ywcvi = $v_osykz->invoke( $v_luvjm->interactivity, 'data-wp-interactive' ); // obf
		$v_luvjm->assertSame( array( 'data-wp-interactive' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_osykz->invoke( $v_luvjm->interactivity, 'data-wp-bind--src' ); // obf
		$v_luvjm->assertSame( array( 'data-wp-bind', 'src' ), $v_ywcvi ); // obf

		$v_ywcvi = $v_osykz->invoke( $v_luvjm->interactivity, 'data-wp-foo--and--bar' ); // obf
		$v_luvjm->assertSame( array( 'data-wp-foo', 'and--bar' ), $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` method doesn't change the HTML if it // obf
	 * doesn't contain directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_process_directives_do_nothing_without_directives() { // obf
		$v_zomrk           = '<div>Inner content here</div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_luvjm->assertSame( $v_zomrk, $v_kghci ); // obf

		$v_zomrk           = '<div><span>Content</span><strong>More Content</strong></div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_luvjm->assertSame( $v_zomrk, $v_kghci ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` method changes the HTML if it contains // obf
	 * directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_process_directives_changes_html_with_balanced_tags() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'id' => 'some-id' ) ); // obf
		$v_zomrk           = '<div data-wp-bind--id="myPlugin::state.id">Inner content</div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag(); // obf
		$v_luvjm->assertSame( 'some-id', $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests how `process_directives` handles HTML with unknown directives. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_process_directives_doesnt_fail_with_unknown_directives() { // obf
		$v_zomrk           = '<div data-wp-unknown="">Text</div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_luvjm->assertSame( $v_zomrk, $v_kghci ); // obf
	} // obf

	/** // obf
	 * Tests that directives are processed in the correct order. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_process_directives_process_the_directives_in_the_correct_order() { // obf
		$v_zomrk           = ' // obf
			<div // obf
				data-wp-interactive=\'{ "namespace": "test" }\' // obf
				data-wp-context=\'{ "isClass": true, "id": "some-id", "text": "Updated", "display": "none" }\' // obf
				data-wp-bind--id="context.id" // obf
				data-wp-class--some-class="context.isClass" // obf
				data-wp-style--display="context.display" // obf
				data-wp-text="context.text" // obf
			>Text</div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag(); // obf
		$v_luvjm->assertSame( 'some-id', $v_evsgy->get_attribute( 'id' ) ); // obf
		$v_luvjm->assertSame( 'some-class', $v_evsgy->get_attribute( 'class' ) ); // obf
		$v_luvjm->assertSame( 'display:none;', $v_evsgy->get_attribute( 'style' ) ); // obf
		$v_luvjm->assertStringContainsString( 'Updated', $v_evsgy->get_updated_html() ); // obf
		$v_luvjm->assertStringNotContainsString( 'Text', $v_evsgy->get_updated_html() ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` returns the same HTML if it contains // obf
	 * unbalanced tags. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * // obf
	 * @dataProvider data_html_with_unbalanced_tags // obf
	 * // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 * // obf
	 * @param string $v_zomrk HTML containing unbalanced tags and also a directive. // obf
	 */ // obf
	public function test_process_directives_doesnt_change_html_if_contains_unbalanced_tags( $v_zomrk ) { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'id' => 'some-id' ) ); // obf

		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag(); // obf
		$v_luvjm->assertNull( $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_with_unbalanced_tags() { // obf
		return array( // obf
			'DIV closer after'   => array( '<div data-wp-bind--id="myPlugin::state.id">Inner content</div></div>' ), // obf
			'DIV opener after'   => array( '<div data-wp-bind--id="myPlugin::state.id">Inner content</div><div>' ), // obf
			'DIV opener before'  => array( '<div><div data-wp-bind--id="myPlugin::state.id">Inner content</div>' ), // obf
			'DIV closer before'  => array( '</div><div data-wp-bind--id="myPlugin::state.id">Inner content</div>' ), // obf
			'DIV opener inside'  => array( '<div data-wp-bind--id="myPlugin::state.id">Inner<div>content</div>' ), // obf
			'DIV closer inside'  => array( '<div data-wp-bind--id="myPlugin::state.id">Inner</div>content</div>' ), // obf
			'SPAN opener inside' => array( '<div data-wp-bind--id="myPlugin::state.id"><span>Inner content</div>' ), // obf
			'SPAN closer after'  => array( '<div data-wp-bind--id="myPlugin::state.id">Inner content</div></span>' ), // obf
			'SPAN overlapping'   => array( '<div data-wp-bind--id="myPlugin::state.id"><span>Inner content</div></span>' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` process the HTML outside a SVG tag. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_process_directives_changes_html_if_contains_svgs() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'id'    => 'some-id', // obf
				'width' => '100', // obf
			) // obf
		); // obf
		$v_zomrk           = ' // obf
			<header> // obf
				<svg height="100"> // obf
					<title>Red Circle</title> // obf
					<circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" /> // obf
				</svg> // obf
				<div data-wp-bind--id="myPlugin::state.id"></div> // obf
			</header> // obf
		'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'div' ); // obf
		$v_luvjm->assertSame( 'some-id', $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` does not process the HTML // obf
	 * inside SVG tags. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API_Directives_Processor::skip_to_tag_closer // obf
	 */ // obf
	public function test_process_directives_does_not_change_inner_html_in_svgs() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'id' => 'some-id', // obf
			) // obf
		); // obf
		$v_zomrk           = ' // obf
			<header> // obf
				<svg height="100"> // obf
					<circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" /> // obf
					<g data-wp-bind--id="myPlugin::state.id" /> // obf
				</svg> // obf
			</header> // obf
		'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'div' ); // obf
		$v_luvjm->assertNull( $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` process the HTML outside the // obf
	 * MathML tag. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 */ // obf
	public function test_process_directives_change_html_if_contains_math() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'id'   => 'some-id', // obf
				'math' => 'ml-id', // obf
			) // obf
		); // obf
		$v_zomrk           = ' // obf
			<header> // obf
				<math data-wp-bind--id="myPlugin::state.math"> // obf
					<mi>x</mi> // obf
					<mo>=</mo> // obf
					<mi>1</mi> // obf
				</math> // obf
				<div data-wp-bind--id="myPlugin::state.id"></div> // obf
			</header> // obf
		'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'math' ); // obf
		$v_luvjm->assertNull( $v_evsgy->get_attribute( 'id' ) ); // obf
		$v_evsgy->next_tag( 'div' ); // obf
		$v_luvjm->assertSame( 'some-id', $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `process_directives` does not process the HTML // obf
	 * inside MathML tags. // obf
	 * // obf
	 * @ticket 60517 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::_process_directives // obf
	 * @expectedIncorrectUsage WP_Interactivity_API_Directives_Processor::skip_to_tag_closer // obf
	 */ // obf
	public function test_process_directives_does_not_change_inner_html_in_math() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'id' => 'some-id', // obf
			) // obf
		); // obf
		$v_zomrk           = ' // obf
			<header> // obf
				<math data-wp-bind--id="myPlugin::state.math"> // obf
					<mrow data-wp-bind--id="myPlugin::state.id" /> // obf
					<mi>x</mi> // obf
					<mo>=</mo> // obf
					<mi>1</mi> // obf
				</math> // obf
			</header> // obf
		'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'div' ); // obf
		$v_luvjm->assertNull( $v_evsgy->get_attribute( 'id' ) ); // obf
	} // obf

	/** // obf
	 * Invokes the private `evaluate` method of WP_Interactivity_API class. // obf
	 * // obf
	 * @param string $v_hzyro   The directive attribute value to evaluate. // obf
	 * @return mixed The result of the evaluate method. // obf
	 */ // obf
	private function evaluate( $v_hzyro ) { // obf
		/* // obf
		 * The global WP_Interactivity_API instance is momentarily replaced to // obf
		 * make global functions like `wp_interactivity_state` and // obf
		 * `wp_interactivity_get_config` work as expected. // obf
		 */ // obf
		global $v_mkbda; // obf
		$v_efagj = $v_mkbda; // obf
		$v_mkbda      = $v_luvjm->interactivity; // obf

		$v_gycds = new ReflectionMethod( $v_luvjm->interactivity, 'evaluate' ); // obf
		$v_gycds->setAccessible( true ); // obf

		$v_ywcvi = $v_gycds->invokeArgs( $v_luvjm->interactivity, array( $v_hzyro ) ); // obf

		// Restore the original WP_Interactivity_API instance. // obf
		$v_mkbda = $v_efagj; // obf

		return $v_ywcvi; // obf
	} // obf

	/** // obf
	 * Tests that the `evaluate` method operates correctly for valid expressions. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_value() { // obf
		$v_vzkqv       = new stdClass(); // obf
		$v_vzkqv->prop = 'object property'; // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'key'       => 'myPlugin-state', // obf
				'obj'       => $v_vzkqv, // obf
				'arrAccess' => new class() implements ArrayAccess { // obf
					public function offsetExists( $v_ryioi ): bool { // obf
						return true; // obf
					} // obf

					#[\ReturnTypeWillChange] // obf
					public function offsetGet( $v_ryioi ) { // obf
						return $v_ryioi; // obf
					} // obf

					public function offsetSet( $v_ryioi, $v_rbtdc ): void {} // obf

					public function offsetUnset( $v_ryioi ): void {} // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'key' => 'otherPlugin-state' ) ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( 'key' => 'myPlugin-context' ), // obf
				'otherPlugin' => array( 'key' => 'otherPlugin-context' ), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.key' ); // obf
		$v_luvjm->assertSame( 'myPlugin-state', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'context.key' ); // obf
		$v_luvjm->assertSame( 'myPlugin-context', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::state.key' ); // obf
		$v_luvjm->assertSame( 'otherPlugin-state', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::context.key' ); // obf
		$v_luvjm->assertSame( 'otherPlugin-context', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.obj.prop' ); // obf
		$v_luvjm->assertSame( 'object property', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.arrAccess.1' ); // obf
		$v_luvjm->assertSame( '1', $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests that the `evaluate` method operates correctly when used with the // obf
	 * negation operator (!). // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_value_negation() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'key' => 'myPlugin-state' ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'key' => 'otherPlugin-state' ) ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( 'key' => 'myPlugin-context' ), // obf
				'otherPlugin' => array( 'key' => 'otherPlugin-context' ), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( '!state.key' ); // obf
		$v_luvjm->assertFalse( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( '!context.key' ); // obf
		$v_luvjm->assertFalse( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::!state.key' ); // obf
		$v_luvjm->assertFalse( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::!context.key' ); // obf
		$v_luvjm->assertFalse( $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests that the `evaluate` method operates correctly when used with the // obf
	 * negation operator (!) with non-existent paths. // obf
	 * // obf
	 * @ticket 62374 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_value_negation_non_existent_path() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array() ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array() ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array(), // obf
				'otherPlugin' => array(), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( '!state.missing' ); // obf
		$v_luvjm->assertTrue( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( '!context.missing' ); // obf
		$v_luvjm->assertTrue( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::!state.deeply.nested.missing' ); // obf
		$v_luvjm->assertTrue( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::!context.deeply.nested.missing' ); // obf
		$v_luvjm->assertTrue( $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method with non-existent paths. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_non_existent_path() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'key' => 'myPlugin-state' ) ); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'key' => 'otherPlugin-state' ) ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( 'key' => 'myPlugin-context' ), // obf
				'otherPlugin' => array( 'key' => 'otherPlugin-context' ), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.nonExistentKey' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'context.nonExistentKey' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::state.nonExistentKey' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::context.nonExistentKey' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( ' state.key' ); // Extra space. // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin:: state.key' ); // Extra space. // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for retrieving nested values. // obf
	 * // obf
	 * @ticket 60356 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_nested_value() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'nested' => array( 'key' => 'myPlugin-state-nested' ), // obf
			) // obf
		); // obf
		$v_luvjm->interactivity->state( // obf
			'otherPlugin', // obf
			array( // obf
				'nested' => array( 'key' => 'otherPlugin-state-nested' ), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( // obf
					'nested' => array( 'key' => 'myPlugin-context-nested' ), // obf
				), // obf
				'otherPlugin' => array( // obf
					'nested' => array( 'key' => 'otherPlugin-context-nested' ), // obf
				), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.nested.key' ); // obf
		$v_luvjm->assertSame( 'myPlugin-state-nested', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'context.nested.key' ); // obf
		$v_luvjm->assertSame( 'myPlugin-context-nested', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::state.nested.key' ); // obf
		$v_luvjm->assertSame( 'otherPlugin-state-nested', $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::context.nested.key' ); // obf
		$v_luvjm->assertSame( 'otherPlugin-context-nested', $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for non valid namespace values. // obf
	 * // obf
	 * @ticket 61044 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_evaluate_unvalid_namespaces() { // obf
		$v_luvjm->set_internal_context_stack( array() ); // obf
		$v_luvjm->set_internal_namespace_stack(); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'path', 'null' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'path', '' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'path', '{}' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for derived state functions. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 * @covers wp_interactivity_state // obf
	 * @covers wp_interactivity_get_context // obf
	 */ // obf
	public function test_evaluate_derived_state() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'key'     => 'myPlugin-state', // obf
				'derived' => function () { // obf
					$v_jxapy   = wp_interactivity_state(); // obf
					$v_biyvb = wp_interactivity_get_context(); // obf
					return 'Derived state: ' . // obf
						$v_jxapy['key'] . // obf
						"\n" . // obf
						'Derived context: ' . // obf
						$v_biyvb['key']; // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin' => array( // obf
					'key' => 'myPlugin-context', // obf
				), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.derived' ); // obf
		$v_luvjm->assertSame( "Derived state: myPlugin-state\nDerived context: myPlugin-context", $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for derived state functions accessing a // obf
	 * different namespace. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 * @covers wp_interactivity_state // obf
	 * @covers wp_interactivity_get_context // obf
	 */ // obf
	public function test_evaluate_derived_state_accessing_different_namespace() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'key'     => 'myPlugin-state', // obf
				'derived' => function () { // obf
					$v_jxapy   = wp_interactivity_state( 'otherPlugin' ); // obf
					$v_biyvb = wp_interactivity_get_context( 'otherPlugin' ); // obf
					return 'Derived state: ' . // obf
						$v_jxapy['key'] . // obf
						"\n" . // obf
						'Derived context: ' . // obf
						$v_biyvb['key']; // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->interactivity->state( 'otherPlugin', array( 'key' => 'otherPlugin-state' ) ); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( // obf
					'key' => 'myPlugin-context', // obf
				), // obf
				'otherPlugin' => array( // obf
					'key' => 'otherPlugin-context', // obf
				), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.derived' ); // obf
		$v_luvjm->assertSame( "Derived state: otherPlugin-state\nDerived context: otherPlugin-context", $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for derived state functions defined in a // obf
	 * different namespace. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 * @covers wp_interactivity_state // obf
	 * @covers wp_interactivity_get_context // obf
	 */ // obf
	public function test_evaluate_derived_state_defined_in_different_namespace() { // obf
		$v_luvjm->interactivity->state( 'myPlugin', array( 'key' => 'myPlugin-state' ) ); // obf
		$v_luvjm->interactivity->state( // obf
			'otherPlugin', // obf
			array( // obf
				'key'     => 'otherPlugin-state', // obf
				'derived' => function () { // obf
					$v_jxapy   = wp_interactivity_state(); // obf
					$v_biyvb = wp_interactivity_get_context(); // obf
					return 'Derived state: ' . // obf
						$v_jxapy['key'] . // obf
						"\n" . // obf
						'Derived context: ' . // obf
						$v_biyvb['key']; // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_context_stack( // obf
			array( // obf
				'myPlugin'    => array( // obf
					'key' => 'myPlugin-context', // obf
				), // obf
				'otherPlugin' => array( // obf
					'key' => 'otherPlugin-context', // obf
				), // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'otherPlugin::state.derived' ); // obf
		$v_luvjm->assertSame( "Derived state: otherPlugin-state\nDerived context: otherPlugin-context", $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for derived state functions that throw. // obf
	 * // obf
	 * @ticket 61037 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::evaluate // obf
	 */ // obf
	public function test_evaluate_derived_state_that_throws() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'derivedThatThrows' => function () { // obf
					throw new Error( 'Something bad happened.' ); // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_context_stack(); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.derivedThatThrows' ); // obf
		$v_luvjm->assertNull( $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `evaluate` method for derived state intermediate values. // obf
	 * // obf
	 * @ticket 61741 // obf
	 * // obf
	 * @covers ::evaluate // obf
	 */ // obf
	public function test_evaluate_derived_state_intermediate() { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'derivedState' => function () { // obf
					return array( 'property' => 'value' ); // obf
				}, // obf
			) // obf
		); // obf
		$v_luvjm->set_internal_context_stack(); // obf
		$v_luvjm->set_internal_namespace_stack( 'myPlugin' ); // obf

		$v_ywcvi = $v_luvjm->evaluate( 'state.derivedState.property' ); // obf
		$v_luvjm->assertSame( 'value', $v_ywcvi ); // obf
	} // obf

	/** // obf
	 * Tests the `kebab_to_camel_case` method. // obf
	 * // obf
	 * @covers ::kebab_to_camel_case // obf
	 */ // obf
	public function test_kebab_to_camel_case() { // obf
		$v_zpdxo = new ReflectionMethod( $v_luvjm->interactivity, 'kebab_to_camel_case' ); // obf
		$v_zpdxo->setAccessible( true ); // obf

		$v_luvjm->assertSame( '', $v_zpdxo->invoke( $v_luvjm->interactivity, '' ) ); // obf
		$v_luvjm->assertSame( 'item', $v_zpdxo->invoke( $v_luvjm->interactivity, 'item' ) ); // obf
		$v_luvjm->assertSame( 'myItem', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my-item' ) ); // obf
		$v_luvjm->assertSame( 'my_item', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my_item' ) ); // obf
		$v_luvjm->assertSame( 'myItem', $v_zpdxo->invoke( $v_luvjm->interactivity, 'My-iTem' ) ); // obf
		$v_luvjm->assertSame( 'myItemWithMultipleHyphens', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my-item-with-multiple-hyphens' ) ); // obf
		$v_luvjm->assertSame( 'myItemWith-DoubleHyphens', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my-item-with--double-hyphens' ) ); // obf
		$v_luvjm->assertSame( 'myItemWith_underScore', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my-item-with_under-score' ) ); // obf
		$v_luvjm->assertSame( 'myItem', $v_zpdxo->invoke( $v_luvjm->interactivity, '-my-item' ) ); // obf
		$v_luvjm->assertSame( 'myItem', $v_zpdxo->invoke( $v_luvjm->interactivity, 'my-item-' ) ); // obf
		$v_luvjm->assertSame( 'myItem', $v_zpdxo->invoke( $v_luvjm->interactivity, '-my-item-' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_interactivity_get_element` returns an array with the // obf
	 * current element's attributes. // obf
	 * // obf
	 * @ticket 62136 // obf
	 * // obf
	 * @covers wp_interactivity_get_element // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_get_element_returns_current_element_representation() { // obf
		/* // obf
		 * The global WP_Interactivity_API instance is momentarily replaced to // obf
		 * make the global function `wp_interactivity_get_element` work as expected. // obf
		 */ // obf
		global $v_mkbda; // obf
		$v_efagj = $v_mkbda; // obf
		$v_mkbda      = $v_luvjm->interactivity; // obf

		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'dataTest' => function () { // obf
					$v_cgrov = wp_interactivity_get_element(); // obf
					return $v_cgrov['attributes']['data-test']; // obf
				}, // obf
			) // obf
		); // obf

		$v_zomrk = <<<HTML // obf
			<section data-wp-interactive="myPlugin"> // obf
				<div class="buttons"> // obf
					<button // obf
						class="button" // obf
						data-test="button 1" // obf
						data-wp-bind--data-test-value="state.dataTest" // obf
					></button> // obf
					<button // obf
						class="button" // obf
						data-test="button 2" // obf
						data-wp-bind--data-test-value="state.dataTest" // obf
					></button> // obf
				</div> // obf
			</section> // obf
HTML; // obf

		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_evsgy              = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'button' ); // obf
		$v_luvjm->assertSame( 'button 1', $v_evsgy->get_attribute( 'data-test-value' ) ); // obf
		$v_evsgy->next_tag( 'button' ); // obf
		$v_luvjm->assertSame( 'button 2', $v_evsgy->get_attribute( 'data-test-value' ) ); // obf

		// Restore the original WP_Interactivity_API instance. // obf
		$v_mkbda = $v_efagj; // obf
	} // obf

	/** // obf
	 * Tests that the attributes returned by `wp_interactivity_get_element` are // obf
	 * those originally present before directives are processed. // obf
	 * // obf
	 * @ticket 62136 // obf
	 * // obf
	 * @covers wp_interactivity_get_element // obf
	 * @covers ::process_directives // obf
	 */ // obf
	public function test_get_element_returns_original_attributes_only() { // obf
		/* // obf
		 * The global WP_Interactivity_API instance is momentarily replaced to // obf
		 * make the global function `wp_interactivity_get_element` work as expected. // obf
		 */ // obf
		global $v_mkbda; // obf
		$v_efagj = $v_mkbda; // obf
		$v_mkbda      = $v_luvjm->interactivity; // obf

		$v_wtwij = null; // obf

		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( // obf
				'processAttributes' => function () use ( &$v_wtwij ) { // obf
					$v_cgrov = wp_interactivity_get_element(); // obf
					$v_wtwij = $v_cgrov['attributes']; // obf
					return 'processed'; // obf
				}, // obf
			) // obf
		); // obf

		$v_zomrk = <<<HTML // obf
			<section data-wp-interactive="myPlugin"> // obf
				<div class="buttons"> // obf
					<button // obf
						disabled // obf
						class="original" // obf
						data-attr="original" // obf
						data-wp-bind--data-attr="state.processAttributes" // obf
					></button> // obf
				</div> // obf
			</section> // obf
HTML; // obf

		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf

		$v_luvjm->assertSame( // obf
			array( // obf
				'disabled'                => true, // obf
				'class'                   => 'original', // obf
				'data-attr'               => 'original', // obf
				'data-wp-bind--data-attr' => 'state.processAttributes', // obf
			), // obf
			$v_wtwij // obf
		); // obf

		$v_evsgy = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_evsgy->next_tag( 'button' ); // obf
		$v_luvjm->assertSame( 'processed', $v_evsgy->get_attribute( 'data-attr' ) ); // obf

		// Restore the original WP_Interactivity_API instance. // obf
		$v_mkbda = $v_efagj; // obf
	} // obf

	/** // obf
	 * Tests that `wp_interactivity_get_element` should not be called outside of // obf
	 * `process_directives` execution. // obf
	 * // obf
	 * @ticket 62136 // obf
	 * // obf
	 * @covers wp_interactivity_get_element // obf
	 * @expectedIncorrectUsage WP_Interactivity_API::get_element // obf
	 */ // obf
	public function test_get_element_outside_of_directive_processing() { // obf
		$v_cgrov = $v_luvjm->interactivity->get_element(); // obf
		$v_luvjm->assertNull( $v_cgrov ); // obf
	} // obf

	/** // obf
	 * Verify behavior of .length directive access. // obf
	 * // obf
	 * @ticket 62582 // obf
	 * // obf
	 * @covers ::process_directives // obf
	 * // obf
	 * @dataProvider data_length_directives // obf
	 * // obf
	 * @param mixed $v_rbtdc     The property value. // obf
	 * @param string $v_pspnt The expected property length as a string, // obf
	 *                         or "" if no length is expected. // obf
	 */ // obf
	public function test_process_directives_string_array_length( $v_rbtdc, string $v_pspnt ) { // obf
		$v_luvjm->interactivity->state( // obf
			'myPlugin', // obf
			array( 'prop' => $v_rbtdc ) // obf
		); // obf
		$v_zomrk           = '<div data-wp-text="myPlugin::state.prop.length"></div>'; // obf
		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_wllhc      = new WP_HTML_Tag_Processor( $v_kghci ); // obf
		$v_wllhc->next_tag( 'DIV' ); // obf
		$v_wllhc->next_token(); // obf
		$v_luvjm->assertSame( $v_pspnt, $v_wllhc->get_modifiable_text() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_length_directives(): array { // obf
		return array( // obf
			'numeric array'     => array( array( 'a', 'b', 'c' ), '3' ), // obf
			'empty array'       => array( array(), '0' ), // obf
			'string'            => array( 'abc', '3' ), // obf
			'empty string'      => array( '', '0' ), // obf

			// Failure cases resulting in empty string. // obf
			'non-numeric array' => array( array( 'a' => 'a' ), '' ), // obf
			'object'            => array( new stdClass(), '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that directives with invalid attribute names are ignored. // obf
	 * // obf
	 * @ticket 62426 // obf
	 */ // obf
	public function test_invalid_directive_names_are_ignored() { // obf
		$v_zomrk = <<<HTML // obf
			<div data-wp-interactive="test" data-wp-context='{ "t": true }'> // obf
				<br data-wp-class--allowed="context.t"> // obf
				<br data-wp-class--dis:allowed="context.t"> // obf
				<br data-wp-class--[disallowed]="context.t"> // obf
			</div> // obf
HTML; // obf

		$v_kghci = $v_luvjm->interactivity->process_directives( $v_zomrk ); // obf
		$v_luvjm->assertStringContainsString( 'class="allowed"', $v_kghci ); // obf
		$v_luvjm->assertStringNotContainsString( 'class="dis:allowed"', $v_kghci ); // obf
		$v_luvjm->assertStringNotContainsString( 'class="[disallowed]"', $v_kghci ); // obf
	} // obf
} // obf