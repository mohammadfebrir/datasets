

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Block_Renderer_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 * // obf
 * @covers WP_REST_Block_Renderer_Controller // obf
 * // obf
 * @group restapi-blocks // obf
 * @group restapi // obf
 */ // obf
class REST_Block_Renderer_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * The REST API route for the block renderer. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_jcdyn = '/wp/v2/block-renderer/'; // obf

	/** // obf
	 * Test block's name. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_uivez = 'core/test-block'; // obf

	/** // obf
	 * Test post context block's name. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_furmi = 'core/context-test-block'; // obf

	/** // obf
	 * Non-dynamic block name. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_oixjy = 'core/non-dynamic'; // obf

	/** // obf
	 * Dynamic block with boolean attributes block name. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected static $v_qjlsz = 'core/dynamic-block-with-boolean-attributes'; // obf

	/** // obf
	 * Test API user's ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_sfihb; // obf

	/** // obf
	 * Test post ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_uhewv; // obf

	/** // obf
	 * Author test user ID. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_hpnvf; // obf

	/** // obf
	 * Create test data before the tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_amcdc Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_amcdc ) { // obf
		self::$v_sfihb = $v_amcdc->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_hpnvf = $v_amcdc->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		self::$v_uhewv = $v_amcdc->post->create( // obf
			array( // obf
				'post_title' => 'Test Post', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Delete test data after our tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_sfihb ); // obf
	} // obf

	/** // obf
	 * Set up each test method. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_tyluk->register_test_block(); // obf
		$v_tyluk->register_post_context_test_block(); // obf
		$v_tyluk->register_non_dynamic_block(); // obf
		$v_tyluk->register_dynamic_block_with_boolean_attributes(); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function tear_down() { // obf
		WP_Block_Type_Registry::get_instance()->unregister( self::$v_uivez ); // obf
		WP_Block_Type_Registry::get_instance()->unregister( self::$v_furmi ); // obf
		WP_Block_Type_Registry::get_instance()->unregister( self::$v_oixjy ); // obf
		WP_Block_Type_Registry::get_instance()->unregister( self::$v_qjlsz ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Register test block. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function register_test_block() { // obf
		register_block_type( // obf
			self::$v_uivez, // obf
			array( // obf
				'attributes'      => array( // obf
					'some_string' => array( // obf
						'type'    => 'string', // obf
						'default' => 'some_default', // obf
					), // obf
					'some_int'    => array( // obf
						'type' => 'integer', // obf
					), // obf
					'some_array'  => array( // obf
						'type'  => 'array', // obf
						'items' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
				'render_callback' => array( $v_tyluk, 'render_test_block' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Register test block with post_id as attribute for post context test. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function register_post_context_test_block() { // obf
		register_block_type( // obf
			self::$v_furmi, // obf
			array( // obf
				'attributes'      => array(), // obf
				'render_callback' => array( $v_tyluk, 'render_post_context_test_block' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Registers the non-dynamic block name. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	protected function register_non_dynamic_block() { // obf
		register_block_type( self::$v_oixjy ); // obf
	} // obf

	/** // obf
	 * Registers the dynamic with boolean attributes block name. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	protected function register_dynamic_block_with_boolean_attributes() { // obf
		register_block_type( // obf
			self::$v_qjlsz, // obf
			array( // obf
				'attributes'      => array( // obf
					'boolean_true_attribute'  => array( // obf
						'type'    => 'boolean', // obf
						'default' => true, // obf
					), // obf
					'boolean_false_attribute' => array( // obf
						'type'    => 'boolean', // obf
						'default' => false, // obf
					), // obf
				), // obf
				'render_callback' => array( $v_tyluk, 'render_test_block' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Test render callback. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array $v_jelss Props. // obf
	 * @return string Rendered attributes, which is here just JSON. // obf
	 */ // obf
	public function render_test_block( $v_jelss ) { // obf
		return wp_json_encode( $v_jelss ); // obf
	} // obf

	/** // obf
	 * Test render callback for testing post context. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function render_post_context_test_block() { // obf
		return get_the_title(); // obf
	} // obf

	/** // obf
	 * Check that the route was registered properly. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::register_routes // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_xtymy = get_dynamic_block_names(); // obf
		$v_tyluk->assertContains( self::$v_uivez, $v_xtymy ); // obf

		$v_xutiv = rest_get_server()->get_routes(); // obf
		$v_tyluk->assertArrayHasKey( self::$v_jcdyn . '(?P<name>[a-z0-9-]+/[a-z0-9-]+)', $v_xutiv ); // obf
	} // obf

	/** // obf
	 * Test getting item without permissions. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item_without_permissions() { // obf
		wp_set_current_user( 0 ); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf

		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'block_cannot_read', $v_ktqay, rest_authorization_required_code() ); // obf
	} // obf

	/** // obf
	 * Test getting item without 'edit' context. // obf
	 * // obf
	 * @ticket 45098 // obf
	 */ // obf
	public function test_get_item_with_invalid_context() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_twdxm  = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'rest_invalid_param', $v_ktqay, 400 ); // obf
	} // obf

	/** // obf
	 * Test getting item with invalid block name. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item_invalid_block_name() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf
		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . 'core/123' ); // obf

		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'block_invalid', $v_ktqay, 404 ); // obf
	} // obf

	/** // obf
	 * Check getting item with an invalid param provided. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item_invalid_attribute() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf
		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( // obf
			'attributes', // obf
			array( // obf
				'some_string' => array( 'no!' ), // obf
			) // obf
		); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 400, $v_ktqay->get_status() ); // obf
	} // obf

	/** // obf
	 * Check getting item with an invalid param provided. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item_unrecognized_attribute() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf
		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( // obf
			'attributes', // obf
			array( // obf
				'unrecognized' => 'yes', // obf
			) // obf
		); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 400, $v_ktqay->get_status() ); // obf
	} // obf

	/** // obf
	 * Check getting item with default attributes provided. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item_default_attributes() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_ctdtz = WP_Block_Type_Registry::get_instance()->get_registered( self::$v_uivez ); // obf
		$v_cuzfh   = array(); // obf
		foreach ( $v_ctdtz->attributes as $v_znmpf => $v_gebyk ) { // obf
			if ( isset( $v_gebyk['default'] ) ) { // obf
				$v_cuzfh[ $v_znmpf ] = $v_gebyk['default']; // obf
			} // obf
		} // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( 'attributes', array() ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_krcbx = $v_ktqay->get_data(); // obf

		$v_tyluk->assertSame( $v_cuzfh, json_decode( $v_krcbx['rendered'], true ) ); // obf
		$v_tyluk->assertEquals( // obf
			json_decode( $v_ctdtz->render( $v_cuzfh ) ), // obf
			json_decode( $v_krcbx['rendered'] ) // obf
		); // obf
	} // obf

	/** // obf
	 * Check getting item with attributes provided. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item // obf
	 */ // obf
	public function test_get_item() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_ctdtz = WP_Block_Type_Registry::get_instance()->get_registered( self::$v_uivez ); // obf
		$v_jelss = array( // obf
			'some_int'    => '123', // obf
			'some_string' => 'foo', // obf
			'some_array'  => array( 1, '2', 3 ), // obf
		); // obf

		$v_zwqte               = $v_jelss; // obf
		$v_zwqte['some_int']   = (int) $v_zwqte['some_int']; // obf
		$v_zwqte['some_array'] = array_map( 'intval', $v_zwqte['some_array'] ); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( 'attributes', $v_jelss ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_krcbx = $v_ktqay->get_data(); // obf

		$v_tyluk->assertSame( $v_zwqte, json_decode( $v_krcbx['rendered'], true ) ); // obf
		$v_tyluk->assertEqualSetsWithIndex( // obf
			json_decode( $v_ctdtz->render( $v_jelss ), true ), // obf
			json_decode( $v_krcbx['rendered'], true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Check filtering block output using the pre_render_block filter. // obf
	 * // obf
	 * @ticket 49387 // obf
	 */ // obf
	public function test_get_item_with_pre_render_block_filter() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_uvszt = static function ( $v_qujaf, $v_esfhn ) { // obf
			if ( $v_esfhn['blockName'] === self::$v_uivez ) { // obf
				return '<p>Alternate content.</p>'; // obf
			} // obf
		}; // obf
		add_filter( 'pre_render_block', $v_uvszt, 10, 2 ); // obf

		$v_jelss = array( // obf
			'some_int'    => '123', // obf
			'some_string' => 'foo', // obf
			'some_array'  => array( 1, '2', 3 ), // obf
		); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( 'attributes', $v_jelss ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf

		$v_krcbx = $v_ktqay->get_data(); // obf
		$v_tyluk->assertSame( '<p>Alternate content.</p>', $v_krcbx['rendered'] ); // obf

		remove_filter( 'pre_render_block', $v_uvszt ); // obf
	} // obf

	/** // obf
	 * Test getting item with post context. // obf
	 * // obf
	 * @ticket 45098 // obf
	 */ // obf
	public function test_get_item_with_post_context() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_fnoox = 'Test Post'; // obf
		$v_twdxm        = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_furmi ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf

		// Test without post ID. // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_krcbx = $v_ktqay->get_data(); // obf

		$v_tyluk->assertEmpty( $v_krcbx['rendered'] ); // obf

		// Now test with post ID. // obf
		$v_twdxm->set_param( 'post_id', self::$v_uhewv ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_krcbx = $v_ktqay->get_data(); // obf

		$v_tyluk->assertSame( $v_fnoox, $v_krcbx['rendered'] ); // obf
	} // obf

	/** // obf
	 * Test a POST request, with the attributes in the body. // obf
	 * // obf
	 * @ticket 49680 // obf
	 */ // obf
	public function test_get_item_post_request() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf
		$v_ddcwl = 'Lorem ipsum dolor'; // obf
		$v_jelss       = array( 'some_string' => $v_ddcwl ); // obf
		$v_twdxm          = new WP_REST_Request( 'POST', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_header( 'Content-Type', 'application/json' ); // obf
		$v_twdxm->set_body( wp_json_encode( compact( 'attributes' ) ) ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_tyluk->assertStringContainsString( $v_ddcwl, $v_ktqay->get_data()['rendered'] ); // obf
	} // obf

	/** // obf
	 * Test getting item with invalid post ID. // obf
	 * // obf
	 * @ticket 45098 // obf
	 */ // obf
	public function test_get_item_without_permissions_invalid_post() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_furmi ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf

		// Test with invalid post ID. // obf
		$v_twdxm->set_param( 'post_id', PHP_INT_MAX ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'block_cannot_read', $v_ktqay, 403 ); // obf
	} // obf

	/** // obf
	 * Test getting item without permissions to edit context post. // obf
	 * // obf
	 * @ticket 45098 // obf
	 */ // obf
	public function test_get_item_without_permissions_cannot_edit_post() { // obf
		wp_set_current_user( self::$v_hpnvf ); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_furmi ); // obf
		$v_twdxm->set_param( 'context', 'edit' ); // obf

		// Test with private post ID. // obf
		$v_twdxm->set_param( 'post_id', self::$v_uhewv ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'block_cannot_read', $v_ktqay, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 48079 // obf
	 */ // obf
	public function test_get_item_non_dynamic_block() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf
		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_oixjy ); // obf

		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf

		$v_tyluk->assertErrorResponse( 'block_invalid', $v_ktqay, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 50620 // obf
	 */ // obf
	public function test_get_sanitized_attributes_for_dynamic_block_with_boolean_attributes() { // obf
		wp_set_current_user( self::$v_sfihb ); // obf

		$v_twdxm = new WP_REST_Request( 'GET', self::$v_jcdyn . self::$v_qjlsz ); // obf

		$v_jelss = array( // obf
			'boolean_true_attribute'  => 'true', // obf
			'boolean_false_attribute' => 'false', // obf
		); // obf

		$v_rabgi = array( // obf
			'boolean_true_attribute'  => true, // obf
			'boolean_false_attribute' => false, // obf
		); // obf

		$v_twdxm->set_param( 'context', 'edit' ); // obf
		$v_twdxm->set_param( 'attributes', $v_jelss ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_tyluk->assertSame( 200, $v_ktqay->get_status() ); // obf
		$v_krcbx = $v_ktqay->get_data(); // obf

		$v_tyluk->assertSame( $v_rabgi, json_decode( $v_krcbx['rendered'], true ) ); // obf
	} // obf

	/** // obf
	 * Get item schema. // obf
	 * // obf
	 * @ticket 45098 // obf
	 * // obf
	 * @covers WP_REST_Block_Renderer_Controller::get_item_schema // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_twdxm  = new WP_REST_Request( 'OPTIONS', self::$v_jcdyn . self::$v_uivez ); // obf
		$v_ktqay = rest_get_server()->dispatch( $v_twdxm ); // obf
		$v_krcbx     = $v_ktqay->get_data(); // obf

		$v_tyluk->assertSameSets( array( 'GET', 'POST' ), $v_krcbx['endpoints'][0]['methods'] ); // obf
		$v_tyluk->assertSameSets( // obf
			array( 'name', 'context', 'attributes', 'post_id' ), // obf
			array_keys( $v_krcbx['endpoints'][0]['args'] ) // obf
		); // obf
		$v_tyluk->assertSame( 'object', $v_krcbx['endpoints'][0]['args']['attributes']['type'] ); // obf

		$v_tyluk->assertArrayHasKey( 'schema', $v_krcbx ); // obf
		$v_tyluk->assertSame( 'rendered-block', $v_krcbx['schema']['title'] ); // obf
		$v_tyluk->assertSame( 'object', $v_krcbx['schema']['type'] ); // obf
		$v_tyluk->arrayHasKey( 'rendered', $v_krcbx['schema']['properties'] ); // obf
		$v_tyluk->arrayHasKey( 'string', $v_krcbx['schema']['properties']['rendered']['type'] ); // obf
		$v_tyluk->assertSame( array( 'edit' ), $v_krcbx['schema']['properties']['rendered']['context'] ); // obf
	} // obf

	/** // obf
	 * The update_item() method does not exist for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	/** // obf
	 * The create_item() method does not exist for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	/** // obf
	 * The delete_item() method does not exist for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	/** // obf
	 * The get_items() method does not exist for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_items() { // obf
		// Controller does not implement get_items(). // obf
	} // obf

	/** // obf
	 * The get_context_param() method is not used for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	/** // obf
	 * The prepare_item() method does not exist for block rendering. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf
} // obf