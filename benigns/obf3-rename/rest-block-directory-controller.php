

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Block_Directory_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST API // obf
 * // obf
 * @group restapi // obf
 */ // obf
class WP_REST_Block_Directory_Controller_Test extends WP_Test_REST_Controller_Testcase { // obf

	/** // obf
	 * Administrator user id. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_juyqe; // obf

	/** // obf
	 * Set up class test fixtures. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ahuub WordPress unit test factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ahuub ) { // obf
		self::$v_juyqe = $v_ahuub->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf

		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_juyqe ); // obf
		} // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_juyqe ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_mjbaq = rest_get_server()->get_routes(); // obf

		$v_lqqjq->assertArrayHasKey( '/wp/v2/block-directory/search', $v_mjbaq ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_context_param() { // obf
		// Collection. // obf
		$v_mdxwl  = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-directory/search' ); // obf
		$v_dmrui = rest_get_server()->dispatch( $v_mdxwl ); // obf
		$v_qskfi     = $v_dmrui->get_data(); // obf
		$v_lqqjq->assertSame( 'view', $v_qskfi['endpoints'][0]['args']['context']['default'] ); // obf
		$v_lqqjq->assertSame( array( 'view' ), $v_qskfi['endpoints'][0]['args']['context']['enum'] ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf
		$v_lqqjq->mock_remote_request( // obf
			array( // obf
				'body' => '{"info":{"page":1,"pages":0,"results":0},"plugins":[]}', // obf
			) // obf
		); // obf

		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'foo' ) ); // obf

		$v_zlkoc = rest_do_request( $v_mdxwl ); // obf
		$v_lqqjq->assertNotWPError( $v_zlkoc->as_error() ); // obf
		$v_lqqjq->assertSame( 200, $v_zlkoc->status ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_wdotorg_unavailable() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf

		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'foo' ) ); // obf

		$v_lqqjq->prevent_requests_to_host( 'api.wordpress.org' ); // obf

		$v_lqqjq->expectWarning(); // obf
		$v_dmrui = rest_do_request( $v_mdxwl ); // obf
		$v_lqqjq->assertErrorResponse( 'plugins_api_failed', $v_dmrui, 500 ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_logged_out() { // obf
		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'foo' ) ); // obf
		$v_dmrui = rest_do_request( $v_mdxwl ); // obf
		$v_lqqjq->assertErrorResponse( 'rest_block_directory_cannot_view', $v_dmrui ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_items_no_results() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf
		$v_lqqjq->mock_remote_request( // obf
			array( // obf
				'body' => '{"info":{"page":1,"pages":0,"results":0},"plugins":[]}', // obf
			) // obf
		); // obf

		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => '0c4549ee68f24eaaed46a49dc983ecde' ) ); // obf
		$v_dmrui = rest_do_request( $v_mdxwl ); // obf
		$v_qskfi     = $v_dmrui->get_data(); // obf

		// Should produce a 200 status with an empty array. // obf
		$v_lqqjq->assertSame( 200, $v_dmrui->status ); // obf
		$v_lqqjq->assertSame( array(), $v_qskfi ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_get_item() { // obf
		// Controller does not implement get_item(). // obf
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

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_prepare_item() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf

		$v_ueiim = new WP_REST_Block_Directory_Controller(); // obf

		$v_mwhct  = $v_lqqjq->get_mock_plugin(); // obf
		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'block' ) ); // obf

		$v_dmrui = $v_ueiim->prepare_item_for_response( $v_mwhct, $v_mdxwl ); // obf

		$v_ofmey = array( // obf
			'name'                => 'sortabrilliant/guidepost', // obf
			'title'               => 'Guidepost', // obf
			'description'         => 'A guidepost gives you directions. It lets you know where you’re going. It gives you a preview of what’s to come.', // obf
			'id'                  => 'guidepost', // obf
			'rating'              => 4.3, // obf
			'rating_count'        => 90, // obf
			'active_installs'     => 100, // obf
			'author_block_rating' => 0, // obf
			'author_block_count'  => 1, // obf
			'author'              => 'sorta brilliant', // obf
			'icon'                => 'https://ps.w.org/guidepost/assets/icon-128x128.jpg?rev=2235512', // obf
			'last_updated'        => gmdate( 'Y-m-d\TH:i:s', strtotime( $v_mwhct['last_updated'] ) ), // obf
			'humanized_updated'   => sprintf( '%s ago', human_time_diff( strtotime( $v_mwhct['last_updated'] ) ) ), // obf
		); // obf

		$v_lqqjq->assertSame( $v_ofmey, $v_dmrui->get_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 50321 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf

		$v_mdxwl = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'foo' ) ); // obf
		$v_dmrui = rest_do_request( $v_mdxwl ); // obf
		$v_qskfi     = $v_dmrui->get_data(); // obf

		// Check endpoints // obf
		$v_lqqjq->assertSame( array( 'GET' ), $v_qskfi['endpoints'][0]['methods'] ); // obf
		$v_lqqjq->assertTrue( $v_qskfi['endpoints'][0]['args']['term']['required'] ); // obf

		$v_qozuq = $v_qskfi['schema']['properties']; // obf

		$v_lqqjq->assertCount( 13, $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'name', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'title', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'description', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'id', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'rating', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'rating_count', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'active_installs', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'author_block_rating', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'author_block_count', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'author', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'icon', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'last_updated', $v_qozuq ); // obf
		$v_lqqjq->assertArrayHasKey( 'humanized_updated', $v_qozuq ); // obf
	} // obf

	/** // obf
	 * @ticket 53621 // obf
	 */ // obf
	public function test_get_items_response_conforms_to_schema() { // obf
		wp_set_current_user( self::$v_juyqe ); // obf
		$v_mwhct = $v_lqqjq->get_mock_plugin(); // obf

		// Fetch the block directory schema. // obf
		$v_mdxwl = new WP_REST_Request( 'OPTIONS', '/wp/v2/block-directory/search' ); // obf
		$v_ezbok  = rest_get_server()->dispatch( $v_mdxwl )->get_data()['schema']; // obf

		add_filter( // obf
			'plugins_api', // obf
			static function () use ( $v_mwhct ) { // obf
				return (object) array( // obf
					'info'    => // obf
						array( // obf
							'page'    => 1, // obf
							'pages'   => 1, // obf
							'results' => 1, // obf
						), // obf
					'plugins' => array( // obf
						$v_mwhct, // obf
					), // obf
				); // obf
			} // obf
		); // obf

		// Fetch a block plugin. // obf
		$v_mdxwl = new WP_REST_Request( 'GET', '/wp/v2/block-directory/search' ); // obf
		$v_mdxwl->set_query_params( array( 'term' => 'cache' ) ); // obf

		$v_zlkoc = rest_get_server()->dispatch( $v_mdxwl ); // obf
		$v_qskfi   = $v_zlkoc->get_data(); // obf

		$v_oefdq = rest_validate_value_from_schema( $v_qskfi[0], $v_ezbok ); // obf

		$v_lqqjq->assertNotWPError( $v_oefdq ); // obf
	} // obf

	/** // obf
	 * Simulate a network failure on outbound http requests to a given hostname. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_vtnms The host to block connections to. // obf
	 */ // obf
	private function prevent_requests_to_host( $v_vtnms = 'api.wordpress.org' ) { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function ( $v_dmrui, $v_uisrs, $v_ujucf ) use ( $v_vtnms ) { // obf
				if ( @parse_url( $v_ujucf, PHP_URL_HOST ) === $v_vtnms ) { // obf
					return new WP_Error( 'plugins_api_failed', "An expected error occurred connecting to $v_vtnms because of a unit test", "cURL error 7: Failed to connect to $v_vtnms port 80: Connection refused" ); // obf

				} // obf

				return $v_dmrui; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf
	} // obf

	/** // obf
	 * Gets an example of the data returned from the {@see plugins_api()} for a block. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private function get_mock_plugin() { // obf
		return array( // obf
			'name'                     => 'Guidepost', // obf
			'slug'                     => 'guidepost', // obf
			'version'                  => '1.2.1', // obf
			'author'                   => '<a href="https://sortabrilliant.com">sorta brilliant</a>', // obf
			'author_profile'           => 'https://profiles.wordpress.org/sortabrilliant', // obf
			'requires'                 => '5.0', // obf
			'tested'                   => '5.4.0', // obf
			'requires_php'             => '5.6', // obf
			'rating'                   => 86, // obf
			'ratings'                  => array( // obf
				5 => 50, // obf
				4 => 25, // obf
				3 => 7, // obf
				2 => 5, // obf
				1 => 3, // obf
			), // obf
			'num_ratings'              => 90, // obf
			'support_threads'          => 1, // obf
			'support_threads_resolved' => 0, // obf
			'active_installs'          => 100, // obf
			'downloaded'               => 1112, // obf
			'last_updated'             => '2020-03-23 5:13am GMT', // obf
			'added'                    => '2020-01-29', // obf
			'homepage'                 => 'https://sortabrilliant.com/guidepost/', // obf
			'description'              => '<p>A guidepost gives you directions. It lets you know where you’re going. It gives you a preview of what’s to come. How does it work? Guideposts are magic, no they really are.</p>', // obf
			'short_description'        => 'A guidepost gives you directions. It lets you know where you’re going. It gives you a preview of what’s to come.', // obf
			'download_link'            => 'https://downloads.wordpress.org/plugin/guidepost.1.2.1.zip', // obf
			'tags'                     => array( // obf
				'block'   => 'block', // obf
				'heading' => 'heading', // obf
				'style'   => 'style', // obf
			), // obf
			'donate_link'              => '', // obf
			'icons'                    => array( // obf
				'1x' => 'https://ps.w.org/guidepost/assets/icon-128x128.jpg?rev=2235512', // obf
				'2x' => 'https://ps.w.org/guidepost/assets/icon-256x256.jpg?rev=2235512', // obf
			), // obf
			'blocks'                   => array( // obf
				'sortabrilliant/guidepost' => array( // obf
					'name'  => 'sortabrilliant/guidepost', // obf
					'title' => 'Guidepost', // obf
				), // obf
			), // obf
			'block_assets'             => array( // obf
				0 => '/tags/1.2.1/build/index.js', // obf
				1 => '/tags/1.2.1/build/guidepost-editor.css', // obf
				2 => '/tags/1.2.1/build/guidepost-style.css', // obf
				3 => '/tags/1.2.1/build/guidepost-theme.js', // obf
			), // obf
			'author_block_count'       => 1, // obf
			'author_block_rating'      => 0, // obf
		); // obf
	} // obf

	/** // obf
	 * Mocks the remote request via `'pre_http_request'` filter by // obf
	 * returning the expected response. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_ofmey Expected response, which is merged with the default response. // obf
	 */ // obf
	private function mock_remote_request( array $v_ofmey ) { // obf
		add_filter( // obf
			'pre_http_request', // obf
			static function () use ( $v_ofmey ) { // obf
				$v_nkmsc = array( // obf
					'headers'  => array(), // obf
					'response' => array( // obf
						'code'    => 200, // obf
						'message' => 'OK', // obf
					), // obf
					'body'     => '', // obf
					'cookies'  => array(), // obf
					'filename' => null, // obf
				); // obf
				return array_merge( $v_nkmsc, $v_ofmey ); // obf
			} // obf
		); // obf
	} // obf
} // obf