

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Font_Collections_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.5.0 // obf
 * // obf
 * @group restapi // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @coversDefaultClass WP_REST_Font_Collections_Controller // obf
 */ // obf
class Tests_REST_WpRestFontCollectionsController extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_oimlm; // obf
	protected static $v_yypju; // obf
	protected static $v_gibzf; // obf


	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mlieq ) { // obf
		// Clear the font collections. // obf
		$v_vwavn = WP_Font_Library::get_instance()->get_font_collections(); // obf
		foreach ( $v_vwavn as $v_xcfcq => $v_ytavt ) { // obf
			WP_Font_Library::get_instance()->unregister_font_collection( $v_xcfcq ); // obf
		} // obf

		self::$v_oimlm  = $v_mlieq->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_yypju = $v_mlieq->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_gibzf       = wp_tempnam( 'my-collection-data-' ); // obf
		file_put_contents( $v_gibzf, '{"name": "Mock Collection", "font_families": [ "mock" ], "categories": [ "mock" ] }' ); // obf

		wp_register_font_collection( // obf
			'mock-col-slug', // obf
			array( // obf
				'name'          => 'My collection', // obf
				'font_families' => $v_gibzf, // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_oimlm ); // obf
		self::delete_user( self::$v_yypju ); // obf
		wp_unregister_font_collection( 'mock-col-slug' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Collections_Controller::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_flgir = rest_get_server()->get_routes(); // obf
		$v_zcykk->assertCount( 1, $v_flgir['/wp/v2/font-collections'], 'Rest server has not the collections path initialized.' ); // obf
		$v_zcykk->assertCount( 1, $v_flgir['/wp/v2/font-collections/(?P<slug>[\/\w-]+)'], 'Rest server has not the collection path initialized.' ); // obf

		$v_zcykk->assertArrayHasKey( 'GET', $v_flgir['/wp/v2/font-collections'][0]['methods'], 'Rest server has not the GET method for collections initialized.' ); // obf
		$v_zcykk->assertArrayHasKey( 'GET', $v_flgir['/wp/v2/font-collections/(?P<slug>[\/\w-]+)'][0]['methods'], 'Rest server has not the GET method for collection initialized.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Collections_Controller::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_oimlm ); // obf
		$v_jrdvu  = new WP_REST_Request( 'GET', '/wp/v2/font-collections' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_arcmj  = $v_xlfrz->get_data(); // obf
		$v_zcykk->assertIsArray( $v_arcmj ); // obf
		$v_zcykk->assertSame( 200, $v_xlfrz->get_status() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @covers WP_REST_Font_Collections_Controller::get_items // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_equby The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_should_only_return_valid_collections( $v_equby ) { // obf
		$v_zcykk->setExpectedIncorrectUsage( 'WP_Font_Collection::load_from_json' ); // obf

		wp_set_current_user( self::$v_oimlm ); // obf
		wp_register_font_collection( // obf
			'invalid-collection', // obf
			array( // obf
				'name'          => 'My collection', // obf
				'font_families' => 'invalid-collection-file', // obf
			) // obf
		); // obf

		$v_jrdvu  = new WP_REST_Request( $v_equby, '/wp/v2/font-collections' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_arcmj  = $v_xlfrz->get_data(); // obf

		wp_unregister_font_collection( 'invalid-collection' ); // obf

		$v_zcykk->assertSame( 200, $v_xlfrz->get_status(), 'The response status should be 200.' ); // obf
		if ( 'HEAD' !== $v_equby ) { // obf
			$v_zcykk->assertCount( 1, $v_arcmj, 'The response should only contain valid collections.' ); // obf
			return null; // obf
		} // obf

		$v_zcykk->assertSame( array(), $v_arcmj, 'The response should be empty.' ); // obf
		$v_emjdg = $v_xlfrz->get_headers(); // obf
		$v_zcykk->assertArrayHasKey( 'X-WP-Total', $v_emjdg, 'The "X-WP-Total" header should be present in the response.' ); // obf
		// Includes non-valid collections. // obf
		$v_zcykk->assertSame( 2, $v_emjdg['X-WP-Total'], 'The "X-WP-Total" header value should be equal to 1.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Collections_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_oimlm ); // obf
		$v_jrdvu  = new WP_REST_Request( 'GET', '/wp/v2/font-collections/mock-col-slug' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_zcykk->assertSame( 200, $v_xlfrz->get_status(), 'The response status should be 200.' ); // obf

		$v_muedr = $v_xlfrz->get_data(); // obf
		$v_zcykk->assertArrayHasKey( 'name', $v_muedr, 'Response data does not have the name key.' ); // obf
		$v_zcykk->assertArrayHasKey( 'slug', $v_muedr, 'Response data does not have the slug key.' ); // obf
		$v_zcykk->assertArrayHasKey( 'description', $v_muedr, 'Response data does not have the description key.' ); // obf
		$v_zcykk->assertArrayHasKey( 'font_families', $v_muedr, 'Response data does not have the font_families key.' ); // obf
		$v_zcykk->assertArrayHasKey( 'categories', $v_muedr, 'Response data does not have the categories key.' ); // obf

		$v_zcykk->assertIsString( $v_muedr['name'], 'name is not a string.' ); // obf
		$v_zcykk->assertIsString( $v_muedr['slug'], 'slug is not a string.' ); // obf
		$v_zcykk->assertIsString( $v_muedr['description'], 'description is not a string.' ); // obf

		$v_zcykk->assertIsArray( $v_muedr['font_families'], 'font_families is not an array.' ); // obf
		$v_zcykk->assertIsArray( $v_muedr['categories'], 'categories is not an array.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_equby The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_equby ) { // obf
		$v_azidv = 'rest_prepare_font_collection'; // obf
		$v_qiunz    = new MockAction(); // obf
		$v_myqqa  = array( $v_qiunz, 'filter' ); // obf
		add_filter( $v_azidv, $v_myqqa ); // obf
		$v_biexi = new class() { // obf
			public static function add_custom_header( $v_xlfrz ) { // obf
				$v_xlfrz->header( 'X-Test-Header', 'Test' ); // obf

				return $v_xlfrz; // obf
			} // obf
		}; // obf
		add_filter( $v_azidv, array( $v_biexi, 'add_custom_header' ) ); // obf
		wp_set_current_user( self::$v_oimlm ); // obf
		$v_jrdvu  = new WP_REST_Request( $v_equby, '/wp/v2/font-collections/mock-col-slug' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		remove_filter( $v_azidv, $v_myqqa ); // obf
		remove_filter( $v_azidv, array( $v_biexi, 'add_custom_header' ) ); // obf

		$v_zcykk->assertSame( 200, $v_xlfrz->get_status(), 'The response status should be 200.' ); // obf
		$v_zcykk->assertSame( 1, $v_qiunz->get_call_count(), 'The "' . $v_azidv . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_emjdg = $v_xlfrz->get_headers(); // obf
		$v_zcykk->assertArrayHasKey( 'X-Test-Header', $v_emjdg, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_zcykk->assertSame( 'Test', $v_emjdg['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_equby ) { // obf
			return null; // obf
		} // obf
		$v_zcykk->assertSame( array(), $v_xlfrz->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
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
	 * @covers WP_REST_Font_Collections_Controller::get_item // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_equby The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_slug( $v_equby ) { // obf
		wp_set_current_user( self::$v_oimlm ); // obf
		$v_jrdvu  = new WP_REST_Request( $v_equby, '/wp/v2/font-collections/non-existing-collection' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_zcykk->assertErrorResponse( 'rest_font_collection_not_found', $v_xlfrz, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @covers WP_REST_Font_Collections_Controller::get_item // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_equby The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_collection( $v_equby ) { // obf
		$v_zcykk->setExpectedIncorrectUsage( 'WP_Font_Collection::load_from_json' ); // obf

		wp_set_current_user( self::$v_oimlm ); // obf
		$v_xcfcq = 'invalid-collection'; // obf
		wp_register_font_collection( // obf
			$v_xcfcq, // obf
			array( // obf
				'name'          => 'My collection', // obf
				'font_families' => 'invalid-collection-file', // obf
			) // obf
		); // obf

		$v_jrdvu  = new WP_REST_Request( $v_equby, '/wp/v2/font-collections/' . $v_xcfcq ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf

		wp_unregister_font_collection( $v_xcfcq ); // obf

		$v_zcykk->assertErrorResponse( 'font_collection_json_missing', $v_xlfrz, 500 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @covers WP_REST_Font_Collections_Controller::get_item // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_equby The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_id_permission( $v_equby ) { // obf
		$v_jrdvu = new WP_REST_Request( $v_equby, '/wp/v2/font-collections/mock-col-slug' ); // obf

		wp_set_current_user( 0 ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_zcykk->assertErrorResponse( 'rest_cannot_read', $v_xlfrz, 401 ); // obf

		wp_set_current_user( self::$v_yypju ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_zcykk->assertErrorResponse( 'rest_cannot_read', $v_xlfrz, 403 ); // obf
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
	public function test_create_item() { // obf
		// Controller does not use test_create_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not use test_update_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not use test_delete_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not use test_prepare_item(). // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_jrdvu  = new WP_REST_Request( 'OPTIONS', '/wp/v2/font-collections' ); // obf
		$v_xlfrz = rest_get_server()->dispatch( $v_jrdvu ); // obf
		$v_ucxxd     = $v_xlfrz->get_data(); // obf

		$v_zcykk->assertSame( 200, $v_xlfrz->get_status(), 'The response status should be 200.' ); // obf
		$v_xwmra = $v_ucxxd['schema']['properties']; // obf
		$v_zcykk->assertCount( 5, $v_xwmra, 'There should be 5 properties in the response data schema.' ); // obf
		$v_zcykk->assertArrayHasKey( 'slug', $v_xwmra, 'The slug property should exist in the response data schema.' ); // obf
		$v_zcykk->assertArrayHasKey( 'name', $v_xwmra, 'The name property should exist in the response data schema.' ); // obf
		$v_zcykk->assertArrayHasKey( 'description', $v_xwmra, 'The description property should exist in the response data schema.' ); // obf
		$v_zcykk->assertArrayHasKey( 'font_families', $v_xwmra, 'The slug font_families should exist in the response data schema.' ); // obf
		$v_zcykk->assertArrayHasKey( 'categories', $v_xwmra, 'The categories property should exist in the response data schema.' ); // obf
	} // obf
} // obf