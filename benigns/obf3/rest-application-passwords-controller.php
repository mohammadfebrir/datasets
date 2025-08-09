

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Application_Passwords_Controller functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Application_Passwords_Controller extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_uninp; // obf

	/** // obf
	 * Administrator user id. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_sltrp; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_iwpqx WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iwpqx ) { // obf
		self::$v_uninp = $v_iwpqx->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_sltrp         = $v_iwpqx->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_sltrp ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clean up test fixtures. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_uninp ); // obf
		self::delete_user( self::$v_sltrp ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_lekcc['PHP_AUTH_USER'], $v_lekcc['PHP_AUTH_PW'], $v_ddpcz['wp_rest_application_password_status'], $v_ddpcz['wp_rest_application_password_uuid'] ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_ppxxm = rest_get_server()->get_routes(); // obf

		$v_mlrli->assertArrayHasKey( '/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords', $v_ppxxm ); // obf
		$v_mlrli->assertCount( 3, $v_ppxxm['/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords'] ); // obf
		$v_mlrli->assertArrayHasKey( '/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/(?P<uuid>[\\w\\-]+)', $v_ppxxm ); // obf
		$v_mlrli->assertCount( 3, $v_ppxxm['/wp/v2/users/(?P<user_id>(?:[\\d]+|me))/application-passwords/(?P<uuid>[\\w\\-]+)'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_context_param() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn = $v_otjvw['uuid']; // obf

		// Collection. // obf
		$v_dtaax  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users/me/application-passwords' ); // obf
		$v_vdyzm = rest_get_server()->dispatch( $v_dtaax ); // obf
		$v_giyoq     = $v_vdyzm->get_data(); // obf
		$v_mlrli->assertSame( 'view', $v_giyoq['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mlrli->assertSame( array( 'view', 'embed', 'edit' ), $v_giyoq['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_dtaax  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_vdyzm = rest_get_server()->dispatch( $v_dtaax ); // obf
		$v_giyoq     = $v_vdyzm->get_data(); // obf
		$v_mlrli->assertSame( 'view', $v_giyoq['endpoints'][0]['args']['context']['default'] ); // obf
		$v_mlrli->assertSame( array( 'view', 'embed', 'edit' ), $v_giyoq['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_disabled() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		add_filter( 'wp_is_application_passwords_available', '__return_false' ); // obf

		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords' ); // obf
		$v_mlrli->assertErrorResponse( 'application_passwords_disabled', $v_vdyzm, 501 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_disabled_for_user() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		add_filter( 'wp_is_application_passwords_available_for_user', '__return_false' ); // obf

		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords' ); // obf
		$v_mlrli->assertErrorResponse( 'application_passwords_disabled_for_user', $v_vdyzm, 501 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords' ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 1, $v_vdyzm->get_data() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()[0], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 1, $v_vdyzm->get_data() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()[0], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 1, $v_vdyzm->get_data() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()[0], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 1, $v_vdyzm->get_data() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()[0], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf

		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_list_application_passwords', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_logged_out() { // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_items_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_vdyzm = rest_do_request( '/wp/v2/users/0/application-passwords' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_read_application_password', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_logged_out() { // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/me/application-passwords/%s', $v_hixkn ) ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/0/application-passwords/' . $v_hixkn ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_invalid_password_uuid() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		$v_vdyzm = rest_do_request( sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, '123456abcdef' ) ); // obf
		$v_mlrli->assertErrorResponse( 'rest_application_password_not_found', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_ugnhr  = wp_generate_uuid4(); // obf
		$v_dtaax = new WP_REST_Request( 'POST', '/wp/v2/users/me/application-passwords' ); // obf
		$v_dtaax->set_body_params( // obf
			array( // obf
				'name'   => 'App', // obf
				'app_id' => $v_ugnhr, // obf
			) // obf
		); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf

		$v_abiow = WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ); // obf
		$v_mlrli->assertCount( 1, $v_abiow ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_abiow[0], true ); // obf
		$v_mlrli->assertSame( 'App', $v_vdyzm->get_data()['name'] ); // obf
		$v_mlrli->assertSame( $v_ugnhr, $v_vdyzm->get_data()['app_id'] ); // obf
		$v_mlrli->assertNull( $v_vdyzm->get_data()['last_used'] ); // obf
		$v_mlrli->assertNull( $v_vdyzm->get_data()['last_ip'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf

		$v_abiow = WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ); // obf
		$v_mlrli->assertCount( 1, $v_abiow ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_abiow[0], true ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf

		$v_abiow = WP_Application_Passwords::get_user_application_passwords( self::$v_uninp ); // obf
		$v_mlrli->assertCount( 1, $v_abiow ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_abiow[0], true ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf

		$v_abiow = WP_Application_Passwords::get_user_application_passwords( self::$v_uninp ); // obf
		$v_mlrli->assertCount( 1, $v_abiow ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), $v_abiow[0], true ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_create_application_passwords', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_create_item_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d/application-passwords', 0 ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 53224 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_item_for_super_admin_on_site_where_they_are_not_a_member() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		// Create a site where the Super Admin is not a member. // obf
		$v_exykj = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => self::$v_uninp, // obf
			) // obf
		); // obf

		switch_to_blog( $v_exykj ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', '/wp/v2/users/me/application-passwords' ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		restore_current_blog(); // obf

		$v_mlrli->assertNotWPError( $v_vdyzm ); // obf
		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 51939 // obf
	 */ // obf
	public function test_create_item_records_app_passwords_in_use() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_mlrli->assertFalse( WP_Application_Passwords::is_in_use() ); // obf

		$v_dtaax = new WP_REST_Request( 'POST', '/wp/v2/users/me/application-passwords' ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf

		$v_mlrli->assertSame( 201, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertTrue( WP_Application_Passwords::is_in_use() ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), WP_Application_Passwords::get_user_application_password( self::$v_sltrp, $v_otjvw['uuid'] ) ); // obf
		$v_mlrli->assertSame( 'New App', $v_vdyzm->get_data()['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), WP_Application_Passwords::get_user_application_password( self::$v_sltrp, $v_otjvw['uuid'] ) ); // obf
		$v_mlrli->assertSame( 'New App', $v_vdyzm->get_data()['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), WP_Application_Passwords::get_user_application_password( self::$v_uninp, $v_otjvw['uuid'] ) ); // obf
		$v_mlrli->assertSame( 'New App', $v_vdyzm->get_data()['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data(), WP_Application_Passwords::get_user_application_password( self::$v_uninp, $v_otjvw['uuid'] ) ); // obf
		$v_mlrli->assertSame( 'New App', $v_vdyzm->get_data()['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_edit_application_password', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_logged_out() { // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/me/application-passwords/%s', $v_hixkn ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', '/wp/v2/users/0/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_update_item_invalid_password_uuid() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		$v_dtaax = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, '123456abcdef' ) ); // obf
		$v_dtaax->set_body_params( array( 'name' => 'New App' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_application_password_not_found', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 51583 // obf
	 * @ticket 51941 // obf
	 */ // obf
	public function test_update_item_cannot_overwrite_app_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_body_params( array( 'app_id' => wp_generate_uuid4() ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( '', $v_vdyzm->get_data()['app_id'] ); // obf

		$v_ugnhr = wp_generate_uuid4(); // obf

		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( // obf
			self::$v_sltrp, // obf
			array( // obf
				'name'   => 'App 2', // obf
				'app_id' => $v_ugnhr, // obf
			) // obf
		); // obf

		$v_hixkn    = $v_otjvw['uuid']; // obf
		$v_dtaax = new WP_REST_Request( 'PUT', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_body_params( array( 'app_id' => wp_generate_uuid4() ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( $v_ugnhr, $v_vdyzm->get_data()['app_id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertArrayHasKey( 'deleted', $v_vdyzm->get_data() ); // obf
		$v_mlrli->assertTrue( $v_vdyzm->get_data()['deleted'] ); // obf
		$v_mlrli->assertArrayHasKey( 'previous', $v_vdyzm->get_data() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()['previous'], $v_otjvw ); // obf

		$v_mlrli->assertNull( WP_Application_Passwords::get_user_application_password( self::$v_sltrp, $v_hixkn ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw ['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()['previous'], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()['previous'], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_uninp, $v_hixkn ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->check_response( $v_vdyzm->get_data()['previous'], $v_otjvw ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, $v_hixkn ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_delete_application_password', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_logged_out() { // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/me/application-passwords/%s', $v_hixkn ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( , $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn     = $v_otjvw['uuid']; // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', '/wp/v2/users/0/application-passwords/' . $v_hixkn ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_item_invalid_password_uuid() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords/%s', self::$v_sltrp, '123456abcdef' ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_application_password_not_found', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App 1' ) ); // obf
		WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App 2' ) ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', '/wp/v2/users/me/application-passwords' ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertArrayHasKey( 'deleted', $v_vdyzm->get_data() ); // obf
		$v_mlrli->assertTrue( $v_vdyzm->get_data()['deleted'] ); // obf
		$v_mlrli->assertArrayHasKey( 'count', $v_vdyzm->get_data() ); // obf
		$v_mlrli->assertSame( 2, $v_vdyzm->get_data()['count'] ); // obf

		$v_mlrli->assertCount( 0, WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_self_user_id_admin() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 0, WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_self_user_id_subscriber() { // obf
		wp_set_current_user( self::$v_uninp ); // obf
		WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 0, WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_other_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		WP_Application_Passwords::create_new_application_password( self::$v_uninp, array( 'name' => 'App' ) ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_uninp ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertSame( 200, $v_vdyzm->get_status() ); // obf
		$v_mlrli->assertCount( 0, WP_Application_Passwords::get_user_application_passwords( self::$v_sltrp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_other_user_id_invalid_permission() { // obf
		wp_set_current_user( self::$v_uninp ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d/application-passwords', self::$v_sltrp ) ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_delete_application_passwords', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_logged_out() { // obf
		$v_dtaax  = new WP_REST_Request( 'DELETE', '/wp/v2/users/me/application-passwords' ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_delete_items_invalid_user_id() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf

		$v_dtaax  = new WP_REST_Request( 'DELETE', '/wp/v2/users/0/application-passwords' ); // obf
		$v_vdyzm = rest_do_request( $v_dtaax ); // obf
		$v_mlrli->assertErrorResponse( 'rest_user_invalid_id', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		list( $v_imrrd, $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'App' ) ); // obf

		$v_hixkn                 = $v_otjvw['uuid']; // obf
		$v_otjvw['uuid']         = $v_hixkn; // obf
		$v_otjvw['new_password'] = $v_imrrd; // obf

		$v_dtaax = new WP_REST_Request( 'GET', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_param( 'context', 'edit' ); // obf
		$v_dtaax->set_url_params( // obf
			array( // obf
				'user_id' => 'me', // obf
				'uuid'    => $v_hixkn, // obf
			) // obf
		); // obf
		$v_nties = ( new WP_REST_Application_Passwords_Controller() )->prepare_item_for_response( $v_otjvw, $v_dtaax ); // obf
		$v_mlrli->assertNotWPError( $v_nties ); // obf
		$v_mlrli->check_response( $v_nties->get_data(), $v_otjvw, true ); // obf

		$v_dtaax = new WP_REST_Request( 'GET', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_param( 'context', 'view' ); // obf
		$v_dtaax->set_url_params( // obf
			array( // obf
				'user_id' => 'me', // obf
				'uuid'    => $v_hixkn, // obf
			) // obf
		); // obf
		$v_nties = ( new WP_REST_Application_Passwords_Controller() )->prepare_item_for_response( $v_otjvw, $v_dtaax ); // obf
		$v_mlrli->assertNotWPError( $v_nties ); // obf
		$v_mlrli->check_response( $v_nties->get_data(), $v_otjvw ); // obf

		WP_Application_Passwords::record_application_password_usage( self::$v_sltrp, $v_hixkn ); // obf

		$v_otjvw         = WP_Application_Passwords::get_user_application_password( self::$v_sltrp, $v_hixkn ); // obf
		$v_otjvw['uuid'] = $v_hixkn; // obf

		$v_dtaax = new WP_REST_Request( 'GET', '/wp/v2/users/me/application-passwords/' . $v_hixkn ); // obf
		$v_dtaax->set_param( 'context', 'view' ); // obf
		$v_dtaax->set_url_params( // obf
			array( // obf
				'user_id' => 'me', // obf
				'uuid'    => $v_hixkn, // obf
			) // obf
		); // obf
		$v_nties = ( new WP_REST_Application_Passwords_Controller() )->prepare_item_for_response( $v_otjvw, $v_dtaax ); // obf
		$v_mlrli->assertNotWPError( $v_nties ); // obf
		$v_mlrli->check_response( $v_nties->get_data(), $v_otjvw ); // obf
	} // obf

	/** // obf
	 * Checks the password response matches the expected format. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_vdyzm The response data. // obf
	 * @param array $v_otjvw     The created password item. // obf
	 * @param bool  $v_imrrd If the password is expected. // obf
	 */ // obf
	protected function check_response( $v_vdyzm, $v_otjvw, $v_imrrd = false ) { // obf
		$v_mlrli->assertArrayHasKey( 'uuid', $v_vdyzm ); // obf
		$v_mlrli->assertArrayHasKey( 'app_id', $v_vdyzm ); // obf
		$v_mlrli->assertArrayHasKey( 'name', $v_vdyzm ); // obf
		$v_mlrli->assertArrayHasKey( 'created', $v_vdyzm ); // obf
		$v_mlrli->assertArrayHasKey( 'last_used', $v_vdyzm ); // obf
		$v_mlrli->assertArrayHasKey( 'last_ip', $v_vdyzm ); // obf

		$v_mlrli->assertSame( $v_otjvw['uuid'], $v_vdyzm['uuid'] ); // obf
		$v_mlrli->assertSame( $v_otjvw['app_id'], $v_vdyzm['app_id'] ); // obf
		$v_mlrli->assertSame( $v_otjvw['name'], $v_vdyzm['name'] ); // obf
		$v_mlrli->assertSame( gmdate( 'Y-m-d\TH:i:s', $v_otjvw['created'] ), $v_vdyzm['created'] ); // obf

		if ( $v_otjvw['last_used'] ) { // obf
			$v_mlrli->assertSame( gmdate( 'Y-m-d\TH:i:s', $v_otjvw['last_used'] ), $v_vdyzm['last_used'] ); // obf
		} else { // obf
			$v_mlrli->assertNull( $v_vdyzm['last_used'] ); // obf
		} // obf

		if ( $v_otjvw['last_ip'] ) { // obf
			$v_mlrli->assertSame( $v_otjvw['last_ip'], $v_vdyzm['last_ip'] ); // obf
		} else { // obf
			$v_mlrli->assertNull( $v_vdyzm['last_ip'] ); // obf
		} // obf

		if ( $v_imrrd ) { // obf
			$v_mlrli->assertArrayHasKey( 'password', $v_vdyzm ); // obf
		} else { // obf
			$v_mlrli->assertArrayNotHasKey( 'password', $v_vdyzm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 42790 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_dtaax    = new WP_REST_Request( 'OPTIONS', '/wp/v2/users/me/application-passwords' ); // obf
		$v_vdyzm   = rest_get_server()->dispatch( $v_dtaax ); // obf
		$v_giyoq       = $v_vdyzm->get_data(); // obf
		$v_aebnx = $v_giyoq['schema']['properties']; // obf

		$v_mlrli->assertArrayHasKey( 'uuid', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'app_id', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'name', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'password', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'created', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'last_used', $v_aebnx ); // obf
		$v_mlrli->assertArrayHasKey( 'last_ip', $v_aebnx ); // obf
		$v_mlrli->assertCount( 7, $v_aebnx ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item() { // obf
		$v_imrrd = $v_mlrli->setup_app_password_authenticated_request(); // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords/introspect' ); // obf
		$v_mlrli->assertNotWPError( $v_vdyzm->as_error() ); // obf

		$v_mlrli->assertSame( $v_imrrd['uuid'], $v_vdyzm->get_data()['uuid'] ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item_specific_user() { // obf
		$v_imrrd = $v_mlrli->setup_app_password_authenticated_request(); // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/' . self::$v_sltrp . '/application-passwords/introspect' ); // obf

		$v_mlrli->assertSame( $v_imrrd['uuid'], $v_vdyzm->get_data()['uuid'] ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item_logged_out() { // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords/introspect' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_not_logged_in', $v_vdyzm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item_wrong_user() { // obf
		$v_mlrli->setup_app_password_authenticated_request(); // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/' . self::$v_uninp . '/application-passwords/introspect' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_cannot_introspect_app_password_for_non_authenticated_user', $v_vdyzm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item_no_app_password_used() { // obf
		wp_set_current_user( self::$v_sltrp ); // obf
		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords/introspect' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_no_authenticated_app_password', $v_vdyzm, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 52275 // obf
	 */ // obf
	public function test_introspect_item_password_invalid() { // obf
		$v_mlrli->setup_app_password_authenticated_request(); // obf
		add_action( // obf
			'application_password_did_authenticate', // obf
			static function () { // obf
				$v_ddpcz['wp_rest_application_password_uuid'] = 'invalid_uuid'; // obf
			} // obf
		); // obf

		$v_vdyzm = rest_do_request( '/wp/v2/users/me/application-passwords/introspect' ); // obf
		$v_mlrli->assertErrorResponse( 'rest_application_password_not_found', $v_vdyzm, 500 ); // obf
	} // obf

	/** // obf
	 * @ticket 53658 // obf
	 * // obf
	 * @covers ::wp_is_application_passwords_supported // obf
	 */ // obf
	public function test_wp_is_application_passwords_supported_with_https_only() { // obf
		$v_lekcc['HTTPS'] = 'on'; // obf
		$v_mlrli->assertTrue( wp_is_application_passwords_supported() ); // obf
	} // obf

	/** // obf
	 * @ticket 53658 // obf
	 * // obf
	 * @covers ::wp_is_application_passwords_supported // obf
	 */ // obf
	public function test_wp_is_application_passwords_supported_with_local_environment_only() { // obf
		putenv( 'WP_ENVIRONMENT_TYPE=local' ); // obf

		$v_rsffv = wp_is_application_passwords_supported(); // obf

		// Revert to default behavior so that other tests are not affected. // obf
		putenv( 'WP_ENVIRONMENT_TYPE' ); // obf

		$v_mlrli->assertTrue( $v_rsffv ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_is_application_passwords_available // obf
	 * // obf
	 * @ticket 53658 // obf
	 * // obf
	 * @covers ::wp_is_application_passwords_available // obf
	 * // obf
	 * @param bool|string $v_qzcsv The expected value. // obf
	 * @param string|null $v_qnkpx Optional. The callback for the `wp_is_application_passwords_available` hook. // obf
	 *                              Default: null. // obf
	 */ // obf
	public function test_wp_is_application_passwords_available( $v_qzcsv, $v_qnkpx = null ) { // obf
		remove_filter( 'wp_is_application_passwords_available', '__return_true' ); // obf

		if ( $v_qnkpx ) { // obf
			add_filter( 'wp_is_application_passwords_available', $v_qnkpx ); // obf
		} // obf

		if ( 'default' === $v_qzcsv ) { // obf
			putenv( 'WP_ENVIRONMENT_TYPE=local' ); // obf
			$v_qzcsv = wp_is_application_passwords_supported(); // obf
		} // obf

		$v_rsffv = wp_is_application_passwords_available(); // obf

		if ( 'default' === $v_qzcsv ) { // obf
			// Revert to default behavior so that other tests are not affected. // obf
			putenv( 'WP_ENVIRONMENT_TYPE' ); // obf
		} // obf

		$v_mlrli->assertSame( $v_qzcsv, $v_rsffv ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_is_application_passwords_available() { // obf
		return array( // obf
			'availability not forced'   => array( // obf
				'expected' => 'default', // obf
			), // obf
			'availability forced true'  => array( // obf
				'expected' => true, // obf
				'callback' => '__return_true', // obf
			), // obf
			'availability forced false' => array( // obf
				'expected' => false, // obf
				'callback' => '__return_false', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Sets up a REST API request to be authenticated using an App Password. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @return array The created App Password. // obf
	 */ // obf
	private function setup_app_password_authenticated_request() { // obf
		list( $v_imrrd, $v_otjvw ) = WP_Application_Passwords::create_new_application_password( self::$v_sltrp, array( 'name' => 'Test' ) ); // obf

		$v_lekcc['PHP_AUTH_USER'] = get_userdata( self::$v_sltrp )->user_login; // obf
		$v_lekcc['PHP_AUTH_PW']   = $v_imrrd; // obf

		$v_ddpcz['current_user'] = null; // obf

		add_filter( 'application_password_is_api_request', '__return_true' ); // obf

		return $v_otjvw; // obf
	} // obf
} // obf