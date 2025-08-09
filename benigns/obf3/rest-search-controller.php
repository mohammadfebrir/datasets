

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Search_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Search_Controller extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Posts with title 'my-footitle'. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_pyapl = array(); // obf

	/** // obf
	 * Pages with title 'my-footitle'. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_ioprw = array(); // obf

	/** // obf
	 * Posts with content 'my-foocontent'. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_smdvc = array(); // obf

	/** // obf
	 * Categories. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_sppdu; // obf

	/** // obf
	 * Tags. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_invso; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_rshmq Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rshmq ) { // obf
		add_theme_support( 'post-formats', array( 'aside' ) ); // obf

		self::$v_pyapl = $v_rshmq->post->create_many( // obf
			4, // obf
			array( // obf
				'post_title' => 'my-footitle', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf

		self::$v_ioprw = $v_rshmq->post->create_many( // obf
			4, // obf
			array( // obf
				'post_title' => 'my-footitle', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf

		self::$v_smdvc = $v_rshmq->post->create_many( // obf
			6, // obf
			array( // obf
				'post_content' => 'my-foocontent', // obf
			) // obf
		); // obf

		set_post_format( self::$v_pyapl[0], 'aside' ); // obf

		self::$v_sppdu = $v_rshmq->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
				'name'     => 'Test Category', // obf
			) // obf
		); // obf

		self::$v_invso = $v_rshmq->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'Test Tag', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Delete our fake data after our tests run. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		remove_theme_support( 'post-formats' ); // obf

		$v_tijhg = array_merge( // obf
			self::$v_pyapl, // obf
			self::$v_ioprw, // obf
			self::$v_smdvc // obf
		); // obf

		foreach ( $v_tijhg as $v_egapx ) { // obf
			wp_delete_post( $v_egapx, true ); // obf
		} // obf

		$v_exdhe = array( // obf
			self::$v_sppdu, // obf
			self::$v_invso, // obf
		); // obf

		foreach ( $v_exdhe as $v_qloqb ) { // obf
			wp_delete_term( $v_qloqb, true ); // obf
		} // obf
	} // obf

	/** // obf
	 * Check that our routes get set up properly. // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_ssspi = rest_get_server()->get_routes(); // obf

		$v_tluqz->assertArrayHasKey( '/wp/v2/search', $v_ssspi ); // obf
		$v_tluqz->assertCount( 1, $v_ssspi['/wp/v2/search'] ); // obf
	} // obf

	/** // obf
	 * Check the context parameter. // obf
	 */ // obf
	public function test_context_param() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( array(), 'OPTIONS' ); // obf
		$v_tzxah     = $v_askbn->get_data(); // obf

		$v_tluqz->assertSame( 'view', $v_tzxah['endpoints'][0]['args']['context']['default'] ); // obf
		$v_tluqz->assertSame( array( 'view', 'embed' ), $v_tzxah['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * Search through all content. // obf
	 */ // obf
	public function test_get_items() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_ioprw, // obf
				self::$v_smdvc // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test pagination headers. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_headers( $v_oiulk ) { // obf
		$v_siyfx = count( self::$v_pyapl ) + count( self::$v_ioprw ) + count( self::$v_smdvc ); // obf
		$v_vsnku    = 3; // obf
		$v_txegh = (int) ceil( $v_siyfx / $v_vsnku ); // obf

		// Start of the index. // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
			), // obf
			$v_oiulk // obf
		); // obf
		$v_ndhvj  = $v_askbn->get_headers(); // obf
		$v_tluqz->assertSame( $v_siyfx, $v_ndhvj['X-WP-Total'] ); // obf
		$v_tluqz->assertSame( $v_txegh, $v_ndhvj['X-WP-TotalPages'] ); // obf

		$v_tunza = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => 2, // obf
			), // obf
			rest_url( '/wp/v2/search' ) // obf
		); // obf
		$v_tluqz->assertStringNotContainsString( 'rel="prev"', $v_ndhvj['Link'] ); // obf
		$v_tluqz->assertStringContainsString( '<' . $v_tunza . '>; rel="next"', $v_ndhvj['Link'] ); // obf

		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => 3, // obf
			), // obf
			$v_oiulk // obf
		); // obf
		$v_ndhvj  = $v_askbn->get_headers(); // obf
		$v_tluqz->assertSame( $v_siyfx, $v_ndhvj['X-WP-Total'] ); // obf
		$v_tluqz->assertSame( $v_txegh, $v_ndhvj['X-WP-TotalPages'] ); // obf
		$v_rljay = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => 2, // obf
			), // obf
			rest_url( '/wp/v2/search' ) // obf
		); // obf
		$v_tluqz->assertStringContainsString( '<' . $v_rljay . '>; rel="prev"', $v_ndhvj['Link'] ); // obf
		$v_tunza = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => 4, // obf
			), // obf
			rest_url( '/wp/v2/search' ) // obf
		); // obf
		$v_tluqz->assertStringContainsString( '<' . $v_tunza . '>; rel="next"', $v_ndhvj['Link'] ); // obf

		// Last page. // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => $v_txegh, // obf
			), // obf
			$v_oiulk // obf
		); // obf
		$v_ndhvj  = $v_askbn->get_headers(); // obf
		$v_tluqz->assertSame( $v_siyfx, $v_ndhvj['X-WP-Total'] ); // obf
		$v_tluqz->assertSame( $v_txegh, $v_ndhvj['X-WP-TotalPages'] ); // obf
		$v_rljay = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vsnku, // obf
				'page'     => $v_txegh - 1, // obf
			), // obf
			rest_url( '/wp/v2/search' ) // obf
		); // obf
		$v_tluqz->assertStringContainsString( '<' . $v_rljay . '>; rel="prev"', $v_ndhvj['Link'] ); // obf
		$v_tluqz->assertStringNotContainsString( 'rel="next"', $v_ndhvj['Link'] ); // obf
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
	 * Search through all content with a low limit. // obf
	 */ // obf
	public function test_get_items_with_limit() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 3, // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertCount( 3, $v_askbn->get_data() ); // obf
	} // obf

	/** // obf
	 * Search through posts of any post type. // obf
	 */ // obf
	public function test_get_items_search_type_post() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_ioprw, // obf
				self::$v_smdvc // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through posts of post type 'post'. // obf
	 */ // obf
	public function test_get_items_search_type_post_subtype_post() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post', // obf
				'subtype'  => 'post', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_smdvc // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through posts of post type 'page'. // obf
	 */ // obf
	public function test_get_items_search_type_post_subtype_page() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post', // obf
				'subtype'  => 'page', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			self::$v_ioprw, // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through an invalid type // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_get_items_search_type_invalid( $v_oiulk ) { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'invalid', // obf
			), // obf
			$v_oiulk // obf
		); // obf

		$v_tluqz->assertErrorResponse( 'rest_invalid_param', $v_askbn, 400 ); // obf
	} // obf

	/** // obf
	 * Search through posts of an invalid post type. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_get_items_search_type_post_subtype_invalid() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post', // obf
				'subtype'  => 'invalid', // obf
			) // obf
		); // obf

		$v_tluqz->assertErrorResponse( 'rest_invalid_param', $v_askbn, 400 ); // obf
	} // obf

	/** // obf
	 * Search through posts and pages. // obf
	 */ // obf
	public function test_get_items_search_posts_and_pages() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post', // obf
				'subtype'  => 'post,page', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_ioprw, // obf
				self::$v_smdvc // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through all that matches a 'footitle' search. // obf
	 */ // obf
	public function test_get_items_search_for_footitle() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'footitle', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_ioprw // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through all that matches a 'foocontent' search. // obf
	 */ // obf
	public function test_get_items_search_for_foocontent() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'foocontent', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			self::$v_smdvc, // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55674 // obf
	 */ // obf
	public function test_get_items_search_prime_ids() { // obf
		$v_ufukm = new MockAction(); // obf
		add_filter( 'query', array( $v_ufukm, 'filter' ), 10, 2 ); // obf

		$v_uzvao = array( // obf
			'per_page' => 100, // obf
			'search'   => 'foocontent', // obf
		); // obf
		$v_askbn   = $v_tluqz->do_request_with_params( $v_uzvao ); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status(), 'Request Status Response is not 200.' ); // obf

		$v_chsul = wp_list_pluck( $v_askbn->get_data(), 'id' ); // obf
		$v_tluqz->assertSameSets( self::$v_smdvc, $v_chsul, 'Query result posts ids do not match with expected ones.' ); // obf

		$v_hbfvx               = $v_ufukm->get_args(); // obf
		$v_ueoof = false; // obf
		foreach ( $v_hbfvx as $v_lqvte ) { // obf
			// Primed query will use WHERE ID IN clause. // obf
			if ( str_contains( $v_lqvte[0], 'WHERE ID IN (' . implode( ',', $v_chsul ) ) ) { // obf
				$v_ueoof = true; // obf
				break; // obf
			} // obf
		} // obf

		$v_tluqz->assertTrue( $v_ueoof, 'Prime query was not executed.' ); // obf
	} // obf

	/** // obf
	 * Test retrieving a single item isn't possible. // obf
	 */ // obf
	public function test_get_item() { // obf
		/** The search controller does not allow getting individual item content */ // obf
		$v_rypal  = new WP_REST_Request( 'GET', '/wp/v2/search' . self::$v_pyapl[0] ); // obf
		$v_askbn = rest_get_server()->dispatch( $v_rypal ); // obf
		$v_tluqz->assertSame( 404, $v_askbn->get_status() ); // obf
	} // obf

	/** // obf
	 * Test creating an item isn't possible. // obf
	 */ // obf
	public function test_create_item() { // obf
		/** The search controller does not allow creating content */ // obf
		$v_rypal  = new WP_REST_Request( 'POST', '/wp/v2/search' ); // obf
		$v_askbn = rest_get_server()->dispatch( $v_rypal ); // obf
		$v_tluqz->assertSame( 404, $v_askbn->get_status() ); // obf
	} // obf

	/** // obf
	 * Test updating an item isn't possible. // obf
	 */ // obf
	public function test_update_item() { // obf
		/** The search controller does not allow upading content */ // obf
		$v_rypal  = new WP_REST_Request( 'POST', '/wp/v2/search' . self::$v_pyapl[0] ); // obf
		$v_askbn = rest_get_server()->dispatch( $v_rypal ); // obf
		$v_tluqz->assertSame( 404, $v_askbn->get_status() ); // obf
	} // obf

	/** // obf
	 * Test deleting an item isn't possible. // obf
	 */ // obf
	public function test_delete_item() { // obf
		/** The search controller does not allow deleting content */ // obf
		$v_rypal  = new WP_REST_Request( 'DELETE', '/wp/v2/search' . self::$v_pyapl[0] ); // obf
		$v_askbn = rest_get_server()->dispatch( $v_rypal ); // obf
		$v_tluqz->assertSame( 404, $v_askbn->get_status() ); // obf
	} // obf

	/** // obf
	 * Test preparing the data contains the correct fields. // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_askbn = $v_tluqz->do_request_with_params(); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf

		$v_tzxah = $v_askbn->get_data(); // obf
		$v_tluqz->assertSame( // obf
			array( // obf
				'id', // obf
				'title', // obf
				'url', // obf
				'type', // obf
				'subtype', // obf
				'_links', // obf
			), // obf
			array_keys( $v_tzxah[0] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test preparing the data with limited fields contains the correct fields. // obf
	 */ // obf
	public function test_prepare_item_limit_fields() { // obf
		if ( ! method_exists( 'WP_REST_Controller', 'get_fields_for_response' ) ) { // obf
			$v_tluqz->markTestSkipped( 'Limiting fields requires the WP_REST_Controller::get_fields_for_response() method.' ); // obf
		} // obf

		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'_fields' => 'id,title', // obf
			) // obf
		); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf

		$v_tzxah = $v_askbn->get_data(); // obf
		$v_tluqz->assertSame( // obf
			array( // obf
				'id', // obf
				'title', // obf
			), // obf
			array_keys( $v_tzxah[0] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests the item schema is correct. // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_rypal    = new WP_REST_Request( 'OPTIONS', '/wp/v2/search' ); // obf
		$v_askbn   = rest_get_server()->dispatch( $v_rypal ); // obf
		$v_tzxah       = $v_askbn->get_data(); // obf
		$v_bbxvj = $v_tzxah['schema']['properties']; // obf

		$v_tluqz->assertArrayHasKey( 'id', $v_bbxvj ); // obf
		$v_tluqz->assertArrayHasKey( 'title', $v_bbxvj ); // obf
		$v_tluqz->assertArrayHasKey( 'url', $v_bbxvj ); // obf
		$v_tluqz->assertArrayHasKey( 'type', $v_bbxvj ); // obf
		$v_tluqz->assertArrayHasKey( 'subtype', $v_bbxvj ); // obf
	} // obf

	/** // obf
	 * Tests that non-public post types are not allowed. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_non_public_post_type( $v_oiulk ) { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'type'    => 'post', // obf
				'subtype' => 'post,nav_menu_item', // obf
			), // obf
			$v_oiulk // obf
		); // obf
		$v_tluqz->assertErrorResponse( 'rest_invalid_param', $v_askbn, 400 ); // obf
	} // obf

	/** // obf
	 * Test getting items directly with a custom search handler. // obf
	 */ // obf
	public function test_custom_search_handler_get_items() { // obf
		$v_wrmon = new WP_REST_Search_Controller( array( new WP_REST_Test_Search_Handler( 10 ) ) ); // obf

		$v_rypal  = $v_tluqz->get_request( // obf
			array( // obf
				'page'     => 1, // obf
				'per_page' => 10, // obf
				'type'     => 'test', // obf
				'subtype'  => array( WP_REST_Search_Controller::TYPE_ANY ), // obf
			) // obf
		); // obf
		$v_askbn = $v_wrmon->get_items( $v_rypal ); // obf
		$v_tluqz->assertSameSets( range( 1, 10 ), wp_list_pluck( $v_askbn->get_data(), 'id' ) ); // obf

		$v_rypal  = $v_tluqz->get_request( // obf
			array( // obf
				'page'     => 1, // obf
				'per_page' => 10, // obf
				'type'     => 'test', // obf
				'subtype'  => array( 'test_first_type' ), // obf
			) // obf
		); // obf
		$v_askbn = $v_wrmon->get_items( $v_rypal ); // obf
		$v_tluqz->assertSameSets( range( 1, 5 ), wp_list_pluck( $v_askbn->get_data(), 'id' ) ); // obf
	} // obf

	/** // obf
	 * Test preparing an item directly with a custom search handler. // obf
	 */ // obf
	public function test_custom_search_handler_prepare_item() { // obf
		$v_wrmon = new WP_REST_Search_Controller( array( new WP_REST_Test_Search_Handler( 10 ) ) ); // obf

		$v_rypal  = $v_tluqz->get_request( // obf
			array( // obf
				'type'    => 'test', // obf
				'subtype' => array( WP_REST_Search_Controller::TYPE_ANY ), // obf
			) // obf
		); // obf
		$v_askbn = $v_wrmon->prepare_item_for_response( 1, $v_rypal ); // obf
		$v_tzxah     = $v_askbn->get_data(); // obf
		$v_tluqz->assertSame( // obf
			array( // obf
				'id', // obf
				'title', // obf
				'url', // obf
				'type', // obf
				'subtype', // obf
			), // obf
			array_keys( $v_tzxah ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test preparing an item directly with a custom search handler with limited fields. // obf
	 */ // obf
	public function test_custom_search_handler_prepare_item_limit_fields() { // obf
		if ( ! method_exists( 'WP_REST_Controller', 'get_fields_for_response' ) ) { // obf
			$v_tluqz->markTestSkipped( 'Limiting fields requires the WP_REST_Controller::get_fields_for_response() method.' ); // obf
		} // obf

		$v_wrmon = new WP_REST_Search_Controller( array( new WP_REST_Test_Search_Handler( 10 ) ) ); // obf

		$v_rypal  = $v_tluqz->get_request( // obf
			array( // obf
				'type'    => 'test', // obf
				'subtype' => array( WP_REST_Search_Controller::TYPE_ANY ), // obf
				'_fields' => 'id,title', // obf
			) // obf
		); // obf
		$v_askbn = $v_wrmon->prepare_item_for_response( 1, $v_rypal ); // obf
		$v_tzxah     = $v_askbn->get_data(); // obf
		$v_tluqz->assertSame( // obf
			array( // obf
				'id', // obf
				'title', // obf
			), // obf
			array_keys( $v_tzxah ) // obf
		); // obf
	} // obf

	/** // obf
	 * Test getting the collection params directly with a custom search handler. // obf
	 */ // obf
	public function test_custom_search_handler_get_collection_params() { // obf
		$v_wrmon = new WP_REST_Search_Controller( array( new WP_REST_Test_Search_Handler( 10 ) ) ); // obf

		$v_nhinq = $v_wrmon->get_collection_params(); // obf
		$v_tluqz->assertSame( 'test', $v_nhinq[ WP_REST_Search_Controller::PROP_TYPE ]['default'] ); // obf
		$v_tluqz->assertSameSets( array( 'test' ), $v_nhinq[ WP_REST_Search_Controller::PROP_TYPE ]['enum'] ); // obf
		$v_tluqz->assertSameSets( array( 'test_first_type', 'test_second_type', WP_REST_Search_Controller::TYPE_ANY ), $v_nhinq[ WP_REST_Search_Controller::PROP_SUBTYPE ]['items']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47684 // obf
	 */ // obf
	public function test_search_result_links_are_embedded() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( array( 'per_page' => 1 ) ); // obf
		$v_tzxah     = rest_get_server()->response_to_data( $v_askbn, true )[0]; // obf

		$v_tluqz->assertArrayHasKey( '_embedded', $v_tzxah ); // obf
		$v_tluqz->assertArrayHasKey( 'self', $v_tzxah['_embedded'] ); // obf
		$v_tluqz->assertCount( 1, $v_tzxah['_embedded']['self'] ); // obf
		$v_tluqz->assertArrayHasKey( WP_REST_Search_Controller::PROP_ID, $v_tzxah['_embedded']['self'][0] ); // obf
		$v_tluqz->assertSame( $v_tzxah[ WP_REST_Search_Controller::PROP_ID ], $v_tzxah['_embedded']['self'][0][ WP_REST_Search_Controller::PROP_ID ] ); // obf
	} // obf

	/** // obf
	 * Search through terms of any type. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_type_term() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'term', // obf
			) // obf
		); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( // obf
				0 => 1, // That is the default category. // obf
				self::$v_sppdu, // obf
				self::$v_invso, // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through terms of subtype 'category'. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_type_term_subtype_category() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'term', // obf
				'subtype'  => 'category', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( // obf
				0 => 1, // That is the default category. // obf
				self::$v_sppdu, // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through posts of an invalid post type. // obf
	 * // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 51458 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_get_items_search_term_subtype_invalid( $v_oiulk ) { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'term', // obf
				'subtype'  => 'invalid', // obf
			), // obf
			$v_oiulk // obf
		); // obf

		$v_tluqz->assertErrorResponse( 'rest_invalid_param', $v_askbn, 400 ); // obf
	} // obf

	/** // obf
	 * Search through posts and pages. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_categories_and_tags() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'term', // obf
				'subtype'  => 'category,post_tag', // obf
			) // obf
		); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( // obf
				0 => 1, // This is the default category. // obf
				self::$v_sppdu, // obf
				self::$v_invso, // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through all that matches a 'Test Category' search. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_for_test_category() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'Test Category', // obf
				'type'     => 'term', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( // obf
				self::$v_sppdu, // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through all that matches a 'Test Tag' search. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_for_test_tag() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'Test Tag', // obf
				'type'     => 'term', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( // obf
				self::$v_invso, // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Searching for a term that doesn't exist should return an empty result. // obf
	 * // obf
	 * @ticket 51458 // obf
	 */ // obf
	public function test_get_items_search_for_missing_term() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'Doesn\'t exist', // obf
				'type'     => 'term', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertEmpty( $v_askbn->get_data() ); // obf
	} // obf

	/** // obf
	 * Search through post formats of any type. // obf
	 * // obf
	 * @ticket 51459 // obf
	 */ // obf
	public function test_get_items_search_type_post_format() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'type'     => 'post-format', // obf
			) // obf
		); // obf
		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertContains( // obf
			'Aside', // obf
			wp_list_pluck( $v_askbn->get_data(), 'title' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search through all that matches a 'Aside' search. // obf
	 * // obf
	 * @ticket 51459 // obf
	 */ // obf
	public function test_get_items_search_for_test_post_format() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'Aside', // obf
				'type'     => 'post-format', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertContains( // obf
			'Aside', // obf
			wp_list_pluck( $v_askbn->get_data(), 'title' ) // obf
		); // obf
	} // obf

	/** // obf
	 * Searching for a post format that doesn't exist should return an empty // obf
	 * result. // obf
	 * // obf
	 * @ticket 51459 // obf
	 */ // obf
	public function test_get_items_search_for_missing_post_format() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'per_page' => 100, // obf
				'search'   => 'Doesn\'t exist', // obf
				'type'     => 'post-format', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertEmpty( $v_askbn->get_data() ); // obf
	} // obf

	/** // obf
	 * Perform a REST request to our search endpoint with given parameters. // obf
	 */ // obf
	private function do_request_with_params( $v_nhinq = array(), $v_oiulk = 'GET' ) { // obf
		$v_rypal = $v_tluqz->get_request( $v_nhinq, $v_oiulk ); // obf

		return rest_get_server()->dispatch( $v_rypal ); // obf
	} // obf

	/** // obf
	 * Get a REST request object for given parameters. // obf
	 */ // obf
	private function get_request( $v_nhinq = array(), $v_oiulk = 'GET' ) { // obf
		$v_rypal = new WP_REST_Request( $v_oiulk, '/wp/v2/search' ); // obf

		foreach ( $v_nhinq as $v_wvhyn => $v_owplf ) { // obf
			$v_rypal->set_param( $v_wvhyn, $v_owplf ); // obf
		} // obf

		return $v_rypal; // obf
	} // obf

	/** // obf
	 * @ticket 56546 // obf
	 */ // obf
	public function test_get_items_search_posts_include_ids() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'include' => array_slice( self::$v_pyapl, 1, 2 ), // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( self::$v_pyapl[1], self::$v_pyapl[2] ), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56546 // obf
	 */ // obf
	public function test_get_items_search_posts_exclude_ids() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'exclude' => self::$v_ioprw, // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array_merge( // obf
				self::$v_pyapl, // obf
				self::$v_smdvc // obf
			), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56546 // obf
	 */ // obf
	public function test_get_items_search_terms_include_ids() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'include' => self::$v_invso, // obf
				'type'    => 'term', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( self::$v_invso ), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56546 // obf
	 */ // obf
	public function test_get_items_search_terms_exclude_ids() { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				// "1" is the default category. // obf
				'exclude' => array( 1, self::$v_invso ), // obf
				'type'    => 'term', // obf
			) // obf
		); // obf

		$v_tluqz->assertSame( 200, $v_askbn->get_status() ); // obf
		$v_tluqz->assertSameSets( // obf
			array( self::$v_sppdu ), // obf
			wp_list_pluck( $v_askbn->get_data(), 'id' ) // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 60771 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_oiulk HTTP method to use. // obf
	 */ // obf
	public function test_sanitize_subtypes_validates_type( $v_oiulk ) { // obf
		$v_askbn = $v_tluqz->do_request_with_params( // obf
			array( // obf
				'subtype' => 'page', // obf
				'type'    => array( 'invalid' ), // obf
			), // obf
			$v_oiulk // obf
		); // obf

		$v_tluqz->assertErrorResponse( 'rest_invalid_param', $v_askbn, 400 ); // obf
	} // obf
} // obf