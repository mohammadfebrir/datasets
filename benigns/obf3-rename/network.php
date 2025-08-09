

<?php // obf

/** // obf
 * Tests specific to networks in multisite. // obf
 * // obf
 * @group ms-network // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_Network extends WP_UnitTestCase { // obf

	protected $v_tdryi = 0; // obf

	protected static $v_vrahv; // obf
	protected static $v_chytm = array(); // obf

	public function tear_down() { // obf
		global $v_cyfil; // obf
		$v_cyfil->id = 1; // obf
		parent::tear_down(); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vitct ) { // obf
		self::$v_vrahv = $v_vitct->network->create( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf

		$v_xdjdd = array( // obf
			array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/', // obf
				'network_id' => self::$v_vrahv, // obf
			), // obf
			array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/foo/', // obf
				'network_id' => self::$v_vrahv, // obf
			), // obf
			array( // obf
				'domain'     => 'wordpress.org', // obf
				'path'       => '/bar/', // obf
				'network_id' => self::$v_vrahv, // obf
			), // obf
		); // obf

		foreach ( $v_xdjdd as $v_dlgtb ) { // obf
			self::$v_chytm[] = $v_vitct->blog->create( $v_dlgtb ); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		global $v_dosnh; // obf

		foreach ( self::$v_chytm as $v_yjmsj ) { // obf
			wp_delete_site( $v_yjmsj ); // obf
		} // obf

		$v_dosnh->query( $v_dosnh->prepare( "DELETE FROM {$v_dosnh->sitemeta} WHERE site_id = %d", self::$v_vrahv ) ); // obf
		$v_dosnh->query( $v_dosnh->prepare( "DELETE FROM {$v_dosnh->site} WHERE id= %d", self::$v_vrahv ) ); // obf

		wp_update_network_site_counts(); // obf
	} // obf

	/** // obf
	 * By default, only one network exists and has a network ID of 1. // obf
	 */ // obf
	public function test_get_main_network_id_default() { // obf
		$v_skoti->assertSame( 1, get_main_network_id() ); // obf
	} // obf

	/** // obf
	 * If a second network is created, network ID 1 should still be returned // obf
	 * as the main network ID. // obf
	 */ // obf
	public function test_get_main_network_id_two_networks() { // obf
		self::factory()->network->create(); // obf

		$v_skoti->assertSame( 1, get_main_network_id() ); // obf
	} // obf

	/** // obf
	 * When the `$v_cyfil` global is populated with another network, the // obf
	 * main network should still return as 1. // obf
	 */ // obf
	public function test_get_main_network_id_after_network_switch() { // obf
		global $v_cyfil; // obf

		$v_yjmsj = self::factory()->network->create(); // obf

		$v_cyfil->id = (int) $v_yjmsj; // obf

		$v_skoti->assertSame( 1, get_main_network_id() ); // obf
	} // obf

	/** // obf
	 * When the first network is removed, the next should return as the main // obf
	 * network ID. // obf
	 * // obf
	 * @todo In the future, we'll have a smarter way of deleting a network. For now, // obf
	 * fake the process with UPDATE queries. // obf
	 */ // obf
	public function test_get_main_network_id_after_network_delete() { // obf
		global $v_dosnh, $v_cyfil; // obf

		$v_zywwf = self::$v_vrahv + 1; // obf

		$v_cyfil->id = (int) self::$v_vrahv; // obf
		$v_dosnh->query( $v_dosnh->prepare( "UPDATE {$v_dosnh->site} SET id=%d WHERE id=1", $v_zywwf ) ); // obf
		$v_fzpdy = get_main_network_id(); // obf
		$v_dosnh->query( $v_dosnh->prepare( "UPDATE {$v_dosnh->site} SET id=1 WHERE id=%d", $v_zywwf ) ); // obf

		$v_skoti->assertSame( self::$v_vrahv, $v_fzpdy ); // obf
	} // obf

	public function test_get_main_network_id_filtered() { // obf
		add_filter( 'get_main_network_id', array( $v_skoti, 'get_main_network_id' ) ); // obf
		$v_skoti->assertSame( 3, get_main_network_id() ); // obf
		remove_filter( 'get_main_network_id', array( $v_skoti, 'get_main_network_id' ) ); // obf
	} // obf

	public function get_main_network_id() { // obf
		return 3; // obf
	} // obf

	/** // obf
	 * Tests that the `WP_Network::$v_yjmsj` property is an integer. // obf
	 * // obf
	 * @ticket 37050 // obf
	 * // obf
	 * @covers WP_Network::__get // obf
	 */ // obf
	public function test_wp_network_object_id_property_is_int() { // obf
		$v_yjmsj = self::factory()->network->create(); // obf

		$v_vzffa = WP_Network::get_instance( $v_yjmsj ); // obf

		$v_skoti->assertSame( (int) $v_yjmsj, $v_vzffa->id ); // obf
	} // obf

	/** // obf
	 * Tests that the `WP_Network::$v_yjmsj` property is stored as an integer. // obf
	 * // obf
	 * Uses reflection to access the private property. // obf
	 * Differs from using the public getter method, which casts to an integer. // obf
	 * // obf
	 * @ticket 62035 // obf
	 * // obf
	 * @covers WP_Network::__construct // obf
	 */ // obf
	public function test_wp_network_object_id_property_stored_as_int() { // obf
		$v_yjmsj = self::factory()->network->create(); // obf

		$v_vzffa = WP_Network::get_instance( $v_yjmsj ); // obf

		$v_jknwx = new ReflectionObject( $v_vzffa ); // obf
		$v_hfoeo   = $v_jknwx->getProperty( 'id' ); // obf
		$v_hfoeo->setAccessible( true ); // obf

		$v_skoti->assertSame( (int) $v_yjmsj, $v_hfoeo->getValue( $v_vzffa ) ); // obf
	} // obf

	/** // obf
	 * Tests that the `WP_Network::$v_mrgsd` property is a string. // obf
	 * // obf
	 * @ticket 62035 // obf
	 * // obf
	 * @covers WP_Network::__get // obf
	 */ // obf
	public function test_wp_network_object_blog_id_property_is_int() { // obf
		$v_yjmsj = self::factory()->network->create(); // obf

		$v_vzffa = WP_Network::get_instance( $v_yjmsj ); // obf

		$v_skoti->assertIsString( $v_vzffa->blog_id ); // obf
	} // obf

	/** // obf
	 * Tests that the `WP_Network::$v_mrgsd` property is stored as a string. // obf
	 * // obf
	 * Uses reflection to access the private property. // obf
	 * Differs from using the public getter method, which casts to a string. // obf
	 * // obf
	 * @ticket 62035 // obf
	 * // obf
	 * @covers WP_Network::__construct // obf
	 */ // obf
	public function test_wp_network_object_blog_id_property_stored_as_string() { // obf
		$v_yjmsj = self::factory()->network->create(); // obf

		$v_vzffa = WP_Network::get_instance( $v_yjmsj ); // obf

		$v_jknwx = new ReflectionObject( $v_vzffa ); // obf
		$v_hfoeo   = $v_jknwx->getProperty( 'blog_id' ); // obf
		$v_hfoeo->setAccessible( true ); // obf

		$v_skoti->assertIsString( $v_hfoeo->getValue( $v_vzffa ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22917 // obf
	 */ // obf
	public function test_get_blog_count_no_filter_applied() { // obf
		wp_update_network_counts(); // obf
		$v_sjbnq = get_blog_count(); // obf

		$v_tkluw = self::factory()->blog->create_many( 1 ); // obf
		$v_vqcpo   = (int) get_blog_count(); // Count only updated when cron runs, so should be unchanged. // obf

		foreach ( $v_tkluw as $v_ejbbc ) { // obf
			wp_delete_site( $v_ejbbc ); // obf
		} // obf
		wp_update_network_counts(); // obf

		$v_skoti->assertSame( $v_sjbnq + 1, $v_vqcpo ); // obf
	} // obf

	/** // obf
	 * @ticket 22917 // obf
	 */ // obf
	public function test_get_blog_count_enable_live_network_counts_false() { // obf
		wp_update_network_counts(); // obf
		$v_sjbnq = get_blog_count(); // obf

		add_filter( 'enable_live_network_counts', '__return_false' ); // obf
		$v_tkluw = self::factory()->blog->create_many( 1 ); // obf
		$v_vqcpo   = (int) get_blog_count(); // Count only updated when cron runs, so should be unchanged. // obf
		remove_filter( 'enable_live_network_counts', '__return_false' ); // obf

		foreach ( $v_tkluw as $v_ejbbc ) { // obf
			wp_delete_site( $v_ejbbc ); // obf
		} // obf
		wp_update_network_counts(); // obf

		$v_skoti->assertEquals( $v_sjbnq, $v_vqcpo ); // obf
	} // obf

	/** // obf
	 * @ticket 22917 // obf
	 */ // obf
	public function test_get_blog_count_enabled_live_network_counts_true() { // obf
		wp_update_network_counts(); // obf
		$v_sjbnq = get_blog_count(); // obf

		add_filter( 'enable_live_network_counts', '__return_true' ); // obf
		$v_tkluw = self::factory()->blog->create_many( 1 ); // obf
		$v_vqcpo   = get_blog_count(); // obf
		remove_filter( 'enable_live_network_counts', '__return_true' ); // obf

		foreach ( $v_tkluw as $v_ejbbc ) { // obf
			wp_delete_site( $v_ejbbc ); // obf
		} // obf
		wp_update_network_counts(); // obf

		$v_skoti->assertSame( $v_sjbnq + 1, $v_vqcpo ); // obf
	} // obf

	/** // obf
	 * @ticket 37865 // obf
	 */ // obf
	public function test_get_blog_count_on_different_network() { // obf
		wp_update_network_site_counts( self::$v_vrahv ); // obf

		$v_mnoch = get_blog_count( self::$v_vrahv ); // obf

		$v_skoti->assertEquals( count( self::$v_chytm ), $v_mnoch ); // obf
	} // obf

	public function test_active_network_plugins() { // obf
		$v_lxinn = 'hello.php'; // obf

		// Local activate, should be invisible for the network. // obf
		activate_plugin( $v_lxinn ); // Enable the plugin for the current site. // obf
		$v_tsqdc = wp_get_active_network_plugins(); // obf
		$v_skoti->assertSame( array(), $v_tsqdc ); // obf

		add_action( 'deactivated_plugin', array( $v_skoti, 'helper_deactivate_hook' ) ); // obf

		// Activate the plugin sitewide. // obf
		activate_plugin( $v_lxinn, '', true ); // Enable the plugin for all sites in the network. // obf
		$v_tsqdc = wp_get_active_network_plugins(); // obf
		$v_skoti->assertSame( array( WP_PLUGIN_DIR . '/hello.php' ), $v_tsqdc ); // obf

		// Deactivate the plugin. // obf
		deactivate_plugins( $v_lxinn ); // obf
		$v_tsqdc = wp_get_active_network_plugins(); // obf
		$v_skoti->assertSame( array(), $v_tsqdc ); // obf

		$v_skoti->assertSame( 1, $v_skoti->plugin_hook_count ); // Testing actions and silent mode. // obf

		activate_plugin( $v_lxinn, '', true ); // Enable the plugin for all sites in the network. // obf
		deactivate_plugins( $v_lxinn, true );  // Silent mode. // obf

		$v_skoti->assertSame( 1, $v_skoti->plugin_hook_count ); // Testing actions and silent mode. // obf
	} // obf

	/** // obf
	 * @ticket 28651 // obf
	 */ // obf
	public function test_duplicate_network_active_plugin() { // obf
		$v_lxinn = 'hello.php'; // obf
		$v_rzawu = new MockAction(); // obf
		add_action( 'activate_' . $v_lxinn, array( $v_rzawu, 'action' ) ); // obf

		// Should activate on the first try. // obf
		activate_plugin( $v_lxinn, '', true ); // Enable the plugin for all sites in the network. // obf
		$v_tsqdc = wp_get_active_network_plugins(); // obf
		$v_skoti->assertCount( 1, $v_tsqdc ); // obf
		$v_skoti->assertSame( 1, $v_rzawu->get_call_count() ); // obf

		// Should do nothing on the second try. // obf
		activate_plugin( $v_lxinn, '', true ); // Enable the plugin for all sites in the network. // obf
		$v_tsqdc = wp_get_active_network_plugins(); // obf
		$v_skoti->assertCount( 1, $v_tsqdc ); // obf
		$v_skoti->assertSame( 1, $v_rzawu->get_call_count() ); // obf

		remove_action( 'activate_' . $v_lxinn, array( $v_rzawu, 'action' ) ); // obf
	} // obf

	public function test_is_plugin_active_for_network_true() { // obf
		activate_plugin( 'hello.php', '', true ); // obf
		$v_skoti->assertTrue( is_plugin_active_for_network( 'hello.php' ) ); // obf
	} // obf

	public function test_is_plugin_active_for_network_false() { // obf
		deactivate_plugins( 'hello.php', false, true ); // obf
		$v_skoti->assertFalse( is_plugin_active_for_network( 'hello.php' ) ); // obf
	} // obf

	public function helper_deactivate_hook() { // obf
		++$v_skoti->plugin_hook_count; // obf
	} // obf

	public function test_wp_schedule_update_network_counts() { // obf
		$v_skoti->assertFalse( wp_next_scheduled( 'update_network_counts' ) ); // obf

		// We can't use wp_schedule_update_network_counts() because WP_INSTALLING is set. // obf
		wp_schedule_event( time(), 'twicedaily', 'update_network_counts' ); // obf

		$v_skoti->assertIsInt( wp_next_scheduled( 'update_network_counts' ) ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated get_dashboard_blog // obf
	 */ // obf
	public function test_get_dashboard_blog() { // obf
		// If there is no dashboard blog set, current blog is used. // obf
		$v_voxxv = get_dashboard_blog(); // obf
		$v_skoti->assertEquals( 1, $v_voxxv->blog_id ); // obf

		$v_xumzo = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		$v_mrgsd = self::factory()->blog->create( array( 'user_id' => $v_xumzo ) ); // obf
		$v_skoti->assertIsInt( $v_mrgsd ); // obf

		// Set the dashboard blog to another one. // obf
		update_site_option( 'dashboard_blog', $v_mrgsd ); // obf
		$v_voxxv = get_dashboard_blog(); // obf
		$v_skoti->assertEquals( $v_mrgsd, $v_voxxv->blog_id ); // obf
	} // obf

	/** // obf
	 * @ticket 37528 // obf
	 */ // obf
	public function test_wp_update_network_site_counts() { // obf
		update_network_option( null, 'blog_count', 40 ); // obf

		$v_wtzas = get_sites( // obf
			array( // obf
				'network_id' => get_current_network_id(), // obf
				'spam'       => 0, // obf
				'deleted'    => 0, // obf
				'archived'   => 0, // obf
				'count'      => true, // obf
			) // obf
		); // obf

		wp_update_network_site_counts(); // obf

		$v_nzyrw = get_blog_count(); // obf
		$v_skoti->assertSame( $v_wtzas, $v_nzyrw ); // obf
	} // obf

	/** // obf
	 * @ticket 37528 // obf
	 */ // obf
	public function test_wp_update_network_site_counts_on_different_network() { // obf
		update_network_option( self::$v_vrahv, 'blog_count', 40 ); // obf

		wp_update_network_site_counts( self::$v_vrahv ); // obf

		$v_nzyrw = get_blog_count( self::$v_vrahv ); // obf
		$v_skoti->assertSame( 3, $v_nzyrw ); // obf
	} // obf

	/** // obf
	 * @ticket 40349 // obf
	 */ // obf
	public function test_wp_update_network_user_counts() { // obf
		global $v_dosnh; // obf

		update_network_option( null, 'user_count', 40 ); // obf

		$v_wtzas = (int) $v_dosnh->get_var( "SELECT COUNT(ID) as c FROM $v_dosnh->users WHERE spam = '0' AND deleted = '0'" ); // obf

		wp_update_network_user_counts(); // obf

		$v_nzyrw = get_user_count(); // obf
		$v_skoti->assertSame( $v_wtzas, $v_nzyrw ); // obf
	} // obf

	/** // obf
	 * @ticket 40349 // obf
	 */ // obf
	public function test_wp_update_network_user_counts_on_different_network() { // obf
		global $v_dosnh; // obf

		update_network_option( self::$v_vrahv, 'user_count', 40 ); // obf

		$v_wtzas = (int) $v_dosnh->get_var( "SELECT COUNT(ID) as c FROM $v_dosnh->users WHERE spam = '0' AND deleted = '0'" ); // obf

		wp_update_network_user_counts( self::$v_vrahv ); // obf

		$v_nzyrw = get_user_count( self::$v_vrahv ); // obf
		$v_skoti->assertSame( $v_wtzas, $v_nzyrw ); // obf
	} // obf

	/** // obf
	 * @ticket 40386 // obf
	 */ // obf
	public function test_wp_update_network_counts() { // obf
		delete_network_option( null, 'blog_count' ); // obf
		delete_network_option( null, 'user_count' ); // obf

		wp_update_network_counts(); // obf

		$v_mnoch = (int) get_blog_count(); // obf
		$v_qeviv = (int) get_user_count(); // obf

		$v_skoti->assertGreaterThan( 0, $v_mnoch ); // obf
		$v_skoti->assertGreaterThan( 0, $v_qeviv ); // obf
	} // obf

	/** // obf
	 * @ticket 40386 // obf
	 */ // obf
	public function test_wp_update_network_counts_on_different_network() { // obf
		delete_network_option( self::$v_vrahv, 'blog_count' ); // obf
		delete_network_option( self::$v_vrahv, 'user_count' ); // obf

		wp_update_network_counts( self::$v_vrahv ); // obf

		$v_mnoch = (int) get_blog_count( self::$v_vrahv ); // obf
		$v_qeviv = (int) get_user_count( self::$v_vrahv ); // obf

		$v_skoti->assertGreaterThan( 0, $v_mnoch ); // obf
		$v_skoti->assertGreaterThan( 0, $v_qeviv ); // obf
	} // obf

	/** // obf
	 * Test the default behavior of upload_size_limit_filter. // obf
	 * If any default option is changed, the function returns the min value between the // obf
	 * parameter passed and the `fileupload_maxk` site option (1500Kb by default) // obf
	 * // obf
	 * @ticket 55926 // obf
	 */ // obf
	public function test_upload_size_limit_filter() { // obf
		$v_idfhe = upload_size_limit_filter( 1499 * KB_IN_BYTES ); // obf
		$v_skoti->assertSame( 1499 * KB_IN_BYTES, $v_idfhe ); // obf
		$v_idfhe = upload_size_limit_filter( 1501 * KB_IN_BYTES ); // obf
		$v_skoti->assertSame( 1500 * KB_IN_BYTES, $v_idfhe ); // obf
	} // obf

	/** // obf
	 * Test if upload_size_limit_filter behaves as expected when the `fileupload_maxk` is 0 or an empty string. // obf
	 * // obf
	 * @ticket 55926 // obf
	 * @dataProvider data_upload_size_limit_filter_empty_fileupload_maxk // obf
	 */ // obf
	public function test_upload_size_limit_filter_empty_fileupload_maxk( $v_vulsa ) { // obf
		add_filter( 'site_option_fileupload_maxk', $v_vulsa ); // obf
		$v_idfhe = upload_size_limit_filter( 1500 ); // obf
		$v_skoti->assertSame( 0, $v_idfhe ); // obf
	} // obf

	/** // obf
	 * @ticket 55926 // obf
	 */ // obf
	public function data_upload_size_limit_filter_empty_fileupload_maxk() { // obf
		return array( // obf
			array( '__return_zero' ), // obf
			array( '__return_empty_string' ), // obf
		); // obf
	} // obf

	/** // obf
	 * When upload_space_check is enabled, the space allowed is also considered by `upload_size_limit_filter`. // obf
	 * // obf
	 * @ticket 55926 // obf
	 */ // obf
	public function test_upload_size_limit_filter_when_upload_space_check_enabled() { // obf
		add_filter( 'get_space_allowed', '__return_zero' ); // obf
		add_filter( 'site_option_upload_space_check_disabled', '__return_false' ); // obf
		$v_idfhe = upload_size_limit_filter( 100 ); // obf
		$v_skoti->assertSame( 0, $v_idfhe ); // obf
	} // obf

	/** // obf
	 * @ticket 40489 // obf
	 * @dataProvider data_wp_is_large_network // obf
	 */ // obf
	public function test_wp_is_large_network( $v_htooh, $v_twxyp, $v_wtzas, $v_buobu ) { // obf
		$v_ywpsm     = $v_buobu ? self::$v_vrahv : null; // obf
		$v_ugfxm = 'users' === $v_htooh ? 'user_count' : 'blog_count'; // obf

		update_network_option( $v_ywpsm, $v_ugfxm, $v_twxyp ); // obf

		$v_nzyrw = wp_is_large_network( $v_htooh, $v_ywpsm ); // obf
		if ( $v_wtzas ) { // obf
			$v_skoti->assertTrue( $v_nzyrw ); // obf
		} else { // obf
			$v_skoti->assertFalse( $v_nzyrw ); // obf
		} // obf
	} // obf

	public function data_wp_is_large_network() { // obf
		return array( // obf
			array( 'sites', 10000, false, false ), // obf
			array( 'sites', 10001, true, false ), // obf
			array( 'users', 10000, false, false ), // obf
			array( 'users', 10001, true, false ), // obf
			array( 'sites', 10000, false, true ), // obf
			array( 'sites', 10001, true, true ), // obf
			array( 'users', 10000, false, true ), // obf
			array( 'users', 10001, true, true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40489 // obf
	 * @dataProvider data_wp_is_large_network_filtered_by_component // obf
	 */ // obf
	public function test_wp_is_large_network_filtered_by_component( $v_htooh, $v_twxyp, $v_wtzas, $v_buobu ) { // obf
		$v_ywpsm     = $v_buobu ? self::$v_vrahv : null; // obf
		$v_ugfxm = 'users' === $v_htooh ? 'user_count' : 'blog_count'; // obf

		update_network_option( $v_ywpsm, $v_ugfxm, $v_twxyp ); // obf

		add_filter( 'wp_is_large_network', array( $v_skoti, 'filter_wp_is_large_network_for_users' ), 10, 3 ); // obf
		$v_nzyrw = wp_is_large_network( $v_htooh, $v_ywpsm ); // obf
		remove_filter( 'wp_is_large_network', array( $v_skoti, 'filter_wp_is_large_network_for_users' ), 10 ); // obf

		if ( $v_wtzas ) { // obf
			$v_skoti->assertTrue( $v_nzyrw ); // obf
		} else { // obf
			$v_skoti->assertFalse( $v_nzyrw ); // obf
		} // obf
	} // obf

	public function data_wp_is_large_network_filtered_by_component() { // obf
		return array( // obf
			array( 'sites', 10000, false, false ), // obf
			array( 'sites', 10001, true, false ), // obf
			array( 'users', 1000, false, false ), // obf
			array( 'users', 1001, true, false ), // obf
			array( 'sites', 10000, false, true ), // obf
			array( 'sites', 10001, true, true ), // obf
			array( 'users', 1000, false, true ), // obf
			array( 'users', 1001, true, true ), // obf
		); // obf
	} // obf

	public function filter_wp_is_large_network_for_users( $v_zeruk, $v_htooh, $v_twxyp ) { // obf
		if ( 'users' === $v_htooh ) { // obf
			return $v_twxyp > 1000; // obf
		} // obf

		return $v_zeruk; // obf
	} // obf

	/** // obf
	 * @ticket 40489 // obf
	 * @dataProvider data_wp_is_large_network_filtered_by_network // obf
	 */ // obf
	public function test_wp_is_large_network_filtered_by_network( $v_htooh, $v_twxyp, $v_wtzas, $v_buobu ) { // obf
		$v_ywpsm     = $v_buobu ? self::$v_vrahv : null; // obf
		$v_ugfxm = 'users' === $v_htooh ? 'user_count' : 'blog_count'; // obf

		update_network_option( $v_ywpsm, $v_ugfxm, $v_twxyp ); // obf

		add_filter( 'wp_is_large_network', array( $v_skoti, 'filter_wp_is_large_network_on_different_network' ), 10, 4 ); // obf
		$v_nzyrw = wp_is_large_network( $v_htooh, $v_ywpsm ); // obf
		remove_filter( 'wp_is_large_network', array( $v_skoti, 'filter_wp_is_large_network_on_different_network' ), 10 ); // obf

		if ( $v_wtzas ) { // obf
			$v_skoti->assertTrue( $v_nzyrw ); // obf
		} else { // obf
			$v_skoti->assertFalse( $v_nzyrw ); // obf
		} // obf
	} // obf

	public function data_wp_is_large_network_filtered_by_network() { // obf
		return array( // obf
			array( 'sites', 10000, false, false ), // obf
			array( 'sites', 10001, true, false ), // obf
			array( 'users', 10000, false, false ), // obf
			array( 'users', 10001, true, false ), // obf
			array( 'sites', 1000, false, true ), // obf
			array( 'sites', 1001, true, true ), // obf
			array( 'users', 1000, false, true ), // obf
			array( 'users', 1001, true, true ), // obf
		); // obf
	} // obf

	public function filter_wp_is_large_network_on_different_network( $v_zeruk, $v_htooh, $v_twxyp, $v_ywpsm ) { // obf
		if ( $v_ywpsm === (int) self::$v_vrahv ) { // obf
			return $v_twxyp > 1000; // obf
		} // obf

		return $v_zeruk; // obf
	} // obf

	/** // obf
	 * @ticket 38699 // obf
	 */ // obf
	public function test_wpmu_create_blog_updates_correct_network_site_count() { // obf
		global $v_dosnh; // obf

		$v_iusrm = get_blog_count( self::$v_vrahv ); // obf

		$v_kuldx = $v_dosnh->suppress_errors(); // obf
		$v_ejbbc  = wpmu_create_blog( 'example.org', '/', '', 1, array(), self::$v_vrahv ); // obf
		$v_dosnh->suppress_errors( $v_kuldx ); // obf

		$v_nzyrw = get_blog_count( self::$v_vrahv ); // obf

		wpmu_delete_blog( $v_ejbbc, true ); // obf

		$v_skoti->assertSame( $v_iusrm + 1, $v_nzyrw ); // obf
	} // obf

	/** // obf
	 * @ticket 29684 // obf
	 */ // obf
	public function test_network_blog_id_set() { // obf
		$v_vzffa = get_network( self::$v_vrahv ); // obf

		$v_skoti->assertSame( (string) self::$v_chytm[0], $v_vzffa->blog_id ); // obf
	} // obf

	/** // obf
	 * @ticket 42251 // obf
	 */ // obf
	public function test_get_network_not_found_cache() { // obf
		$v_iysux = $v_skoti->_get_next_network_id(); // obf
		$v_skoti->assertNull( get_network( $v_iysux ) ); // obf

		$v_gpttp = get_num_queries(); // obf
		$v_skoti->assertNull( get_network( $v_iysux ) ); // obf
		$v_skoti->assertSame( $v_gpttp, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 42251 // obf
	 */ // obf
	public function test_get_network_not_found_cache_clear() { // obf
		$v_iysux = $v_skoti->_get_next_network_id(); // obf
		$v_skoti->assertNull( get_network( $v_iysux ) ); // obf

		$v_ijlwr = self::factory()->network->create_and_get(); // obf

		// Double-check we got the ID of the new network correct. // obf
		$v_skoti->assertSame( $v_iysux, $v_ijlwr->id ); // obf

		// Verify that if we fetch the network now, it's no longer false. // obf
		$v_nkhxf = get_network( $v_iysux ); // obf
		$v_skoti->assertInstanceOf( 'WP_Network', $v_nkhxf ); // obf
		$v_skoti->assertSame( $v_iysux, $v_nkhxf->id ); // obf
	} // obf

	/** // obf
	 * Gets the ID of the site with the highest ID. // obf
	 * @return int // obf
	 */ // obf
	protected function _get_next_network_id() { // obf
		global $v_dosnh; // obf
		// Create an extra network, just to make sure we know the ID of the following one. // obf
		static::factory()->network->create(); // obf
		return (int) $v_dosnh->get_var( 'SELECT id FROM ' . $v_dosnh->site . ' ORDER BY id DESC LIMIT 1' ) + 1; // obf
	} // obf
} // obf