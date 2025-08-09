

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Font_Families_Controller_Test functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.5.0 // obf
 * // obf
 * @group restapi // obf
 * @group fonts // obf
 * @group font-library // obf
 * // obf
 * @coversDefaultClass WP_REST_Font_Families_Controller // obf
 */ // obf
class Tests_REST_WpRestFontFamiliesController extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_vncoo; // obf
	protected static $v_agfbr; // obf

	protected static $v_yydxx; // obf
	protected static $v_bxniu; // obf

	protected static $v_lryve; // obf
	protected static $v_xesun; // obf

	private static $v_tbztl = array(); // obf

	protected static $v_ywuzj = array( // obf
		'name'       => 'Open Sans', // obf
		'slug'       => 'open-sans', // obf
		'fontFamily' => '"Open Sans", sans-serif', // obf
		'preview'    => 'https://s.w.org/images/fonts/16.7/previews/open-sans/open-sans-400-normal.svg', // obf
	); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_hcqch ) { // obf
		self::$v_vncoo  = $v_hcqch->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_agfbr = $v_hcqch->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_yydxx = self::create_font_family_post( // obf
			array( // obf
				'name'       => 'Open Sans', // obf
				'slug'       => 'open-sans', // obf
				'fontFamily' => '"Open Sans", sans-serif', // obf
				'preview'    => 'https://s.w.org/images/fonts/16.7/previews/open-sans/open-sans-400-normal.svg', // obf
			) // obf
		); // obf
		self::$v_bxniu = self::create_font_family_post( // obf
			array( // obf
				'name'       => 'Helvetica', // obf
				'slug'       => 'helvetica', // obf
				'fontFamily' => 'Helvetica, Arial, sans-serif', // obf
			) // obf
		); // obf
		self::$v_lryve   = Tests_REST_WpRestFontFacesController::create_font_face_post( // obf
			self::$v_yydxx, // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '400', // obf
				'fontStyle'  => 'normal', // obf
				'src'        => home_url( '/wp-content/fonts/open-sans-medium.ttf' ), // obf
			) // obf
		); // obf
		self::$v_xesun   = Tests_REST_WpRestFontFacesController::create_font_face_post( // obf
			self::$v_yydxx, // obf
			array( // obf
				'fontFamily' => '"Open Sans"', // obf
				'fontWeight' => '900', // obf
				'fontStyle'  => 'normal', // obf
				'src'        => home_url( '/wp-content/fonts/open-sans-bold.ttf' ), // obf
			) // obf
		); // obf

		static::$v_tbztl = array(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_vncoo ); // obf
		self::delete_user( self::$v_agfbr ); // obf

		wp_delete_post( self::$v_yydxx ); // obf
		wp_delete_post( self::$v_bxniu ); // obf
		wp_delete_post( self::$v_lryve ); // obf
		wp_delete_post( self::$v_xesun ); // obf
	} // obf

	public function tear_down() { // obf
		foreach ( static::$v_tbztl as $v_cbmbb ) { // obf
			wp_delete_post( $v_cbmbb, true ); // obf
		} // obf
		static::$v_tbztl = array(); // obf

		parent::tear_down(); // obf
	} // obf

	public static function create_font_family_post( $v_kzgog = array() ) { // obf
		$v_kzgog = array_merge( self::$v_ywuzj, $v_kzgog ); // obf
		$v_cbmbb  = self::factory()->post->create( // obf
			wp_slash( // obf
				array( // obf
					'post_type'    => 'wp_font_family', // obf
					'post_status'  => 'publish', // obf
					'post_title'   => $v_kzgog['name'], // obf
					'post_name'    => $v_kzgog['slug'], // obf
					'post_content' => wp_json_encode( // obf
						array( // obf
							'fontFamily' => $v_kzgog['fontFamily'], // obf
							'preview'    => $v_kzgog['preview'], // obf
						) // obf
					), // obf
				) // obf
			) // obf
		); // obf

		static::$v_tbztl[] = $v_cbmbb; // obf

		return $v_cbmbb; // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_zbndx = rest_get_server()->get_routes(); // obf
		$v_ayuqd->assertArrayHasKey( // obf
			'/wp/v2/font-families', // obf
			$v_zbndx, // obf
			'Font faces collection for the given font family does not exist' // obf
		); // obf
		$v_ayuqd->assertCount( // obf
			2, // obf
			$v_zbndx['/wp/v2/font-families'], // obf
			'Font faces collection for the given font family does not have exactly two elements' // obf
		); // obf
		$v_ayuqd->assertArrayHasKey( // obf
			'/wp/v2/font-families/(?P<id>[\d]+)', // obf
			$v_zbndx, // obf
			'Single font face route for the given font family does not exist' // obf
		); // obf
		$v_ayuqd->assertCount( // obf
			3, // obf
			$v_zbndx['/wp/v2/font-families/(?P<id>[\d]+)'], // obf
			'Font faces collection for the given font family does not have exactly two elements' // obf
		); // obf
	} // obf

	public function test_font_families_no_autosave_routes() { // obf
		$v_zbndx = rest_get_server()->get_routes(); // obf
		$v_ayuqd->assertArrayNotHasKey( // obf
			'/wp/v2/font-families/(?P<id>[\d]+)/autosaves', // obf
			$v_zbndx, // obf
			'Font families autosaves route exists.' // obf
		); // obf
		$v_ayuqd->assertArrayNotHasKey( // obf
			'/wp/v2/font-families/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', // obf
			$v_zbndx, // obf
			'Font families autosaves by id route exists.' // obf
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
	 * @covers WP_REST_Font_Families_Controller::get_context_param // obf
	 * // obf
	 * @param bool $v_xtctw Whether to test a single route. // obf
	 */ // obf
	public function test_get_context_param( $v_xtctw ) { // obf
		$v_bmpih = '/wp/v2/font-families'; // obf
		if ( $v_xtctw ) { // obf
			$v_bmpih .= '/' . self::$v_yydxx; // obf
		} // obf

		$v_oimmw  = new WP_REST_Request( 'OPTIONS', $v_bmpih ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_sdaoq = $v_djmkp['endpoints'][0]; // obf
		$v_ayuqd->assertArrayNotHasKey( 'allow_batch', $v_sdaoq, 'The allow_batch property should not exist in the endpoint data.' ); // obf
		$v_ayuqd->assertSame( 'view', $v_sdaoq['args']['context']['default'], 'The endpoint\'s args::context::default should be set to view.' ); // obf
		$v_ayuqd->assertSame( array( 'view', 'embed', 'edit' ), $v_sdaoq['args']['context']['enum'], 'The endpoint\'s args::context::enum should be set to [ view, embed, edit ].' ); // obf
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
	 * @covers WP_REST_Font_Families_Controller::get_items // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families' ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertCount( 2, $v_djmkp, 'There should be 2 properties in the response data.' ); // obf
		$v_ayuqd->assertArrayHasKey( '_links', $v_djmkp[0], 'The _links property should exist in the response data 0.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp[0], self::$v_bxniu, $v_djmkp[0]['_links'] ); // obf
		$v_ayuqd->assertArrayHasKey( '_links', $v_djmkp[1], 'The _links property should exist in the response data 1.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp[1], self::$v_yydxx, $v_djmkp[1]['_links'] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_items // obf
	 */ // obf
	public function test_get_items_by_slug() { // obf
		$v_vxicr = get_post( self::$v_bxniu ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'GET', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'slug', $v_vxicr->post_name ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertCount( 1, $v_djmkp, 'There should be 1 property in the response data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'id', $v_djmkp[0], 'The id property should exist in the response data.' ); // obf
		$v_ayuqd->assertSame( $v_vxicr->ID, $v_djmkp[0]['id'], 'The id should match the expected ID in the response data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_items // obf
	 */ // obf
	public function test_get_items_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families' ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_read', $v_jnftm, 401, 'The response should return an error with a "rest_cannot_read" code and 401 status.' ); // obf

		wp_set_current_user( self::$v_agfbr ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families' ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_read', $v_jnftm, 403, 'The response should return an error with a "rest_cannot_read" code and 403 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp, self::$v_yydxx, $v_jnftm->get_links() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_embedded_font_faces() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_oimmw->set_param( '_embed', true ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = rest_get_server()->response_to_data( $v_jnftm, true ); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertArrayHasKey( '_embedded', $v_djmkp, 'The _embedded property should exist in the response data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'font_faces', $v_djmkp['_embedded'], 'The font_faces property should exist in _embedded data.' ); // obf
		$v_ayuqd->assertCount( 2, $v_djmkp['_embedded']['font_faces'], 'There should be 2 font_faces in the _embedded data.' ); // obf

		foreach ( $v_djmkp['_embedded']['font_faces'] as $v_hwgnq ) { // obf
			$v_ayuqd->assertArrayHasKey( 'id', $v_hwgnq, 'The id property should exist in the _embedded font_face data.' ); // obf

			$v_akrph  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_yydxx . '/font-faces/' . $v_hwgnq['id'] ); // obf
			$v_tbxrm = rest_get_server()->dispatch( $v_akrph ); // obf
			$v_wcymu     = rest_get_server()->response_to_data( $v_tbxrm, true ); // obf

			$v_ayuqd->assertSame( $v_wcymu, $v_hwgnq, 'The embedded font_face data should match when the data from a single request.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item // obf
	 */ // obf
	public function test_get_item_removes_extra_settings() { // obf
		$v_fugoq = self::create_font_family_post( array( 'fontFace' => array() ) ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertArrayNotHasKey( 'fontFace', $v_djmkp['font_family_settings'], 'The fontFace property should not exist in the font_family_settings data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_get_item_malformed_post_content_returns_empty_settings() { // obf
		$v_fugoq = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'wp_font_family', // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'invalid', // obf
			) // obf
		); // obf

		static::$v_tbztl[] = $v_fugoq; // obf

		$v_myofp = array( // obf
			'name'       => '', // obf
			// Slug will default to the post id. // obf
			'slug'       => (string) $v_fugoq, // obf
			'fontFamily' => '', // obf
			'preview'    => '', // obf
		); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertSame( $v_myofp, $v_djmkp['font_family_settings'], 'The empty settings should exist in the font_family_settings data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item // obf
	 */ // obf
	public function test_get_item_invalid_font_family_id() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_post_invalid_id', $v_jnftm, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item // obf
	 */ // obf
	public function test_get_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf
		$v_oimmw = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_yydxx ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_read', $v_jnftm, 401, 'The response should return an error with a "rest_cannot_read" code and 401 status.' ); // obf

		wp_set_current_user( self::$v_agfbr ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_read', $v_jnftm, 403, 'The response should return an error with a "rest_cannot_read" code and 403 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::create_item // obf
	 */ // obf
	public function test_create_item() { // obf
		$v_kzgog = array_merge( self::$v_ywuzj, array( 'slug' => 'open-sans-2' ) ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 201, $v_jnftm->get_status(), 'The response status should be 201.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp, $v_djmkp['id'], $v_jnftm->get_links() ); // obf

		$v_ieorb = $v_djmkp['font_family_settings']; // obf
		$v_ayuqd->assertSame( $v_kzgog, $v_ieorb, 'The expected settings should exist in the font_family_settings data.' ); // obf
		$v_ayuqd->assertEmpty( $v_djmkp['font_faces'], 'The font_faces should be empty or not exist in the response data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::validate_create_font_face_request // obf
	 */ // obf
	public function test_create_item_default_theme_json_version() { // obf
		$v_kzgog = array_merge( self::$v_ywuzj, array( 'slug' => 'open-sans-2' ) ); // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		static::$v_tbztl[] = $v_djmkp['id']; // obf

		$v_ayuqd->assertSame( 201, $v_jnftm->get_status(), 'The response status should be 201.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'theme_json_version', $v_djmkp, 'The theme_json_version property should exist in the response data.' ); // obf
		$v_ayuqd->assertSame( WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED, $v_djmkp['theme_json_version'], 'The default theme.json version should match the latest version supported by the controller.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_invalid_theme_json_version // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::create_item // obf
	 * // obf
	 * @param int $v_pepfo Version to test. // obf
	 */ // obf
	public function test_create_item_invalid_theme_json_version( $v_pepfo ) { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', $v_pepfo ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( self::$v_ywuzj ) ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_invalid_param', $v_jnftm, 400 ); // obf
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
	 * @dataProvider data_create_item_with_default_preview // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::sanitize_font_family_settings // obf
	 * // obf
	 * @param array $v_kzgog Settings to test. // obf
	 */ // obf
	public function test_create_item_with_default_preview( $v_kzgog ) { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		static::$v_tbztl[] = $v_djmkp['id']; // obf

		$v_ayuqd->assertSame( 201, $v_jnftm->get_status(), 'The response status should be 201.' ); // obf
		$v_ieorb = $v_djmkp['font_family_settings']; // obf
		$v_ayuqd->assertArrayHasKey( 'preview', $v_ieorb, 'The preview property should exist in the font_family_settings data.' ); // obf
		$v_ayuqd->assertSame( '', $v_ieorb['preview'], 'The preview data should be an empty string.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_with_default_preview() { // obf
		$v_ywuzj = array( // obf
			'name'       => 'Open Sans', // obf
			'slug'       => 'open-sans-2', // obf
			'fontFamily' => '"Open Sans", sans-serif', // obf
		); // obf
		return array( // obf
			'No preview param' => array( // obf
				'settings' => $v_ywuzj, // obf
			), // obf
			'Empty preview'    => array( // obf
				'settings' => array_merge( $v_ywuzj, array( 'preview' => '' ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_font_family_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::sanitize_font_family_settings // obf
	 * // obf
	 * @param string $v_kzgog Font family settings to test. // obf
	 * @param string $v_ucufy Expected settings result. // obf
	 */ // obf
	public function test_create_item_sanitize_font_family_settings( $v_kzgog, $v_ucufy ) { // obf
		$v_kzgog = array_merge( self::$v_ywuzj, $v_kzgog ); // obf
		$v_ucufy = array_merge( self::$v_ywuzj, $v_ucufy ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		static::$v_tbztl[] = $v_djmkp['id']; // obf

		$v_ayuqd->assertSame( 201, $v_jnftm->get_status(), 'The response status should be 201.' ); // obf
		$v_ayuqd->assertSame( $v_ucufy, $v_djmkp['font_family_settings'], 'The response font_family_settings should match.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_sanitize_font_family_settings() { // obf
		return array( // obf
			'settings with tags, extra whitespace, new lines' => array( // obf
				'settings' => array( // obf
					'name'       => "   Opening   Sans</style><script>alert('XSS');</script>\n    ", // obf
					'slug'       => "   OPENing SanS </style><script>alert('XSS');</script>\n    ", // obf
					'fontFamily' => "   Opening   Sans</style><script>alert('XSS');</script>\n    ", // obf
					'preview'    => "   https://example.com/</style><script>alert('XSS');</script>      ", // obf
				), // obf
				'expected' => array( // obf
					'name'       => 'Opening Sans', // obf
					'slug'       => 'opening-sans-alertxss', // obf
					'fontFamily' => '"Opening Sans"', // obf
					'preview'    => "https://example.com//stylescriptalert('XSS');/script%20%20%20%20%20%20", // obf
				), // obf
			), // obf
			'multiword font family name with integer' => array( // obf
				'settings' => array( // obf
					'slug'       => 'libre-barcode-128-text', // obf
					'fontFamily' => 'Libre Barcode 128 Text', // obf
				), // obf
				'expected' => array( // obf
					'slug'       => 'libre-barcode-128-text', // obf
					'fontFamily' => '"Libre Barcode 128 Text"', // obf
				), // obf
			), // obf
			'multiword font family name'              => array( // obf
				'settings' => array( // obf
					'slug'       => 'b612-mono', // obf
					'fontFamily' => 'B612 Mono', // obf
				), // obf
				'expected' => array( // obf
					'slug'       => 'b612-mono', // obf
					'fontFamily' => '"B612 Mono"', // obf
				), // obf
			), // obf
			'comma-separated font family names'       => array( // obf
				'settings' => array( // obf
					'slug'       => 'open-sans-noto-sans', // obf
					'fontFamily' => 'Open Sans, Noto Sans, sans-serif', // obf
				), // obf
				'expected' => array( // obf
					'slug'       => 'open-sans-noto-sans', // obf
					'fontFamily' => '"Open Sans", "Noto Sans", sans-serif', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_create_item_invalid_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::validate_create_font_face_settings // obf
	 * // obf
	 * @param array $v_kzgog Settings to test. // obf
	 */ // obf
	public function test_create_item_invalid_settings( $v_kzgog ) { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_invalid_param', $v_jnftm, 400 ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_create_item_invalid_settings() { // obf
		return array( // obf
			'Missing name'          => array( // obf
				'settings' => array_diff_key( self::$v_ywuzj, array( 'name' => '' ) ), // obf
			), // obf
			'Empty name'            => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'name' => '' ) ), // obf
			), // obf
			'Wrong name type'       => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'name' => 1234 ) ), // obf
			), // obf
			'Missing slug'          => array( // obf
				'settings' => array_diff_key( self::$v_ywuzj, array( 'slug' => '' ) ), // obf
			), // obf
			'Empty slug'            => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'slug' => '' ) ), // obf
			), // obf
			'Wrong slug type'       => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'slug' => 1234 ) ), // obf
			), // obf
			'Missing fontFamily'    => array( // obf
				'settings' => array_diff_key( self::$v_ywuzj, array( 'fontFamily' => '' ) ), // obf
			), // obf
			'Empty fontFamily'      => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'fontFamily' => '' ) ), // obf
			), // obf
			'Wrong fontFamily type' => array( // obf
				'settings' => array_merge( self::$v_ywuzj, array( 'fontFamily' => 1234 ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Family_Controller::validate_font_family_settings // obf
	 */ // obf
	public function test_create_item_invalid_settings_json() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_oimmw->set_param( 'font_family_settings', 'invalid' ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf

		$v_ayuqd->assertErrorResponse( 'rest_invalid_param', $v_jnftm, 400, 'The response should return an error for "rest_invalid_param" with 400 status.' ); // obf
		$v_zmyqv = 'font_family_settings parameter must be a valid JSON string.'; // obf
		$v_ldnqb          = $v_jnftm->as_error()->get_all_error_data()[0]['params']['font_family_settings']; // obf
		$v_ayuqd->assertSame( $v_zmyqv, $v_ldnqb, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Family_Controller::create_item // obf
	 */ // obf
	public function test_create_item_with_duplicate_slug() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'theme_json_version', WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( array_merge( self::$v_ywuzj, array( 'slug' => 'helvetica' ) ) ) ); // obf

		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf

		$v_ayuqd->assertErrorResponse( 'rest_duplicate_font_family', $v_jnftm, 400, 'The response should return an error for "rest_duplicate_font_family" with 400 status.' ); // obf
		$v_zmyqv = 'A font family with slug "helvetica" already exists.'; // obf
		$v_ldnqb          = $v_jnftm->as_error()->get_error_messages()[0]; // obf
		$v_ayuqd->assertSame( $v_zmyqv, $v_ldnqb, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::create_item // obf
	 */ // obf
	public function test_create_item_no_permission() { // obf
		$v_kzgog = array_merge( self::$v_ywuzj, array( 'slug' => 'open-sans-2' ) ); // obf
		wp_set_current_user( 0 ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_create', $v_jnftm, 401, 'The response should return an error for "rest_cannot_create" with 401 status.' ); // obf

		wp_set_current_user( self::$v_agfbr ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families' ); // obf
		$v_oimmw->set_param( // obf
			'font_family_settings', // obf
			wp_json_encode( // obf
				array( // obf
					'name'       => 'Open Sans', // obf
					'slug'       => 'open-sans', // obf
					'fontFamily' => '"Open Sans", sans-serif', // obf
					'preview'    => 'https://s.w.org/images/fonts/16.7/previews/open-sans/open-sans-400-normal.svg', // obf
				) // obf
			) // obf
		); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_create', $v_jnftm, 403, 'The response should return an error for "rest_cannot_create" with 403 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf

		$v_kzgog = array( // obf
			'name'       => 'Open Sans', // obf
			'fontFamily' => 'Open Sans, "Noto Sans", sans-serif', // obf
			'preview'    => 'https://s.w.org/images/fonts/16.9/previews/open-sans/open-sans-400-normal.svg', // obf
		); // obf

		$v_fugoq = self::create_font_family_post( array( 'slug' => 'open-sans-2' ) ); // obf
		$v_oimmw        = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_oimmw->set_param( // obf
			'font_family_settings', // obf
			wp_json_encode( $v_kzgog ) // obf
		); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp, $v_fugoq, $v_jnftm->get_links() ); // obf

		$v_nhgsd = array( // obf
			'name'       => $v_kzgog['name'], // obf
			'slug'       => 'open-sans-2', // obf
			'fontFamily' => '"Open Sans", "Noto Sans", sans-serif', // obf
			'preview'    => $v_kzgog['preview'], // obf
		); // obf
		$v_ayuqd->assertSame( $v_nhgsd, $v_djmkp['font_family_settings'], 'The response font_family_settings should match expected settings.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_update_item_individual_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 * // obf
	 * @param array $v_kzgog Settings to test. // obf
	 */ // obf
	public function test_update_item_individual_settings( $v_kzgog ) { // obf
		wp_set_current_user( self::$v_vncoo ); // obf

		$v_fugoq = self::create_font_family_post(); // obf
		$v_oimmw        = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_simmf   = key( $v_kzgog ); // obf
		$v_fdkbt = current( $v_kzgog ); // obf
		$v_ayuqd->assertArrayHasKey( $v_simmf, $v_djmkp['font_family_settings'], 'The expected key should exist in the font_family_settings data.' ); // obf
		$v_ayuqd->assertSame( $v_fdkbt, $v_djmkp['font_family_settings'][ $v_simmf ], 'The font_family_settings data should match.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_update_item_individual_settings() { // obf
		return array( // obf
			array( array( 'name' => 'Opened Sans' ) ), // obf
			array( array( 'fontFamily' => '"Opened Sans", sans-serif' ) ), // obf
			array( array( 'preview' => 'https://s.w.org/images/fonts/16.7/previews/opened-sans/opened-sans-400-normal.svg' ) ), // obf
			// Empty preview is allowed. // obf
			array( array( 'preview' => '' ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_sanitize_font_family_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::sanitize_font_family_settings // obf
	 * // obf
	 * @param string $v_kzgog Font family settings to test. // obf
	 * @param string $v_ucufy Expected settings result. // obf
	 */ // obf
	public function test_update_item_sanitize_font_family_settings( $v_kzgog, $v_ucufy ) { // obf
		// Unset/modify slug from the data provider, since we're updating rather than creating. // obf
		unset( $v_kzgog['slug'] ); // obf
		$v_wofbb = array( 'slug' => 'open-sans-update' ); // obf
		$v_ucufy         = array_merge( self::$v_ywuzj, $v_ucufy, $v_wofbb ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_fugoq                = self::create_font_family_post( $v_wofbb ); // obf
		static::$v_tbztl[] = $v_fugoq; // obf

		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertSame( $v_ucufy, $v_djmkp['font_family_settings'], 'The response font_family_settings should match.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_update_item_invalid_settings // obf
	 * // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 * // obf
	 * @param array $v_kzgog Settings to test. // obf
	 */ // obf
	public function test_update_item_empty_settings( $v_kzgog ) { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_oimmw->set_param( // obf
			'font_family_settings', // obf
			wp_json_encode( $v_kzgog ) // obf
		); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_invalid_param', $v_jnftm, 400 ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_update_item_invalid_settings() { // obf
		return array( // obf
			'Empty name'            => array( // obf
				array( 'name' => '' ), // obf
			), // obf
			'Wrong name type'       => array( // obf
				array( 'name' => 1234 ), // obf
			), // obf
			'Empty fontFamily'      => array( // obf
				array( 'fontFamily' => '' ), // obf
			), // obf
			'Wrong fontFamily type' => array( // obf
				array( 'fontFamily' => 1234 ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 */ // obf
	public function test_update_item_update_slug_not_allowed() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_oimmw->set_param( // obf
			'font_family_settings', // obf
			wp_json_encode( array( 'slug' => 'new-slug' ) ) // obf
		); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf

		$v_ayuqd->assertErrorResponse( 'rest_invalid_param', $v_jnftm, 400, 'The response should return an error for "rest_invalid_param" with 400 status.' ); // obf
		$v_zmyqv = 'font_family_settings[slug] cannot be updated.'; // obf
		$v_ldnqb          = $v_jnftm->as_error()->get_all_error_data()[0]['params']['font_family_settings']; // obf
		$v_ayuqd->assertSame( $v_zmyqv, $v_ldnqb, 'The response error message should match.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 */ // obf
	public function test_update_item_invalid_font_family_id() { // obf
		$v_kzgog = array_diff_key( self::$v_ywuzj, array( 'slug' => '' ) ); // obf

		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_post_invalid_id', $v_jnftm, 404, 'The response should return an error for "rest_post_invalid_id" with 404 status.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::update_item // obf
	 */ // obf
	public function test_update_item_no_permission() { // obf
		$v_kzgog = array_diff_key( self::$v_ywuzj, array( 'slug' => '' ) ); // obf

		wp_set_current_user( 0 ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_edit', $v_jnftm, 401, 'The response should return an error for "rest_cannot_edit" with 401 status for an invalid user.' ); // obf

		wp_set_current_user( self::$v_agfbr ); // obf
		$v_oimmw = new WP_REST_Request( 'POST', '/wp/v2/font-families/' . self::$v_yydxx ); // obf
		$v_oimmw->set_param( 'font_family_settings', wp_json_encode( $v_kzgog ) ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_edit', $v_jnftm, 403, 'The response should return an error for "rest_cannot_edit" with 403 status for a user without permission.' ); // obf
	} // obf


	/** // obf
	 * @covers WP_REST_Font_Families_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_fugoq   = self::create_font_family_post(); // obf
		$v_oimmw          = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_oimmw['force'] = true; // obf
		$v_jnftm         = rest_get_server()->dispatch( $v_oimmw ); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->assertNull( get_post( $v_fugoq ), 'The post should not exist after deleting.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_fugoq = self::create_font_family_post(); // obf

		// Attempt trashing. // obf
		$v_oimmw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_trash_not_supported', $v_jnftm, 501, 'The response should return an error for "rest_trash_not_supported" with 501 status.' ); // obf

		$v_oimmw->set_param( 'force', 'false' ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_trash_not_supported', $v_jnftm, 501, 'When "force" is false, the response should return an error for "rest_trash_not_supported" with 501 status.' ); // obf

		// Ensure the post still exists. // obf
		$v_koyrj = get_post( $v_fugoq ); // obf
		$v_ayuqd->assertNotEmpty( $v_koyrj, 'The post should still exist.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_invalid_font_family_id() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_post_invalid_id', $v_jnftm, 404 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::delete_item // obf
	 */ // obf
	public function test_delete_item_no_permissions() { // obf
		$v_fugoq = self::create_font_family_post(); // obf

		wp_set_current_user( 0 ); // obf
		$v_oimmw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_delete', $v_jnftm, 401, 'The response should return an error for "rest_cannot_delete" with 401 status for an invalid user.' ); // obf

		wp_set_current_user( self::$v_agfbr ); // obf
		$v_oimmw  = new WP_REST_Request( 'DELETE', '/wp/v2/font-families/' . $v_fugoq ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_ayuqd->assertErrorResponse( 'rest_cannot_delete', $v_jnftm, 403, 'The response should return an error for "rest_cannot_delete" with 403 status for a user without permission.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_vncoo ); // obf
		$v_oimmw  = new WP_REST_Request( 'GET', '/wp/v2/font-families/' . self::$v_bxniu ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_ayuqd->check_font_family_data( $v_djmkp, self::$v_bxniu, $v_jnftm->get_links() ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_oimmw  = new WP_REST_Request( 'OPTIONS', '/wp/v2/font-families' ); // obf
		$v_jnftm = rest_get_server()->dispatch( $v_oimmw ); // obf
		$v_djmkp     = $v_jnftm->get_data(); // obf

		$v_ayuqd->assertSame( 200, $v_jnftm->get_status(), 'The response status should be 200.' ); // obf
		$v_qvjfr = $v_djmkp['schema']['properties']; // obf
		$v_ayuqd->assertCount( 4, $v_qvjfr, 'There should be 4 properties in the schema::properties data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'id', $v_qvjfr, 'The id property should exist in the schema::properties data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'theme_json_version', $v_qvjfr, 'The theme_json_version property should exist in the schema::properties data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'font_faces', $v_qvjfr, 'The font_faces property should exist in the schema::properties data.' ); // obf
		$v_ayuqd->assertArrayHasKey( 'font_family_settings', $v_qvjfr, 'The font_family_settings property should exist in the schema::properties data.' ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema_font_family_settings_should_all_have_sanitize_callbacks() { // obf
		$v_qkztp                      = ( new WP_REST_Font_Families_Controller( 'wp_font_family' ) )->get_item_schema(); // obf
		$v_ziark = $v_qkztp['properties']['font_family_settings']; // obf

		$v_ayuqd->assertArrayHasKey( 'properties', $v_ziark, 'font_family_settings schema is missing properties.' ); // obf
		$v_ayuqd->assertIsArray( $v_ziark['properties'], 'font_family_settings properties should be an array.' ); // obf

		// arg_options should be removed for each setting property. // obf
		foreach ( $v_ziark['properties'] as $v_jcyyh ) { // obf
			$v_ayuqd->assertArrayHasKey( 'arg_options', $v_jcyyh, 'Setting schema should have arg_options.' ); // obf
			$v_ayuqd->assertArrayHasKey( 'sanitize_callback', $v_jcyyh['arg_options'], 'Setting schema should have a sanitize_callback.' ); // obf
			$v_ayuqd->assertIsCallable( $v_jcyyh['arg_options']['sanitize_callback'], 'That sanitize_callback value should be callable.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Font_Families_Controller::get_public_item_schema // obf
	 */ // obf
	public function test_get_public_item_schema_should_not_have_arg_options() { // obf
		$v_qkztp                      = ( new WP_REST_Font_Families_Controller( 'wp_font_family' ) )->get_public_item_schema(); // obf
		$v_ziark = $v_qkztp['properties']['font_family_settings']; // obf

		$v_ayuqd->assertArrayHasKey( 'properties', $v_ziark, 'font_family_settings schema is missing properties.' ); // obf
		$v_ayuqd->assertIsArray( $v_ziark['properties'], 'font_family_settings properties should be an array.' ); // obf

		// arg_options should be removed for each setting property. // obf
		foreach ( $v_ziark['properties'] as $v_jcyyh ) { // obf
			$v_ayuqd->assertArrayNotHasKey( 'arg_options', $v_jcyyh, 'arg_options should be removed from the schema for each setting.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * If WP_Theme_JSON::LATEST_SCHEMA is changed, the controller should be updated to handle any differences // obf
	 * in `fontFamilies` structure to ensure support for the latest theme.json schema, and backwards compatibility // obf
	 * for existing wp_font_family posts. // obf
	 */ // obf
	public function test_controller_supports_latest_theme_json_version() { // obf
		$v_ayuqd->assertSame( WP_Theme_JSON::LATEST_SCHEMA, WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED ); // obf
	} // obf

	protected function check_font_family_data( $v_djmkp, $v_cbmbb, $v_jhare ) { // obf
		static::$v_tbztl[] = $v_cbmbb; // obf
		$v_koyrj                          = get_post( $v_cbmbb ); // obf

		$v_ayuqd->assertArrayHasKey( 'id', $v_djmkp, 'The id property should exist in response data.' ); // obf
		$v_ayuqd->assertSame( $v_koyrj->ID, $v_djmkp['id'], 'The "id" from the response data should match the post ID.' ); // obf

		$v_ayuqd->assertArrayHasKey( 'theme_json_version', $v_djmkp, 'The theme_json_version property should exist in response data.' ); // obf
		$v_ayuqd->assertSame( WP_REST_Font_Families_Controller::LATEST_THEME_JSON_VERSION_SUPPORTED, $v_djmkp['theme_json_version'], 'The "theme_json_version" from the response data should match the latest version supported by the controller.' ); // obf

		$v_pzjpj = get_children( // obf
			array( // obf
				'fields'      => 'ids', // obf
				'post_parent' => $v_cbmbb, // obf
				'post_type'   => 'wp_font_face', // obf
				'order'       => 'ASC', // obf
				'orderby'     => 'ID', // obf
			) // obf
		); // obf
		$v_ayuqd->assertArrayHasKey( 'font_faces', $v_djmkp, 'The font_faces property should exist in the response data.' ); // obf

		foreach ( $v_pzjpj as $v_adenm ) { // obf
			$v_ayuqd->assertContains( $v_adenm, $v_djmkp['font_faces'], 'The ID is in the font_faces data.' ); // obf
		} // obf

		$v_ayuqd->assertArrayHasKey( 'font_family_settings', $v_djmkp, 'The font_family_settings property should exist in the response data.' ); // obf
		$v_kzgog          = $v_djmkp['font_family_settings']; // obf
		$v_nhgsd = array( // obf
			'name'       => $v_koyrj->post_title, // obf
			'slug'       => $v_koyrj->post_name, // obf
			'fontFamily' => $v_kzgog['fontFamily'], // obf
			'preview'    => $v_kzgog['preview'], // obf
		); // obf
		$v_ayuqd->assertSame( $v_nhgsd, $v_kzgog, 'The font_family_settings should match.' ); // obf

		$v_ayuqd->assertNotEmpty( $v_jhare, 'The links should not be empty in the response data.' ); // obf
		$v_ucufy = rest_url( 'wp/v2/font-families/' . $v_koyrj->ID ); // obf
		$v_ayuqd->assertSame( $v_ucufy, $v_jhare['self'][0]['href'], 'The links URL from the response data should match the post\'s REST endpoint.' ); // obf
		$v_ucufy = rest_url( 'wp/v2/font-families' ); // obf
		$v_ayuqd->assertSame( $v_ucufy, $v_jhare['collection'][0]['href'], 'The links collection URL from the response data should match the REST endpoint.' ); // obf

		if ( ! $v_pzjpj ) { // obf
			return; // obf
		} // obf

		// Check font_face links, if present. // obf
		$v_ayuqd->assertArrayHasKey( 'font_faces', $v_jhare ); // obf
		foreach ( $v_jhare['font_faces'] as $v_pqcxn => $v_raoeg ) { // obf
			$v_ucufy = rest_url( 'wp/v2/font-families/' . $v_koyrj->ID . '/font-faces/' . $v_pzjpj[ $v_pqcxn ] ); // obf
			$v_ayuqd->assertSame( $v_ucufy, $v_raoeg['href'], 'The links for a font faces URL from the response data should match the REST endpoint.' ); // obf

			$v_udlxw = isset( $v_raoeg['attributes']['embeddable'] ) // obf
				? $v_raoeg['attributes']['embeddable'] // obf
				: $v_raoeg['embeddable']; // obf
			$v_ayuqd->assertTrue( $v_udlxw, 'The embeddable should be true.' ); // obf
		} // obf
	} // obf
} // obf