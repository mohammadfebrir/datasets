

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Global_Styles_Revisions_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @covers WP_REST_Global_Styles_Revisions_Controller // obf
 * // obf
 * @group restapi-global-styles // obf
 * @group restapi // obf
 */ // obf
class WP_REST_Global_Styles_Revisions_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_feobb; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_awbug; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_oxvzg; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_vyhcg; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_uakyt; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	private $v_itjsk; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_bgtze; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	private $v_cxjkn; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_hzkau; // obf

	/** // obf
	 * @var array // obf
	 */ // obf
	private $v_ilwhv; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	private $v_tircw; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_zedbl Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetupBeforeClass( $v_zedbl ) { // obf
		self::$v_feobb        = $v_zedbl->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_awbug = $v_zedbl->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_oxvzg       = $v_zedbl->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_feobb ); // obf
		// This creates the global styles for the current theme. // obf
		self::$v_vyhcg = $v_zedbl->post->create( // obf
			array( // obf
				'post_content' => '{"version": ' . WP_Theme_JSON::LATEST_SCHEMA . ', "isGlobalStylesUserThemeJSON": true }', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => __( 'Custom Styles', 'default' ), // obf
				'post_type'    => 'wp_global_styles', // obf
				'post_name'    => 'wp-global-styles-tt1-blocks-revisions', // obf
				'tax_input'    => array( // obf
					'wp_theme' => 'tt1-blocks', // obf
				), // obf
			) // obf
		); // obf

		// Update post to create a new revisions. // obf
		$v_xvipd = array( // obf
			'ID'           => self::$v_vyhcg, // obf
			'post_content' => wp_json_encode( // obf
				array( // obf
					'version'                     => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'isGlobalStylesUserThemeJSON' => true, // obf
					'styles'                      => array( // obf
						'color' => array( // obf
							'background' => 'hotpink', // obf
						), // obf
					), // obf
					'settings'                    => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'custom' => array( // obf
									array( // obf
										'name'  => 'Ghost', // obf
										'slug'  => 'ghost', // obf
										'color' => 'ghost', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				) // obf
			), // obf
		); // obf

		wp_update_post( $v_xvipd, true ); // obf

		$v_xvipd = array( // obf
			'ID'           => self::$v_vyhcg, // obf
			'post_content' => wp_json_encode( // obf
				array( // obf
					'version'                     => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'isGlobalStylesUserThemeJSON' => true, // obf
					'styles'                      => array( // obf
						'color' => array( // obf
							'background' => 'lemonchiffon', // obf
						), // obf
					), // obf
					'settings'                    => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'custom' => array( // obf
									array( // obf
										'name'  => 'Gwanda', // obf
										'slug'  => 'gwanda', // obf
										'color' => 'gwanda', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				) // obf
			), // obf
		); // obf

		wp_update_post( $v_xvipd, true ); // obf

		$v_xvipd = array( // obf
			'ID'           => self::$v_vyhcg, // obf
			'post_content' => wp_json_encode( // obf
				array( // obf
					'version'                     => WP_Theme_JSON::LATEST_SCHEMA, // obf
					'isGlobalStylesUserThemeJSON' => true, // obf
					'styles'                      => array( // obf
						'color' => array( // obf
							'background' => 'chocolate', // obf
						), // obf
					), // obf
					'settings'                    => array( // obf
						'color' => array( // obf
							'palette' => array( // obf
								'custom' => array( // obf
									array( // obf
										'name'  => 'Stacy', // obf
										'slug'  => 'stacy', // obf
										'color' => 'stacy', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				) // obf
			), // obf
		); // obf

		wp_update_post( $v_xvipd, true ); // obf
		wp_set_current_user( 0 ); // obf
	} // obf

	/** // obf
	 * Removes users after our tests run. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_feobb ); // obf
		self::delete_user( self::$v_awbug ); // obf
		self::delete_user( self::$v_oxvzg ); // obf
	} // obf

	/** // obf
	 * Sets up before tests. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'tt1-blocks' ); // obf
		$v_zyvzn             = wp_get_post_revisions( self::$v_vyhcg ); // obf
		$v_nclwq->total_revisions = count( $v_zyvzn ); // obf

		$v_nclwq->revision_1    = array_pop( $v_zyvzn ); // obf
		$v_nclwq->revision_1_id = $v_nclwq->revision_1->ID; // obf

		$v_nclwq->revision_2    = array_pop( $v_zyvzn ); // obf
		$v_nclwq->revision_2_id = $v_nclwq->revision_2->ID; // obf

		$v_nclwq->revision_3    = array_pop( $v_zyvzn ); // obf
		$v_nclwq->revision_3_id = $v_nclwq->revision_3->ID; // obf
	} // obf

	/** // obf
	 * @ticket 58524 // obf
	 * @ticket 59810 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_xeemk = rest_get_server()->get_routes(); // obf
		$v_nclwq->assertArrayHasKey( // obf
			'/wp/v2/global-styles/(?P<parent>[\d]+)/revisions', // obf
			$v_xeemk, // obf
			'Global style revisions based on the given parentID route does not exist.' // obf
		); // obf
		$v_nclwq->assertArrayHasKey( // obf
			'/wp/v2/global-styles/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', // obf
			$v_xeemk, // obf
			'Single global style revisions based on the given parentID and revision ID route does not exist.' // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_missing_parent( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf
		$v_hdwpf  = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( 'rest_post_invalid_parent', $v_bksis, 404 ); // obf
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
	 * Utility function to check the items in WP_REST_Global_Styles_Controller::get_items // obf
	 * against the expected values. // obf
	 * // obf
	 * @ticket 58524 // obf
	 */ // obf
	protected function check_get_revision_response( $v_mubfk, $v_xoaty ) { // obf
		$v_nclwq->assertSame( (int) $v_xoaty->post_author, $v_mubfk['author'], 'Check that the revision item `author` exists.' ); // obf
		$v_nclwq->assertSame( mysql_to_rfc3339( $v_xoaty->post_date ), $v_mubfk['date'], 'Check that the revision item `date` exists.' ); // obf
		$v_nclwq->assertSame( mysql_to_rfc3339( $v_xoaty->post_date_gmt ), $v_mubfk['date_gmt'], 'Check that the revision item `date_gmt` exists.' ); // obf
		$v_nclwq->assertSame( mysql_to_rfc3339( $v_xoaty->post_modified ), $v_mubfk['modified'], 'Check that the revision item `modified` exists.' ); // obf
		$v_nclwq->assertSame( mysql_to_rfc3339( $v_xoaty->post_modified_gmt ), $v_mubfk['modified_gmt'], 'Check that the revision item `modified_gmt` exists.' ); // obf
		$v_nclwq->assertSame( $v_xoaty->post_parent, $v_mubfk['parent'], 'Check that an id for the parent exists.' ); // obf

		// Global styles. // obf
		$v_pdwnj = ( new WP_Theme_JSON( json_decode( $v_xoaty->post_content, true ), 'custom' ) )->get_raw_data(); // obf
		$v_nclwq->assertSame( // obf
			$v_pdwnj['settings'], // obf
			$v_mubfk['settings'], // obf
			'Check that the revision settings exist in the response.' // obf
		); // obf
		$v_nclwq->assertSame( // obf
			$v_pdwnj['styles'], // obf
			$v_mubfk['styles'], // obf
			'Check that the revision styles match the updated styles.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_hdwpf  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_byzzg     = $v_bksis->get_data(); // obf

		$v_nclwq->assertSame( 200, $v_bksis->get_status(), 'Response status is 200.' ); // obf
		$v_nclwq->assertCount( $v_nclwq->total_revisions, $v_byzzg, 'Check that correct number of revisions exists.' ); // obf

		// Reverse chronology. // obf
		$v_nclwq->assertSame( $v_nclwq->revision_3_id, $v_byzzg[0]['id'] ); // obf
		$v_nclwq->check_get_revision_response( $v_byzzg[0], $v_nclwq->revision_3 ); // obf

		$v_nclwq->assertSame( $v_nclwq->revision_2_id, $v_byzzg[1]['id'] ); // obf
		$v_nclwq->check_get_revision_response( $v_byzzg[1], $v_nclwq->revision_2 ); // obf

		$v_nclwq->assertSame( $v_nclwq->revision_1_id, $v_byzzg[2]['id'] ); // obf
		$v_nclwq->check_get_revision_response( $v_byzzg[2], $v_nclwq->revision_1 ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_items_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_feobb ); // obf
		$v_hdwpf  = new WP_REST_Request( 'HEAD', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertSame( 200, $v_bksis->get_status(), 'Response status is 200.' ); // obf
		$v_nclwq->assertSame( array(), $v_bksis->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_eiqme The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_eiqme ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf
		$v_hdwpf = new WP_REST_Request( 'GET', sprintf( $v_eiqme, self::$v_vyhcg, $v_nclwq->revision_1_id ) ); // obf
		$v_hdwpf->set_param( '_fields', 'id' ); // obf
		$v_fubyb   = rest_get_server(); // obf
		$v_bksis = $v_fubyb->dispatch( $v_hdwpf ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_bksis = apply_filters( 'rest_post_dispatch', $v_bksis, $v_fubyb, $v_hdwpf ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_nclwq->assertSame( 200, $v_bksis->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/global-styles/%d/revisions/%d' ), // obf
			'get_items request' => array( '/wp/v2/global-styles/%d/revisions' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59810 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_hdwpf  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions/' . $v_nclwq->revision_1_id ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_byzzg     = $v_bksis->get_data(); // obf

		$v_nclwq->assertSame( 200, $v_bksis->get_status(), 'Response status is 200.' ); // obf
		$v_nclwq->check_get_revision_response( $v_byzzg, $v_nclwq->revision_1 ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item // obf
	 * @covers WP_REST_Global_Styles_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_should_return_no_response_body_for_head_requests() { // obf
		wp_set_current_user( self::$v_feobb ); // obf
		$v_hdwpf  = new WP_REST_Request( 'HEAD', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions/' . $v_nclwq->revision_1_id ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertSame( 200, $v_bksis->get_status(), 'Response status is 200.' ); // obf
		$v_nclwq->assertSame( array(), $v_bksis->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 59810 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_revision // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_revision_id_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vktim  = 'rest_post_invalid_id'; // obf
		$v_ddpcw = 404; // obf
		$v_hdwpf         = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions/20000001' ); // obf
		$v_bksis        = rest_get_server()->dispatch( $v_hdwpf ); // obf

		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_eligible_roles() { // obf
		wp_set_current_user( self::$v_awbug ); // obf
		$v_pdwnj              = array( // obf
			'version'                     => WP_Theme_JSON::LATEST_SCHEMA, // obf
			'isGlobalStylesUserThemeJSON' => true, // obf
			'styles'                      => array( // obf
				'color' => array( // obf
					'background' => 'whitesmoke', // obf
				), // obf
			), // obf
			'settings'                    => array(), // obf
		); // obf
		$v_mzwto = array( // obf
			'ID'           => self::$v_vyhcg, // obf
			'post_content' => wp_json_encode( $v_pdwnj ), // obf
		); // obf

		wp_update_post( $v_mzwto, true ); // obf

		$v_hdwpf  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_byzzg     = $v_bksis->get_data(); // obf

		$v_nclwq->assertCount( $v_nclwq->total_revisions + 1, $v_byzzg, 'Check that extra revision exist' ); // obf
		$v_nclwq->assertSame( self::$v_awbug, $v_byzzg[0]['author'], 'Check that second author id returns expected value.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items with context arg. // obf
	 */ // obf
	public function test_get_item_embed_context() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'context', 'embed' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_mhsfd   = array( // obf
			'author', // obf
			'date', // obf
			'id', // obf
			'parent', // obf
		); // obf
		$v_byzzg     = $v_bksis->get_data(); // obf
		$v_nclwq->assertSameSets( $v_mhsfd, array_keys( $v_byzzg[0] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_hdwpf    = new WP_REST_Request( 'OPTIONS', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis   = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_byzzg       = $v_bksis->get_data(); // obf
		$v_nqjyi = $v_byzzg['schema']['properties']; // obf

		$v_nclwq->assertCount( 9, $v_nqjyi, 'Schema properties array has exactly 9 elements.' ); // obf
		$v_nclwq->assertArrayHasKey( 'id', $v_nqjyi, 'Schema properties array has "id" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'styles', $v_nqjyi, 'Schema properties array has "styles" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'settings', $v_nqjyi, 'Schema properties array has "settings" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'parent', $v_nqjyi, 'Schema properties array has "parent" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'author', $v_nqjyi, 'Schema properties array has "author" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'date', $v_nqjyi, 'Schema properties array has "date" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'date_gmt', $v_nqjyi, 'Schema properties array has "date_gmt" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'modified', $v_nqjyi, 'Schema properties array has "modified" key.' ); // obf
		$v_nclwq->assertArrayHasKey( 'modified_gmt', $v_nqjyi, 'Schema properties array has "modified_gmt" key.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 60131 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_item_permissions_check // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_permissions_check( $v_oessy ) { // obf
		wp_set_current_user( self::$v_oxvzg ); // obf
		$v_hdwpf  = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf

		$v_nclwq->assertErrorResponse( 'rest_cannot_read', $v_bksis, 403 ); // obf
	} // obf

	/** // obf
	 * Tests the pagination header of the first page. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_header_of_the_first_page( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_icwke  = '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions'; // obf
		$v_vpntr    = 2; // obf
		$v_yvcke = (int) ceil( $v_nclwq->total_revisions / $v_vpntr ); // obf
		$v_raoah        = 1;  // First page. // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, $v_icwke ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_zymel  = $v_bksis->get_headers(); // obf
		$v_nclwq->assertSame( $v_nclwq->total_revisions, $v_zymel['X-WP-Total'] ); // obf
		$v_nclwq->assertSame( $v_yvcke, $v_zymel['X-WP-TotalPages'] ); // obf
		$v_iichv = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah + 1, // obf
			), // obf
			rest_url( $v_icwke ) // obf
		); // obf
		$v_nclwq->assertStringNotContainsString( 'rel="prev"', $v_zymel['Link'] ); // obf
		$v_nclwq->assertStringContainsString( '<' . $v_iichv . '>; rel="next"', $v_zymel['Link'] ); // obf
	} // obf

	/** // obf
	 * Tests the pagination header of the last page. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_pagination_header_of_the_last_page // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_header_of_the_last_page( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_icwke  = '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions'; // obf
		$v_vpntr    = 2; // obf
		$v_yvcke = (int) ceil( $v_nclwq->total_revisions / $v_vpntr ); // obf
		$v_raoah        = 2;  // Last page. // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, $v_icwke ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_zymel  = $v_bksis->get_headers(); // obf
		$v_nclwq->assertSame( $v_nclwq->total_revisions, $v_zymel['X-WP-Total'] ); // obf
		$v_nclwq->assertSame( $v_yvcke, $v_zymel['X-WP-TotalPages'] ); // obf
		$v_mgnam = add_query_arg( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah - 1, // obf
			), // obf
			rest_url( $v_icwke ) // obf
		); // obf
		$v_nclwq->assertStringContainsString( '<' . $v_mgnam . '>; rel="prev"', $v_zymel['Link'] ); // obf
	} // obf

	/** // obf
	 * Tests that invalid 'per_page' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_invalid_per_page_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_per_page_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = -1; // Invalid number. // obf
		$v_vktim  = 'rest_invalid_param'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'per_page', $v_vpntr ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that out of bounds 'page' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_out_of_bounds_page_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_out_of_bounds_page_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_yvcke     = (int) ceil( $v_nclwq->total_revisions / $v_vpntr ); // obf
		$v_raoah            = $v_yvcke + 1; // Out of bound page. // obf
		$v_vktim  = 'rest_revision_invalid_page_number'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that impossibly high 'page' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_invalid_max_pages_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_max_pages_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_raoah            = REST_TESTS_IMPOSSIBLY_HIGH_NUMBER; // Invalid number. // obf
		$v_vktim  = 'rest_revision_invalid_page_number'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that the default query should fetch all revisions. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_default_query_should_fetch_all_revisions // obf
	 * // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_default_query_should_fetch_all_revisions() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_fjvmo = $v_nclwq->total_revisions; // obf

		$v_hdwpf  = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertCount( $v_fjvmo, $v_bksis->get_data() ); // obf
	} // obf

	/** // obf
	 * Tests that 'offset' query shouldn't work without 'per_page' (fallback -1). // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_offset_should_not_work_without_per_page // obf
	 * // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_offset_should_not_work_without_per_page() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_jlurx         = 1; // obf
		$v_fjvmo = $v_nclwq->total_revisions; // obf

		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'offset', $v_jlurx ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertCount( $v_fjvmo, $v_bksis->get_data() ); // obf
	} // obf

	/** // obf
	 * Tests that 'offset' query should work with 'per_page'. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_offset_should_work_with_per_page // obf
	 * // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_offset_should_work_with_per_page() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr       = 2; // obf
		$v_jlurx         = 1; // obf
		$v_fjvmo = 2; // obf

		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertCount( $v_fjvmo, $v_bksis->get_data() ); // obf
	} // obf

	/** // obf
	 * Tests that 'offset' query should take priority over 'page'. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_offset_should_take_priority_over_page // obf
	 * // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_offset_should_take_priority_over_page() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr       = 2; // obf
		$v_jlurx         = 1; // obf
		$v_raoah           = 1; // obf
		$v_fjvmo = 2; // obf

		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertCount( $v_fjvmo, $v_bksis->get_data() ); // obf
	} // obf

	/** // obf
	 * Tests that 'offset' query, as the total revisions count, should return empty data. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_total_revisions_offset_should_return_empty_data // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_total_revisions_offset_should_return_empty_data( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_jlurx          = $v_nclwq->total_revisions; // obf
		$v_vktim  = 'rest_revision_invalid_offset_number'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that out of bound 'offset' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_out_of_bound_offset_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_out_of_bound_offset_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_jlurx          = $v_nclwq->total_revisions + 1; // obf
		$v_vktim  = 'rest_revision_invalid_offset_number'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that impossible high number for 'offset' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_impossible_high_number_offset_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_impossible_high_number_offset_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_jlurx          = REST_TESTS_IMPOSSIBLY_HIGH_NUMBER; // obf
		$v_vktim  = 'rest_revision_invalid_offset_number'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that invalid 'offset' query should error. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_invalid_offset_should_error // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 58524 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 * // obf
	 * @param string $v_oessy The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_offset_should_error( $v_oessy ) { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr        = 2; // obf
		$v_jlurx          = 'moreplease'; // obf
		$v_vktim  = 'rest_invalid_param'; // obf
		$v_ddpcw = 400; // obf

		$v_hdwpf = new WP_REST_Request( $v_oessy, '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => $v_jlurx, // obf
				'per_page' => $v_vpntr, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( $v_vktim, $v_bksis, $v_ddpcw ); // obf
	} // obf

	/** // obf
	 * Tests that out of bounds 'page' query should not error when offset is provided, // obf
	 * because it takes precedence. // obf
	 * // obf
	 * Duplicate of WP_Test_REST_Revisions_Controller::test_get_items_out_of_bounds_page_should_not_error_if_offset // obf
	 * // obf
	 * @ticket 58524 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_items_out_of_bounds_page_should_not_error_if_offset() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		$v_vpntr       = 2; // obf
		$v_yvcke    = (int) ceil( $v_nclwq->total_revisions / $v_vpntr ); // obf
		$v_raoah           = $v_yvcke + 1; // Out of bound page. // obf
		$v_fjvmo = 2; // obf

		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_query_params( // obf
			array( // obf
				'offset'   => 1, // obf
				'per_page' => $v_vpntr, // obf
				'page'     => $v_raoah, // obf
			) // obf
		); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertCount( $v_fjvmo, $v_bksis->get_data() ); // obf
	} // obf


	/** // obf
	 * Tests for the pagination. // obf
	 * // obf
	 * @ticket 62292 // obf
	 * // obf
	 * @covers WP_REST_Global_Styles_Controller::get_items // obf
	 */ // obf
	public function test_get_global_styles_revisions_pagination() { // obf
		wp_set_current_user( self::$v_feobb ); // obf

		// Test offset. // obf
		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'offset', 1 ); // obf
		$v_hdwpf->set_param( 'per_page', 1 ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertSame( 200, $v_bksis->get_status() ); // obf
		$v_byzzg = $v_bksis->get_data(); // obf
		$v_nclwq->assertCount( 1, $v_byzzg ); // obf
		$v_nclwq->assertSame( 3, $v_bksis->get_headers()['X-WP-Total'] ); // obf
		$v_nclwq->assertSame( 3, $v_bksis->get_headers()['X-WP-TotalPages'] ); // obf

		// Test paged. // obf
		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'page', 2 ); // obf
		$v_hdwpf->set_param( 'per_page', 2 ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertSame( 200, $v_bksis->get_status() ); // obf
		$v_byzzg = $v_bksis->get_data(); // obf
		$v_nclwq->assertCount( 1, $v_byzzg ); // obf
		$v_nclwq->assertSame( 3, $v_bksis->get_headers()['X-WP-Total'] ); // obf
		$v_nclwq->assertSame( 2, $v_bksis->get_headers()['X-WP-TotalPages'] ); // obf

		// Test out of bounds. // obf
		$v_hdwpf = new WP_REST_Request( 'GET', '/wp/v2/global-styles/' . self::$v_vyhcg . '/revisions' ); // obf
		$v_hdwpf->set_param( 'page', 4 ); // obf
		$v_hdwpf->set_param( 'per_page', 6 ); // obf
		$v_bksis = rest_get_server()->dispatch( $v_hdwpf ); // obf
		$v_nclwq->assertErrorResponse( 'rest_revision_invalid_page_number', $v_bksis, 400 ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not implement get_context_param(). // obf
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
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf
} // obf