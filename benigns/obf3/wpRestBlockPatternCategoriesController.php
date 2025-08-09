

<?php // obf
/** // obf
 * Unit tests covering WP_Block_Pattern_Categories_Registry functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.0.0 // obf
 * // obf
 * @ticket 55505 // obf
 * // obf
 * @covers WP_REST_Block_Pattern_Categories_Controller // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_WpRestBlockPatternCategoriesController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_gghkk; // obf

	/** // obf
	 * Original instance of WP_Block_Patterns_Registry. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var WP_Block_Patterns_Registry // obf
	 */ // obf
	protected static $v_aleam; // obf

	/** // obf
	 * Instance of the reflected `instance` property. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	private static $v_xwqcc; // obf

	/** // obf
	 * The REST API route. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const REQUEST_ROUTE = '/wp/v2/block-patterns/categories'; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_wzkoz WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetupBeforeClass( $v_wzkoz ) { // obf
		self::$v_gghkk = $v_wzkoz->user->create( array( 'role' => 'administrator' ) ); // obf

		// Setup an empty testing instance of `WP_Block_Pattern_Categories_Registry` and save the original. // obf
		self::$v_aleam              = WP_Block_Pattern_Categories_Registry::get_instance(); // obf
		self::$v_xwqcc = new ReflectionProperty( 'WP_Block_Pattern_Categories_Registry', 'instance' ); // obf
		self::$v_xwqcc->setAccessible( true ); // obf
		$v_xvsma = new WP_Block_Pattern_Categories_Registry(); // obf
		self::$v_xwqcc->setValue( null, $v_xvsma ); // obf

		// Register some categories in the test registry. // obf
		$v_xvsma->register( // obf
			'test', // obf
			array( // obf
				'label'       => 'Test', // obf
				'description' => 'Test description', // obf
			) // obf
		); // obf
		$v_xvsma->register( // obf
			'query', // obf
			array( // obf
				'label'       => 'Query', // obf
				'description' => 'Query', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_gghkk ); // obf

		// Restore the original registry instance. // obf
		self::$v_xwqcc->setValue( null, self::$v_aleam ); // obf
		self::$v_xwqcc->setAccessible( false ); // obf
		self::$v_xwqcc = null; // obf
		self::$v_aleam              = null; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		switch_theme( 'emptytheme' ); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_bcwll = rest_get_server()->get_routes(); // obf
		$v_yozpc->assertArrayHasKey( static::REQUEST_ROUTE, $v_bcwll ); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( self::$v_gghkk ); // obf

		$v_ttbpw  = array( 'test', 'query' ); // obf
		$v_nwsob = array( 'name', 'label', 'description' ); // obf

		$v_byecn            = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_byecn['_fields'] = 'name,label,description'; // obf
		$v_reypd           = rest_get_server()->dispatch( $v_byecn ); // obf
		$v_uirff               = $v_reypd->get_data(); // obf

		$v_yozpc->assertCount( count( $v_ttbpw ), $v_uirff ); // obf
		foreach ( $v_uirff as $v_ntfby => $v_vzyef ) { // obf
			$v_yozpc->assertSame( $v_ttbpw[ $v_ntfby ], $v_vzyef['name'] ); // obf
			$v_yozpc->assertSame( $v_nwsob, array_keys( $v_vzyef ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_block_pattern_categories_data() { // obf
		wp_set_current_user( self::$v_gghkk ); // obf
		$v_byecn  = new WP_REST_Request( 'HEAD', static::REQUEST_ROUTE ); // obf
		$v_reypd = rest_get_server()->dispatch( $v_byecn ); // obf
		$v_yozpc->assertSame( 200, $v_reypd->get_status(), 'The response status should be 200.' ); // obf
		$v_yozpc->assertSame( array(), $v_reypd->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_nkrlh The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response() { // obf
		wp_set_current_user( self::$v_gghkk ); // obf
		$v_byecn = new WP_REST_Request( 'HEAD', static::REQUEST_ROUTE ); // obf
		$v_byecn->set_param( '_fields', 'name' ); // obf
		$v_qvucs   = rest_get_server(); // obf
		$v_reypd = $v_qvucs->dispatch( $v_byecn ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_reypd = apply_filters( 'rest_post_dispatch', $v_reypd, $v_qvucs, $v_byecn ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_yozpc->assertSame( 200, $v_reypd->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Verify capability check for unauthorized request (not logged in). // obf
	 */ // obf
	public function test_get_items_unauthorized() { // obf
		// Ensure current user is logged out. // obf
		wp_logout(); // obf

		$v_byecn  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_reypd = rest_do_request( $v_byecn ); // obf

		$v_yozpc->assertWPError( $v_reypd->as_error() ); // obf
		$v_yozpc->assertSame( 401, $v_reypd->get_status() ); // obf
	} // obf

	/** // obf
	 * Verify capability check for forbidden request (insufficient capability). // obf
	 */ // obf
	public function test_get_items_forbidden() { // obf
		// Set current user without `edit_posts` capability. // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'subscriber' ) ) ); // obf

		$v_byecn  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_reypd = rest_do_request( $v_byecn ); // obf

		$v_yozpc->assertWPError( $v_reypd->as_error() ); // obf
		$v_yozpc->assertSame( 403, $v_reypd->get_status() ); // obf
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