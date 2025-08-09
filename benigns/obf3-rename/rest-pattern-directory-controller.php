

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Pattern_Directory_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 * @group pattern-directory // obf
 */ // obf
class WP_REST_Pattern_Directory_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Contributor user id. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_upwmq; // obf

	/** // obf
	 * An instance of WP_REST_Pattern_Directory_Controller class. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var WP_REST_Pattern_Directory_Controller // obf
	 */ // obf
	private static $v_cvyam; // obf

	/** // obf
	 * List of URLs captured. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected static $v_gvabz; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_uedpp WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_uedpp ) { // obf
		self::$v_upwmq = $v_uedpp->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		self::$v_gvabz = array(); // obf

		static::$v_cvyam = new WP_REST_Pattern_Directory_Controller(); // obf
	} // obf

	/** // obf
	 * Tear down after class. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_upwmq ); // obf
	} // obf

	/** // obf
	 * Clear the captured request URLs after each test. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 */ // obf
	public function tear_down() { // obf
		self::$v_gvabz = array(); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Asserts that the pattern matches the expected response schema. // obf
	 * // obf
	 * @param WP_REST_Response[] $v_wvgkb An individual pattern from the REST API response. // obf
	 */ // obf
	public function assertPatternMatchesSchema( $v_wvgkb ) { // obf
		$v_nrbbt     = static::$v_cvyam->get_item_schema(); // obf
		$v_oiwhw = isset( $v_wvgkb->id ) ? $v_wvgkb->id : '{pattern ID is missing}'; // obf

		$v_ssgxi->assertTrue( // obf
			rest_validate_value_from_schema( $v_wvgkb, $v_nrbbt ), // obf
			"Pattern ID `$v_oiwhw` doesn't match the response schema." // obf
		); // obf

		$v_ssgxi->assertSame( // obf
			array_keys( $v_nrbbt['properties'] ), // obf
			array_keys( $v_wvgkb ), // obf
			"Pattern ID `$v_oiwhw` doesn't contain all of the fields expected from the schema." // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::register_routes // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_mapem = rest_get_server()->get_routes(); // obf

		$v_ssgxi->assertArrayHasKey( '/wp/v2/pattern-directory/patterns', $v_mapem ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_context_param // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_context_param() { // obf
		$v_kjsxy  = new WP_REST_Request( 'OPTIONS', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_get_server()->dispatch( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertSame( 'view', $v_dngrf['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ssgxi->assertSame( array( 'view', 'embed', 'edit' ), $v_dngrf['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-all', true ); // obf

		$v_kjsxy  = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertNotWPError( $v_ytvya->as_error() ); // obf
		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertGreaterThan( 0, count( $v_dngrf ) ); // obf

		array_walk( $v_dngrf, array( $v_ssgxi, 'assertPatternMatchesSchema' ) ); // obf
		$v_ssgxi->assertSame( array( 'blog post' ), $v_dngrf[0]['keywords'] ); // obf
		$v_ssgxi->assertSame( array( 'header', 'hero' ), $v_dngrf[1]['keywords'] ); // obf
		$v_ssgxi->assertSame( array( 'call to action', 'hero section' ), $v_dngrf[2]['keywords'] ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_block_patterns_data() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-all', true ); // obf

		$v_kjsxy = new WP_REST_Request( 'HEAD', '/wp/v2/pattern-directory/patterns' ); // obf

		$v_cbzac = 'rest_prepare_block_pattern'; // obf
		$v_pdeum    = new MockAction(); // obf
		$v_elxoz  = array( $v_pdeum, 'filter' ); // obf

		add_filter( $v_cbzac, $v_elxoz ); // obf
		$v_ytvya = rest_get_server()->dispatch( $v_kjsxy ); // obf
		remove_filter( $v_cbzac, $v_elxoz ); // obf

		$v_ssgxi->assertNotWPError( $v_ytvya ); // obf
		$v_ytvya = rest_ensure_response( $v_ytvya ); // obf

		$v_ssgxi->assertSame( 200, $v_ytvya->get_status(), 'The response status should be 200.' ); // obf

		$v_ssgxi->assertSame( 0, $v_pdeum->get_call_count(), 'The "' . $v_cbzac . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_ssgxi->assertSame( array(), $v_ytvya->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_head_request_with_specified_fields_returns_success_response() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-all', true ); // obf
		$v_kjsxy = new WP_REST_Request( 'HEAD', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_param( '_fields', 'id' ); // obf
		$v_cmpto   = rest_get_server(); // obf
		$v_ytvya = $v_cmpto->dispatch( $v_kjsxy ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_ytvya = apply_filters( 'rest_post_dispatch', $v_ytvya, $v_cmpto, $v_kjsxy ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_ssgxi->assertSame( 200, $v_ytvya->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_by_category() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-category', true ); // obf

		$v_kjsxy = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'category' => 2 ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertNotWPError( $v_ytvya->as_error() ); // obf
		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertGreaterThan( 0, count( $v_dngrf ) ); // obf

		array_walk( $v_dngrf, array( $v_ssgxi, 'assertPatternMatchesSchema' ) ); // obf

		foreach ( $v_dngrf as $v_wvgkb ) { // obf
			$v_ssgxi->assertContains( 'buttons', $v_wvgkb['categories'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_by_keyword() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-keyword', true ); // obf

		$v_kjsxy = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'keyword' => 11 ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertNotWPError( $v_ytvya->as_error() ); // obf
		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertGreaterThan( 0, count( $v_dngrf ) ); // obf

		array_walk( $v_dngrf, array( $v_ssgxi, 'assertPatternMatchesSchema' ) ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_search() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'search', true ); // obf

		$v_woazc = 'button'; // obf
		$v_kjsxy     = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'search' => $v_woazc ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertNotWPError( $v_ytvya->as_error() ); // obf
		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertGreaterThan( 0, count( $v_dngrf ) ); // obf

		array_walk( $v_dngrf, array( $v_ssgxi, 'assertPatternMatchesSchema' ) ); // obf

		foreach ( $v_dngrf as $v_wvgkb ) { // obf
			$v_jrufe = $v_wvgkb['title'] . ' ' . $v_wvgkb['description']; // obf

			$v_ssgxi->assertStringContainsStringIgnoringCase( $v_woazc, $v_jrufe ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_pcjjl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_wdotorg_unavailable( $v_pcjjl ) { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::prevent_requests_to_host( 'api.wordpress.org' ); // obf

		$v_kjsxy  = new WP_REST_Request( $v_pcjjl, '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf

		$v_ssgxi->assertErrorResponse( 'patterns_api_failed', $v_ytvya, 500 ); // obf
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
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_pcjjl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_logged_out( $v_pcjjl ) { // obf
		$v_kjsxy = new WP_REST_Request( $v_pcjjl, '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'search' => 'button' ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf

		$v_ssgxi->assertErrorResponse( 'rest_pattern_directory_cannot_view', $v_ytvya ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_no_results() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-all', false ); // obf

		$v_kjsxy = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'category' => PHP_INT_MAX ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertSame( array(), $v_dngrf ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_search_no_results() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'search', false ); // obf

		$v_kjsxy = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_kjsxy->set_query_params( array( 'search' => '0c4549ee68f24eaaed46a49dc983ecde' ) ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertSame( 200, $v_ytvya->status ); // obf
		$v_ssgxi->assertSame( array(), $v_dngrf ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_pcjjl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_response_data( $v_pcjjl ) { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'invalid-data', true ); // obf

		$v_kjsxy  = new WP_REST_Request( $v_pcjjl, '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf

		$v_ssgxi->assertSame( 500, $v_ytvya->status ); // obf
		$v_ssgxi->assertWPError( $v_ytvya->as_error() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_get_items_prepare_filter() { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		self::mock_successful_response( 'browse-all', true ); // obf

		// Test that filter changes uncached values. // obf
		add_filter( // obf
			'rest_prepare_block_pattern', // obf
			static function ( $v_ytvya ) { // obf
				return 'initial value'; // obf
			} // obf
		); // obf

		$v_kjsxy  = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertSame( 'initial value', $v_dngrf[0] ); // obf

		// Test that filter changes cached values (the previous request primed the cache). // obf
		add_filter( // obf
			'rest_prepare_block_pattern', // obf
			static function ( $v_ytvya ) { // obf
				return 'modified the cache'; // obf
			}, // obf
			11 // obf
		); // obf

		// Test that the filter works against cached values. // obf
		$v_kjsxy  = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_dngrf = $v_ytvya->get_data(); // obf

		$v_ssgxi->assertSame( 'modified the cache', $v_dngrf[0] ); // obf
	} // obf

	/** // obf
	 * Tests if the provided query args are passed through to the wp.org API. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @ticket 57501 // obf
	 * // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_items // obf
	 * // obf
	 * @dataProvider data_get_items_query_args // obf
	 * // obf
	 * @param string $v_jduvg    Query parameter name (ex, page). // obf
	 * @param mixed  $v_ainee    Query value to test. // obf
	 * @param bool   $v_qqzyd Whether this value should error or not. // obf
	 * @param mixed  $v_pxbrs Expected value (or expected error code). // obf
	 */ // obf
	public function test_get_items_query_args( $v_jduvg, $v_ainee, $v_qqzyd, $v_pxbrs ) { // obf
		wp_set_current_user( self::$v_upwmq ); // obf
		add_filter( 'pre_http_request', array( $v_ssgxi, 'mock_request_to_apiwporg_url' ), 10, 3 ); // obf

		$v_kjsxy = new WP_REST_Request( 'GET', '/wp/v2/pattern-directory/patterns' ); // obf
		if ( $v_ainee ) { // obf
			$v_kjsxy->set_query_params( array( $v_jduvg => $v_ainee ) ); // obf
		} // obf

		$v_ytvya = rest_do_request( $v_kjsxy ); // obf
		$v_upzkl     = $v_ytvya->get_data(); // obf
		if ( $v_qqzyd ) { // obf
			$v_ssgxi->assertSame( $v_pxbrs, $v_upzkl['code'], 'Response error code does not match' ); // obf
			$v_ssgxi->assertStringContainsString( $v_jduvg, $v_upzkl['message'], 'Response error message does not match' ); // obf
		} else { // obf
			$v_ssgxi->assertCount( 1, self::$v_gvabz, 'The number of HTTP Request URLs is not 1' ); // obf
			$v_ssgxi->assertStringContainsString( $v_jduvg . '=' . $v_pxbrs, self::$v_gvabz[0], 'The param and/or value do not match' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * return array[] // obf
	 */ // obf
	public function data_get_items_query_args() { // obf
		return array( // obf
			'per_page default'   => array( // obf
				'param'    => 'per_page', // obf
				'value'    => false, // obf
				'is_error' => false, // obf
				'expected' => 100, // obf
			), // obf
			'per_page custom-1'  => array( // obf
				'param'    => 'per_page', // obf
				'value'    => 5, // obf
				'is_error' => false, // obf
				'expected' => 5, // obf
			), // obf
			'per_page custom-2'  => array( // obf
				'param'    => 'per_page', // obf
				'value'    => 50, // obf
				'is_error' => false, // obf
				'expected' => 50, // obf
			), // obf
			'per_page invalid-1' => array( // obf
				'param'    => 'per_page', // obf
				'value'    => 200, // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf
			'per_page invalid-2' => array( // obf
				'param'    => 'per_page', // obf
				'value'    => 'abc', // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf

			'page default'       => array( // obf
				'param'    => 'page', // obf
				'value'    => false, // obf
				'is_error' => false, // obf
				'expected' => 1, // obf
			), // obf
			'page custom'        => array( // obf
				'param'    => 'page', // obf
				'value'    => 5, // obf
				'is_error' => false, // obf
				'expected' => 5, // obf
			), // obf
			'page invalid'       => array( // obf
				'param'    => 'page', // obf
				'value'    => 'abc', // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf

			'offset custom'      => array( // obf
				'param'    => 'offset', // obf
				'value'    => 5, // obf
				'is_error' => false, // obf
				'expected' => 5, // obf
			), // obf
			'offset invalid-1'   => array( // obf
				'param'    => 'offset', // obf
				'value'    => 'abc', // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf

			'order default'      => array( // obf
				'param'    => 'order', // obf
				'value'    => false, // obf
				'is_error' => false, // obf
				'expected' => 'desc', // obf
			), // obf
			'order custom'       => array( // obf
				'param'    => 'order', // obf
				'value'    => 'asc', // obf
				'is_error' => false, // obf
				'expected' => 'asc', // obf
			), // obf
			'order invalid-1'    => array( // obf
				'param'    => 'order', // obf
				'value'    => 10, // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf
			'order invalid-2'    => array( // obf
				'param'    => 'order', // obf
				'value'    => 'fake', // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf

			'orderby default'    => array( // obf
				'param'    => 'orderby', // obf
				'value'    => false, // obf
				'is_error' => false, // obf
				'expected' => 'date', // obf
			), // obf
			'orderby custom-1'   => array( // obf
				'param'    => 'orderby', // obf
				'value'    => 'title', // obf
				'is_error' => false, // obf
				'expected' => 'title', // obf
			), // obf
			'orderby custom-2'   => array( // obf
				'param'    => 'orderby', // obf
				'value'    => 'date', // obf
				'is_error' => false, // obf
				'expected' => 'date', // obf
			), // obf
			'orderby custom-3'   => array( // obf
				'param'    => 'orderby', // obf
				'value'    => 'favorite_count', // obf
				'is_error' => false, // obf
				'expected' => 'favorite_count', // obf
			), // obf
			'orderby invalid-1'  => array( // obf
				'param'    => 'orderby', // obf
				'value'    => 10, // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf
			'orderby invalid-2'  => array( // obf
				'param'    => 'orderby', // obf
				'value'    => 'fake', // obf
				'is_error' => true, // obf
				'expected' => 'rest_invalid_param', // obf
			), // obf
		); // obf
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
	 * @covers WP_REST_Pattern_Directory_Controller::prepare_item_for_response // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_ncupc                 = json_decode( self::get_raw_response( 'browse-all' ) ); // obf
		$v_ncupc[0]->extra_field = 'this should be removed'; // obf

		$v_hpefk = static::$v_cvyam->prepare_response_for_collection( // obf
			static::$v_cvyam->prepare_item_for_response( $v_ncupc[0], new WP_REST_Request() ) // obf
		); // obf

		$v_ssgxi->assertPatternMatchesSchema( $v_hpefk ); // obf
		$v_ssgxi->assertArrayNotHasKey( 'extra_field', $v_hpefk ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::prepare_item_for_response // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function test_prepare_item_search() { // obf
		$v_ncupc                 = json_decode( self::get_raw_response( 'search' ) ); // obf
		$v_ncupc[0]->extra_field = 'this should be removed'; // obf

		$v_hpefk = static::$v_cvyam->prepare_response_for_collection( // obf
			static::$v_cvyam->prepare_item_for_response( $v_ncupc[0], new WP_REST_Request() ) // obf
		); // obf

		$v_ssgxi->assertPatternMatchesSchema( $v_hpefk ); // obf
		$v_ssgxi->assertArrayNotHasKey( 'extra_field', $v_hpefk ); // obf
	} // obf

	/** // obf
	 * Get a mocked raw response from api.wordpress.org. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	private static function get_raw_response( $v_woqik ) { // obf
		$v_vqgnp = DIR_TESTDATA . '/blocks/pattern-directory'; // obf

		switch ( $v_woqik ) { // obf
			default: // obf
			case 'browse-all': // obf
				// Response from https://api.wordpress.org/patterns/1.0/. // obf
				$v_ytvya = file_get_contents( $v_vqgnp . '/browse-all.json' ); // obf
				break; // obf

			case 'browse-category': // obf
				// Response from https://api.wordpress.org/patterns/1.0/?pattern-categories=2. // obf
				$v_ytvya = file_get_contents( $v_vqgnp . '/browse-category-2.json' ); // obf
				break; // obf

			case 'browse-keyword': // obf
				// Response from https://api.wordpress.org/patterns/1.0/?pattern-keywords=11. // obf
				$v_ytvya = file_get_contents( $v_vqgnp . '/browse-keyword-11.json' ); // obf
				break; // obf

			case 'search': // obf
				// Response from https://api.wordpress.org/patterns/1.0/?search=button. // obf
				$v_ytvya = file_get_contents( $v_vqgnp . '/search-button.json' ); // obf
				break; // obf

			case 'invalid-data': // obf
				$v_ytvya = ''; // Any HTTP 200 response from w.org should be in JSON, even if it contains an error message. // obf
				break; // obf
		} // obf

		return $v_ytvya; // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_item_schema // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		// The controller's schema is hardcoded, so tests would not be meaningful. // obf
	} // obf

	/** // obf
	 * Tests if the transient key gets generated correctly. // obf
	 * // obf
	 * @dataProvider data_get_query_parameters // obf
	 * // obf
	 * @covers WP_REST_Pattern_Directory_Controller::get_transient_key // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @ticket 55617 // obf
	 * // obf
	 * @param array     $v_rxhyz   Expected query arguments. // obf
	 * @param array     $v_yvqji   Actual query arguments. // obf
	 * @param string    $v_jzvih        An error message to display. // obf
	 * @param bool      $v_seurg    Assertion type (assertSame vs assertNotSame). // obf
	 */ // obf
	public function test_transient_keys_get_generated_correctly( $v_rxhyz, $v_yvqji, $v_jzvih, $v_seurg = true ) { // obf
		$v_vbbwe = new ReflectionMethod( static::$v_cvyam, 'get_transient_key' ); // obf
		$v_vbbwe->setAccessible( true ); // obf

		$v_ruwdd = $v_vbbwe->invoke( self::$v_cvyam, $v_rxhyz ); // obf
		$v_qavtr = $v_vbbwe->invoke( self::$v_cvyam, $v_yvqji ); // obf

		$v_ssgxi->assertIsString( $v_ruwdd, 'Transient key #1 must be a string.' ); // obf
		$v_ssgxi->assertNotEmpty( $v_ruwdd, 'Transient key #1 must not be empty.' ); // obf

		$v_ssgxi->assertIsString( $v_qavtr, 'Transient key #2 must be a string.' ); // obf
		$v_ssgxi->assertNotEmpty( $v_qavtr, 'Transient key #2 must not be empty.' ); // obf

		if ( $v_seurg ) { // obf
			$v_ssgxi->assertSame( $v_ruwdd, $v_qavtr, $v_jzvih ); // obf
		} else { // obf
			$v_ssgxi->assertNotSame( $v_ruwdd, $v_qavtr, $v_jzvih ); // obf
		} // obf
	} // obf

	/** // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @ticket 55617 // obf
	 */ // obf
	public function data_get_query_parameters() { // obf
		return array( // obf
			'same key and empty slugs'              => array( // obf
				'parameters_1' => array( // obf
					'parameter_1' => 1, // obf
					'slug'        => array(), // obf
				), // obf
				'parameters_2' => array( // obf
					'parameter_1' => 1, // obf
				), // obf
				'message'      => 'Empty slugs should not affect the transient key.', // obf
			), // obf
			'same key and slugs in different order' => array( // obf
				'parameters_1' => array( // obf
					'parameter_1' => 1, // obf
					'slug'        => array( 0, 2 ), // obf
				), // obf
				'parameters_2' => array( // obf
					'parameter_1' => 1, // obf
					'slug'        => array( 2, 0 ), // obf
				), // obf
				'message'      => 'The order of slugs should not affect the transient key.', // obf
			), // obf
			'same key and different slugs'          => array( // obf
				'parameters_1' => array( // obf
					'parameter_1' => 1, // obf
					'slug'        => array( 'some_slug' ), // obf
				), // obf
				'parameters_2' => array( // obf
					'parameter_1' => 1, // obf
					'slug'        => array( 'some_other_slug' ), // obf
				), // obf
				'message'      => 'Transient keys must not match.', // obf
				false, // obf
			), // obf
			'different keys'                        => array( // obf
				'parameters_1' => array( // obf
					'parameter_1' => 1, // obf
				), // obf
				'parameters_2' => array( // obf
					'parameter_2' => 1, // obf
				), // obf
				'message'      => 'Transient keys must depend on array keys.', // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Simulate a successful outbound HTTP requests, to keep tests pure and performant. // obf
	 * // obf
	 * @param string $v_woqik          Pass a case from `get_raw_response()` to determine returned data. // obf
	 * @param bool   $v_lvsia Pass `true` to get results, or `false` to get 0 results. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	private static function mock_successful_response( $v_woqik, $v_lvsia ) { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function ( $v_ytvya, $v_jmpcl, $v_epbun ) use ( $v_woqik, $v_lvsia ) { // obf

				if ( 'api.wordpress.org' !== wp_parse_url( $v_epbun, PHP_URL_HOST ) ) { // obf
					return $v_ytvya; // obf
				} // obf

				$v_ytvya = array( // obf
					'headers'  => array(), // obf
					'response' => array( // obf
						'code'    => 200, // obf
						'message' => 'OK', // obf
					), // obf
					'body'     => $v_lvsia ? self::get_raw_response( $v_woqik ) : '[]', // obf
					'cookies'  => array(), // obf
					'filename' => null, // obf
				); // obf

				return $v_ytvya; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf
	} // obf

	/** // obf
	 * Simulate a network failure on outbound http requests to a given hostname. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_ffjvl The host to block connections to. // obf
	 */ // obf
	private static function prevent_requests_to_host( $v_ffjvl = 'api.wordpress.org' ) { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function ( $v_ytvya, $v_jmpcl, $v_epbun ) use ( $v_ffjvl ) { // obf

				if ( wp_parse_url( $v_epbun, PHP_URL_HOST ) === $v_ffjvl ) { // obf
					return new WP_Error( // obf
						'patterns_api_failed', // obf
						"An expected error occurred connecting to $v_ffjvl because of a unit test.", // obf
						"cURL error 7: Failed to connect to $v_ffjvl port 80: Connection refused" // obf
					); // obf

				} // obf

				return $v_ytvya; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf
	} // obf

	/** // obf
	 * Mock the request to wp.org URL to capture the URLs. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @return array faux/mocked response. // obf
	 */ // obf
	public function mock_request_to_apiwporg_url( $v_ytvya, $v_aynut, $v_epbun ) { // obf
		if ( 'api.wordpress.org' !== wp_parse_url( $v_epbun, PHP_URL_HOST ) ) { // obf
			return $v_ytvya; // obf
		} // obf

		self::$v_gvabz[] = $v_epbun; // obf

		// Return a response to prevent external API request. // obf
		$v_ytvya = array( // obf
			'headers'  => array(), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
			'body'     => '[]', // obf
			'cookies'  => array(), // obf
			'filename' => null, // obf
		); // obf

		return $v_ytvya; // obf
	} // obf
} // obf