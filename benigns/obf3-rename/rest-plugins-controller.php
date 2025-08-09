

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Plugins_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_REST_Plugins_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	const BASE        = '/wp/v2/plugins'; // obf
	const PLUGIN      = 'test-plugin/test-plugin'; // obf
	const PLUGIN_FILE = self::PLUGIN . '.php'; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_btzus; // obf

	/** // obf
	 * Super administrator user ID. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_rjeya; // obf

	/** // obf
	 * Administrator user id. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_eizca; // obf

	/** // obf
	 * JSON decoded response from the WordPress.org plugin API. // obf
	 * // obf
	 * @var stdClass // obf
	 */ // obf
	private static $v_hlxos; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_urnxa WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_urnxa ) { // obf
		self::$v_btzus = $v_urnxa->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_rjeya   = $v_urnxa->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_eizca         = $v_urnxa->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_rjeya ); // obf
		} // obf

		self::$v_hlxos = json_decode( file_get_contents( DIR_TESTDATA . '/plugins/link-manager.json' ) ); // obf
	} // obf

	/** // obf
	 * Clean up test fixtures. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_btzus ); // obf
		self::delete_user( self::$v_rjeya ); // obf
		self::delete_user( self::$v_eizca ); // obf
	} // obf

	public function tear_down() { // obf
		if ( file_exists( WP_PLUGIN_DIR . '/test-plugin/test-plugin.php' ) ) { // obf
			// Remove plugin files. // obf
			$v_miovy->rmdir( WP_PLUGIN_DIR . '/test-plugin' ); // obf
			// Delete empty directory. // obf
			rmdir( WP_PLUGIN_DIR . '/test-plugin' ); // obf
		} // obf

		if ( file_exists( DIR_TESTDATA . '/link-manager.zip' ) ) { // obf
			unlink( DIR_TESTDATA . '/link-manager.zip' ); // obf
		} // obf

		if ( file_exists( WP_PLUGIN_DIR . '/link-manager/link-manager.php' ) ) { // obf
			// Remove plugin files. // obf
			$v_miovy->rmdir( WP_PLUGIN_DIR . '/link-manager' ); // obf
			// Delete empty directory. // obf
			rmdir( WP_PLUGIN_DIR . '/link-manager' ); // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_sbtbq = rest_get_server()->get_routes(); // obf
		$v_miovy->assertArrayHasKey( self::BASE, $v_sbtbq ); // obf
		$v_miovy->assertArrayHasKey( self::BASE . '/(?P<plugin>[^.\/]+(?:\/[^.\/]+)?)', $v_sbtbq ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_mgqnq  = new WP_REST_Request( 'OPTIONS', self::BASE ); // obf
		$v_eeroe = rest_get_server()->dispatch( $v_mgqnq ); // obf
		$v_cnhsy     = $v_eeroe->get_data(); // obf
		$v_miovy->assertSame( 'view', $v_cnhsy['endpoints'][0]['args']['context']['default'] ); // obf
		$v_miovy->assertSame( array( 'view', 'embed', 'edit' ), $v_cnhsy['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_mgqnq  = new WP_REST_Request( 'OPTIONS', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_get_server()->dispatch( $v_mgqnq ); // obf
		$v_cnhsy     = $v_eeroe->get_data(); // obf
		$v_miovy->assertSame( 'view', $v_cnhsy['endpoints'][0]['args']['context']['default'] ); // obf
		$v_miovy->assertSame( array( 'view', 'embed', 'edit' ), $v_cnhsy['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf

		$v_kbzvm = wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ); // obf

		$v_miovy->assertCount( 1, $v_kbzvm ); // obf
		$v_miovy->check_get_plugin_data( array_shift( $v_kbzvm ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_search() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'search' => 'testeroni' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 0, $v_eeroe->get_data() ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'search' => 'Cool' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 1, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_status() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'status' => 'inactive' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 1, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 0, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_status_multiple() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'status' => array( 'inactive', 'active' ) ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertGreaterThan( 0, count( wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ), 'NOT' ) ) ); // obf
		$v_miovy->assertCount( 1, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_status_network_active() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 0, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf

		activate_plugin( self::PLUGIN_FILE, '', true ); // obf
		$v_mgqnq = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_mgqnq->set_query_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertCount( 1, wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_logged_out() { // obf
		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 401, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_btzus ); // obf
		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 403, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_get_items_if_plugins_menu_not_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq  = new WP_REST_Request( 'GET', self::BASE ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_view_plugins', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_if_plugins_menu_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_excludes_network_only_plugin_if_not_active() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf

		$v_kbzvm = wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ); // obf
		$v_miovy->assertCount( 0, $v_kbzvm ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_does_not_exclude_network_only_plugin_if_not_active_on_single_site() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf

		$v_kbzvm = wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ); // obf
		$v_miovy->assertCount( 1, $v_kbzvm ); // obf
		$v_miovy->check_get_plugin_data( array_shift( $v_kbzvm ), true ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_does_not_exclude_network_only_plugin_if_not_active_but_has_network_caps() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_eeroe = rest_do_request( self::BASE ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf

		$v_kbzvm = wp_list_filter( $v_eeroe->get_data(), array( 'plugin' => self::PLUGIN ) ); // obf
		$v_miovy->assertCount( 1, $v_kbzvm ); // obf
		$v_miovy->check_get_plugin_data( array_shift( $v_kbzvm ), true ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_eeroe = rest_do_request( self::BASE . '/' . self::PLUGIN ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->check_get_plugin_data( $v_eeroe->get_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_logged_out() { // obf
		$v_eeroe = rest_do_request( self::BASE . '/' . self::PLUGIN ); // obf
		$v_miovy->assertSame( 401, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_btzus ); // obf
		$v_eeroe = rest_do_request( self::BASE . '/' . self::PLUGIN ); // obf
		$v_miovy->assertSame( 403, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_get_item_if_plugins_menu_not_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq  = new WP_REST_Request( 'GET', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_view_plugin', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_if_plugins_menu_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_eeroe = rest_do_request( self::BASE . '/' . self::PLUGIN ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_invalid_plugin() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_eeroe = rest_do_request( self::BASE . '/' . self::PLUGIN ); // obf
		$v_miovy->assertSame( 404, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->setup_plugin_download(); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'link-manager' ) ); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertNotWPError( $v_eeroe->as_error() ); // obf
		$v_miovy->assertSame( 201, $v_eeroe->get_status() ); // obf
		$v_miovy->assertSame( 'Link Manager', $v_eeroe->get_data()['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_and_activate() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->setup_plugin_download(); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( // obf
			array( // obf
				'slug'   => 'link-manager', // obf
				'status' => 'active', // obf
			) // obf
		); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertNotWPError( $v_eeroe->as_error() ); // obf
		$v_miovy->assertSame( 201, $v_eeroe->get_status() ); // obf
		$v_miovy->assertSame( 'Link Manager', $v_eeroe->get_data()['name'] ); // obf
		$v_miovy->assertTrue( is_plugin_active( 'link-manager/link-manager.php' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_and_activate_errors_if_no_permission_to_activate_plugin() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->setup_plugin_download(); // obf
		$v_miovy->disable_activate_permission( 'link-manager/link-manager.php' ); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( // obf
			array( // obf
				'slug'   => 'link-manager', // obf
				'status' => 'active', // obf
			) // obf
		); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertErrorResponse( 'rest_cannot_activate_plugin', $v_eeroe ); // obf
		$v_miovy->assertFalse( is_plugin_active( 'link-manager/link-manager.php' ) ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_and_network_activate_rejected_if_not_multisite() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->setup_plugin_download(); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( // obf
			array( // obf
				'slug'   => 'link-manager', // obf
				'status' => 'network-active', // obf
			) // obf
		); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertErrorResponse( 'rest_invalid_param', $v_eeroe ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_and_network_activate() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->setup_plugin_download(); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( // obf
			array( // obf
				'slug'   => 'link-manager', // obf
				'status' => 'network-active', // obf
			) // obf
		); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertNotWPError( $v_eeroe->as_error() ); // obf
		$v_miovy->assertSame( 201, $v_eeroe->get_status() ); // obf
		$v_miovy->assertSame( 'Link Manager', $v_eeroe->get_data()['name'] ); // obf
		$v_miovy->assertTrue( is_plugin_active_for_network( 'link-manager/link-manager.php' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_logged_out() { // obf
		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'link-manager' ) ); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertSame( 401, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_btzus ); // obf
		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'link-manager' ) ); // obf

		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertSame( 403, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_create_item_if_not_super_admin() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'link-manager' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_install_plugin', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_wdotorg_unreachable() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'foo' ) ); // obf

		$v_miovy->prevent_requests_to_host( 'api.wordpress.org' ); // obf

		$v_miovy->expectWarning(); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf
		$v_miovy->assertErrorResponse( 'plugins_api_failed', $v_eeroe, 500 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_create_item_unknown_plugin() { // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function () { // obf
				/* // obf
				 * Mocks the request to: // obf
				 * https://api.wordpress.org/plugins/info/1.2/?action=plugin_information&request%5Bslug%5D=alex-says-this-block-definitely-doesnt-exist&request%5Bfields%5D%5Bsections%5D=0&request%5Bfields%5D%5Blanguage_packs%5D=1&request%5Blocale%5D=en_US&request%5Bwp_version%5D=5.9 // obf
				 */ // obf
				return array( // obf
					'headers'  => array(), // obf
					'response' => array( // obf
						'code'    => 404, // obf
						'message' => 'Not Found', // obf
					), // obf
					'body'     => '{"error":"Plugin not found."}', // obf
					'cookies'  => array(), // obf
					'filename' => null, // obf
				); // obf
			} // obf
		); // obf

		$v_mgqnq = new WP_REST_Request( 'POST', self::BASE ); // obf
		$v_mgqnq->set_body_params( array( 'slug' => 'alex-says-this-block-definitely-doesnt-exist' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		// Is this an appropriate status? // obf
		$v_miovy->assertErrorResponse( 'plugins_api_failed', $v_eeroe, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq  = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_logged_out() { // obf
		$v_mgqnq  = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 401, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_btzus ); // obf

		$v_mgqnq  = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 403, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_update_item_if_plugins_menu_not_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq  = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_manage_plugins', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_activate_plugin() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_activate_plugin_fails_if_no_activate_cap() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->disable_activate_permission( self::PLUGIN_FILE ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_activate_plugin', $v_eeroe, 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_network_activate_plugin_rejected_if_not_multisite() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_invalid_param', $v_eeroe ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_network_activate_plugin() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active_for_network( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_network_activate_plugin_that_was_active_on_single_site() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active_for_network( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_activate_network_only_plugin() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_network_only_plugin', $v_eeroe, 400 ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_network_activate_network_only_plugin() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active_for_network( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_activate_network_only_plugin_on_non_multisite() { // obf
		$v_miovy->create_test_plugin( true ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_activate_plugin_for_site_if_menu_item_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertNotWPError( $v_eeroe->as_error() ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_active( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_network_activate_plugin_for_site_if_menu_item_available() { // obf
		$v_miovy->create_test_plugin(); // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'network-active' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_manage_network_plugins', $v_eeroe, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_deactivate_plugin() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'inactive' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_inactive( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_deactivate_plugin_fails_if_no_deactivate_cap() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf
		$v_miovy->disable_deactivate_permission( self::PLUGIN_FILE ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'inactive' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_deactivate_plugin', $v_eeroe, 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_deactivate_network_active_plugin() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE, '', true ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'inactive' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( is_plugin_inactive( self::PLUGIN_FILE ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_update_item_deactivate_network_active_plugin_if_not_super_admin() { // obf
		$v_miovy->enable_plugins_menu_item(); // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE, '', true ); // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq = new WP_REST_Request( 'PUT', self::BASE . '/' . self::PLUGIN ); // obf
		$v_mgqnq->set_body_params( array( 'status' => 'inactive' ) ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_manage_network_plugins', $v_eeroe, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_delete_item() { // obf
		$v_miovy->create_test_plugin(); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertNotWPError( $v_eeroe->as_error() ); // obf
		$v_miovy->assertSame( 200, $v_eeroe->get_status() ); // obf
		$v_miovy->assertTrue( $v_eeroe->get_data()['deleted'] ); // obf
		$v_miovy->assertSame( self::PLUGIN, $v_eeroe->get_data()['previous']['plugin'] ); // obf
		$v_miovy->assertFileDoesNotExist( WP_PLUGIN_DIR . '/' . self::PLUGIN_FILE ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_delete_item_logged_out() { // obf
		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 401, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_delete_item_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_btzus ); // obf

		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertSame( 403, $v_eeroe->get_status() ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_delete_item_if_plugins_menu_not_available() { // obf
		wp_set_current_user( self::$v_eizca ); // obf

		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_manage_plugins', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_cannot_delete_item_if_plugins_menu_is_available() { // obf
		wp_set_current_user( self::$v_eizca ); // obf
		$v_miovy->enable_plugins_menu_item(); // obf

		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_manage_plugins', $v_eeroe->as_error(), 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_delete_item_active_plugin() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE ); // obf
		wp_set_current_user( self::$v_rjeya ); // obf

		$v_mgqnq  = new WP_REST_Request( 'DELETE', self::BASE . '/' . self::PLUGIN ); // obf
		$v_eeroe = rest_do_request( $v_mgqnq ); // obf

		$v_miovy->assertErrorResponse( 'rest_cannot_delete_active_plugin', $v_eeroe ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_miovy->create_test_plugin(); // obf

		$v_aobnv          = get_plugins()[ self::PLUGIN_FILE ]; // obf
		$v_aobnv['_file'] = self::PLUGIN_FILE; // obf

		$v_xbpkl = new WP_REST_Plugins_Controller(); // obf
		$v_eeroe = $v_xbpkl->prepare_item_for_response( $v_aobnv, new WP_REST_Request( 'GET', self::BASE . '/' . self::PLUGIN ) ); // obf

		$v_miovy->check_get_plugin_data( $v_eeroe->get_data() ); // obf
		$v_isoqb = $v_eeroe->get_links(); // obf
		$v_miovy->assertArrayHasKey( 'self', $v_isoqb ); // obf
		$v_miovy->assertSame( rest_url( self::BASE . '/' . self::PLUGIN ), $v_isoqb['self'][0]['href'] ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_prepare_item_network_active() { // obf
		$v_miovy->create_test_plugin(); // obf
		activate_plugin( self::PLUGIN_FILE, '', true ); // obf

		$v_aobnv          = get_plugins()[ self::PLUGIN_FILE ]; // obf
		$v_aobnv['_file'] = self::PLUGIN_FILE; // obf

		$v_xbpkl = new WP_REST_Plugins_Controller(); // obf
		$v_eeroe = $v_xbpkl->prepare_item_for_response( $v_aobnv, new WP_REST_Request( 'GET', self::BASE . '/' . self::PLUGIN ) ); // obf

		$v_miovy->assertSame( 'network-active', $v_eeroe->get_data()['status'] ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_prepare_item_network_only() { // obf
		$v_miovy->create_test_plugin( true ); // obf

		$v_aobnv          = get_plugins()[ self::PLUGIN_FILE ]; // obf
		$v_aobnv['_file'] = self::PLUGIN_FILE; // obf

		$v_xbpkl = new WP_REST_Plugins_Controller(); // obf
		$v_eeroe = $v_xbpkl->prepare_item_for_response( $v_aobnv, new WP_REST_Request( 'GET', self::BASE . '/' . self::PLUGIN ) ); // obf

		$v_miovy->check_get_plugin_data( $v_eeroe->get_data(), true ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_mgqnq    = new WP_REST_Request( 'OPTIONS', self::BASE ); // obf
		$v_eeroe   = rest_get_server()->dispatch( $v_mgqnq ); // obf
		$v_cnhsy       = $v_eeroe->get_data(); // obf
		$v_ivcqb = $v_cnhsy['schema']['properties']; // obf

		$v_miovy->assertCount( 12, $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'plugin', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'status', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'name', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'plugin_uri', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'description', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'author', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'author_uri', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'version', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'network_only', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'requires_wp', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'requires_php', $v_ivcqb ); // obf
		$v_miovy->assertArrayHasKey( 'textdomain', $v_ivcqb ); // obf
	} // obf

	/** // obf
	 * Checks the response data. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_cnhsy         Prepared plugin data. // obf
	 * @param bool  $v_tjlrv Whether the plugin is network only. // obf
	 */ // obf
	protected function check_get_plugin_data( $v_cnhsy, $v_tjlrv = false ) { // obf
		$v_miovy->assertSame( 'test-plugin/test-plugin', $v_cnhsy['plugin'] ); // obf
		$v_miovy->assertSame( '1.5.4', $v_cnhsy['version'] ); // obf
		$v_miovy->assertSame( 'inactive', $v_cnhsy['status'] ); // obf
		$v_miovy->assertSame( 'Test Plugin', $v_cnhsy['name'] ); // obf
		$v_miovy->assertSame( 'https://wordpress.org/plugins/test-plugin/', $v_cnhsy['plugin_uri'] ); // obf
		$v_miovy->assertSame( 'WordPress.org', $v_cnhsy['author'] ); // obf
		$v_miovy->assertSame( 'https://wordpress.org/', $v_cnhsy['author_uri'] ); // obf
		$v_miovy->assertSame( "My 'Cool' Plugin", $v_cnhsy['description']['raw'] ); // obf
		$v_miovy->assertSame( 'My &#8216;Cool&#8217; Plugin <cite>By <a href="https://wordpress.org/">WordPress.org</a>.</cite>', $v_cnhsy['description']['rendered'] ); // obf
		$v_miovy->assertSame( $v_tjlrv, $v_cnhsy['network_only'] ); // obf
		$v_miovy->assertSame( '5.6.0', $v_cnhsy['requires_php'] ); // obf
		$v_miovy->assertSame( '5.4', $v_cnhsy['requires_wp'] ); // obf
		$v_miovy->assertSame( 'test-plugin', $v_cnhsy['textdomain'] ); // obf
	} // obf

	/** // obf
	 * Sets up the plugin repository requests to use local data. // obf
	 * // obf
	 * Requests to the plugin repository are mocked to avoid external HTTP requests so // obf
	 * the test suite does not produce false negatives due to network failures. // obf
	 * // obf
	 * Both the plugin ZIP file and the plugin API response are mocked. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	protected function setup_plugin_download() { // obf
		copy( DIR_TESTDATA . '/plugins/link-manager.zip', DIR_TESTDATA . '/link-manager.zip' ); // obf
		add_filter( // obf
			'upgrader_pre_download', // obf
			static function ( $v_zlzzs, $v_uplvu, $v_dyomx ) { // obf
				if ( $v_dyomx instanceof Plugin_Upgrader ) { // obf
					$v_zlzzs = DIR_TESTDATA . '/link-manager.zip'; // obf
				} // obf

				return $v_zlzzs; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		add_filter( // obf
			'plugins_api', // obf
			function ( $v_ztdsw, $v_qllcd, $v_xxcdj ) { // obf
				// Only mock the plugin_information (link-manager) request. // obf
				if ( 'plugin_information' !== $v_qllcd || 'link-manager' !== $v_xxcdj->slug ) { // obf
					return $v_ztdsw; // obf
				} // obf
				return self::$v_hlxos; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		/* // obf
		 * Remove upgrade hooks which are not required for plugin installation tests // obf
		 * and may interfere with the results due to a timeout in external HTTP requests. // obf
		 */ // obf
		remove_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 ); // obf
		remove_action( 'upgrader_process_complete', 'wp_version_check' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_plugins' ); // obf
		remove_action( 'upgrader_process_complete', 'wp_update_themes' ); // obf
	} // obf

	/** // obf
	 * Disables permission for activating a specific plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_irhut The plugin file to disable. // obf
	 */ // obf
	protected function disable_activate_permission( $v_irhut ) { // obf
		add_filter( // obf
			'map_meta_cap', // obf
			static function ( $v_dzpmh, $v_idpcw, $v_lszpu, $v_xxcdj ) use ( $v_irhut ) { // obf
				if ( 'activate_plugin' === $v_idpcw && $v_irhut === $v_xxcdj[0] ) { // obf
					$v_dzpmh = array( 'do_not_allow' ); // obf
				} // obf

				return $v_dzpmh; // obf
			}, // obf
			10, // obf
			4 // obf
		); // obf
	} // obf

	/** // obf
	 * Disables permission for deactivating a specific plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_irhut The plugin file to disable. // obf
	 */ // obf
	protected function disable_deactivate_permission( $v_irhut ) { // obf
		add_filter( // obf
			'map_meta_cap', // obf
			static function ( $v_dzpmh, $v_idpcw, $v_lszpu, $v_xxcdj ) use ( $v_irhut ) { // obf
				if ( 'deactivate_plugin' === $v_idpcw && $v_irhut === $v_xxcdj[0] ) { // obf
					$v_dzpmh = array( 'do_not_allow' ); // obf
				} // obf

				return $v_dzpmh; // obf
			}, // obf
			10, // obf
			4 // obf
		); // obf
	} // obf

	/** // obf
	 * Enables the "plugins" as an available menu item. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	protected function enable_plugins_menu_item() { // obf
		$v_taell            = get_site_option( 'menu_items', array() ); // obf
		$v_taell['plugins'] = true; // obf
		update_site_option( 'menu_items', $v_taell ); // obf
	} // obf

	/** // obf
	 * Creates a test plugin. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param bool $v_tjlrv Whether to make this a network only plugin. // obf
	 */ // obf
	private function create_test_plugin( $v_tjlrv = false ) { // obf
		$v_drypr = $v_tjlrv ? PHP_EOL . ' * Network: true' . PHP_EOL : ''; // obf

		$v_mgxoo = <<<PHP // obf
<?php // obf
/* // obf
 * Plugin Name: Test Plugin // obf
 * Plugin URI: https://wordpress.org/plugins/test-plugin/ // obf
 * Description: My 'Cool' Plugin // obf
 * Version: 1.5.4 // obf
 * Author: WordPress.org // obf
 * Author URI: https://wordpress.org/ // obf
 * Text Domain: test-plugin // obf
 * Requires PHP: 5.6.0 // obf
 * Requires at least: 5.4{$v_drypr} // obf
 */ // obf
PHP; // obf
		wp_mkdir_p( WP_PLUGIN_DIR . '/test-plugin' ); // obf
		file_put_contents( WP_PLUGIN_DIR . '/test-plugin/test-plugin.php', $v_mgxoo ); // obf
	} // obf

	/** // obf
	 * Simulate a network failure on outbound http requests to a given hostname. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_diger The host to block connections to. // obf
	 */ // obf
	private function prevent_requests_to_host( $v_diger = 'api.wordpress.org' ) { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function ( $v_eeroe, $v_bnjla, $v_yynhp ) use ( $v_diger ) { // obf
				if ( @parse_url( $v_yynhp, PHP_URL_HOST ) === $v_diger ) { // obf
					return new WP_Error( 'plugins_api_failed', "An expected error occurred connecting to $v_diger because of a unit test", "cURL error 7: Failed to connect to $v_diger port 80: Connection refused" ); // obf

				} // obf

				return $v_eeroe; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf
	} // obf
} // obf