

<?php // obf
/** // obf
 * Unit tests covering WP_REST_URL_Details_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 * // obf
 * @covers WP_REST_URL_Details_Controller // obf
 * // obf
 * @group url-details // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_WpRestUrlDetailsController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_hgshz; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_jcypr; // obf

	/** // obf
	 * The REST API route for the block renderer. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const REQUEST_ROUTE = '/wp-block-editor/v1/url-details'; // obf

	/** // obf
	 * URL placeholder. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const URL_PLACEHOLDER = 'https://placeholder-site.com'; // obf

	/** // obf
	 * Array of request args. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_cydht = array(); // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_sdybl WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_sdybl ) { // obf
		self::$v_hgshz      = $v_sdybl->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_jcypr = $v_sdybl->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_hgshz ); // obf
		self::delete_user( self::$v_jcypr ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'pre_http_request', array( $v_vvlin, 'mock_success_request_to_remote_url' ), 10, 3 ); // obf

		// Disables usage of cache during major of tests. // obf
		add_filter( 'pre_site_transient_' . $v_vvlin->get_transient_name(), '__return_null' ); // obf
	} // obf

	public function tear_down() { // obf
		$v_vvlin->request_args = array(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::register_routes // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_hfqra = rest_get_server()->get_routes(); // obf
		$v_vvlin->assertArrayHasKey( static::REQUEST_ROUTE, $v_hfqra ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		/* // obf
		 * Note the data in the subset comes from the fixture HTML returned by // obf
		 * the filter `pre_http_request` (see this class's `set_up` method). // obf
		 */ // obf
		$v_vvlin->assertSame( // obf
			array( // obf
				'title'       => 'Example Website — - with encoded content.', // obf
				'icon'        => 'https://placeholder-site.com/favicon.ico?querystringaddedfortesting', // obf
				'description' => 'Example description text here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', // obf
				'image'       => 'https://placeholder-site.com/images/home/screen-themes.png?3', // obf
			), // obf
			$v_cfwwo // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::permissions_check // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_items_fails_for_unauthenticated_user() { // obf
		wp_set_current_user( 0 ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( WP_Http::UNAUTHORIZED, $v_pzzxx->get_status(), 'Response status is not ' . WP_Http::UNAUTHORIZED ); // obf

		$v_vvlin->assertSame( 'rest_cannot_view_url_details', $v_cfwwo['code'], 'Response "code" is not "rest_cannot_view_url_details"' ); // obf

		$v_mqony = 'you are not allowed to process remote urls'; // obf
		$v_vvlin->assertStringContainsString( $v_mqony, strtolower( $v_cfwwo['message'] ), 'Response "message" does not contain  "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::permissions_check // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_items_fails_for_user_with_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_jcypr ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( WP_Http::FORBIDDEN, $v_pzzxx->get_status(), 'Response status is not ' . WP_Http::FORBIDDEN ); // obf

		$v_vvlin->assertSame( 'rest_cannot_view_url_details', $v_cfwwo['code'], 'Response "code" is not "rest_cannot_view_url_details"' ); // obf

		$v_mqony = 'you are not allowed to process remote urls'; // obf
		$v_vvlin->assertStringContainsString( $v_mqony, strtolower( $v_cfwwo['message'] ), 'Response "message" does not contain "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_fails_for_invalid_url // obf
	 * // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 * // obf
	 * @param mixed $v_rcorf Given invalid URL to test. // obf
	 */ // obf
	public function test_get_items_fails_for_invalid_url( $v_rcorf ) { // obf
		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => $v_rcorf, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( WP_Http::BAD_REQUEST, $v_pzzxx->get_status(), 'Response status is not ' . WP_Http::BAD_REQUEST ); // obf

		$v_vvlin->assertSame( 'rest_invalid_param', $v_cfwwo['code'], 'Response "code" is not "rest_invalid_param"' ); // obf

		$v_mqony = 'invalid parameter(s): url'; // obf
		$v_vvlin->assertStringContainsString( $v_mqony, strtolower( $v_cfwwo['message'] ), 'Response "message" does not contain "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_items_fails_for_invalid_url() { // obf
		return array( // obf
			'empty string'   => array( '' ), // obf
			'numeric'        => array( 1234456 ), // obf
			'invalid scheme' => array( 'invalid.proto://wordpress.org' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_items_fails_for_url_which_returns_a_non_200_status_code() { // obf
		// Force HTTP request to remote site to fail. // obf
		remove_filter( 'pre_http_request', array( $v_vvlin, 'mock_success_request_to_remote_url' ), 10 ); // obf
		add_filter( 'pre_http_request', array( $v_vvlin, 'mock_failed_request_to_remote_url' ), 10, 3 ); // obf

		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // note: `pre_http_request` causes request to 404. // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( 404, $v_pzzxx->get_status(), 'Response status is not 404' ); // obf

		$v_vvlin->assertSame( 'no_response', $v_cfwwo['code'], 'Response "code" is not "no_response"' ); // obf

		$v_vvlin->assertStringContainsString( 'not found', strtolower( $v_cfwwo['message'] ), 'Response "message" does not contain "not found"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_items_fails_for_url_which_returns_empty_body_for_success() { // obf
		// Force HTTP request to remote site to return an empty body in response. // obf
		remove_filter( 'pre_http_request', array( $v_vvlin, 'mock_success_request_to_remote_url' ) ); // obf
		add_filter( 'pre_http_request', array( $v_vvlin, 'mock_request_to_remote_url_with_empty_body_response' ), 10, 3 ); // obf

		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // note: `pre_http_request` causes request to 404. // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( 404, $v_pzzxx->get_status(), 'Response status is not 404' ); // obf

		$v_vvlin->assertSame( 'no_content', $v_cfwwo['code'], 'Response "code" is not "no_content"' ); // obf

		$v_mqony = strtolower( 'Unable to retrieve body from response at this URL' ); // obf
		$v_vvlin->assertStringContainsString( $v_mqony, strtolower( $v_cfwwo['message'] ), 'Response "message" does not contain "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_can_filter_http_request_args_via_filter() { // obf
		wp_set_current_user( self::$v_hgshz ); // obf

		add_filter( // obf
			'rest_url_details_http_request_args', // obf
			static function ( $v_hmzjs, $v_orebu ) { // obf
				return array_merge( // obf
					$v_hmzjs, // obf
					array( // obf
						'timeout' => 27, // modify default timeout. // obf
						'body'    => $v_orebu, // add new and allow to assert on $v_orebu arg passed. // obf
					) // obf
				); // obf
			}, // obf
			10, // obf
			2 // obf
		); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf

		rest_get_server()->dispatch( $v_cofnj ); // obf

		// Check the args were filtered as expected. // obf
		$v_vvlin->assertArrayHasKey( 'timeout', $v_vvlin->request_args, 'Request args do not contain a "timeout" key' ); // obf
		$v_vvlin->assertArrayHasKey( 'limit_response_size', $v_vvlin->request_args, 'Request args do not contain a "limit_response_size" key' ); // obf
		$v_vvlin->assertArrayHasKey( 'body', $v_vvlin->request_args, 'Request args do not contain a "body" key' ); // obf
		$v_vvlin->assertSame( 27, $v_vvlin->request_args['timeout'], 'Request args "timeout" is not 27' ); // obf
		$v_vvlin->assertSame( 153600, $v_vvlin->request_args['limit_response_size'], 'Request args "limit_response_size" is not 153600' ); // obf
		$v_vvlin->assertSame( static::URL_PLACEHOLDER, $v_vvlin->request_args['body'], 'Request args "body" is not "' . static::URL_PLACEHOLDER . '"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_will_return_from_cache_if_populated() { // obf
		$v_nwjon = $v_vvlin->get_transient_name(); // obf
		remove_filter( "pre_site_transient_{$v_nwjon}", '__return_null' ); // obf

		// Force cache to return a known value as the remote URL http response body. // obf
		add_filter( // obf
			"pre_site_transient_{$v_nwjon}", // obf
			static function () { // obf
				return '<html><head><title>This value from cache.</title></head><body></body></html>'; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		// Data should be that from cache not from mocked network response. // obf
		$v_vvlin->assertStringContainsString( 'This value from cache', $v_cfwwo['title'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_allows_filtering_data_retrieved_for_a_given_url() { // obf
		add_filter( // obf
			'rest_prepare_url_details', // obf
			static function ( $v_pzzxx ) { // obf

				$v_cfwwo = $v_pzzxx->get_data(); // obf

				$v_pzzxx->set_data( // obf
					array_merge( // obf
						$v_cfwwo, // obf
						array( // obf
							'og_title' => 'This was manually added to the data via filter', // obf
						) // obf
					) // obf
				); // obf

				return $v_pzzxx; // obf
			} // obf
		); // obf

		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		/* // obf
		 * Instead of the default data retrieved we expect to see the modified // obf
		 * data we provided via the filter. // obf
		 */ // obf
		$v_mqony = 'Example Website — - with encoded content.'; // obf
		$v_vvlin->assertSame( $v_mqony, $v_cfwwo['title'], 'Response "title" is not "' . $v_mqony . '"' ); // obf
		$v_mqony = 'This was manually added to the data via filter'; // obf
		$v_vvlin->assertSame( $v_mqony, $v_cfwwo['og_title'], 'Response "og_title" is not "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::parse_url_details // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_allows_filtering_response() { // obf
		/* // obf
		 * Filter the response to known set of values changing only // obf
		 * based on whether the response came from the cache or not. // obf
		 */ // obf
		add_filter( // obf
			'rest_prepare_url_details', // obf
			static function ( $v_pzzxx, $v_orebu ) { // obf
				return new WP_REST_Response( // obf
					array( // obf
						'status'        => 418, // obf
						'response'      => "Response for URL $v_orebu altered via rest_prepare_url_details filter", // obf
						'body_response' => array(), // obf
					) // obf
				); // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_cofnj->set_query_params( // obf
			array( // obf
				'url' => static::URL_PLACEHOLDER, // obf
			) // obf
		); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf

		$v_cfwwo = $v_pzzxx->get_data(); // obf

		$v_vvlin->assertSame( 418, $v_cfwwo['status'], 'Response "status" is not 418' ); // obf

		$v_mqony = 'Response for URL https://placeholder-site.com altered via rest_prepare_url_details filter'; // obf
		$v_vvlin->assertSame( $v_mqony, $v_cfwwo['response'], 'Response "response" is not "' . $v_mqony . '"' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_URL_Details_Controller::get_item_schema // obf
	 * // obf
	 * @ticket 54358 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_hgshz ); // obf

		$v_cofnj  = new WP_REST_Request( 'OPTIONS', static::REQUEST_ROUTE ); // obf
		$v_pzzxx = rest_get_server()->dispatch( $v_cofnj ); // obf
		$v_cfwwo     = $v_pzzxx->get_data(); // obf

		$v_upwxs = $v_cfwwo['endpoints'][0]; // obf

		$v_vvlin->assertArrayHasKey( 'url', $v_upwxs['args'], 'Endpoint "args" does not contain a "url" key' ); // obf
		$v_vvlin->assertSame( // obf
			array( // obf
				'description' => 'The URL to process.', // obf
				'type'        => 'string', // obf
				'format'      => 'uri', // obf
				'required'    => true, // obf
			), // obf
			$v_upwxs['args']['url'], // obf
			'Response endpoint "[args][url]" does not contain expected schema' // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_title // obf
	 * // obf
	 * @covers WP_REST_URL_Details_Controller::get_title // obf
	 * // obf
	 * @ticket 54358 // obf
	 * // obf
	 * @param string $v_yujks     Given HTML string. // obf
	 * @param string $v_mqony Expected found title. // obf
	 */ // obf
	public function test_get_title( $v_yujks, $v_mqony ) { // obf
		$v_bbfqu = new WP_REST_URL_Details_Controller(); // obf
		$v_pajtv     = $v_vvlin->get_reflective_method( 'get_title' ); // obf

		$v_lowkm = $v_pajtv->invoke( // obf
			$v_bbfqu, // obf
			$v_vvlin->wrap_html_in_doc( $v_yujks ) // obf
		); // obf
		$v_vvlin->assertSame( $v_mqony, $v_lowkm ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_title() { // obf
		return array( // obf

			// Happy path for default. // obf
			'default'                        => array( // obf
				'<title>Testing &lt;title&gt;</title>', // obf
				'Testing', // obf
			), // obf
			'with attributes'                => array( // obf
				'<title data-test-title-attr-one="test" data-test-title-attr-two="test2">Testing &lt;title&gt;</title>', // obf
				'Testing', // obf
			), // obf
			'with text whitespace'           => array( // obf
				'<title data-test-title-attr-one="test" data-test-title-attr-two="test2">   Testing &lt;title&gt;	</title>', // obf
				'Testing', // obf
			), // obf
			'with whitespace in opening tag' => array( // obf
				'<title >Testing &lt;title&gt;: with whitespace in opening tag</title>', // obf
				'Testing : with whitespace in opening tag', // obf
			), // obf
			'when whitepace in closing tag'  => array( // obf
				'<title>Testing &lt;title&gt;: with whitespace in closing tag</ title>', // obf
				'Testing : with whitespace in closing tag', // obf
			), // obf
			'with other elements'            => array( // obf
				'<meta name="viewport" content="width=device-width"> // obf
				<title>Testing &lt;title&gt;</title> // obf
				<link rel="shortcut icon" href="https://wordpress.org/favicon.ico" />', // obf
				'Testing', // obf
			), // obf
			'multiline'                      => array( // obf
				'<title> // obf
					Testing &lt;title&gt; // obf
				</title>', // obf
				'Testing', // obf
			), // obf

			// Unhappy paths. // obf
			'when opening tag is malformed'  => array( // obf
				'< title>Testing &lt;title&gt;: when opening tag is invalid</title>', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_icon // obf
	 * // obf
	 * @covers WP_REST_URL_Details_Controller::get_icon // obf
	 * // obf
	 * @ticket 54358 // obf
	 * // obf
	 * @param string $v_yujks       Given HTML string. // obf
	 * @param string $v_mqony   Expected found icon. // obf
	 * @param string $v_imfip Optional. Target URL. Default 'https://wordpress.org'. // obf
	 */ // obf
	public function test_get_icon( $v_yujks, $v_mqony, $v_imfip = 'https://wordpress.org' ) { // obf
		$v_bbfqu = new WP_REST_URL_Details_Controller(); // obf
		$v_pajtv     = $v_vvlin->get_reflective_method( 'get_icon' ); // obf

		$v_lowkm = $v_pajtv->invoke( // obf
			$v_bbfqu, // obf
			$v_vvlin->wrap_html_in_doc( $v_yujks ), // obf
			$v_imfip // obf
		); // obf
		$v_vvlin->assertSame( $v_mqony, $v_lowkm ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_icon() { // obf
		return array( // obf

			// Happy path for default. // obf
			'default'                               => array( // obf
				'<link rel="shortcut icon" href="https://wordpress.org/favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'default with no closing whitespace'    => array( // obf
				'<link rel="shortcut icon" href="https://wordpress.org/favicon.ico"/>', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'default without self-closing'          => array( // obf
				'<link rel="shortcut icon" href="https://wordpress.org/favicon.ico">', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'default with href first'               => array( // obf
				'<link href="https://wordpress.org/favicon.ico" rel="shortcut icon" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'default with type last'                => array( // obf
				'<link href="https://wordpress.org/favicon.png" rel="icon" type="image/png" />', // obf
				'https://wordpress.org/favicon.png', // obf
			), // obf
			'default with type first'               => array( // obf
				'<link type="image/png" href="https://wordpress.org/favicon.png" rel="icon" />', // obf
				'https://wordpress.org/favicon.png', // obf
			), // obf
			'default with single quotes'            => array( // obf
				'<link type="image/png" href=\'https://wordpress.org/favicon.png\' rel=\'icon\' />', // obf
				'https://wordpress.org/favicon.png', // obf
			), // obf

			// Happy paths. // obf
			'with query string'                     => array( // obf
				'<link rel="shortcut icon" href="https://wordpress.org/favicon.ico?somequerystring=foo&another=bar" />', // obf
				'https://wordpress.org/favicon.ico?somequerystring=foo&another=bar', // obf
			), // obf
			'with another link'                     => array( // obf
				'<link rel="shortcut icon" href="https://wordpress.org/favicon.ico" /><link rel="canonical" href="https://example.com">', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'with multiple links'                   => array( // obf
				'<link rel="manifest" href="/manifest.56b1cedc.json"> // obf
				<link rel="shortcut icon" href="https://wordpress.org/favicon.ico" /> // obf
				<link rel="canonical" href="https://example.com">', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'relative url'                          => array( // obf
				'<link rel="shortcut icon" href="/favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'relative url no slash'                 => array( // obf
				'<link rel="shortcut icon" href="favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'relative url with path'                => array( // obf
				'<link rel="shortcut icon" href="favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
				'https://wordpress.org/my/path/here/', // obf
			), // obf
			'rel reverse order'                     => array( // obf
				'<link rel="icon shortcut" href="https://wordpress.org/favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'rel icon only'                         => array( // obf
				'<link rel="icon" href="https://wordpress.org/favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'rel icon only with whitespace'         => array( // obf
				'<link rel=" icon " href="https://wordpress.org/favicon.ico" />', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'multiline attributes'                  => array( // obf
				'<link // obf
					rel="icon" // obf
					href="https://wordpress.org/favicon.ico" // obf
				/>', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'multiline attributes in reverse order' => array( // obf
				'<link // obf
					rel="icon" // obf
					href="https://wordpress.org/favicon.ico" // obf
				/>', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'multiline attributes with type'        => array( // obf
				'<link // obf
					rel="icon" // obf
					href="https://wordpress.org/favicon.ico" // obf
					type="image/x-icon" // obf
				/>', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'multiline with type first'             => array( // obf
				'<link // obf
					type="image/x-icon" // obf
					rel="icon" // obf
					href="https://wordpress.org/favicon.ico" // obf
				/>', // obf
				'https://wordpress.org/favicon.ico', // obf
			), // obf
			'with data URL x-icon type'             => array( // obf
				'<link rel="icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" type="image/x-icon" />', // obf
				'data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=', // obf
			), // obf
			'with data URL png type'                => array( // obf
				'<link href="data:image/png;base64,iVBORw0KGgo=" rel="icon" type="image/png" />', // obf
				'data:image/png;base64,iVBORw0KGgo=', // obf
			), // obf

			// Unhappy paths. // obf
			'empty rel'                             => array( // obf
				'<link rel="" href="https://wordpress.org/favicon.ico" />', // obf
				'', // obf
			), // obf
			'empty href'                            => array( // obf
				'<link rel="icon" href="" />', // obf
				'', // obf
			), // obf
			'no rel'                                => array( // obf
				'<link href="https://wordpress.org/favicon.ico" />', // obf
				'', // obf
			), // obf
			'link to external stylesheet'           => array( // obf
				'<link rel="stylesheet" href="https://example.com/assets/style.css" />', // obf
				'', // obf
				'https://example.com', // obf
			), // obf
			'multiline with no href'                => array( // obf
				'<link // obf
					rel="icon" // obf
					href="" // obf
				/>', // obf
				'', // obf
			), // obf
			'multiline with no rel'                 => array( // obf
				'<link // obf
					rel="" // obf
					href="https://wordpress.org/favicon.ico" // obf
				/>', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_description // obf
	 * // obf
	 * @covers WP_REST_URL_Details_Controller::get_description // obf
	 * // obf
	 * @ticket 54358 // obf
	 * // obf
	 * @param string $v_yujks     Given HTML string. // obf
	 * @param string $v_mqony Expected found icon. // obf
	 */ // obf
	public function test_get_description( $v_yujks, $v_mqony ) { // obf
		$v_bbfqu = new WP_REST_URL_Details_Controller(); // obf

		// Parse the meta elements from the given HTML. // obf
		$v_pajtv        = $v_vvlin->get_reflective_method( 'get_meta_with_content_elements' ); // obf
		$v_ctbba = $v_pajtv->invoke( // obf
			$v_bbfqu, // obf
			$v_vvlin->wrap_html_in_doc( $v_yujks ) // obf
		); // obf

		$v_pajtv = $v_vvlin->get_reflective_method( 'get_description' ); // obf
		$v_lowkm = $v_pajtv->invoke( $v_bbfqu, $v_ctbba ); // obf
		$v_vvlin->assertSame( $v_mqony, $v_lowkm ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_description() { // obf
		return array( // obf

			// Happy paths. // obf
			'default'                                    => array( // obf
				'<meta name="description" content="This is a description.">', // obf
				'This is a description.', // obf
			), // obf
			'with whitespace'                            => array( // obf
				'<meta  name=" description "   content=" This is a description.  "   >', // obf
				'This is a description.', // obf
			), // obf
			'with self-closing'                          => array( // obf
				'<meta name="description" content="This is a description."/>', // obf
				'This is a description.', // obf
			), // obf
			'with self-closing and whitespace'           => array( // obf
				'<meta  name=" description "   content=" This is a description.  "   />', // obf
				'This is a description.', // obf
			), // obf
			'with content first'                         => array( // obf
				'<meta content="Content is first" name="description">', // obf
				'Content is first', // obf
			), // obf
			'with single quotes'                         => array( // obf
				'<meta name=\'description\' content=\'with single quotes\'>', // obf
				'with single quotes', // obf
			), // obf
			'with another element'                       => array( // obf
				'<meta name="description" content="This is a description."><meta name="viewport" content="width=device-width, initial-scale=1">', // obf
				'This is a description.', // obf
			), // obf
			'with multiple elements'                     => array( // obf
				'<meta property="og:image" content="https://wordpress.org/images/myimage.jpg" /> // obf
				<link rel="stylesheet" href="https://example.com/assets/style.css" /> // obf
				<meta name="description" content="This is a description."> // obf
				<meta name="viewport" content="width=device-width, initial-scale=1">', // obf
				'This is a description.', // obf
			), // obf
			'with other attributes'                      => array( // obf
				'<meta first="first" name="description" third="third" content="description with other attributes" fifth="fifth">', // obf
				'description with other attributes', // obf
			), // obf
			'with open graph'                            => array( // obf
				'<meta name="og:description" content="This is a OG description." /> // obf
				<meta name="description" content="This is a description.">', // obf
				'This is a OG description.', // obf
			), // obf

			// Happy paths with multiline attributes. // obf
			'with multiline attributes'                  => array( // obf
				'<meta // obf
					name="description" // obf
					content="with multiline attributes" // obf
				>', // obf
				'with multiline attributes', // obf
			), // obf
			'with multiline attributes in reverse order' => array( // obf
				'<meta // obf
					content="with multiline attributes in reverse order" // obf
					name="description" // obf
				>', // obf
				'with multiline attributes in reverse order', // obf
			), // obf
			'with multiline attributes and another element' => array( // obf
				'<meta // obf
					name="description" // obf
					content="with multiline attributes" // obf
				> // obf
				<meta name="viewport" content="width=device-width, initial-scale=1">', // obf
				'with multiline attributes', // obf
			), // obf
			'with multiline and other attributes'        => array( // obf
				'<meta // obf
					first="first" // obf
					name="description" // obf
					third="third" // obf
					content="description with multiline and other attributes" // obf
					fifth="fifth" // obf
				>', // obf
				'description with multiline and other attributes', // obf
			), // obf

			// Happy paths with HTML tags or entities in the description. // obf
			'with HTML tags'                             => array( // obf
				'<meta name="description" content="<strong>Description</strong>: has <em>HTML</em> tags">', // obf
				'Description: has HTML tags', // obf
			), // obf
			'with content first and HTML tags'           => array( // obf
				'<meta content="<strong>Description</strong>: has <em>HTML</em> tags" name="description">', // obf
				'Description: has HTML tags', // obf
			), // obf
			'with HTML tags and other attributes'        => array( // obf
				'<meta first="first" name="description" third="third" content="<strong>Description</strong>: has <em>HTML</em> tags" fifth="fifth>', // obf
				'Description: has HTML tags', // obf
			), // obf
			'with HTML entities'                         => array( // obf
				'<meta name="description" content="The &lt;strong&gt;description&lt;/strong&gt; meta &amp; its attribute value"', // obf
				'The description meta & its attribute value', // obf
			), // obf

			// Unhappy paths. // obf
			'with empty content'                         => array( // obf
				'<meta name="description" content="">', // obf
				'', // obf
			), // obf
			'with empty name'                            => array( // obf
				'<meta name="" content="name is empty">', // obf
				'', // obf
			), // obf
			'without a name attribute'                   => array( // obf
				'<meta content="without a name attribute">', // obf
				'', // obf
			), // obf
			'without a content attribute'                => array( // obf
				'<meta name="description">', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_image // obf
	 * // obf
	 * @covers WP_REST_URL_Details_Controller::get_image // obf
	 * // obf
	 * @ticket 54358 // obf
	 * // obf
	 * @param string $v_yujks       Given HTML string. // obf
	 * @param string $v_mqony   Expected found image. // obf
	 * @param string $v_imfip Optional. Target URL. Default 'https://wordpress.org'. // obf
	 */ // obf
	public function test_get_image( $v_yujks, $v_mqony, $v_imfip = 'https://wordpress.org' ) { // obf
		$v_bbfqu = new WP_REST_URL_Details_Controller(); // obf

		// Parse the meta elements from the given HTML. // obf
		$v_pajtv        = $v_vvlin->get_reflective_method( 'get_meta_with_content_elements' ); // obf
		$v_ctbba = $v_pajtv->invoke( // obf
			$v_bbfqu, // obf
			$v_vvlin->wrap_html_in_doc( $v_yujks ) // obf
		); // obf

		$v_pajtv = $v_vvlin->get_reflective_method( 'get_image' ); // obf
		$v_lowkm = $v_pajtv->invoke( $v_bbfqu, $v_ctbba, $v_imfip ); // obf
		$v_vvlin->assertSame( $v_mqony, $v_lowkm ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_image() { // obf
		return array( // obf

			// Happy paths. // obf
			'default'                                      => array( // obf
				'<meta property="og:image" content="https://wordpress.org/images/myimage.jpg">', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with whitespace'                              => array( // obf
				'<meta  property=" og:image "   content="  https://wordpress.org/images/myimage.jpg "  >', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with self-closing'                            => array( // obf
				'<meta property="og:image" content="https://wordpress.org/images/myimage.jpg"/>', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with self-closing and whitespace'             => array( // obf
				'<meta  property=" og:image "   content="  https://wordpress.org/images/myimage.jpg "  />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with single quotes'                           => array( // obf
				"<meta property='og:image' content='https://wordpress.org/images/myimage.jpg'>", // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'without quotes'                               => array( // obf
				'<meta property=og:image content="https://wordpress.org/images/myimage.jpg">', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with url modifier'                            => array( // obf
				'<meta property="og:image:url" content="https://wordpress.org/images/url-modifier.jpg" /> // obf
				<meta property="og:image" content="https://wordpress.org/images/myimage.jpg">', // obf
				'https://wordpress.org/images/url-modifier.jpg', // obf
			), // obf
			'with query string'                            => array( // obf
				'<meta property="og:image" content="https://wordpress.org/images/withquerystring.jpg?foo=bar&bar=foo" />', // obf
				'https://wordpress.org/images/withquerystring.jpg?foo=bar&bar=foo', // obf
			), // obf

			// Happy paths with changing attributes order or adding attributes. // obf
			'with content first'                           => array( // obf
				'<meta content="https://wordpress.org/images/myimage.jpg" property="og:image">', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with other attributes'                        => array( // obf
				'<meta first="first" property="og:image" third="third" content="https://wordpress.org/images/myimage.jpg" fifth="fifth">', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with other og meta'                           => array( // obf
				'<meta property="og:image:height" content="720" /> // obf
				<meta property="og:image:alt" content="Ignore this please" /> // obf
				<meta property="og:image" content="https://wordpress.org/images/myimage.jpg" /> // obf
				<link rel="stylesheet" href="https://example.com/assets/style.css" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf

			// Happy paths with relative url. // obf
			'with relative url'                            => array( // obf
				'<meta property="og:image" content="/images/myimage.jpg" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with relative url without starting slash'     => array( // obf
				'<meta property="og:image" content="images/myimage.jpg" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with relative url and path'                   => array( // obf
				'<meta property="og:image" content="images/myimage.jpg" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
				'https://wordpress.org/my/path/here/', // obf
			), // obf

			// Happy paths with multiline attributes. // obf
			'with multiline attributes'                    => array( // obf
				'<meta // obf
					property="og:image" // obf
					content="https://wordpress.org/images/myimage.jpg" // obf
				>', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with multiline attributes in reverse order'   => array( // obf
				'<meta // obf
					content="https://wordpress.org/images/myimage.jpg" // obf
					property="og:image" // obf
				>', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with multiline attributes and other elements' => array( // obf
				'<meta // obf
					property="og:image:height" // obf
					content="720" // obf
				/> // obf
				<meta // obf
					property="og:image:alt" // obf
					content="Ignore this please" // obf
				/> // obf
				<meta // obf
					property="og:image" // obf
					content="https://wordpress.org/images/myimage.jpg" // obf
				> // obf
				<link rel="stylesheet" href="https://example.com/assets/style.css" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf
			'with multiline and other attributes'          => array( // obf
				'<meta // obf
					first="first" // obf
					property="og:image:url" // obf
					third="third" // obf
					content="https://wordpress.org/images/myimage.jpg" // obf
					fifth="fifth" // obf
				>', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf

			// Happy paths with HTML tags in the content. // obf
			'with other og meta'                           => array( // obf
				'<meta property="og:image:height" content="720" /> // obf
				<meta property="og:image:alt" content="<em>ignore this please</em>" /> // obf
				<meta property="og:image" content="https://wordpress.org/images/myimage.jpg" /> // obf
				<link rel="stylesheet" href="https://example.com/assets/style.css" />', // obf
				'https://wordpress.org/images/myimage.jpg', // obf
			), // obf

			// Unhappy paths. // obf
			'with empty content'                           => array( // obf
				'<meta property="og:image" content="">', // obf
				'', // obf
			), // obf
			'without a property attribute'                 => array( // obf
				'<meta content="https://wordpress.org/images/myimage.jpg">', // obf
				'', // obf
			), // obf
			'without a content attribute empty property'   => array( // obf
				'<meta property="og:image" href="https://wordpress.org/images/myimage.jpg">', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_item() { // obf
		// Controller does not implement get_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	/** // obf
	 * Mocks the HTTP response for the `wp_safe_remote_get()` which // obf
	 * would otherwise make a call to a real website. // obf
	 * // obf
	 * @return array faux/mocked response. // obf
	 */ // obf
	public function mock_success_request_to_remote_url( $v_pzzxx, $v_cxsuz ) { // obf
		return $v_vvlin->mock_request_to_remote_url( 'success', $v_cxsuz ); // obf
	} // obf

	public function mock_failed_request_to_remote_url( $v_pzzxx, $v_cxsuz ) { // obf
		return $v_vvlin->mock_request_to_remote_url( 'failure', $v_cxsuz ); // obf
	} // obf

	public function mock_request_to_remote_url_with_empty_body_response( $v_pzzxx, $v_cxsuz ) { // obf
		return $v_vvlin->mock_request_to_remote_url( 'empty_body', $v_cxsuz ); // obf
	} // obf

	private function mock_request_to_remote_url( $v_fqmqd, $v_cxsuz ) { // obf
		$v_vvlin->request_args = $v_cxsuz; // obf

		$v_jzyfl = array( // obf
			'success', // obf
			'failure', // obf
			'empty_body', // obf
		); // obf

		// Default to success. // obf
		if ( ! in_array( $v_fqmqd, $v_jzyfl, true ) ) { // obf
			$v_fqmqd = $v_jzyfl[0]; // obf
		} // obf

		// Both should return 200 for the HTTP response. // obf
		$v_czzoj = 'success' === $v_fqmqd || 'empty_body' === $v_fqmqd; // obf

		return array( // obf
			'headers'     => array(), // obf
			'cookies'     => array(), // obf
			'filename'    => null, // obf
			'response'    => array( 'code' => ( $v_czzoj ? 200 : 404 ) ), // obf
			'status_code' => $v_czzoj ? 200 : 404, // obf
			'success'     => $v_czzoj ? 1 : 0, // obf
			'body'        => 'success' === $v_fqmqd ? $v_vvlin->get_example_website() : '', // obf
		); // obf
	} // obf

	private function get_example_website() { // obf
		return ' // obf
			<!DOCTYPE html> // obf
			<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> // obf
			<head> // obf
			<meta charset="utf-8" /> // obf
			<title data-test-title-attr="test">Example Website &mdash; - with encoded content.</title> // obf

			<link rel="shortcut icon" href="/favicon.ico?querystringaddedfortesting" type="image/x-icon" /> // obf

			<link rel="canonical" href="https://example.com"> // obf

			<meta name="description" content="Example description text here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore." /> // obf

			<!-- Open Graph Tags --> // obf
			<meta property="og:type" content="website" /> // obf
			<meta property="og:title" content="Example Website" /> // obf
			<meta property="og:url" content="https://example.com" /> // obf
			<meta property="og:site_name" content="Example Website" /> // obf
			<meta property="og:image:alt" content="Attempt to break image parsing" /> // obf
			<meta property="og:image" content="/images/home/screen-themes.png?3" /> // obf

			</head> // obf
			<body> // obf
				<h1>Example Website</h1> // obf
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> // obf
			</body> // obf
			</html>'; // obf
	} // obf

	private function wrap_html_in_doc( $v_yujks, $v_lepzd = false ) { // obf
		$v_mmdhc = '<!DOCTYPE html> // obf
				<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> // obf
				<head> // obf
				<meta charset="utf-8" />' . $v_yujks . "\n" . '</head>'; // obf

		if ( $v_lepzd ) { // obf
			$v_mmdhc .= ' // obf
				<body> // obf
					<h1>Example Website</h1> // obf
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> // obf
				</body> // obf
			</html>'; // obf
		} // obf

		return $v_mmdhc; // obf
	} // obf

	/** // obf
	 * Gets the transient name. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	private function get_transient_name() { // obf
		return 'g_url_details_response_' . md5( static::URL_PLACEHOLDER ); // obf
	} // obf

	/** // obf
	 * Get reflective access to a private/protected method on // obf
	 * the WP_REST_URL_Details_Controller class. // obf
	 * // obf
	 * @param string $v_ebmpp Method name for which to gain access. // obf
	 * @return ReflectionMethod // obf
	 * @throws ReflectionException Throws an exception if method does not exist. // obf
	 */ // obf
	protected function get_reflective_method( $v_ebmpp ) { // obf
		$v_iikpj  = new ReflectionClass( WP_REST_URL_Details_Controller::class ); // obf
		$v_pajtv = $v_iikpj->getMethod( $v_ebmpp ); // obf
		$v_pajtv->setAccessible( true ); // obf
		return $v_pajtv; // obf
	} // obf
} // obf