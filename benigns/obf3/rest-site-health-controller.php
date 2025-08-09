

<?php // obf
/** // obf
 * Unit tests covering the site health controller. // obf
 * // obf
 * Also generates the fixture data used by the wp-api.js QUnit tests. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * @since 5.6.0 // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Site_Health_Controller extends WP_Test_REST_TestCase { // obf

	/** // obf
	 * Subscriber user ID. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_safdm; // obf

	/** // obf
	 * Administrator user id. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private static $v_kddsx; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_pwgwg WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_pwgwg ) { // obf
		self::$v_safdm = $v_pwgwg->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_kddsx      = $v_pwgwg->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_kddsx ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clean up test fixtures. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_safdm ); // obf
		self::delete_user( self::$v_kddsx ); // obf
	} // obf

	public function test_logged_out() { // obf
		$v_omnzm = rest_do_request( '/wp-site-health/v1/tests/dotorg-communication' ); // obf
		$v_aukrd->assertErrorResponse( 'rest_forbidden', $v_omnzm, 401 ); // obf
	} // obf

	public function test_insufficient_caps() { // obf
		wp_set_current_user( self::$v_safdm ); // obf
		$v_omnzm = rest_do_request( '/wp-site-health/v1/tests/dotorg-communication' ); // obf
		$v_aukrd->assertErrorResponse( 'rest_forbidden', $v_omnzm, 403 ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_custom_capability() { // obf
		wp_set_current_user( self::$v_kddsx ); // obf

		add_filter( // obf
			'site_health_test_rest_capability_dotorg_communication', // obf
			static function () { // obf
				return 'a_custom_capability'; // obf
			} // obf
		); // obf

		$v_omnzm = rest_do_request( '/wp-site-health/v1/tests/dotorg-communication' ); // obf
		$v_aukrd->assertErrorResponse( 'rest_forbidden', $v_omnzm, 403 ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test() { // obf
		wp_set_current_user( self::$v_kddsx ); // obf
		$v_omnzm = rest_do_request( '/wp-site-health/v1/tests/dotorg-communication' ); // obf
		$v_aukrd->assertSame( 'dotorg_communication', $v_omnzm->get_data()['test'] ); // obf
	} // obf

	/** // obf
	 * Tests Page Cache Rest endpoint registration. // obf
	 * // obf
	 * @ticket 56041 // obf
	 */ // obf
	public function test_page_cache_endpoint() { // obf
		$v_stsms = rest_get_server(); // obf
		$v_wukhm = $v_stsms->get_routes(); // obf

		$v_osnhq = '/wp-site-health/v1/tests/page-cache'; // obf
		$v_aukrd->assertArrayHasKey( $v_osnhq, $v_wukhm ); // obf

		$v_xzgby = $v_wukhm[ $v_osnhq ]; // obf
		$v_aukrd->assertCount( 1, $v_xzgby ); // obf

		$v_xzgby = current( $v_xzgby ); // obf
		$v_aukrd->assertSame( // obf
			array( WP_REST_Server::READABLE => true ), // obf
			$v_xzgby['methods'] // obf
		); // obf

		$v_aukrd->assertSame( // obf
			'test_page_cache', // obf
			$v_xzgby['callback'][1] // obf
		); // obf

		$v_aukrd->assertIsCallable( $v_xzgby['permission_callback'] ); // obf

		if ( current_user_can( 'view_site_health_checks' ) ) { // obf
			$v_aukrd->assertTrue( call_user_func( $v_xzgby['permission_callback'] ) ); // obf
		} else { // obf
			$v_aukrd->assertFalse( call_user_func( $v_xzgby['permission_callback'] ) ); // obf
		} // obf

		wp_set_current_user( self::factory()->user->create( array( 'role' => 'author' ) ) ); // obf
		$v_aukrd->assertFalse( call_user_func( $v_xzgby['permission_callback'] ) ); // obf

		$v_wgvef = wp_set_current_user( self::factory()->user->create( array( 'role' => 'administrator' ) ) ); // obf
		if ( is_multisite() ) { // obf
			// Site health cap is only available for super admins in Multi sites. // obf
			grant_super_admin( $v_wgvef->ID ); // obf
		} // obf
		$v_aukrd->assertTrue( call_user_func( $v_xzgby['permission_callback'] ) ); // obf
	} // obf
} // obf