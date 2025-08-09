

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Sidebars_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 * // obf
 * @covers WP_REST_Sidebars_Controller // obf
 * // obf
 * @see WP_Test_REST_Controller_Testcase // obf
 * @group restapi // obf
 * @group widgets // obf
 */ // obf
class WP_Test_REST_Sidebars_Controller extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_zyceq; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_bxunu; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_sgefa Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_sgefa ) { // obf
		self::$v_zyceq  = $v_sgefa->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_bxunu = $v_sgefa->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_zyceq ); // obf
		self::delete_user( self::$v_bxunu ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_zyceq ); // obf

		// Unregister all widgets and sidebars. // obf
		global $v_xxnqr, $v_oygdd; // obf
		$v_xxnqr = array(); // obf
		$v_oygdd   = array(); // obf
		update_option( 'sidebars_widgets', array() ); // obf
	} // obf

	public function clean_up_global_scope() { // obf
		global $v_dxegb, $v_xxnqr, $v_nqtjx, $v_yauzp, $v_fkxtx; // obf

		$v_xxnqr        = array(); // obf
		$v_nqtjx         = array(); // obf
		$v_yauzp = array(); // obf
		$v_fkxtx  = array(); // obf
		$v_dxegb->widgets    = array(); // obf

		parent::clean_up_global_scope(); // obf
	} // obf

	private function setup_widget( $v_lfiqt, $v_pdtmq, $v_judxp ) { // obf
		$v_mdhwa->setup_widgets( // obf
			$v_lfiqt, // obf
			array( // obf
				$v_pdtmq => $v_judxp, // obf
			) // obf
		); // obf
	} // obf

	private function setup_widgets( $v_lfiqt, $v_judxp ) { // obf
		update_option( $v_lfiqt, $v_judxp ); // obf
	} // obf

	private function setup_sidebar( $v_ovqpg, $v_yongt = array(), $v_eyups = array() ) { // obf
		global $v_xxnqr; // obf
		update_option( // obf
			'sidebars_widgets', // obf
			array( // obf
				$v_ovqpg => $v_eyups, // obf
			) // obf
		); // obf
		$v_xxnqr[ $v_ovqpg ] = array_merge( // obf
			array( // obf
				'id'            => $v_ovqpg, // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
			), // obf
			$v_yongt // obf
		); // obf

		global $v_nqtjx; // obf
		foreach ( $v_nqtjx as $v_wiumj ) { // obf
			if ( is_array( $v_wiumj['callback'] ) ) { // obf
				$v_wiumj['callback'][0]->_register(); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_qhdea = rest_get_server()->get_routes(); // obf
		$v_mdhwa->assertArrayHasKey( '/wp/v2/sidebars', $v_qhdea ); // obf
		$v_mdhwa->assertArrayHasKey( '/wp/v2/sidebars/(?P<id>[\w-]+)', $v_qhdea ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_jyggk  = new WP_REST_Request( 'OPTIONS', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_mdhwa->assertSame( 'view', $v_tlbae['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mdhwa->assertSame( array( 'view', 'embed', 'edit' ), $v_tlbae['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_jyggk  = new WP_REST_Request( 'OPTIONS', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_mdhwa->assertSame( 'view', $v_tlbae['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mdhwa->assertSame( array( 'view', 'embed', 'edit' ), $v_tlbae['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_widgets_init(); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf

		$v_mdhwa->assertSame( array(), $v_tlbae ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_sidebar_data() { // obf
		wp_widgets_init(); // obf

		$v_jyggk = new WP_REST_Request( 'HEAD', '/wp/v2/sidebars' ); // obf

		$v_gdesj = 'rest_prepare_sidebar'; // obf
		$v_irweh    = new MockAction(); // obf
		$v_ejxmd  = array( $v_irweh, 'filter' ); // obf

		add_filter( $v_gdesj, $v_ejxmd ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		remove_filter( $v_gdesj, $v_ejxmd ); // obf

		$v_mdhwa->assertNotWPError( $v_izfcg ); // obf

		$v_mdhwa->assertSame( 200, $v_izfcg->get_status(), 'The response status should be 200.' ); // obf
		$v_mdhwa->assertSame( 0, $v_irweh->get_call_count(), 'The "' . $v_gdesj . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_mdhwa->assertSame( array(), $v_izfcg->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_nwzcj HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_nwzcj ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_jyggk  = new WP_REST_Request( $v_nwzcj, '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 53915 // obf
	 */ // obf
	public function test_get_items_no_permission_show_in_rest() { // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		wp_set_current_user( 0 ); // obf
		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'sidebar-1', // obf
					'name'          => 'Test sidebar', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53915 // obf
	 */ // obf
	public function test_get_items_without_show_in_rest_are_removed_from_the_list() { // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar 1', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-2', // obf
			array( // obf
				'name'         => 'Test sidebar 2', // obf
				'show_in_rest' => false, // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-3', // obf
			array( // obf
				'name'         => 'Test sidebar 3', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_bxunu ); // obf
		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'sidebar-1', // obf
					'name'          => 'Test sidebar 1', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
				array( // obf
					'id'            => 'sidebar-3', // obf
					'name'          => 'Test sidebar 3', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_wrong_permission_author() { // obf
		wp_set_current_user( self::$v_bxunu ); // obf
		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_basic_sidebar() { // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'wp_inactive_widgets', // obf
					'name'          => 'Inactive widgets', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'inactive', // obf
					'widgets'       => array(), // obf
				), // obf
				array( // obf
					'id'            => 'sidebar-1', // obf
					'name'          => 'Test sidebar', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_active_sidebar_with_widgets() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widget( // obf
			'widget_rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'sidebar-1', // obf
					'name'          => 'Test sidebar', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array( // obf
						'text-1', // obf
						'rss-1', // obf
					), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53489 // obf
	 */ // obf
	public function test_get_items_when_registering_new_sidebars() { // obf
		register_sidebar( // obf
			array( // obf
				'name'          => 'New Sidebar', // obf
				'id'            => 'new-sidebar', // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'wp_inactive_widgets', // obf
					'name'          => 'Inactive widgets', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'inactive', // obf
					'widgets'       => array(), // obf
				), // obf
				array( // obf
					'id'            => 'new-sidebar', // obf
					'name'          => 'New Sidebar', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53646 // obf
	 */ // obf
	public function test_get_items_when_descriptions_have_markup() { // obf
		register_sidebar( // obf
			array( // obf
				'name'          => 'New Sidebar', // obf
				'id'            => 'new-sidebar', // obf
				'description'   => '<iframe></iframe>This is a <b>description</b> with some <a href="#">markup</a>.<script></script>', // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'wp_inactive_widgets', // obf
					'name'          => 'Inactive widgets', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'inactive', // obf
					'widgets'       => array(), // obf
				), // obf
				array( // obf
					'id'            => 'new-sidebar', // obf
					'name'          => 'New Sidebar', // obf
					'description'   => 'This is a <b>description</b> with some <a href="#">markup</a>.', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array(), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				'id'            => 'sidebar-1', // obf
				'name'          => 'Test sidebar', // obf
				'description'   => '', // obf
				'class'         => '', // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
				'status'        => 'active', // obf
				'widgets'       => array(), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_nwzcj The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_nwzcj ) { // obf
		$v_gdesj = 'rest_prepare_sidebar'; // obf
		$v_irweh    = new MockAction(); // obf
		$v_ejxmd  = array( $v_irweh, 'filter' ); // obf
		add_filter( $v_gdesj, $v_ejxmd ); // obf
		$v_uovtk = new class() { // obf
			public static function add_custom_header( $v_izfcg ) { // obf
				$v_izfcg->header( 'X-Test-Header', 'Test' ); // obf

				return $v_izfcg; // obf
			} // obf
		}; // obf
		add_filter( $v_gdesj, array( $v_uovtk, 'add_custom_header' ) ); // obf

		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( $v_nwzcj, '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		remove_filter( $v_gdesj, $v_ejxmd ); // obf
		remove_filter( $v_gdesj, array( $v_uovtk, 'add_custom_header' ) ); // obf

		$v_mdhwa->assertSame( 200, $v_izfcg->get_status(), 'The response status should be 200.' ); // obf
		$v_mdhwa->assertSame( 1, $v_irweh->get_call_count(), 'The "' . $v_gdesj . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_ffivq = $v_izfcg->get_headers(); // obf
		$v_mdhwa->assertArrayHasKey( 'X-Test-Header', $v_ffivq, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_mdhwa->assertSame( 'Test', $v_ffivq['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_nwzcj ) { // obf
			return null; // obf
		} // obf
		$v_mdhwa->assertSame( array(), $v_izfcg->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_jwvwt The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_jwvwt ) { // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'HEAD', $v_jwvwt ); // obf
		// This endpoint doesn't seem to support _fields param, but we need to set it to reproduce the fatal error. // obf
		$v_jyggk->set_param( '_fields', 'name' ); // obf
		$v_fbknu   = rest_get_server(); // obf
		$v_izfcg = $v_fbknu->dispatch( $v_jyggk ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_izfcg = apply_filters( 'rest_post_dispatch', $v_izfcg, $v_fbknu, $v_jyggk ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_mdhwa->assertSame( 200, $v_izfcg->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf

			'get_item request'  => array( '/wp/v2/sidebars/sidebar-1' ), // obf
			'get_items request' => array( '/wp/v2/sidebars' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide HTTP method names for testing GET and HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_readable_http_methods() { // obf
		return array( // obf
			'GET request'  => array( 'GET' ), // obf
			'HEAD request' => array( 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_nwzcj The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_nwzcj ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( $v_nwzcj, '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item_no_permission_public() { // obf
		wp_set_current_user( 0 ); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( 'GET', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				'id'            => 'sidebar-1', // obf
				'name'          => 'Test sidebar', // obf
				'description'   => '', // obf
				'class'         => '', // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
				'status'        => 'active', // obf
				'widgets'       => array(), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_nwzcj The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_wrong_permission_author( $v_nwzcj ) { // obf
		wp_set_current_user( self::$v_bxunu ); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_jyggk  = new WP_REST_Request( $v_nwzcj, '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 403 ); // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for sidebar. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widget( // obf
			'widget_rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			2, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'PUT', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'widgets' => array( // obf
					'text-1', // obf
					'text-2', // obf
				), // obf
			) // obf
		); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				'id'            => 'sidebar-1', // obf
				'name'          => 'Test sidebar', // obf
				'description'   => '', // obf
				'class'         => '', // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
				'status'        => 'active', // obf
				'widgets'       => array( // obf
					'text-1', // obf
					'text-2', // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_removes_widget_from_existing_sidebar() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-2', // obf
			array( // obf
				'name' => 'Test sidebar 2', // obf
			), // obf
			array() // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'PUT', '/wp/v2/sidebars/sidebar-2' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'widgets' => array( // obf
					'text-1', // obf
				), // obf
			) // obf
		); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_mdhwa->assertContains( 'text-1', $v_tlbae['widgets'] ); // obf

		$v_mdhwa->assertNotContains( 'text-1', rest_do_request( '/wp/v2/sidebars/sidebar-1' )->get_data()['widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 53612 // obf
	 */ // obf
	public function test_batch_remove_widgets_from_existing_sidebar() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widgets( // obf
			'widget_text', // obf
			array( // obf
				2 => array( 'text' => 'Text widget' ), // obf
				3 => array( 'text' => 'Text widget' ), // obf
				4 => array( 'text' => 'Text widget' ), // obf
				5 => array( 'text' => 'Text widget' ), // obf
				6 => array( 'text' => 'Text widget' ), // obf
			) // obf
		); // obf

		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-2', 'text-3', 'text-4', 'text-5', 'text-6' ) // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'requests' => array( // obf
					array( // obf
						'method' => 'DELETE', // obf
						'path'   => '/wp/v2/widgets/text-2?force=1', // obf
					), // obf
					array( // obf
						'method' => 'DELETE', // obf
						'path'   => '/wp/v2/widgets/text-3?force=1', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		rest_get_server()->dispatch( $v_jyggk ); // obf

		$v_mdhwa->assertSame( // obf
			array( 'text-4', 'text-5', 'text-6' ), // obf
			rest_do_request( '/wp/v2/sidebars/sidebar-1' )->get_data()['widgets'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_moves_omitted_widget_to_inactive_sidebar() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			2, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'PUT', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'widgets' => array( // obf
					'text-2', // obf
				), // obf
			) // obf
		); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_mdhwa->assertContains( 'text-2', $v_tlbae['widgets'] ); // obf
		$v_mdhwa->assertNotContains( 'text-1', $v_tlbae['widgets'] ); // obf

		$v_mdhwa->assertContains( 'text-1', rest_do_request( '/wp/v2/sidebars/wp_inactive_widgets' )->get_data()['widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_inactive_widgets() { // obf
		wp_widgets_init(); // obf

		$v_mdhwa->setup_widget( // obf
			'widget_rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf
		update_option( // obf
			'sidebars_widgets', // obf
			array_merge( // obf
				get_option( 'sidebars_widgets' ), // obf
				array( // obf
					'wp_inactive_widgets' => array( 'rss-1', 'rss' ), // obf
				) // obf
			) // obf
		); // obf

		$v_jyggk = new WP_REST_Request( 'GET', '/wp/v2/sidebars' ); // obf
		$v_jyggk->set_param( 'context', 'view' ); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf
		$v_mdhwa->assertSame( // obf
			array( // obf
				array( // obf
					'id'            => 'sidebar-1', // obf
					'name'          => 'Test sidebar', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'active', // obf
					'widgets'       => array( // obf
						'text-1', // obf
					), // obf
				), // obf
				array( // obf
					'id'            => 'wp_inactive_widgets', // obf
					'name'          => 'Inactive widgets', // obf
					'description'   => '', // obf
					'class'         => '', // obf
					'before_widget' => '', // obf
					'after_widget'  => '', // obf
					'before_title'  => '', // obf
					'after_title'   => '', // obf
					'status'        => 'inactive', // obf
					'widgets'       => array( // obf
						'rss-1', // obf
					), // obf
				), // obf
			), // obf
			$v_tlbae // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 57531 // obf
	 * @covers WP_Test_REST_Sidebars_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_prepare_item_for_response_to_set_inactive_on_theme_switch() { // obf
		$v_jyggk = new WP_REST_Request( 'GET', '/wp/v2/sidebars/sidebar-1' ); // obf

		// Set up the test. // obf
		wp_widgets_init(); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_widget( // obf
			'widget_text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_mdhwa->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Sidebar 1', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		// Validate the state before a theme switch. // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf

		$v_mdhwa->assertSame( 'active', $v_tlbae['status'] ); // obf
		$v_mdhwa->assertFalse( // obf
			get_theme_mod( 'wp_classic_sidebars' ), // obf
			'wp_classic_sidebars theme mod should not exist before switching to block theme' // obf
		); // obf

		switch_theme( 'block-theme' ); // obf
		wp_widgets_init(); // obf

		// Validate the state after a theme switch. // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae     = $v_izfcg->get_data(); // obf
		$v_tlbae     = $v_mdhwa->remove_links( $v_tlbae ); // obf

		$v_mdhwa->assertSame( // obf
			'inactive', // obf
			$v_tlbae['status'], // obf
			'Sidebar status should have changed to inactive' // obf
		); // obf
		$v_mdhwa->assertSame( // obf
			array( 'text-1', 'rss-1' ), // obf
			$v_tlbae['widgets'], // obf
			'The text and rss widgets should still in sidebar-1' // obf
		); // obf
		$v_mdhwa->assertArrayHasKey( // obf
			'sidebar-1', // obf
			get_theme_mod( 'wp_classic_sidebars' ), // obf
			'sidebar-1 should be in "wp_classic_sidebars" theme mod' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_jyggk = new WP_REST_Request( 'POST', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'widgets' => array(), // obf
			) // obf
		); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_wrong_permission_author() { // obf
		wp_set_current_user( self::$v_bxunu ); // obf

		$v_jyggk = new WP_REST_Request( 'POST', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_jyggk->set_body_params( // obf
			array( // obf
				'widgets' => array(), // obf
			) // obf
		); // obf
		$v_izfcg = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_mdhwa->assertErrorResponse( 'rest_cannot_manage_widgets', $v_izfcg, 403 ); // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for sidebar. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * The prepare_item() method does not exist for sidebar. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_zyceq ); // obf
		$v_jyggk    = new WP_REST_Request( 'OPTIONS', '/wp/v2/sidebars' ); // obf
		$v_izfcg   = rest_get_server()->dispatch( $v_jyggk ); // obf
		$v_tlbae       = $v_izfcg->get_data(); // obf
		$v_ozkea = $v_tlbae['schema']['properties']; // obf

		$v_mdhwa->assertArrayHasKey( 'id', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'name', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'description', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'status', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'widgets', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'class', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'before_widget', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'after_widget', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'before_title', $v_ozkea ); // obf
		$v_mdhwa->assertArrayHasKey( 'after_title', $v_ozkea ); // obf
		$v_mdhwa->assertCount( 10, $v_ozkea ); // obf
	} // obf

	/** // obf
	 * Helper to remove links key. // obf
	 * // obf
	 * @param array $v_tlbae Array of data. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function remove_links( $v_tlbae ) { // obf
		if ( ! is_array( $v_tlbae ) ) { // obf
			return $v_tlbae; // obf
		} // obf
		$v_rmcok = 0; // obf
		foreach ( $v_tlbae as $v_vftva ) { // obf
			if ( isset( $v_vftva['_links'] ) ) { // obf
				unset( $v_tlbae[ $v_rmcok ]['_links'] ); // obf
			} // obf
			++$v_rmcok; // obf
		} // obf

		return $v_tlbae; // obf
	} // obf
} // obf