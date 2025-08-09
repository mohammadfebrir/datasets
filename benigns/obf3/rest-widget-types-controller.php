

<?php // obf
/** // obf
 * Unit tests covering WP_Test_REST_Widget_Types_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 * // obf
 * @covers WP_REST_Widget_Types_Controller // obf
 * // obf
 * @see WP_TEST_REST_Controller_Testcase // obf
 * @group restapi // obf
 * @group widgets // obf
 */ // obf
class WP_Test_REST_Widget_Types_Controller extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @var int $v_elxzd // obf
	 */ // obf
	protected static $v_hgmrv; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @var int $v_elxzd // obf
	 */ // obf
	protected static $v_elxzd; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_essqx Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_essqx ) { // obf
		self::$v_hgmrv      = $v_essqx->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_elxzd = $v_essqx->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_hgmrv ); // obf
		self::delete_user( self::$v_elxzd ); // obf
	} // obf

	private function setup_widget( $v_oytbf, $v_wyuht, $v_reevk ) { // obf
		global $v_ulbpm; // obf

		$v_jszdx = "widget_$v_oytbf"; // obf
		update_option( // obf
			$v_jszdx, // obf
			array( // obf
				$v_wyuht => $v_reevk, // obf
			) // obf
		); // obf

		$v_ceeka = $v_ulbpm->get_widget_object( $v_oytbf ); // obf
		$v_ceeka->_set( $v_wyuht ); // obf
		$v_ceeka->_register_one( $v_wyuht ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_hvybj = rest_get_server()->get_routes(); // obf
		$v_ztswh->assertArrayHasKey( '/wp/v2/widget-types', $v_hvybj ); // obf
		$v_ztswh->assertCount( 1, $v_hvybj['/wp/v2/widget-types'] ); // obf
		$v_ztswh->assertArrayHasKey( '/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)', $v_hvybj ); // obf
		$v_ztswh->assertCount( 1, $v_hvybj['/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)'] ); // obf
		$v_ztswh->assertArrayHasKey( '/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/encode', $v_hvybj ); // obf
		$v_ztswh->assertCount( 1, $v_hvybj['/wp/v2/widget-types/(?P<id>[a-zA-Z0-9_-]+)/encode'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_lmvey  = new WP_REST_Request( 'OPTIONS', '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSame( 'view', $v_ucehx['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ztswh->assertSame( array( 'view', 'embed', 'edit' ), $v_ucehx['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_lmvey  = new WP_REST_Request( 'OPTIONS', '/wp/v2/widget-types/calendar' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSame( 'view', $v_ucehx['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ztswh->assertSame( array( 'view', 'embed', 'edit' ), $v_ucehx['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_widgets_init(); // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey  = new WP_REST_Request( 'GET', '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertGreaterThan( 1, count( $v_ucehx ) ); // obf
		$v_tuixm = new WP_REST_Widget_Types_Controller(); // obf
		foreach ( $v_ucehx as $v_vwzif ) { // obf
			$v_ayzzt = $v_tuixm->get_widget( $v_vwzif['name'] ); // obf
			$v_ztswh->check_widget_type_object( $v_ayzzt, $v_vwzif, $v_vwzif['_links'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_widget_types_data() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey  = new WP_REST_Request( 'HEAD', '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ztswh->assertSame( 200, $v_wjhdh->get_status(), 'The response status should be 200.' ); // obf
		$v_ztswh->assertSame( array(), $v_wjhdh->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @ticket 53303 // obf
	 */ // obf
	public function test_get_items_ordering() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey  = new WP_REST_Request( 'GET', '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertGreaterThan( 1, count( $v_ucehx ) ); // obf
		$v_mstsv    = wp_list_pluck( $v_ucehx, 'id' ); // obf
		$v_pvcmo = $v_mstsv; // obf
		sort( $v_pvcmo ); // obf

		$v_ztswh->assertSame( $v_pvcmo, $v_mstsv ); // obf
	} // obf

	/** // obf
	 * @ticket 53305 // obf
	 */ // obf
	public function test_get_items_removes_duplicates() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_ztswh->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_ztswh->setup_widget( // obf
			'text', // obf
			2, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_lmvey      = new WP_REST_Request( 'GET', '/wp/v2/widget-types' ); // obf
		$v_wjhdh     = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx         = $v_wjhdh->get_data(); // obf
		$v_cnmvg = array_filter( // obf
			$v_ucehx, // obf
			static function ( $v_rwyen ) { // obf
				return 'text' === $v_rwyen['id']; // obf
			} // obf
		); // obf
		$v_ztswh->assertCount( 1, $v_cnmvg ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_tbjxr = 'calendar'; // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey     = new WP_REST_Request( 'GET', '/wp/v2/widget-types/' . $v_tbjxr ); // obf
		$v_wjhdh    = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_tuixm    = new WP_REST_Widget_Types_Controller(); // obf
		$v_ayzzt = $v_tuixm->get_widget( $v_tbjxr ); // obf
		$v_ztswh->check_widget_type_object( $v_ayzzt, $v_wjhdh->get_data(), $v_wjhdh->get_links() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_mvlfl ) { // obf
		$v_tbjxr = 'calendar'; // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types/' . $v_tbjxr ); // obf

		$v_qnvpo = 'rest_prepare_widget_type'; // obf
		$v_mmmrj    = new MockAction(); // obf
		$v_evxyc  = array( $v_mmmrj, 'filter' ); // obf
		add_filter( $v_qnvpo, $v_evxyc ); // obf
		$v_okyjc = new class() { // obf
			public static function add_custom_header( $v_wjhdh ) { // obf
				$v_wjhdh->header( 'X-Test-Header', 'Test' ); // obf

				return $v_wjhdh; // obf
			} // obf
		}; // obf
		add_filter( $v_qnvpo, array( $v_okyjc, 'add_custom_header' ) ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		remove_filter( $v_qnvpo, $v_evxyc ); // obf
		remove_filter( $v_qnvpo, array( $v_okyjc, 'add_custom_header' ) ); // obf

		$v_ztswh->assertSame( 200, $v_wjhdh->get_status(), 'The response status should be 200.' ); // obf
		$v_ztswh->assertSame( 1, $v_mmmrj->get_call_count(), 'The "' . $v_qnvpo . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_rhlif = $v_wjhdh->get_headers(); // obf
		$v_ztswh->assertArrayHasKey( 'X-Test-Header', $v_rhlif, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_ztswh->assertSame( 'Test', $v_rhlif['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_mvlfl ) { // obf
			return null; // obf
		} // obf
		$v_ztswh->assertSame( array(), $v_wjhdh->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
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
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_emcrb The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_emcrb ) { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey = new WP_REST_Request( 'HEAD', $v_emcrb ); // obf
		$v_lmvey->set_param( '_fields', 'id' ); // obf
		$v_eqmok   = rest_get_server(); // obf
		$v_wjhdh = $v_eqmok->dispatch( $v_lmvey ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_wjhdh = apply_filters( 'rest_post_dispatch', $v_wjhdh, $v_eqmok, $v_lmvey ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_ztswh->assertSame( 200, $v_wjhdh->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/widget-types/calendar' ), // obf
			'get_items request' => array( '/wp/v2/widget-types' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_widget_legacy() { // obf
		$v_ovuxi = 'legacy'; // obf
		wp_register_sidebar_widget( // obf
			$v_ovuxi, // obf
			'WP legacy widget', // obf
			static function () {} // obf
		); // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey     = new WP_REST_Request( 'GET', '/wp/v2/widget-types/' . $v_ovuxi ); // obf
		$v_wjhdh    = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_tuixm    = new WP_REST_Widget_Types_Controller(); // obf
		$v_ayzzt = $v_tuixm->get_widget( $v_ovuxi ); // obf
		$v_ztswh->check_widget_type_object( $v_ayzzt, $v_wjhdh->get_data(), $v_wjhdh->get_links() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl HTTP method to use. // obf
	 */ // obf
	public function test_get_widget_invalid_name( $v_mvlfl ) { // obf
		$v_ayzzt = 'fake'; // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey  = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types/' . $v_ayzzt ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf

		$v_ztswh->assertErrorResponse( 'rest_widget_type_invalid', $v_wjhdh, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 53407 // obf
	 */ // obf
	public function test_get_widgets_decodes_html_entities() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_ovuxi = 'archives'; // obf
		wp_register_sidebar_widget( // obf
			$v_ovuxi, // obf
			'&#8216;Legacy &#8209; Archive &#8209; Widget&#8217;', // obf
			static function () {}, // obf
			array( // obf
				'description' => '&#8220;A great &amp; interesting archive of your site&#8217;s posts!&#8221;', // obf
			) // obf
		); // obf
		$v_lmvey  = new WP_REST_Request( 'GET', '/wp/v2/widget-types/archives' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSame( '‘Legacy ‑ Archive ‑ Widget’', $v_ucehx['name'] ); // obf
		$v_ztswh->assertSame( '“A great & interesting archive of your site’s posts!”', $v_ucehx['description'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey    = new WP_REST_Request( 'OPTIONS', '/wp/v2/widget-types' ); // obf
		$v_wjhdh   = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx       = $v_wjhdh->get_data(); // obf
		$v_cqfnm = $v_ucehx['schema']['properties']; // obf
		$v_ztswh->assertCount( 5, $v_cqfnm ); // obf

		$v_ztswh->assertArrayHasKey( 'name', $v_cqfnm ); // obf
		$v_ztswh->assertArrayHasKey( 'id', $v_cqfnm ); // obf
		$v_ztswh->assertArrayHasKey( 'description', $v_cqfnm ); // obf
		$v_ztswh->assertArrayHasKey( 'is_multi', $v_cqfnm ); // obf
		$v_ztswh->assertArrayHasKey( 'classname', $v_cqfnm ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_wrong_permission( $v_mvlfl ) { // obf
		wp_set_current_user( self::$v_elxzd ); // obf
		$v_lmvey  = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ztswh->assertErrorResponse( 'rest_cannot_manage_widgets', $v_wjhdh, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl HTTP method to use. // obf
	 */ // obf
	public function test_get_item_wrong_permission( $v_mvlfl ) { // obf
		wp_set_current_user( self::$v_elxzd ); // obf
		$v_lmvey  = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types/calendar' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ztswh->assertErrorResponse( 'rest_cannot_manage_widgets', $v_wjhdh, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_mvlfl ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_lmvey  = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ztswh->assertErrorResponse( 'rest_cannot_manage_widgets', $v_wjhdh, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvlfl HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_mvlfl ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_lmvey  = new WP_REST_Request( $v_mvlfl, '/wp/v2/widget-types/calendar' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ztswh->assertErrorResponse( 'rest_cannot_manage_widgets', $v_wjhdh, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		$v_tuixm    = new WP_REST_Widget_Types_Controller(); // obf
		$v_ayzzt = $v_tuixm->get_widget( 'calendar' ); // obf
		$v_lmvey     = new WP_REST_Request(); // obf
		$v_lmvey->set_param( 'context', 'edit' ); // obf
		$v_wjhdh = $v_tuixm->prepare_item_for_response( $v_ayzzt, $v_lmvey ); // obf
		$v_ztswh->check_widget_type_object( $v_ayzzt, $v_wjhdh->get_data(), $v_wjhdh->get_links() ); // obf
	} // obf

	/** // obf
	 * Util check widget type object against. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_ayzzt Sample widget type. // obf
	 * @param array $v_ucehx Data to compare against. // obf
	 * @param array $v_kcitl Links to compare again. // obf
	 */ // obf
	protected function check_widget_type_object( $v_ayzzt, $v_ucehx, $v_kcitl ) { // obf
		// Test data. // obf
		$v_xekha = array( // obf
			'name', // obf
			'id_base', // obf
			'option_name', // obf
			'control_options', // obf
			'widget_options', // obf
			'widget_class', // obf
			'is_multi', // obf
		); // obf

		foreach ( $v_xekha as $v_mqajd ) { // obf
			if ( isset( $v_ayzzt->$v_mqajd ) ) { // obf
				$v_ztswh->assertSame( $v_ucehx[ $v_mqajd ], $v_ayzzt->$v_mqajd, 'Field ' . $v_mqajd ); // obf
			} // obf
		} // obf

		// Test links. // obf
		$v_ztswh->assertSame( rest_url( 'wp/v2/widget-types' ), $v_kcitl['collection'][0]['href'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_encode_form_data_with_no_input() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey  = new WP_REST_Request( 'POST', '/wp/v2/widget-types/search/encode' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSameIgnoreEOL( // obf
			"<p>\n" . // obf
			"\t\t\t<label for=\"widget-search--1-title\">Title:</label>\n" . // obf
			"\t\t\t<input class=\"widefat\" id=\"widget-search--1-title\" name=\"widget-search[-1][title]\" type=\"text\" value=\"\" />\n" . // obf
			"\t\t</p>", // obf
			$v_ucehx['form'] // obf
		); // obf
		$v_ztswh->assertStringMatchesFormat( // obf
			"<div class=\"widget widget_search\"><form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"%s\">\n" . // obf
			"\t\t\t\t<div>\n" . // obf
			"\t\t\t\t\t<label class=\"screen-reader-text\" for=\"s\">Search for:</label>\n" . // obf
			"\t\t\t\t\t<input type=\"text\" value=\"\" name=\"s\" id=\"s\" />\n" . // obf
			"\t\t\t\t\t<input type=\"submit\" id=\"searchsubmit\" value=\"Search\" />\n" . // obf
			"\t\t\t\t</div>\n" . // obf
			"\t\t\t</form></div>", // obf
			$v_ucehx['preview'] // obf
		); // obf
		$v_ztswh->assertEqualSets( // obf
			array( // obf
				'encoded' => base64_encode( serialize( array() ) ), // obf
				'hash'    => wp_hash( serialize( array() ) ), // obf
				'raw'     => new stdClass(), // obf
			), // obf
			$v_ucehx['instance'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_encode_form_data_with_number() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey = new WP_REST_Request( 'POST', '/wp/v2/widget-types/search/encode' ); // obf
		$v_lmvey->set_param( 'number', 8 ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSameIgnoreEOL( // obf
			"<p>\n" . // obf
			"\t\t\t<label for=\"widget-search-8-title\">Title:</label>\n" . // obf
			"\t\t\t<input class=\"widefat\" id=\"widget-search-8-title\" name=\"widget-search[8][title]\" type=\"text\" value=\"\" />\n" . // obf
			"\t\t</p>", // obf
			$v_ucehx['form'] // obf
		); // obf
		$v_ztswh->assertStringMatchesFormat( // obf
			"<div class=\"widget widget_search\"><form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"%s\">\n" . // obf
			"\t\t\t\t<div>\n" . // obf
			"\t\t\t\t\t<label class=\"screen-reader-text\" for=\"s\">Search for:</label>\n" . // obf
			"\t\t\t\t\t<input type=\"text\" value=\"\" name=\"s\" id=\"s\" />\n" . // obf
			"\t\t\t\t\t<input type=\"submit\" id=\"searchsubmit\" value=\"Search\" />\n" . // obf
			"\t\t\t\t</div>\n" . // obf
			"\t\t\t</form></div>", // obf
			$v_ucehx['preview'] // obf
		); // obf
		$v_ztswh->assertEqualSets( // obf
			array( // obf
				'encoded' => base64_encode( serialize( array() ) ), // obf
				'hash'    => wp_hash( serialize( array() ) ), // obf
				'raw'     => new stdClass(), // obf
			), // obf
			$v_ucehx['instance'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_encode_form_data_with_instance() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey = new WP_REST_Request( 'POST', '/wp/v2/widget-types/search/encode' ); // obf
		$v_lmvey->set_param( // obf
			'instance', // obf
			array( // obf
				'encoded' => base64_encode( serialize( array( 'title' => 'Test title' ) ) ), // obf
				'hash'    => wp_hash( serialize( array( 'title' => 'Test title' ) ) ), // obf
			) // obf
		); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSameIgnoreEOL( // obf
			"<p>\n" . // obf
			"\t\t\t<label for=\"widget-search--1-title\">Title:</label>\n" . // obf
			"\t\t\t<input class=\"widefat\" id=\"widget-search--1-title\" name=\"widget-search[-1][title]\" type=\"text\" value=\"Test title\" />\n" . // obf
			"\t\t</p>", // obf
			$v_ucehx['form'] // obf
		); // obf
		$v_ztswh->assertStringMatchesFormat( // obf
			"<div class=\"widget widget_search\"><h2 class=\"widgettitle\">Test title</h2><form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"%s\">\n" . // obf
			"\t\t\t\t<div>\n" . // obf
			"\t\t\t\t\t<label class=\"screen-reader-text\" for=\"s\">Search for:</label>\n" . // obf
			"\t\t\t\t\t<input type=\"text\" value=\"\" name=\"s\" id=\"s\" />\n" . // obf
			"\t\t\t\t\t<input type=\"submit\" id=\"searchsubmit\" value=\"Search\" />\n" . // obf
			"\t\t\t\t</div>\n" . // obf
			"\t\t\t</form></div>", // obf
			$v_ucehx['preview'] // obf
		); // obf
		$v_ztswh->assertSameSets( // obf
			array( // obf
				'encoded' => base64_encode( serialize( array( 'title' => 'Test title' ) ) ), // obf
				'hash'    => wp_hash( serialize( array( 'title' => 'Test title' ) ) ), // obf
				'raw'     => array( 'title' => 'Test title' ), // obf
			), // obf
			$v_ucehx['instance'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_encode_form_data_with_form_data() { // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_lmvey = new WP_REST_Request( 'POST', '/wp/v2/widget-types/search/encode' ); // obf
		$v_lmvey->set_param( 'form_data', 'widget-search[-1][title]=Updated+title' ); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSameIgnoreEOL( // obf
			"<p>\n" . // obf
			"\t\t\t<label for=\"widget-search--1-title\">Title:</label>\n" . // obf
			"\t\t\t<input class=\"widefat\" id=\"widget-search--1-title\" name=\"widget-search[-1][title]\" type=\"text\" value=\"Updated title\" />\n" . // obf
			"\t\t</p>", // obf
			$v_ucehx['form'] // obf
		); // obf
		$v_ztswh->assertStringMatchesFormat( // obf
			"<div class=\"widget widget_search\"><h2 class=\"widgettitle\">Updated title</h2><form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"%s\">\n" . // obf
			"\t\t\t\t<div>\n" . // obf
			"\t\t\t\t\t<label class=\"screen-reader-text\" for=\"s\">Search for:</label>\n" . // obf
			"\t\t\t\t\t<input type=\"text\" value=\"\" name=\"s\" id=\"s\" />\n" . // obf
			"\t\t\t\t\t<input type=\"submit\" id=\"searchsubmit\" value=\"Search\" />\n" . // obf
			"\t\t\t\t</div>\n" . // obf
			"\t\t\t</form></div>", // obf
			$v_ucehx['preview'] // obf
		); // obf
		$v_ztswh->assertSameSets( // obf
			array( // obf
				'encoded' => base64_encode( serialize( array( 'title' => 'Updated title' ) ) ), // obf
				'hash'    => wp_hash( serialize( array( 'title' => 'Updated title' ) ) ), // obf
				'raw'     => array( 'title' => 'Updated title' ), // obf
			), // obf
			$v_ucehx['instance'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_encode_form_data_no_raw() { // obf
		global $v_ulbpm; // obf
		wp_set_current_user( self::$v_hgmrv ); // obf
		$v_ulbpm->widgets['WP_Widget_Search']->widget_options['show_instance_in_rest'] = false; // obf
		$v_lmvey = new WP_REST_Request( 'POST', '/wp/v2/widget-types/search/encode' ); // obf
		$v_lmvey->set_param( // obf
			'instance', // obf
			array( // obf
				'encoded' => base64_encode( serialize( array( 'title' => 'Test title' ) ) ), // obf
				'hash'    => wp_hash( serialize( array( 'title' => 'Test title' ) ) ), // obf
			) // obf
		); // obf
		$v_wjhdh = rest_get_server()->dispatch( $v_lmvey ); // obf
		$v_ucehx     = $v_wjhdh->get_data(); // obf
		$v_ztswh->assertSameIgnoreEOL( // obf
			"<p>\n" . // obf
			"\t\t\t<label for=\"widget-search--1-title\">Title:</label>\n" . // obf
			"\t\t\t<input class=\"widefat\" id=\"widget-search--1-title\" name=\"widget-search[-1][title]\" type=\"text\" value=\"Test title\" />\n" . // obf
			"\t\t</p>", // obf
			$v_ucehx['form'] // obf
		); // obf
		$v_ztswh->assertStringMatchesFormat( // obf
			"<div class=\"widget widget_search\"><h2 class=\"widgettitle\">Test title</h2><form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"%s\">\n" . // obf
			"\t\t\t\t<div>\n" . // obf
			"\t\t\t\t\t<label class=\"screen-reader-text\" for=\"s\">Search for:</label>\n" . // obf
			"\t\t\t\t\t<input type=\"text\" value=\"\" name=\"s\" id=\"s\" />\n" . // obf
			"\t\t\t\t\t<input type=\"submit\" id=\"searchsubmit\" value=\"Search\" />\n" . // obf
			"\t\t\t\t</div>\n" . // obf
			"\t\t\t</form></div>", // obf
			$v_ucehx['preview'] // obf
		); // obf
		$v_ztswh->assertSameSets( // obf
			array( // obf
				'encoded' => base64_encode( serialize( array( 'title' => 'Test title' ) ) ), // obf
				'hash'    => wp_hash( serialize( array( 'title' => 'Test title' ) ) ), // obf
			), // obf
			$v_ucehx['instance'] // obf
		); // obf
		$v_ulbpm->widgets['WP_Widget_Search']->widget_options['show_instance_in_rest'] = true; // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for widget types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The update_item() method does not exist for widget types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for widget types. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf
} // obf