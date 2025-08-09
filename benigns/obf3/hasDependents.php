

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::has_dependents() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::has_dependents // obf
 * @covers WP_Plugin_Dependencies::convert_to_slug // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_HasDependents extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with dependents will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_dependents() { // obf
		$v_ibpwv->set_property_value( 'dependency_slugs', array( 'dependent' ) ); // obf
		$v_ibpwv->assertTrue( self::$v_skslg::has_dependents( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a single file plugin with dependents will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_single_file_plugin_has_dependents() { // obf
		$v_ibpwv->set_property_value( 'dependency_slugs', array( 'dependent' ) ); // obf
		$v_ibpwv->assertTrue( self::$v_skslg::has_dependents( 'dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with no dependents will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_dependents() { // obf
		$v_ibpwv->set_property_value( 'dependency_slugs', array( 'dependent2' ) ); // obf
		$v_ibpwv->assertFalse( self::$v_skslg::has_dependents( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that 'hello.php' is converted to 'hello-dolly'. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_convert_hellophp_to_hello_dolly() { // obf
		$v_ibpwv->set_property_value( 'dependency_slugs', array( 'hello-dolly' ) ); // obf
		$v_ibpwv->assertTrue( self::$v_skslg::has_dependents( 'hello.php' ) ); // obf
	} // obf
} // obf