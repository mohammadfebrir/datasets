

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Terms meta functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Term_Meta_Fields extends WP_Test_REST_TestCase { // obf
	protected static $v_mysru; // obf
	protected static $v_knwtf; // obf
	protected static $v_ryyjf; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_cbyhm ) { // obf
		register_taxonomy( // obf
			'customtax', // obf
			'post', // obf
			array( // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		self::$v_mysru = isset( $v_rshos['wp_meta_keys'] ) ? $v_rshos['wp_meta_keys'] : array(); // obf
		self::$v_knwtf        = $v_cbyhm->category->create(); // obf
		self::$v_ryyjf  = $v_cbyhm->term->create( array( 'taxonomy' => 'customtax' ) ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		$v_rshos['wp_meta_keys'] = self::$v_mysru; // obf
		wp_delete_term( self::$v_knwtf, 'category' ); // obf
		wp_delete_term( self::$v_ryyjf, 'customtax' ); // obf

		unregister_taxonomy( 'customtax' ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		register_meta( // obf
			'term', // obf
			'test_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_bad_auth', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => true, // obf
				'auth_callback' => '__return_false', // obf
				'type'          => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_bad_auth_multi', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => false, // obf
				'auth_callback' => '__return_false', // obf
				'type'          => 'string', // obf
			) // obf
		); // obf
		register_meta( 'term', 'test_no_rest', array() ); // obf
		register_meta( // obf
			'term', // obf
			'test_rest_disabled', // obf
			array( // obf
				'show_in_rest' => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
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
			'term', // obf
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
			'term', // obf
			'test_invalid_type', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'lalala', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_no_type', // obf
			array( // obf
				'single'       => true, // obf
				'type'         => null, // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		register_meta( // obf
			'term', // obf
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
			'term', // obf
			'test_custom_name_multi', // obf
			array( // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
				'show_in_rest' => array( // obf
					'name' => 'new_name_multi', // obf
				), // obf
			) // obf
		); // obf

		register_taxonomy( // obf
			'customtax', // obf
			'post', // obf
			array( // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		register_term_meta( // obf
			'customtax', // obf
			'test_customtax_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
			) // obf
		); // obf

		register_term_meta( // obf
			'customtax', // obf
			'test_customtax_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
			) // obf
		); // obf

		// Register 'test_single' on subtype to override for bad auth. // obf
		register_term_meta( // obf
			'customtax', // obf
			'test_single', // obf
			array( // obf
				'show_in_rest'  => true, // obf
				'single'        => true, // obf
				'auth_callback' => '__return_false', // obf
			) // obf
		); // obf

		/** @var WP_REST_Server $v_gjdoi */ // obf
		global $v_gjdoi; // obf
		$v_gjdoi = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_gjdoi ); // obf
	} // obf

	protected function grant_write_permission() { // obf
		// Ensure we have write permission. // obf
		$v_vvjer = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		wp_set_current_user( $v_vvjer ); // obf
	} // obf

	public function test_get_value() { // obf
		add_term_meta( self::$v_knwtf, 'test_single', 'testvalue' ); // obf

		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertArrayHasKey( 'meta', $v_pjrei ); // obf

		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'test_single', $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'testvalue', $v_lrfbb['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_multi_value() { // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'value1' ); // obf
		$v_jzurj = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'test_multi', $v_lrfbb ); // obf
		$v_cqhzs->assertIsArray( $v_lrfbb['test_multi'] ); // obf
		$v_cqhzs->assertContains( 'value1', $v_lrfbb['test_multi'] ); // obf

		// Check after an update. // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'value2' ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf
		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertContains( 'value1', $v_lrfbb['test_multi'] ); // obf
		$v_cqhzs->assertContains( 'value2', $v_lrfbb['test_multi'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_unregistered() { // obf
		add_term_meta( self::$v_knwtf, 'test_unregistered', 'value1' ); // obf
		$v_jzurj = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_unregistered', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_registered_no_api_access() { // obf
		add_term_meta( self::$v_knwtf, 'test_no_rest', 'for_the_wicked' ); // obf
		$v_jzurj = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_no_rest', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_get_registered_api_disabled() { // obf
		add_term_meta( self::$v_knwtf, 'test_rest_disabled', 'sleepless_nights' ); // obf
		$v_jzurj = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_rest_disabled', $v_lrfbb ); // obf
	} // obf

	public function test_get_value_types() { // obf
		register_meta( // obf
			'term', // obf
			'test_string', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_number', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'number', // obf
			) // obf
		); // obf
		register_meta( // obf
			'term', // obf
			'test_bool', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'boolean', // obf
			) // obf
		); // obf

		/** @var WP_REST_Server $v_gjdoi */ // obf
		global $v_gjdoi; // obf
		$v_gjdoi = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_gjdoi ); // obf

		add_term_meta( self::$v_knwtf, 'test_string', 42 ); // obf
		add_term_meta( self::$v_knwtf, 'test_number', '42' ); // obf
		add_term_meta( self::$v_knwtf, 'test_bool', 1 ); // obf

		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf

		$v_cqhzs->assertArrayHasKey( 'test_string', $v_lrfbb ); // obf
		$v_cqhzs->assertIsString( $v_lrfbb['test_string'] ); // obf
		$v_cqhzs->assertSame( '42', $v_lrfbb['test_string'] ); // obf

		$v_cqhzs->assertArrayHasKey( 'test_number', $v_lrfbb ); // obf
		$v_cqhzs->assertIsFloat( $v_lrfbb['test_number'] ); // obf
		$v_cqhzs->assertSame( 42.0, $v_lrfbb['test_number'] ); // obf

		$v_cqhzs->assertArrayHasKey( 'test_bool', $v_lrfbb ); // obf
		$v_cqhzs->assertIsBool( $v_lrfbb['test_bool'] ); // obf
		$v_cqhzs->assertTrue( $v_lrfbb['test_bool'] ); // obf
	} // obf

	public function test_get_value_custom_name() { // obf
		add_term_meta( self::$v_knwtf, 'test_custom_name', 'janet' ); // obf

		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertArrayHasKey( 'meta', $v_pjrei ); // obf

		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'new_name', $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'janet', $v_lrfbb['new_name'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_value() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_single', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_single', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'test_value', $v_lrfbb[0] ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'test_single', $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'test_value', $v_lrfbb['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_duplicate_single_value() { // obf
		// Start with an existing metakey and value. // obf
		$v_obpzl = update_term_meta( self::$v_knwtf, 'test_single', 'test_value' ); // obf
		$v_cqhzs->assertSame( 'test_value', get_term_meta( self::$v_knwtf, 'test_single', true ) ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_single', true ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'test_value', $v_lrfbb ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'test_single', $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'test_value', $v_lrfbb['test_single'] ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_unauthenticated() { // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_cannot_update', $v_ygnga, 401 ); // obf

		// Check that the value wasn't actually updated. // obf
		$v_cqhzs->assertEmpty( get_term_meta( self::$v_knwtf, 'test_single', false ) ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_blocked() { // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_bad_auth' => 'test_value', // obf
			), // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_cannot_update', $v_ygnga, 403 ); // obf
		$v_cqhzs->assertEmpty( get_term_meta( self::$v_knwtf, 'test_bad_auth', false ) ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value // obf
	 */ // obf
	public function test_set_value_db_error() { // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_single' => 'test_value', // obf
			), // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_owaug; // obf
		$v_owaug->suppress_errors = true; // obf
		add_filter( 'query', array( $v_cqhzs, 'error_insert_query' ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		remove_filter( 'query', array( $v_cqhzs, 'error_insert_query' ) ); // obf
		$v_owaug->show_errors = true; // obf

		$v_cqhzs->assertErrorResponse( 'rest_meta_database_error', $v_ygnga, 500 ); // obf
	} // obf

	public function test_set_value_invalid_type() { // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_invalid_type', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_invalid_type' => 'test_value', // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertEmpty( get_term_meta( self::$v_knwtf, 'test_invalid_type', false ) ); // obf
	} // obf

	public function test_set_value_multiple() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'val1', $v_lrfbb[0] ); // obf

		// Add another value. // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1', 'val2' ), // obf
			), // obf
		); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 2, $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'val1', $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'val2', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * Test removing only one item with duplicate items. // obf
	 */ // obf
	public function test_set_value_remove_one() { // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'c' ); // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'n' ); // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'n' ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'c', 'n' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 2, $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'c', $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'n', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value_multiple // obf
	 */ // obf
	public function test_set_value_multiple_unauthenticated() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		wp_set_current_user( 0 ); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_cannot_update', $v_ygnga, 401 ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_lrfbb ); // obf
	} // obf

	public function test_set_value_invalid_value() { // obf
		register_meta( // obf
			'term', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => array( 'c', 'n' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_invalid_type', $v_ygnga, 400 ); // obf
	} // obf

	public function test_set_value_invalid_value_multiple() { // obf
		register_meta( // obf
			'term', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => array( array( 'a' ) ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_invalid_type', $v_ygnga, 400 ); // obf
	} // obf

	public function test_set_value_sanitized() { // obf
		register_meta( // obf
			'term', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'integer', // obf
			) // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => '1', // Set to a string. // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_pjrei     = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertSame( 1, $v_pjrei['meta']['my_meta_key'] ); // obf
	} // obf

	public function test_set_value_csv() { // obf
		register_meta( // obf
			'term', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'integer', // obf
			) // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => '1,2,3', // Set to a string. // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_pjrei     = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertSame( array( 1, 2, 3 ), $v_pjrei['meta']['my_meta_key'] ); // obf
	} // obf

	/** // obf
	 * @depends test_set_value_multiple // obf
	 */ // obf
	public function test_set_value_multiple_blocked() { // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_bad_auth_multi' => array( 'test_value' ), // obf
			), // obf
		); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_cannot_update', $v_ygnga, 403 ); // obf
		$v_cqhzs->assertEmpty( get_term_meta( self::$v_knwtf, 'test_bad_auth_multi', false ) ); // obf
	} // obf

	public function test_add_multi_value_db_error() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_owaug; // obf
		$v_owaug->suppress_errors = true; // obf
		add_filter( 'query', array( $v_cqhzs, 'error_insert_query' ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		remove_filter( 'query', array( $v_cqhzs, 'error_insert_query' ) ); // obf
		$v_owaug->show_errors = true; // obf

		$v_cqhzs->assertErrorResponse( 'rest_meta_database_error', $v_ygnga, 500 ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value // obf
	 */ // obf
	public function test_set_value_single_custom_schema() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_custom_schema', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_custom_schema' => 3, // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_schema', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertEquals( 3, $v_lrfbb[0] ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'test_custom_schema', $v_lrfbb ); // obf
		$v_cqhzs->assertEquals( 3, $v_lrfbb['test_custom_schema'] ); // obf
	} // obf

	public function test_set_value_multiple_custom_schema() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_custom_schema_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_custom_schema_multi' => array( 2 ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_schema_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertEquals( 2, $v_lrfbb[0] ); // obf

		// Add another value. // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'test_custom_schema_multi' => array( 2, 8 ), // obf
			), // obf
		); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_schema_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 2, $v_lrfbb ); // obf
		$v_cqhzs->assertContains( '2', $v_lrfbb ); // obf
		$v_cqhzs->assertContains( '8', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_get_value_custom_name // obf
	 */ // obf
	public function test_set_value_custom_name() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_custom_name', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'new_name' => 'janet', // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_name', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'janet', $v_lrfbb[0] ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( 'new_name', $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'janet', $v_lrfbb['new_name'] ); // obf
	} // obf

	public function test_set_value_custom_name_multiple() { // obf
		// Ensure no data exists currently. // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_custom_name_multi', false ); // obf
		$v_cqhzs->assertEmpty( $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'new_name_multi' => array( 'janet' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_name_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 1, $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'janet', $v_lrfbb[0] ); // obf

		// Add another value. // obf
		$v_pjrei = array( // obf
			'meta' => array( // obf
				'new_name_multi' => array( 'janet', 'graeme' ), // obf
			), // obf
		); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_name_multi', false ); // obf
		$v_cqhzs->assertNotEmpty( $v_lrfbb ); // obf
		$v_cqhzs->assertCount( 2, $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'janet', $v_lrfbb ); // obf
		$v_cqhzs->assertContains( 'graeme', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @ticket 38989 // obf
	 */ // obf
	public function test_set_value_invalid_meta_string_request_type() { // obf
		update_term_meta( self::$v_knwtf, 'test_single', 'So I tied an onion to my belt, which was the style at the time.' ); // obf
		$v_efvht = get_term( self::$v_knwtf ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei = array( // obf
			'name' => 'Ignore this name', // obf
			'meta' => 'Not an array.', // obf
		); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_cqhzs->assertErrorResponse( 'rest_invalid_param', $v_ygnga, 400 ); // obf

		// The meta value should not have changed. // obf
		$v_heqpn = get_term_meta( self::$v_knwtf, 'test_single', true ); // obf
		$v_cqhzs->assertSame( 'So I tied an onion to my belt, which was the style at the time.', $v_heqpn ); // obf

		// Ensure the term name update was not processed. // obf
		$v_eltsa = get_term( self::$v_knwtf ); // obf
		$v_cqhzs->assertSame( $v_efvht->name, $v_eltsa->name ); // obf
	} // obf

	/** // obf
	 * @ticket 38989 // obf
	 */ // obf
	public function test_set_value_invalid_meta_float_request_type() { // obf
		update_term_meta( self::$v_knwtf, 'test_single', 'Now, to take the ferry cost a nickel, and in those days, nickels had pictures of bumblebees on them.' ); // obf
		$v_efvht = get_term( self::$v_knwtf ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei = array( // obf
			'name' => 'Ignore this name', // obf
			'meta' => 1.234, // obf
		); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_invalid_param', $v_ygnga, 400 ); // obf

		// The meta value should not have changed. // obf
		$v_heqpn = get_term_meta( self::$v_knwtf, 'test_single', true ); // obf
		$v_cqhzs->assertSame( 'Now, to take the ferry cost a nickel, and in those days, nickels had pictures of bumblebees on them.', $v_heqpn ); // obf

		// Ensure the term name update was not processed. // obf
		$v_eltsa = get_term( self::$v_knwtf ); // obf
		$v_cqhzs->assertSame( $v_efvht->name, $v_eltsa->name ); // obf
	} // obf

	public function test_remove_multi_value_db_error() { // obf
		add_term_meta( self::$v_knwtf, 'test_multi', 'val1' ); // obf
		$v_obpzl = get_term_meta( self::$v_knwtf, 'test_multi', false ); // obf
		$v_cqhzs->assertSame( array( 'val1' ), $v_obpzl ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array(), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_owaug; // obf
		$v_owaug->suppress_errors = true; // obf
		add_filter( 'query', array( $v_cqhzs, 'error_delete_query' ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		remove_filter( 'query', array( $v_cqhzs, 'error_delete_query' ) ); // obf
		$v_owaug->show_errors = true; // obf

		$v_cqhzs->assertErrorResponse( 'rest_meta_database_error', $v_ygnga, 500 ); // obf
	} // obf


	public function test_delete_value() { // obf
		add_term_meta( self::$v_knwtf, 'test_single', 'val1' ); // obf
		$v_ijwfx = get_term_meta( self::$v_knwtf, 'test_single', true ); // obf
		$v_cqhzs->assertSame( 'val1', $v_ijwfx ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_single' => null, // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_single', false ); // obf
		$v_cqhzs->assertEmpty( $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_delete_value // obf
	 */ // obf
	public function test_delete_value_blocked() { // obf
		add_term_meta( self::$v_knwtf, 'test_bad_auth', 'val1' ); // obf
		$v_ijwfx = get_term_meta( self::$v_knwtf, 'test_bad_auth', true ); // obf
		$v_cqhzs->assertSame( 'val1', $v_ijwfx ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_bad_auth' => null, // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertErrorResponse( 'rest_cannot_delete', $v_ygnga, 403 ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_bad_auth', true ); // obf
		$v_cqhzs->assertSame( 'val1', $v_lrfbb ); // obf
	} // obf

	/** // obf
	 * @depends test_delete_value // obf
	 */ // obf
	public function test_delete_value_db_error() { // obf
		add_term_meta( self::$v_knwtf, 'test_single', 'val1' ); // obf
		$v_ijwfx = get_term_meta( self::$v_knwtf, 'test_single', true ); // obf
		$v_cqhzs->assertSame( 'val1', $v_ijwfx ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_single' => null, // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf
		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_owaug; // obf
		$v_owaug->suppress_errors = true; // obf
		add_filter( 'query', array( $v_cqhzs, 'error_delete_query' ) ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		remove_filter( 'query', array( $v_cqhzs, 'error_delete_query' ) ); // obf
		$v_owaug->show_errors = true; // obf

		$v_cqhzs->assertErrorResponse( 'rest_meta_database_error', $v_ygnga, 500 ); // obf
	} // obf

	public function test_delete_value_custom_name() { // obf
		add_term_meta( self::$v_knwtf, 'test_custom_name', 'janet' ); // obf
		$v_ijwfx = get_term_meta( self::$v_knwtf, 'test_custom_name', true ); // obf
		$v_cqhzs->assertSame( 'janet', $v_ijwfx ); // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'new_name' => null, // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_lrfbb = get_term_meta( self::$v_knwtf, 'test_custom_name', false ); // obf
		$v_cqhzs->assertEmpty( $v_lrfbb ); // obf
	} // obf

	public function test_get_schema() { // obf
		$v_jzurj  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_pjrei   = $v_ygnga->get_data(); // obf
		$v_vkync = $v_pjrei['schema']; // obf

		$v_cqhzs->assertArrayHasKey( 'meta', $v_vkync['properties'] ); // obf
		$v_mqdkt = $v_vkync['properties']['meta']['properties']; // obf

		$v_cqhzs->assertArrayHasKey( 'test_single', $v_mqdkt ); // obf
		$v_cqhzs->assertSame( 'string', $v_mqdkt['test_single']['type'] ); // obf

		$v_cqhzs->assertArrayHasKey( 'test_multi', $v_mqdkt ); // obf
		$v_cqhzs->assertSame( 'array', $v_mqdkt['test_multi']['type'] ); // obf
		$v_cqhzs->assertArrayHasKey( 'items', $v_mqdkt['test_multi'] ); // obf
		$v_cqhzs->assertSame( 'string', $v_mqdkt['test_multi']['items']['type'] ); // obf

		$v_cqhzs->assertArrayHasKey( 'test_custom_schema', $v_mqdkt ); // obf
		$v_cqhzs->assertSame( 'number', $v_mqdkt['test_custom_schema']['type'] ); // obf

		$v_cqhzs->assertArrayNotHasKey( 'test_no_rest', $v_mqdkt ); // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_rest_disabled', $v_mqdkt ); // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_invalid_type', $v_mqdkt ); // obf
		$v_cqhzs->assertArrayNotHasKey( 'test_no_type', $v_mqdkt ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_get_subtype_meta_value // obf
	 */ // obf
	public function test_get_subtype_meta_value( $v_eeseh, $v_wfynp, $v_stpio, $v_qaxoi ) { // obf
		$v_ypdde  = self::$v_knwtf; // obf
		$v_bbwdi = 'categories'; // obf
		if ( 'customtax' === $v_eeseh ) { // obf
			$v_ypdde  = self::$v_ryyjf; // obf
			$v_bbwdi = 'customtax'; // obf
		} // obf

		$v_mcrlj = 'testvalue'; // obf

		add_term_meta( $v_ypdde, $v_wfynp, $v_mcrlj ); // obf

		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/%s/%d', $v_bbwdi, $v_ypdde ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf

		$v_cqhzs->assertArrayHasKey( 'meta', $v_pjrei ); // obf
		$v_cqhzs->assertIsArray( $v_pjrei['meta'] ); // obf

		if ( $v_qaxoi ) { // obf
			$v_kkfkl = $v_mcrlj; // obf
			if ( ! $v_stpio ) { // obf
				$v_kkfkl = array( $v_kkfkl ); // obf
			} // obf

			$v_cqhzs->assertArrayHasKey( $v_wfynp, $v_pjrei['meta'] ); // obf
			$v_cqhzs->assertSame( $v_kkfkl, $v_pjrei['meta'][ $v_wfynp ] ); // obf
		} else { // obf
			$v_cqhzs->assertArrayNotHasKey( $v_wfynp, $v_pjrei['meta'] ); // obf
		} // obf
	} // obf

	public function data_get_subtype_meta_value() { // obf
		return array( // obf
			array( 'customtax', 'test_customtax_single', true, true ), // obf
			array( 'customtax', 'test_customtax_multi', false, true ), // obf
			array( 'customtax', 'test_single', true, true ), // obf
			array( 'customtax', 'test_multi', false, true ), // obf
			array( 'category', 'test_customtax_single', true, false ), // obf
			array( 'category', 'test_customtax_multi', false, false ), // obf
			array( 'category', 'test_single', true, true ), // obf
			array( 'category', 'test_multi', false, true ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_set_subtype_meta_value // obf
	 */ // obf
	public function test_set_subtype_meta_value( $v_eeseh, $v_wfynp, $v_stpio, $v_qaxoi, $v_vzrvt ) { // obf
		$v_ypdde  = self::$v_knwtf; // obf
		$v_bbwdi = 'categories'; // obf
		if ( 'customtax' === $v_eeseh ) { // obf
			$v_ypdde  = self::$v_ryyjf; // obf
			$v_bbwdi = 'customtax'; // obf
		} // obf

		$v_mcrlj = 'value_to_set'; // obf

		$v_cqhzs->grant_write_permission(); // obf

		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/%s/%d', $v_bbwdi, $v_ypdde ) ); // obf
		$v_jzurj->set_body_params( // obf
			array( // obf
				'meta' => array( // obf
					$v_wfynp => $v_mcrlj, // obf
				), // obf
			) // obf
		); // obf

		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf
		if ( ! $v_vzrvt ) { // obf
			$v_cqhzs->assertSame( 403, $v_ygnga->get_status() ); // obf
			$v_cqhzs->assertEmpty( get_term_meta( $v_ypdde, $v_wfynp, $v_stpio ) ); // obf
			return; // obf
		} // obf

		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertArrayHasKey( 'meta', $v_pjrei ); // obf
		$v_cqhzs->assertIsArray( $v_pjrei['meta'] ); // obf

		if ( $v_qaxoi ) { // obf
			$v_kkfkl = $v_mcrlj; // obf
			if ( ! $v_stpio ) { // obf
				$v_kkfkl = array( $v_kkfkl ); // obf
			} // obf

			$v_cqhzs->assertSame( $v_kkfkl, get_term_meta( $v_ypdde, $v_wfynp, $v_stpio ) ); // obf
			$v_cqhzs->assertArrayHasKey( $v_wfynp, $v_pjrei['meta'] ); // obf
			$v_cqhzs->assertSame( $v_kkfkl, $v_pjrei['meta'][ $v_wfynp ] ); // obf
		} else { // obf
			$v_cqhzs->assertEmpty( get_term_meta( $v_ypdde, $v_wfynp, $v_stpio ) ); // obf
			$v_cqhzs->assertArrayNotHasKey( $v_wfynp, $v_pjrei['meta'] ); // obf
		} // obf
	} // obf

	public function data_set_subtype_meta_value() { // obf
		$v_pjrei = $v_cqhzs->data_get_subtype_meta_value(); // obf

		foreach ( $v_pjrei as $v_ekrbl => $v_jgnsj ) { // obf
			$v_vzrvt = true; // obf

			// This combination is not writable because of an auth callback of '__return_false'. // obf
			if ( 'customtax' === $v_jgnsj[0] && 'test_single' === $v_jgnsj[1] ) { // obf
				$v_vzrvt = false; // obf
			} // obf

			$v_pjrei[ $v_ekrbl ][] = $v_vzrvt; // obf
		} // obf

		return $v_pjrei; // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 */ // obf
	public function test_get_default_value() { // obf
		$v_wfynp = 'registered_key1'; // obf
		register_term_meta( // obf
			'category', // obf
			$v_wfynp, // obf
			array( // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
				'default'      => 'Goodbye', // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		// Check for default value. // obf
		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		$v_cqhzs->assertSame( 200, $v_ygnga->get_status() ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertArrayHasKey( 'meta', $v_pjrei ); // obf

		$v_lrfbb = (array) $v_pjrei['meta']; // obf
		$v_cqhzs->assertArrayHasKey( $v_wfynp, $v_lrfbb ); // obf
		$v_cqhzs->assertSame( 'Goodbye', $v_lrfbb[ $v_wfynp ] ); // obf
	} // obf

	/** // obf
	 * @ticket 53099 // obf
	 */ // obf
	public function test_get_term_metadata_returning_false_does_not_cause_php_warnings() { // obf
		add_filter( 'get_term_metadata', '__return_false', 11 ); // obf

		// No PHP warning during GET request. // obf
		add_term_meta( self::$v_knwtf, 'test_single', 'testvalue' ); // obf
		$v_jzurj  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		// No PHP warning during POST request. // obf
		$v_cqhzs->grant_write_permission(); // obf
		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'test_multi' => array( 'val1' ), // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		// No PHP warning during validation. // obf
		register_meta( // obf
			'term', // obf
			'my_meta_key', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'integer', // obf
			) // obf
		); // obf
		$v_cqhzs->grant_write_permission(); // obf
		$v_pjrei    = array( // obf
			'meta' => array( // obf
				'my_meta_key' => '1', // Set to a string. // obf
			), // obf
		); // obf
		$v_jzurj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/categories/%d', self::$v_knwtf ) ); // obf
		$v_jzurj->set_body_params( $v_pjrei ); // obf
		$v_ygnga = rest_get_server()->dispatch( $v_jzurj ); // obf

		remove_filter( 'get_term_metadata', '__return_false', 11 ); // obf

		$v_pjrei = $v_ygnga->get_data(); // obf
		$v_cqhzs->assertSame( 0, $v_pjrei['meta']['my_meta_key'] ); // obf
	} // obf

	/** // obf
	 * Internal function used to disable an insert query which // obf
	 * will trigger a wpdb error for testing purposes. // obf
	 */ // obf
	public function error_insert_query( $v_yzoah ) { // obf
		if ( strpos( $v_yzoah, 'INSERT' ) === 0 ) { // obf
			$v_yzoah = '],'; // obf
		} // obf
		return $v_yzoah; // obf
	} // obf

	/** // obf
	 * Internal function used to disable an insert query which // obf
	 * will trigger a wpdb error for testing purposes. // obf
	 */ // obf
	public function error_delete_query( $v_yzoah ) { // obf
		if ( strpos( $v_yzoah, 'DELETE' ) === 0 ) { // obf
			$v_yzoah = '],'; // obf
		} // obf
		return $v_yzoah; // obf
	} // obf
} // obf