

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Menus_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 * // obf
 * @group restapi // obf
 * // obf
 * @coversDefaultClass WP_REST_Menus_Controller // obf
 */ // obf
class Tests_REST_WpRestMenusController extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_quget; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_pqfsp; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_wylxl; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_xvsur; // obf

	/** // obf
	 * // obf
	 */ // obf
	const TAXONOMY = 'nav_menu'; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_ujhrh = 50; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_scyvt Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_scyvt ) { // obf
		self::$v_pqfsp      = $v_scyvt->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_wylxl     = $v_scyvt->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_xvsur = $v_scyvt->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		// Unregister all nav menu locations. // obf
		foreach ( array_keys( get_registered_nav_menus() ) as $v_svxlz ) { // obf
			unregister_nav_menu( $v_svxlz ); // obf
		} // obf

		$v_wouas = array( // obf
			'name'        => 'Original Name', // obf
			'description' => 'Original Description', // obf
			'slug'        => 'original-slug', // obf
			'taxonomy'    => 'nav_menu', // obf
		); // obf

		$v_ipqnh->menu_id = self::factory()->term->create( $v_wouas ); // obf

		register_meta( // obf
			'term', // obf
			'test_single_menu', // obf
			array( // obf
				'object_subtype' => self::TAXONOMY, // obf
				'show_in_rest'   => true, // obf
				'single'         => true, // obf
				'type'           => 'string', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Register nav menu locations. // obf
	 * // obf
	 * @param array $v_sbibp Location slugs. // obf
	 */ // obf
	public function register_nav_menu_locations( $v_sbibp ) { // obf
		foreach ( $v_sbibp as $v_svxlz ) { // obf
			register_nav_menu( $v_svxlz, ucfirst( $v_svxlz ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_cgcpm = rest_get_server()->get_routes(); // obf
		$v_ipqnh->assertArrayHasKey( '/wp/v2/menus', $v_cgcpm ); // obf
		$v_ipqnh->assertArrayHasKey( '/wp/v2/menus/(?P<id>[\d]+)', $v_cgcpm ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_context_param // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_wfury  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menus' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_smpza     = $v_sikqy->get_data(); // obf
		$v_ipqnh->assertSame( 'view', $v_smpza['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ipqnh->assertSameSets( array( 'view', 'embed', 'edit' ), $v_smpza['endpoints'][0]['args']['context']['enum'] ); // obf
		$v_ipqnh->assertSame( array( 'v1' => true ), $v_smpza['endpoints'][0]['allow_batch'] ); // obf
		// Single. // obf
		$v_dnshf     = self::factory()->tag->create( array( 'name' => 'Season 5' ) ); // obf
		$v_wfury  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menus/' . $v_dnshf ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_smpza     = $v_sikqy->get_data(); // obf
		$v_ipqnh->assertSame( 'view', $v_smpza['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ipqnh->assertSameSets( array( 'view', 'embed', 'edit' ), $v_smpza['endpoints'][0]['args']['context']['enum'] ); // obf
		$v_ipqnh->assertSame( array( 'v1' => true ), $v_smpza['endpoints'][0]['allow_batch'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_collection_params // obf
	 */ // obf
	public function test_registered_query_params() { // obf
		$v_wfury  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menus' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_smpza     = $v_sikqy->get_data(); // obf
		$v_xmnig     = array_keys( $v_smpza['endpoints'][0]['args'] ); // obf
		sort( $v_xmnig ); // obf
		$v_ipqnh->assertSame( // obf
			array( // obf
				'context', // obf
				'exclude', // obf
				'hide_empty', // obf
				'include', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'per_page', // obf
				'post', // obf
				'search', // obf
				'slug', // obf
			), // obf
			$v_xmnig // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Test get', // obf
				'menu-name'   => 'test Name get', // obf
			) // obf
		); // obf
		$v_wfury = new WP_REST_Request( 'GET', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'per_page', self::$v_ujhrh ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->check_get_taxonomy_terms_response( $v_sikqy ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		$v_jjcxs = wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Test menu', // obf
				'menu-name'   => 'test Name', // obf
			) // obf
		); // obf

		$v_ipqnh->register_nav_menu_locations( array( 'primary' ) ); // obf
		set_theme_mod( 'nav_menu_locations', array( 'primary' => $v_jjcxs ) ); // obf

		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus/' . $v_jjcxs ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->check_get_taxonomy_term_response( $v_sikqy, $v_jjcxs ); // obf
	} // obf


	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items_filter() { // obf
		add_filter( 'rest_menu_read_access', '__return_true' ); // obf
		wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Test get', // obf
				'menu-name'   => 'test Name get', // obf
			) // obf
		); // obf
		$v_wfury = new WP_REST_Request( 'GET', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'per_page', self::$v_ujhrh ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->check_get_taxonomy_terms_response( $v_sikqy ); // obf
	} // obf

	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_filter() { // obf
		add_filter( 'rest_menu_read_access', '__return_true' ); // obf
		$v_jjcxs = wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Test menu', // obf
				'menu-name'   => 'test Name', // obf
			) // obf
		); // obf

		$v_ipqnh->register_nav_menu_locations( array( 'primary' ) ); // obf
		set_theme_mod( 'nav_menu_locations', array( 'primary' => $v_jjcxs ) ); // obf

		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus/' . $v_jjcxs ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->check_get_taxonomy_term_response( $v_sikqy, $v_jjcxs ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'name', 'My Awesome menus' ); // obf
		$v_wfury->set_param( 'description', 'This menu is so awesome.' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 201, $v_sikqy->get_status() ); // obf
		$v_shjvn = $v_sikqy->get_headers(); // obf
		$v_smpza    = $v_sikqy->get_data(); // obf
		$v_ipqnh->assertStringContainsString( '/wp/v2/menus/' . $v_smpza['id'], $v_shjvn['Location'] ); // obf
		$v_ipqnh->assertSame( 'My Awesome menus', $v_smpza['name'] ); // obf
		$v_ipqnh->assertSame( 'This menu is so awesome.', $v_smpza['description'] ); // obf
		$v_ipqnh->assertSame( 'my-awesome-menus', $v_smpza['slug'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_same_name() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'This menu is so Original', // obf
				'menu-name'   => 'Original', // obf
			) // obf
		); // obf

		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'name', 'Original' ); // obf
		$v_wfury->set_param( 'description', 'This menu is so Original' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf

		$v_ipqnh->assertErrorResponse( 'menu_exists', $v_sikqy, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 * @covers ::handle_auto_add // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_wfury->set_param( 'name', 'New Name' ); // obf
		$v_wfury->set_param( 'description', 'New Description' ); // obf
		$v_wfury->set_param( 'auto_add', true ); // obf
		$v_wfury->set_param( // obf
			'meta', // obf
			array( // obf
				'test_single_menu' => 'just meta', // obf
			) // obf
		); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf
		$v_smpza = $v_sikqy->get_data(); // obf
		$v_ipqnh->assertSame( 'New Name', $v_smpza['name'] ); // obf
		$v_ipqnh->assertSame( 'New Description', $v_smpza['description'] ); // obf
		$v_ipqnh->assertSame( true, $v_smpza['auto_add'] ); // obf
		$v_ipqnh->assertSame( 'new-name', $v_smpza['slug'] ); // obf
		$v_ipqnh->assertSame( 'just meta', $v_smpza['meta']['test_single_menu'] ); // obf
		$v_ipqnh->assertFalse( isset( $v_smpza['meta']['test_cat_meta'] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::delete_item // obf
	 */ // obf
	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_jjcxs = wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Deleted Menu', // obf
				'menu-name'   => 'Deleted Menu', // obf
			) // obf
		); // obf

		$v_jakoj = get_term_by( 'id', $v_jjcxs, self::TAXONOMY ); // obf

		$v_wfury = new WP_REST_Request( 'DELETE', '/wp/v2/menus/' . $v_jakoj->term_id ); // obf
		$v_wfury->set_param( 'force', true ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf
		$v_smpza = $v_sikqy->get_data(); // obf
		$v_ipqnh->assertTrue( $v_smpza['deleted'] ); // obf
		$v_ipqnh->assertSame( 'Deleted Menu', $v_smpza['previous']['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::prepare_item_for_response // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_jjcxs = wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Foo Menu', // obf
				'menu-name'   => 'Foo Menu', // obf
			) // obf
		); // obf

		$v_jakoj = get_term_by( 'id', $v_jjcxs, self::TAXONOMY ); // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus/' . $v_jakoj->term_id ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_smpza     = $v_sikqy->get_data(); // obf

		$v_ipqnh->check_taxonomy_term( $v_jakoj, $v_smpza, $v_sikqy->get_links() ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_wfury    = new WP_REST_Request( 'OPTIONS', '/wp/v2/menus' ); // obf
		$v_sikqy   = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_smpza       = $v_sikqy->get_data(); // obf
		$v_wmkio = $v_smpza['schema']['properties']; // obf
		$v_ipqnh->assertCount( 7, $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'id', $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'description', $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'meta', $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'name', $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'slug', $v_wmkio ); // obf
		$v_ipqnh->assertArrayHasKey( 'locations', $v_wmkio ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_with_location_permission_correct() { // obf
		$v_ipqnh->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'name', 'My Awesome Term' ); // obf
		$v_wfury->set_param( 'slug', 'so-awesome' ); // obf
		$v_wfury->set_param( 'locations', 'primary' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 201, $v_sikqy->get_status() ); // obf
		$v_smpza      = $v_sikqy->get_data(); // obf
		$v_lpzwa   = $v_smpza['id']; // obf
		$v_sbibp = get_nav_menu_locations(); // obf
		$v_ipqnh->assertSame( $v_sbibp['primary'], $v_lpzwa ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_with_invalid_location() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus' ); // obf
		$v_wfury->set_param( 'name', 'My Awesome Term' ); // obf
		$v_wfury->set_param( 'slug', 'so-awesome' ); // obf
		$v_wfury->set_param( 'locations', 'bar' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 400, $v_sikqy->get_status() ); // obf
		$v_ipqnh->assertErrorResponse( 'rest_invalid_param', $v_sikqy, 400 ); // obf
		$v_ipqnh->assertArrayHasKey( 'locations', $v_sikqy->get_data()['data']['details'] ); // obf
		$v_ipqnh->assertSame( 'rest_invalid_menu_location', $v_sikqy->get_data()['data']['details']['locations']['code'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_with_no_location() { // obf
		$v_ipqnh->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_wfury->set_param( 'name', 'New Name' ); // obf
		$v_wfury->set_param( 'description', 'New Description' ); // obf
		$v_wfury->set_param( 'slug', 'new-slug' ); // obf
		$v_wfury->set_param( 'locations', 'bar' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 400, $v_sikqy->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_with_location_permission_correct() { // obf
		$v_ipqnh->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		wp_set_current_user( self::$v_pqfsp ); // obf
		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_wfury->set_param( 'name', 'New Name' ); // obf
		$v_wfury->set_param( 'description', 'New Description' ); // obf
		$v_wfury->set_param( 'slug', 'new-slug' ); // obf
		$v_wfury->set_param( 'locations', 'primary' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf
		$v_sbibp = get_nav_menu_locations(); // obf
		$v_ipqnh->assertSame( $v_sbibp['primary'], $v_ipqnh->menu_id ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_with_location_permission_incorrect() { // obf
		$v_ipqnh->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		wp_set_current_user( self::$v_xvsur ); // obf
		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_wfury->set_param( 'name', 'New Name' ); // obf
		$v_wfury->set_param( 'description', 'New Description' ); // obf
		$v_wfury->set_param( 'slug', 'new-slug' ); // obf
		$v_wfury->set_param( 'locations', 'primary' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertSame( rest_authorization_required_code(), $v_sikqy->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::prepare_links // obf
	 */ // obf
	public function test_get_item_links() { // obf
		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_jjcxs = wp_update_nav_menu_object( // obf
			0, // obf
			array( // obf
				'description' => 'Foo Menu', // obf
				'menu-name'   => 'Foo Menu', // obf
			) // obf
		); // obf

		register_nav_menu( 'foo', 'Bar' ); // obf

		set_theme_mod( 'nav_menu_locations', array( 'foo' => $v_jjcxs ) ); // obf

		$v_wfury  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menus/%d', $v_jjcxs ) ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf

		$v_ashvz = $v_sikqy->get_links(); // obf
		$v_ipqnh->assertArrayHasKey( 'https://api.w.org/menu-location', $v_ashvz ); // obf

		$v_yafef = rest_url( '/wp/v2/menu-locations/foo' ); // obf
		$v_ipqnh->assertSame( $v_yafef, $v_ashvz['https://api.w.org/menu-location'][0]['href'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 * @covers ::handle_locations // obf
	 */ // obf
	public function test_change_menu_location() { // obf
		$v_ipqnh->register_nav_menu_locations( array( 'primary', 'secondary' ) ); // obf
		$v_azgox = self::factory()->term->create( // obf
			array( // obf
				'name'        => 'Secondary Name', // obf
				'description' => 'Secondary Description', // obf
				'slug'        => 'secondary-slug', // obf
				'taxonomy'    => 'nav_menu', // obf
			) // obf
		); // obf

		$v_sbibp              = get_nav_menu_locations(); // obf
		$v_sbibp['primary']   = $v_ipqnh->menu_id; // obf
		$v_sbibp['secondary'] = $v_azgox; // obf
		set_theme_mod( 'nav_menu_locations', $v_sbibp ); // obf

		wp_set_current_user( self::$v_pqfsp ); // obf

		$v_wfury = new WP_REST_Request( 'POST', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_wfury->set_body_params( // obf
			array( // obf
				'locations' => array( 'secondary' ), // obf
			) // obf
		); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf

		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf

		$v_sbibp = get_nav_menu_locations(); // obf
		$v_ipqnh->assertArrayNotHasKey( 'primary', $v_sbibp ); // obf
		$v_ipqnh->assertArrayHasKey( 'secondary', $v_sbibp ); // obf
		$v_ipqnh->assertSame( $v_ipqnh->menu_id, $v_sbibp['secondary'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_items_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertErrorResponse( 'rest_cannot_view', $v_sikqy, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertErrorResponse( 'rest_cannot_view', $v_sikqy, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_items_wrong_permission() { // obf
		wp_set_current_user( self::$v_xvsur ); // obf
		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus' ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertErrorResponse( 'rest_cannot_view', $v_sikqy, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 * @covers ::get_item_permissions_check // obf
	 */ // obf
	public function test_get_item_wrong_permission() { // obf
		wp_set_current_user( self::$v_xvsur ); // obf
		$v_wfury  = new WP_REST_Request( 'GET', '/wp/v2/menus/' . $v_ipqnh->menu_id ); // obf
		$v_sikqy = rest_get_server()->dispatch( $v_wfury ); // obf
		$v_ipqnh->assertErrorResponse( 'rest_cannot_view', $v_sikqy, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 */ // obf
	public function test_it_allows_batch_requests_when_updating_menus() { // obf
		$v_cwadg = rest_get_server(); // obf
		// This call is needed to initialize route_options. // obf
		$v_cwadg->get_routes(); // obf
		$v_rrggf = $v_cwadg->get_route_options( '/wp/v2/menus/(?P<id>[\d]+)' ); // obf

		$v_ipqnh->assertArrayHasKey( 'allow_batch', $v_rrggf ); // obf
		$v_ipqnh->assertSame( array( 'v1' => true ), $v_rrggf['allow_batch'] ); // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_sikqy Response Class. // obf
	 */ // obf
	protected function check_get_taxonomy_terms_response( $v_sikqy ) { // obf
		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf
		$v_smpza = $v_sikqy->get_data(); // obf
		$v_jnxnp = array( // obf
			'hide_empty' => false, // obf
		); // obf
		$v_qzyjw = get_terms( self::TAXONOMY, $v_jnxnp ); // obf
		$v_ipqnh->assertCount( count( $v_qzyjw ), $v_smpza ); // obf
		$v_ipqnh->assertSame( $v_qzyjw[0]->term_id, $v_smpza[0]['id'] ); // obf
		$v_ipqnh->assertSame( $v_qzyjw[0]->name, $v_smpza[0]['name'] ); // obf
		$v_ipqnh->assertSame( $v_qzyjw[0]->slug, $v_smpza[0]['slug'] ); // obf
		$v_ipqnh->assertSame( $v_qzyjw[0]->description, $v_smpza[0]['description'] ); // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_sikqy Response Class. // obf
	 * @param int              $v_efkxi Term ID. // obf
	 */ // obf
	protected function check_get_taxonomy_term_response( $v_sikqy, $v_efkxi ) { // obf
		$v_ipqnh->assertSame( 200, $v_sikqy->get_status() ); // obf

		$v_smpza = $v_sikqy->get_data(); // obf
		$v_adjtt = get_term( $v_efkxi, self::TAXONOMY ); // obf
		$v_ipqnh->check_taxonomy_term( $v_adjtt, $v_smpza, $v_sikqy->get_links() ); // obf
	} // obf

	/** // obf
	 * @param WP_Term $v_jakoj WP_Term object. // obf
	 * @param array   $v_smpza Data from REST API. // obf
	 * @param array   $v_ashvz Array of links. // obf
	 */ // obf
	protected function check_taxonomy_term( $v_jakoj, $v_smpza, $v_ashvz ) { // obf
		$v_ipqnh->assertSame( $v_jakoj->term_id, $v_smpza['id'] ); // obf
		$v_ipqnh->assertSame( $v_jakoj->name, $v_smpza['name'] ); // obf
		$v_ipqnh->assertSame( $v_jakoj->slug, $v_smpza['slug'] ); // obf
		$v_ipqnh->assertSame( $v_jakoj->description, $v_smpza['description'] ); // obf
		$v_ipqnh->assertFalse( isset( $v_smpza['parent'] ) ); // obf

		$v_sbibp = get_nav_menu_locations(); // obf
		if ( ! empty( $v_sbibp ) ) { // obf
			$v_uiyok = array(); // obf
			foreach ( $v_sbibp as $v_svxlz => $v_quget ) { // obf
				if ( $v_quget === $v_jakoj->term_id ) { // obf
					$v_uiyok[] = $v_svxlz; // obf
				} // obf
			} // obf

			$v_ipqnh->assertSame( $v_uiyok, $v_smpza['locations'] ); // obf
		} // obf

		$v_zokwm = array( // obf
			'self', // obf
			'collection', // obf
			'about', // obf
			'https://api.w.org/post_type', // obf
		); // obf

		if ( ! empty( $v_smpza['parent'] ) ) { // obf
			$v_zokwm[] = 'up'; // obf
		} // obf

		if ( ! empty( $v_smpza['locations'] ) ) { // obf
			$v_zokwm[] = 'https://api.w.org/menu-location'; // obf
		} // obf

		$v_ipqnh->assertSameSets( $v_zokwm, array_keys( $v_ashvz ) ); // obf
		$v_ipqnh->assertStringContainsString( 'wp/v2/taxonomies/' . $v_jakoj->taxonomy, $v_ashvz['about'][0]['href'] ); // obf
		$v_ipqnh->assertSame( add_query_arg( 'menus', $v_jakoj->term_id, rest_url( 'wp/v2/menu-items' ) ), $v_ashvz['https://api.w.org/post_type'][0]['href'] ); // obf
	} // obf
} // obf