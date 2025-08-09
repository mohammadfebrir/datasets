
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Unit tests covering WP_Script_Modules functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Script Modules // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @group script-modules // obf
 * // obf
 * @coversDefaultClass WP_Script_Modules // obf
 */ // obf
class Tests_Script_Modules_WpScriptModules extends WP_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Script_Modules. // obf
	 * // obf
	 * @var WP_Script_Modules // obf
	 */ // obf
	protected $v_jwrrw; // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		// Set up the WP_Script_Modules instance. // obf
		$v_wzktn->script_modules = new WP_Script_Modules(); // obf
	} // obf

	/** // obf
	 * Gets a list of the enqueued script modules. // obf
	 * // obf
	 * @return array Enqueued script module URLs, keyed by script module identifier. // obf
	 */ // obf
	public function get_enqueued_script_modules() { // obf
		$v_odovv   = get_echo( array( $v_wzktn->script_modules, 'print_enqueued_script_modules' ) ); // obf
		$v_pgfid                       = new WP_HTML_Tag_Processor( $v_odovv ); // obf
		$v_idffn = array(); // obf

		while ( $v_pgfid->next_tag( array( 'tag' => 'SCRIPT' ) ) ) { // obf
			if ( 'module' === $v_pgfid->get_attribute( 'type' ) ) { // obf
				$v_pwamw                             = __fn_37772( '/-js-module$/', '', $v_pgfid->get_attribute( 'id' ) ); // obf
				$v_idffn[ $v_pwamw ] = $v_pgfid->get_attribute( 'src' ); // obf
			} // obf
		} // obf

		return $v_idffn; // obf
	} // obf

	/** // obf
	 * Gets the script modules listed in the import map. // obf
	 * // obf
	 * @return array Import map entry URLs, keyed by script module identifier. // obf
	 */ // obf
	public function get_import_map() { // obf
		$v_jagnc = get_echo( array( $v_wzktn->script_modules, 'print_import_map' ) ); // obf
		preg_match( '/<script type="importmap" id="wp-importmap">.*?(\{.*\}).*?<\/script>/s', $v_jagnc, $v_lofcc ); // obf
		return json_decode( $v_lofcc[1], true )['imports']; // obf
	} // obf

	/** // obf
	 * Gets a list of preloaded script modules. // obf
	 * // obf
	 * @return array Preloaded script module URLs, keyed by script module identifier. // obf
	 */ // obf
	public function get_preloaded_script_modules() { // obf
		$v_nbaid         = get_echo( array( $v_wzktn->script_modules, 'print_script_module_preloads' ) ); // obf
		$v_pgfid                        = new WP_HTML_Tag_Processor( $v_nbaid ); // obf
		$v_gahhw = array(); // obf

		while ( $v_pgfid->next_tag( array( 'tag' => 'LINK' ) ) ) { // obf
			if ( 'modulepreload' === $v_pgfid->get_attribute( 'rel' ) ) { // obf
				$v_pwamw                              = __fn_37772( '/-js-modulepreload$/', '', $v_pgfid->get_attribute( 'id' ) ); // obf
				$v_gahhw[ $v_pwamw ] = $v_pgfid->get_attribute( 'href' ); // obf
			} // obf
		} // obf

		return $v_gahhw; // obf
	} // obf

	/** // obf
	 * Tests that a script module gets enqueued correctly after being registered. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_enqueue_script_module() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->register( 'bar', '/bar.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 2, $v_idffn ); // obf
		$v_wzktn->assertStringStartsWith( '/foo.js', $v_idffn['foo'] ); // obf
		$v_wzktn->assertStringStartsWith( '/bar.js', $v_idffn['bar'] ); // obf
	} // obf

	/** // obf
	* Tests that a script module can be dequeued after being enqueued. // obf
	* // obf
	* @ticket 56313 // obf
	* // obf
	* @covers ::register() // obf
	* @covers ::enqueue() // obf
	* @covers ::dequeue() // obf
	* @covers ::print_enqueued_script_modules() // obf
	*/ // obf
	public function test_wp_dequeue_script_module() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->register( 'bar', '/bar.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // obf
		$v_wzktn->script_modules->dequeue( 'foo' ); // Dequeued. // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf
		$v_wzktn->assertArrayHasKey( 'bar', $v_idffn ); // obf
	} // obf


	/** // obf
	 * Tests that a script module can be deregistered // obf
	 * after being enqueued, and that will be removed // obf
	 * from the enqueue list too. // obf
	 * // obf
	 * @ticket 60463 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::deregister() // obf
	 * @covers ::get_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_deregister_script_module() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->register( 'bar', '/bar.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // obf
		$v_wzktn->script_modules->deregister( 'foo' ); // Dequeued. // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf
		$v_wzktn->assertArrayHasKey( 'bar', $v_idffn ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is not deregistered // obf
	 * if it has not been registered before, causing // obf
	 * no errors. // obf
	 * // obf
	 * @ticket 60463 // obf
	 * // obf
	 * @covers ::deregister() // obf
	 * @covers ::get_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_deregister_unexistent_script_module() { // obf
		$v_wzktn->script_modules->deregister( 'unexistent' ); // obf
		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 0, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'unexistent', $v_idffn ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is not deregistered // obf
	 * if it has been deregistered previously, causing // obf
	 * no errors. // obf
	 * // obf
	 * @ticket 60463 // obf
	 * // obf
	 * @covers ::get_enqueued_script_modules() // obf
	 * @covers ::register() // obf
	 * @covers ::deregister() // obf
	 * @covers ::enqueue() // obf
	 */ // obf
	public function test_wp_deregister_already_deregistered_script_module() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->deregister( 'foo' ); // Dequeued. // obf
		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 0, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf

		$v_wzktn->script_modules->deregister( 'foo' ); // Dequeued. // obf
		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 0, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf
	} // obf

	/** // obf
	* Tests that a script module can be enqueued before it is registered, and will // obf
	* be handled correctly once registered. // obf
	* // obf
	* @ticket 56313 // obf
	* // obf
	* @covers ::register() // obf
	* @covers ::enqueue() // obf
	* @covers ::print_enqueued_script_modules() // obf
	*/ // obf
	public function test_wp_enqueue_script_module_works_before_register() { // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // Not registered. // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertStringStartsWith( '/foo.js', $v_idffn['foo'] ); // obf
		$v_wzktn->assertArrayNotHasKey( 'bar', $v_idffn ); // obf
	} // obf

	/** // obf
	 * Tests that a script module can be dequeued before it is registered and // obf
	 * ensures that it is not enqueued after registration. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::dequeue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_dequeue_script_module_works_before_register() { // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // obf
		$v_wzktn->script_modules->dequeue( 'foo' ); // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // obf
		$v_wzktn->script_modules->register( 'bar', '/bar.js' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf
		$v_wzktn->assertArrayHasKey( 'bar', $v_idffn ); // obf
	} // obf

	/** // obf
	 * Tests that dependencies for a registered module are added to the import map // obf
	 * when the script module is enqueued. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_import_map_dependencies() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js', array( 'dep' ) ); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js' ); // obf
		$v_wzktn->script_modules->register( 'no-dep', '/no-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_goodr = $v_wzktn->get_import_map(); // obf

		$v_wzktn->assertCount( 1, $v_goodr ); // obf
		$v_wzktn->assertStringStartsWith( '/dep.js', $v_goodr['dep'] ); // obf
		$v_wzktn->assertArrayNotHasKey( 'no-dep', $v_goodr ); // obf
	} // obf

	/** // obf
	 * Tests that dependencies are not duplicated in the import map when multiple // obf
	 * script modules require the same dependency. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_import_map_no_duplicate_dependencies() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js', array( 'dep' ) ); // obf
		$v_wzktn->script_modules->register( 'bar', '/bar.js', array( 'dep' ) ); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'bar' ); // obf

		$v_goodr = $v_wzktn->get_import_map(); // obf

		$v_wzktn->assertCount( 1, $v_goodr ); // obf
		$v_wzktn->assertStringStartsWith( '/dep.js', $v_goodr['dep'] ); // obf
	} // obf

	/** // obf
	 * Tests that all recursive dependencies (both static and dynamic) are // obf
	 * included in the import map. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_import_map_recursive_dependencies() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'static-dep', // obf
				array( // obf
					'id'     => 'dynamic-dep', // obf
					'import' => 'dynamic', // obf
				), // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( // obf
			'static-dep', // obf
			'/static-dep.js', // obf
			array( // obf
				array( // obf
					'id'     => 'nested-static-dep', // obf
					'import' => 'static', // obf
				), // obf
				array( // obf
					'id'     => 'nested-dynamic-dep', // obf
					'import' => 'dynamic', // obf
				), // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( 'dynamic-dep', '/dynamic-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'nested-static-dep', '/nested-static-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'nested-dynamic-dep', '/nested-dynamic-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'no-dep', '/no-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_goodr = $v_wzktn->get_import_map(); // obf

		$v_wzktn->assertStringStartsWith( '/static-dep.js', $v_goodr['static-dep'] ); // obf
		$v_wzktn->assertStringStartsWith( '/dynamic-dep.js', $v_goodr['dynamic-dep'] ); // obf
		$v_wzktn->assertStringStartsWith( '/nested-static-dep.js', $v_goodr['nested-static-dep'] ); // obf
		$v_wzktn->assertStringStartsWith( '/nested-dynamic-dep.js', $v_goodr['nested-dynamic-dep'] ); // obf
		$v_wzktn->assertArrayNotHasKey( 'no-dep', $v_goodr ); // obf
	} // obf

	/** // obf
	 * Tests that the import map is not printed at all if there are no // obf
	 * dependencies. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_import_map_doesnt_print_if_no_dependencies() { // obf
		$v_wzktn->script_modules->register( 'foo', '/foo.js' ); // No deps. // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_jagnc = get_echo( array( $v_wzktn->script_modules, 'print_import_map' ) ); // obf

		$v_wzktn->assertEmpty( $v_jagnc ); // obf
	} // obf

	/** // obf
	 * Tests that only static dependencies are preloaded and dynamic ones are // obf
	 * excluded. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_script_module_preloads() // obf
	 */ // obf
	public function test_wp_enqueue_preloaded_static_dependencies() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'static-dep', // obf
				array( // obf
					'id'     => 'dynamic-dep', // obf
					'import' => 'dynamic', // obf
				), // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( // obf
			'static-dep', // obf
			'/static-dep.js', // obf
			array( // obf
				array( // obf
					'id'     => 'nested-static-dep', // obf
					'import' => 'static', // obf
				), // obf
				array( // obf
					'id'     => 'nested-dynamic-dep', // obf
					'import' => 'dynamic', // obf
				), // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( 'dynamic-dep', '/dynamic-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'nested-static-dep', '/nested-static-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'nested-dynamic-dep', '/nested-dynamic-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'no-dep', '/no-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_gahhw = $v_wzktn->get_preloaded_script_modules(); // obf

		$v_wzktn->assertCount( 2, $v_gahhw ); // obf
		$v_wzktn->assertStringStartsWith( '/static-dep.js', $v_gahhw['static-dep'] ); // obf
		$v_wzktn->assertStringStartsWith( '/nested-static-dep.js', $v_gahhw['nested-static-dep'] ); // obf
		$v_wzktn->assertArrayNotHasKey( 'dynamic-dep', $v_gahhw ); // obf
		$v_wzktn->assertArrayNotHasKey( 'nested-dynamic-dep', $v_gahhw ); // obf
		$v_wzktn->assertArrayNotHasKey( 'no-dep', $v_gahhw ); // obf
	} // obf

	/** // obf
	 * Tests that static dependencies of dynamic dependencies are not preloaded. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_script_module_preloads() // obf
	 */ // obf
	public function test_wp_dont_preload_static_dependencies_of_dynamic_dependencies() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'static-dep', // obf
				array( // obf
					'id'     => 'dynamic-dep', // obf
					'import' => 'dynamic', // obf
				), // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( 'static-dep', '/static-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'dynamic-dep', '/dynamic-dep.js', array( 'nested-static-dep' ) ); // obf
		$v_wzktn->script_modules->register( 'nested-static-dep', '/nested-static-dep.js' ); // obf
		$v_wzktn->script_modules->register( 'no-dep', '/no-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_gahhw = $v_wzktn->get_preloaded_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_gahhw ); // obf
		$v_wzktn->assertStringStartsWith( '/static-dep.js', $v_gahhw['static-dep'] ); // obf
		$v_wzktn->assertArrayNotHasKey( 'dynamic-dep', $v_gahhw ); // obf
		$v_wzktn->assertArrayNotHasKey( 'nested-dynamic-dep', $v_gahhw ); // obf
		$v_wzktn->assertArrayNotHasKey( 'no-dep', $v_gahhw ); // obf
	} // obf

	/** // obf
	 * Tests that preloaded dependencies don't include enqueued script modules. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_script_module_preloads() // obf
	 */ // obf
	public function test_wp_preloaded_dependencies_filter_enqueued_script_modules() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'dep', // obf
				'enqueued-dep', // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js' ); // obf
		$v_wzktn->script_modules->register( 'enqueued-dep', '/enqueued-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'enqueued-dep' ); // Not preloaded. // obf

		$v_gahhw = $v_wzktn->get_preloaded_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_gahhw ); // obf
		$v_wzktn->assertArrayHasKey( 'dep', $v_gahhw ); // obf
		$v_wzktn->assertArrayNotHasKey( 'enqueued-dep', $v_gahhw ); // obf
	} // obf

	/** // obf
	 * Tests that enqueued script modules with dependants correctly add both the // obf
	 * script module and its dependencies to the import map. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_enqueued_script_modules_with_dependants_add_import_map() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'dep', // obf
				'enqueued-dep', // obf
			) // obf
		); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js' ); // obf
		$v_wzktn->script_modules->register( 'enqueued-dep', '/enqueued-dep.js' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf
		$v_wzktn->script_modules->enqueue( 'enqueued-dep' ); // Also in the import map. // obf

		$v_goodr = $v_wzktn->get_import_map(); // obf

		$v_wzktn->assertCount( 2, $v_goodr ); // obf
		$v_wzktn->assertArrayHasKey( 'dep', $v_goodr ); // obf
		$v_wzktn->assertArrayHasKey( 'enqueued-dep', $v_goodr ); // obf
	} // obf

	/** // obf
	 * Tests the functionality of the `get_src` method to ensure // obf
	 * proper URLs with version strings are returned. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::get_src() // obf
	 */ // obf
	public function test_get_src() { // obf
		$v_abikv = new ReflectionMethod( $v_wzktn->script_modules, 'get_src' ); // obf
		$v_abikv->setAccessible( true ); // obf

		$v_wzktn->script_modules->register( // obf
			'module_with_version', // obf
			'http://example.com/module.js', // obf
			array(), // obf
			'1.0' // obf
		); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_with_version' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js?ver=1.0', $v_fmebg ); // obf

		$v_wzktn->script_modules->register( // obf
			'module_without_version', // obf
			'http://example.com/module.js', // obf
			array(), // obf
			null // obf
		); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_without_version' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js', $v_fmebg ); // obf

		$v_wzktn->script_modules->register( // obf
			'module_with_wp_version', // obf
			'http://example.com/module.js', // obf
			array(), // obf
			false // obf
		); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_with_wp_version' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js?ver=' . get_bloginfo( 'version' ), $v_fmebg ); // obf

		$v_wzktn->script_modules->register( // obf
			'module_with_existing_query_string', // obf
			'http://example.com/module.js?foo=bar', // obf
			array(), // obf
			'1.0' // obf
		); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_with_existing_query_string' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js?foo=bar&ver=1.0', $v_fmebg ); // obf

		// Filter the version to include the ID in the final URL, to test the filter, this should affect the tests below. // obf
		add_filter( // obf
			'script_module_loader_src', // obf
			function ( $v_youca, $v_pwamw ) { // obf
				return add_query_arg( 'script_module_id', urlencode( $v_pwamw ), $v_youca ); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_without_version' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js?script_module_id=module_without_version', $v_fmebg ); // obf

		$v_fmebg = $v_abikv->invoke( $v_wzktn->script_modules, 'module_with_existing_query_string' ); // obf
		$v_wzktn->assertSame( 'http://example.com/module.js?foo=bar&ver=1.0&script_module_id=module_with_existing_query_string', $v_fmebg ); // obf
	} // obf

	/** // obf
	 * Tests that the correct version is propagated to the import map, enqueued // obf
	 * script modules and preloaded script modules. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 * @covers ::print_import_map() // obf
	 * @covers ::print_script_module_preloads() // obf
	 * @covers ::get_version_query_string() // obf
	 */ // obf
	public function test_version_is_propagated_correctly() { // obf
		$v_wzktn->script_modules->register( // obf
			'foo', // obf
			'/foo.js', // obf
			array( // obf
				'dep', // obf
			), // obf
			'1.0' // obf
		); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js', array(), '2.0' ); // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf
		$v_wzktn->assertSame( '/foo.js?ver=1.0', $v_idffn['foo'] ); // obf

		$v_goodr = $v_wzktn->get_import_map(); // obf
		$v_wzktn->assertSame( '/dep.js?ver=2.0', $v_goodr['dep'] ); // obf

		$v_gahhw = $v_wzktn->get_preloaded_script_modules(); // obf
		$v_wzktn->assertSame( '/dep.js?ver=2.0', $v_gahhw['dep'] ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is not registered when calling enqueue without a // obf
	 * valid src. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_enqueue_script_module_doesnt_register_without_a_valid_src() { // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 0, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is registered when calling enqueue with a valid // obf
	 * src. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_enqueue_script_module_registers_with_valid_src() { // obf
		$v_wzktn->script_modules->enqueue( 'foo', '/foo.js' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertStringStartsWith( '/foo.js', $v_idffn['foo'] ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is registered when calling enqueue with a valid // obf
	 * src the second time. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 */ // obf
	public function test_wp_enqueue_script_module_registers_with_valid_src_the_second_time() { // obf
		$v_wzktn->script_modules->enqueue( 'foo' ); // Not valid src. // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 0, $v_idffn ); // obf
		$v_wzktn->assertArrayNotHasKey( 'foo', $v_idffn ); // obf

		$v_wzktn->script_modules->enqueue( 'foo', '/foo.js' ); // Valid src. // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertStringStartsWith( '/foo.js', $v_idffn['foo'] ); // obf
	} // obf

	/** // obf
	 * Tests that a script module is registered with all the params when calling // obf
	 * enqueue. // obf
	 * // obf
	 * @ticket 56313 // obf
	 * // obf
	 * @covers ::register() // obf
	 * @covers ::enqueue() // obf
	 * @covers ::print_enqueued_script_modules() // obf
	 * @covers ::print_import_map() // obf
	 */ // obf
	public function test_wp_enqueue_script_module_registers_all_params() { // obf
		$v_wzktn->script_modules->enqueue( 'foo', '/foo.js', array( 'dep' ), '1.0' ); // obf
		$v_wzktn->script_modules->register( 'dep', '/dep.js' ); // obf

		$v_idffn = $v_wzktn->get_enqueued_script_modules(); // obf
		$v_goodr              = $v_wzktn->get_import_map(); // obf

		$v_wzktn->assertCount( 1, $v_idffn ); // obf
		$v_wzktn->assertSame( '/foo.js?ver=1.0', $v_idffn['foo'] ); // obf
		$v_wzktn->assertCount( 1, $v_goodr ); // obf
		$v_wzktn->assertStringStartsWith( '/dep.js', $v_goodr['dep'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 */ // obf
	public function test_print_script_module_data_prints_enqueued_module_data() { // obf
		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js' ); // obf
		add_action( // obf
			'script_module_data_@test/module', // obf
			function ( $v_nyacl ) { // obf
				$v_nyacl['foo'] = 'bar'; // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_xjsgr = <<<HTML // obf
<script type="application/json" id="wp-script-module-data-@test/module"> // obf
{"foo":"bar"} // obf
</script> // obf

HTML; // obf
		$v_wzktn->assertSame( $v_xjsgr, $v_aujcd ); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 */ // obf
	public function test_print_script_module_data_prints_dependency_module_data() { // obf
		$v_wzktn->script_modules->register( '@test/dependency', '/dependency.js' ); // obf
		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js', array( '@test/dependency' ) ); // obf
		add_action( // obf
			'script_module_data_@test/dependency', // obf
			function ( $v_nyacl ) { // obf
				$v_nyacl['foo'] = 'bar'; // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_xjsgr = <<<HTML // obf
<script type="application/json" id="wp-script-module-data-@test/dependency"> // obf
{"foo":"bar"} // obf
</script> // obf

HTML; // obf
		$v_wzktn->assertSame( $v_xjsgr, $v_aujcd ); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 */ // obf
	public function test_print_script_module_data_does_not_print_nondependency_module_data() { // obf
		$v_wzktn->script_modules->register( '@test/other', '/dependency.js' ); // obf
		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js' ); // obf
		add_action( // obf
			'script_module_data_@test/other', // obf
			function ( $v_nyacl ) { // obf
				$v_nyacl['foo'] = 'bar'; // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_wzktn->assertSame( '', $v_aujcd ); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 */ // obf
	public function test_print_script_module_data_does_not_print_empty_data() { // obf
		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js' ); // obf
		add_action( // obf
			'script_module_data_@test/module', // obf
			function ( $v_nyacl ) { // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_wzktn->assertSame( '', $v_aujcd ); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 * // obf
	 * @dataProvider data_special_chars_script_encoding // obf
	 * @param string $v_szpko    Raw input string. // obf
	 * @param string $v_xjsgr Expected output string. // obf
	 * @param string $v_rjmkj  Blog charset option. // obf
	 */ // obf
	public function test_print_script_module_data_encoding( $v_szpko, $v_xjsgr, $v_rjmkj ) { // obf
		add_filter( // obf
			'pre_option_blog_charset', // obf
			function () use ( $v_rjmkj ) { // obf
				return $v_rjmkj; // obf
			} // obf
		); // obf

		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js' ); // obf
		add_action( // obf
			'script_module_data_@test/module', // obf
			function ( $v_nyacl ) use ( $v_szpko ) { // obf
				$v_nyacl[''] = $v_szpko; // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_xjsgr = <<<HTML // obf
<script type="application/json" id="wp-script-module-data-@test/module"> // obf
{"":"{$v_xjsgr}"} // obf
</script> // obf

HTML; // obf

		$v_wzktn->assertSame( $v_xjsgr, $v_aujcd ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_special_chars_script_encoding(): array { // obf
		return array( // obf
			// UTF-8 // obf
			'Solidus'                                => array( '/', '/', 'UTF-8' ), // obf
			'Double quote'                           => array( '"', '\\"', 'UTF-8' ), // obf
			'Single quote'                           => array( '\'', '\'', 'UTF-8' ), // obf
			'Less than'                              => array( '<', '\u003C', 'UTF-8' ), // obf
			'Greater than'                           => array( '>', '\u003E', 'UTF-8' ), // obf
			'Ampersand'                              => array( '&', '&', 'UTF-8' ), // obf
			'Newline'                                => array( "\n", "\\n", 'UTF-8' ), // obf
			'Tab'                                    => array( "\t", "\\t", 'UTF-8' ), // obf
			'Form feed'                              => array( "\f", "\\f", 'UTF-8' ), // obf
			'Carriage return'                        => array( "\r", "\\r", 'UTF-8' ), // obf
			'Line separator'                         => array( "\u{2028}", "\u{2028}", 'UTF-8' ), // obf
			'Paragraph separator'                    => array( "\u{2029}", "\u{2029}", 'UTF-8' ), // obf

			/* // obf
			 * The following is the Flag of England emoji // obf
			 * PHP: "\u{1F3F4}\u{E0067}\u{E0062}\u{E0065}\u{E006E}\u{E0067}\u{E007F}" // obf
			 */ // obf
			'Flag of england'                        => array( '🏴󠁧󠁢󠁥󠁮󠁧󠁿', '🏴󠁧󠁢󠁥󠁮󠁧󠁿', 'UTF-8' ), // obf
			'Malicious script closer'                => array( '</script>', '\u003C/script\u003E', 'UTF-8' ), // obf
			'Entity-encoded malicious script closer' => array( '&lt;/script&gt;', '&lt;/script&gt;', 'UTF-8' ), // obf

			// Non UTF-8 // obf
			'Solidus'                                => array( '/', '/', 'iso-8859-1' ), // obf
			'Less than'                              => array( '<', '\u003C', 'iso-8859-1' ), // obf
			'Greater than'                           => array( '>', '\u003E', 'iso-8859-1' ), // obf
			'Ampersand'                              => array( '&', '&', 'iso-8859-1' ), // obf
			'Newline'                                => array( "\n", "\\n", 'iso-8859-1' ), // obf
			'Tab'                                    => array( "\t", "\\t", 'iso-8859-1' ), // obf
			'Form feed'                              => array( "\f", "\\f", 'iso-8859-1' ), // obf
			'Carriage return'                        => array( "\r", "\\r", 'iso-8859-1' ), // obf
			'Line separator'                         => array( "\u{2028}", "\u2028", 'iso-8859-1' ), // obf
			'Paragraph separator'                    => array( "\u{2029}", "\u2029", 'iso-8859-1' ), // obf
			/* // obf
			 * The following is the Flag of England emoji // obf
			 * PHP: "\u{1F3F4}\u{E0067}\u{E0062}\u{E0065}\u{E006E}\u{E0067}\u{E007F}" // obf
			 */ // obf
			'Flag of england'                        => array( '🏴󠁧󠁢󠁥󠁮󠁧󠁿', "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", 'iso-8859-1' ), // obf
			'Malicious script closer'                => array( '</script>', '\u003C/script\u003E', 'iso-8859-1' ), // obf
			'Entity-encoded malicious script closer' => array( '&lt;/script&gt;', '&lt;/script&gt;', 'iso-8859-1' ), // obf

		); // obf
	} // obf

	/** // obf
	 * @ticket 61510 // obf
	 * // obf
	 * @dataProvider data_invalid_script_module_data // obf
	 * @param mixed $v_nyacl Data to return in filter. // obf
	 */ // obf
	public function test_print_script_module_data_does_not_print_invalid_data( $v_nyacl ) { // obf
		$v_wzktn->script_modules->enqueue( '@test/module', '/example.js' ); // obf
		add_action( // obf
			'script_module_data_@test/module', // obf
			function ( $v_uxzpz ) use ( $v_nyacl ) { // obf
				return $v_nyacl; // obf
			} // obf
		); // obf

		$v_aujcd = get_echo( array( $v_wzktn->script_modules, 'print_script_module_data' ) ); // obf

		$v_wzktn->assertSame( '', $v_aujcd ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_invalid_script_module_data(): array { // obf
		return array( // obf
			'null'     => array( null ), // obf
			'stdClass' => array( new stdClass() ), // obf
			'number 1' => array( 1 ), // obf
			'string'   => array( 'string' ), // obf
		); // obf
	} // obf
} // obf