

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Posts_Types_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Post_Types_Controller extends WP_Test_REST_Controller_Testcase { // obf

	public function test_register_routes() { // obf
		$v_wczlt = rest_get_server()->get_routes(); // obf
		$v_qdejk->assertArrayHasKey( '/wp/v2/types', $v_wczlt ); // obf
		$v_qdejk->assertArrayHasKey( '/wp/v2/types/(?P<type>[\w-]+)', $v_wczlt ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_qcgwt  = new WP_REST_Request( 'OPTIONS', '/wp/v2/types' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_lgain     = $v_irbve->get_data(); // obf
		$v_qdejk->assertSame( 'view', $v_lgain['endpoints'][0]['args']['context']['default'] ); // obf
		$v_qdejk->assertSameSets( array( 'view', 'edit', 'embed' ), $v_lgain['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_qcgwt  = new WP_REST_Request( 'OPTIONS', '/wp/v2/types/post' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_lgain     = $v_irbve->get_data(); // obf
		$v_qdejk->assertSame( 'view', $v_lgain['endpoints'][0]['args']['context']['default'] ); // obf
		$v_qdejk->assertSameSets( array( 'view', 'edit', 'embed' ), $v_lgain['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_get_items() { // obf
		$v_qcgwt  = new WP_REST_Request( 'GET', '/wp/v2/types' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf

		$v_lgain       = $v_irbve->get_data(); // obf
		$v_hpnft = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf
		$v_qdejk->assertCount( count( $v_hpnft ), $v_lgain ); // obf
		$v_qdejk->assertSame( $v_hpnft['post']->name, $v_lgain['post']['slug'] ); // obf
		$v_qdejk->check_post_type_obj( 'view', $v_hpnft['post'], $v_lgain['post'], $v_lgain['post']['_links'] ); // obf
		$v_qdejk->assertSame( $v_hpnft['page']->name, $v_lgain['page']['slug'] ); // obf
		$v_qdejk->check_post_type_obj( 'view', $v_hpnft['page'], $v_lgain['page'], $v_lgain['page']['_links'] ); // obf
		$v_qdejk->assertArrayNotHasKey( 'revision', $v_lgain ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rhliq HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_permission_for_context( $v_rhliq ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_qcgwt = new WP_REST_Request( $v_rhliq, '/wp/v2/types' ); // obf
		$v_qcgwt->set_param( 'context', 'edit' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertErrorResponse( 'rest_cannot_view', $v_irbve, 401 ); // obf
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

	public function test_get_item() { // obf
		$v_qcgwt  = new WP_REST_Request( 'GET', '/wp/v2/types/post' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->check_post_type_object_response( 'view', $v_irbve ); // obf
		$v_lgain = $v_irbve->get_data(); // obf
		$v_qdejk->assertSame( array( 'category', 'post_tag' ), $v_lgain['taxonomies'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rhliq The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_rhliq ) { // obf
		$v_qcgwt = new WP_REST_Request( $v_rhliq, '/wp/v2/types/post' ); // obf

		$v_wsdak = 'rest_prepare_post_type'; // obf
		$v_rsmzb    = new MockAction(); // obf
		$v_cvtwh  = array( $v_rsmzb, 'filter' ); // obf
		add_filter( $v_wsdak, $v_cvtwh ); // obf
		$v_gerdb = new class() { // obf
			public static function add_custom_header( $v_irbve ) { // obf
				$v_irbve->header( 'X-Test-Header', 'Test' ); // obf

				return $v_irbve; // obf
			} // obf
		}; // obf
		add_filter( $v_wsdak, array( $v_gerdb, 'add_custom_header' ) ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		remove_filter( $v_wsdak, $v_cvtwh ); // obf
		remove_filter( $v_wsdak, array( $v_gerdb, 'add_custom_header' ) ); // obf

		$v_qdejk->assertSame( 200, $v_irbve->get_status(), 'The response status should be 200.' ); // obf
		$v_qdejk->assertSame( 1, $v_rsmzb->get_call_count(), 'The "' . $v_wsdak . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_bewef = $v_irbve->get_headers(); // obf
		$v_qdejk->assertArrayHasKey( 'X-Test-Header', $v_bewef, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_qdejk->assertSame( 'Test', $v_bewef['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_rhliq ) { // obf
			return null; // obf
		} // obf
		$v_qdejk->assertSame( array(), $v_irbve->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_tbrcn The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_tbrcn ) { // obf
		$v_qcgwt = new WP_REST_Request( 'HEAD', $v_tbrcn ); // obf
		$v_qcgwt->set_param( '_fields', 'slug' ); // obf
		$v_bpcsv   = rest_get_server(); // obf
		$v_irbve = $v_bpcsv->dispatch( $v_qcgwt ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_irbve = apply_filters( 'rest_post_dispatch', $v_irbve, $v_bpcsv, $v_qcgwt ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_qdejk->assertSame( 200, $v_irbve->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/types/post' ), // obf
			'get_items request' => array( '/wp/v2/types' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53656 // obf
	 */ // obf
	public function test_get_item_cpt() { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'cpt', // obf
				'rest_namespace' => 'wordpress/v1', // obf
			) // obf
		); // obf
		$v_qcgwt  = new WP_REST_Request( 'GET', '/wp/v2/types/cpt' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->check_post_type_object_response( 'view', $v_irbve, 'cpt' ); // obf
	} // obf

	/** // obf
	 * @ticket 61477 // obf
	 */ // obf
	public function test_get_item_template_cpt() { // obf
		register_post_type( // obf
			'cpt_template', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'cpt_template', // obf
				'rest_namespace' => 'wordpress/v1', // obf
				'template'       => array( // obf
					array( 'core/paragraph', array( 'placeholder' => 'Content' ) ), // obf
				), // obf
				'template_lock'  => 'all', // obf
			) // obf
		); // obf
		$v_qcgwt  = new WP_REST_Request( 'GET', '/wp/v2/types/cpt_template' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->check_post_type_object_response( 'view', $v_irbve, 'cpt_template' ); // obf
	} // obf

	public function test_get_item_page() { // obf
		$v_qcgwt  = new WP_REST_Request( 'GET', '/wp/v2/types/page' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->check_post_type_object_response( 'view', $v_irbve, 'page' ); // obf
		$v_lgain = $v_irbve->get_data(); // obf
		$v_qdejk->assertSame( array(), $v_lgain['taxonomies'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rhliq HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_type( $v_rhliq ) { // obf
		$v_qcgwt  = new WP_REST_Request( $v_rhliq, '/wp/v2/types/invalid' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertErrorResponse( 'rest_type_invalid', $v_irbve, 404 ); // obf
	} // obf

	public function test_get_item_edit_context() { // obf
		$v_ppsfe = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		wp_set_current_user( $v_ppsfe ); // obf
		$v_qcgwt = new WP_REST_Request( 'GET', '/wp/v2/types/post' ); // obf
		$v_qcgwt->set_param( 'context', 'edit' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->check_post_type_object_response( 'edit', $v_irbve ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rhliq HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_permission_for_context( $v_rhliq ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_qcgwt = new WP_REST_Request( $v_rhliq, '/wp/v2/types/post' ); // obf
		$v_qcgwt->set_param( 'context', 'edit' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertErrorResponse( 'rest_forbidden_context', $v_irbve, 401 ); // obf
	} // obf

	public function test_create_item() { // obf
		/** Post types can't be created */ // obf
		$v_qcgwt  = new WP_REST_Request( 'POST', '/wp/v2/types' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertSame( 404, $v_irbve->get_status() ); // obf
	} // obf

	public function test_update_item() { // obf
		/** Post types can't be updated */ // obf
		$v_qcgwt  = new WP_REST_Request( 'POST', '/wp/v2/types/post' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertSame( 404, $v_irbve->get_status() ); // obf
	} // obf

	public function test_delete_item() { // obf
		/** Post types can't be deleted */ // obf
		$v_qcgwt  = new WP_REST_Request( 'DELETE', '/wp/v2/types/post' ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertSame( 404, $v_irbve->get_status() ); // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_tzctr      = get_post_type_object( 'post' ); // obf
		$v_sktnd = new WP_REST_Post_Types_Controller(); // obf
		$v_qcgwt  = new WP_REST_Request(); // obf
		$v_qcgwt->set_param( 'context', 'edit' ); // obf
		$v_irbve = $v_sktnd->prepare_item_for_response( $v_tzctr, $v_qcgwt ); // obf
		$v_qdejk->check_post_type_obj( 'edit', $v_tzctr, $v_irbve->get_data(), $v_irbve->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_tzctr      = get_post_type_object( 'post' ); // obf
		$v_qcgwt  = new WP_REST_Request(); // obf
		$v_sktnd = new WP_REST_Post_Types_Controller(); // obf
		$v_qcgwt->set_param( 'context', 'edit' ); // obf
		$v_qcgwt->set_param( '_fields', 'id,name' ); // obf
		$v_irbve = $v_sktnd->prepare_item_for_response( $v_tzctr, $v_qcgwt ); // obf
		$v_qdejk->assertSame( // obf
			array( // obf
				// 'id' doesn't exist in this context. // obf
				'name', // obf
			), // obf
			array_keys( $v_irbve->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @covers WP_REST_Post_Types_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_qcgwt    = new WP_REST_Request( 'OPTIONS', '/wp/v2/types' ); // obf
		$v_irbve   = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_lgain       = $v_irbve->get_data(); // obf
		$v_yxdwg = $v_lgain['schema']['properties']; // obf

		$v_qdejk->assertCount( 16, $v_yxdwg, 'Schema should have 16 properties' ); // obf
		$v_qdejk->assertArrayHasKey( 'capabilities', $v_yxdwg, '`capabilities` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'description', $v_yxdwg, '`description` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'hierarchical', $v_yxdwg, '`hierarchical` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'viewable', $v_yxdwg, '`viewable` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'labels', $v_yxdwg, '`labels` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'name', $v_yxdwg, '`name` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'slug', $v_yxdwg, '`slug` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'supports', $v_yxdwg, '`supports` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'has_archive', $v_yxdwg, '`has_archive` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'taxonomies', $v_yxdwg, '`taxonomies` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'rest_base', $v_yxdwg, '`rest_base` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'rest_namespace', $v_yxdwg, '`rest_namespace` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'visibility', $v_yxdwg, '`visibility` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'icon', $v_yxdwg, '`icon` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'template', $v_yxdwg, '`template` should be included in the schema' ); // obf
		$v_qdejk->assertArrayHasKey( 'template_lock', $v_yxdwg, '`template_lock` should be included in the schema' ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_mlzlh = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'type', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_mlzlh, // obf
				'get_callback'    => array( $v_qdejk, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_qdejk, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_qcgwt = new WP_REST_Request( 'OPTIONS', '/wp/v2/types/schema' ); // obf

		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_lgain     = $v_irbve->get_data(); // obf

		$v_qdejk->assertArrayHasKey( 'my_custom_int', $v_lgain['schema']['properties'] ); // obf
		$v_qdejk->assertSame( $v_mlzlh, $v_lgain['schema']['properties']['my_custom_int'] ); // obf

		$v_qcgwt = new WP_REST_Request( 'GET', '/wp/v2/types/post' ); // obf

		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		$v_qdejk->assertArrayHasKey( 'my_custom_int', $v_irbve->data ); // obf

		global $v_chiqr; // obf
		$v_chiqr = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_zkrhe ) { // obf
		return 123; // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_post_types_data() { // obf
		$v_qcgwt   = new WP_REST_Request( 'HEAD', '/wp/v2/types' ); // obf
		$v_wsdak = 'rest_prepare_post_type'; // obf
		$v_rsmzb    = new MockAction(); // obf
		$v_cvtwh  = array( $v_rsmzb, 'filter' ); // obf
		add_filter( $v_wsdak, $v_cvtwh ); // obf
		$v_irbve = rest_get_server()->dispatch( $v_qcgwt ); // obf
		remove_filter( $v_wsdak, $v_cvtwh ); // obf
		$v_qdejk->assertSame( 200, $v_irbve->get_status(), 'The response status should be 200.' ); // obf
		$v_qdejk->assertSame( 0, $v_rsmzb->get_call_count(), 'The "' . $v_wsdak . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_qdejk->assertSame( array(), $v_irbve->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	protected function check_post_type_obj( $v_teohm, $v_bicqr, $v_lgain, $v_lhqks ) { // obf
		$v_qdejk->assertSame( $v_bicqr->label, $v_lgain['name'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->name, $v_lgain['slug'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->description, $v_lgain['description'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->hierarchical, $v_lgain['hierarchical'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->rest_base, $v_lgain['rest_base'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->rest_namespace, $v_lgain['rest_namespace'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->has_archive, $v_lgain['has_archive'] ); // obf
		$v_qdejk->assertSame( $v_bicqr->template ?? array(), $v_lgain['template'] ); // obf
		$v_qdejk->assertSame( ! empty( $v_bicqr->template_lock ) ? $v_bicqr->template_lock : false, $v_lgain['template_lock'] ); // obf

		$v_lhqks = test_rest_expand_compact_links( $v_lhqks ); // obf
		$v_qdejk->assertSame( rest_url( 'wp/v2/types' ), $v_lhqks['collection'][0]['href'] ); // obf
		$v_qdejk->assertArrayHasKey( 'https://api.w.org/items', $v_lhqks ); // obf
		if ( 'edit' === $v_teohm ) { // obf
			$v_qdejk->assertSame( $v_bicqr->cap, $v_lgain['capabilities'] ); // obf
			$v_qdejk->assertSame( $v_bicqr->labels, $v_lgain['labels'] ); // obf
			if ( in_array( $v_bicqr->name, array( 'post', 'page' ), true ) ) { // obf
				$v_qsoas = true; // obf
			} else { // obf
				$v_qsoas = is_post_type_viewable( $v_bicqr ); // obf
			} // obf
			$v_qdejk->assertSame( $v_qsoas, $v_lgain['viewable'] ); // obf
			$v_yqvdx = array( // obf
				'show_in_nav_menus' => (bool) $v_bicqr->show_in_nav_menus, // obf
				'show_ui'           => (bool) $v_bicqr->show_ui, // obf
			); // obf
			$v_qdejk->assertSame( $v_yqvdx, $v_lgain['visibility'] ); // obf
			$v_qdejk->assertSame( get_all_post_type_supports( $v_bicqr->name ), $v_lgain['supports'] ); // obf
		} else { // obf
			$v_qdejk->assertArrayNotHasKey( 'capabilities', $v_lgain ); // obf
			$v_qdejk->assertArrayNotHasKey( 'viewable', $v_lgain ); // obf
			$v_qdejk->assertArrayNotHasKey( 'labels', $v_lgain ); // obf
			$v_qdejk->assertArrayNotHasKey( 'supports', $v_lgain ); // obf
		} // obf
	} // obf

	protected function check_post_type_object_response( $v_teohm, $v_irbve, $v_ubums = 'post' ) { // obf
		$v_qdejk->assertSame( 200, $v_irbve->get_status() ); // obf
		$v_lgain = $v_irbve->get_data(); // obf
		$v_tzctr  = get_post_type_object( $v_ubums ); // obf
		$v_qdejk->check_post_type_obj( $v_teohm, $v_tzctr, $v_lgain, $v_irbve->get_links() ); // obf
	} // obf
} // obf