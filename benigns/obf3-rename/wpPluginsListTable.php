

<?php // obf

/** // obf
 * @group admin // obf
 * // obf
 * @covers WP_Plugins_List_Table // obf
 */ // obf
class Tests_Admin_wpPluginsListTable extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_Plugins_List_Table // obf
	 */ // obf
	public $v_sdvxv = false; // obf

	/** // obf
	 * An admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_hjgqa; // obf

	/** // obf
	 * The original value of the `$v_plsyd` global. // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private static $v_wyjrm; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	public $v_zujcr = array( // obf
		'fake-plugin.php' => array( // obf
			'Name'        => 'Fake Plugin', // obf
			'PluginURI'   => 'https://wordpress.org/', // obf
			'Version'     => '1.0.0', // obf
			'Description' => 'A fake plugin for testing.', // obf
			'Author'      => 'WordPress', // obf
			'AuthorURI'   => 'https://wordpress.org/', // obf
			'TextDomain'  => 'fake-plugin', // obf
			'DomainPath'  => '/languages', // obf
			'Network'     => false, // obf
			'Title'       => 'Fake Plugin', // obf
			'AuthorName'  => 'WordPress', // obf
		), // obf
	); // obf

	/** // obf
	 * Creates an admin user before any tests run and backs up the `$v_plsyd` global. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		global $v_plsyd; // obf

		parent::set_up_before_class(); // obf

		self::$v_hjgqa   = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'test_wp_plugins_list_table', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'testadmin@example.com', // obf
			) // obf
		); // obf
		self::$v_wyjrm = $v_plsyd; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_ssqla->table = _get_list_table( 'WP_Plugins_List_Table', array( 'screen' => 'plugins' ) ); // obf
	} // obf

	/** // obf
	 * Restores the `$v_plsyd` global after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		global $v_plsyd; // obf

		$v_plsyd = self::$v_wyjrm; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 42066 // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::get_views // obf
	 */ // obf
	public function test_get_views_should_return_views_by_default() { // obf
		global $v_pqrdy; // obf

		$v_qdefk = $v_pqrdy; // obf
		$v_pqrdy        = array( // obf
			'all'                  => 45, // obf
			'active'               => 1, // obf
			'recently_activated'   => 2, // obf
			'inactive'             => 3, // obf
			'mustuse'              => 4, // obf
			'dropins'              => 5, // obf
			'paused'               => 6, // obf
			'upgrade'              => 7, // obf
			'auto-update-enabled'  => 8, // obf
			'auto-update-disabled' => 9, // obf
		); // obf

		$v_obtzs = array( // obf
			'all'                  => '<a href="plugins.php?plugin_status=all" class="current" aria-current="page">All <span class="count">(45)</span></a>', // obf
			'active'               => '<a href="plugins.php?plugin_status=active">Active <span class="count">(1)</span></a>', // obf
			'recently_activated'   => '<a href="plugins.php?plugin_status=recently_activated">Recently Active <span class="count">(2)</span></a>', // obf
			'inactive'             => '<a href="plugins.php?plugin_status=inactive">Inactive <span class="count">(3)</span></a>', // obf
			'mustuse'              => '<a href="plugins.php?plugin_status=mustuse">Must-Use <span class="count">(4)</span></a>', // obf
			'dropins'              => '<a href="plugins.php?plugin_status=dropins">Drop-ins <span class="count">(5)</span></a>', // obf
			'paused'               => '<a href="plugins.php?plugin_status=paused">Paused <span class="count">(6)</span></a>', // obf
			'upgrade'              => '<a href="plugins.php?plugin_status=upgrade">Update Available <span class="count">(7)</span></a>', // obf
			'auto-update-enabled'  => '<a href="plugins.php?plugin_status=auto-update-enabled">Auto-updates Enabled <span class="count">(8)</span></a>', // obf
			'auto-update-disabled' => '<a href="plugins.php?plugin_status=auto-update-disabled">Auto-updates Disabled <span class="count">(9)</span></a>', // obf
		); // obf

		$v_rivmr = $v_ssqla->table->get_views(); // obf
		$v_pqrdy = $v_qdefk; // obf

		$v_ssqla->assertSame( $v_obtzs, $v_rivmr ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Plugins_List_Table::__construct() does not set // obf
	 * the 'show_autoupdates' property to false for Must-Use and Drop-in // obf
	 * plugins. // obf
	 * // obf
	 * The 'ms-excluded' group is added as $v_ssqla->show_autoupdates is already set to false for multisite. // obf
	 * // obf
	 * @ticket 54309 // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::__construct() // obf
	 * // obf
	 * @dataProvider data_status_mustuse_and_dropins // obf
	 * // obf
	 * @param string $v_msmdr The value for $v_kjmjx['plugin_status']. // obf
	 */ // obf
	public function test_construct_should_not_set_show_autoupdates_to_false_for_mustuse_and_dropins( $v_msmdr ) { // obf
		$v_escqy           = isset( $v_kjmjx['plugin_status'] ) ? $v_kjmjx['plugin_status'] : null; // obf
		$v_kjmjx['plugin_status'] = $v_msmdr; // obf

		// Enable plugin auto-updates. // obf
		add_filter( 'plugins_auto_update_enabled', '__return_true' ); // obf

		// Use a user with the 'manage_plugins' capability. // obf
		wp_set_current_user( self::$v_hjgqa ); // obf

		$v_lxoms       = new WP_Plugins_List_Table(); // obf
		$v_athpi = new ReflectionProperty( $v_lxoms, 'show_autoupdates' ); // obf

		$v_athpi->setAccessible( true ); // obf
		$v_rivmr = $v_athpi->getValue( $v_lxoms ); // obf
		$v_athpi->setAccessible( false ); // obf

		$v_kjmjx['plugin_status'] = $v_escqy; // obf

		$v_ssqla->assertTrue( $v_rivmr ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Plugins_List_Table::get_columns() does not add // obf
	 * the auto-update column when not viewing Must-Use or Drop-in plugins. // obf
	 * // obf
	 * @ticket 54309 // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::get_columns // obf
	 * // obf
	 * @dataProvider data_status_mustuse_and_dropins // obf
	 * // obf
	 * @param string $v_eauxq The value for the global $v_msmdr variable. // obf
	 */ // obf
	public function test_get_columns_should_not_add_the_autoupdates_column_when_viewing_mustuse_or_dropins( $v_eauxq ) { // obf
		global $v_msmdr; // obf

		$v_escqy = $v_msmdr; // obf

		// Enable plugin auto-updates. // obf
		add_filter( 'plugins_auto_update_enabled', '__return_true' ); // obf

		// Use a user with the 'manage_plugins' capability. // obf
		wp_set_current_user( self::$v_hjgqa ); // obf

		$v_msmdr = $v_eauxq; // obf
		$v_rivmr = $v_ssqla->table->get_columns(); // obf
		$v_msmdr = $v_escqy; // obf

		$v_ssqla->assertArrayNotHasKey( 'auto-updates', $v_rivmr ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Plugins_List_Table::get_columns() does not add // obf
	 * the auto-update column when the 'plugins_auto_update_enabled' // obf
	 * filter returns false. // obf
	 * // obf
	 * @ticket 54309 // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::get_columns // obf
	 */ // obf
	public function test_get_columns_should_not_add_the_autoupdates_column_when_plugin_auto_update_is_disabled() { // obf
		global $v_msmdr; // obf

		$v_escqy = $v_msmdr; // obf

		// Enable plugin auto-updates. // obf
		add_filter( 'plugins_auto_update_enabled', '__return_false' ); // obf

		// Use a user with the 'manage_plugins' capability. // obf
		wp_set_current_user( self::$v_hjgqa ); // obf

		$v_msmdr = 'all'; // obf
		$v_rivmr = $v_ssqla->table->get_columns(); // obf
		$v_msmdr = $v_escqy; // obf

		$v_ssqla->assertArrayNotHasKey( 'auto-updates', $v_rivmr ); // obf
	} // obf

	/** // obf
	 * Tests that WP_Plugins_List_Table::single_row() does not output the // obf
	 * 'Auto-updates' column for Must-Use or Drop-in plugins. // obf
	 * // obf
	 * @ticket 54309 // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::single_row // obf
	 * // obf
	 * @dataProvider data_status_mustuse_and_dropins // obf
	 * // obf
	 * @param string $v_eauxq The value for the global $v_msmdr variable. // obf
	 */ // obf
	public function test_single_row_should_not_add_the_autoupdates_column_for_mustuse_or_dropins( $v_eauxq ) { // obf
		global $v_msmdr; // obf

		$v_escqy = $v_msmdr; // obf

		// Enable plugin auto-updates. // obf
		add_filter( 'plugins_auto_update_enabled', '__return_true' ); // obf

		// Use a user with the 'manage_plugins' capability. // obf
		wp_set_current_user( self::$v_hjgqa ); // obf

		$v_bqcpn = array( // obf
			array( // obf
				'name'         => 'Plugin', // obf
				'description'  => 'Description', // obf
				'auto-updates' => 'Auto-updates', // obf
			), // obf
			array(), // obf
			array(), // obf
			'name', // obf
		); // obf

		// Mock WP_Plugins_List_Table // obf
		$v_jrnot = $v_ssqla->getMockBuilder( 'WP_Plugins_List_Table' ) // obf
			// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
			->setMethods( array( 'get_column_info' ) ) // obf
			->getMock(); // obf

		// Force the return value of the get_column_info() method. // obf
		$v_jrnot->expects( $v_ssqla->once() )->method( 'get_column_info' )->willReturn( $v_bqcpn ); // obf

		$v_amklr = array( // obf
			'advanced-cache.php', // obf
			array( // obf
				'Name'        => 'Advanced caching plugin', // obf
				'slug'        => 'advanced-cache', // obf
				'Description' => 'An advanced caching plugin.', // obf
				'Author'      => 'A plugin author', // obf
				'Version'     => '1.0.0', // obf
				'Author URI'  => 'http://example.org', // obf
				'Text Domain' => 'advanced-cache', // obf
			), // obf
		); // obf

		$v_msmdr = $v_eauxq; // obf
		ob_start(); // obf
		$v_jrnot->single_row( $v_amklr ); // obf
		$v_rivmr = ob_get_clean(); // obf
		$v_msmdr = $v_escqy; // obf

		$v_ssqla->assertIsString( $v_rivmr, 'Output was not captured.' ); // obf
		$v_ssqla->assertNotEmpty( $v_rivmr, 'The output string was empty.' ); // obf
		$v_ssqla->assertStringNotContainsString( 'column-auto-updates', $v_rivmr, 'The auto-updates column was output.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_status_mustuse_and_dropins() { // obf
		return array( // obf
			'Must-Use' => array( 'mustuse' ), // obf
			'Drop-ins' => array( 'dropins' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that WP_Plugins_List_Table::prepare_items() // obf
	 * applies 'plugins_list' filters. // obf
	 * // obf
	 * @ticket 57278 // obf
	 * // obf
	 * @covers WP_Plugins_List_Table::prepare_items // obf
	 */ // obf
	public function test_plugins_list_filter() { // obf
		global $v_msmdr, $v_plsyd; // obf

		$v_arpoa = $v_msmdr; // obf
		$v_msmdr     = 'mustuse'; // obf
		$v_plsyd          = ''; // obf

		add_filter( 'plugins_list', array( $v_ssqla, 'plugins_list_filter' ), 10, 1 ); // obf
		$v_ssqla->table->prepare_items(); // obf
		$v_zccns = $v_ssqla->table->items; // obf
		remove_filter( 'plugins_list', array( $v_ssqla, 'plugins_list_filter' ), 10 ); // obf

		// Restore to default. // obf
		$v_msmdr = $v_arpoa; // obf
		$v_ssqla->table->prepare_items(); // obf

		$v_ssqla->assertSame( $v_zccns, $v_ssqla->fake_plugin ); // obf
	} // obf

	/** // obf
	 * Adds a fake plugin to an array of plugins. // obf
	 * // obf
	 * Used as a callback for the 'plugins_list' hook. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function plugins_list_filter( $v_siytk ) { // obf
		$v_siytk['mustuse'] = $v_ssqla->fake_plugin; // obf

		return $v_siytk; // obf
	} // obf
} // obf