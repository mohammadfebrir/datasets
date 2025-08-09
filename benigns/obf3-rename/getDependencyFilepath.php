

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependency_filepath() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependency_filepath // obf
 * @covers WP_Plugin_Dependencies::get_dependency_filepaths // obf
 * @covers WP_Plugin_Dependencies::get_plugin_dirnames // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependencyFilepath extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that false is returned if Plugin Dependencies has not been initialized. // obf
	 * // obf
	 * @ticket 60457 // obf
	 */ // obf
	public function test_should_return_false_before_initialization() { // obf
		// Ensure Plugin Dependencies has not been initialized. // obf
		$v_vryfb->assertFalse( // obf
			$v_vryfb->get_property_value( 'initialized' ), // obf
			'Plugin Dependencies has been initialized.' // obf
		); // obf

		$v_vryfb->assertSame( // obf
			self::$v_jtviw['dependency_slugs'], // obf
			$v_vryfb->get_property_value( 'dependency_slugs' ), // obf
			'"dependency_slugs" was not set to its default value.' // obf
		); // obf

		$v_vryfb->assertFalse( // obf
			self::$v_tbydy->get_dependency_filepath( 'dependency' ), // obf
			'false was not returned before initialization.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the expected dependency filepaths are retrieved for installed dependencies. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @dataProvider data_get_dependency_filepath // obf
	 * // obf
	 * @param string[]     $v_woxam The dependency slug. // obf
	 * @param string[]     $v_bhgrm         An array of plugin paths. // obf
	 * @param string|false $v_juajm       The expected result. // obf
	 */ // obf
	public function test_should_return_filepaths_for_installed_dependencies( $v_woxam, $v_bhgrm, $v_juajm ) { // obf
		$v_vryfb->set_property_value( 'plugins', $v_bhgrm ); // obf
		$v_vryfb->assertNull( $v_vryfb->get_property_value( 'dependency_filepaths' ) ); // obf
		self::$v_tbydy::initialize(); // obf

		$v_vryfb->assertSame( // obf
			$v_juajm, // obf
			self::$v_tbydy::get_dependency_filepath( $v_woxam ), // obf
			'The incorrect filepath was returned.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_dependency_filepath() { // obf
		return array( // obf
			'no plugins'                      => array( // obf
				'dependency_slug' => 'dependency', // obf
				'plugins'         => array(), // obf
				'expected'        => false, // obf
			), // obf
			'a plugin that starts with slug/' => array( // obf
				'dependency_slug' => 'dependency', // obf
				'plugins'         => array( // obf
					'dependency-pro/dependency.php' => array( 'RequiresPlugins' => '' ), // obf
					'dependent/dependent.php'       => array( 'RequiresPlugins' => 'dependency' ), // obf
				), // obf
				'expected'        => false, // obf
			), // obf
			'a plugin that ends with slug/'   => array( // obf
				'dependency_slugs' => 'dependency', // obf
				'plugins'          => array( // obf
					'addon-for-dependency/dependency.php' => array( 'RequiresPlugins' => '' ), // obf
					'dependent/dependent.php'             => array( 'RequiresPlugins' => 'dependency' ), // obf
				), // obf
				'expected'         => false, // obf
			), // obf
			'a plugin that does not exist'    => array( // obf
				'dependency_slugs' => 'dependency2', // obf
				'plugins'          => array( // obf
					'dependency/dependency.php' => array( 'RequiresPlugins' => '' ), // obf
					'dependent/dependent.php'   => array( 'RequiresPlugins' => 'dependency2' ), // obf
				), // obf
				'expected'         => false, // obf
			), // obf
			'a plugin that exists'            => array( // obf
				'dependency_slugs' => 'dependency', // obf
				'plugins'          => array( // obf
					'dependency/dependency.php' => array( 'RequiresPlugins' => '' ), // obf
					'dependent/dependent.php'   => array( 'RequiresPlugins' => 'dependency' ), // obf
				), // obf
				'expected'         => 'dependency/dependency.php', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that an existing value for dependency filepaths is returned. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_existing_value_for_dependency_filepaths() { // obf
		$v_juajm = 'dependency/dependency.php'; // obf

		$v_vryfb->set_property_value( 'dependency_filepaths', array( 'dependency' => $v_juajm ) ); // obf

		/* // obf
		 * If existing dependency filepaths are not returned, // obf
		 * they'll be built from this data. // obf
		 * // obf
		 * This data is explicitly set to ensure that no // obf
		 * test plugins ever interfere with this test. // obf
		 */ // obf
		$v_vryfb->set_property_value( // obf
			'dependency_slugs', // obf
			array( 'dependency', 'dependency2', 'dependency3' ) // obf
		); // obf

		$v_vryfb->set_property_value( // obf
			'plugins', // obf
			array( // obf
				// This is flipped as paths are stored in the keys. // obf
				'dependency/dependency.php'   => array(), // obf
				'dependency2/dependency2.php' => array(), // obf
				'dependency3/dependency3.php' => array(), // obf
			) // obf
		); // obf

		$v_vryfb->assertSame( $v_juajm, self::$v_tbydy::get_dependency_filepath( 'dependency' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an empty array is returned when // obf
	 * no plugin directory names are stored. // obf
	 * // obf
	 * @ticket 22316 // obf
	 */ // obf
	public function test_should_return_empty_array_for_no_plugin_dirnames() { // obf
		$v_vryfb->set_property_value( 'dependency_slugs', array() ); // obf
		$v_vryfb->assertFalse( self::$v_tbydy::get_dependency_filepath( 'dependency' ) ); // obf
	} // obf
} // obf