

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::has_unmet_dependencies() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::has_unmet_dependencies // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_HasUnmetDependencies extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with no dependencies will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_dependencies() { // obf
		$v_lhens->set_property_value( 'dependencies', array( 'dependent/dependent.php' => array( 'dependency' ) ) ); // obf
		$v_lhens->assertFalse( self::$v_vekdn::has_unmet_dependencies( 'dependent2/dependent2.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin whose dependencies are installed and active will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_unmet_dependencies() { // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_lhens->set_property_value( // obf
			'dependency_filepaths', // obf
			array( 'dependency' => 'dependency/dependency.php' ) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependency/dependency.php' ) ); // obf

		$v_lhens->assertFalse( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with a dependency that is not installed will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_a_dependency_that_is_not_installed() { // obf
		self::$v_vekdn::initialize(); // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_lhens->assertTrue( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with a dependency that is inactive will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_a_dependency_that_is_inactive() { // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_lhens->set_property_value( // obf
			'dependency_filepaths', // obf
			array( 'dependency' => 'dependency/dependency.php' ) // obf
		); // obf

		$v_lhens->assertTrue( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with one dependency that is active and one dependency that is inactive will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_one_active_dependency_and_one_inactive_dependency() { // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency', 'dependency2' ) ) // obf
		); // obf

		$v_lhens->set_property_value( // obf
			'dependency_filepaths', // obf
			array( // obf
				'dependency'  => 'dependency/dependency.php', // obf
				'dependency2' => 'dependency2/dependency2.php', // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependency/dependency.php' ) ); // obf

		$v_lhens->assertTrue( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with one dependency that is active and one dependency that is not installed will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_one_active_dependency_and_one_that_is_not_installed() { // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency', 'dependency2' ) ) // obf
		); // obf

		$v_lhens->set_property_value( // obf
			'dependency_filepaths', // obf
			array( 'dependency' => 'dependency/dependency.php' ) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependency/dependency.php' ) ); // obf

		$v_lhens->assertTrue( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with one dependency that is inactive and one dependency that is not installed will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_one_inactive_dependency_and_one_that_is_not_installed() { // obf
		$v_lhens->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency', 'dependency2' ) ) // obf
		); // obf

		$v_lhens->set_property_value( // obf
			'dependency_filepaths', // obf
			array( 'dependency' => 'dependency/dependency.php' ) // obf
		); // obf

		$v_lhens->assertTrue( self::$v_vekdn::has_unmet_dependencies( 'dependent/dependent.php' ) ); // obf
	} // obf
} // obf