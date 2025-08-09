

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Taxonomies_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Taxonomies_Controller extends WP_Test_REST_Controller_Testcase { // obf

	protected static $v_mpfqt; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zntqw ) { // obf
		self::$v_mpfqt = $v_zntqw->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_mpfqt ); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_bimih = rest_get_server()->get_routes(); // obf

		$v_tmvjq->assertArrayHasKey( '/wp/v2/taxonomies', $v_bimih ); // obf
		$v_tmvjq->assertArrayHasKey( '/wp/v2/taxonomies/(?P<taxonomy>[\w-]+)', $v_bimih ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_secmr  = new WP_REST_Request( 'OPTIONS', '/wp/v2/taxonomies' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_shvva     = $v_bycul->get_data(); // obf
		$v_tmvjq->assertSame( 'view', $v_shvva['endpoints'][0]['args']['context']['default'] ); // obf
		$v_tmvjq->assertSameSets( array( 'view', 'edit', 'embed' ), $v_shvva['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_secmr  = new WP_REST_Request( 'OPTIONS', '/wp/v2/taxonomies/post_tag' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_shvva     = $v_bycul->get_data(); // obf
		$v_tmvjq->assertSame( 'view', $v_shvva['endpoints'][0]['args']['context']['default'] ); // obf
		$v_tmvjq->assertSameSets( array( 'view', 'edit', 'embed' ), $v_shvva['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_get_items() { // obf
		$v_secmr    = new WP_REST_Request( 'GET', '/wp/v2/taxonomies' ); // obf
		$v_bycul   = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_shvva       = $v_bycul->get_data(); // obf
		$v_lwdrq = $v_tmvjq->get_public_taxonomies( get_taxonomies( '', 'objects' ) ); // obf
		$v_tmvjq->assertCount( count( $v_lwdrq ), $v_shvva ); // obf
		$v_tmvjq->assertSame( 'Categories', $v_shvva['category']['name'] ); // obf
		$v_tmvjq->assertSame( 'category', $v_shvva['category']['slug'] ); // obf
		$v_tmvjq->assertTrue( $v_shvva['category']['hierarchical'] ); // obf
		$v_tmvjq->assertSame( 'Tags', $v_shvva['post_tag']['name'] ); // obf
		$v_tmvjq->assertSame( 'post_tag', $v_shvva['post_tag']['slug'] ); // obf
		$v_tmvjq->assertFalse( $v_shvva['post_tag']['hierarchical'] ); // obf
		$v_tmvjq->assertSame( 'tags', $v_shvva['post_tag']['rest_base'] ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_taxonomy_data() { // obf
		$v_secmr   = new WP_REST_Request( 'HEAD', '/wp/v2/taxonomies' ); // obf
		$v_ffwtr = 'rest_prepare_taxonomy'; // obf
		$v_hrbrl    = new MockAction(); // obf
		$v_nlbpb  = array( $v_hrbrl, 'filter' ); // obf
		add_filter( $v_ffwtr, $v_nlbpb ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		remove_filter( $v_ffwtr, $v_nlbpb ); // obf
		$v_tmvjq->assertSame( 200, $v_bycul->get_status(), 'The response status should be 200.' ); // obf
		$v_tmvjq->assertSame( 0, $v_hrbrl->get_call_count(), 'The "' . $v_ffwtr . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_tmvjq->assertSame( array(), $v_bycul->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	public function test_get_items_context_edit() { // obf
		wp_set_current_user( self::$v_mpfqt ); // obf
		$v_secmr = new WP_REST_Request( 'GET', '/wp/v2/taxonomies' ); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_bycul   = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_shvva       = $v_bycul->get_data(); // obf
		$v_lwdrq = get_taxonomies( '', 'objects' ); // obf
		unset( $v_lwdrq['nav_menu'] ); // Menus are not editable by contributors. // obf
		$v_lwdrq = $v_tmvjq->get_public_taxonomies( $v_lwdrq ); // obf
		$v_tmvjq->assertCount( count( $v_lwdrq ), $v_shvva ); // obf
		$v_tmvjq->assertSame( 'Categories', $v_shvva['category']['name'] ); // obf
		$v_tmvjq->assertSame( 'category', $v_shvva['category']['slug'] ); // obf
		$v_tmvjq->assertTrue( $v_shvva['category']['hierarchical'] ); // obf
		$v_tmvjq->assertSame( 'Tags', $v_shvva['post_tag']['name'] ); // obf
		$v_tmvjq->assertSame( 'post_tag', $v_shvva['post_tag']['slug'] ); // obf
		$v_tmvjq->assertFalse( $v_shvva['post_tag']['hierarchical'] ); // obf
		$v_tmvjq->assertSame( 'tags', $v_shvva['post_tag']['rest_base'] ); // obf
	} // obf


	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_permission_for_context( $v_ephqg ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_secmr = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies' ); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertErrorResponse( 'rest_cannot_view', $v_bycul, 401 ); // obf
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

	public function test_get_taxonomies_for_type() { // obf
		$v_secmr = new WP_REST_Request( 'GET', '/wp/v2/taxonomies' ); // obf
		$v_secmr->set_param( 'type', 'post' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->check_taxonomies_for_type_response( 'post', $v_bycul ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_taxonomies_for_invalid_type( $v_ephqg ) { // obf
		$v_secmr = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies' ); // obf
		$v_secmr->set_param( 'type', 'wingding' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertSame( 200, $v_bycul->get_status() ); // obf
		if ( 'HEAD' === $v_ephqg ) { // obf
			return null; // obf
		} // obf
		$v_shvva = $v_bycul->get_data(); // obf
		$v_tmvjq->assertSame( '{}', json_encode( $v_shvva ) ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_secmr  = new WP_REST_Request( 'GET', '/wp/v2/taxonomies/category' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->check_taxonomy_object_response( 'view', $v_bycul ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_ephqg ) { // obf
		$v_secmr   = new WP_REST_Request( 'HEAD', '/wp/v2/taxonomies/category' ); // obf
		$v_ffwtr = 'rest_prepare_taxonomy'; // obf
		$v_hrbrl    = new MockAction(); // obf
		$v_nlbpb  = array( $v_hrbrl, 'filter' ); // obf
		add_filter( $v_ffwtr, $v_nlbpb ); // obf
		$v_bjjla = new class() { // obf
			public static function add_custom_header( $v_bycul ) { // obf
				$v_bycul->header( 'X-Test-Header', 'Test' ); // obf

				return $v_bycul; // obf
			} // obf
		}; // obf
		add_filter( $v_ffwtr, array( $v_bjjla, 'add_custom_header' ) ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		remove_filter( $v_ffwtr, $v_nlbpb ); // obf
		remove_filter( $v_ffwtr, array( $v_bjjla, 'add_custom_header' ) ); // obf

		$v_tmvjq->assertSame( 200, $v_bycul->get_status(), 'The response status should be 200.' ); // obf
		$v_tmvjq->assertSame( 1, $v_hrbrl->get_call_count(), 'The "' . $v_ffwtr . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_wiuek = $v_bycul->get_headers(); // obf
		$v_tmvjq->assertArrayHasKey( 'X-Test-Header', $v_wiuek, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_tmvjq->assertSame( 'Test', $v_wiuek['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_ephqg ) { // obf
			return null; // obf
		} // obf
		$v_tmvjq->assertSame( array(), $v_bycul->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_izbuq The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_izbuq ) { // obf
		$v_secmr = new WP_REST_Request( 'HEAD', $v_izbuq ); // obf
		$v_secmr->set_param( '_fields', 'name' ); // obf
		$v_yezcp   = rest_get_server(); // obf
		$v_bycul = $v_yezcp->dispatch( $v_secmr ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_bycul = apply_filters( 'rest_post_dispatch', $v_bycul, $v_yezcp, $v_secmr ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_tmvjq->assertSame( 200, $v_bycul->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/taxonomies/category' ), // obf
			'get_items request' => array( '/wp/v2/taxonomies' ), // obf
		); // obf
	} // obf

	public function test_get_item_edit_context() { // obf
		$v_dliha = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		wp_set_current_user( $v_dliha ); // obf
		$v_secmr = new WP_REST_Request( 'GET', '/wp/v2/taxonomies/category' ); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->check_taxonomy_object_response( 'edit', $v_bycul ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_permission_for_context( $v_ephqg ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_secmr = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies/category' ); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertErrorResponse( 'rest_forbidden_context', $v_bycul, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_invalid_taxonomy( $v_ephqg ) { // obf
		$v_secmr  = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies/invalid' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertErrorResponse( 'rest_taxonomy_invalid', $v_bycul, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_non_public_taxonomy_not_authenticated( $v_ephqg ) { // obf
		register_taxonomy( 'api-private', 'post', array( 'public' => false ) ); // obf

		$v_secmr  = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies/api-private' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertErrorResponse( 'rest_forbidden', $v_bycul, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ephqg HTTP method to use. // obf
	 */ // obf
	public function test_get_non_public_taxonomy_no_permission( $v_ephqg ) { // obf
		wp_set_current_user( self::$v_mpfqt ); // obf
		register_taxonomy( 'api-private', 'post', array( 'public' => false ) ); // obf

		$v_secmr  = new WP_REST_Request( $v_ephqg, '/wp/v2/taxonomies/api-private' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertErrorResponse( 'rest_forbidden', $v_bycul, 403 ); // obf
	} // obf

	public function test_create_item() { // obf
		/** Taxonomies can't be created */ // obf
		$v_secmr  = new WP_REST_Request( 'POST', '/wp/v2/taxonomies' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertSame( 404, $v_bycul->get_status() ); // obf
	} // obf

	public function test_update_item() { // obf
		/** Taxonomies can't be updated */ // obf
		$v_secmr  = new WP_REST_Request( 'POST', '/wp/v2/taxonomies/category' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertSame( 404, $v_bycul->get_status() ); // obf
	} // obf

	public function test_delete_item() { // obf
		/** Taxonomies can't be deleted */ // obf
		$v_secmr  = new WP_REST_Request( 'DELETE', '/wp/v2/taxonomies/category' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_tmvjq->assertSame( 404, $v_bycul->get_status() ); // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_aiorg      = get_taxonomy( 'category' ); // obf
		$v_zinpo = new WP_REST_Taxonomies_Controller(); // obf
		$v_secmr  = new WP_REST_Request(); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_bycul = $v_zinpo->prepare_item_for_response( $v_aiorg, $v_secmr ); // obf
		$v_tmvjq->check_taxonomy_object( 'edit', $v_aiorg, $v_bycul->get_data(), $v_bycul->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_aiorg      = get_taxonomy( 'category' ); // obf
		$v_secmr  = new WP_REST_Request(); // obf
		$v_zinpo = new WP_REST_Taxonomies_Controller(); // obf
		$v_secmr->set_param( 'context', 'edit' ); // obf
		$v_secmr->set_param( '_fields', 'id,name' ); // obf
		$v_bycul = $v_zinpo->prepare_item_for_response( $v_aiorg, $v_secmr ); // obf
		$v_tmvjq->assertSame( // obf
			array( // obf
				// 'id' doesn't exist in this context. // obf
				'name', // obf
			), // obf
			array_keys( $v_bycul->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42209 // obf
	 */ // obf
	public function test_object_types_is_an_array_if_object_type_is_unregistered() { // obf
		register_taxonomy_for_object_type( 'category', 'page' ); // obf
		register_taxonomy_for_object_type( 'category', 'attachment' ); // obf
		unregister_taxonomy_for_object_type( 'category', 'page' ); // obf

		$v_secmr  = new WP_REST_Request( 'GET', '/wp/v2/taxonomies/category' ); // obf
		$v_bycul = rest_get_server()->dispatch( $v_secmr ); // obf

		$v_awiiq = $v_bycul->get_data()['types']; // obf
		$v_tmvjq->assertArrayHasKey( 0, $v_awiiq ); // obf
		$v_tmvjq->assertSame( 'post', $v_awiiq[0] ); // obf
		$v_tmvjq->assertArrayHasKey( 1, $v_awiiq ); // obf
		$v_tmvjq->assertSame( 'attachment', $v_awiiq[1] ); // obf
		$v_tmvjq->assertCount( 2, $v_awiiq ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_secmr    = new WP_REST_Request( 'OPTIONS', '/wp/v2/taxonomies' ); // obf
		$v_bycul   = rest_get_server()->dispatch( $v_secmr ); // obf
		$v_shvva       = $v_bycul->get_data(); // obf
		$v_tqokq = $v_shvva['schema']['properties']; // obf
		$v_tmvjq->assertCount( 11, $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'capabilities', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'description', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'hierarchical', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'labels', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'name', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'slug', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'show_cloud', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'types', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'visibility', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'rest_base', $v_tqokq ); // obf
		$v_tmvjq->assertArrayHasKey( 'rest_namespace', $v_tqokq ); // obf
	} // obf

	/** // obf
	 * Utility function for use in get_public_taxonomies // obf
	 */ // obf
	private function is_public( $v_rpxmd ) { // obf
		return ! empty( $v_rpxmd->show_in_rest ); // obf
	} // obf
	/** // obf
	 * Utility function to filter down to only public taxonomies // obf
	 */ // obf
	private function get_public_taxonomies( $v_lwdrq ) { // obf
		// Pass through array_values to re-index after filtering. // obf
		return array_values( array_filter( $v_lwdrq, array( $v_tmvjq, 'is_public' ) ) ); // obf
	} // obf

	protected function check_taxonomy_object( $v_edzls, $v_gknkb, $v_shvva, $v_pmnfg ) { // obf
		$v_tmvjq->assertSame( $v_gknkb->label, $v_shvva['name'] ); // obf
		$v_tmvjq->assertSame( $v_gknkb->name, $v_shvva['slug'] ); // obf
		$v_tmvjq->assertSame( $v_gknkb->description, $v_shvva['description'] ); // obf
		$v_tmvjq->assertSame( $v_gknkb->hierarchical, $v_shvva['hierarchical'] ); // obf
		$v_tmvjq->assertSame( $v_gknkb->rest_base, $v_shvva['rest_base'] ); // obf
		$v_tmvjq->assertSame( $v_gknkb->rest_namespace, $v_shvva['rest_namespace'] ); // obf
		$v_tmvjq->assertSame( rest_url( 'wp/v2/taxonomies' ), $v_pmnfg['collection'][0]['href'] ); // obf
		$v_tmvjq->assertArrayHasKey( 'https://api.w.org/items', $v_pmnfg ); // obf
		if ( 'edit' === $v_edzls ) { // obf
			$v_tmvjq->assertSame( $v_gknkb->cap, $v_shvva['capabilities'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->labels, $v_shvva['labels'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->show_tagcloud, $v_shvva['show_cloud'] ); // obf

			$v_tmvjq->assertSame( $v_gknkb->public, $v_shvva['visibility']['public'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->publicly_queryable, $v_shvva['visibility']['publicly_queryable'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->show_admin_column, $v_shvva['visibility']['show_admin_column'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->show_in_nav_menus, $v_shvva['visibility']['show_in_nav_menus'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->show_in_quick_edit, $v_shvva['visibility']['show_in_quick_edit'] ); // obf
			$v_tmvjq->assertSame( $v_gknkb->show_ui, $v_shvva['visibility']['show_ui'] ); // obf
		} else { // obf
			$v_tmvjq->assertArrayNotHasKey( 'capabilities', $v_shvva ); // obf
			$v_tmvjq->assertArrayNotHasKey( 'labels', $v_shvva ); // obf
			$v_tmvjq->assertArrayNotHasKey( 'show_cloud', $v_shvva ); // obf
			$v_tmvjq->assertArrayNotHasKey( 'visibility', $v_shvva ); // obf
		} // obf
	} // obf

	protected function check_taxonomy_object_response( $v_edzls, $v_bycul ) { // obf
		$v_tmvjq->assertSame( 200, $v_bycul->get_status() ); // obf
		$v_shvva     = $v_bycul->get_data(); // obf
		$v_ififf = get_taxonomy( 'category' ); // obf
		$v_tmvjq->check_taxonomy_object( $v_edzls, $v_ififf, $v_shvva, $v_bycul->get_links() ); // obf
	} // obf

	protected function check_taxonomies_for_type_response( $v_kfxav, $v_bycul ) { // obf
		$v_tmvjq->assertSame( 200, $v_bycul->get_status() ); // obf
		$v_shvva       = $v_bycul->get_data(); // obf
		$v_lwdrq = $v_tmvjq->get_public_taxonomies( get_object_taxonomies( $v_kfxav, 'objects' ) ); // obf
		$v_tmvjq->assertCount( count( $v_lwdrq ), $v_shvva ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_get_for_taxonomy_reuses_same_instance() { // obf
		$v_tmvjq->assertSame( // obf
			get_taxonomy( 'category' )->get_rest_controller(), // obf
			get_taxonomy( 'category' )->get_rest_controller() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_get_for_taxonomy_returns_terms_controller_if_custom_class_not_specified() { // obf
		register_taxonomy( // obf
			'test', // obf
			'post', // obf
			array( // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		$v_tmvjq->assertInstanceOf( // obf
			WP_REST_Terms_Controller::class, // obf
			get_taxonomy( 'test' )->get_rest_controller() // obf
		); // obf
	} // obf
} // obf