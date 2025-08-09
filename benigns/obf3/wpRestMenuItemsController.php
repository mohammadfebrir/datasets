

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Menu_Items_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 * // obf
 * @group restapi // obf
 * // obf
 * @coversDefaultClass WP_REST_Menu_Items_Controller // obf
 */ // obf
class Tests_REST_WpRestMenuItemsController extends WP_Test_REST_Post_Type_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected $v_htixt; // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected $v_vjkqx; // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected $v_dikfs; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_ghoxd; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_tqbiw; // obf

	/** // obf
	 * // obf
	 */ // obf
	const POST_TYPE = 'nav_menu_item'; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ftzjq Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_ftzjq ) { // obf
		self::$v_ghoxd      = $v_ftzjq->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_tqbiw = $v_ftzjq->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_ghoxd ); // obf
		self::delete_user( self::$v_tqbiw ); // obf
	} // obf

	/** // obf
	 * // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_blnhx->tag_id = self::factory()->tag->create(); // obf

		$v_blnhx->menu_id = wp_create_nav_menu( rand_str() ); // obf

		$v_blnhx->menu_item_id = wp_update_nav_menu_item( // obf
			$v_blnhx->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_blnhx->tag_id, // obf
				'menu-item-status'    => 'publish', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_lkrkh = rest_get_server()->get_routes(); // obf

		$v_blnhx->assertArrayHasKey( '/wp/v2/menu-items', $v_lkrkh ); // obf
		$v_blnhx->assertCount( 2, $v_lkrkh['/wp/v2/menu-items'] ); // obf
		$v_blnhx->assertArrayHasKey( '/wp/v2/menu-items/(?P<id>[\d]+)', $v_lkrkh ); // obf
		$v_blnhx->assertCount( 3, $v_lkrkh['/wp/v2/menu-items/(?P<id>[\d]+)'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_context_param // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_ornzn  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-items' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_myopk     = $v_qqfup->get_data(); // obf
		$v_blnhx->assertSame( 'view', $v_myopk['endpoints'][0]['args']['context']['default'] ); // obf
		$v_blnhx->assertSame( array( 'view', 'embed', 'edit' ), $v_myopk['endpoints'][0]['args']['context']['enum'] ); // obf
		$v_blnhx->assertSame( array( 'v1' => true ), $v_myopk['endpoints'][0]['allow_batch'] ); // obf
		// Single. // obf
		$v_ornzn  = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-items/' . $v_blnhx->menu_item_id ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_myopk     = $v_qqfup->get_data(); // obf
		$v_blnhx->assertSame( 'view', $v_myopk['endpoints'][0]['args']['context']['default'] ); // obf
		$v_blnhx->assertSame( array( 'view', 'embed', 'edit' ), $v_myopk['endpoints'][0]['args']['context']['enum'] ); // obf
		$v_blnhx->assertSame( array( 'v1' => true ), $v_myopk['endpoints'][0]['allow_batch'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_collection_params // obf
	 */ // obf
	public function test_registered_query_params() { // obf
		$v_ornzn    = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-items' ); // obf
		$v_qqfup   = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_myopk       = $v_qqfup->get_data(); // obf
		$v_lstov = $v_myopk['endpoints'][0]['args']; // obf
		$v_blnhx->assertArrayHasKey( 'before', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'context', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'exclude', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'include', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'menu_order', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'menus', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'menus_exclude', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'offset', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'order', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'orderby', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'page', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'per_page', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'search', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'search_columns', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'slug', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'status', $v_lstov ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 */ // obf
	public function test_registered_get_item_params() { // obf
		$v_ornzn  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_myopk     = $v_qqfup->get_data(); // obf
		$v_irqba     = array_keys( $v_myopk['endpoints'][0]['args'] ); // obf
		$v_blnhx->assertEqualSets( array( 'context', 'id' ), $v_irqba ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_items_response( $v_qqfup ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_item_response( $v_qqfup, 'view' ); // obf
	} // obf

	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_items // obf
	 */ // obf
	public function test_get_items_filter() { // obf
		add_filter( 'rest_menu_read_access', '__return_true' ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_items_response( $v_qqfup ); // obf
	} // obf

	/** // obf
	 * @ticket 54304 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_filter() { // obf
		add_filter( 'rest_menu_read_access', '__return_true' ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_item_response( $v_qqfup, 'view' ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_edit() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->set_param( 'context', 'edit' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_item_response( $v_qqfup, 'edit' ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 * @covers ::prepare_links // obf
	 */ // obf
	public function test_get_item_term_links() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_dikfs = wp_update_nav_menu_item( // obf
			$v_blnhx->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_blnhx->tag_id, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-title'     => 'Food', // obf
			) // obf
		); // obf
		$v_ornzn      = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menu-items/%d', $v_dikfs ) ); // obf
		$v_ornzn->set_param( 'context', 'edit' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_item_response( $v_qqfup, 'edit' ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 * @covers ::prepare_links // obf
	 */ // obf
	public function test_get_item_term_posts() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_enyum = self::factory()->post->create(); // obf

		$v_dikfs = wp_update_nav_menu_item( // obf
			$v_blnhx->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'post_type', // obf
				'menu-item-object'    => 'post', // obf
				'menu-item-object-id' => $v_enyum, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-title'     => 'Food', // obf
			) // obf
		); // obf
		$v_ornzn      = new WP_REST_Request( 'GET', sprintf( '/wp/v2/menu-items/%d', $v_dikfs ) ); // obf
		$v_ornzn->set_param( 'context', 'edit' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_get_menu_item_response( $v_qqfup, 'edit' ); // obf
	} // obf

	/** // obf
	 * Test that title.raw contains the verbatim title and that title.rendered // obf
	 * has been passed through the_title which escapes & characters. // obf
	 * // obf
	 * @see https://github.com/WordPress/gutenberg/pull/24673 // obf
	 * // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item // obf
	 */ // obf
	public function test_get_item_escapes_title() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_dikfs = wp_update_nav_menu_item( // obf
			$v_blnhx->menu_id, // obf
			0, // obf
			array( // obf
				'menu-item-type'      => 'taxonomy', // obf
				'menu-item-object'    => 'post_tag', // obf
				'menu-item-object-id' => $v_blnhx->tag_id, // obf
				'menu-item-status'    => 'publish', // obf
				'menu-item-title'     => '<strong>Foo</strong> & bar', // obf
			) // obf
		); // obf

		$v_ornzn = new WP_REST_Request( // obf
			'GET', // obf
			"/wp/v2/menu-items/$v_dikfs" // obf
		); // obf
		$v_ornzn->set_query_params( // obf
			array( // obf
				'context' => 'edit', // obf
			) // obf
		); // obf

		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_myopk  = $v_qqfup->get_data(); // obf
		$v_zmtdt = $v_myopk['title']; // obf

		if ( ! is_multisite() ) { // obf
			// Check that title.raw is the unescaped title and that // obf
			// title.rendered has been run through the_title. // obf
			$v_blnhx->assertSame( '<strong>Foo</strong> &#038; bar', $v_zmtdt['rendered'] ); // obf
			$v_blnhx->assertSame( '<strong>Foo</strong> & bar', $v_zmtdt['raw'] ); // obf
		} else { // obf
			// In a multisite, administrators do not have unfiltered_html and // obf
			// post_title is ran through wp_kses before being saved in the // obf
			// database. Running the title through the_title does nothing in // obf
			// this case. // obf
			$v_blnhx->assertSame( '<strong>Foo</strong> &amp; bar', $v_zmtdt['rendered'] ); // obf
			$v_blnhx->assertSame( '<strong>Foo</strong> &amp; bar', $v_zmtdt['raw'] ); // obf
		} // obf

		wp_delete_post( $v_dikfs ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data(); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->check_create_menu_item_response( $v_qqfup ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_invalid() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menus' => array( 123, 456 ), // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf

		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_term() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type'  => 'taxonomy', // obf
				'title' => 'Tags', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_term_invalid_id', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_change_position() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_zpxxo = wp_create_nav_menu( rand_str() ); // obf
		$v_edvdd    = array(); // obf
		$v_swmuf      = array(); // obf
		for ( $v_likft = 1; $v_likft < 5; $v_likft++ ) { // obf
			$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
			$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
			$v_rocbq = $v_blnhx->set_menu_item_data( // obf
				array( // obf
					'menu_order' => $v_likft, // obf
					'menus'      => $v_zpxxo, // obf
				) // obf
			); // obf
			$v_ornzn->set_body_params( $v_rocbq ); // obf
			$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
			$v_blnhx->check_create_menu_item_response( $v_qqfup ); // obf
			$v_myopk = $v_qqfup->get_data(); // obf

			$v_edvdd[] = $v_likft; // obf
			$v_swmuf[]   = $v_myopk['menu_order']; // obf
		} // obf
		$v_blnhx->assertSame( $v_edvdd, $v_swmuf ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_menu_order_must_be_set() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_zpxxo = wp_create_nav_menu( rand_str() ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menu_order' => 0, // obf
				'menus'      => $v_zpxxo, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menu_order' => 1, // obf
				'menus'      => $v_zpxxo, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertSame( 201, $v_qqfup->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_position_2() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_zpxxo = wp_create_nav_menu( rand_str() ); // obf
		$v_ornzn     = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menu_order' => 'ddddd', // obf
				'menus'      => $v_zpxxo, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_position_3() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_zpxxo = wp_create_nav_menu( rand_str() ); // obf
		$v_ornzn     = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menu_order' => -9, // obf
				'menus'      => $v_zpxxo, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_parent() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		wp_create_nav_menu( rand_str() ); // obf
		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'parent' => -9, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_menu() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'menus' => -9, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'invalid_menu_id', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_post() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type'  => 'post_type', // obf
				'title' => 'Post', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_post_invalid_id', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_post_type() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type'             => 'post_type_archive', // obf
				'menu-item-object' => 'invalid_post_type', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_post_invalid_type', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_custom_link() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type'  => 'custom', // obf
				'title' => '', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_title_required', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_missing_custom_link_url() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type' => 'custom', // obf
				'url'  => '', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_url_required', $v_qqfup, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_invalid_custom_link_url() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'type' => 'custom', // obf
				'url'  => '"^<>{}`', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_invalid_param', $v_qqfup, 400 ); // obf
		$v_blnhx->assertArrayHasKey( 'url', $v_qqfup->get_data()['data']['details'] ); // obf
		$v_blnhx->assertSame( 'rest_invalid_url', $v_qqfup->get_data()['data']['details']['url']['code'] ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'xfn' => array( 'test1', 'test2', 'test3' ), // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->check_update_menu_item_response( $v_qqfup ); // obf
		$v_rkucv = $v_qqfup->get_data(); // obf
		$v_blnhx->assertSame( $v_blnhx->menu_item_id, $v_rkucv['id'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['title'], $v_rkucv['title']['raw'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['description'], $v_rkucv['description'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['type_label'], $v_rkucv['type_label'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['xfn'], $v_rkucv['xfn'] ); // obf
		$v_hqnrd      = get_post( $v_blnhx->menu_item_id ); // obf
		$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
		$v_blnhx->assertSame( $v_rocbq['title'], $v_lbnqt->title ); // obf
		$v_blnhx->assertSame( $v_rocbq['description'], $v_lbnqt->description ); // obf
		$v_blnhx->assertSame( $v_rocbq['xfn'], explode( ' ', $v_lbnqt->xfn ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_clean_xfn() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_wmtkq  = array( 'test1":|":', 'test2+|+', 'test3±', 'test4😀' ); // obf
		$v_zvyrk = array( 'test1', 'test2', 'test3', 'test4' ); // obf

		$v_ornzn = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'xfn' => $v_wmtkq, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->check_update_menu_item_response( $v_qqfup ); // obf
		$v_rkucv = $v_qqfup->get_data(); // obf
		$v_blnhx->assertSame( $v_blnhx->menu_item_id, $v_rkucv['id'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['title'], $v_rkucv['title']['raw'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['description'], $v_rkucv['description'] ); // obf
		$v_blnhx->assertSame( $v_rocbq['type_label'], $v_rkucv['type_label'] ); // obf
		$v_blnhx->assertSame( $v_zvyrk, $v_rkucv['xfn'] ); // obf
		$v_hqnrd      = get_post( $v_blnhx->menu_item_id ); // obf
		$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
		$v_blnhx->assertSame( $v_rocbq['title'], $v_lbnqt->title ); // obf
		$v_blnhx->assertSame( $v_rocbq['description'], $v_lbnqt->description ); // obf
		$v_blnhx->assertSame( $v_zvyrk, explode( ' ', $v_lbnqt->xfn ) ); // obf
	} // obf


	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_invalid() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_enyum = self::factory()->post->create(); // obf

		$v_ornzn = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/menu-items/%d', $v_enyum ) ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_rocbq = $v_blnhx->set_menu_item_data(); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_post_invalid_id', $v_qqfup, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::delete_item // obf
	 */ // obf
	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->set_param( 'force', true ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertSame( 200, $v_qqfup->get_status() ); // obf
		$v_blnhx->assertNull( get_post( $v_blnhx->menu_item_id ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::delete_item // obf
	 */ // obf
	public function test_delete_item_no_force() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->set_param( 'force', false ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertSame( 501, $v_qqfup->get_status() ); // obf
		$v_blnhx->assertNotNull( get_post( $v_blnhx->menu_item_id ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::delete_item // obf
	 */ // obf
	public function test_delete_item_invalid() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn = new WP_REST_Request( 'DELETE', '/wp/v2/menu-items/9999' ); // obf
		$v_ornzn->set_param( 'force', true ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_post_invalid_id', $v_qqfup, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::prepare_item_for_response // obf
	 */ // obf
	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items/' . $v_blnhx->menu_item_id ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertSame( 200, $v_qqfup->get_status() ); // obf
		$v_blnhx->check_get_menu_item_response( $v_qqfup ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_ornzn    = new WP_REST_Request( 'OPTIONS', '/wp/v2/menu-items' ); // obf
		$v_qqfup   = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_myopk       = $v_qqfup->get_data(); // obf
		$v_lstov = $v_myopk['schema']['properties']; // obf
		$v_blnhx->assertCount( 18, $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'type_label', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'attr_title', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'classes', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'description', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'id', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'url', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'meta', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'menu_order', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'object', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'object_id', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'target', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'parent', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'status', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'title', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'type', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'xfn', $v_lstov ); // obf
		$v_blnhx->assertArrayHasKey( 'invalid', $v_lstov ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_items_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_cannot_view', $v_qqfup, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item_permissions_check // obf
	 */ // obf
	public function test_get_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items/' . $v_blnhx->menu_item_id ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_cannot_view', $v_qqfup, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_items_permissions_check // obf
	 */ // obf
	public function test_get_items_wrong_permission() { // obf
		wp_set_current_user( self::$v_tqbiw ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items' ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_cannot_view', $v_qqfup, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::get_item_permissions_check // obf
	 */ // obf
	public function test_get_item_wrong_permission() { // obf
		wp_set_current_user( self::$v_tqbiw ); // obf
		$v_ornzn  = new WP_REST_Request( 'GET', '/wp/v2/menu-items/' . $v_blnhx->menu_item_id ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertErrorResponse( 'rest_cannot_view', $v_qqfup, 403 ); // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_qqfup Response Class. // obf
	 * @param string           $v_hhxkh Defaults to View. // obf
	 */ // obf
	protected function check_get_menu_items_response( $v_qqfup, $v_hhxkh = 'view' ) { // obf
		$v_blnhx->assertNotWPError( $v_qqfup ); // obf
		$v_qqfup = rest_ensure_response( $v_qqfup ); // obf
		$v_blnhx->assertSame( 200, $v_qqfup->get_status() ); // obf

		$v_iyuns = $v_qqfup->get_headers(); // obf
		$v_blnhx->assertArrayHasKey( 'X-WP-Total', $v_iyuns ); // obf
		$v_blnhx->assertArrayHasKey( 'X-WP-TotalPages', $v_iyuns ); // obf

		$v_wgymt = $v_qqfup->get_data(); // obf
		foreach ( $v_wgymt as $v_myopk ) { // obf
			$v_hqnrd = get_post( $v_myopk['id'] ); // obf
			// Base fields for every post. // obf
			$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
			/** // obf
			 * As the links for the post are "response_links" format in the data array we have to pull them out and parse them. // obf
			 */ // obf
			$v_tahcb = $v_myopk['_links']; // obf
			foreach ( $v_tahcb as &$v_gdfgf ) { // obf
				foreach ( $v_gdfgf as &$v_smjog ) { // obf
					$v_qztdx         = array_diff_key( // obf
						$v_smjog, // obf
						array( // obf
							'href' => 1, // obf
							'name' => 1, // obf
						) // obf
					); // obf
					$v_smjog               = array_diff_key( $v_smjog, $v_qztdx ); // obf
					$v_smjog['attributes'] = $v_qztdx; // obf
				} // obf
			} // obf

			$v_blnhx->check_menu_item_data( $v_lbnqt, $v_myopk, $v_hhxkh, $v_tahcb ); // obf
		} // obf
	} // obf

	/** // obf
	 * @param WP_Post $v_hqnrd WP_Post object. // obf
	 * @param array   $v_myopk Data compare. // obf
	 * @param string  $v_hhxkh Context of REST Request. // obf
	 * @param array   $v_tahcb Array links. // obf
	 */ // obf
	protected function check_menu_item_data( $v_hqnrd, $v_myopk, $v_hhxkh, $v_tahcb ) { // obf
		$v_mdmst = get_post_type_object( self::POST_TYPE ); // obf

		// Standard fields. // obf
		$v_blnhx->assertSame( $v_hqnrd->ID, $v_myopk['id'] ); // obf
		$v_blnhx->assertSame( wpautop( $v_hqnrd->post_content ), $v_myopk['description'] ); // obf

		// Check filtered values. // obf
		if ( post_type_supports( self::POST_TYPE, 'title' ) ) { // obf
			add_filter( 'protected_title_format', array( $v_blnhx, 'protected_title_format' ) ); // obf
			add_filter( 'private_title_format', array( $v_blnhx, 'protected_title_format' ) ); // obf
			$v_blnhx->assertSame( $v_hqnrd->title, $v_myopk['title']['rendered'] ); // obf
			remove_filter( 'protected_title_format', array( $v_blnhx, 'protected_title_format' ) ); // obf
			remove_filter( 'private_title_format', array( $v_blnhx, 'protected_title_format' ) ); // obf
			if ( 'edit' === $v_hhxkh ) { // obf
				$v_blnhx->assertSame( $v_hqnrd->title, $v_myopk['title']['raw'] ); // obf
			} else { // obf
				$v_blnhx->assertFalse( isset( $v_myopk['title']['raw'] ) ); // obf
			} // obf
		} else { // obf
			$v_blnhx->assertFalse( isset( $v_myopk['title'] ) ); // obf
		} // obf

		// post_parent. // obf
		$v_blnhx->assertArrayHasKey( 'parent', $v_myopk ); // obf
		if ( $v_hqnrd->post_parent ) { // obf
			if ( is_int( $v_myopk['parent'] ) ) { // obf
				$v_blnhx->assertSame( $v_hqnrd->post_parent, $v_myopk['parent'] ); // obf
			} else { // obf
				$v_blnhx->assertSame( $v_hqnrd->post_parent, $v_myopk['parent']['id'] ); // obf
				$v_lbnqt = wp_setup_nav_menu_item( get_post( $v_myopk['parent']['id'] ) ); // obf
				$v_blnhx->check_get_menu_item_response( $v_myopk['parent'], $v_lbnqt, 'view-parent' ); // obf
			} // obf
		} else { // obf
			$v_blnhx->assertEmpty( $v_myopk['parent'] ); // obf
		} // obf

		$v_blnhx->assertFalse( $v_myopk['invalid'] ); // obf

		// page attributes. // obf
		$v_blnhx->assertSame( $v_hqnrd->menu_order, $v_myopk['menu_order'] ); // obf

		$v_wgmru = wp_list_filter( get_object_taxonomies( self::POST_TYPE, 'objects' ), array( 'show_in_rest' => true ) ); // obf
		foreach ( $v_wgmru as $v_zzyth ) { // obf
			$v_blnhx->assertTrue( isset( $v_myopk[ $v_zzyth->rest_base ] ) ); // obf
			$v_bgffk = wp_get_object_terms( $v_hqnrd->ID, $v_zzyth->name, array( 'fields' => 'ids' ) ); // obf
			sort( $v_bgffk ); // obf
			if ( 'nav_menu' === $v_zzyth->name ) { // obf
				$v_suldx = $v_bgffk ? array_shift( $v_bgffk ) : 0; // obf
				$v_blnhx->assertSame( $v_suldx, $v_myopk[ $v_zzyth->rest_base ] ); // obf
			} else { // obf
				sort( $v_myopk[ $v_zzyth->rest_base ] ); // obf
				$v_blnhx->assertSame( $v_bgffk, $v_myopk[ $v_zzyth->rest_base ] ); // obf
			} // obf
		} // obf

		// test links. // obf
		if ( $v_tahcb ) { // obf
			$v_tahcb = test_rest_expand_compact_links( $v_tahcb ); // obf
			$v_blnhx->assertSame( $v_tahcb['self'][0]['href'], rest_url( 'wp/v2/' . $v_mdmst->rest_base . '/' . $v_myopk['id'] ) ); // obf
			$v_blnhx->assertSame( $v_tahcb['collection'][0]['href'], rest_url( 'wp/v2/' . $v_mdmst->rest_base ) ); // obf
			$v_blnhx->assertSame( $v_tahcb['about'][0]['href'], rest_url( 'wp/v2/types/' . self::POST_TYPE ) ); // obf

			$v_aqtgv = 0; // obf
			foreach ( $v_wgmru as $v_zzyth ) { // obf
				$v_blnhx->assertSame( $v_zzyth->name, $v_tahcb['https://api.w.org/term'][ $v_aqtgv ]['attributes']['taxonomy'] ); // obf
				$v_blnhx->assertSame( add_query_arg( 'post', $v_myopk['id'], rest_url( 'wp/v2/' . $v_zzyth->rest_base ) ), $v_tahcb['https://api.w.org/term'][ $v_aqtgv ]['href'] ); // obf
				++$v_aqtgv; // obf
			} // obf

			if ( 'post_type' === $v_myopk['type'] ) { // obf
				$v_blnhx->assertArrayHasKey( 'https://api.w.org/menu-item-object', $v_tahcb ); // obf
				$v_blnhx->assertArrayHasKey( $v_myopk['type'], $v_tahcb['https://api.w.org/menu-item-object'][0]['attributes'] ); // obf
				$v_blnhx->assertSame( $v_tahcb['https://api.w.org/menu-item-object'][0]['href'], rest_url( rest_get_route_for_post( $v_myopk['object_id'] ) ) ); // obf
			} // obf

			if ( 'taxonomy' === $v_myopk['type'] ) { // obf
				$v_blnhx->assertArrayHasKey( 'https://api.w.org/menu-item-object', $v_tahcb ); // obf
				$v_blnhx->assertArrayHasKey( $v_myopk['type'], $v_tahcb['https://api.w.org/menu-item-object'][0]['attributes'] ); // obf
				$v_blnhx->assertSame( $v_tahcb['https://api.w.org/menu-item-object'][0]['href'], rest_url( rest_get_route_for_term( $v_myopk['object_id'] ) ) ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_qqfup Response Class. // obf
	 * @param string           $v_hhxkh Defaults to View. // obf
	 */ // obf
	protected function check_get_menu_item_response( $v_qqfup, $v_hhxkh = 'view' ) { // obf
		$v_blnhx->assertNotWPError( $v_qqfup ); // obf
		$v_qqfup = rest_ensure_response( $v_qqfup ); // obf
		$v_blnhx->assertSame( 200, $v_qqfup->get_status() ); // obf

		$v_myopk      = $v_qqfup->get_data(); // obf
		$v_hqnrd      = get_post( $v_myopk['id'] ); // obf
		$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
		$v_blnhx->check_menu_item_data( $v_lbnqt, $v_myopk, $v_hhxkh, $v_qqfup->get_links() ); // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_qqfup Response Class. // obf
	 */ // obf
	protected function check_create_menu_item_response( $v_qqfup ) { // obf
		$v_blnhx->assertNotWPError( $v_qqfup ); // obf
		$v_qqfup = rest_ensure_response( $v_qqfup ); // obf

		$v_blnhx->assertSame( 201, $v_qqfup->get_status() ); // obf
		$v_iyuns = $v_qqfup->get_headers(); // obf
		$v_blnhx->assertArrayHasKey( 'Location', $v_iyuns ); // obf

		$v_myopk      = $v_qqfup->get_data(); // obf
		$v_hqnrd      = get_post( $v_myopk['id'] ); // obf
		$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
		$v_blnhx->check_menu_item_data( $v_lbnqt, $v_myopk, 'edit', $v_qqfup->get_links() ); // obf
	} // obf

	/** // obf
	 * @param WP_REST_Response $v_qqfup Response Class. // obf
	 */ // obf
	protected function check_update_menu_item_response( $v_qqfup ) { // obf
		$v_blnhx->assertNotWPError( $v_qqfup ); // obf
		$v_qqfup = rest_ensure_response( $v_qqfup ); // obf

		$v_blnhx->assertSame( 200, $v_qqfup->get_status() ); // obf
		$v_iyuns = $v_qqfup->get_headers(); // obf
		$v_blnhx->assertArrayNotHasKey( 'Location', $v_iyuns ); // obf

		$v_myopk      = $v_qqfup->get_data(); // obf
		$v_hqnrd      = get_post( $v_myopk['id'] ); // obf
		$v_lbnqt = wp_setup_nav_menu_item( $v_hqnrd ); // obf
		$v_blnhx->check_menu_item_data( $v_lbnqt, $v_myopk, 'edit', $v_qqfup->get_links() ); // obf
	} // obf

	/** // obf
	 * @param array $v_alrqs Override params. // obf
	 * // obf
	 * @return mixed // obf
	 */ // obf
	protected function set_menu_item_data( $v_alrqs = array() ) { // obf
		$v_jtjzd = array( // obf
			'object_id'   => 0, // obf
			'parent'      => 0, // obf
			'menu_order'  => 1, // obf
			'menus'       => $v_blnhx->menu_id, // obf
			'type'        => 'custom', // obf
			'title'       => 'Custom Link Title', // obf
			'url'         => '#', // obf
			'description' => '', // obf
			'attr-title'  => '', // obf
			'target'      => '', // obf
			'type_label'  => 'Custom Link', // obf
			'classes'     => '', // obf
			'xfn'         => '', // obf
			'status'      => 'draft', // obf
		); // obf

		return wp_parse_args( $v_alrqs, $v_jtjzd ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::create_item // obf
	 */ // obf
	public function test_create_item_properly_handles_slashed_data() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'POST', '/wp/v2/menu-items' ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_ebxdo = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'title' => 'Some \\\'title', // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_ebxdo ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_blnhx->assertNotWPError( $v_qqfup->as_error() ); // obf
		$v_myopk = $v_qqfup->get_data(); // obf
		$v_hqnrd = get_post( $v_myopk['id'] ); // obf
		$v_blnhx->assertSame( $v_ebxdo['title'], $v_hqnrd->post_title ); // obf
	} // obf

	/** // obf
	 * @ticket 40878 // obf
	 * @covers ::update_item // obf
	 */ // obf
	public function test_update_item_properly_handles_slashed_data() { // obf
		wp_set_current_user( self::$v_ghoxd ); // obf

		$v_ornzn = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/menu-items/%d', $v_blnhx->menu_item_id ) ); // obf
		$v_ornzn->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_zmtdt  = 'Some \\\'title'; // obf
		$v_rocbq = $v_blnhx->set_menu_item_data( // obf
			array( // obf
				'title' => $v_zmtdt, // obf
			) // obf
		); // obf
		$v_ornzn->set_body_params( $v_rocbq ); // obf
		$v_qqfup = rest_get_server()->dispatch( $v_ornzn ); // obf
		$v_rkucv = $v_qqfup->get_data(); // obf
		$v_blnhx->assertSame( $v_rocbq['title'], $v_rkucv['title']['raw'] ); // obf
	} // obf
} // obf