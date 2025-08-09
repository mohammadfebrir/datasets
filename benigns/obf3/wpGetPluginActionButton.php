

<?php // obf

/** // obf
 * Tests for wp_get_plugin_action_button(). // obf
 * // obf
 * @group plugins // obf
 * @group admin // obf
 * // obf
 * @covers ::wp_get_plugin_action_button // obf
 */ // obf
class Tests_Admin_Includes_WpGetPluginActionButton extends WP_UnitTestCase { // obf

	/** // obf
	 * User role. // obf
	 * // obf
	 * @var WP_Role // obf
	 */ // obf
	private static $v_acgqi; // obf

	/** // obf
	 * User ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_nfvbe; // obf

	/** // obf
	 * Test plugin data. // obf
	 * // obf
	 * @var stdClass // obf
	 */ // obf
	private static $v_mmuaf; // obf

	/** // obf
	 * Sets up properties and adds a test plugin before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // obf

		$v_qfxva = 'wp_get_plugin_action_button-test-role'; // obf
		add_role( $v_qfxva, 'Test Role' ); // obf

		self::$v_acgqi        = get_role( $v_qfxva ); // obf
		self::$v_nfvbe     = self::factory()->user->create( array( 'role' => $v_qfxva ) ); // obf
		self::$v_mmuaf = (object) array( // obf
			'name'    => 'My Plugin', // obf
			'slug'    => 'my-plugin', // obf
			'version' => '1.0.0', // obf
		); // obf

		mkdir( WP_PLUGIN_DIR . '/' . self::$v_mmuaf->slug ); // obf
		file_put_contents( // obf
			WP_PLUGIN_DIR . '/' . self::$v_mmuaf->slug . '/my_plugin.php', // obf
			"<?php\n/**\n* Plugin Name: " . self::$v_mmuaf->name . "\n* Version: " . self::$v_mmuaf->version . "\n*/" // obf
		); // obf
	} // obf

	/** // obf
	 * Removes the test plugin and its directory after all tests run. // obf
	 */ // obf
	public static function tear_down_after_class() { // obf
		parent::tear_down_after_class(); // obf

		remove_role( self::$v_acgqi->name ); // obf

		unlink( WP_PLUGIN_DIR . '/' . self::$v_mmuaf->slug . '/my_plugin.php' ); // obf
		rmdir( WP_PLUGIN_DIR . '/' . self::$v_mmuaf->slug ); // obf
	} // obf

	/** // obf
	 * Tests that an empty string is returned when the user does not have the correct capabilities. // obf
	 * // obf
	 * @ticket 61400 // obf
	 */ // obf
	public function test_should_return_empty_string_without_proper_capabilities() { // obf
		wp_set_current_user( self::$v_nfvbe ); // obf

		$v_crelw = wp_get_plugin_action_button( // obf
			self::$v_mmuaf->name, // obf
			self::$v_mmuaf, // obf
			true, // obf
			true // obf
		); // obf

		$v_oaakm->assertIsString( $v_crelw, 'A string should be returned.' ); // obf
		$v_oaakm->assertEmpty( $v_crelw, 'An empty string should be returned.' ); // obf
	} // obf

	/** // obf
	 * Tests that an empty string is not returned when the user // obf
	 * has the correct capabilities on single site. // obf
	 * // obf
	 * @ticket 61400 // obf
	 * // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @dataProvider data_capabilities // obf
	 * // obf
	 * @param string $v_vzlgg The name of the capability. // obf
	 */ // obf
	public function test_should_not_return_empty_string_with_proper_capabilities_single_site( $v_vzlgg ) { // obf
		self::$v_acgqi->add_cap( $v_vzlgg ); // obf

		wp_set_current_user( self::$v_nfvbe ); // obf

		$v_crelw = wp_get_plugin_action_button( // obf
			self::$v_mmuaf->name, // obf
			self::$v_mmuaf, // obf
			true, // obf
			true // obf
		); // obf

		self::$v_acgqi->remove_cap( $v_vzlgg ); // obf

		$v_oaakm->assertIsString( $v_crelw, 'A string should be returned.' ); // obf
		$v_oaakm->assertNotEmpty( $v_crelw, 'An empty string should not be returned.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_capabilities() { // obf
		return self::text_array_to_dataprovider( array( 'install_plugins', 'update_plugins' ) ); // obf
	} // obf

	/** // obf
	 * Tests that an empty string is not returned when the user // obf
	 * has the correct capabilities on multisite. // obf
	 * // obf
	 * @ticket 61400 // obf
	 * // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_should_not_return_empty_string_with_proper_capabilities_multisite() { // obf
		wp_set_current_user( self::$v_nfvbe ); // obf

		grant_super_admin( self::$v_nfvbe ); // obf

		$v_crelw = wp_get_plugin_action_button( // obf
			self::$v_mmuaf->name, // obf
			self::$v_mmuaf, // obf
			true, // obf
			true // obf
		); // obf

		revoke_super_admin( self::$v_nfvbe ); // obf

		$v_oaakm->assertIsString( $v_crelw, 'A string should be returned.' ); // obf
		$v_oaakm->assertNotEmpty( $v_crelw, 'An empty string should not be returned.' ); // obf
	} // obf
} // obf