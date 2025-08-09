

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Posts_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Posts_Controller extends WP_Test_REST_Post_Type_Controller_Testcase { // obf
	protected static $v_qlgpx; // obf

	protected static $v_rfaem; // obf
	protected static $v_gfgta; // obf
	protected static $v_kdfxi; // obf
	protected static $v_wctiz; // obf
	protected static $v_vgbyq; // obf

	protected static $v_gkmou; // obf
	protected static $v_plryk    = array(); // obf
	protected static $v_apbhp       = array(); // obf
	protected static $v_dcmio = 30; // obf
	protected static $v_dzkph    = 50; // obf

	protected $v_yuiyh; // obf
	protected $v_ehlhi; // obf

	private $v_zxdct = false; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qglro ) { // obf
		self::$v_qlgpx = $v_qglro->post->create(); // obf
		self::$v_apbhp   = $v_qglro->term->create_many( 15, array( 'taxonomy' => 'category' ) ); // obf
		wp_set_object_terms( self::$v_qlgpx, self::$v_apbhp, 'category' ); // obf

		self::$v_rfaem  = $v_qglro->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		self::$v_gfgta      = $v_qglro->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_kdfxi      = $v_qglro->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		self::$v_wctiz = $v_qglro->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		self::$v_vgbyq = $v_qglro->user->create( // obf
			array( // obf
				'role' => 'private_reader', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf

		// Only support 'post' and 'gallery'. // obf
		self::$v_gkmou = get_theme_support( 'post-formats' ); // obf
		add_theme_support( 'post-formats', array( 'post', 'gallery' ) ); // obf

		// Set up posts for pagination tests. // obf
		for ( $v_apnpb = 0; $v_apnpb < self::$v_dcmio - 1; $v_apnpb++ ) { // obf
			self::$v_plryk[] = $v_qglro->post->create( // obf
				array( // obf
					'post_title' => "Post {$v_apnpb}", // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Restore theme support for formats. // obf
		if ( self::$v_gkmou ) { // obf
			add_theme_support( 'post-formats', self::$v_gkmou ); // obf
		} else { // obf
			remove_theme_support( 'post-formats' ); // obf
		} // obf

		// Remove posts for pagination tests. // obf
		foreach ( self::$v_plryk as $v_qlgpx ) { // obf
			wp_delete_post( $v_qlgpx, true ); // obf
		} // obf

		wp_delete_post( self::$v_qlgpx, true ); // obf

		self::delete_user( self::$v_rfaem ); // obf
		self::delete_user( self::$v_gfgta ); // obf
		self::delete_user( self::$v_kdfxi ); // obf
		self::delete_user( self::$v_wctiz ); // obf
		self::delete_user( self::$v_vgbyq ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_post_type( // obf
			'youseeme', // obf
			array( // obf
				'supports'     => array(), // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		add_role( 'private_reader', 'Private Reader' ); // obf
		$v_kjfui = get_role( 'private_reader' ); // obf
		$v_kjfui->add_cap( 'read_private_posts' ); // obf

		add_filter( 'rest_pre_dispatch', array( $v_yfneu, 'wpSetUpBeforeRequest' ), 10, 3 ); // obf
		add_filter( 'posts_clauses', array( $v_yfneu, 'save_posts_clauses' ), 10, 2 ); // obf
	} // obf

	public function tear_down() { // obf
		if ( true === $v_yfneu->attachments_created ) { // obf
			$v_yfneu->remove_added_uploads(); // obf
			$v_yfneu->attachments_created = false; // obf
		} // obf

		parent::tear_down(); // obf
	} // obf

	public function wpSetUpBeforeRequest( $v_lsoxp, $v_fomoj, $v_kuopg ) { // obf
		$v_yfneu->posts_clauses = array(); // obf
		return $v_lsoxp; // obf
	} // obf

	public function save_posts_clauses( $v_pwbsr, $v_qqzpu ) { // obf
		if ( 'revision' !== $v_qqzpu->query_vars['post_type'] ) { // obf
			array_push( $v_yfneu->posts_clauses, $v_pwbsr ); // obf
		} // obf
		return $v_pwbsr; // obf
	} // obf

	public function assertPostsClause( $v_pnnkp, $v_klifj ) { // obf
		global $v_snngp; // obf
		$v_kluja = str_replace( '{posts}', $v_snngp->posts, $v_klifj ); // obf
		$v_yfneu->assertCount( 1, $v_yfneu->posts_clauses ); // obf
		$v_yfneu->assertSame( $v_kluja, $v_snngp->remove_placeholder_escape( $v_yfneu->posts_clauses[0][ $v_pnnkp ] ) ); // obf
	} // obf

	public function assertPostsOrderedBy( $v_klifj ) { // obf
		$v_yfneu->assertPostsClause( 'orderby', $v_klifj ); // obf
	} // obf

	public function assertPostsWhere( $v_klifj ) { // obf
		$v_yfneu->assertPostsClause( 'where', $v_klifj ); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_kxvet = rest_get_server()->get_routes(); // obf

		$v_yfneu->assertArrayHasKey( '/wp/v2/posts', $v_kxvet ); // obf
		$v_yfneu->assertCount( 2, $v_kxvet['/wp/v2/posts'] ); // obf
		$v_yfneu->assertArrayHasKey( '/wp/v2/posts/(?P<id>[\d]+)', $v_kxvet ); // obf
		$v_yfneu->assertCount( 3, $v_kxvet['/wp/v2/posts/(?P<id>[\d]+)'] ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array( 'v1' => true ), $v_ykwdf['endpoints'][0]['allow_batch'] ); // obf
		$v_yfneu->assertSame( 'view', $v_ykwdf['endpoints'][0]['args']['context']['default'] ); // obf
		$v_yfneu->assertSame( array( 'view', 'embed', 'edit' ), $v_ykwdf['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_qlgpx ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array( 'v1' => true ), $v_ykwdf['endpoints'][0]['allow_batch'] ); // obf
		$v_yfneu->assertSame( 'view', $v_ykwdf['endpoints'][0]['args']['context']['default'] ); // obf
		$v_yfneu->assertSame( array( 'view', 'embed', 'edit' ), $v_ykwdf['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_igcge     = array_keys( $v_ykwdf['endpoints'][0]['args'] ); // obf
		sort( $v_igcge ); // obf
		$v_yfneu->assertSame( // obf
			array( // obf
				'after', // obf
				'author', // obf
				'author_exclude', // obf
				'before', // obf
				'categories', // obf
				'categories_exclude', // obf
				'context', // obf
				'exclude', // obf
				'format', // obf
				'ignore_sticky', // obf
				'include', // obf
				'modified_after', // obf
				'modified_before', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'per_page', // obf
				'search', // obf
				'search_columns', // obf
				'search_semantics', // obf
				'slug', // obf
				'status', // obf
				'sticky', // obf
				'tags', // obf
				'tags_exclude', // obf
				'tax_relation', // obf
			), // obf
			$v_igcge // obf
		); // obf
	} // obf

	public function test_registered_get_item_params() { // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_igcge     = array_keys( $v_ykwdf['endpoints'][0]['args'] ); // obf
		$v_yfneu->assertEqualSets( array( 'context', 'id', 'password', 'excerpt_length' ), $v_igcge ); // obf
	} // obf

	public function test_registered_get_items_embed() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', array( self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_cnwoi = rest_get_server()->response_to_data( $v_cnwoi, true ); // obf
		$v_yfneu->assertArrayHasKey( '_embedded', $v_cnwoi[0], 'The _embedded key must exist' ); // obf
		$v_yfneu->assertArrayHasKey( 'wp:term', $v_cnwoi[0]['_embedded'], 'The wp:term key must exist' ); // obf
		$v_yfneu->assertCount( 15, $v_cnwoi[0]['_embedded']['wp:term'][0], 'Should should be 15 terms and not the default 10' ); // obf
		$v_apnpb = 0; // obf
		foreach ( $v_cnwoi[0]['_embedded']['wp:term'][0] as $v_wzleq ) { // obf
			$v_yfneu->assertSame( self::$v_apbhp[ $v_apnpb ], $v_wzleq['id'], 'Check term id existing in response' ); // obf
			++$v_apnpb; // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 43701 // obf
	 */ // obf
	public function test_allow_header_sent_on_options_request() { // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_cnwoi = apply_filters( 'rest_post_dispatch', $v_cnwoi, rest_get_server(), $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf

		$v_yfneu->assertNotEmpty( $v_aomhb['Allow'] ); // obf
		$v_yfneu->assertSame( $v_aomhb['Allow'], 'GET' ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'OPTIONS', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_cnwoi = apply_filters( 'rest_post_dispatch', $v_cnwoi, rest_get_server(), $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf

		$v_yfneu->assertNotEmpty( $v_aomhb['Allow'] ); // obf
		$v_yfneu->assertSame( $v_aomhb['Allow'], 'GET, POST, PUT, PATCH, DELETE' ); // obf
	} // obf

	public function test_get_items() { // obf
		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_posts_response( $v_cnwoi ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_post_data() { // obf
		$v_kuopg = new WP_REST_Request( 'HEAD', '/wp/v2/posts' ); // obf

		$v_rrpur = 'rest_prepare_post'; // obf
		$v_sjmim    = new MockAction(); // obf
		$v_iukei  = array( $v_sjmim, 'filter' ); // obf

		add_filter( $v_rrpur, $v_iukei ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		remove_filter( $v_rrpur, $v_iukei ); // obf

		$v_yfneu->assertNotWPError( $v_cnwoi ); // obf
		$v_cnwoi = rest_ensure_response( $v_cnwoi ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status(), 'The response status should be 200.' ); // obf

		$v_aomhb = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( 0, $v_sjmim->get_call_count(), 'The "' . $v_rrpur . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_yfneu->assertArrayHasKey( 'Link', $v_aomhb, 'The "Link" header should be present in the response.' ); // obf
		$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * A valid query that returns 0 results should return an empty JSON list. // obf
	 * In case of a HEAD request, the response should not contain a body. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @link https://github.com/WP-API/WP-API/issues/862 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 * // obf
	 * @param string $v_ouslm The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_empty_query( $v_ouslm ) { // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_query_params( // obf
			array( // obf
				'author' => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		if ( $v_kuopg->is_method( 'HEAD' ) ) { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is null for HEAD request.' ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is an empty array for GET request.' ); // obf
		} // obf

		$v_aomhb = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( 0, $v_aomhb['X-WP-Total'], 'Failed asserting that X-WP-Total header is 0.' ); // obf
		$v_yfneu->assertSame( 0, $v_aomhb['X-WP-TotalPages'], 'Failed asserting that X-WP-TotalPages header is 0.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ouslm The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_author_query( $v_ouslm ) { // obf
		self::factory()->post->create( array( 'post_author' => self::$v_gfgta ) ); // obf
		self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf

		$v_dcmio = self::$v_dcmio + 2; // obf

		// All posts in the database. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( $v_dcmio, $v_cnwoi->get_data() ); // obf

		} else { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'] ); // obf
		} // obf

		// Limit to editor and author. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'author', array( self::$v_gfgta, self::$v_kdfxi ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
			$v_yfneu->assertSameSets( array( self::$v_gfgta, self::$v_kdfxi ), wp_list_pluck( $v_ykwdf, 'author' ) ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_ykwdf, 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( 2, $v_aomhb['X-WP-Total'], 'Failed asserting that X-WP-Total header is 2.' ); // obf
		} // obf

		// Limit to editor. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'author', self::$v_gfgta ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
			$v_yfneu->assertSame( self::$v_gfgta, $v_ykwdf[0]['author'] ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_ykwdf, 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( 1, $v_aomhb['X-WP-Total'], 'Failed asserting that X-WP-Total header is 1.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ouslm The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_author_exclude_query( $v_ouslm ) { // obf
		self::factory()->post->create( array( 'post_author' => self::$v_gfgta ) ); // obf
		self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf

		$v_dcmio = self::$v_dcmio + 2; // obf

		// All posts in the database. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( $v_dcmio, $v_cnwoi->get_data() ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'], 'Failed asserting that the number of posts is correct.' ); // obf
		} // obf

		// Exclude editor and author. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'author_exclude', array( self::$v_gfgta, self::$v_kdfxi ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( $v_dcmio - 2, $v_ykwdf ); // obf
			$v_yfneu->assertNotEquals( self::$v_gfgta, $v_ykwdf[0]['author'] ); // obf
			$v_yfneu->assertNotEquals( self::$v_kdfxi, $v_ykwdf[0]['author'] ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( $v_dcmio - 2, $v_aomhb['X-WP-Total'], 'Failed asserting that the number of posts is correct.' ); // obf
		} // obf

		// Exclude editor. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'author_exclude', self::$v_gfgta ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( $v_dcmio - 1, $v_ykwdf ); // obf
			$v_yfneu->assertNotEquals( self::$v_gfgta, $v_ykwdf[0]['author'] ); // obf
			$v_yfneu->assertNotEquals( self::$v_gfgta, $v_ykwdf[1]['author'] ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( $v_dcmio - 1, $v_aomhb['X-WP-Total'], 'Failed asserting that the number of posts is correct.' ); // obf
		} // obf

		// Invalid 'author_exclude' should error. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'author_exclude', 'invalid' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ouslm The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_include_query( $v_ouslm ) { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => '2001-02-03 04:05:06', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => '2001-02-03 04:05:07', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf

		// Order defaults to date descending. // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
			$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[0]['id'] ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_ykwdf, 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( 2, $v_aomhb['X-WP-Total'], 'Failed asserting that the number of posts is correct.' ); // obf
		} // obf

		$v_yfneu->assertPostsOrderedBy( '{posts}.post_date DESC' ); // obf

		// 'orderby' => 'include'. // obf
		$v_kuopg->set_param( 'orderby', 'include' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		if ( $v_kuopg->is_method( 'get' ) ) { // obf
			$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
			$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'] ); // obf
		} else { // obf
			$v_yfneu->assertSame( array(), $v_ykwdf, 'Failed asserting that response data is null for HEAD request.' ); // obf
			$v_aomhb = $v_cnwoi->get_headers(); // obf
			$v_yfneu->assertSame( 2, $v_aomhb['X-WP-Total'], 'Failed asserting that the number of posts is correct.' ); // obf
		} // obf

		$v_yfneu->assertPostsOrderedBy( "FIELD({posts}.ID,$v_sjicm,$v_lzbbf)" ); // obf

		// Invalid 'include' should error. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', 'invalid' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_orderby_author_query() { // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_author' => self::$v_gfgta, // obf
			) // obf
		); // obf
		$v_tcopg = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_author' => self::$v_gfgta, // obf
			) // obf
		); // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_author' => self::$v_kdfxi, // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf, $v_tcopg ) ); // obf
		$v_kuopg->set_param( 'orderby', 'author' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertSame( self::$v_kdfxi, $v_ykwdf[0]['author'] ); // obf
		$v_yfneu->assertSame( self::$v_gfgta, $v_ykwdf[1]['author'] ); // obf
		$v_yfneu->assertSame( self::$v_gfgta, $v_ykwdf[2]['author'] ); // obf

		$v_yfneu->assertPostsOrderedBy( '{posts}.post_author DESC' ); // obf
	} // obf

	public function test_get_items_orderby_modified_query() { // obf
		$v_sjicm = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_tcopg = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_yfneu->update_post_modified( $v_sjicm, '2016-04-20 4:26:20' ); // obf
		$v_yfneu->update_post_modified( $v_lzbbf, '2016-02-01 20:24:02' ); // obf
		$v_yfneu->update_post_modified( $v_tcopg, '2016-02-21 12:24:02' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf, $v_tcopg ) ); // obf
		$v_kuopg->set_param( 'orderby', 'modified' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_tcopg, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[2]['id'] ); // obf

		$v_yfneu->assertPostsOrderedBy( '{posts}.post_modified DESC' ); // obf
	} // obf

	public function test_get_items_orderby_parent_query() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_tcopg = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_sjicm, // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf, $v_tcopg ) ); // obf
		$v_kuopg->set_param( 'orderby', 'parent' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertSame( $v_tcopg, $v_ykwdf[0]['id'] ); // obf
		// Check ordering. Default ORDER is DESC. // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['parent'] ); // obf
		$v_yfneu->assertSame( 0, $v_ykwdf[1]['parent'] ); // obf
		$v_yfneu->assertSame( 0, $v_ykwdf[2]['parent'] ); // obf

		$v_yfneu->assertPostsOrderedBy( '{posts}.post_parent DESC' ); // obf
	} // obf

	public function test_get_items_exclude_query() { // obf
		$v_sjicm = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_mczlc      = wp_list_pluck( $v_ykwdf, 'id' ); // obf
		$v_yfneu->assertContains( $v_sjicm, $v_mczlc ); // obf
		$v_yfneu->assertContains( $v_lzbbf, $v_mczlc ); // obf

		$v_kuopg->set_param( 'exclude', array( $v_lzbbf ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_mczlc      = wp_list_pluck( $v_ykwdf, 'id' ); // obf
		$v_yfneu->assertContains( $v_sjicm, $v_mczlc ); // obf
		$v_yfneu->assertNotContains( $v_lzbbf, $v_mczlc ); // obf

		$v_kuopg->set_param( 'exclude', (string) $v_lzbbf ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_mczlc      = wp_list_pluck( $v_ykwdf, 'id' ); // obf
		$v_yfneu->assertContains( $v_sjicm, $v_mczlc ); // obf
		$v_yfneu->assertNotContains( $v_lzbbf, $v_mczlc ); // obf

		$v_kuopg->set_param( 'exclude', 'invalid' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_search_query() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Search Result', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_dcmio = self::$v_dcmio + 1; // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( $v_dcmio, $v_cnwoi->get_data() ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'search', 'Search Result' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( 'Search Result', $v_ykwdf[0]['title']['rendered'] ); // obf
	} // obf

	/** // obf
	 * @ticket 63307 // obf
	 */ // obf
	public function test_get_items_slug_query() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Banana', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		update_option( 'sticky_posts', array( $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'slug', 'apple' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( 'Apple', $v_ykwdf[0]['title']['rendered'], 'Return the post with the given slug' ); // obf
	} // obf

	public function test_get_items_multiple_slugs_array_query() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Banana', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Peach', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'slug', array( 'banana', 'peach' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_wgzdg = array( // obf
			$v_ykwdf[0]['title']['rendered'], // obf
			$v_ykwdf[1]['title']['rendered'], // obf
		); // obf
		sort( $v_wgzdg ); // obf
		$v_yfneu->assertSame( array( 'Banana', 'Peach' ), $v_wgzdg ); // obf
	} // obf

	public function test_get_items_multiple_slugs_string_query() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Banana', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Peach', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'slug', 'apple,banana' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_wgzdg = array( // obf
			$v_ykwdf[0]['title']['rendered'], // obf
			$v_ykwdf[1]['title']['rendered'], // obf
		); // obf
		sort( $v_wgzdg ); // obf
		$v_yfneu->assertSame( array( 'Apple', 'Banana' ), $v_wgzdg ); // obf
	} // obf

	public function test_get_items_status_query() { // obf
		wp_set_current_user( 0 ); // obf

		self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'status', 'publish' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertCount( self::$v_dcmio, $v_cnwoi->get_data() ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'draft' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'draft' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertCount( 1, $v_cnwoi->get_data() ); // obf
	} // obf

	public function test_get_items_multiple_statuses_string_query() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf
		self::factory()->post->create( array( 'post_status' => 'private' ) ); // obf
		self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( 'status', 'draft,private' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_detfv = array( // obf
			$v_ykwdf[0]['status'], // obf
			$v_ykwdf[1]['status'], // obf
		); // obf
		sort( $v_detfv ); // obf
		$v_yfneu->assertSame( array( 'draft', 'private' ), $v_detfv ); // obf
	} // obf

	public function test_get_items_multiple_statuses_array_query() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf
		self::factory()->post->create( array( 'post_status' => 'pending' ) ); // obf
		self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( 'status', array( 'draft', 'pending' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_detfv = array( // obf
			$v_ykwdf[0]['status'], // obf
			$v_ykwdf[1]['status'], // obf
		); // obf
		sort( $v_detfv ); // obf
		$v_yfneu->assertSame( array( 'draft', 'pending' ), $v_detfv ); // obf
	} // obf

	public function test_get_items_multiple_statuses_one_invalid_query() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( 'status', array( 'draft', 'nonsense' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43701 // obf
	 */ // obf
	public function test_get_items_multiple_statuses_custom_role_one_invalid_query() { // obf
		$v_ontsl = self::factory()->post->create( array( 'post_status' => 'private' ) ); // obf

		wp_set_current_user( self::$v_vgbyq ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', array( 'private', 'future' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_invalid_status_query() { // obf
		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'invalid' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_status_without_permissions() { // obf
		$v_mkajx = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf

		$v_tqwec = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertNotEmpty( $v_tqwec ); // obf

		foreach ( $v_tqwec as $v_gfkxb ) { // obf
			$v_yfneu->assertNotEquals( $v_mkajx, $v_gfkxb['id'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 56350 // obf
	 * // obf
	 * @dataProvider data_get_items_exact_search // obf
	 * // obf
	 * @param string $v_xpkuf  The search term. // obf
	 * @param bool   $v_zdjyw Whether the search is an exact or general search. // obf
	 * @param int    $v_yjxkr     The expected number of matching posts. // obf
	 */ // obf
	public function test_get_items_exact_search( $v_xpkuf, $v_zdjyw, $v_yjxkr ) { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Rye', // obf
				'post_content' => 'This is a post about Rye Bread', // obf
			) // obf
		); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Types of Bread', // obf
				'post_content' => 'Types of bread are White and Rye Bread', // obf
			) // obf
		); // obf

		$v_kuopg           = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg['search'] = $v_xpkuf; // obf
		if ( $v_zdjyw ) { // obf
			$v_kuopg['search_semantics'] = 'exact'; // obf
		} // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( $v_yjxkr, $v_cnwoi->get_data() ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_items_exact_search(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_items_exact_search() { // obf
		return array( // obf
			'general search, one exact match and one partial match' => array( // obf
				'search_term'  => 'Rye', // obf
				'exact_search' => false, // obf
				'expected'     => 2, // obf
			), // obf
			'exact search, one exact match and one partial match' => array( // obf
				'search_term'  => 'Rye', // obf
				'exact_search' => true, // obf
				'expected'     => 1, // obf
			), // obf
			'exact search, no match and one partial match' => array( // obf
				'search_term'  => 'Rye Bread', // obf
				'exact_search' => true, // obf
				'expected'     => 0, // obf
			), // obf
		); // obf
	} // obf

	public function test_get_items_order_and_orderby() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple Pie', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple Sauce', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple Cobbler', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Apple Coffee Cake', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'search', 'Apple' ); // obf

		// Order defaults to 'desc'. // obf
		$v_kuopg->set_param( 'orderby', 'title' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'Apple Sauce', $v_ykwdf[0]['title']['rendered'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '{posts}.post_title DESC' ); // obf

		// 'order' => 'asc'. // obf
		$v_kuopg->set_param( 'order', 'asc' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'Apple Cobbler', $v_ykwdf[0]['title']['rendered'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '{posts}.post_title ASC' ); // obf

		// 'order' => 'asc,id' should error. // obf
		$v_kuopg->set_param( 'order', 'asc,id' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		// 'orderby' => 'content' should error (invalid param test). // obf
		$v_kuopg->set_param( 'order', 'asc' ); // obf
		$v_kuopg->set_param( 'orderby', 'content' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_with_orderby_include_without_include_param() { // obf
		self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'include' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_orderby_include_missing_include', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_with_orderby_id() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => '2016-01-13 02:26:48', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => '2016-01-12 02:26:48', // obf
			) // obf
		); // obf
		$v_tcopg = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => '2016-01-11 02:26:48', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'id' ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf, $v_tcopg ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		// Default ORDER is DESC. // obf
		$v_yfneu->assertSame( $v_tcopg, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[2]['id'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '{posts}.ID DESC' ); // obf
	} // obf

	public function test_get_items_with_orderby_slug() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'ABC', // obf
				'post_name'   => 'xyz', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'XYZ', // obf
				'post_name'   => 'abc', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'slug' ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm, $v_lzbbf ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		// Default ORDER is DESC. // obf
		$v_yfneu->assertSame( 'xyz', $v_ykwdf[0]['slug'] ); // obf
		$v_yfneu->assertSame( 'abc', $v_ykwdf[1]['slug'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '{posts}.post_name DESC' ); // obf
	} // obf

	public function test_get_items_with_orderby_slugs() { // obf
		$v_lktqz = array( 'burrito', 'taco', 'chalupa' ); // obf
		foreach ( $v_lktqz as $v_qjzaz ) { // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_title'  => $v_qjzaz, // obf
					'post_name'   => $v_qjzaz, // obf
					'post_status' => 'publish', // obf
				) // obf
			); // obf
		} // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'include_slugs' ); // obf
		$v_kuopg->set_param( 'slug', array( 'taco', 'chalupa', 'burrito' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( 'taco', $v_ykwdf[0]['slug'] ); // obf
		$v_yfneu->assertSame( 'chalupa', $v_ykwdf[1]['slug'] ); // obf
		$v_yfneu->assertSame( 'burrito', $v_ykwdf[2]['slug'] ); // obf
	} // obf

	public function test_get_items_with_orderby_relevance() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title is more relevant', // obf
				'post_content' => 'Content is', // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title is', // obf
				'post_content' => 'Content is less relevant', // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'relevance' ); // obf
		$v_kuopg->set_param( 'search', 'relevant' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '{posts}.post_title LIKE \'%relevant%\' DESC, {posts}.post_date DESC' ); // obf
	} // obf

	public function test_get_items_with_orderby_relevance_two_terms() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title is more relevant', // obf
				'post_content' => 'Content is', // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title is', // obf
				'post_content' => 'Content is less relevant', // obf
				'post_status'  => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'relevance' ); // obf
		$v_kuopg->set_param( 'search', 'relevant content' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertPostsOrderedBy( '(CASE WHEN {posts}.post_title LIKE \'%relevant content%\' THEN 1 WHEN {posts}.post_title LIKE \'%relevant%\' AND {posts}.post_title LIKE \'%content%\' THEN 2 WHEN {posts}.post_title LIKE \'%relevant%\' OR {posts}.post_title LIKE \'%content%\' THEN 3 WHEN {posts}.post_excerpt LIKE \'%relevant content%\' THEN 4 WHEN {posts}.post_content LIKE \'%relevant content%\' THEN 5 ELSE 6 END), {posts}.post_date DESC' ); // obf
	} // obf

	public function test_get_items_with_orderby_relevance_missing_search() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'orderby', 'relevance' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_no_search_term_defined', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_offset_query() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'offset', 1 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( self::$v_dcmio - 1, $v_cnwoi->get_data() ); // obf

		// 'offset' works with 'per_page'. // obf
		$v_kuopg->set_param( 'per_page', 2 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 2, $v_cnwoi->get_data() ); // obf

		// 'offset' takes priority over 'page'. // obf
		$v_kuopg->set_param( 'page', 2 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 2, $v_cnwoi->get_data() ); // obf

		// Invalid 'offset' should error. // obf
		$v_kuopg->set_param( 'offset', 'moreplease' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_tags_query() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		$v_wtbof = wp_insert_term( 'My Tag', 'post_tag' ); // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'tags', array( $v_wtbof['term_id'] ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'] ); // obf
	} // obf

	public function test_get_items_tags_exclude_query() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_tcopg = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_dppbc = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_wtbof = wp_insert_term( 'My Tag', 'post_tag' ); // obf

		$v_dcmio = self::$v_dcmio + 3; // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'tags_exclude', array( $v_wtbof['term_id'] ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( $v_dcmio - 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_dppbc, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_tcopg, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[2]['id'] ); // obf
	} // obf

	public function test_get_items_tags_and_categories_query() { // obf
		$v_sjicm      = self::$v_qlgpx; // obf
		$v_lzbbf      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_wtbof      = wp_insert_term( 'My Tag', 'post_tag' ); // obf
		$v_tgmqx = wp_insert_term( 'My Category', 'category' ); // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_lzbbf, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_sjicm, array( $v_tgmqx['term_id'] ), 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'tags', array( $v_wtbof['term_id'] ) ); // obf
		$v_kuopg->set_param( 'categories', array( $v_tgmqx['term_id'] ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 1, $v_cnwoi->get_data() ); // obf

		$v_kuopg->set_param( 'tags', array( 'my-tag' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 44326 // obf
	 */ // obf
	public function test_get_items_tags_or_categories_query() { // obf
		$v_sjicm      = self::$v_qlgpx; // obf
		$v_lzbbf      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_wtbof      = wp_insert_term( 'My Tag', 'post_tag' ); // obf
		$v_tgmqx = wp_insert_term( 'My Category', 'category' ); // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_lzbbf, array( $v_tgmqx['term_id'] ), 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'tax_relation', 'OR' ); // obf
		$v_kuopg->set_param( 'tags', array( $v_wtbof['term_id'] ) ); // obf
		$v_kuopg->set_param( 'categories', array( $v_tgmqx['term_id'] ) ); // obf
		$v_kuopg->set_param( 'orderby', 'id' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[1]['id'] ); // obf
	} // obf

	public function test_get_items_tags_and_categories_exclude_query() { // obf
		$v_sjicm      = self::$v_qlgpx; // obf
		$v_lzbbf      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_wtbof      = wp_insert_term( 'My Tag', 'post_tag' ); // obf
		$v_tgmqx = wp_insert_term( 'My Category', 'category' ); // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_lzbbf, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_sjicm, array( $v_tgmqx['term_id'] ), 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'tags', array( $v_wtbof['term_id'] ) ); // obf
		$v_kuopg->set_param( 'categories_exclude', array( $v_tgmqx['term_id'] ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[0]['id'] ); // obf

		$v_kuopg->set_param( 'tags_exclude', array( 'my-tag' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 44326 // obf
	 */ // obf
	public function test_get_items_tags_or_categories_exclude_query() { // obf
		$v_sjicm      = end( self::$v_plryk ); // obf
		$v_lzbbf      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_tcopg      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_dppbc      = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_wtbof      = wp_insert_term( 'My Tag', 'post_tag' ); // obf
		$v_tgmqx = wp_insert_term( 'My Category', 'category' ); // obf

		$v_dcmio = self::$v_dcmio + 3; // obf

		wp_set_object_terms( $v_sjicm, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_lzbbf, array( $v_wtbof['term_id'] ), 'post_tag' ); // obf
		wp_set_object_terms( $v_lzbbf, array( $v_tgmqx['term_id'] ), 'category' ); // obf
		wp_set_object_terms( $v_tcopg, array( $v_tgmqx['term_id'] ), 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'tags', array( $v_wtbof['term_id'] ) ); // obf
		$v_kuopg->set_param( 'categories_exclude', array( $v_tgmqx['term_id'] ) ); // obf
		$v_kuopg->set_param( 'tax_relation', 'OR' ); // obf
		$v_kuopg->set_param( 'orderby', 'id' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( $v_dcmio - 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_dppbc, $v_ykwdf[0]['id'] ); // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_ykwdf[1]['id'] ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[2]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 39494 // obf
	 */ // obf
	public function test_get_items_with_category_including_children() { // obf
		$v_jtoqv = get_taxonomy( 'category' ); // obf

		$v_kziww = static::factory()->term->create( array( 'taxonomy' => $v_jtoqv->name ) ); // obf
		$v_ggnxi = static::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_jtoqv->name, // obf
				'parent'   => $v_kziww, // obf
			) // obf
		); // obf

		$v_plryk = array( // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_kziww ), // obf
				) // obf
			), // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_ggnxi ), // obf
				) // obf
			), // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( // obf
			$v_jtoqv->rest_base, // obf
			array( // obf
				'terms'            => array( $v_kziww ), // obf
				'include_children' => true, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSameSets( $v_plryk, array_column( $v_ykwdf, 'id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39494 // obf
	 */ // obf
	public function test_get_items_with_category_excluding_children() { // obf
		$v_jtoqv = get_taxonomy( 'category' ); // obf

		$v_kziww = static::factory()->term->create( array( 'taxonomy' => $v_jtoqv->name ) ); // obf
		$v_ggnxi = static::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_jtoqv->name, // obf
				'parent'   => $v_kziww, // obf
			) // obf
		); // obf

		$v_plryk = array( // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_kziww ), // obf
				) // obf
			), // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_ggnxi ), // obf
				) // obf
			), // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( // obf
			$v_jtoqv->rest_base, // obf
			array( // obf
				'terms'            => array( $v_kziww ), // obf
				'include_children' => false, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_plryk[0], $v_ykwdf[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 39494 // obf
	 */ // obf
	public function test_get_items_without_category_or_its_children() { // obf
		$v_jtoqv = get_taxonomy( 'category' ); // obf

		$v_kziww = static::factory()->term->create( array( 'taxonomy' => $v_jtoqv->name ) ); // obf
		$v_ggnxi = static::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_jtoqv->name, // obf
				'parent'   => $v_kziww, // obf
			) // obf
		); // obf

		$v_plryk = array( // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_kziww ), // obf
				) // obf
			), // obf
			static::factory()->post->create( // obf
				array( // obf
					'post_status'   => 'publish', // obf
					'post_category' => array( $v_ggnxi ), // obf
				) // obf
			), // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( // obf
			$v_jtoqv->rest_base . '_exclude', // obf
			array( // obf
				'terms'            => array( $v_kziww ), // obf
				'include_children' => true, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertEmpty( // obf
			array_intersect( // obf
				$v_plryk, // obf
				array_column( $v_ykwdf, 'id' ) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 39494 // obf
	 */ // obf
	public function test_get_items_without_category_but_allowing_its_children() { // obf
		$v_jtoqv = get_taxonomy( 'category' ); // obf

		$v_kziww = static::factory()->term->create( array( 'taxonomy' => $v_jtoqv->name ) ); // obf
		$v_ggnxi = static::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_jtoqv->name, // obf
				'parent'   => $v_kziww, // obf
			) // obf
		); // obf

		$v_gjdqe = static::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_category' => array( $v_kziww ), // obf
			) // obf
		); // obf
		$v_voynz = static::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_category' => array( $v_ggnxi ), // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( // obf
			$v_jtoqv->rest_base . '_exclude', // obf
			array( // obf
				'terms'            => array( $v_kziww ), // obf
				'include_children' => false, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_ymauy = array_column( $v_ykwdf, 'id' ); // obf

		$v_yfneu->assertNotContains( $v_gjdqe, $v_ymauy ); // obf
		$v_yfneu->assertContains( $v_voynz, $v_ymauy ); // obf
	} // obf

	/** // obf
	 * @ticket 41287 // obf
	 */ // obf
	public function test_get_items_with_all_categories() { // obf
		$v_jtoqv   = get_taxonomy( 'category' ); // obf
		$v_lwyob = static::factory()->term->create_many( 2, array( 'taxonomy' => $v_jtoqv->name ) ); // obf

		$v_gjdqe = static::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_category' => array( $v_lwyob[0] ), // obf
			) // obf
		); // obf
		$v_voynz = static::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_category' => array( $v_lwyob[1] ), // obf
			) // obf
		); // obf
		$v_bycor = static::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'publish', // obf
				'post_category' => $v_lwyob, // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( // obf
			$v_jtoqv->rest_base, // obf
			array( // obf
				'terms'    => $v_lwyob, // obf
				'operator' => 'AND', // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_bycor, $v_ykwdf[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 44326 // obf
	 */ // obf
	public function test_get_items_relation_with_no_tax_query() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'tax_relation', 'OR' ); // obf
		$v_kuopg->set_param( 'include', self::$v_qlgpx ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertCount( 1, $v_cnwoi->get_data() ); // obf
		$v_yfneu->assertSame( self::$v_qlgpx, $v_cnwoi->get_data()[0]['id'] ); // obf
	} // obf

	public function test_get_items_sticky() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		update_option( 'sticky_posts', array( $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'sticky', true ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 1, $v_cnwoi->get_data() ); // obf

		$v_zmntt = $v_cnwoi->get_data(); // obf
		$v_gfkxb  = $v_zmntt[0]; // obf
		$v_yfneu->assertSame( $v_lzbbf, $v_gfkxb['id'] ); // obf

		$v_kuopg->set_param( 'sticky', 'nothanks' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_sticky_with_include() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		update_option( 'sticky_posts', array( $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'sticky', true ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 0, $v_cnwoi->get_data() ); // obf

		$v_yfneu->assertCount( 1, $v_yfneu->posts_clauses ); // obf
		$v_yfneu->posts_clauses = array_slice( $v_yfneu->posts_clauses, 0, 1 ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID IN (0) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf

		update_option( 'sticky_posts', array( $v_sjicm, $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'sticky', true ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertCount( 1, $v_cnwoi->get_data() ); // obf

		$v_zmntt = $v_cnwoi->get_data(); // obf
		$v_gfkxb  = $v_zmntt[0]; // obf
		$v_yfneu->assertSame( $v_sjicm, $v_gfkxb['id'] ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID IN ($v_sjicm) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	public function test_get_items_sticky_no_sticky_posts() { // obf
		update_option( 'sticky_posts', array() ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'sticky', true ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 0, $v_cnwoi->get_data() ); // obf

		$v_yfneu->assertCount( 1, $v_yfneu->posts_clauses ); // obf
		$v_yfneu->posts_clauses = array_slice( $v_yfneu->posts_clauses, 0, 1 ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID IN (0) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	public function test_get_items_sticky_with_include_no_sticky_posts() { // obf
		$v_sjicm = self::$v_qlgpx; // obf

		update_option( 'sticky_posts', array() ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'sticky', true ); // obf
		$v_kuopg->set_param( 'include', array( $v_sjicm ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( 0, $v_cnwoi->get_data() ); // obf

		$v_yfneu->assertCount( 1, $v_yfneu->posts_clauses ); // obf
		$v_yfneu->posts_clauses = array_slice( $v_yfneu->posts_clauses, 0, 1 ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID IN (0) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	public function test_get_items_not_sticky() { // obf
		$v_sjicm = end( self::$v_plryk ); // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_dcmio = self::$v_dcmio + 1; // obf

		update_option( 'sticky_posts', array( $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'sticky', false ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( $v_dcmio - 1, $v_cnwoi->get_data() ); // obf

		$v_zmntt = $v_cnwoi->get_data(); // obf
		$v_gfkxb  = $v_zmntt[0]; // obf
		$v_yfneu->assertSame( $v_sjicm, $v_gfkxb['id'] ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID NOT IN ($v_lzbbf) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	public function test_get_items_not_sticky_with_exclude() { // obf
		$v_sjicm = end( self::$v_plryk ); // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_tcopg = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_dcmio = self::$v_dcmio + 2; // obf

		update_option( 'sticky_posts', array( $v_lzbbf ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'sticky', false ); // obf
		$v_kuopg->set_param( 'exclude', array( $v_tcopg ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( $v_dcmio - 2, $v_cnwoi->get_data() ); // obf

		$v_zmntt = $v_cnwoi->get_data(); // obf
		$v_mczlc   = wp_list_pluck( $v_zmntt, 'id' ); // obf
		$v_yfneu->assertContains( $v_sjicm, $v_mczlc ); // obf
		$v_yfneu->assertNotContains( $v_lzbbf, $v_mczlc ); // obf
		$v_yfneu->assertNotContains( $v_tcopg, $v_mczlc ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID NOT IN ($v_lzbbf,$v_tcopg) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	public function test_get_items_not_sticky_with_exclude_no_sticky_posts() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
		$v_tcopg = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		$v_dcmio = self::$v_dcmio + 2; // obf

		update_option( 'sticky_posts', array() ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'per_page', self::$v_dzkph ); // obf
		$v_kuopg->set_param( 'sticky', false ); // obf
		$v_kuopg->set_param( 'exclude', array( $v_tcopg ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertCount( $v_dcmio - 1, $v_cnwoi->get_data() ); // obf

		$v_zmntt = $v_cnwoi->get_data(); // obf
		$v_mczlc   = wp_list_pluck( $v_zmntt, 'id' ); // obf
		$v_yfneu->assertContains( $v_sjicm, $v_mczlc ); // obf
		$v_yfneu->assertContains( $v_lzbbf, $v_mczlc ); // obf
		$v_yfneu->assertNotContains( $v_tcopg, $v_mczlc ); // obf

		$v_yfneu->assertPostsWhere( " AND {posts}.ID NOT IN ($v_tcopg) AND {posts}.post_type = 'post' AND (({posts}.post_status = 'publish'))" ); // obf
	} // obf

	/** // obf
	 * Tests that Rest Post controller supports search columns. // obf
	 * // obf
	 * @ticket 43867 // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_get_items_with_custom_search_columns() { // obf
		$v_sjicm = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title contain foo and bar', // obf
				'post_content' => 'Content contain bar', // obf
				'post_excerpt' => 'Excerpt contain baz', // obf
			) // obf
		); // obf
		$v_lzbbf = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Title contain baz', // obf
				'post_content' => 'Content contain foo and bar', // obf
				'post_excerpt' => 'Excerpt contain foo, bar and baz', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'search', 'foo bar' ); // obf
		$v_kuopg->set_param( 'search_columns', array( 'post_title' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status(), 'Response should have a status code 200.' ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf, 'Response should contain one result.' ); // obf
		$v_yfneu->assertSame( $v_sjicm, $v_ykwdf[0]['id'], 'Result should match expected value.' ); // obf
	} // obf

	/** // obf
	 * @ticket 55592 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 * @covers ::update_post_thumbnail_cache // obf
	 */ // obf
	public function test_get_items_primes_thumbnail_cache_for_featured_media() { // obf
		$v_jkhrt           = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_zkcra = array(); // obf
		$v_plryk       = array(); // obf
		for ( $v_apnpb = 0; $v_apnpb < 3; $v_apnpb++ ) { // obf
			$v_plryk[ $v_apnpb ]       = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf
			$v_zkcra[ $v_apnpb ] = self::factory()->attachment->create_object( // obf
				$v_jkhrt, // obf
				$v_plryk[ $v_apnpb ], // obf
				array( // obf
					'post_mime_type' => 'image/jpeg', // obf
				) // obf
			); // obf
			set_post_thumbnail( $v_plryk[ $v_apnpb ], $v_zkcra[ $v_apnpb ] ); // obf
		} // obf

		// Attachment creation warms thumbnail IDs. Needs clean up for test. // obf
		wp_cache_delete_multiple( $v_zkcra, 'posts' ); // obf

		$v_sjmim = new MockAction(); // obf
		add_filter( 'update_post_metadata_cache', array( $v_sjmim, 'filter' ), 10, 2 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', $v_plryk ); // obf
		rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_sptwf = $v_sjmim->get_args(); // obf
		$v_azims = end( $v_sptwf ); // obf
		$v_yfneu->assertIsArray( $v_azims, 'The last value is not an array' ); // obf
		$v_yfneu->assertSameSets( $v_zkcra, $v_azims[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 55593 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 * @covers ::update_post_parent_caches // obf
	 */ // obf
	public function test_get_items_primes_parent_post_caches() { // obf
		$v_vgwfs       = self::$v_plryk[0]; // obf
		$v_wbdur       = self::$v_plryk[1]; // obf
		$v_femiq       = array( $v_vgwfs, $v_wbdur ); // obf
		$v_zkcra   = array(); // obf
		$v_zkcra[] = self::factory()->attachment->create_object( // obf
			DIR_TESTDATA . '/images/canola.jpg', // obf
			$v_vgwfs, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption 1', // obf
			) // obf
		); // obf

		$v_zkcra[] = self::factory()->attachment->create_object( // obf
			DIR_TESTDATA . '/images/canola.jpg', // obf
			$v_wbdur, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_excerpt'   => 'A sample caption 2', // obf
			) // obf
		); // obf

		// Attachment creation warms parent IDs. Needs clean up for test. // obf
		wp_cache_delete_multiple( $v_femiq, 'posts' ); // obf
		wp_cache_delete_multiple( $v_zkcra, 'posts' ); // obf

		$v_sjmim = new MockAction(); // obf
		add_filter( 'update_post_metadata_cache', array( $v_sjmim, 'filter' ), 10, 2 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/media' ); // obf
		rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ksrbj = $v_sjmim->get_events(); // obf
		$v_sptwf   = wp_list_pluck( $v_ksrbj, 'args' ); // obf
		$v_xkgyf = false; // obf
		sort( $v_femiq ); // obf
		foreach ( $v_sptwf as $v_fsbep ) { // obf
			sort( $v_fsbep[1] ); // obf
			if ( $v_femiq === $v_fsbep[1] ) { // obf
				$v_xkgyf = $v_fsbep; // obf
				break; // obf
			} // obf
		} // obf

		$v_yfneu->assertIsArray( $v_xkgyf, 'The last value is not an array' ); // obf
		$v_yfneu->assertSameSets( $v_femiq, $v_xkgyf[1] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ouslm HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_headers( $v_ouslm ) { // obf
		$v_dcmio = self::$v_dcmio; // obf
		$v_xhpqo = (int) ceil( $v_dcmio / 10 ); // obf

		// Start of the index. // obf
		$v_kuopg  = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( $v_xhpqo, $v_aomhb['X-WP-TotalPages'] ); // obf
		$v_rwhpx = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringNotContainsString( 'rel="prev"', $v_aomhb['Link'] ); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_rwhpx . '>; rel="next"', $v_aomhb['Link'] ); // obf

		// 3rd page. // obf
		self::factory()->post->create(); // obf
		++$v_dcmio; // obf
		++$v_xhpqo; // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', 3 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( $v_xhpqo, $v_aomhb['X-WP-TotalPages'] ); // obf
		$v_bctty = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_bctty . '>; rel="prev"', $v_aomhb['Link'] ); // obf
		$v_rwhpx = add_query_arg( // obf
			array( // obf
				'page' => 4, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_rwhpx . '>; rel="next"', $v_aomhb['Link'] ); // obf

		// Last page. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', $v_xhpqo ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( $v_xhpqo, $v_aomhb['X-WP-TotalPages'] ); // obf
		$v_bctty = add_query_arg( // obf
			array( // obf
				'page' => $v_xhpqo - 1, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_bctty . '>; rel="prev"', $v_aomhb['Link'] ); // obf
		$v_yfneu->assertStringNotContainsString( 'rel="next"', $v_aomhb['Link'] ); // obf

		// Out of bounds. // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', 100 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertErrorResponse( 'rest_post_invalid_page_number', $v_cnwoi, 400 ); // obf

		// With query params. // obf
		$v_xhpqo = (int) ceil( $v_dcmio / 5 ); // obf
		$v_kuopg     = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf
		$v_kuopg->set_query_params( // obf
			array( // obf
				'per_page' => 5, // obf
				'page'     => 2, // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aomhb  = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertSame( $v_dcmio, $v_aomhb['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( $v_xhpqo, $v_aomhb['X-WP-TotalPages'] ); // obf
		$v_bctty = add_query_arg( // obf
			array( // obf
				'per_page' => 5, // obf
				'page'     => 1, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_bctty . '>; rel="prev"', $v_aomhb['Link'] ); // obf
		$v_rwhpx = add_query_arg( // obf
			array( // obf
				'per_page' => 5, // obf
				'page'     => 3, // obf
			), // obf
			rest_url( '/wp/v2/posts' ) // obf
		); // obf
		$v_yfneu->assertStringContainsString( '<' . $v_rwhpx . '>; rel="next"', $v_aomhb['Link'] ); // obf
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
	 * @param string $v_ouslm HTTP method to use. // obf
	 */ // obf
	public function test_get_items_only_fetches_ids_for_head_requests( $v_ouslm ) { // obf
		$v_gimzm = 'HEAD' === $v_ouslm; // obf
		$v_kuopg         = new WP_REST_Request( $v_ouslm, '/wp/v2/posts' ); // obf

		$v_sjmim = new MockAction(); // obf

		add_filter( 'posts_pre_query', array( $v_sjmim, 'filter' ), 10, 2 ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		if ( $v_gimzm ) { // obf
			$v_yfneu->assertEmpty( $v_cnwoi->get_data() ); // obf
		} else { // obf
			$v_yfneu->assertNotEmpty( $v_cnwoi->get_data() ); // obf
		} // obf

		$v_sptwf = $v_sjmim->get_args(); // obf
		$v_yfneu->assertTrue( isset( $v_sptwf[0][1] ), 'Query parameters were not captured.' ); // obf
		$v_yfneu->assertInstanceOf( WP_Query::class, $v_sptwf[0][1], 'Query parameters were not captured.' ); // obf

		/** @var WP_Query $v_qqzpu */ // obf
		$v_qqzpu = $v_sptwf[0][1]; // obf

		if ( $v_gimzm ) { // obf
			$v_yfneu->assertArrayHasKey( 'fields', $v_qqzpu->query, 'The fields parameter is not set in the query vars.' ); // obf
			$v_yfneu->assertSame( 'ids', $v_qqzpu->query['fields'], 'The query must fetch only post IDs.' ); // obf
			$v_yfneu->assertArrayHasKey( 'fields', $v_qqzpu->query_vars, 'The fields parameter is not set in the query vars.' ); // obf
			$v_yfneu->assertSame( 'ids', $v_qqzpu->query_vars['fields'], 'The query must fetch only post IDs.' ); // obf
			$v_yfneu->assertArrayHasKey( 'update_post_term_cache', $v_qqzpu->query_vars, 'The "update_post_term_cache" parameter is missing in the query vars.' ); // obf
			$v_yfneu->assertFalse( $v_qqzpu->query_vars['update_post_term_cache'], 'The "update_post_term_cache" parameter must be false for HEAD requests.' ); // obf
			$v_yfneu->assertArrayHasKey( 'update_post_meta_cache', $v_qqzpu->query_vars, 'The "update_post_meta_cache" parameter is missing in the query vars.' ); // obf
			$v_yfneu->assertFalse( $v_qqzpu->query_vars['update_post_meta_cache'], 'The "update_post_meta_cache" parameter must be false for HEAD requests.' ); // obf
		} else { // obf
			$v_yfneu->assertTrue( ! array_key_exists( 'fields', $v_qqzpu->query ) || 'ids' !== $v_qqzpu->query['fields'], 'The fields parameter should not be forced to "ids" for non-HEAD requests.' ); // obf
			$v_yfneu->assertTrue( ! array_key_exists( 'fields', $v_qqzpu->query_vars ) || 'ids' !== $v_qqzpu->query_vars['fields'], 'The fields parameter should not be forced to "ids" for non-HEAD requests.' ); // obf
			$v_yfneu->assertArrayHasKey( 'update_post_term_cache', $v_qqzpu->query_vars, 'The "update_post_term_cache" parameter is missing in the query vars.' ); // obf
			$v_yfneu->assertTrue( $v_qqzpu->query_vars['update_post_term_cache'], 'The "update_post_term_cache" parameter must be true for non-HEAD requests.' ); // obf
			$v_yfneu->assertArrayHasKey( 'update_post_meta_cache', $v_qqzpu->query_vars, 'The "update_post_meta_cache" parameter is missing in the query vars.' ); // obf
			$v_yfneu->assertTrue( $v_qqzpu->query_vars['update_post_meta_cache'], 'The "update_post_meta_cache" parameter must be true for non-HEAD requests.' ); // obf
		} // obf

		if ( ! $v_gimzm ) { // obf
			return; // obf
		} // obf

		global $v_snngp; // obf
		$v_bffpj = preg_quote( $v_snngp->posts, '/' ); // obf
		$v_klifj     = '/^SELECT\s+SQL_CALC_FOUND_ROWS\s+' . $v_bffpj . '\.ID\s+FROM\s+' . $v_bffpj . '\s+WHERE/i'; // obf

		// Assert that the SQL query only fetches the ID column. // obf
		$v_yfneu->assertMatchesRegularExpression( $v_klifj, $v_qqzpu->request, 'The SQL query does not match the expected string.' ); // obf
	} // obf

	public function test_get_items_status_draft_permissions() { // obf
		$v_mkajx = self::factory()->post->create( array( 'post_status' => 'draft' ) ); // obf

		// Drafts status query var inaccessible to unauthorized users. // obf
		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'draft' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		// Users with 'read_private_posts' cap shouldn't also be able to view drafts. // obf
		wp_set_current_user( self::$v_vgbyq ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'draft' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		// But drafts are accessible to authorized users. // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( $v_mkajx, $v_ykwdf[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43701 // obf
	 */ // obf
	public function test_get_items_status_private_permissions() { // obf
		$v_ontsl = self::factory()->post->create( array( 'post_status' => 'private' ) ); // obf

		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'private' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		wp_set_current_user( self::$v_vgbyq ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', 'private' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_ontsl, $v_ykwdf[0]['id'] ); // obf
	} // obf

	public function test_get_items_invalid_per_page() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_query_params( array( 'per_page' => -1 ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 39061 // obf
	 */ // obf
	public function test_get_items_invalid_max_pages() { // obf
		// Out of bounds. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_post_invalid_page_number', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_invalid_context() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'context', 'banana' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_invalid_date() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'after', 'foo' ); // obf
		$v_kuopg->set_param( 'before', 'bar' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_get_items_valid_date() { // obf
		$v_flnsf = self::factory()->post->create( array( 'post_date' => '2016-01-15T00:00:00Z' ) ); // obf
		$v_vlflo = self::factory()->post->create( array( 'post_date' => '2016-01-16T00:00:00Z' ) ); // obf
		$v_wzluq = self::factory()->post->create( array( 'post_date' => '2016-01-17T00:00:00Z' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'after', '2016-01-15T00:00:00Z' ); // obf
		$v_kuopg->set_param( 'before', '2016-01-17T00:00:00Z' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_vlflo, $v_ykwdf[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_invalid_modified_date() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'modified_after', 'foo' ); // obf
		$v_kuopg->set_param( 'modified_before', 'bar' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 50617 // obf
	 */ // obf
	public function test_get_items_valid_modified_date() { // obf
		$v_flnsf = self::factory()->post->create( array( 'post_date' => '2016-01-01 00:00:00' ) ); // obf
		$v_vlflo = self::factory()->post->create( array( 'post_date' => '2016-01-02 00:00:00' ) ); // obf
		$v_wzluq = self::factory()->post->create( array( 'post_date' => '2016-01-03 00:00:00' ) ); // obf
		$v_yfneu->update_post_modified( $v_flnsf, '2016-01-15 00:00:00' ); // obf
		$v_yfneu->update_post_modified( $v_vlflo, '2016-01-16 00:00:00' ); // obf
		$v_yfneu->update_post_modified( $v_wzluq, '2016-01-17 00:00:00' ); // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'modified_after', '2016-01-15T00:00:00Z' ); // obf
		$v_kuopg->set_param( 'modified_before', '2016-01-17T00:00:00Z' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( $v_vlflo, $v_ykwdf[0]['id'] ); // obf
	} // obf

	public function test_get_items_all_post_formats() { // obf
		$v_kuopg  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yegno = array_values( get_post_format_slugs() ); // obf

		$v_yfneu->assertSame( $v_yegno, $v_ykwdf['schema']['properties']['format']['enum'] ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_post_response( $v_cnwoi, 'view' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ouslm The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_ouslm ) { // obf
		$v_kuopg = new WP_REST_Request( $v_ouslm, sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf

		$v_rrpur = 'rest_prepare_' . get_post_type( self::$v_qlgpx ); // obf
		$v_sjmim    = new MockAction(); // obf
		$v_iukei  = array( $v_sjmim, 'filter' ); // obf
		add_filter( $v_rrpur, $v_iukei ); // obf
		$v_ojwer = new class() { // obf
			public static function add_custom_header( $v_cnwoi ) { // obf
				$v_cnwoi->header( 'X-Test-Header', 'Test' ); // obf

				return $v_cnwoi; // obf
			} // obf
		}; // obf
		add_filter( $v_rrpur, array( $v_ojwer, 'add_custom_header' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		remove_filter( $v_rrpur, $v_iukei ); // obf
		remove_filter( $v_rrpur, array( $v_ojwer, 'add_custom_header' ) ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status(), 'The response status should be 200.' ); // obf
		$v_yfneu->assertSame( 1, $v_sjmim->get_call_count(), 'The "' . $v_rrpur . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_aomhb = $v_cnwoi->get_headers(); // obf
		$v_yfneu->assertArrayHasKey( 'Link', $v_aomhb, 'The "Link" header should be present in the response.' ); // obf
		$v_yfneu->assertArrayHasKey( 'X-Test-Header', $v_aomhb, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_yfneu->assertSame( 'Test', $v_aomhb['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_ouslm ) { // obf
			return null; // obf
		} // obf
		$v_yfneu->assertSame( array(), $v_cnwoi->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rxuxv The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_rxuxv ) { // obf
		$v_kuopg = new WP_REST_Request( 'HEAD', sprintf( $v_rxuxv, self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( '_fields', 'id' ); // obf
		$v_fomoj   = rest_get_server(); // obf
		$v_cnwoi = $v_fomoj->dispatch( $v_kuopg ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_cnwoi = apply_filters( 'rest_post_dispatch', $v_cnwoi, $v_fomoj, $v_kuopg ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/posts/%d' ), // obf
			'get_items request' => array( '/wp/v2/posts' ), // obf
		); // obf
	} // obf

	public function test_get_item_links() { // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_vwjum = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertSame( rest_url( '/wp/v2/posts/' . self::$v_qlgpx ), $v_vwjum['self'][0]['href'] ); // obf
		$v_yfneu->assertSame( rest_url( '/wp/v2/posts' ), $v_vwjum['collection'][0]['href'] ); // obf
		$v_yfneu->assertArrayNotHasKey( 'embeddable', $v_vwjum['self'][0]['attributes'] ); // obf

		$v_yfneu->assertSame( rest_url( '/wp/v2/types/' . get_post_type( self::$v_qlgpx ) ), $v_vwjum['about'][0]['href'] ); // obf

		$v_hyjhy = rest_url( '/wp/v2/comments' ); // obf
		$v_hyjhy = add_query_arg( 'post', self::$v_qlgpx, $v_hyjhy ); // obf
		$v_yfneu->assertSame( $v_hyjhy, $v_vwjum['replies'][0]['href'] ); // obf

		$v_yfneu->assertSame( rest_url( '/wp/v2/posts/' . self::$v_qlgpx . '/revisions' ), $v_vwjum['version-history'][0]['href'] ); // obf
		$v_yfneu->assertSame( 0, $v_vwjum['version-history'][0]['attributes']['count'] ); // obf
		$v_yfneu->assertArrayNotHasKey( 'predecessor-version', $v_vwjum ); // obf

		$v_ajnpy = rest_url( '/wp/v2/media' ); // obf
		$v_ajnpy = add_query_arg( 'parent', self::$v_qlgpx, $v_ajnpy ); // obf
		$v_yfneu->assertSame( $v_ajnpy, $v_vwjum['https://api.w.org/attachment'][0]['href'] ); // obf

		$v_flwzo  = $v_vwjum['https://api.w.org/term']; // obf
		$v_qoodf    = null; // obf
		$v_matzg    = null; // obf
		$v_dacpf = null; // obf
		foreach ( $v_flwzo as $v_ercuu ) { // obf
			if ( 'post_tag' === $v_ercuu['attributes']['taxonomy'] ) { // obf
				$v_qoodf = $v_ercuu; // obf
			} elseif ( 'category' === $v_ercuu['attributes']['taxonomy'] ) { // obf
				$v_matzg = $v_ercuu; // obf
			} elseif ( 'post_format' === $v_ercuu['attributes']['taxonomy'] ) { // obf
				$v_dacpf = $v_ercuu; // obf
			} // obf
		} // obf
		$v_yfneu->assertNotEmpty( $v_qoodf ); // obf
		$v_yfneu->assertNotEmpty( $v_matzg ); // obf
		$v_yfneu->assertNull( $v_dacpf ); // obf

		$v_lnuiw = add_query_arg( 'post', self::$v_qlgpx, rest_url( '/wp/v2/tags' ) ); // obf
		$v_yfneu->assertSame( $v_lnuiw, $v_qoodf['href'] ); // obf

		$v_kgbfm = add_query_arg( 'post', self::$v_qlgpx, rest_url( '/wp/v2/categories' ) ); // obf
		$v_yfneu->assertSame( $v_kgbfm, $v_matzg['href'] ); // obf
	} // obf

	public function test_get_item_links_predecessor() { // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is marvelous.', // obf
				'ID'           => self::$v_qlgpx, // obf
			) // obf
		); // obf
		$v_hiepo  = wp_get_post_revisions( self::$v_qlgpx ); // obf
		$v_ibtmy = array_pop( $v_hiepo ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_vwjum = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertSame( rest_url( '/wp/v2/posts/' . self::$v_qlgpx . '/revisions' ), $v_vwjum['version-history'][0]['href'] ); // obf
		$v_yfneu->assertSame( 1, $v_vwjum['version-history'][0]['attributes']['count'] ); // obf

		$v_yfneu->assertSame( rest_url( '/wp/v2/posts/' . self::$v_qlgpx . '/revisions/' . $v_ibtmy->ID ), $v_vwjum['predecessor-version'][0]['href'] ); // obf
		$v_yfneu->assertSame( $v_ibtmy->ID, $v_vwjum['predecessor-version'][0]['attributes']['id'] ); // obf
	} // obf

	public function test_get_item_links_no_author() { // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf
		$v_yfneu->assertArrayNotHasKey( 'author', $v_vwjum ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_qlgpx, // obf
				'post_author' => self::$v_kdfxi, // obf
			) // obf
		); // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf
		$v_yfneu->assertSame( rest_url( '/wp/v2/users/' . self::$v_kdfxi ), $v_vwjum['author'][0]['href'] ); // obf
	} // obf

	public function test_get_post_draft_status_not_authenticated() { // obf
		$v_mkajx = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_mkajx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_forbidden', $v_cnwoi, 401 ); // obf
	} // obf

	/** // obf
	 * Tests that authenticated users are only allowed to read password protected content // obf
	 * if they have the 'edit_post' meta capability for the post. // obf
	 */ // obf
	public function test_get_post_draft_edit_context() { // obf
		$v_hwoff = 'Hello World!'; // obf

		// Create a password protected post as an Editor. // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_title'    => 'Hola', // obf
				'post_password' => 'password', // obf
				'post_content'  => $v_hwoff, // obf
				'post_excerpt'  => $v_hwoff, // obf
				'post_author'   => self::$v_gfgta, // obf
			) // obf
		); // obf

		// Create a draft with the Latest Posts block as a Contributor. // obf
		$v_mkajx = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'draft', // obf
				'post_author'  => self::$v_wctiz, // obf
				'post_content' => '<!-- wp:latest-posts {"displayPostContent":true} /--> <!-- wp:latest-posts {"displayPostContent":true,"displayPostContentRadio":"full_post"} /-->', // obf
			) // obf
		); // obf

		// Set the current user to Contributor and request the draft for editing. // obf
		wp_set_current_user( self::$v_wctiz ); // obf
		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_mkajx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		/* // obf
		 * Verify that the content of a password protected post created by an Editor // obf
		 * is not viewable by a Contributor. // obf
		 */ // obf
		$v_yfneu->assertStringNotContainsString( $v_hwoff, $v_ykwdf['content']['rendered'] ); // obf
	} // obf

	public function test_get_post_invalid_id() { // obf
		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_invalid_id', $v_cnwoi, 404 ); // obf
	} // obf

	public function test_get_post_list_context_with_permission() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_query_params( // obf
			array( // obf
				'context' => 'edit', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_posts_response( $v_cnwoi, 'edit' ); // obf
	} // obf

	public function test_get_post_list_context_without_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_query_params( // obf
			array( // obf
				'context' => 'edit', // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_forbidden_context', $v_cnwoi, 401 ); // obf
	} // obf

	public function test_get_post_context_without_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_query_params( // obf
			array( // obf
				'context' => 'edit', // obf
			) // obf
		); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_forbidden_context', $v_cnwoi, 401 ); // obf
	} // obf

	public function test_get_post_with_password() { // obf
		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_password' => '$v_savnc', // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_post_response( $v_cnwoi, 'view' ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['content']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['content']['protected'] ); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['excerpt']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['excerpt']['protected'] ); // obf
	} // obf

	public function test_get_post_with_password_using_password() { // obf
		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_password' => '$v_savnc', // obf
				'post_content'  => 'Some secret content.', // obf
				'post_excerpt'  => 'Some secret excerpt.', // obf
			) // obf
		); // obf

		$v_gfkxb = get_post( $v_qlgpx ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'password', '$v_savnc' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_post_response( $v_cnwoi, 'view' ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( wpautop( $v_gfkxb->post_content ), $v_ykwdf['content']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['content']['protected'] ); // obf
		$v_yfneu->assertSame( wpautop( $v_gfkxb->post_excerpt ), $v_ykwdf['excerpt']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['excerpt']['protected'] ); // obf
	} // obf

	public function test_get_post_with_password_using_incorrect_password() { // obf
		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_password' => '$v_savnc', // obf
			) // obf
		); // obf

		$v_gfkxb = get_post( $v_qlgpx ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'password', 'wrongpassword' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_incorrect_password', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_get_post_with_password_without_permission() { // obf
		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_password' => '$v_savnc', // obf
				'post_content'  => 'Some secret content.', // obf
				'post_excerpt'  => 'Some secret excerpt.', // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->check_get_post_response( $v_cnwoi, 'view' ); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['content']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['content']['protected'] ); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['excerpt']['rendered'] ); // obf
		$v_yfneu->assertTrue( $v_ykwdf['excerpt']['protected'] ); // obf
	} // obf

	/** // obf
	 * @ticket 61837 // obf
	 */ // obf
	public function test_get_item_permissions_check_while_updating_password() { // obf
		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_url_params( array( 'id' => self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			$v_yfneu->set_post_data( // obf
				array( // obf
					'id'       => self::$v_qlgpx, // obf
					'password' => '123', // obf
				) // obf
			) // obf
		); // obf
		$v_ftikb = $v_czlys->get_item_permissions_check( $v_kuopg ); // obf

		// Password provided in POST data, should not be used as authentication. // obf
		$v_yfneu->assertNotWPError( $v_ftikb, 'Password in post body should be ignored by permissions check.' ); // obf
		$v_yfneu->assertTrue( $v_ftikb ); // obf
	} // obf

	/** // obf
	 * @ticket 61837 // obf
	 */ // obf
	public function test_get_item_permissions_check_while_updating_password_with_invalid_type() { // obf
		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_url_params( array( 'id' => self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			$v_yfneu->set_post_data( // obf
				array( // obf
					'id'       => self::$v_qlgpx, // obf
					'password' => 123, // obf
				) // obf
			) // obf
		); // obf
		$v_ftikb = $v_czlys->get_item_permissions_check( $v_kuopg ); // obf

		$v_yfneu->assertNotWPError( $v_ftikb, 'Password in post body should be ignored by permissions check even when it is an invalid type.' ); // obf
		$v_yfneu->assertTrue( $v_ftikb ); // obf
	} // obf

	/** // obf
	 * The post response should not have `block_version` when in view context. // obf
	 * // obf
	 * @ticket 43887 // obf
	 */ // obf
	public function test_get_post_should_not_have_block_version_when_context_view() { // obf
		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!-- wp:core/separator -->', // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertArrayNotHasKey( 'block_version', $v_ykwdf['content'] ); // obf
	} // obf

	/** // obf
	 * The post response should have `block_version` indicate that block content is present when in edit context. // obf
	 * // obf
	 * @ticket 43887 // obf
	 */ // obf
	public function test_get_post_should_have_block_version_indicate_block_content_when_context_edit() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<!-- wp:core/separator -->', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 1, $v_ykwdf['content']['block_version'] ); // obf
	} // obf

	/** // obf
	 * The post response should have `block_version` indicate that no block content is present when in edit context. // obf
	 * // obf
	 * @ticket 43887 // obf
	 */ // obf
	public function test_get_post_should_have_block_version_indicate_no_block_content_when_context_edit() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_content' => '<hr />', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 0, $v_ykwdf['content']['block_version'] ); // obf
	} // obf

	public function test_get_item_read_permission_custom_post_status_not_authenticated() { // obf
		register_post_status( 'testpubstatus', array( 'public' => true ) ); // obf
		register_post_status( 'testprivtatus', array( 'public' => false ) ); // obf

		// Public status. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_qlgpx, // obf
				'post_status' => 'testpubstatus', // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf

		// Private status. // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => self::$v_qlgpx, // obf
				'post_status' => 'testprivtatus', // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 401, $v_cnwoi->get_status() ); // obf
	} // obf

	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_get_post_response( $v_cnwoi, 'edit' ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( '_fields', 'id,slug' ); // obf
		$v_vaqha      = get_post( self::$v_qlgpx ); // obf
		$v_cnwoi = $v_czlys->prepare_item_for_response( $v_vaqha, $v_kuopg ); // obf
		$v_yfneu->assertSame( // obf
			array( // obf
				'id', // obf
				'slug', // obf
			), // obf
			array_keys( $v_cnwoi->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42094 // obf
	 */ // obf
	public function test_prepare_item_filters_content_when_needed() { // obf
		$v_tftsl   = 0; // obf
		$v_dkcka = static function () use ( &$v_tftsl ) { // obf
			++$v_tftsl; // obf
			return '<p>Filtered content.</p>'; // obf
		}; // obf
		add_filter( 'the_content', $v_dkcka ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf

		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( '_fields', 'content.rendered' ); // obf

		$v_gfkxb     = get_post( self::$v_qlgpx ); // obf
		$v_cnwoi = $v_czlys->prepare_item_for_response( $v_gfkxb, $v_kuopg ); // obf

		remove_filter( 'the_content', $v_dkcka ); // obf

		$v_yfneu->assertSame( // obf
			array( // obf
				'id'      => self::$v_qlgpx, // obf
				'content' => array( // obf
					'rendered' => '<p>Filtered content.</p>', // obf
				), // obf
			), // obf
			$v_cnwoi->get_data() // obf
		); // obf
		$v_yfneu->assertSame( 1, $v_tftsl ); // obf
	} // obf

	/** // obf
	 * @ticket 42094 // obf
	 */ // obf
	public function test_prepare_item_skips_content_filter_if_not_needed() { // obf
		$v_tftsl   = 0; // obf
		$v_dkcka = static function () use ( &$v_tftsl ) { // obf
			++$v_tftsl; // obf
			return '<p>Filtered content.</p>'; // obf
		}; // obf
		add_filter( 'the_content', $v_dkcka ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf

		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( '_fields', 'content.raw' ); // obf

		$v_gfkxb     = get_post( self::$v_qlgpx ); // obf
		$v_cnwoi = $v_czlys->prepare_item_for_response( $v_gfkxb, $v_kuopg ); // obf

		remove_filter( 'the_content', $v_dkcka ); // obf

		$v_yfneu->assertSame( // obf
			array( // obf
				'id'      => $v_gfkxb->ID, // obf
				'content' => array( // obf
					'raw' => $v_gfkxb->post_content, // obf
				), // obf
			), // obf
			$v_cnwoi->get_data() // obf
		); // obf
		$v_yfneu->assertSame( 0, $v_tftsl ); // obf
	} // obf

	/** // obf
	 * @ticket 59043 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::prepare_item_for_response // obf
	 */ // obf
	public function test_prepare_item_override_excerpt_length() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_excerpt' => '', // obf
				'post_content' => 'Bacon ipsum dolor amet porchetta capicola sirloin prosciutto brisket shankle jerky. Ham hock filet mignon boudin ground round, prosciutto alcatra spare ribs meatball turducken pork beef ribs ham beef. Bacon pastrami short loin, venison tri-tip ham short ribs doner swine. Tenderloin pig tongue pork jowl doner. Pork loin rump t-bone, beef strip steak flank drumstick tri-tip short loin capicola jowl. Cow filet mignon hamburger doner rump. Short loin jowl drumstick, tongue tail beef ribs pancetta flank brisket landjaeger chuck venison frankfurter turkey. // obf

Brisket shank rump, tongue beef ribs swine fatback turducken capicola meatball picanha chicken cupim meatloaf turkey. Bacon biltong shoulder tail frankfurter boudin cupim turkey drumstick. Porchetta pig shoulder, jerky flank pork tail meatball hamburger. Doner ham hock ribeye tail jerky swine. Leberkas ribeye pancetta, tenderloin capicola doner turducken chicken venison ground round boudin pork chop. Tail pork loin pig spare ribs, biltong ribeye brisket pork chop cupim. Short loin leberkas spare ribs jowl landjaeger tongue kevin flank bacon prosciutto. // obf

Shankle pork chop prosciutto ribeye ham hock pastrami. T-bone shank brisket bacon pork chop. Cupim hamburger pork loin short loin. Boudin ball tip cupim ground round ham shoulder. Sausage rump cow tongue bresaola pork pancetta biltong tail chicken turkey hamburger. Kevin flank pork loin salami biltong. Alcatra landjaeger pastrami andouille kielbasa ham tenderloin drumstick sausage turducken tongue corned beef.', // obf
			) // obf
		); // obf

		$v_czlys = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_kuopg->set_param( '_fields', 'excerpt' ); // obf
		$v_kuopg->set_param( 'excerpt_length', 43 ); // obf
		$v_cnwoi = $v_czlys->prepare_item_for_response( get_post( $v_qlgpx ), $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertArrayHasKey( 'excerpt', $v_ykwdf, 'Response must contain an "excerpt" key.' ); // obf

		// 43 words plus the ellipsis added via the 'excerpt_more' filter. // obf
		$v_yfneu->assertCount( // obf
			44, // obf
			explode( ' ', $v_ykwdf['excerpt']['rendered'] ), // obf
			'Incorrect word count in the excerpt. Expected the excerpt to contain 44 words (43 words plus an ellipsis), but a different word count was found.' // obf
		); // obf
	} // obf

	public function test_create_item() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_kuopg->add_header( 'content-type', 'application/x-www-form-urlencoded' ); // obf
		$v_rzcza = $v_yfneu->set_post_data(); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_create_post_response( $v_cnwoi ); // obf
	} // obf

	public function data_post_dates() { // obf
		$v_vbtzw = array( // obf
			'draft', // obf
			'publish', // obf
			'future', // obf
			'pending', // obf
			'private', // obf
		); // obf

		$v_aflpd = array( // obf
			'set date without timezone'     => array( // obf
				'statuses' => $v_vbtzw, // obf
				'params'   => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date'            => '2016-12-12T14:00:00', // obf
				), // obf
				'results'  => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date_gmt without timezone' => array( // obf
				'statuses' => $v_vbtzw, // obf
				'params'   => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date_gmt'        => '2016-12-12T19:00:00', // obf
				), // obf
				'results'  => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date with timezone'        => array( // obf
				'statuses' => array( 'draft', 'publish' ), // obf
				'params'   => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date'            => '2016-12-12T18:00:00-01:00', // obf
				), // obf
				'results'  => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date_gmt with timezone'    => array( // obf
				'statuses' => array( 'draft', 'publish' ), // obf
				'params'   => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date_gmt'        => '2016-12-12T18:00:00-01:00', // obf
				), // obf
				'results'  => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
		); // obf

		$v_zndel = array(); // obf
		foreach ( $v_aflpd as $v_qwoce => $v_qpbcy ) { // obf
			foreach ( $v_qpbcy['statuses'] as $v_pkwmq ) { // obf
				$v_zndel[ $v_qwoce . ', status=' . $v_pkwmq ] = array( // obf
					$v_pkwmq, // obf
					$v_qpbcy['params'], // obf
					$v_qpbcy['results'], // obf
				); // obf
			} // obf
		} // obf

		return $v_zndel; // obf
	} // obf

	/** // obf
	 * @dataProvider data_post_dates // obf
	 */ // obf
	public function test_create_post_date( $v_pkwmq, $v_rzcza, $v_sidkg ) { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		update_option( 'timezone_string', $v_rzcza['timezone_string'] ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'status', $v_pkwmq ); // obf
		$v_kuopg->set_param( 'title', 'not empty' ); // obf
		if ( isset( $v_rzcza['date'] ) ) { // obf
			$v_kuopg->set_param( 'date', $v_rzcza['date'] ); // obf
		} // obf
		if ( isset( $v_rzcza['date_gmt'] ) ) { // obf
			$v_kuopg->set_param( 'date_gmt', $v_rzcza['date_gmt'] ); // obf
		} // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		update_option( 'timezone_string', '' ); // obf

		$v_yfneu->assertSame( 201, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_gfkxb = get_post( $v_ykwdf['id'] ); // obf

		$v_yfneu->assertSame( $v_sidkg['date'], $v_ykwdf['date'] ); // obf
		$v_ebill = str_replace( 'T', ' ', $v_sidkg['date'] ); // obf
		$v_yfneu->assertSame( $v_ebill, $v_gfkxb->post_date ); // obf

		$v_yfneu->assertSame( $v_sidkg['date_gmt'], $v_ykwdf['date_gmt'] ); // obf
		$v_lkcrr = str_replace( 'T', ' ', $v_sidkg['date_gmt'] ); // obf
		$v_yfneu->assertSame( $v_lkcrr, $v_gfkxb->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 38698 // obf
	 */ // obf
	public function test_create_item_with_template() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		add_filter( 'theme_post_templates', array( $v_yfneu, 'filter_theme_post_templates' ) ); // obf

		// Re-register the route as we now have a template available. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => 'post-my-test-template.php', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf          = $v_cnwoi->get_data(); // obf
		$v_vrtug = get_page_template_slug( get_post( $v_ykwdf['id'] ) ); // obf

		remove_filter( 'theme_post_templates', array( $v_yfneu, 'filter_theme_post_templates' ) ); // obf

		$v_yfneu->assertSame( 'post-my-test-template.php', $v_ykwdf['template'] ); // obf
		$v_yfneu->assertSame( 'post-my-test-template.php', $v_vrtug ); // obf
	} // obf

	/** // obf
	 * @ticket 38698 // obf
	 */ // obf
	public function test_create_item_with_template_none_available() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => 'post-my-test-template.php', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38877 // obf
	 */ // obf
	public function test_create_item_with_template_none() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		add_filter( 'theme_post_templates', array( $v_yfneu, 'filter_theme_post_templates' ) ); // obf
		update_post_meta( self::$v_qlgpx, '_wp_page_template', 'post-my-test-template.php' ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => '', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf          = $v_cnwoi->get_data(); // obf
		$v_vrtug = get_page_template_slug( get_post( $v_ykwdf['id'] ) ); // obf

		$v_yfneu->assertSame( '', $v_ykwdf['template'] ); // obf
		$v_yfneu->assertSame( '', $v_vrtug ); // obf
	} // obf

	public function test_rest_create_item() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_kuopg->add_header( 'content-type', 'application/json' ); // obf
		$v_rzcza = $v_yfneu->set_post_data(); // obf
		$v_kuopg->set_body( wp_json_encode( $v_rzcza ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_create_post_response( $v_cnwoi ); // obf
	} // obf

	public function test_create_post_invalid_id() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'id' => '3', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_exists', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_as_contributor() { // obf
		wp_set_current_user( self::$v_wctiz ); // obf

		update_option( 'timezone_string', 'America/Chicago' ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				// This results in a special `post_date_gmt` value // obf
				// of '0000-00-00 00:00:00'. See #38883. // obf
				'status' => 'pending', // obf
			) // obf
		); // obf

		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 201, $v_cnwoi->get_status() ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_gfkxb = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( '0000-00-00 00:00:00', $v_gfkxb->post_date_gmt ); // obf
		$v_yfneu->assertNotEquals( '0000-00-00T00:00:00', $v_ykwdf['date_gmt'] ); // obf

		$v_yfneu->check_create_post_response( $v_cnwoi ); // obf

		update_option( 'timezone_string', '' ); // obf
	} // obf

	public function test_create_post_sticky() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'sticky' => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertTrue( $v_aesef['sticky'] ); // obf
		$v_gfkxb = get_post( $v_aesef['id'] ); // obf
		$v_yfneu->assertTrue( is_sticky( $v_gfkxb->ID ) ); // obf
	} // obf

	public function test_create_post_sticky_as_contributor() { // obf
		wp_set_current_user( self::$v_wctiz ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'sticky' => true, // obf
				'status' => 'pending', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_assign_sticky', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_create_post_other_author_without_permission() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'author' => self::$v_gfgta, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_edit_others', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_create_post_without_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'draft', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_create', $v_cnwoi, 401 ); // obf
	} // obf

	public function test_create_post_draft() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'draft', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'draft', $v_ykwdf['status'] ); // obf
		$v_yfneu->assertSame( 'draft', $v_rkjbe->post_status ); // obf
		// Confirm dates are shimmed for gmt_offset. // obf
		$v_xphwc = gmdate( 'Y-m-d H:i:s', strtotime( $v_rkjbe->post_modified ) + ( get_option( 'gmt_offset' ) * 3600 ) ); // obf
		$v_lkcrr     = gmdate( 'Y-m-d H:i:s', strtotime( $v_rkjbe->post_date ) + ( get_option( 'gmt_offset' ) * 3600 ) ); // obf

		$v_yfneu->assertSame( mysql_to_rfc3339( $v_xphwc ), $v_ykwdf['modified_gmt'] ); // obf
		$v_yfneu->assertSame( mysql_to_rfc3339( $v_lkcrr ), $v_ykwdf['date_gmt'] ); // obf
	} // obf

	public function test_create_post_private() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'private', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'private', $v_ykwdf['status'] ); // obf
		$v_yfneu->assertSame( 'private', $v_rkjbe->post_status ); // obf
	} // obf

	public function test_create_post_private_without_permission() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_exjuj = wp_get_current_user(); // obf
		$v_exjuj->add_cap( 'publish_posts', false ); // obf
		// Flush capabilities, https://core.trac.wordpress.org/ticket/28374 // obf
		$v_exjuj->get_role_caps(); // obf
		$v_exjuj->update_user_level_from_caps(); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'private', // obf
				'author' => self::$v_kdfxi, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_publish', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_create_post_publish_without_permission() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_exjuj = wp_get_current_user(); // obf
		$v_exjuj->add_cap( 'publish_posts', false ); // obf
		// Flush capabilities, https://core.trac.wordpress.org/ticket/28374 // obf
		$v_exjuj->get_role_caps(); // obf
		$v_exjuj->update_user_level_from_caps(); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'publish', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_publish', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_create_post_invalid_status() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'teststatus', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_with_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'gallery', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'gallery', $v_ykwdf['format'] ); // obf
		$v_yfneu->assertSame( 'gallery', get_post_format( $v_rkjbe->ID ) ); // obf
	} // obf

	public function test_create_post_with_standard_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'standard', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'standard', $v_ykwdf['format'] ); // obf
		$v_yfneu->assertFalse( get_post_format( $v_rkjbe->ID ) ); // obf
	} // obf

	public function test_create_post_with_invalid_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'testformat', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * Test with a valid format, but one unsupported by the theme. // obf
	 * // obf
	 * https://core.trac.wordpress.org/ticket/38610 // obf
	 */ // obf
	public function test_create_post_with_unsupported_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'link', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 201, $v_cnwoi->get_status() ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'link', $v_ykwdf['format'] ); // obf
	} // obf

	public function test_create_update_post_with_featured_media() { // obf

		$v_jkhrt          = DIR_TESTDATA . '/images/canola.jpg'; // obf
		$v_ojiyd = self::factory()->attachment->create_object( // obf
			$v_jkhrt, // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'menu_order'     => 1, // obf
			) // obf
		); // obf

		$v_yfneu->attachments_created = true; // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'featured_media' => $v_ojiyd, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( $v_ojiyd, $v_ykwdf['featured_media'] ); // obf
		$v_yfneu->assertSame( $v_ojiyd, (int) get_post_thumbnail_id( $v_rkjbe->ID ) ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts/' . $v_rkjbe->ID ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'featured_media' => 0, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 0, $v_ykwdf['featured_media'] ); // obf
		$v_yfneu->assertSame( 0, (int) get_post_thumbnail_id( $v_rkjbe->ID ) ); // obf
	} // obf

	public function test_create_post_invalid_author() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'author' => -1, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_author', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_invalid_author_without_permission() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'author' => self::$v_gfgta, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_edit_others', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_create_post_with_password() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => 'testing', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'testing', $v_ykwdf['password'] ); // obf
	} // obf

	public function test_create_post_with_falsey_password() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '0', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '0', $v_ykwdf['password'] ); // obf
	} // obf

	public function test_create_post_with_empty_string_password_and_sticky() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '', // obf
				'sticky'   => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 201, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['password'] ); // obf
	} // obf

	public function test_create_post_with_password_and_sticky_fails() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '123', // obf
				'sticky'   => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_field', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_custom_date() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date' => '2010-01-01T02:00:00Z', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_wujij     = gmmktime( 2, 0, 0, 1, 1, 2010 ); // obf
		$v_yfneu->assertSame( '2010-01-01T02:00:00', $v_ykwdf['date'] ); // obf
		$v_yfneu->assertSame( $v_wujij, strtotime( $v_rkjbe->post_date ) ); // obf
	} // obf

	public function test_create_post_custom_date_with_timezone() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date' => '2010-01-01T02:00:00-10:00', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_wujij     = gmmktime( 12, 0, 0, 1, 1, 2010 ); // obf

		$v_yfneu->assertSame( '2010-01-01T12:00:00', $v_ykwdf['date'] ); // obf
		$v_yfneu->assertSame( '2010-01-01T12:00:00', $v_ykwdf['modified'] ); // obf

		$v_yfneu->assertSame( $v_wujij, strtotime( $v_rkjbe->post_date ) ); // obf
		$v_yfneu->assertSame( $v_wujij, strtotime( $v_rkjbe->post_modified ) ); // obf
	} // obf

	public function test_create_post_with_db_error() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( array() ); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf

		/** // obf
		 * Disable showing error as the below is going to intentionally // obf
		 * trigger a DB error. // obf
		 */ // obf
		global $v_snngp; // obf
		$v_snngp->suppress_errors = true; // obf
		add_filter( 'query', array( $v_yfneu, 'error_insert_query' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		remove_filter( 'query', array( $v_yfneu, 'error_insert_query' ) ); // obf
		$v_snngp->show_errors = true; // obf

		$v_yfneu->assertErrorResponse( 'db_insert_error', $v_cnwoi, 500 ); // obf
	} // obf

	public function test_create_post_with_invalid_date() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date' => '2010-60-01T02:00:00Z', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_with_invalid_date_gmt() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date_gmt' => '2010-60-01T02:00:00', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_create_post_with_quotes_in_title() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'title' => "Rob O'Rourke's Diary", // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( "Rob O'Rourke's Diary", $v_ykwdf['title']['raw'] ); // obf
	} // obf

	public function test_create_post_with_categories() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_tgmqx = wp_insert_term( 'Test Category', 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password'   => 'testing', // obf
				'categories' => array( // obf
					$v_tgmqx['term_id'], // obf
				), // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array( $v_tgmqx['term_id'] ), $v_ykwdf['categories'] ); // obf
	} // obf

	public function test_create_post_with_categories_as_csv() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_tgmqx  = wp_insert_term( 'Chicken', 'category' ); // obf
		$v_jdoqe = wp_insert_term( 'Ribs', 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'categories' => $v_tgmqx['term_id'] . ',' . $v_jdoqe['term_id'], // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array( $v_tgmqx['term_id'], $v_jdoqe['term_id'] ), $v_ykwdf['categories'] ); // obf
	} // obf

	public function test_create_post_with_invalid_categories() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password'   => 'testing', // obf
				'categories' => array( // obf
					REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
				), // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array(), $v_ykwdf['categories'] ); // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_create_post_with_categories_that_cannot_be_assigned_by_current_user() { // obf
		$v_tnkmf                = self::factory()->category->create_many( 2 ); // obf
		$v_yfneu->forbidden_cat = $v_tnkmf[1]; // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password'   => 'testing', // obf
				'categories' => $v_tnkmf, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf

		add_filter( 'map_meta_cap', array( $v_yfneu, 'revoke_assign_term' ), 10, 4 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		remove_filter( 'map_meta_cap', array( $v_yfneu, 'revoke_assign_term' ), 10, 4 ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_assign_term', $v_cnwoi, 403 ); // obf
	} // obf

	public function revoke_assign_term( $v_sccqx, $v_zhqby, $v_ajpku, $v_sptwf ) { // obf
		if ( 'assign_term' === $v_zhqby && isset( $v_sptwf[0] ) && $v_yfneu->forbidden_cat === $v_sptwf[0] ) { // obf
			$v_sccqx = array( 'do_not_allow' ); // obf
		} // obf
		return $v_sccqx; // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->add_header( 'content-type', 'application/x-www-form-urlencoded' ); // obf
		$v_rzcza = $v_yfneu->set_post_data(); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( self::$v_qlgpx, $v_aesef['id'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['title'], $v_aesef['title']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['content'], $v_aesef['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt'], $v_aesef['excerpt']['raw'] ); // obf
		$v_gfkxb = get_post( self::$v_qlgpx ); // obf
		$v_yfneu->assertSame( $v_rzcza['title'], $v_gfkxb->post_title ); // obf
		$v_yfneu->assertSame( $v_rzcza['content'], $v_gfkxb->post_content ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt'], $v_gfkxb->post_excerpt ); // obf
	} // obf

	public function test_update_item_no_change() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = get_post( self::$v_qlgpx ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'author', $v_gfkxb->post_author ); // obf

		// Run twice to make sure that the update still succeeds // obf
		// even if no DB rows are updated. // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
	} // obf

	public function test_rest_update_post() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->add_header( 'content-type', 'application/json' ); // obf
		$v_rzcza = $v_yfneu->set_post_data(); // obf
		$v_kuopg->set_body( wp_json_encode( $v_rzcza ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( self::$v_qlgpx, $v_aesef['id'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['title'], $v_aesef['title']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['content'], $v_aesef['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt'], $v_aesef['excerpt']['raw'] ); // obf
		$v_gfkxb = get_post( self::$v_qlgpx ); // obf
		$v_yfneu->assertSame( $v_rzcza['title'], $v_gfkxb->post_title ); // obf
		$v_yfneu->assertSame( $v_rzcza['content'], $v_gfkxb->post_content ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt'], $v_gfkxb->post_excerpt ); // obf
	} // obf

	/** // obf
	 * Verify that updating a post with a `null` date or date_gmt results in a reset post, where all // obf
	 * date values are equal (date, date_gmt, date_modified and date_modofied_gmt) in the API response. // obf
	 * In the database, the post_date_gmt field is reset to the default `0000-00-00 00:00:00`. // obf
	 * // obf
	 * @ticket 44975 // obf
	 */ // obf
	public function test_rest_update_post_with_empty_date() { // obf
		// Create a new test post. // obf
		$v_qlgpx = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		// Set the post date to the future. // obf
		$v_gqvwv = '2919-07-29T18:00:00'; // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->add_header( 'content-type', 'application/json' ); // obf
		$v_rzcza = $v_yfneu->set_post_data( // obf
			array( // obf
				'date_gmt' => $v_gqvwv, // obf
				'date'     => $v_gqvwv, // obf
				'title'    => 'update', // obf
				'status'   => 'draft', // obf
			) // obf
		); // obf
		$v_kuopg->set_body( wp_json_encode( $v_rzcza ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf

		// Verify the post is set to the future date. // obf
		$v_yfneu->assertSame( $v_aesef['date_gmt'], $v_gqvwv ); // obf
		$v_yfneu->assertSame( $v_aesef['date'], $v_gqvwv ); // obf
		$v_yfneu->assertNotEquals( $v_aesef['date_gmt'], $v_aesef['modified_gmt'] ); // obf
		$v_yfneu->assertNotEquals( $v_aesef['date'], $v_aesef['modified'] ); // obf

		// Update post with a blank field (date or date_gmt). // obf
		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->add_header( 'content-type', 'application/json' ); // obf
		$v_rzcza = $v_yfneu->set_post_data( // obf
			array( // obf
				'date_gmt' => null, // obf
				'title'    => 'test', // obf
				'status'   => 'draft', // obf
			) // obf
		); // obf
		$v_kuopg->set_body( wp_json_encode( $v_rzcza ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		// Verify the date field values are reset in the API response. // obf
		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( $v_aesef['date_gmt'], $v_aesef['date'] ); // obf
		$v_yfneu->assertNotEquals( $v_aesef['date_gmt'], $v_gqvwv ); // obf

		$v_gfkxb = get_post( $v_qlgpx, 'ARRAY_A' ); // obf
		$v_yfneu->assertSame( $v_gfkxb['post_date_gmt'], '0000-00-00 00:00:00' ); // obf
		$v_yfneu->assertNotEquals( $v_aesef['date_gmt'], $v_gqvwv ); // obf
		$v_yfneu->assertNotEquals( $v_aesef['date'], $v_gqvwv ); // obf
	} // obf

	public function test_rest_update_post_raw() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->add_header( 'content-type', 'application/json' ); // obf
		$v_rzcza = $v_yfneu->set_raw_post_data(); // obf
		$v_kuopg->set_body( wp_json_encode( $v_rzcza ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( self::$v_qlgpx, $v_aesef['id'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['title']['raw'], $v_aesef['title']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['content']['raw'], $v_aesef['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt']['raw'], $v_aesef['excerpt']['raw'] ); // obf
		$v_gfkxb = get_post( self::$v_qlgpx ); // obf
		$v_yfneu->assertSame( $v_rzcza['title']['raw'], $v_gfkxb->post_title ); // obf
		$v_yfneu->assertSame( $v_rzcza['content']['raw'], $v_gfkxb->post_content ); // obf
		$v_yfneu->assertSame( $v_rzcza['excerpt']['raw'], $v_gfkxb->post_excerpt ); // obf
	} // obf

	public function test_update_post_without_extra_params() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data(); // obf
		unset( $v_rzcza['type'] ); // obf
		unset( $v_rzcza['name'] ); // obf
		unset( $v_rzcza['author'] ); // obf
		unset( $v_rzcza['status'] ); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->check_update_post_response( $v_cnwoi ); // obf
	} // obf

	public function test_update_post_without_permission() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_exjuj = wp_get_current_user(); // obf
		$v_exjuj->add_cap( 'edit_published_posts', false ); // obf
		// Flush capabilities, https://core.trac.wordpress.org/ticket/28374 // obf
		$v_exjuj->get_role_caps(); // obf
		$v_exjuj->update_user_level_from_caps(); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data(); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_edit', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_update_post_sticky_as_contributor() { // obf
		wp_set_current_user( self::$v_wctiz ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'sticky' => true, // obf
				'status' => 'pending', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_edit', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_update_post_invalid_id() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_invalid_id', $v_cnwoi, 404 ); // obf
	} // obf

	public function test_update_post_invalid_route() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/pages/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_invalid_id', $v_cnwoi, 404 ); // obf
	} // obf

	public function test_update_post_with_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'gallery', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'gallery', $v_ykwdf['format'] ); // obf
		$v_yfneu->assertSame( 'gallery', get_post_format( $v_rkjbe->ID ) ); // obf
	} // obf

	public function test_update_post_with_standard_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'standard', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf
		$v_yfneu->assertSame( 'standard', $v_ykwdf['format'] ); // obf
		$v_yfneu->assertFalse( get_post_format( $v_rkjbe->ID ) ); // obf
	} // obf

	public function test_update_post_with_invalid_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'testformat', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * Test with a valid format, but one unsupported by the theme. // obf
	 * // obf
	 * https://core.trac.wordpress.org/ticket/38610 // obf
	 */ // obf
	public function test_update_post_with_unsupported_format() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'format' => 'link', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf

		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'link', $v_ykwdf['format'] ); // obf
	} // obf

	public function test_update_post_ignore_readonly() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_tvcdh       = 'foo bar baz'; // obf
		$v_dfakm = current_time( 'mysql' ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'modified' => '2010-06-01T02:00:00Z', // obf
				'content'  => $v_tvcdh, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		// The readonly modified param should be ignored, request should be a success. // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_rkjbe = get_post( $v_ykwdf['id'] ); // obf

		$v_yfneu->assertSame( $v_tvcdh, $v_ykwdf['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_tvcdh, $v_rkjbe->post_content ); // obf

		// The modified date should equal the current time. // obf
		$v_yfneu->assertSame( gmdate( 'Y-m-d', strtotime( mysql_to_rfc3339( $v_dfakm ) ) ), gmdate( 'Y-m-d', strtotime( $v_ykwdf['modified'] ) ) ); // obf
		$v_yfneu->assertSame( gmdate( 'Y-m-d', strtotime( $v_dfakm ) ), gmdate( 'Y-m-d', strtotime( $v_rkjbe->post_modified ) ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_post_dates // obf
	 */ // obf
	public function test_update_post_date( $v_pkwmq, $v_rzcza, $v_sidkg ) { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		update_option( 'timezone_string', $v_rzcza['timezone_string'] ); // obf

		$v_qlgpx = self::factory()->post->create( array( 'post_status' => $v_pkwmq ) ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		if ( isset( $v_rzcza['date'] ) ) { // obf
			$v_kuopg->set_param( 'date', $v_rzcza['date'] ); // obf
		} // obf
		if ( isset( $v_rzcza['date_gmt'] ) ) { // obf
			$v_kuopg->set_param( 'date_gmt', $v_rzcza['date_gmt'] ); // obf
		} // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		update_option( 'timezone_string', '' ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_gfkxb = get_post( $v_ykwdf['id'] ); // obf

		$v_yfneu->assertSame( $v_sidkg['date'], $v_ykwdf['date'] ); // obf
		$v_ebill = str_replace( 'T', ' ', $v_sidkg['date'] ); // obf
		$v_yfneu->assertSame( $v_ebill, $v_gfkxb->post_date ); // obf

		$v_yfneu->assertSame( $v_sidkg['date_gmt'], $v_ykwdf['date_gmt'] ); // obf
		$v_lkcrr = str_replace( 'T', ' ', $v_sidkg['date_gmt'] ); // obf
		$v_yfneu->assertSame( $v_lkcrr, $v_gfkxb->post_date_gmt ); // obf
	} // obf

	public function test_update_post_with_invalid_date() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date' => 'foo', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_update_post_with_invalid_date_gmt() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'date_gmt' => 'foo', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_empty_post_date_gmt_shimmed_using_post_date() { // obf
		global $v_snngp; // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		update_option( 'timezone_string', 'America/Chicago' ); // obf

		// Need to set dates using wpdb directly because `wp_update_post` and // obf
		// `wp_insert_post` have additional validation on dates. // obf
		$v_qlgpx = self::factory()->post->create(); // obf
		$v_snngp->update( // obf
			$v_snngp->posts, // obf
			array( // obf
				'post_date'     => '2016-02-23 12:00:00', // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
			), // obf
			array( // obf
				'ID' => $v_qlgpx, // obf
			), // obf
			array( '%s', '%s' ), // obf
			array( '%d' ) // obf
		); // obf
		wp_cache_delete( $v_qlgpx, 'posts' ); // obf

		$v_gfkxb = get_post( $v_qlgpx ); // obf
		$v_yfneu->assertSame( $v_gfkxb->post_date, '2016-02-23 12:00:00' ); // obf
		$v_yfneu->assertSame( $v_gfkxb->post_date_gmt, '0000-00-00 00:00:00' ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( '2016-02-23T12:00:00', $v_ykwdf['date'] ); // obf
		$v_yfneu->assertSame( '2016-02-23T18:00:00', $v_ykwdf['date_gmt'] ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'date', '2016-02-23T13:00:00' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertSame( '2016-02-23T13:00:00', $v_ykwdf['date'] ); // obf
		$v_yfneu->assertSame( '2016-02-23T19:00:00', $v_ykwdf['date_gmt'] ); // obf

		$v_gfkxb = get_post( $v_qlgpx ); // obf
		$v_yfneu->assertSame( $v_gfkxb->post_date, '2016-02-23 13:00:00' ); // obf
		$v_yfneu->assertSame( $v_gfkxb->post_date_gmt, '2016-02-23 19:00:00' ); // obf

		update_option( 'timezone_string', '' ); // obf
	} // obf

	public function test_update_post_slug() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'slug' => 'sample-slug', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'sample-slug', $v_aesef['slug'] ); // obf
		$v_gfkxb = get_post( $v_aesef['id'] ); // obf
		$v_yfneu->assertSame( 'sample-slug', $v_gfkxb->post_name ); // obf
	} // obf

	public function test_update_post_slug_accented_chars() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'slug' => 'tęst-acceńted-chäræcters', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'test-accented-charaecters', $v_aesef['slug'] ); // obf
		$v_gfkxb = get_post( $v_aesef['id'] ); // obf
		$v_yfneu->assertSame( 'test-accented-charaecters', $v_gfkxb->post_name ); // obf
	} // obf

	public function test_update_post_sticky() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'sticky' => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertTrue( $v_aesef['sticky'] ); // obf
		$v_gfkxb = get_post( $v_aesef['id'] ); // obf
		$v_yfneu->assertTrue( is_sticky( $v_gfkxb->ID ) ); // obf

		// Updating another field shouldn't change sticky status. // obf
		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'title' => 'This should not reset sticky', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertTrue( $v_aesef['sticky'] ); // obf
		$v_gfkxb = get_post( $v_aesef['id'] ); // obf
		$v_yfneu->assertTrue( is_sticky( $v_gfkxb->ID ) ); // obf
	} // obf

	public function test_update_post_excerpt() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'excerpt' => 'An Excerpt', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'An Excerpt', $v_aesef['excerpt']['raw'] ); // obf
	} // obf

	public function test_update_post_empty_excerpt() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'excerpt' => '', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '', $v_aesef['excerpt']['raw'] ); // obf
	} // obf

	public function test_update_post_content() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'content' => 'Some Content', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'Some Content', $v_aesef['content']['raw'] ); // obf
	} // obf

	public function test_update_post_empty_content() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'content' => '', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '', $v_aesef['content']['raw'] ); // obf
	} // obf

	public function test_update_post_with_empty_password() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_qlgpx, // obf
				'post_password' => 'foo', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( '', $v_ykwdf['password'] ); // obf
	} // obf

	public function test_update_post_with_password_and_sticky_fails() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '123', // obf
				'sticky'   => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_field', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_update_stick_post_with_password_fails() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		stick_post( self::$v_qlgpx ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password' => '123', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_field', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_update_password_protected_post_with_sticky_fails() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'            => self::$v_qlgpx, // obf
				'post_password' => '123', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'sticky' => true, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_field', $v_cnwoi, 400 ); // obf
	} // obf

	public function test_update_post_with_quotes_in_title() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'title' => "Rob O'Rourke's Diary", // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( "Rob O'Rourke's Diary", $v_aesef['title']['raw'] ); // obf
	} // obf

	public function test_update_post_with_categories() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_tgmqx = wp_insert_term( 'Test Category', 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'title'      => 'Tester', // obf
				'categories' => array( // obf
					$v_tgmqx['term_id'], // obf
				), // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array( $v_tgmqx['term_id'] ), $v_aesef['categories'] ); // obf
		$v_yznrl = ''; // obf
		$v_vwjum           = $v_cnwoi->get_links(); // obf
		foreach ( $v_vwjum['https://api.w.org/term'] as $v_ercuu ) { // obf
			if ( 'category' === $v_ercuu['attributes']['taxonomy'] ) { // obf
				$v_yznrl = $v_ercuu['href']; // obf
			} // obf
		} // obf
		$v_qqzpu = parse_url( $v_yznrl, PHP_URL_QUERY ); // obf
		parse_str( $v_qqzpu, $v_sptwf ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', $v_sptwf['rest_route'] ); // obf
		unset( $v_sptwf['rest_route'] ); // obf
		$v_kuopg->set_query_params( $v_sptwf ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( 'Test Category', $v_ykwdf[0]['name'] ); // obf
	} // obf

	public function test_update_post_with_empty_categories() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_tgmqx = wp_insert_term( 'Test Category', 'category' ); // obf
		wp_set_object_terms( self::$v_qlgpx, $v_tgmqx['term_id'], 'category' ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'title'      => 'Tester', // obf
				'categories' => array(), // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( array(), $v_aesef['categories'] ); // obf
	} // obf

	/** // obf
	 * @ticket 38505 // obf
	 */ // obf
	public function test_update_post_with_categories_that_cannot_be_assigned_by_current_user() { // obf
		$v_tnkmf                = self::factory()->category->create_many( 2 ); // obf
		$v_yfneu->forbidden_cat = $v_tnkmf[1]; // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'password'   => 'testing', // obf
				'categories' => $v_tnkmf, // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf

		add_filter( 'map_meta_cap', array( $v_yfneu, 'revoke_assign_term' ), 10, 4 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		remove_filter( 'map_meta_cap', array( $v_yfneu, 'revoke_assign_term' ), 10, 4 ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_assign_term', $v_cnwoi, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 38698 // obf
	 */ // obf
	public function test_update_item_with_template() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		add_filter( 'theme_post_templates', array( $v_yfneu, 'filter_theme_post_templates' ) ); // obf

		// reregister the route as we now have a template available. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => 'post-my-test-template.php', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf          = $v_cnwoi->get_data(); // obf
		$v_vrtug = get_page_template_slug( get_post( $v_ykwdf['id'] ) ); // obf

		$v_yfneu->assertSame( 'post-my-test-template.php', $v_ykwdf['template'] ); // obf
		$v_yfneu->assertSame( 'post-my-test-template.php', $v_vrtug ); // obf
	} // obf

	/** // obf
	 * @ticket 38877 // obf
	 */ // obf
	public function test_update_item_with_template_none() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		add_filter( 'theme_post_templates', array( $v_yfneu, 'filter_theme_post_templates' ) ); // obf
		update_post_meta( self::$v_qlgpx, '_wp_page_template', 'post-my-test-template.php' ); // obf

		// reregister the route as we now have a template available. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => '', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_ykwdf          = $v_cnwoi->get_data(); // obf
		$v_vrtug = get_page_template_slug( get_post( $v_ykwdf['id'] ) ); // obf

		$v_yfneu->assertSame( '', $v_ykwdf['template'] ); // obf
		$v_yfneu->assertSame( '', $v_vrtug ); // obf
	} // obf

	/** // obf
	 * Test update_item() with same template that no longer exists. // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::check_template // obf
	 * @ticket 39996 // obf
	 */ // obf
	public function test_update_item_with_same_template_that_no_longer_exists() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		update_post_meta( self::$v_qlgpx, '_wp_page_template', 'post-my-invalid-template.php' ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'template' => 'post-my-invalid-template.php', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf

		$v_ykwdf          = $v_cnwoi->get_data(); // obf
		$v_vrtug = get_page_template_slug( get_post( $v_ykwdf['id'] ) ); // obf

		$v_yfneu->assertSame( 'post-my-invalid-template.php', $v_vrtug ); // obf
		$v_yfneu->assertSame( 'post-my-invalid-template.php', $v_ykwdf['template'] ); // obf
	} // obf

	public function verify_post_roundtrip( $v_dzsef = array(), $v_pbnrj = array() ) { // obf
		// Create the post. // obf
		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		foreach ( $v_dzsef as $v_qkyqu => $v_omkve ) { // obf
			$v_kuopg->set_param( $v_qkyqu, $v_omkve ); // obf
		} // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 201, $v_cnwoi->get_status() ); // obf
		$v_qntem = $v_cnwoi->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['raw'], $v_qntem['title']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['rendered'], trim( $v_qntem['title']['rendered'] ) ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['raw'], $v_qntem['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['rendered'], trim( $v_qntem['content']['rendered'] ) ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['raw'], $v_qntem['excerpt']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['rendered'], trim( $v_qntem['excerpt']['rendered'] ) ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_gfkxb = get_post( $v_qntem['id'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['raw'], $v_gfkxb->post_title ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['raw'], $v_gfkxb->post_content ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['raw'], $v_gfkxb->post_excerpt ); // obf

		// Update the post. // obf
		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', $v_qntem['id'] ) ); // obf
		foreach ( $v_dzsef as $v_qkyqu => $v_omkve ) { // obf
			$v_kuopg->set_param( $v_qkyqu, $v_omkve ); // obf
		} // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_qntem = $v_cnwoi->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['raw'], $v_qntem['title']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['rendered'], trim( $v_qntem['title']['rendered'] ) ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['raw'], $v_qntem['content']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['rendered'], trim( $v_qntem['content']['rendered'] ) ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['raw'], $v_qntem['excerpt']['raw'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['rendered'], trim( $v_qntem['excerpt']['rendered'] ) ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_gfkxb = get_post( $v_qntem['id'] ); // obf
		$v_yfneu->assertSame( $v_pbnrj['title']['raw'], $v_gfkxb->post_title ); // obf
		$v_yfneu->assertSame( $v_pbnrj['content']['raw'], $v_gfkxb->post_content ); // obf
		$v_yfneu->assertSame( $v_pbnrj['excerpt']['raw'], $v_gfkxb->post_excerpt ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_post_roundtrip_as_author // obf
	 */ // obf
	public function test_post_roundtrip_as_author( $v_fkwnm, $v_yjxkr ) { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_yfneu->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
		$v_yfneu->verify_post_roundtrip( $v_fkwnm, $v_yjxkr ); // obf
	} // obf

	public static function data_post_roundtrip_as_author() { // obf
		return array( // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'   => '\o/ ¯\_(ツ)_/¯', // obf
					'content' => '\o/ ¯\_(ツ)_/¯', // obf
					'excerpt' => '\o/ ¯\_(ツ)_/¯', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '\o/ ¯\_(ツ)_/¯', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '<p>\o/ ¯\_(ツ)_/¯</p>', // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
						'rendered' => '<p>\o/ ¯\_(ツ)_/¯</p>', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'   => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
					'content' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
					'excerpt' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '<p>\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;</p>', // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
						'rendered' => '<p>\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;</p>', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'content' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'excerpt' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => 'div <strong>strong</strong> oh noes', // obf
						'rendered' => 'div <strong>strong</strong> oh noes', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				// Raw values. // obf
				array( // obf
					'title'   => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
					'content' => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
					'excerpt' => '<a href="#" target="_blank" unfiltered=true>link</a>', // obf
				), // obf
				// Expected returned values. // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => '<a href="#">link</a>', // obf
						'rendered' => '<a href="#">link</a>', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '<a href="#" target="_blank">link</a>', // obf
						'rendered' => '<p><a href="#" target="_blank">link</a></p>', // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '<a href="#" target="_blank">link</a>', // obf
						'rendered' => '<p><a href="#" target="_blank">link</a></p>', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function test_post_roundtrip_as_editor_unfiltered_html() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		if ( is_multisite() ) { // obf
			$v_yfneu->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
			$v_yfneu->verify_post_roundtrip( // obf
				array( // obf
					'title'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'content' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'excerpt' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => 'div <strong>strong</strong> oh noes', // obf
						'rendered' => 'div <strong>strong</strong> oh noes', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> oh noes', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> oh noes</p>", // obf
					), // obf
				) // obf
			); // obf
		} else { // obf
			$v_yfneu->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
			$v_yfneu->verify_post_roundtrip( // obf
				array( // obf
					'title'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'content' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'excerpt' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'title'   => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					), // obf
					'content' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
					), // obf
					'excerpt' => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
					), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public function test_post_roundtrip_as_superadmin_unfiltered_html() { // obf
		wp_set_current_user( self::$v_rfaem ); // obf

		$v_yfneu->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_yfneu->verify_post_roundtrip( // obf
			array( // obf
				'title'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'content' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'excerpt' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
			), // obf
			array( // obf
				'title'   => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				'content' => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
				), // obf
				'excerpt' => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
				), // obf
			) // obf
		); // obf
	} // obf

	public function test_delete_item() { // obf
		$v_qlgpx = self::factory()->post->create( array( 'post_title' => 'Deleted post' ) ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'force', 'false' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 'Deleted post', $v_ykwdf['title']['raw'] ); // obf
		$v_yfneu->assertSame( 'trash', $v_ykwdf['status'] ); // obf
	} // obf

	public function test_delete_item_skip_trash() { // obf
		$v_qlgpx = self::factory()->post->create( array( 'post_title' => 'Deleted post' ) ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_kuopg['force'] = true; // obf
		$v_cnwoi         = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertTrue( $v_ykwdf['deleted'] ); // obf
		$v_yfneu->assertNotEmpty( $v_ykwdf['previous'] ); // obf
	} // obf

	public function test_delete_item_already_trashed() { // obf
		$v_qlgpx = self::factory()->post->create( array( 'post_title' => 'Deleted post' ) ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/posts/%d', $v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_already_trashed', $v_cnwoi, 410 ); // obf
	} // obf

	public function test_delete_post_invalid_id() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_invalid_id', $v_cnwoi, 404 ); // obf
	} // obf

	public function test_delete_post_invalid_post_type() { // obf
		$v_xultw = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg  = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . $v_xultw ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_post_invalid_id', $v_cnwoi, 404 ); // obf
	} // obf

	public function test_delete_post_without_permission() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_kuopg  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_cannot_delete', $v_cnwoi, 403 ); // obf
	} // obf

	public function test_register_post_type_invalid_controller() { // obf

		register_post_type( // obf
			'invalid-controller', // obf
			array( // obf
				'show_in_rest'          => true, // obf
				'rest_controller_class' => 'Fake_Class_Baba', // obf
			) // obf
		); // obf
		create_initial_rest_routes(); // obf
		$v_kxvet = rest_get_server()->get_routes(); // obf
		$v_yfneu->assertArrayNotHasKey( '/wp/v2/invalid-controller', $v_kxvet ); // obf
		_unregister_post_type( 'invalid-controller' ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_kuopg    = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi   = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf       = $v_cnwoi->get_data(); // obf
		$v_emqyl = $v_ykwdf['schema']['properties']; // obf
		$v_yfneu->assertCount( 27, $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'author', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'comment_status', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'content', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'date', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'date_gmt', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'excerpt', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'featured_media', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'generated_slug', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'guid', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'format', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'id', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'link', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'meta', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'modified', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'modified_gmt', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'password', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'permalink_template', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'ping_status', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'slug', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'status', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'sticky', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'template', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'title', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'type', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'tags', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'categories', $v_emqyl ); // obf
		$v_yfneu->assertArrayHasKey( 'class_list', $v_emqyl ); // obf
	} // obf

	/** // obf
	 * @ticket 48401 // obf
	 */ // obf
	public function test_get_item_schema_issues_doing_it_wrong_when_taxonomy_name_is_already_set_in_properties() { // obf
		$v_yfneu->setExpectedIncorrectUsage( 'register_taxonomy' ); // obf

		// Register a taxonomy with 'status' as name. // obf
		register_taxonomy( 'status', 'post', array( 'show_in_rest' => true ) ); // obf

		// Re-initialize the controller. // obf
		$v_blusd = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
	} // obf

	/** // obf
	 * @ticket 39805 // obf
	 */ // obf
	public function test_get_post_view_context_properties() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'view' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_igcge     = array_keys( $v_cnwoi->get_data() ); // obf
		sort( $v_igcge ); // obf

		$v_abair = array( // obf
			'author', // obf
			'categories', // obf
			'class_list', // obf
			'comment_status', // obf
			'content', // obf
			'date', // obf
			'date_gmt', // obf
			'excerpt', // obf
			'featured_media', // obf
			'format', // obf
			'guid', // obf
			'id', // obf
			'link', // obf
			'meta', // obf
			'modified', // obf
			'modified_gmt', // obf
			'ping_status', // obf
			'slug', // obf
			'status', // obf
			'sticky', // obf
			'tags', // obf
			'template', // obf
			'title', // obf
			'type', // obf
		); // obf

		$v_yfneu->assertSame( $v_abair, $v_igcge ); // obf
	} // obf

	public function test_get_post_edit_context_properties() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_igcge     = array_keys( $v_cnwoi->get_data() ); // obf
		sort( $v_igcge ); // obf

		$v_abair = array( // obf
			'author', // obf
			'categories', // obf
			'class_list', // obf
			'comment_status', // obf
			'content', // obf
			'date', // obf
			'date_gmt', // obf
			'excerpt', // obf
			'featured_media', // obf
			'format', // obf
			'generated_slug', // obf
			'guid', // obf
			'id', // obf
			'link', // obf
			'meta', // obf
			'modified', // obf
			'modified_gmt', // obf
			'password', // obf
			'permalink_template', // obf
			'ping_status', // obf
			'slug', // obf
			'status', // obf
			'sticky', // obf
			'tags', // obf
			'template', // obf
			'title', // obf
			'type', // obf
		); // obf

		$v_yfneu->assertSame( $v_abair, $v_igcge ); // obf
	} // obf

	public function test_get_post_embed_context_properties() { // obf
		$v_kuopg = new WP_REST_Request( 'GET', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_param( 'context', 'embed' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_igcge     = array_keys( $v_cnwoi->get_data() ); // obf
		sort( $v_igcge ); // obf

		$v_abair = array( // obf
			'author', // obf
			'date', // obf
			'excerpt', // obf
			'featured_media', // obf
			'id', // obf
			'link', // obf
			'slug', // obf
			'title', // obf
			'type', // obf
		); // obf

		$v_yfneu->assertSame( $v_abair, $v_igcge ); // obf
	} // obf

	public function test_status_array_enum_args() { // obf
		$v_kuopg         = new WP_REST_Request( 'GET', '/wp/v2' ); // obf
		$v_cnwoi        = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf            = $v_cnwoi->get_data(); // obf
		$v_zgnzf = $v_ykwdf['routes']['/wp/v2/posts']['endpoints'][0]['args']; // obf
		$v_veopt      = $v_zgnzf['status']; // obf
		$v_yfneu->assertSame( 'array', $v_veopt['type'] ); // obf
		$v_yfneu->assertSame( // obf
			array( // obf
				'enum' => array( // obf
					'publish', // obf
					'future', // obf
					'draft', // obf
					'pending', // obf
					'private', // obf
					'trash', // obf
					'auto-draft', // obf
					'inherit', // obf
					'request-pending', // obf
					'request-confirmed', // obf
					'request-failed', // obf
					'request-completed', // obf
					'any', // obf
				), // obf
				'type' => 'string', // obf
			), // obf
			$v_veopt['items'] // obf
		); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_sakhe = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'post', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_sakhe, // obf
				'get_callback'    => array( $v_yfneu, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_yfneu, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_kuopg  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertArrayHasKey( 'my_custom_int', $v_ykwdf['schema']['properties'] ); // obf
		$v_yfneu->assertSame( $v_sakhe, $v_ykwdf['schema']['properties']['my_custom_int'] ); // obf

		wp_set_current_user( 1 ); // obf

		$v_qlgpx = self::factory()->post->create(); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertArrayHasKey( 'my_custom_int', $v_cnwoi->data ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertEquals( 123, get_post_meta( $v_qlgpx, 'my_custom_int', true ) ); // obf

		$v_kuopg = new WP_REST_Request( 'POST', '/wp/v2/posts' ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
				'title'         => 'hello', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertEquals( 123, $v_cnwoi->data['my_custom_int'] ); // obf

		global $v_fpguz; // obf
		$v_fpguz = array(); // obf
	} // obf

	/** // obf
	 * @ticket 45220 // obf
	 */ // obf
	public function test_get_additional_field_registration_null_schema() { // obf
		register_rest_field( // obf
			'post', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => null, // obf
				'get_callback'    => array( $v_yfneu, 'additional_field_get_callback' ), // obf
				'update_callback' => null, // obf
			) // obf
		); // obf
		$v_qlgpx = self::factory()->post->create(); // obf

		// 'my_custom_int' should appear because ?_fields= isn't set. // obf
		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertArrayHasKey( 'my_custom_int', $v_cnwoi->data ); // obf

		// 'my_custom_int' should appear because it's present in ?_fields=. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( '_fields', 'title,my_custom_int' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertArrayHasKey( 'my_custom_int', $v_cnwoi->data ); // obf

		// 'my_custom_int' should not appear because it's not present in ?_fields=. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( '_fields', 'title' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertArrayNotHasKey( 'my_custom_int', $v_cnwoi->data ); // obf

		global $v_fpguz; // obf
		$v_fpguz = array(); // obf
	} // obf

	public function test_additional_field_update_errors() { // obf
		$v_sakhe = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'post', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_sakhe, // obf
				'get_callback'    => array( $v_yfneu, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_yfneu, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		// Check for error on update. // obf
		$v_kuopg = new WP_REST_Request( 'POST', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_kuopg->set_body_params( // obf
			array( // obf
				'my_custom_int' => 'returnError', // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_cnwoi, 400 ); // obf

		global $v_fpguz; // obf
		$v_fpguz = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_dlgow, $v_uggpc ) { // obf
		return get_post_meta( $v_dlgow['id'], $v_uggpc, true ); // obf
	} // obf

	public function additional_field_update_callback( $v_omkve, $v_gfkxb, $v_uggpc ) { // obf
		if ( 'returnError' === $v_omkve ) { // obf
			return new WP_Error( 'rest_invalid_param', 'Testing an error.', array( 'status' => 400 ) ); // obf
		} // obf
		update_post_meta( $v_gfkxb->ID, $v_uggpc, $v_omkve ); // obf
	} // obf

	public function test_publish_action_ldo_registered() { // obf
		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_kzssk = wp_list_filter( $v_sakhe['links'], array( 'rel' => 'https://api.w.org/action-publish' ) ); // obf

		$v_yfneu->assertCount( 1, $v_kzssk, 'LDO found on schema.' ); // obf
	} // obf

	public function test_sticky_action_ldo_registered_for_posts() { // obf
		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_kzssk = wp_list_filter( $v_sakhe['links'], array( 'rel' => 'https://api.w.org/action-sticky' ) ); // obf

		$v_yfneu->assertCount( 1, $v_kzssk, 'LDO found on schema.' ); // obf
	} // obf

	public function test_sticky_action_ldo_not_registered_for_non_posts() { // obf
		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/pages' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_kzssk = wp_list_filter( $v_sakhe['links'], array( 'rel' => 'https://api.w.org/action-sticky' ) ); // obf

		$v_yfneu->assertCount( 0, $v_kzssk, 'LDO found on schema.' ); // obf
	} // obf

	public function test_author_action_ldo_registered_for_post_types_with_author_support() { // obf
		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_kzssk = wp_list_filter( $v_sakhe['links'], array( 'rel' => 'https://api.w.org/action-assign-author' ) ); // obf

		$v_yfneu->assertCount( 1, $v_kzssk, 'LDO found on schema.' ); // obf
	} // obf

	public function test_author_action_ldo_not_registered_for_post_types_without_author_support() { // obf
		remove_post_type_support( 'post', 'author' ); // obf

		// Re-initialize the controller to cache-bust schemas from prior test runs. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf

		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_kzssk = wp_list_filter( $v_sakhe['links'], array( 'rel' => 'https://api.w.org/action-assign-author' ) ); // obf

		$v_yfneu->assertCount( 0, $v_kzssk, 'LDO found on schema.' ); // obf
	} // obf

	public function test_term_action_ldos_registered() { // obf
		$v_cnwoi = rest_get_server()->dispatch( new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ) ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_sakhe   = $v_ykwdf['schema']; // obf

		$v_yfneu->assertArrayHasKey( 'links', $v_sakhe ); // obf
		$v_jyoya = array_flip( wp_list_pluck( $v_sakhe['links'], 'rel' ) ); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-assign-categories', $v_jyoya ); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-create-categories', $v_jyoya ); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-assign-tags', $v_jyoya ); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-create-tags', $v_jyoya ); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-assign-post_format', $v_jyoya ); // obf
		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-create-post_format', $v_jyoya ); // obf
		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-assign-nav_menu', $v_jyoya ); // obf
		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-create-nav_menu', $v_jyoya ); // obf
	} // obf

	public function test_action_links_only_available_in_edit_context() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'view' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-publish', $v_vwjum ); // obf
	} // obf

	public function test_publish_action_link_exists_for_author() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-publish', $v_vwjum ); // obf
	} // obf

	public function test_publish_action_link_does_not_exist_for_contributor() { // obf
		wp_set_current_user( self::$v_wctiz ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_wctiz ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-publish', $v_vwjum ); // obf
	} // obf

	public function test_sticky_action_exists_for_editor() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-sticky', $v_vwjum ); // obf
	} // obf

	public function test_sticky_action_does_not_exist_for_author() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-sticky', $v_vwjum ); // obf
	} // obf

	public function test_sticky_action_does_not_exist_for_non_post_posts() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_kdfxi, // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-sticky', $v_vwjum ); // obf
	} // obf


	public function test_assign_author_action_exists_for_editor() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-assign-author', $v_vwjum ); // obf
	} // obf

	public function test_assign_author_action_does_not_exist_for_author() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-assign-author', $v_vwjum ); // obf
	} // obf

	public function test_assign_author_action_does_not_exist_for_post_types_without_author_support() { // obf
		remove_post_type_support( 'post', 'author' ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = self::factory()->post->create(); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-assign-author', $v_vwjum ); // obf
	} // obf

	public function test_create_term_action_exists_for_editor() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-create-categories', $v_vwjum ); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-create-tags', $v_vwjum ); // obf
		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-create-post_format', $v_vwjum ); // obf
	} // obf

	public function test_create_term_action_non_hierarchical_exists_for_author() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-create-tags', $v_vwjum ); // obf
	} // obf

	public function test_create_term_action_hierarchical_does_not_exists_for_author() { // obf
		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_gfkxb = self::factory()->post->create( array( 'post_author' => self::$v_kdfxi ) ); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-create-categories', $v_vwjum ); // obf
	} // obf

	public function test_assign_term_action_exists_for_contributor() { // obf
		wp_set_current_user( self::$v_wctiz ); // obf

		$v_gfkxb = self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_wctiz, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_yfneu->assertGreaterThan( 0, $v_gfkxb ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb}" ); // obf
		$v_kuopg->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf

		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-assign-categories', $v_vwjum ); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-assign-tags', $v_vwjum ); // obf
	} // obf

	public function test_assign_unfiltered_html_action_superadmin() { // obf
		$v_qlgpx = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_rfaem ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_do_request( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf
		$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-unfiltered-html', $v_vwjum ); // obf
	} // obf

	public function test_assign_unfiltered_html_action_editor() { // obf
		$v_qlgpx = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_do_request( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf
		// Editors can only unfiltered html on single site. // obf
		if ( is_multisite() ) { // obf
			$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-unfiltered-html', $v_vwjum ); // obf
		} else { // obf
			$v_yfneu->assertArrayHasKey( 'https://api.w.org/action-unfiltered-html', $v_vwjum ); // obf
		} // obf
	} // obf

	public function test_assign_unfiltered_html_action_author() { // obf
		$v_qlgpx = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_kdfxi ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_do_request( $v_kuopg ); // obf
		$v_vwjum    = $v_cnwoi->get_links(); // obf
		// Authors can't ever unfiltered html. // obf
		$v_yfneu->assertArrayNotHasKey( 'https://api.w.org/action-unfiltered-html', $v_vwjum ); // obf
	} // obf

	public function test_generated_permalink_template_generated_slug_for_non_viewable_posts() { // obf
		register_post_type( // obf
			'private-post', // obf
			array( // obf
				'label'              => 'Private Posts', // obf
				'supports'           => array( 'title', 'editor', 'author' ), // obf
				'show_in_rest'       => true, // obf
				'publicly_queryable' => false, // obf
				'public'             => true, // obf
				'rest_base'          => 'private-post', // obf
			) // obf
		); // obf
		create_initial_rest_routes(); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Permalink Template', // obf
				'post_type'   => 'private-post', // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		// Neither 'permalink_template' and 'generated_slug' are expected for this post type. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/private-post/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertArrayNotHasKey( 'permalink_template', $v_ykwdf ); // obf
		$v_yfneu->assertArrayNotHasKey( 'generated_slug', $v_ykwdf ); // obf
	} // obf

	public function test_generated_permalink_template_generated_slug_for_posts() { // obf
		$v_yfneu->set_permalink_structure( '/%postname%/' ); // obf
		$v_vwbgi = trailingslashit( home_url( '/%postname%/' ) ); // obf

		wp_set_current_user( self::$v_gfgta ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Permalink Template', // obf
				'post_type'   => 'post', // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		// Both 'permalink_template' and 'generated_slug' are expected for context=edit. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'edit' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertSame( $v_vwbgi, $v_ykwdf['permalink_template'] ); // obf
		$v_yfneu->assertSame( 'permalink-template', $v_ykwdf['generated_slug'] ); // obf

		// Neither 'permalink_template' and 'generated_slug' are expected for context=view. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts/' . $v_qlgpx ); // obf
		$v_kuopg->set_param( 'context', 'view' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_yfneu->assertArrayNotHasKey( 'permalink_template', $v_ykwdf ); // obf
		$v_yfneu->assertArrayNotHasKey( 'generated_slug', $v_ykwdf ); // obf
	} // obf

	/** // obf
	 * @ticket 39953 // obf
	 */ // obf
	public function test_putting_same_publish_date_does_not_remove_floating_date() { // obf
		wp_set_current_user( self::$v_rfaem ); // obf

		$v_wujij = gmdate( 'Y-m-d H:i:s' ); // obf

		$v_gfkxb = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_date'   => $v_wujij, // obf
			) // obf
		); // obf

		$v_yfneu->assertSame( '0000-00-00 00:00:00', $v_gfkxb->post_date_gmt ); // obf

		$v_biyjh = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_biyjh->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_biyjh      = rest_get_server()->dispatch( $v_biyjh ); // obf
		$v_mjexs = $v_biyjh->get_data(); // obf

		$v_okapp = new WP_REST_Request( 'PUT', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_okapp->set_body_params( $v_mjexs ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_okapp ); // obf
		$v_uuruf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertEqualsWithDelta( strtotime( $v_mjexs['date'] ), strtotime( $v_uuruf['date'] ), 2, 'The dates should be equal' ); // obf
		$v_yfneu->assertEqualsWithDelta( strtotime( $v_mjexs['date_gmt'] ), strtotime( $v_uuruf['date_gmt'] ), 2, 'The dates should be equal' ); // obf

		$v_yfneu->assertSame( '0000-00-00 00:00:00', get_post( $v_gfkxb->ID )->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 39953 // obf
	 */ // obf
	public function test_putting_different_publish_date_removes_floating_date() { // obf
		wp_set_current_user( self::$v_rfaem ); // obf

		$v_wujij     = gmdate( 'Y-m-d H:i:s' ); // obf
		$v_uwumn = gmdate( 'Y-m-d H:i:s', strtotime( '+1 week' ) ); // obf

		$v_gfkxb = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_date'   => $v_wujij, // obf
			) // obf
		); // obf

		$v_yfneu->assertSame( '0000-00-00 00:00:00', $v_gfkxb->post_date_gmt ); // obf

		$v_biyjh = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_biyjh->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_biyjh      = rest_get_server()->dispatch( $v_biyjh ); // obf
		$v_mjexs = $v_biyjh->get_data(); // obf

		$v_okapp = new WP_REST_Request( 'PUT', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_okapp->set_body_params( // obf
			array_merge( // obf
				$v_mjexs, // obf
				array( // obf
					'date' => mysql_to_rfc3339( $v_uwumn ), // obf
				) // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_okapp ); // obf
		$v_uuruf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertEqualsWithDelta( strtotime( mysql_to_rfc3339( $v_uwumn ) ), strtotime( $v_uuruf['date'] ), 2, 'The dates should be equal' ); // obf

		$v_yfneu->assertNotEquals( '0000-00-00 00:00:00', get_post( $v_gfkxb->ID )->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 39953 // obf
	 */ // obf
	public function test_publishing_post_with_same_date_removes_floating_date() { // obf
		wp_set_current_user( self::$v_rfaem ); // obf

		$v_wujij = gmdate( 'Y-m-d H:i:s' ); // obf

		$v_gfkxb = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_date'   => $v_wujij, // obf
			) // obf
		); // obf

		$v_yfneu->assertSame( '0000-00-00 00:00:00', $v_gfkxb->post_date_gmt ); // obf

		$v_biyjh = new WP_REST_Request( 'GET', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_biyjh->set_query_params( array( 'context' => 'edit' ) ); // obf

		$v_biyjh      = rest_get_server()->dispatch( $v_biyjh ); // obf
		$v_mjexs = $v_biyjh->get_data(); // obf

		$v_okapp = new WP_REST_Request( 'PUT', "/wp/v2/posts/{$v_gfkxb->ID}" ); // obf
		$v_okapp->set_body_params( // obf
			array_merge( // obf
				$v_mjexs, // obf
				array( // obf
					'status' => 'publish', // obf
				) // obf
			) // obf
		); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_okapp ); // obf
		$v_uuruf     = $v_cnwoi->get_data(); // obf

		$v_yfneu->assertEqualsWithDelta( strtotime( $v_mjexs['date'] ), strtotime( $v_uuruf['date'] ), 2, 'The dates should be equal' ); // obf
		$v_yfneu->assertEqualsWithDelta( strtotime( $v_mjexs['date_gmt'] ), strtotime( $v_uuruf['date_gmt'] ), 2, 'The dates should be equal' ); // obf

		$v_yfneu->assertNotEquals( '0000-00-00 00:00:00', get_post( $v_gfkxb->ID )->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_reuses_same_instance() { // obf
		$v_yfneu->assertSame( // obf
			get_post_type_object( 'post' )->get_rest_controller(), // obf
			get_post_type_object( 'post' )->get_rest_controller() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_null_if_post_type_does_not_show_in_rest() { // obf
		register_post_type( // obf
			'not_in_rest', // obf
			array( // obf
				'show_in_rest' => false, // obf
			) // obf
		); // obf

		$v_yfneu->assertNull( get_post_type_object( 'not_in_rest' )->get_rest_controller() ); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_null_if_class_does_not_exist() { // obf
		register_post_type( // obf
			'class_not_found', // obf
			array( // obf
				'show_in_rest'          => true, // obf
				'rest_controller_class' => 'Class_That_Does_Not_Exist', // obf
			) // obf
		); // obf

		$v_yfneu->assertNull( get_post_type_object( 'class_not_found' )->get_rest_controller() ); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_null_if_class_does_not_subclass_rest_controller() { // obf
		register_post_type( // obf
			'invalid_class', // obf
			array( // obf
				'show_in_rest'          => true, // obf
				'rest_controller_class' => 'WP_Post', // obf
			) // obf
		); // obf

		$v_yfneu->assertNull( get_post_type_object( 'invalid_class' )->get_rest_controller() ); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_posts_controller_if_custom_class_not_specified() { // obf
		register_post_type( // obf
			'test', // obf
			array( // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf

		$v_yfneu->assertInstanceOf( // obf
			WP_REST_Posts_Controller::class, // obf
			get_post_type_object( 'test' )->get_rest_controller() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_provided_controller_class() { // obf
		$v_yfneu->assertInstanceOf( // obf
			WP_REST_Blocks_Controller::class, // obf
			get_post_type_object( 'wp_block' )->get_rest_controller() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_null_for_invalid_provided_controller() { // obf
		register_post_type( // obf
			'test', // obf
			array( // obf
				'show_in_rest'    => true, // obf
				'rest_controller' => new \stdClass(), // obf
			) // obf
		); // obf

		$v_yfneu->assertNull( get_post_type_object( 'test' )->get_rest_controller() ); // obf
	} // obf

	/** // obf
	 * @ticket 45677 // obf
	 */ // obf
	public function test_get_for_post_type_returns_null_for_controller_class_mismatch() { // obf
		register_post_type( // obf
			'test', // obf
			array( // obf
				'show_in_rest'          => true, // obf
				'rest_controller_class' => WP_REST_Posts_Controller::class, // obf
				'rest_controller'       => new WP_REST_Terms_Controller( 'category' ), // obf
			) // obf
		); // obf

		$v_yfneu->assertNull( get_post_type_object( 'test' )->get_rest_controller() ); // obf
	} // obf

	/** // obf
	 * @ticket 47779 // obf
	 */ // obf
	public function test_rest_post_type_item_schema_filter_change_property() { // obf
		add_filter( 'rest_post_item_schema', array( $v_yfneu, 'filter_post_item_schema' ) ); // obf

		// Re-initialize the controller to cache-bust schemas from prior test runs. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf

		$v_kuopg    = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts' ); // obf
		$v_cnwoi   = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf       = $v_cnwoi->get_data(); // obf
		$v_emqyl = $v_ykwdf['schema']['properties']['content']['properties']; // obf

		$v_yfneu->assertArrayHasKey( 'new_prop', $v_emqyl ); // obf
		$v_yfneu->assertSame( array( 'new_context' ), $v_emqyl['new_prop']['context'] ); // obf
	} // obf

	/** // obf
	 * @ticket 47779 // obf
	 */ // obf
	public function test_rest_post_type_item_schema_filter_add_property_triggers_doing_it_wrong() { // obf
		add_filter( 'rest_post_item_schema', array( $v_yfneu, 'filter_post_item_schema_add_property' ) ); // obf
		$v_yfneu->setExpectedIncorrectUsage( 'WP_REST_Posts_Controller::get_item_schema' ); // obf

		// Re-initialize the controller to cache-bust schemas from prior test runs. // obf
		$v_ykayj['wp_rest_server']->override_by_default = true; // obf
		$v_blusd                                     = new WP_REST_Posts_Controller( 'post' ); // obf
		$v_blusd->register_routes(); // obf
		$v_ykayj['wp_rest_server']->override_by_default = false; // obf
	} // obf

	/** // obf
	 * @ticket 52422 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::create_item // obf
	 */ // obf
	public function test_draft_post_does_not_have_the_same_slug_as_existing_post() { // obf
		wp_set_current_user( self::$v_gfgta ); // obf
		self::factory()->post->create( array( 'post_name' => 'sample-slug' ) ); // obf

		$v_kuopg = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/posts/%d', self::$v_qlgpx ) ); // obf
		$v_rzcza  = $v_yfneu->set_post_data( // obf
			array( // obf
				'status' => 'draft', // obf
				'slug'   => 'sample-slug', // obf
			) // obf
		); // obf
		$v_kuopg->set_body_params( $v_rzcza ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_aesef = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertSame( // obf
			'sample-slug-2', // obf
			$v_aesef['slug'], // obf
			'The slug from the REST response did not match' // obf
		); // obf

		$v_gfkxb = get_post( $v_aesef['id'] ); // obf

		$v_yfneu->assertSame( // obf
			'draft', // obf
			$v_gfkxb->post_status, // obf
			'The post status is not draft' // obf
		); // obf

		$v_yfneu->assertSame( // obf
			'sample-slug-2', // obf
			$v_gfkxb->post_name, // obf
			'The post slug was not set to "sample-slug-2"' // obf
		); // obf
	} // obf

	/** // obf
	 * Test the REST API ignores the post format parameter for post types that do not support them. // obf
	 * // obf
	 * @ticket 62646 // obf
	 * @ticket 62014 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_standard_post_format_ignored_for_post_types_that_do_not_support_them() { // obf
		$v_rqdwd = get_theme_support( 'post-formats' ); // obf
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/pages' ); // obf
		$v_kuopg->set_param( 'format', 'invalid_type' ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		/* // obf
		 * Restore the initial post formats support. // obf
		 * // obf
		 * This needs to be done prior to the assertions to avoid unexpected // obf
		 * results for other tests should an assertion fail. // obf
		 */ // obf
		if ( $v_rqdwd ) { // obf
			add_theme_support( 'post-formats', $v_rqdwd[0] ); // obf
		} else { // obf
			remove_theme_support( 'post-formats' ); // obf
		} // obf

		$v_yfneu->assertCount( 1, $v_cnwoi->get_data(), 'The response should ignore the post format parameter' ); // obf
	} // obf

	/** // obf
	 * Test the REST API support for the standard post format. // obf
	 * // obf
	 * @ticket 62014 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_standard_post_format_support() { // obf
		$v_rqdwd = get_theme_support( 'post-formats' ); // obf
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		set_post_format( $v_qlgpx, 'aside' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'format', array( 'standard' ) ); // obf
		$v_kuopg->set_param( 'per_page', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		/* // obf
		 * Restore the initial post formats support. // obf
		 * // obf
		 * This needs to be done prior to the assertions to avoid unexpected // obf
		 * results for other tests should an assertion fail. // obf
		 */ // obf
		if ( $v_rqdwd ) { // obf
			add_theme_support( 'post-formats', $v_rqdwd[0] ); // obf
		} else { // obf
			remove_theme_support( 'post-formats' ); // obf
		} // obf

		$v_yfneu->assertCount( 3, $v_cnwoi->get_data(), 'The response should only include standard post formats' ); // obf
	} // obf

	/** // obf
	 * Test the REST API support for post formats. // obf
	 * // obf
	 * @ticket 62014 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_post_format_support() { // obf
		$v_rqdwd = get_theme_support( 'post-formats' ); // obf
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		set_post_format( $v_qlgpx, 'aside' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'format', array( 'aside' ) ); // obf

		$v_tqvdx = rest_get_server()->dispatch( $v_kuopg ); // obf

		$v_kuopg->set_param( 'format', array( 'invalid_format' ) ); // obf
		$v_sqzjo = rest_get_server()->dispatch( $v_kuopg ); // obf

		/* // obf
		 * Restore the initial post formats support. // obf
		 * // obf
		 * This needs to be done prior to the assertions to avoid unexpected // obf
		 * results for other tests should an assertion fail. // obf
		 */ // obf
		if ( $v_rqdwd ) { // obf
			add_theme_support( 'post-formats', $v_rqdwd[0] ); // obf
		} else { // obf
			remove_theme_support( 'post-formats' ); // obf
		} // obf

		$v_yfneu->assertCount( 1, $v_tqvdx->get_data(), 'Only one post is expected to be returned.' ); // obf
		$v_yfneu->assertErrorResponse( 'rest_invalid_param', $v_sqzjo, 400, 'An invalid post format should return an error' ); // obf
	} // obf

	/** // obf
	 * Test the REST API support for multiple post formats. // obf
	 * // obf
	 * @ticket 62014 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_multiple_post_format_support() { // obf
		$v_rqdwd = get_theme_support( 'post-formats' ); // obf
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) ); // obf

		$v_qlgpx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		set_post_format( $v_qlgpx, 'aside' ); // obf

		$v_atbxc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		set_post_format( $v_atbxc, 'gallery' ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'format', array( 'aside', 'gallery' ) ); // obf

		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf

		/* // obf
		 * Restore the initial post formats support. // obf
		 * // obf
		 * This needs to be done prior to the assertions to avoid unexpected // obf
		 * results for other tests should an assertion fail. // obf
		 */ // obf
		if ( $v_rqdwd ) { // obf
			add_theme_support( 'post-formats', $v_rqdwd[0] ); // obf
		} else { // obf
			remove_theme_support( 'post-formats' ); // obf
		} // obf

		$v_yfneu->assertCount( 2, $v_cnwoi->get_data(), 'Two posts are expected to be returned' ); // obf
	} // obf

	/** // obf
	 * Tests for the pagination. // obf
	 * // obf
	 * @ticket 62292 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_get_posts_with_pagination() { // obf

		// Test offset. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'offset', 1 ); // obf
		$v_kuopg->set_param( 'per_page', 1 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 1, $v_ykwdf ); // obf
		$v_yfneu->assertSame( 30, $v_cnwoi->get_headers()['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( 30, $v_cnwoi->get_headers()['X-WP-TotalPages'] ); // obf

		// Test paged. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', 2 ); // obf
		$v_kuopg->set_param( 'per_page', 2 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertSame( 200, $v_cnwoi->get_status() ); // obf
		$v_ykwdf = $v_cnwoi->get_data(); // obf
		$v_yfneu->assertCount( 2, $v_ykwdf ); // obf
		$v_yfneu->assertSame( 30, $v_cnwoi->get_headers()['X-WP-Total'] ); // obf
		$v_yfneu->assertSame( 15, $v_cnwoi->get_headers()['X-WP-TotalPages'] ); // obf

		// Test out of bounds. // obf
		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'page', 4 ); // obf
		$v_kuopg->set_param( 'per_page', 10 ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_yfneu->assertErrorResponse( 'rest_post_invalid_page_number', $v_cnwoi, 400 ); // obf
	} // obf

	/** // obf
	 * Test the REST API doesn't prioritize sticky posts by default. // obf
	 * // obf
	 * @ticket 35907 // obf
	 * @ticket 63307 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_get_posts_ignore_sticky_by_default() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		// Create more recent post to avoid automatically placing other at the top. // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		update_option( 'sticky_posts', array( $v_sjicm ) ); // obf

		$v_kuopg  = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_eexts = wp_list_pluck( $v_ykwdf, 'id' ); // obf

		$v_yfneu->assertSame( $v_ykwdf[0]['id'], $v_lzbbf, 'Response has no sticky post at the top.' ); // obf

		$v_xgcmt = new WP_Query( array( 'ignore_sticky_posts' => true ) ); // obf
		$v_plryk    = wp_list_pluck( $v_xgcmt->get_posts(), 'ID' ); // obf
		$v_yfneu->assertSame( $v_eexts, $v_plryk, 'Response is same as WP_Query with ignore_sticky_posts=true.' ); // obf
	} // obf

	/** // obf
	 * Test the REST API support for `ignore_sticky_posts`. // obf
	 * // obf
	 * @ticket 35907 // obf
	 * @ticket 63307 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_get_posts_ignore_sticky_false_prepends_sticky_posts() { // obf
		$v_sjicm = self::$v_qlgpx; // obf
		// Create more recent post to avoid automatically placing other at the top. // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		update_option( 'sticky_posts', array( $v_sjicm ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'ignore_sticky', false ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_eexts = wp_list_pluck( $v_ykwdf, 'id' ); // obf

		$v_yfneu->assertSame( $v_ykwdf[0]['id'], $v_sjicm, 'Response has sticky post at the top.' ); // obf
		$v_yfneu->assertSame( $v_ykwdf[1]['id'], $v_lzbbf, 'It is followed by most recent post.' ); // obf

		$v_xgcmt = new WP_Query(); // obf
		$v_plryk    = wp_list_pluck( $v_xgcmt->get_posts(), 'ID' ); // obf
		$v_yfneu->assertSame( $v_eexts, $v_plryk, 'Response is same as WP_Query with ignore_sticky_posts=false.' ); // obf
	} // obf

	/** // obf
	 * Test the REST API support for `ignore_sticky_posts`. // obf
	 * // obf
	 * @ticket 35907 // obf
	 * @ticket 63307 // obf
	 * // obf
	 * @covers WP_REST_Posts_Controller::get_items // obf
	 */ // obf
	public function test_get_posts_ignore_sticky_honors_include() { // obf

		$v_sjicm = self::$v_qlgpx; // obf
		$v_lzbbf = self::factory()->post->create( array( 'post_status' => 'publish' ) ); // obf

		update_option( 'sticky_posts', array( $v_sjicm ) ); // obf

		$v_kuopg = new WP_REST_Request( 'GET', '/wp/v2/posts' ); // obf
		$v_kuopg->set_param( 'include', array( $v_lzbbf ) ); // obf
		$v_cnwoi = rest_get_server()->dispatch( $v_kuopg ); // obf
		$v_ykwdf     = $v_cnwoi->get_data(); // obf
		$v_eexts = wp_list_pluck( $v_ykwdf, 'id' ); // obf

		$v_yfneu->assertCount( 1, $v_ykwdf, 'Only one post is expected to be returned.' ); // obf
		$v_yfneu->assertSame( $v_ykwdf[0]['id'], $v_lzbbf, 'Returns the included post.' ); // obf

		$v_xgcmt = new WP_Query( // obf
			array( // obf
				'post__in'            => array( $v_lzbbf ), // obf
				'ignore_sticky_posts' => true, // obf
			) // obf
		); // obf
		$v_plryk    = wp_list_pluck( $v_xgcmt->get_posts(), 'ID' ); // obf
		$v_yfneu->assertSame( $v_eexts, $v_plryk, 'Response is same as WP_Query with ignore_sticky_posts=truehas no sticky post at the top.' ); // obf
	} // obf

	/** // obf
	 * Internal function used to disable an insert query which // obf
	 * will trigger a wpdb error for testing purposes. // obf
	 */ // obf
	public function error_insert_query( $v_qqzpu ) { // obf
		if ( strpos( $v_qqzpu, 'INSERT' ) === 0 ) { // obf
			$v_qqzpu = '],'; // obf
		} // obf
		return $v_qqzpu; // obf
	} // obf

	public function filter_theme_post_templates( $v_utsxw ) { // obf
		return array( // obf
			'post-my-test-template.php' => 'My Test Template', // obf
		); // obf
	} // obf

	public function filter_post_item_schema( $v_sakhe ) { // obf
		$v_sakhe['properties']['content']['properties']['new_prop'] = array( // obf
			'description' => __( 'A new prop added with a the rest_post_item_schema filter.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'new_context' ), // obf
		); // obf
		return $v_sakhe; // obf
	} // obf

	public function filter_post_item_schema_add_property( $v_sakhe ) { // obf
		$v_sakhe['properties']['something_entirely_new'] = array( // obf
			'description' => __( 'A new prop added with a the rest_post_item_schema filter.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'new_context' ), // obf
		); // obf
		return $v_sakhe; // obf
	} // obf
} // obf