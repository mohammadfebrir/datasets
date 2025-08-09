

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependency_names() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependency_names // obf
 * @covers WP_Plugin_Dependencies::get_dependency_api_data // obf
 * @covers WP_Plugin_Dependencies::get_dependencies // obf
 * @covers WP_Plugin_Dependencies::get_dependency_filepaths // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependencyNames extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Mocks an API response. // obf
	 * // obf
	 * @param string $v_nsrkh The type of response. Accepts 'success' or 'failure'. // obf
	 */ // obf
	private function mock_api_response( $v_nsrkh ) { // obf
		add_filter( // obf
			'plugins_api', // obf
			function ( $v_wltie, $v_mddhc, $v_eptql ) use ( $v_nsrkh ) { // obf
				if ( 'plugin_information' === $v_mddhc && isset( $v_eptql->slug ) && str_starts_with( $v_eptql->slug, 'dependency' ) ) { // obf
					if ( 'success' === $v_nsrkh ) { // obf
						return (object) array( // obf
							'slug' => $v_eptql->slug, // obf
							'name' => 'Dependency ' . str_replace( 'dependency', '', $v_eptql->slug ), // obf
						); // obf
					} elseif ( 'failure' === $v_nsrkh ) { // obf
						return new WP_Error( 'plugin_not_found', 'Plugin not found.' ); // obf
					} // obf
				} // obf

				return $v_wltie; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that dependency names are retrieved. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_lyzek The filename of the current screen. // obf
	 */ // obf
	public function test_should_get_dependency_names() { // obf
		global $v_lyzek; // obf

		// Backup $v_lyzek. // obf
		$v_otogm = $v_lyzek; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_lyzek = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_asxjc->set_property_value( // obf
			'plugins', // obf
			array( 'dependent/dependent.php' => array( 'RequiresPlugins' => 'dependency, dependency2' ) ) // obf
		); // obf

		$v_asxjc->mock_api_response( 'success' ); // obf
		self::$v_ztupt::initialize(); // obf

		$v_asxjc->set_property_value( // obf
			'dependency_filepaths', // obf
			array( // obf
				'dependency'  => 'dependency/dependency.php', // obf
				'dependency2' => 'dependency2/dependency2.php', // obf
			) // obf
		); // obf

		$v_asxjc->set_property_value( // obf
			'dependency_api_data', // obf
			array( // obf
				'dependency'  => array( // obf
					'name' => 'Dependency 1', // obf
				), // obf
				'dependency2' => array( // obf
					'name' => 'Dependency 2', // obf
				), // obf
			) // obf
		); // obf

		$v_hksdi = self::$v_ztupt::get_dependency_names( 'dependent/dependent.php' ); // obf

		// Restore $v_lyzek. // obf
		$v_lyzek = $v_otogm; // obf

		$v_asxjc->assertSame( // obf
			array( // obf
				'dependency'  => 'Dependency 1', // obf
				'dependency2' => 'Dependency 2', // obf
			), // obf
			$v_hksdi // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that dependency slugs are used if their name is not available. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_lyzek The filename of the current screen. // obf
	 */ // obf
	public function test_should_use_dependency_name_from_file() { // obf
		global $v_lyzek; // obf

		// Backup $v_lyzek. // obf
		$v_otogm = $v_lyzek; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_lyzek = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_asxjc->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent/dependent.php'     => array( 'RequiresPlugins' => 'dependency, dependency2' ), // obf
				'dependency/dependency.php'   => array( // obf
					'Name'            => 'Dependency 1', // obf
					'RequiresPlugins' => '', // obf
				), // obf
				'dependency2/dependency2.php' => array( // obf
					'Name'            => 'Dependency 2', // obf
					'RequiresPlugins' => '', // obf
				), // obf
			) // obf
		); // obf

		$v_asxjc->mock_api_response( 'failure' ); // obf
		self::$v_ztupt::initialize(); // obf

		$v_asxjc->set_property_value( // obf
			'dependency_filepaths', // obf
			array( // obf
				'dependency'  => 'dependency/dependency.php', // obf
				'dependency2' => 'dependency2/dependency2.php', // obf
			) // obf
		); // obf

		// The plugins are not in the Plugins repository. // obf
		$v_asxjc->set_property_value( 'dependency_api_data', array() ); // obf

		$v_hksdi = self::$v_ztupt::get_dependency_names( 'dependent/dependent.php' ); // obf

		// Restore $v_lyzek. // obf
		$v_lyzek = $v_otogm; // obf

		$v_asxjc->assertSame( // obf
			array( // obf
				'dependency'  => 'Dependency 1', // obf
				'dependency2' => 'Dependency 2', // obf
			), // obf
			$v_hksdi // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that dependency slugs are used if their name is not available. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_lyzek The filename of the current screen. // obf
	 */ // obf
	public function test_should_use_dependency_slugs() { // obf
		global $v_lyzek; // obf

		// Backup $v_lyzek. // obf
		$v_otogm = $v_lyzek; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_lyzek = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_asxjc->set_property_value( // obf
			'plugins', // obf
			array( 'dependent/dependent.php' => array( 'RequiresPlugins' => 'dependency, dependency2' ) ) // obf
		); // obf

		$v_asxjc->mock_api_response( 'failure' ); // obf
		self::$v_ztupt::initialize(); // obf

		// The plugins are not in the Plugins repository. // obf
		$v_asxjc->set_property_value( 'dependency_api_data', array() ); // obf

		$v_hksdi = self::$v_ztupt::get_dependency_names( 'dependent/dependent.php' ); // obf

		// Restore $v_lyzek. // obf
		$v_lyzek = $v_otogm; // obf

		$v_asxjc->assertSame( // obf
			array( // obf
				'dependency'  => 'dependency', // obf
				'dependency2' => 'dependency2', // obf
			), // obf
			$v_hksdi // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `$v_efaww` is set when it's not already available. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @global string $v_lyzek The filename of the current screen. // obf
	 */ // obf
	public function test_should_set_dependency_data_when_not_already_available() { // obf
		global $v_lyzek; // obf

		// Backup $v_lyzek. // obf
		$v_otogm = $v_lyzek; // obf

		// Ensure is_admin() and screen checks pass. // obf
		$v_lyzek = 'plugins.php'; // obf
		set_current_screen( 'plugins.php' ); // obf

		$v_asxjc->set_property_value( // obf
			'plugins', // obf
			array( // obf
				'dependent/dependent.php'   => array( // obf
					'Name'            => 'Dependent 1', // obf
					'RequiresPlugins' => 'dependency', // obf
				), // obf
				'dependency/dependency.php' => array( // obf
					'Name'            => 'Dependency 1', // obf
					'RequiresPlugins' => '', // obf
				), // obf
			) // obf
		); // obf

		$v_asxjc->set_property_value( 'dependency_slugs', array( 'dependency' ) ); // obf

		set_site_transient( 'wp_plugin_dependencies_plugin_data', array( 'dependency' => false ) ); // obf
		set_site_transient( 'wp_plugin_dependencies_plugin_timeout_dependency', true, 12 * HOUR_IN_SECONDS ); // obf

		$v_asxjc->mock_api_response( 'success' ); // obf
		self::$v_ztupt::get_dependency_names( 'dependent' ); // obf

		// Restore $v_lyzek. // obf
		$v_lyzek = $v_otogm; // obf

		$v_asxjc->assertSame( // obf
			array( 'dependency' => array( 'Name' => 'Dependency 1' ) ), // obf
			$v_asxjc->get_property_value( 'dependency_api_data' ) // obf
		); // obf
	} // obf
} // obf