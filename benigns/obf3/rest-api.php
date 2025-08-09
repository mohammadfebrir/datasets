

<?php // obf
/** // obf
 * REST API functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 */ // obf

require_once ABSPATH . 'wp-admin/includes/admin.php'; // obf
require_once ABSPATH . WPINC . '/rest-api.php'; // obf
require_once __DIR__ . '/../includes/class-jsonserializable-object.php'; // obf

/** // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_API extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Override the normal server with our spying server. // obf
		$v_dambc['wp_rest_server'] = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_dambc['wp_rest_server'] ); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'wp_rest_server_class', array( $v_odnto, 'filter_wp_rest_server_class' ) ); // obf
		parent::tear_down(); // obf
	} // obf

	public function filter_wp_rest_server_class( $v_zomeo ) { // obf
		return 'Spy_REST_Server'; // obf
	} // obf

	public function test_rest_get_server_fails_with_undefined_method() { // obf
		$v_odnto->expectException( Error::class ); // obf
		rest_get_server()->does_not_exist(); // obf
	} // obf

	/** // obf
	 * Checks that the main classes are loaded. // obf
	 */ // obf
	public function test_rest_api_active() { // obf
		$v_odnto->assertTrue( class_exists( 'WP_REST_Server' ) ); // obf
		$v_odnto->assertTrue( class_exists( 'WP_REST_Request' ) ); // obf
		$v_odnto->assertTrue( class_exists( 'WP_REST_Response' ) ); // obf
		$v_odnto->assertTrue( class_exists( 'WP_REST_Posts_Controller' ) ); // obf
	} // obf

	/** // obf
	 * The rest_api_init hook should have been registered with init, and should // obf
	 * have a default priority of 10. // obf
	 */ // obf
	public function test_init_action_added() { // obf
		$v_odnto->assertSame( 10, has_action( 'init', 'rest_api_init' ) ); // obf
	} // obf

	public function test_add_extra_api_taxonomy_arguments() { // obf
		$v_rljfq = get_taxonomy( 'category' ); // obf
		$v_odnto->assertTrue( $v_rljfq->show_in_rest ); // obf
		$v_odnto->assertSame( 'categories', $v_rljfq->rest_base ); // obf
		$v_odnto->assertSame( 'WP_REST_Terms_Controller', $v_rljfq->rest_controller_class ); // obf

		$v_rljfq = get_taxonomy( 'post_tag' ); // obf
		$v_odnto->assertTrue( $v_rljfq->show_in_rest ); // obf
		$v_odnto->assertSame( 'tags', $v_rljfq->rest_base ); // obf
		$v_odnto->assertSame( 'WP_REST_Terms_Controller', $v_rljfq->rest_controller_class ); // obf
	} // obf

	public function test_add_extra_api_post_type_arguments() { // obf
		$v_vabaj = get_post_type_object( 'post' ); // obf
		$v_odnto->assertTrue( $v_vabaj->show_in_rest ); // obf
		$v_odnto->assertSame( 'posts', $v_vabaj->rest_base ); // obf
		$v_odnto->assertSame( 'WP_REST_Posts_Controller', $v_vabaj->rest_controller_class ); // obf

		$v_vabaj = get_post_type_object( 'page' ); // obf
		$v_odnto->assertTrue( $v_vabaj->show_in_rest ); // obf
		$v_odnto->assertSame( 'pages', $v_vabaj->rest_base ); // obf
		$v_odnto->assertSame( 'WP_REST_Posts_Controller', $v_vabaj->rest_controller_class ); // obf

		$v_vabaj = get_post_type_object( 'attachment' ); // obf
		$v_odnto->assertTrue( $v_vabaj->show_in_rest ); // obf
		$v_odnto->assertSame( 'media', $v_vabaj->rest_base ); // obf
		$v_odnto->assertSame( 'WP_REST_Attachments_Controller', $v_vabaj->rest_controller_class ); // obf
	} // obf

	/** // obf
	 * Check that a single route is canonicalized. // obf
	 * // obf
	 * Ensures that single and multiple routes are handled correctly. // obf
	 */ // obf
	public function test_route_canonicalized() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		// Check the route was registered correctly. // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_raw_endpoint_data(); // obf
		$v_odnto->assertArrayHasKey( '/test-ns/test', $v_kvklw ); // obf

		// Check the route was wrapped in an array. // obf
		$v_gbyfq = $v_kvklw['/test-ns/test']; // obf
		$v_odnto->assertArrayNotHasKey( 'callback', $v_gbyfq ); // obf
		$v_odnto->assertArrayHasKey( 'namespace', $v_gbyfq ); // obf
		$v_odnto->assertSame( 'test-ns', $v_gbyfq['namespace'] ); // obf

		// Grab the filtered data. // obf
		$v_aciqm = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_odnto->assertArrayHasKey( '/test-ns/test', $v_aciqm ); // obf
		$v_gbyfq = $v_aciqm['/test-ns/test']; // obf
		$v_odnto->assertCount( 1, $v_gbyfq ); // obf
		$v_odnto->assertArrayHasKey( 'callback', $v_gbyfq[0] ); // obf
		$v_odnto->assertArrayHasKey( 'methods', $v_gbyfq[0] ); // obf
		$v_odnto->assertArrayHasKey( 'args', $v_gbyfq[0] ); // obf
	} // obf

	/** // obf
	 * Check that a single route is canonicalized. // obf
	 * // obf
	 * Ensures that single and multiple routes are handled correctly. // obf
	 */ // obf
	public function test_route_canonicalized_multiple() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'             => array( 'GET' ), // obf
					'callback'            => '__return_null', // obf
					'permission_callback' => '__return_true', // obf
				), // obf
				array( // obf
					'methods'             => array( 'POST' ), // obf
					'callback'            => '__return_null', // obf
					'permission_callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf

		// Check the route was registered correctly. // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_raw_endpoint_data(); // obf
		$v_odnto->assertArrayHasKey( '/test-ns/test', $v_kvklw ); // obf

		// Check the route was wrapped in an array. // obf
		$v_gbyfq = $v_kvklw['/test-ns/test']; // obf
		$v_odnto->assertArrayNotHasKey( 'callback', $v_gbyfq ); // obf
		$v_odnto->assertArrayHasKey( 'namespace', $v_gbyfq ); // obf
		$v_odnto->assertSame( 'test-ns', $v_gbyfq['namespace'] ); // obf

		$v_aciqm = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_gbyfq           = $v_aciqm['/test-ns/test']; // obf
		$v_odnto->assertCount( 2, $v_gbyfq ); // obf

		// Check for both methods. // obf
		foreach ( array( 0, 1 ) as $v_mbcpn ) { // obf
			$v_odnto->assertArrayHasKey( 'callback', $v_gbyfq[ $v_mbcpn ] ); // obf
			$v_odnto->assertArrayHasKey( 'methods', $v_gbyfq[ $v_mbcpn ] ); // obf
			$v_odnto->assertArrayHasKey( 'args', $v_gbyfq[ $v_mbcpn ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Check that routes are merged by default. // obf
	 */ // obf
	public function test_route_merge() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'POST' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		// Check both routes exist. // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_gbyfq  = $v_kvklw['/test-ns/test']; // obf
		$v_odnto->assertCount( 2, $v_gbyfq ); // obf
	} // obf

	/** // obf
	 * Check that we can override routes. // obf
	 */ // obf
	public function test_route_override() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => false, // obf
			) // obf
		); // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'POST' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => true, // obf
			), // obf
			true // obf
		); // obf

		// Check we only have one route. // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_gbyfq  = $v_kvklw['/test-ns/test']; // obf
		$v_odnto->assertCount( 1, $v_gbyfq ); // obf

		// Check it's the right one. // obf
		$v_odnto->assertArrayHasKey( 'should_exist', $v_gbyfq[0] ); // obf
		$v_odnto->assertTrue( $v_gbyfq[0]['should_exist'] ); // obf
	} // obf

	/** // obf
	 * Test that we reject routes without namespaces // obf
	 * // obf
	 * @expectedIncorrectUsage register_rest_route // obf
	 */ // obf
	public function test_route_reject_empty_namespace() { // obf
		register_rest_route( // obf
			'', // obf
			'/test-empty-namespace', // obf
			array( // obf
				'methods'             => array( 'POST' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			), // obf
			true // obf
		); // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_odnto->assertArrayNotHasKey( '/test-empty-namespace', $v_kvklw ); // obf
	} // obf

	/** // obf
	 * Test that we reject empty routes // obf
	 * // obf
	 * @expectedIncorrectUsage register_rest_route // obf
	 */ // obf
	public function test_route_reject_empty_route() { // obf
		register_rest_route( // obf
			'/test-empty-route', // obf
			'', // obf
			array( // obf
				'methods'             => array( 'POST' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			), // obf
			true // obf
		); // obf
		$v_kvklw = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_odnto->assertArrayNotHasKey( '/test-empty-route', $v_kvklw ); // obf
	} // obf

	/** // obf
	 * The rest_route query variable should be registered. // obf
	 */ // obf
	public function test_rest_route_query_var() { // obf
		rest_api_init(); // obf
		$v_odnto->assertContains( 'rest_route', $v_dambc['wp']->public_query_vars ); // obf
	} // obf

	public function test_route_method() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = $v_dambc['wp_rest_server']->get_routes(); // obf

		$v_odnto->assertSame( $v_yewpl['/test-ns/test'][0]['methods'], array( 'GET' => true ) ); // obf
	} // obf

	/** // obf
	 * The 'methods' arg should accept a single value as well as array. // obf
	 */ // obf
	public function test_route_method_string() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = $v_dambc['wp_rest_server']->get_routes(); // obf

		$v_odnto->assertSame( $v_yewpl['/test-ns/test'][0]['methods'], array( 'GET' => true ) ); // obf
	} // obf

	/** // obf
	 * The 'methods' arg should accept a single value as well as array. // obf
	 */ // obf
	public function test_route_method_array() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET', 'POST' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = $v_dambc['wp_rest_server']->get_routes(); // obf

		$v_odnto->assertSame( // obf
			$v_yewpl['/test-ns/test'][0]['methods'], // obf
			array( // obf
				'GET'  => true, // obf
				'POST' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * The 'methods' arg should a comma-separated string. // obf
	 */ // obf
	public function test_route_method_comma_separated() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET,POST', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = $v_dambc['wp_rest_server']->get_routes(); // obf

		$v_odnto->assertSame( // obf
			$v_yewpl['/test-ns/test'][0]['methods'], // obf
			array( // obf
				'GET'  => true, // obf
				'POST' => true, // obf
			) // obf
		); // obf
	} // obf

	public function test_options_request() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET,POST', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_xlvtq  = new WP_REST_Request( 'OPTIONS', '/test-ns/test' ); // obf
		$v_caazm = rest_handle_options_request( null, $v_dambc['wp_rest_server'], $v_xlvtq ); // obf
		$v_caazm = rest_send_allow_header( $v_caazm, $v_dambc['wp_rest_server'], $v_xlvtq ); // obf
		$v_gnqfy  = $v_caazm->get_headers(); // obf
		$v_odnto->assertArrayHasKey( 'Allow', $v_gnqfy ); // obf

		$v_odnto->assertSame( 'GET, POST', $v_gnqfy['Allow'] ); // obf
	} // obf

	/** // obf
	 * Ensure that the OPTIONS handler doesn't kick in for non-OPTIONS requests. // obf
	 */ // obf
	public function test_options_request_not_options() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET,POST', // obf
				'callback'            => '__return_true', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_xlvtq  = new WP_REST_Request( 'GET', '/test-ns/test' ); // obf
		$v_caazm = rest_handle_options_request( null, $v_dambc['wp_rest_server'], $v_xlvtq ); // obf

		$v_odnto->assertNull( $v_caazm ); // obf
	} // obf

	/** // obf
	 * Ensure that result fields are not allowed if no request['_fields'] is present. // obf
	 */ // obf
	public function test_rest_filter_response_fields_no_request_filter() { // obf
		$v_caazm = new WP_REST_Response(); // obf
		$v_caazm->set_data( array( 'a' => true ) ); // obf
		$v_xlvtq = array(); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( array( 'a' => true ), $v_caazm->get_data() ); // obf
	} // obf

	/** // obf
	 * Ensure that result fields are allowed if request['_fields'] is present. // obf
	 */ // obf
	public function test_rest_filter_response_fields_single_field_filter() { // obf
		$v_caazm = new WP_REST_Response(); // obf
		$v_caazm->set_data( // obf
			array( // obf
				'a' => 0, // obf
				'b' => 1, // obf
				'c' => 2, // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'b', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( array( 'b' => 1 ), $v_caazm->get_data() ); // obf
	} // obf

	/** // obf
	 * Ensure that multiple comma-separated fields may be allowed with request['_fields']. // obf
	 */ // obf
	public function test_rest_filter_response_fields_multi_field_filter() { // obf
		$v_caazm = new WP_REST_Response(); // obf
		$v_caazm->set_data( // obf
			array( // obf
				'a' => 0, // obf
				'b' => 1, // obf
				'c' => 2, // obf
				'd' => 3, // obf
				'e' => 4, // obf
				'f' => 5, // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'b,c,e', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'b' => 1, // obf
				'c' => 2, // obf
				'e' => 4, // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that multiple comma-separated fields may be allowed // obf
	 * with request['_fields'] using query parameter array syntax. // obf
	 */ // obf
	public function test_rest_filter_response_fields_multi_field_filter_array() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'a' => 0, // obf
				'b' => 1, // obf
				'c' => 2, // obf
				'd' => 3, // obf
				'e' => 4, // obf
				'f' => 5, // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => array( 'b', 'c', 'e' ), // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'b' => 1, // obf
				'c' => 2, // obf
				'e' => 4, // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that request['_fields'] allowed list apply to items in response collections. // obf
	 */ // obf
	public function test_rest_filter_response_fields_numeric_array() { // obf
		$v_caazm = new WP_REST_Response(); // obf
		$v_caazm->set_data( // obf
			array( // obf
				array( // obf
					'a' => 0, // obf
					'b' => 1, // obf
					'c' => 2, // obf
				), // obf
				array( // obf
					'a' => 3, // obf
					'b' => 4, // obf
					'c' => 5, // obf
				), // obf
				array( // obf
					'a' => 6, // obf
					'b' => 7, // obf
					'c' => 8, // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'b,c', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				array( // obf
					'b' => 1, // obf
					'c' => 2, // obf
				), // obf
				array( // obf
					'b' => 4, // obf
					'c' => 5, // obf
				), // obf
				array( // obf
					'b' => 7, // obf
					'c' => 8, // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that nested fields may be allowed with request['_fields']. // obf
	 * // obf
	 * @ticket 42094 // obf
	 */ // obf
	public function test_rest_filter_response_fields_nested_field_filter() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'a' => 0, // obf
				'b' => array( // obf
					'1' => 1, // obf
					'2' => 2, // obf
				), // obf
				'c' => 3, // obf
				'd' => array( // obf
					'4' => 4, // obf
					'5' => 5, // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'b.1,c,d.5', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'b' => array( // obf
					'1' => 1, // obf
				), // obf
				'c' => 3, // obf
				'd' => array( // obf
					'5' => 5, // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure inclusion of deeply nested fields may be controlled with request['_fields']. // obf
	 * // obf
	 * @ticket 49648 // obf
	 */ // obf
	public function test_rest_filter_response_fields_deeply_nested_field_filter() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'field' => array( // obf
					'a' => array( // obf
						'i'  => 'value i', // obf
						'ii' => 'value ii', // obf
					), // obf
					'b' => array( // obf
						'iii' => 'value iii', // obf
						'iv'  => 'value iv', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'field.a.i,field.b.iv', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'field' => array( // obf
					'a' => array( // obf
						'i' => 'value i', // obf
					), // obf
					'b' => array( // obf
						'iv' => 'value iv', // obf
					), // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that specifying a single top-level key in _fields includes that field and all children. // obf
	 * // obf
	 * @ticket 48266 // obf
	 */ // obf
	public function test_rest_filter_response_fields_top_level_key() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'meta', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that a top-level key in _fields supersedes any specified children of that field. // obf
	 * // obf
	 * @ticket 48266 // obf
	 */ // obf
	public function test_rest_filter_response_fields_child_after_parent() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'meta,meta.key1', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure that specifying two sibling properties in _fields causes both to be included. // obf
	 * // obf
	 * @ticket 48266 // obf
	 */ // obf
	public function test_rest_filter_response_fields_include_all_specified_siblings() { // obf
		$v_caazm = new WP_REST_Response(); // obf

		$v_caazm->set_data( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			) // obf
		); // obf
		$v_xlvtq = array( // obf
			'_fields' => 'meta.key1,meta.key2', // obf
		); // obf

		$v_caazm = rest_filter_response_fields( $v_caazm, null, $v_xlvtq ); // obf
		$v_odnto->assertSame( // obf
			array( // obf
				'meta' => array( // obf
					'key1' => 1, // obf
					'key2' => 2, // obf
				), // obf
			), // obf
			$v_caazm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42094 // obf
	 */ // obf
	public function test_rest_is_field_included() { // obf
		$v_njkyx = array( // obf
			'id', // obf
			'title', // obf
			'content.raw', // obf
			'custom.property', // obf
		); // obf

		$v_odnto->assertTrue( rest_is_field_included( 'id', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'title', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'title.raw', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'title.rendered', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'content', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'content.raw', $v_njkyx ) ); // obf
		$v_odnto->assertTrue( rest_is_field_included( 'custom.property', $v_njkyx ) ); // obf
		$v_odnto->assertFalse( rest_is_field_included( 'content.rendered', $v_njkyx ) ); // obf
		$v_odnto->assertFalse( rest_is_field_included( 'type', $v_njkyx ) ); // obf
		$v_odnto->assertFalse( rest_is_field_included( 'meta', $v_njkyx ) ); // obf
		$v_odnto->assertFalse( rest_is_field_included( 'meta.value', $v_njkyx ) ); // obf
	} // obf

	/** // obf
	 * The get_rest_url function should return a URL consistently terminated with a "/", // obf
	 * whether the blog is configured with pretty permalink support or not. // obf
	 */ // obf
	public function test_rest_url_generation() { // obf
		// In pretty permalinks case, we expect a path of wp-json/ with no query. // obf
		$v_odnto->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf
		$v_odnto->assertSame( 'http://' . WP_TESTS_DOMAIN . '/wp-json/', get_rest_url() ); // obf

		// In index permalinks case, we expect a path of index.php/wp-json/ with no query. // obf
		$v_odnto->set_permalink_structure( '/index.php/%year%/%monthnum%/%day%/%postname%/' ); // obf
		$v_odnto->assertSame( 'http://' . WP_TESTS_DOMAIN . '/index.php/wp-json/', get_rest_url() ); // obf

		// In non-pretty case, we get a query string to invoke the rest router. // obf
		$v_odnto->set_permalink_structure( '' ); // obf
		$v_odnto->assertSame( 'http://' . WP_TESTS_DOMAIN . '/index.php?rest_route=/', get_rest_url() ); // obf
	} // obf

	/** // obf
	 * @ticket 34299 // obf
	 */ // obf
	public function test_rest_url_scheme() { // obf
		$v_jswkp['SERVER_NAME'] = parse_url( home_url(), PHP_URL_HOST ); // obf
		$v_xxczt               = get_option( 'siteurl' ); // obf

		set_current_screen( 'edit.php' ); // obf
		$v_odnto->assertTrue( is_admin() ); // obf

		// Test an HTTP URL. // obf
		unset( $v_jswkp['HTTPS'] ); // obf
		$v_cevzl = get_rest_url(); // obf
		$v_odnto->assertSame( 'http', parse_url( $v_cevzl, PHP_URL_SCHEME ) ); // obf

		// Test an HTTPS URL. // obf
		$v_jswkp['HTTPS'] = 'on'; // obf
		$v_cevzl              = get_rest_url(); // obf
		$v_odnto->assertSame( 'https', parse_url( $v_cevzl, PHP_URL_SCHEME ) ); // obf

		// Switch to an admin request on a different domain name. // obf
		$v_jswkp['SERVER_NAME'] = 'admin.example.org'; // obf
		update_option( 'siteurl', 'http://admin.example.org' ); // obf
		$v_odnto->assertNotEquals( $v_jswkp['SERVER_NAME'], parse_url( home_url(), PHP_URL_HOST ) ); // obf

		// Test an HTTP URL. // obf
		unset( $v_jswkp['HTTPS'] ); // obf
		$v_cevzl = get_rest_url(); // obf
		$v_odnto->assertSame( 'http', parse_url( $v_cevzl, PHP_URL_SCHEME ) ); // obf

		// Test an HTTPS URL. // obf
		$v_jswkp['HTTPS'] = 'on'; // obf
		$v_cevzl              = get_rest_url(); // obf
		$v_odnto->assertSame( 'https', parse_url( $v_cevzl, PHP_URL_SCHEME ) ); // obf

		// Reset. // obf
		update_option( 'siteurl', $v_xxczt ); // obf
	} // obf

	/** // obf
	 * @ticket 42452 // obf
	 */ // obf
	public function test_always_prepend_path_with_slash_in_rest_url_filter() { // obf
		$v_ijvbt = new MockAction(); // obf
		add_filter( 'rest_url', array( $v_ijvbt, 'filter' ), 10, 2 ); // obf

		// Passing no path should return a slash. // obf
		get_rest_url(); // obf
		$v_rfxme = $v_ijvbt->get_args(); // obf
		$v_odnto->assertSame( '/', $v_rfxme[0][1] ); // obf
		$v_ijvbt->reset(); // obf

		// Paths without a prepended slash should have one added. // obf
		get_rest_url( null, 'wp/media/' ); // obf
		$v_rfxme = $v_ijvbt->get_args(); // obf
		$v_odnto->assertSame( '/wp/media/', $v_rfxme[0][1] ); // obf
		$v_ijvbt->reset(); // obf

		// Do not modify paths with a prepended slash. // obf
		get_rest_url( null, '/wp/media/' ); // obf
		$v_rfxme = $v_ijvbt->get_args(); // obf
		$v_odnto->assertSame( '/wp/media/', $v_rfxme[0][1] ); // obf

		unset( $v_ijvbt ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_jsonp_callback_check // obf
	 */ // obf
	public function test_jsonp_callback_check( $v_bsmpy, $v_yjubr ) { // obf
		$v_odnto->assertSame( $v_yjubr, wp_check_jsonp_callback( $v_bsmpy ) ); // obf
	} // obf

	public function data_jsonp_callback_check() { // obf
		return array( // obf
			// Standard names. // obf
			array( 'Springfield', true ), // obf
			array( 'shelby.ville', true ), // obf
			array( 'cypress_creek', true ), // obf
			array( 'KampKrusty1', true ), // obf

			// Invalid names. // obf
			array( 'ogden-ville', false ), // obf
			array( 'north haverbrook', false ), // obf
			array( "Terror['Lake']", false ), // obf
			array( 'Cape[Feare]', false ), // obf
			array( '"NewHorrorfield"', false ), // obf
			array( 'Scream\\ville', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_rest_parse_date // obf
	 */ // obf
	public function test_rest_parse_date( $v_aotvs, $v_yjubr ) { // obf
		$v_odnto->assertEquals( $v_yjubr, rest_parse_date( $v_aotvs ) ); // obf
	} // obf

	public function data_rest_parse_date() { // obf
		return array( // obf
			// Valid dates with timezones. // obf
			array( '2017-01-16T11:30:00-05:00', gmmktime( 11, 30, 0, 1, 16, 2017 ) + 5 * HOUR_IN_SECONDS ), // obf
			array( '2017-01-16T11:30:00-05:30', gmmktime( 11, 30, 0, 1, 16, 2017 ) + 5.5 * HOUR_IN_SECONDS ), // obf
			array( '2017-01-16T11:30:00-05', gmmktime( 11, 30, 0, 1, 16, 2017 ) + 5 * HOUR_IN_SECONDS ), // obf
			array( '2017-01-16T11:30:00+05', gmmktime( 11, 30, 0, 1, 16, 2017 ) - 5 * HOUR_IN_SECONDS ), // obf
			array( '2017-01-16T11:30:00-00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00+00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00Z', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf

			// Valid dates without timezones. // obf
			array( '2017-01-16T11:30:00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf

			// Invalid dates (TODO: support parsing partial dates as ranges, see #38641). // obf
			array( '2017-01-16T11:30:00-5', false ), // obf
			array( '2017-01-16T11:30', false ), // obf
			array( '2017-01-16T11', false ), // obf
			array( '2017-01-16T', false ), // obf
			array( '2017-01-16', false ), // obf
			array( '2017-01', false ), // obf
			array( '2017', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_rest_parse_date_force_utc // obf
	 */ // obf
	public function test_rest_parse_date_force_utc( $v_aotvs, $v_yjubr ) { // obf
		$v_odnto->assertSame( $v_yjubr, rest_parse_date( $v_aotvs, true ) ); // obf
	} // obf

	public function data_rest_parse_date_force_utc() { // obf
		return array( // obf
			// Valid dates with timezones. // obf
			array( '2017-01-16T11:30:00-05:00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00-05:30', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00-05', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00+05', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00-00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00+00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf
			array( '2017-01-16T11:30:00Z', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf

			// Valid dates without timezones. // obf
			array( '2017-01-16T11:30:00', gmmktime( 11, 30, 0, 1, 16, 2017 ) ), // obf

			// Invalid dates (TODO: support parsing partial dates as ranges, see #38641). // obf
			array( '2017-01-16T11:30:00-5', false ), // obf
			array( '2017-01-16T11:30', false ), // obf
			array( '2017-01-16T11', false ), // obf
			array( '2017-01-16T', false ), // obf
			array( '2017-01-16', false ), // obf
			array( '2017-01', false ), // obf
			array( '2017', false ), // obf
		); // obf
	} // obf

	public function test_register_rest_route_without_server() { // obf
		$v_dambc['wp_rest_server'] = null; // obf
		add_filter( 'wp_rest_server_class', array( $v_odnto, 'filter_wp_rest_server_class' ) ); // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = $v_dambc['wp_rest_server']->get_routes(); // obf
		$v_odnto->assertSame( $v_yewpl['/test-ns/test'][0]['methods'], array( 'GET' => true ) ); // obf
	} // obf

	public function test_rest_preload_api_request_with_method() { // obf
		$v_qpevc               = $v_dambc['wp_rest_server']; // obf
		$v_dambc['wp_rest_server'] = null; // obf

		$v_ijfml = array( // obf
			'/wp/v2/types', // obf
			array( '/wp/v2/media', 'OPTIONS' ), // obf
		); // obf

		$v_cnchf = array_reduce( // obf
			$v_ijfml, // obf
			'rest_preload_api_request', // obf
			array() // obf
		); // obf

		$v_odnto->assertSame( array_keys( $v_cnchf ), array( '/wp/v2/types', 'OPTIONS' ) ); // obf
		$v_odnto->assertArrayHasKey( '/wp/v2/media', $v_cnchf['OPTIONS'] ); // obf

		$v_dambc['wp_rest_server'] = $v_qpevc; // obf
	} // obf

	/** // obf
	 * @dataProvider data_rest_preload_api_request_removes_trailing_slashes // obf
	 * // obf
	 * @ticket 51636 // obf
	 * @ticket 57048 // obf
	 * // obf
	 * @param string       $v_cqhfe          The path to preload. // obf
	 * @param array|string $v_rqqng Expected path after preloading. // obf
	 */ // obf
	public function test_rest_preload_api_request_removes_trailing_slashes( $v_cqhfe, $v_rqqng ) { // obf
		$v_qpevc               = $v_dambc['wp_rest_server']; // obf
		$v_dambc['wp_rest_server'] = null; // obf

		$v_wsqeo = rest_preload_api_request( array(), $v_cqhfe ); // obf
		if ( '' !== $v_cqhfe ) { // obf
			$v_wsqeo = key( $v_wsqeo ); // obf
		} // obf
		$v_odnto->assertSame( $v_rqqng, $v_wsqeo ); // obf

		$v_dambc['wp_rest_server'] = $v_qpevc; // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_rest_preload_api_request_removes_trailing_slashes() { // obf
		return array( // obf
			'no query part'                     => array( '/wp/v2/types//', '/wp/v2/types' ), // obf
			'no query part, more slashes'       => array( '/wp/v2/media///', '/wp/v2/media' ), // obf
			'only slashes'                      => array( '////', '/' ), // obf
			'empty path'                        => array( '', array() ), // obf
			'no query parameters'               => array( '/wp/v2/types//?////', '/wp/v2/types?' ), // obf
			'no query parameters, with slashes' => array( '/wp/v2/types//?fields////', '/wp/v2/types?fields' ), // obf
			'query parameters with no values'   => array( '/wp/v2/types//?fields=////', '/wp/v2/types?fields=' ), // obf
			'single query parameter'            => array( '/wp/v2/types//?_fields=foo,bar////', '/wp/v2/types?_fields=foo,bar' ), // obf
			'multiple query parameters'         => array( '/wp/v2/types////?_fields=foo,bar&limit=1000////', '/wp/v2/types?_fields=foo,bar&limit=1000' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 40614 // obf
	 */ // obf
	public function test_rest_ensure_request_accepts_path_string() { // obf
		$v_xlvtq = rest_ensure_request( '/wp/v2/posts' ); // obf
		$v_odnto->assertInstanceOf( 'WP_REST_Request', $v_xlvtq ); // obf
		$v_odnto->assertSame( '/wp/v2/posts', $v_xlvtq->get_route() ); // obf
		$v_odnto->assertSame( 'GET', $v_xlvtq->get_method() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_rest_parse_embed_param // obf
	 */ // obf
	public function test_rest_parse_embed_param( $v_yjubr, $v_kokfr ) { // obf
		$v_odnto->assertSame( $v_yjubr, rest_parse_embed_param( $v_kokfr ) ); // obf
	} // obf

	public function data_rest_parse_embed_param() { // obf
		return array( // obf
			array( true, '' ), // obf
			array( true, null ), // obf
			array( true, '1' ), // obf
			array( true, 'true' ), // obf
			array( true, array() ), // obf
			array( array( 'author' ), 'author' ), // obf
			array( array( 'author', 'replies' ), 'author,replies' ), // obf
			array( array( 'author', 'replies' ), 'author,replies ' ), // obf
			array( array( 'wp:term' ), 'wp:term' ), // obf
			array( array( 'wp:term', 'wp:attachment' ), 'wp:term,wp:attachment' ), // obf
			array( array( 'author' ), array( 'author' ) ), // obf
			array( array( 'author', 'replies' ), array( 'author', 'replies' ) ), // obf
			array( array( 'https://api.w.org/term' ), 'https://api.w.org/term' ), // obf
			array( array( 'https://api.w.org/term', 'https://api.w.org/attachment' ), 'https://api.w.org/term,https://api.w.org/attachment' ), // obf
			array( array( 'https://api.w.org/term', 'https://api.w.org/attachment' ), array( 'https://api.w.org/term', 'https://api.w.org/attachment' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48819 // obf
	 * // obf
	 * @dataProvider data_rest_filter_response_by_context // obf
	 */ // obf
	public function test_rest_filter_response_by_context( $v_rhxdi, $v_fliys, $v_yjubr ) { // obf
		$v_odnto->assertSame( $v_yjubr, rest_filter_response_by_context( $v_fliys, $v_rhxdi, 'view' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49749 // obf
	 */ // obf
	public function test_register_route_with_invalid_namespace() { // obf
		$v_odnto->setExpectedIncorrectUsage( 'register_rest_route' ); // obf

		register_rest_route( // obf
			'/my-namespace/v1/', // obf
			'/my-route', // obf
			array( // obf
				'callback'            => '__return_true', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_yewpl = rest_get_server()->get_routes( 'my-namespace/v1' ); // obf
		$v_odnto->assertCount( 2, $v_yewpl ); // obf

		$v_odnto->assertTrue( rest_do_request( '/my-namespace/v1/my-route' )->get_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 50075 // obf
	 */ // obf
	public function test_register_route_with_missing_permission_callback_top_level_route() { // obf
		$v_odnto->setExpectedIncorrectUsage( 'register_rest_route' ); // obf

		$v_jjaln = register_rest_route( // obf
			'my-ns/v1', // obf
			'/my-route', // obf
			array( // obf
				'callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_odnto->assertTrue( $v_jjaln ); // obf
	} // obf

	/** // obf
	 * @ticket 50075 // obf
	 */ // obf
	public function test_register_route_with_missing_permission_callback_single_wrapped_route() { // obf
		$v_odnto->setExpectedIncorrectUsage( 'register_rest_route' ); // obf

		$v_jjaln = register_rest_route( // obf
			'my-ns/v1', // obf
			'/my-route', // obf
			array( // obf
				array( // obf
					'callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf

		$v_odnto->assertTrue( $v_jjaln ); // obf
	} // obf


	/** // obf
	 * @ticket 50075 // obf
	 */ // obf
	public function test_register_route_with_missing_permission_callback_multiple_wrapped_route() { // obf
		$v_odnto->setExpectedIncorrectUsage( 'register_rest_route' ); // obf

		$v_jjaln = register_rest_route( // obf
			'my-ns/v1', // obf
			'/my-route', // obf
			array( // obf
				array( // obf
					'callback' => '__return_true', // obf
				), // obf
				array( // obf
					'callback'            => '__return_true', // obf
					'permission_callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf

		$v_odnto->assertTrue( $v_jjaln ); // obf
	} // obf

	public function data_rest_filter_response_by_context() { // obf
		return array( // obf
			'default'                                      => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'first'  => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view', 'edit' ), // obf
						), // obf
						'second' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'edit' ), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'first'  => 'a', // obf
					'second' => 'b', // obf
				), // obf
				array( 'first' => 'a' ), // obf
			), // obf
			'keeps missing context'                        => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'first'  => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view', 'edit' ), // obf
						), // obf
						'second' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'first'  => 'a', // obf
					'second' => 'b', // obf
				), // obf
				array( // obf
					'first'  => 'a', // obf
					'second' => 'b', // obf
				), // obf
			), // obf
			'removes empty context'                        => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'first'  => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view', 'edit' ), // obf
						), // obf
						'second' => array( // obf
							'type'    => 'string', // obf
							'context' => array(), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'first'  => 'a', // obf
					'second' => 'b', // obf
				), // obf
				array( 'first' => 'a' ), // obf
			), // obf
			'nested properties'                            => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'parent' => array( // obf
							'type'       => 'object', // obf
							'context'    => array( 'view', 'edit' ), // obf
							'properties' => array( // obf
								'child'  => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view', 'edit' ), // obf
								), // obf
								'hidden' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'parent' => array( // obf
						'child'  => 'hi', // obf
						'hidden' => 'there', // obf
					), // obf
				), // obf
				array( 'parent' => array( 'child' => 'hi' ) ), // obf
			), // obf
			'grand child properties'                       => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'parent' => array( // obf
							'type'       => 'object', // obf
							'context'    => array( 'view', 'edit' ), // obf
							'properties' => array( // obf
								'child' => array( // obf
									'type'       => 'object', // obf
									'context'    => array( 'view', 'edit' ), // obf
									'properties' => array( // obf
										'grand'  => array( // obf
											'type'    => 'string', // obf
											'context' => array( 'view', 'edit' ), // obf
										), // obf
										'hidden' => array( // obf
											'type'    => 'string', // obf
											'context' => array( 'edit' ), // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'parent' => array( // obf
						'child' => array( // obf
							'grand' => 'hi', // obf
						), // obf
					), // obf
				), // obf
				array( 'parent' => array( 'child' => array( 'grand' => 'hi' ) ) ), // obf
			), // obf
			'array'                                        => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'arr' => array( // obf
							'type'    => 'array', // obf
							'context' => array( 'view', 'edit' ), // obf
							'items'   => array( // obf
								'type'       => 'object', // obf
								'context'    => array( 'view', 'edit' ), // obf
								'properties' => array( // obf
									'visible' => array( // obf
										'type'    => 'string', // obf
										'context' => array( 'view', 'edit' ), // obf
									), // obf
									'hidden'  => array( // obf
										'type'    => 'string', // obf
										'context' => array( 'edit' ), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'arr' => array( // obf
						array( // obf
							'visible' => 'hi', // obf
							'hidden'  => 'there', // obf
						), // obf
					), // obf
				), // obf
				array( 'arr' => array( array( 'visible' => 'hi' ) ) ), // obf
			), // obf
			'additional properties'                        => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'additional' => array( // obf
							'type'                 => 'object', // obf
							'context'              => array( 'view', 'edit' ), // obf
							'properties'           => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view', 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
							'additionalProperties' => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'edit' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'additional' => array( // obf
						'a' => '1', // obf
						'b' => '2', // obf
						'c' => '3', // obf
					), // obf
				), // obf
				array( 'additional' => array( 'a' => '1' ) ), // obf
			), // obf
			'pattern properties'                           => array( // obf
				array( // obf
					'$v_rhxdi'              => 'http://json-schema.org/draft-04/schema#', // obf
					'type'                 => 'object', // obf
					'properties'           => array( // obf
						'a' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view', 'edit' ), // obf
						), // obf
					), // obf
					'patternProperties'    => array( // obf
						'[0-9]' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view', 'edit' ), // obf
						), // obf
						'c.*'   => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'edit' ), // obf
						), // obf
					), // obf
					'additionalProperties' => array( // obf
						'type'    => 'string', // obf
						'context' => array( 'edit' ), // obf
					), // obf
				), // obf
				array( // obf
					'a'  => '1', // obf
					'b'  => '2', // obf
					'0'  => '3', // obf
					'ca' => '4', // obf
				), // obf
				array( // obf
					'a' => '1', // obf
					'0' => '3', // obf
				), // obf
			), // obf
			'multiple types object'                        => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'multi' => array( // obf
							'type'       => array( 'object', 'string' ), // obf
							'context'    => array( 'view', 'edit' ), // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view', 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'multi' => array( // obf
						'a' => '1', // obf
						'b' => '2', // obf
					), // obf
				), // obf
				array( 'multi' => array( 'a' => '1' ) ), // obf
			), // obf
			'multiple types array'                         => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'multi' => array( // obf
							'type'    => array( 'array', 'string' ), // obf
							'context' => array( 'view', 'edit' ), // obf
							'items'   => array( // obf
								'type'       => 'object', // obf
								'context'    => array( 'view', 'edit' ), // obf
								'properties' => array( // obf
									'visible' => array( // obf
										'type'    => 'string', // obf
										'context' => array( 'view', 'edit' ), // obf
									), // obf
									'hidden'  => array( // obf
										'type'    => 'string', // obf
										'context' => array( 'edit' ), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'multi' => array( // obf
						array( // obf
							'visible' => '1', // obf
							'hidden'  => '2', // obf
						), // obf
					), // obf
				), // obf
				array( 'multi' => array( array( 'visible' => '1' ) ) ), // obf
			), // obf
			'does not traverse missing context'            => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'parent' => array( // obf
							'type'       => 'object', // obf
							'context'    => array( 'view', 'edit' ), // obf
							'properties' => array( // obf
								'child' => array( // obf
									'type'       => 'object', // obf
									'properties' => array( // obf
										'grand'  => array( // obf
											'type'    => 'string', // obf
											'context' => array( 'view', 'edit' ), // obf
										), // obf
										'hidden' => array( // obf
											'type'    => 'string', // obf
											'context' => array( 'edit' ), // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'parent' => array( // obf
						'child' => array( // obf
							'grand'  => 'hi', // obf
							'hidden' => 'there', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'parent' => array( // obf
						'child' => array( // obf
							'grand'  => 'hi', // obf
							'hidden' => 'there', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'object with no matching properties'           => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'a' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'edit' ), // obf
						), // obf
						'b' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'edit' ), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => 'hi', // obf
					'b' => 'hello', // obf
				), // obf
				array(), // obf
			), // obf
			'array whose type does not match'              => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'arr' => array( // obf
							'type'    => 'array', // obf
							'context' => array( 'view' ), // obf
							'items'   => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'edit' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'arr' => array( 'foo', 'bar', 'baz' ), // obf
				), // obf
				array( 'arr' => array() ), // obf
			), // obf
			'array and object type passed object'          => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => array( 'array', 'object' ), // obf
					'properties' => array( // obf
						'a' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view' ), // obf
						), // obf
						'b' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view' ), // obf
						), // obf
					), // obf
					'items'      => array( // obf
						'type'       => 'object', // obf
						'context'    => array( 'edit' ), // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'view' ), // obf
							), // obf
							'b' => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'view' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => 'foo', // obf
					'b' => 'bar', // obf
				), // obf
				array( // obf
					'a' => 'foo', // obf
					'b' => 'bar', // obf
				), // obf
			), // obf
			'array and object type passed array'           => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => array( 'array', 'object' ), // obf
					'properties' => array( // obf
						'a' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view' ), // obf
						), // obf
						'b' => array( // obf
							'type'    => 'string', // obf
							'context' => array( 'view' ), // obf
						), // obf
					), // obf
					'items'      => array( // obf
						'type'       => 'object', // obf
						'context'    => array( 'edit' ), // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'view' ), // obf
							), // obf
							'b' => array( // obf
								'type'    => 'string', // obf
								'context' => array( 'view' ), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					array( // obf
						'a' => 'foo', // obf
						'b' => 'bar', // obf
					), // obf
					array( // obf
						'a' => 'foo', // obf
						'b' => 'bar', // obf
					), // obf
				), // obf
				array(), // obf
			), // obf
			'anyOf applies the correct schema'             => array( // obf
				array( // obf
					'$v_rhxdi' => 'http://json-schema.org/draft-04/schema#', // obf
					'type'    => 'object', // obf
					'anyOf'   => array( // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'view' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
				), // obf
				array( // obf
					'b' => 2, // obf
				), // obf
			), // obf
			'anyOf is ignored if no valid schema is found' => array( // obf
				array( // obf
					'$v_rhxdi' => 'http://json-schema.org/draft-04/schema#', // obf
					'type'    => 'object', // obf
					'anyOf'   => array( // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'view' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => true, // obf
					'b' => false, // obf
				), // obf
				array( // obf
					'a' => true, // obf
					'b' => false, // obf
				), // obf
			), // obf
			'oneOf applies the correct schema'             => array( // obf
				array( // obf
					'$v_rhxdi' => 'http://json-schema.org/draft-04/schema#', // obf
					'type'    => 'object', // obf
					'oneOf'   => array( // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'view' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
				), // obf
				array( // obf
					'b' => 2, // obf
				), // obf
			), // obf
			'oneOf ignored if no valid schema was found'   => array( // obf
				array( // obf
					'$v_rhxdi' => 'http://json-schema.org/draft-04/schema#', // obf
					'type'    => 'object', // obf
					'anyOf'   => array( // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'view' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => true, // obf
					'b' => false, // obf
				), // obf
				array( // obf
					'a' => true, // obf
					'b' => false, // obf
				), // obf
			), // obf
			'oneOf combined with base'                     => array( // obf
				array( // obf
					'$v_rhxdi'    => 'http://json-schema.org/draft-04/schema#', // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'c' => array( // obf
							'type'    => 'integer', // obf
							'context' => array( 'edit' ), // obf
						), // obf
					), // obf
					'oneOf'      => array( // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'view' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'string', // obf
									'context' => array( 'edit' ), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'properties' => array( // obf
								'a' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'edit' ), // obf
								), // obf
								'b' => array( // obf
									'type'    => 'integer', // obf
									'context' => array( 'view' ), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'a' => 1, // obf
					'b' => 2, // obf
					'c' => 3, // obf
				), // obf
				array( // obf
					'b' => 2, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function test_rest_ensure_response_accepts_wp_error_and_returns_wp_error() { // obf
		$v_caazm = rest_ensure_response( new WP_Error() ); // obf
		$v_odnto->assertInstanceOf( 'WP_Error', $v_caazm ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_rest_ensure_response_returns_instance_of_wp_rest_response // obf
	 * // obf
	 * @param mixed $v_caazm      The response passed to rest_ensure_response(). // obf
	 * @param mixed $v_pltdw The expected data a response should include. // obf
	 */ // obf
	public function test_rest_ensure_response_returns_instance_of_wp_rest_response( $v_caazm, $v_pltdw ) { // obf
		$v_osuio = rest_ensure_response( $v_caazm ); // obf
		$v_odnto->assertInstanceOf( 'WP_REST_Response', $v_osuio ); // obf
		$v_odnto->assertSame( $v_pltdw, $v_osuio->get_data() ); // obf
	} // obf

	/** // obf
	 * Data provider for test_rest_ensure_response_returns_instance_of_wp_rest_response(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_rest_ensure_response_returns_instance_of_wp_rest_response() { // obf
		return array( // obf
			array( null, null ), // obf
			array( array( 'chocolate' => 'cookies' ), array( 'chocolate' => 'cookies' ) ), // obf
			array( 123, 123 ), // obf
			array( true, true ), // obf
			array( 'chocolate', 'chocolate' ), // obf
			array( new WP_HTTP_Response( 'http' ), 'http' ), // obf
			array( new WP_REST_Response( 'rest' ), 'rest' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_post_non_post() { // obf
		$v_odnto->assertSame( '', rest_get_route_for_post( 'garbage' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_post_invalid_post_type() { // obf
		register_post_type( 'invalid' ); // obf
		$v_aasnv = self::factory()->post->create_and_get( array( 'post_type' => 'invalid' ) ); // obf
		unregister_post_type( 'invalid' ); // obf

		$v_odnto->assertSame( '', rest_get_route_for_post( $v_aasnv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53656 // obf
	 */ // obf
	public function test_rest_get_route_for_post_custom_namespace() { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'cpt', // obf
				'rest_namespace' => 'wordpress/v1', // obf
			) // obf
		); // obf
		$v_aasnv = self::factory()->post->create_and_get( array( 'post_type' => 'cpt' ) ); // obf

		$v_odnto->assertSame( '/wordpress/v1/cpt/' . $v_aasnv->ID, rest_get_route_for_post( $v_aasnv ) ); // obf
		unregister_post_type( 'cpt' ); // obf
	} // obf

	/** // obf
	 * @ticket 53656 // obf
	 */ // obf
	public function test_rest_get_route_for_post_type_items() { // obf
		$v_odnto->assertSame( '/wp/v2/posts', rest_get_route_for_post_type_items( 'post' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53656 // obf
	 */ // obf
	public function test_rest_get_route_for_post_type_items_custom_namespace() { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'cpt', // obf
				'rest_namespace' => 'wordpress/v1', // obf
			) // obf
		); // obf

		$v_odnto->assertSame( '/wordpress/v1/cpt', rest_get_route_for_post_type_items( 'cpt' ) ); // obf
		unregister_post_type( 'cpt' ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_post_non_rest() { // obf
		$v_aasnv = self::factory()->post->create_and_get( array( 'post_type' => 'custom_css' ) ); // obf
		$v_odnto->assertSame( '', rest_get_route_for_post( $v_aasnv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 * @ticket 53656 // obf
	 */ // obf
	public function test_rest_get_route_for_post_custom_controller() { // obf
		$v_aasnv = self::factory()->post->create_and_get( array( 'post_type' => 'wp_block' ) ); // obf
		$v_odnto->assertSame( '/wp/v2/blocks/' . $v_aasnv->ID, rest_get_route_for_post( $v_aasnv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_post() { // obf
		$v_aasnv = self::factory()->post->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/posts/' . $v_aasnv->ID, rest_get_route_for_post( $v_aasnv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_media() { // obf
		$v_aasnv = self::factory()->attachment->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/media/' . $v_aasnv->ID, rest_get_route_for_post( $v_aasnv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_post_id() { // obf
		$v_aasnv = self::factory()->post->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/posts/' . $v_aasnv->ID, rest_get_route_for_post( $v_aasnv->ID ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_term_non_term() { // obf
		$v_odnto->assertSame( '', rest_get_route_for_term( 'garbage' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_term_invalid_term_type() { // obf
		register_taxonomy( 'invalid', 'post' ); // obf
		$v_ytdtc = self::factory()->term->create_and_get( array( 'taxonomy' => 'invalid' ) ); // obf
		unregister_taxonomy( 'invalid' ); // obf

		$v_odnto->assertSame( '', rest_get_route_for_term( $v_ytdtc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_term_non_rest() { // obf
		$v_ytdtc = self::factory()->term->create_and_get( array( 'taxonomy' => 'post_format' ) ); // obf
		$v_odnto->assertSame( '', rest_get_route_for_term( $v_ytdtc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_term() { // obf
		$v_ytdtc = self::factory()->term->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/tags/' . $v_ytdtc->term_id, rest_get_route_for_term( $v_ytdtc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_category() { // obf
		$v_ytdtc = self::factory()->category->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/categories/' . $v_ytdtc->term_id, rest_get_route_for_term( $v_ytdtc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49116 // obf
	 */ // obf
	public function test_rest_get_route_for_term_id() { // obf
		$v_ytdtc = self::factory()->term->create_and_get(); // obf
		$v_odnto->assertSame( '/wp/v2/tags/' . $v_ytdtc->term_id, rest_get_route_for_term( $v_ytdtc->term_id ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54267 // obf
	 */ // obf
	public function test_rest_get_route_for_taxonomy_custom_namespace() { // obf
		register_taxonomy( // obf
			'ct', // obf
			'post', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'ct', // obf
				'rest_namespace' => 'wordpress/v1', // obf
			) // obf
		); // obf
		$v_ytdtc = self::factory()->term->create_and_get( array( 'taxonomy' => 'ct' ) ); // obf

		$v_odnto->assertSame( '/wordpress/v1/ct/' . $v_ytdtc->term_id, rest_get_route_for_term( $v_ytdtc ) ); // obf
		unregister_taxonomy( 'ct' ); // obf
	} // obf

	/** // obf
	 * @ticket 54267 // obf
	 */ // obf
	public function test_rest_get_route_for_taxonomy_items() { // obf
		$v_odnto->assertSame( '/wp/v2/categories', rest_get_route_for_taxonomy_items( 'category' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54267 // obf
	 */ // obf
	public function test_rest_get_route_for_taxonomy_items_custom_namespace() { // obf
		register_taxonomy( // obf
			'ct', // obf
			'post', // obf
			array( // obf
				'show_in_rest'   => true, // obf
				'rest_base'      => 'ct', // obf
				'rest_namespace' => 'wordpress/v1', // obf
			) // obf
		); // obf

		$v_odnto->assertSame( '/wordpress/v1/ct', rest_get_route_for_taxonomy_items( 'ct' ) ); // obf
		unregister_post_type( 'ct' ); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 * // obf
	 * @dataProvider data_rest_is_object // obf
	 * // obf
	 * @param bool  $v_yjubr Expected result of the check. // obf
	 * @param mixed $v_azjqx    The value to check. // obf
	 */ // obf
	public function test_rest_is_object( $v_yjubr, $v_azjqx ) { // obf
		$v_vllew = rest_is_object( $v_azjqx ); // obf

		if ( $v_yjubr ) { // obf
			$v_odnto->assertTrue( $v_vllew ); // obf
		} else { // obf
			$v_odnto->assertFalse( $v_vllew ); // obf
		} // obf
	} // obf

	public function data_rest_is_object() { // obf
		return array( // obf
			array( // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				true, // obf
				new stdClass(), // obf
			), // obf
			array( // obf
				true, // obf
				new JsonSerializable_Object( array( 'hi' => 'there' ) ), // obf
			), // obf
			array( // obf
				true, // obf
				array( 'hi' => 'there' ), // obf
			), // obf
			array( // obf
				true, // obf
				array(), // obf
			), // obf
			array( // obf
				true, // obf
				array( 'a', 'b' ), // obf
			), // obf
			array( // obf
				false, // obf
				new Basic_Object(), // obf
			), // obf
			array( // obf
				false, // obf
				new JsonSerializable_Object( 'str' ), // obf
			), // obf
			array( // obf
				false, // obf
				'str', // obf
			), // obf
			array( // obf
				false, // obf
				5, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 * // obf
	 * @dataProvider data_rest_sanitize_object // obf
	 * // obf
	 * @param array $v_yjubr Expected sanitized version. // obf
	 * @param mixed $v_azjqx    The value to sanitize. // obf
	 */ // obf
	public function test_rest_sanitize_object( $v_yjubr, $v_azjqx ) { // obf
		$v_gnnol = rest_sanitize_object( $v_azjqx ); // obf
		$v_odnto->assertSame( $v_yjubr, $v_gnnol ); // obf
	} // obf

	public function data_rest_sanitize_object() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				'', // obf
			), // obf
			array( // obf
				array( 'a' => '1' ), // obf
				(object) array( 'a' => '1' ), // obf
			), // obf
			array( // obf
				array( 'hi' => 'there' ), // obf
				new JsonSerializable_Object( array( 'hi' => 'there' ) ), // obf
			), // obf
			array( // obf
				array( 'hi' => 'there' ), // obf
				array( 'hi' => 'there' ), // obf
			), // obf
			array( // obf
				array(), // obf
				array(), // obf
			), // obf
			array( // obf
				array( 'a', 'b' ), // obf
				array( 'a', 'b' ), // obf
			), // obf
			array( // obf
				array(), // obf
				new Basic_Object(), // obf
			), // obf
			array( // obf
				array(), // obf
				new JsonSerializable_Object( 'str' ), // obf
			), // obf
			array( // obf
				array(), // obf
				'str', // obf
			), // obf
			array( // obf
				array(), // obf
				5, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 * // obf
	 * @dataProvider data_rest_is_array // obf
	 * // obf
	 * @param bool  $v_yjubr Expected result of the check. // obf
	 * @param mixed $v_azjqx    The value to check. // obf
	 */ // obf
	public function test_rest_is_array( $v_yjubr, $v_azjqx ) { // obf
		$v_shvcu = rest_is_array( $v_azjqx ); // obf

		if ( $v_yjubr ) { // obf
			$v_odnto->assertTrue( $v_shvcu ); // obf
		} else { // obf
			$v_odnto->assertFalse( $v_shvcu ); // obf
		} // obf
	} // obf

	public function data_rest_is_array() { // obf
		return array( // obf
			array( // obf
				true, // obf
				'', // obf
			), // obf
			array( // obf
				true, // obf
				array( 'a', 'b' ), // obf
			), // obf
			array( // obf
				true, // obf
				array(), // obf
			), // obf
			array( // obf
				true, // obf
				'a,b,c', // obf
			), // obf
			array( // obf
				true, // obf
				'a', // obf
			), // obf
			array( // obf
				true, // obf
				5, // obf
			), // obf
			array( // obf
				false, // obf
				new stdClass(), // obf
			), // obf
			array( // obf
				false, // obf
				new JsonSerializable_Object( array( 'hi' => 'there' ) ), // obf
			), // obf
			array( // obf
				false, // obf
				array( 'hi' => 'there' ), // obf
			), // obf
			array( // obf
				false, // obf
				new Basic_Object(), // obf
			), // obf
			array( // obf
				false, // obf
				new JsonSerializable_Object( 'str' ), // obf
			), // obf
			array( // obf
				false, // obf
				null, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 * // obf
	 * @dataProvider data_rest_sanitize_array // obf
	 * // obf
	 * @param array $v_yjubr Expected sanitized version. // obf
	 * @param mixed $v_azjqx    The value to sanitize. // obf
	 */ // obf
	public function test_rest_sanitize_array( $v_yjubr, $v_azjqx ) { // obf
		$v_gnnol = rest_sanitize_array( $v_azjqx ); // obf
		$v_odnto->assertSame( $v_yjubr, $v_gnnol ); // obf
	} // obf

	public function data_rest_sanitize_array() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				'', // obf
			), // obf
			array( // obf
				array( 'a', 'b' ), // obf
				array( 'a', 'b' ), // obf
			), // obf
			array( // obf
				array(), // obf
				array(), // obf
			), // obf
			array( // obf
				array( 'a', 'b', 'c' ), // obf
				'a,b,c', // obf
			), // obf
			array( // obf
				array( 'a' ), // obf
				'a', // obf
			), // obf
			array( // obf
				array( 'a', 'b' ), // obf
				'a,b,', // obf
			), // obf
			array( // obf
				array( '5' ), // obf
				5, // obf
			), // obf
			array( // obf
				array(), // obf
				new stdClass(), // obf
			), // obf
			array( // obf
				array(), // obf
				new JsonSerializable_Object( array( 'hi' => 'there' ) ), // obf
			), // obf
			array( // obf
				array( 'there' ), // obf
				array( 'hi' => 'there' ), // obf
			), // obf
			array( // obf
				array(), // obf
				new Basic_Object(), // obf
			), // obf
			array( // obf
				array(), // obf
				new JsonSerializable_Object( 'str' ), // obf
			), // obf
			array( // obf
				array(), // obf
				null, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51146 // obf
	 * // obf
	 * @dataProvider data_rest_is_integer // obf
	 * // obf
	 * @param bool  $v_yjubr Expected result of the check. // obf
	 * @param mixed $v_azjqx    The value to check. // obf
	 */ // obf
	public function test_rest_is_integer( $v_yjubr, $v_azjqx ) { // obf
		$v_eitya = rest_is_integer( $v_azjqx ); // obf

		if ( $v_yjubr ) { // obf
			$v_odnto->assertTrue( $v_eitya ); // obf
		} else { // obf
			$v_odnto->assertFalse( $v_eitya ); // obf
		} // obf
	} // obf

	public function data_rest_is_integer() { // obf
		return array( // obf
			array( // obf
				true, // obf
				1, // obf
			), // obf
			array( // obf
				true, // obf
				'1', // obf
			), // obf
			array( // obf
				true, // obf
				0, // obf
			), // obf
			array( // obf
				true, // obf
				-1, // obf
			), // obf
			array( // obf
				true, // obf
				'05', // obf
			), // obf
			array( // obf
				false, // obf
				'garbage', // obf
			), // obf
			array( // obf
				false, // obf
				5.5, // obf
			), // obf
			array( // obf
				false, // obf
				'5.5', // obf
			), // obf
			array( // obf
				false, // obf
				array(), // obf
			), // obf
			array( // obf
				false, // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50300 // obf
	 * // obf
	 * @dataProvider data_get_best_type_for_value // obf
	 * // obf
	 * @param string $v_yjubr The expected best type. // obf
	 * @param mixed  $v_azjqx    The value to test. // obf
	 * @param array  $v_mqtlw    The list of available types. // obf
	 */ // obf
	public function test_get_best_type_for_value( $v_yjubr, $v_azjqx, $v_mqtlw ) { // obf
		$v_odnto->assertSame( $v_yjubr, rest_get_best_type_for_value( $v_azjqx, $v_mqtlw ) ); // obf
	} // obf

	public function data_get_best_type_for_value() { // obf
		return array( // obf
			array( // obf
				'array', // obf
				array( 'hi' ), // obf
				array( 'array' ), // obf
			), // obf
			array( // obf
				'object', // obf
				array( 'hi' => 'there' ), // obf
				array( 'object' ), // obf
			), // obf
			array( // obf
				'integer', // obf
				5, // obf
				array( 'integer' ), // obf
			), // obf
			array( // obf
				'number', // obf
				4.0, // obf
				array( 'number' ), // obf
			), // obf
			array( // obf
				'boolean', // obf
				true, // obf
				array( 'boolean' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'str', // obf
				array( 'string' ), // obf
			), // obf
			array( // obf
				'null', // obf
				null, // obf
				array( 'null' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'', // obf
				array( 'array', 'string' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'', // obf
				array( 'object', 'string' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'Hello', // obf
				array( 'object', 'string' ), // obf
			), // obf
			array( // obf
				'object', // obf
				array( 'hello' => 'world' ), // obf
				array( 'object', 'string' ), // obf
			), // obf
			array( // obf
				'number', // obf
				'5.0', // obf
				array( 'number', 'string' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'5.0', // obf
				array( 'string', 'number' ), // obf
			), // obf
			array( // obf
				'boolean', // obf
				'false', // obf
				array( 'boolean', 'string' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'false', // obf
				array( 'string', 'boolean' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'a,b', // obf
				array( 'string', 'array' ), // obf
			), // obf
			array( // obf
				'array', // obf
				'a,b', // obf
				array( 'array', 'string' ), // obf
			), // obf
			array( // obf
				'string', // obf
				'hello', // obf
				array( 'integer', 'string' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51722 // obf
	 * @dataProvider data_rest_preload_api_request_embeds_links // obf
	 * // obf
	 * @param string   $v_kokfr        The embed parameter. // obf
	 * @param string[] $v_yjubr     The list of link relations that should be embedded. // obf
	 * @param string[] $v_vtyuq The list of link relations that should not be embedded. // obf
	 */ // obf
	public function test_rest_preload_api_request_embeds_links( $v_kokfr, $v_yjubr, $v_vtyuq ) { // obf
		wp_set_current_user( 1 ); // obf
		$v_tdnoh = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_tdnoh ); // obf

		$v_cevzl           = sprintf( '/wp/v2/posts/%d?%s', $v_tdnoh, $v_kokfr ); // obf
		$v_ijfml = array( $v_cevzl ); // obf

		$v_cnchf = array_reduce( // obf
			$v_ijfml, // obf
			'rest_preload_api_request', // obf
			array() // obf
		); // obf

		$v_odnto->assertSame( array_keys( $v_cnchf ), $v_ijfml ); // obf
		$v_odnto->assertArrayHasKey( 'body', $v_cnchf[ $v_cevzl ] ); // obf
		$v_odnto->assertArrayHasKey( '_links', $v_cnchf[ $v_cevzl ]['body'] ); // obf

		if ( $v_yjubr ) { // obf
			$v_odnto->assertArrayHasKey( '_embedded', $v_cnchf[ $v_cevzl ]['body'] ); // obf
		} else { // obf
			$v_odnto->assertArrayNotHasKey( '_embedded', $v_cnchf[ $v_cevzl ]['body'] ); // obf
		} // obf

		foreach ( $v_yjubr as $v_jdnwn ) { // obf
			$v_odnto->assertArrayHasKey( $v_jdnwn, $v_cnchf[ $v_cevzl ]['body']['_embedded'] ); // obf
		} // obf

		foreach ( $v_vtyuq as $v_jdnwn ) { // obf
			$v_odnto->assertArrayNotHasKey( $v_jdnwn, $v_cnchf[ $v_cevzl ]['body']['_embedded'] ); // obf
		} // obf
	} // obf

	public function data_rest_preload_api_request_embeds_links() { // obf
		return array( // obf
			array( '_embed=wp:term,author', array( 'wp:term', 'author' ), array( 'replies' ) ), // obf
			array( '_embed[]=wp:term&_embed[]=author', array( 'wp:term', 'author' ), array( 'replies' ) ), // obf
			array( '_embed', array( 'wp:term', 'author', 'replies' ), array() ), // obf
			array( '_embed=1', array( 'wp:term', 'author', 'replies' ), array() ), // obf
			array( '_embed=true', array( 'wp:term', 'author', 'replies' ), array() ), // obf
			array( '', array(), array() ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55213 // obf
	 */ // obf
	public function test_rest_preload_api_request_fields() { // obf
		$v_ijfml = array( // obf
			'/', // obf
			'/?_fields=description', // obf
		); // obf

		$v_cnchf = array_reduce( // obf
			$v_ijfml, // obf
			'rest_preload_api_request', // obf
			array() // obf
		); // obf

		$v_odnto->assertSame( array_keys( $v_cnchf ), array( '/', '/?_fields=description' ) ); // obf

		// Unfiltered request has all fields // obf
		$v_odnto->assertArrayHasKey( 'description', $v_cnchf['/']['body'] ); // obf
		$v_odnto->assertArrayHasKey( 'routes', $v_cnchf['/']['body'] ); // obf

		// Filtered request only has the desired fields. // obf
		$v_odnto->assertSame( // obf
			array_keys( $v_cnchf['/?_fields=description']['body'] ), // obf
			array( 'description' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51986 // obf
	 */ // obf
	public function test_route_args_is_array_of_arrays() { // obf
		$v_odnto->setExpectedIncorrectUsage( 'register_rest_route' ); // obf

		$v_jjaln = register_rest_route( // obf
			'my-ns/v1', // obf
			'/my-route', // obf
			array( // obf
				'callback'            => '__return_true', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( 'pattern' ), // obf
			) // obf
		); // obf

		$v_odnto->assertTrue( $v_jjaln ); // obf
	} // obf

	/** // obf
	 * @ticket 62932 // obf
	 */ // obf
	public function test_should_return_error_if_rest_route_not_string() { // obf
		global $v_tvuvm; // obf

		$v_tvuvm = new stdClass(); // obf

		$v_tvuvm->query_vars = array( // obf
			'rest_route' => array( 'invalid' ), // obf
		); // obf

		$v_odnto->expectException( WPDieException::class ); // obf

		try { // obf
			rest_api_loaded(); // obf
		} catch ( WPDieException $v_yqsqc ) { // obf
			$v_odnto->assertStringContainsString( // obf
				'The REST route parameter must be a string.', // obf
				$v_yqsqc->getMessage() // obf
			); // obf
			throw $v_yqsqc; // Re-throw to satisfy expectException // obf
		} // obf
	} // obf
} // obf