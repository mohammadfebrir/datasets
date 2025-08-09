

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Posts_Statuses_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Post_Statuses_Controller extends WP_Test_REST_Controller_Testcase { // obf

	public function test_register_routes() { // obf
		$v_ztwcq = rest_get_server()->get_routes(); // obf
		$v_lrnvc->assertArrayHasKey( '/wp/v2/statuses', $v_ztwcq ); // obf
		$v_lrnvc->assertArrayHasKey( '/wp/v2/statuses/(?P<status>[\w-]+)', $v_ztwcq ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_jlmdy  = new WP_REST_Request( 'OPTIONS', '/wp/v2/statuses' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_drciv     = $v_lyvfa->get_data(); // obf
		$v_lrnvc->assertSame( 'view', $v_drciv['endpoints'][0]['args']['context']['default'] ); // obf
		$v_lrnvc->assertSameSets( array( 'embed', 'view', 'edit' ), $v_drciv['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_jlmdy  = new WP_REST_Request( 'OPTIONS', '/wp/v2/statuses/publish' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_drciv     = $v_lyvfa->get_data(); // obf
		$v_lrnvc->assertSame( 'view', $v_drciv['endpoints'][0]['args']['context']['default'] ); // obf
		$v_lrnvc->assertSameSets( array( 'embed', 'view', 'edit' ), $v_drciv['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_get_items() { // obf
		$v_jlmdy  = new WP_REST_Request( 'GET', '/wp/v2/statuses' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf

		$v_drciv     = $v_lyvfa->get_data(); // obf
		$v_qemge = get_post_stati( array( 'public' => true ), 'objects' ); // obf
		$v_lrnvc->assertCount( 1, $v_drciv ); // obf
		$v_lrnvc->assertSame( 'publish', $v_drciv['publish']['slug'] ); // obf
	} // obf

	public function test_get_items_logged_in() { // obf
		$v_omddp = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		wp_set_current_user( $v_omddp ); // obf

		$v_jlmdy  = new WP_REST_Request( 'GET', '/wp/v2/statuses' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf

		$v_drciv = $v_lyvfa->get_data(); // obf
		$v_lrnvc->assertCount( 6, $v_drciv ); // obf
		$v_lrnvc->assertSameSets( // obf
			array( // obf
				'publish', // obf
				'private', // obf
				'pending', // obf
				'draft', // obf
				'trash', // obf
				'future', // obf
			), // obf
			array_keys( $v_drciv ) // obf
		); // obf
	} // obf

	public function test_get_items_unauthorized_context() { // obf
		$v_jlmdy = new WP_REST_Request( 'GET', '/wp/v2/statuses' ); // obf
		$v_jlmdy->set_param( 'context', 'edit' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertErrorResponse( 'rest_cannot_view', $v_lyvfa, 401 ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_omddp = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		wp_set_current_user( $v_omddp ); // obf
		$v_jlmdy = new WP_REST_Request( 'GET', '/wp/v2/statuses/publish' ); // obf
		$v_jlmdy->set_param( 'context', 'edit' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->check_post_status_object_response( $v_lyvfa ); // obf
	} // obf

	public function test_get_item_invalid_status() { // obf
		$v_jlmdy  = new WP_REST_Request( 'GET', '/wp/v2/statuses/invalid' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertErrorResponse( 'rest_status_invalid', $v_lyvfa, 404 ); // obf
	} // obf

	public function test_get_item_invalid_access() { // obf
		wp_set_current_user( 0 ); // obf
		$v_jlmdy  = new WP_REST_Request( 'GET', '/wp/v2/statuses/draft' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertErrorResponse( 'rest_cannot_read_status', $v_lyvfa, 401 ); // obf
	} // obf

	public function test_get_item_invalid_internal() { // obf
		$v_omddp = self::factory()->user->create(); // obf
		wp_set_current_user( $v_omddp ); // obf

		$v_jlmdy  = new WP_REST_Request( 'GET', '/wp/v2/statuses/inherit' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertErrorResponse( 'rest_cannot_read_status', $v_lyvfa, 403 ); // obf
	} // obf

	public function test_create_item() { // obf
		/** Post statuses can't be created */ // obf
		$v_jlmdy  = new WP_REST_Request( 'POST', '/wp/v2/statuses' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertSame( 404, $v_lyvfa->get_status() ); // obf
	} // obf

	public function test_update_item() { // obf
		/** Post statuses can't be updated */ // obf
		$v_jlmdy  = new WP_REST_Request( 'POST', '/wp/v2/statuses/draft' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertSame( 404, $v_lyvfa->get_status() ); // obf
	} // obf

	public function test_delete_item() { // obf
		/** Post statuses can't be deleted */ // obf
		$v_jlmdy  = new WP_REST_Request( 'DELETE', '/wp/v2/statuses/draft' ); // obf
		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertSame( 404, $v_lyvfa->get_status() ); // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_epare      = get_post_status_object( 'publish' ); // obf
		$v_qxlhn = new WP_REST_Post_Statuses_Controller(); // obf
		$v_jlmdy  = new WP_REST_Request(); // obf
		$v_jlmdy->set_param( 'context', 'edit' ); // obf
		$v_drciv = $v_qxlhn->prepare_item_for_response( $v_epare, $v_jlmdy ); // obf
		$v_lrnvc->check_post_status_obj( $v_epare, $v_drciv->get_data(), $v_drciv->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_epare      = get_post_status_object( 'publish' ); // obf
		$v_jlmdy  = new WP_REST_Request(); // obf
		$v_qxlhn = new WP_REST_Post_Statuses_Controller(); // obf
		$v_jlmdy->set_param( 'context', 'edit' ); // obf
		$v_jlmdy->set_param( '_fields', 'id,name' ); // obf
		$v_lyvfa = $v_qxlhn->prepare_item_for_response( $v_epare, $v_jlmdy ); // obf
		$v_lrnvc->assertSame( // obf
			array( // obf
				// 'id' doesn't exist in this context. // obf
				'name', // obf
			), // obf
			array_keys( $v_lyvfa->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_jlmdy    = new WP_REST_Request( 'OPTIONS', '/wp/v2/statuses' ); // obf
		$v_lyvfa   = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_drciv       = $v_lyvfa->get_data(); // obf
		$v_qsvgf = $v_drciv['schema']['properties']; // obf
		$v_lrnvc->assertCount( 8, $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'name', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'private', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'protected', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'public', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'queryable', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'show_in_list', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'slug', $v_qsvgf ); // obf
		$v_lrnvc->assertArrayHasKey( 'date_floating', $v_qsvgf ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_wmjrp = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'status', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_wmjrp, // obf
				'get_callback'    => array( $v_lrnvc, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_lrnvc, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_jlmdy = new WP_REST_Request( 'OPTIONS', '/wp/v2/statuses' ); // obf

		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_drciv     = $v_lyvfa->get_data(); // obf

		$v_lrnvc->assertArrayHasKey( 'my_custom_int', $v_drciv['schema']['properties'] ); // obf
		$v_lrnvc->assertSame( $v_wmjrp, $v_drciv['schema']['properties']['my_custom_int'] ); // obf

		$v_jlmdy = new WP_REST_Request( 'GET', '/wp/v2/statuses/publish' ); // obf

		$v_lyvfa = rest_get_server()->dispatch( $v_jlmdy ); // obf
		$v_lrnvc->assertArrayHasKey( 'my_custom_int', $v_lyvfa->data ); // obf

		global $v_zokzq; // obf
		$v_zokzq = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_kuhzg ) { // obf
		return 123; // obf
	} // obf

	protected function check_post_status_obj( $v_frtqm, $v_drciv, $v_rmgqn ) { // obf
		$v_lrnvc->assertSame( $v_frtqm->label, $v_drciv['name'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->private, $v_drciv['private'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->protected, $v_drciv['protected'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->public, $v_drciv['public'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->publicly_queryable, $v_drciv['queryable'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->show_in_admin_all_list, $v_drciv['show_in_list'] ); // obf
		$v_lrnvc->assertSame( $v_frtqm->name, $v_drciv['slug'] ); // obf
		$v_lrnvc->assertSameSets( // obf
			array( // obf
				'archives', // obf
			), // obf
			array_keys( $v_rmgqn ) // obf
		); // obf
		$v_lrnvc->assertSame( $v_frtqm->date_floating, $v_drciv['date_floating'] ); // obf
	} // obf

	protected function check_post_status_object_response( $v_lyvfa ) { // obf
		$v_lrnvc->assertSame( 200, $v_lyvfa->get_status() ); // obf
		$v_drciv = $v_lyvfa->get_data(); // obf
		$v_epare  = get_post_status_object( 'publish' ); // obf
		$v_lrnvc->check_post_status_obj( $v_epare, $v_drciv, $v_lyvfa->get_links() ); // obf
	} // obf
} // obf