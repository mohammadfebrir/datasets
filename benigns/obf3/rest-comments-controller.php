

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Comments_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Comments_Controller extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_ymrzl; // obf
	protected static $v_cvmcd; // obf
	protected static $v_vpfxc; // obf
	protected static $v_lntcv; // obf
	protected static $v_dhkem; // obf
	protected static $v_dlewq; // obf

	protected static $v_hodnn; // obf
	protected static $v_rumkv; // obf
	protected static $v_utqqd; // obf
	protected static $v_jgimi; // obf
	protected static $v_pfvtm; // obf
	protected static $v_zvmld; // obf
	protected static $v_bwvna; // obf

	protected static $v_yhiqg    = array(); // obf
	protected static $v_nuars = 30; // obf
	protected static $v_lzqgp       = 50; // obf

	protected $v_qwffk; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wwnrs ) { // obf
		add_role( // obf
			'comment_moderator', // obf
			'Comment Moderator', // obf
			array( // obf
				'read'              => true, // obf
				'moderate_comments' => true, // obf
			) // obf
		); // obf

		self::$v_ymrzl = $v_wwnrs->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		self::$v_cvmcd      = $v_wwnrs->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_vpfxc     = $v_wwnrs->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_lntcv  = $v_wwnrs->user->create( // obf
			array( // obf
				'role' => 'comment_moderator', // obf
			) // obf
		); // obf
		self::$v_dhkem = $v_wwnrs->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_dlewq     = $v_wwnrs->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'display_name' => 'Sea Captain', // obf
				'first_name'   => 'Horatio', // obf
				'last_name'    => 'McCallister', // obf
				'user_email'   => 'captain@thefryingdutchman.com', // obf
				'user_url'     => 'http://thefryingdutchman.com', // obf
			) // obf
		); // obf

		self::$v_hodnn     = $v_wwnrs->post->create(); // obf
		self::$v_utqqd  = $v_wwnrs->post->create( // obf
			array( // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf
		self::$v_rumkv = $v_wwnrs->post->create( // obf
			array( // obf
				'post_password' => 'toomanysecrets', // obf
			) // obf
		); // obf
		self::$v_jgimi    = $v_wwnrs->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		self::$v_pfvtm    = $v_wwnrs->post->create( // obf
			array( // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf

		self::$v_zvmld = $v_wwnrs->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => 0, // obf
			) // obf
		); // obf
		self::$v_bwvna     = $v_wwnrs->comment->create( // obf
			array( // obf
				'comment_approved' => 0, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		// Set up comments for pagination tests. // obf
		for ( $v_earik = 0; $v_earik < self::$v_nuars - 1; $v_earik++ ) { // obf
			self::$v_yhiqg[] = $v_wwnrs->comment->create( // obf
				array( // obf
					'comment_content' => "Comment {$v_earik}", // obf
					'comment_post_ID' => self::$v_hodnn, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		remove_role( 'comment_moderator' ); // obf

		self::delete_user( self::$v_ymrzl ); // obf
		self::delete_user( self::$v_cvmcd ); // obf
		self::delete_user( self::$v_vpfxc ); // obf
		self::delete_user( self::$v_lntcv ); // obf
		self::delete_user( self::$v_dhkem ); // obf
		self::delete_user( self::$v_dlewq ); // obf

		wp_delete_post( self::$v_hodnn, true ); // obf
		wp_delete_post( self::$v_utqqd, true ); // obf
		wp_delete_post( self::$v_rumkv, true ); // obf
		wp_delete_post( self::$v_jgimi, true ); // obf
		wp_delete_post( self::$v_pfvtm, true ); // obf
		wp_delete_post( self::$v_zvmld, true ); // obf
		wp_delete_post( self::$v_bwvna, true ); // obf

		// Remove comments for pagination tests. // obf
		foreach ( self::$v_yhiqg as $v_agcxo ) { // obf
			wp_delete_comment( $v_agcxo, true ); // obf
		} // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_vrrwx->endpoint = new WP_REST_Comments_Controller(); // obf
		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf
	} // obf

	public function test_register_routes() { // obf
		$v_btnuo = rest_get_server()->get_routes(); // obf

		$v_vrrwx->assertArrayHasKey( '/wp/v2/comments', $v_btnuo ); // obf
		$v_vrrwx->assertCount( 2, $v_btnuo['/wp/v2/comments'] ); // obf
		$v_vrrwx->assertArrayHasKey( '/wp/v2/comments/(?P<id>[\d]+)', $v_btnuo ); // obf
		$v_vrrwx->assertCount( 3, $v_btnuo['/wp/v2/comments/(?P<id>[\d]+)'] ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_becxz  = new WP_REST_Request( 'OPTIONS', '/wp/v2/comments' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'view', $v_ppchh['endpoints'][0]['args']['context']['default'] ); // obf
		$v_vrrwx->assertSame( array( 'view', 'embed', 'edit' ), $v_ppchh['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_becxz  = new WP_REST_Request( 'OPTIONS', '/wp/v2/comments/' . self::$v_zvmld ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'view', $v_ppchh['endpoints'][0]['args']['context']['default'] ); // obf
		$v_vrrwx->assertSame( array( 'view', 'embed', 'edit' ), $v_ppchh['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_becxz  = new WP_REST_Request( 'OPTIONS', '/wp/v2/comments' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_otpnl     = array_keys( $v_ppchh['endpoints'][0]['args'] ); // obf
		sort( $v_otpnl ); // obf
		$v_vrrwx->assertSame( // obf
			array( // obf
				'after', // obf
				'author', // obf
				'author_email', // obf
				'author_exclude', // obf
				'before', // obf
				'context', // obf
				'exclude', // obf
				'include', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'parent', // obf
				'parent_exclude', // obf
				'password', // obf
				'per_page', // obf
				'post', // obf
				'search', // obf
				'status', // obf
				'type', // obf
			), // obf
			$v_otpnl // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( self::$v_nuars, $v_gephe ); // obf
	} // obf

	/** // obf
	 * @ticket 38692 // obf
	 */ // obf
	public function test_get_items_with_password() { // obf
		wp_set_current_user( 0 ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'password', 'toomanysecrets' ); // obf
		$v_becxz->set_param( 'post', self::$v_rumkv ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertContains( $v_izrqe, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38692 // obf
	 */ // obf
	public function test_get_items_with_password_without_post() { // obf
		wp_set_current_user( 0 ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'password', 'toomanysecrets' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertNotContains( $v_izrqe, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38692 // obf
	 */ // obf
	public function test_get_items_with_password_with_multiple_post() { // obf
		wp_set_current_user( 0 ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'password', 'toomanysecrets' ); // obf
		$v_becxz->set_param( 'post', array( self::$v_rumkv, self::$v_hodnn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read_post', $v_qvecm, 401 ); // obf
	} // obf

	public function test_get_password_items_without_edit_post_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertNotContains( $v_izrqe, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	public function test_get_password_items_with_edit_post_permission() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertContains( $v_izrqe, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	public function test_get_items_without_private_post_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_utqqd, // obf
		); // obf

		$v_rwbdr = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertNotContains( $v_rwbdr, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	public function test_get_items_with_private_post_permission() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_utqqd, // obf
		); // obf

		$v_rwbdr = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertContains( $v_rwbdr, wp_list_pluck( $v_brygn, 'id' ) ); // obf
	} // obf

	public function test_get_items_with_invalid_post() { // obf
		wp_set_current_user( 0 ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			) // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertNotContains( $v_agcxo, wp_list_pluck( $v_brygn, 'id' ) ); // obf

		wp_delete_comment( $v_agcxo ); // obf
	} // obf

	public function test_get_items_with_invalid_post_permission() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			) // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_brygn = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertContains( $v_agcxo, wp_list_pluck( $v_brygn, 'id' ) ); // obf

		wp_delete_comment( $v_agcxo ); // obf
	} // obf

	public function test_get_items_no_permission_for_context() { // obf
		wp_set_current_user( 0 ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'context', 'edit' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_forbidden_context', $v_qvecm, 401 ); // obf
	} // obf

	public function test_get_items_no_post() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		self::factory()->comment->create_post_comments( 0, 2 ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'post', 0 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 2, $v_gephe ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission_for_no_post( $v_ldhsg ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_becxz = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'post', 0 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read', $v_qvecm, 401 ); // obf
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
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_items_edit_context( $v_ldhsg ) { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'context', 'edit' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_get_items_for_post() { // obf
		$v_trpyx = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_trpyx, 2 ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_query_params( // obf
			array( // obf
				'post' => $v_trpyx, // obf
			) // obf
		); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 2, $v_gephe ); // obf
	} // obf

	public function test_get_items_include_query() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
		); // obf

		$v_njtfr = self::factory()->comment->create( $v_exzvw ); // obf
		$v_keezc = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		// 'order' => 'asc'. // obf
		$v_becxz->set_param( 'order', 'asc' ); // obf
		$v_becxz->set_param( 'include', array( $v_keezc, $v_njtfr ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 2, $v_ppchh ); // obf
		$v_vrrwx->assertSame( $v_njtfr, $v_ppchh[0]['id'] ); // obf

		// 'orderby' => 'include'. // obf
		$v_becxz->set_param( 'orderby', 'include' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 2, $v_ppchh ); // obf
		$v_vrrwx->assertSame( $v_keezc, $v_ppchh[0]['id'] ); // obf

		// Invalid 'orderby' should error. // obf
		$v_becxz->set_param( 'orderby', 'invalid' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf

		// Invalid 'include' should error. // obf
		$v_becxz->set_param( 'orderby', array( 'include' ) ); // obf
		$v_becxz->set_param( 'include', array( 'invalid' ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_items_exclude_query() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
		); // obf

		$v_njtfr = self::factory()->comment->create( $v_exzvw ); // obf
		$v_keezc = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz  = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_xkamq      = wp_list_pluck( $v_ppchh, 'id' ); // obf
		$v_vrrwx->assertContains( $v_njtfr, $v_xkamq ); // obf
		$v_vrrwx->assertContains( $v_keezc, $v_xkamq ); // obf

		$v_becxz->set_param( 'exclude', array( $v_keezc ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_xkamq      = wp_list_pluck( $v_ppchh, 'id' ); // obf
		$v_vrrwx->assertContains( $v_njtfr, $v_xkamq ); // obf
		$v_vrrwx->assertNotContains( $v_keezc, $v_xkamq ); // obf

		// Invalid 'exclude' should error. // obf
		$v_becxz->set_param( 'exclude', array( 'invalid' ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_items_offset_query() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_becxz->set_param( 'offset', 1 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( self::$v_nuars - 1, $v_qvecm->get_data() ); // obf

		// 'offset' works with 'per_page'. // obf
		$v_becxz->set_param( 'per_page', 2 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( 2, $v_qvecm->get_data() ); // obf

		// 'offset' takes priority over 'page'. // obf
		$v_becxz->set_param( 'page', 3 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( 2, $v_qvecm->get_data() ); // obf

		// Invalid 'offset' should error. // obf
		$v_becxz->set_param( 'offset', 'moreplease' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_items_order_query() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
		); // obf

		$v_zwhhs = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf

		// Order defaults to 'desc'. // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( $v_zwhhs, $v_ppchh[0]['id'] ); // obf

		// 'order' => 'asc'. // obf
		$v_becxz->set_param( 'order', 'asc' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( self::$v_zvmld, $v_ppchh[0]['id'] ); // obf

		// 'order' => 'asc,id' should error. // obf
		$v_becxz->set_param( 'order', 'asc,id' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_items_private_post_no_permissions( $v_ldhsg ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_hodnn = self::factory()->post->create( array( 'post_status' => 'private' ) ); // obf

		$v_becxz = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'post', $v_hodnn ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read_post', $v_qvecm, 401 ); // obf
	} // obf

	public function test_get_items_author_arg() { // obf
		// Authorized. // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
			'user_id'          => self::$v_dlewq, // obf
		); // obf

		self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['user_id'] = self::$v_dhkem; // obf
		self::factory()->comment->create( $v_exzvw ); // obf
		unset( $v_exzvw['user_id'] ); // obf
		self::factory()->comment->create( $v_exzvw ); // obf

		// Limit to comment author. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'author', self::$v_dlewq ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 1, $v_gephe ); // obf

		// Multiple authors are supported. // obf
		$v_becxz->set_param( 'author', array( self::$v_dlewq, self::$v_dhkem ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 2, $v_gephe ); // obf

		// Invalid 'author' should error. // obf
		$v_becxz->set_param( 'author', 'skippy' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf

		// Unavailable to unauthenticated; defaults to error. // obf
		wp_set_current_user( 0 ); // obf
		$v_becxz->set_param( 'author', array( self::$v_dlewq, self::$v_dhkem ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_forbidden_param', $v_qvecm, 401 ); // obf
	} // obf

	public function test_get_items_author_exclude_arg() { // obf
		// Authorized. // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
			'user_id'          => self::$v_dlewq, // obf
		); // obf

		self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['user_id'] = self::$v_dhkem; // obf
		self::factory()->comment->create( $v_exzvw ); // obf
		unset( $v_exzvw['user_id'] ); // obf
		self::factory()->comment->create( $v_exzvw ); // obf

		$v_nuars = self::$v_nuars + 3; // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( $v_nuars, $v_gephe ); // obf

		// Exclude comment author. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_becxz->set_param( 'author_exclude', self::$v_dlewq ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( $v_nuars - 1, $v_gephe ); // obf

		// Exclude both comment authors. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_becxz->set_param( 'author_exclude', array( self::$v_dlewq, self::$v_dhkem ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_gephe = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( $v_nuars - 2, $v_gephe ); // obf

		// 'author_exclude' for invalid author. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'author_exclude', 'skippy' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf

		// Unavailable to unauthenticated; defaults to error. // obf
		wp_set_current_user( 0 ); // obf
		$v_becxz->set_param( 'author_exclude', array( self::$v_dlewq, self::$v_dhkem ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_forbidden_param', $v_qvecm, 401 ); // obf
	} // obf

	public function test_get_items_parent_arg() { // obf
		$v_exzvw                   = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
		); // obf
		$v_mysvw              = self::factory()->comment->create( $v_exzvw ); // obf
		$v_smtyu             = self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['comment_parent'] = $v_mysvw; // obf
		self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['comment_parent'] = $v_smtyu; // obf
		self::factory()->comment->create( $v_exzvw ); // obf

		$v_nuars = self::$v_nuars + 4; // obf

		// All comments in the database. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( $v_nuars, $v_qvecm->get_data() ); // obf

		// Limit to the parent. // obf
		$v_becxz->set_param( 'parent', $v_mysvw ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( 1, $v_qvecm->get_data() ); // obf

		// Limit to two parents. // obf
		$v_becxz->set_param( 'parent', array( $v_mysvw, $v_smtyu ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( 2, $v_qvecm->get_data() ); // obf

		// Invalid 'parent' should error. // obf
		$v_becxz->set_param( 'parent', 'invalid' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_items_parent_exclude_arg() { // obf
		$v_exzvw                   = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
		); // obf
		$v_mysvw              = self::factory()->comment->create( $v_exzvw ); // obf
		$v_smtyu             = self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['comment_parent'] = $v_mysvw; // obf
		self::factory()->comment->create( $v_exzvw ); // obf
		$v_exzvw['comment_parent'] = $v_smtyu; // obf
		self::factory()->comment->create( $v_exzvw ); // obf

		$v_nuars = self::$v_nuars + 4; // obf

		// All comments in the database. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( $v_nuars, $v_qvecm->get_data() ); // obf

		// Exclude this particular parent. // obf
		$v_becxz->set_param( 'parent_exclude', $v_mysvw ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( $v_nuars - 1, $v_qvecm->get_data() ); // obf

		// Exclude both comment parents. // obf
		$v_becxz->set_param( 'parent_exclude', array( $v_mysvw, $v_smtyu ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( $v_nuars - 2, $v_qvecm->get_data() ); // obf

		// Invalid 'parent_exclude' should error. // obf
		$v_becxz->set_param( 'parent_exclude', 'invalid' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_items_search_query() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_hodnn, // obf
			'comment_content'  => 'foo', // obf
			'comment_author'   => 'Homer J Simpson', // obf
		); // obf

		$v_zwhhs = self::factory()->comment->create( $v_exzvw ); // obf

		$v_nuars = self::$v_nuars + 1; // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'per_page', self::$v_lzqgp ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertCount( $v_nuars, $v_qvecm->get_data() ); // obf

		// One matching comment. // obf
		$v_becxz->set_param( 'search', 'foo' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 1, $v_ppchh ); // obf
		$v_vrrwx->assertSame( $v_zwhhs, $v_ppchh[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comments_pagination_headers( $v_ldhsg ) { // obf
		$v_nuars = self::$v_nuars; // obf
		$v_gshwn    = (int) ceil( $v_nuars / 10 ); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		// Start of the index. // obf
		$v_becxz  = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_kzged  = $v_qvecm->get_headers(); // obf
		$v_vrrwx->assertSame( $v_nuars, $v_kzged['X-WP-Total'] ); // obf
		$v_vrrwx->assertSame( $v_gshwn, $v_kzged['X-WP-TotalPages'] ); // obf
		$v_hmgtd = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( '/wp/v2/comments' ) // obf
		); // obf
		$v_vrrwx->assertStringNotContainsString( 'rel="prev"', $v_kzged['Link'] ); // obf
		$v_vrrwx->assertStringContainsString( '<' . $v_hmgtd . '>; rel="next"', $v_kzged['Link'] ); // obf

		// 3rd page. // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_hodnn, // obf
			) // obf
		); // obf
		++$v_nuars; // obf
		++$v_gshwn; // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'page', 3 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_kzged  = $v_qvecm->get_headers(); // obf
		$v_vrrwx->assertSame( $v_nuars, $v_kzged['X-WP-Total'] ); // obf
		$v_vrrwx->assertSame( $v_gshwn, $v_kzged['X-WP-TotalPages'] ); // obf
		$v_znkef = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( '/wp/v2/comments' ) // obf
		); // obf
		$v_vrrwx->assertStringContainsString( '<' . $v_znkef . '>; rel="prev"', $v_kzged['Link'] ); // obf
		$v_hmgtd = add_query_arg( // obf
			array( // obf
				'page' => 4, // obf
			), // obf
			rest_url( '/wp/v2/comments' ) // obf
		); // obf
		$v_vrrwx->assertStringContainsString( '<' . $v_hmgtd . '>; rel="next"', $v_kzged['Link'] ); // obf

		// Last page. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'page', $v_gshwn ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_kzged  = $v_qvecm->get_headers(); // obf
		$v_vrrwx->assertSame( $v_nuars, $v_kzged['X-WP-Total'] ); // obf
		$v_vrrwx->assertSame( $v_gshwn, $v_kzged['X-WP-TotalPages'] ); // obf
		$v_znkef = add_query_arg( // obf
			array( // obf
				'page' => $v_gshwn - 1, // obf
			), // obf
			rest_url( '/wp/v2/comments' ) // obf
		); // obf
		$v_vrrwx->assertStringContainsString( '<' . $v_znkef . '>; rel="prev"', $v_kzged['Link'] ); // obf
		$v_vrrwx->assertStringNotContainsString( 'rel="next"', $v_kzged['Link'] ); // obf

		// Out of bounds. // obf
		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'page', 100 ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_kzged  = $v_qvecm->get_headers(); // obf
		$v_vrrwx->assertSame( $v_nuars, $v_kzged['X-WP-Total'] ); // obf
		$v_vrrwx->assertEquals( $v_gshwn, $v_kzged['X-WP-TotalPages'] ); // obf
		$v_znkef = add_query_arg( // obf
			array( // obf
				'page' => $v_gshwn, // obf
			), // obf
			rest_url( '/wp/v2/comments' ) // obf
		); // obf
		$v_vrrwx->assertStringContainsString( '<' . $v_znkef . '>; rel="prev"', $v_kzged['Link'] ); // obf
		$v_vrrwx->assertStringNotContainsString( 'rel="next"', $v_kzged['Link'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comments_invalid_date( $v_ldhsg ) { // obf
		$v_becxz = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'after', 'foo' ); // obf
		$v_becxz->set_param( 'before', 'bar' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_get_comments_valid_date() { // obf
		$v_yxlfv = self::factory()->comment->create( // obf
			array( // obf
				'comment_date'    => '2016-01-15T00:00:00Z', // obf
				'comment_post_ID' => self::$v_hodnn, // obf
			) // obf
		); // obf
		$v_dchhx = self::factory()->comment->create( // obf
			array( // obf
				'comment_date'    => '2016-01-16T00:00:00Z', // obf
				'comment_post_ID' => self::$v_hodnn, // obf
			) // obf
		); // obf
		$v_opmdk = self::factory()->comment->create( // obf
			array( // obf
				'comment_date'    => '2016-01-17T00:00:00Z', // obf
				'comment_post_ID' => self::$v_hodnn, // obf
			) // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'after', '2016-01-15T00:00:00Z' ); // obf
		$v_becxz->set_param( 'before', '2016-01-17T00:00:00Z' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertCount( 1, $v_ppchh ); // obf
		$v_vrrwx->assertSame( $v_dchhx, $v_ppchh[0]['id'] ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_becxz = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->check_comment_data( $v_ppchh, 'view', $v_qvecm->get_links() ); // obf
	} // obf

	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_query_params( // obf
			array( // obf
				'context' => 'edit', // obf
			) // obf
		); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->check_comment_data( $v_ppchh, 'edit', $v_qvecm->get_links() ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_qwffk = new WP_REST_Comments_Controller(); // obf
		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_param( 'context', 'edit' ); // obf
		$v_becxz->set_param( '_fields', 'id,status' ); // obf
		$v_nbphz      = get_comment( self::$v_zvmld ); // obf
		$v_qvecm = $v_qwffk->prepare_item_for_response( $v_nbphz, $v_becxz ); // obf
		$v_vrrwx->assertSame( // obf
			array( // obf
				'id', // obf
				'status', // obf
			), // obf
			array_keys( $v_qvecm->get_data() ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 58238 // obf
	 */ // obf
	public function test_prepare_item_comment_text_filter() { // obf
		$v_tcquk = new MockAction(); // obf
		add_filter( 'comment_text', array( $v_tcquk, 'filter' ), 10, 3 ); // obf

		$v_becxz = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 1, $v_tcquk->get_call_count() ); // obf
		$v_vrrwx->assertCount( 3, $v_tcquk->get_args()[0] ); // obf
	} // obf

	public function test_get_comment_author_avatar_urls() { // obf
		$v_becxz = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertArrayHasKey( 24, $v_ppchh['author_avatar_urls'] ); // obf
		$v_vrrwx->assertArrayHasKey( 48, $v_ppchh['author_avatar_urls'] ); // obf
		$v_vrrwx->assertArrayHasKey( 96, $v_ppchh['author_avatar_urls'] ); // obf

		$v_xenjk = get_comment( self::$v_zvmld ); // obf
		// Ignore the subdomain, since get_avatar_url() randomly sets // obf
		// the Gravatar server when building the URL string. // obf
		$v_vrrwx->assertSame( substr( get_avatar_url( $v_xenjk->comment_author_email ), 9 ), substr( $v_ppchh['author_avatar_urls'][96], 9 ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_invalid_id( $v_ldhsg ) { // obf
		$v_becxz = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_id', $v_qvecm, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_invalid_context( $v_ldhsg ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_becxz = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%s', self::$v_zvmld ) ); // obf
		$v_becxz->set_param( 'context', 'edit' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_forbidden_context', $v_qvecm, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_invalid_post_id( $v_ldhsg ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments/' . $v_agcxo ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_post_invalid_id', $v_qvecm, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_invalid_post_id_as_admin( $v_ldhsg ) { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments/' . $v_agcxo ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_post_invalid_id', $v_qvecm, 404 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_not_approved( $v_ldhsg ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_becxz  = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%d', self::$v_bwvna ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read', $v_qvecm, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_not_approved_same_user( $v_ldhsg ) { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz  = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%d', self::$v_bwvna ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_get_comment_with_children_link() { // obf
		$v_eqwmb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_ogntb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_parent'   => $v_eqwmb, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%s', $v_eqwmb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertArrayHasKey( 'children', $v_qvecm->get_links() ); // obf
	} // obf

	public function test_get_comment_without_children_link() { // obf
		$v_eqwmb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%s', $v_eqwmb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertArrayNotHasKey( 'children', $v_qvecm->get_links() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_with_password_without_edit_post_permission( $v_ldhsg ) { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz  = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%s', $v_izrqe ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read', $v_qvecm, 403 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 38692 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_comment_with_password_with_valid_password( $v_ldhsg ) { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_exzvw = array( // obf
			'comment_approved' => 1, // obf
			'comment_post_ID'  => self::$v_rumkv, // obf
		); // obf

		$v_izrqe = self::factory()->comment->create( $v_exzvw ); // obf

		$v_becxz = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%s', $v_izrqe ) ); // obf
		$v_becxz->set_param( 'password', 'toomanysecrets' ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_create_item() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'date'         => '2014-11-07T10:14:25', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->check_comment_data( $v_ppchh, 'edit', $v_qvecm->get_links() ); // obf
		$v_vrrwx->assertSame( 'hold', $v_ppchh['status'] ); // obf
		$v_vrrwx->assertSame( '2014-11-07T10:14:25', $v_ppchh['date'] ); // obf
		$v_vrrwx->assertSame( self::$v_hodnn, $v_ppchh['post'] ); // obf
	} // obf

	public function data_comment_dates() { // obf
		return array( // obf
			'set date without timezone'     => array( // obf
				'params'  => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date'            => '2016-12-12T14:00:00', // obf
				), // obf
				'results' => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date_gmt without timezone' => array( // obf
				'params'  => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date_gmt'        => '2016-12-12T19:00:00', // obf
				), // obf
				'results' => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date with timezone'        => array( // obf
				'params'  => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date'            => '2016-12-12T18:00:00-01:00', // obf
				), // obf
				'results' => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
			'set date_gmt with timezone'    => array( // obf
				'params'  => array( // obf
					'timezone_string' => 'America/New_York', // obf
					'date_gmt'        => '2016-12-12T18:00:00-01:00', // obf
				), // obf
				'results' => array( // obf
					'date'     => '2016-12-12T14:00:00', // obf
					'date_gmt' => '2016-12-12T19:00:00', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_comment_dates // obf
	 */ // obf
	public function test_create_comment_date( $v_scinn, $v_bfytr ) { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		update_option( 'timezone_string', $v_scinn['timezone_string'] ); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'content', 'not empty' ); // obf
		$v_becxz->set_param( 'post', self::$v_hodnn ); // obf
		if ( isset( $v_scinn['date'] ) ) { // obf
			$v_becxz->set_param( 'date', $v_scinn['date'] ); // obf
		} // obf
		if ( isset( $v_scinn['date_gmt'] ) ) { // obf
			$v_becxz->set_param( 'date_gmt', $v_scinn['date_gmt'] ); // obf
		} // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		update_option( 'timezone_string', '' ); // obf

		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_ppchh    = $v_qvecm->get_data(); // obf
		$v_xenjk = get_comment( $v_ppchh['id'] ); // obf

		$v_vrrwx->assertSame( $v_bfytr['date'], $v_ppchh['date'] ); // obf
		$v_wacxf = str_replace( 'T', ' ', $v_bfytr['date'] ); // obf
		$v_vrrwx->assertSame( $v_wacxf, $v_xenjk->comment_date ); // obf

		$v_vrrwx->assertSame( $v_bfytr['date_gmt'], $v_ppchh['date_gmt'] ); // obf
		$v_rrdto = str_replace( 'T', ' ', $v_bfytr['date_gmt'] ); // obf
		$v_vrrwx->assertSame( $v_rrdto, $v_xenjk->comment_date_gmt ); // obf
	} // obf

	public function test_create_item_using_accepted_content_raw_value() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
			'content'      => array( // obf
				'raw' => 'Once something has been approved by the government, it\'s no longer immoral.', // obf
			), // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh        = $v_qvecm->get_data(); // obf
		$v_lckvf = get_comment( $v_ppchh['id'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['content']['raw'], $v_lckvf->comment_content ); // obf
	} // obf

	public function test_create_item_error_from_filter() { // obf
		add_filter( 'rest_pre_insert_comment', array( $v_vrrwx, 'return_premade_error' ) ); // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'homer@example.org', // obf
			'content'      => array( // obf
				'raw' => 'Aw, he loves beer. Here, little fella.', // obf
			), // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'test_rest_premade_error', $v_qvecm, 418 ); // obf
	} // obf

	public function return_premade_error() { // obf
		return new WP_Error( 'test_rest_premade_error', "I'm sorry, I thought he was a party robot.", array( 'status' => 418 ) ); // obf
	} // obf

	public function test_create_comment_missing_required_author_name() { // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf
		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_email' => 'ekrabappel@springfield-elementary.edu', // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_author_data_required', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_empty_required_author_name() { // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf
		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'author_name'  => '', // obf
			'author_email' => 'ekrabappel@springfield-elementary.edu', // obf
			'post'         => self::$v_hodnn, // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_author_data_required', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_missing_required_author_email() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'        => self::$v_hodnn, // obf
			'author_name' => 'Edna Krabappel', // obf
			'content'     => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_author_data_required', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_empty_required_author_email() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Edna Krabappel', // obf
			'author_email' => '', // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_author_data_required', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_author_email_too_short() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer J. Simpson', // obf
			'author_email' => 'a@b', // obf
			'content'      => 'in this house, we obey the laws of thermodynamics!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertArrayHasKey( 'author_email', $v_ppchh['data']['params'] ); // obf
	} // obf

	public function test_create_item_invalid_no_content() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_content_invalid', $v_qvecm, 400 ); // obf

		$v_scinn['content'] = ''; // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_content_invalid', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_create_item_invalid_only_spaces_content() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
			'content'      => '   ', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_content_invalid', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_create_item_allows_0_as_content() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
			'content'      => '0', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertSame( '0', $v_qvecm->get_data()['content']['raw'] ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_create_item_allow_empty_comment_filter() { // obf
		add_filter( 'allow_empty_comment', '__return_true' ); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
			'content'      => '', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertSame( '', $v_qvecm->get_data()['content']['raw'] ); // obf
	} // obf

	public function test_create_item_invalid_date() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Reverend Lovejoy', // obf
			'author_email' => 'lovejoy@example.com', // obf
			'author_url'   => 'http://timothylovejoy.jr', // obf
			'content'      => 'It\'s all over\, people! We don\'t have a prayer!', // obf
			'date'         => 'foo-bar', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf


	public function test_create_item_assign_different_user() { // obf
		$v_dhkem = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'subscriber', // obf
				'user_email' => 'cbg@androidsdungeon.com', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'author'       => $v_dhkem, // obf
			'content'      => 'Worst Comment Ever!', // obf
			'date'         => '2014-11-07T10:14:25', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( $v_dhkem, $v_ppchh['author'] ); // obf
		$v_vrrwx->assertSame( '127.0.0.1', $v_ppchh['author_ip'] ); // obf
	} // obf

	public function test_create_comment_without_type() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => $v_hodnn, // obf
			'author'       => self::$v_cvmcd, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'date'         => '2014-11-07T10:14:25', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'comment', $v_ppchh['type'] ); // obf

		$v_agcxo = $v_ppchh['id']; // obf

		// Make sure the new comment is present in the collection. // obf
		$v_vjkqm = new WP_REST_Request( 'GET', '/wp/v2/comments' ); // obf
		$v_vjkqm->set_param( 'post', $v_hodnn ); // obf
		$v_pabea = rest_get_server()->dispatch( $v_vjkqm ); // obf
		$v_brygn     = $v_pabea->get_data(); // obf
		$v_vrrwx->assertSame( $v_agcxo, $v_brygn[0]['id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 38820 // obf
	 */ // obf
	public function test_create_comment_with_invalid_type() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => $v_hodnn, // obf
			'author'       => self::$v_cvmcd, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'date'         => '2014-11-07T10:14:25', // obf
			'type'         => 'foo', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_comment_type', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_invalid_email() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => $v_hodnn, // obf
			'author'       => self::$v_cvmcd, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'hello:)', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'date'         => '2014-11-07T10:14:25', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_item_current_user() { // obf
		$v_eidpt = self::factory()->user->create( // obf
			array( // obf
				'role'         => 'subscriber', // obf
				'user_email'   => 'lylelanley@example.com', // obf
				'first_name'   => 'Lyle', // obf
				'last_name'    => 'Lanley', // obf
				'display_name' => 'Lyle Lanley', // obf
				'user_url'     => 'http://simpsons.wikia.com/wiki/Lyle_Lanley', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_eidpt ); // obf

		$v_scinn = array( // obf
			'post'    => self::$v_hodnn, // obf
			'content' => "Well sir, there's nothing on earth like a genuine, bona fide, electrified, six-car Monorail!", // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( $v_eidpt, $v_ppchh['author'] ); // obf

		// Check author data matches. // obf
		$v_gxkkc  = get_user_by( 'id', $v_eidpt ); // obf
		$v_xenjk = get_comment( $v_ppchh['id'] ); // obf
		$v_vrrwx->assertSame( $v_gxkkc->display_name, $v_xenjk->comment_author ); // obf
		$v_vrrwx->assertSame( $v_gxkkc->user_email, $v_xenjk->comment_author_email ); // obf
		$v_vrrwx->assertSame( $v_gxkkc->user_url, $v_xenjk->comment_author_url ); // obf
	} // obf

	public function test_create_comment_other_user() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( self::$v_dhkem, $v_ppchh['author'] ); // obf
		$v_vrrwx->assertSame( 'Homer Jay Simpson', $v_ppchh['author_name'] ); // obf
		$v_vrrwx->assertSame( 'chunkylover53@aol.com', $v_ppchh['author_email'] ); // obf
		$v_vrrwx->assertSame( 'http://compuglobalhypermeganet.com', $v_ppchh['author_url'] ); // obf
	} // obf

	public function test_create_comment_other_user_without_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'author'       => self::$v_cvmcd, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_author', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_invalid_post() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => 'some-slug', // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_status_without_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'author'       => self::$v_dhkem, // obf
			'status'       => 'approved', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_status', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_with_status_IP_and_user_agent() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'              => $v_hodnn, // obf
			'author_name'       => 'Comic Book Guy', // obf
			'author_email'      => 'cbg@androidsdungeon.com', // obf
			'author_ip'         => '139.130.4.5', // obf
			'author_url'        => 'http://androidsdungeon.com', // obf
			'author_user_agent' => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36', // obf
			'content'           => 'Worst Comment Ever!', // obf
			'status'            => 'approved', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'approved', $v_ppchh['status'] ); // obf
		$v_vrrwx->assertSame( '139.130.4.5', $v_ppchh['author_ip'] ); // obf
		$v_vrrwx->assertSame( 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36', $v_ppchh['author_user_agent'] ); // obf
	} // obf

	public function test_create_comment_user_agent_header() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->add_header( 'User_Agent', 'Mozilla/4.0 (compatible; MSIE 5.5; AOL 4.0; Windows 95)' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf

		$v_lckvf = get_comment( $v_ppchh['id'] ); // obf
		$v_vrrwx->assertSame( 'Mozilla/4.0 (compatible; MSIE 5.5; AOL 4.0; Windows 95)', $v_lckvf->comment_agent ); // obf
	} // obf

	public function test_create_comment_author_ip() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn  = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'author_ip'    => '127.0.0.3', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'status'       => 'approved', // obf
		); // obf
		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm    = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh        = $v_qvecm->get_data(); // obf
		$v_lckvf = get_comment( $v_ppchh['id'] ); // obf
		$v_vrrwx->assertSame( '127.0.0.3', $v_lckvf->comment_author_IP ); // obf
	} // obf

	public function test_create_comment_invalid_author_IP() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn  = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'author_ip'    => '867.5309', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'status'       => 'approved', // obf
		); // obf
		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_author_ip_no_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'author_ip'    => '10.0.10.1', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'status'       => 'approved', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_author_ip', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_author_ip_defaults_to_remote_addr() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_fglzj['REMOTE_ADDR'] = '127.0.0.2'; // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm    = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh        = $v_qvecm->get_data(); // obf
		$v_lckvf = get_comment( $v_ppchh['id'] ); // obf
		$v_vrrwx->assertSame( '127.0.0.2', $v_lckvf->comment_author_IP ); // obf
	} // obf

	public function test_create_comment_no_post_id() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
			'status'       => 'approved', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_post_id', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_no_post_id_no_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_post_id', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_invalid_post_id() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'Here\’s to alcohol: the cause of, and solution to, all of life\’s problems.', // obf
			'status'       => 'approved', // obf
			'post'         => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_post_id', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_draft_post() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_jgimi, // obf
			'author_name'  => 'Ishmael', // obf
			'author_email' => 'herman-melville@earthlink.net', // obf
			'author_url'   => 'https://en.wikipedia.org/wiki/Herman_Melville', // obf
			'content'      => 'Call me Ishmael.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_draft_post', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_trash_post() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_pfvtm, // obf
			'author_name'  => 'Ishmael', // obf
			'author_email' => 'herman-melville@earthlink.net', // obf
			'author_url'   => 'https://en.wikipedia.org/wiki/Herman_Melville', // obf
			'content'      => 'Call me Ishmael.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_trash_post', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_private_post_invalid_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_utqqd, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'I\’d be a vegetarian if bacon grew on trees.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read_post', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_password_post_invalid_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_rumkv, // obf
			'author_name'  => 'Homer Jay Simpson', // obf
			'author_email' => 'chunkylover53@aol.com', // obf
			'author_url'   => 'http://compuglobalhypermeganet.com', // obf
			'content'      => 'I\’d be a vegetarian if bacon grew on trees.', // obf
			'author'       => self::$v_dhkem, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_read_post', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_item_duplicate() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'      => self::$v_hodnn, // obf
				'comment_author'       => 'Guy N. Cognito', // obf
				'comment_author_email' => 'chunkylover53@aol.co.uk', // obf
				'comment_content'      => 'Homer? Who is Homer? My name is Guy N. Cognito.', // obf
			) // obf
		); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Guy N. Cognito', // obf
			'author_email' => 'chunkylover53@aol.co.uk', // obf
			'content'      => 'Homer? Who is Homer? My name is Guy N. Cognito.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 409, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_create_comment_closed() { // obf
		$v_hodnn = self::factory()->post->create( // obf
			array( // obf
				'comment_status' => 'closed', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post' => $v_hodnn, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 403, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_create_comment_require_login() { // obf
		wp_set_current_user( 0 ); // obf

		update_option( 'comment_registration', 1 ); // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'post', self::$v_hodnn ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 401, $v_qvecm->get_status() ); // obf
		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'rest_comment_login_required', $v_ppchh['code'] ); // obf
	} // obf

	public function test_create_item_invalid_author() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'    => self::$v_hodnn, // obf
			'author'  => REST_TESTS_IMPOSSIBLY_HIGH_NUMBER, // obf
			'content' => 'It\'s all over\, people! We don\'t have a prayer!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_author_invalid', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_item_pull_author_info() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_gxkkc = new WP_User( self::$v_dlewq ); // obf
		$v_scinn = array( // obf
			'post'    => self::$v_hodnn, // obf
			'author'  => self::$v_dlewq, // obf
			'content' => 'It\'s all over\, people! We don\'t have a prayer!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_mntlc = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( self::$v_dlewq, $v_mntlc['author'] ); // obf
		$v_vrrwx->assertSame( 'Sea Captain', $v_mntlc['author_name'] ); // obf
		$v_vrrwx->assertSame( 'captain@thefryingdutchman.com', $v_mntlc['author_email'] ); // obf
		$v_vrrwx->assertSame( 'http://thefryingdutchman.com', $v_mntlc['author_url'] ); // obf
	} // obf

	public function test_create_comment_two_times() { // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Shakes fist at sky', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 400, $v_qvecm->get_status() ); // obf
	} // obf

	public function anonymous_comments_callback_null() { // obf
		// I'm a plugin developer who forgot to include a return value // obf
		// for some code path in my 'rest_allow_anonymous_comments' filter. // obf
	} // obf

	public function test_allow_anonymous_comments_null() { // obf
		add_filter( 'rest_allow_anonymous_comments', array( $v_vrrwx, 'anonymous_comments_callback_null' ), 10, 2 ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Comic Book Guy', // obf
			'author_email' => 'cbg@androidsdungeon.com', // obf
			'author_url'   => 'http://androidsdungeon.com', // obf
			'content'      => 'Worst Comment Ever!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		remove_filter( 'rest_allow_anonymous_comments', array( $v_vrrwx, 'anonymous_comments_callback_null' ), 10, 2 ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_login_required', $v_qvecm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_create_comment_author_name_too_long() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => rand_long_str( 246 ), // obf
			'author_email' => 'murphy@gingivitis.com', // obf
			'author_url'   => 'http://jazz.gingivitis.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
			'date'         => '1995-04-30T10:22:00', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_create_comment_author_email_too_long() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Bleeding Gums Murphy', // obf
			'author_email' => 'murphy@' . rand_long_str( 190 ) . '.com', // obf
			'author_url'   => 'http://jazz.gingivitis.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
			'date'         => '1995-04-30T10:22:00', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_email_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_create_comment_author_url_too_long() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Bleeding Gums Murphy', // obf
			'author_email' => 'murphy@gingivitis.com', // obf
			'author_url'   => 'http://jazz.' . rand_long_str( 185 ) . '.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
			'date'         => '1995-04-30T10:22:00', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_url_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_create_comment_content_too_long() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Bleeding Gums Murphy', // obf
			'author_email' => 'murphy@gingivitis.com', // obf
			'author_url'   => 'http://jazz.gingivitis.com', // obf
			'content'      => rand_long_str( 66525 ), // obf
			'date'         => '1995-04-30T10:22:00', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_content_column_length', $v_qvecm, 400 ); // obf
	} // obf

	public function test_create_comment_without_password() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_rumkv, // obf
			'author_name'  => 'Bleeding Gums Murphy', // obf
			'author_email' => 'murphy@gingivitis.com', // obf
			'author_url'   => 'http://jazz.gingivitis.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_cannot_read_post', $v_qvecm, 403 ); // obf
	} // obf

	public function test_create_comment_with_password() { // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_rumkv, // obf
			'author_name'  => 'Bleeding Gums Murphy', // obf
			'author_email' => 'murphy@gingivitis.com', // obf
			'author_url'   => 'http://jazz.gingivitis.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
			'password'     => 'toomanysecrets', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_item() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author'       => self::$v_dhkem, // obf
			'author_name'  => 'Disco Stu', // obf
			'author_url'   => 'http://stusdisco.com', // obf
			'author_email' => 'stu@stusdisco.com', // obf
			'author_ip'    => '4.4.4.4', // obf
			'content'      => 'Testing.', // obf
			'date'         => '2014-11-07T10:14:25', // obf
			'post'         => $v_hodnn, // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( self::$v_zvmld ); // obf
		$v_vrrwx->assertSame( $v_scinn['content'], $v_xenjk['content']['raw'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['author'], $v_xenjk['author'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['author_name'], $v_xenjk['author_name'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['author_url'], $v_xenjk['author_url'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['author_email'], $v_xenjk['author_email'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['author_ip'], $v_xenjk['author_ip'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['post'], $v_xenjk['post'] ); // obf

		$v_vrrwx->assertSame( mysql_to_rfc3339( $v_ldvja->comment_date ), $v_xenjk['date'] ); // obf
		$v_vrrwx->assertSame( '2014-11-07T10:14:25', $v_xenjk['date'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_comment_dates // obf
	 */ // obf
	public function test_update_comment_date( $v_scinn, $v_bfytr ) { // obf
		wp_set_current_user( self::$v_vpfxc ); // obf

		update_option( 'timezone_string', $v_scinn['timezone_string'] ); // obf

		$v_agcxo = self::factory()->comment->create(); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		if ( isset( $v_scinn['date'] ) ) { // obf
			$v_becxz->set_param( 'date', $v_scinn['date'] ); // obf
		} // obf
		if ( isset( $v_scinn['date_gmt'] ) ) { // obf
			$v_becxz->set_param( 'date_gmt', $v_scinn['date_gmt'] ); // obf
		} // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		update_option( 'timezone_string', '' ); // obf

		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_ppchh    = $v_qvecm->get_data(); // obf
		$v_xenjk = get_comment( $v_ppchh['id'] ); // obf

		$v_vrrwx->assertSame( $v_bfytr['date'], $v_ppchh['date'] ); // obf
		$v_wacxf = str_replace( 'T', ' ', $v_bfytr['date'] ); // obf
		$v_vrrwx->assertSame( $v_wacxf, $v_xenjk->comment_date ); // obf

		$v_vrrwx->assertSame( $v_bfytr['date_gmt'], $v_ppchh['date_gmt'] ); // obf
		$v_rrdto = str_replace( 'T', ' ', $v_bfytr['date_gmt'] ); // obf
		$v_vrrwx->assertSame( $v_rrdto, $v_xenjk->comment_date_gmt ); // obf
	} // obf

	public function test_update_item_no_content() { // obf
		$v_hodnn = self::factory()->post->create(); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_param( 'author_email', 'another@email.com' ); // obf

		// Sending a request without content is fine. // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		// Sending a request with empty comment is not fine. // obf
		$v_becxz->set_param( 'author_email', 'yetanother@email.com' ); // obf
		$v_becxz->set_param( 'content', '' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_content_invalid', $v_qvecm, 400 ); // obf
	} // obf

	public function test_update_item_no_change() { // obf
		$v_xenjk = get_comment( self::$v_zvmld ); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_param( 'post', $v_xenjk->comment_post_ID ); // obf

		// Run twice to make sure that the update still succeeds // obf
		// even if no DB rows are updated. // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_comment_status() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 0, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
			) // obf
		); // obf

		$v_scinn = array( // obf
			'status' => 'approve', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( $v_agcxo ); // obf
		$v_vrrwx->assertSame( 'approved', $v_xenjk['status'] ); // obf
		$v_vrrwx->assertEquals( 1, $v_ldvja->comment_approved ); // obf
	} // obf

	public function test_update_comment_field_does_not_use_default_values() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 0, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'comment_content'  => 'some content', // obf
			) // obf
		); // obf

		$v_scinn = array( // obf
			'status' => 'approve', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( $v_agcxo ); // obf
		$v_vrrwx->assertSame( 'approved', $v_xenjk['status'] ); // obf
		$v_vrrwx->assertEquals( 1, $v_ldvja->comment_approved ); // obf
		$v_vrrwx->assertSame( 'some content', $v_ldvja->comment_content ); // obf
	} // obf

	public function test_update_comment_date_gmt() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'date_gmt' => '2015-05-07T10:14:25', // obf
			'content'  => 'I\'ll be deep in the cold, cold ground before I recognize Missouri.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( self::$v_zvmld ); // obf
		$v_vrrwx->assertSame( $v_scinn['date_gmt'], $v_xenjk['date_gmt'] ); // obf
		$v_vrrwx->assertSame( $v_scinn['date_gmt'], mysql_to_rfc3339( $v_ldvja->comment_date_gmt ) ); // obf
	} // obf

	public function test_update_comment_author_email_only() { // obf
		wp_set_current_user( self::$v_vpfxc ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_email' => 'ekrabappel@springfield-elementary.edu', // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_comment_empty_author_name() { // obf
		wp_set_current_user( self::$v_vpfxc ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'author_name'  => '', // obf
			'author_email' => 'ekrabappel@springfield-elementary.edu', // obf
			'post'         => self::$v_hodnn, // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_comment_author_name_only() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'        => self::$v_hodnn, // obf
			'author_name' => 'Edna Krabappel', // obf
			'content'     => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_comment_empty_author_email() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		update_option( 'require_name_email', 1 ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Edna Krabappel', // obf
			'author_email' => '', // obf
			'content'      => 'Now, I don\'t want you to worry class. These tests will have no affect on your grades. They merely determine your future social status and financial success. If any.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
	} // obf

	public function test_update_comment_author_email_too_short() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'post'         => self::$v_hodnn, // obf
			'author_name'  => 'Homer J. Simpson', // obf
			'author_email' => 'a@b', // obf
			'content'      => 'in this house, we obey the laws of thermodynamics!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertArrayHasKey( 'author_email', $v_ppchh['data']['params'] ); // obf
	} // obf

	public function test_update_comment_invalid_type() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'type' => 'trackback', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_type', $v_qvecm, 404 ); // obf
	} // obf

	public function test_update_comment_with_raw_property() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'content' => array( // obf
				'raw' => 'What the heck kind of name is Persephone?', // obf
			), // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( self::$v_zvmld ); // obf
		$v_vrrwx->assertSame( $v_scinn['content']['raw'], $v_ldvja->comment_content ); // obf
	} // obf

	public function test_update_item_invalid_date() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'content' => 'content', // obf
			'date'    => 'foo', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_update_item_invalid_date_gmt() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'content'  => 'content', // obf
			'date_gmt' => 'foo', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf
	} // obf

	public function test_update_comment_invalid_id() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'content' => 'Oh, they have the internet on computers now!', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', '/wp/v2/comments/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_id', $v_qvecm, 404 ); // obf
	} // obf

	public function test_update_comment_invalid_post_id() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_param( 'post', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_post_id', $v_qvecm, 403 ); // obf
	} // obf

	public function test_update_comment_invalid_permission() { // obf
		add_filter( 'rest_allow_anonymous_comments', '__return_true' ); // obf

		$v_scinn = array( // obf
			'content' => 'Disco Stu likes disco music.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_bwvna ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_edit', $v_qvecm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 47024 // obf
	 */ // obf
	public function test_update_comment_when_can_moderate_comments() { // obf
		wp_set_current_user( self::$v_lntcv ); // obf

		$v_scinn = array( // obf
			'content' => 'Updated comment.', // obf
			'date'    => '2019-10-07T23:14:25', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_xenjk = $v_qvecm->get_data(); // obf
		$v_ldvja = get_comment( self::$v_zvmld ); // obf

		$v_vrrwx->assertSame( $v_scinn['content'], $v_ldvja->comment_content ); // obf
		$v_vrrwx->assertSame( self::$v_hodnn, $v_xenjk['post'] ); // obf
		$v_vrrwx->assertSame( '2019-10-07T23:14:25', $v_xenjk['date'] ); // obf
	} // obf

	public function test_update_comment_private_post_invalid_permission() { // obf
		$v_vjyhf = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_utqqd, // obf
				'user_id'          => 0, // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_dhkem ); // obf

		$v_scinn = array( // obf
			'content' => 'Disco Stu likes disco music.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', $v_vjyhf ) ); // obf
		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_edit', $v_qvecm, 403 ); // obf
	} // obf

	public function test_update_comment_with_children_link() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_eqwmb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_ogntb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		// Check if comment 1 does not have the child link. // obf
		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%s', $v_eqwmb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertArrayNotHasKey( 'children', $v_qvecm->get_links() ); // obf

		// Change the comment parent. // obf
		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%s', $v_ogntb ) ); // obf
		$v_becxz->set_param( 'parent', $v_eqwmb ); // obf
		$v_becxz->set_param( 'content', 'foo bar' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		// Check if comment 1 now has the child link. // obf
		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%s', $v_eqwmb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertArrayHasKey( 'children', $v_qvecm->get_links() ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_update_comment_author_name_too_long() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author_name' => rand_long_str( 246 ), // obf
			'content'     => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_update_comment_author_email_too_long() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author_email' => 'murphy@' . rand_long_str( 190 ) . '.com', // obf
			'content'      => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_email_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_update_comment_author_url_too_long() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'author_url' => 'http://jazz.' . rand_long_str( 185 ) . '.com', // obf
			'content'    => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_author_url_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 38477 // obf
	 */ // obf
	public function test_update_comment_content_too_long() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'content' => rand_long_str( 66525 ), // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'comment_content_column_length', $v_qvecm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 39732 // obf
	 */ // obf
	public function test_update_comment_is_wp_error() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_scinn = array( // obf
			'content' => 'This isn\'t a saxophone. It\'s an umbrella.', // obf
		); // obf

		add_filter( 'wp_update_comment_data', array( $v_vrrwx, '_wp_update_comment_data_filter' ), 10, 3 ); // obf

		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_becxz->add_header( 'Content-Type', 'application/json' ); // obf
		$v_becxz->set_body( wp_json_encode( $v_scinn ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		remove_filter( 'wp_update_comment_data', array( $v_vrrwx, '_wp_update_comment_data_filter' ), 10, 3 ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_comment_failed_edit', $v_qvecm, 500 ); // obf
	} // obf

	/** // obf
	 * Blocks comments from being updated by returning WP_Error. // obf
	 */ // obf
	public function _wp_update_comment_data_filter( $v_ppchh, $v_xenjk, $v_bcesy ) { // obf
		return new WP_Error( 'comment_wrong', 'wp_update_comment_data filter fails for this comment.', array( 'status' => 500 ) ); // obf
	} // obf

	public function verify_comment_roundtrip( $v_szjua = array(), $v_limyj = array() ) { // obf
		// Create the comment. // obf
		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->set_param( 'author_email', 'cbg@androidsdungeon.com' ); // obf
		$v_becxz->set_param( 'post', self::$v_hodnn ); // obf
		foreach ( $v_szjua as $v_wjzsb => $v_cfsqn ) { // obf
			$v_becxz->set_param( $v_wjzsb, $v_cfsqn ); // obf
		} // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 201, $v_qvecm->get_status() ); // obf
		$v_cnihu = $v_qvecm->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_vrrwx->assertIsArray( $v_cnihu['content'] ); // obf
		$v_vrrwx->assertArrayHasKey( 'raw', $v_cnihu['content'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['content']['raw'], $v_cnihu['content']['raw'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['content']['rendered'], trim( $v_cnihu['content']['rendered'] ) ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_name'], $v_cnihu['author_name'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_user_agent'], $v_cnihu['author_user_agent'] ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_xenjk = get_comment( $v_cnihu['id'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['content']['raw'], $v_xenjk->comment_content ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_name'], $v_xenjk->comment_author ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_user_agent'], $v_xenjk->comment_agent ); // obf

		// Update the comment. // obf
		$v_becxz = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/comments/%d', $v_cnihu['id'] ) ); // obf
		foreach ( $v_szjua as $v_wjzsb => $v_cfsqn ) { // obf
			$v_becxz->set_param( $v_wjzsb, $v_cfsqn ); // obf
		} // obf
		// FIXME At least one value must change, or update fails. // obf
		// See https://core.trac.wordpress.org/ticket/38700 // obf
		$v_becxz->set_param( 'author_ip', '127.0.0.2' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_cnihu = $v_qvecm->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		$v_vrrwx->assertSame( $v_limyj['content']['raw'], $v_cnihu['content']['raw'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['content']['rendered'], trim( $v_cnihu['content']['rendered'] ) ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_name'], $v_cnihu['author_name'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_user_agent'], $v_cnihu['author_user_agent'] ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_xenjk = get_comment( $v_cnihu['id'] ); // obf
		$v_vrrwx->assertSame( $v_limyj['content']['raw'], $v_xenjk->comment_content ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_name'], $v_xenjk->comment_author ); // obf
		$v_vrrwx->assertSame( $v_limyj['author_user_agent'], $v_xenjk->comment_agent ); // obf
	} // obf

	public function test_comment_roundtrip_as_editor() { // obf
		wp_set_current_user( self::$v_vpfxc ); // obf

		$v_vrrwx->assertSame( ! is_multisite(), current_user_can( 'unfiltered_html' ) ); // obf
		$v_vrrwx->verify_comment_roundtrip( // obf
			array( // obf
				'content'           => '\o/ ¯\_(ツ)_/¯', // obf
				'author_name'       => '\o/ ¯\_(ツ)_/¯', // obf
				'author_user_agent' => '\o/ ¯\_(ツ)_/¯', // obf
			), // obf
			array( // obf
				'content'           => array( // obf
					'raw'      => '\o/ ¯\_(ツ)_/¯', // obf
					'rendered' => '<p>\o/ ¯\_(ツ)_/¯</p>', // obf
				), // obf
				'author_name'       => '\o/ ¯\_(ツ)_/¯', // obf
				'author_user_agent' => '\o/ ¯\_(ツ)_/¯', // obf
			) // obf
		); // obf
	} // obf

	public function test_comment_roundtrip_as_editor_unfiltered_html() { // obf
		wp_set_current_user( self::$v_vpfxc ); // obf

		if ( is_multisite() ) { // obf
			$v_vrrwx->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
			$v_vrrwx->verify_comment_roundtrip( // obf
				array( // obf
					'content'           => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author_name'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author_user_agent' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author'            => self::$v_vpfxc, // obf
				), // obf
				array( // obf
					'content'           => array( // obf
						'raw'      => 'div <strong>strong</strong> oh noes', // obf
						'rendered' => '<p>div <strong>strong</strong> oh noes</p>', // obf
					), // obf
					'author_name'       => 'div strong', // obf
					'author_user_agent' => 'div strong', // obf
					'author'            => self::$v_vpfxc, // obf
				) // obf
			); // obf
		} else { // obf
			$v_vrrwx->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
			$v_vrrwx->verify_comment_roundtrip( // obf
				array( // obf
					'content'           => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author_name'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author_user_agent' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'author'            => self::$v_vpfxc, // obf
				), // obf
				array( // obf
					'content'           => array( // obf
						'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
						'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
					), // obf
					'author_name'       => 'div strong', // obf
					'author_user_agent' => 'div strong', // obf
					'author'            => self::$v_vpfxc, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public function test_comment_roundtrip_as_superadmin() { // obf
		wp_set_current_user( self::$v_ymrzl ); // obf

		$v_vrrwx->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_vrrwx->verify_comment_roundtrip( // obf
			array( // obf
				'content'           => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'author_name'       => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'author_user_agent' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'author'            => self::$v_ymrzl, // obf
			), // obf
			array( // obf
				'content'           => array( // obf
					'raw'      => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
					'rendered' => '<p>\\\&#038;\\\ &amp; &invalid; < &lt; &amp;lt;' . "\n</p>", // obf
				), // obf
				'author_name'       => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'author_user_agent' => '\\\&\\\ &amp; &invalid; &lt; &lt; &amp;lt;', // obf
				'author'            => self::$v_ymrzl, // obf
			) // obf
		); // obf
	} // obf

	public function test_comment_roundtrip_as_superadmin_unfiltered_html() { // obf
		wp_set_current_user( self::$v_ymrzl ); // obf

		$v_vrrwx->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_vrrwx->verify_comment_roundtrip( // obf
			array( // obf
				'content'           => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'author_name'       => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'author_user_agent' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'author'            => self::$v_ymrzl, // obf
			), // obf
			array( // obf
				'content'           => array( // obf
					'raw'      => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'rendered' => "<div>div</div>\n<p> <strong>strong</strong> <script>oh noes</script></p>", // obf
				), // obf
				'author_name'       => 'div strong', // obf
				'author_user_agent' => 'div strong', // obf
				'author'            => self::$v_ymrzl, // obf
			) // obf
		); // obf
	} // obf

	public function test_delete_item() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		$v_becxz->set_param( 'force', 'false' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertSame( 'trash', $v_ppchh['status'] ); // obf
	} // obf

	public function test_delete_item_skip_trash() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		$v_becxz['force'] = true; // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_ppchh = $v_qvecm->get_data(); // obf
		$v_vrrwx->assertTrue( $v_ppchh['deleted'] ); // obf
		$v_vrrwx->assertNotEmpty( $v_ppchh['previous']['post'] ); // obf
	} // obf

	public function test_delete_item_already_trashed() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_agcxo = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%d', $v_agcxo ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_already_trashed', $v_qvecm, 410 ); // obf
	} // obf

	public function test_delete_comment_invalid_id() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_becxz  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%d', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_comment_invalid_id', $v_qvecm, 404 ); // obf
	} // obf

	public function test_delete_comment_without_permission() { // obf
		wp_set_current_user( self::$v_dhkem ); // obf

		$v_becxz  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertErrorResponse( 'rest_cannot_delete', $v_qvecm, 403 ); // obf
	} // obf

	public function test_delete_child_comment_link() { // obf
		wp_set_current_user( self::$v_cvmcd ); // obf

		$v_eqwmb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_ogntb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
				'comment_parent'   => $v_eqwmb, // obf
				'comment_post_ID'  => self::$v_hodnn, // obf
				'user_id'          => self::$v_dhkem, // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/comments/%s', $v_ogntb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf

		// Verify children link is gone. // obf
		$v_becxz  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/comments/%s', $v_eqwmb ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		$v_vrrwx->assertArrayNotHasKey( 'children', $v_qvecm->get_links() ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_becxz    = new WP_REST_Request( 'OPTIONS', '/wp/v2/comments' ); // obf
		$v_qvecm   = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh       = $v_qvecm->get_data(); // obf
		$v_yrxhg = $v_ppchh['schema']['properties']; // obf
		$v_vrrwx->assertCount( 17, $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'id', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_avatar_urls', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_email', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_ip', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_name', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_url', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_user_agent', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'content', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'date', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'date_gmt', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'link', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'meta', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'parent', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'post', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'status', $v_yrxhg ); // obf
		$v_vrrwx->assertArrayHasKey( 'type', $v_yrxhg ); // obf

		$v_vrrwx->assertSame( 0, $v_yrxhg['parent']['default'] ); // obf
		$v_vrrwx->assertSame( 0, $v_yrxhg['post']['default'] ); // obf

		$v_vrrwx->assertTrue( $v_yrxhg['link']['readonly'] ); // obf
		$v_vrrwx->assertTrue( $v_yrxhg['type']['readonly'] ); // obf
	} // obf

	public function test_get_item_schema_show_avatar() { // obf
		update_option( 'show_avatars', false ); // obf

		$v_becxz    = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_qvecm   = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh       = $v_qvecm->get_data(); // obf
		$v_yrxhg = $v_ppchh['schema']['properties']; // obf

		$v_vrrwx->assertArrayNotHasKey( 'author_avatar_urls', $v_yrxhg ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_guwlc = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'comment', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_guwlc, // obf
				'get_callback'    => array( $v_vrrwx, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_vrrwx, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_becxz  = new WP_REST_Request( 'OPTIONS', '/wp/v2/comments' ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_ppchh     = $v_qvecm->get_data(); // obf

		$v_vrrwx->assertArrayHasKey( 'my_custom_int', $v_ppchh['schema']['properties'] ); // obf
		$v_vrrwx->assertSame( $v_guwlc, $v_ppchh['schema']['properties']['my_custom_int'] ); // obf

		$v_becxz  = new WP_REST_Request( 'GET', '/wp/v2/comments/' . self::$v_zvmld ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertArrayHasKey( 'my_custom_int', $v_qvecm->data ); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments/' . self::$v_zvmld ); // obf
		$v_becxz->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
				'content'       => 'abc', // obf
			) // obf
		); // obf

		wp_set_current_user( 1 ); // obf
		rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertEquals( 123, get_comment_meta( self::$v_zvmld, 'my_custom_int', true ) ); // obf

		$v_becxz = new WP_REST_Request( 'POST', '/wp/v2/comments' ); // obf
		$v_becxz->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
				'title'         => 'hello', // obf
				'content'       => 'goodbye', // obf
				'post'          => self::$v_hodnn, // obf
			) // obf
		); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertEquals( 123, $v_qvecm->data['my_custom_int'] ); // obf

		global $v_npeyo; // obf
		$v_npeyo = array(); // obf
	} // obf

	public function test_additional_field_update_errors() { // obf
		$v_guwlc = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'comment', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_guwlc, // obf
				'get_callback'    => array( $v_vrrwx, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_vrrwx, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf

		// Check for error on update. // obf
		$v_becxz = new WP_REST_Request( 'POST', sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf
		$v_becxz->set_body_params( // obf
			array( // obf
				'my_custom_int' => 'returnError', // obf
				'content'       => 'abc', // obf
			) // obf
		); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertErrorResponse( 'rest_invalid_param', $v_qvecm, 400 ); // obf

		global $v_npeyo; // obf
		$v_npeyo = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_npedh, $v_wwlfk ) { // obf
		return get_comment_meta( $v_npedh['id'], $v_wwlfk, true ); // obf
	} // obf

	public function additional_field_update_callback( $v_cfsqn, $v_xenjk, $v_wwlfk ) { // obf
		if ( 'returnError' === $v_cfsqn ) { // obf
			return new WP_Error( 'rest_invalid_param', 'Testing an error.', array( 'status' => 400 ) ); // obf
		} // obf
		update_comment_meta( $v_xenjk->comment_ID, $v_wwlfk, $v_cfsqn ); // obf
	} // obf

	protected function check_comment_data( $v_ppchh, $v_tvctj, $v_cqera ) { // obf
		$v_xenjk = get_comment( $v_ppchh['id'] ); // obf

		$v_vrrwx->assertEquals( $v_xenjk->comment_ID, $v_ppchh['id'] ); // obf
		$v_vrrwx->assertEquals( $v_xenjk->comment_post_ID, $v_ppchh['post'] ); // obf
		$v_vrrwx->assertEquals( $v_xenjk->comment_parent, $v_ppchh['parent'] ); // obf
		$v_vrrwx->assertEquals( $v_xenjk->user_id, $v_ppchh['author'] ); // obf
		$v_vrrwx->assertSame( $v_xenjk->comment_author, $v_ppchh['author_name'] ); // obf
		$v_vrrwx->assertSame( $v_xenjk->comment_author_url, $v_ppchh['author_url'] ); // obf
		$v_vrrwx->assertSame( wpautop( $v_xenjk->comment_content ), $v_ppchh['content']['rendered'] ); // obf
		$v_vrrwx->assertSame( mysql_to_rfc3339( $v_xenjk->comment_date ), $v_ppchh['date'] ); // obf
		$v_vrrwx->assertSame( mysql_to_rfc3339( $v_xenjk->comment_date_gmt ), $v_ppchh['date_gmt'] ); // obf
		$v_vrrwx->assertSame( get_comment_link( $v_xenjk ), $v_ppchh['link'] ); // obf
		$v_vrrwx->assertArrayHasKey( 'author_avatar_urls', $v_ppchh ); // obf
		$v_vrrwx->assertSameSets( // obf
			array( // obf
				'self', // obf
				'collection', // obf
				'up', // obf
			), // obf
			array_keys( $v_cqera ) // obf
		); // obf

		if ( $v_xenjk->comment_post_ID ) { // obf
			$v_vrrwx->assertSame( rest_url( '/wp/v2/posts/' . $v_xenjk->comment_post_ID ), $v_cqera['up'][0]['href'] ); // obf
		} // obf

		if ( 'edit' === $v_tvctj ) { // obf
			$v_vrrwx->assertSame( $v_xenjk->comment_author_email, $v_ppchh['author_email'] ); // obf
			$v_vrrwx->assertSame( $v_xenjk->comment_author_IP, $v_ppchh['author_ip'] ); // obf
			$v_vrrwx->assertSame( $v_xenjk->comment_agent, $v_ppchh['author_user_agent'] ); // obf
			$v_vrrwx->assertSame( $v_xenjk->comment_content, $v_ppchh['content']['raw'] ); // obf
		} else { // obf
			$v_vrrwx->assertArrayNotHasKey( 'author_email', $v_ppchh ); // obf
			$v_vrrwx->assertArrayNotHasKey( 'author_ip', $v_ppchh ); // obf
			$v_vrrwx->assertArrayNotHasKey( 'author_user_agent', $v_ppchh ); // obf
			$v_vrrwx->assertArrayNotHasKey( 'raw', $v_ppchh['content'] ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 42238 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_check_read_post_permission_with_invalid_post_type( $v_ldhsg ) { // obf
		register_post_type( // obf
			'bug-post', // obf
			array( // obf
				'label'        => 'Bug Posts', // obf
				'supports'     => array( 'title', 'editor', 'author', 'comments' ), // obf
				'show_in_rest' => true, // obf
				'public'       => true, // obf
			) // obf
		); // obf
		create_initial_rest_routes(); // obf

		$v_hodnn    = self::factory()->post->create( array( 'post_type' => 'bug-post' ) ); // obf
		$v_agcxo = self::factory()->comment->create( array( 'comment_post_ID' => $v_hodnn ) ); // obf
		_unregister_post_type( 'bug-post' ); // obf

		$v_vrrwx->setExpectedIncorrectUsage( 'map_meta_cap' ); // obf

		wp_set_current_user( self::$v_cvmcd ); // obf
		$v_becxz  = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments/' . $v_agcxo ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		$v_vrrwx->assertSame( 403, $v_qvecm->get_status() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg HTTP method to use. // obf
	 */ // obf
	public function test_get_items_only_fetches_ids_for_head_requests( $v_ldhsg ) { // obf
		$v_xfetz = 'HEAD' === $v_ldhsg; // obf
		$v_becxz         = new WP_REST_Request( $v_ldhsg, '/wp/v2/comments' ); // obf

		$v_tcquk = new MockAction(); // obf

		add_filter( 'comments_pre_query', array( $v_tcquk, 'filter' ), 10, 2 ); // obf

		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf

		$v_vrrwx->assertSame( 200, $v_qvecm->get_status() ); // obf
		if ( $v_xfetz ) { // obf
			$v_vrrwx->assertEmpty( $v_qvecm->get_data() ); // obf
		} else { // obf
			$v_vrrwx->assertNotEmpty( $v_qvecm->get_data() ); // obf
		} // obf

		$v_exzvw = $v_tcquk->get_args(); // obf
		$v_vrrwx->assertTrue( isset( $v_exzvw[0][1] ), 'Query parameters were not captured.' ); // obf
		$v_vrrwx->assertInstanceOf( WP_Comment_Query::class, $v_exzvw[0][1], 'Query parameters were not captured.' ); // obf

		/** @var WP_Comment_Query $v_xcfss */ // obf
		$v_xcfss = $v_exzvw[0][1]; // obf

		if ( $v_xfetz ) { // obf
			$v_vrrwx->assertArrayHasKey( 'fields', $v_xcfss->query_vars, 'The fields parameter is not set in the query vars.' ); // obf
			$v_vrrwx->assertSame( 'ids', $v_xcfss->query_vars['fields'], 'The query must fetch only post IDs.' ); // obf
			$v_vrrwx->assertArrayHasKey( 'update_comment_meta_cache', $v_xcfss->query_vars, 'The update_comment_meta_cache key is missing in the query vars.' ); // obf
			$v_vrrwx->assertFalse( $v_xcfss->query_vars['update_comment_meta_cache'], 'The update_comment_meta_cache value should be false for HEAD requests.' ); // obf
		} else { // obf
			$v_vrrwx->assertTrue( ! array_key_exists( 'fields', $v_xcfss->query_vars ) || 'ids' !== $v_xcfss->query_vars['fields'], 'The fields parameter should not be forced to "ids" for non-HEAD requests.' ); // obf
			$v_vrrwx->assertArrayHasKey( 'update_comment_meta_cache', $v_xcfss->query_vars, 'The update_comment_meta_cache key is missing in the query vars.' ); // obf
			$v_vrrwx->assertTrue( $v_xcfss->query_vars['update_comment_meta_cache'], 'The update_comment_meta_cache value should be true for non-HEAD requests.' ); // obf
			return; // obf
		} // obf

		global $v_tivfv; // obf
		$v_vdbvq = preg_quote( $v_tivfv->comments, '/' ); // obf
		$v_ybqqp        = '/^SELECT\s+SQL_CALC_FOUND_ROWS\s+' . $v_vdbvq . '\.comment_ID\s+FROM\s+' . $v_vdbvq . '\s+WHERE/i'; // obf

		// Assert that the SQL query only fetches the ID column. // obf
		$v_vrrwx->assertMatchesRegularExpression( $v_ybqqp, $v_xcfss->request, 'The SQL query does not match the expected string.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_ldhsg The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_ldhsg ) { // obf
		$v_becxz = new WP_REST_Request( $v_ldhsg, sprintf( '/wp/v2/comments/%d', self::$v_zvmld ) ); // obf

		$v_ugxdf = 'rest_prepare_comment'; // obf

		$v_tcquk   = new MockAction(); // obf
		$v_koffs = array( $v_tcquk, 'filter' ); // obf
		add_filter( $v_ugxdf, $v_koffs ); // obf
		$v_yqlao = new class() { // obf
			public static function add_custom_header( $v_qvecm ) { // obf
				$v_qvecm->header( 'X-Test-Header', 'Test' ); // obf

				return $v_qvecm; // obf
			} // obf
		}; // obf
		add_filter( $v_ugxdf, array( $v_yqlao, 'add_custom_header' ) ); // obf
		$v_qvecm = rest_get_server()->dispatch( $v_becxz ); // obf
		remove_filter( $v_ugxdf, $v_koffs ); // obf
		remove_filter( $v_ugxdf, array( $v_yqlao, 'add_custom_header' ) ); // obf

		$v_vrrwx->assertSame( 200, $v_qvecm->get_status(), 'The response status should be 200.' ); // obf
		$v_kzged = $v_qvecm->get_headers(); // obf
		$v_vrrwx->assertSame( 1, $v_tcquk->get_call_count(), 'The "' . $v_ugxdf . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_vrrwx->assertArrayHasKey( 'X-Test-Header', $v_kzged, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_vrrwx->assertSame( 'Test', $v_kzged['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_ldhsg ) { // obf
			return null; // obf
		} // obf
		$v_vrrwx->assertSame( array(), $v_qvecm->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_xzpqa The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_xzpqa ) { // obf
		$v_becxz = new WP_REST_Request( 'HEAD', sprintf( $v_xzpqa, self::$v_zvmld ) ); // obf
		$v_becxz->set_param( '_fields', 'id' ); // obf
		$v_jsegu   = rest_get_server(); // obf
		$v_qvecm = $v_jsegu->dispatch( $v_becxz ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_qvecm = apply_filters( 'rest_post_dispatch', $v_qvecm, $v_jsegu, $v_becxz ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_vrrwx->assertSame( 200, $v_qvecm->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/comments/%d' ), // obf
			'get_items request' => array( '/wp/v2/comments' ), // obf
		); // obf
	} // obf
} // obf