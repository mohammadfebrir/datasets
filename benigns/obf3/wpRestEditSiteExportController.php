

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Edit_Site_Export_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 * // obf
 * @covers WP_REST_Edit_Site_Export_Controller // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_WpRestEditSiteExportController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * The REST API route for the edit site export. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const REQUEST_ROUTE = '/wp-block-editor/v1/export'; // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_bqppv; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_tpeco WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tpeco ) { // obf
		self::$v_bqppv = $v_tpeco->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Delete test data after our tests run. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_bqppv ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Edit_Site_Export_Controller::register_routes // obf
	 * @ticket 54448 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_cvcvs = rest_get_server()->get_routes(); // obf
		$v_jbqpy->assertArrayHasKey( static::REQUEST_ROUTE, $v_cvcvs ); // obf
		$v_jbqpy->assertCount( 1, $v_cvcvs[ static::REQUEST_ROUTE ] ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Edit_Site_Export_Controller::permissions_check // obf
	 * // obf
	 * @ticket 54448 // obf
	 */ // obf
	public function test_export_for_no_user_permissions() { // obf
		wp_set_current_user( 0 ); // obf

		$v_aubhz  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_aoltk = rest_get_server()->dispatch( $v_aubhz ); // obf

		$v_jbqpy->assertErrorResponse( 'rest_cannot_export_templates', $v_aoltk, 401 ); // obf
	} // obf

	/** // obf
	 * @covers WP_REST_Edit_Site_Export_Controller::permissions_check // obf
	 * // obf
	 * @ticket 54448 // obf
	 */ // obf
	public function test_export_for_user_with_insufficient_permissions() { // obf
		wp_set_current_user( self::$v_bqppv ); // obf

		$v_aubhz  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_aoltk = rest_get_server()->dispatch( $v_aubhz ); // obf

		$v_jbqpy->assertErrorResponse( 'rest_cannot_export_templates', $v_aoltk, 403 ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_item() { // obf
		// Controller does not implement get_item(). // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_items() { // obf
		// Controller does not implement get_items(). // obf
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
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
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
	public function test_get_item_schema() { // obf
		// Controller does not implement get_item_schema(). // obf
	} // obf
} // obf