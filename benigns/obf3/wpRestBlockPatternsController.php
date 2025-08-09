

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Block_Patterns_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.0.0 // obf
 * // obf
 * @ticket 55505 // obf
 * // obf
 * @covers WP_REST_Block_Patterns_Controller // obf
 * // obf
 * @group restapi // obf
 */ // obf
class Tests_REST_WpRestBlockPatternsController extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_vfkby; // obf

	/** // obf
	 * Original instance of WP_Block_Patterns_Registry. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var WP_Block_Patterns_Registry // obf
	 */ // obf
	protected static $v_aygds; // obf

	/** // obf
	 * Instance of the reflected `instance` property. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var ReflectionProperty // obf
	 */ // obf
	private static $v_lichh; // obf

	/** // obf
	 * The REST API route. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const REQUEST_ROUTE = '/wp/v2/block-patterns/patterns'; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_pqorb WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_pqorb ) { // obf
		self::$v_vfkby = $v_pqorb->user->create( array( 'role' => 'administrator' ) ); // obf

		// Setup an empty testing instance of `WP_Block_Patterns_Registry` and save the original. // obf
		self::$v_aygds              = WP_Block_Patterns_Registry::get_instance(); // obf
		self::$v_lichh = new ReflectionProperty( 'WP_Block_Patterns_Registry', 'instance' ); // obf
		self::$v_lichh->setAccessible( true ); // obf
		$v_odykw = new WP_Block_Pattern_Categories_Registry(); // obf
		self::$v_lichh->setValue( null, $v_odykw ); // obf

		// Register some patterns in the test registry. // obf
		$v_odykw->register( // obf
			'test/one', // obf
			array( // obf
				'title'         => 'Pattern One', // obf
				'content'       => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
				'viewportWidth' => 1440, // obf
				'categories'    => array( 'test' ), // obf
				'templateTypes' => array( 'page' ), // obf
				'source'        => 'theme', // obf
			) // obf
		); // obf

		$v_odykw->register( // obf
			'test/two', // obf
			array( // obf
				'title'         => 'Pattern Two', // obf
				'content'       => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
				'categories'    => array( 'test' ), // obf
				'templateTypes' => array( 'single' ), // obf
				'source'        => 'core', // obf
			) // obf
		); // obf

		$v_odykw->register( // obf
			'test/three', // obf
			array( // obf
				'title'      => 'Pattern Three', // obf
				'content'    => '<!-- wp:paragraph --><p>Three</p><!-- /wp:paragraph -->', // obf
				'categories' => array( 'test', 'buttons', 'query' ), // obf
				'source'     => 'pattern-directory/featured', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_vfkby ); // obf

		// Restore the original registry instance. // obf
		self::$v_lichh->setValue( null, self::$v_aygds ); // obf
		self::$v_lichh->setAccessible( false ); // obf
		self::$v_lichh = null; // obf
		self::$v_aygds              = null; // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		switch_theme( 'emptytheme' ); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_hinnu = rest_get_server()->get_routes(); // obf
		$v_klhft->assertArrayHasKey( static::REQUEST_ROUTE, $v_hinnu ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_vfkby ); // obf

		$v_oepma            = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_oepma['_fields'] = 'name,content,source,template_types'; // obf
		$v_xabml           = rest_get_server()->dispatch( $v_oepma ); // obf
		$v_mahso               = $v_xabml->get_data(); // obf

		$v_klhft->assertIsArray( $v_mahso, 'WP_REST_Block_Patterns_Controller::get_items() should return an array' ); // obf
		$v_klhft->assertGreaterThanOrEqual( 2, count( $v_mahso ), 'WP_REST_Block_Patterns_Controller::get_items() should return at least 2 items' ); // obf
		$v_klhft->assertSame( // obf
			array( // obf
				'name'           => 'test/one', // obf
				'content'        => '<!-- wp:heading {"level":1} --><h1>One</h1><!-- /wp:heading -->', // obf
				'template_types' => array( 'page' ), // obf
				'source'         => 'theme', // obf
			), // obf
			$v_mahso[0], // obf
			'WP_REST_Block_Patterns_Controller::get_items() should return test/one' // obf
		); // obf
		$v_klhft->assertSame( // obf
			array( // obf
				'name'           => 'test/two', // obf
				'content'        => '<!-- wp:paragraph --><p>Two</p><!-- /wp:paragraph -->', // obf
				'template_types' => array( 'single' ), // obf
				'source'         => 'core', // obf
			), // obf
			$v_mahso[1], // obf
			'WP_REST_Block_Patterns_Controller::get_items() should return test/two' // obf
		); // obf
	} // obf

	/** // obf
	 * Verify capability check for unauthorized request (not logged in). // obf
	 */ // obf
	public function test_get_items_unauthorized() { // obf
		// Ensure current user is logged out. // obf
		wp_logout(); // obf

		$v_oepma  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_xabml = rest_do_request( $v_oepma ); // obf

		$v_klhft->assertWPError( $v_xabml->as_error() ); // obf
		$v_klhft->assertSame( 401, $v_xabml->get_status() ); // obf
	} // obf

	/** // obf
	 * Verify capability check for forbidden request (insufficient capability). // obf
	 */ // obf
	public function test_get_items_forbidden() { // obf
		// Set current user without `edit_posts` capability. // obf
		wp_set_current_user( self::factory()->user->create( array( 'role' => 'subscriber' ) ) ); // obf

		$v_oepma  = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_xabml = rest_do_request( $v_oepma ); // obf

		$v_klhft->assertWPError( $v_xabml->as_error() ); // obf
		$v_klhft->assertSame( 403, $v_xabml->get_status() ); // obf
	} // obf

	/** // obf
	 * Tests the proper migration of old core pattern categories to new ones. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @ticket 57532 // obf
	 * @group external-http // obf
	 * // obf
	 * @covers WP_REST_Block_Patterns_Controller::get_items // obf
	 */ // obf
	public function test_get_items_migrate_pattern_categories() { // obf
		wp_set_current_user( self::$v_vfkby ); // obf

		$v_oepma            = new WP_REST_Request( 'GET', static::REQUEST_ROUTE ); // obf
		$v_oepma['_fields'] = 'name,categories'; // obf
		$v_xabml           = rest_get_server()->dispatch( $v_oepma ); // obf
		$v_mahso               = $v_xabml->get_data(); // obf

		$v_klhft->assertIsArray( $v_mahso, 'WP_REST_Block_Patterns_Controller::get_items() should return an array' ); // obf
		$v_klhft->assertGreaterThanOrEqual( 3, count( $v_mahso ), 'WP_REST_Block_Patterns_Controller::get_items() should return at least 3 items' ); // obf
		$v_klhft->assertSame( // obf
			array( // obf
				'name'       => 'test/one', // obf
				'categories' => array( 'test' ), // obf
			), // obf
			$v_mahso[0], // obf
			'WP_REST_Block_Patterns_Controller::get_items() should return test/one' // obf
		); // obf
		$v_klhft->assertSame( // obf
			array( // obf
				'name'       => 'test/two', // obf
				'categories' => array( 'test' ), // obf
			), // obf
			$v_mahso[1], // obf
			'WP_REST_Block_Patterns_Controller::get_items() should return test/two' // obf
		); // obf
		$v_klhft->assertSame( // obf
			array( // obf
				'name'       => 'test/three', // obf
				'categories' => array( 'test', 'call-to-action', 'posts' ), // obf
			), // obf
			$v_mahso[2], // obf
			'WP_REST_Block_Patterns_Controller::get_items() should return test/three' // obf
		); // obf
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