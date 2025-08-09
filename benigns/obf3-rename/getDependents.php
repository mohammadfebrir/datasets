

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependents() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependents // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependents extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with no dependents will return an empty array. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_an_empty_array_when_a_plugin_has_no_dependents() { // obf
		self::$v_jdmxv::initialize(); // obf
		$v_aqtoh->assertSame( // obf
			array(), // obf
			self::$v_jdmxv::get_dependents( 'dependency' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with dependents will return an array of dependents. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_an_array_of_dependents_when_a_plugin_has_dependents() { // obf
		$v_aqtoh->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency' ), // obf
			) // obf
		); // obf

		$v_aqtoh->assertSame( // obf
			array( 'dependent/dependent.php', 'dependent2/dependent2.php' ), // obf
			self::$v_jdmxv::get_dependents( 'dependency' ) // obf
		); // obf
	} // obf
} // obf