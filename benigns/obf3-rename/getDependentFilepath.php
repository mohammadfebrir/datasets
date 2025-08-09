

<?php // obf
/** // obf
 * Tests for the WP_Plugin_Dependencies::get_dependent_filepath() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group plugins // obf
 * // obf
 * @covers WP_Plugin_Dependencies::get_dependent_filepath // obf
 * @covers WP_Plugin_Dependencies::get_plugin_dirnames // obf
 */ // obf
class Tests_Admin_WPPluginDependencies_GetDependentFilepath extends WP_PluginDependencies_UnitTestCase { // obf

	/** // obf
	 * Tests that the expected dependent filepath is retrieved. // obf
	 * // obf
	 * @ticket 22316 // obf
	 * // obf
	 * @dataProvider data_get_dependent_filepath // obf
	 * // obf
	 * @param string       $v_qeshf The dependent slug. // obf
	 * @param string[]     $v_felnl        An array of plugin data. // obf
	 * @param string|false $v_degaw       The expected result. // obf
	 */ // obf
	public function test_should_return_filepaths_for_installed_dependents( $v_qeshf, $v_felnl, $v_degaw ) { // obf
		$v_eiubq->set_property_value( 'plugins', $v_felnl ); // obf
		self::$v_wqjei::initialize(); // obf

		$v_eiubq->assertSame( // obf
			$v_degaw, // obf
			self::$v_wqjei::get_dependent_filepath( $v_qeshf ), // obf
			'The incorrect filepath was returned.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_dependent_filepath() { // obf
		return array( // obf
			'a plugin that exists'            => array( // obf
				'dependent_slug' => 'dependent', // obf
				'plugins'        => array( 'dependent/dependent.php' => array( 'RequiresPlugins' => 'woocommerce' ) ), // obf
				'expected'       => 'dependent/dependent.php', // obf
			), // obf
			'no plugins'                      => array( // obf
				'dependent_slug' => 'dependent', // obf
				'plugins'        => array(), // obf
				'expected'       => false, // obf
			), // obf
			'a plugin that starts with slug/' => array( // obf
				'dependent_slug' => 'dependent', // obf
				'plugins'        => array( 'dependent-pro/dependent.php' => array( 'RequiresPlugins' => 'woocommerce' ) ), // obf
				'expected'       => false, // obf
			), // obf
			'a plugin that ends with slug/'   => array( // obf
				'dependent_slug' => 'dependent', // obf
				'plugins'        => array( 'not-dependent/not-dependent.php' => array( 'RequiresPlugins' => 'woocommerce' ) ), // obf
				'expected'       => false, // obf
			), // obf
			'a plugin that does not exist'    => array( // obf
				'dependent_slug' => 'dependent2', // obf
				'plugins'        => array( 'dependent/dependent.php' => array( 'RequiresPlugins' => 'woocommerce' ) ), // obf
				'expected'       => false, // obf
			), // obf
		); // obf
	} // obf
} // obf