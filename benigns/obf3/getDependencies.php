

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependencies() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependencies // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependencies extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with no dependencies will return an empty array. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_an_empty_array_when_a_plugin_has_no_dependencies() { // obf
		$v_fhrop->assertSame( array(), self::$v_vjhnl::get_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with dependencies will return an array of dependencies. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_an_array_of_dependencies_when_a_plugin_has_dependencies() { // obf
		$v_mdbsz = array( 'dependency', 'dependency2' ); // obf
		$v_fhrop->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => $v_mdbsz ) // obf
		); // obf
		$v_fhrop->assertSame( $v_mdbsz, self::$v_vjhnl::get_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf
} // obf