

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Terms_Controller functionality, used for // obf
 * Categories. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Categories_Controller extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_vbzdb; // obf
	protected static $v_etdor; // obf
	protected static $v_jcltt; // obf

	protected static $v_huxau     = array(); // obf
	protected static $v_ssyua = 30; // obf
	protected static $v_ysdhd         = 50; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jhgrx ) { // obf
		self::$v_vbzdb = $v_jhgrx->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_etdor   = $v_jhgrx->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_jcltt    = $v_jhgrx->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf

		// Set up categories for pagination tests. // obf
		for ( $v_aldlq = 0; $v_aldlq < self::$v_ssyua - 1; $v_aldlq++ ) { // obf
			self::$v_huxau[] = $v_jhgrx->category->create( // obf
				array( // obf
					'name' => "Category {$v_aldlq}", // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_vbzdb ); // obf
		self::delete_user( self::$v_jcltt ); // obf

		// Remove categories for pagination tests. // obf
		foreach ( self::$v_huxau as $v_wiayn ) { // obf
			wp_delete_term( $v_wiayn, 'category' ); // obf
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
			'category', // obf
			'test_cat_single', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_term_meta( // obf
			'category', // obf
			'test_cat_multi', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => false, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
		register_term_meta( // obf
			'post_tag', // obf
			'test_tag_meta', // obf
			array( // obf
				'show_in_rest' => true, // obf
				'single'       => true, // obf
				'type'         => 'string', // obf
			) // obf
		); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_jinbu = rest_get_server()->get_routes(); // obf
		$v_pnieg->assertArrayHasKey( '/wp/v2/categories', $v_jinbu ); // obf
		$v_pnieg->assertArrayHasKey( '/wp/v2/categories/(?P<id>[\d]+)', $v_jinbu ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_xxcko  = new WP_REST_Request( 'OPTIONS', '/wp/v2/categories' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( array( 'v1' => true ), $v_qrojb['endpoints'][0]['allow_batch'] ); // obf
		$v_pnieg->assertSame( 'view', $v_qrojb['endpoints'][0]['args']['context']['default'] ); // obf
		$v_pnieg->assertSameSets( array( 'view', 'embed', 'edit' ), $v_qrojb['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_zsaku = self::factory()->category->create( array( 'name' => 'Season 5' ) ); // obf
		$v_xxcko   = new WP_REST_Request( 'OPTIONS', '/wp/v2/categories/' . $v_zsaku ); // obf
		$v_dxyti  = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb      = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( array( 'v1' => true ), $v_qrojb['endpoints'][0]['allow_batch'] ); // obf
		$v_pnieg->assertSame( 'view', $v_qrojb['endpoints'][0]['args']['context']['default'] ); // obf
		$v_pnieg->assertSameSets( array( 'view', 'embed', 'edit' ), $v_qrojb['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_xxcko  = new WP_REST_Request( 'OPTIONS', '/wp/v2/categories' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_nvdqg     = array_keys( $v_qrojb['endpoints'][0]['args'] ); // obf
		sort( $v_nvdqg ); // obf
		$v_pnieg->assertSame( // obf
			array( // obf
				'context', // obf
				'exclude', // obf
				'hide_empty', // obf
				'include', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'parent', // obf
				'per_page', // obf
				'post', // obf
				'search', // obf
				'slug', // obf
			), // obf
			$v_nvdqg // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'per_page', self::$v_ysdhd ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->check_get_taxonomy_terms_response( $v_dxyti ); // obf
	} // obf

	public function test_get_items_invalid_permission_for_context() { // obf
		wp_set_current_user( 0 ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'context', 'edit' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_forbidden_context', $v_dxyti, 401 ); // obf
	} // obf

	public function test_get_items_hide_empty_arg() { // obf
		$v_koowf   = self::factory()->post->create(); // obf
		$v_zsaku = self::factory()->category->create( array( 'name' => 'Season 5' ) ); // obf
		$v_vkskp = self::factory()->category->create( array( 'name' => 'The Be Sharps' ) ); // obf

		$v_ssyua = self::$v_ssyua + 2; // obf

		wp_set_object_terms( $v_koowf, array( $v_zsaku, $v_vkskp ), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'per_page', self::$v_ysdhd ); // obf
		$v_xxcko->set_param( 'hide_empty', true ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 2, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Season 5', $v_qrojb[0]['name'] ); // obf
		$v_pnieg->assertSame( 'The Be Sharps', $v_qrojb[1]['name'] ); // obf

		// Confirm the empty category "Uncategorized" category appears. // obf
		$v_xxcko->set_param( 'hide_empty', 'false' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( $v_ssyua, $v_qrojb ); // obf
	} // obf

	public function test_get_items_parent_zero_arg() { // obf
		$v_zpmkd = self::factory()->category->create( array( 'name' => 'Homer' ) ); // obf
		$v_hswok = self::factory()->category->create( array( 'name' => 'Marge' ) ); // obf
		self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Bart', // obf
				'parent' => $v_zpmkd, // obf
			) // obf
		); // obf
		self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Lisa', // obf
				'parent' => $v_hswok, // obf
			) // obf
		); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'per_page', self::$v_ysdhd ); // obf
		$v_xxcko->set_param( 'parent', 0 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf

		$v_bjuii       = array( // obf
			'hide_empty' => false, // obf
			'parent'     => 0, // obf
		); // obf
		$v_vegpp = get_terms( 'category', $v_bjuii ); // obf
		$v_pnieg->assertCount( count( $v_vegpp ), $v_qrojb ); // obf
	} // obf

	public function test_get_items_parent_zero_arg_string() { // obf
		$v_zpmkd = self::factory()->category->create( array( 'name' => 'Homer' ) ); // obf
		$v_hswok = self::factory()->category->create( array( 'name' => 'Marge' ) ); // obf
		self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Bart', // obf
				'parent' => $v_zpmkd, // obf
			) // obf
		); // obf
		self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Lisa', // obf
				'parent' => $v_hswok, // obf
			) // obf
		); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'per_page', self::$v_ysdhd ); // obf
		$v_xxcko->set_param( 'parent', '0' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf

		$v_bjuii       = array( // obf
			'hide_empty' => false, // obf
			'parent'     => 0, // obf
		); // obf
		$v_vegpp = get_terms( 'category', $v_bjuii ); // obf
		$v_pnieg->assertCount( count( $v_vegpp ), $v_qrojb ); // obf
	} // obf

	public function test_get_items_by_parent_non_found() { // obf
		$v_zpmkd = self::factory()->category->create( array( 'name' => 'Homer' ) ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'parent', $v_zpmkd ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf

		$v_pnieg->assertSame( array(), $v_qrojb ); // obf
	} // obf

	public function test_get_items_invalid_page() { // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', 0 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_invalid_param', $v_dxyti, 400 ); // obf
		$v_qrojb        = $v_dxyti->get_data(); // obf
		$v_bzbfq = array_shift( $v_qrojb['data']['params'] ); // obf
		$v_pnieg->assertStringContainsString( 'page must be greater than or equal to 1', $v_bzbfq ); // obf
	} // obf

	public function test_get_items_include_query() { // obf
		$v_uijyn = self::factory()->category->create(); // obf
		$v_ylhct = self::factory()->category->create(); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf

		// 'orderby' => 'asc'. // obf
		$v_xxcko->set_param( 'include', array( $v_ylhct, $v_uijyn ) ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 2, $v_qrojb ); // obf
		$v_pnieg->assertSame( $v_uijyn, $v_qrojb[0]['id'] ); // obf

		// 'orderby' => 'include'. // obf
		$v_xxcko->set_param( 'orderby', 'include' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 2, $v_qrojb ); // obf
		$v_pnieg->assertSame( $v_ylhct, $v_qrojb[0]['id'] ); // obf
	} // obf

	public function test_get_items_exclude_query() { // obf
		$v_uijyn = self::factory()->category->create(); // obf
		$v_ylhct = self::factory()->category->create(); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'per_page', self::$v_ysdhd ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_qprqi      = wp_list_pluck( $v_qrojb, 'id' ); // obf
		$v_pnieg->assertContains( $v_uijyn, $v_qprqi ); // obf
		$v_pnieg->assertContains( $v_ylhct, $v_qprqi ); // obf

		$v_xxcko->set_param( 'exclude', array( $v_ylhct ) ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_qprqi      = wp_list_pluck( $v_qrojb, 'id' ); // obf
		$v_pnieg->assertContains( $v_uijyn, $v_qprqi ); // obf
		$v_pnieg->assertNotContains( $v_ylhct, $v_qprqi ); // obf
	} // obf

	public function test_get_items_orderby_args() { // obf
		self::factory()->category->create( array( 'name' => 'Apple' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Banana' ) ); // obf

		/* // obf
		 * Tests: // obf
		 * - orderby // obf
		 * - order // obf
		 * - per_page // obf
		 */ // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'orderby', 'name' ); // obf
		$v_xxcko->set_param( 'order', 'desc' ); // obf
		$v_xxcko->set_param( 'per_page', 1 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 1, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Uncategorized', $v_qrojb[0]['name'] ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'orderby', 'name' ); // obf
		$v_xxcko->set_param( 'order', 'asc' ); // obf
		$v_xxcko->set_param( 'per_page', 2 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 2, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Apple', $v_qrojb[0]['name'] ); // obf
	} // obf

	public function test_get_items_orderby_id() { // obf
		self::factory()->category->create( array( 'name' => 'Cantaloupe' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Apple' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Banana' ) ); // obf

		// Defaults to 'orderby' => 'name', 'order' => 'asc'. // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 'Apple', $v_qrojb[0]['name'] ); // obf
		$v_pnieg->assertSame( 'Banana', $v_qrojb[1]['name'] ); // obf
		$v_pnieg->assertSame( 'Cantaloupe', $v_qrojb[2]['name'] ); // obf

		// 'orderby' => 'id', with default 'order' => 'asc'. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'orderby', 'id' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 'Category 0', $v_qrojb[1]['name'] ); // obf
		$v_pnieg->assertSame( 'Category 1', $v_qrojb[2]['name'] ); // obf
		$v_pnieg->assertSame( 'Category 2', $v_qrojb[3]['name'] ); // obf

		// 'orderby' => 'id', 'order' => 'desc'. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'orderby', 'id' ); // obf
		$v_xxcko->set_param( 'order', 'desc' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_pnieg->assertSame( 'Banana', $v_qrojb[0]['name'] ); // obf
		$v_pnieg->assertSame( 'Apple', $v_qrojb[1]['name'] ); // obf
		$v_pnieg->assertSame( 'Cantaloupe', $v_qrojb[2]['name'] ); // obf
	} // obf

	public function test_get_items_orderby_slugs() { // obf
		self::factory()->category->create( array( 'name' => 'Burrito' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Taco' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Chalupa' ) ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'orderby', 'include_slugs' ); // obf
		$v_xxcko->set_param( 'slug', array( 'taco', 'burrito', 'chalupa' ) ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_pnieg->assertSame( 'taco', $v_qrojb[0]['slug'] ); // obf
		$v_pnieg->assertSame( 'burrito', $v_qrojb[1]['slug'] ); // obf
		$v_pnieg->assertSame( 'chalupa', $v_qrojb[2]['slug'] ); // obf
	} // obf

	protected function post_with_categories() { // obf
		$v_koowf   = self::factory()->post->create(); // obf
		$v_zsaku = self::factory()->category->create( // obf
			array( // obf
				'name'        => 'DC', // obf
				'description' => 'Purveyor of fine detective comics', // obf
			) // obf
		); // obf
		$v_vkskp = self::factory()->category->create( // obf
			array( // obf
				'name'        => 'Marvel', // obf
				'description' => 'Home of the Marvel Universe', // obf
			) // obf
		); // obf
		$v_kgjpg = self::factory()->category->create( // obf
			array( // obf
				'name'        => 'Image', // obf
				'description' => 'American independent comic publisher', // obf
			) // obf
		); // obf
		wp_set_object_terms( $v_koowf, array( $v_zsaku, $v_vkskp, $v_kgjpg ), 'category' ); // obf

		return $v_koowf; // obf
	} // obf

	public function test_get_items_post_args() { // obf
		$v_koowf = $v_pnieg->post_with_categories(); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'post', $v_koowf ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 3, $v_qrojb ); // obf

		// Check ordered by name by default. // obf
		$v_jaqvf = wp_list_pluck( $v_qrojb, 'name' ); // obf
		$v_pnieg->assertSame( array( 'DC', 'Image', 'Marvel' ), $v_jaqvf ); // obf
	} // obf

	public function test_get_items_post_ordered_by_description() { // obf
		$v_koowf = $v_pnieg->post_with_categories(); // obf

		// Regular request. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'post', $v_koowf ); // obf
		$v_xxcko->set_param( 'orderby', 'description' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 3, $v_qrojb ); // obf
		$v_jaqvf = wp_list_pluck( $v_qrojb, 'name' ); // obf
		$v_pnieg->assertSame( array( 'Image', 'Marvel', 'DC' ), $v_jaqvf, 'Terms should be ordered by description' ); // obf

		// Flip the order. // obf
		$v_xxcko->set_param( 'order', 'desc' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 3, $v_qrojb ); // obf
		$v_jaqvf = wp_list_pluck( $v_qrojb, 'name' ); // obf
		$v_pnieg->assertSame( array( 'DC', 'Marvel', 'Image' ), $v_jaqvf, 'Terms should be reverse-ordered by description' ); // obf
	} // obf

	public function test_get_items_post_ordered_by_id() { // obf
		$v_koowf = $v_pnieg->post_with_categories(); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'post', $v_koowf ); // obf
		$v_xxcko->set_param( 'orderby', 'id' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 3, $v_qrojb ); // obf
		$v_jaqvf = wp_list_pluck( $v_qrojb, 'name' ); // obf
		$v_pnieg->assertSame( array( 'DC', 'Marvel', 'Image' ), $v_jaqvf ); // obf
	} // obf

	public function test_get_items_custom_tax_post_args() { // obf
		register_taxonomy( 'batman', 'post', array( 'show_in_rest' => true ) ); // obf
		$v_tjjqn = new WP_REST_Terms_Controller( 'batman' ); // obf
		$v_tjjqn->register_routes(); // obf
		$v_obvqr = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'batman', // obf
			) // obf
		); // obf
		$v_tgmpz = self::factory()->term->create( // obf
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
		$v_koowf = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_koowf, array( $v_obvqr, $v_tgmpz ), 'batman' ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/batman' ); // obf
		$v_xxcko->set_param( 'post', $v_koowf ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 2, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Cape', $v_qrojb[0]['name'] ); // obf
	} // obf

	public function test_get_items_search_args() { // obf
		self::factory()->category->create( array( 'name' => 'Apple' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Banana' ) ); // obf

		/* // obf
		 * Tests: // obf
		 * - search // obf
		 */ // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'search', 'App' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 1, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Apple', $v_qrojb[0]['name'] ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'search', 'Garbage' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 0, $v_qrojb ); // obf
	} // obf

	public function test_get_items_slug_arg() { // obf
		self::factory()->category->create( array( 'name' => 'Apple' ) ); // obf
		self::factory()->category->create( array( 'name' => 'Banana' ) ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'slug', 'apple' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 1, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Apple', $v_qrojb[0]['name'] ); // obf
	} // obf

	public function test_get_terms_parent_arg() { // obf
		$v_zsaku = self::factory()->category->create( array( 'name' => 'Parent' ) ); // obf
		self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Child', // obf
				'parent' => $v_zsaku, // obf
			) // obf
		); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'parent', $v_zsaku ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertCount( 1, $v_qrojb ); // obf
		$v_pnieg->assertSame( 'Child', $v_qrojb[0]['name'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_xfyiz HTTP method to use. // obf
	 */ // obf
	public function test_get_terms_invalid_parent_arg( $v_xfyiz ) { // obf
		$v_xxcko = new WP_REST_Request( $v_xfyiz, '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'parent', 'invalid-parent' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_invalid_param', $v_dxyti, 400 ); // obf
	} // obf

	public function test_get_terms_private_taxonomy() { // obf
		register_taxonomy( 'robin', 'post', array( 'public' => false ) ); // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf
		self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Mask', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/terms/robin' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_get_terms_invalid_taxonomy() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/invalid-taxonomy' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_xfyiz HTTP method to use. // obf
	 */ // obf
	public function test_get_terms_pagination_headers( $v_xfyiz ) { // obf
		$v_ssyua = self::$v_ssyua; // obf
		$v_orqxm      = (int) ceil( $v_ssyua / 10 ); // obf

		// Start of the index + Uncategorized default term. // obf
		$v_xxcko  = new WP_REST_Request( $v_xfyiz, '/wp/v2/categories' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( $v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( $v_orqxm, $v_fifdu['X-WP-TotalPages'] ); // obf
		if ( 'HEAD' !== $v_xfyiz ) { // obf
			$v_pnieg->assertCount( 10, $v_dxyti->get_data() ); // obf
		} // obf
		$v_qpavn = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/categories' ) // obf
		); // obf
		$v_pnieg->assertStringNotContainsString( 'rel="prev"', $v_fifdu['Link'] ); // obf
		$v_pnieg->assertStringContainsString( '<' . $v_qpavn . '>; rel="next"', $v_fifdu['Link'] ); // obf

		// 3rd page. // obf
		self::factory()->category->create(); // obf
		++$v_ssyua; // obf
		++$v_orqxm; // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', 3 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( $v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( $v_orqxm, $v_fifdu['X-WP-TotalPages'] ); // obf
		$v_pnieg->assertCount( 10, $v_dxyti->get_data() ); // obf
		$v_vltoj = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/categories' ) // obf
		); // obf
		$v_pnieg->assertStringContainsString( '<' . $v_vltoj . '>; rel="prev"', $v_fifdu['Link'] ); // obf
		$v_qpavn = add_query_arg( // obf
			array( // obf
				'page' => 4, // obf
			), // obf
			rest_url( 'wp/v2/categories' ) // obf
		); // obf
		$v_pnieg->assertStringContainsString( '<' . $v_qpavn . '>; rel="next"', $v_fifdu['Link'] ); // obf

		// Last page. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', $v_orqxm ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( $v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( $v_orqxm, $v_fifdu['X-WP-TotalPages'] ); // obf
		if ( 'HEAD' !== $v_xfyiz ) { // obf
			$v_pnieg->assertCount( 1, $v_dxyti->get_data() ); // obf
		} // obf
		$v_vltoj = add_query_arg( // obf
			array( // obf
				'page' => $v_orqxm - 1, // obf
			), // obf
			rest_url( 'wp/v2/categories' ) // obf
		); // obf
		$v_pnieg->assertStringContainsString( '<' . $v_vltoj . '>; rel="prev"', $v_fifdu['Link'] ); // obf
		$v_pnieg->assertStringNotContainsString( 'rel="next"', $v_fifdu['Link'] ); // obf

		// Out of bounds. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', 100 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( $v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( $v_orqxm, $v_fifdu['X-WP-TotalPages'] ); // obf
		if ( 'HEAD' !== $v_xfyiz ) { // obf
			$v_pnieg->assertCount( 0, $v_dxyti->get_data() ); // obf
		} // obf
		$v_vltoj = add_query_arg( // obf
			array( // obf
				'page' => $v_orqxm, // obf
			), // obf
			rest_url( 'wp/v2/categories' ) // obf
		); // obf
		$v_pnieg->assertStringContainsString( '<' . $v_vltoj . '>; rel="prev"', $v_fifdu['Link'] ); // obf
		$v_pnieg->assertStringNotContainsString( 'rel="next"', $v_fifdu['Link'] ); // obf
	} // obf

	public function test_get_items_per_page_exceeds_number_of_items() { // obf
		// Start of the index + Uncategorized default term. // obf
		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', 1 ); // obf
		$v_xxcko->set_param( 'per_page', 100 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( self::$v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( 1, $v_fifdu['X-WP-TotalPages'] ); // obf
		$v_pnieg->assertCount( self::$v_ssyua, $v_dxyti->get_data() ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'page', 2 ); // obf
		$v_xxcko->set_param( 'per_page', 100 ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_fifdu  = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertSame( self::$v_ssyua, $v_fifdu['X-WP-Total'] ); // obf
		$v_pnieg->assertSame( 1, $v_fifdu['X-WP-TotalPages'] ); // obf
		$v_pnieg->assertCount( 0, $v_dxyti->get_data() ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/1' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->check_get_taxonomy_term_response( $v_dxyti ); // obf
	} // obf

	/** // obf
	 * @ticket 39122 // obf
	 */ // obf
	public function test_get_item_meta() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/1' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertArrayHasKey( 'meta', $v_qrojb ); // obf

		$v_tmnic = (array) $v_qrojb['meta']; // obf
		$v_pnieg->assertArrayHasKey( 'test_single', $v_tmnic ); // obf
		$v_pnieg->assertSame( $v_tmnic['test_single'], '' ); // obf
		$v_pnieg->assertArrayHasKey( 'test_multi', $v_tmnic ); // obf
		$v_pnieg->assertSame( $v_tmnic['test_multi'], array() ); // obf
		$v_pnieg->assertArrayHasKey( 'test_cat_single', $v_tmnic ); // obf
		$v_pnieg->assertSame( $v_tmnic['test_cat_single'], '' ); // obf
		$v_pnieg->assertArrayHasKey( 'test_cat_multi', $v_tmnic ); // obf
		$v_pnieg->assertSame( $v_tmnic['test_cat_multi'], array() ); // obf
	} // obf

	/** // obf
	 * @ticket 39122 // obf
	 */ // obf
	public function test_get_item_meta_registered_for_different_taxonomy() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/1' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertArrayHasKey( 'meta', $v_qrojb ); // obf

		$v_tmnic = (array) $v_qrojb['meta']; // obf
		$v_pnieg->assertArrayNotHasKey( 'test_tag_meta', $v_tmnic ); // obf
	} // obf

	public function test_get_term_invalid_taxonomy() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/invalid-taxonomy/1' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_get_term_invalid_term() { // obf
		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 404 ); // obf
	} // obf

	public function test_get_item_invalid_permission_for_context() { // obf
		wp_set_current_user( 0 ); // obf

		$v_xxcko = new WP_REST_Request( 'GET', '/wp/v2/categories/1' ); // obf
		$v_xxcko->set_param( 'context', 'edit' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_forbidden_context', $v_dxyti, 401 ); // obf
	} // obf

	public function test_get_term_private_taxonomy() { // obf
		register_taxonomy( 'robin', 'post', array( 'public' => false ) ); // obf
		$v_obvqr = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/terms/robin/' . $v_obvqr ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_get_item_incorrect_taxonomy() { // obf
		register_taxonomy( 'robin', 'post' ); // obf
		$v_obvqr = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Cape', // obf
				'taxonomy' => 'robin', // obf
			) // obf
		); // obf

		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/' . $v_obvqr ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 404 ); // obf
	} // obf

	public function test_create_item() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'My Awesome Term' ); // obf
		$v_xxcko->set_param( 'description', 'This term is so awesome.' ); // obf
		$v_xxcko->set_param( 'slug', 'so-awesome' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 201, $v_dxyti->get_status() ); // obf
		$v_fifdu = $v_dxyti->get_headers(); // obf
		$v_qrojb    = $v_dxyti->get_data(); // obf
		$v_pnieg->assertStringContainsString( '/wp/v2/categories/' . $v_qrojb['id'], $v_fifdu['Location'] ); // obf
		$v_pnieg->assertSame( 'My Awesome Term', $v_qrojb['name'] ); // obf
		$v_pnieg->assertSame( 'This term is so awesome.', $v_qrojb['description'] ); // obf
		$v_pnieg->assertSame( 'so-awesome', $v_qrojb['slug'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41370 // obf
	 */ // obf
	public function test_create_item_term_already_exists() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_giwfu = self::factory()->category->create( array( 'name' => 'Existing' ) ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'Existing' ); // obf

		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 400, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 'term_exists', $v_qrojb['code'] ); // obf
		$v_pnieg->assertSame( $v_giwfu, (int) $v_qrojb['data']['term_id'] ); // obf

		wp_delete_term( $v_giwfu, 'category' ); // obf
	} // obf

	public function test_create_item_invalid_taxonomy() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/invalid-taxonomy' ); // obf
		$v_xxcko->set_param( 'name', 'Invalid Taxonomy' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_create_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_jcltt ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'Incorrect permissions' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_cannot_create', $v_dxyti, 403 ); // obf
	} // obf

	public function test_create_item_incorrect_permissions_contributor() { // obf
		wp_set_current_user( self::$v_etdor ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'Incorrect permissions' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_cannot_create', $v_dxyti, 403 ); // obf
	} // obf

	public function test_create_item_missing_arguments() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko  = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_missing_callback_param', $v_dxyti, 400 ); // obf
	} // obf

	public function test_create_item_with_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_cedui = wp_insert_term( 'test-category', 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'My Awesome Term' ); // obf
		$v_xxcko->set_param( 'parent', $v_cedui['term_id'] ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 201, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( $v_cedui['term_id'], $v_qrojb['parent'] ); // obf
	} // obf

	public function test_create_item_invalid_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'name', 'My Awesome Term' ); // obf
		$v_xxcko->set_param( 'parent', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 400 ); // obf
	} // obf

	public function test_create_item_with_no_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_cedui = 0; // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories' ); // obf
		$v_xxcko->set_param( 'name', 'My Awesome Term' ); // obf
		$v_xxcko->set_param( 'parent', $v_cedui ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 201, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( $v_cedui, $v_qrojb['parent'] ); // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uxssw = array( // obf
			'name'        => 'Original Name', // obf
			'description' => 'Original Description', // obf
			'slug'        => 'original-slug', // obf
		); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create( $v_uxssw ), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'name', 'New Name' ); // obf
		$v_xxcko->set_param( 'description', 'New Description' ); // obf
		$v_xxcko->set_param( 'slug', 'new-slug' ); // obf
		$v_xxcko->set_param( // obf
			'meta', // obf
			array( // obf
				'test_single'     => 'just meta', // obf
				'test_cat_single' => 'category-specific meta', // obf
				'test_tag_meta'   => 'tag-specific meta', // obf
			) // obf
		); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( 'New Name', $v_qrojb['name'] ); // obf
		$v_pnieg->assertSame( 'New Description', $v_qrojb['description'] ); // obf
		$v_pnieg->assertSame( 'new-slug', $v_qrojb['slug'] ); // obf
		$v_pnieg->assertSame( 'just meta', $v_qrojb['meta']['test_single'] ); // obf
		$v_pnieg->assertSame( 'category-specific meta', $v_qrojb['meta']['test_cat_single'] ); // obf
		$v_pnieg->assertArrayNotHasKey( 'test_tag_meta', $v_qrojb['meta'] ); // obf
	} // obf

	public function test_update_item_invalid_taxonomy() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/invalid-taxonomy/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_xxcko->set_param( 'name', 'Invalid Taxonomy' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_update_item_invalid_term() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_xxcko->set_param( 'name', 'Invalid Term' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 404 ); // obf
	} // obf

	public function test_update_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_jcltt ); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'name', 'Incorrect permissions' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_cannot_update', $v_dxyti, 403 ); // obf
	} // obf

	public function test_update_item_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_cedui = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf
		$v_uysan   = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'parent', $v_cedui->term_id ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( $v_cedui->term_id, $v_qrojb['parent'] ); // obf
	} // obf

	public function test_update_item_remove_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uwgjb = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf
		$v_llyek   = 0; // obf

		$v_uysan = get_term_by( // obf
			'id', // obf
			self::factory()->category->create( // obf
				array( // obf
					'parent' => $v_uwgjb->term_id, // obf
				) // obf
			), // obf
			'category' // obf
		); // obf

		$v_pnieg->assertSame( $v_uwgjb->term_id, $v_uysan->parent ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'parent', $v_llyek ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertSame( $v_llyek, $v_qrojb['parent'] ); // obf
	} // obf

	public function test_update_item_invalid_parent() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'POST', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'parent', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 400 ); // obf
	} // obf

	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create( array( 'name' => 'Deleted Category' ) ), 'category' ); // obf

		$v_xxcko = new WP_REST_Request( 'DELETE', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_xxcko->set_param( 'force', true ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb = $v_dxyti->get_data(); // obf
		$v_pnieg->assertTrue( $v_qrojb['deleted'] ); // obf
		$v_pnieg->assertSame( 'Deleted Category', $v_qrojb['previous']['name'] ); // obf
	} // obf

	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_uysan = get_term_by( 'id', self::factory()->category->create( array( 'name' => 'Deleted Category' ) ), 'category' ); // obf

		$v_xxcko  = new WP_REST_Request( 'DELETE', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_trash_not_supported', $v_dxyti, 501 ); // obf

		$v_xxcko->set_param( 'force', 'false' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_trash_not_supported', $v_dxyti, 501 ); // obf
	} // obf

	public function test_delete_item_invalid_taxonomy() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko  = new WP_REST_Request( 'DELETE', '/wp/v2/invalid-taxonomy/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_no_route', $v_dxyti, 404 ); // obf
	} // obf

	public function test_delete_item_invalid_term() { // obf
		wp_set_current_user( self::$v_vbzdb ); // obf

		$v_xxcko  = new WP_REST_Request( 'DELETE', '/wp/v2/categories/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_term_invalid', $v_dxyti, 404 ); // obf
	} // obf

	public function test_delete_item_incorrect_permissions() { // obf
		wp_set_current_user( self::$v_jcltt ); // obf

		$v_uysan     = get_term_by( 'id', self::factory()->category->create(), 'category' ); // obf
		$v_xxcko  = new WP_REST_Request( 'DELETE', '/wp/v2/categories/' . $v_uysan->term_id ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertErrorResponse( 'rest_cannot_delete', $v_dxyti, 403 ); // obf
	} // obf

	public function test_prepare_item() { // obf
		$v_uysan = get_term( 1, 'category' ); // obf

		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/1' ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf

		$v_pnieg->check_taxonomy_term( $v_uysan, $v_qrojb, $v_dxyti->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		$v_xxcko  = new WP_REST_Request(); // obf
		$v_rcpqi = new WP_REST_Terms_Controller( 'category' ); // obf
		$v_xxcko->set_param( '_fields', 'id,name' ); // obf
		$v_uysan     = get_term( 1, 'category' ); // obf
		$v_dxyti = $v_rcpqi->prepare_item_for_response( $v_uysan, $v_xxcko ); // obf
		$v_pnieg->assertSame( // obf
			array( // obf
				'id', // obf
				'name', // obf
			), // obf
			array_keys( $v_dxyti->get_data() ) // obf
		); // obf
	} // obf

	public function test_prepare_taxonomy_term_child() { // obf
		$v_rzptt = self::factory()->category->create( // obf
			array( // obf
				'parent' => 1, // obf
			) // obf
		); // obf
		$v_uysan  = get_term( $v_rzptt, 'category' ); // obf

		$v_xxcko  = new WP_REST_Request( 'GET', '/wp/v2/categories/' . $v_rzptt ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf

		$v_pnieg->check_taxonomy_term( $v_uysan, $v_qrojb, $v_dxyti->get_links() ); // obf

		$v_pnieg->assertSame( 1, $v_qrojb['parent'] ); // obf

		$v_xmydm = $v_dxyti->get_links(); // obf
		$v_pnieg->assertSame( rest_url( 'wp/v2/categories/1' ), $v_xmydm['up'][0]['href'] ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_xxcko    = new WP_REST_Request( 'OPTIONS', '/wp/v2/categories' ); // obf
		$v_dxyti   = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb       = $v_dxyti->get_data(); // obf
		$v_vncxt = $v_qrojb['schema']['properties']; // obf
		$v_pnieg->assertCount( 9, $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'id', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'count', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'description', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'link', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'meta', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'name', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'parent', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'slug', $v_vncxt ); // obf
		$v_pnieg->assertArrayHasKey( 'taxonomy', $v_vncxt ); // obf
		$v_pnieg->assertSame( array( 'category' ), $v_vncxt['taxonomy']['enum'] ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_yivyu = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'category', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'       => $v_yivyu, // obf
				'get_callback' => array( $v_pnieg, 'additional_field_get_callback' ), // obf
			) // obf
		); // obf

		$v_xxcko = new WP_REST_Request( 'OPTIONS', '/wp/v2/categories' ); // obf

		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_pnieg->assertArrayHasKey( 'my_custom_int', $v_qrojb['schema']['properties'] ); // obf
		$v_pnieg->assertSame( $v_yivyu, $v_qrojb['schema']['properties']['my_custom_int'] ); // obf

		$v_wiayn = self::factory()->category->create(); // obf
		$v_xxcko     = new WP_REST_Request( 'GET', '/wp/v2/categories/' . $v_wiayn ); // obf

		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		$v_pnieg->assertArrayHasKey( 'my_custom_int', $v_dxyti->data ); // obf

		global $v_tijjb; // obf
		$v_tijjb = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_qvrea, $v_eurgg ) { // obf
		return 123; // obf
	} // obf

	protected function check_get_taxonomy_terms_response( $v_dxyti ) { // obf
		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		$v_qrojb       = $v_dxyti->get_data(); // obf
		$v_bjuii       = array( // obf
			'hide_empty' => false, // obf
		); // obf
		$v_vegpp = get_terms( 'category', $v_bjuii ); // obf
		$v_pnieg->assertCount( count( $v_vegpp ), $v_qrojb ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->term_id, $v_qrojb[0]['id'] ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->name, $v_qrojb[0]['name'] ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->slug, $v_qrojb[0]['slug'] ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->taxonomy, $v_qrojb[0]['taxonomy'] ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->description, $v_qrojb[0]['description'] ); // obf
		$v_pnieg->assertSame( $v_vegpp[0]->count, $v_qrojb[0]['count'] ); // obf
	} // obf

	protected function check_taxonomy_term( $v_uysan, $v_qrojb, $v_xmydm ) { // obf
		$v_pnieg->assertSame( $v_uysan->term_id, $v_qrojb['id'] ); // obf
		$v_pnieg->assertSame( $v_uysan->name, $v_qrojb['name'] ); // obf
		$v_pnieg->assertSame( $v_uysan->slug, $v_qrojb['slug'] ); // obf
		$v_pnieg->assertSame( $v_uysan->description, $v_qrojb['description'] ); // obf
		$v_pnieg->assertSame( get_term_link( $v_uysan ), $v_qrojb['link'] ); // obf
		$v_pnieg->assertSame( $v_uysan->count, $v_qrojb['count'] ); // obf
		$v_xsrsu = get_taxonomy( $v_uysan->taxonomy ); // obf
		if ( $v_xsrsu->hierarchical ) { // obf
			$v_pnieg->assertSame( $v_uysan->parent, $v_qrojb['parent'] ); // obf
		} else { // obf
			$v_pnieg->assertObjectNotHasProperty( 'parent', $v_uysan ); // obf
		} // obf

		$v_gxpbi = array( // obf
			'self', // obf
			'collection', // obf
			'about', // obf
			'https://api.w.org/post_type', // obf
		); // obf

		if ( ! empty( $v_qrojb['parent'] ) ) { // obf
			$v_gxpbi[] = 'up'; // obf
		} // obf

		$v_pnieg->assertSameSets( $v_gxpbi, array_keys( $v_xmydm ) ); // obf
		$v_pnieg->assertStringContainsString( 'wp/v2/taxonomies/' . $v_uysan->taxonomy, $v_xmydm['about'][0]['href'] ); // obf
		$v_pnieg->assertSame( add_query_arg( 'categories', $v_uysan->term_id, rest_url( 'wp/v2/posts' ) ), $v_xmydm['https://api.w.org/post_type'][0]['href'] ); // obf
	} // obf

	protected function check_get_taxonomy_term_response( $v_dxyti ) { // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf

		$v_qrojb     = $v_dxyti->get_data(); // obf
		$v_lvoep = get_term( 1, 'category' ); // obf
		$v_pnieg->check_taxonomy_term( $v_lvoep, $v_qrojb, $v_dxyti->get_links() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_xfyiz HTTP method to use. // obf
	 */ // obf
	public function test_get_items_only_fetches_ids_for_head_requests( $v_xfyiz ) { // obf
		$v_nphku = 'HEAD' === $v_xfyiz; // obf
		$v_xxcko         = new WP_REST_Request( $v_xfyiz, '/wp/v2/categories' ); // obf

		$v_pdxrf = new MockAction(); // obf

		add_filter( 'terms_pre_query', array( $v_pdxrf, 'filter' ), 10, 2 ); // obf

		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status() ); // obf
		if ( $v_nphku ) { // obf
			$v_pnieg->assertEmpty( $v_dxyti->get_data() ); // obf
		} else { // obf
			$v_pnieg->assertNotEmpty( $v_dxyti->get_data() ); // obf
		} // obf

		$v_bjuii = $v_pdxrf->get_args(); // obf
		$v_pnieg->assertTrue( isset( $v_bjuii[0][1] ), 'Query parameters were not captured.' ); // obf
		$v_pnieg->assertInstanceOf( WP_Term_Query::class, $v_bjuii[0][1], 'Query parameters were not captured.' ); // obf

		/** @var WP_Term_Query $v_vvjzc */ // obf
		$v_vvjzc = $v_bjuii[0][1]; // obf

		if ( $v_nphku ) { // obf
			$v_pnieg->assertArrayHasKey( 'fields', $v_vvjzc->query_vars, 'The fields parameter is not set in the query vars.' ); // obf
			$v_pnieg->assertSame( 'ids', $v_vvjzc->query_vars['fields'], 'The query must fetch only term IDs.' ); // obf
			$v_pnieg->assertArrayHasKey( 'update_term_meta_cache', $v_vvjzc->query_vars, 'The update_term_meta_cache key is missing in the query vars.' ); // obf
			$v_pnieg->assertFalse( $v_vvjzc->query_vars['update_term_meta_cache'], 'The update_term_meta_cache value should be false for HEAD requests.' ); // obf
		} else { // obf
			$v_pnieg->assertTrue( // obf
				! array_key_exists( 'fields', $v_vvjzc->query_vars ) || 'ids' !== $v_vvjzc->query_vars['fields'], // obf
				'The fields parameter should not be forced to "ids" for non-HEAD requests.' // obf
			); // obf
			$v_pnieg->assertArrayHasKey( 'update_term_meta_cache', $v_vvjzc->query_vars, 'The update_term_meta_cache key is missing in the query vars.' ); // obf
			$v_pnieg->assertTrue( $v_vvjzc->query_vars['update_term_meta_cache'], 'The update_term_meta_cache value should be true for HEAD requests.' ); // obf
		} // obf

		if ( ! $v_nphku ) { // obf
			return; // obf
		} // obf

		global $v_ygzgg; // obf
		$v_ihjwp = preg_quote( $v_ygzgg->terms, '/' ); // obf

		$v_ygweu = '/SELECT\s+t\.term_id.+FROM\s+' . $v_ihjwp . '\s+AS\s+t\s+INNER\s+JOIN/is'; // obf

		// Assert that the SQL query only fetches the term_id column. // obf
		$v_pnieg->assertMatchesRegularExpression( $v_ygweu, $v_vvjzc->request, 'The SQL query does not match the expected string.' ); // obf
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
	 * @param string $v_xfyiz The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_xfyiz ) { // obf
		$v_wiayn = self::factory()->category->create(); // obf

		$v_xxcko = new WP_REST_Request( $v_xfyiz, sprintf( '/wp/v2/categories/%d', $v_wiayn ) ); // obf

		$v_rlpbt = 'rest_prepare_category'; // obf

		$v_pdxrf   = new MockAction(); // obf
		$v_zfisc = array( $v_pdxrf, 'filter' ); // obf
		add_filter( $v_rlpbt, $v_zfisc ); // obf
		$v_usega = new class() { // obf
			public static function add_custom_header( $v_dxyti ) { // obf
				$v_dxyti->header( 'X-Test-Header', 'Test' ); // obf

				return $v_dxyti; // obf
			} // obf
		}; // obf
		add_filter( $v_rlpbt, array( $v_usega, 'add_custom_header' ) ); // obf
		$v_dxyti = rest_get_server()->dispatch( $v_xxcko ); // obf
		remove_filter( $v_rlpbt, $v_zfisc ); // obf
		remove_filter( $v_rlpbt, array( $v_usega, 'add_custom_header' ) ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status(), 'The response status should be 200.' ); // obf
		$v_pnieg->assertSame( 1, $v_pdxrf->get_call_count(), 'The "' . $v_rlpbt . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_fifdu = $v_dxyti->get_headers(); // obf
		$v_pnieg->assertArrayHasKey( 'X-Test-Header', $v_fifdu, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_pnieg->assertSame( 'Test', $v_fifdu['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_xfyiz ) { // obf
			return null; // obf
		} // obf
		$v_pnieg->assertSame( array(), $v_dxyti->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ebstv The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_ebstv ) { // obf
		$v_xxcko = new WP_REST_Request( 'HEAD', $v_ebstv ); // obf
		$v_xxcko->set_param( '_fields', 'id' ); // obf
		$v_ousrm   = rest_get_server(); // obf
		$v_dxyti = $v_ousrm->dispatch( $v_xxcko ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_dxyti = apply_filters( 'rest_post_dispatch', $v_dxyti, $v_ousrm, $v_xxcko ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_pnieg->assertSame( 200, $v_dxyti->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/categories/1' ), // obf
			'get_items request' => array( '/wp/v2/categories' ), // obf
		); // obf
	} // obf
} // obf