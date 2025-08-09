

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Menu_Locations_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 * // obf
 * @group restapi // obf
 * // obf
 * @coversDefaultClass WP_REST_Menu_Locations_Controller // obf
 */ // obf
class Tests_REST_WpRestMenuLocationsController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_qxtsm; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_hmiii Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_hmiii ) { // obf
		self::$v_qxtsm = $v_hmiii->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Set up. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Unregister all nav menu locations. // obf
		foreach ( array_keys( get_registered_nav_menus() ) as $v_dykmf ) { // obf
			unregister_nav_menu( $v_dykmf ); // obf
		} // obf
	} // obf

	/** // obf
	 * Register nav menu locations. // obf
	 * // obf
	 * @param array $v_pgxjr Location slugs. // obf
	 */ // obf
	public function register_nav_menu_locations( $v_pgxjr ) { // obf
		foreach ( $v_pgxjr as $v_dykmf ) { // obf
			register_nav_menu( $v_dykmf, ucfirst( $v_dykmf ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_khjiu = rest_get_server()->get_routes(); // obf
		$v_xngoo->assertArrayHasKey( '/wp/v2/menu-locations', $v_khjiu ); // obf
		$v_xngoo->assertCount( 1, $v_khjiu['/wp/v2/menu-locations'] ); // obf
		$v_xngoo->assertArrayHasKey( '/wp/v2/menu-locations/(?P<location>[\w-]+)', $v_khjiu ); // obf
		$v_xngoo->assertCount( 1, $v_khjiu['/wp/v2/menu-locations/(?P<location>[\w-]+)'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_context_param // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_rirhx  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-locations' ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf
		$v_xngoo->assertSame( 'view', $v_tyvvl['endpoints'][0]['args']['context']['default'] ); // obf
		$v_xngoo->assertSame( array( 'view', 'embed', 'edit' ), $v_tyvvl['endpoints'][0]['args']['context']['enum'] ); // obf
		$v_nlvga = 'primary'; // obf
		$v_xngoo->register_nav_menu_locations( array( $v_nlvga ) ); // obf
		$v_rirhx  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-locations/' . $v_nlvga ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf
		$v_xngoo->assertSame( 'view', $v_tyvvl['endpoints'][0]['args']['context']['default'] ); // obf
		$v_xngoo->assertSame( array( 'view', 'embed', 'edit' ), $v_tyvvl['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		$v_sberu = array( 'primary', 'secondary' ); // obf
		$v_xngoo->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		wp_set_current_user( self::$v_qxtsm ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations' ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf
		$v_tyvvl     = array_values( $v_tyvvl ); // obf
		$v_xngoo->assertCount( 2, $v_tyvvl ); // obf
		$v_phpoo        = wp_list_pluck( $v_tyvvl, 'name' ); // obf
		$v_gzsfr = wp_list_pluck( $v_tyvvl, 'description' ); // obf
		$v_xngoo->assertSame( $v_sberu, $v_phpoo ); // obf
		$v_kblpe = array_map( 'ucfirst', $v_phpoo ); // obf
		$v_xngoo->assertSame( $v_kblpe, $v_gzsfr ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_nlvga = 'primary'; // obf
		$v_xngoo->register_nav_menu_locations( array( $v_nlvga ) ); // obf

		wp_set_current_user( self::$v_qxtsm ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations/' . $v_nlvga ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf
		$v_xngoo->assertSame( $v_nlvga, $v_tyvvl['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items_filter() { // obf
		$v_sberu = array( 'primary', 'secondary' ); // obf
		$v_xngoo->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		add_filter( 'rest_menu_read_access', '__return_true' ); // obf

		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations' ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf
		$v_tyvvl     = array_values( $v_tyvvl ); // obf
		$v_xngoo->assertCount( 2, $v_tyvvl, 'Number of menu location are not 2' ); // obf

		$v_phpoo        = wp_list_pluck( $v_tyvvl, 'name' ); // obf
		$v_gzsfr = wp_list_pluck( $v_tyvvl, 'description' ); // obf
		$v_xngoo->assertSame( $v_sberu, $v_phpoo ); // obf
		$v_kblpe = array_map( 'ucfirst', $v_phpoo ); // obf

		$v_xngoo->assertSame( $v_kblpe, $v_gzsfr, 'Menu descriptions do not match' ); // obf
	} // obf

	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_filter() { // obf
		$v_nlvga = 'primary'; // obf
		$v_xngoo->register_nav_menu_locations( array( $v_nlvga ) ); // obf

		add_filter( 'rest_menu_read_access', '__return_true' ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations/' . $v_nlvga ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl     = $v_blqhj->get_data(); // obf

		$v_xngoo->assertSame( $v_nlvga, $v_tyvvl['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_invalid() { // obf
		$v_nlvga = 'primary'; // obf
		$v_xngoo->register_nav_menu_locations( array( $v_nlvga ) ); // obf

		wp_set_current_user( self::$v_qxtsm ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations/invalid' ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf

		$v_xngoo->assertErrorResponse( 'rest_menu_location_invalid', $v_blqhj, 404 ); // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for menu locations. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The update_item() method does not exist for menu locations. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for menu locations. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * The prepare_item() method does not exist for menu locations. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_qxtsm ); // obf
		$v_rirhx    = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-locations' ); // obf
		$v_blqhj   = rest_get_server()->dispatch( $v_rirhx ); // obf
		$v_tyvvl       = $v_blqhj->get_data(); // obf
		$v_sokxq = $v_tyvvl['schema']['properties']; // obf
		$v_xngoo->assertCount( 3, $v_sokxq ); // obf
		$v_xngoo->assertArrayHasKey( 'name', $v_sokxq ); // obf
		$v_xngoo->assertArrayHasKey( 'description', $v_sokxq ); // obf
		$v_xngoo->assertArrayHasKey( 'menu', $v_sokxq ); // obf
	} // obf


	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_items_menu_location_context_without_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations' ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf

		$v_xngoo->assertErrorResponse( 'rest_cannot_view', $v_blqhj, rest_authorization_required_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 * @covers ::get_item_permissions_check // obf
	 */ // obf
	public function test_get_item_menu_location_context_without_permission() { // obf
		$v_nlvga = 'primary'; // obf
		$v_xngoo->register_nav_menu_locations( array( $v_nlvga ) ); // obf

		wp_set_current_user( 0 ); // obf
		$v_rirhx  = new WP_REST_Request( 'GET', '/wp/v2/menu-locations/' . $v_nlvga ); // obf
		$v_blqhj = rest_get_server()->dispatch( $v_rirhx ); // obf

		$v_xngoo->assertErrorResponse( 'rest_cannot_view', $v_blqhj, rest_authorization_required_code() ); // obf
	} // obf
} // obf