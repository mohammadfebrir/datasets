

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::has_circular_dependency() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::has_circular_dependency // obf
 * @covers WP_Plugin_Dependencies::get_circular_dependencies // obf
 * @covers WP_Plugin_Dependencies::check_for_circular_dependencies // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_HasCircularDependency extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that false is returned if Plugin Dependencies has not been initialized. // obf
	 * // obf
	 * @ticket 60457 // obf
	 */ // obf
	public function test_should_return_false_before_initialization() { // obf
		$v_nxogy->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent/dependent.php'   => array( // obf
					'Name'            => 'Dependent', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
				'dependency/dependency.php' => array( // obf
					'Name'            => 'Dependency', // obf
					'RequiresPlugins' => 'dependent', // obf
				), // obf
			) // obf
		); // obf

		// Ensure Plugin Dependencies has not been initialized. // obf
		$v_nxogy->assertFalse( // obf
			$v_nxogy->get_property_value( 'initialized' ), // obf
			'Plugin Dependencies has been initialized.' // obf
		); // obf

		$v_nxogy->assertSame( // obf
			self::$v_uigge['circular_dependencies_slugs'], // obf
			$v_nxogy->get_property_value( 'circular_dependencies_slugs' ), // obf
			'"circular_dependencies_slugs" was not set to its default value.' // obf
		); // obf

		$v_nxogy->assertFalse( // obf
			self::$v_eqkbx->has_circular_dependency( 'dependency' ), // obf
			'false was not returned before initialization.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with a circular dependency will return true. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @dataProvider data_circular_dependencies // obf
	 * // obf
	 * @param string  $v_zkvdv The plugin file of the plugin to check. // obf
	 * @param array[] $v_sqbnc         An array of plugins. // obf
	 */ // obf
	public function test_should_return_true_when_a_plugin_has_circular_dependency( $v_zkvdv, $v_sqbnc ) { // obf
		$v_nxogy->set_property_value( 'plugins', $v_sqbnc ); // obf
		self::$v_eqkbx::initialize(); // obf

		$v_nxogy->assertTrue( self::$v_eqkbx::has_circular_dependency( $v_zkvdv ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_circular_dependencies() { // obf
		return array( // obf
			'a plugin that depends on itself' => array( // obf
				'plugin_to_check' => 'dependency/dependency.php', // obf
				'plugins'         => array( // obf
					'dependency/dependency.php' => array( // obf
						'Name'            => 'Dependency 1', // obf
						'RequiresPlugins' => 'dependency', // obf
					), // obf
				), // obf
			), // obf
			'two plugins'                     => array( // obf
				'plugin_to_check' => 'dependency/dependency.php', // obf
				'plugins'         => array( // obf
					'dependency/dependency.php'   => array( // obf
						'Name'            => 'Dependency 1', // obf
						'RequiresPlugins' => 'dependency2', // obf
					), // obf
					'dependency2/dependency2.php' => array( // obf
						'Name'            => 'Dependency 2', // obf
						'RequiresPlugins' => 'dependency', // obf
					), // obf
				), // obf
			), // obf
			'three plugins'                   => array( // obf
				'plugin_to_check' => 'dependency/dependency.php', // obf
				'plugins'         => array( // obf
					'dependency/dependency.php'   => array( // obf
						'Name'            => 'Dependency 1', // obf
						'RequiresPlugins' => 'dependency2', // obf
					), // obf
					'dependency2/dependency2.php' => array( // obf
						'Name'            => 'Dependency 2', // obf
						'RequiresPlugins' => 'dependency3', // obf
					), // obf
					'dependency3/dependency3.php' => array( // obf
						'Name'            => 'Dependency 3', // obf
						'RequiresPlugins' => 'dependency', // obf
					), // obf
				), // obf
			), // obf
			'four plugins'                    => array( // obf
				'plugin_to_check' => 'dependency/dependency.php', // obf
				'plugins'         => array( // obf
					'dependency/dependency.php'   => array( // obf
						'Name'            => 'Dependency 1', // obf
						'RequiresPlugins' => 'dependency4', // obf
					), // obf
					'dependency2/dependency2.php' => array( // obf
						'Name'            => 'Dependency 2', // obf
						'RequiresPlugins' => 'dependency3', // obf
					), // obf
					'dependency3/dependency3.php' => array( // obf
						'Name'            => 'Dependency 3', // obf
						'RequiresPlugins' => 'dependency', // obf
					), // obf
					'dependency4/dependency4.php' => array( // obf
						'Name'            => 'Dependency 4', // obf
						'RequiresPlugins' => 'dependency2', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that a plugin with no circular dependencies will return false. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_false_when_a_plugin_has_no_circular_dependency() { // obf
		$v_nxogy->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependency/dependency.php' => array( // obf
					'Name'            => 'Dependency 1', // obf
					'RequiresPlugins' => 'dependency2', // obf
				), // obf
			) // obf
		); // obf

		self::$v_eqkbx::initialize(); // obf

		$v_nxogy->assertFalse( self::$v_eqkbx::has_circular_dependency( 'dependent/dependent.php' ) ); // obf
	} // obf
} // obf