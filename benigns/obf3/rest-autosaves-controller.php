

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Autosaves_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi-autosave // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Autosaves_Controller extends WP_Test_REST_Post_Type_Controller_Testcase { // obf
	protected static $v_wvnmz; // obf
	protected static $v_wnopc; // obf
	protected static $v_muzeg; // obf

	protected static $v_bsyxc; // obf
	protected static $v_bjjjr; // obf

	protected static $v_mpjat; // obf
	protected static $v_psnbv; // obf

	protected static $v_jtbxw; // obf
	protected static $v_vlknm; // obf
	protected static $v_usclx; // obf

	private $v_hvqdo; // obf

	protected function set_post_data( $v_isjfe = array() ) { // obf
		$v_hsgql = array( // obf
			'title'   => 'Post Title', // obf
			'content' => 'Post content', // obf
			'excerpt' => 'Post excerpt', // obf
			'name'    => 'test', // obf
			'author'  => get_current_user_id(), // obf
		); // obf

		return wp_parse_args( $v_isjfe, $v_hsgql ); // obf
	} // obf

	protected function check_create_autosave_response( $v_wbgyj ) { // obf
		$v_jewfy->assertNotWPError( $v_wbgyj ); // obf
		$v_wbgyj = rest_ensure_response( $v_wbgyj ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf

		$v_jewfy->assertArrayHasKey( 'content', $v_zklyj ); // obf
		$v_jewfy->assertArrayHasKey( 'excerpt', $v_zklyj ); // obf
		$v_jewfy->assertArrayHasKey( 'title', $v_zklyj ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bqgul ) { // obf
		self::$v_wvnmz = $v_bqgul->post->create(); // obf
		self::$v_wnopc = $v_bqgul->post->create( array( 'post_type' => 'page' ) ); // obf

		self::$v_mpjat      = $v_bqgul->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_psnbv = $v_bqgul->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_mpjat ); // obf

		// Create an autosave. // obf
		self::$v_bsyxc = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'This content is better.', // obf
				'post_ID'      => self::$v_wvnmz, // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf

		self::$v_bjjjr = wp_create_post_autosave( // obf
			array( // obf
				'post_content' => 'This content is better.', // obf
				'post_ID'      => self::$v_wnopc, // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf

		self::$v_muzeg       = $v_bqgul->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		self::$v_jtbxw      = $v_bqgul->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		self::$v_vlknm       = $v_bqgul->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => self::$v_jtbxw, // obf
			) // obf
		); // obf
		self::$v_usclx = $v_bqgul->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => self::$v_jtbxw, // obf
				// The "update post" behavior of the autosave endpoint only occurs // obf
				// when saving a draft/auto-draft authored by the current user. // obf
				'post_status' => 'draft', // obf
				'post_author' => self::$v_mpjat, // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		// Also deletes revisions. // obf
		wp_delete_post( self::$v_wvnmz, true ); // obf
		wp_delete_post( self::$v_wnopc, true ); // obf

		self::delete_user( self::$v_mpjat ); // obf
		self::delete_user( self::$v_psnbv ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_jewfy->post_autosave = wp_get_post_autosave( self::$v_wvnmz ); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_mbvzn = rest_get_server()->get_routes(); // obf
		$v_jewfy->assertArrayHasKey( '/wp/v2/posts/(?P<id>[\d]+)/autosaves', $v_mbvzn ); // obf
		$v_jewfy->assertArrayHasKey( '/wp/v2/posts/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', $v_mbvzn ); // obf
		$v_jewfy->assertArrayHasKey( '/wp/v2/pages/(?P<id>[\d]+)/autosaves', $v_mbvzn ); // obf
		$v_jewfy->assertArrayHasKey( '/wp/v2/pages/(?P<parent>[\d]+)/autosaves/(?P<id>[\d]+)', $v_mbvzn ); // obf
	} // obf

	public function test_context_param() { // obf

		// Collection. // obf
		$v_xncuk  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertSame( 'view', $v_zklyj['endpoints'][0]['args']['context']['default'] ); // obf
		$v_jewfy->assertSameSets( array( 'view', 'edit', 'embed' ), $v_zklyj['endpoints'][0]['args']['context']['enum'] ); // obf

		// Single. // obf
		$v_xncuk  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertSame( 'view', $v_zklyj['endpoints'][0]['args']['context']['default'] ); // obf
		$v_jewfy->assertSameSets( array( 'view', 'edit', 'embed' ), $v_zklyj['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_xncuk  = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf
		$v_bvqud     = array_keys( $v_zklyj['endpoints'][0]['args'] ); // obf
		sort( $v_bvqud ); // obf
		$v_jewfy->assertSame( // obf
			array( // obf
				'context', // obf
				'parent', // obf
			), // obf
			$v_bvqud // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertSame( 200, $v_wbgyj->get_status() ); // obf
		$v_jewfy->assertCount( 1, $v_zklyj ); // obf

		$v_jewfy->assertSame( self::$v_bsyxc, $v_zklyj[0]['id'] ); // obf

		$v_jewfy->check_get_autosave_response( $v_zklyj[0], $v_jewfy->post_autosave ); // obf
	} // obf

	/** // obf
	 * @ticket 56481 // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_autosaves_data() { // obf
		$v_xncuk = new WP_REST_Request( 'HEAD', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf

		$v_qfkmb = 'rest_prepare_autosave'; // obf
		$v_fypvt    = new MockAction(); // obf
		$v_vylhv  = array( $v_fypvt, 'filter' ); // obf

		add_filter( $v_qfkmb, $v_vylhv ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		remove_filter( $v_qfkmb, $v_vylhv ); // obf

		$v_jewfy->assertNotWPError( $v_wbgyj ); // obf
		$v_jewfy->assertSame( 200, $v_wbgyj->get_status(), 'The response status should be 200.' ); // obf
		$v_jewfy->assertSame( 0, $v_fypvt->get_call_count(), 'The "' . $v_qfkmb . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_jewfy->assertSame( array(), $v_wbgyj->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_ruyvq ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_xncuk  = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_cannot_read', $v_wbgyj, 401 ); // obf
		wp_set_current_user( self::$v_psnbv ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_cannot_read', $v_wbgyj, 403 ); // obf
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
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_missing_parent( $v_ruyvq ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_post_invalid_parent', $v_wbgyj, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_invalid_parent_post_type( $v_ruyvq ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . self::$v_wnopc . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_post_invalid_parent', $v_wbgyj, 404 ); // obf
	} // obf

	public function test_get_item() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertSame( 200, $v_wbgyj->get_status() ); // obf
		$v_zklyj = $v_wbgyj->get_data(); // obf

		$v_jewfy->check_get_autosave_response( $v_wbgyj, $v_jewfy->post_autosave ); // obf
		$v_lbhav = array( // obf
			'author', // obf
			'date', // obf
			'date_gmt', // obf
			'id', // obf
			'meta', // obf
			'modified', // obf
			'modified_gmt', // obf
			'parent', // obf
			'slug', // obf
			'guid', // obf
			'title', // obf
			'excerpt', // obf
			'content', // obf
		); // obf
		$v_jewfy->assertSameSets( $v_lbhav, array_keys( $v_zklyj ) ); // obf
		$v_jewfy->assertSame( self::$v_mpjat, $v_zklyj['author'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_ruyvq ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf

		$v_qfkmb = 'rest_prepare_autosave'; // obf
		$v_fypvt    = new MockAction(); // obf
		$v_vylhv  = array( $v_fypvt, 'filter' ); // obf
		add_filter( $v_qfkmb, $v_vylhv ); // obf
		$v_upboh = new class() { // obf
			public static function add_custom_header( $v_wbgyj ) { // obf
				$v_wbgyj->header( 'X-Test-Header', 'Test' ); // obf

				return $v_wbgyj; // obf
			} // obf
		}; // obf
		add_filter( $v_qfkmb, array( $v_upboh, 'add_custom_header' ) ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		remove_filter( $v_qfkmb, $v_vylhv ); // obf
		remove_filter( $v_qfkmb, array( $v_upboh, 'add_custom_header' ) ); // obf

		$v_jewfy->assertSame( 200, $v_wbgyj->get_status(), 'The response status should be 200.' ); // obf
		$v_jewfy->assertSame( 1, $v_fypvt->get_call_count(), 'The "' . $v_qfkmb . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_lqqls = $v_wbgyj->get_headers(); // obf
		$v_jewfy->assertArrayHasKey( 'X-Test-Header', $v_lqqls, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_jewfy->assertSame( 'Test', $v_lqqls['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_ruyvq ) { // obf
			return null; // obf
		} // obf
		$v_jewfy->assertSame( array(), $v_wbgyj->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	public function test_get_item_embed_context() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		$v_xncuk->set_param( 'context', 'embed' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_lbhav   = array( // obf
			'author', // obf
			'date', // obf
			'id', // obf
			'parent', // obf
			'slug', // obf
			'title', // obf
			'excerpt', // obf
		); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertSameSets( $v_lbhav, array_keys( $v_zklyj ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_ruyvq ) { // obf
		$v_xncuk = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		wp_set_current_user( self::$v_psnbv ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_cannot_read', $v_wbgyj, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_missing_parent( $v_ruyvq ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER . '/autosaves/' . self::$v_bsyxc ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_post_invalid_parent', $v_wbgyj, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ruyvq The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_invalid_parent_post_type( $v_ruyvq ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( $v_ruyvq, '/wp/v2/posts/' . self::$v_wnopc . '/autosaves' ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertErrorResponse( 'rest_post_invalid_parent', $v_wbgyj, 404 ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_delete_item() { // obf
		// Controller does not implement delete_item(). // obf
	} // obf

	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk  = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertSame( 200, $v_wbgyj->get_status() ); // obf
		$v_jewfy->check_get_autosave_response( $v_wbgyj, $v_jewfy->post_autosave ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_xncuk    = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_wbgyj   = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj       = $v_wbgyj->get_data(); // obf
		$v_tmmos = $v_zklyj['schema']['properties']; // obf
		$v_jewfy->assertCount( 14, $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'author', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'content', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'date', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'date_gmt', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'excerpt', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'guid', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'id', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'modified', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'modified_gmt', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'parent', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'slug', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'title', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'preview_link', $v_tmmos ); // obf
		$v_jewfy->assertArrayHasKey( 'meta', $v_tmmos ); // obf
	} // obf

	public function test_create_item() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id' => self::$v_wvnmz, // obf
			) // obf
		); // obf
		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->check_create_autosave_response( $v_wbgyj ); // obf
	} // obf

	public function test_update_item() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'     => self::$v_wvnmz, // obf
				'author' => self::$v_psnbv, // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->check_create_autosave_response( $v_wbgyj ); // obf
	} // obf

	public function test_update_item_with_meta() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		register_post_meta( // obf
			'post', // obf
			'foo', // obf
			array( // obf
				'show_in_rest'      => true, // obf
				'revisions_enabled' => true, // obf
				'single'            => true, // obf
			) // obf
		); // obf
		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'     => self::$v_wvnmz, // obf
				'author' => self::$v_psnbv, // obf
				'meta'   => array( // obf
					'foo' => 'bar', // obf
				), // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->check_create_autosave_response( $v_wbgyj ); // obf

		$v_zklyj = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertArrayHasKey( 'meta', $v_zklyj ); // obf
		$v_jewfy->assertArrayHasKey( 'foo', $v_zklyj['meta'] ); // obf
		$v_jewfy->assertSame( 'bar', $v_zklyj['meta']['foo'] ); // obf
	} // obf

	public function test_update_item_with_json_meta() { // obf
		$v_lvomv = '[{\"content\":\"foot 1\",\"id\":\"fa97a10d-7401-42b9-ac54-df8f4510749a\"},{\"content\":\"fdddddoot 2\\\"\",\"id\":\"2216d0aa-34b8-42b4-b441-84dedc0406e0\"}]'; // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		register_post_meta( // obf
			'post', // obf
			'foo', // obf
			array( // obf
				'show_in_rest'      => true, // obf
				'revisions_enabled' => true, // obf
				'single'            => true, // obf
			) // obf
		); // obf
		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'     => self::$v_wvnmz, // obf
				'author' => self::$v_psnbv, // obf
				'meta'   => array( // obf
					'foo' => $v_lvomv, // obf
				), // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->check_create_autosave_response( $v_wbgyj ); // obf

		$v_zklyj = $v_wbgyj->get_data(); // obf
		$v_jewfy->assertArrayHasKey( 'meta', $v_zklyj ); // obf
		$v_jewfy->assertArrayHasKey( 'foo', $v_zklyj['meta'] ); // obf
		$v_jpevg = json_decode( wp_unslash( $v_zklyj['meta']['foo'] ), true ); // obf
		$v_jewfy->assertNotNull( $v_jpevg ); // obf
	} // obf

	public function test_update_item_nopriv() { // obf
		wp_set_current_user( self::$v_psnbv ); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'     => self::$v_wvnmz, // obf
				'author' => self::$v_mpjat, // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->assertErrorResponse( 'rest_cannot_edit', $v_wbgyj, 403 ); // obf
	} // obf

	public function test_rest_autosave_published_post() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/json' ); // obf

		$v_wnxsq = get_post( self::$v_wvnmz ); // obf

		$v_alsvi = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'      => self::$v_wvnmz, // obf
				'content' => 'Updated post \ content', // obf
				'excerpt' => $v_wnxsq->post_excerpt, // obf
				'title'   => $v_wnxsq->post_title, // obf
			) // obf
		); // obf

		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_uyywo = $v_wbgyj->get_data(); // obf

		$v_jewfy->assertSame( $v_wnxsq->ID, $v_uyywo['parent'] ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_title, $v_uyywo['title']['raw'] ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_excerpt, $v_uyywo['excerpt']['raw'] ); // obf

		// Updated post_content. // obf
		$v_jewfy->assertNotEquals( $v_wnxsq->post_content, $v_uyywo['content']['raw'] ); // obf

		$v_eyyag = wp_get_post_autosave( self::$v_wvnmz ); // obf
		$v_jewfy->assertSame( $v_alsvi['title'], $v_eyyag->post_title ); // obf
		$v_jewfy->assertSame( $v_alsvi['content'], $v_eyyag->post_content ); // obf
		$v_jewfy->assertSame( $v_alsvi['excerpt'], $v_eyyag->post_excerpt ); // obf
	} // obf

	public function test_rest_autosave_draft_post_same_author() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_illad = array( // obf
			'post_content' => 'Test post content', // obf
			'post_title'   => 'Test post title', // obf
			'post_excerpt' => 'Test post excerpt', // obf
		); // obf
		$v_wvnmz   = wp_insert_post( $v_illad ); // obf

		$v_alsvi = array( // obf
			'id'      => $v_wvnmz, // obf
			'content' => 'Updated post \ content', // obf
			'title'   => 'Updated post title', // obf
		); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/json' ); // obf
		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_uyywo = $v_wbgyj->get_data(); // obf
		$v_iwjuu     = get_post( $v_wvnmz ); // obf

		$v_jewfy->assertSame( $v_wvnmz, $v_uyywo['id'] ); // obf
		// The draft post should be updated. // obf
		$v_jewfy->assertSame( $v_alsvi['content'], $v_uyywo['content']['raw'] ); // obf
		$v_jewfy->assertSame( $v_alsvi['title'], $v_uyywo['title']['raw'] ); // obf
		$v_jewfy->assertSame( $v_alsvi['content'], $v_iwjuu->post_content ); // obf
		$v_jewfy->assertSame( $v_alsvi['title'], $v_iwjuu->post_title ); // obf

		// Not updated. // obf
		$v_jewfy->assertSame( $v_illad['post_excerpt'], $v_iwjuu->post_excerpt ); // obf

		wp_delete_post( $v_wvnmz ); // obf
	} // obf

	public function test_rest_autosave_draft_post_different_author() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_illad = array( // obf
			'post_content' => 'Test post content', // obf
			'post_title'   => 'Test post title', // obf
			'post_excerpt' => 'Test post excerpt', // obf
			'post_author'  => self::$v_mpjat + 1, // obf
		); // obf
		$v_wvnmz   = wp_insert_post( $v_illad ); // obf

		$v_alsvi = array( // obf
			'id'      => $v_wvnmz, // obf
			'content' => 'Updated post content', // obf
			'excerpt' => $v_illad['post_excerpt'], // obf
			'title'   => $v_illad['post_title'], // obf
		); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/json' ); // obf
		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf

		$v_wbgyj     = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_uyywo     = $v_wbgyj->get_data(); // obf
		$v_wnxsq = get_post( $v_wvnmz ); // obf

		$v_jewfy->assertSame( $v_wnxsq->ID, $v_uyywo['parent'] ); // obf

		// The draft post shouldn't change. // obf
		$v_jewfy->assertSame( $v_wnxsq->post_title, $v_illad['post_title'] ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_content, $v_illad['post_content'] ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_excerpt, $v_illad['post_excerpt'] ); // obf

		$v_eyyag = wp_get_post_autosave( $v_wvnmz ); // obf

		// No changes. // obf
		$v_jewfy->assertSame( $v_wnxsq->post_title, $v_eyyag->post_title ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_excerpt, $v_eyyag->post_excerpt ); // obf

		// Has changes. // obf
		$v_jewfy->assertSame( $v_alsvi['content'], $v_eyyag->post_content ); // obf

		wp_delete_post( $v_wvnmz ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf
		$v_rofjv = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'post-revision', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_rofjv, // obf
				'get_callback'    => array( $v_jewfy, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_jewfy, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_xncuk = new WP_REST_Request( 'OPTIONS', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf

		$v_jewfy->assertArrayHasKey( 'my_custom_int', $v_zklyj['schema']['properties'] ); // obf
		$v_jewfy->assertSame( $v_rofjv, $v_zklyj['schema']['properties']['my_custom_int'] ); // obf

		wp_set_current_user( 1 ); // obf

		$v_xncuk = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertArrayHasKey( 'my_custom_int', $v_wbgyj->data ); // obf

		global $v_uebbt; // obf
		$v_uebbt = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_qddej, $v_wkglk ) { // obf
		return get_post_meta( $v_qddej['id'], $v_wkglk, true ); // obf
	} // obf

	public function additional_field_update_callback( $v_pqmoa, $v_iwjuu, $v_wkglk ) { // obf
		update_post_meta( $v_iwjuu->ID, $v_wkglk, $v_pqmoa ); // obf
	} // obf

	protected function check_get_autosave_response( $v_wbgyj, $v_nvqbg ) { // obf
		if ( $v_wbgyj instanceof WP_REST_Response ) { // obf
			$v_pylpt    = $v_wbgyj->get_links(); // obf
			$v_wbgyj = $v_wbgyj->get_data(); // obf
		} else { // obf
			$v_jewfy->assertArrayHasKey( '_links', $v_wbgyj ); // obf
			$v_pylpt = $v_wbgyj['_links']; // obf
		} // obf

		$v_jewfy->assertEquals( $v_nvqbg->post_author, $v_wbgyj['author'] ); // obf

		$v_imsli = apply_filters( 'the_content', $v_nvqbg->post_content ); // obf
		$v_jewfy->assertSame( $v_imsli, $v_wbgyj['content']['rendered'] ); // obf

		$v_jewfy->assertSame( mysql_to_rfc3339( $v_nvqbg->post_date ), $v_wbgyj['date'] ); //@codingStandardsIgnoreLine // obf
		$v_jewfy->assertSame( mysql_to_rfc3339( $v_nvqbg->post_date_gmt ), $v_wbgyj['date_gmt'] ); //@codingStandardsIgnoreLine // obf

		$v_pjrdn = apply_filters( 'get_the_guid', $v_nvqbg->guid, $v_nvqbg->ID ); // obf
		$v_jewfy->assertSame( $v_pjrdn, $v_wbgyj['guid']['rendered'] ); // obf

		$v_jewfy->assertSame( $v_nvqbg->ID, $v_wbgyj['id'] ); // obf
		$v_jewfy->assertSame( mysql_to_rfc3339( $v_nvqbg->post_modified ), $v_wbgyj['modified'] ); //@codingStandardsIgnoreLine // obf
		$v_jewfy->assertSame( mysql_to_rfc3339( $v_nvqbg->post_modified_gmt ), $v_wbgyj['modified_gmt'] ); //@codingStandardsIgnoreLine // obf
		$v_jewfy->assertSame( $v_nvqbg->post_name, $v_wbgyj['slug'] ); // obf

		$v_vruwv = get_the_title( $v_nvqbg->ID ); // obf
		$v_jewfy->assertSame( $v_vruwv, $v_wbgyj['title']['rendered'] ); // obf

		$v_hxmzx            = get_post( $v_nvqbg->post_parent ); // obf
		$v_qtwzq = new WP_REST_Posts_Controller( $v_hxmzx->post_type ); // obf
		$v_qnsyi     = get_post_type_object( $v_hxmzx->post_type ); // obf
		$v_wlirm       = ! empty( $v_qnsyi->rest_base ) ? $v_qnsyi->rest_base : $v_qnsyi->name; // obf
		$v_jewfy->assertSame( rest_url( '/wp/v2/' . $v_wlirm . '/' . $v_nvqbg->post_parent ), $v_pylpt['parent'][0]['href'] ); // obf
	} // obf

	public function test_get_item_sets_up_postdata() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'GET', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves/' . self::$v_bsyxc ); // obf
		rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_iwjuu           = get_post(); // obf
		$v_wfdai = wp_is_post_revision( $v_iwjuu->ID ); // obf

		$v_jewfy->assertSame( $v_iwjuu->ID, self::$v_bsyxc ); // obf
		$v_jewfy->assertSame( $v_wfdai, self::$v_wvnmz ); // obf
	} // obf

	public function test_update_item_draft_page_with_parent() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/pages/' . self::$v_usclx . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'     => self::$v_usclx, // obf
				'author' => self::$v_mpjat, // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf

		$v_jewfy->assertSame( self::$v_usclx, $v_zklyj['id'] ); // obf
		$v_jewfy->assertSame( self::$v_jtbxw, $v_zklyj['parent'] ); // obf
	} // obf

	public function test_schema_validation_is_applied() { // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/pages/' . self::$v_muzeg . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf

		$v_rxnog = $v_jewfy->set_post_data( // obf
			array( // obf
				'id'             => self::$v_muzeg, // obf
				'comment_status' => 'garbage', // obf
			) // obf
		); // obf

		$v_xncuk->set_body_params( $v_rxnog ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_jewfy->assertNotEquals( 'garbage', get_post( self::$v_muzeg )->comment_status ); // obf
	} // obf

	/** // obf
	 * Test ensuring that autosave from the original author doesn't overwrite changes after it has been taken over by a 2nd author. // obf
	 * // obf
	 * @ticket 55659 // obf
	 */ // obf
	public function test_rest_autosave_draft_post_locked_to_different_author() { // obf

		// Create a post by the editor. // obf
		$v_illad = array( // obf
			'post_content' => 'Test post content', // obf
			'post_title'   => 'Test post title', // obf
			'post_excerpt' => 'Test post excerpt', // obf
			'post_author'  => self::$v_mpjat, // obf
			'post_status'  => 'draft', // obf
		); // obf
		$v_wvnmz   = wp_insert_post( $v_illad ); // obf

		// Set the post lock to the contributor, simulating a takeover of the post. // obf
		wp_set_current_user( self::$v_psnbv ); // obf
		wp_set_post_lock( $v_wvnmz ); // obf

		// Update the post with new data from the contributor. // obf
		$v_oclvw = array( // obf
			'ID'           => $v_wvnmz, // obf
			'post_content' => 'New post content from the contributor', // obf
			'post_title'   => 'New post title', // obf
		); // obf
		wp_update_post( $v_oclvw ); // obf

		// Set the current user to the editor and initiate an autosave with some new data. // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_alsvi = array( // obf
			'id'      => $v_wvnmz, // obf
			'content' => 'Updated post content', // obf
			'excerpt' => 'A new excerpt to test', // obf
			'title'   => $v_illad['post_title'], // obf
		); // obf

		// Initiate an autosave via the REST API as Gutenberg does. // obf
		$v_xncuk = new WP_REST_Request( 'POST', '/wp/v2/posts/' . self::$v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/json' ); // obf
		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_uyywo = $v_wbgyj->get_data(); // obf

		// The current version of our test post. // obf
		$v_wnxsq = get_post( $v_wvnmz ); // obf

		// The new data from the autosave should have its parent ID set to the original post ID. // obf
		$v_jewfy->assertSame( $v_wvnmz, $v_uyywo['parent'] ); // obf

		// The post title and content should still be the updated versions from the contributor. // obf
		$v_jewfy->assertSame( $v_wnxsq->post_title, $v_oclvw['post_title'] ); // obf
		$v_jewfy->assertSame( $v_wnxsq->post_content, $v_oclvw['post_content'] ); // obf

		// The excerpt should have stayed the same. // obf
		$v_jewfy->assertSame( $v_wnxsq->post_excerpt, $v_illad['post_excerpt'] ); // obf

		$v_eyyag = wp_get_post_autosave( $v_wvnmz ); // obf

		// Has changes. // obf
		$v_jewfy->assertSame( $v_alsvi['content'], $v_eyyag->post_content ); // obf

		wp_delete_post( $v_wvnmz ); // obf
	} // obf

	/** // obf
	 * @ticket 49532 // obf
	 * // obf
	 * @covers WP_REST_Autosaves_Controller::create_post_autosave // obf
	 */ // obf
	public function test_rest_autosave_do_not_create_autosave_when_post_is_unchanged() { // obf
		// Create a post by the editor. // obf
		$v_illad = array( // obf
			'post_content' => 'Test post content', // obf
			'post_title'   => 'Test post title', // obf
			'post_excerpt' => 'Test post excerpt', // obf
			'post_author'  => self::$v_mpjat, // obf
			'post_status'  => 'publish', // obf
		); // obf
		$v_wvnmz   = wp_insert_post( $v_illad ); // obf
		wp_set_current_user( self::$v_mpjat ); // obf

		// Make a small change create the initial autosave. // obf
		$v_alsvi = array( // obf
			'post_content' => 'Test post content changed', // obf
		); // obf
		$v_xncuk       = new WP_REST_Request( 'POST', '/wp/v2/posts/' . $v_wvnmz . '/autosaves' ); // obf
		$v_xncuk->add_header( 'Content-Type', 'application/json' ); // obf
		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf
		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf

		$v_jewfy->assertSame( 200, $v_wbgyj->get_status() ); // obf

		// Store the first autosave ID. // obf
		$v_nvqbg = $v_wbgyj->get_data(); // obf

		// Try creating an autosave using the REST endpoint with unchanged content. // obf
		$v_xncuk->set_body( wp_json_encode( $v_alsvi ) ); // obf

		$v_wbgyj = rest_get_server()->dispatch( $v_xncuk ); // obf
		$v_zklyj     = $v_wbgyj->get_data(); // obf

		$v_jewfy->assertSame( 200, $v_wbgyj->get_status() ); // obf
		$v_jewfy->assertSame( $v_nvqbg['id'], $v_zklyj['id'], 'Original autosave was not returned' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_mvylf The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_mvylf ) { // obf
		wp_set_current_user( self::$v_mpjat ); // obf
		$v_xncuk = new WP_REST_Request( 'HEAD', sprintf( $v_mvylf, self::$v_wvnmz, self::$v_bsyxc ) ); // obf
		$v_xncuk->set_param( '_fields', 'id' ); // obf
		$v_npgwj   = rest_get_server(); // obf
		$v_wbgyj = $v_npgwj->dispatch( $v_xncuk ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_wbgyj = apply_filters( 'rest_post_dispatch', $v_wbgyj, $v_npgwj, $v_xncuk ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_jewfy->assertSame( 200, $v_wbgyj->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/posts/%d/autosaves/%d' ), // obf
			'get_items request' => array( '/wp/v2/posts/%d' ), // obf
		); // obf
	} // obf
} // obf