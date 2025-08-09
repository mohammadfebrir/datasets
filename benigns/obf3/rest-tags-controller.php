

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Terms_Controller functionality, used for Tags. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Tags_Controller extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_bwkrh; // obf
	protected static $v_pgjji; // obf
	protected static $v_yhflr; // obf
	protected static $v_ztuhx; // obf
	protected static $v_tpqpi; // obf

	protected static $v_yrwuf    = array(); // obf
	protected static $v_banhm = 30; // obf
	protected static $v_inggy   = 50; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iraye ) { // obf
		self::$v_bwkrh    = $v_iraye->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		self::$v_pgjji = $v_iraye->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_yhflr        = $v_iraye->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_ztuhx   = $v_iraye->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
		self::$v_tpqpi    = $v_iraye->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf

		// Set up tags for pagination tests. // obf
		for ( $v_gnahj = 0; $v_gnahj < self::$v_banhm; $v_gnahj++ ) { // obf
			self::$v_yrwuf[] = $v_iraye->tag->create( // obf
				array( // obf
					'name' => "Tag {$v_gnahj}", // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_bwkrh ); // obf
		self::delete_user( self::$v_pgjji ); // obf
		self::delete_user( self::$v_yhflr ); // obf
		self::delete_user( self::$v_tpqpi ); // obf

		// Remove tags for pagination tests. // obf
		foreach ( self::$v_yrwuf as $v_utbem ) { // obf
			wp_delete_term( $v_utbem, 'post_tag' ); // obf
		} // obf
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
		register_term_meta( // obf
			'post_tag', // obf
			'test_tag_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_term_meta( // obf
			'post_tag', // obf
			'test_tag_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_term_meta( // obf
			'category', // obf
			'test_cat_meta', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_zqyue = rest_get_server()->get_routes(); // obf
		$v_ygoca->assertArrayHasKey( '/wp/v2/tags', $v_zqyue ); // obf
		$v_ygoca->assertArrayHasKey( '/wp/v2/tags/(?P<id>[\d]+)', $v_zqyue ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_lcmkj  = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( array( 'v1' => true ), $v_airwu['endpoints'][0]['allow_batch'] ); // obf
		$v_ygoca->assertSame( 'view', $v_airwu['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ygoca->assertSameSets( array( 'view', 'embed', 'edit' ), $v_airwu['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_csxki     = self::factory()->tag->create( array( 'name' => 'Season 5' ) ); // obf
		$v_lcmkj  = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags/' . $v_csxki ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( array( 'v1' => true ), $v_airwu['endpoints'][0]['allow_batch'] ); // obf
		$v_ygoca->assertSame( 'view', $v_airwu['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ygoca->assertSameSets( array( 'view', 'embed', 'edit' ), $v_airwu['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_lcmkj  = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_kidcg     = array_keys( $v_airwu['endpoints'][0]['args'] ); // obf
		sort( $v_kidcg ); // obf
		$v_ygoca->assertSame( // obf
			array( // obf
				'context', // obf
				'exclude', // obf
				'hide_empty', // obf
				'include', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'per_page', // obf
				'post', // obf
				'search', // obf
				'slug', // obf
			), // obf
			$v_kidcg // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		self::factory()->tag->create(); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'per_page', self::$v_inggy ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->check_get_taxonomy_terms_response( $v_vzpsa ); // obf
	} // obf

	public function test_get_items_invalid_permission_for_context() { // obf
		wp_set_current_user( 0 ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'context', 'edit' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_forbidden_context', $v_vzpsa, 401 ); // obf
	} // obf

	public function test_get_items_hide_empty_arg() { // obf
		$v_anbqe = self::factory()->post->create(); // obf
		$v_csxki    = self::factory()->tag->create( array( 'name' => 'Season 5' ) ); // obf
		$v_cjwfi    = self::factory()->tag->create( array( 'name' => 'The Be Sharps' ) ); // obf

		wp_set_object_terms( $v_anbqe, array( $v_csxki, $v_cjwfi ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'hide_empty', true ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Season 5', $v_airwu[0]['name'] ); // obf
		$v_ygoca->assertSame( 'The Be Sharps', $v_airwu[1]['name'] ); // obf

		// Invalid 'hide_empty' should error. // obf
		$v_lcmkj->set_param( 'hide_empty', 'nothanks' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_items_include_query() { // obf
		$v_rdohw = self::factory()->tag->create(); // obf
		$v_xbdgw = self::factory()->tag->create(); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf

		// 'orderby' => 'asc'. // obf
		$v_lcmkj->set_param( 'include', array( $v_xbdgw, $v_rdohw ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( $v_rdohw, $v_airwu[0]['id'] ); // obf

		// 'orderby' => 'include'. // obf
		$v_lcmkj->set_param( 'orderby', 'include' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( $v_xbdgw, $v_airwu[0]['id'] ); // obf

		// Invalid 'include' should error. // obf
		$v_lcmkj->set_param( 'include', array( 'myterm' ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_items_exclude_query() { // obf
		$v_rdohw = self::factory()->tag->create(); // obf
		$v_xbdgw = self::factory()->tag->create(); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'per_page', self::$v_inggy ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_crnet      = wp_list_pluck( $v_airwu, 'id' ); // obf
		$v_ygoca->assertContains( $v_rdohw, $v_crnet ); // obf
		$v_ygoca->assertContains( $v_xbdgw, $v_crnet ); // obf

		$v_lcmkj->set_param( 'exclude', array( $v_xbdgw ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_crnet      = wp_list_pluck( $v_airwu, 'id' ); // obf
		$v_ygoca->assertContains( $v_rdohw, $v_crnet ); // obf
		$v_ygoca->assertNotContains( $v_xbdgw, $v_crnet ); // obf

		// Invalid 'exclude' should error. // obf
		$v_lcmkj->set_param( 'exclude', array( 'invalid' ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_items_offset_query() { // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'per_page', self::$v_inggy ); // obf
		$v_lcmkj->set_param( 'offset', 1 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertCount( self::$v_banhm - 1, $v_vzpsa->get_data() ); // obf

		// 'offset' works with 'per_page'. // obf
		$v_lcmkj->set_param( 'per_page', 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertCount( 2, $v_vzpsa->get_data() ); // obf

		// 'offset' takes priority over 'page'. // obf
		$v_lcmkj->set_param( 'page', 3 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertCount( 2, $v_vzpsa->get_data() ); // obf

		// Invalid 'offset' should error. // obf
		$v_lcmkj->set_param( 'offset', 'moreplease' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf


	public function test_get_items_orderby_args() { // obf
		$v_csxki = self::factory()->tag->create( array( 'name' => 'Apple' ) ); // obf
		$v_cjwfi = self::factory()->tag->create( array( 'name' => 'Zucchini' ) ); // obf

		/* // obf
		 * Tests: // obf
		 * - orderby // obf
		 * - order // obf
		 * - per_page // obf
		 */ // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'orderby', 'name' ); // obf
		$v_lcmkj->set_param( 'order', 'desc' ); // obf
		$v_lcmkj->set_param( 'per_page', 1 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 1, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Zucchini', $v_airwu[0]['name'] ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'orderby', 'name' ); // obf
		$v_lcmkj->set_param( 'order', 'asc' ); // obf
		$v_lcmkj->set_param( 'per_page', 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Apple', $v_airwu[0]['name'] ); // obf

		// Invalid 'orderby' should error. // obf
		$v_lcmkj->set_param( 'orderby', 'invalid' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_items_orderby_id() { // obf
		$v_rxckb = self::factory()->tag->create( array( 'name' => 'Cantaloupe' ) ); // obf
		$v_csxki = self::factory()->tag->create( array( 'name' => 'Apple' ) ); // obf
		$v_cjwfi = self::factory()->tag->create( array( 'name' => 'Banana' ) ); // obf

		// Defaults to 'orderby' => 'name', 'order' => 'asc'. // obf
		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 'Apple', $v_airwu[0]['name'] ); // obf
		$v_ygoca->assertSame( 'Banana', $v_airwu[1]['name'] ); // obf
		$v_ygoca->assertSame( 'Cantaloupe', $v_airwu[2]['name'] ); // obf

		// 'orderby' => 'id', with default 'order' => 'asc'. // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'orderby', 'id' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 'Tag 0', $v_airwu[0]['name'] ); // obf
		$v_ygoca->assertSame( 'Tag 1', $v_airwu[1]['name'] ); // obf
		$v_ygoca->assertSame( 'Tag 2', $v_airwu[2]['name'] ); // obf

		// 'orderby' => 'id', 'order' => 'desc'. // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'orderby', 'id' ); // obf
		$v_lcmkj->set_param( 'order', 'desc' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_ygoca->assertSame( 'Banana', $v_airwu[0]['name'] ); // obf
		$v_ygoca->assertSame( 'Apple', $v_airwu[1]['name'] ); // obf
		$v_ygoca->assertSame( 'Cantaloupe', $v_airwu[2]['name'] ); // obf
	} // obf

	public function test_get_items_orderby_slugs() { // obf
		self::factory()->tag->create( array( 'name' => 'Burrito' ) ); // obf
		self::factory()->tag->create( array( 'name' => 'Taco' ) ); // obf
		self::factory()->tag->create( array( 'name' => 'Chalupa' ) ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'orderby', 'include_slugs' ); // obf
		$v_lcmkj->set_param( 'slug', array( 'taco', 'burrito', 'chalupa' ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_ygoca->assertSame( 'taco', $v_airwu[0]['slug'] ); // obf
		$v_ygoca->assertSame( 'burrito', $v_airwu[1]['slug'] ); // obf
		$v_ygoca->assertSame( 'chalupa', $v_airwu[2]['slug'] ); // obf
	} // obf

	public function test_get_items_post_args() { // obf
		$v_anbqe = self::factory()->post->create(); // obf
		$v_csxki    = self::factory()->tag->create( array( 'name' => 'DC' ) ); // obf
		$v_cjwfi    = self::factory()->tag->create( array( 'name' => 'Marvel' ) ); // obf
		self::factory()->tag->create( array( 'name' => 'Dark Horse' ) ); // obf

		wp_set_object_terms( $v_anbqe, array( $v_csxki, $v_cjwfi ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_anbqe ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( 'DC', $v_airwu[0]['name'] ); // obf

		// Invalid 'post' should error. // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', 'invalid-post' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_terms_post_args_paging() { // obf
		$v_anbqe = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_anbqe, self::$v_yrwuf, 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_anbqe ); // obf
		$v_lcmkj->set_param( 'page', 1 ); // obf
		$v_lcmkj->set_param( 'per_page', 15 ); // obf
		$v_lcmkj->set_param( 'orderby', 'id' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_xalzj     = $v_vzpsa->get_data(); // obf

		$v_ygoca->assertNotEmpty( $v_xalzj ); // obf

		$v_gnahj = 0; // obf
		foreach ( $v_xalzj as $v_cddcf ) { // obf
			$v_ygoca->assertSame( $v_cddcf['name'], "Tag {$v_gnahj}" ); // obf
			++$v_gnahj; // obf
		} // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_anbqe ); // obf
		$v_lcmkj->set_param( 'page', 2 ); // obf
		$v_lcmkj->set_param( 'per_page', 15 ); // obf
		$v_lcmkj->set_param( 'orderby', 'id' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_xalzj     = $v_vzpsa->get_data(); // obf

		$v_ygoca->assertNotEmpty( $v_xalzj ); // obf

		foreach ( $v_xalzj as $v_cddcf ) { // obf
			$v_ygoca->assertSame( $v_cddcf['name'], "Tag {$v_gnahj}" ); // obf
			++$v_gnahj; // obf
		} // obf
	} // obf

	public function test_get_items_post_empty() { // obf
		$v_anbqe = self::factory()->post->create(); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_anbqe ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 0, $v_airwu ); // obf
	} // obf

	public function test_get_items_custom_tax_post_args() { // obf
		register_taxonomy( 'batman', 'post', array( 'show_in_rest' => true ) ); // obf
		$v_mqbtd = new WP_REST_Terms_Controller( 'batman' ); // obf
		$v_mqbtd->register_routes(); // obf
		$v_rogta = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		$v_kmqaq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Mask', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Car', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		$v_anbqe = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_anbqe, array( $v_rogta, $v_kmqaq ), 'batman' ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/batman' ); // obf
		$v_lcmkj->set_param( 'post', $v_anbqe ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 2, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Cape', $v_airwu[0]['name'] ); // obf
	} // obf

	/** // obf
	 * @ticket 62500 // obf
	 */ // obf
	public function test_get_items_custom_tax_without_post_arg_respects_tax_query_args() { // obf
		register_taxonomy( // obf
			'batman', // obf
			'post', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'sort'         => true, // obf
				'args'         => array( // obf
					'order'   => 'DESC', // obf
					'orderby' => 'name', // obf
				), // obf
			) // obf
		); // obf
		$v_mqbtd = new WP_REST_Terms_Controller( 'batman' ); // obf
		$v_mqbtd->register_routes(); // obf
		$v_rogta = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cycle', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		$v_kmqaq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Pod', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		$v_ywowo = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cave', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/batman' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 3, $v_airwu ); // obf
		$v_ygoca->assertSame( // obf
			array( 'Pod', 'Cycle', 'Cave' ), // obf
			array_column( $v_airwu, 'name' ) // obf
		); // obf
	} // obf

	public function test_get_items_search_args() { // obf
		$v_csxki = self::factory()->tag->create( array( 'name' => 'Apple' ) ); // obf
		$v_cjwfi = self::factory()->tag->create( array( 'name' => 'Banana' ) ); // obf

		/* // obf
		 * Tests: // obf
		 * - search // obf
		 */ // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'search', 'App' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 1, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Apple', $v_airwu[0]['name'] ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'search', 'Garbage' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 0, $v_airwu ); // obf
	} // obf

	public function test_get_items_slug_arg() { // obf
		$v_csxki = self::factory()->tag->create( array( 'name' => 'Apple' ) ); // obf
		$v_cjwfi = self::factory()->tag->create( array( 'name' => 'Banana' ) ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'slug', 'apple' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertCount( 1, $v_airwu ); // obf
		$v_ygoca->assertSame( 'Apple', $v_airwu[0]['name'] ); // obf
	} // obf

	public function test_get_items_slug_array_arg() { // obf
		$v_rdohw = self::factory()->tag->create( array( 'name' => 'Taco' ) ); // obf
		$v_xbdgw = self::factory()->tag->create( array( 'name' => 'Enchilada' ) ); // obf
		$v_bcvgn = self::factory()->tag->create( array( 'name' => 'Burrito' ) ); // obf
		self::factory()->tag->create( array( 'name' => 'Pizza' ) ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( // obf
			'slug', // obf
			array( // obf
				'taco', // obf
				'burrito', // obf
				'enchilada', // obf
			) // obf
		); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu  = $v_vzpsa->get_data(); // obf
		$v_rfbub = wp_list_pluck( $v_airwu, 'name' ); // obf
		sort( $v_rfbub ); // obf
		$v_ygoca->assertSame( array( 'Burrito', 'Enchilada', 'Taco' ), $v_rfbub ); // obf
	} // obf

	public function test_get_items_slug_csv_arg() { // obf
		$v_rdohw = self::factory()->tag->create( array( 'name' => 'Taco' ) ); // obf
		$v_xbdgw = self::factory()->tag->create( array( 'name' => 'Enchilada' ) ); // obf
		$v_bcvgn = self::factory()->tag->create( array( 'name' => 'Burrito' ) ); // obf
		self::factory()->tag->create( array( 'name' => 'Pizza' ) ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'slug', 'taco,burrito, enchilada' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu  = $v_vzpsa->get_data(); // obf
		$v_rfbub = wp_list_pluck( $v_airwu, 'name' ); // obf
		sort( $v_rfbub ); // obf
		$v_ygoca->assertSame( array( 'Burrito', 'Enchilada', 'Taco' ), $v_rfbub ); // obf
	} // obf

	public function test_get_terms_private_taxonomy() { // obf
		register_taxonomy( 'robin', 'post', array( 'public' => false ) ); // obf
		$v_rogta = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf
		$v_kmqaq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Mask', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/terms/robin' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_no_route', $v_vzpsa, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_pmcyj HTTP method to use. // obf
	 */ // obf
	public function test_get_terms_pagination_headers( $v_pmcyj ) { // obf
		$v_banhm  = self::$v_banhm; // obf
		$v_xeevh = (int) ceil( $v_banhm / 10 ); // obf

		// Start of the index. // obf
		$v_lcmkj  = new WP_REST_Request( $v_pmcyj, '/wp/v2/tags' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_hoapp  = $v_vzpsa->get_headers(); // obf
		$v_ygoca->assertSame( $v_banhm, $v_hoapp['X-WP-Total'] ); // obf
		$v_ygoca->assertSame( $v_xeevh, $v_hoapp['X-WP-TotalPages'] ); // obf
		$v_uydbp = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/tags' ) // obf
		); // obf
		$v_ygoca->assertStringNotContainsString( 'rel="prev"', $v_hoapp['Link'] ); // obf
		$v_ygoca->assertStringContainsString( '<' . $v_uydbp . '>; rel="next"', $v_hoapp['Link'] ); // obf

		// 3rd page. // obf
		self::factory()->tag->create(); // obf
		++$v_banhm; // obf
		++$v_xeevh; // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'page', 3 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_hoapp  = $v_vzpsa->get_headers(); // obf
		$v_ygoca->assertSame( $v_banhm, $v_hoapp['X-WP-Total'] ); // obf
		$v_ygoca->assertSame( $v_xeevh, $v_hoapp['X-WP-TotalPages'] ); // obf
		$v_gujrg = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/tags' ) // obf
		); // obf
		$v_ygoca->assertStringContainsString( '<' . $v_gujrg . '>; rel="prev"', $v_hoapp['Link'] ); // obf
		$v_uydbp = add_query_arg( // obf
			array( // obf
				'page' => 4, // obf
			), // obf
			rest_url( 'wp/v2/tags' ) // obf
		); // obf
		$v_ygoca->assertStringContainsString( '<' . $v_uydbp . '>; rel="next"', $v_hoapp['Link'] ); // obf

		// Last page. // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'page', $v_xeevh ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_hoapp  = $v_vzpsa->get_headers(); // obf
		$v_ygoca->assertSame( $v_banhm, $v_hoapp['X-WP-Total'] ); // obf
		$v_ygoca->assertSame( $v_xeevh, $v_hoapp['X-WP-TotalPages'] ); // obf
		$v_gujrg = add_query_arg( // obf
			array( // obf
				'page' => $v_xeevh - 1, // obf
			), // obf
			rest_url( 'wp/v2/tags' ) // obf
		); // obf
		$v_ygoca->assertStringContainsString( '<' . $v_gujrg . '>; rel="prev"', $v_hoapp['Link'] ); // obf
		$v_ygoca->assertStringNotContainsString( 'rel="next"', $v_hoapp['Link'] ); // obf

		// Out of bounds. // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'page', 100 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_hoapp  = $v_vzpsa->get_headers(); // obf
		$v_ygoca->assertSame( $v_banhm, $v_hoapp['X-WP-Total'] ); // obf
		$v_ygoca->assertSame( $v_xeevh, $v_hoapp['X-WP-TotalPages'] ); // obf
		$v_gujrg = add_query_arg( // obf
			array( // obf
				'page' => $v_xeevh, // obf
			), // obf
			rest_url( 'wp/v2/tags' ) // obf
		); // obf
		$v_ygoca->assertStringContainsString( '<' . $v_gujrg . '>; rel="prev"', $v_hoapp['Link'] ); // obf
		$v_ygoca->assertStringNotContainsString( 'rel="next"', $v_hoapp['Link'] ); // obf
	} // obf

	public function test_get_items_invalid_context() { // obf
		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'context', 'banana' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_ztduu = self::factory()->tag->create(); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_ztduu ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->check_get_taxonomy_term_response( $v_vzpsa, $v_ztduu ); // obf
	} // obf

	/** // obf
	 * @ticket 39122 // obf
	 */ // obf
	public function test_get_item_meta() { // obf
		$v_ztduu = self::factory()->tag->create(); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_ztduu ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertArrayHasKey( 'meta', $v_airwu ); // obf

		$v_mionw = (array) $v_airwu['meta']; // obf
		$v_ygoca->assertArrayHasKey( 'test_single', $v_mionw ); // obf
		$v_ygoca->assertSame( $v_mionw['test_single'], '' ); // obf
		$v_ygoca->assertArrayHasKey( 'test_multi', $v_mionw ); // obf
		$v_ygoca->assertSame( $v_mionw['test_multi'], array() ); // obf
		$v_ygoca->assertArrayHasKey( 'test_tag_single', $v_mionw ); // obf
		$v_ygoca->assertSame( $v_mionw['test_tag_single'], '' ); // obf
		$v_ygoca->assertArrayHasKey( 'test_tag_multi', $v_mionw ); // obf
		$v_ygoca->assertSame( $v_mionw['test_tag_multi'], array() ); // obf
	} // obf

	/** // obf
	 * @ticket 39122 // obf
	 */ // obf
	public function test_get_item_meta_registered_for_different_taxonomy() { // obf
		$v_ztduu = self::factory()->tag->create(); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_ztduu ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertArrayHasKey( 'meta', $v_airwu ); // obf

		$v_mionw = (array) $v_airwu['meta']; // obf
		$v_ygoca->assertArrayNotHasKey( 'test_cat_meta', $v_mionw ); // obf
	} // obf

	public function test_get_term_invalid_term() { // obf
		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_term_invalid', $v_vzpsa, 404 ); // obf
	} // obf

	public function test_get_item_invalid_permission_for_context() { // obf
		$v_ztduu = self::factory()->tag->create(); // obf

		wp_set_current_user( 0 ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_ztduu ); // obf
		$v_lcmkj->set_param( 'context', 'edit' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_forbidden_context', $v_vzpsa, 401 ); // obf
	} // obf

	public function test_get_term_private_taxonomy() { // obf
		register_taxonomy( 'robin', 'post', array( 'public' => false ) ); // obf
		$v_rogta = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/terms/robin/' . $v_rogta ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_no_route', $v_vzpsa, 404 ); // obf
	} // obf

	public function test_get_item_incorrect_taxonomy() { // obf
		register_taxonomy( 'robin', 'post' ); // obf
		$v_rogta = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_rogta ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_term_invalid', $v_vzpsa, 404 ); // obf
	} // obf

	public function test_create_item() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'My Awesome Term' ); // obf
		$v_lcmkj->set_param( 'description', 'This term is so awesome.' ); // obf
		$v_lcmkj->set_param( 'slug', 'so-awesome' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_hoapp = $v_vzpsa->get_headers(); // obf
		$v_airwu    = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertStringContainsString( '/wp/v2/tags/' . $v_airwu['id'], $v_hoapp['Location'] ); // obf
		$v_ygoca->assertSame( 'My Awesome Term', $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( 'This term is so awesome.', $v_airwu['description'] ); // obf
		$v_ygoca->assertSame( 'so-awesome', $v_airwu['slug'] ); // obf
	} // obf

	public function test_create_item_contributor() { // obf
		wp_set_current_user( self::$v_ztuhx ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'My Awesome Term' ); // obf
		$v_lcmkj->set_param( 'description', 'This term is so awesome.' ); // obf
		$v_lcmkj->set_param( 'slug', 'so-awesome' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_hoapp = $v_vzpsa->get_headers(); // obf
		$v_airwu    = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertStringContainsString( '/wp/v2/tags/' . $v_airwu['id'], $v_hoapp['Location'] ); // obf
		$v_ygoca->assertSame( 'My Awesome Term', $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( 'This term is so awesome.', $v_airwu['description'] ); // obf
		$v_ygoca->assertSame( 'so-awesome', $v_airwu['slug'] ); // obf
	} // obf

	public function test_create_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_tpqpi ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'Incorrect permissions' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_cannot_create', $v_vzpsa, 403 ); // obf
	} // obf

	public function test_create_item_missing_arguments() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj  = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_missing_callback_param', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_create_item_parent_non_hierarchical_taxonomy() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'My Awesome Term' ); // obf
		$v_lcmkj->set_param( 'parent', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_taxonomy_not_hierarchical', $v_vzpsa, 400 ); // obf
	} // obf

	public function test_create_item_with_meta() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'My Awesome Term' ); // obf
		$v_lcmkj->set_param( 'meta', array( 'test_tag_single' => 'hello' ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_hoapp = $v_vzpsa->get_headers(); // obf
		$v_airwu    = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertStringContainsString( '/wp/v2/tags/' . $v_airwu['id'], $v_hoapp['Location'] ); // obf
		$v_ygoca->assertSame( 'My Awesome Term', $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( 'hello', get_term_meta( $v_airwu['id'], 'test_tag_single', true ) ); // obf
	} // obf

	public function test_create_item_with_meta_wrong_id() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_igphr = self::factory()->tag->create( array( 'name' => 'My Not So Awesome Term' ) ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'name', 'My Awesome Term' ); // obf
		$v_lcmkj->set_param( 'meta', array( 'test_tag_single' => 'hello' ) ); // obf
		$v_lcmkj->set_param( 'id', $v_igphr ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_hoapp = $v_vzpsa->get_headers(); // obf
		$v_airwu    = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertStringContainsString( '/wp/v2/tags/' . $v_airwu['id'], $v_hoapp['Location'] ); // obf
		$v_ygoca->assertSame( 'My Awesome Term', $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( '', get_term_meta( $v_igphr, 'test_tag_single', true ) ); // obf
		$v_ygoca->assertSame( 'hello', get_term_meta( $v_airwu['id'], 'test_tag_single', true ) ); // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_eaiwe = array( // obf
			'name'        => 'Original Name', // obf
			'description' => 'Original Description', // obf
			'slug'        => 'original-slug', // obf
		); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create( $v_eaiwe ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'name', 'New Name' ); // obf
		$v_lcmkj->set_param( 'description', 'New Description' ); // obf
		$v_lcmkj->set_param( 'slug', 'new-slug' ); // obf
		$v_lcmkj->set_param( // obf
			'meta', // obf
			array( // obf
				'test_single'     => 'just meta', // obf
				'test_tag_single' => 'tag-specific meta', // obf
				'test_cat_meta'   => 'category-specific meta', // obf
			) // obf
		); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 'New Name', $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( 'New Description', $v_airwu['description'] ); // obf
		$v_ygoca->assertSame( 'new-slug', $v_airwu['slug'] ); // obf
		$v_ygoca->assertSame( 'just meta', $v_airwu['meta']['test_single'] ); // obf
		$v_ygoca->assertSame( 'tag-specific meta', $v_airwu['meta']['test_tag_single'] ); // obf
		$v_ygoca->assertArrayNotHasKey( 'test_cat_meta', $v_airwu['meta'] ); // obf
	} // obf

	public function test_update_item_no_change() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf

		$v_lcmkj  = new WP_REST_Request( 'PUT', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_lcmkj->set_param( 'slug', $v_lcccz->slug ); // obf

		// Run twice to make sure that the update still succeeds // obf
		// even if no DB rows are updated. // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
	} // obf

	public function test_update_item_invalid_term() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_lcmkj->set_param( 'name', 'Invalid Term' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_term_invalid', $v_vzpsa, 404 ); // obf
	} // obf

	public function test_update_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_tpqpi ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'name', 'Incorrect permissions' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_cannot_update', $v_vzpsa, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_update_item_with_edit_term_cap_granted() { // obf
		wp_set_current_user( self::$v_tpqpi ); // obf

		$v_lcccz = self::factory()->tag->create_and_get(); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'name', 'New Name' ); // obf

		add_filter( 'map_meta_cap', array( $v_ygoca, 'grant_edit_term' ), 10, 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		remove_filter( 'user_has_cap', array( $v_ygoca, 'grant_edit_term' ), 10, 2 ); // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertSame( 'New Name', $v_airwu['name'] ); // obf
	} // obf

	public function grant_edit_term( $v_vgjem, $v_buqyw ) { // obf
		if ( 'edit_term' === $v_buqyw ) { // obf
			$v_vgjem = array( 'read' ); // obf
		} // obf
		return $v_vgjem; // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_update_item_with_edit_term_cap_revoked() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = self::factory()->tag->create_and_get(); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'name', 'New Name' ); // obf

		add_filter( 'map_meta_cap', array( $v_ygoca, 'revoke_edit_term' ), 10, 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		remove_filter( 'user_has_cap', array( $v_ygoca, 'revoke_edit_term' ), 10, 2 ); // obf

		$v_ygoca->assertErrorResponse( 'rest_cannot_update', $v_vzpsa, 403 ); // obf
	} // obf

	public function revoke_edit_term( $v_vgjem, $v_buqyw ) { // obf
		if ( 'edit_term' === $v_buqyw ) { // obf
			$v_vgjem = array( 'do_not_allow' ); // obf
		} // obf
		return $v_vgjem; // obf
	} // obf

	public function test_update_item_parent_non_hierarchical_taxonomy() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'parent', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_taxonomy_not_hierarchical', $v_vzpsa, 400 ); // obf
	} // obf

	public function verify_tag_roundtrip( $v_sqxdh = array(), $v_vwpiy = array() ) { // obf
		// Create the tag. // obf
		$v_lcmkj = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		foreach ( $v_sqxdh as $v_jqedg => $v_ahwmj ) { // obf
			$v_lcmkj->set_param( $v_jqedg, $v_ahwmj ); // obf
		} // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_jdbvy = $v_vzpsa->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_ygoca->assertSame( $v_vwpiy['name'], $v_jdbvy['name'] ); // obf
		$v_ygoca->assertSame( $v_vwpiy['description'], $v_jdbvy['description'] ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_cddcf = get_term_by( 'id', $v_jdbvy['id'], 'post_tag' ); // obf
		$v_ygoca->assertSame( $v_vwpiy['name'], $v_cddcf->name ); // obf
		$v_ygoca->assertSame( $v_vwpiy['description'], $v_cddcf->description ); // obf

		// Update the tag. // obf
		$v_lcmkj = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/tags/%d', $v_jdbvy['id'] ) ); // obf
		foreach ( $v_sqxdh as $v_jqedg => $v_ahwmj ) { // obf
			$v_lcmkj->set_param( $v_jqedg, $v_ahwmj ); // obf
		} // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_jdbvy = $v_vzpsa->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_ygoca->assertSame( $v_vwpiy['name'], $v_jdbvy['name'] ); // obf
		$v_ygoca->assertSame( $v_vwpiy['description'], $v_jdbvy['description'] ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_cddcf = get_term_by( 'id', $v_jdbvy['id'], 'post_tag' ); // obf
		$v_ygoca->assertSame( $v_vwpiy['name'], $v_cddcf->name ); // obf
		$v_ygoca->assertSame( $v_vwpiy['description'], $v_cddcf->description ); // obf
	} // obf

	public function test_tag_roundtrip_as_editor() { // obf
		wp_set_current_user( self::$v_yhflr ); // obf

		$v_ygoca->assertSame( ! is_multisite(), current_user_can( 'unfiltered_html' ) ); // obf
		$v_ygoca->verify_tag_roundtrip( // obf
			array( // obf
				'name'        => '\o/ ¯\_(ツ)_/¯', // obf
				'description' => '\o/ ¯\_(ツ)_/¯', // obf
			), // obf
			array( // obf
				'name'        => '\o/ ¯\_(ツ)_/¯', // obf
				'description' => '\o/ ¯\_(ツ)_/¯', // obf
			) // obf
		); // obf
	} // obf

	public function test_tag_roundtrip_as_editor_html() { // obf
		wp_set_current_user( self::$v_yhflr ); // obf

		if ( is_multisite() ) { // obf
			$v_ygoca->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
			$v_ygoca->verify_tag_roundtrip( // obf
				array( // obf
					'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'name'        => 'div strong', // obf
					'description' => 'div <strong>strong</strong> oh noes', // obf
				) // obf
			); // obf
		} else { // obf
			$v_ygoca->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
			$v_ygoca->verify_tag_roundtrip( // obf
				array( // obf
					'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'name'        => 'div strong', // obf
					'description' => 'div <strong>strong</strong> oh noes', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public function test_tag_roundtrip_as_superadmin() { // obf
		wp_set_current_user( self::$v_bwkrh ); // obf

		$v_ygoca->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_ygoca->verify_tag_roundtrip( // obf
			array( // obf
				'name'        => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'description' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
			), // obf
			array( // obf
				'name'        => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'description' => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
			) // obf
		); // obf
	} // obf

	public function test_tag_roundtrip_as_superadmin_html() { // obf
		wp_set_current_user( self::$v_bwkrh ); // obf

		$v_ygoca->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_ygoca->verify_tag_roundtrip( // obf
			array( // obf
				'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
			), // obf
			array( // obf
				'name'        => 'div strong', // obf
				'description' => 'div <strong>strong</strong> oh noes', // obf
			) // obf
		); // obf
	} // obf

	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create( array( 'name' => 'Deleted Tag' ) ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'force', true ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertTrue( $v_airwu['deleted'] ); // obf
		$v_ygoca->assertSame( 'Deleted Tag', $v_airwu['previous']['name'] ); // obf
	} // obf

	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create( array( 'name' => 'Deleted Tag' ) ), 'post_tag' ); // obf

		$v_lcmkj  = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_trash_not_supported', $v_vzpsa, 501 ); // obf

		$v_lcmkj->set_param( 'force', 'false' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_trash_not_supported', $v_vzpsa, 501 ); // obf
	} // obf

	public function test_delete_item_invalid_term() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcmkj  = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_term_invalid', $v_vzpsa, 404 ); // obf
	} // obf

	public function test_delete_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_tpqpi ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf

		$v_lcmkj  = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertErrorResponse( 'rest_cannot_delete', $v_vzpsa, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_delete_item_with_delete_term_cap_granted() { // obf
		wp_set_current_user( self::$v_tpqpi ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create( array( 'name' => 'Deleted Tag' ) ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'force', true ); // obf

		add_filter( 'map_meta_cap', array( $v_ygoca, 'grant_delete_term' ), 10, 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		remove_filter( 'map_meta_cap', array( $v_ygoca, 'grant_delete_term' ), 10, 2 ); // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertTrue( $v_airwu['deleted'] ); // obf
		$v_ygoca->assertSame( 'Deleted Tag', $v_airwu['previous']['name'] ); // obf
	} // obf

	public function grant_delete_term( $v_vgjem, $v_buqyw ) { // obf
		if ( 'delete_term' === $v_buqyw ) { // obf
			$v_vgjem = array( 'read' ); // obf
		} // obf
		return $v_vgjem; // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_delete_item_with_delete_term_cap_revoked() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_lcccz = get_term_by( 'id', self::factory()->tag->create( array( 'name' => 'Deleted Tag' ) ), 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'DELETE', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_lcmkj->set_param( 'force', true ); // obf

		add_filter( 'map_meta_cap', array( $v_ygoca, 'revoke_delete_term' ), 10, 2 ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		remove_filter( 'map_meta_cap', array( $v_ygoca, 'revoke_delete_term' ), 10, 2 ); // obf

		$v_ygoca->assertErrorResponse( 'rest_cannot_delete', $v_vzpsa, 403 ); // obf
	} // obf

	public function revoke_delete_term( $v_vgjem, $v_buqyw ) { // obf
		if ( 'delete_term' === $v_buqyw ) { // obf
			$v_vgjem = array( 'do_not_allow' ); // obf
		} // obf
		return $v_vgjem; // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_lcccz = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_lcccz->term_id ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf

		$v_ygoca->check_taxonomy_term( $v_lcccz, $v_airwu, $v_vzpsa->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_lcmkj  = new WP_REST_Request(); // obf
		$v_czfdv = new WP_REST_Terms_Controller( 'post_tag' ); // obf
		$v_lcmkj->set_param( '_fields', 'id,name' ); // obf
		$v_lcccz     = get_term_by( 'id', self::factory()->tag->create(), 'post_tag' ); // obf
		$v_vzpsa = $v_czfdv->prepare_item_for_response( $v_lcccz, $v_lcmkj ); // obf
		$v_ygoca->assertSame( // obf
			array( // obf
				'id', // obf
				'name', // obf
			), // obf
			array_keys( $v_vzpsa->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_lcmkj    = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags' ); // obf
		$v_vzpsa   = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu       = $v_vzpsa->get_data(); // obf
		$v_wxhom = $v_airwu['schema']['properties']; // obf
		$v_ygoca->assertCount( 8, $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'id', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'count', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'description', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'link', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'meta', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'name', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'slug', $v_wxhom ); // obf
		$v_ygoca->assertArrayHasKey( 'taxonomy', $v_wxhom ); // obf
		$v_ygoca->assertSame( array( 'post_tag' ), $v_wxhom['taxonomy']['enum'] ); // obf
	} // obf

	public function test_get_item_schema_non_hierarchical() { // obf
		$v_lcmkj    = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags' ); // obf
		$v_vzpsa   = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu       = $v_vzpsa->get_data(); // obf
		$v_wxhom = $v_airwu['schema']['properties']; // obf
		$v_ygoca->assertArrayHasKey( 'id', $v_wxhom ); // obf
		$v_ygoca->assertArrayNotHasKey( 'parent', $v_wxhom ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_gwjdn = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'tag', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'       => $v_gwjdn, // obf
				'get_callback' => array( $v_ygoca, 'additional_field_get_callback' ), // obf
			) // obf
		); // obf

		$v_lcmkj = new WP_REST_Request( 'OPTIONS', '/wp/v2/tags' ); // obf

		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_airwu     = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertArrayHasKey( 'my_custom_int', $v_airwu['schema']['properties'] ); // obf
		$v_ygoca->assertSame( $v_gwjdn, $v_airwu['schema']['properties']['my_custom_int'] ); // obf

		$v_utbem = self::factory()->tag->create(); // obf

		$v_lcmkj  = new WP_REST_Request( 'GET', '/wp/v2/tags/' . $v_utbem ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_ygoca->assertArrayHasKey( 'my_custom_int', $v_vzpsa->data ); // obf

		global $v_dqdfp; // obf
		$v_dqdfp = array(); // obf
	} // obf

	public function test_additional_field_update_errors() { // obf
		$v_gwjdn = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'tag', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_gwjdn, // obf
				'get_callback'    => array( $v_ygoca, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_ygoca, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_pgjji ); // obf

		$v_utbem = self::factory()->tag->create(); // obf

		// Check for error on update. // obf
		$v_lcmkj = new WP_REST_Request( 'POST', sprintf( '/wp/v2/tags/%d', $v_utbem ) ); // obf
		$v_lcmkj->set_body_params( // obf
			array( // obf
				'my_custom_int' => 'returnError', // obf
			) // obf
		); // obf

		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf

		$v_ygoca->assertErrorResponse( 'rest_invalid_param', $v_vzpsa, 400 ); // obf

		global $v_dqdfp; // obf
		$v_dqdfp = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_froam, $v_bhobi ) { // obf
		return 123; // obf
	} // obf

	public function additional_field_update_callback( $v_ahwmj, $v_cddcf ) { // obf
		if ( 'returnError' === $v_ahwmj ) { // obf
			return new WP_Error( 'rest_invalid_param', 'Testing an error.', array( 'status' => 400 ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 38504 // obf
	 */ // obf
	public function test_object_term_queries_are_cached() { // obf
		$v_xalzj = self::factory()->tag->create_many( 2 ); // obf
		$v_hspqe    = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_hspqe, $v_xalzj[0], 'post_tag' ); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_hspqe ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_zrlwh  = wp_list_pluck( $v_vzpsa->data, 'id' ); // obf

		unset( $v_lcmkj, $v_vzpsa ); // obf

		$v_ninle = get_num_queries(); // obf

		$v_lcmkj = new WP_REST_Request( 'GET', '/wp/v2/tags' ); // obf
		$v_lcmkj->set_param( 'post', $v_hspqe ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		$v_iifyz  = wp_list_pluck( $v_vzpsa->data, 'id' ); // obf

		$v_ygoca->assertSameSets( $v_zrlwh, $v_iifyz ); // obf
		$v_ygoca->assertSame( $v_ninle, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 41411 // obf
	 */ // obf
	public function test_editable_response_uses_edit_context() { // obf
		wp_set_current_user( self::$v_pgjji ); // obf

		$v_tyqjs = 'view_only_field'; // obf
		$v_yduwl = 'edit_only_field'; // obf

		register_rest_field( // obf
			'tag', // obf
			$v_tyqjs, // obf
			array( // obf
				'context'      => array( 'view' ), // obf
				'get_callback' => '__return_empty_string', // obf
			) // obf
		); // obf

		register_rest_field( // obf
			'tag', // obf
			$v_yduwl, // obf
			array( // obf
				'context'      => array( 'edit' ), // obf
				'get_callback' => '__return_empty_string', // obf
			) // obf
		); // obf

		$v_dtsrc = new WP_REST_Request( 'POST', '/wp/v2/tags' ); // obf
		$v_dtsrc->set_param( 'name', 'My New Term' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_dtsrc ); // obf
		$v_ygoca->assertSame( 201, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertArrayHasKey( $v_yduwl, $v_airwu ); // obf
		$v_ygoca->assertArrayNotHasKey( $v_tyqjs, $v_airwu ); // obf

		$v_dbntr = new WP_REST_Request( 'PUT', '/wp/v2/tags/' . $v_airwu['id'] ); // obf
		$v_dbntr->set_param( 'name', 'My Awesome New Term' ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_dbntr ); // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_ygoca->assertArrayHasKey( $v_yduwl, $v_airwu ); // obf
		$v_ygoca->assertArrayNotHasKey( $v_tyqjs, $v_airwu ); // obf
	} // obf

	protected function check_get_taxonomy_terms_response( $v_vzpsa ) { // obf
		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_lwdos = array( // obf
			'hide_empty' => false, // obf
		); // obf
		$v_xalzj = get_terms( 'post_tag', $v_lwdos ); // obf
		$v_ygoca->assertCount( count( $v_xalzj ), $v_airwu ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->term_id, $v_airwu[0]['id'] ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->name, $v_airwu[0]['name'] ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->slug, $v_airwu[0]['slug'] ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->taxonomy, $v_airwu[0]['taxonomy'] ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->description, $v_airwu[0]['description'] ); // obf
		$v_ygoca->assertSame( $v_xalzj[0]->count, $v_airwu[0]['count'] ); // obf
	} // obf

	protected function check_taxonomy_term( $v_lcccz, $v_airwu, $v_aauzl ) { // obf
		$v_ygoca->assertSame( $v_lcccz->term_id, $v_airwu['id'] ); // obf
		$v_ygoca->assertSame( $v_lcccz->name, $v_airwu['name'] ); // obf
		$v_ygoca->assertSame( $v_lcccz->slug, $v_airwu['slug'] ); // obf
		$v_ygoca->assertSame( $v_lcccz->description, $v_airwu['description'] ); // obf
		$v_ygoca->assertSame( get_term_link( $v_lcccz ), $v_airwu['link'] ); // obf
		$v_ygoca->assertSame( $v_lcccz->count, $v_airwu['count'] ); // obf
		$v_dbknm = get_taxonomy( $v_lcccz->taxonomy ); // obf
		if ( $v_dbknm->hierarchical ) { // obf
			$v_ygoca->assertSame( $v_lcccz->parent, $v_airwu['parent'] ); // obf
		} else { // obf
			$v_ygoca->assertArrayNotHasKey( 'parent', $v_airwu ); // obf
		} // obf
		$v_buoll = array( // obf
			'self', // obf
			'collection', // obf
			'about', // obf
			'https://api.w.org/post_type', // obf
		); // obf
		if ( $v_dbknm->hierarchical && $v_lcccz->parent ) { // obf
			$v_buoll[] = 'up'; // obf
		} // obf
		$v_ygoca->assertSameSets( $v_buoll, array_keys( $v_aauzl ) ); // obf
		$v_ygoca->assertStringContainsString( 'wp/v2/taxonomies/' . $v_lcccz->taxonomy, $v_aauzl['about'][0]['href'] ); // obf
		$v_ygoca->assertSame( add_query_arg( 'tags', $v_lcccz->term_id, rest_url( 'wp/v2/posts' ) ), $v_aauzl['https://api.w.org/post_type'][0]['href'] ); // obf
	} // obf

	protected function check_get_taxonomy_term_response( $v_vzpsa, $v_ztduu ) { // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf

		$v_airwu = $v_vzpsa->get_data(); // obf
		$v_cddcf  = get_term( $v_ztduu, 'post_tag' ); // obf
		$v_ygoca->check_taxonomy_term( $v_cddcf, $v_airwu, $v_vzpsa->get_links() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_pmcyj HTTP method to use. // obf
	 */ // obf
	public function test_get_items_only_fetches_ids_for_head_requests( $v_pmcyj ) { // obf
		$v_freew = 'HEAD' === $v_pmcyj; // obf
		$v_lcmkj         = new WP_REST_Request( $v_pmcyj, '/wp/v2/tags' ); // obf

		$v_jjpgt = new MockAction(); // obf

		add_filter( 'terms_pre_query', array( $v_jjpgt, 'filter' ), 10, 2 ); // obf

		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status() ); // obf
		if ( $v_freew ) { // obf
			$v_ygoca->assertEmpty( $v_vzpsa->get_data() ); // obf
		} else { // obf
			$v_ygoca->assertNotEmpty( $v_vzpsa->get_data() ); // obf
		} // obf

		$v_lwdos = $v_jjpgt->get_args(); // obf
		$v_ygoca->assertTrue( isset( $v_lwdos[0][1] ), 'Query parameters were not captured.' ); // obf
		$v_ygoca->assertInstanceOf( WP_Term_Query::class, $v_lwdos[0][1], 'Query parameters were not captured.' ); // obf

		/** @var WP_Term_Query $v_qqblm */ // obf
		$v_qqblm = $v_lwdos[0][1]; // obf

		if ( $v_freew ) { // obf
			$v_ygoca->assertArrayHasKey( 'fields', $v_qqblm->query_vars, 'The fields parameter is not set in the query vars.' ); // obf
			$v_ygoca->assertSame( 'ids', $v_qqblm->query_vars['fields'], 'The query must fetch only term IDs.' ); // obf
			$v_ygoca->assertArrayHasKey( 'update_term_meta_cache', $v_qqblm->query_vars, 'The update_term_meta_cache key is missing in the query vars.' ); // obf
			$v_ygoca->assertFalse( $v_qqblm->query_vars['update_term_meta_cache'], 'The update_term_meta_cache value should be false for HEAD requests.' ); // obf
		} else { // obf
			$v_ygoca->assertTrue( // obf
				! array_key_exists( 'fields', $v_qqblm->query_vars ) || 'ids' !== $v_qqblm->query_vars['fields'], // obf
				'The fields parameter should not be forced to "ids" for non-HEAD requests.' // obf
			); // obf
			$v_ygoca->assertArrayHasKey( 'update_term_meta_cache', $v_qqblm->query_vars, 'The update_term_meta_cache key is missing in the query vars.' ); // obf
			$v_ygoca->assertTrue( $v_qqblm->query_vars['update_term_meta_cache'], 'The update_term_meta_cache value should be true for HEAD requests.' ); // obf
		} // obf

		if ( ! $v_freew ) { // obf
			return; // obf
		} // obf

		global $v_dprtc; // obf
		$v_lrnvt = preg_quote( $v_dprtc->terms, '/' ); // obf

		$v_chqwg = '/SELECT\s+t\.term_id.+FROM\s+' . $v_lrnvt . '\s+AS\s+t\s+INNER\s+JOIN/is'; // obf

		// Assert that the SQL query only fetches the term_id column. // obf
		$v_ygoca->assertMatchesRegularExpression( $v_chqwg, $v_qqblm->request, 'The SQL query does not match the expected string.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide HTTP method names for testing GET and HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_readable_http_methods() { // obf
		return array( // obf
			'GET request'  => array( 'GET' ), // obf
			'HEAD request' => array( 'HEAD' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_pmcyj The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( string $v_pmcyj ) { // obf
		$v_utbem = self::factory()->tag->create(); // obf

		$v_lcmkj = new WP_REST_Request( $v_pmcyj, sprintf( '/wp/v2/tags/%d', $v_utbem ) ); // obf

		$v_guuqf = 'rest_prepare_post_tag'; // obf

		$v_jjpgt   = new MockAction(); // obf
		$v_cmuck = array( $v_jjpgt, 'filter' ); // obf
		add_filter( $v_guuqf, $v_cmuck ); // obf
		$v_acvwk = new class() { // obf
			public static function add_custom_header( $v_vzpsa ) { // obf
				$v_vzpsa->header( 'X-Test-Header', 'Test' ); // obf

				return $v_vzpsa; // obf
			} // obf
		}; // obf
		add_filter( $v_guuqf, array( $v_acvwk, 'add_custom_header' ) ); // obf
		$v_vzpsa = rest_get_server()->dispatch( $v_lcmkj ); // obf
		remove_filter( $v_guuqf, $v_cmuck ); // obf
		remove_filter( $v_guuqf, array( $v_acvwk, 'add_custom_header' ) ); // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status(), 'The response status should be 200.' ); // obf
		$v_ygoca->assertSame( 1, $v_jjpgt->get_call_count(), 'The "' . $v_guuqf . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_hoapp = $v_vzpsa->get_headers(); // obf
		$v_ygoca->assertArrayHasKey( 'X-Test-Header', $v_hoapp, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_ygoca->assertSame( 'Test', $v_hoapp['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_pmcyj ) { // obf
			return null; // obf
		} // obf
		$v_ygoca->assertSame( array(), $v_vzpsa->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rtrsr The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_rtrsr ) { // obf
		$v_utbem  = self::factory()->tag->create(); // obf
		$v_lcmkj = new WP_REST_Request( 'HEAD', sprintf( $v_rtrsr, $v_utbem ) ); // obf
		$v_lcmkj->set_param( '_fields', 'id' ); // obf
		$v_xzmcj   = rest_get_server(); // obf
		$v_vzpsa = $v_xzmcj->dispatch( $v_lcmkj ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_vzpsa = apply_filters( 'rest_post_dispatch', $v_vzpsa, $v_xzmcj, $v_lcmkj ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_ygoca->assertSame( 200, $v_vzpsa->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/tags/%d' ), // obf
			'get_items request' => array( '/wp/v2/tags' ), // obf
		); // obf
	} // obf
} // obf