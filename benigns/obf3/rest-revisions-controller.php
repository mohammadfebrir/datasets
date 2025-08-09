

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Revisions_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Revisions_Controller extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_ayimr; // obf
	protected static $v_bvskg; // obf
	protected static $v_dydbx; // obf

	protected static $v_hlpty; // obf
	protected static $v_hvxck; // obf

	private $v_bxneg; // obf
	private $v_mvcin; // obf
	private $v_toslj; // obf
	private $v_bbbif; // obf
	private $v_efzdh; // obf
	private $v_nyyou; // obf
	private $v_akbag; // obf
	private $v_dkmyg; // obf
	private $v_lzmvm; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ckdzs ) { // obf
		self::$v_ayimr   = $v_ckdzs->post->create(); // obf
		self::$v_bvskg = $v_ckdzs->post->create(); // obf
		self::$v_dydbx   = $v_ckdzs->post->create( array( 'post_type' => 'page' ) ); // obf

		self::$v_hlpty      = $v_ckdzs->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_hvxck = $v_ckdzs->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_hlpty ); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is better.', // obf
				'ID'           => self::$v_ayimr, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is marvelous.', // obf
				'ID'           => self::$v_ayimr, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'This content is fantastic.', // obf
				'ID'           => self::$v_ayimr, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'A second post.', // obf
				'ID'           => self::$v_bvskg, // obf
			) // obf
		); // obf
		wp_update_post( // obf
			array( // obf
				'post_content' => 'A second post. How prolific.', // obf
				'ID'           => self::$v_bvskg, // obf
			) // obf
		); // obf
		wp_set_current_user( 0 ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Also deletes revisions. // obf
		wp_delete_post( self::$v_ayimr, true ); // obf
		wp_delete_post( self::$v_bvskg, true ); // obf
		wp_delete_post( self::$v_dydbx, true ); // obf

		self::delete_user( self::$v_hlpty ); // obf
		self::delete_user( self::$v_hvxck ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Set first post revision vars. // obf
		$v_mvcin             = wp_get_post_revisions( self::$v_ayimr ); // obf
		$v_ttjpw->total_revisions = count( $v_mvcin ); // obf
		$v_ttjpw->revisions       = $v_mvcin; // obf
		$v_ttjpw->revision_1      = array_pop( $v_mvcin ); // obf
		$v_ttjpw->revision_id1    = $v_ttjpw->revision_1->ID; // obf
		$v_ttjpw->revision_2      = array_pop( $v_mvcin ); // obf
		$v_ttjpw->revision_id2    = $v_ttjpw->revision_2->ID; // obf
		$v_ttjpw->revision_3      = array_pop( $v_mvcin ); // obf
		$v_ttjpw->revision_id3    = $v_ttjpw->revision_3->ID; // obf

		// Set second post revision vars. // obf
		$v_mvcin             = wp_get_post_revisions( self::$v_bvskg ); // obf
		$v_wxipt       = array_pop( $v_mvcin ); // obf
		$v_ttjpw->revision_2_1_id = $v_wxipt->ID; // obf
	} // obf

	public function _filter_map_meta_cap_remove_no_allow_revisions( $v_ggflo, $v_gutce, $v_logwn, $v_wdwnz ) { // obf
		if ( 'delete_post' !== $v_gutce || empty( $v_wdwnz ) ) { // obf
			return $v_ggflo; // obf
		} // obf
		$v_icvcu = get_post( $v_wdwnz[0] ); // obf
		if ( ! $v_icvcu || 'revision' !== $v_icvcu->post_type ) { // obf
			return $v_ggflo; // obf
		} // obf
		$v_lyqdv = array_search( 'do_not_allow', $v_ggflo, true ); // obf
		if ( false !== $v_lyqdv ) { // obf
			unset( $v_ggflo[ $v_lyqdv ] ); // obf
		} // obf
		return $v_ggflo; // obf
	} // obf

	public function test_register_routes() { // obf
		$v_xmrnz = rest_get_server()->get_routes(); // obf
		$v_ttjpw->assertArrayHasKey( '/wp/v2/posts/(?P<parent>[\d]+)/revisions', $v_xmrnz ); // obf
		$v_ttjpw->assertArrayHasKey( '/wp/v2/posts/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', $v_xmrnz ); // obf
		$v_ttjpw->assertArrayHasKey( '/wp/v2/pages/(?P<parent>[\d]+)/revisions', $v_xmrnz ); // obf
		$v_ttjpw->assertArrayHasKey( '/wp/v2/pages/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)', $v_xmrnz ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_smkbx  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSame( 'view', $v_rwykd['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ttjpw->assertSameSets( array( 'view', 'edit', 'embed' ), $v_rwykd['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_smkbx  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_1->ID ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSame( 'view', $v_rwykd['endpoints'][0]['args']['context']['default'] ); // obf
		$v_ttjpw->assertSameSets( array( 'view', 'edit', 'embed' ), $v_rwykd['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_ttjpw->assertCount( $v_ttjpw->total_revisions, $v_rwykd ); // obf

		// Reverse chronology. // obf
		$v_ttjpw->assertSame( $v_ttjpw->revision_id3, $v_rwykd[0]['id'] ); // obf
		$v_ttjpw->check_get_revision_response( $v_rwykd[0], $v_ttjpw->revision_3 ); // obf

		$v_ttjpw->assertSame( $v_ttjpw->revision_id2, $v_rwykd[1]['id'] ); // obf
		$v_ttjpw->check_get_revision_response( $v_rwykd[1], $v_ttjpw->revision_2 ); // obf

		$v_ttjpw->assertSame( $v_ttjpw->revision_id1, $v_rwykd[2]['id'] ); // obf
		$v_ttjpw->check_get_revision_response( $v_rwykd[2], $v_ttjpw->revision_1 ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_revisions_data() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_hhtae = 'rest_prepare_revision'; // obf
		$v_ldrnx    = new MockAction(); // obf
		$v_czbyw  = array( $v_ldrnx, 'filter' ); // obf

		add_filter( $v_hhtae, $v_czbyw ); // obf
		$v_smkbx  = new WP_REST_Request( 'HEAD', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		remove_filter( $v_hhtae, $v_czbyw ); // obf

		$v_ttjpw->assertNotWPError( $v_lzvzn ); // obf
		$v_lzvzn = rest_ensure_response( $v_lzvzn ); // obf

		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status(), 'The response status should be 200.' ); // obf
		$v_ttjpw->assertSame( 0, $v_ldrnx->get_call_count(), 'The "' . $v_hhtae . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_ttjpw->assertSame( array(), $v_lzvzn->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_rdcbp ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf

		$v_ttjpw->assertErrorResponse( 'rest_cannot_read', $v_lzvzn, 401 ); // obf
		wp_set_current_user( self::$v_hvxck ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_read', $v_lzvzn, 403 ); // obf
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
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_missing_parent( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_post_invalid_parent', $v_lzvzn, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_parent_post_type( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_dydbx . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_post_invalid_parent', $v_lzvzn, 404 ); // obf
	} // obf

	public function test_get_item() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_ttjpw->check_get_revision_response( $v_lzvzn, $v_ttjpw->revision_1 ); // obf
		$v_hrndo = array( // obf
			'author', // obf
			'date', // obf
			'date_gmt', // obf
			'modified', // obf
			'modified_gmt', // obf
			'guid', // obf
			'id', // obf
			'meta', // obf
			'parent', // obf
			'slug', // obf
			'title', // obf
			'excerpt', // obf
			'content', // obf
		); // obf
		$v_rwykd   = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSameSets( $v_hrndo, array_keys( $v_rwykd ) ); // obf
		$v_ttjpw->assertSame( self::$v_hlpty, $v_rwykd['author'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf

		$v_hhtae = 'rest_prepare_revision'; // obf
		$v_ldrnx    = new MockAction(); // obf
		$v_czbyw  = array( $v_ldrnx, 'filter' ); // obf
		add_filter( $v_hhtae, $v_czbyw ); // obf
		$v_xpkdi = new class() { // obf
			public static function add_custom_header( $v_lzvzn ) { // obf
				$v_lzvzn->header( 'X-Test-Header', 'Test' ); // obf

				return $v_lzvzn; // obf
			} // obf
		}; // obf
		add_filter( $v_hhtae, array( $v_xpkdi, 'add_custom_header' ) ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		remove_filter( $v_hhtae, $v_czbyw ); // obf
		remove_filter( $v_hhtae, array( $v_xpkdi, 'add_custom_header' ) ); // obf

		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status(), 'The response status should be 200.' ); // obf
		$v_ttjpw->assertSame( 1, $v_ldrnx->get_call_count(), 'The "' . $v_hhtae . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_qwaxv = $v_lzvzn->get_headers(); // obf
		$v_ttjpw->assertArrayHasKey( 'X-Test-Header', $v_qwaxv, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_ttjpw->assertSame( 'Test', $v_qwaxv['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'GET' === $v_rdcbp ) { // obf
			return null; // obf
		} // obf
		$v_ttjpw->assertSame( array(), $v_lzvzn->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_hsqlf The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_hsqlf ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( 'HEAD', sprintf( $v_hsqlf, self::$v_ayimr, $v_ttjpw->revision_id1 ) ); // obf
		$v_smkbx->set_param( '_fields', 'id' ); // obf
		$v_pcadb   = rest_get_server(); // obf
		$v_lzvzn = $v_pcadb->dispatch( $v_smkbx ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_lzvzn = apply_filters( 'rest_post_dispatch', $v_lzvzn, $v_pcadb, $v_smkbx ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf

			'get_item request'  => array( '/wp/v2/posts/%d/revisions/%d' ), // obf
			'get_items request' => array( '/wp/v2/posts/%d/revisions' ), // obf
		); // obf
	} // obf

	public function test_get_item_embed_context() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_smkbx->set_param( 'context', 'embed' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_hrndo   = array( // obf
			'author', // obf
			'date', // obf
			'id', // obf
			'parent', // obf
			'slug', // obf
			'title', // obf
			'excerpt', // obf
		); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSameSets( $v_hrndo, array_keys( $v_rwykd ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_rdcbp ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf

		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_read', $v_lzvzn, 401 ); // obf
		wp_set_current_user( self::$v_hvxck ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_read', $v_lzvzn, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_missing_parent( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_post_invalid_parent', $v_lzvzn, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_parent_post_type( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_dydbx . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_post_invalid_parent', $v_lzvzn, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 59875 // obf
	 */ // obf
	public function test_get_item_valid_parent_id() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertSame( self::$v_ayimr, $v_rwykd['parent'], "The returned revision's id should match the parent id." ); // obf
		$v_ttjpw->check_get_revision_response( $v_lzvzn, $v_ttjpw->revision_1 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 59875 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_parent_id( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_2_1_id ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_revision_parent_id_mismatch', $v_lzvzn, 404 ); // obf

		$v_kqsin = 'The revision does not belong to the specified parent with id of "' . self::$v_ayimr . '"'; // obf
		$v_ttjpw->assertSame( $v_kqsin, $v_lzvzn->as_error()->get_error_messages()[0], 'The message must contain the correct parent ID.' ); // obf
	} // obf

	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_smkbx->set_param( 'force', true ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_delete', $v_lzvzn, 403 ); // obf
		$v_ttjpw->assertNotNull( get_post( $v_ttjpw->revision_id1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 49645 // obf
	 */ // obf
	public function test_delete_item_parent_check() { // obf
		wp_set_current_user( self::$v_hvxck ); // obf
		$v_smkbx = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_smkbx->set_param( 'force', true ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_delete', $v_lzvzn, 403 ); // obf
		$v_ttjpw->assertNotNull( get_post( $v_ttjpw->revision_id1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43709 // obf
	 */ // obf
	public function test_delete_item_remove_do_not_allow() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		add_filter( 'map_meta_cap', array( $v_ttjpw, '_filter_map_meta_cap_remove_no_allow_revisions' ), 10, 4 ); // obf
		$v_smkbx = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_smkbx->set_param( 'force', true ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_ttjpw->assertNull( get_post( $v_ttjpw->revision_id1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43709 // obf
	 */ // obf
	public function test_delete_item_cannot_delete_parent() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_smkbx->set_param( 'force', true ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_delete', $v_lzvzn, 403 ); // obf
		$v_ttjpw->assertNotNull( get_post( $v_ttjpw->revision_id1 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38494 // obf
	 * @ticket 43709 // obf
	 */ // obf
	public function test_delete_item_no_trash() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		add_filter( 'map_meta_cap', array( $v_ttjpw, '_filter_map_meta_cap_remove_no_allow_revisions' ), 10, 4 ); // obf
		$v_smkbx  = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_trash_not_supported', $v_lzvzn, 501 ); // obf

		$v_smkbx->set_param( 'force', 'false' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_trash_not_supported', $v_lzvzn, 501 ); // obf

		// Ensure the revision still exists. // obf
		$v_ttjpw->assertNotNull( get_post( $v_ttjpw->revision_id1 ) ); // obf
	} // obf

	public function test_delete_item_no_permission() { // obf
		wp_set_current_user( self::$v_hvxck ); // obf
		$v_smkbx  = new WP_REST_Request( 'DELETE', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_cannot_delete', $v_lzvzn, 403 ); // obf
	} // obf

	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_ttjpw->check_get_revision_response( $v_lzvzn, $v_ttjpw->revision_1 ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_bvxjj = new WP_REST_Revisions_Controller( 'post' ); // obf
		$v_smkbx->set_param( 'context', 'edit' ); // obf
		$v_smkbx->set_param( '_fields', 'id,slug' ); // obf
		$v_ptzrg = get_post( $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = $v_bvxjj->prepare_item_for_response( $v_ptzrg, $v_smkbx ); // obf
		$v_ttjpw->assertSame( // obf
			array( // obf
				'id', // obf
				'slug', // obf
			), // obf
			array_keys( $v_lzvzn->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_smkbx    = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn   = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd       = $v_lzvzn->get_data(); // obf
		$v_yorjv = $v_rwykd['schema']['properties']; // obf
		$v_ttjpw->assertCount( 13, $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'author', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'content', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'date', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'date_gmt', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'excerpt', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'guid', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'id', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'modified', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'modified_gmt', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'parent', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'slug', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'title', $v_yorjv ); // obf
		$v_ttjpw->assertArrayHasKey( 'meta', $v_yorjv ); // obf
	} // obf

	public function test_create_item() { // obf
		$v_smkbx  = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_no_route', $v_lzvzn, 404 ); // obf
	} // obf

	public function test_update_item() { // obf
		$v_smkbx  = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_no_route', $v_lzvzn, 404 ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_micli = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'post-revision', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_micli, // obf
				'get_callback'    => array( $v_ttjpw, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_ttjpw, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_smkbx = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf

		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf

		$v_ttjpw->assertArrayHasKey( 'my_custom_int', $v_rwykd['schema']['properties'] ); // obf
		$v_ttjpw->assertSame( $v_micli, $v_rwykd['schema']['properties']['my_custom_int'] ); // obf

		wp_set_current_user( 1 ); // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf

		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertArrayHasKey( 'my_custom_int', $v_lzvzn->data ); // obf

		global $v_iboee; // obf
		$v_iboee = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_cdsea, $v_vunry ) { // obf
		return get_post_meta( $v_cdsea['id'], $v_vunry, true ); // obf
	} // obf

	public function additional_field_update_callback( $v_sflbl, $v_icvcu, $v_vunry ) { // obf
		update_post_meta( $v_icvcu->ID, $v_vunry, $v_sflbl ); // obf
	} // obf

	protected function check_get_revision_response( $v_lzvzn, $v_ptzrg ) { // obf
		if ( $v_lzvzn instanceof WP_REST_Response ) { // obf
			$v_hsxfr    = $v_lzvzn->get_links(); // obf
			$v_lzvzn = $v_lzvzn->get_data(); // obf
		} else { // obf
			$v_ttjpw->assertArrayHasKey( '_links', $v_lzvzn ); // obf
			$v_hsxfr = $v_lzvzn['_links']; // obf
		} // obf

		$v_ttjpw->assertEquals( $v_ptzrg->post_author, $v_lzvzn['author'] ); // obf

		$v_yjhor = apply_filters( 'the_content', $v_ptzrg->post_content ); // obf
		$v_ttjpw->assertSame( $v_yjhor, $v_lzvzn['content']['rendered'] ); // obf

		$v_ttjpw->assertSame( mysql_to_rfc3339( $v_ptzrg->post_date ), $v_lzvzn['date'] ); // obf
		$v_ttjpw->assertSame( mysql_to_rfc3339( $v_ptzrg->post_date_gmt ), $v_lzvzn['date_gmt'] ); // obf

		$v_dnojj = apply_filters( 'the_excerpt', apply_filters( 'get_the_excerpt', $v_ptzrg->post_excerpt, $v_ptzrg ) ); // obf
		$v_ttjpw->assertSame( $v_dnojj, $v_lzvzn['excerpt']['rendered'] ); // obf

		$v_tzcww = apply_filters( 'get_the_guid', $v_ptzrg->guid, $v_ptzrg->ID ); // obf
		$v_ttjpw->assertSame( $v_tzcww, $v_lzvzn['guid']['rendered'] ); // obf

		$v_ttjpw->assertSame( $v_ptzrg->ID, $v_lzvzn['id'] ); // obf
		$v_ttjpw->assertSame( mysql_to_rfc3339( $v_ptzrg->post_modified ), $v_lzvzn['modified'] ); // obf
		$v_ttjpw->assertSame( mysql_to_rfc3339( $v_ptzrg->post_modified_gmt ), $v_lzvzn['modified_gmt'] ); // obf
		$v_ttjpw->assertSame( $v_ptzrg->post_name, $v_lzvzn['slug'] ); // obf

		$v_attqd = get_the_title( $v_ptzrg->ID ); // obf
		$v_ttjpw->assertSame( $v_attqd, $v_lzvzn['title']['rendered'] ); // obf

		$v_ezwbo            = get_post( $v_ptzrg->post_parent ); // obf
		$v_hmxdg = new WP_REST_Posts_Controller( $v_ezwbo->post_type ); // obf
		$v_ixpjs     = get_post_type_object( $v_ezwbo->post_type ); // obf
		$v_sgxpi       = ! empty( $v_ixpjs->rest_base ) ? $v_ixpjs->rest_base : $v_ixpjs->name; // obf
		$v_ttjpw->assertSame( rest_url( '/wp/v2/' . $v_sgxpi . '/' . $v_ptzrg->post_parent ), $v_hsxfr['parent'][0]['href'] ); // obf
	} // obf

	public function test_get_item_sets_up_postdata() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf
		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions/' . $v_ttjpw->revision_id1 ); // obf
		rest_get_server()->dispatch( $v_smkbx ); // obf

		$v_icvcu           = get_post(); // obf
		$v_ntdkm = wp_is_post_revision( $v_icvcu->ID ); // obf

		$v_ttjpw->assertSame( $v_icvcu->ID, $v_ttjpw->revision_id1 ); // obf
		$v_ttjpw->assertSame( $v_ntdkm, self::$v_ayimr ); // obf
	} // obf

	/** // obf
	 * Test the pagination header of the first page. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_header_of_the_first_page( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_jitqq  = '/wp/v2/posts/' . self::$v_ayimr . '/revisions'; // obf
		$v_nbmxb    = 2; // obf
		$v_bdmxk = (int) ceil( $v_ttjpw->total_revisions / $v_nbmxb ); // obf
		$v_yywdi        = 1;  // First page. // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, $v_jitqq ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_qwaxv  = $v_lzvzn->get_headers(); // obf
		$v_ttjpw->assertSame( $v_ttjpw->total_revisions, $v_qwaxv['X-WP-Total'] ); // obf
		$v_ttjpw->assertSame( $v_bdmxk, $v_qwaxv['X-WP-TotalPages'] ); // obf
		$v_ixluv = add_query_arg( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi + 1, // obf
			), // obf
			rest_url( $v_jitqq ) // obf
		); // obf
		$v_ttjpw->assertStringNotContainsString( 'rel="prev"', $v_qwaxv['Link'] ); // obf
		$v_ttjpw->assertStringContainsString( '<' . $v_ixluv . '>; rel="next"', $v_qwaxv['Link'] ); // obf
	} // obf

	/** // obf
	 * Test the pagination header of the last page. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_header_of_the_last_page( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_jitqq  = '/wp/v2/posts/' . self::$v_ayimr . '/revisions'; // obf
		$v_nbmxb    = 2; // obf
		$v_bdmxk = (int) ceil( $v_ttjpw->total_revisions / $v_nbmxb ); // obf
		$v_yywdi        = 2;  // Last page. // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, $v_jitqq ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_qwaxv  = $v_lzvzn->get_headers(); // obf
		$v_ttjpw->assertSame( $v_ttjpw->total_revisions, $v_qwaxv['X-WP-Total'] ); // obf
		$v_ttjpw->assertSame( $v_bdmxk, $v_qwaxv['X-WP-TotalPages'] ); // obf
		$v_zowlk = add_query_arg( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi - 1, // obf
			), // obf
			rest_url( $v_jitqq ) // obf
		); // obf
		$v_ttjpw->assertStringContainsString( '<' . $v_zowlk . '>; rel="prev"', $v_qwaxv['Link'] ); // obf
	} // obf


	/** // obf
	 * Test that invalid 'per_page' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_per_page_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = -1; // Invalid number. // obf
		$v_qpidm  = 'rest_invalid_param'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'per_page', $v_nbmxb ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that out of bounds 'page' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_out_of_bounds_page_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_bdmxk     = (int) ceil( $v_ttjpw->total_revisions / $v_nbmxb ); // obf
		$v_yywdi            = $v_bdmxk + 1; // Out of bound page. // obf
		$v_qpidm  = 'rest_revision_invalid_page_number'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that impossibly high 'page' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_max_pages_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_yywdi            = REST_TESTS_IMPOSSIBLY_HIGH_NUMBER; // Invalid number. // obf
		$v_qpidm  = 'rest_revision_invalid_page_number'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test the search query. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_search_query() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_gporf    = 'better'; // obf
		$v_gvmzk   = 1; // obf
		$v_vuzxm = 'This content is better.'; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'search', $v_gporf ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_rwykd     = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_rwykd ); // obf
		$v_ttjpw->assertStringContainsString( $v_vuzxm, $v_rwykd[0]['content']['rendered'] ); // obf
	} // obf

	/** // obf
	 * Test that the default query should fetch all revisions. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_default_query_should_fetch_all_revisions() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_gvmzk = $v_ttjpw->total_revisions; // obf

		$v_smkbx  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_lzvzn->get_data() ); // obf
	} // obf

	/** // obf
	 * Test that 'offset' query shouldn't work without 'per_page' (fallback -1). // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_offset_should_not_work_without_per_page() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_dnxgf         = 1; // obf
		$v_gvmzk = $v_ttjpw->total_revisions; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'offset', $v_dnxgf ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_lzvzn->get_data() ); // obf
	} // obf

	/** // obf
	 * Test that 'offset' query should work with 'per_page'. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_offset_should_work_with_per_page() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb       = 2; // obf
		$v_dnxgf         = 1; // obf
		$v_gvmzk = 2; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_lzvzn->get_data() ); // obf
	} // obf

	/** // obf
	 * Test that 'offset' query should take priority over 'page'. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_offset_should_take_priority_over_page() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb       = 2; // obf
		$v_dnxgf         = 1; // obf
		$v_yywdi           = 1; // obf
		$v_gvmzk = 2; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_lzvzn->get_data() ); // obf
	} // obf

	/** // obf
	 * Test that 'offset' query, as the total revisions count, should return empty data. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_total_revisions_offset_should_return_empty_data() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_dnxgf          = $v_ttjpw->total_revisions; // obf
		$v_qpidm  = 'rest_revision_invalid_offset_number'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that out of bound 'offset' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_out_of_bound_offset_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_dnxgf          = $v_ttjpw->total_revisions + 1; // obf
		$v_qpidm  = 'rest_revision_invalid_offset_number'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that impossible high number for 'offset' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_impossible_high_number_offset_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_dnxgf          = REST_TESTS_IMPOSSIBLY_HIGH_NUMBER; // obf
		$v_qpidm  = 'rest_revision_invalid_offset_number'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that invalid 'offset' query should error. // obf
	 * // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 40510 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_rdcbp The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_offset_should_error( $v_rdcbp ) { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb        = 2; // obf
		$v_dnxgf          = 'moreplease'; // obf
		$v_qpidm  = 'rest_invalid_param'; // obf
		$v_gcwrd = 400; // obf

		$v_smkbx = new WP_REST_Request( $v_rdcbp, '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => $v_dnxgf, // obf
				'per_page' => $v_nbmxb, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( $v_qpidm, $v_lzvzn, $v_gcwrd ); // obf
	} // obf

	/** // obf
	 * Test that out of bounds 'page' query should not error when offset is provided, // obf
	 * because it takes precedence. // obf
	 * // obf
	 * @ticket 40510 // obf
	 */ // obf
	public function test_get_items_out_of_bounds_page_should_not_error_if_offset() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		$v_nbmxb       = 2; // obf
		$v_bdmxk    = (int) ceil( $v_ttjpw->total_revisions / $v_nbmxb ); // obf
		$v_yywdi           = $v_bdmxk + 1; // Out of bound page. // obf
		$v_gvmzk = 2; // obf

		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_query_params( // obf
			array( // obf
				'offset'   => 1, // obf
				'per_page' => $v_nbmxb, // obf
				'page'     => $v_yywdi, // obf
			) // obf
		); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertCount( $v_gvmzk, $v_lzvzn->get_data() ); // obf
	} // obf

	/** // obf
	 * Tests for the pagination. // obf
	 * // obf
	 * @ticket 62292 // obf
	 * // obf
	 * @covers WP_REST_Revisions_Controller::get_items // obf
	 */ // obf
	public function test_get_revisions_pagination() { // obf
		wp_set_current_user( self::$v_hlpty ); // obf

		// Test offset. // obf
		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'offset', 1 ); // obf
		$v_smkbx->set_param( 'per_page', 1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_rwykd = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertCount( 1, $v_rwykd ); // obf
		$v_ttjpw->assertSame( $v_ttjpw->total_revisions, $v_lzvzn->get_headers()['X-WP-Total'] ); // obf
		$v_ttjpw->assertSame( $v_ttjpw->total_revisions, $v_lzvzn->get_headers()['X-WP-TotalPages'] ); // obf

		// Test paged. // obf
		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'page', 2 ); // obf
		$v_smkbx->set_param( 'per_page', 2 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertSame( 200, $v_lzvzn->get_status() ); // obf
		$v_rwykd = $v_lzvzn->get_data(); // obf
		$v_ttjpw->assertCount( 1, $v_rwykd ); // obf
		$v_ttjpw->assertSame( $v_ttjpw->total_revisions, $v_lzvzn->get_headers()['X-WP-Total'] ); // obf
		$v_ttjpw->assertSame( (int) ceil( $v_ttjpw->total_revisions / 2 ), $v_lzvzn->get_headers()['X-WP-TotalPages'] ); // obf

		// Test out of bounds. // obf
		$v_smkbx = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_ayimr . '/revisions' ); // obf
		$v_smkbx->set_param( 'page', $v_ttjpw->total_revisions + 1 ); // obf
		$v_smkbx->set_param( 'per_page', 1 ); // obf
		$v_lzvzn = rest_get_server()->dispatch( $v_smkbx ); // obf
		$v_ttjpw->assertErrorResponse( 'rest_revision_invalid_page_number', $v_lzvzn, 400 ); // obf
	} // obf
} // obf