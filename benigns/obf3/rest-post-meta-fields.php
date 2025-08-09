

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Posts meta functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Post_Meta_Fields extends WP_Test_REST_TestCase { // obf
	protected static $v_jlnga; // obf
	protected static $v_kkodq; // obf
	protected static $v_zfxtc; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_pkvax ) { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'supports'     => array( 'custom-fields', 'revisions' ), // obf
			) // obf
		); // obf

		self::$v_jlnga = isset( $v_gxxcd['wp_meta_keys'] ) ? $v_gxxcd['wp_meta_keys'] : array(); // obf
		self::$v_kkodq            = $v_pkvax->post->create(); // obf
		self::$v_zfxtc        = $v_pkvax->post->create( array( 'post_type' => 'cpt' ) ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		$v_gxxcd['wp_meta_keys'] = self::$v_jlnga; // obf
		wp_delete_post( self::$v_kkodq, true ); // obf
		wp_delete_post( self::$v_zfxtc, true ); // obf

		unregister_post_type( 'cpt' ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		register_meta( // obf
			'post', // obf
			'test_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_bad_auth', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => true, // obf
				'auth_callback' => '__return_false', // obf
				'type'          => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_bad_auth_multi', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => false, // obf
				'auth_callback' => '__return_false', // obf
				'type'          => 'string', // obf
			) // obf
		); // obf
		register_meta( 'post', 'test_no_rest', array() ); // obf
		register_meta( // obf
			'post', // obf
			'test_rest_disabled', // obf
			array( // obf
				'show_in_rest' => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_custom_schema', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'integer', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type' => 'number', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_custom_schema_multi', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'integer', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type' => 'number', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_invalid_type', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'lalala', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_no_type', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => null, // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test_custom_name', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'show_in_rest' => array( // obf
					'name' => 'new_name', // obf
				), // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test_custom_name_multi', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
				'show_in_rest' => array( // obf
					'name' => 'new_name_multi', // obf
				), // obf
			) // obf
		); // obf

		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'supports'     => array( 'custom-fields', 'revisions' ), // obf
			) // obf
		); // obf

		register_post_meta( // obf
			'cpt', // obf
			'test_cpt_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
			) // obf
		); // obf

		register_post_meta( // obf
			'cpt', // obf
			'test_cpt_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
			) // obf
		); // obf

		// Register 'test_single' on subtype to override for bad auth. // obf
		register_post_meta( // obf
			'cpt', // obf
			'test_single', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => true, // obf
				'auth_callback' => '__return_false', // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test_boolean_update', // obf
			array( // obf
				'single'            => true, // obf
				'type'              => 'boolean', // obf
				'sanitize_callback' => 'absint', // obf
				'show_in_rest'      => true, // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test_textured_text_update', // obf
			array( // obf
				'single'            => true, // obf
				'type'              => 'string', // obf
				'sanitize_callback' => 'sanitize_text_field', // obf
				'show_in_rest'      => true, // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test_json_encoded', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		register_meta( // obf
			'post', // obf
			'test\'slashed\'key', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		register_post_meta( // obf
			'post', // obf
			'with_default', // obf
			array( // obf
				'type'         => 'string', // obf
				'single'       => true, // obf
				'show_in_rest' => true, // obf
				'default'      => 'Goodnight Moon', // obf
			) // obf
		); // obf

		register_post_meta( // obf
			'post', // obf
			'with_label', // obf
			array( // obf
				'type'         => 'string', // obf
				'single'       => true, // obf
				'show_in_rest' => true, // obf
				'label'        => 'Meta Label', // obf
				'default'      => '', // obf
			) // obf
		); // obf

		/** @var WP_REST_Server $v_qmwzo */ // obf
		global $v_qmwzo; // obf
		$v_qmwzo = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_qmwzo ); // obf
	} // obf

	protected function grant_write_permission() { // obf
		// Ensure we have write permission. // obf
		$v_xvgqs = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		wp_set_current_user( $v_xvgqs ); // obf
	} // obf

	public function test_get_value() { // obf
		add_post_meta( self::$v_kkodq, 'test_single', 'testvalue' ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf

		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'test_single', $v_tygog ); // obf
		$v_itezk->assertSame( 'testvalue', $v_tygog['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_multi_value() { // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'value1' ); // obf
		$v_vibav = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'test_multi', $v_tygog ); // obf
		$v_itezk->assertIsArray( $v_tygog['test_multi'] ); // obf
		$v_itezk->assertContains( 'value1', $v_tygog['test_multi'] ); // obf

		// Check after an update. // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'value2' ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertContains( 'value1', $v_tygog['test_multi'] ); // obf
		$v_itezk->assertContains( 'value2', $v_tygog['test_multi'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_unregistered() { // obf
		add_post_meta( self::$v_kkodq, 'test_unregistered', 'value1' ); // obf
		$v_vibav = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayNotHasKey( 'test_unregistered', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_registered_no_api_access() { // obf
		add_post_meta( self::$v_kkodq, 'test_no_rest', 'for_the_wicked' ); // obf
		$v_vibav = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayNotHasKey( 'test_no_rest', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_registered_api_disabled() { // obf
		add_post_meta( self::$v_kkodq, 'test_rest_disabled', 'sleepless_nights' ); // obf
		$v_vibav = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayNotHasKey( 'test_rest_disabled', $v_tygog ); // obf
	} // obf

	public function test_get_value_types() { // obf
		register_meta( // obf
			'post', // obf
			'test_string', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_number', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'number', // obf
			) // obf
		); // obf
		register_meta( // obf
			'post', // obf
			'test_bool', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'boolean', // obf
			) // obf
		); // obf

		/** @var WP_REST_Server $v_qmwzo */ // obf
		global $v_qmwzo; // obf
		$v_qmwzo = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_qmwzo ); // obf

		add_post_meta( self::$v_kkodq, 'test_string', 42 ); // obf
		add_post_meta( self::$v_kkodq, 'test_number', '42' ); // obf
		add_post_meta( self::$v_kkodq, 'test_bool', 1 ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf

		$v_itezk->assertArrayHasKey( 'test_string', $v_tygog ); // obf
		$v_itezk->assertIsString( $v_tygog['test_string'] ); // obf
		$v_itezk->assertSame( '42', $v_tygog['test_string'] ); // obf

		$v_itezk->assertArrayHasKey( 'test_number', $v_tygog ); // obf
		$v_itezk->assertIsFloat( $v_tygog['test_number'] ); // obf
		$v_itezk->assertSame( 42.0, $v_tygog['test_number'] ); // obf

		$v_itezk->assertArrayHasKey( 'test_bool', $v_tygog ); // obf
		$v_itezk->assertIsBool( $v_tygog['test_bool'] ); // obf
		$v_itezk->assertTrue( $v_tygog['test_bool'] ); // obf
	} // obf

	public function test_get_value_custom_name() { // obf
		add_post_meta( self::$v_kkodq, 'test_custom_name', 'janet' ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf

		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'new_name', $v_tygog ); // obf
		$v_itezk->assertSame( 'janet', $v_tygog['new_name'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_value() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_single', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_single', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertSame( 'test_value', $v_tygog[0] ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'test_single', $v_tygog ); // obf
		$v_itezk->assertSame( 'test_value', $v_tygog['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_duplicate_single_value() { // obf
		// Start with an existing metakey and value. // obf
		$v_fgntm = update_post_meta( self::$v_kkodq, 'test_single', 'test_value' ); // obf
		$v_itezk->assertSame( 'test_value', get_post_meta( self::$v_kkodq, 'test_single', true ) ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_single', true ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertSame( 'test_value', $v_tygog ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'test_single', $v_tygog ); // obf
		$v_itezk->assertSame( 'test_value', $v_tygog['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_unauthenticated() { // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_cannot_edit', $v_ahuii, 401 ); // obf

		// Check that the value wasn't actually updated. // obf
		$v_itezk->assertEmpty( get_post_meta( self::$v_kkodq, 'test_single', false ) ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_blocked() { // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_bad_auth' => 'test_value', // obf
			), // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_cannot_update', $v_ahuii, 403 ); // obf
		$v_itezk->assertEmpty( get_post_meta( self::$v_kkodq, 'test_bad_auth', false ) ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_db_error() { // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_nvkbk; // obf
		$v_nvkbk->suppress_errors = true; // obf
		add_filter( 'query', array( $v_itezk, 'error_insert_query' ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		remove_filter( 'query', array( $v_itezk, 'error_insert_query' ) ); // obf
		$v_nvkbk->show_errors = true; // obf

		$v_itezk->assertErrorResponse( 'rest_meta_database_error', $v_ahuii, 500 ); // obf
	} // obf

	public function test_set_value_invalid_type() { // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_invalid_type', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_invalid_type' => 'test_value', // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertEmpty( get_post_meta( self::$v_kkodq, 'test_invalid_type', false ) ); // obf
	} // obf

	public function test_set_value_multiple() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertSame( 'val1', $v_tygog[0] ); // obf

		// Add another value. // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1', 'val2' ), // obf
			), // obf
		); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertContains( 'val1', $v_tygog ); // obf
		$v_itezk->assertContains( 'val2', $v_tygog ); // obf
	} // obf

	/** // obf
	 * Test removing only one item with duplicate items. // obf
	 */ // obf
	public function test_set_value_remove_one() { // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'c' ); // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'n' ); // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'n' ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'c', 'n' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertContains( 'c', $v_tygog ); // obf
		$v_itezk->assertContains( 'n', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value_multiple // obf
	 */ // obf
	public function test_set_value_multiple_unauthenticated() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		wp_set_current_user( 0 ); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_cannot_edit', $v_ahuii, 401 ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertEmpty( $v_tygog ); // obf
	} // obf

	public function test_set_value_invalid_value() { // obf
		register_meta( // obf
			'post', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => array( 'c', 'n' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_invalid_type', $v_ahuii, 400 ); // obf
	} // obf

	public function test_set_value_invalid_value_multiple() { // obf
		register_meta( // obf
			'post', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => array( array( 'a' ) ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_invalid_type', $v_ahuii, 400 ); // obf
	} // obf

	public function test_set_value_sanitized() { // obf
		register_meta( // obf
			'post', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'integer', // obf
			) // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => '1', // Set to a string. // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( 1, $v_anqnf['meta']['my_meta_key'] ); // obf
	} // obf

	public function test_set_value_csv() { // obf
		register_meta( // obf
			'post', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'integer', // obf
			) // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => '1,2,3', // Set to a string. // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( array( 1, 2, 3 ), $v_anqnf['meta']['my_meta_key'] ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value_multiple // obf
	 */ // obf
	public function test_set_value_multiple_blocked() { // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_bad_auth_multi' => array( 'test_value' ), // obf
			), // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_cannot_update', $v_ahuii, 403 ); // obf
		$v_itezk->assertEmpty( get_post_meta( self::$v_kkodq, 'test_bad_auth_multi', false ) ); // obf
	} // obf

	public function test_add_multi_value_db_error() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_nvkbk; // obf
		$v_nvkbk->suppress_errors = true; // obf
		add_filter( 'query', array( $v_itezk, 'error_insert_query' ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		remove_filter( 'query', array( $v_itezk, 'error_insert_query' ) ); // obf
		$v_nvkbk->show_errors = true; // obf

		$v_itezk->assertErrorResponse( 'rest_meta_database_error', $v_ahuii, 500 ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_value_single_custom_schema() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_custom_schema', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_custom_schema' => 3, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_schema', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertEquals( 3, $v_tygog[0] ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'test_custom_schema', $v_tygog ); // obf
		$v_itezk->assertEquals( 3, $v_tygog['test_custom_schema'] ); // obf
	} // obf

	public function test_set_value_multiple_custom_schema() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_custom_schema_multi', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_custom_schema_multi' => array( 2 ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_schema_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertEquals( 2, $v_tygog[0] ); // obf

		// Add another value. // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'test_custom_schema_multi' => array( 2, 8 ), // obf
			), // obf
		); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_schema_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertContains( '2', $v_tygog ); // obf
		$v_itezk->assertContains( '8', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value_custom_name // obf
	 */ // obf
	public function test_set_value_custom_name() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_custom_name', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'new_name' => 'janet', // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_name', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertSame( 'janet', $v_tygog[0] ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( 'new_name', $v_tygog ); // obf
		$v_itezk->assertSame( 'janet', $v_tygog['new_name'] ); // obf
	} // obf

	public function test_set_value_custom_name_multiple() { // obf
		// Ensure no data exists currently. // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_custom_name_multi', false ); // obf
		$v_itezk->assertEmpty( $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'new_name_multi' => array( 'janet' ), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_name_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 1, $v_tygog ); // obf
		$v_itezk->assertSame( 'janet', $v_tygog[0] ); // obf

		// Add another value. // obf
		$v_anqnf = array( // obf
			'meta' => array( // obf
				'new_name_multi' => array( 'janet', 'graeme' ), // obf
			), // obf
		); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_name_multi', false ); // obf
		$v_itezk->assertNotEmpty( $v_tygog ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertContains( 'janet', $v_tygog ); // obf
		$v_itezk->assertContains( 'graeme', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @ticket 38989 // obf
	 */ // obf
	public function test_set_value_invalid_meta_string_request_type() { // obf
		update_post_meta( self::$v_kkodq, 'test_single', 'So I tied an onion to my belt, which was the style at the time.' ); // obf
		$v_jmxko = get_post( self::$v_kkodq ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf = array( // obf
			'title' => 'Ignore this title', // obf
			'meta'  => 'Not an array.', // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertErrorResponse( 'rest_invalid_param', $v_ahuii, 400 ); // obf

		// The meta value should not have changed. // obf
		$v_irqdj = get_post_meta( self::$v_kkodq, 'test_single', true ); // obf
		$v_itezk->assertSame( 'So I tied an onion to my belt, which was the style at the time.', $v_irqdj ); // obf

		// Ensure the post title update was not processed. // obf
		$v_jqndv = get_post( self::$v_kkodq ); // obf
		$v_itezk->assertSame( $v_jmxko->post_title, $v_jqndv->post_title ); // obf
	} // obf

	/** // obf
	 * @ticket 38989 // obf
	 */ // obf
	public function test_set_value_invalid_meta_float_request_type() { // obf
		update_post_meta( self::$v_kkodq, 'test_single', 'Now, to take the ferry cost a nickel, and in those days, nickels had pictures of bumblebees on them.' ); // obf
		$v_jmxko = get_post( self::$v_kkodq ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf = array( // obf
			'content' => 'Ignore this content.', // obf
			'meta'    => 1.234, // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_invalid_param', $v_ahuii, 400 ); // obf

		// The meta value should not have changed. // obf
		$v_irqdj = get_post_meta( self::$v_kkodq, 'test_single', true ); // obf
		$v_itezk->assertSame( 'Now, to take the ferry cost a nickel, and in those days, nickels had pictures of bumblebees on them.', $v_irqdj ); // obf

		// Ensure the post content update was not processed. // obf
		$v_jqndv = get_post( self::$v_kkodq ); // obf
		$v_itezk->assertSame( $v_jmxko->post_content, $v_jqndv->post_content ); // obf
	} // obf

	/** // obf
	 * @ticket 50790 // obf
	 */ // obf
	public function test_remove_multi_value_with_empty_array() { // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'val1' ); // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertSame( array( 'val1' ), $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array(), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertEmpty( $v_tygog ); // obf
	} // obf

	/** // obf
	 * Ensure deleting non-existent meta data behaves gracefully. // obf
	 * // obf
	 * @ticket 52787 // obf
	 * @dataProvider data_delete_does_not_trigger_error_if_no_meta_values // obf
	 * // obf
	 * @param array|null $v_urfop Value used to delete meta data. // obf
	 */ // obf
	public function test_delete_does_not_trigger_error_if_no_meta_values( $v_urfop ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => $v_urfop, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * Data provider for test_delete_does_not_trigger_error_if_no_meta_values(). // obf
	 * // obf
	 * @return array[] Array of test parameters. // obf
	 */ // obf
	public function data_delete_does_not_trigger_error_if_no_meta_values() { // obf
		return array( // obf
			array( array() ), // obf
			array( null ), // obf
		); // obf
	} // obf

	public function test_remove_multi_value_db_error() { // obf
		add_post_meta( self::$v_kkodq, 'test_multi', 'val1' ); // obf
		$v_fgntm = get_post_meta( self::$v_kkodq, 'test_multi', false ); // obf
		$v_itezk->assertSame( array( 'val1' ), $v_fgntm ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_multi' => array(), // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_nvkbk; // obf
		$v_nvkbk->suppress_errors = true; // obf
		add_filter( 'query', array( $v_itezk, 'error_delete_query' ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		remove_filter( 'query', array( $v_itezk, 'error_delete_query' ) ); // obf
		$v_nvkbk->show_errors = true; // obf

		$v_itezk->assertErrorResponse( 'rest_meta_database_error', $v_ahuii, 500 ); // obf
	} // obf


	public function test_delete_value() { // obf
		add_post_meta( self::$v_kkodq, 'test_single', 'val1' ); // obf
		$v_nlppj = get_post_meta( self::$v_kkodq, 'test_single', true ); // obf
		$v_itezk->assertSame( 'val1', $v_nlppj ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_single' => null, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_single', false ); // obf
		$v_itezk->assertEmpty( $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_delete_value // obf
	 */ // obf
	public function test_delete_value_blocked() { // obf
		add_post_meta( self::$v_kkodq, 'test_bad_auth', 'val1' ); // obf
		$v_nlppj = get_post_meta( self::$v_kkodq, 'test_bad_auth', true ); // obf
		$v_itezk->assertSame( 'val1', $v_nlppj ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_bad_auth' => null, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertErrorResponse( 'rest_cannot_delete', $v_ahuii, 403 ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_bad_auth', true ); // obf
		$v_itezk->assertSame( 'val1', $v_tygog ); // obf
	} // obf

	/** // obf
	 * @depends test_delete_value // obf
	 */ // obf
	public function test_delete_value_db_error() { // obf
		add_post_meta( self::$v_kkodq, 'test_single', 'val1' ); // obf
		$v_nlppj = get_post_meta( self::$v_kkodq, 'test_single', true ); // obf
		$v_itezk->assertSame( 'val1', $v_nlppj ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'test_single' => null, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf
		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_nvkbk; // obf
		$v_nvkbk->suppress_errors = true; // obf
		add_filter( 'query', array( $v_itezk, 'error_delete_query' ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		remove_filter( 'query', array( $v_itezk, 'error_delete_query' ) ); // obf
		$v_nvkbk->show_errors = true; // obf

		$v_itezk->assertErrorResponse( 'rest_meta_database_error', $v_ahuii, 500 ); // obf
	} // obf

	public function test_delete_value_custom_name() { // obf
		add_post_meta( self::$v_kkodq, 'test_custom_name', 'janet' ); // obf
		$v_nlppj = get_post_meta( self::$v_kkodq, 'test_custom_name', true ); // obf
		$v_itezk->assertSame( 'janet', $v_nlppj ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_anqnf    = array( // obf
			'meta' => array( // obf
				'new_name' => null, // obf
			), // obf
		); // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'test_custom_name', false ); // obf
		$v_itezk->assertEmpty( $v_tygog ); // obf
	} // obf

	public function test_get_schema() { // obf
		$v_vibav  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_anqnf   = $v_ahuii->get_data(); // obf
		$v_ngycd = $v_anqnf['schema']; // obf

		$v_itezk->assertArrayHasKey( 'meta', $v_ngycd['properties'] ); // obf
		$v_mlfbl = $v_ngycd['properties']['meta']['properties']; // obf

		$v_itezk->assertArrayHasKey( 'test_single', $v_mlfbl ); // obf
		$v_itezk->assertSame( 'string', $v_mlfbl['test_single']['type'] ); // obf

		$v_itezk->assertArrayHasKey( 'test_multi', $v_mlfbl ); // obf
		$v_itezk->assertSame( 'array', $v_mlfbl['test_multi']['type'] ); // obf
		$v_itezk->assertArrayHasKey( 'items', $v_mlfbl['test_multi'] ); // obf
		$v_itezk->assertSame( 'string', $v_mlfbl['test_multi']['items']['type'] ); // obf

		$v_itezk->assertArrayHasKey( 'test_custom_schema', $v_mlfbl ); // obf
		$v_itezk->assertSame( 'number', $v_mlfbl['test_custom_schema']['type'] ); // obf

		$v_itezk->assertArrayNotHasKey( 'test_no_rest', $v_mlfbl ); // obf
		$v_itezk->assertArrayNotHasKey( 'test_rest_disabled', $v_mlfbl ); // obf
		$v_itezk->assertArrayNotHasKey( 'test_invalid_type', $v_mlfbl ); // obf
		$v_itezk->assertArrayNotHasKey( 'test_no_type', $v_mlfbl ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * // obf
	 * @dataProvider data_get_subtype_meta_value // obf
	 */ // obf
	public function test_get_subtype_meta_value( $v_qxaoq, $v_ctswi, $v_dlzoa, $v_gyavi ) { // obf
		$v_kkodq  = self::$v_kkodq; // obf
		$v_qxnyn = 'posts'; // obf
		if ( 'cpt' === $v_qxaoq ) { // obf
			$v_kkodq  = self::$v_zfxtc; // obf
			$v_qxnyn = 'cpt'; // obf
		} // obf

		$v_yjemk = 'testvalue'; // obf

		add_post_meta( $v_kkodq, $v_ctswi, $v_yjemk ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/%s/%d', $v_qxnyn, $v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf
		$v_itezk->assertIsArray( $v_anqnf['meta'] ); // obf

		if ( $v_gyavi ) { // obf
			$v_zytse = $v_yjemk; // obf
			if ( ! $v_dlzoa ) { // obf
				$v_zytse = array( $v_zytse ); // obf
			} // obf

			$v_itezk->assertArrayHasKey( $v_ctswi, $v_anqnf['meta'] ); // obf
			$v_itezk->assertSame( $v_zytse, $v_anqnf['meta'][ $v_ctswi ] ); // obf
		} else { // obf
			$v_itezk->assertArrayNotHasKey( $v_ctswi, $v_anqnf['meta'] ); // obf
		} // obf
	} // obf

	public function data_get_subtype_meta_value() { // obf
		return array( // obf
			array( 'cpt', 'test_cpt_single', true, true ), // obf
			array( 'cpt', 'test_cpt_multi', false, true ), // obf
			array( 'cpt', 'test_single', true, true ), // obf
			array( 'cpt', 'test_multi', false, true ), // obf
			array( 'post', 'test_cpt_single', true, false ), // obf
			array( 'post', 'test_cpt_multi', false, false ), // obf
			array( 'post', 'test_single', true, true ), // obf
			array( 'post', 'test_multi', false, true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * // obf
	 * @dataProvider data_set_subtype_meta_value // obf
	 */ // obf
	public function test_set_subtype_meta_value( $v_qxaoq, $v_ctswi, $v_dlzoa, $v_gyavi, $v_nwpje ) { // obf
		$v_kkodq  = self::$v_kkodq; // obf
		$v_qxnyn = 'posts'; // obf
		if ( 'cpt' === $v_qxaoq ) { // obf
			$v_kkodq  = self::$v_zfxtc; // obf
			$v_qxnyn = 'cpt'; // obf
		} // obf

		$v_yjemk = 'value_to_set'; // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/%s/%d', $v_qxnyn, $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_ctswi => $v_yjemk, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		if ( ! $v_nwpje ) { // obf
			$v_itezk->assertSame( 403, $v_ahuii->get_status() ); // obf
			$v_itezk->assertEmpty( get_post_meta( $v_kkodq, $v_ctswi, $v_dlzoa ) ); // obf

			return; // obf
		} // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf
		$v_itezk->assertIsArray( $v_anqnf['meta'] ); // obf

		if ( $v_gyavi ) { // obf
			$v_zytse = $v_yjemk; // obf
			if ( ! $v_dlzoa ) { // obf
				$v_zytse = array( $v_zytse ); // obf
			} // obf

			$v_itezk->assertSame( $v_zytse, get_post_meta( $v_kkodq, $v_ctswi, $v_dlzoa ) ); // obf
			$v_itezk->assertArrayHasKey( $v_ctswi, $v_anqnf['meta'] ); // obf
			$v_itezk->assertSame( $v_zytse, $v_anqnf['meta'][ $v_ctswi ] ); // obf
		} else { // obf
			$v_itezk->assertEmpty( get_post_meta( $v_kkodq, $v_ctswi, $v_dlzoa ) ); // obf
			$v_itezk->assertArrayNotHasKey( $v_ctswi, $v_anqnf['meta'] ); // obf
		} // obf
	} // obf

	public function data_set_subtype_meta_value() { // obf
		$v_anqnf = $v_itezk->data_get_subtype_meta_value(); // obf

		foreach ( $v_anqnf as $v_rogcq => $v_gyozq ) { // obf
			$v_nwpje = true; // obf

			// This combination is not writable because of an auth callback of '__return_false'. // obf
			if ( 'cpt' === $v_gyozq[0] && 'test_single' === $v_gyozq[1] ) { // obf
				$v_nwpje = false; // obf
			} // obf

			$v_anqnf[ $v_rogcq ][] = $v_nwpje; // obf
		} // obf

		return $v_anqnf; // obf
	} // obf

	/** // obf
	 * @ticket 42069 // obf
	 * // obf
	 * @dataProvider data_update_value_return_success_with_same_value // obf
	 */ // obf
	public function test_update_value_return_success_with_same_value( $v_ctswi, $v_yjemk ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_anqnf = array( // obf
			'meta' => array( // obf
				$v_ctswi => $v_yjemk, // obf
			), // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( $v_anqnf ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Verify the returned meta value is correct. // obf
		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf
		$v_itezk->assertArrayHasKey( $v_ctswi, $v_anqnf['meta'] ); // obf
		$v_itezk->assertSame( $v_yjemk, $v_anqnf['meta'][ $v_ctswi ] ); // obf
	} // obf

	public function data_update_value_return_success_with_same_value() { // obf
		return array( // obf
			array( 'test_boolean_update', false ), // obf
			array( 'test_boolean_update', true ), // obf
			array( 'test_textured_text_update', 'She said, "What about the > 10,000 penguins in the kitchen?"' ), // obf
			array( 'test_textured_text_update', "He's about to do something rash..." ), // obf
			array( 'test_json_encoded', json_encode( array( 'foo' => 'bar' ) ) ), // obf
			array( 'test\'slashed\'key', 'Hello' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42069 // obf
	 */ // obf
	public function test_slashed_meta_key() { // obf

		add_post_meta( self::$v_kkodq, 'test\'slashed\'key', 'Hello' ); // obf

		$v_vibav = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'test\'slashed\'key', $v_anqnf['meta'] ); // obf
		$v_itezk->assertSame( 'Hello', $v_anqnf['meta']['test\'slashed\'key'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_object_single() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( // obf
						'project' => 'WordPress', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf
		$v_itezk->assertArrayHasKey( 'project', $v_anqnf['meta']['object'] ); // obf
		$v_itezk->assertSame( 'WordPress', $v_anqnf['meta']['object']['project'] ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'object', true ); // obf
		$v_itezk->assertArrayHasKey( 'project', $v_tygog ); // obf
		$v_itezk->assertSame( 'WordPress', $v_tygog['project'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_object_multiple() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( // obf
						array( // obf
							'project' => 'WordPress', // obf
						), // obf
						array( // obf
							'project' => 'bbPress', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf
		$v_itezk->assertCount( 2, $v_anqnf['meta']['object'] ); // obf

		$v_itezk->assertArrayHasKey( 'project', $v_anqnf['meta']['object'][0] ); // obf
		$v_itezk->assertSame( 'WordPress', $v_anqnf['meta']['object'][0]['project'] ); // obf

		$v_itezk->assertArrayHasKey( 'project', $v_anqnf['meta']['object'][1] ); // obf
		$v_itezk->assertSame( 'bbPress', $v_anqnf['meta']['object'][1]['project'] ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'object' ); // obf

		$v_itezk->assertCount( 2, $v_tygog ); // obf

		$v_itezk->assertArrayHasKey( 'project', $v_tygog[0] ); // obf
		$v_itezk->assertSame( 'WordPress', $v_tygog[0]['project'] ); // obf

		$v_itezk->assertArrayHasKey( 'project', $v_tygog[1] ); // obf
		$v_itezk->assertSame( 'bbPress', $v_tygog[1]['project'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_array_single() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'list', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'list' => array( 'WordPress', 'bbPress' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'list', $v_anqnf['meta'] ); // obf
		$v_itezk->assertSame( array( 'WordPress', 'bbPress' ), $v_anqnf['meta']['list'] ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'list', true ); // obf
		$v_itezk->assertSame( array( 'WordPress', 'bbPress' ), $v_tygog ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_array_of_objects_multiple() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'list_of_objects', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'version' => array( // obf
									'type' => 'string', // obf
								), // obf
								'artist'  => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'list_of_objects' => array( // obf
						// Meta 1. // obf
						array( // obf
							array( // obf
								'version' => '5.2', // obf
								'artist'  => 'Jaco', // obf
							), // obf
							array( // obf
								'version' => '5.1', // obf
								'artist'  => 'Betty', // obf
							), // obf
						), // obf
						// Meta 2. // obf
						array( // obf
							array( // obf
								'version' => '4.9', // obf
								'artist'  => 'Tipton', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'list_of_objects', $v_anqnf['meta'] ); // obf
		$v_itezk->assertCount( 2, $v_anqnf['meta']['list_of_objects'] ); // obf

		$v_itezk->assertSame( // obf
			array( // obf
				array( // obf
					'version' => '5.2', // obf
					'artist'  => 'Jaco', // obf
				), // obf
				array( // obf
					'version' => '5.1', // obf
					'artist'  => 'Betty', // obf
				), // obf
			), // obf
			$v_anqnf['meta']['list_of_objects'][0] // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( // obf
				array( // obf
					'version' => '4.9', // obf
					'artist'  => 'Tipton', // obf
				), // obf
			), // obf
			$v_anqnf['meta']['list_of_objects'][1] // obf
		); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'list_of_objects' ); // obf

		$v_itezk->assertCount( 2, $v_tygog ); // obf

		$v_itezk->assertSame( // obf
			array( // obf
				array( // obf
					'version' => '5.2', // obf
					'artist'  => 'Jaco', // obf
				), // obf
				array( // obf
					'version' => '5.1', // obf
					'artist'  => 'Betty', // obf
				), // obf
			), // obf
			$v_tygog[0] // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( // obf
				array( // obf
					'version' => '4.9', // obf
					'artist'  => 'Tipton', // obf
				), // obf
			), // obf
			$v_tygog[1] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_php_objects_returned_as_null() { // obf
		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_xbhlg          = new Basic_Object(); // obf
		$v_xbhlg->project = 'WordPress'; // obf
		update_post_meta( self::$v_kkodq, 'object', $v_xbhlg ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf
		$v_itezk->assertNull( $v_anqnf['meta']['object'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_php_objects_returned_as_null_multiple() { // obf
		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_xbhlg          = new Basic_Object(); // obf
		$v_xbhlg->project = 'WordPress'; // obf
		add_post_meta( self::$v_kkodq, 'object', array( 'project' => 'bbPress' ) ); // obf
		add_post_meta( self::$v_kkodq, 'object', $v_xbhlg ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf
		$v_itezk->assertCount( 2, $v_anqnf['meta']['object'] ); // obf
		$v_itezk->assertSame( array( 'project' => 'bbPress' ), $v_anqnf['meta']['object'][0] ); // obf
		$v_itezk->assertNull( $v_anqnf['meta']['object'][1] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_php_jsonserializable_object_returns_value() { // obf
		require_once __DIR__ . '/../../includes/class-jsonserializable-object.php'; // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'object', new JsonSerializable_Object( array( 'project' => 'WordPress' ) ) ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_anqnf     = $v_ahuii->get_data(); // obf

		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf
		$v_itezk->assertSame( array( 'project' => 'WordPress' ), $v_anqnf['meta']['object'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_updating_meta_to_null_for_key_with_existing_php_object_does_not_delete_meta_value() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_xbhlg          = new Basic_Object(); // obf
		$v_xbhlg->project = 'WordPress'; // obf
		update_post_meta( self::$v_kkodq, 'object', $v_xbhlg ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => null, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 500, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_updating_non_single_meta_to_null_for_key_with_existing_php_object_does_not_set_meta_value_to_null() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_xbhlg          = new Basic_Object(); // obf
		$v_xbhlg->project = 'WordPress'; // obf
		add_post_meta( self::$v_kkodq, 'object', array( 'project' => 'bbPress' ) ); // obf
		add_post_meta( self::$v_kkodq, 'object', $v_xbhlg ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( // obf
						array( 'project' => 'BuddyPress' ), // obf
						null, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 500, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_object_rejects_additional_properties_by_default() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( // obf
						'project'     => 'BuddyPress', // obf
						'awesomeness' => 100, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 400, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_object_allows_additional_properties_if_explicitly_set() { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_tbxit = array( // obf
			'project'     => 'BuddyPress', // obf
			'awesomeness' => 100, // obf
		); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'                 => 'object', // obf
						'additionalProperties' => true, // obf
						'properties'           => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => $v_tbxit, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( $v_tbxit, $v_ahuii->get_data()['meta']['object'] ); // obf

		$v_itezk->assertSame( $v_tbxit, get_post_meta( self::$v_kkodq, 'object', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_object_allows_additional_properties_and_uses_its_schema() { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_tbxit = array( // obf
			'project'     => 'BuddyPress', // obf
			'awesomeness' => 'fabulous', // obf
		); // obf

		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'                 => 'object', // obf
						'additionalProperties' => array( // obf
							'type' => 'number', // obf
						), // obf
						'properties'           => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => $v_tbxit, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 400, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_invalid_meta_value_are_set_to_null_in_response() { // obf
		register_post_meta( // obf
			'post', // obf
			'email', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'   => 'string', // obf
						'format' => 'email', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'email', 'invalid_meta_value' ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertNull( $v_ahuii->get_data()['meta']['email'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 * @ticket 48363 // obf
	 * @dataProvider data_meta_values_are_not_set_to_null_in_response_if_type_safely_serializable // obf
	 */ // obf
	public function test_meta_values_are_not_set_to_null_in_response_if_type_safely_serializable( $v_tzxxa, $v_hhgyc, $v_srwnm ) { // obf
		register_post_meta( // obf
			'post', // obf
			'safe', // obf
			array( // obf
				'single'       => true, // obf
				'show_in_rest' => true, // obf
				'type'         => $v_tzxxa, // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'safe', $v_hhgyc ); // obf

		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( $v_srwnm, $v_ahuii->get_data()['meta']['safe'] ); // obf
	} // obf

	public function data_meta_values_are_not_set_to_null_in_response_if_type_safely_serializable() { // obf
		return array( // obf
			array( 'boolean', 'true', true ), // obf
			array( 'boolean', 'false', false ), // obf
			array( 'boolean', '1', true ), // obf
			array( 'boolean', '0', false ), // obf
			array( 'boolean', '', false ), // obf
			array( 'integer', '', 0 ), // obf
			array( 'integer', '1', 1 ), // obf
			array( 'integer', '0', 0 ), // obf
			array( 'number', '', 0.0 ), // obf
			array( 'number', '1.1', 1.1 ), // obf
			array( 'number', '0.0', 0.0 ), // obf
			array( 'string', '', '' ), // obf
			array( 'string', '1', '1' ), // obf
			array( 'string', '0', '0' ), // obf
			array( 'string', 'str', 'str' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_update_multi_meta_value_object() { // obf
		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		add_post_meta( // obf
			self::$v_kkodq, // obf
			'object', // obf
			array( // obf
				'project' => 'WordPress', // obf
			) // obf
		); // obf
		add_post_meta( // obf
			self::$v_kkodq, // obf
			'object', // obf
			array( // obf
				'project' => 'bbPress', // obf
			) // obf
		); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( // obf
						array( 'project' => 'WordPress' ), // obf
						array( 'project' => 'BuddyPress' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'object', $v_anqnf['meta'] ); // obf

		$v_itezk->assertCount( 2, $v_anqnf['meta']['object'] ); // obf
		$v_itezk->assertSame( array( 'project' => 'WordPress' ), $v_anqnf['meta']['object'][0] ); // obf
		$v_itezk->assertSame( array( 'project' => 'BuddyPress' ), $v_anqnf['meta']['object'][1] ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'object' ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertSame( array( 'project' => 'WordPress' ), $v_tygog[0] ); // obf
		$v_itezk->assertSame( array( 'project' => 'BuddyPress' ), $v_tygog[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_update_multi_meta_value_array() { // obf
		register_post_meta( // obf
			'post', // obf
			'list', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		add_post_meta( self::$v_kkodq, 'list', array( 'WordPress', 'bbPress' ) ); // obf
		add_post_meta( self::$v_kkodq, 'list', array( 'WordCamp' ) ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'list' => array( // obf
						array( 'WordPress', 'bbPress' ), // obf
						array( 'BuddyPress' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'list', $v_anqnf['meta'] ); // obf

		$v_itezk->assertCount( 2, $v_anqnf['meta']['list'] ); // obf
		$v_itezk->assertSame( array( 'WordPress', 'bbPress' ), $v_anqnf['meta']['list'][0] ); // obf
		$v_itezk->assertSame( array( 'BuddyPress' ), $v_anqnf['meta']['list'][1] ); // obf

		$v_tygog = get_post_meta( self::$v_kkodq, 'list' ); // obf
		$v_itezk->assertCount( 2, $v_tygog ); // obf
		$v_itezk->assertSame( array( 'WordPress', 'bbPress' ), $v_tygog[0] ); // obf
		$v_itezk->assertSame( array( 'BuddyPress' ), $v_tygog[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 47928 // obf
	 */ // obf
	public function test_update_meta_with_unchanged_array_values() { // obf
		register_post_meta( // obf
			'post', // obf
			'list', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		add_post_meta( self::$v_kkodq, 'list', array( 'WordCamp' ) ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'list' => array( 'WordCamp' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( array( 'WordCamp' ), $v_anqnf['meta']['list'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47928 // obf
	 */ // obf
	public function test_update_meta_with_unchanged_object_values() { // obf
		register_post_meta( // obf
			'post', // obf
			'object', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'project' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		add_post_meta( self::$v_kkodq, 'object', array( 'project' => 'WordCamp' ) ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'object' => array( 'project' => 'WordCamp' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( array( 'project' => 'WordCamp' ), $v_anqnf['meta']['object'] ); // obf
	} // obf

	/** // obf
	 * @ticket 57745 // obf
	 */ // obf
	public function test_update_meta_with_unchanged_values_and_custom_authentication() { // obf
		register_post_meta( // obf
			'post', // obf
			'authenticated', // obf
			array( // obf
				'single'        => true, // obf
				'type'          => 'boolean', // obf
				'default'       => false, // obf
				'show_in_rest'  => true, // obf
				'auth_callback' => '__return_false', // obf
			) // obf
		); // obf

		add_post_meta( self::$v_kkodq, 'authenticated', false ); // obf

		$v_itezk->grant_write_permission(); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'authenticated' => false, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( false, $v_anqnf['meta']['authenticated'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_register_meta_issues_doing_it_wrong_when_show_in_rest_is_true() { // obf
		$v_itezk->setExpectedIncorrectUsage( 'register_meta' ); // obf

		$v_arpil = register_meta( // obf
			'post', // obf
			'invalid_array', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		self::assertFalse( $v_arpil ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_register_meta_issues_doing_it_wrong_when_show_in_rest_omits_schema() { // obf
		$v_itezk->setExpectedIncorrectUsage( 'register_meta' ); // obf

		$v_arpil = register_meta( // obf
			'post', // obf
			'invalid_array', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'prepare_callback' => 'rest_sanitize_value_from_schema', // obf
				), // obf
			) // obf
		); // obf

		self::assertFalse( $v_arpil ); // obf
	} // obf

	/** // obf
	 * @ticket 43392 // obf
	 */ // obf
	public function test_register_meta_issues_doing_it_wrong_when_show_in_rest_omits_schema_items() { // obf
		$v_itezk->setExpectedIncorrectUsage( 'register_meta' ); // obf

		$v_arpil = register_meta( // obf
			'post', // obf
			'invalid_array', // obf
			array( // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'default' => array( 'Hi!' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		self::assertFalse( $v_arpil ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_ints_meta() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( 1, 2, 3 ), // obf
				), // obf
			) // obf
		); // obf

		rest_get_server()->dispatch( $v_vibav ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_ints_meta_stored_strings_are_updated() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( '1', '2', '3' ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ) ); // obf
		$v_itezk->assertSame( array( 1, 2, 3 ), $v_ahuii->get_data()['meta']['items'] ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( 1, 2, 3 ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( 1, 2, 3 ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_ints_meta_string_request_data_is_set_as_ints() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( 1, 2, 3 ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( '1', '2', '3' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( 1, 2, 3 ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_ints_meta_string_request_data_and_string_stored_data() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( '1', '2', '3' ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( '1', '2', '3' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( 1, 2, 3 ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_bools_meta() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( true, false ), // obf
				), // obf
			) // obf
		); // obf

		rest_get_server()->dispatch( $v_vibav ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_bools_meta_stored_strings_are_updated() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( '1', '0' ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ) ); // obf
		$v_itezk->assertSame( array( true, false ), $v_ahuii->get_data()['meta']['items'] ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( true, false ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( true, false ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_bools_meta_string_request_data_is_set_as_bools() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( true, false ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( '1', '0' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( true, false ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_bools_meta_string_request_data_and_string_stored_data() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( '1', '0' ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( '1', '0' ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( true, false ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48264 // obf
	 */ // obf
	public function test_update_array_of_bools_with_string_values_stored_and_opposite_request_data() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'items', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'array', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'items' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'items', array( '1', '0' ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'items' => array( false, true ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( false, true ), get_post_meta( self::$v_kkodq, 'items', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 48363 // obf
	 */ // obf
	public function test_boolean_meta_update_to_false_stores_0() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'boolean', // obf
			array( // obf
				'single'            => true, // obf
				'type'              => 'boolean', // obf
				'show_in_rest'      => true, // obf
				'sanitize_callback' => static function ( $v_tbxit ) { // obf
					return $v_tbxit ? '1' : '0'; // obf
				}, // obf
			) // obf
		); // obf

		update_post_meta( self::$v_kkodq, 'boolean', 1 ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'boolean' => false, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( '0', get_post_meta( self::$v_kkodq, 'boolean', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49339 // obf
	 */ // obf
	public function test_update_multi_meta_value_handles_integer_types() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'multi_integer', // obf
			array( // obf
				'type'         => 'integer', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		$v_efvot = add_post_meta( self::$v_kkodq, 'multi_integer', 1 ); // obf
		$v_vcale = add_post_meta( self::$v_kkodq, 'multi_integer', 2 ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'multi_integer' => array( 2, 3 ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( array( 2, 3 ), $v_ahuii->get_data()['meta']['multi_integer'] ); // obf

		$v_itezk->assertFalse( get_metadata_by_mid( 'post', $v_efvot ) ); // obf
		$v_itezk->assertNotFalse( get_metadata_by_mid( 'post', $v_vcale ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49339 // obf
	 */ // obf
	public function test_update_multi_meta_value_handles_boolean_types() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'multi_boolean', // obf
			array( // obf
				'type'              => 'boolean', // obf
				'sanitize_callback' => 'absint', // obf
				'show_in_rest'      => true, // obf
			) // obf
		); // obf

		$v_efvot = add_post_meta( self::$v_kkodq, 'multi_boolean', 1 ); // obf
		$v_vcale = add_post_meta( self::$v_kkodq, 'multi_boolean', 0 ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'multi_boolean' => array( 0 ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSameSetsWithIndex( array( false ), $v_ahuii->get_data()['meta']['multi_boolean'] ); // obf

		$v_itezk->assertFalse( get_metadata_by_mid( 'post', $v_efvot ) ); // obf
		$v_itezk->assertNotFalse( get_metadata_by_mid( 'post', $v_vcale ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49339 // obf
	 */ // obf
	public function test_update_multi_meta_value_handles_object_types() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'multi_object', // obf
			array( // obf
				'type'         => 'object', // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'a' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_efvot = add_post_meta( self::$v_kkodq, 'multi_object', array( 'a' => 'ant' ) ); // obf
		$v_vcale = add_post_meta( self::$v_kkodq, 'multi_object', array( 'a' => 'anaconda' ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'multi_object' => array( // obf
						array( 'a' => 'anaconda' ), // obf
						array( 'a' => 'alpaca' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( // obf
			array( // obf
				array( 'a' => 'anaconda' ), // obf
				array( 'a' => 'alpaca' ), // obf
			), // obf
			$v_ahuii->get_data()['meta']['multi_object'] // obf
		); // obf

		$v_itezk->assertFalse( get_metadata_by_mid( 'post', $v_efvot ) ); // obf
		$v_itezk->assertNotFalse( get_metadata_by_mid( 'post', $v_vcale ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 * @dataProvider data_get_default_data // obf
	 */ // obf
	public function test_get_default_value( $v_recxj, $v_srwnm ) { // obf
		$v_odefl = 'post'; // obf
		$v_ctswi    = 'registered_key1'; // obf
		$v_arpil  = register_meta( // obf
			$v_odefl, // obf
			$v_ctswi, // obf
			$v_recxj // obf
		); // obf

		$v_itezk->assertTrue( $v_arpil ); // obf

		// Check for default value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertArrayHasKey( 'meta', $v_anqnf ); // obf

		$v_tygog = (array) $v_anqnf['meta']; // obf
		$v_itezk->assertArrayHasKey( $v_ctswi, $v_tygog ); // obf
		$v_itezk->assertSame( $v_srwnm, $v_tygog[ $v_ctswi ] ); // obf
	} // obf

	public function data_get_default_data() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'show_in_rest' => true, // obf
					'single'       => true, // obf
					'default'      => 'wibble', // obf
				), // obf
				'wibble', // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => true, // obf
					'single'       => false, // obf
					'default'      => 'wibble', // obf
				), // obf
				array( 'wibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest'   => true, // obf
					'single'         => true, // obf
					'object_subtype' => 'post', // obf
					'default'        => 'wibble', // obf
				), // obf
				'wibble', // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest'   => true, // obf
					'single'         => false, // obf
					'object_subtype' => 'post', // obf
					'default'        => 'wibble', // obf
				), // obf
				array( 'wibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				array( 'wibble' => 'dibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'single'       => false, // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				array( array( 'wibble' => 'dibble' ) ), // obf
			), // obf

			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				array( 'dibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => false, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				array( array( 'dibble' ) ), // obf
			), // obf
			'array of objects' => array( // obf
				array( // obf
					'type'         => 'array', // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type'       => 'object', // obf
								'properties' => array( // obf
									'name' => array( // obf
										'type' => 'string', // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'default'      => array( // obf
						array( // obf
							'name' => 'Kirk', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					array( // obf
						'name' => 'Kirk', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 */ // obf
	public function test_set_default_in_schema() { // obf
		register_post_meta( // obf
			'post', // obf
			'greeting', // obf
			array( // obf
				'type'         => 'string', // obf
				'single'       => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'default' => 'Hello World', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_do_request( '/wp/v2/posts/' . self::$v_kkodq ); // obf
		$v_itezk->assertSame( 'Hello World', $v_ahuii->get_data()['meta']['greeting'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 */ // obf
	public function test_default_is_added_to_schema() { // obf
		$v_vibav  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_ahuii = rest_do_request( $v_vibav ); // obf

		$v_ngycd = $v_ahuii->get_data()['schema']['properties']['meta']['properties']['with_default']; // obf
		$v_itezk->assertArrayHasKey( 'default', $v_ngycd, 'Schema is expected to have the default property' ); // obf
		$v_itezk->assertSame( 'Goodnight Moon', $v_ngycd['default'], 'Schema default is expected to be defined and contain the value of the meta default argument.' ); // obf
	} // obf

	/** // obf
	 * @ticket 61998 // obf
	 */ // obf
	public function test_title_is_added_to_schema() { // obf
		$v_vibav  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_ahuii = rest_do_request( $v_vibav ); // obf

		$v_ngycd = $v_ahuii->get_data()['schema']['properties']['meta']['properties']['with_label']; // obf

		$v_itezk->assertArrayHasKey( 'title', $v_ngycd, 'Schema is expected to have the title property' ); // obf
		$v_itezk->assertSame( 'Meta Label', $v_ngycd['title'], 'Schema title is expected to be defined and contain the value of the meta label argument.' ); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with post meta containing the default value for the // obf
	 * registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Ignored in this test. // obf
	 */ // obf
	public function test_scalar_singular_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_aeimk = "with_{$v_tzxxa}_default"; // obf

		register_post_meta( // obf
			'post', // obf
			$v_aeimk, // obf
			array( // obf
				'type'         => $v_tzxxa, // obf
				'single'       => true, // obf
				'show_in_rest' => true, // obf
				'default'      => $v_xcweu, // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_aeimk => $v_xcweu, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( (string) $v_xcweu ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_aeimk, false ), // obf
			'Should have stored a single meta value with string-cast version of default value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with multi post meta values (containing the default) // obf
	 * for the registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * Further, the total count of stored values may be wrong if the default value // obf
	 * is culled from the results of a "multi" read. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Appropriate value for given type that doesn't match the default value. // obf
	 */ // obf
	public function test_scalar_multi_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_mtvmu = "with_multi_{$v_tzxxa}_default"; // obf

		// Register non-singular post meta for type. // obf
		register_post_meta( // obf
			'post', // obf
			$v_mtvmu, // obf
			array( // obf
				'type'         => $v_tzxxa, // obf
				'single'       => false, // obf
				'show_in_rest' => true, // obf
				'default'      => $v_xcweu, // obf
			) // obf
		); // obf

		// Write the default value as the sole value. // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( $v_xcweu ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( (string) $v_xcweu ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored a single meta value with string-cast version of default value.' // obf
		); // obf

		// Write multiple values, including the default, to ensure it remains. // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( // obf
						$v_xcweu, // obf
						$v_ahdur, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( (string) $v_xcweu, (string) $v_ahdur ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored both the default and non-default string-cast values.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with post meta containing an object as the default // obf
	 * value for the registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Ignored in this test. // obf
	 */ // obf
	public function test_object_singular_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_aeimk = "with_{$v_tzxxa}_default"; // obf

		// Register singular post meta for type. // obf
		register_post_meta( // obf
			'post', // obf
			$v_aeimk, // obf
			array( // obf
				'type'         => 'object', // obf
				'single'       => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							$v_tzxxa => array( 'type' => $v_tzxxa ), // obf
						), // obf
					), // obf
				), // obf
				'default'      => (object) array( $v_tzxxa => $v_xcweu ), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_aeimk => (object) array( $v_tzxxa => $v_xcweu ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		// Objects stored into the database are read back as arrays. // obf
		$v_itezk->assertSame( // obf
			array( array( $v_tzxxa => $v_xcweu ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_aeimk, false ), // obf
			'Should have stored a single meta value with an object representing the default value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with multi post meta values (containing an object as // obf
	 * the default) for the registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * Further, the total count of stored values may be wrong if the default value // obf
	 * is culled from the results of a "multi" read. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Appropriate value for given type that doesn't match the default value. // obf
	 */ // obf
	public function test_object_multi_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_mtvmu = "with_multi_{$v_tzxxa}_default"; // obf

		// Register non-singular post meta for type. // obf
		register_post_meta( // obf
			'post', // obf
			$v_mtvmu, // obf
			array( // obf
				'type'         => 'object', // obf
				'single'       => false, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							$v_tzxxa => array( 'type' => $v_tzxxa ), // obf
						), // obf
					), // obf
				), // obf
				'default'      => (object) array( $v_tzxxa => $v_xcweu ), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( (object) array( $v_tzxxa => $v_xcweu ) ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		// Objects stored into the database are read back as arrays. // obf
		$v_itezk->assertSame( // obf
			array( array( $v_tzxxa => $v_xcweu ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored a single meta value with an object representing the default value.' // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( // obf
						(object) array( $v_tzxxa => $v_xcweu ), // obf
						(object) array( $v_tzxxa => $v_ahdur ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		// Objects stored into the database are read back as arrays. // obf
		$v_itezk->assertSame( // obf
			array( array( $v_tzxxa => $v_xcweu ), array( $v_tzxxa => $v_ahdur ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored a single meta value with an object representing the default value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with post meta containing a list array as the default // obf
	 * value for the registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Ignored in this test. // obf
	 */ // obf
	public function test_array_singular_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_aeimk = "with_{$v_tzxxa}_default"; // obf

		// Register singular post meta for type. // obf
		register_post_meta( // obf
			'post', // obf
			$v_aeimk, // obf
			array( // obf
				'type'         => 'array', // obf
				'single'       => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => $v_tzxxa, // obf
						), // obf
					), // obf
				), // obf
				'default'      => $v_xcweu, // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_aeimk => array( $v_xcweu ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( array( $v_xcweu ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_aeimk, false ), // obf
			'Should have stored a single meta value with an array containing only the default value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures that REST API calls with multi post meta values (containing a list array as // obf
	 * the default) for the registered meta field stores the default value into the database. // obf
	 * // obf
	 * When the default value isn't persisted in the database, a read of the post meta // obf
	 * at some point in the future might return a different value if the code setting the // obf
	 * default changed. This ensures that once a value is intentionally saved into the // obf
	 * database that it will remain durably in future reads. // obf
	 * // obf
	 * Further, the total count of stored values may be wrong if the default value // obf
	 * is culled from the results of a "multi" read. // obf
	 * // obf
	 * @ticket 55600 // obf
	 * // obf
	 * @dataProvider data_scalar_default_values // obf
	 * // obf
	 * @param string $v_tzxxa              Scalar type of default value: one of `boolean`, `integer`, `number`, or `string`. // obf
	 * @param mixed  $v_xcweu     Appropriate default value for given type. // obf
	 * @param mixed  $v_ahdur Appropriate value for given type that doesn't match the default value. // obf
	 */ // obf
	public function test_array_multi_default_is_saved_to_db( $v_tzxxa, $v_xcweu, $v_ahdur ) { // obf
		$v_itezk->grant_write_permission(); // obf

		$v_mtvmu = "with_multi_{$v_tzxxa}_default"; // obf

		// Register non-singular post meta for type. // obf
		register_post_meta( // obf
			'post', // obf
			$v_mtvmu, // obf
			array( // obf
				'type'         => 'array', // obf
				'single'       => false, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => $v_tzxxa, // obf
						), // obf
					), // obf
				), // obf
				'default'      => $v_xcweu, // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( array( $v_xcweu ) ), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( array( $v_xcweu ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored a single meta value with an object representing the default value.' // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_mtvmu => array( // obf
						array( $v_xcweu ), // obf
						array( $v_ahdur ), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( // obf
			200, // obf
			$v_ahuii->get_status(), // obf
			"API call should have returned successfully but didn't: check test setup." // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( array( $v_xcweu ), array( $v_ahdur ) ), // obf
			get_metadata_raw( 'post', self::$v_kkodq, $v_mtvmu, false ), // obf
			'Should have stored a single meta value with an object representing the default value.' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 48823 // obf
	 */ // obf
	public function test_multiple_errors_are_returned_at_once() { // obf
		$v_itezk->grant_write_permission(); // obf
		register_post_meta( // obf
			'post', // obf
			'error_1', // obf
			array( // obf
				'single'       => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'enum' => array( 'a', 'b' ), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		register_post_meta( // obf
			'post', // obf
			'error_2', // obf
			array( // obf
				'single'       => true, // obf
				'show_in_rest' => array( // obf
					'schema' => array( // obf
						'minLength' => 1, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', '/wp/v2/posts/' . self::$v_kkodq ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					'error_1' => 'c', // obf
					'error_2' => '', // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_do_request( $v_vibav ); // obf
		$v_fspey    = $v_ahuii->as_error(); // obf
		$v_itezk->assertWPError( $v_fspey ); // obf
		$v_itezk->assertContains( 'meta.error_1 is not one of a and b.', $v_fspey->get_error_messages() ); // obf
		$v_itezk->assertContains( 'meta.error_2 must be at least 1 character long.', $v_fspey->get_error_messages() ); // obf
	} // obf

	/** // obf
	 * Internal function used to disable an insert query which // obf
	 * will trigger a wpdb error for testing purposes. // obf
	 */ // obf
	public function error_insert_query( $v_wvmre ) { // obf
		if ( strpos( $v_wvmre, 'INSERT' ) === 0 ) { // obf
			$v_wvmre = '],'; // obf
		} // obf
		return $v_wvmre; // obf
	} // obf

	/** // obf
	 * Internal function used to disable an insert query which // obf
	 * will trigger a wpdb error for testing purposes. // obf
	 */ // obf
	public function error_delete_query( $v_wvmre ) { // obf
		if ( strpos( $v_wvmre, 'DELETE' ) === 0 ) { // obf
			$v_wvmre = '],'; // obf
		} // obf
		return $v_wvmre; // obf
	} // obf

	/** // obf
	 * Test that single post meta is revisioned when saving to the posts REST API endpoint. // obf
	 * // obf
	 * @ticket 20564 // obf
	 */ // obf
	public function test_revisioned_single_post_meta_with_posts_endpoint() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'foo', // obf
			array( // obf
				'single'            => true, // obf
				'show_in_rest'      => true, // obf
				'revisions_enabled' => true, // obf
			) // obf
		); // obf

		$v_kkodq = self::$v_kkodq; // obf

		// Update the post, saving the meta. // obf
		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 1', // obf
				'meta'  => array( // obf
					'foo' => 'bar', // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls   = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_lbqhv = array_shift( $v_jtqls )->ID; // obf

		// Check that the revisions endpoint returns the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_lbqhv ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_anqnf = $v_ahuii->get_data(); // obf
		$v_itezk->assertSame( 'bar', $v_ahuii->get_data()['meta']['foo'] ); // obf

		// Check that the post meta is set correctly. // obf
		$v_itezk->assertSame( 'bar', get_post_meta( $v_lbqhv, 'foo', true ) ); // obf

		// Create two more revisions with different meta values for the foo key. // obf
		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 2', // obf
				'meta'  => array( // obf
					'foo' => 'baz', // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls     = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_pgjbg = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_pgjbg ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( 'baz', $v_ahuii->get_data()['meta']['foo'] ); // obf

		// Check that the post meta is set correctly. // obf
		$v_itezk->assertSame( 'baz', get_post_meta( $v_pgjbg, 'foo', true ) ); // obf

		// One more revision! // obf
		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 3', // obf
				'meta'  => array( // obf
					'foo' => 'qux', // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls     = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_sqfqm = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_sqfqm ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf
		$v_itezk->assertSame( 'qux', $v_ahuii->get_data()['meta']['foo'] ); // obf

		// Check that the post meta is set correctly. // obf
		$v_itezk->assertSame( 'qux', get_post_meta( $v_sqfqm, 'foo', true ) ); // obf

		// Restore Revision 3 and verify the post gets the correct meta value. // obf
		wp_restore_post_revision( $v_sqfqm ); // obf
		$v_itezk->assertSame( 'qux', get_post_meta( $v_kkodq, 'foo', true ) ); // obf

		// Restore Revision 2 and verify the post gets the correct meta value. // obf
		wp_restore_post_revision( $v_pgjbg ); // obf
		$v_itezk->assertSame( 'baz', get_post_meta( $v_kkodq, 'foo', true ) ); // obf
	} // obf

	/** // obf
	 * Test that multi-post meta is revisioned when saving to the posts REST API endpoint. // obf
	 * // obf
	 * @ticket 20564 // obf
	 */ // obf
	public function test_revisioned_multiple_post_meta_with_posts_endpoint() { // obf
		$v_itezk->grant_write_permission(); // obf

		register_post_meta( // obf
			'post', // obf
			'foo', // obf
			array( // obf
				'single'            => false, // obf
				'show_in_rest'      => true, // obf
				'revisions_enabled' => true, // obf
			) // obf
		); // obf

		$v_kkodq = self::$v_kkodq; // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 1', // obf
				'meta'  => array( // obf
					'foo' => array( // obf
						'bar', // obf
						'bat', // obf
						'baz', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Log the current post meta. // obf
		$v_tygog = get_post_meta( $v_kkodq ); // obf

		// Update the post. // obf
		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 1 update', // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls     = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_weoqw = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_weoqw ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_itezk->assertSame( // obf
			array( 'bar', 'bat', 'baz' ), // obf
			$v_ahuii->get_data()['meta']['foo'] // obf
		); // obf
		$v_itezk->assertSame( // obf
			array( 'bar', 'bat', 'baz' ), // obf
			get_post_meta( $v_weoqw, 'foo' ) // obf
		); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 2', // obf
				'meta'  => array( // obf
					'foo' => array( // obf
						'car', // obf
						'cat', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls     = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_pgjbg = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_pgjbg ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_itezk->assertSame( // obf
			array( 'car', 'cat' ), // obf
			$v_ahuii->get_data()['meta']['foo'] // obf
		); // obf
		$v_itezk->assertSame( array( 'car', 'cat' ), get_post_meta( $v_pgjbg, 'foo' ) ); // obf

		$v_vibav = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 3', // obf
				'meta'  => array( // obf
					'foo' => null, // obf
				), // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls     = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf
		$v_sqfqm = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d/revisions/%d', $v_kkodq, $v_sqfqm ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_itezk->assertSame( // obf
			array(), // obf
			$v_ahuii->get_data()['meta']['foo'] // obf
		); // obf
		$v_itezk->assertSame( array(), get_post_meta( $v_sqfqm, 'foo' ) ); // obf

		// Restore Revision 3 and verify the post gets the correct meta value. // obf
		wp_restore_post_revision( $v_sqfqm ); // obf
		$v_itezk->assertSame( array(), get_post_meta( $v_kkodq, 'foo' ) ); // obf

		// Restore Revision 2 and verify the post gets the correct meta value. // obf
		wp_restore_post_revision( $v_pgjbg ); // obf
		$v_itezk->assertSame( array( 'car', 'cat' ), get_post_meta( $v_kkodq, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * Test post meta revisions with a custom post type and the page post type. // obf
	 * // obf
	 * @group revision // obf
	 * @dataProvider data_revisioned_single_post_meta_with_posts_endpoint_page_and_cpt_data_provider // obf
	 */ // obf
	public function test_revisioned_single_post_meta_with_posts_endpoint_page_and_cpt( $v_mqrfd, $v_srwnm, $v_qxaoq ) { // obf

		$v_itezk->grant_write_permission(); // obf

		// Create the custom meta. // obf
		register_post_meta( // obf
			$v_qxaoq, // obf
			'foo', // obf
			array( // obf
				'show_in_rest'      => true, // obf
				'revisions_enabled' => true, // obf
				'single'            => true, // obf
				'type'              => 'string', // obf
			) // obf
		); // obf

		// Set up a new post. // obf
		$v_kkodq = $v_itezk->factory->post->create( // obf
			array( // obf
				'post_content' => 'initial content', // obf
				'post_type'    => $v_qxaoq, // obf
				'meta_input'   => array( // obf
					'foo' => 'foo', // obf
				), // obf
			) // obf
		); // obf

		$v_xuxft = array( // obf
			'page' => 'pages', // obf
			'cpt'  => 'cpt', // obf
		); // obf
		$v_vibav        = new WP_REST_Request( 'GET', sprintf( '/wp/v2/%s', $v_xuxft[ $v_qxaoq ] ) ); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf

		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/%s/%d', $v_xuxft[ $v_qxaoq ], $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 1', // obf
				'meta'  => array( // obf
					'foo' => $v_mqrfd, // obf
				), // obf
			) // obf
		); // obf

		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Update the post. // obf
		$v_vibav = new WP_REST_Request( 'POST', sprintf( '/wp/v2/%s/%d', $v_xuxft[ $v_qxaoq ], $v_kkodq ) ); // obf
		$v_vibav->set_body_params( // obf
			array( // obf
				'title' => 'Revision 1 update', // obf
			) // obf
		); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		// Get the last revision. // obf
		$v_jtqls = wp_get_post_revisions( $v_kkodq, array( 'posts_per_page' => 1 ) ); // obf

		$v_weoqw = array_shift( $v_jtqls )->ID; // obf

		// Check that the revision has the correct meta value. // obf
		$v_vibav  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/%s/%d/revisions/%d', $v_xuxft[ $v_qxaoq ], $v_kkodq, $v_weoqw ) ); // obf
		$v_ahuii = rest_get_server()->dispatch( $v_vibav ); // obf
		$v_itezk->assertSame( 200, $v_ahuii->get_status() ); // obf

		$v_itezk->assertSame( // obf
			$v_mqrfd, // obf
			$v_ahuii->get_data()['meta']['foo'] // obf
		); // obf

		$v_itezk->assertSame( // obf
			array( $v_mqrfd ), // obf
			get_post_meta( $v_weoqw, 'foo' ) // obf
		); // obf

		unregister_post_meta( $v_qxaoq, 'foo' ); // obf
		wp_delete_post( $v_kkodq, true ); // obf
	} // obf

	/** // obf
	 * Provide data for the meta revision checks. // obf
	 */ // obf
	public function data_revisioned_single_post_meta_with_posts_endpoint_page_and_cpt_data_provider() { // obf
		return array( // obf
			array( // obf
				'Test string', // obf
				'Test string', // obf
				'cpt', // obf
			), // obf
			array( // obf
				'Test string', // obf
				'Test string', // obf
				'page', // obf
			), // obf
			array( // obf
				'Test string', // obf
				false, // obf
				'cpt', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Provides example default values of scalar types; // obf
	 * in contrast to arrays, objects, etc... // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public static function data_scalar_default_values() { // obf
		return array( // obf
			'boolean default' => array( 'boolean', true, false ), // obf
			'integer default' => array( 'integer', 42, 43 ), // obf
			'number default'  => array( 'number', 42.99, 43.99 ), // obf
			'string default'  => array( 'string', 'string', 'string2' ), // obf
		); // obf
	} // obf
} // obf