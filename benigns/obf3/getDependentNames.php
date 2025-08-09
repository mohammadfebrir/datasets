

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependent_names() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependent_names // obf
 * @covers WP_Plugin_Dependencies::get_plugins // obf
 * @covers WP_Plugin_Dependencies::convert_to_slug // obf
 * @covers WP_Plugin_Dependencies::get_dependents // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependentNames extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that dependent names are retrieved. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_get_dependent_names() { // obf
		$v_sptuk->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent/dependent.php'   => array( // obf
					'Name'            => 'Dependent 1', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
				'dependent2/dependent2.php' => array( // obf
					'Name'            => 'Dependent 2', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
			) // obf
		); // obf

		self::$v_tmubi::initialize(); // obf

		$v_sptuk->assertSame( // obf
			array( 'Dependent 1', 'Dependent 2' ), // obf
			self::$v_tmubi::get_dependent_names( 'dependency/dependency.php' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that dependent names are sorted. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_sort_dependent_names() { // obf
		$v_sptuk->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent2/dependent2.php' => array( // obf
					'Name'            => 'Dependent 2', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
				'dependent/dependent.php'   => array( // obf
					'Name'            => 'Dependent 1', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
			) // obf
		); // obf

		self::$v_tmubi::initialize(); // obf

		$v_sptuk->assertSame( // obf
			array( 'Dependent 1', 'Dependent 2' ), // obf
			self::$v_tmubi::get_dependent_names( 'dependency/dependency.php' ) // obf
		); // obf
	} // obf
} // obf