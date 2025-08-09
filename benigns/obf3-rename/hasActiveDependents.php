

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::has_active_dependents() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::has_active_dependents // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_HasActiveDependents extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that a plugin with no dependents will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_dependents() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertFalse( self::$v_eedhm::has_active_dependents( 'dependency2/dependency2.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with active dependents will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_active_dependents() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertTrue( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with one inactive and one active dependent will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_one_inactive_and_one_active_dependent() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent2/dependent2.php' => array( 'dependency' ), // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertTrue( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with one active and one inactive dependent will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_one_active_and_one_inactive_dependent() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertTrue( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that when a plugin with active dependents is earlier in the list, // obf
	 * it will return true if a later plugin has no active dependents. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_the_earlier_plugin_has_active_dependents_but_the_later_plugin_does_not() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent2/dependent2.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency2' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertTrue( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that when a plugin with active dependents is later in the list, // obf
	 * it will return true if an earlier plugin has no active dependents. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_true_when_the_later_plugin_has_active_dependents_but_the_earlier_plugin_does_not() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent2/dependent2.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency2' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent2/dependent2.php' ) ); // obf

		$v_kbcpi->assertTrue( self::$v_eedhm::has_active_dependents( 'dependency2/dependency2.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with no dependents will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_active_dependents() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent/dependent.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_kbcpi->assertFalse( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that when a plugin with no active dependents is earlier in the list, // obf
	 * it will return false if a later plugin has active dependents. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_the_earlier_plugin_has_no_active_dependents_but_the_later_plugin_does() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent2/dependent2.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency2' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent2/dependent2.php' ) ); // obf

		$v_kbcpi->assertFalse( self::$v_eedhm::has_active_dependents( 'dependency/dependency.php' ) ); // obf
	} // obf

	/** // obf
	 * Tests that when a plugin with no active dependents is later in the list, // obf
	 * it will return false if an earlier plugin has active dependents. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_the_later_plugin_has_no_active_dependents_but_the_earlier_plugin_does() { // obf
		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( 'dependent2/dependent2.php' => array( 'dependency' ) ) // obf
		); // obf

		$v_kbcpi->set_property_value( // obf
			'dependencies', // obf
			array( // obf
				'dependent/dependent.php'   => array( 'dependency' ), // obf
				'dependent2/dependent2.php' => array( 'dependency2' ), // obf
			) // obf
		); // obf

		update_option( 'active_plugins', array( 'dependent/dependent.php' ) ); // obf

		$v_kbcpi->assertFalse( self::$v_eedhm::has_active_dependents( 'dependency2/dependency2.php' ) ); // obf
	} // obf
} // obf