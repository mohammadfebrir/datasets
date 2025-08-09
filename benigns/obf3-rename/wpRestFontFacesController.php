

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Font_Faces_Controller_Test functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.5.0 // obf
 * // obf
 * @group restapi // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @coversDefaultClass WP_REST_Font_Faces_Controller // obf
 */ // obf
class Tests_REST_WpRestFontFacesController extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_yagvb; // obf
	protected static $v_vyhep; // obf

	protected static $v_ttsel; // obf
	protected static $v_atasg; // obf

	protected static $v_rcdsm; // obf
	protected static $v_ytlge; // obf

	private static $v_ebqyr = array(); // obf

	protected static $v_whawk = array( // obf
		'fontFamily' => '"Open Sans"', // obf
		'fontWeight' => '400', // obf
		'fontStyle'  => 'normal', // obf
		'src'        => 'https://fonts.gstatic.com/s/open-sans/v30/KFOkCnqEu92Fr1MmgWxPKTM1K9nz.ttf', // obf
	); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iidlm ) { // obf
		self::$v_ttsel       = Tests_REST_WpRestFontFamiliesController::create_font_family_post(); // obf
		self::$v_atasg = Tests_REST_WpRestFontFamiliesController::create_font_family_post(); // obf

		self::$v_rcdsm = self::create_font_face_post( // obf
			self::$v_ttsel, // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '400', // obf
				'fontStyle'  => 'normal', // obf
				'src'        => home_url( '/wp-content/fonts/open-sans-medium.ttf' ), // obf
			) // obf
		); // obf
		self::$v_ytlge = self::create_font_face_post( // obf
			self::$v_ttsel, // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '900', // obf
				'fontStyle'  => 'normal', // obf
				'src'        => home_url( '/wp-content/fonts/open-sans-bold.ttf' ), // obf
			) // obf
		); // obf

		self::$v_yagvb  = $v_iidlm->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_vyhep = $v_iidlm->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_ebqyr = array(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_yagvb ); // obf
		self::delete_user( self::$v_vyhep ); // obf

		wp_delete_post( self::$v_ttsel, true ); // obf
		wp_delete_post( self::$v_atasg, true ); // obf
		wp_delete_post( self::$v_rcdsm, true ); // obf
		wp_delete_post( self::$v_ytlge, true ); // obf
	} // obf

	public function tear_down() { // obf
		foreach ( self::$v_ebqyr as $v_ldmzz ) { // obf
			wp_delete_post( $v_ldmzz, true ); // obf
		} // obf
		self::$v_ebqyr = array(); // obf
		parent::tear_down(); // obf
	} // obf

	public static function create_font_face_post( $v_fsleb, $v_bsein = array() ) { // obf
		$v_bsein = array_merge( self::$v_whawk, $v_bsein ); // obf
		$v_ztjjt    = WP_Font_Utils::get_font_face_slug( $v_bsein ); // obf
		$v_ldmzz  = self::factory()->post->create( // obf
			wp_slash( // obf
				array( // obf
					'post_type'    => 'wp_font_face', // obf
					'post_status'  => 'publish', // obf
					'post_title'   => $v_ztjjt, // obf
					'post_name'    => sanitize_title( $v_ztjjt ), // obf
					'post_content' => wp_json_encode( $v_bsein ), // obf
					'post_parent'  => $v_fsleb, // obf
				) // obf
			) // obf
		); // obf

		self::$v_ebqyr[] = $v_ldmzz; // obf

		return $v_ldmzz; // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_umoae = rest_get_server()->get_routes(); // obf
		$v_brfei->assertArrayHasKey( // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces', // obf
			$v_umoae, // obf
			'Font faces collection for the given font family does not exist' // obf
		); // obf
		$v_brfei->assertCount( // obf
			2, // obf
			$v_umoae['/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces'], // obf
			'Font faces collection for the given font family does not have exactly two elements' // obf
		); // obf
		$v_brfei->assertArrayHasKey( // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces/(?P<id>[\d]+)', // obf
			$v_umoae, // obf
			'Single font face route for the given font family does not exist' // obf
		); // obf
		$v_brfei->assertCount( // obf
			2, // obf
			$v_umoae['/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces/(?P<id>[\d]+)'], // obf
			'Font faces collection for the given font family does not have exactly two elements' // obf
		); // obf
	} // obf

	public function test_font_faces_no_autosave_routes() { // obf
		$v_umoae = rest_get_server()->get_routes(); // obf
		$v_brfei->assertArrayNotHasKey( // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces/(?P<id>[\d]+)/autosaves', // obf
			$v_umoae, // obf
			'Font faces autosaves route exists.' // obf
		); // obf
		$v_brfei->assertArrayNotHasKey( // obf
			'/wp/v2/font-families/(?P<font_family_id>[\d]+)/font-faces/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', // obf
			$v_umoae, // obf
			'Font faces autosaves by id route exists.' // obf
		); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// See test_get_context_param(). // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_context_param // obf
	 * // obf
	 * @covers WP_REST_Font_Faces_Controller::get_context_param // obf
	 * // obf
	 * @param bool $v_quvwa Whether to test a single route. // obf
	 */ // obf
	public function test_get_context_param( $v_quvwa ) { // obf
		$v_ycsls = '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces'; // obf
		if ( $v_quvwa ) { // obf
			$v_ycsls .= '/' . self::$v_rcdsm; // obf
		} // obf

		$v_rrqsw  = new WP_REST_Request( 'OPTIONS', $v_ycsls ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_ziglo = $v_ooicq['endpoints'][0]; // obf
		$v_brfei->assertArrayNotHasKey( 'allow_batch', $v_ziglo, 'The allow_batch property should not exist in the endpoint data.' ); // obf
		$v_brfei->assertSame( 'view', $v_ziglo['args']['context']['default'], 'The endpoint\'s args::context::default should be set to view.' ); // obf
		$v_brfei->assertSame( array( 'view', 'embed', 'edit' ), $v_ziglo['args']['context']['enum'], 'The endpoint\'s args::context::enum should be set to [ view, embed, edit ].' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_context_param() { // obf
		return array( // obf
			'Collection' => array( false ), // obf
			'Single'     => array( true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200' ); // obf
		$v_brfei->assertCount( 2, $v_ooicq, 'There should be 2 properties in the response data.' ); // obf
		$v_brfei->assertArrayHasKey( '_links', $v_ooicq[0], 'The _links property should exist in the response data 0.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq[0], self::$v_ytlge, $v_ooicq[0]['_links'] ); // obf
		$v_brfei->assertArrayHasKey( '_links', $v_ooicq[1], 'The _links property should exist in the response data 1.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq[1], self::$v_rcdsm, $v_ooicq[1]['_links'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_items // obf
	 */ // obf
	public function test_get_items_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_read', $v_fbqae, 401, 'The response should return an error with a "rest_cannot_read" code and 401 status.' ); // obf

		wp_set_current_user( self::$v_vyhep ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_read', $v_fbqae, 403, 'The response should return an error with a "rest_cannot_read" code and 403 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_items // obf
	 */ // obf
	public function test_get_items_missing_parent() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/font-faces' ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_post_invalid_parent', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, self::$v_rcdsm, $v_fbqae->get_links() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_removes_extra_settings() { // obf
		$v_frqcj = self::create_font_face_post( self::$v_ttsel, array( 'extra' => array() ) ); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_brfei->assertArrayHasKey( 'font_face_settings', $v_ooicq, 'The font_face_settings property should exist in the response data.' ); // obf
		$v_brfei->assertArrayNotHasKey( 'extra', $v_ooicq['font_face_settings'], 'The extra property should exist in the font_face_settings data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_malformed_post_content_returns_empty_settings() { // obf
		$v_frqcj = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'wp_font_face', // obf
				'post_parent'  => self::$v_ttsel, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'invalid', // obf
			) // obf
		); // obf

		self::$v_ebqyr[] = $v_frqcj; // obf

		$v_vmwvd = array( // obf
			'fontFamily' => '', // obf
			'src'        => array(), // obf
		); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_brfei->assertArrayHasKey( 'font_face_settings', $v_ooicq, 'The font_face_settings property should exist in the response data.' ); // obf
		$v_brfei->assertSame( $v_vmwvd, $v_ooicq['font_face_settings'], 'The empty settings should exist in the font_face_settings data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item_invalid_font_face_id() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_post_invalid_id', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_rrqsw = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . self::$v_rcdsm ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_read', $v_fbqae, 401, 'The response should return an error with a "rest_cannot_read" code and 401 status.' ); // obf

		wp_set_current_user( self::$v_vyhep ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_read', $v_fbqae, 403, 'The response should return an error with a "rest_cannot_read" code and 403 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item_missing_parent() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_post_invalid_parent', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item_valid_parent_id() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_brfei->assertSame( self::$v_ttsel, $v_ooicq['parent'], 'The returned parent id should match the font family id.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_get_item_invalid_parent_id() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_atasg . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_font_face_parent_id_mismatch', $v_fbqae, 404 ); // obf

		$v_kgoqr = 'The font face does not belong to the specified font family with id of "' . self::$v_atasg . '".'; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_fbqae->as_error()->get_error_messages()[0], 'The message must contain the correct parent ID.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_yzsgb = $v_brfei->setup_font_file_upload( array( 'woff2' ) ); // obf

		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'fontFamily' => '"Open Sans"', // obf
					'fontWeight' => '200', // obf
					'fontStyle'  => 'normal', // obf
					'src'        => array_keys( $v_yzsgb )[0], // obf
				) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, $v_ooicq['id'], $v_fbqae->get_links() ); // obf
		$v_brfei->check_file_meta( $v_ooicq['id'], array( $v_ooicq['font_face_settings']['src'] ) ); // obf

		$v_bsein = $v_ooicq['font_face_settings']; // obf
		unset( $v_bsein['src'] ); // obf
		$v_brfei->assertSame( // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '200', // obf
				'fontStyle'  => 'normal', // obf
			), // obf
			$v_bsein, // obf
			'The font_face_settings data should match the expected data.' // obf
		); // obf

		$v_brfei->assertSame( self::$v_ttsel, $v_ooicq['parent'], 'The returned parent id should match the font family id.' ); // obf
	} // obf

	/** // obf
	 * Ensure that setting a subdirectory on font uploads stores and deletes files as expected. // obf
	 * // obf
	 * @ticket 61297 // obf
	 * // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_sub_dir() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		add_filter( // obf
			'font_dir', // obf
			function ( $v_ajwsu ) { // obf
				$v_xlfmd             = '/subdir'; // obf
				$v_ajwsu['subdir'] = $v_xlfmd; // obf
				$v_ajwsu['path']  .= $v_xlfmd; // obf
				$v_ajwsu['url']   .= $v_xlfmd; // obf
				return $v_ajwsu; // obf
			} // obf
		); // obf

		$v_yzsgb = $v_brfei->setup_font_file_upload( array( 'woff2' ) ); // obf

		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'fontFamily' => '"Open Sans"', // obf
					'fontWeight' => '200', // obf
					'fontStyle'  => 'normal', // obf
					'src'        => array_keys( $v_yzsgb )[0], // obf
				) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, $v_ooicq['id'], $v_fbqae->get_links() ); // obf
		$v_brfei->check_file_meta( $v_ooicq['id'], array( $v_ooicq['font_face_settings']['src'] ) ); // obf

		$v_bsein = $v_ooicq['font_face_settings']; // obf
		unset( $v_bsein['src'] ); // obf
		$v_brfei->assertSame( // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '200', // obf
				'fontStyle'  => 'normal', // obf
			), // obf
			$v_bsein, // obf
			'The font_face_settings data should match the expected data.' // obf
		); // obf

		$v_ncqsb = WP_CONTENT_DIR . '/uploads/fonts/subdir/' . reset( $v_yzsgb )['name']; // obf
		$v_iskwm = 'subdir/' . reset( $v_yzsgb )['name']; // obf
		$v_brfei->assertFileExists( $v_ncqsb, 'The font file should exist in the expected subdirectory.' ); // obf
		$v_brfei->assertSame( $v_iskwm, get_post_meta( $v_ooicq['id'], '_wp_font_face_file', true ), 'The post meta should match the expected subdirectory.' ); // obf
		$v_brfei->assertSame( self::$v_ttsel, $v_ooicq['parent'], 'The returned parent id should match the font family id.' ); // obf

		// Delete the post. // obf
		wp_delete_post( $v_ooicq['id'], true ); // obf
		$v_brfei->assertFileDoesNotExist( $v_ncqsb, 'The font file should have been deleted when the post was deleted.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_with_multiple_font_files() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_yzsgb = $v_brfei->setup_font_file_upload( array( 'ttf', 'otf', 'woff', 'woff2' ) ); // obf

		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'fontFamily' => '"Open Sans"', // obf
					'fontWeight' => '200', // obf
					'fontStyle'  => 'normal', // obf
					'src'        => array_keys( $v_yzsgb ), // obf
				) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, $v_ooicq['id'], $v_fbqae->get_links() ); // obf
		$v_brfei->check_file_meta( $v_ooicq['id'], $v_ooicq['font_face_settings']['src'] ); // obf

		$v_bsein = $v_ooicq['font_face_settings']; // obf
		$v_brfei->assertCount( 4, $v_bsein['src'], 'There should be 4 items in the font_face_settings::src data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_invalid_file_type() { // obf
		$v_mhzcw = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_slcpd = wp_tempnam( 'canola.jpg' ); // obf
		copy( $v_mhzcw, $v_slcpd ); // obf

		$v_yzsgb = array( // obf
			'file-0' => array( // obf
				'name'      => 'canola.jpg', // obf
				'full_path' => 'canola.jpg', // obf
				'type'      => 'font/woff2', // obf
				'tmp_name'  => $v_slcpd, // obf
				'error'     => 0, // obf
				'size'      => filesize( $v_slcpd ), // obf
			), // obf
		); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array_merge( // obf
					self::$v_whawk, // obf
					array( // obf
						'fontWeight' => '200', // obf
						'src'        => array_keys( $v_yzsgb )[0], // obf
					) // obf
				) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_font_upload_invalid_file_type', $v_fbqae, 400 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_with_url_src() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'fontFamily' => '"Open Sans"', // obf
					'fontWeight' => '200', // obf
					'fontStyle'  => 'normal', // obf
					'src'        => 'https://fonts.gstatic.com/s/open-sans/v30/KFOkCnqEu92Fr1MmgWxPKTM1K9nz.ttf', // obf
				) // obf
			) // obf
		); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, $v_ooicq['id'], $v_fbqae->get_links() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_with_all_properties() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf

		$v_ndehi = array( // obf
			'fontFamily'            => '"Open Sans"', // obf
			'fontWeight'            => '300 500', // obf
			'fontStyle'             => 'oblique 30deg 50deg', // obf
			'fontDisplay'           => 'swap', // obf
			'fontStretch'           => 'expanded', // obf
			'ascentOverride'        => '70%', // obf
			'descentOverride'       => '30%', // obf
			'fontVariant'           => 'normal', // obf
			'fontFeatureSettings'   => '"swsh" 2', // obf
			'fontVariationSettings' => '"xhgt" 0.7', // obf
			'lineGapOverride'       => '10%', // obf
			'sizeAdjust'            => '90%', // obf
			'unicodeRange'          => 'U+0025-00FF, U+4??', // obf
			'preview'               => 'https://s.w.org/images/fonts/16.7/previews/open-sans/open-sans-400-normal.svg', // obf
			'src'                   => 'https://fonts.gstatic.com/s/open-sans/v30/KFOkCnqEu92Fr1MmgWxPKTM1K9nz.ttf', // obf
		); // obf

		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( 'font_face_settings', wp_json_encode( $v_ndehi ) ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf
		wp_delete_post( $v_ooicq['id'], true ); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->assertArrayHasKey( 'font_face_settings', $v_ooicq, 'The font_face_settings property should exist in the response data.' ); // obf
		$v_brfei->assertSame( $v_ndehi, $v_ooicq['font_face_settings'], 'The font_face_settings should match the expected properties.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_missing_parent() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/font-faces' ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( array_merge( self::$v_whawk, array( 'fontWeight' => '100' ) ) ) // obf
		); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_post_invalid_parent', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	public function test_create_item_with_duplicate_properties() { // obf
		$v_bsein = array( // obf
			'fontFamily' => '"Open Sans"', // obf
			'fontWeight' => '200', // obf
			'fontStyle'  => 'italic', // obf
			'src'        => home_url( '/wp-content/fonts/open-sans-italic-light.ttf' ), // obf
		); // obf
		self::create_font_face_post( self::$v_ttsel, $v_bsein ); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'font_face_settings', wp_json_encode( $v_bsein ) ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_duplicate_font_face', $v_fbqae, 400, 'The response should return an error for "rest_duplicate_font_face" with 400 status.' ); // obf
		$v_kgoqr = 'A font face matching those settings already exists.'; // obf
		$v_oiqlw          = $v_fbqae->as_error()->get_error_messages()[0]; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_oiqlw, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::validate_create_font_face_request // obf
	 */ // obf
	public function test_create_item_default_theme_json_version() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'fontFamily' => '"Open Sans"', // obf
					'fontWeight' => '200', // obf
					'src'        => 'https://fonts.gstatic.com/s/open-sans/v30/KFOkCnqEu92Fr1MmgWxPKTM1K9nz.ttf', // obf
				) // obf
			) // obf
		); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf
		wp_delete_post( $v_ooicq['id'], true ); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->assertArrayHasKey( 'theme_json_version', $v_ooicq, 'The theme_json_version property should exist in the response data.' ); // obf
		$v_brfei->assertSame( WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED, $v_ooicq['theme_json_version'], 'The default theme.json version should match the latest version supported by the controller.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_invalid_theme_json_version // obf
	 * // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 * // obf
	 * @param int $v_uhgza Version input to test. // obf
	 */ // obf
	public function test_create_item_invalid_theme_json_version( $v_uhgza ) { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', $v_uhgza ); // obf
		$v_rrqsw->set_param( 'font_face_settings', '' ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_invalid_param', $v_fbqae, 400 ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_invalid_theme_json_version() { // obf
		return array( // obf
			array( 1 ), // obf
			array( 4 ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_invalid_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Faces_Controller::validate_create_font_face_settings // obf
	 * // obf
	 * @param mixed $v_bsein Settings to test. // obf
	 */ // obf
	public function test_create_item_invalid_settings( $v_bsein ) { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( 'font_face_settings', wp_json_encode( $v_bsein ) ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_invalid_param', $v_fbqae, 400 ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_invalid_settings() { // obf
		return array( // obf
			'Missing fontFamily'     => array( // obf
				'settings' => array_diff_key( self::$v_whawk, array( 'fontFamily' => '' ) ), // obf
			), // obf
			'Empty fontFamily'       => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'fontFamily' => '' ) ), // obf
			), // obf
			'Wrong fontFamily type'  => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'fontFamily' => 1234 ) ), // obf
			), // obf
			'Invalid fontDisplay'    => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'fontDisplay' => 'invalid' ) ), // obf
			), // obf
			'Missing src'            => array( // obf
				'settings' => array_diff_key( self::$v_whawk, array( 'src' => '' ) ), // obf
			), // obf
			'Empty src string'       => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'src' => '' ) ), // obf
			), // obf
			'Empty src array'        => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'src' => array() ) ), // obf
			), // obf
			'Empty src array values' => array( // obf
				'settings' => array_merge( self::$v_whawk, array( '', '' ) ), // obf
			), // obf
			'Wrong src type'         => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'src' => 1234 ) ), // obf
			), // obf
			'Wrong src array types'  => array( // obf
				'settings' => array_merge( self::$v_whawk, array( 'src' => array( 1234, 5678 ) ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::validate_create_font_face_settings // obf
	 */ // obf
	public function test_create_item_invalid_settings_json() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( 'font_face_settings', 'invalid' ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_invalid_param', $v_fbqae, 400, 'The response should return an error for "rest_invalid_param" with 400 status.' ); // obf
		$v_kgoqr = 'font_face_settings parameter must be a valid JSON string.'; // obf
		$v_oiqlw          = $v_fbqae->as_error()->get_all_error_data()[0]['params']['font_face_settings']; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_oiqlw, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::validate_create_font_face_settings // obf
	 */ // obf
	public function test_create_item_invalid_file_src() { // obf
		$v_yzsgb = $v_brfei->setup_font_file_upload( array( 'woff2' ) ); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_xozsp     = 'invalid'; // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array_merge( self::$v_whawk, array( 'src' => $v_xozsp ) ) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_invalid_param', $v_fbqae, 400, 'The response should return an error for "rest_invalid_param" with 400 status.' ); // obf
		$v_kgoqr = 'font_face_settings[src] value "' . $v_xozsp . '" must be a valid URL or file reference.'; // obf
		$v_oiqlw          = $v_fbqae->as_error()->get_all_error_data()[0]['params']['font_face_settings']; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_oiqlw, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::validate_create_font_face_settings // obf
	 */ // obf
	public function test_create_item_missing_file_src() { // obf
		$v_yzsgb = $v_brfei->setup_font_file_upload( array( 'woff2', 'woff' ) ); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'theme_json_version', WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_rrqsw->set_param( // obf
			'font_face_settings', // obf
			wp_json_encode( // obf
				array_merge( self::$v_whawk, array( 'src' => array( array_keys( $v_yzsgb )[0] ) ) ) // obf
			) // obf
		); // obf
		$v_rrqsw->set_file_params( $v_yzsgb ); // obf

		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_invalid_param', $v_fbqae, 400, 'The response should return an error for "rest_invalid_param" with 400 status.' ); // obf
		$v_kgoqr = 'File ' . array_keys( $v_yzsgb )[1] . ' must be used in font_face_settings[src].'; // obf
		$v_oiqlw          = $v_fbqae->as_error()->get_all_error_data()[0]['params']['font_face_settings']; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_oiqlw, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_font_face_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Face_Controller::sanitize_font_face_settings // obf
	 * // obf
	 * @param string $v_bsein Settings to test. // obf
	 * @param string $v_ujkvq Expected settings result. // obf
	 */ // obf
	public function test_create_item_sanitize_font_face_settings( $v_bsein, $v_ujkvq ) { // obf
		$v_bsein = array_merge( self::$v_whawk, $v_bsein ); // obf
		$v_ujkvq = array_merge( self::$v_whawk, $v_ujkvq ); // obf

		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_rrqsw->set_param( 'font_face_settings', wp_json_encode( $v_bsein ) ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf
		wp_delete_post( $v_ooicq['id'], true ); // obf

		$v_brfei->assertSame( 201, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->assertSame( $v_ujkvq, $v_ooicq['font_face_settings'], 'The response font_face_settings should match.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_font_face_settings() { // obf
		return array( // obf
			'settings with tags, extra whitespace, new lines' => array( // obf
				'settings' => array( // obf
					'fontFamily'            => "   Open   Sans</style><script>alert('XSS');</script>\n    ", // obf
					'fontStyle'             => "   oblique 20deg 50deg</style><script>alert('XSS');</script>\n    ", // obf
					'fontWeight'            => "   200</style><script>alert('XSS');</script>\n    ", // obf
					'src'                   => "   https://example.com/</style><script>alert('XSS');</script>      ", // obf
					'fontStretch'           => "   expanded</style><script>alert('XSS');</script>\n    ", // obf
					'ascentOverride'        => "   70%</style><script>alert('XSS');</script>\n    ", // obf
					'descentOverride'       => "   30%</style><script>alert('XSS');</script>\n    ", // obf
					'fontVariant'           => "   normal</style><script>alert('XSS');</script>\n    ", // obf
					'fontFeatureSettings'   => "   \"swsh\" 2</style><script>alert('XSS');</script>\n    ", // obf
					'fontVariationSettings' => "   \"xhgt\" 0.7</style><script>alert('XSS');</script>\n    ", // obf
					'lineGapOverride'       => "   10%</style><script>alert('XSS');</script>\n    ", // obf
					'sizeAdjust'            => "   90%</style><script>alert('XSS');</script>\n    ", // obf
					'unicodeRange'          => "   U+0025-00FF, U+4??</style><script>alert('XSS');</script>\n    ", // obf
					'preview'               => "   https://example.com/</style><script>alert('XSS');</script>      ", // obf
				), // obf
				'expected' => array( // obf
					'fontFamily'            => '"Open Sans"', // obf
					'fontStyle'             => 'oblique 20deg 50deg', // obf
					'fontWeight'            => '200', // obf
					'src'                   => 'https://example.com//stylescriptalert(\'XSS\');/script%20%20%20%20%20%20', // obf
					'fontStretch'           => 'expanded', // obf
					'ascentOverride'        => '70%', // obf
					'descentOverride'       => '30%', // obf
					'fontVariant'           => 'normal', // obf
					'fontFeatureSettings'   => '"swsh" 2', // obf
					'fontVariationSettings' => '"xhgt" 0.7', // obf
					'lineGapOverride'       => '10%', // obf
					'sizeAdjust'            => '90%', // obf
					'unicodeRange'          => 'U+0025-00FF, U+4??', // obf
					'preview'               => 'https://example.com//stylescriptalert(\'XSS\');/script%20%20%20%20%20%20', // obf
				), // obf
			), // obf
			'multiword font family name with integer' => array( // obf
				'settings' => array( // obf
					'fontFamily' => 'Libre Barcode 128 Text', // obf
				), // obf
				'expected' => array( // obf
					'fontFamily' => '"Libre Barcode 128 Text"', // obf
				), // obf
			), // obf
			'multiword font family name'              => array( // obf
				'settings' => array( // obf
					'fontFamily' => 'B612 Mono', // obf
				), // obf
				'expected' => array( // obf
					'fontFamily' => '"B612 Mono"', // obf
				), // obf
			), // obf
			'comma-separated font family names'       => array( // obf
				'settings' => array( // obf
					'fontFamily' => 'Open Sans, Noto Sans, sans-serif', // obf
				), // obf
				'expected' => array( // obf
					'fontFamily' => '"Open Sans", "Noto Sans", sans-serif', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::create_item // obf
	 */ // obf
	// public function test_create_item_no_permission() {} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::update_item // obf
	 */ // obf
	public function test_update_item() { // obf
		$v_rrqsw  = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_no_route', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_frqcj = self::create_font_face_post( self::$v_ttsel ); // obf
		$v_rrqsw      = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_rrqsw->set_param( 'force', true ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 201.' ); // obf
		$v_brfei->assertNull( get_post( $v_frqcj ), 'The deleted post should not exist.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_frqcj = self::create_font_face_post( self::$v_ttsel ); // obf

		// Attempt trashing. // obf
		$v_rrqsw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_trash_not_supported', $v_fbqae, 501, 'The response should return an error for "rest_trash_not_supported" with 501 status.' ); // obf

		$v_rrqsw->set_param( 'force', 'false' ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_trash_not_supported', $v_fbqae, 501, 'When "force" is false, the response should return an error for "rest_trash_not_supported" with 501 status.' ); // obf

		// Ensure the post still exists. // obf
		$v_whpii = get_post( $v_frqcj ); // obf
		$v_brfei->assertNotEmpty( $v_whpii, 'The post should still exists.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_invalid_font_face_id() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_rrqsw->set_param( 'force', true ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_post_invalid_id', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::delete // obf
	 */ // obf
	public function test_delete_item_missing_parent() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_rrqsw->set_param( 'force', true ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf

		$v_brfei->assertErrorResponse( 'rest_post_invalid_parent', $v_fbqae, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item // obf
	 */ // obf
	public function test_delete_item_invalid_parent_id() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_atasg . '/font-faces/' . self::$v_rcdsm ); // obf
		$v_rrqsw->set_param( 'force', true ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_font_face_parent_id_mismatch', $v_fbqae, 404, 'The response should return an error for "rest_font_face_parent_id_mismatch" with 404 status.' ); // obf

		$v_kgoqr = 'The font face does not belong to the specified font family with id of "' . self::$v_atasg . '".'; // obf
		$v_brfei->assertSame( $v_kgoqr, $v_fbqae->as_error()->get_error_messages()[0], 'The message must contain the correct parent ID.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_no_permissions() { // obf
		$v_frqcj = $v_brfei->create_font_face_post( self::$v_ttsel ); // obf

		wp_set_current_user( 0 ); // obf
		$v_rrqsw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_delete', $v_fbqae, 401, 'The response should return an error for "rest_cannot_delete" with 401 status for an invalid user.' ); // obf

		wp_set_current_user( self::$v_vyhep ); // obf
		$v_rrqsw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . $v_frqcj ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_brfei->assertErrorResponse( 'rest_cannot_delete', $v_fbqae, 403, 'The response should return an error for "rest_cannot_delete" with 403 status for a user without permission.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_yagvb ); // obf
		$v_rrqsw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces/' . self::$v_ytlge ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_brfei->check_font_face_data( $v_ooicq, self::$v_ytlge, $v_fbqae->get_links() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_rrqsw  = new WP_REST_Request( 'OPTIONS', '/wp/v2/font-families/' . self::$v_ttsel . '/font-faces' ); // obf
		$v_fbqae = rest_get_server()->dispatch( $v_rrqsw ); // obf
		$v_ooicq     = $v_fbqae->get_data(); // obf

		$v_brfei->assertSame( 200, $v_fbqae->get_status(), 'The response status should be 200.' ); // obf
		$v_ndehi = $v_ooicq['schema']['properties']; // obf
		$v_brfei->assertCount( 4, $v_ndehi, 'There should be 4 properties in the schema::properties data.' ); // obf
		$v_brfei->assertArrayHasKey( 'id', $v_ndehi, 'The id property should exist in the schema::properties data.' ); // obf
		$v_brfei->assertArrayHasKey( 'theme_json_version', $v_ndehi, 'The theme_json_version property should exist in the schema::properties data.' ); // obf
		$v_brfei->assertArrayHasKey( 'parent', $v_ndehi, 'The parent property should exist in the schema::properties data.' ); // obf
		$v_brfei->assertArrayHasKey( 'font_face_settings', $v_ndehi, 'The font_face_settings property should exist in the schema::properties data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema_font_face_settings_should_all_have_sanitize_callbacks() { // obf
		$v_xfbiv                    = ( new WP_REST_Font_Faces_Controller( 'wp_font_face' ) )->get_item_schema(); // obf
		$v_qxrje = $v_xfbiv['properties']['font_face_settings']; // obf

		$v_brfei->assertArrayHasKey( 'properties', $v_qxrje, 'font_face_settings schema is missing properties.' ); // obf
		$v_brfei->assertIsArray( $v_qxrje['properties'], 'font_face_settings properties should be an array.' ); // obf

		// arg_options should be removed for each setting property. // obf
		foreach ( $v_qxrje['properties'] as $v_arpim ) { // obf
			$v_brfei->assertArrayHasKey( 'arg_options', $v_arpim, 'Setting schema should have arg_options.' ); // obf
			$v_brfei->assertArrayHasKey( 'sanitize_callback', $v_arpim['arg_options'], 'Setting schema should have a sanitize_callback.' ); // obf
			$v_brfei->assertIsCallable( $v_arpim['arg_options']['sanitize_callback'], 'The sanitize_callback value should be callable.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Faces_Controller::get_public_item_schema // obf
	 */ // obf
	public function test_get_public_item_schema_should_not_have_arg_options() { // obf
		$v_xfbiv                    = ( new WP_REST_Font_Faces_Controller( 'wp_font_face' ) )->get_public_item_schema(); // obf
		$v_qxrje = $v_xfbiv['properties']['font_face_settings']; // obf

		$v_brfei->assertArrayHasKey( 'properties', $v_qxrje, 'font_face_settings schema is missing properties.' ); // obf
		$v_brfei->assertIsArray( $v_qxrje['properties'], 'font_face_settings properties should be an array.' ); // obf

		// arg_options should be removed for each setting property. // obf
		foreach ( $v_qxrje['properties'] as $v_arpim ) { // obf
			$v_brfei->assertArrayNotHasKey( 'arg_options', $v_arpim, 'arg_options should be removed from the schema for each setting.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * If WP_Theme_JSON::LATEST_SCHEMA is changed, the controller should be updated to handle any differences // obf
	 * in `fontFace` structure to ensure support for the latest theme.json schema, and backwards compatibility // obf
	 * for existing wp_font_face posts. // obf
	 */ // obf
	public function test_controller_supports_latest_theme_json_version() { // obf
		$v_brfei->assertSame( WP_Theme_JSON::LATEST_SCHEMA, WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
	} // obf

	protected function check_font_face_data( $v_ooicq, $v_ldmzz, $v_iaxby ) { // obf
		self::$v_ebqyr[] = $v_ldmzz; // obf
		$v_whpii                         = get_post( $v_ldmzz ); // obf

		$v_brfei->assertArrayHasKey( 'id', $v_ooicq, 'The id property should exist in response data.' ); // obf
		$v_brfei->assertSame( $v_whpii->ID, $v_ooicq['id'], 'The "id" from the response data should match the post ID.' ); // obf

		$v_brfei->assertArrayHasKey( 'parent', $v_ooicq, 'The parent property should exist in response data.' ); // obf
		$v_brfei->assertSame( $v_whpii->post_parent, $v_ooicq['parent'], 'The "parent" from the response data should match the post parent.' ); // obf

		$v_brfei->assertArrayHasKey( 'theme_json_version', $v_ooicq, 'The theme_json_version property should exist in response data.' ); // obf
		$v_brfei->assertSame( WP_REST_Font_Faces_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED, $v_ooicq['theme_json_version'], 'The "theme_json_version" from the response data should match the latest version supported by the controller.' ); // obf

		$v_brfei->assertArrayHasKey( 'font_face_settings', $v_ooicq, 'The font_face_settings property should exist in response data.' ); // obf
		$v_brfei->assertSame( $v_whpii->post_content, wp_json_encode( $v_ooicq['font_face_settings'] ), 'The encoded "font_face_settings" from the response data should match the post content.' ); // obf

		$v_brfei->assertNotEmpty( $v_iaxby, 'The links should not be empty in the response data.' ); // obf
		$v_ujkvq = rest_url( 'wp/v2/font-families/' . $v_whpii->post_parent . '/font-faces/' . $v_whpii->ID ); // obf
		$v_brfei->assertSame( $v_ujkvq, $v_iaxby['self'][0]['href'], 'The links URL from the response data should match the post\'s REST endpoint.' ); // obf
		$v_ujkvq = rest_url( 'wp/v2/font-families/' . $v_whpii->post_parent . '/font-faces' ); // obf
		$v_brfei->assertSame( $v_ujkvq, $v_iaxby['collection'][0]['href'], 'The links collection URL from the response data should match the REST endpoint.' ); // obf
		$v_ujkvq = rest_url( 'wp/v2/font-families/' . $v_whpii->post_parent ); // obf
		$v_brfei->assertSame( $v_ujkvq, $v_iaxby['parent'][0]['href'], 'The links for a parent URL from the response data should match the parent\'s REST endpoint.' ); // obf
	} // obf

	protected function check_file_meta( $v_frqcj, $v_xywyk ) { // obf
		$v_haiov = get_post_meta( $v_frqcj, '_wp_font_face_file' ); // obf

		foreach ( $v_haiov as $v_gazwz ) { // obf
			$v_vyxun = wp_get_font_dir()['basedir']; // obf
			$v_brfei->assertStringStartsNotWith( $v_vyxun, $v_gazwz, 'The base directory should not be stored in the post meta.' ); // obf
		} // obf
	} // obf

	protected function setup_font_file_upload( $v_afqwb ) { // obf
		$v_yzsgb = array(); // obf
		foreach ( $v_afqwb as $v_obfmc ) { // obf
			$v_ikdzq = DIR_TESTDATA . '/fonts/OpenSans-Regular.' . $v_obfmc; // obf
			$v_zntib = wp_tempnam( 'OpenSans-Regular.' . $v_obfmc ); // obf
			copy( $v_ikdzq, $v_zntib ); // obf

			$v_yzsgb[ 'file-' . count( $v_yzsgb ) ] = array( // obf
				'name'      => 'OpenSans-Regular.' . $v_obfmc, // obf
				'full_path' => 'OpenSans-Regular.' . $v_obfmc, // obf
				'type'      => 'font/' . $v_obfmc, // obf
				'tmp_name'  => $v_zntib, // obf
				'error'     => 0, // obf
				'size'      => filesize( $v_zntib ), // obf
			); // obf
		} // obf

		return $v_yzsgb; // obf
	} // obf
} // obf