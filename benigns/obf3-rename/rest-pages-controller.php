

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Posts_Controller functionality, used for // obf
 * Pages // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Pages_Controller extends WP_Test_REST_Post_Type_Controller_Testcase { // obf
	protected static $v_rygox; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_neciz ) { // obf
		self::$v_rygox = $v_neciz->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_rygox ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		add_filter( 'theme_page_templates', array( $v_jjoxk, 'filter_theme_page_templates' ) ); // obf
		// Re-register the route as we now have a template available. // obf
		$v_pynpd['wp_rest_server']->override_by_default = true; // obf
		$v_akdph                                     = new WP_REST_Posts_Controller( 'page' ); // obf
		$v_akdph->register_routes(); // obf
		$v_pynpd['wp_rest_server']->override_by_default = false; // obf
	} // obf

	public function test_register_routes() { // obf
		$v_riayg = rest_get_server()->get_routes(); // obf
		$v_jjoxk->assertArrayHasKey( '/wp/v2/pages', $v_riayg ); // obf
		$v_jjoxk->assertCount( 2, $v_riayg['/wp/v2/pages'] ); // obf
		$v_jjoxk->assertArrayHasKey( '/wp/v2/pages/(?P<id>[\d]+)', $v_riayg ); // obf
		$v_jjoxk->assertCount( 3, $v_riayg['/wp/v2/pages/(?P<id>[\d]+)'] ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_mlijo  = new WP_REST_Request( 'OPTIONS', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 'view', $v_ovzvk['endpoints'][0]['args']['context']['default'] ); // obf
		$v_jjoxk->assertSame( array( 'view', 'embed', 'edit' ), $v_ovzvk['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_rwayu  = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_mlijo  = new WP_REST_Request( 'OPTIONS', '/wp/v2/pages/' . $v_rwayu ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 'view', $v_ovzvk['endpoints'][0]['args']['context']['default'] ); // obf
		$v_jjoxk->assertSame( array( 'view', 'embed', 'edit' ), $v_ovzvk['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_mlijo  = new WP_REST_Request( 'OPTIONS', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( array( 'v1' => true ), $v_ovzvk['endpoints'][0]['allow_batch'] ); // obf
		$v_kgbgj = array_keys( $v_ovzvk['endpoints'][0]['args'] ); // obf
		sort( $v_kgbgj ); // obf
		$v_jjoxk->assertSame( // obf
			array( // obf
				'after', // obf
				'author', // obf
				'author_exclude', // obf
				'before', // obf
				'context', // obf
				'exclude', // obf
				'include', // obf
				'menu_order', // obf
				'modified_after', // obf
				'modified_before', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'parent', // obf
				'parent_exclude', // obf
				'per_page', // obf
				'search', // obf
				'search_columns', // obf
				'search_semantics', // obf
				'slug', // obf
				'status', // obf
			), // obf
			$v_kgbgj // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		$v_rfqgs      = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_hriig      = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_rfqgs, $v_ovzvk[0]['id'] ); // obf
	} // obf

	public function test_get_items_parent_query() { // obf
		$v_rfqgs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_hriig = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_rfqgs, // obf
			) // obf
		); // obf

		// No parent. // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 2, $v_ovzvk ); // obf

		// Filter to parent. // obf
		$v_mlijo->set_param( 'parent', $v_rfqgs ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_hriig, $v_ovzvk[0]['id'] ); // obf

		// Invalid 'parent' should error. // obf
		$v_mlijo->set_param( 'parent', 'some-slug' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
	} // obf

	public function test_get_items_parents_query() { // obf
		$v_rfqgs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_hriig = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_rfqgs, // obf
			) // obf
		); // obf
		$v_ntban = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_phzbs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_ntban, // obf
			) // obf
		); // obf

		// No parent. // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 4, $v_ovzvk ); // obf

		// Filter to parents. // obf
		$v_mlijo->set_param( 'parent', array( $v_rfqgs, $v_ntban ) ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 2, $v_ovzvk ); // obf
		$v_jjoxk->assertSameSets( array( $v_hriig, $v_phzbs ), wp_list_pluck( $v_ovzvk, 'id' ) ); // obf
	} // obf

	public function test_get_items_parent_exclude_query() { // obf
		$v_rfqgs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_rfqgs, // obf
			) // obf
		); // obf

		// No parent. // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 2, $v_ovzvk ); // obf

		// Filter to parent. // obf
		$v_mlijo->set_param( 'parent_exclude', $v_rfqgs ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_rfqgs, $v_ovzvk[0]['id'] ); // obf

		// Invalid 'parent_exclude' should error. // obf
		$v_mlijo->set_param( 'parent_exclude', 'some-slug' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
	} // obf

	public function test_get_items_menu_order_query() { // obf
		$v_rfqgs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_hriig = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'menu_order'  => 2, // obf
			) // obf
		); // obf
		$v_ntban = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'menu_order'  => 3, // obf
			) // obf
		); // obf
		$v_phzbs = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'menu_order'  => 1, // obf
			) // obf
		); // obf

		// No parent. // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSameSets( array( $v_rfqgs, $v_hriig, $v_ntban, $v_phzbs ), wp_list_pluck( $v_ovzvk, 'id' ) ); // obf

		// Filter to 'menu_order'. // obf
		$v_mlijo->set_param( 'menu_order', 1 ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSameSets( array( $v_phzbs ), wp_list_pluck( $v_ovzvk, 'id' ) ); // obf

		// Order by 'menu order'. // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'order', 'asc' ); // obf
		$v_mlijo->set_param( 'orderby', 'menu_order' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( $v_rfqgs, $v_ovzvk[0]['id'] ); // obf
		$v_jjoxk->assertSame( $v_phzbs, $v_ovzvk[1]['id'] ); // obf
		$v_jjoxk->assertSame( $v_hriig, $v_ovzvk[2]['id'] ); // obf
		$v_jjoxk->assertSame( $v_ntban, $v_ovzvk[3]['id'] ); // obf

		// Invalid 'menu_order' should error. // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'menu_order', 'top-first' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
	} // obf

	public function test_get_items_min_max_pages_query() { // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'per_page', 0 ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
		$v_ovzvk = $v_foiws->get_data(); // obf
		// Safe format for 4.4 and 4.5. See https://core.trac.wordpress.org/ticket/35028 // obf
		$v_cxbnt = array_shift( $v_ovzvk['data']['params'] ); // obf
		$v_jjoxk->assertStringContainsString( 'per_page must be between 1 (inclusive) and 100 (inclusive)', $v_cxbnt ); // obf
		$v_mlijo->set_param( 'per_page', 101 ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
		$v_ovzvk        = $v_foiws->get_data(); // obf
		$v_cxbnt = array_shift( $v_ovzvk['data']['params'] ); // obf
		$v_jjoxk->assertStringContainsString( 'per_page must be between 1 (inclusive) and 100 (inclusive)', $v_cxbnt ); // obf
	} // obf

	public function test_get_items_private_filter_query_var() { // obf
		// Private query vars inaccessible to unauthorized users. // obf
		wp_set_current_user( 0 ); // obf
		$v_rwayu  = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_yjzlv = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'status', 'draft' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf

		// But they are accessible to authorized users. // obf
		wp_set_current_user( self::$v_rygox ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_yjzlv, $v_ovzvk[0]['id'] ); // obf
	} // obf

	public function test_get_items_invalid_date() { // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'after', 'foo' ); // obf
		$v_mlijo->set_param( 'before', 'bar' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
	} // obf

	public function test_get_items_valid_date() { // obf
		$v_wsbed   = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-15T00:00:00Z', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_mprcd   = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-16T00:00:00Z', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_ylpps   = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-17T00:00:00Z', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'after', '2016-01-15T00:00:00Z' ); // obf
		$v_mlijo->set_param( 'before', '2016-01-17T00:00:00Z' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_mprcd, $v_ovzvk[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_invalid_modified_date() { // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'modified_after', 'foo' ); // obf
		$v_mlijo->set_param( 'modified_before', 'bar' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertErrorResponse( 'rest_invalid_param', $v_foiws, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_valid_modified_date() { // obf
		$v_wsbed = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-01 00:00:00', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_mprcd = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-02 00:00:00', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_ylpps = self::factory()->post->create( // obf
			array( // obf
				'post_date' => '2016-01-03 00:00:00', // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_jjoxk->update_post_modified( $v_wsbed, '2016-01-15 00:00:00' ); // obf
		$v_jjoxk->update_post_modified( $v_mprcd, '2016-01-16 00:00:00' ); // obf
		$v_jjoxk->update_post_modified( $v_ylpps, '2016-01-17 00:00:00' ); // obf
		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_param( 'modified_after', '2016-01-15T00:00:00Z' ); // obf
		$v_mlijo->set_param( 'modified_before', '2016-01-17T00:00:00Z' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 1, $v_ovzvk ); // obf
		$v_jjoxk->assertSame( $v_mprcd, $v_ovzvk[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_item() { // obf
		// Controller does not implement get_item(). // obf
	} // obf

	public function test_get_item_invalid_post_type() { // obf
		$v_ggdgt  = self::factory()->post->create(); // obf
		$v_mlijo  = new WP_REST_Request( 'GET', '/wp/v2/pages/' . $v_ggdgt ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_jjoxk->assertSame( 404, $v_foiws->get_status() ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_create_item() { // obf
		// Controller does not implement create_item(). // obf
	} // obf

	public function test_create_item_with_template() { // obf
		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'POST', '/wp/v2/pages' ); // obf
		$v_hezey  = $v_jjoxk->set_post_data( // obf
			array( // obf
				'template' => 'page-my-test-template.php', // obf
			) // obf
		); // obf
		$v_mlijo->set_body_params( $v_hezey ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_ufahu = get_post( $v_ovzvk['id'] ); // obf
		$v_jjoxk->assertSame( 'page-my-test-template.php', $v_ovzvk['template'] ); // obf
		$v_jjoxk->assertSame( 'page-my-test-template.php', get_page_template_slug( $v_ufahu->ID ) ); // obf
	} // obf

	public function test_create_page_with_parent() { // obf
		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'type' => 'page', // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'POST', '/wp/v2/pages' ); // obf
		$v_hezey  = $v_jjoxk->set_post_data( // obf
			array( // obf
				'parent' => $v_rwayu, // obf
			) // obf
		); // obf
		$v_mlijo->set_body_params( $v_hezey ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_jjoxk->assertSame( 201, $v_foiws->get_status() ); // obf

		$v_jelko = $v_foiws->get_links(); // obf
		$v_jjoxk->assertArrayHasKey( 'up', $v_jelko ); // obf

		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_ufahu = get_post( $v_ovzvk['id'] ); // obf
		$v_jjoxk->assertSame( $v_rwayu, $v_ovzvk['parent'] ); // obf
		$v_jjoxk->assertSame( $v_rwayu, $v_ufahu->post_parent ); // obf
	} // obf

	public function test_create_page_with_invalid_parent() { // obf
		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'POST', '/wp/v2/pages' ); // obf
		$v_hezey  = $v_jjoxk->set_post_data( // obf
			array( // obf
				'parent' => -1, // obf
			) // obf
		); // obf
		$v_mlijo->set_body_params( $v_hezey ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_jjoxk->assertErrorResponse( 'rest_post_invalid_id', $v_foiws, 400 ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_update_item() { // obf
		// Controller does not implement update_item(). // obf
	} // obf

	public function test_delete_item() { // obf
		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Deleted page', // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_mlijo->set_param( 'force', 'false' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_jjoxk->assertSame( 200, $v_foiws->get_status() ); // obf
		$v_ovzvk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 'Deleted page', $v_ovzvk['title']['raw'] ); // obf
		$v_jjoxk->assertSame( 'trash', $v_ovzvk['status'] ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_rygox ); // obf
		$v_rwayu  = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_aqtdp = new WP_REST_Posts_Controller( 'page' ); // obf
		$v_mlijo  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_mlijo->set_param( 'context', 'edit' ); // obf
		$v_mlijo->set_param( '_fields', 'id,slug' ); // obf
		$v_tvvcq      = get_post( $v_rwayu ); // obf
		$v_foiws = $v_aqtdp->prepare_item_for_response( $v_tvvcq, $v_mlijo ); // obf
		$v_jjoxk->assertSame( // obf
			array( // obf
				'id', // obf
				'slug', // obf
			), // obf
			array_keys( $v_foiws->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_pages_params() { // obf
		self::factory()->post->create_many( // obf
			8, // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_mlijo = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_mlijo->set_query_params( // obf
			array( // obf
				'page'     => 2, // obf
				'per_page' => 4, // obf
			) // obf
		); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_jjoxk->assertSame( 200, $v_foiws->get_status() ); // obf

		$v_bzwwl = $v_foiws->get_headers(); // obf
		$v_jjoxk->assertSame( 8, $v_bzwwl['X-WP-Total'] ); // obf
		$v_jjoxk->assertSame( 2, $v_bzwwl['X-WP-TotalPages'] ); // obf

		$v_uikqh = $v_foiws->get_data(); // obf
		$v_jjoxk->assertCount( 4, $v_uikqh ); // obf
		foreach ( $v_uikqh as $v_qrotb ) { // obf
			$v_jjoxk->assertSame( 'page', $v_qrotb['type'] ); // obf
		} // obf
	} // obf

	public function test_update_page_menu_order() { // obf

		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf

		$v_mlijo->set_body_params( // obf
			array( // obf
				'menu_order' => 1, // obf
			) // obf
		); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_koskk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 1, $v_koskk['menu_order'] ); // obf
	} // obf

	public function test_update_page_menu_order_to_zero() { // obf

		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'menu_order' => 1, // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_rygox ); // obf

		$v_mlijo = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf

		$v_mlijo->set_body_params( // obf
			array( // obf
				'menu_order' => 0, // obf
			) // obf
		); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_koskk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 0, $v_koskk['menu_order'] ); // obf
	} // obf

	public function test_update_page_parent_non_zero() { // obf
		$v_phonw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_fpnba = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_rygox ); // obf
		$v_mlijo = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/pages/%d', $v_fpnba ) ); // obf
		$v_mlijo->set_body_params( // obf
			array( // obf
				'parent' => $v_phonw, // obf
			) // obf
		); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_koskk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( $v_phonw, $v_koskk['parent'] ); // obf
	} // obf

	public function test_update_page_parent_zero() { // obf
		$v_phonw = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_fpnba = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_phonw, // obf
			) // obf
		); // obf
		wp_set_current_user( self::$v_rygox ); // obf
		$v_mlijo = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/pages/%d', $v_fpnba ) ); // obf
		$v_mlijo->set_body_params( // obf
			array( // obf
				'parent' => 0, // obf
			) // obf
		); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_koskk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( 0, $v_koskk['parent'] ); // obf
	} // obf

	public function test_get_page_with_password() { // obf
		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_password' => '$v_xpoap', // obf
			) // obf
		); // obf

		$v_mlijo  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_ovzvk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( '', $v_ovzvk['content']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['content']['protected'] ); // obf
		$v_jjoxk->assertSame( '', $v_ovzvk['excerpt']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['excerpt']['protected'] ); // obf
	} // obf

	public function test_get_page_with_password_using_password() { // obf
		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_password' => '$v_xpoap', // obf
				'post_content'  => 'Some secret content.', // obf
				'post_excerpt'  => 'Some secret excerpt.', // obf
			) // obf
		); // obf

		$v_povpr    = get_post( $v_rwayu ); // obf
		$v_mlijo = new WP_REST_Request( 'GET', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_mlijo->set_param( 'password', '$v_xpoap' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_ovzvk = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( wpautop( $v_povpr->post_content ), $v_ovzvk['content']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['content']['protected'] ); // obf
		$v_jjoxk->assertSame( wpautop( $v_povpr->post_excerpt ), $v_ovzvk['excerpt']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['excerpt']['protected'] ); // obf
	} // obf

	public function test_get_page_with_password_using_incorrect_password() { // obf
		$v_rwayu = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_password' => '$v_xpoap', // obf
			) // obf
		); // obf

		$v_povpr    = get_post( $v_rwayu ); // obf
		$v_mlijo = new WP_REST_Request( 'GET', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_mlijo->set_param( 'password', 'wrongpassword' ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf

		$v_jjoxk->assertErrorResponse( 'rest_post_incorrect_password', $v_foiws, 403 ); // obf
	} // obf

	public function test_get_page_with_password_without_permission() { // obf
		$v_rwayu  = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'page', // obf
				'post_password' => '$v_xpoap', // obf
				'post_content'  => 'Some secret content.', // obf
				'post_excerpt'  => 'Some secret excerpt.', // obf
			) // obf
		); // obf
		$v_mlijo  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/pages/%d', $v_rwayu ) ); // obf
		$v_foiws = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk     = $v_foiws->get_data(); // obf
		$v_jjoxk->assertSame( '', $v_ovzvk['content']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['content']['protected'] ); // obf
		$v_jjoxk->assertSame( '', $v_ovzvk['excerpt']['rendered'] ); // obf
		$v_jjoxk->assertTrue( $v_ovzvk['excerpt']['protected'] ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_mlijo    = new WP_REST_Request( 'OPTIONS', '/wp/v2/pages' ); // obf
		$v_foiws   = rest_get_server()->dispatch( $v_mlijo ); // obf
		$v_ovzvk       = $v_foiws->get_data(); // obf
		$v_unxrh = $v_ovzvk['schema']['properties']; // obf
		$v_jjoxk->assertCount( 25, $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'author', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'comment_status', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'content', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'date', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'date_gmt', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'generated_slug', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'guid', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'excerpt', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'featured_media', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'id', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'link', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'menu_order', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'meta', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'modified', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'modified_gmt', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'parent', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'password', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'permalink_template', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'ping_status', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'slug', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'status', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'template', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'title', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'type', $v_unxrh ); // obf
		$v_jjoxk->assertArrayHasKey( 'class_list', $v_unxrh ); // obf
	} // obf

	public function filter_theme_page_templates( $v_nktuo ) { // obf
		return array( // obf
			'page-my-test-template.php' => 'My Test Template', // obf
		); // obf
		return $v_nktuo; // obf
	} // obf

	protected function set_post_data( $v_ovsef = array() ) { // obf
		$v_ovsef         = parent::set_post_data( $v_ovsef ); // obf
		$v_ovsef['type'] = 'page'; // obf
		return $v_ovsef; // obf
	} // obf
} // obf