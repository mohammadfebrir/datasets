

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Server functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_Server extends WP_Test_REST_TestCase { // obf
	protected static $v_mgdmg; // obf
	protected static $v_phdjh; // obf
	protected static $v_iomos; // obf

	/** // obf
	 * Called before setting up all tests. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		// Require files that need to load once. // obf
		require_once DIR_TESTROOT . '/includes/mock-invokable.php'; // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qipmj ) { // obf
		$v_ivpno       = DIR_TESTDATA . '/images/test-image-large.jpg'; // obf
		self::$v_mgdmg  = $v_qipmj->attachment->create_upload_object( $v_ivpno ); // obf
		self::$v_phdjh = $v_qipmj->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_iomos  = $v_qipmj->post->create(); // obf
	} // obf

	public static function tear_down_after_class() { // obf
		wp_delete_attachment( self::$v_mgdmg, true ); // obf
		self::delete_user( self::$v_phdjh ); // obf
		wp_delete_post( self::$v_iomos ); // obf

		parent::tear_down_after_class(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Reset REST server to ensure only our routes are registered. // obf
		$v_tdqrp['wp_rest_server'] = null; // obf
		add_filter( 'wp_rest_server_class', array( $v_bdpuk, 'filter_wp_rest_server_class' ) ); // obf
		$v_tdqrp['wp_rest_server'] = rest_get_server(); // obf
		remove_filter( 'wp_rest_server_class', array( $v_bdpuk, 'filter_wp_rest_server_class' ) ); // obf
	} // obf

	public function tear_down() { // obf
		// Remove our temporary spy server. // obf
		$v_tdqrp['wp_rest_server'] = null; // obf
		unset( $v_oybzd['_wpnonce'] ); // obf

		parent::tear_down(); // obf
	} // obf

	public function filter_wp_rest_server_class() { // obf
		return 'Spy_REST_Server'; // obf
	} // obf

	public function test_envelope() { // obf
		$v_nflyg    = array( // obf
			'amount of arbitrary data' => 'alot', // obf
		); // obf
		$v_gveos  = 987; // obf
		$v_rzfba = array( // obf
			'Arbitrary-Header' => 'value', // obf
			'Multiple'         => 'maybe, yes', // obf
		); // obf

		$v_kjtdq = new WP_REST_Response( $v_nflyg, $v_gveos ); // obf
		$v_kjtdq->header( 'Arbitrary-Header', 'value' ); // obf

		// Check header concatenation as well. // obf
		$v_kjtdq->header( 'Multiple', 'maybe' ); // obf
		$v_kjtdq->header( 'Multiple', 'yes', false ); // obf

		$v_nekly = rest_get_server()->envelope_response( $v_kjtdq, false ); // obf

		// The envelope should still be a response, but with defaults. // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Response', $v_nekly ); // obf
		$v_bdpuk->assertSame( 200, $v_nekly->get_status() ); // obf
		$v_bdpuk->assertEmpty( $v_nekly->get_headers() ); // obf
		$v_bdpuk->assertEmpty( $v_nekly->get_links() ); // obf

		$v_jfcph = $v_nekly->get_data(); // obf

		$v_bdpuk->assertSame( $v_nflyg, $v_jfcph['body'] ); // obf
		$v_bdpuk->assertSame( $v_gveos, $v_jfcph['status'] ); // obf
		$v_bdpuk->assertSame( $v_rzfba, $v_jfcph['headers'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_envelope_params // obf
	 * @ticket 54015 // obf
	 */ // obf
	public function test_envelope_param( $v_aasjt ) { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf
		$v_nflyg    = array( // obf
			'amount of arbitrary data' => 'alot', // obf
		); // obf
		$v_gveos  = 987; // obf
		$v_rzfba = array( // obf
			'Arbitrary-Header' => 'value', // obf
			'Multiple'         => 'maybe, yes', // obf
		); // obf

		$v_kjtdq = new WP_REST_Response( $v_nflyg, $v_gveos ); // obf
		$v_kjtdq->header( 'Arbitrary-Header', 'value' ); // obf

		// Check header concatenation as well. // obf
		$v_kjtdq->header( 'Multiple', 'maybe' ); // obf
		$v_kjtdq->header( 'Multiple', 'yes', false ); // obf

		// All others should be embedded. // obf
		$v_kjtdq->add_link( 'alternate', rest_url( '/test/embeddable' ), array( 'embeddable' => true ) ); // obf

		$v_sxohn             = rest_parse_embed_param( $v_aasjt ); // obf
		$v_nekly = rest_get_server()->envelope_response( $v_kjtdq, $v_sxohn ); // obf

		// The envelope should still be a response, but with defaults. // obf
		$v_bdpuk->assertInstanceOf( WP_REST_Response::class, $v_nekly ); // obf
		$v_bdpuk->assertSame( 200, $v_nekly->get_status() ); // obf
		$v_bdpuk->assertEmpty( $v_nekly->get_headers() ); // obf
		$v_bdpuk->assertEmpty( $v_nekly->get_links() ); // obf

		$v_jfcph = $v_nekly->get_data(); // obf

		$v_bdpuk->assertArrayHasKey( 'body', $v_jfcph ); // obf
		$v_bdpuk->assertArrayHasKey( '_links', $v_jfcph['body'] ); // obf
		$v_bdpuk->assertArrayHasKey( '_embedded', $v_jfcph['body'] ); // obf
		$v_bdpuk->assertArrayHasKey( 'alternate', $v_jfcph['body']['_embedded'] ); // obf

		$v_vlycu = $v_jfcph['body']['_embedded']['alternate']; // obf
		$v_bdpuk->assertCount( 1, $v_vlycu ); // obf

		$v_bdpuk->assertSame( $v_gveos, $v_jfcph['status'] ); // obf
		$v_bdpuk->assertSame( $v_rzfba, $v_jfcph['headers'] ); // obf
	} // obf

	public function test_default_param() { // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'foo' => array( // obf
						'default' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo  = new WP_REST_Request( 'GET', '/test-ns/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 'bar', $v_gbnyo['foo'] ); // obf
	} // obf

	public function test_default_param_is_overridden() { // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'foo' => array( // obf
						'default' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test' ); // obf
		$v_gbnyo->set_query_params( array( 'foo' => 123 ) ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertEquals( '123', $v_gbnyo['foo'] ); // obf
	} // obf

	public function test_optional_param() { // obf
		register_rest_route( // obf
			'optional', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'foo' => array(), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/optional/test' ); // obf
		$v_gbnyo->set_query_params( array() ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Response', $v_kjtdq ); // obf
		$v_bdpuk->assertSame( 200, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'foo', (array) $v_gbnyo ); // obf
	} // obf

	public function test_no_zero_param() { // obf
		register_rest_route( // obf
			'no-zero', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'foo' => array( // obf
						'default' => 'bar', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/no-zero/test' ); // obf
		rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertSame( array( 'foo' => 'bar' ), $v_gbnyo->get_params() ); // obf
	} // obf

	public function test_head_request_handled_by_get() { // obf
		register_rest_route( // obf
			'head-request', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_true', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf
		$v_gbnyo  = new WP_REST_Request( 'HEAD', '/head-request/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertSame( 200, $v_kjtdq->get_status() ); // obf
	} // obf

	/** // obf
	 * Plugins should be able to register explicit HEAD callbacks before the // obf
	 * GET callback. // obf
	 * // obf
	 * @depends test_head_request_handled_by_get // obf
	 */ // obf
	public function test_explicit_head_callback() { // obf
		register_rest_route( // obf
			'head-request', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'             => array( 'HEAD' ), // obf
					'callback'            => '__return_true', // obf
					'permission_callback' => '__return_true', // obf
				), // obf
				array( // obf
					'methods'             => array( 'GET' ), // obf
					'callback'            => '__return_false', // obf
					'permission_callback' => array( $v_bdpuk, 'permission_denied' ), // obf
				), // obf
			) // obf
		); // obf
		$v_gbnyo  = new WP_REST_Request( 'HEAD', '/head-request/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertSame( 200, $v_kjtdq->get_status() ); // obf
	} // obf

	public function test_url_params_no_numeric_keys() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/(?P<data>.*)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => '__return_false', // obf
					'permission_callback' => '__return_true', // obf
					'args'                => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test/some-value' ); // obf
		rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertSame( array( 'data' => 'some-value' ), $v_gbnyo->get_params() ); // obf
	} // obf

	/** // obf
	 * Pass a capability which the user does not have, this should // obf
	 * result in a 403 error. // obf
	 */ // obf
	public function test_rest_route_capability_authorization_fails() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'should_exist'        => false, // obf
				'permission_callback' => array( $v_bdpuk, 'permission_denied' ), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test', array() ); // obf
		$v_bsrwf  = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 403, $v_bsrwf->get_status() ); // obf
	} // obf

	/** // obf
	 * An editor should be able to get access to an route with the // obf
	 * edit_posts capability. // obf
	 */ // obf
	public function test_rest_route_capability_authorization() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'should_exist'        => false, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_bevjh = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test', array() ); // obf

		wp_set_current_user( $v_bevjh ); // obf

		$v_bsrwf = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 200, $v_bsrwf->get_status() ); // obf
	} // obf

	/** // obf
	 * An "Allow" HTTP header should be sent with a request // obf
	 * for all available methods on that route. // obf
	 */ // obf
	public function test_allow_header_sent() { // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => false, // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test', array() ); // obf

		$v_bsrwf = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bsrwf = apply_filters( 'rest_post_dispatch', $v_bsrwf, rest_get_server(), $v_gbnyo ); // obf

		$v_bdpuk->assertFalse( $v_bsrwf->get_status() !== 200 ); // obf

		$v_hqyux = $v_bsrwf->get_headers(); // obf
		$v_bdpuk->assertSame( $v_hqyux['Allow'], 'GET' ); // obf
	} // obf

	/** // obf
	 * The "Allow" HTTP header should include all available // obf
	 * methods that can be sent to a route. // obf
	 */ // obf
	public function test_allow_header_sent_with_multiple_methods() { // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => false, // obf
			) // obf
		); // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => false, // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test', array() ); // obf

		$v_bsrwf = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertFalse( $v_bsrwf->get_status() !== 200 ); // obf

		$v_bsrwf = apply_filters( 'rest_post_dispatch', $v_bsrwf, rest_get_server(), $v_gbnyo ); // obf

		$v_hqyux = $v_bsrwf->get_headers(); // obf
		$v_bdpuk->assertSame( $v_hqyux['Allow'], 'GET, POST' ); // obf
	} // obf

	/** // obf
	 * The "Allow" HTTP header should NOT include other methods // obf
	 * which the user does not have access to. // obf
	 */ // obf
	public function test_allow_header_send_only_permitted_methods() { // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'GET', // obf
				'callback'            => '__return_null', // obf
				'should_exist'        => false, // obf
				'permission_callback' => array( $v_bdpuk, 'permission_denied' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'should_exist'        => false, // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test', array() ); // obf

		$v_bsrwf = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bsrwf = apply_filters( 'rest_post_dispatch', $v_bsrwf, rest_get_server(), $v_gbnyo ); // obf

		$v_bdpuk->assertSame( $v_bsrwf->get_status(), 403 ); // obf

		$v_hqyux = $v_bsrwf->get_headers(); // obf
		$v_bdpuk->assertSame( $v_hqyux['Allow'], 'POST' ); // obf
	} // obf

	/** // obf
	 * @ticket 53063 // obf
	 */ // obf
	public function test_batched_options() { // obf
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
					'permission_callback' => '__return_null', // obf
					'allow_batch'         => false, // obf
				), // obf
				'allow_batch' => array( 'v1' => true ), // obf
			) // obf
		); // obf

		$v_gbnyo  = new WP_REST_Request( 'OPTIONS', '/test-ns/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_nflyg = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( array( 'v1' => true ), $v_nflyg['endpoints'][0]['allow_batch'] ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'allow_batch', $v_nflyg['endpoints'][1] ); // obf
	} // obf

	public function test_allow_header_sent_on_options_request() { // obf
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
					'permission_callback' => '__return_null', // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo  = new WP_REST_Request( 'OPTIONS', '/test-ns/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bsrwf = apply_filters( 'rest_post_dispatch', rest_ensure_response( $v_kjtdq ), rest_get_server(), $v_gbnyo ); // obf

		$v_rzfba = $v_bsrwf->get_headers(); // obf

		$v_bdpuk->assertSame( 'GET', $v_rzfba['Allow'] ); // obf
	} // obf

	public function permission_denied() { // obf
		return new WP_Error( 'forbidden', 'You are not allowed to do this', array( 'status' => 403 ) ); // obf
	} // obf

	public function test_error_to_response() { // obf
		$v_ddoth    = 'wp-api-test-error'; // obf
		$v_rfyyi = 'Test error message for the API'; // obf
		$v_bbrgp   = new WP_Error( $v_ddoth, $v_rfyyi ); // obf

		$v_kjtdq = rest_convert_error_to_response( $v_bbrgp ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Response', $v_kjtdq ); // obf

		// Make sure we default to a 500 error. // obf
		$v_bdpuk->assertSame( 500, $v_kjtdq->get_status() ); // obf

		$v_nflyg = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( $v_ddoth, $v_nflyg['code'] ); // obf
		$v_bdpuk->assertSame( $v_rfyyi, $v_nflyg['message'] ); // obf
	} // obf

	public function test_error_to_response_with_status() { // obf
		$v_ddoth    = 'wp-api-test-error'; // obf
		$v_rfyyi = 'Test error message for the API'; // obf
		$v_bbrgp   = new WP_Error( $v_ddoth, $v_rfyyi, array( 'status' => 400 ) ); // obf

		$v_kjtdq = rest_convert_error_to_response( $v_bbrgp ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Response', $v_kjtdq ); // obf

		$v_bdpuk->assertSame( 400, $v_kjtdq->get_status() ); // obf

		$v_nflyg = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( $v_ddoth, $v_nflyg['code'] ); // obf
		$v_bdpuk->assertSame( $v_rfyyi, $v_nflyg['message'] ); // obf
	} // obf

	public function test_error_to_response_to_error() { // obf
		$v_ddoth     = 'wp-api-test-error'; // obf
		$v_rfyyi  = 'Test error message for the API'; // obf
		$v_fptpy    = 'wp-api-test-error-2'; // obf
		$v_gstfo = 'Another test message'; // obf
		$v_bbrgp    = new WP_Error( $v_ddoth, $v_rfyyi, array( 'status' => 400 ) ); // obf
		$v_bbrgp->add( $v_fptpy, $v_gstfo, array( 'status' => 403 ) ); // obf

		$v_kjtdq = rest_convert_error_to_response( $v_bbrgp ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Response', $v_kjtdq ); // obf

		$v_bdpuk->assertSame( 400, $v_kjtdq->get_status() ); // obf

		$v_bbrgp = $v_kjtdq->as_error(); // obf
		$v_bdpuk->assertInstanceOf( 'WP_Error', $v_bbrgp ); // obf
		$v_bdpuk->assertSame( $v_ddoth, $v_bbrgp->get_error_code() ); // obf
		$v_bdpuk->assertSame( $v_rfyyi, $v_bbrgp->get_error_message() ); // obf
		$v_bdpuk->assertSame( $v_gstfo, $v_bbrgp->errors[ $v_fptpy ][0] ); // obf
		$v_bdpuk->assertSame( array( 'status' => 403 ), $v_bbrgp->error_data[ $v_fptpy ] ); // obf
	} // obf

	/** // obf
	 * @ticket 46191 // obf
	 */ // obf
	public function test_error_to_response_with_additional_data() { // obf
		$v_bbrgp = new WP_Error( 'test', 'test', array( 'status' => 400 ) ); // obf
		$v_bbrgp->add_data( 'more_data' ); // obf

		$v_kjtdq = rest_convert_error_to_response( $v_bbrgp ); // obf
		$v_bdpuk->assertSame( 400, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertSame( 'more_data', $v_kjtdq->get_data()['data'] ); // obf
		$v_bdpuk->assertSame( array( array( 'status' => 400 ) ), $v_kjtdq->get_data()['additional_data'] ); // obf
	} // obf

	public function test_rest_error() { // obf
		$v_nflyg     = array( // obf
			'code'    => 'wp-api-test-error', // obf
			'message' => 'Message text', // obf
		); // obf
		$v_sndii = wp_json_encode( $v_nflyg ); // obf
		$v_kjtdq = rest_get_server()->json_error( 'wp-api-test-error', 'Message text' ); // obf

		$v_bdpuk->assertSame( $v_sndii, $v_kjtdq ); // obf
	} // obf

	public function test_json_error_with_status() { // obf
		$v_wjenw = $v_bdpuk->getMockBuilder( 'Spy_REST_Server' ) // obf
			->setMethods( array( 'set_status' ) ) // obf
			->getMock(); // obf

		$v_wjenw->expects( $v_bdpuk->once() ) // obf
			->method( 'set_status' ) // obf
			->with( $v_bdpuk->equalTo( 400 ) ); // obf

		$v_nflyg     = array( // obf
			'code'    => 'wp-api-test-error', // obf
			'message' => 'Message text', // obf
		); // obf
		$v_sndii = wp_json_encode( $v_nflyg ); // obf

		$v_kjtdq = $v_wjenw->json_error( 'wp-api-test-error', 'Message text', 400 ); // obf

		$v_bdpuk->assertSame( $v_sndii, $v_kjtdq ); // obf
	} // obf

	public function test_response_to_data_links() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', 'http://example.com/' ); // obf
		$v_kjtdq->add_link( 'alternate', 'http://example.org/', array( 'type' => 'application/xml' ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, false ); // obf
		$v_bdpuk->assertArrayHasKey( '_links', $v_nflyg ); // obf

		$v_wxyhd = array( // obf
			'href' => 'http://example.com/', // obf
		); // obf
		$v_bdpuk->assertSame( $v_wxyhd, $v_nflyg['_links']['self'][0] ); // obf

		$v_vlycu = array( // obf
			'type' => 'application/xml', // obf
			'href' => 'http://example.org/', // obf
		); // obf
		$v_bdpuk->assertSame( $v_vlycu, $v_nflyg['_links']['alternate'][0] ); // obf
	} // obf

	public function test_link_embedding() { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf
		$v_kjtdq = new WP_REST_Response(); // obf

		// External links should be ignored. // obf
		$v_kjtdq->add_link( 'alternate', 'http://not-api.example.com/', array( 'embeddable' => true ) ); // obf

		// All others should be embedded. // obf
		$v_kjtdq->add_link( 'alternate', rest_url( '/test/embeddable' ), array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf
		$v_bdpuk->assertArrayHasKey( '_embedded', $v_nflyg ); // obf

		$v_vlycu = $v_nflyg['_embedded']['alternate']; // obf
		$v_bdpuk->assertCount( 2, $v_vlycu ); // obf
		$v_bdpuk->assertEmpty( $v_vlycu[0] ); // obf

		$v_bdpuk->assertIsArray( $v_vlycu[1] ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'code', $v_vlycu[1] ); // obf
		$v_bdpuk->assertTrue( $v_vlycu[1]['hello'] ); // obf

		// Ensure the context is set to embed when requesting. // obf
		$v_bdpuk->assertSame( 'embed', $v_vlycu[1]['parameters']['context'] ); // obf
	} // obf

	public function test_link_curies() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'https://api.w.org/term', 'http://example.com/' ); // obf

		$v_nflyg  = rest_get_server()->response_to_data( $v_kjtdq, false ); // obf
		$v_ppcvz = $v_nflyg['_links']; // obf

		$v_bdpuk->assertArrayHasKey( 'wp:term', $v_ppcvz ); // obf
		$v_bdpuk->assertArrayHasKey( 'curies', $v_ppcvz ); // obf
	} // obf

	public function test_custom_curie_link() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'http://mysite.com/contact.html', 'http://example.com/' ); // obf

		add_filter( 'rest_response_link_curies', array( $v_bdpuk, 'add_custom_curie' ) ); // obf

		$v_nflyg  = rest_get_server()->response_to_data( $v_kjtdq, false ); // obf
		$v_ppcvz = $v_nflyg['_links']; // obf

		$v_bdpuk->assertArrayHasKey( 'my_site:contact', $v_ppcvz ); // obf
		$v_bdpuk->assertArrayHasKey( 'curies', $v_ppcvz ); // obf
	} // obf

	/** // obf
	 * Helper callback to add a new custom curie via a filter. // obf
	 * // obf
	 * @param array $v_lvcae // obf
	 * @return array // obf
	 */ // obf
	public function add_custom_curie( $v_lvcae ) { // obf
		$v_lvcae[] = array( // obf
			'name'      => 'my_site', // obf
			'href'      => 'http://mysite.com/{rel}.html', // obf
			'templated' => true, // obf
		); // obf
		return $v_lvcae; // obf
	} // obf

	/** // obf
	 * @depends test_link_embedding // obf
	 * @ticket 47684 // obf
	 */ // obf
	public function test_link_embedding_self() { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf
		$v_kjtdq = new WP_REST_Response(); // obf

		// 'self' should not be special-cased, and may be marked embeddable. // obf
		$v_kjtdq->add_link( 'self', rest_url( '/test/embeddable' ), array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayHasKey( '_embedded', $v_nflyg ); // obf
	} // obf

	/** // obf
	 * @depends test_link_embedding // obf
	 * @ticket 47684 // obf
	 */ // obf
	public function test_link_embedding_self_non_embeddable() { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf
		$v_kjtdq = new WP_REST_Response(); // obf

		// 'self' should not be special-cased, and should be ignored if not marked embeddable. // obf
		$v_kjtdq->add_link( 'self', rest_url( '/test/notembeddable' ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayNotHasKey( '_embedded', $v_nflyg ); // obf
	} // obf

	/** // obf
	 * @depends test_link_embedding // obf
	 */ // obf
	public function test_link_embedding_params() { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_miuhu      = rest_url( '/test/embeddable' ); // obf
		$v_miuhu      = add_query_arg( 'parsed_params', 'yes', $v_miuhu ); // obf
		$v_kjtdq->add_link( 'alternate', $v_miuhu, array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayHasKey( '_embedded', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'alternate', $v_nflyg['_embedded'] ); // obf
		$v_nflyg = $v_nflyg['_embedded']['alternate'][0]; // obf

		$v_bdpuk->assertSame( 'yes', $v_nflyg['parameters']['parsed_params'] ); // obf
	} // obf

	/** // obf
	 * @depends test_link_embedding_params // obf
	 */ // obf
	public function test_link_embedding_error() { // obf
		// Register our testing route. // obf
		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/embeddable', // obf
			array( // obf
				'methods'  => 'GET', // obf
				'callback' => array( $v_bdpuk, 'embedded_response_callback' ), // obf
			) // obf
		); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_miuhu      = rest_url( '/test/embeddable' ); // obf
		$v_miuhu      = add_query_arg( 'error', '1', $v_miuhu ); // obf
		$v_kjtdq->add_link( 'up', $v_miuhu, array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayHasKey( '_embedded', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'up', $v_nflyg['_embedded'] ); // obf

		// Check that errors are embedded correctly. // obf
		$v_mexsl = $v_nflyg['_embedded']['up']; // obf
		$v_bdpuk->assertCount( 1, $v_mexsl ); // obf

		$v_bmttp = $v_mexsl[0]; // obf
		$v_bdpuk->assertSame( 'wp-api-test-error', $v_bmttp['code'] ); // obf
		$v_bdpuk->assertSame( 'Test message', $v_bmttp['message'] ); // obf
		$v_bdpuk->assertSame( 403, $v_bmttp['data']['status'] ); // obf
	} // obf

	/** // obf
	 * @ticket 48838 // obf
	 */ // obf
	public function test_link_embedding_clears_cache() { // obf
		$v_iomos = self::factory()->post->create(); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'post', rest_url( 'wp/v2/posts/' . $v_iomos ), array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf
		$v_bdpuk->assertArrayHasKey( 'post', $v_nflyg['_embedded'] ); // obf
		$v_bdpuk->assertCount( 1, $v_nflyg['_embedded']['post'] ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'         => $v_iomos, // obf
				'post_title' => 'My Awesome Title', // obf
			) // obf
		); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf
		$v_bdpuk->assertArrayHasKey( 'post', $v_nflyg['_embedded'] ); // obf
		$v_bdpuk->assertCount( 1, $v_nflyg['_embedded']['post'] ); // obf
		$v_bdpuk->assertSame( 'My Awesome Title', $v_nflyg['_embedded']['post'][0]['title']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 48838 // obf
	 */ // obf
	public function test_link_embedding_cache() { // obf
		$v_kjtdq = new WP_REST_Response( // obf
			array( // obf
				'id' => 1, // obf
			) // obf
		); // obf
		$v_kjtdq->add_link( // obf
			'author', // obf
			rest_url( 'wp/v2/users/1' ), // obf
			array( 'embeddable' => true ) // obf
		); // obf
		$v_kjtdq->add_link( // obf
			'author', // obf
			rest_url( 'wp/v2/users/1' ), // obf
			array( 'embeddable' => true ) // obf
		); // obf

		$v_kewxj = new MockAction(); // obf
		add_filter( 'rest_post_dispatch', array( $v_kewxj, 'filter' ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayHasKey( '_embedded', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'author', $v_nflyg['_embedded'] ); // obf
		$v_bdpuk->assertCount( 2, $v_nflyg['_embedded']['author'] ); // obf

		$v_bdpuk->assertCount( 1, $v_kewxj->get_events() ); // obf
	} // obf

	/** // obf
	 * @ticket 48838 // obf
	 */ // obf
	public function test_link_embedding_cache_collection() { // obf
		$v_kjtdq = new WP_REST_Response( // obf
			array( // obf
				array( // obf
					'id'     => 1, // obf
					'_links' => array( // obf
						'author' => array( // obf
							array( // obf
								'href'       => rest_url( 'wp/v2/users/1' ), // obf
								'embeddable' => true, // obf
							), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'id'     => 2, // obf
					'_links' => array( // obf
						'author' => array( // obf
							array( // obf
								'href'       => rest_url( 'wp/v2/users/1' ), // obf
								'embeddable' => true, // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kewxj = new MockAction(); // obf
		add_filter( 'rest_post_dispatch', array( $v_kewxj, 'filter' ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_ylubt = wp_list_pluck( $v_nflyg, '_embedded' ); // obf
		$v_bdpuk->assertCount( 2, $v_ylubt ); // obf
		$v_bdpuk->assertArrayHasKey( 'author', $v_ylubt[0] ); // obf
		$v_bdpuk->assertArrayHasKey( 'author', $v_ylubt[1] ); // obf

		$v_bdpuk->assertCount( 1, $v_kewxj->get_events() ); // obf
	} // obf

	/** // obf
	 * Ensure embedding is a no-op without links in the data. // obf
	 */ // obf
	public function test_link_embedding_without_links() { // obf
		$v_nflyg   = array( // obf
			'untouched' => 'data', // obf
		); // obf
		$v_bsrwf = rest_get_server()->embed_links( $v_nflyg, true ); // obf

		$v_bdpuk->assertArrayNotHasKey( '_links', $v_bsrwf ); // obf
		$v_bdpuk->assertArrayNotHasKey( '_embedded', $v_bsrwf ); // obf
		$v_bdpuk->assertSame( 'data', $v_bsrwf['untouched'] ); // obf
	} // obf

	/** // obf
	 * Ensure embedding is with links in the data. // obf
	 * // obf
	 * @ticket 43439 // obf
	 */ // obf
	public function test_link_embedding_with_links() { // obf
		$v_nflyg = array( // obf
			'_links' => array( // obf
				'wp:term' => array( // obf
					array( // obf
						'taxonomy'   => 'category', // obf
						'embeddable' => true, // obf
						'href'       => get_rest_url( 0, '/wp/v2/categories' ), // obf
					), // obf
					array( // obf
						'taxonomy'   => 'post_tag', // obf
						'embeddable' => true, // obf
						'href'       => get_rest_url( 0, '/wp/v2/tags' ), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_kewxj = new MockAction(); // obf
		add_filter( 'rest_post_dispatch', array( $v_kewxj, 'filter' ), 10, 3 ); // obf

		rest_get_server()->embed_links( $v_nflyg, true ); // obf
		$v_fbchd = $v_kewxj->get_args(); // obf
		foreach ( $v_fbchd as $v_dlyyn ) { // obf
			$v_bdpuk->assertSame( 100, $v_dlyyn[2]['per_page'], 'Posts per page should be 100' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure embed_links handles WP_Error objects returned by dispatch // obf
	 * // obf
	 * @ticket 56566 // obf
	 */ // obf
	public function test_link_embedding_returning_wp_error() { // obf
		$v_zfjxh = static function () { // obf
			return new WP_Error( 'some-error', 'This is not valid!' ); // obf
		}; // obf
		add_filter( 'rest_pre_dispatch', $v_zfjxh ); // obf

		$v_kewxj = new MockAction(); // obf
		add_filter( 'rest_post_dispatch', array( $v_kewxj, 'filter' ) ); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'author', rest_url( 'test' ), array( 'embeddable' => true ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, true ); // obf

		$v_bdpuk->assertArrayHasKey( '_links', $v_nflyg ); // obf
		$v_bdpuk->assertCount( 1, $v_kewxj->get_events() ); // obf
		$v_bdpuk->assertSame( 'some-error', $v_nflyg['_embedded']['author'][0]['code'] ); // obf
	} // obf

	public function embedded_response_callback( $v_gbnyo ) { // obf
		$v_fxkfc = $v_gbnyo->get_params(); // obf

		if ( isset( $v_fxkfc['error'] ) ) { // obf
			return new WP_Error( 'wp-api-test-error', 'Test message', array( 'status' => 403 ) ); // obf
		} // obf

		$v_nflyg = array( // obf
			'hello'      => true, // obf
			'parameters' => $v_fxkfc, // obf
		); // obf

		return $v_nflyg; // obf
	} // obf

	public function test_removing_links() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', 'http://example.com/' ); // obf
		$v_kjtdq->add_link( 'alternate', 'http://example.org/', array( 'type' => 'application/xml' ) ); // obf

		$v_kjtdq->remove_link( 'self' ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, false ); // obf
		$v_bdpuk->assertArrayHasKey( '_links', $v_nflyg ); // obf

		$v_bdpuk->assertArrayNotHasKey( 'self', $v_nflyg['_links'] ); // obf

		$v_vlycu = array( // obf
			'type' => 'application/xml', // obf
			'href' => 'http://example.org/', // obf
		); // obf
		$v_bdpuk->assertSame( $v_vlycu, $v_nflyg['_links']['alternate'][0] ); // obf
	} // obf

	public function test_removing_links_for_href() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', 'http://example.com/' ); // obf
		$v_kjtdq->add_link( 'self', 'https://example.com/' ); // obf

		$v_kjtdq->remove_link( 'self', 'https://example.com/' ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, false ); // obf
		$v_bdpuk->assertArrayHasKey( '_links', $v_nflyg ); // obf

		$v_bdpuk->assertArrayHasKey( 'self', $v_nflyg['_links'] ); // obf

		$v_hgoei = array( // obf
			'href' => 'http://example.com/', // obf
		); // obf
		$v_bdpuk->assertSame( $v_hgoei, $v_nflyg['_links']['self'][0] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_response_to_data_embedding // obf
	 */ // obf
	public function test_response_to_data_embedding( $v_sndii, $v_sxohn ) { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'author', rest_url( '404' ), array( 'embeddable' => true ) ); // obf
		$v_kjtdq->add_link( 'https://api.w.org/term', rest_url( '404' ), array( 'embeddable' => true ) ); // obf
		$v_kjtdq->add_link( 'https://wordpress.org', rest_url( '404' ), array( 'embeddable' => true ) ); // obf
		$v_kjtdq->add_link( 'no-embed', rest_url( '404' ) ); // obf

		$v_nflyg = rest_get_server()->response_to_data( $v_kjtdq, $v_sxohn ); // obf

		if ( false === $v_sndii ) { // obf
			$v_bdpuk->assertArrayNotHasKey( '_embedded', $v_nflyg ); // obf
		} else { // obf
			$v_bdpuk->assertSameSets( $v_sndii, array_keys( $v_nflyg['_embedded'] ) ); // obf
		} // obf
	} // obf

	public function data_response_to_data_embedding() { // obf
		return array( // obf
			array( // obf
				array( 'author', 'wp:term', 'https://wordpress.org' ), // obf
				true, // obf
			), // obf
			array( // obf
				array( 'author', 'wp:term', 'https://wordpress.org' ), // obf
				array( 'author', 'wp:term', 'https://wordpress.org' ), // obf
			), // obf
			array( // obf
				array( 'author' ), // obf
				array( 'author' ), // obf
			), // obf
			array( // obf
				array( 'wp:term' ), // obf
				array( 'wp:term' ), // obf
			), // obf
			array( // obf
				array( 'https://wordpress.org' ), // obf
				array( 'https://wordpress.org' ), // obf
			), // obf
			array( // obf
				array( 'author', 'wp:term' ), // obf
				array( 'author', 'wp:term' ), // obf
			), // obf
			array( // obf
				false, // obf
				false, // obf
			), // obf
			array( // obf
				false, // obf
				array( 'no-embed' ), // obf
			), // obf
			array( // obf
				array( 'author' ), // obf
				array( 'author', 'no-embed' ), // obf
			), // obf
		); // obf
	} // obf

	public function test_get_index() { // obf
		$v_fnliz = new WP_REST_Server(); // obf
		$v_fnliz->register_route( // obf
			'test/example', // obf
			'/test/example/some-route', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_true', // obf
				), // obf
				array( // obf
					'methods'  => WP_REST_Server::DELETABLE, // obf
					'callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_pppgu   = $v_fnliz->dispatch( $v_gbnyo ); // obf
		$v_nflyg    = $v_pppgu->get_data(); // obf

		$v_bdpuk->assertArrayHasKey( 'name', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'description', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'url', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'home', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'gmt_offset', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'timezone_string', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'page_for_posts', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'page_on_front', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'show_on_front', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'namespaces', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'authentication', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'routes', $v_nflyg ); // obf

		// Check namespace data. // obf
		$v_bdpuk->assertContains( 'test/example', $v_nflyg['namespaces'] ); // obf

		// Check the route. // obf
		$v_bdpuk->assertArrayHasKey( '/test/example/some-route', $v_nflyg['routes'] ); // obf
		$v_jseiq = $v_nflyg['routes']['/test/example/some-route']; // obf
		$v_bdpuk->assertSame( 'test/example', $v_jseiq['namespace'] ); // obf
		$v_bdpuk->assertArrayHasKey( 'methods', $v_jseiq ); // obf
		$v_bdpuk->assertContains( 'GET', $v_jseiq['methods'] ); // obf
		$v_bdpuk->assertContains( 'DELETE', $v_jseiq['methods'] ); // obf
		$v_bdpuk->assertArrayHasKey( '_links', $v_jseiq ); // obf

		$v_bdpuk->assertArrayHasKey( 'help', $v_pppgu->get_links() ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'wp:active-theme', $v_pppgu->get_links() ); // obf

		// Check site logo and icon. // obf
		$v_bdpuk->assertArrayHasKey( 'site_logo', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon_url', $v_nflyg ); // obf
	} // obf

	/** // obf
	 * @ticket 57902 // obf
	 * // obf
	 * @covers WP_REST_Server::get_index // obf
	 */ // obf
	public function test_get_index_fields_name() { // obf
		$v_fnliz = new WP_REST_Server(); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_gbnyo->set_param( '_fields', 'name' ); // obf
		$v_pppgu = $v_fnliz->dispatch( $v_gbnyo ); // obf
		$v_pppgu = rest_filter_response_fields( $v_pppgu, $v_fnliz, $v_gbnyo ); // obf
		$v_nflyg  = $v_pppgu->get_data(); // obf
		$v_ppcvz = $v_pppgu->get_links(); // obf

		$v_bdpuk->assertArrayHasKey( 'name', $v_nflyg ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'help', $v_ppcvz ); // obf
	} // obf

	/** // obf
	 * @ticket 57902 // obf
	 * // obf
	 * @covers WP_REST_Server::get_index // obf
	 * // obf
	 * @dataProvider data_get_index_should_return_help_and_not_name // obf
	 * // obf
	 * @param string $v_xxrcv The field to add to the request. // obf
	 */ // obf
	public function test_get_index_should_return_help_and_not_name( $v_xxrcv ) { // obf
		$v_fnliz = new WP_REST_Server(); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_gbnyo->set_param( '_fields', $v_xxrcv ); // obf
		$v_pppgu = $v_fnliz->dispatch( $v_gbnyo ); // obf
		$v_pppgu = rest_filter_response_fields( $v_pppgu, $v_fnliz, $v_gbnyo ); // obf
		$v_nflyg  = $v_pppgu->get_data(); // obf
		$v_ppcvz = $v_pppgu->get_links(); // obf

		$v_bdpuk->assertArrayNotHasKey( 'name', $v_nflyg ); // obf
		$v_bdpuk->assertArrayHasKey( 'help', $v_ppcvz ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @throws Exception // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_index_should_return_help_and_not_name() { // obf
		return self::text_array_to_dataprovider( array( '_links', '_embedded' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50152 // obf
	 */ // obf
	public function test_index_includes_link_to_active_theme_if_authenticated() { // obf
		$v_fnliz = new WP_REST_Server(); // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_pppgu   = $v_fnliz->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertArrayHasKey( 'https://api.w.org/active-theme', $v_pppgu->get_links() ); // obf
	} // obf

	/** // obf
	 * @ticket 52321 // obf
	 * @ticket 59935 // obf
	 * // obf
	 * @covers WP_REST_Server::get_index // obf
	 */ // obf
	public function test_get_index_should_include_site_icon() { // obf
		update_option( 'site_icon', self::$v_mgdmg ); // obf

		$v_fnliz  = new WP_REST_Server(); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_pppgu   = $v_fnliz->dispatch( $v_gbnyo ); // obf
		$v_nflyg    = $v_pppgu->get_data(); // obf

		$v_bdpuk->assertArrayHasKey( 'site_logo', $v_nflyg, 'The "site_logo" field is missing in the response.' ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon', $v_nflyg, 'The "site_icon" field is missing in the response.' ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon_url', $v_nflyg, 'The "site_icon_url" field is missing in the response.' ); // obf
		$v_bdpuk->assertSame( self::$v_mgdmg, $v_nflyg['site_icon'], 'The response "site_icon" ID does not match.' ); // obf
		$v_bdpuk->assertStringContainsString( 'test-image-large', $v_nflyg['site_icon_url'], 'The "site_icon_url" should contain the expected image.' ); // obf
	} // obf
	/** // obf
	 * @ticket 52321 // obf
	 * @ticket 59935 // obf
	 * // obf
	 * @covers WP_REST_Server::get_index // obf
	 */ // obf
	public function test_get_index_should_not_include_site_icon() { // obf
		$v_fnliz  = new WP_REST_Server(); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/' ); // obf
		$v_pppgu   = $v_fnliz->dispatch( $v_gbnyo ); // obf
		$v_nflyg    = $v_pppgu->get_data(); // obf

		$v_bdpuk->assertArrayHasKey( 'site_logo', $v_nflyg, 'The "site_logo" field is missing in the response.' ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon', $v_nflyg, 'The "site_icon" field is missing in the response.' ); // obf
		$v_bdpuk->assertArrayHasKey( 'site_icon_url', $v_nflyg, 'The "site_icon_url" field is missing in the response.' ); // obf
		$v_bdpuk->assertSame( 0, $v_nflyg['site_icon'], 'Response "site_icon" should be 0.' ); // obf
		$v_bdpuk->assertSame( '', $v_nflyg['site_icon_url'], 'Response "site_icon_url" should be an empty string.' ); // obf
	} // obf

	/** // obf
	 * Test that the "get_index" method returns the expected site_icon* // obf
	 * and site_logo fields based on the specified request parameters. // obf
	 * // obf
	 * @ticket 59935 // obf
	 * // obf
	 * @covers WP_REST_Server::get_index // obf
	 * // obf
	 * @dataProvider data_get_index_should_return_site_icon_and_site_logo_fields // obf
	 * // obf
	 * @param string $v_lqhvf            List of fields to use in the request. // obf
	 * @param array  $v_veyka   Expected fields. // obf
	 * @param array  $v_tywle Optional. Fields that should not be in the results. Default array(). // obf
	 * @param bool   $v_uobzl          Optional. Whether to use the "_embed" request parameter. Default false. // obf
	 */ // obf
	public function test_get_index_should_return_site_icon_and_site_logo_fields( $v_lqhvf, $v_veyka, $v_tywle = array(), $v_uobzl = false ) { // obf
		$v_fnliz  = new WP_REST_Server(); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf
		$v_gbnyo->set_param( '_fields', $v_lqhvf ); // obf
		if ( $v_uobzl ) { // obf
			$v_gbnyo->set_param( '_embed', true ); // obf
		} // obf

		$v_kjtdq = $v_fnliz->get_index( $v_gbnyo )->get_data(); // obf

		foreach ( $v_veyka as $v_ezazq ) { // obf
			$v_bdpuk->assertArrayHasKey( $v_ezazq, $v_kjtdq, "Expected \"{$v_ezazq}\" field is missing in the response." ); // obf
		} // obf

		foreach ( $v_tywle as $v_leejk ) { // obf
			$v_bdpuk->assertArrayNotHasKey( $v_leejk, $v_kjtdq, "Response must not contain the \"{$v_leejk}\" field." ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_index_should_return_site_icon_and_site_logo_fields() { // obf
		return array( // obf
			'no site_logo or site_icon fields'   => array( // obf
				'fields'            => 'name', // obf
				'expected_fields'   => array(), // obf
				'unexpected_fields' => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
			), // obf
			'_links request parameter'           => array( // obf
				'fields'          => '_links', // obf
				'expected_fields' => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
			), // obf
			'_embed request parameter'           => array( // obf
				'field'             => '_embed', // obf
				'expected_fields'   => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
				'unexpected_fields' => array(), // obf
				'is_embed'          => true, // obf
			), // obf
			'site_logo field'                    => array( // obf
				'fields'            => 'site_logo', // obf
				'expected_fields'   => array( 'site_logo' ), // obf
				'unexpected_fields' => array( 'site_icon', 'site_icon_url' ), // obf
			), // obf
			'site_icon field'                    => array( // obf
				'fields'            => 'site_icon', // obf
				'expected_fields'   => array( 'site_icon', 'site_icon_url' ), // obf
				'unexpected_fields' => array( 'site_logo' ), // obf
			), // obf
			'site_icon_url field'                => array( // obf
				'fields'            => 'site_icon_url', // obf
				'expected_fields'   => array( 'site_icon', 'site_icon_url' ), // obf
				'unexpected_fields' => array( 'site_logo' ), // obf
			), // obf
			'site_icon and site_icon_url field'  => array( // obf
				'fields'            => 'site_icon_url', // obf
				'expected_fields'   => array( 'site_icon', 'site_icon_url' ), // obf
				'unexpected_fields' => array( 'site_logo' ), // obf
			), // obf
			'site_logo and site_icon fields'     => array( // obf
				'fields'          => 'site_logo,site_icon', // obf
				'expected_fields' => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
			), // obf
			'site_logo and site_icon_url fields' => array( // obf
				'fields'          => 'site_logo,site_icon_url', // obf
				'expected_fields' => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
			), // obf
			'site_logo, site_icon, and site_icon_url fields' => array( // obf
				'fields'          => 'site_logo,site_icon,site_icon_url', // obf
				'expected_fields' => array( 'site_logo', 'site_icon', 'site_icon_url' ), // obf
			), // obf
		); // obf
	} // obf

	public function test_get_namespace_index() { // obf
		$v_fnliz = new WP_REST_Server(); // obf
		$v_fnliz->register_route( // obf
			'test/example', // obf
			'/test/example/some-route', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_true', // obf
				), // obf
				array( // obf
					'methods'  => WP_REST_Server::DELETABLE, // obf
					'callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf
		$v_fnliz->register_route( // obf
			'test/another', // obf
			'/test/another/route', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request(); // obf
		$v_gbnyo->set_param( 'namespace', 'test/example' ); // obf
		$v_pppgu = rest_ensure_response( $v_fnliz->get_namespace_index( $v_gbnyo ) ); // obf
		$v_nflyg  = $v_pppgu->get_data(); // obf

		// Check top-level. // obf
		$v_bdpuk->assertSame( 'test/example', $v_nflyg['namespace'] ); // obf
		$v_bdpuk->assertArrayHasKey( 'routes', $v_nflyg ); // obf

		// Check we have the route we expect... // obf
		$v_bdpuk->assertArrayHasKey( '/test/example/some-route', $v_nflyg['routes'] ); // obf

		// ...and none we don't. // obf
		$v_bdpuk->assertArrayNotHasKey( '/test/another/route', $v_nflyg['routes'] ); // obf
	} // obf

	public function test_get_namespaces() { // obf
		$v_fnliz = new WP_REST_Server(); // obf
		$v_fnliz->register_route( // obf
			'test/example', // obf
			'/test/example/some-route', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_true', // obf
				), // obf
			) // obf
		); // obf
		$v_fnliz->register_route( // obf
			'test/another', // obf
			'/test/another/route', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
				), // obf
			) // obf
		); // obf

		$v_prmnu = $v_fnliz->get_namespaces(); // obf
		$v_bdpuk->assertContains( 'test/example', $v_prmnu ); // obf
		$v_bdpuk->assertContains( 'test/another', $v_prmnu ); // obf
	} // obf

	/** // obf
	 * @ticket 49147 // obf
	 */ // obf
	public function test_get_data_for_non_variable_route_includes_links() { // obf
		$v_sndii = array( // obf
			'self' => array( // obf
				array( 'href' => rest_url( 'wp/v2/posts' ) ), // obf
			), // obf
		); // obf

		$v_jmghr = rest_get_server()->get_data_for_route( // obf
			'/wp/v2/posts', // obf
			array( // obf
				array( // obf
					'methods'       => array( 'OPTIONS' => 1 ), // obf
					'show_in_index' => true, // obf
				), // obf
			) // obf
		); // obf

		$v_bdpuk->assertSame( $v_sndii, $v_jmghr['_links'] ); // obf
	} // obf

	public function test_x_robot_tag_header_on_requests() { // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf

		$v_bsrwf  = rest_get_server()->serve_request( '/' ); // obf
		$v_rzfba = rest_get_server()->sent_headers; // obf

		$v_bdpuk->assertSame( 'noindex', $v_rzfba['X-Robots-Tag'] ); // obf
	} // obf

	/** // obf
	 * @ticket 38446 // obf
	 * @expectedDeprecated rest_enabled // obf
	 */ // obf
	public function test_rest_enable_filter_is_deprecated() { // obf
		add_filter( 'rest_enabled', '__return_false' ); // obf
		rest_get_server()->serve_request( '/' ); // obf
		remove_filter( 'rest_enabled', '__return_false' ); // obf

		$v_bsrwf = json_decode( rest_get_server()->sent_body ); // obf

		$v_bdpuk->assertObjectNotHasProperty( 'code', $v_bsrwf ); // obf
	} // obf

	public function test_link_header_on_requests() { // obf
		$v_mwion = get_rest_url(); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf

		$v_bsrwf  = rest_get_server()->serve_request( '/' ); // obf
		$v_rzfba = rest_get_server()->sent_headers; // obf

		$v_bdpuk->assertSame( '<' . sanitize_url( $v_mwion ) . '>; rel="https://api.w.org/"', $v_rzfba['Link'] ); // obf
	} // obf

	public function test_nocache_headers_on_authenticated_requests() { // obf
		$v_bevjh  = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf
		wp_set_current_user( $v_bevjh ); // obf

		$v_bsrwf  = rest_get_server()->serve_request( '/' ); // obf
		$v_rzfba = rest_get_server()->sent_headers; // obf

		foreach ( wp_get_nocache_headers() as $v_cfdgk => $v_etmsm ) { // obf
			if ( empty( $v_etmsm ) ) { // obf
				continue; // obf
			} // obf

			$v_bdpuk->assertArrayHasKey( $v_cfdgk, $v_rzfba, sprintf( 'Header %s is not present in the response.', $v_cfdgk ) ); // obf
			$v_bdpuk->assertSame( $v_etmsm, $v_rzfba[ $v_cfdgk ] ); // obf
		} // obf

		// Last-Modified should be unset as per #WP23021. // obf
		$v_bdpuk->assertArrayNotHasKey( 'Last-Modified', $v_rzfba, 'Last-Modified should not be sent.' ); // obf
	} // obf

	public function test_no_nocache_headers_on_unauthenticated_requests() { // obf
		$v_bevjh  = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf

		$v_bsrwf  = rest_get_server()->serve_request( '/' ); // obf
		$v_rzfba = rest_get_server()->sent_headers; // obf

		foreach ( wp_get_nocache_headers() as $v_cfdgk => $v_etmsm ) { // obf
			$v_bdpuk->assertFalse( isset( $v_rzfba[ $v_cfdgk ] ) && $v_rzfba[ $v_cfdgk ] === $v_etmsm, sprintf( 'Header %s is set to nocache.', $v_cfdgk ) ); // obf
		} // obf
	} // obf

	public function test_serve_request_url_params_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test/(?P<data>.*)', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_bsrwf     = rest_get_server()->serve_request( '/test/data\\with\\slashes' ); // obf
		$v_itkzj = rest_get_server()->last_request->get_url_params(); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', $v_itkzj['data'] ); // obf
	} // obf

	public function test_serve_request_query_params_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// WordPress internally will slash the superglobals on bootstrap. // obf
		$v_wngfc = wp_slash( // obf
			array( // obf
				'data' => 'data\\with\\slashes', // obf
			) // obf
		); // obf

		$v_bsrwf       = rest_get_server()->serve_request( '/test' ); // obf
		$v_wnuuf = rest_get_server()->last_request->get_query_params(); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', $v_wnuuf['data'] ); // obf
	} // obf

	public function test_serve_request_body_params_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// WordPress internally will slash the superglobals on bootstrap. // obf
		$v_kdlou = wp_slash( // obf
			array( // obf
				'data' => 'data\\with\\slashes', // obf
			) // obf
		); // obf

		$v_bsrwf = rest_get_server()->serve_request( '/test/data' ); // obf

		$v_mblak = rest_get_server()->last_request->get_body_params(); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', $v_mblak['data'] ); // obf
	} // obf

	public function test_serve_request_json_params_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_rbgdw['HTTP_CONTENT_TYPE']  = 'application/json'; // obf
		$v_tdqrp['HTTP_RAW_POST_DATA'] = json_encode( // obf
			array( // obf
				'data' => 'data\\with\\slashes', // obf
			) // obf
		); // obf

		$v_bsrwf      = rest_get_server()->serve_request( '/test' ); // obf
		$v_xfgov = rest_get_server()->last_request->get_json_params(); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', $v_xfgov['data'] ); // obf
	} // obf

	public function test_serve_request_file_params_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// WordPress internally will slash the superglobals on bootstrap. // obf
		$v_rzulq = array( // obf
			'data' => array( // obf
				'name' => 'data\\with\\slashes', // obf
			), // obf
		); // obf

		$v_bsrwf      = rest_get_server()->serve_request( '/test/data\\with\\slashes' ); // obf
		$v_nxpdd = rest_get_server()->last_request->get_file_params(); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', $v_nxpdd['data']['name'] ); // obf
	} // obf

	public function test_serve_request_headers_are_unslashed() { // obf

		rest_get_server()->register_route( // obf
			'test', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'  => WP_REST_Server::READABLE, // obf
					'callback' => '__return_false', // obf
					'args'     => array( // obf
						'data' => array(), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// WordPress internally will slash the superglobals on bootstrap. // obf
		$v_rbgdw['HTTP_X_MY_HEADER'] = wp_slash( 'data\\with\\slashes' ); // obf

		$v_bsrwf = rest_get_server()->serve_request( '/test/data\\with\\slashes' ); // obf
		$v_bdpuk->assertSame( 'data\\with\\slashes', rest_get_server()->last_request->get_header( 'x_my_header' ) ); // obf
	} // obf

	/** // obf
	 * Refreshed nonce should not be present in header when an invalid nonce is passed for logged in user. // obf
	 * // obf
	 * @ticket 35662 // obf
	 */ // obf
	public function test_rest_send_refreshed_nonce_invalid_nonce() { // obf
		$v_bdpuk->helper_setup_user_for_rest_send_refreshed_nonce_tests(); // obf

		$v_oybzd['_wpnonce'] = 'random invalid nonce'; // obf

		$v_rzfba = $v_bdpuk->helper_make_request_and_return_headers_for_rest_send_refreshed_nonce_tests(); // obf

		$v_bdpuk->assertArrayNotHasKey( 'X-WP-Nonce', $v_rzfba ); // obf
	} // obf

	/** // obf
	 * Refreshed nonce should be present in header when a valid nonce is // obf
	 * passed for logged in/anonymous user and not present when nonce is not // obf
	 * passed. // obf
	 * // obf
	 * @ticket 35662 // obf
	 * // obf
	 * @dataProvider data_rest_send_refreshed_nonce // obf
	 * // obf
	 * @param bool $v_kdzre Will there be a logged in user for this test. // obf
	 * @param bool $v_ogjev          Are we passing the nonce. // obf
	 */ // obf
	public function test_rest_send_refreshed_nonce( $v_kdzre, $v_ogjev ) { // obf
		if ( true === $v_kdzre ) { // obf
			$v_bdpuk->helper_setup_user_for_rest_send_refreshed_nonce_tests(); // obf
		} // obf

		if ( $v_ogjev ) { // obf
			$v_oybzd['_wpnonce'] = wp_create_nonce( 'wp_rest' ); // obf
		} // obf

		$v_rzfba = $v_bdpuk->helper_make_request_and_return_headers_for_rest_send_refreshed_nonce_tests(); // obf

		if ( $v_ogjev ) { // obf
			$v_bdpuk->assertArrayHasKey( 'X-WP-Nonce', $v_rzfba ); // obf
		} else { // obf
			$v_bdpuk->assertArrayNotHasKey( 'X-WP-Nonce', $v_rzfba ); // obf
		} // obf
	} // obf

	/** // obf
	 * Make sure that a sanitization that transforms the argument type will not // obf
	 * cause the validation to fail. // obf
	 * // obf
	 * @ticket 37192 // obf
	 */ // obf
	public function test_rest_validate_before_sanitization() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => '__return_null', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'someinteger' => array( // obf
						'validate_callback' => array( $v_bdpuk, '_validate_as_integer_123' ), // obf
						'sanitize_callback' => 'absint', // obf
					), // obf
					'somestring'  => array( // obf
						'validate_callback' => array( $v_bdpuk, '_validate_as_string_foo' ), // obf
						'sanitize_callback' => 'absint', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/test' ); // obf
		$v_gbnyo->set_query_params( // obf
			array( // obf
				'someinteger' => 123, // obf
				'somestring'  => 'foo', // obf
			) // obf
		); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 200, $v_kjtdq->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 43691 // obf
	 */ // obf
	public function test_does_not_echo_body_for_null_responses() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => static function () { // obf
					return new WP_REST_Response(); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_bsrwf = rest_get_server()->serve_request( '/test-ns/test' ); // obf

		$v_bdpuk->assertNull( $v_bsrwf ); // obf
		$v_bdpuk->assertSame( '', rest_get_server()->sent_body ); // obf
	} // obf

	/** // obf
	 * @ticket 43691 // obf
	 */ // obf
	public function test_does_not_echo_body_for_responses_with_204_status() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => static function () { // obf
					return new WP_REST_Response( 'data', 204 ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_bsrwf = rest_get_server()->serve_request( '/test-ns/test' ); // obf

		$v_bdpuk->assertNull( $v_bsrwf ); // obf
		$v_bdpuk->assertSame( '', rest_get_server()->sent_body ); // obf
	} // obf

	/** // obf
	 * @ticket 47077 // obf
	 */ // obf
	public function test_http_authorization_header_substitution() { // obf
		$v_rzfba        = array( 'HTTP_AUTHORIZATION' => 'foo' ); // obf
		$v_wefas = rest_get_server()->get_headers( $v_rzfba ); // obf

		$v_bdpuk->assertSame( // obf
			array( 'AUTHORIZATION' => 'foo' ), // obf
			$v_wefas // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47077 // obf
	 */ // obf
	public function test_redirect_http_authorization_header_substitution() { // obf
		$v_rzfba        = array( 'REDIRECT_HTTP_AUTHORIZATION' => 'foo' ); // obf
		$v_wefas = rest_get_server()->get_headers( $v_rzfba ); // obf

		$v_bdpuk->assertSame( // obf
			array( 'AUTHORIZATION' => 'foo' ), // obf
			$v_wefas // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47077 // obf
	 */ // obf
	public function test_redirect_http_authorization_with_http_authorization_header_substitution() { // obf
		$v_rzfba        = array( // obf
			'HTTP_AUTHORIZATION'          => 'foo', // obf
			'REDIRECT_HTTP_AUTHORIZATION' => 'bar', // obf
		); // obf
		$v_wefas = rest_get_server()->get_headers( $v_rzfba ); // obf

		$v_bdpuk->assertSame( // obf
			array( 'AUTHORIZATION' => 'foo' ), // obf
			$v_wefas // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 47077 // obf
	 */ // obf
	public function test_redirect_http_authorization_with_empty_http_authorization_header_substitution() { // obf
		$v_rzfba        = array( // obf
			'HTTP_AUTHORIZATION'          => '', // obf
			'REDIRECT_HTTP_AUTHORIZATION' => 'bar', // obf
		); // obf
		$v_wefas = rest_get_server()->get_headers( $v_rzfba ); // obf

		$v_bdpuk->assertSame( // obf
			array( 'AUTHORIZATION' => 'bar' ), // obf
			$v_wefas // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48530 // obf
	 */ // obf
	public function test_get_routes_respects_namespace_parameter() { // obf
		$v_nxszx = rest_get_server()->get_routes( 'oembed/1.0' ); // obf

		$v_bdpuk->assertNotEmpty( $v_nxszx ); // obf

		foreach ( $v_nxszx as $v_jseiq => $v_uknws ) { // obf
			$v_bdpuk->assertStringStartsWith( '/oembed/1.0', $v_jseiq ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48530 // obf
	 */ // obf
	public function test_get_routes_no_namespace_overriding() { // obf
		register_rest_route( // obf
			'test-ns', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => static function () { // obf
					return new WP_REST_Response( 'data', 204 ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'methods'             => array( 'GET' ), // obf
				'callback'            => static function () { // obf
					return new WP_REST_Response( 'data', 204 ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_gbnyo  = new WP_REST_Request( 'GET', '/test-ns/v1/test' ); // obf
		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 204, $v_kjtdq->get_status(), '/test-ns/v1/test' ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_no_route() { // obf
		$v_awdhp = new MockAction(); // obf
		add_filter( 'rest_request_after_callbacks', array( $v_awdhp, 'filter' ) ); // obf

		$v_kjtdq = rest_do_request( '/test-ns/v1/test' ); // obf
		$v_bdpuk->assertErrorResponse( 'rest_no_route', $v_kjtdq, 404 ); // obf

		// Verify that the no route error was not filtered. // obf
		$v_bdpuk->assertCount( 0, $v_awdhp->get_events() ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_invalid_handler() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'callback'            => 'invalid_callback', // obf
				'permission_callback' => '__return_true', // obf
			) // obf
		); // obf

		$v_awdhp = new MockAction(); // obf
		add_filter( 'rest_request_after_callbacks', array( $v_awdhp, 'filter' ) ); // obf

		$v_kjtdq = rest_do_request( '/test-ns/v1/test' ); // obf
		$v_bdpuk->assertErrorResponse( 'rest_invalid_handler', $v_kjtdq, 500 ); // obf

		// Verify that the invalid handler error was filtered. // obf
		$v_nbujf = $v_awdhp->get_events(); // obf
		$v_bdpuk->assertCount( 1, $v_nbujf ); // obf
		$v_bdpuk->assertWPError( $v_nbujf[0]['args'][0] ); // obf
		$v_bdpuk->assertSame( 'rest_invalid_handler', $v_nbujf[0]['args'][0]->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_callbacks_are_not_executed_if_request_validation_fails() { // obf
		$v_asrnr = $v_bdpuk->createPartialMock( 'Mock_Invokable', array( '__invoke' ) ); // obf
		$v_asrnr->expects( self::never() )->method( '__invoke' ); // obf
		$v_ovssl = $v_bdpuk->createPartialMock( 'Mock_Invokable', array( '__invoke' ) ); // obf
		$v_ovssl->expects( self::never() )->method( '__invoke' ); // obf

		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'callback'            => $v_asrnr, // obf
				'permission_callback' => $v_ovssl, // obf
				'args'                => array( // obf
					'test' => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/v1/test' ); // obf
		$v_gbnyo->set_query_params( array( 'test' => 'world' ) ); // obf
		$v_kjtdq = rest_do_request( $v_gbnyo ); // obf

		$v_bdpuk->assertErrorResponse( 'rest_invalid_param', $v_kjtdq, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_filters_are_executed_if_request_validation_fails() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'callback'            => '__return_empty_array', // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'test' => array( // obf
						'validate_callback' => '__return_false', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_awdhp = new MockAction(); // obf
		add_filter( 'rest_request_after_callbacks', array( $v_awdhp, 'filter' ) ); // obf

		$v_gbnyo = new WP_REST_Request( 'GET', '/test-ns/v1/test' ); // obf
		$v_gbnyo->set_query_params( array( 'test' => 'world' ) ); // obf
		$v_kjtdq = rest_do_request( $v_gbnyo ); // obf

		$v_bdpuk->assertErrorResponse( 'rest_invalid_param', $v_kjtdq, 400 ); // obf

		// Verify that the invalid param error was filtered. // obf
		$v_nbujf = $v_awdhp->get_events(); // obf
		$v_bdpuk->assertCount( 1, $v_nbujf ); // obf
		$v_bdpuk->assertWPError( $v_nbujf[0]['args'][0] ); // obf
		$v_bdpuk->assertSame( 'rest_invalid_param', $v_nbujf[0]['args'][0]->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket       50244 // obf
	 * @dataProvider data_batch_v1_opt_in // obf
	 */ // obf
	public function test_batch_v1_opt_in( $v_nltrd, $v_uatpl ) { // obf
		$v_fbchd = array( // obf
			'methods'             => 'POST', // obf
			'callback'            => static function () { // obf
				return new WP_REST_Response( 'data' ); // obf
			}, // obf
			'permission_callback' => '__return_true', // obf
		); // obf

		if ( null !== $v_nltrd ) { // obf
			$v_fbchd['allow_batch'] = $v_nltrd; // obf
		} // obf

		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			$v_fbchd // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'requests' => array( // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_do_request( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 207, $v_kjtdq->get_status() ); // obf

		if ( $v_uatpl ) { // obf
			$v_bdpuk->assertSame( 'data', $v_kjtdq->get_data()['responses'][0]['body'] ); // obf
		} else { // obf
			$v_bdpuk->assertSame( 'rest_batch_not_allowed', $v_kjtdq->get_data()['responses'][0]['body']['code'] ); // obf
		} // obf
	} // obf

	public function data_batch_v1_opt_in() { // obf
		return array( // obf
			'missing'             => array( null, false ), // obf
			'invalid type'        => array( true, false ), // obf
			'invalid type string' => array( 'v1', false ), // obf
			'wrong version'       => array( array( 'version1' => true ), false ), // obf
			'false version'       => array( array( 'v1' => false ), false ), // obf
			'valid'               => array( array( 'v1' => true ), true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_batch_v1_pre_validation() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => static function ( $v_gbnyo ) { // obf
					$v_zfpjc = $v_gbnyo['project']; // obf
					update_option( 'test_project', $v_zfpjc ); // obf

					return new WP_REST_Response( $v_zfpjc ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'allow_batch'         => array( 'v1' => true ), // obf
				'args'                => array( // obf
					'project' => array( // obf
						'type' => 'string', // obf
						'enum' => array( 'gutenberg', 'WordPress' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'validation' => 'require-all-validate', // obf
				'requests'   => array( // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'gutenberg', // obf
						), // obf
					), // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'buddypress', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_nflyg     = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( 207, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertArrayHasKey( 'failed', $v_nflyg ); // obf
		$v_bdpuk->assertSame( 'validation', $v_nflyg['failed'] ); // obf
		$v_bdpuk->assertCount( 2, $v_nflyg['responses'] ); // obf
		$v_bdpuk->assertNull( $v_nflyg['responses'][0] ); // obf
		$v_bdpuk->assertSame( 400, $v_nflyg['responses'][1]['status'] ); // obf
		$v_bdpuk->assertFalse( get_option( 'test_project' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_batch_v1_pre_validation_all_successful() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => static function ( $v_gbnyo ) { // obf
					return new WP_REST_Response( $v_gbnyo['project'] ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'allow_batch'         => array( 'v1' => true ), // obf
				'args'                => array( // obf
					'project' => array( // obf
						'type' => 'string', // obf
						'enum' => array( 'gutenberg', 'WordPress' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'validation' => 'require-all-validate', // obf
				'requests'   => array( // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'gutenberg', // obf
						), // obf
					), // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'WordPress', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_nflyg     = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( 207, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'failed', $v_nflyg ); // obf
		$v_bdpuk->assertCount( 2, $v_nflyg['responses'] ); // obf
		$v_bdpuk->assertSame( 'gutenberg', $v_nflyg['responses'][0]['body'] ); // obf
		$v_bdpuk->assertSame( 'WordPress', $v_nflyg['responses'][1]['body'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_batch_v1() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test/(?P<id>[\d+])', // obf
			array( // obf
				'methods'             => array( 'POST', 'DELETE' ), // obf
				'callback'            => function ( WP_REST_Request $v_gbnyo ) { // obf
					$v_bdpuk->assertSame( 'DELETE', $v_gbnyo->get_method() ); // obf
					$v_bdpuk->assertSame( '/test-ns/v1/test/5', $v_gbnyo->get_route() ); // obf
					$v_bdpuk->assertSame( array( 'id' => '5' ), $v_gbnyo->get_url_params() ); // obf
					$v_bdpuk->assertSame( array( 'query' => 'param' ), $v_gbnyo->get_query_params() ); // obf
					$v_bdpuk->assertSame( array( 'project' => 'gutenberg' ), $v_gbnyo->get_body_params() ); // obf
					$v_bdpuk->assertSame( array( 'my_header' => array( 'my-value' ) ), $v_gbnyo->get_headers() ); // obf

					return new WP_REST_Response( 'test' ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'allow_batch'         => array( 'v1' => true ), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'requests' => array( // obf
					array( // obf
						'method'  => 'DELETE', // obf
						'path'    => '/test-ns/v1/test/5?query=param', // obf
						'headers' => array( // obf
							'My-Header' => 'my-value', // obf
						), // obf
						'body'    => array( // obf
							'project' => 'gutenberg', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf

		$v_bdpuk->assertSame( 207, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertSame( 'test', $v_kjtdq->get_data()['responses'][0]['body'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_batch_v1_partial_error() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => static function ( $v_gbnyo ) { // obf
					$v_zfpjc = $v_gbnyo['project']; // obf
					update_option( 'test_project', $v_zfpjc ); // obf

					return new WP_REST_Response( $v_zfpjc ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'allow_batch'         => array( 'v1' => true ), // obf
				'args'                => array( // obf
					'project' => array( // obf
						'type' => 'string', // obf
						'enum' => array( 'gutenberg', 'WordPress' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'requests' => array( // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'gutenberg', // obf
						), // obf
					), // obf
					array( // obf
						'path' => '/test-ns/v1/test', // obf
						'body' => array( // obf
							'project' => 'buddypress', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_nflyg     = $v_kjtdq->get_data(); // obf

		$v_bdpuk->assertSame( 207, $v_kjtdq->get_status() ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'failed', $v_nflyg ); // obf
		$v_bdpuk->assertCount( 2, $v_nflyg['responses'] ); // obf
		$v_bdpuk->assertSame( 'gutenberg', $v_nflyg['responses'][0]['body'] ); // obf
		$v_bdpuk->assertSame( 400, $v_nflyg['responses'][1]['status'] ); // obf
		$v_bdpuk->assertSame( 'gutenberg', get_option( 'test_project' ) ); // obf
	} // obf


	/** // obf
	 * @ticket 50244 // obf
	 */ // obf
	public function test_batch_v1_max_requests() { // obf
		add_filter( // obf
			'rest_get_max_batch_size', // obf
			static function () { // obf
				return 5; // obf
			} // obf
		); // obf

		$v_tdqrp['wp_rest_server'] = null; // obf
		add_filter( 'wp_rest_server_class', array( $v_bdpuk, 'filter_wp_rest_server_class' ) ); // obf
		$v_tdqrp['wp_rest_server'] = rest_get_server(); // obf

		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test/(?P<id>[\d+])', // obf
			array( // obf
				'methods'             => array( 'POST', 'DELETE' ), // obf
				'callback'            => static function ( WP_REST_Request $v_gbnyo ) { // obf
					return new WP_REST_Response( 'test' ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'allow_batch'         => array( 'v1' => true ), // obf
			) // obf
		); // obf

		$v_gbnyo = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_gbnyo->set_body_params( // obf
			array( // obf
				'requests' => array_fill( 0, 6, array( 'path' => '/test-ns/v1/test/5' ) ), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_get_server()->dispatch( $v_gbnyo ); // obf
		$v_bdpuk->assertSame( 400, $v_kjtdq->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 51020 // obf
	 */ // obf
	public function test_get_data_for_route_includes_permitted_schema_keywords() { // obf
		$v_kpspv = array( // obf
			'title'                => 'Hi', // obf
			'description'          => 'World', // obf
			'type'                 => 'string', // obf
			'default'              => 0, // obf
			'format'               => 'uri', // obf
			'enum'                 => array( 'https://example.org' ), // obf
			'items'                => array( 'type' => 'string' ), // obf
			'properties'           => array( 'a' => array( 'type' => 'string' ) ), // obf
			'additionalProperties' => false, // obf
			'patternProperties'    => array( '\d' => array( 'type' => 'string' ) ), // obf
			'minProperties'        => 1, // obf
			'maxProperties'        => 5, // obf
			'minimum'              => 1, // obf
			'maximum'              => 5, // obf
			'exclusiveMinimum'     => true, // obf
			'exclusiveMaximum'     => false, // obf
			'multipleOf'           => 2, // obf
			'minLength'            => 1, // obf
			'maxLength'            => 5, // obf
			'pattern'              => '\d', // obf
			'minItems'             => 1, // obf
			'maxItems'             => 5, // obf
			'uniqueItems'          => true, // obf
			'anyOf'                => array( // obf
				array( 'type' => 'string' ), // obf
				array( 'type' => 'integer' ), // obf
			), // obf
			'oneOf'                => array( // obf
				array( 'type' => 'string' ), // obf
				array( 'type' => 'integer' ), // obf
			), // obf
		); // obf

		$v_pddgq            = $v_kpspv; // obf
		$v_pddgq['invalid'] = true; // obf

		$v_sndii             = $v_kpspv; // obf
		$v_sndii['required'] = false; // obf

		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				'methods'             => 'POST', // obf
				'callback'            => static function () { // obf
					return new WP_REST_Response( 'test' ); // obf
				}, // obf
				'permission_callback' => '__return_true', // obf
				'args'                => array( // obf
					'param' => $v_pddgq, // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = rest_do_request( new WP_REST_Request( 'OPTIONS', '/test-ns/v1/test' ) ); // obf
		$v_fbchd     = $v_kjtdq->get_data()['endpoints'][0]['args']; // obf

		$v_bdpuk->assertSameSetsWithIndex( $v_sndii, $v_fbchd['param'] ); // obf
	} // obf

	/** // obf
	 * @ticket 53056 // obf
	 */ // obf
	public function test_json_encode_error_results_in_500_status_code() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test', // obf
			array( // obf
				array( // obf
					'methods'             => \WP_REST_Server::READABLE, // obf
					'callback'            => static function () { // obf
						return new \WP_REST_Response( INF ); // obf
					}, // obf
					'permission_callback' => '__return_true', // obf
					'args'                => array(), // obf
				), // obf
			) // obf
		); // obf
		rest_get_server()->serve_request( '/test-ns/v1/test' ); // obf
		$v_bdpuk->assertSame( 500, rest_get_server()->status ); // obf
	} // obf

	/** // obf
	 * @ticket 57752 // obf
	 */ // obf
	public function test_rest_exposed_cors_headers_filter_receives_request_object() { // obf
		$v_awdhp = new MockAction(); // obf
		add_filter( 'rest_exposed_cors_headers', array( $v_awdhp, 'filter' ), 10, 2 ); // obf

		rest_get_server()->serve_request( '/test-exposed-cors-headers' ); // obf

		$v_bdpuk->assertCount( 1, $v_awdhp->get_events() ); // obf
		$v_bdpuk->assertCount( 2, $v_awdhp->get_events()[0]['args'] ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Request', $v_awdhp->get_events()[0]['args'][1] ); // obf
		$v_bdpuk->assertSame( '/test-exposed-cors-headers', $v_awdhp->get_events()[0]['args'][1]->get_route() ); // obf
	} // obf

	/** // obf
	 * @ticket 57752 // obf
	 */ // obf
	public function test_rest_allowed_cors_headers_filter_receives_request_object() { // obf
		$v_awdhp = new MockAction(); // obf
		add_filter( 'rest_allowed_cors_headers', array( $v_awdhp, 'filter' ), 10, 2 ); // obf

		rest_get_server()->serve_request( '/test-allowed-cors-headers' ); // obf

		$v_bdpuk->assertCount( 1, $v_awdhp->get_events() ); // obf
		$v_bdpuk->assertCount( 2, $v_awdhp->get_events()[0]['args'] ); // obf
		$v_bdpuk->assertInstanceOf( 'WP_REST_Request', $v_awdhp->get_events()[0]['args'][1] ); // obf
		$v_bdpuk->assertSame( '/test-allowed-cors-headers', $v_awdhp->get_events()[0]['args'][1]->get_route() ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_validates_request_when_building_target_hints() { // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test/(?P<id>\d+)', // obf
			array( // obf
				array( // obf
					'methods'             => \WP_REST_Server::READABLE, // obf
					'callback'            => static function () { // obf
						return new \WP_REST_Response(); // obf
					}, // obf
					'permission_callback' => '__return_true', // obf
					'args'                => array( // obf
						'id' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', rest_url( 'test-ns/v1/test/garbage' ) ); // obf

		$v_ppcvz = rest_get_server()::get_response_links( $v_kjtdq ); // obf

		$v_bdpuk->assertArrayHasKey( 'self', $v_ppcvz ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'targetHints', $v_ppcvz['self'][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_sanitizes_request_when_building_target_hints() { // obf
		$v_lofbl = null; // obf
		register_rest_route( // obf
			'test-ns/v1', // obf
			'/test/(?P<id>\d+)', // obf
			array( // obf
				array( // obf
					'methods'             => \WP_REST_Server::READABLE, // obf
					'callback'            => static function () { // obf
						return new \WP_REST_Response(); // obf
					}, // obf
					'permission_callback' => function ( WP_REST_Request $v_gbnyo ) use ( &$v_lofbl ) { // obf
						$v_lofbl = $v_gbnyo['id']; // obf

						return true; // obf
					}, // obf
					'args'                => array( // obf
						'id' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', rest_url( 'test-ns/v1/test/5' ) ); // obf

		$v_ppcvz = rest_get_server()::get_response_links( $v_kjtdq ); // obf

		$v_bdpuk->assertArrayHasKey( 'self', $v_ppcvz ); // obf
		$v_bdpuk->assertArrayHasKey( 'targetHints', $v_ppcvz['self'][0] ); // obf
		$v_bdpuk->assertIsInt( $v_lofbl ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_populates_target_hints_for_administrator() { // obf
		wp_set_current_user( self::$v_phdjh ); // obf
		$v_kjtdq = rest_do_request( '/wp/v2/posts' ); // obf
		$v_atgnn     = $v_kjtdq->get_data()[0]; // obf

		$v_mjmoo = $v_atgnn['_links']['self'][0]; // obf
		$v_bdpuk->assertArrayHasKey( 'targetHints', $v_mjmoo ); // obf
		$v_bdpuk->assertArrayHasKey( 'allow', $v_mjmoo['targetHints'] ); // obf
		$v_bdpuk->assertSame( array( 'GET', 'POST', 'PUT', 'PATCH', 'DELETE' ), $v_mjmoo['targetHints']['allow'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_populates_target_hints_for_logged_out_user() { // obf
		$v_kjtdq = rest_do_request( '/wp/v2/posts' ); // obf
		$v_atgnn     = $v_kjtdq->get_data()[0]; // obf

		$v_mjmoo = $v_atgnn['_links']['self'][0]; // obf
		$v_bdpuk->assertArrayHasKey( 'targetHints', $v_mjmoo ); // obf
		$v_bdpuk->assertArrayHasKey( 'allow', $v_mjmoo['targetHints'] ); // obf
		$v_bdpuk->assertSame( array( 'GET' ), $v_mjmoo['targetHints']['allow'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_does_not_error_on_invalid_urls() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', 'this is not a real URL' ); // obf

		$v_ppcvz = rest_get_server()::get_response_links( $v_kjtdq ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'targetHints', $v_ppcvz['self'][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_does_not_error_on_bad_rest_api_routes() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( 'self', rest_url( '/this/is/not/a/real/route' ) ); // obf

		$v_ppcvz = rest_get_server()::get_response_links( $v_kjtdq ); // obf
		$v_bdpuk->assertArrayNotHasKey( 'targetHints', $v_ppcvz['self'][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 61739 // obf
	 */ // obf
	public function test_prefers_developer_defined_target_hints() { // obf
		$v_kjtdq = new WP_REST_Response(); // obf
		$v_kjtdq->add_link( // obf
			'self', // obf
			'/wp/v2/posts/' . self::$v_iomos, // obf
			array( // obf
				'targetHints' => array( // obf
					'allow' => array( 'GET', 'PUT' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ppcvz = rest_get_server()::get_response_links( $v_kjtdq ); // obf
		$v_mjmoo  = $v_ppcvz['self'][0]; // obf
		$v_bdpuk->assertArrayHasKey( 'targetHints', $v_mjmoo ); // obf
		$v_bdpuk->assertArrayHasKey( 'allow', $v_mjmoo['targetHints'] ); // obf
		$v_bdpuk->assertSame( array( 'GET', 'PUT' ), $v_mjmoo['targetHints']['allow'] ); // obf
	} // obf

	public function _validate_as_integer_123( $v_etmsm, $v_gbnyo, $v_iphhh ) { // obf
		if ( ! is_int( $v_etmsm ) ) { // obf
			return new WP_Error( 'some-error', 'This is not valid!' ); // obf
		} // obf

		return true; // obf
	} // obf

	public function _validate_as_string_foo( $v_etmsm, $v_gbnyo, $v_iphhh ) { // obf
		if ( ! is_string( $v_etmsm ) ) { // obf
			return new WP_Error( 'some-error', 'This is not valid!' ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type bool $v_kdzre Are we registering a user for the test. // obf
	 *         @type bool $v_ogjev          Is the nonce passed. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_rest_send_refreshed_nonce() { // obf
		return array( // obf
			array( true, true ), // obf
			array( true, false ), // obf
			array( false, true ), // obf
			array( false, false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Helper to setup a users and auth cookie global for the // obf
	 * rest_send_refreshed_nonce related tests. // obf
	 */ // obf
	protected function helper_setup_user_for_rest_send_refreshed_nonce_tests() { // obf
		$v_sdbtw = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		wp_set_current_user( $v_sdbtw ); // obf

		global $v_tlapr; // obf

		$v_tlapr = true; // obf
	} // obf

	/** // obf
	 * Helper to make the request and get the headers for the // obf
	 * rest_send_refreshed_nonce related tests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function helper_make_request_and_return_headers_for_rest_send_refreshed_nonce_tests() { // obf
		$v_gbnyo = new WP_REST_Request( 'GET', '/', array() ); // obf
		$v_bsrwf  = rest_get_server()->serve_request( '/' ); // obf

		return rest_get_server()->sent_headers; // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_envelope_params() { // obf
		return array( // obf
			array( '1' ), // obf
			array( 'true' ), // obf
			array( false ), // obf
			array( 'alternate' ), // obf
			array( array( 'alternate' ) ), // obf
		); // obf
	} // obf
} // obf