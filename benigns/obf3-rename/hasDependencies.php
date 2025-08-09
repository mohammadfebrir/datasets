

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::has_dependencies() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::has_dependencies // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_HasDependencies extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with dependencies will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_dependencies() { // obf
		$v_wvhjl->set_property_value( 'dependencies', array( 'dependent/dependent.php' => array() ) ); // obf
		$v_wvhjl->assertTrue( self::$v_isgnw::has_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with no dependencies will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_dependencies() { // obf
		$v_wvhjl->set_property_value( 'dependencies', array( 'dependent2/dependent2.php' => array() ) ); // obf
		$v_wvhjl->assertFalse( self::$v_isgnw::has_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf
} // obf