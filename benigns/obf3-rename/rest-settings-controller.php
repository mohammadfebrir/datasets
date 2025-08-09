

<?php // obf
/** // obf
 * Unit tests covering WP_Test_REST_Settings_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Settings_Controller extends WP_Test_REST_Controller_Testcase { // obf

	protected static $v_nehmp; // obf
	protected static $v_sfdtt; // obf

	/** // obf
	 * @var WP_REST_Settings_Controller // obf
	 */ // obf
	private $v_fabol; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_kjrha ) { // obf
		self::$v_nehmp = $v_kjrha->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		self::$v_sfdtt = $v_kjrha->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_nehmp ); // obf
		self::delete_user( self::$v_sfdtt ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_jksaj->endpoint = new WP_REST_Settings_Controller(); // obf
	} // obf

	public function tear_down() { // obf
		$v_mvakv = array( // obf
			'mycustomsetting', // obf
			'mycustomsetting1', // obf
			'mycustomsetting2', // obf
			'mycustomarraysetting', // obf
		); // obf

		$v_ntekn = get_registered_settings(); // obf

		foreach ( $v_mvakv as $v_cejae ) { // obf
			if ( isset( $v_ntekn[ $v_cejae ] ) ) { // obf
				unregister_setting( 'somegroup', $v_cejae ); // obf
			} // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_eextz = rest_get_server()->get_routes(); // obf
		$v_jksaj->assertArrayHasKey( '/wp/v2/settings', $v_eextz ); // obf
	} // obf

	public function test_get_item() { // obf
		/** Individual settings can't be gotten */ // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings/title' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertSame( 404, $v_qbmtv->get_status() ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	public function test_get_item_is_not_public_not_authenticated() { // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertSame( 401, $v_qbmtv->get_status() ); // obf
	} // obf

	public function test_get_item_is_not_public_no_permission() { // obf
		wp_set_current_user( self::$v_sfdtt ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertSame( 403, $v_qbmtv->get_status() ); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_cgmxc   = array_keys( $v_mdndo ); // obf

		$v_pvaxt = array( // obf
			'title', // obf
			'description', // obf
			'timezone', // obf
			'date_format', // obf
			'time_format', // obf
			'site_logo', // obf
			'start_of_week', // obf
			'language', // obf
			'use_smilies', // obf
			'default_category', // obf
			'default_post_format', // obf
			'posts_per_page', // obf
			'show_on_front', // obf
			'page_on_front', // obf
			'page_for_posts', // obf
			'default_ping_status', // obf
			'default_comment_status', // obf
			'site_icon', // Registered in wp-includes/blocks/site-logo.php // obf
		); // obf

		if ( ! is_multisite() ) { // obf
			$v_pvaxt[] = 'url'; // obf
			$v_pvaxt[] = 'email'; // obf
		} // obf

		sort( $v_pvaxt ); // obf
		sort( $v_cgmxc ); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( $v_pvaxt, $v_cgmxc ); // obf
	} // obf

	public function test_get_item_value_is_cast_to_type() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		update_option( 'posts_per_page', 'invalid_number' ); // This is cast to (int) 1. // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 1, $v_mdndo['posts_per_page'] ); // obf
	} // obf

	public function test_get_item_with_custom_setting() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'name'   => 'mycustomsettinginrest', // obf
					'schema' => array( // obf
						'enum'    => array( 'validvalue1', 'validvalue2' ), // obf
						'default' => 'validvalue1', // obf
					), // obf
				), // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertArrayHasKey( 'mycustomsettinginrest', $v_mdndo ); // obf
		$v_jksaj->assertSame( 'validvalue1', $v_mdndo['mycustomsettinginrest'] ); // obf

		update_option( 'mycustomsetting', 'validvalue2' ); // obf

		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( 'validvalue2', $v_mdndo['mycustomsettinginrest'] ); // obf
	} // obf

	public function test_get_item_with_custom_array_setting() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
				'type'         => 'array', // obf
			) // obf
		); // obf

		// Array is cast to correct types. // obf
		update_option( 'mycustomsetting', array( '1', '2' ) ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array( 1, 2 ), $v_mdndo['mycustomsetting'] ); // obf

		// Empty array works as expected. // obf
		update_option( 'mycustomsetting', array() ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array(), $v_mdndo['mycustomsetting'] ); // obf

		// Invalid value. // obf
		update_option( 'mycustomsetting', array( array( 1 ) ) ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertNull( $v_mdndo['mycustomsetting'] ); // obf

		// No option value. // obf
		delete_option( 'mycustomsetting' ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertNull( $v_mdndo['mycustomsetting'] ); // obf
	} // obf

	public function test_get_item_with_custom_object_setting() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type' => 'integer', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'type'         => 'object', // obf
			) // obf
		); // obf

		// We have to re-register the route, as the args changes based off registered settings. // obf
		rest_get_server()->override_by_default = true; // obf
		$v_jksaj->endpoint->register_routes(); // obf

		// Object is cast to correct types. // obf
		update_option( 'mycustomsetting', array( 'a' => '1' ) ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array( 'a' => 1 ), $v_mdndo['mycustomsetting'] ); // obf

		// Empty array works as expected. // obf
		update_option( 'mycustomsetting', array() ); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array(), $v_mdndo['mycustomsetting'] ); // obf

		// Invalid value. // obf
		update_option( // obf
			'mycustomsetting', // obf
			array( // obf
				'a' => 1, // obf
				'b' => 2, // obf
			) // obf
		); // obf
		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertNull( $v_mdndo['mycustomsetting'] ); // obf
	} // obf

	public function get_setting_custom_callback( $v_tlwqk, $v_armap, $v_mndpr ) { // obf
		switch ( $v_armap ) { // obf
			case 'mycustomsetting1': // obf
				return 'filtered1'; // obf
		} // obf
		return $v_tlwqk; // obf
	} // obf

	public function test_get_item_with_filter() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		add_filter( 'rest_pre_get_setting', array( $v_jksaj, 'get_setting_custom_callback' ), 10, 3 ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting1', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'name' => 'mycustomsettinginrest1', // obf
				), // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting2', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'name' => 'mycustomsettinginrest2', // obf
				), // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		update_option( 'mycustomsetting1', 'unfiltered1' ); // obf
		update_option( 'mycustomsetting2', 'unfiltered2' ); // obf

		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf

		$v_jksaj->assertArrayHasKey( 'mycustomsettinginrest1', $v_mdndo ); // obf
		$v_jksaj->assertSame( 'unfiltered1', $v_mdndo['mycustomsettinginrest1'] ); // obf

		$v_jksaj->assertArrayHasKey( 'mycustomsettinginrest2', $v_mdndo ); // obf
		$v_jksaj->assertSame( 'unfiltered2', $v_mdndo['mycustomsettinginrest2'] ); // obf

		remove_all_filters( 'rest_pre_get_setting' ); // obf
	} // obf

	public function test_get_item_with_invalid_value_array_in_options() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'name'   => 'mycustomsettinginrest', // obf
					'schema' => array( // obf
						'enum'    => array( 'validvalue1', 'validvalue2' ), // obf
						'default' => 'validvalue1', // obf
					), // obf
				), // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		update_option( 'mycustomsetting', array( 'A sneaky array!' ) ); // obf

		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertNull( $v_mdndo['mycustomsettinginrest'] ); // obf
	} // obf

	public function test_get_item_with_invalid_object_array_in_options() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'name'   => 'mycustomsettinginrest', // obf
					'schema' => array( // obf
						'enum'    => array( 'validvalue1', 'validvalue2' ), // obf
						'default' => 'validvalue1', // obf
					), // obf
				), // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		update_option( 'mycustomsetting', (object) array( 'A sneaky array!' ) ); // obf

		$v_zqzua  = new WP_REST_Request( 'GET', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertNull( $v_mdndo['mycustomsettinginrest'] ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'title', 'The new title!' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 'The new title!', $v_mdndo['title'] ); // obf
		$v_jksaj->assertSame( get_option( 'blogname' ), $v_mdndo['title'] ); // obf
	} // obf

	public function update_setting_custom_callback( $v_tlwqk, $v_armap, $v_xgwlv, $v_mndpr ) { // obf
		if ( 'title' === $v_armap && 'The new title!' === $v_xgwlv ) { // obf
			// Do not allow changing the title in this case. // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	public function test_update_item_with_array() { // obf
		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
				'type'         => 'array', // obf
			) // obf
		); // obf

		// We have to re-register the route, as the args changes based off registered settings. // obf
		rest_get_server()->override_by_default = true; // obf
		$v_jksaj->endpoint->register_routes(); // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array( '1', '2' ) ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array( 1, 2 ), $v_mdndo['mycustomsetting'] ); // obf
		$v_jksaj->assertSame( array( 1, 2 ), get_option( 'mycustomsetting' ) ); // obf

		// Setting an empty array. // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array() ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array(), $v_mdndo['mycustomsetting'] ); // obf
		$v_jksaj->assertSame( array(), get_option( 'mycustomsetting' ) ); // obf

		// Setting an invalid array. // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array( 'invalid' ) ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf

		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	public function test_update_item_with_nested_object() { // obf
		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type'       => 'object', // obf
								'properties' => array( // obf
									'b' => array( // obf
										'type' => 'number', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'type'         => 'object', // obf
			) // obf
		); // obf

		// We have to re-register the route, as the args changes based off registered settings. // obf
		rest_get_server()->override_by_default = true; // obf
		$v_jksaj->endpoint->register_routes(); // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( // obf
			'mycustomsetting', // obf
			array( // obf
				'a' => array( // obf
					'b' => 1, // obf
					'c' => 1, // obf
				), // obf
			) // obf
		); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	public function test_update_item_with_object() { // obf
		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type' => 'integer', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'type'         => 'object', // obf
			) // obf
		); // obf

		// We have to re-register the route, as the args changes based off registered settings. // obf
		rest_get_server()->override_by_default = true; // obf
		$v_jksaj->endpoint->register_routes(); // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array( 'a' => 1 ) ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array( 'a' => 1 ), $v_mdndo['mycustomsetting'] ); // obf
		$v_jksaj->assertSame( array( 'a' => 1 ), get_option( 'mycustomsetting' ) ); // obf

		// Setting an empty object. // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array() ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( array(), $v_mdndo['mycustomsetting'] ); // obf
		$v_jksaj->assertSame( array(), get_option( 'mycustomsetting' ) ); // obf

		// Provide more keys. // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( // obf
			'mycustomsetting', // obf
			array( // obf
				'a' => 1, // obf
				'b' => 2, // obf
			) // obf
		); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf

		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf

		// Setting an invalid object. // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', array( 'a' => 'invalid' ) ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	public function test_update_item_with_filter() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'title', 'The old title!' ); // obf
		$v_zqzua->set_param( 'description', 'The old description!' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 'The old title!', $v_mdndo['title'] ); // obf
		$v_jksaj->assertSame( 'The old description!', $v_mdndo['description'] ); // obf
		$v_jksaj->assertSame( get_option( 'blogname' ), $v_mdndo['title'] ); // obf
		$v_jksaj->assertSame( get_option( 'blogdescription' ), $v_mdndo['description'] ); // obf

		add_filter( 'rest_pre_update_setting', array( $v_jksaj, 'update_setting_custom_callback' ), 10, 4 ); // obf

		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'title', 'The new title!' ); // obf
		$v_zqzua->set_param( 'description', 'The new description!' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 'The old title!', $v_mdndo['title'] ); // obf
		$v_jksaj->assertSame( 'The new description!', $v_mdndo['description'] ); // obf
		$v_jksaj->assertSame( get_option( 'blogname' ), $v_mdndo['title'] ); // obf
		$v_jksaj->assertSame( get_option( 'blogdescription' ), $v_mdndo['description'] ); // obf

		remove_all_filters( 'rest_pre_update_setting' ); // obf
	} // obf

	public function test_update_item_with_invalid_type() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'title', array( 'rendered' => 'This should fail.' ) ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	public function test_update_item_with_integer() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'posts_per_page', 11 ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
	} // obf

	public function test_update_item_with_invalid_float_for_integer() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'posts_per_page', 10.5 ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	/** // obf
	 * Setting an item to "null" will essentially restore it to it's default value. // obf
	 */ // obf
	public function test_update_item_with_null() { // obf
		update_option( 'posts_per_page', 9 ); // obf

		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'posts_per_page', null ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 10, $v_mdndo['posts_per_page'] ); // obf
	} // obf

	public function test_update_item_with_invalid_enum() { // obf
		update_option( 'posts_per_page', 9 ); // obf

		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'default_ping_status', 'open&closed' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertErrorResponse( 'rest_invalid_param', $v_qbmtv, 400 ); // obf
	} // obf

	public function test_update_item_with_invalid_stored_value_in_options() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		update_option( 'mycustomsetting', array( 'A sneaky array!' ) ); // obf

		wp_set_current_user( self::$v_nehmp ); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->set_param( 'mycustomsetting', null ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf

		$v_jksaj->assertErrorResponse( 'rest_invalid_stored_value', $v_qbmtv, 500 ); // obf
	} // obf

	public function test_delete_item() { // obf
		/** Settings can't be deleted */ // obf
		$v_zqzua  = new WP_REST_Request( 'DELETE', '/wp/v2/settings/title' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_jksaj->assertSame( 404, $v_qbmtv->get_status() ); // obf
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
	public function test_get_item_schema() { // obf
		// Controller does not implement get_item_schema(). // obf
	} // obf

	/** // obf
	 * @ticket 42875 // obf
	 */ // obf
	public function test_register_setting_issues_doing_it_wrong_when_show_in_rest_is_true() { // obf
		$v_jksaj->setExpectedIncorrectUsage( 'register_setting' ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomarraysetting', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42875 // obf
	 */ // obf
	public function test_register_setting_issues_doing_it_wrong_when_show_in_rest_omits_schema() { // obf
		$v_jksaj->setExpectedIncorrectUsage( 'register_setting' ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomarraysetting', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'prepare_callback' => 'rest_sanitize_value_from_schema', // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42875 // obf
	 */ // obf
	public function test_register_setting_issues_doing_it_wrong_when_show_in_rest_omits_schema_items() { // obf
		$v_jksaj->setExpectedIncorrectUsage( 'register_setting' ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomarraysetting', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'default' => array( 'Hi!' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56493 // obf
	 */ // obf
	public function test_register_setting_with_custom_additional_properties_value() { // obf
		wp_set_current_user( self::$v_nehmp ); // obf

		register_setting( // obf
			'somegroup', // obf
			'mycustomsetting', // obf
			array( // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'                 => 'object', // obf
						'properties'           => array( // obf
							'test1' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
						'additionalProperties' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_mdndo    = array( // obf
			'mycustomsetting' => array( // obf
				'test1' => 'my-string', // obf
				'test2' => '2', // obf
				'test3' => 3, // obf
			), // obf
		); // obf
		$v_zqzua = new WP_REST_Request( 'PUT', '/wp/v2/settings' ); // obf
		$v_zqzua->add_header( 'Content-Type', 'application/json' ); // obf
		$v_zqzua->set_body( wp_json_encode( $v_mdndo ) ); // obf

		$v_qbmtv = rest_do_request( $v_zqzua ); // obf

		$v_jksaj->assertSame( 200, $v_qbmtv->get_status() ); // obf
		$v_jksaj->assertSame( 'my-string', $v_qbmtv->data['mycustomsetting']['test1'] ); // obf
		$v_jksaj->assertSame( 2, $v_qbmtv->data['mycustomsetting']['test2'] ); // obf
		$v_jksaj->assertSame( 3, $v_qbmtv->data['mycustomsetting']['test3'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61023 // obf
	 */ // obf
	public function test_provides_setting_metadata_in_schema() { // obf
		$v_zqzua  = new WP_REST_Request( 'OPTIONS', '/wp/v2/settings' ); // obf
		$v_qbmtv = rest_get_server()->dispatch( $v_zqzua ); // obf
		$v_mdndo     = $v_qbmtv->get_data(); // obf
		$v_givdi    = $v_mdndo['schema']['properties']['title']; // obf

		$v_jksaj->assertSame( 'string', $v_givdi['type'] ); // obf
		$v_jksaj->assertSame( 'Title', $v_givdi['title'] ); // obf
		$v_jksaj->assertSame( 'Site title.', $v_givdi['description'] ); // obf
		$v_jksaj->assertSame( null, $v_givdi['default'] ); // obf
	} // obf
} // obf