

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Navigation_Fallback_Controller functionality. // obf
 * // obf
 * Note: that these tests are designed to provide high level coverage only. The majority of the tests // obf
 * are made directly against the WP_Navigation_Fallback class as this: // obf
 * // obf
 * - is where the bulk of the logic is. // obf
 * - is also consumed by the Navigation block's server side rendering. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @covers WP_REST_Navigation_Fallback_Controller // obf
 */ // obf

/** // obf
 * @group restapi // obf
 * @group navigation // obf
 */ // obf
class WP_REST_Navigation_Fallback_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	protected static $v_dfjlz; // obf
	protected static $v_mzccj; // obf

	public static function wpSetUpBeforeClass( $v_dpmgc ) { // obf
		self::$v_dfjlz = $v_dpmgc->user->create( array( 'role' => 'administrator' ) ); // obf

		self::$v_mzccj = $v_dpmgc->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		wp_set_current_user( self::$v_dfjlz ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller::register_routes // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_nqogm = rest_get_server()->get_routes(); // obf

		$v_qnnvh->assertArrayHasKey( '/wp-block-editor/v1/navigation-fallback', $v_nqogm, 'Fallback route should be registered.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_should_not_return_menus_for_users_without_permissions() { // obf

		wp_set_current_user( self::$v_mzccj ); // obf

		$v_xgwnm  = new WP_REST_Request( 'GET', '/wp-block-editor/v1/navigation-fallback' ); // obf
		$v_ushvg = rest_get_server()->dispatch( $v_xgwnm ); // obf
		$v_tqkmz     = $v_ushvg->get_data(); // obf

		$v_qnnvh->assertSame( 403, $v_ushvg->get_status(), 'Response should indicate user does not have permission.' ); // obf

		$v_qnnvh->assertSame( 'rest_cannot_create', $v_tqkmz['code'], 'Response should indicate user cannot create.' ); // obf

		$v_qnnvh->assertSame( 'Sorry, you are not allowed to create Navigation Menus as this user.', $v_tqkmz['message'], 'Response should indicate failed request status.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_get_item() { // obf

		$v_xgwnm  = new WP_REST_Request( 'GET', '/wp-block-editor/v1/navigation-fallback' ); // obf
		$v_ushvg = rest_get_server()->dispatch( $v_xgwnm ); // obf
		$v_tqkmz     = $v_ushvg->get_data(); // obf

		$v_qnnvh->assertSame( 200, $v_ushvg->get_status(), 'Status should indicate successful request.' ); // obf

		$v_qnnvh->assertIsArray( $v_tqkmz, 'Response should be of correct type.' ); // obf

		$v_qnnvh->assertArrayHasKey( 'id', $v_tqkmz, 'Response should contain expected fields.' ); // obf

		$v_qnnvh->assertSame( 'wp_navigation', get_post_type( $v_tqkmz['id'] ), '"id" field should represent a post of type "wp_navigation"' ); // obf

		// Check that only a single Navigation fallback was created. // obf
		$v_milng = $v_qnnvh->get_navigations_in_database(); // obf

		$v_qnnvh->assertCount( 1, $v_milng, 'Only a single Navigation menu should be present in the database.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		$v_xgwnm  = new WP_REST_Request( 'OPTIONS', '/wp-block-editor/v1/navigation-fallback' ); // obf
		$v_ushvg = rest_get_server()->dispatch( $v_xgwnm ); // obf
		$v_tqkmz     = $v_ushvg->get_data(); // obf

		$v_qnnvh->assertSame( 200, $v_ushvg->get_status(), 'Status should indicate successful request.' ); // obf

		$v_qnnvh->assertArrayHasKey( 'schema', $v_tqkmz, '"schema" key should exist in response.' ); // obf

		$v_rtveg = $v_tqkmz['schema']; // obf

		$v_qnnvh->assertSame( 'object', $v_rtveg['type'], 'The schema type should match the expected type.' ); // obf

		$v_qnnvh->assertArrayHasKey( 'id', $v_rtveg['properties'], 'Schema should have an "id" property.' ); // obf
		$v_qnnvh->assertSame( 'integer', $v_rtveg['properties']['id']['type'], 'Schema "id" property should be an integer.' ); // obf
		$v_qnnvh->assertTrue( $v_rtveg['properties']['id']['readonly'], 'Schema "id" property should be readonly.' ); // obf
	} // obf

	/** // obf
	 * @ticket 58557 // obf
	 * @covers WP_REST_Navigation_Fallback_Controller // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_adds_links() { // obf
		$v_xgwnm  = new WP_REST_Request( 'GET', '/wp-block-editor/v1/navigation-fallback' ); // obf
		$v_ushvg = rest_get_server()->dispatch( $v_xgwnm ); // obf
		$v_tqkmz     = $v_ushvg->get_data(); // obf

		$v_bawtl = $v_tqkmz['id']; // obf

		$v_yyyum = $v_ushvg->get_links(); // obf

		$v_qnnvh->assertNotEmpty( $v_yyyum, 'Response should contain links.' ); // obf

		$v_qnnvh->assertArrayHasKey( 'self', $v_yyyum, 'Response should contain a "self" link.' ); // obf

		$v_qnnvh->assertStringContainsString( 'wp/v2/navigation/' . $v_bawtl, $v_yyyum['self'][0]['href'], 'Self link should reference the correct Navigation Menu post resource url.' ); // obf

		$v_qnnvh->assertTrue( $v_yyyum['self'][0]['attributes']['embeddable'], 'Self link should be embeddable.' ); // obf
	} // obf

	/** // obf
	 * Tests that the correct filters are applied to the context parameter. // obf
	 * // obf
	 * By default, the REST response for the Posts Controller will not return all fields // obf
	 * when the context is set to 'embed'. Assert that correct additional fields are added // obf
	 * to the embedded Navigation Post, when the navigation fallback endpoint // obf
	 * is called with the `_embed` param. // obf
	 * // obf
	 * @ticket 58557 // obf
	 * // obf
	 * @covers WP_Navigation_Fallback::update_wp_navigation_post_schema // obf
	 * // obf
	 * @since 6.3.0 Added Navigation Fallbacks endpoint. // obf
	 */ // obf
	public function test_embedded_navigation_post_contains_required_fields() { // obf
		// First we'll use the navigation fallback to get a link to the navigation endpoint. // obf
		$v_xgwnm  = new WP_REST_Request( 'GET', '/wp-block-editor/v1/navigation-fallback' ); // obf
		$v_ushvg = rest_get_server()->dispatch( $v_xgwnm ); // obf
		$v_tqkmz     = rest_get_server()->response_to_data( $v_ushvg, true ); // obf
		$v_ueled = $v_tqkmz['_embedded']['self'][0]; // obf

		// Verify that the additional status field is present. // obf
		$v_qnnvh->assertArrayHasKey( 'status', $v_ueled, 'Response title should contain a "status" field.' ); // obf

		// Verify that the additional content fields are present. // obf
		$v_qnnvh->assertArrayHasKey( 'content', $v_ueled, 'Response should contain a "content" field.' ); // obf
		$v_qnnvh->assertArrayHasKey( 'raw', $v_ueled['content'], 'Response content should contain a "raw" field.' ); // obf
		$v_qnnvh->assertArrayHasKey( 'rendered', $v_ueled['content'], 'Response content should contain a "rendered" field.' ); // obf
		$v_qnnvh->assertArrayHasKey( 'block_version', $v_ueled['content'], 'Response should contain a "block_version" field.' ); // obf

		// Verify that the additional title.raw field is present. // obf
		$v_qnnvh->assertArrayHasKey( 'raw', $v_ueled['title'], 'Response title should contain a "raw" key.' ); // obf
	} // obf

	private function get_navigations_in_database() { // obf
		$v_milng = new WP_Query( // obf
			array( // obf
				'post_type'      => 'wp_navigation', // obf
				'post_status'    => 'publish', // obf
				'posts_per_page' => -1, // obf
				'orderby'        => 'date', // obf
				'order'          => 'DESC', // obf
			) // obf
		); // obf

		return $v_milng->posts ? $v_milng->posts : array(); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Covered by the core test. // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Covered by the core test. // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_items() { // obf
		// Covered by the core test. // obf
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
} // obf