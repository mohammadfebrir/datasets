

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Template_Revisions_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_wpRestTemplateRevisionsController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEST_THEME = 'block-theme'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_NAME = 'my_template'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_NAME_2 = 'my_template_2'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_PART_NAME = 'my_template_part'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_PART_NAME_2 = 'my_template_part_2'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_POST_TYPE = 'wp_template'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_PART_POST_TYPE = 'wp_template_part'; // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_kfnkh; // obf

	/** // obf
	 * Contributor user ID. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_ljgud; // obf

	/** // obf
	 * Template post. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_nyjgr; // obf

	/** // obf
	 * Template post. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_dgrqi; // obf

	/** // obf
	 * Template part post. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_xchlc; // obf

	/** // obf
	 * Template part post. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_lrduj; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	private static $v_jvnxf = array(); // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	private static $v_cszpr = array(); // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ljctx Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ljctx ) { // obf
		self::$v_kfnkh = $v_ljctx->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		self::$v_ljgud = $v_ljctx->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		// Set up template post. // obf
		self::$v_nyjgr = $v_ljctx->post->create_and_get( // obf
			array( // obf
				'post_type'    => self::TEMPLATE_POST_TYPE, // obf
				'post_name'    => self::TEMPLATE_NAME, // obf
				'post_title'   => 'My Template', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_post_terms( self::$v_nyjgr->ID, self::TEST_THEME, 'wp_theme' ); // obf

		// Update post to create new revisions. // obf
		foreach ( range( 2, 5 ) as $v_vcedu ) { // obf
			self::$v_jvnxf[] = _wp_put_post_revision( // obf
				array( // obf
					'ID'           => self::$v_nyjgr->ID, // obf
					'post_content' => 'Content revision #' . $v_vcedu, // obf
				) // obf
			); // obf
		} // obf

		// Create a new template post to test the get_item method. // obf
		self::$v_dgrqi = $v_ljctx->post->create_and_get( // obf
			array( // obf
				'post_type'    => self::TEMPLATE_POST_TYPE, // obf
				'post_name'    => self::TEMPLATE_NAME_2, // obf
				'post_title'   => 'My Template 2', // obf
				'post_content' => 'Content 2', // obf
				'post_excerpt' => 'Description of my template 2', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_post_terms( self::$v_dgrqi->ID, self::TEST_THEME, 'wp_theme' ); // obf

		// Set up template part post. // obf
		self::$v_xchlc = $v_ljctx->post->create_and_get( // obf
			array( // obf
				'post_type'    => self::TEMPLATE_PART_POST_TYPE, // obf
				'post_name'    => self::TEMPLATE_PART_NAME, // obf
				'post_title'   => 'My template part', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template part', // obf
				'tax_input'    => array( // obf
					'wp_theme'              => array( // obf
						self::TEST_THEME, // obf
					), // obf
					'wp_template_part_area' => array( // obf
						WP_TEMPLATE_PART_AREA_HEADER, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_post_terms( self::$v_xchlc->ID, self::TEST_THEME, 'wp_theme' ); // obf
		wp_set_post_terms( self::$v_xchlc->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf

		// Update post to create new revisions. // obf
		foreach ( range( 2, 5 ) as $v_vcedu ) { // obf
			self::$v_cszpr[] = _wp_put_post_revision( // obf
				array( // obf
					'ID'           => self::$v_xchlc->ID, // obf
					'post_content' => 'Content revision #' . $v_vcedu, // obf
				) // obf
			); // obf
		} // obf

		// Set up template part post. // obf
		self::$v_lrduj = $v_ljctx->post->create_and_get( // obf
			array( // obf
				'post_type'    => self::TEMPLATE_PART_POST_TYPE, // obf
				'post_name'    => self::TEMPLATE_PART_NAME_2, // obf
				'post_title'   => 'My template part 2', // obf
				'post_content' => 'Content 2', // obf
				'post_excerpt' => 'Description of my template part 2', // obf
				'tax_input'    => array( // obf
					'wp_theme'              => array( // obf
						self::TEST_THEME, // obf
					), // obf
					'wp_template_part_area' => array( // obf
						WP_TEMPLATE_PART_AREA_HEADER, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_post_terms( self::$v_lrduj->ID, self::TEST_THEME, 'wp_theme' ); // obf
		wp_set_post_terms( self::$v_lrduj->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
	} // obf

	/** // obf
	 * Remove revisions when tests are complete. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		// Also deletes revisions. // obf
		foreach ( self::$v_jvnxf as $v_yeqko ) { // obf
			wp_delete_post( $v_yeqko, true ); // obf
		} // obf

		foreach ( self::$v_cszpr as $v_bgkza ) { // obf
			wp_delete_post( $v_bgkza, true ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Template_Revisions_Controller::register_routes // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_rnhqk = rest_get_server()->get_routes(); // obf
		$v_qyhnc->assertArrayHasKey( // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions', // obf
			$v_rnhqk, // obf
			'Template revisions route does not exist.' // obf
		); // obf
		$v_qyhnc->assertArrayHasKey( // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions/(?P<id>[\d]+)', // obf
			$v_rnhqk, // obf
			'Single template revision based on the given ID route does not exist.' // obf
		); // obf
		$v_qyhnc->assertArrayHasKey( // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions', // obf
			$v_rnhqk, // obf
			'Template part revisions route does not exist.' // obf
		); // obf
		$v_qyhnc->assertArrayHasKey( // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/revisions/(?P<id>[\d]+)', // obf
			$v_rnhqk, // obf
			'Single template part revision based on the given ID route does not exist.' // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_context_param() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_context_param_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_context_param_with_data_provider // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_context_param // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_piamf   Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 */ // obf
	public function test_context_param_with_data_provider( $v_piamf, $v_tvnxw ) { // obf
		// Collection. // obf
		$v_chwdp  = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_ltopz     = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertSame( // obf
			'view', // obf
			$v_ltopz['endpoints'][0]['args']['context']['default'], // obf
			'Failed to assert that the default context for the collection endpoint is "view".' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			array( 'view', 'embed', 'edit' ), // obf
			$v_ltopz['endpoints'][0]['args']['context']['enum'], // obf
			'Failed to assert correct enum values for the collection endpoint.' // obf
		); // obf

		// Single. // obf
		$v_chwdp  = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/1' ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_ltopz     = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertCount( // obf
			2, // obf
			$v_ltopz['endpoints'], // obf
			'Failed to assert that the single revision endpoint count is 2.' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			'view', // obf
			$v_ltopz['endpoints'][0]['args']['context']['default'], // obf
			'Failed to assert that the default context for the single revision endpoint is "view".' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			array( 'view', 'embed', 'edit' ), // obf
			$v_ltopz['endpoints'][0]['args']['context']['enum'], // obf
			'Failed to assert correct enum values for the single revision endpoint.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_context_param. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_context_param_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template parts' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_get_items() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_get_items_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_with_data_provider // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_items // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw               Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_with_data_provider( $v_mnyxj, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		$v_nlcfh = self::$$v_mnyxj; // obf

		$v_chwdp   = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' // obf
		); // obf
		$v_kmkes  = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_ahzwq = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertSame( WP_Http::OK, $v_kmkes->get_status(), 'Response is expected to have a status code of 200.' ); // obf

		$v_qyhnc->assertCount( // obf
			4, // obf
			$v_ahzwq, // obf
			'Failed asserting that the response data contains exactly 4 items.' // obf
		); // obf

		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_ahzwq[0]['parent'], // obf
			'Failed asserting that the parent ID of the revision matches the template post ID.' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			'Content revision #5', // obf
			$v_ahzwq[0]['content']['raw'], // obf
			'Failed asserting that the content of the revision is "Content revision #5".' // obf
		); // obf

		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_ahzwq[1]['parent'], // obf
			'Failed asserting that the parent ID of the revision matches the template post ID.' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			'Content revision #4', // obf
			$v_ahzwq[1]['content']['raw'], // obf
			'Failed asserting that the content of the revision is "Content revision #4".' // obf
		); // obf

		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_ahzwq[2]['parent'], // obf
			'Failed asserting that the parent ID of the revision matches the template post ID.' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			'Content revision #3', // obf
			$v_ahzwq[2]['content']['raw'], // obf
			'Failed asserting that the content of the revision is "Content revision #3".' // obf
		); // obf

		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_ahzwq[3]['parent'], // obf
			'Failed asserting that the parent ID of the revision matches the template post ID.' // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			'Content revision #2', // obf
			$v_ahzwq[3]['content']['raw'], // obf
			'Failed asserting that the content of the revision is "Content revision #2".' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_items_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_items_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( 'template_post', 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template parts' => array( 'template_part_post', 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf
	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		$v_chwdp  = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/revisions' // obf
		); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertSame( 200, $v_kmkes->get_status(), 'Response status is 200.' ); // obf
		$v_qyhnc->assertSame( array(), $v_kmkes->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_endpoint_should_return_unauthorized_https_status_code_for_unauthorized_request // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_items_permissions_check // obf
	 * @ticket 56922 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_piamf   Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 * @param string $v_sjusa HTTP method to use. // obf
	 */ // obf
	public function test_get_items_endpoint_should_return_unauthorized_https_status_code_for_unauthorized_request( $v_piamf, $v_tvnxw, $v_sjusa ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_chwdp  = new WP_REST_Request( $v_sjusa, '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_cannot_read', $v_kmkes, WP_Http::UNAUTHORIZED ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_items_endpoint_should_return_unauthorized_https_status_code_for_unauthorized_request. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_items_endpoint_should_return_unauthorized_https_status_code_for_unauthorized_request() { // obf
		return array( // obf
			'templates, GET request'       => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME, 'GET' ), // obf
			'templates, HEAD request'      => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME, 'HEAD' ), // obf
			'template parts, GET request'  => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, 'GET' ), // obf
			'template parts, HEAD request' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_endpoint_should_return_forbidden_https_status_code_for_users_with_insufficient_permissions // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_items_permissions_check // obf
	 * @ticket 56922 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_piamf   Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 * @param string $v_sjusa HTTP method to use. // obf
	 */ // obf
	public function test_get_items_endpoint_should_return_forbidden_https_status_code_for_users_with_insufficient_permissions( $v_piamf, string $v_tvnxw, $v_sjusa ) { // obf
		wp_set_current_user( self::$v_ljgud ); // obf
		$v_chwdp  = new WP_REST_Request( $v_sjusa, '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_cannot_read', $v_kmkes, WP_Http::FORBIDDEN ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_items_endpoint_should_return_unauthorized_https_status_code_for_unauthorized_request. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_items_endpoint_should_return_forbidden_https_status_code_for_users_with_insufficient_permissions() { // obf
		return array( // obf
			'templates, GET request'       => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME, 'GET' ), // obf
			'templates, HEAD request'      => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME, 'HEAD' ), // obf
			'template parts, GET request'  => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, 'GET' ), // obf
			'template parts, HEAD request' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_for_templates_based_on_theme_files_should_return_bad_response_status // obf
	 * @ticket 61970 // obf
	 * // obf
	 * @param string $v_piamf   Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_for_templates_based_on_theme_files_should_return_bad_response_status( $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		switch_theme( 'block-theme' ); // obf

		$v_chwdp = new WP_REST_Request( 'GET', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' ); // obf

		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( // obf
			'rest_invalid_template', // obf
			$v_kmkes, // obf
			WP_Http::BAD_REQUEST, // obf
			sprintf( 'Response is expected to have a status code of %d.', WP_Http::BAD_REQUEST ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_items_for_templates_based_on_theme_files_should_return_bad_response_status. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_items_for_templates_based_on_theme_files_should_return_bad_response_status() { // obf
		return array( // obf
			'templates'      => array( 'templates', self::TEST_THEME . '//page-home' ), // obf
			'template parts' => array( 'template-parts', self::TEST_THEME . '//small-header' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_for_templates_based_on_theme_files_should_return_bad_response_status // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_piamf   Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_for_templates_based_on_theme_files_should_return_bad_response_status( $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		switch_theme( 'block-theme' ); // obf

		$v_chwdp = new WP_REST_Request( 'GET', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/1' ); // obf

		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( // obf
			'rest_invalid_template', // obf
			$v_kmkes, // obf
			WP_Http::BAD_REQUEST, // obf
			sprintf( 'Response is expected to have a status code of %d.', WP_Http::BAD_REQUEST ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_item_for_templates_based_on_theme_files_should_return_bad_response_status. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_for_templates_based_on_theme_files_should_return_bad_response_status() { // obf
		return array( // obf
			'templates'      => array( 'templates', self::TEST_THEME . '//page-home' ), // obf
			'template parts' => array( 'template-parts', self::TEST_THEME . '//small-header' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_get_item() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_get_item_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_with_data_provider // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string  $v_mnyxj  A class property name that contains the parent post object. // obf
	 * @param string  $v_piamf                  Base part of the REST API endpoint to test. // obf
	 * @param string  $v_tvnxw                Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_with_data_provider( $v_mnyxj, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf

		$v_ahzwq   = wp_get_post_revisions( $v_nlcfh, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt = array_shift( $v_ahzwq ); // obf

		$v_chwdp  = new WP_REST_Request( 'GET', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_bvpnn = $v_kmkes->get_data(); // obf

		$v_qyhnc->assertIsArray( $v_bvpnn, 'Failed asserting that the revision is an array.' ); // obf
		$v_qyhnc->assertSame( // obf
			$v_jqfxt, // obf
			$v_bvpnn['wp_id'], // obf
			"Failed asserting that the revision id is the same as $v_jqfxt" // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_bvpnn['parent'], // obf
			sprintf( // obf
				'Failed asserting that the parent id of the revision is the same as %s.', // obf
				self::$v_nyjgr->ID // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_item_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		$v_ahzwq   = wp_get_post_revisions( self::$v_nyjgr, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt = array_shift( $v_ahzwq ); // obf
		$v_chwdp     = new WP_REST_Request( 'HEAD', '/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/revisions/' . $v_jqfxt ); // obf
		$v_kmkes    = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertSame( 200, $v_kmkes->get_status(), 'Response status is 200.' ); // obf
		$v_qyhnc->assertSame( array(), $v_kmkes->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_item_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( 'template_post', 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template parts' => array( 'template_part_post', 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_with_data_provider // obf
	 * @covers       WP_REST_Template_Revisions_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_piamf Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_head_request_with_specified_fields_returns_success_response( $v_mnyxj, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf

		$v_ahzwq   = wp_get_post_revisions( $v_nlcfh, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt = array_shift( $v_ahzwq ); // obf

		$v_chwdp = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt // obf
		); // obf
		$v_chwdp->set_param( '_fields', 'id' ); // obf
		$v_djhhx   = rest_get_server(); // obf
		$v_kmkes = $v_djhhx->dispatch( $v_chwdp ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_kmkes = apply_filters( 'rest_post_dispatch', $v_kmkes, $v_djhhx, $v_chwdp ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_qyhnc->assertSame( 200, $v_kmkes->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_with_data_provider // obf
	 * @covers       WP_REST_Template_Revisions_Controller::get_items // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_piamf Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_head_request_with_specified_fields_returns_success_response( $v_mnyxj, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf
		$v_nlcfh = self::$$v_mnyxj; // obf

		$v_chwdp = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' // obf
		); // obf

		$v_chwdp->set_param( '_fields', 'id' ); // obf
		$v_djhhx   = rest_get_server(); // obf
		$v_kmkes = $v_djhhx->dispatch( $v_chwdp ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_kmkes = apply_filters( 'rest_post_dispatch', $v_kmkes, $v_djhhx, $v_chwdp ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_qyhnc->assertSame( 200, $v_kmkes->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_not_found // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string  $v_mnyxj  A class property name that contains the parent post object. // obf
	 * @param string  $v_piamf                  Base part of the REST API endpoint to test. // obf
	 * @param string  $v_sjusa                     HTTP method to use. // obf
	 */ // obf
	public function test_get_item_not_found( $v_mnyxj, $v_piamf, $v_sjusa ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf

		$v_ahzwq   = wp_get_post_revisions( $v_nlcfh, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt = array_shift( $v_ahzwq ); // obf

		$v_chwdp  = new WP_REST_Request( $v_sjusa, '/wp/v2/' . $v_piamf . '/invalid//parent/revisions/' . $v_jqfxt ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_post_invalid_parent', $v_kmkes, WP_Http::NOT_FOUND ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_item_not_found. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_not_found() { // obf
		return array( // obf
			'templates, GET request'       => array( 'template_post', 'templates', 'GET' ), // obf
			'templates, HEAD request'      => array( 'template_post', 'templates', 'HEAD' ), // obf
			'template parts, GET request'  => array( 'template_part_post', 'template-parts', 'GET' ), // obf
			'template parts, HEAD request' => array( 'template_part_post', 'template-parts', 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_invalid_parent_id // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_item // obf
	 * @ticket 59875 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mnyxj        A class property name that contains the parent post object. // obf
	 * @param string $v_ovtrr A class property name that contains the parent post object. // obf
	 * @param string $v_piamf                        Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw                      Template ID to use in the test. // obf
	 * @param string $v_sjusa HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_parent_id( $v_mnyxj, $v_ovtrr, $v_piamf, $v_tvnxw, $v_sjusa ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh        = self::$$v_mnyxj; // obf
		$v_dhagu = self::$$v_ovtrr; // obf
		$v_ahzwq          = wp_get_post_revisions( $v_nlcfh, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt        = array_shift( $v_ahzwq ); // obf

		$v_chwdp = new WP_REST_Request( $v_sjusa, '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf

		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_revision_parent_id_mismatch', $v_kmkes, 404 ); // obf

		$v_rrhlh = 'The revision does not belong to the specified parent with id of "' . $v_dhagu->ID . '"'; // obf
		$v_qyhnc->assertSame( $v_rrhlh, $v_kmkes->as_error()->get_error_messages()[0], 'The message must contain the correct parent ID.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_item_invalid_parent_id. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_invalid_parent_id() { // obf
		return array( // obf
			'templates, GET request'       => array( // obf
				'template_post', // obf
				'template_post_2', // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME_2, // obf
				'GET', // obf
			), // obf
			'templates, HEAD request'      => array( // obf
				'template_post', // obf
				'template_post_2', // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME_2, // obf
				'HEAD', // obf
			), // obf
			'template parts, GET request'  => array( // obf
				'template_part_post', // obf
				'template_part_post_2', // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME_2, // obf
				'GET', // obf
			), // obf
			'template parts, HEAD request' => array( // obf
				'template_part_post', // obf
				'template_part_post_2', // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME_2, // obf
				'HEAD', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_prepare_item_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_prepare_item_with_data_provider // obf
	 * @covers WP_REST_Template_Revisions_Controller::prepare_item_for_response // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw               Template ID to use in the test. // obf
	 */ // obf
	public function test_prepare_item_with_data_provider( $v_mnyxj, $v_piamf, $v_tvnxw ) { // obf
		$v_nlcfh = self::$$v_mnyxj; // obf
		$v_ahzwq   = wp_get_post_revisions( $v_nlcfh, array( 'fields' => 'ids' ) ); // obf
		$v_jqfxt = array_shift( $v_ahzwq ); // obf
		$v_ftgcd        = get_post( $v_jqfxt ); // obf
		$v_chwdp     = new WP_REST_Request( 'GET', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf
		$v_ctzrr  = new WP_REST_Template_Revisions_Controller( $v_nlcfh->post_type ); // obf
		$v_kmkes    = $v_ctzrr->prepare_item_for_response( $v_ftgcd, $v_chwdp ); // obf
		$v_qyhnc->assertInstanceOf( // obf
			WP_REST_Response::class, // obf
			$v_kmkes, // obf
			'Failed asserting that the response object is an instance of WP_REST_Response.' // obf
		); // obf

		$v_bvpnn = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertIsArray( $v_bvpnn, 'Failed asserting that the revision is an array.' ); // obf
		$v_qyhnc->assertSame( // obf
			$v_jqfxt, // obf
			$v_bvpnn['wp_id'], // obf
			"Failed asserting that the revision id is the same as $v_jqfxt." // obf
		); // obf
		$v_qyhnc->assertSame( // obf
			$v_nlcfh->ID, // obf
			$v_bvpnn['parent'], // obf
			sprintf( // obf
				'Failed asserting that the parent id of the revision is the same as %s.', // obf
				$v_nlcfh->ID // obf
			) // obf
		); // obf

		$v_sywru = $v_kmkes->get_links(); // obf
		$v_qyhnc->assertIsArray( $v_sywru, 'Failed asserting that the links are an array.' ); // obf

		$v_qyhnc->assertStringEndsWith( // obf
			$v_tvnxw . '/revisions/' . $v_jqfxt, // obf
			$v_sywru['self'][0]['href'], // obf
			sprintf( // obf
				'Failed asserting that the self link ends with %s.', // obf
				$v_tvnxw . '/revisions/' . $v_jqfxt // obf
			) // obf
		); // obf

		$v_qyhnc->assertStringEndsWith( // obf
			$v_tvnxw, // obf
			$v_sywru['parent'][0]['href'], // obf
			sprintf( // obf
				'Failed asserting that the parent link ends with %s.', // obf
				$v_tvnxw // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_prepare_item_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_prepare_item_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( 'template_post', 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template parts' => array( 'template_part_post', 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_prepare_item_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_schema_with_data_provider // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_item_schema // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_piamf             Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw           Template ID to use in the test. // obf
	 * @param int    $v_bluua      Number of properties to check for in the schema. // obf
	 * @param array  $v_ftvhd Additional properties to check for in the schema. // obf
	 */ // obf
	public function test_get_item_schema_with_data_provider( $v_piamf, $v_tvnxw, $v_bluua, $v_ftvhd = array() ) { // obf
		$v_chwdp    = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions' ); // obf
		$v_kmkes   = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_ltopz       = $v_kmkes->get_data(); // obf
		$v_lmoci = $v_ltopz['schema']['properties']; // obf

		$v_qyhnc->assertCount( $v_bluua, $v_lmoci ); // obf
		$v_qyhnc->assertArrayHasKey( 'id', $v_lmoci, 'ID key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'slug', $v_lmoci, 'Slug key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'theme', $v_lmoci, 'Theme key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'source', $v_lmoci, 'Source key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'origin', $v_lmoci, 'Origin key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'content', $v_lmoci, 'Content key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'title', $v_lmoci, 'Title key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'description', $v_lmoci, 'description key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'status', $v_lmoci, 'status key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'wp_id', $v_lmoci, 'wp_id key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'has_theme_file', $v_lmoci, 'has_theme_file key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'author', $v_lmoci, 'author key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'modified', $v_lmoci, 'modified key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'parent', $v_lmoci, 'Parent key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'author_text', $v_lmoci, 'author_text key should exist in properties.' ); // obf
		$v_qyhnc->assertArrayHasKey( 'original_source', $v_lmoci, 'original_source key should exist in properties.' ); // obf

		foreach ( $v_ftvhd as $v_mpgqo ) { // obf
			$v_qyhnc->assertArrayHasKey( $v_mpgqo, $v_lmoci, $v_mpgqo . ' key should exist in properties.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for data_get_item_schema_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_item_schema_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME, // obf
				19, // obf
				array( 'is_custom', 'plugin' ), // obf
			), // obf
			'template parts' => array( // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, // obf
				18, // obf
				array( 'area' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_create_item() { // obf
		$v_qyhnc->markTestSkipped( // obf
			sprintf( // obf
				"The '%s' controller doesn't currently support the ability to create template revisions.", // obf
				WP_REST_Template_Revisions_Controller::class // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_update_item() { // obf
		$v_qyhnc->markTestSkipped( // obf
			sprintf( // obf
				"The '%s' controller doesn't currently support the ability to update template revisions.", // obf
				WP_REST_Template_Revisions_Controller::class // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_delete_item() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_delete_item_with_data_provider method. // obf
		$v_qyhnc->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_delete_item_with_data_provider // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_zpmxt   A class property name that contains the revisions array. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw               Template ID to use in the test. // obf
	 */ // obf
	public function test_delete_item_with_data_provider( $v_mnyxj, $v_zpmxt, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf
		$v_ahzwq   = self::$$v_zpmxt; // obf

		$v_jqfxt = _wp_put_post_revision( $v_nlcfh ); // obf
		$v_ahzwq[] = $v_jqfxt; // obf

		$v_chwdp = new WP_REST_Request( 'DELETE', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf
		$v_chwdp->set_param( 'force', true ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf

		$v_qyhnc->assertSame( 200, $v_kmkes->get_status(), 'Failed asserting that the response status is 200.' ); // obf
		$v_qyhnc->assertNull( get_post( $v_jqfxt ), 'Failed asserting that the post with the given revision ID is deleted.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_delete_item_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_delete_item_with_data_provider() { // obf
		return array( // obf
			'templates'      => array( // obf
				'template_post', // obf
				'template_revisions', // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME, // obf
			), // obf
			'template parts' => array( // obf
				'template_part_post', // obf
				'template_part_revisions', // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_delete_item_incorrect_permission // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_zpmxt   A class property name that contains the revisions array. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw               Template ID to use in the test. // obf
	 */ // obf
	public function test_delete_item_incorrect_permission( $v_mnyxj, $v_zpmxt, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( self::$v_ljgud ); // obf
		$v_nlcfh = self::$$v_mnyxj; // obf
		$v_ahzwq   = self::$$v_zpmxt; // obf

		$v_jqfxt = _wp_put_post_revision( $v_nlcfh ); // obf
		$v_ahzwq[] = $v_jqfxt; // obf

		$v_chwdp = new WP_REST_Request( 'DELETE', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf
		$v_chwdp->set_param( 'force', true ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_cannot_delete', $v_kmkes, WP_Http::FORBIDDEN ); // obf
	} // obf

	/** // obf
	 * Data provider for test_delete_item_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_delete_item_incorrect_permission() { // obf
		return array( // obf
			'templates'      => array( // obf
				'template_post', // obf
				'template_revisions', // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME, // obf
			), // obf
			'template parts' => array( // obf
				'template_part_post', // obf
				'template_part_revisions', // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_delete_item_no_permission // obf
	 * @covers WP_REST_Templates_Controller::delete_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_zpmxt   A class property name that contains the revisions array. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_tvnxw               Template ID to use in the test. // obf
	 */ // obf
	public function test_delete_item_no_permission( $v_mnyxj, $v_zpmxt, $v_piamf, $v_tvnxw ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf
		$v_ahzwq   = self::$$v_zpmxt; // obf

		$v_jqfxt = _wp_put_post_revision( $v_nlcfh ); // obf
		$v_ahzwq[] = $v_jqfxt; // obf

		$v_chwdp = new WP_REST_Request( 'DELETE', '/wp/v2/' . $v_piamf . '/' . $v_tvnxw . '/revisions/' . $v_jqfxt ); // obf
		$v_chwdp->set_param( 'force', true ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_cannot_delete', $v_kmkes, WP_Http::UNAUTHORIZED ); // obf
	} // obf

	/** // obf
	 * Data provider for test_delete_item_no_permission. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_delete_item_no_permission() { // obf
		return array( // obf
			'templates'      => array( // obf
				'template_post', // obf
				'template_revisions', // obf
				'templates', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_NAME, // obf
			), // obf
			'template parts' => array( // obf
				'template_part_post', // obf
				'template_part_revisions', // obf
				'template-parts', // obf
				self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_delete_item_not_found // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_mnyxj A class property name that contains the parent post object. // obf
	 * @param string $v_zpmxt   A class property name that contains the revisions array. // obf
	 * @param string $v_piamf                 Base part of the REST API endpoint to test. // obf
	 */ // obf
	public function test_delete_item_not_found( $v_mnyxj, $v_zpmxt, $v_piamf ) { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		$v_nlcfh = self::$$v_mnyxj; // obf
		$v_ahzwq   = self::$$v_zpmxt; // obf

		$v_jqfxt = _wp_put_post_revision( $v_nlcfh ); // obf
		$v_ahzwq[] = $v_jqfxt; // obf

		$v_chwdp = new WP_REST_Request( 'DELETE', '/wp/v2/' . $v_piamf . '/invalid//parent/revisions/' . $v_jqfxt ); // obf
		$v_chwdp->set_param( 'force', true ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_post_invalid_parent', $v_kmkes, WP_Http::NOT_FOUND ); // obf
	} // obf

	/** // obf
	 * Data provider for test_delete_item_not_found. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_delete_item_not_found() { // obf
		return array( // obf
			'templates'      => array( // obf
				'template_post', // obf
				'template_revisions', // obf
				'templates', // obf
			), // obf
			'template parts' => array( // obf
				'template_part_post', // obf
				'template_part_revisions', // obf
				'template-parts', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests for the pagination. // obf
	 * // obf
	 * @ticket 62292 // obf
	 * // obf
	 * @covers WP_REST_Template_Revisions_Controller::get_items // obf
	 */ // obf
	public function test_get_template_revisions_pagination() { // obf
		wp_set_current_user( self::$v_kfnkh ); // obf

		// Test offset. // obf
		$v_chwdp = new WP_REST_Request( 'GET', '/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/revisions' ); // obf
		$v_chwdp->set_param( 'offset', 1 ); // obf
		$v_chwdp->set_param( 'per_page', 1 ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertSame( 200, $v_kmkes->get_status() ); // obf
		$v_ltopz = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertCount( 1, $v_ltopz ); // obf
		$v_qyhnc->assertSame( 4, $v_kmkes->get_headers()['X-WP-Total'] ); // obf
		$v_qyhnc->assertSame( 4, $v_kmkes->get_headers()['X-WP-TotalPages'] ); // obf

		// Test paged. // obf
		$v_chwdp = new WP_REST_Request( 'GET', '/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/revisions' ); // obf
		$v_chwdp->set_param( 'page', 2 ); // obf
		$v_chwdp->set_param( 'per_page', 2 ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertSame( 200, $v_kmkes->get_status() ); // obf
		$v_ltopz = $v_kmkes->get_data(); // obf
		$v_qyhnc->assertCount( 2, $v_ltopz ); // obf
		$v_qyhnc->assertSame( 4, $v_kmkes->get_headers()['X-WP-Total'] ); // obf
		$v_qyhnc->assertSame( 2, $v_kmkes->get_headers()['X-WP-TotalPages'] ); // obf

		// Test out of bounds. // obf
		$v_chwdp = new WP_REST_Request( 'GET', '/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/revisions' ); // obf
		$v_chwdp->set_param( 'page', 4 ); // obf
		$v_chwdp->set_param( 'per_page', 6 ); // obf
		$v_kmkes = rest_get_server()->dispatch( $v_chwdp ); // obf
		$v_qyhnc->assertErrorResponse( 'rest_revision_invalid_page_number', $v_kmkes, 400 ); // obf
	} // obf
} // obf