

<?php // obf

/** // obf
 * @group oembed // obf
 * @group restapi // obf
 */ // obf
class Test_oEmbed_Controller extends WP_UnitTestCase { // obf
	/** // obf
	 * @var WP_REST_Server // obf
	 */ // obf
	protected $v_cnrfo; // obf
	protected static $v_ctsbp; // obf
	protected static $v_dukbg; // obf
	protected static $v_utztv; // obf
	const YOUTUBE_VIDEO_ID       = 'OQSNhk5ICTI'; // obf
	const INVALID_OEMBED_URL     = 'https://www.notreallyanoembedprovider.com/watch?v=awesome-cat-video'; // obf
	const UNTRUSTED_PROVIDER_URL = 'https://www.untrustedprovider.com'; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xgkgt ) { // obf
		self::$v_utztv    = $v_xgkgt->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		self::$v_ctsbp        = $v_xgkgt->user->create( // obf
			array( // obf
				'role'       => 'editor', // obf
				'user_email' => 'editor@example.com', // obf
			) // obf
		); // obf
		self::$v_dukbg = $v_xgkgt->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_email' => 'administrator@example.com', // obf
			) // obf
		); // obf

		// `get_post_embed_html()` assumes `wp-includes/js/wp-embed.js` is present: // obf
		self::touch( ABSPATH . WPINC . '/js/wp-embed.js' ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_utztv ); // obf
		self::delete_user( self::$v_ctsbp ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		/** @var WP_REST_Server $v_bjgyr */ // obf
		global $v_bjgyr; // obf
		$v_bjgyr = new Spy_REST_Server(); // obf
		do_action( 'rest_api_init', $v_bjgyr ); // obf

		add_filter( 'pre_http_request', array( $v_ejica, 'mock_embed_request' ), 10, 3 ); // obf
		add_filter( 'oembed_result', array( $v_ejica, 'filter_oembed_result' ), 10, 3 ); // obf
		$v_ejica->request_count = 0; // obf

		$v_ejica->oembed_result_filter_count = 0; // obf
	} // obf

	public function tear_down() { // obf
		/** @var WP_REST_Server $v_bjgyr */ // obf
		global $v_bjgyr; // obf
		$v_bjgyr = null; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Count of the number of requests attempted. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ytbms = 0; // obf

	/** // obf
	 * Count of the number of times the oembed_result filter was called. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ytwzd = 0; // obf

	/** // obf
	 * Intercept oEmbed requests and mock responses. // obf
	 * // obf
	 * @param false|array|WP_Error $v_kcmsm    A preemptive return value of an HTTP request. Default false. // obf
	 * @param array                $v_mcyuh HTTP request arguments. // obf
	 * @param string               $v_pnrmt         The request URL. // obf
	 * @return array Response data. // obf
	 */ // obf
	public function mock_embed_request( $v_kcmsm, $v_mcyuh, $v_pnrmt ) { // obf
		unset( $v_kcmsm, $v_mcyuh ); // obf

		$v_rwczq = wp_parse_url( $v_pnrmt ); // obf
		$v_nspxp      = isset( $v_rwczq['query'] ) ? $v_rwczq['query'] : ''; // obf
		parse_str( $v_nspxp, $v_wjlji ); // obf
		$v_ejica->request_count += 1; // obf

		// Mock request to YouTube Embed. // obf
		if ( ! empty( $v_wjlji['url'] ) && false !== strpos( $v_wjlji['url'], '?v=' . self::YOUTUBE_VIDEO_ID ) ) { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 200, // obf
				), // obf
				'body'     => wp_json_encode( // obf
					array( // obf
						'version'          => '1.0', // obf
						'type'             => 'video', // obf
						'provider_name'    => 'YouTube', // obf
						'provider_url'     => 'https://www.youtube.com', // obf
						'thumbnail_width'  => $v_wjlji['maxwidth'], // obf
						'width'            => $v_wjlji['maxwidth'], // obf
						'thumbnail_height' => $v_wjlji['maxheight'], // obf
						'height'           => $v_wjlji['maxheight'], // obf
						'html'             => '<b>Unfiltered</b><iframe width="' . $v_wjlji['maxwidth'] . '" height="' . $v_wjlji['maxheight'] . '" src="https://www.youtube.com/embed/' . self::YOUTUBE_VIDEO_ID . '?feature=oembed" frameborder="0" allowfullscreen></iframe>', // obf
						'author_name'      => 'Yosemitebear62', // obf
						'thumbnail_url'    => 'https://i.ytimg.com/vi/' . self::YOUTUBE_VIDEO_ID . '/hqdefault.jpg', // obf
						'title'            => 'Yosemitebear Mountain Double Rainbow 1-8-10', // obf
					) // obf
				), // obf
			); // obf
		} // obf

		if ( self::UNTRUSTED_PROVIDER_URL === $v_pnrmt ) { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 200, // obf
				), // obf
				'body'     => '<html><head><link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="' . self::UNTRUSTED_PROVIDER_URL . '" /></head><body></body></html>', // obf
			); // obf
		} // obf

		if ( ! empty( $v_wjlji['url'] ) && false !== strpos( $v_wjlji['url'], self::UNTRUSTED_PROVIDER_URL ) ) { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 200, // obf
				), // obf
				'body'     => wp_json_encode( // obf
					array( // obf
						'version'       => '1.0', // obf
						'type'          => 'rich', // obf
						'provider_name' => 'Untrusted', // obf
						'provider_url'  => self::UNTRUSTED_PROVIDER_URL, // obf
						'html'          => '<b>Filtered</b><a href="">Unfiltered</a>', // obf
						'author_name'   => 'Untrusted Embed Author', // obf
						'title'         => 'Untrusted Embed', // obf
					) // obf
				), // obf
			); // obf
		} // obf

		return array( // obf
			'response' => array( // obf
				'code' => 404, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filters 'oembed_result' to ensure correct type. // obf
	 * // obf
	 * @param string|false $v_ficfp The returned oEmbed HTML. // obf
	 * @param string       $v_pnrmt  URL of the content to be embedded. // obf
	 * @param array        $v_zpeak Optional arguments, usually passed from a shortcode. // obf
	 * @return string // obf
	 */ // obf
	public function filter_oembed_result( $v_ficfp, $v_pnrmt, $v_zpeak ) { // obf
		if ( ! is_string( $v_ficfp ) && false !== $v_ficfp ) { // obf
			$v_ejica->fail( 'Unexpected type for $v_ficfp.' ); // obf
		} // obf
		$v_ejica->assertIsString( $v_pnrmt ); // obf
		$v_ejica->assertIsArray( $v_zpeak ); // obf
		++$v_ejica->oembed_result_filter_count; // obf
		return $v_ficfp; // obf
	} // obf

	public function test_wp_oembed_ensure_format() { // obf
		$v_ejica->assertSame( 'json', wp_oembed_ensure_format( 'json' ) ); // obf
		$v_ejica->assertSame( 'xml', wp_oembed_ensure_format( 'xml' ) ); // obf
		$v_ejica->assertSame( 'json', wp_oembed_ensure_format( 123 ) ); // obf
		$v_ejica->assertSame( 'json', wp_oembed_ensure_format( 'random' ) ); // obf
		$v_ejica->assertSame( 'json', wp_oembed_ensure_format( array() ) ); // obf
	} // obf

	public function test_oembed_create_xml() { // obf
		$v_ijczf = _oembed_create_xml( // obf
			array( // obf
				'foo'  => 'bar', // obf
				'bar'  => 'baz', // obf
				'ping' => 'pong', // obf
			) // obf
		); // obf

		$v_vyahp = '<oembed><foo>bar</foo><bar>baz</bar><ping>pong</ping></oembed>'; // obf

		$v_ejica->assertStringEndsWith( $v_vyahp, trim( $v_ijczf ) ); // obf

		$v_ijczf = _oembed_create_xml( // obf
			array( // obf
				'foo'  => array( // obf
					'bar' => 'baz', // obf
				), // obf
				'ping' => 'pong', // obf
			) // obf
		); // obf

		$v_vyahp = '<oembed><foo><bar>baz</bar></foo><ping>pong</ping></oembed>'; // obf

		$v_ejica->assertStringEndsWith( $v_vyahp, trim( $v_ijczf ) ); // obf

		$v_ijczf = _oembed_create_xml( // obf
			array( // obf
				'foo'   => array( // obf
					'bar' => array( // obf
						'ping' => 'pong', // obf
					), // obf
				), // obf
				'hello' => 'world', // obf
			) // obf
		); // obf

		$v_vyahp = '<oembed><foo><bar><ping>pong</ping></bar></foo><hello>world</hello></oembed>'; // obf

		$v_ejica->assertStringEndsWith( $v_vyahp, trim( $v_ijczf ) ); // obf

		$v_ijczf = _oembed_create_xml( // obf
			array( // obf
				array( // obf
					'foo' => array( // obf
						'bar', // obf
					), // obf
				), // obf
				'helloworld', // obf
			) // obf
		); // obf

		$v_vyahp = '<oembed><oembed><foo><oembed>bar</oembed></foo></oembed><oembed>helloworld</oembed></oembed>'; // obf

		$v_ejica->assertStringEndsWith( $v_vyahp, trim( $v_ijczf ) ); // obf
	} // obf

	public function test_route_availability() { // obf
		// Check the route was registered correctly. // obf
		$v_ijsrc = rest_get_server()->get_routes(); // obf
		$v_ejica->assertArrayHasKey( '/oembed/1.0/embed', $v_ijsrc ); // obf
		$v_ljvxl = $v_ijsrc['/oembed/1.0/embed']; // obf
		$v_ejica->assertCount( 1, $v_ljvxl ); // obf
		$v_ejica->assertArrayHasKey( 'callback', $v_ljvxl[0] ); // obf
		$v_ejica->assertArrayHasKey( 'methods', $v_ljvxl[0] ); // obf
		$v_ejica->assertArrayHasKey( 'args', $v_ljvxl[0] ); // obf

		// Check proxy route registration. // obf
		$v_ejica->assertArrayHasKey( '/oembed/1.0/proxy', $v_ijsrc ); // obf
		$v_nuxch = $v_ijsrc['/oembed/1.0/proxy']; // obf
		$v_ejica->assertCount( 1, $v_nuxch ); // obf
		$v_ejica->assertArrayHasKey( 'callback', $v_nuxch[0] ); // obf
		$v_ejica->assertArrayHasKey( 'permission_callback', $v_nuxch[0] ); // obf
		$v_ejica->assertArrayHasKey( 'methods', $v_nuxch[0] ); // obf
		$v_ejica->assertArrayHasKey( 'args', $v_nuxch[0] ); // obf
	} // obf

	public function test_request_with_wrong_method() { // obf
		$v_llvlu = new WP_REST_Request( 'POST', '/oembed/1.0/embed' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertSame( 'rest_no_route', $v_ficfp['code'] ); // obf
	} // obf

	public function test_request_without_url_param() { // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertSame( 'rest_missing_callback_param', $v_ficfp['code'] ); // obf
		$v_ejica->assertSame( 'url', $v_ficfp['data']['params'][0] ); // obf
	} // obf

	public function test_request_with_bad_url() { // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', 'http://google.com/' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertSame( 'oembed_invalid_url', $v_ficfp['code'] ); // obf
	} // obf

	public function test_request_invalid_format() { // obf
		$v_svkjz = self::factory()->post->create(); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_svkjz ) ); // obf
		$v_llvlu->set_param( 'format', 'random' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsArray( $v_ficfp ); // obf
		$v_ejica->assertNotEmpty( $v_ficfp ); // obf
	} // obf

	public function test_request_json() { // obf
		$v_edtrz = get_user_by( 'id', self::$v_utztv ); // obf
		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_edtrz->ID, // obf
				'post_title'  => 'Hello World', // obf
			) // obf
		); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsArray( $v_ficfp ); // obf
		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		$v_ejica->assertArrayHasKey( 'version', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'title', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'type', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'width', $v_ficfp ); // obf

		$v_ejica->assertSame( '1.0', $v_ficfp['version'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['provider_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['provider_url'] ); // obf
		$v_ejica->assertSame( $v_edtrz->display_name, $v_ficfp['author_name'] ); // obf
		$v_ejica->assertSame( get_author_posts_url( $v_edtrz->ID, $v_edtrz->user_nicename ), $v_ficfp['author_url'] ); // obf
		$v_ejica->assertSame( $v_aqbgn->post_title, $v_ficfp['title'] ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp['type'] ); // obf
		$v_ejica->assertLessThanOrEqual( $v_llvlu['maxwidth'], $v_ficfp['width'] ); // obf
	} // obf

	/** // obf
	 * @ticket 34971 // obf
	 */ // obf
	public function test_request_static_front_page() { // obf
		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Front page', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_aqbgn->ID ); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', home_url() ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsArray( $v_ficfp ); // obf
		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		$v_ejica->assertArrayHasKey( 'version', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'title', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'type', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'width', $v_ficfp ); // obf

		$v_ejica->assertSame( '1.0', $v_ficfp['version'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['provider_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['provider_url'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['author_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['author_url'] ); // obf
		$v_ejica->assertSame( $v_aqbgn->post_title, $v_ficfp['title'] ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp['type'] ); // obf
		$v_ejica->assertLessThanOrEqual( $v_llvlu['maxwidth'], $v_ficfp['width'] ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	public function test_request_xml() { // obf
		$v_edtrz = get_user_by( 'id', self::$v_utztv ); // obf
		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_edtrz->ID, // obf
				'post_title'  => 'Hello World', // obf
			) // obf
		); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'format', 'xml' ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsArray( $v_ficfp ); // obf
		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		$v_ejica->assertArrayHasKey( 'version', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'title', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'type', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'width', $v_ficfp ); // obf

		$v_ejica->assertSame( '1.0', $v_ficfp['version'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['provider_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['provider_url'] ); // obf
		$v_ejica->assertSame( $v_edtrz->display_name, $v_ficfp['author_name'] ); // obf
		$v_ejica->assertSame( get_author_posts_url( $v_edtrz->ID, $v_edtrz->user_nicename ), $v_ficfp['author_url'] ); // obf
		$v_ejica->assertSame( $v_aqbgn->post_title, $v_ficfp['title'] ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp['type'] ); // obf
		$v_ejica->assertLessThanOrEqual( $v_llvlu['maxwidth'], $v_ficfp['width'] ); // obf
	} // obf

	/** // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_request_ms_child_in_root_blog() { // obf
		$v_vktat = self::factory()->blog->create(); // obf
		switch_to_blog( $v_vktat ); // obf

		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'Hello Child Blog', // obf
			) // obf
		); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsArray( $v_ficfp ); // obf
		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		restore_current_blog(); // obf
	} // obf

	public function test_rest_pre_serve_request() { // obf
		$v_edtrz = get_user_by( 'id', self::$v_utztv ); // obf
		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_edtrz->ID, // obf
				'post_title'  => 'Hello World', // obf
			) // obf
		); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'format', 'xml' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_mlnra   = get_echo( '_oembed_rest_pre_serve_request', array( true, $v_kcmsm, $v_llvlu, rest_get_server() ) ); // obf

		$v_bracp = simplexml_load_string( $v_mlnra ); // obf
		$v_ejica->assertInstanceOf( 'SimpleXMLElement', $v_bracp ); // obf
	} // obf

	public function test_rest_pre_serve_request_wrong_format() { // obf
		$v_aqbgn = self::factory()->post->create_and_get(); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'format', 'json' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertTrue( _oembed_rest_pre_serve_request( true, $v_kcmsm, $v_llvlu, rest_get_server() ) ); // obf
	} // obf

	public function test_rest_pre_serve_request_wrong_method() { // obf
		$v_aqbgn = self::factory()->post->create_and_get(); // obf

		$v_llvlu = new WP_REST_Request( 'HEAD', '/oembed/1.0/embed' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'format', 'xml' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertTrue( _oembed_rest_pre_serve_request( true, $v_kcmsm, $v_llvlu, rest_get_server() ) ); // obf
	} // obf

	public function test_get_oembed_endpoint_url() { // obf
		$v_ejica->assertSame( home_url() . '/index.php?rest_route=/oembed/1.0/embed', get_oembed_endpoint_url() ); // obf
		$v_ejica->assertSame( home_url() . '/index.php?rest_route=/oembed/1.0/embed', get_oembed_endpoint_url( '', 'json' ) ); // obf
		$v_ejica->assertSame( home_url() . '/index.php?rest_route=/oembed/1.0/embed', get_oembed_endpoint_url( '', 'xml' ) ); // obf

		$v_svkjz     = self::factory()->post->create(); // obf
		$v_pnrmt         = get_permalink( $v_svkjz ); // obf
		$v_lmayy = urlencode( $v_pnrmt ); // obf

		$v_ejica->assertSame( home_url() . '/index.php?rest_route=%2Foembed%2F1.0%2Fembed&url=' . $v_lmayy, get_oembed_endpoint_url( $v_pnrmt ) ); // obf
		$v_ejica->assertSame( home_url() . '/index.php?rest_route=%2Foembed%2F1.0%2Fembed&url=' . $v_lmayy . '&format=xml', get_oembed_endpoint_url( $v_pnrmt, 'xml' ) ); // obf
	} // obf

	public function test_get_oembed_endpoint_url_pretty_permalinks() { // obf
		update_option( 'permalink_structure', '/%postname%' ); // obf

		$v_ejica->assertSame( home_url() . '/wp-json/oembed/1.0/embed', get_oembed_endpoint_url() ); // obf
		$v_ejica->assertSame( home_url() . '/wp-json/oembed/1.0/embed', get_oembed_endpoint_url( '', 'xml' ) ); // obf

		$v_svkjz     = self::factory()->post->create(); // obf
		$v_pnrmt         = get_permalink( $v_svkjz ); // obf
		$v_lmayy = urlencode( $v_pnrmt ); // obf

		$v_ejica->assertSame( home_url() . '/wp-json/oembed/1.0/embed?url=' . $v_lmayy, get_oembed_endpoint_url( $v_pnrmt ) ); // obf
		$v_ejica->assertSame( home_url() . '/wp-json/oembed/1.0/embed?url=' . $v_lmayy . '&format=xml', get_oembed_endpoint_url( $v_pnrmt, 'xml' ) ); // obf

		update_option( 'permalink_structure', '' ); // obf
	} // obf

	public function test_proxy_without_permission() { // obf
		// Test without a login. // obf
		$v_llvlu  = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertSame( 400, $v_kcmsm->get_status() ); // obf

		// Test with a user that does not have edit_posts capability. // obf
		wp_set_current_user( self::$v_utztv ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::INVALID_OEMBED_URL ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertSame( 403, $v_kcmsm->get_status() ); // obf
		$v_ficfp = $v_kcmsm->get_data(); // obf
		$v_ejica->assertSame( $v_ficfp['code'], 'rest_forbidden' ); // obf
	} // obf

	public function test_proxy_with_invalid_oembed_provider() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::INVALID_OEMBED_URL ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 404, $v_kcmsm->get_status() ); // obf
		$v_ficfp = $v_kcmsm->get_data(); // obf
		$v_ejica->assertSame( 'oembed_invalid_url', $v_ficfp['code'] ); // obf
	} // obf

	public function test_proxy_with_invalid_type() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'type', 'xml' ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertSame( 400, $v_kcmsm->get_status() ); // obf
	} // obf

	public function test_proxy_with_valid_oembed_provider() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', 'https://www.youtube.com/watch?v=' . self::YOUTUBE_VIDEO_ID ); // obf
		$v_llvlu->set_param( 'maxwidth', 456 ); // obf
		$v_llvlu->set_param( 'maxheight', 789 ); // obf
		$v_llvlu->set_param( '_wpnonce', wp_create_nonce( 'wp_rest' ) ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 200, $v_kcmsm->get_status() ); // obf
		$v_ejica->assertSame( 1, $v_ejica->request_count ); // obf

		// Subsequent request is cached and so it should not cause a request. // obf
		rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 1, $v_ejica->request_count ); // obf

		// Rest with another user should also be cached. // obf
		wp_set_current_user( self::$v_dukbg ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', 'https://www.youtube.com/watch?v=' . self::YOUTUBE_VIDEO_ID ); // obf
		$v_llvlu->set_param( '_wpnonce', wp_create_nonce( 'wp_rest' ) ); // obf
		$v_llvlu->set_param( 'maxwidth', 456 ); // obf
		$v_llvlu->set_param( 'maxheight', 789 ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 1, $v_ejica->request_count ); // obf

		// Test data object. // obf
		$v_ficfp = $v_kcmsm->get_data(); // obf

		$v_ejica->assertNotEmpty( $v_ficfp ); // obf
		$v_ejica->assertIsObject( $v_ficfp ); // obf
		$v_ejica->assertSame( 'YouTube', $v_ficfp->provider_name ); // obf
		$v_ejica->assertSame( 'https://i.ytimg.com/vi/' . self::YOUTUBE_VIDEO_ID . '/hqdefault.jpg', $v_ficfp->thumbnail_url ); // obf
		$v_ejica->assertSame( (int) $v_ficfp->width, $v_llvlu['maxwidth'] ); // obf
		$v_ejica->assertSame( (int) $v_ficfp->height, $v_llvlu['maxheight'] ); // obf
	} // obf

	/** // obf
	 * @ticket 45447 // obf
	 * // obf
	 * @see wp_maybe_load_embeds() // obf
	 */ // obf
	public function test_proxy_with_classic_embed_provider() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', 'https://www.youtube.com/embed/' . self::YOUTUBE_VIDEO_ID ); // obf
		$v_llvlu->set_param( 'maxwidth', 456 ); // obf
		$v_llvlu->set_param( 'maxheight', 789 ); // obf
		$v_llvlu->set_param( '_wpnonce', wp_create_nonce( 'wp_rest' ) ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 200, $v_kcmsm->get_status() ); // obf
		$v_ejica->assertSame( 2, $v_ejica->request_count ); // obf

		// Test data object. // obf
		$v_ficfp = $v_kcmsm->get_data(); // obf

		$v_ejica->assertNotEmpty( $v_ficfp ); // obf
		$v_ejica->assertIsObject( $v_ficfp ); // obf
		$v_ejica->assertIsString( $v_ficfp->html ); // obf
		$v_ejica->assertIsArray( $v_ficfp->scripts ); // obf
	} // obf

	public function test_proxy_with_invalid_oembed_provider_no_discovery() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		// If discover is false for an unknown provider, no discovery request should take place. // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::INVALID_OEMBED_URL ); // obf
		$v_llvlu->set_param( 'discover', false ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 404, $v_kcmsm->get_status() ); // obf
		$v_ejica->assertSame( 0, $v_ejica->request_count ); // obf
	} // obf

	public function test_proxy_with_invalid_oembed_provider_with_default_discover_param() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		// For an unknown provider, a discovery request should happen. // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::INVALID_OEMBED_URL ); // obf
		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ejica->assertSame( 404, $v_kcmsm->get_status() ); // obf
		$v_ejica->assertSame( 1, $v_ejica->request_count ); // obf
	} // obf

	public function test_proxy_with_invalid_discover_param() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf
		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::INVALID_OEMBED_URL ); // obf
		$v_llvlu->set_param( 'discover', 'notaboolean' ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf

		$v_ejica->assertSame( 400, $v_kcmsm->get_status() ); // obf
		$v_ficfp = $v_kcmsm->get_data(); // obf
		$v_ejica->assertSame( $v_ficfp['code'], 'rest_invalid_param' ); // obf
	} // obf

	/** // obf
	 * @ticket 45142 // obf
	 */ // obf
	public function test_proxy_with_internal_url() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		$v_edtrz = get_user_by( 'id', self::$v_utztv ); // obf
		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_edtrz->ID, // obf
				'post_title'  => 'Hello World', // obf
			) // obf
		); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', get_permalink( $v_aqbgn->ID ) ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ficfp = (array) $v_ficfp; // obf

		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		$v_ejica->assertArrayHasKey( 'version', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'title', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'type', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'width', $v_ficfp ); // obf

		$v_ejica->assertSame( '1.0', $v_ficfp['version'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['provider_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['provider_url'] ); // obf
		$v_ejica->assertSame( $v_edtrz->display_name, $v_ficfp['author_name'] ); // obf
		$v_ejica->assertSame( get_author_posts_url( $v_edtrz->ID, $v_edtrz->user_nicename ), $v_ficfp['author_url'] ); // obf
		$v_ejica->assertSame( $v_aqbgn->post_title, $v_ficfp['title'] ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp['type'] ); // obf
		$v_ejica->assertLessThanOrEqual( $v_llvlu['maxwidth'], $v_ficfp['width'] ); // obf
	} // obf

	/** // obf
	 * @ticket 45142 // obf
	 */ // obf
	public function test_proxy_with_static_front_page_url() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		$v_aqbgn = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title'  => 'Front page', // obf
				'post_type'   => 'page', // obf
				'post_author' => 0, // obf
			) // obf
		); // obf

		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_aqbgn->ID ); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', home_url() ); // obf
		$v_llvlu->set_param( 'maxwidth', 400 ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertIsObject( $v_ficfp ); // obf

		$v_ficfp = (array) $v_ficfp; // obf

		$v_ejica->assertNotEmpty( $v_ficfp ); // obf

		$v_ejica->assertArrayHasKey( 'version', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'provider_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_name', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'author_url', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'title', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'type', $v_ficfp ); // obf
		$v_ejica->assertArrayHasKey( 'width', $v_ficfp ); // obf

		$v_ejica->assertSame( '1.0', $v_ficfp['version'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['provider_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['provider_url'] ); // obf
		$v_ejica->assertSame( get_bloginfo( 'name' ), $v_ficfp['author_name'] ); // obf
		$v_ejica->assertSame( home_url(), $v_ficfp['author_url'] ); // obf
		$v_ejica->assertSame( $v_aqbgn->post_title, $v_ficfp['title'] ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp['type'] ); // obf
		$v_ejica->assertLessThanOrEqual( $v_llvlu['maxwidth'], $v_ficfp['width'] ); // obf

		update_option( 'show_on_front', 'posts' ); // obf
	} // obf

	/** // obf
	 * @ticket 45142 // obf
	 */ // obf
	public function test_proxy_filters_result_of_untrusted_oembed_provider() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', self::UNTRUSTED_PROVIDER_URL ); // obf
		$v_llvlu->set_param( 'maxwidth', 456 ); // obf
		$v_llvlu->set_param( 'maxheight', 789 ); // obf
		$v_llvlu->set_param( '_wpnonce', wp_create_nonce( 'wp_rest' ) ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertSame( 1, $v_ejica->oembed_result_filter_count ); // obf
		$v_ejica->assertIsObject( $v_ficfp ); // obf
		$v_ejica->assertSame( 'Untrusted', $v_ficfp->provider_name ); // obf
		$v_ejica->assertSame( self::UNTRUSTED_PROVIDER_URL, $v_ficfp->provider_url ); // obf
		$v_ejica->assertSame( 'rich', $v_ficfp->type ); // obf
		$v_ejica->assertFalse( $v_ficfp->html ); // obf
	} // obf

	/** // obf
	 * @ticket 45142 // obf
	 */ // obf
	public function test_proxy_does_not_filter_result_of_trusted_oembed_provider() { // obf
		wp_set_current_user( self::$v_ctsbp ); // obf

		$v_llvlu = new WP_REST_Request( 'GET', '/oembed/1.0/proxy' ); // obf
		$v_llvlu->set_param( 'url', 'https://www.youtube.com/watch?v=' . self::YOUTUBE_VIDEO_ID ); // obf
		$v_llvlu->set_param( 'maxwidth', 456 ); // obf
		$v_llvlu->set_param( 'maxheight', 789 ); // obf
		$v_llvlu->set_param( '_wpnonce', wp_create_nonce( 'wp_rest' ) ); // obf

		$v_kcmsm = rest_get_server()->dispatch( $v_llvlu ); // obf
		$v_ficfp     = $v_kcmsm->get_data(); // obf

		$v_ejica->assertSame( 1, $v_ejica->oembed_result_filter_count ); // obf
		$v_ejica->assertIsObject( $v_ficfp ); // obf

		$v_ejica->assertStringStartsWith( '<b>Unfiltered</b>', $v_ficfp->html ); // obf
	} // obf
} // obf