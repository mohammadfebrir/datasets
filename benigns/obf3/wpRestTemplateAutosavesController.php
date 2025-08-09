

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Template_Autosaves_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_wpRestTemplateAutosavesController extends WP_Test_REST_Controller_Testcase { // obf

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
	const TEMPLATE_PART_NAME = 'my_template_part'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_POST_TYPE = 'wp_template'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const TEMPLATE_PART_POST_TYPE = 'wp_template_part'; // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	const PARENT_POST_TYPE = 'wp_template'; // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_qhzdi; // obf

	/** // obf
	 * Contributor user ID. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_nyoje; // obf

	/** // obf
	 * Template post. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_inuey; // obf

	/** // obf
	 * Template part post. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var WP_Post // obf
	 */ // obf
	private static $v_cvtgm; // obf

	/** // obf
	 * Create fake data before the tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_paccg Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_paccg ) { // obf
		self::$v_nyoje = $v_paccg->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		self::$v_qhzdi = $v_paccg->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_qhzdi ); // obf

		// Set up template post. // obf
		self::$v_inuey = $v_paccg->post->create_and_get( // obf
			array( // obf
				'post_type'    => self::TEMPLATE_POST_TYPE, // obf
				'post_name'    => self::TEMPLATE_NAME, // obf
				'post_title'   => 'My template', // obf
				'post_content' => 'Content', // obf
				'post_excerpt' => 'Description of my template', // obf
				'tax_input'    => array( // obf
					'wp_theme' => array( // obf
						self::TEST_THEME, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		wp_set_post_terms( self::$v_inuey->ID, self::TEST_THEME, 'wp_theme' ); // obf

		// Set up template part post. // obf
		self::$v_cvtgm = $v_paccg->post->create_and_get( // obf
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
		wp_set_post_terms( self::$v_cvtgm->ID, self::TEST_THEME, 'wp_theme' ); // obf
		wp_set_post_terms( self::$v_cvtgm->ID, WP_TEMPLATE_PART_AREA_HEADER, 'wp_template_part_area' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Template_Autosaves_Controller::register_routes // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_ndajg = rest_get_server()->get_routes(); // obf
		$v_dexwr->assertArrayHasKey( // obf
			'/wp/v2/templates/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves', // obf
			$v_ndajg, // obf
			'Template autosaves route does not exist.' // obf
		); // obf
		$v_dexwr->assertArrayHasKey( // obf
			'/wp/v2/templates/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves/(?P<id>[\d]+)', // obf
			$v_ndajg, // obf
			'Single template autosave based on the given ID route does not exist.' // obf
		); // obf
		$v_dexwr->assertArrayHasKey( // obf
			'/wp/v2/template-parts/(?P<id>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves', // obf
			$v_ndajg, // obf
			'Template part autosaves route does not exist.' // obf
		); // obf
		$v_dexwr->assertArrayHasKey( // obf
			'/wp/v2/template-parts/(?P<parent>([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)[\/\w%-]+)/autosaves/(?P<id>[\d]+)', // obf
			$v_ndajg, // obf
			'Single template part autosave based on the given ID route does not exist.' // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_context_param() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_context_param_with_data_provider method. // obf
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_context_param_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::get_context_param // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_context_param_with_data_provider( $v_iomts, $v_ozwki ) { // obf
		// Collection. // obf
		$v_zsley  = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_pbnob     = $v_oifgl->get_data(); // obf

		// Collection. // obf
		$v_dexwr->assertCount( // obf
			2, // obf
			$v_pbnob['endpoints'], // obf
			'Failed to assert that the collection autosave endpoints count is 2.' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			'view', // obf
			$v_pbnob['endpoints'][0]['args']['context']['default'], // obf
			'Failed to assert that the default context for the GET collection endpoint is "view".' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			array( 'view', 'embed', 'edit' ), // obf
			$v_pbnob['endpoints'][0]['args']['context']['enum'], // obf
			"Failed to assert that the enum values for the GET collection endpoint are 'view', 'embed', and 'edit'." // obf
		); // obf

		// Single. // obf
		$v_zsley  = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves/1' ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_pbnob     = $v_oifgl->get_data(); // obf
		$v_dexwr->assertCount( // obf
			1, // obf
			$v_pbnob['endpoints'], // obf
			'Failed to assert that the single autosave endpoints count is 1.' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			'view', // obf
			$v_pbnob['endpoints'][0]['args']['context']['default'], // obf
			'Failed to assert that the default context for the single autosave endpoint is "view".' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			array( 'view', 'embed', 'edit' ), // obf
			$v_pbnob['endpoints'][0]['args']['context']['enum'], // obf
			"Failed to assert that the enum values for the single autosave endpoint are 'view', 'embed', and 'edit'." // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_context_param_with_data_provider. // obf
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
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::get_items // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_xxixv  A class property name that contains the parent post object. // obf
	 * @param string $v_iomts                  Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki                Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_with_data_provider( $v_xxixv, $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		// Cannot access this property in the data provider because it is not initialized at the time of execution. // obf
		$v_mehuj      = self::$$v_xxixv; // obf
		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => $v_mehuj->ID, // obf
				'post_type'    => $v_mehuj->post_type, // obf
			) // obf
		); // obf

		$v_zsley   = new WP_REST_Request( // obf
			'GET', // obf
			'/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' // obf
		); // obf
		$v_oifgl  = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_jrdxj = $v_oifgl->get_data(); // obf
		$v_dexwr->assertSame( WP_Http::OK, $v_oifgl->get_status(), 'Response is expected to have a status code of 200.' ); // obf

		$v_dexwr->assertCount( // obf
			1, // obf
			$v_jrdxj, // obf
			'Failed asserting that the response data contains exactly 1 item.' // obf
		); // obf

		$v_dexwr->assertSame( // obf
			$v_xxklz, // obf
			$v_jrdxj[0]['wp_id'], // obf
			'Failed asserting that the ID of the autosave matches the expected autosave post ID.' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			$v_mehuj->ID, // obf
			$v_jrdxj[0]['parent'], // obf
			'Failed asserting that the parent ID of the autosave matches the template post ID.' // obf
		); // obf
		$v_dexwr->assertSame( // obf
			'Autosave content.', // obf
			$v_jrdxj[0]['content']['raw'], // obf
			'Failed asserting that the content of the autosave is "Autosave content.".' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => self::$v_inuey->ID, // obf
				'post_type'    => self::PARENT_POST_TYPE, // obf
			) // obf
		); // obf

		$v_zsley  = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/autosaves' // obf
		); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertSame( 200, $v_oifgl->get_status(), 'Response status is 200.' ); // obf
		$v_dexwr->assertSame( array(), $v_oifgl->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
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
	 * @dataProvider data_get_items_for_templates_based_on_theme_files_should_return_bad_response_status // obf
	 * @ticket 61970 // obf
	 * // obf
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_for_templates_based_on_theme_files_should_return_bad_response_status( $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		switch_theme( 'block-theme' ); // obf

		$v_zsley = new WP_REST_Request( 'GET', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf

		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertErrorResponse( // obf
			'rest_invalid_template', // obf
			$v_oifgl, // obf
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
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_for_templates_based_on_theme_files_should_return_bad_response_status( $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		switch_theme( 'block-theme' ); // obf

		$v_zsley = new WP_REST_Request( 'GET', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves/1' ); // obf

		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertErrorResponse( // obf
			'rest_invalid_template', // obf
			$v_oifgl, // obf
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
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string  $v_xxixv  A class property name that contains the parent post object. // obf
	 * @param string  $v_iomts                  Base part of the REST API endpoint to test. // obf
	 * @param string  $v_ozwki                Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_with_data_provider( $v_xxixv, $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf

		$v_mehuj = self::$$v_xxixv; // obf

		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => $v_mehuj->ID, // obf
				'post_type'    => $v_mehuj->post_type, // obf
			) // obf
		); // obf

		$v_zsley  = new WP_REST_Request( 'GET', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves/' . $v_xxklz ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf

		$v_dexwr->assertSame( WP_Http::OK, $v_oifgl->get_status(), 'Response is expected to have a status code of 200.' ); // obf
		$v_lohkm = $v_oifgl->get_data(); // obf

		$v_dexwr->assertIsArray( $v_lohkm, 'Failed asserting that the autosave is an array.' ); // obf
		$v_dexwr->assertSame( // obf
			$v_xxklz, // obf
			$v_lohkm['wp_id'], // obf
			"Failed asserting that the autosave id is the same as $v_xxklz." // obf
		); // obf
		$v_dexwr->assertSame( // obf
			$v_mehuj->ID, // obf
			$v_lohkm['parent'], // obf
			sprintf( // obf
				'Failed asserting that the parent id of the autosave is the same as %s.', // obf
				$v_mehuj->ID // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_item_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf

		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => self::$v_inuey->ID, // obf
				'post_type'    => self::PARENT_POST_TYPE, // obf
			) // obf
		); // obf

		$v_zsley  = new WP_REST_Request( 'HEAD', '/wp/v2/templates/' . self::TEST_THEME . '/' . self::TEMPLATE_NAME . '/autosaves/' . $v_xxklz ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertSame( 200, $v_oifgl->get_status(), 'Response status is 200.' ); // obf
		$v_dexwr->assertSame( array(), $v_oifgl->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
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
	 * @covers       WP_REST_Template_Autosaves_Controller::get_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_xxixv A class property name that contains the parent post object. // obf
	 * @param string $v_iomts Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_get_item_head_request_with_specified_fields_returns_success_response( $v_xxixv, $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf

		$v_mehuj = self::$$v_xxixv; // obf

		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => $v_mehuj->ID, // obf
				'post_type'    => $v_mehuj->post_type, // obf
			) // obf
		); // obf

		$v_zsley = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves/' . $v_xxklz // obf
		); // obf
		$v_zsley->set_param( '_fields', 'id' ); // obf
		$v_hhgbb   = rest_get_server(); // obf
		$v_oifgl = $v_hhgbb->dispatch( $v_zsley ); // obf

		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_oifgl = apply_filters( 'rest_post_dispatch', $v_oifgl, $v_hhgbb, $v_zsley ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_dexwr->assertSame( 200, $v_oifgl->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_items_with_data_provider // obf
	 * @covers       WP_REST_Template_Autosaves_Controller::get_items // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_xxixv A class property name that contains the parent post object. // obf
	 * @param string $v_iomts Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_get_items_head_request_with_specified_fields_returns_success_response( $v_xxixv, $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		// Cannot access this property in the data provider because it is not initialized at the time of execution. // obf
		$v_mehuj = self::$$v_xxixv; // obf
		wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => $v_mehuj->ID, // obf
				'post_type'    => $v_mehuj->post_type, // obf
			) // obf
		); // obf

		$v_zsley = new WP_REST_Request( // obf
			'HEAD', // obf
			'/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' // obf
		); // obf
		$v_zsley->set_param( '_fields', 'id' ); // obf
		$v_hhgbb   = rest_get_server(); // obf
		$v_oifgl = $v_hhgbb->dispatch( $v_zsley ); // obf

		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_oifgl = apply_filters( 'rest_post_dispatch', $v_oifgl, $v_hhgbb, $v_zsley ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_dexwr->assertSame( 200, $v_oifgl->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_prepare_item_with_data_provider method. // obf
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_prepare_item_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::prepare_item_for_response // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_xxixv A class property name that contains the parent post object. // obf
	 * @param string $v_iomts                 Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki               Template ID to use in the test. // obf
	 */ // obf
	public function test_prepare_item_with_data_provider( $v_xxixv, $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf
		$v_mehuj      = self::$$v_xxixv; // obf
		$v_xxklz = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'Autosave content.', // obf
				'post_ID'      => $v_mehuj->ID, // obf
				'post_type'    => $v_mehuj->post_type, // obf
			) // obf
		); // obf
		$v_kdcgb = get_post( $v_xxklz ); // obf
		$v_zsley          = new WP_REST_Request( 'GET', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves/' . $v_kdcgb->ID ); // obf
		$v_qkrum       = new WP_REST_Template_Autosaves_Controller( $v_mehuj->post_type ); // obf
		$v_oifgl         = $v_qkrum->prepare_item_for_response( $v_kdcgb, $v_zsley ); // obf
		$v_dexwr->assertInstanceOf( // obf
			WP_REST_Response::class, // obf
			$v_oifgl, // obf
			'Failed asserting that the response object is an instance of WP_REST_Response.' // obf
		); // obf

		$v_lohkm = $v_oifgl->get_data(); // obf
		$v_dexwr->assertIsArray( $v_lohkm, 'Failed asserting that the autosave is an array.' ); // obf
		$v_dexwr->assertSame( // obf
			$v_kdcgb->ID, // obf
			$v_lohkm['wp_id'], // obf
			"Failed asserting that the autosave id is the same as $v_kdcgb->ID." // obf
		); // obf
		$v_dexwr->assertSame( // obf
			$v_mehuj->ID, // obf
			$v_lohkm['parent'], // obf
			sprintf( // obf
				'Failed asserting that the parent id of the autosave is the same as %s.', // obf
				$v_mehuj->ID // obf
			) // obf
		); // obf

		$v_zffge = $v_oifgl->get_links(); // obf
		$v_dexwr->assertIsArray( $v_zffge, 'Failed asserting that the links are an array.' ); // obf

		$v_dexwr->assertStringEndsWith( // obf
			$v_ozwki . '/autosaves/' . $v_kdcgb->ID, // obf
			$v_zffge['self'][0]['href'], // obf
			"Failed asserting that the self link ends with $v_ozwki . '/autosaves/' . $v_kdcgb->ID." // obf
		); // obf

		$v_dexwr->assertStringEndsWith( // obf
			$v_ozwki, // obf
			$v_zffge['parent'][0]['href'], // obf
			"Failed asserting that the parent link ends with %$v_ozwki." // obf
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
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_item_schema_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::get_item_schema // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_iomts             Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki           Template ID to use in the test. // obf
	 * @param int    $v_qsbqn      Number of properties to check for in the schema. // obf
	 * @param array  $v_qbnnd Additional properties to check for in the schema. // obf
	 */ // obf
	public function test_get_item_schema_with_data_provider( $v_iomts, $v_ozwki, $v_qsbqn, $v_qbnnd = array() ) { // obf
		$v_zsley  = new WP_REST_Request( 'OPTIONS', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_pbnob     = $v_oifgl->get_data(); // obf

		$v_wkokv = $v_pbnob['schema']['properties']; // obf

		$v_dexwr->assertCount( $v_qsbqn, $v_wkokv ); // obf
		$v_dexwr->assertArrayHasKey( 'id', $v_wkokv, 'ID key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'slug', $v_wkokv, 'Slug key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'theme', $v_wkokv, 'Theme key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'source', $v_wkokv, 'Source key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'origin', $v_wkokv, 'Origin key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'content', $v_wkokv, 'Content key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'title', $v_wkokv, 'Title key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'description', $v_wkokv, 'description key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'status', $v_wkokv, 'status key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'wp_id', $v_wkokv, 'wp_id key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'has_theme_file', $v_wkokv, 'has_theme_file key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'author', $v_wkokv, 'author key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'modified', $v_wkokv, 'modified key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'parent', $v_wkokv, 'Parent key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'author_text', $v_wkokv, 'author_text key should exist in properties.' ); // obf
		$v_dexwr->assertArrayHasKey( 'original_source', $v_wkokv, 'original_source key should exist in properties.' ); // obf
		foreach ( $v_qbnnd as $v_ygydd ) { // obf
			$v_dexwr->assertArrayHasKey( $v_ygydd, $v_wkokv, $v_ygydd . ' key should exist in properties.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_get_item_schema_with_data_provider. // obf
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
		// A proper data provider cannot be used because this method's signature must match the parent method. // obf
		// Therefore, actual tests are performed in the test_create_item_with_data_provider method. // obf
		$v_dexwr->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_with_data_provider // obf
	 * @covers WP_REST_Template_Autosaves_Controller::create_item // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_create_item_with_data_provider( $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_qhzdi ); // obf

		$v_zsley = new WP_REST_Request( 'POST', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf
		$v_zsley->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_abgjd = array( // obf
			'title'   => 'Post Title', // obf
			'content' => 'Post content', // obf
			'excerpt' => 'Post excerpt', // obf
			'name'    => 'test', // obf
			'id'      => $v_ozwki, // obf
		); // obf

		$v_zsley->set_body_params( $v_abgjd ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf

		$v_dexwr->assertNotWPError( $v_oifgl, 'The response from this request should not return a WP_Error object.' ); // obf
		$v_oifgl = rest_ensure_response( $v_oifgl ); // obf
		$v_pbnob     = $v_oifgl->get_data(); // obf

		$v_dexwr->assertArrayHasKey( 'content', $v_pbnob, 'Response should contain a key called content.' ); // obf
		$v_dexwr->assertSame( $v_abgjd['content'], $v_pbnob['content']['raw'], 'Response data should match for field content.' ); // obf

		$v_dexwr->assertArrayHasKey( 'title', $v_pbnob, 'Response should contain a key called title.' ); // obf
		$v_dexwr->assertSame( $v_abgjd['title'], $v_pbnob['title']['raw'], 'Response data should match for field title.' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_create_item_with_data_provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_with_data_provider() { // obf
		return array( // obf
			'templates'     => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template part' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_incorrect_permission // obf
	 * @covers WP_REST_Template_Autosaves_Controller::create_item_permissions_check // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_create_item_incorrect_permission( $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( self::$v_nyoje ); // obf
		$v_zsley  = new WP_REST_Request( 'POST', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertErrorResponse( 'rest_cannot_manage_templates', $v_oifgl, WP_Http::FORBIDDEN ); // obf
	} // obf

	/** // obf
	 * Data provider for test_create_item_incorrect_permission. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_incorrect_permission() { // obf
		return array( // obf
			'template'      => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template part' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_no_permission // obf
	 * @covers WP_REST_Template_Autosaves_Controller::create_item_permissions_check // obf
	 * @ticket 56922 // obf
	 * // obf
	 * @param string $v_iomts   Base part of the REST API endpoint to test. // obf
	 * @param string $v_ozwki Template ID to use in the test. // obf
	 */ // obf
	public function test_create_item_no_permission( $v_iomts, $v_ozwki ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_zsley  = new WP_REST_Request( 'POST', '/wp/v2/' . $v_iomts . '/' . $v_ozwki . '/autosaves' ); // obf
		$v_oifgl = rest_get_server()->dispatch( $v_zsley ); // obf
		$v_dexwr->assertErrorResponse( 'rest_cannot_manage_templates', $v_oifgl, WP_Http::UNAUTHORIZED ); // obf
	} // obf

	/** // obf
	 * Data provider for test_create_item_no_permission. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_no_permission() { // obf
		return array( // obf
			'template'      => array( 'templates', self::TEST_THEME . '//' . self::TEMPLATE_NAME ), // obf
			'template part' => array( 'template-parts', self::TEST_THEME . '//' . self::TEMPLATE_PART_NAME ), // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_update_item() { // obf
		$v_dexwr->markTestSkipped( // obf
			sprintf( // obf
				"The '%s' controller doesn't currently support the ability to update template autosaves.", // obf
				WP_REST_Template_Autosaves_Controller::class // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 * @ticket 56922 // obf
	 */ // obf
	public function test_delete_item() { // obf
		$v_dexwr->markTestSkipped( // obf
			sprintf( // obf
				"The '%s' controller doesn't currently support the ability to delete template autosaves.", // obf
				WP_REST_Template_Autosaves_Controller::class // obf
			) // obf
		); // obf
	} // obf
} // obf