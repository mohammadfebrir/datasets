

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Users_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_Test_REST_Users_Controller extends WP_Test_REST_Controller_Testcase { // obf
	protected static $v_uudgx; // obf
	protected static $v_srfze; // obf
	protected static $v_jiwcl; // obf
	protected static $v_krnuq; // obf
	protected static $v_hndpv; // obf
	protected static $v_hqdkx; // obf

	protected static $v_phtoi     = array(); // obf
	protected static $v_bitps       = array(); // obf
	protected static $v_ulnvc    = array(); // obf
	protected static $v_vejae = 30; // obf
	protected static $v_rcuuk    = 50; // obf

	protected static $v_odyqs; // obf

	/** // obf
	 * @var WP_REST_Users_Controller // obf
	 */ // obf
	private $v_psefb; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jdidy ) { // obf
		self::$v_uudgx   = $v_jdidy->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		self::$v_srfze         = $v_jdidy->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_jiwcl       = $v_jdidy->user->create( // obf
			array( // obf
				'role'       => 'editor', // obf
				'user_email' => 'editor@example.com', // obf
			) // obf
		); // obf
		self::$v_krnuq = $v_jdidy->user->create( // obf
			array( // obf
				'role'       => 'editor', // obf
				'user_email' => 'draft-editor@example.com', // obf
			) // obf
		); // obf
		self::$v_hndpv   = $v_jdidy->user->create( // obf
			array( // obf
				'role'         => 'subscriber', // obf
				'display_name' => 'subscriber', // obf
				'user_email'   => 'subscriber@example.com', // obf
			) // obf
		); // obf
		self::$v_hqdkx       = $v_jdidy->user->create( // obf
			array( // obf
				'display_name' => 'author', // obf
				'role'         => 'author', // obf
				'user_email'   => 'author@example.com', // obf
			) // obf
		); // obf

		foreach ( array( true, false ) as $v_htqna ) { // obf
			foreach ( array( true, false ) as $v_lmwrq ) { // obf
				$v_xjvoq = 'r_' . json_encode( $v_htqna ) . '_p_' . json_encode( $v_lmwrq ); // obf
				register_post_type( // obf
					$v_xjvoq, // obf
					array( // obf
						'public'                   => $v_lmwrq, // obf
						'show_in_rest'             => $v_htqna, // obf
						'tests_no_auto_unregister' => true, // obf
					) // obf
				); // obf
				self::$v_phtoi[ $v_xjvoq ] = $v_jdidy->user->create( // obf
					array( // obf
						'role'       => 'editor', // obf
						'user_email' => 'author_' . $v_xjvoq . '@example.com', // obf
					) // obf
				); // obf
				self::$v_bitps[ $v_xjvoq ]   = $v_jdidy->post->create( // obf
					array( // obf
						'post_type'   => $v_xjvoq, // obf
						'post_author' => self::$v_phtoi[ $v_xjvoq ], // obf
					) // obf
				); // obf
			} // obf
		} // obf

		self::$v_bitps['post']                = $v_jdidy->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => self::$v_jiwcl, // obf
			) // obf
		); // obf
		self::$v_bitps['r_true_p_true_DRAFT'] = $v_jdidy->post->create( // obf
			array( // obf
				'post_type'   => 'r_true_p_true', // obf
				'post_author' => self::$v_krnuq, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			self::$v_odyqs = $v_jdidy->blog->create( // obf
				array( // obf
					'domain' => 'rest.wordpress.org', // obf
					'path'   => '/', // obf
				) // obf
			); // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf

		// Set up users for pagination tests. // obf
		for ( $v_cxjem = 0; $v_cxjem < self::$v_vejae - 11; $v_cxjem++ ) { // obf
			self::$v_ulnvc[] = $v_jdidy->user->create( // obf
				array( // obf
					'role'         => 'contributor', // obf
					'display_name' => "User {$v_cxjem}", // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_srfze ); // obf
		self::delete_user( self::$v_jiwcl ); // obf
		self::delete_user( self::$v_krnuq ); // obf
		self::delete_user( self::$v_hqdkx ); // obf

		foreach ( self::$v_bitps as $v_vncoi ) { // obf
			wp_delete_post( $v_vncoi, true ); // obf
		} // obf

		foreach ( self::$v_phtoi as $v_hqdkx ) { // obf
			self::delete_user( $v_hqdkx ); // obf
		} // obf

		_unregister_post_type( 'r_true_p_true' ); // obf
		_unregister_post_type( 'r_true_p_false' ); // obf
		_unregister_post_type( 'r_false_p_true' ); // obf
		_unregister_post_type( 'r_false_p_false' ); // obf

		if ( is_multisite() ) { // obf
			wp_delete_site( self::$v_odyqs ); // obf
		} // obf

		// Remove users for pagination tests. // obf
		foreach ( self::$v_ulnvc as $v_mtcfn ) { // obf
			self::delete_user( $v_mtcfn ); // obf
		} // obf
	} // obf

	/** // obf
	 * This function is run before each method // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_rpsda->endpoint = new WP_REST_Users_Controller(); // obf
	} // obf

	public function test_register_routes() { // obf
		$v_kienp = rest_get_server()->get_routes(); // obf

		$v_rpsda->assertArrayHasKey( '/wp/v2/users', $v_kienp ); // obf
		$v_rpsda->assertCount( 2, $v_kienp['/wp/v2/users'] ); // obf
		$v_rpsda->assertArrayHasKey( '/wp/v2/users/(?P<id>[\d]+)', $v_kienp ); // obf
		$v_rpsda->assertCount( 3, $v_kienp['/wp/v2/users/(?P<id>[\d]+)'] ); // obf
		$v_rpsda->assertArrayHasKey( '/wp/v2/users/me', $v_kienp ); // obf
	} // obf

	public function test_context_param() { // obf
		// Collection. // obf
		$v_etmln  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( array( 'v1' => true ), $v_kgjlv['endpoints'][0]['allow_batch'] ); // obf
		$v_rpsda->assertSame( 'view', $v_kgjlv['endpoints'][0]['args']['context']['default'] ); // obf
		$v_rpsda->assertSame( array( 'view', 'embed', 'edit' ), $v_kgjlv['endpoints'][0]['args']['context']['enum'] ); // obf
		// Single. // obf
		$v_etmln  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users/' . self::$v_srfze ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( array( 'v1' => true ), $v_kgjlv['endpoints'][0]['allow_batch'] ); // obf
		$v_rpsda->assertSame( 'view', $v_kgjlv['endpoints'][0]['args']['context']['default'] ); // obf
		$v_rpsda->assertSame( array( 'view', 'embed', 'edit' ), $v_kgjlv['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	public function test_registered_query_params() { // obf
		$v_etmln  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_guzrq     = array_keys( $v_kgjlv['endpoints'][0]['args'] ); // obf
		$v_rpsda->assertSameSets( // obf
			array( // obf
				'context', // obf
				'exclude', // obf
				'include', // obf
				'offset', // obf
				'order', // obf
				'orderby', // obf
				'page', // obf
				'per_page', // obf
				'roles', // obf
				'capabilities', // obf
				'search', // obf
				'slug', // obf
				'who', // obf
				'search_columns', // obf
				'has_published_posts', // obf
			), // obf
			$v_guzrq // obf
		); // obf
	} // obf

	public function test_get_items() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'context', 'view' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		$v_tgumf = $v_kspzi->get_data(); // obf
		$v_kgjlv     = $v_tgumf[0]; // obf
		$v_qcval = get_userdata( $v_kgjlv['id'] ); // obf
		$v_rpsda->check_user_data( $v_qcval, $v_kgjlv, 'view', $v_kgjlv['_links'] ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_with_edit_context( $v_afljl ) { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( // obf
			200, // obf
			$v_kspzi->get_status(), // obf
			sprintf( 'Expected HTTP status code 200 but got %s.', $v_kspzi->get_status() ) // obf
		); // obf

		if ( 'HEAD' === $v_afljl ) { // obf
			$v_rpsda->assertSame( array(), $v_kspzi->get_data(), 'Expected null response data for HEAD request, but received non-null data.' ); // obf
			return null; // obf
		} // obf

		$v_tgumf = $v_kspzi->get_data(); // obf
		$v_kgjlv     = $v_tgumf[0]; // obf
		$v_qcval = get_userdata( $v_kgjlv['id'] ); // obf
		$v_rpsda->check_user_data( $v_qcval, $v_kgjlv, 'edit', $v_kgjlv['_links'] ); // obf
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
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_with_edit_context_without_permission( $v_afljl ) { // obf
		// Test with a user not logged in. // obf
		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( 401, $v_kspzi->get_status() ); // obf

		// Test with a user logged in but without sufficient capabilities; // obf
		// capability in question: 'list_users'. // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( 403, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_get_items_unauthenticated_includes_authors_of_post_types_shown_in_rest() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_aksrz    = $v_kspzi->get_data(); // obf

		$v_wyhaf = array_values( get_post_types( array( 'show_in_rest' => true ), 'names' ) ); // obf

		$v_rpsda->assertNotEmpty( $v_aksrz ); // obf

		foreach ( $v_aksrz as $v_srfze ) { // obf
			$v_rpsda->assertNotEmpty( count_user_posts( $v_srfze['id'], $v_wyhaf ) ); // obf

			// Ensure we don't expose non-public data. // obf
			$v_rpsda->assertArrayNotHasKey( 'capabilities', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'registered_date', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'first_name', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'last_name', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'nickname', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'extra_capabilities', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'username', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'email', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'roles', $v_srfze ); // obf
			$v_rpsda->assertArrayNotHasKey( 'locale', $v_srfze ); // obf
		} // obf

		$v_ulnvc = wp_list_pluck( $v_aksrz, 'id' ); // obf

		$v_rpsda->assertContains( self::$v_jiwcl, $v_ulnvc ); // obf
		$v_rpsda->assertContains( self::$v_phtoi['r_true_p_true'], $v_ulnvc ); // obf
		$v_rpsda->assertContains( self::$v_phtoi['r_true_p_false'], $v_ulnvc ); // obf
		$v_rpsda->assertCount( 3, $v_ulnvc ); // obf
	} // obf

	public function test_get_items_unauthenticated_does_not_include_authors_of_post_types_not_shown_in_rest() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_aksrz    = $v_kspzi->get_data(); // obf
		$v_ulnvc = wp_list_pluck( $v_aksrz, 'id' ); // obf

		$v_rpsda->assertNotContains( self::$v_phtoi['r_false_p_true'], $v_ulnvc ); // obf
		$v_rpsda->assertNotContains( self::$v_phtoi['r_false_p_false'], $v_ulnvc ); // obf
	} // obf

	public function test_get_items_unauthenticated_does_not_include_users_without_published_posts() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_aksrz    = $v_kspzi->get_data(); // obf
		$v_ulnvc = wp_list_pluck( $v_aksrz, 'id' ); // obf

		$v_rpsda->assertNotContains( self::$v_krnuq, $v_ulnvc ); // obf
		$v_rpsda->assertNotContains( self::$v_srfze, $v_ulnvc ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_pagination_headers( $v_afljl ) { // obf
		$v_vejae = self::$v_vejae; // obf
		$v_jgoov = (int) ceil( $v_vejae / 10 ); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		// Start of the index. // obf
		$v_etmln  = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_emibj  = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertSame( $v_vejae, $v_emibj['X-WP-Total'] ); // obf
		$v_rpsda->assertSame( $v_jgoov, $v_emibj['X-WP-TotalPages'] ); // obf
		$v_mrdna = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_rpsda->assertStringNotContainsString( 'rel="prev"', $v_emibj['Link'] ); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_mrdna . '>; rel="next"', $v_emibj['Link'] ); // obf

		// 3rd page. // obf
		self::factory()->user->create(); // obf
		++$v_vejae; // obf
		++$v_jgoov; // obf
		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'page', 3 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_emibj  = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertSame( $v_vejae, $v_emibj['X-WP-Total'] ); // obf
		$v_rpsda->assertSame( $v_jgoov, $v_emibj['X-WP-TotalPages'] ); // obf
		$v_hpmot = add_query_arg( // obf
			array( // obf
				'page' => 2, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_hpmot . '>; rel="prev"', $v_emibj['Link'] ); // obf
		$v_mrdna = add_query_arg( // obf
			array( // obf
				'page' => 4, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_mrdna . '>; rel="next"', $v_emibj['Link'] ); // obf

		// Last page. // obf
		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'page', $v_jgoov ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_emibj  = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertSame( $v_vejae, $v_emibj['X-WP-Total'] ); // obf
		$v_rpsda->assertSame( $v_jgoov, $v_emibj['X-WP-TotalPages'] ); // obf
		$v_hpmot = add_query_arg( // obf
			array( // obf
				'page' => $v_jgoov - 1, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_hpmot . '>; rel="prev"', $v_emibj['Link'] ); // obf
		$v_rpsda->assertStringNotContainsString( 'rel="next"', $v_emibj['Link'] ); // obf

		// Out of bounds. // obf
		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'page', 100 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_emibj  = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertSame( $v_vejae, $v_emibj['X-WP-Total'] ); // obf
		$v_rpsda->assertSame( $v_jgoov, $v_emibj['X-WP-TotalPages'] ); // obf
		$v_hpmot = add_query_arg( // obf
			array( // obf
				'page' => $v_jgoov, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_hpmot . '>; rel="prev"', $v_emibj['Link'] ); // obf
		$v_rpsda->assertStringNotContainsString( 'rel="next"', $v_emibj['Link'] ); // obf
	} // obf

	public function test_get_items_per_page() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 10, $v_kspzi->get_data() ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'per_page', 5 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 5, $v_kspzi->get_data() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_page( $v_afljl ) { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'per_page', 5 ); // obf
		$v_etmln->set_param( 'page', 2 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		if ( 'HEAD' !== $v_afljl ) { // obf
			$v_rpsda->assertCount( 5, $v_kspzi->get_data() ); // obf
		} // obf

		$v_hpmot = add_query_arg( // obf
			array( // obf
				'per_page' => 5, // obf
				'page'     => 1, // obf
			), // obf
			rest_url( 'wp/v2/users' ) // obf
		); // obf
		$v_emibj   = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertStringContainsString( '<' . $v_hpmot . '>; rel="prev"', $v_emibj['Link'] ); // obf
	} // obf

	public function test_get_items_orderby_name() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_shzpj  = self::factory()->user->create( array( 'display_name' => 'AAAAA' ) ); // obf
		$v_aplht  = self::factory()->user->create( array( 'display_name' => 'NNNNN' ) ); // obf
		$v_sgoob = self::factory()->user->create( array( 'display_name' => 'ZZZZ' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'name' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_sgoob, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'name' ); // obf
		$v_etmln->set_param( 'order', 'asc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_shzpj, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_orderby_url() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_shzpj  = self::factory()->user->create( array( 'user_url' => 'http://a.com' ) ); // obf
		$v_sgoob = self::factory()->user->create( array( 'user_url' => 'http://b.com' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'url' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_sgoob, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'url' ); // obf
		$v_etmln->set_param( 'order', 'asc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_shzpj, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_orderby_slug() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_sgoob = self::factory()->user->create( array( 'user_nicename' => 'blogin' ) ); // obf
		$v_shzpj  = self::factory()->user->create( array( 'user_nicename' => 'alogin' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'slug' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_sgoob, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'slug' ); // obf
		$v_etmln->set_param( 'order', 'asc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_shzpj, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_orderby_slugs() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		self::factory()->user->create( array( 'user_nicename' => 'burrito' ) ); // obf
		self::factory()->user->create( array( 'user_nicename' => 'taco' ) ); // obf
		self::factory()->user->create( array( 'user_nicename' => 'chalupa' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'include_slugs' ); // obf
		$v_etmln->set_param( 'slug', array( 'taco', 'burrito', 'chalupa' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf

		$v_rpsda->assertSame( 'taco', $v_kgjlv[0]['slug'] ); // obf
		$v_rpsda->assertSame( 'burrito', $v_kgjlv[1]['slug'] ); // obf
		$v_rpsda->assertSame( 'chalupa', $v_kgjlv[2]['slug'] ); // obf
	} // obf

	public function test_get_items_orderby_email() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_sgoob = self::factory()->user->create( array( 'user_email' => 'bemail@gmail.com' ) ); // obf
		$v_shzpj  = self::factory()->user->create( array( 'user_email' => 'aemail@gmail.com' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'email' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_sgoob, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'email' ); // obf
		$v_etmln->set_param( 'order', 'asc' ); // obf
		$v_etmln->set_param( 'per_page', 1 ); // obf
		$v_etmln->set_param( 'include', array( $v_shzpj, $v_sgoob ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( $v_shzpj, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_orderby_email_unauthenticated() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'email' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_forbidden_orderby', $v_kspzi, 401 ); // obf
	} // obf

	public function test_get_items_orderby_registered_date_unauthenticated() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'registered_date' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_forbidden_orderby', $v_kspzi, 401 ); // obf
	} // obf

	public function test_get_items_invalid_order() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'order', 'asc,id' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_get_items_invalid_orderby() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'orderby', 'invalid' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_get_items_offset() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'per_page', self::$v_rcuuk ); // obf
		$v_etmln->set_param( 'offset', 1 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( self::$v_vejae - 1, $v_kspzi->get_data() ); // obf

		// 'offset' works with 'per_page'. // obf
		$v_etmln->set_param( 'per_page', 2 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 2, $v_kspzi->get_data() ); // obf

		// 'offset' takes priority over 'page'. // obf
		$v_etmln->set_param( 'page', 3 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 2, $v_kspzi->get_data() ); // obf

		// Invalid 'offset' should error. // obf
		$v_etmln->set_param( 'offset', 'moreplease' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_get_items_include_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_arnxv = self::factory()->user->create(); // obf
		$v_bqakh = self::factory()->user->create(); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf

		// 'orderby' => 'asc'. // obf
		$v_etmln->set_param( 'include', array( $v_bqakh, $v_arnxv ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 2, $v_kgjlv ); // obf
		$v_rpsda->assertSame( $v_arnxv, $v_kgjlv[0]['id'] ); // obf

		// 'orderby' => 'include'. // obf
		$v_etmln->set_param( 'orderby', 'include' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 2, $v_kgjlv ); // obf
		$v_rpsda->assertSame( $v_bqakh, $v_kgjlv[0]['id'] ); // obf

		// Invalid 'include' should error. // obf
		$v_etmln->set_param( 'include', 'invalid' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf

		// No privileges. // obf
		$v_etmln->set_param( 'include', array( $v_bqakh, $v_arnxv ) ); // obf
		wp_set_current_user( 0 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 0, $v_kgjlv ); // obf
	} // obf

	public function test_get_items_exclude_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_arnxv = self::factory()->user->create(); // obf
		$v_bqakh = self::factory()->user->create(); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'per_page', self::$v_rcuuk ); // There are >10 users at this point. // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_htvir      = wp_list_pluck( $v_kgjlv, 'id' ); // obf
		$v_rpsda->assertContains( $v_arnxv, $v_htvir ); // obf
		$v_rpsda->assertContains( $v_bqakh, $v_htvir ); // obf

		$v_etmln->set_param( 'exclude', array( $v_bqakh ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_htvir      = wp_list_pluck( $v_kgjlv, 'id' ); // obf
		$v_rpsda->assertContains( $v_arnxv, $v_htvir ); // obf
		$v_rpsda->assertNotContains( $v_bqakh, $v_htvir ); // obf

		// Invalid 'exclude' should error. // obf
		$v_etmln->set_param( 'exclude', 'none-of-those-please' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_get_items_search() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf

		$v_cwaks = self::factory()->user->create( array( 'display_name' => 'yololololo' ) ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 1, $v_kspzi->get_data() ); // obf
		// Default to wildcard search. // obf
		$v_irdun = self::factory()->user->create( // obf
			array( // obf
				'role'          => 'author', // obf
				'user_nicename' => 'adam', // obf
			) // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'ada' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 1, $v_kgjlv ); // obf
		$v_rpsda->assertSame( $v_irdun, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_search_fields() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf

		$v_cwaks = self::factory()->user->create( array( 'user_email' => 'yololololo@example.localhost' ) ); // obf

		wp_set_current_user( self::$v_srfze ); // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 1, $v_kspzi->get_data() ); // obf

		wp_set_current_user( self::$v_jiwcl ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 62596 // obf
	 */ // obf
	public function test_get_items_search_columns() { // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf

		self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Adam', // obf
				'user_email'   => 'yololololo@example.localhost', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_srfze ); // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_etmln->set_param( 'search_columns', 'email' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 1, $v_kspzi->get_data() ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_etmln->set_param( 'search_columns', 'name' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'Adam' ); // obf
		$v_etmln->set_param( 'search_columns', 'name' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 1, $v_kspzi->get_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 62596 // obf
	 */ // obf
	public function test_get_items_search_columns_without_permission() { // obf
		self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Adam', // obf
				'user_email'   => 'yololololo@example.localhost', // obf
			) // obf
		); // obf

		// Test user without sufficient capabilities - 'list_users'. // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'yololololo' ); // obf
		$v_etmln->set_param( 'search_columns', 'email' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf
	} // obf

	public function test_get_items_slug_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'foo', // obf
				'user_login'   => 'bar', // obf
			) // obf
		); // obf
		$v_bqakh = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Moo', // obf
				'user_login'   => 'foo', // obf
			) // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'slug', 'foo' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 1, $v_kgjlv ); // obf
		$v_rpsda->assertSame( $v_bqakh, $v_kgjlv[0]['id'] ); // obf
	} // obf

	public function test_get_items_slug_array_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_arnxv = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Taco', // obf
				'user_login'   => 'taco', // obf
			) // obf
		); // obf
		$v_bqakh = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Enchilada', // obf
				'user_login'   => 'enchilada', // obf
			) // obf
		); // obf
		$v_nimnx = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Burrito', // obf
				'user_login'   => 'burrito', // obf
			) // obf
		); // obf
		self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Hon Pizza', // obf
				'user_login'   => 'pizza', // obf
			) // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( // obf
			'slug', // obf
			array( // obf
				'taco', // obf
				'burrito', // obf
				'enchilada', // obf
			) // obf
		); // obf
		$v_etmln->set_param( 'orderby', 'slug' ); // obf
		$v_etmln->set_param( 'order', 'asc' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_kgjlv  = $v_kspzi->get_data(); // obf
		$v_kjnbj = wp_list_pluck( $v_kgjlv, 'slug' ); // obf
		$v_rpsda->assertSame( array( 'burrito', 'enchilada', 'taco' ), $v_kjnbj ); // obf
	} // obf

	public function test_get_items_slug_csv_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_arnxv = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Taco', // obf
				'user_login'   => 'taco', // obf
			) // obf
		); // obf
		$v_bqakh = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Enchilada', // obf
				'user_login'   => 'enchilada', // obf
			) // obf
		); // obf
		$v_nimnx = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Burrito', // obf
				'user_login'   => 'burrito', // obf
			) // obf
		); // obf
		self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'Hon Pizza', // obf
				'user_login'   => 'pizza', // obf
			) // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'slug', 'taco,burrito , enchilada' ); // obf
		$v_etmln->set_param( 'orderby', 'slug' ); // obf
		$v_etmln->set_param( 'order', 'desc' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_kgjlv  = $v_kspzi->get_data(); // obf
		$v_kjnbj = wp_list_pluck( $v_kgjlv, 'slug' ); // obf
		$v_rpsda->assertSame( array( 'taco', 'enchilada', 'burrito' ), $v_kjnbj ); // obf
	} // obf

	/** // obf
	 * Note: Do not test using editor role as there is an editor role created in testing, // obf
	 * and it makes it hard to test this functionality. // obf
	 */ // obf
	public function test_get_items_roles() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'roles', 'author,subscriber' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 2, $v_kgjlv ); // obf
		$v_rpsda->assertSame( self::$v_hqdkx, $v_kgjlv[0]['id'] ); // obf
		$v_rpsda->assertSame( self::$v_hndpv, $v_kgjlv[1]['id'] ); // obf

		$v_etmln->set_param( 'roles', 'author' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 1, $v_kgjlv ); // obf
		$v_rpsda->assertSame( self::$v_hqdkx, $v_kgjlv[0]['id'] ); // obf

		wp_set_current_user( 0 ); // obf

		$v_etmln->set_param( 'roles', 'author' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf

		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln->set_param( 'roles', 'author' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 403 ); // obf
	} // obf

	public function test_get_items_invalid_roles() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'roles', 'ilovesteak,author' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 1, $v_kgjlv ); // obf
		$v_rpsda->assertSame( self::$v_hqdkx, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'roles', 'steakisgood' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertIsArray( $v_kgjlv ); // obf
		$v_rpsda->assertEmpty( $v_kgjlv ); // obf
	} // obf

	/** // obf
	 * @ticket 16841 // obf
	 */ // obf
	public function test_get_items_capabilities() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'capabilities', 'edit_posts' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf

		$v_rpsda->assertNotEmpty( $v_kgjlv ); // obf
		foreach ( $v_kgjlv as $v_srfze ) { // obf
			$v_rpsda->assertTrue( user_can( $v_srfze['id'], 'edit_posts' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 16841 // obf
	 */ // obf
	public function test_get_items_capabilities_no_permission_no_user() { // obf
		wp_set_current_user( 0 ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'capabilities', 'edit_posts' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 16841 // obf
	 */ // obf
	public function test_get_items_capabilities_no_permission_editor() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'capabilities', 'edit_posts' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 16841 // obf
	 */ // obf
	public function test_get_items_invalid_capabilities() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'roles', 'ilovesteak,author' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertCount( 1, $v_kgjlv ); // obf
		$v_rpsda->assertSame( self::$v_hqdkx, $v_kgjlv[0]['id'] ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'capabilities', 'steakisgood' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_rpsda->assertIsArray( $v_kgjlv ); // obf
		$v_rpsda->assertEmpty( $v_kgjlv ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated WP_User_Query // obf
	 */ // obf
	public function test_get_items_who_author_query() { // obf
		wp_set_current_user( self::$v_uudgx ); // obf

		// First request should include subscriber in the set. // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'search', 'subscriber' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_rpsda->assertCount( 1, $v_kspzi->get_data() ); // obf

		// Second request should exclude subscriber. // obf
		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'who', 'authors' ); // obf
		$v_etmln->set_param( 'search', 'subscriber' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_rpsda->assertCount( 0, $v_kspzi->get_data() ); // obf
	} // obf

	public function test_get_items_who_invalid_query() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'who', 'editor' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	/** // obf
	 * Any user with 'edit_posts' on a show_in_rest post type // obf
	 * can view authors. Others (e.g. subscribers) cannot. // obf
	 */ // obf
	public function test_get_items_who_unauthorized_query() { // obf
		wp_set_current_user( self::$v_hndpv ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users' ); // obf
		$v_etmln->set_param( 'who', 'authors' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_forbidden_who', $v_kspzi, 403 ); // obf
	} // obf

	public function test_get_item() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_get_user_response( $v_kspzi, 'embed' ); // obf
	} // obf

	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request(); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_srfze = get_user_by( 'id', get_current_user_id() ); // obf
		$v_kgjlv = $v_rpsda->endpoint->prepare_item_for_response( $v_srfze, $v_etmln ); // obf
		$v_rpsda->check_get_user_response( $v_kgjlv, 'edit' ); // obf
	} // obf

	public function test_prepare_item_limit_fields() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request(); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_etmln->set_param( '_fields', 'id,name' ); // obf
		$v_srfze     = get_user_by( 'id', get_current_user_id() ); // obf
		$v_kspzi = $v_rpsda->endpoint->prepare_item_for_response( $v_srfze, $v_etmln ); // obf
		$v_rpsda->assertSame( // obf
			array( // obf
				'id', // obf
				'name', // obf
			), // obf
			array_keys( $v_kspzi->get_data() ) // obf
		); // obf
	} // obf

	public function test_get_user_avatar_urls() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertArrayHasKey( 24, $v_kgjlv['avatar_urls'] ); // obf
		$v_rpsda->assertArrayHasKey( 48, $v_kgjlv['avatar_urls'] ); // obf
		$v_rpsda->assertArrayHasKey( 96, $v_kgjlv['avatar_urls'] ); // obf

		$v_srfze = get_user_by( 'id', self::$v_jiwcl ); // obf
		// Ignore the subdomain, since get_avatar_url() randomly sets // obf
		// the Gravatar server when building the URL string. // obf
		$v_rpsda->assertSame( substr( get_avatar_url( $v_srfze->user_email ), 9 ), substr( $v_kgjlv['avatar_urls'][96], 9 ) ); // obf
	} // obf

	public function test_get_user_invalid_id() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	public function test_get_user_empty_capabilities() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_yrquz = self::factory()->user->create( // obf
			array( // obf
				'display_name' => 'lolz', // obf
				'roles'        => '', // obf
			) // obf
		); // obf

		delete_user_option( $v_yrquz, 'capabilities' ); // obf
		delete_user_option( $v_yrquz, 'user_level' ); // obf

		$v_etmln = new WP_REST_Request( 'GET', '/wp/v2/users/' . $v_yrquz ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
		} else { // obf
			$v_kgjlv = $v_kspzi->get_data(); // obf

			$v_rpsda->assertEquals( $v_kgjlv['capabilities'], new stdClass() ); // obf
			$v_rpsda->assertEquals( $v_kgjlv['extra_capabilities'], new stdClass() ); // obf
		} // obf
	} // obf

	public function test_cannot_get_item_without_permission() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_srfze ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 403 ); // obf
	} // obf

	public function test_can_get_item_author_of_rest_true_public_true_unauthenticated() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_true_p_true'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_can_get_item_author_of_rest_true_public_true_authenticated() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_true_p_true'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_can_get_item_author_of_rest_true_public_false() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_true_p_false'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_cannot_get_item_author_of_rest_false_public_true_unauthenticated() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_false_p_true'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf
	} // obf

	public function test_cannot_get_item_author_of_rest_false_public_true_without_permission() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_false_p_true'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 403 ); // obf
	} // obf

	public function test_cannot_get_item_author_of_rest_false_public_false() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_phtoi['r_false_p_false'] ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf
	} // obf

	public function test_can_get_item_author_of_post() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_cannot_get_item_author_of_draft() { // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_krnuq ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf
	} // obf

	public function test_get_item_published_author_post() { // obf
		$v_dsrvf = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_zacbj = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_dsrvf, // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_dsrvf ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_get_user_response( $v_kspzi, 'embed' ); // obf
	} // obf

	public function test_get_item_published_author_pages() { // obf
		$v_dsrvf = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_dsrvf ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 401, $v_kspzi->get_status() ); // obf

		$v_zacbj = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_dsrvf, // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf

		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_get_user_response( $v_kspzi, 'embed' ); // obf
	} // obf

	public function test_get_user_with_edit_context() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_etmln = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_get_user_response( $v_kspzi, 'edit' ); // obf
	} // obf

	public function test_get_item_published_author_wrong_context() { // obf
		$v_dsrvf = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		$v_zacbj = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_dsrvf, // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_etmln = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_dsrvf ) ); // obf
		$v_etmln->set_param( 'context', 'edit' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_cannot_view', $v_kspzi, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_current_user( $v_afljl ) { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( $v_afljl, '/wp/v2/users/me' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_emibj = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertArrayNotHasKey( 'Location', $v_emibj ); // obf

		if ( 'HEAD' === $v_afljl ) { // obf
			// HEAD responses only contain headers. Bail. // obf
			return null; // obf
		} // obf
		$v_rpsda->check_get_user_response( $v_kspzi, 'view' ); // obf
		$v_lssez = $v_kspzi->get_links(); // obf
		$v_rpsda->assertSame( rest_url( 'wp/v2/users/' . self::$v_srfze ), $v_lssez['self'][0]['href'] ); // obf
	} // obf

	public function test_get_current_user_without_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users/me' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_not_logged_in', $v_kspzi, 401 ); // obf
	} // obf

	public function test_create_item() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username'    => 'testuser', // obf
			'password'    => 'testpassword', // obf
			'email'       => 'test@example.com', // obf
			'name'        => 'Test User', // obf
			'nickname'    => 'testuser', // obf
			'slug'        => 'test-user', // obf
			'roles'       => array( 'editor' ), // obf
			'description' => 'New API User', // obf
			'url'         => 'http://example.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'http://example.com', $v_kgjlv['url'] ); // obf
		$v_rpsda->assertSame( array( 'editor' ), $v_kgjlv['roles'] ); // obf
		$v_rpsda->check_add_edit_user_response( $v_kspzi ); // obf
	} // obf

	public function test_create_item_invalid_username() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username'    => '¯\_(ツ)_/¯', // obf
			'password'    => 'testpassword', // obf
			'email'       => 'test@example.com', // obf
			'name'        => 'Test User', // obf
			'nickname'    => 'testuser', // obf
			'slug'        => 'test-user', // obf
			'roles'       => array( 'editor' ), // obf
			'description' => 'New API User', // obf
			'url'         => 'http://example.com', // obf
		); // obf

		// Username rules are different (more strict) for multisite; see `wpmu_validate_user_signup`. // obf
		if ( is_multisite() ) { // obf
			$v_kibvg['username'] = 'no-dashes-allowed'; // obf
		} // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf

		if ( is_multisite() ) { // obf
			$v_rpsda->assertIsArray( $v_kgjlv['additional_errors'] ); // obf
			$v_rpsda->assertCount( 1, $v_kgjlv['additional_errors'] ); // obf
			$v_xbkvk = $v_kgjlv['additional_errors'][0]; // obf
			$v_rpsda->assertSame( 'user_name', $v_xbkvk['code'] ); // obf
			$v_rpsda->assertSame( 'Usernames can only contain lowercase letters (a-z) and numbers.', $v_xbkvk['message'] ); // obf
		} else { // obf
			$v_rpsda->assertIsArray( $v_kgjlv['data']['params'] ); // obf
			$v_grktn = $v_kgjlv['data']['params']; // obf
			$v_rpsda->assertIsString( $v_grktn['username'] ); // obf
			$v_rpsda->assertSame( 'This username is invalid because it uses illegal characters. Please enter a valid username.', $v_grktn['username'] ); // obf
		} // obf
	} // obf

	public function get_illegal_user_logins() { // obf
		return array( 'nope' ); // obf
	} // obf

	public function test_create_item_illegal_username() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		add_filter( 'illegal_user_logins', array( $v_rpsda, 'get_illegal_user_logins' ) ); // obf

		$v_kibvg = array( // obf
			'username'    => 'nope', // obf
			'password'    => 'testpassword', // obf
			'email'       => 'test@example.com', // obf
			'name'        => 'Test User', // obf
			'nickname'    => 'testuser', // obf
			'slug'        => 'test-user', // obf
			'roles'       => array( 'editor' ), // obf
			'description' => 'New API User', // obf
			'url'         => 'http://example.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		remove_filter( 'illegal_user_logins', array( $v_rpsda, 'get_illegal_user_logins' ) ); // obf

		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertIsArray( $v_kgjlv['data']['params'] ); // obf
		$v_grktn = $v_kgjlv['data']['params']; // obf
		$v_rpsda->assertIsString( $v_grktn['username'] ); // obf
		$v_rpsda->assertSame( 'Sorry, that username is not allowed.', $v_grktn['username'] ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_new_network_user_on_site_does_not_add_user_to_sub_site() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_kibvg = array( // obf
			'username' => 'testuser123', // obf
			'password' => 'testpassword', // obf
			'email'    => 'test@example.com', // obf
			'name'     => 'Test User 123', // obf
			'roles'    => array( 'editor' ), // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_mtcfn  = $v_kgjlv['id']; // obf

		$v_nskef = is_user_member_of_blog( $v_mtcfn, self::$v_odyqs ); // obf

		wpmu_delete_user( $v_mtcfn ); // obf

		$v_rpsda->assertFalse( $v_nskef ); // obf
	} // obf

	/** // obf
	 * @ticket 41101 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_new_network_user_with_add_user_to_blog_failure() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_kibvg = array( // obf
			'username' => 'testuser123', // obf
			'password' => 'testpassword', // obf
			'email'    => 'test@example.com', // obf
			'name'     => 'Test User 123', // obf
			'roles'    => array( 'editor' ), // obf
		); // obf

		add_filter( 'can_add_user_to_blog', '__return_false' ); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'user_cannot_be_added', $v_kspzi ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_new_network_user_on_sub_site_adds_user_to_site() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_kibvg = array( // obf
			'username' => 'testuser123', // obf
			'password' => 'testpassword', // obf
			'email'    => 'test@example.com', // obf
			'name'     => 'Test User 123', // obf
			'roles'    => array( 'editor' ), // obf
		); // obf

		switch_to_blog( self::$v_odyqs ); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_mtcfn  = $v_kgjlv['id']; // obf

		restore_current_blog(); // obf

		$v_nskef = is_user_member_of_blog( $v_mtcfn, self::$v_odyqs ); // obf

		wpmu_delete_user( $v_mtcfn ); // obf

		$v_rpsda->assertTrue( $v_nskef ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_create_existing_network_user_on_sub_site_has_error() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_kibvg = array( // obf
			'username' => 'testuser123', // obf
			'password' => 'testpassword', // obf
			'email'    => 'test@example.com', // obf
			'name'     => 'Test User 123', // obf
			'roles'    => array( 'editor' ), // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_mtcfn  = $v_kgjlv['id']; // obf

		switch_to_blog( self::$v_odyqs ); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_ppoju = rest_get_server()->dispatch( $v_etmln ); // obf

		restore_current_blog(); // obf

		wpmu_delete_user( $v_mtcfn ); // obf

		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_ppoju, 400 ); // obf
		$v_kgjlv = $v_ppoju->get_data(); // obf
		$v_rpsda->assertIsArray( $v_kgjlv['additional_errors'] ); // obf
		$v_rpsda->assertCount( 2, $v_kgjlv['additional_errors'] ); // obf
		$v_grktn = $v_kgjlv['additional_errors']; // obf
		foreach ( $v_grktn as $v_xbkvk ) { // obf
			// Check the code matches one we know. // obf
			$v_rpsda->assertContains( $v_xbkvk['code'], array( 'user_name', 'user_email' ) ); // obf
			if ( 'user_name' === $v_xbkvk['code'] ) { // obf
				$v_rpsda->assertSame( 'Sorry, that username already exists!', $v_xbkvk['message'] ); // obf
			} else { // obf
				$v_pgvcc = '<strong>Error:</strong> This email address is already registered. ' . // obf
							'<a href="http://rest.wordpress.org/wp-login.php">Log in</a> with ' . // obf
							'this address or choose another one.'; // obf
				$v_rpsda->assertSame( $v_pgvcc, $v_xbkvk['message'] ); // obf
			} // obf
		} // obf
	} // obf

	public function test_json_create_user() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username' => 'testjsonuser', // obf
			'password' => 'testjsonpassword', // obf
			'email'    => 'testjson@example.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/json' ); // obf
		$v_etmln->set_body( wp_json_encode( $v_kibvg ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->check_add_edit_user_response( $v_kspzi ); // obf
	} // obf

	public function test_create_user_without_permission() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_kibvg = array( // obf
			'username' => 'homersimpson', // obf
			'password' => 'stupidsexyflanders', // obf
			'email'    => 'chunkylover53@aol.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_cannot_create_user', $v_kspzi, 403 ); // obf
	} // obf

	public function test_create_user_invalid_id() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'id'       => '156', // obf
			'username' => 'lisasimpson', // obf
			'password' => 'DavidHasselhoff', // obf
			'email'    => 'smartgirl63_@yahoo.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_exists', $v_kspzi, 400 ); // obf
	} // obf

	public function test_create_user_invalid_email() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username' => 'lisasimpson', // obf
			'password' => 'DavidHasselhoff', // obf
			'email'    => 'something', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_create_user_invalid_role() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username' => 'maggiesimpson', // obf
			'password' => 'i_shot_mrburns', // obf
			'email'    => 'packingheat@example.com', // obf
			'roles'    => array( 'baby' ), // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_role', $v_kspzi, 400 ); // obf
	} // obf

	public function test_update_item() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'user_email' => 'test@example.com', // obf
				'user_pass'  => 'sjflsfls', // obf
				'user_login' => 'test_update', // obf
				'first_name' => 'Old Name', // obf
				'user_url'   => 'http://apple.com', // obf
				'locale'     => 'en_US', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_qcval  = get_userdata( $v_mtcfn ); // obf
		$v_upwyf = $v_qcval->user_pass; // obf

		$v_ykmwz['email']      = $v_qcval->user_email; // obf
		$v_ykmwz['username']   = $v_qcval->user_login; // obf
		$v_ykmwz['first_name'] = 'New Name'; // obf
		$v_ykmwz['url']        = 'http://google.com'; // obf
		$v_ykmwz['locale']     = 'de_DE'; // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_ykmwz ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->check_add_edit_user_response( $v_kspzi, true ); // obf

		// Check that the name has been updated correctly. // obf
		$v_ftnrr = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'New Name', $v_ftnrr['first_name'] ); // obf
		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertSame( 'New Name', $v_srfze->first_name ); // obf

		$v_rpsda->assertSame( 'http://google.com', $v_ftnrr['url'] ); // obf
		$v_rpsda->assertSame( 'http://google.com', $v_srfze->user_url ); // obf
		$v_rpsda->assertSame( 'de_DE', $v_srfze->locale ); // obf

		// Check that we haven't inadvertently changed the user's password, // obf
		// as per https://core.trac.wordpress.org/ticket/21429 // obf
		$v_rpsda->assertSame( $v_upwyf, $v_srfze->user_pass ); // obf
	} // obf

	public function test_update_item_no_change() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_srfze = get_userdata( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'slug', $v_srfze->user_nicename ); // obf

		// Run twice to make sure that the update still succeeds // obf
		// even if no DB rows are updated. // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
	} // obf

	public function test_update_item_existing_email() { // obf
		$v_xpbum = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
			) // obf
		); // obf
		$v_ppbiw = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user2', // obf
				'user_email' => 'testjson2@example.com', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_ppbiw ); // obf
		$v_etmln->set_param( 'email', 'testjson@example.com' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertInstanceOf( 'WP_Error', $v_kspzi->as_error() ); // obf
		$v_rpsda->assertSame( 'rest_user_invalid_email', $v_kspzi->as_error()->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 44672 // obf
	 */ // obf
	public function test_update_item_existing_email_case() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_srfze = get_userdata( self::$v_jiwcl ); // obf

		$v_kvijh = ucwords( $v_srfze->user_email ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'email', $v_kvijh ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_rpsda->assertSame( $v_kvijh, $v_kgjlv['email'] ); // obf
	} // obf

	/** // obf
	 * @ticket 44672 // obf
	 */ // obf
	public function test_update_item_existing_email_case_not_own() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_srfze       = get_userdata( self::$v_jiwcl ); // obf
		$v_hndpv = get_userdata( self::$v_hndpv ); // obf

		$v_kvijh = ucwords( $v_hndpv->user_email ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'email', $v_kvijh ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf

		$v_rpsda->assertSame( 400, $v_kspzi->get_status() ); // obf
		$v_rpsda->assertSame( 'rest_user_invalid_email', $v_kgjlv['code'] ); // obf
	} // obf

	public function test_update_item_invalid_locale() { // obf
		$v_xpbum = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_xpbum ); // obf
		$v_etmln->set_param( 'locale', 'klingon' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertInstanceOf( 'WP_Error', $v_kspzi->as_error() ); // obf
		$v_rpsda->assertSame( 'rest_invalid_param', $v_kspzi->as_error()->get_error_code() ); // obf
	} // obf

	public function test_update_item_en_US_locale() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_mtcfn ); // obf
		$v_etmln->set_param( 'locale', 'en_US' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_add_edit_user_response( $v_kspzi, true ); // obf

		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertSame( 'en_US', $v_srfze->locale ); // obf
	} // obf

	/** // obf
	 * @ticket 38632 // obf
	 */ // obf
	public function test_update_item_empty_locale() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
				'locale'     => 'de_DE', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_mtcfn ); // obf
		$v_etmln->set_param( 'locale', '' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_add_edit_user_response( $v_kspzi, true ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( get_locale(), $v_kgjlv['locale'] ); // obf
		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertSame( '', $v_srfze->locale ); // obf
	} // obf

	public function test_update_item_username_attempt() { // obf
		$v_xpbum = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
			) // obf
		); // obf
		$v_ppbiw = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user2', // obf
				'user_email' => 'testjson2@example.com', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_ppbiw ); // obf
		$v_etmln->set_param( 'username', 'test_json_user' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertInstanceOf( 'WP_Error', $v_kspzi->as_error() ); // obf
		$v_rpsda->assertSame( 'rest_user_invalid_argument', $v_kspzi->as_error()->get_error_code() ); // obf
	} // obf

	public function test_update_item_existing_nicename() { // obf
		$v_xpbum = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user', // obf
				'user_email' => 'testjson@example.com', // obf
			) // obf
		); // obf
		$v_ppbiw = self::factory()->user->create( // obf
			array( // obf
				'user_login' => 'test_json_user2', // obf
				'user_email' => 'testjson2@example.com', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/' . $v_ppbiw ); // obf
		$v_etmln->set_param( 'slug', 'test_json_user' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertInstanceOf( 'WP_Error', $v_kspzi->as_error() ); // obf
		$v_rpsda->assertSame( 'rest_user_invalid_slug', $v_kspzi->as_error()->get_error_code() ); // obf
	} // obf

	public function test_json_update_user() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'user_email' => 'testjson2@example.com', // obf
				'user_pass'  => 'sjflsfl3sdjls', // obf
				'user_login' => 'test_json_update', // obf
				'first_name' => 'Old Name', // obf
				'last_name'  => 'Original Last', // obf
			) // obf
		); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'username'   => 'test_json_update', // obf
			'email'      => 'testjson2@example.com', // obf
			'first_name' => 'JSON Name', // obf
			'last_name'  => 'New Last', // obf
		); // obf

		$v_qcval  = get_userdata( $v_mtcfn ); // obf
		$v_upwyf = $v_qcval->user_pass; // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/json' ); // obf
		$v_etmln->set_body( wp_json_encode( $v_kibvg ) ); // obf

		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->check_add_edit_user_response( $v_kspzi, true ); // obf

		// Check that the name has been updated correctly. // obf
		$v_ftnrr = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'JSON Name', $v_ftnrr['first_name'] ); // obf
		$v_rpsda->assertSame( 'New Last', $v_ftnrr['last_name'] ); // obf
		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertSame( 'JSON Name', $v_srfze->first_name ); // obf
		$v_rpsda->assertSame( 'New Last', $v_srfze->last_name ); // obf

		// Check that we haven't inadvertently changed the user's password, // obf
		// as per https://core.trac.wordpress.org/ticket/21429 // obf
		$v_rpsda->assertSame( $v_upwyf, $v_srfze->user_pass ); // obf
	} // obf

	public function test_update_user_role() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_ftnrr = $v_kspzi->get_data(); // obf

		$v_rpsda->assertSame( 'editor', $v_ftnrr['roles'][0] ); // obf
		$v_rpsda->assertNotEquals( 'administrator', $v_ftnrr['roles'][0] ); // obf

		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'administrator', $v_srfze->caps ); // obf
	} // obf

	public function test_update_user_multiple_roles() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', 'author,editor' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_ftnrr = $v_kspzi->get_data(); // obf

		$v_rpsda->assertSame( array( 'author', 'editor' ), $v_ftnrr['roles'] ); // obf

		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertArrayHasKey( 'author', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'administrator', $v_srfze->caps ); // obf
	} // obf

	public function test_update_user_role_invalid_privilege_escalation() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'roles', array( 'administrator' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_cannot_edit_roles', $v_kspzi, 403 ); // obf
		$v_srfze = get_userdata( self::$v_jiwcl ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'administrator', $v_srfze->caps ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/me' ); // obf
		$v_etmln->set_param( 'roles', array( 'administrator' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_cannot_edit_roles', $v_kspzi, 403 ); // obf
		$v_srfze = get_userdata( self::$v_jiwcl ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'administrator', $v_srfze->caps ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_update_user_role_invalid_privilege_deescalation() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		wp_set_current_user( $v_mtcfn ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_role', $v_kspzi, 403 ); // obf

		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertArrayHasKey( 'administrator', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'editor', $v_srfze->caps ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/me' ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_role', $v_kspzi, 403 ); // obf

		$v_srfze = get_userdata( $v_mtcfn ); // obf
		$v_rpsda->assertArrayHasKey( 'administrator', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'editor', $v_srfze->caps ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_update_user_role_privilege_deescalation_multisite() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		wp_set_current_user( $v_mtcfn ); // obf
		$v_srfze = wp_get_current_user(); // obf
		update_site_option( 'site_admins', array( $v_srfze->user_login ) ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_ftnrr = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'editor', $v_ftnrr['roles'][0] ); // obf
		$v_rpsda->assertNotEquals( 'administrator', $v_ftnrr['roles'][0] ); // obf

		$v_mtcfn = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		wp_set_current_user( $v_mtcfn ); // obf
		$v_srfze = wp_get_current_user(); // obf
		update_site_option( 'site_admins', array( $v_srfze->user_login ) ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/me' ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_ftnrr = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'editor', $v_ftnrr['roles'][0] ); // obf
		$v_rpsda->assertNotEquals( 'administrator', $v_ftnrr['roles'][0] ); // obf
	} // obf


	public function test_update_user_role_invalid_role() { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'roles', array( 'BeSharp' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_role', $v_kspzi, 400 ); // obf

		$v_srfze = get_userdata( self::$v_jiwcl ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'BeSharp', $v_srfze->caps ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/me' ); // obf
		$v_etmln->set_param( 'roles', array( 'BeSharp' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_role', $v_kspzi, 400 ); // obf

		$v_srfze = get_userdata( self::$v_jiwcl ); // obf
		$v_rpsda->assertArrayHasKey( 'editor', $v_srfze->caps ); // obf
		$v_rpsda->assertArrayNotHasKey( 'BeSharp', $v_srfze->caps ); // obf
	} // obf

	public function test_update_user_without_permission() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_kibvg = array( // obf
			'username' => 'homersimpson', // obf
			'password' => 'stupidsexyflanders', // obf
			'email'    => 'chunkylover53@aol.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_srfze ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_cannot_edit', $v_kspzi, 403 ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', '/wp/v2/users/me' ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_argument', $v_kspzi, 400 ); // obf
	} // obf

	public function test_update_user_invalid_id() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_kibvg = array( // obf
			'id'       => '0', // obf
			'username' => 'lisasimpson', // obf
			'password' => 'DavidHasselhoff', // obf
			'email'    => 'smartgirl63_@yahoo.com', // obf
		); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( $v_kibvg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 40263 // obf
	 */ // obf
	public function test_update_item_only_roles_as_editor() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_cannot_edit_roles', $v_kspzi, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 40263 // obf
	 */ // obf
	public function test_update_item_only_roles_as_site_administrator() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		$v_ftnrr = $v_kspzi->get_data(); // obf
		$v_rpsda->assertSame( 'editor', $v_ftnrr['roles'][0] ); // obf
	} // obf

	/** // obf
	 * @ticket 40263 // obf
	 */ // obf
	public function test_update_item_including_roles_and_other_params() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'roles', array( 'editor' ) ); // obf
		$v_etmln->set_param( 'name', 'Short-Lived User' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		if ( is_multisite() ) { // obf
			/* // obf
			 * Site administrators can promote users, as verified by the previous test, // obf
			 * but they cannot perform other user-editing operations. // obf
			 * This also tests the branch of logic that verifies that no parameters // obf
			 * other than 'id' and 'roles' are specified for a roles update. // obf
			 */ // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_edit', $v_kspzi, 403 ); // obf
		} else { // obf
			$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

			$v_ftnrr = $v_kspzi->get_data(); // obf
			$v_rpsda->assertSame( 'editor', $v_ftnrr['roles'][0] ); // obf
		} // obf
	} // obf

	public function test_update_item_invalid_password() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', self::$v_jiwcl ) ); // obf
		$v_etmln->set_param( 'password', 'no\\backslashes\\allowed' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf

		$v_etmln->set_param( 'password', '' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function verify_user_roundtrip( $v_mhjst = array(), $v_dfnss = array() ) { // obf
		if ( isset( $v_mhjst['id'] ) ) { // obf
			// Existing user; don't try to create one. // obf
			$v_mtcfn = $v_mhjst['id']; // obf
		} else { // obf
			// Create a new user. // obf
			$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
			foreach ( $v_mhjst as $v_hwwkk => $v_ffggw ) { // obf
				$v_etmln->set_param( $v_hwwkk, $v_ffggw ); // obf
			} // obf
			$v_etmln->set_param( 'email', 'cbg@androidsdungeon.com' ); // obf
			$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
			$v_rpsda->assertSame( 201, $v_kspzi->get_status() ); // obf
			$v_frwrz = $v_kspzi->get_data(); // obf

			// Compare expected API output to actual API output. // obf
			$v_rpsda->assertSame( $v_dfnss['username'], $v_frwrz['username'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['name'], $v_frwrz['name'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['first_name'], $v_frwrz['first_name'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['last_name'], $v_frwrz['last_name'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['url'], $v_frwrz['url'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['description'], $v_frwrz['description'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['nickname'], $v_frwrz['nickname'] ); // obf

			// Compare expected API output to WP internal values. // obf
			$v_srfze = get_userdata( $v_frwrz['id'] ); // obf
			$v_rpsda->assertSame( $v_dfnss['username'], $v_srfze->user_login ); // obf
			$v_rpsda->assertSame( $v_dfnss['name'], $v_srfze->display_name ); // obf
			$v_rpsda->assertSame( $v_dfnss['first_name'], $v_srfze->first_name ); // obf
			$v_rpsda->assertSame( $v_dfnss['last_name'], $v_srfze->last_name ); // obf
			$v_rpsda->assertSame( $v_dfnss['url'], $v_srfze->user_url ); // obf
			$v_rpsda->assertSame( $v_dfnss['description'], $v_srfze->description ); // obf
			$v_rpsda->assertSame( $v_dfnss['nickname'], $v_srfze->nickname ); // obf
			$v_rpsda->assertTrue( wp_check_password( addslashes( $v_dfnss['password'] ), $v_srfze->user_pass ) ); // obf

			$v_mtcfn = $v_frwrz['id']; // obf
		} // obf

		// Update the user. // obf
		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		foreach ( $v_mhjst as $v_hwwkk => $v_ffggw ) { // obf
			if ( 'username' !== $v_hwwkk ) { // obf
				$v_etmln->set_param( $v_hwwkk, $v_ffggw ); // obf
			} // obf
		} // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_frwrz = $v_kspzi->get_data(); // obf

		// Compare expected API output to actual API output. // obf
		if ( isset( $v_dfnss['username'] ) ) { // obf
			$v_rpsda->assertSame( $v_dfnss['username'], $v_frwrz['username'] ); // obf
		} // obf
		$v_rpsda->assertSame( $v_dfnss['name'], $v_frwrz['name'] ); // obf
		$v_rpsda->assertSame( $v_dfnss['first_name'], $v_frwrz['first_name'] ); // obf
		$v_rpsda->assertSame( $v_dfnss['last_name'], $v_frwrz['last_name'] ); // obf
		$v_rpsda->assertSame( $v_dfnss['url'], $v_frwrz['url'] ); // obf
		$v_rpsda->assertSame( $v_dfnss['description'], $v_frwrz['description'] ); // obf
		$v_rpsda->assertSame( $v_dfnss['nickname'], $v_frwrz['nickname'] ); // obf

		// Compare expected API output to WP internal values. // obf
		$v_srfze = get_userdata( $v_frwrz['id'] ); // obf
		if ( isset( $v_dfnss['username'] ) ) { // obf
			$v_rpsda->assertSame( $v_dfnss['username'], $v_srfze->user_login ); // obf
		} // obf
		$v_rpsda->assertSame( $v_dfnss['name'], $v_srfze->display_name ); // obf
		$v_rpsda->assertSame( $v_dfnss['first_name'], $v_srfze->first_name ); // obf
		$v_rpsda->assertSame( $v_dfnss['last_name'], $v_srfze->last_name ); // obf
		$v_rpsda->assertSame( $v_dfnss['url'], $v_srfze->user_url ); // obf
		$v_rpsda->assertSame( $v_dfnss['description'], $v_srfze->description ); // obf
		$v_rpsda->assertSame( $v_dfnss['nickname'], $v_srfze->nickname ); // obf
		$v_rpsda->assertTrue( wp_check_password( addslashes( $v_dfnss['password'] ), $v_srfze->user_pass ) ); // obf
	} // obf

	public function test_user_roundtrip_as_editor() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_rpsda->assertSame( ! is_multisite(), current_user_can( 'unfiltered_html' ) ); // obf
		$v_rpsda->verify_user_roundtrip( // obf
			array( // obf
				'id'          => self::$v_jiwcl, // obf
				'name'        => '\o/ ¯\_(ツ)_/¯', // obf
				'first_name'  => '\o/ ¯\_(ツ)_/¯', // obf
				'last_name'   => '\o/ ¯\_(ツ)_/¯', // obf
				'url'         => '\o/ ¯\_(ツ)_/¯', // obf
				'description' => '\o/ ¯\_(ツ)_/¯', // obf
				'nickname'    => '\o/ ¯\_(ツ)_/¯', // obf
				'password'    => 'o/ ¯_(ツ)_/¯ \'"', // obf
			), // obf
			array( // obf
				'name'        => '\o/ ¯\_(ツ)_/¯', // obf
				'first_name'  => '\o/ ¯\_(ツ)_/¯', // obf
				'last_name'   => '\o/ ¯\_(ツ)_/¯', // obf
				'url'         => 'http://o/%20¯_(ツ)_/¯', // obf
				'description' => '\o/ ¯\_(ツ)_/¯', // obf
				'nickname'    => '\o/ ¯\_(ツ)_/¯', // obf
				'password'    => 'o/ ¯_(ツ)_/¯ \'"', // obf
			) // obf
		); // obf
	} // obf

	public function test_user_roundtrip_as_editor_html() { // obf
		wp_set_current_user( self::$v_jiwcl ); // obf

		if ( is_multisite() ) { // obf
			$v_rpsda->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf
			$v_rpsda->verify_user_roundtrip( // obf
				array( // obf
					'id'          => self::$v_jiwcl, // obf
					'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'first_name'  => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'last_name'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'url'         => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'nickname'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'name'        => 'div strong', // obf
					'first_name'  => 'div strong', // obf
					'last_name'   => 'div strong', // obf
					'url'         => 'http://divdiv/div%20strongstrong/strong%20scriptoh%20noes/script', // obf
					'description' => 'div <strong>strong</strong> oh noes', // obf
					'nickname'    => 'div strong', // obf
					'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				) // obf
			); // obf
		} else { // obf
			$v_rpsda->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
			$v_rpsda->verify_user_roundtrip( // obf
				array( // obf
					'id'          => self::$v_jiwcl, // obf
					'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'first_name'  => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'last_name'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'url'         => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'nickname'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
					'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				), // obf
				array( // obf
					'name'        => 'div strong', // obf
					'first_name'  => 'div strong', // obf
					'last_name'   => 'div strong', // obf
					'url'         => 'http://divdiv/div%20strongstrong/strong%20scriptoh%20noes/script', // obf
					'description' => 'div <strong>strong</strong> oh noes', // obf
					'nickname'    => 'div strong', // obf
					'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public function test_user_roundtrip_as_superadmin() { // obf
		wp_set_current_user( self::$v_uudgx ); // obf

		$v_rpsda->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_llenr = is_multisite() ? 'noinvalidcharshere' : 'no-invalid-chars-here'; // obf
		$v_rpsda->verify_user_roundtrip( // obf
			array( // obf
				'username'    => $v_llenr, // obf
				'name'        => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'first_name'  => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'last_name'   => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'url'         => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'description' => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'nickname'    => '\\\&\\\ &amp; &invalid; < &lt; &amp;lt;', // obf
				'password'    => '& &amp; &invalid; < &lt; &amp;lt;', // obf
			), // obf
			array( // obf
				'username'    => $v_llenr, // obf
				'name'        => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'first_name'  => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'last_name'   => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'url'         => 'http://&amp;%20&amp;%20&amp;invalid;%20%20&lt;%20&amp;lt;', // obf
				'description' => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'nickname'    => '\\\&amp;\\\ &amp; &amp;invalid; &lt; &lt; &amp;lt;', // obf
				'password'    => '& &amp; &invalid; < &lt; &amp;lt;', // obf
			) // obf
		); // obf
	} // obf

	public function test_user_roundtrip_as_superadmin_html() { // obf
		wp_set_current_user( self::$v_uudgx ); // obf

		$v_rpsda->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf
		$v_llenr = is_multisite() ? 'noinvalidcharshere' : 'no-invalid-chars-here'; // obf
		$v_rpsda->verify_user_roundtrip( // obf
			array( // obf
				'username'    => $v_llenr, // obf
				'name'        => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'first_name'  => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'last_name'   => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'url'         => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'description' => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'nickname'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
				'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
			), // obf
			array( // obf
				'username'    => $v_llenr, // obf
				'name'        => 'div strong', // obf
				'first_name'  => 'div strong', // obf
				'last_name'   => 'div strong', // obf
				'url'         => 'http://divdiv/div%20strongstrong/strong%20scriptoh%20noes/script', // obf
				'description' => 'div <strong>strong</strong> oh noes', // obf
				'nickname'    => 'div strong', // obf
				'password'    => '<div>div</div> <strong>strong</strong> <script>oh noes</script>', // obf
			) // obf
		); // obf
	} // obf

	public function test_delete_item() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'display_name' => 'Deleted User' ) ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_qcval = get_userdata( $v_mtcfn ); // Cache for later. // obf
		$v_etmln  = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'force', true ); // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertTrue( $v_kgjlv['deleted'] ); // obf
		$v_rpsda->assertSame( 'Deleted User', $v_kgjlv['previous']['name'] ); // obf
	} // obf

	public function test_delete_item_no_trash() { // obf
		$v_mtcfn = self::factory()->user->create( array( 'display_name' => 'Deleted User' ) ); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_qcval = get_userdata( $v_mtcfn ); // Cache for later. // obf

		$v_etmln = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertErrorResponse( 'rest_trash_not_supported', $v_kspzi, 501 ); // obf

		$v_etmln->set_param( 'force', 'false' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_trash_not_supported', $v_kspzi, 501 ); // obf

		// Ensure the user still exists. // obf
		$v_srfze = get_user_by( 'id', $v_mtcfn ); // obf
		$v_rpsda->assertNotEmpty( $v_srfze ); // obf
	} // obf

	public function test_delete_current_item() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role'         => 'administrator', // obf
				'display_name' => 'Deleted User', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_mtcfn ); // obf
		$v_srfze = wp_get_current_user(); // obf
		update_site_option( 'site_admins', array( $v_srfze->user_login ) ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', '/wp/v2/users/me' ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertTrue( $v_kgjlv['deleted'] ); // obf
		$v_rpsda->assertSame( 'Deleted User', $v_kgjlv['previous']['name'] ); // obf
	} // obf

	public function test_delete_current_item_no_trash() { // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role'         => 'administrator', // obf
				'display_name' => 'Deleted User', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_mtcfn ); // obf
		$v_srfze = wp_get_current_user(); // obf
		update_site_option( 'site_admins', array( $v_srfze->user_login ) ); // obf

		$v_etmln = new WP_REST_Request( 'DELETE', '/wp/v2/users/me' ); // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertErrorResponse( 'rest_trash_not_supported', $v_kspzi, 501 ); // obf

		$v_etmln->set_param( 'force', 'false' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_trash_not_supported', $v_kspzi, 501 ); // obf

		// Ensure the user still exists. // obf
		$v_srfze = get_user_by( 'id', $v_mtcfn ); // obf
		$v_rpsda->assertNotEmpty( $v_srfze ); // obf
	} // obf

	public function test_delete_user_without_permission() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_jiwcl ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_cannot_delete', $v_kspzi, 403 ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', '/wp/v2/users/me' ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_cannot_delete', $v_kspzi, 403 ); // obf
	} // obf

	public function test_delete_user_invalid_id() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', '/wp/v2/users/' . REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	public function test_delete_user_reassign() { // obf
		$v_rpsda->allow_user_to_manage_multisite(); // obf

		// Test with a new user, to avoid any complications. // obf
		$v_mtcfn     = self::factory()->user->create(); // obf
		$v_tdnkg = self::factory()->user->create(); // obf
		$v_zqjsi   = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_mtcfn, // obf
			) // obf
		); // obf

		// Confidence check to ensure the factory created the post correctly. // obf
		$v_vncoi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertEquals( $v_mtcfn, $v_vncoi->post_author ); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		// Delete our test user, and reassign to the new author. // obf
		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', $v_tdnkg ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		// Check that the post has been updated correctly. // obf
		$v_vncoi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertEquals( $v_tdnkg, $v_vncoi->post_author ); // obf
	} // obf

	public function test_delete_user_invalid_reassign_id() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', REST_TESTS_IMPOSSIBLY_HIGH_NUMBER ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_rpsda->assertErrorResponse( 'rest_user_invalid_reassign', $v_kspzi, 400 ); // obf
	} // obf

	public function test_delete_user_invalid_reassign_passed_as_string() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', 'null' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf
	} // obf

	public function test_delete_user_reassign_passed_as_boolean_false_trashes_post() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_zqjsi = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_mtcfn, // obf
			) // obf
		); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_zqjsi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertSame( 'trash', $v_zqjsi->post_status ); // obf
	} // obf

	public function test_delete_user_reassign_passed_as_string_false_trashes_post() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_zqjsi = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_mtcfn, // obf
			) // obf
		); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', 'false' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_zqjsi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertSame( 'trash', $v_zqjsi->post_status ); // obf
	} // obf

	public function test_delete_user_reassign_passed_as_empty_string_trashes_post() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_zqjsi = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_mtcfn, // obf
			) // obf
		); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', '' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_zqjsi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertSame( 'trash', $v_zqjsi->post_status ); // obf
	} // obf

	public function test_delete_user_reassign_passed_as_0_reassigns_author() { // obf
		$v_mtcfn = self::factory()->user->create(); // obf

		$v_rpsda->allow_user_to_manage_multisite(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_zqjsi = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_mtcfn, // obf
			) // obf
		); // obf

		$v_etmln          = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln['force'] = true; // obf
		$v_etmln->set_param( 'reassign', 0 ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		// Not implemented in multisite. // obf
		if ( is_multisite() ) { // obf
			$v_rpsda->assertErrorResponse( 'rest_cannot_delete', $v_kspzi, 501 ); // obf
			return; // obf
		} // obf

		$v_zqjsi = get_post( $v_zqjsi ); // obf
		$v_rpsda->assertEquals( 0, $v_zqjsi->post_author ); // obf
	} // obf

	public function test_get_item_schema() { // obf
		$v_etmln    = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_kspzi   = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv       = $v_kspzi->get_data(); // obf
		$v_qjkov = $v_kgjlv['schema']['properties']; // obf

		$v_rpsda->assertCount( 19, $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'avatar_urls', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'capabilities', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'description', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'email', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'extra_capabilities', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'first_name', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'id', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'last_name', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'link', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'locale', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'meta', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'name', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'nickname', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'registered_date', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'slug', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'password', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'url', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'username', $v_qjkov ); // obf
		$v_rpsda->assertArrayHasKey( 'roles', $v_qjkov ); // obf
	} // obf

	public function test_get_item_schema_show_avatar() { // obf
		update_option( 'show_avatars', false ); // obf

		// Re-initialize the controller to cache-bust schemas from prior test runs. // obf
		$v_rvkhk['wp_rest_server']->override_by_default = true; // obf
		$v_pobao                                     = new WP_REST_Users_Controller(); // obf
		$v_pobao->register_routes(); // obf
		$v_rvkhk['wp_rest_server']->override_by_default = false; // obf

		$v_etmln    = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_kspzi   = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv       = $v_kspzi->get_data(); // obf
		$v_qjkov = $v_kgjlv['schema']['properties']; // obf

		$v_rpsda->assertArrayNotHasKey( 'avatar_urls', $v_qjkov ); // obf
	} // obf

	public function test_get_additional_field_registration() { // obf

		$v_ixiof = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'embed', 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'user', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_ixiof, // obf
				'get_callback'    => array( $v_rpsda, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_rpsda, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		$v_etmln  = new WP_REST_Request( 'OPTIONS', '/wp/v2/users' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_kgjlv     = $v_kspzi->get_data(); // obf

		$v_rpsda->assertArrayHasKey( 'my_custom_int', $v_kgjlv['schema']['properties'] ); // obf
		$v_rpsda->assertSame( $v_ixiof, $v_kgjlv['schema']['properties']['my_custom_int'] ); // obf

		wp_set_current_user( 1 ); // obf

		if ( is_multisite() ) { // obf
			$v_pooht = wp_get_current_user( 1 ); // obf
			update_site_option( 'site_admins', array( $v_pooht->user_login ) ); // obf
		} // obf

		$v_etmln  = new WP_REST_Request( 'GET', '/wp/v2/users/1' ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertArrayHasKey( 'my_custom_int', $v_kspzi->data ); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users/1' ); // obf
		$v_etmln->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
			) // obf
		); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertEquals( 123, get_user_meta( 1, 'my_custom_int', true ) ); // obf

		$v_etmln = new WP_REST_Request( 'POST', '/wp/v2/users' ); // obf
		$v_etmln->set_body_params( // obf
			array( // obf
				'my_custom_int' => 123, // obf
				'email'         => 'joe@foobar.com', // obf
				'username'      => 'abc123', // obf
				'password'      => 'hello', // obf
			) // obf
		); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertEquals( 123, $v_kspzi->data['my_custom_int'] ); // obf

		global $v_qludr; // obf
		$v_qludr = array(); // obf
	} // obf

	public function test_additional_field_update_errors() { // obf
		$v_ixiof = array( // obf
			'type'        => 'integer', // obf
			'description' => 'Some integer of mine', // obf
			'enum'        => array( 1, 2, 3, 4 ), // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		register_rest_field( // obf
			'user', // obf
			'my_custom_int', // obf
			array( // obf
				'schema'          => $v_ixiof, // obf
				'get_callback'    => array( $v_rpsda, 'additional_field_get_callback' ), // obf
				'update_callback' => array( $v_rpsda, 'additional_field_update_callback' ), // obf
			) // obf
		); // obf

		wp_set_current_user( 1 ); // obf

		if ( is_multisite() ) { // obf
			$v_pooht = wp_get_current_user( 1 ); // obf
			update_site_option( 'site_admins', array( $v_pooht->user_login ) ); // obf
		} // obf

		// Check for error on update. // obf
		$v_etmln = new WP_REST_Request( 'POST', sprintf( '/wp/v2/users/%d', self::$v_srfze ) ); // obf
		$v_etmln->set_body_params( // obf
			array( // obf
				'my_custom_int' => 'returnError', // obf
			) // obf
		); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertErrorResponse( 'rest_invalid_param', $v_kspzi, 400 ); // obf

		global $v_qludr; // obf
		$v_qludr = array(); // obf
	} // obf

	public function additional_field_get_callback( $v_qhvxf, $v_kddyo ) { // obf
		return get_user_meta( $v_qhvxf['id'], $v_kddyo, true ); // obf
	} // obf

	public function additional_field_update_callback( $v_ffggw, $v_srfze, $v_kddyo ) { // obf
		if ( 'returnError' === $v_ffggw ) { // obf
			return new WP_Error( 'rest_invalid_param', 'Testing an error.', array( 'status' => 400 ) ); // obf
		} // obf
		update_user_meta( $v_srfze->ID, $v_kddyo, $v_ffggw ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_item_from_different_site_as_site_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_item_from_different_site_as_network_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_uudgx ); // obf

		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_update_item_from_different_site_as_site_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( array( 'first_name' => 'New Name' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_update_item_from_different_site_as_network_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_uudgx ); // obf

		$v_etmln = new WP_REST_Request( 'PUT', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->add_header( 'Content-Type', 'application/x-www-form-urlencoded' ); // obf
		$v_etmln->set_body_params( array( 'first_name' => 'New Name' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_delete_item_from_different_site_as_site_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'force', true ); // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 39701 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_delete_item_from_different_site_as_network_administrator() { // obf
		switch_to_blog( self::$v_odyqs ); // obf
		$v_mtcfn = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		wp_set_current_user( self::$v_uudgx ); // obf

		$v_etmln = new WP_REST_Request( 'DELETE', sprintf( '/wp/v2/users/%d', $v_mtcfn ) ); // obf
		$v_etmln->set_param( 'force', true ); // obf
		$v_etmln->set_param( 'reassign', false ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		$v_rpsda->assertErrorResponse( 'rest_user_invalid_id', $v_kspzi, 404 ); // obf
	} // obf

	/** // obf
	 * @ticket 43941 // obf
	 * @dataProvider data_get_default_data // obf
	 */ // obf
	public function test_get_default_value( $v_uyske, $v_pgvcc ) { // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_xpskg = 'user'; // obf
		$v_eonhg    = 'registered_key1'; // obf
		register_meta( // obf
			$v_xpskg, // obf
			$v_eonhg, // obf
			$v_uyske // obf
		); // obf

		// Check for default value. // obf
		$v_etmln  = new WP_REST_Request( 'GET', sprintf( '/wp/v2/users/%d', self::$v_srfze ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		$v_kgjlv = $v_kspzi->get_data(); // obf
		$v_rpsda->assertArrayHasKey( 'meta', $v_kgjlv ); // obf

		$v_jotim = (array) $v_kgjlv['meta']; // obf
		$v_rpsda->assertArrayHasKey( $v_eonhg, $v_jotim ); // obf
		$v_rpsda->assertSame( $v_pgvcc, $v_jotim[ $v_eonhg ] ); // obf
	} // obf

	public function data_get_default_data() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'show_in_rest' => true, // obf
					'single'       => true, // obf
					'default'      => 'wibble', // obf
				), // obf
				'wibble', // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => true, // obf
					'single'       => false, // obf
					'default'      => 'wibble', // obf
				), // obf
				array( 'wibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'single'       => true, // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				array( 'wibble' => 'dibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'wibble' => array( // obf
									'type' => 'string', // obf
								), // obf
							), // obf
						), // obf
					), // obf
					'type'         => 'object', // obf
					'single'       => false, // obf
					'default'      => array( 'wibble' => 'dibble' ), // obf
				), // obf
				array( array( 'wibble' => 'dibble' ) ), // obf
			), // obf

			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => true, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				array( 'dibble' ), // obf
			), // obf
			array( // obf
				array( // obf
					'show_in_rest' => array( // obf
						'schema' => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'string', // obf
							), // obf
						), // obf
					), // obf
					'single'       => false, // obf
					'type'         => 'array', // obf
					'default'      => array( 'dibble' ), // obf
				), // obf
				array( array( 'dibble' ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_afljl ) { // obf
		wp_set_current_user( self::$v_srfze ); // obf
		$v_etmln = new WP_REST_Request( $v_afljl, sprintf( '/wp/v2/users/%d', self::$v_srfze ) ); // obf

		$v_nsokj = 'rest_prepare_user'; // obf

		$v_fbhsf   = new MockAction(); // obf
		$v_zfjgy = array( $v_fbhsf, 'filter' ); // obf
		add_filter( $v_nsokj, $v_zfjgy ); // obf
		$v_pfhyb = new class() { // obf
			public static function add_custom_header( $v_kspzi ) { // obf
				$v_kspzi->header( 'X-Test-Header', 'Test' ); // obf

				return $v_kspzi; // obf
			} // obf
		}; // obf
		add_filter( $v_nsokj, array( $v_pfhyb, 'add_custom_header' ) ); // obf
		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf
		remove_filter( $v_nsokj, $v_zfjgy ); // obf
		remove_filter( $v_nsokj, array( $v_pfhyb, 'add_custom_header' ) ); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status(), 'The response status should be 200.' ); // obf
		$v_rpsda->assertSame( 1, $v_fbhsf->get_call_count(), 'The "' . $v_nsokj . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_emibj = $v_kspzi->get_headers(); // obf
		$v_rpsda->assertArrayHasKey( 'X-Test-Header', $v_emibj, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_rpsda->assertSame( 'Test', $v_emibj['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_afljl ) { // obf
			return null; // obf
		} // obf
		$v_rpsda->assertSame( array(), $v_kspzi->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_afljl HTTP method to use. // obf
	 */ // obf
	public function test_get_items_only_fetches_ids_for_head_requests( $v_afljl ) { // obf
		$v_cxdgg = 'HEAD' === $v_afljl; // obf
		$v_etmln         = new WP_REST_Request( $v_afljl, '/wp/v2/users' ); // obf

		$v_fbhsf = new MockAction(); // obf

		add_filter( 'pre_user_query', array( $v_fbhsf, 'filter' ), 10, 2 ); // obf

		$v_kspzi = rest_get_server()->dispatch( $v_etmln ); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		if ( $v_cxdgg ) { // obf
			$v_rpsda->assertSame( array(), $v_kspzi->get_data() ); // obf
		} else { // obf
			$v_rpsda->assertNotEmpty( $v_kspzi->get_data() ); // obf
		} // obf

		$v_uyske = $v_fbhsf->get_args(); // obf
		$v_rpsda->assertTrue( isset( $v_uyske[0][0] ), 'Query parameters were not captured.' ); // obf
		$v_rpsda->assertInstanceOf( WP_User_Query::class, $v_uyske[0][0], 'Query parameters were not captured.' ); // obf

		/** @var WP_User $v_wivvd */ // obf
		$v_wivvd = $v_uyske[0][0]; // obf

		if ( $v_cxdgg ) { // obf
			$v_rpsda->assertArrayHasKey( 'fields', $v_wivvd->query_vars, 'The fields parameter is not set in the query vars.' ); // obf
			$v_rpsda->assertSame( 'id', $v_wivvd->query_vars['fields'], 'The query must fetch only user IDs.' ); // obf
		} else { // obf
			$v_rpsda->assertTrue( // obf
				! array_key_exists( 'fields', $v_wivvd->query_vars ) || 'id' !== $v_wivvd->query_vars['fields'], // obf
				'The fields parameter should not be forced to "id" for non-HEAD requests.' // obf
			); // obf
		} // obf

		if ( ! $v_cxdgg ) { // obf
			return; // obf
		} // obf

		global $v_zynpf; // obf
		$v_nqnjg = preg_quote( $v_zynpf->users, '/' ); // obf
		$v_mzmke     = '/^SELECT\s+SQL_CALC_FOUND_ROWS\s+' . $v_nqnjg . '\.ID\n\s+FROM\s+' . $v_nqnjg . '/is'; // obf

		// Assert that the SQL query only fetches the id column. // obf
		$v_rpsda->assertMatchesRegularExpression( $v_mzmke, $v_wivvd->request, 'The SQL query does not match the expected string.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_fjysl The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_fjysl ) { // obf
		$v_mtcfn = self::factory()->user->create(); // obf
		wp_set_current_user( self::$v_srfze ); // obf

		$v_etmln = new WP_REST_Request( 'HEAD', sprintf( $v_fjysl, $v_mtcfn ) ); // obf
		$v_etmln->set_param( '_fields', 'id' ); // obf
		$v_ukcad   = rest_get_server(); // obf
		$v_kspzi = $v_ukcad->dispatch( $v_etmln ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_kspzi = apply_filters( 'rest_post_dispatch', $v_kspzi, $v_ukcad, $v_etmln ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf

		$v_rpsda->assertSame( 200, $v_kspzi->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/users/%d' ), // obf
			'get_items request' => array( '/wp/v2/users' ), // obf
		); // obf
	} // obf

	protected function check_user_data( $v_srfze, $v_kgjlv, $v_xiuqg, $v_lssez ) { // obf
		$v_rpsda->assertSame( $v_srfze->ID, $v_kgjlv['id'] ); // obf
		$v_rpsda->assertSame( $v_srfze->display_name, $v_kgjlv['name'] ); // obf
		$v_rpsda->assertSame( $v_srfze->user_url, $v_kgjlv['url'] ); // obf
		$v_rpsda->assertSame( $v_srfze->description, $v_kgjlv['description'] ); // obf
		$v_rpsda->assertSame( get_author_posts_url( $v_srfze->ID ), $v_kgjlv['link'] ); // obf
		$v_rpsda->assertArrayHasKey( 'avatar_urls', $v_kgjlv ); // obf
		$v_rpsda->assertSame( $v_srfze->user_nicename, $v_kgjlv['slug'] ); // obf

		if ( 'edit' === $v_xiuqg ) { // obf
			$v_rpsda->assertSame( $v_srfze->first_name, $v_kgjlv['first_name'] ); // obf
			$v_rpsda->assertSame( $v_srfze->last_name, $v_kgjlv['last_name'] ); // obf
			$v_rpsda->assertSame( $v_srfze->nickname, $v_kgjlv['nickname'] ); // obf
			$v_rpsda->assertSame( $v_srfze->user_email, $v_kgjlv['email'] ); // obf
			$v_rpsda->assertEquals( (object) $v_srfze->allcaps, $v_kgjlv['capabilities'] ); // obf
			$v_rpsda->assertEquals( (object) $v_srfze->caps, $v_kgjlv['extra_capabilities'] ); // obf
			$v_rpsda->assertSame( gmdate( 'c', strtotime( $v_srfze->user_registered ) ), $v_kgjlv['registered_date'] ); // obf
			$v_rpsda->assertSame( $v_srfze->user_login, $v_kgjlv['username'] ); // obf
			$v_rpsda->assertSame( $v_srfze->roles, $v_kgjlv['roles'] ); // obf
			$v_rpsda->assertSame( get_user_locale( $v_srfze ), $v_kgjlv['locale'] ); // obf
		} else { // obf
			$v_rpsda->assertArrayNotHasKey( 'roles', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'capabilities', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'registered_date', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'first_name', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'last_name', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'nickname', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'email', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'extra_capabilities', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'username', $v_kgjlv ); // obf
			$v_rpsda->assertArrayNotHasKey( 'locale', $v_kgjlv ); // obf
		} // obf

		$v_rpsda->assertSameSets( // obf
			array( // obf
				'self', // obf
				'collection', // obf
			), // obf
			array_keys( $v_lssez ) // obf
		); // obf

		$v_rpsda->assertArrayNotHasKey( 'password', $v_kgjlv ); // obf
	} // obf

	protected function check_get_user_response( $v_kspzi, $v_xiuqg = 'view' ) { // obf
		$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf

		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_qcval = get_userdata( $v_kgjlv['id'] ); // obf
		$v_rpsda->check_user_data( $v_qcval, $v_kgjlv, $v_xiuqg, $v_kspzi->get_links() ); // obf
	} // obf

	protected function check_add_edit_user_response( $v_kspzi, $v_fgdyv = false ) { // obf
		if ( $v_fgdyv ) { // obf
			$v_rpsda->assertSame( 200, $v_kspzi->get_status() ); // obf
		} else { // obf
			$v_rpsda->assertSame( 201, $v_kspzi->get_status() ); // obf
		} // obf

		$v_kgjlv     = $v_kspzi->get_data(); // obf
		$v_qcval = get_userdata( $v_kgjlv['id'] ); // obf
		$v_rpsda->check_user_data( $v_qcval, $v_kgjlv, 'edit', $v_kspzi->get_links() ); // obf
	} // obf

	protected function allow_user_to_manage_multisite() { // obf
		wp_set_current_user( self::$v_srfze ); // obf
		$v_srfze = wp_get_current_user(); // obf

		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( $v_srfze->user_login ) ); // obf
		} // obf

		return; // obf
	} // obf
} // obf