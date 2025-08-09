

<?php // obf
/** // obf
 * Unit tests covering WP_REST_Widgets_Controller functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 * // obf
 * @covers WP_REST_Widgets_Controller // obf
 * // obf
 * @see WP_Test_REST_Controller_Testcase // obf
 * @group restapi // obf
 * @group widgets // obf
 */ // obf
class WP_Test_REST_Widgets_Controller extends WP_Test_REST_Controller_Testcase { // obf
	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_ywgeo; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_mshil; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_aitut; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_dkjia; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_xleob; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_lcizy; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_atrlo; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	protected static $v_bydfy = 50; // obf

	/** // obf
	 * Create fake data before our tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_litvy Helper that lets us create fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( $v_litvy ) { // obf
		self::$v_mshil = $v_litvy->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'superadmin', // obf
			) // obf
		); // obf
		if ( is_multisite() ) { // obf
			update_site_option( 'site_admins', array( 'superadmin' ) ); // obf
		} // obf
		self::$v_aitut      = $v_litvy->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		self::$v_xleob     = $v_litvy->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		self::$v_atrlo     = $v_litvy->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		self::$v_lcizy = $v_litvy->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		global $v_qiolh; // obf

		parent::set_up(); // obf

		wp_set_current_user( self::$v_aitut ); // obf

		// Re-register core widgets. // obf
		wp_widgets_init(); // obf

		// Register a non-multi widget for testing. // obf
		wp_register_widget_control( // obf
			'testwidget', // obf
			'WP test widget', // obf
			static function () { // obf
				// check if anything's been sent. // obf
				if ( isset( $v_asrla['update_testwidget'] ) ) { // obf
					$v_hhkkr = get_option( 'widget_testwidget', array() ); // obf

					$v_hhkkr['id']    = $v_asrla['test_id']; // obf
					$v_hhkkr['title'] = $v_asrla['test_title']; // obf

					update_option( 'widget_testwidget', $v_hhkkr ); // obf
				} // obf

				echo 'WP test widget form'; // obf
			}, // obf
			100, // obf
			200 // obf
		); // obf
		wp_register_sidebar_widget( // obf
			'testwidget', // obf
			'WP test widget', // obf
			static function () { // obf
				$v_hhkkr = wp_parse_args( // obf
					get_option( 'widget_testwidget', array() ), // obf
					array( // obf
						'id'    => 'Default id', // obf
						'title' => 'Default text', // obf
					) // obf
				); // obf
				echo '<h1>' . $v_hhkkr['id'] . '</h1><span>' . $v_hhkkr['title'] . '</span>'; // obf
			}, // obf
			array( // obf
				'description' => 'A non-multi widget for testing.', // obf
			) // obf
		); // obf
	} // obf

	public function clean_up_global_scope() { // obf
		global // obf
			$v_qiolh, // obf
			$v_wjawa, // obf
			$v_cjmvu, // obf
			$v_bgvnr, // obf
			$v_qcppj, // obf
			$v_nints; // obf

		$v_wjawa        = array(); // obf
		$v_cjmvu         = array(); // obf
		$v_bgvnr = array(); // obf
		$v_qcppj  = array(); // obf
		$v_qiolh->widgets    = array(); // obf
		$v_nints          = array(); // obf

		update_option( 'sidebars_widgets', array() ); // obf

		parent::clean_up_global_scope(); // obf
	} // obf

	private function setup_widget( $v_jygpr, $v_htlvr, $v_hhkkr ) { // obf
		$v_hzivn->setup_widgets( $v_jygpr, array( $v_htlvr => $v_hhkkr ) ); // obf
	} // obf

	private function setup_widgets( $v_jygpr, $v_hhkkr ) { // obf
		global $v_qiolh; // obf

		$v_ierfx = "widget_$v_jygpr"; // obf
		update_option( $v_ierfx, $v_hhkkr ); // obf

		$v_fyztn = $v_qiolh->get_widget_object( $v_jygpr ); // obf
		foreach ( array_keys( $v_hhkkr ) as $v_htlvr ) { // obf
			$v_fyztn->_set( $v_htlvr ); // obf
			$v_fyztn->_register_one( $v_htlvr ); // obf
		} // obf
	} // obf

	private function setup_sidebar( $v_jpxcy, $v_wksnr = array(), $v_cqltw = array() ) { // obf
		global $v_wjawa; // obf
		update_option( // obf
			'sidebars_widgets', // obf
			array_merge( // obf
				(array) get_option( 'sidebars_widgets', array() ), // obf
				array( // obf
					$v_jpxcy => $v_cqltw, // obf
				) // obf
			) // obf
		); // obf
		$v_wjawa[ $v_jpxcy ] = array_merge( // obf
			array( // obf
				'id'            => $v_jpxcy, // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
				'before_title'  => '', // obf
				'after_title'   => '', // obf
			), // obf
			$v_wksnr // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_register_routes() { // obf
		$v_vlxcb = rest_get_server()->get_routes(); // obf
		$v_hzivn->assertArrayHasKey( '/wp/v2/widgets', $v_vlxcb ); // obf
		$v_hzivn->assertArrayHasKey( '/wp/v2/widgets/(?P<id>[\w\-]+)', $v_vlxcb ); // obf
	} // obf

	/** // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_context_param() { // obf
		// Controller does not use get_context_param(). // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_no_widgets() { // obf
		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf

		$v_hzivn->assertSame( array(), $v_ortgy ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_no_permission( $v_guozl ) { // obf
		wp_set_current_user( 0 ); // obf
		$v_mbcyh  = new WP_REST_Request( $v_guozl, '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 401 ); // obf
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
	 * @ticket 53915 // obf
	 */ // obf
	public function test_get_items_no_permission_show_in_rest() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar', // obf
				'show_in_rest' => true, // obf
			), // obf
			array( 'text-1', 'testwidget' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_ortgy     = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSameIgnoreEOL( // obf
			array( // obf
				array( // obf
					'id'       => 'text-1', // obf
					'id_base'  => 'text', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<div class="textwidget">Custom text test</div>', // obf
				), // obf
				array( // obf
					'id'       => 'testwidget', // obf
					'id_base'  => 'testwidget', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<h1>Default id</h1><span>Default text</span>', // obf
				), // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53915 // obf
	 */ // obf
	public function test_get_items_without_show_in_rest_are_removed_from_the_list() { // obf
		wp_set_current_user( self::$v_atrlo ); // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar 1', // obf
				'show_in_rest' => true, // obf
			), // obf
			array( 'text-1', 'testwidget' ) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-2', // obf
			array( // obf
				'name'         => 'Test sidebar 2', // obf
				'show_in_rest' => false, // obf
			), // obf
			array( 'text-1', 'testwidget' ) // obf
		); // obf
		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_ortgy     = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSameIgnoreEOL( // obf
			array( // obf
				array( // obf
					'id'       => 'text-1', // obf
					'id_base'  => 'text', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<div class="textwidget">Custom text test</div>', // obf
				), // obf
				array( // obf
					'id'       => 'testwidget', // obf
					'id_base'  => 'testwidget', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<h1>Default id</h1><span>Default text</span>', // obf
				), // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_wrong_permission_author( $v_guozl ) { // obf
		wp_set_current_user( self::$v_atrlo ); // obf
		$v_mbcyh  = new WP_REST_Request( $v_guozl, '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items() { // obf
		add_filter( 'pre_http_request', array( $v_hzivn, 'mocked_rss_response' ) ); // obf
		global $v_qiolh; // obf

		$v_qiolh->widgets['WP_Widget_RSS']->widget_options['show_instance_in_rest'] = false; // obf

		$v_afzyt = '<!-- wp:paragraph --><p>Block test</p><!-- /wp:paragraph -->'; // obf

		$v_hzivn->setup_widget( // obf
			'rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
				'url'   => 'https://wordpress.org/news/feed', // obf
			) // obf
		); // obf
		$v_hzivn->setup_widget( // obf
			'block', // obf
			1, // obf
			array( // obf
				'content' => $v_afzyt, // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'block-1', 'rss-1', 'testwidget' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		remove_filter( 'pre_http_request', array( $v_hzivn, 'mocked_rss_response' ) ); // obf
		$v_ortgy = $v_ywxpm->get_data(); // obf
		$v_ortgy = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSameSets( // obf
			array( // obf
				array( // obf
					'id'       => 'block-1', // obf
					'id_base'  => 'block', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<p>Block test</p>', // obf
				), // obf
				array( // obf
					'id'       => 'rss-1', // obf
					'id_base'  => 'rss', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<a class="rsswidget rss-widget-feed" href="https://wordpress.org/news/feed"><img class="rss-widget-icon" style="border:0" width="14" height="14" src="http://' . WP_TESTS_DOMAIN . '/wp-includes/images/rss.png" alt="RSS" loading="lazy" /></a> <a class="rsswidget rss-widget-title" href="https://wordpress.org/news">RSS test</a><ul><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/12/introducing-learn-wordpress/\'>Introducing Learn WordPress</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/12/simone/\'>WordPress 5.6 “Simone”</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/12/state-of-the-word-2020/\'>State of the Word 2020</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/12/the-month-in-wordpress-november-2020/\'>The Month in WordPress: November 2020</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/12/wordpress-5-6-release-candidate-2/\'>WordPress 5.6 Release Candidate 2</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/11/wordpress-5-6-release-candidate/\'>WordPress 5.6 Release Candidate</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/11/wordpress-5-6-beta-4/\'>WordPress 5.6 Beta 4</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/11/wordpress-5-6-beta-3/\'>WordPress 5.6 Beta 3</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/11/the-month-in-wordpress-october-2020/\'>The Month in WordPress: October 2020</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2020/10/wordpress-5-5-3-maintenance-release/\'>WordPress 5.5.3 Maintenance Release</a></li></ul>', // obf
				), // obf
				array( // obf
					'id'       => 'testwidget', // obf
					'id_base'  => 'testwidget', // obf
					'sidebar'  => 'sidebar-1', // obf
					'rendered' => '<h1>Default id</h1><span>Default text</span>', // obf
				), // obf
			), // obf
			$v_ortgy // obf
		); // obf

		$v_qiolh->widgets['WP_Widget_RSS']->widget_options['show_instance_in_rest'] = true; // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_items_with_head_request_should_not_prepare_widget_data( $v_guozl ) { // obf
		$v_afzyt = '<!-- wp:paragraph --><p>Block test</p><!-- /wp:paragraph -->'; // obf

		$v_hzivn->setup_widget( // obf
			'rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
				'url'   => 'https://wordpress.org/news/feed', // obf
			) // obf
		); // obf
		$v_hzivn->setup_widget( // obf
			'block', // obf
			1, // obf
			array( // obf
				'content' => $v_afzyt, // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'block-1', 'rss-1', 'testwidget' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'HEAD', '/wp/v2/widgets' ); // obf

		$v_vjzvm = 'rest_prepare_post'; // obf
		$v_syyvm    = new MockAction(); // obf
		$v_rkdhm  = array( $v_syyvm, 'filter' ); // obf

		add_filter( $v_vjzvm, $v_rkdhm ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		remove_filter( $v_vjzvm, $v_rkdhm ); // obf

		$v_hzivn->assertNotWPError( $v_ywxpm ); // obf
		$v_hzivn->assertSame( 200, $v_ywxpm->get_status(), 'The response status should be 200.' ); // obf
		$v_hzivn->assertSame( 0, $v_syyvm->get_call_count(), 'The "' . $v_vjzvm . '" filter was called when it should not be for HEAD requests.' ); // obf
		$v_hzivn->assertSame( array(), $v_ywxpm->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	public function mocked_rss_response() { // obf
		$v_eezfw = array( // obf
			'Content-Type' => 'application/rss+xml; charset=UTF-8', // obf
			'link'         => '<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
		); // obf

		return array( // obf
			'headers'  => new WpOrg\Requests\Utility\CaseInsensitiveDictionary( $v_eezfw ), // obf
			'body'     => file_get_contents( DIR_TESTDATA . '/feed/wordpress-org-news.xml' ), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
			'cookies'  => array(), // obf
			'filename' => null, // obf
		); // obf
	} // obf

	/** // obf
	 * Test a GET request in edit context. In particular, we expect rendered_form to be served correctly. // obf
	 * // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_items_edit_context() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'testwidget' ) // obf
		); // obf

		$v_mbcyh            = new WP_REST_Request( 'GET', '/wp/v2/widgets' ); // obf
		$v_mbcyh['context'] = 'edit'; // obf
		$v_ywxpm           = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy               = $v_ywxpm->get_data(); // obf
		$v_ortgy               = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSameIgnoreEOL( // obf
			array( // obf
				array( // obf
					'id'            => 'text-1', // obf
					'id_base'       => 'text', // obf
					'sidebar'       => 'sidebar-1', // obf
					'rendered'      => '<div class="textwidget">Custom text test</div>', // obf
					'rendered_form' => '<input id="widget-text-1-title" name="widget-text[1][title]" class="title sync-input" type="hidden" value="">' . "\n" . // obf
									'			<textarea id="widget-text-1-text" name="widget-text[1][text]" class="text sync-input" hidden>Custom text test</textarea>' . "\n" . // obf
									'			<input id="widget-text-1-filter" name="widget-text[1][filter]" class="filter sync-input" type="hidden" value="on">' . "\n" . // obf
									'			<input id="widget-text-1-visual" name="widget-text[1][visual]" class="visual sync-input" type="hidden" value="on">', // obf
					'instance'      => array( // obf
						'encoded' => base64_encode( // obf
							serialize( // obf
								array( // obf
									'text' => 'Custom text test', // obf
								) // obf
							) // obf
						), // obf
						'hash'    => wp_hash( // obf
							serialize( // obf
								array( // obf
									'text' => 'Custom text test', // obf
								) // obf
							) // obf
						), // obf
						'raw'     => array( // obf
							'text' => 'Custom text test', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'id'            => 'testwidget', // obf
					'id_base'       => 'testwidget', // obf
					'sidebar'       => 'sidebar-1', // obf
					'rendered'      => '<h1>Default id</h1><span>Default text</span>', // obf
					'rendered_form' => 'WP test widget form', // obf
					'instance'      => null, // obf
				), // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSameSets( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'rendered' => '<div class="textwidget">Custom text test</div>', // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_should_allow_adding_headers_via_filter( $v_guozl ) { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( $v_guozl, '/wp/v2/widgets/text-1' ); // obf

		$v_vjzvm = 'rest_prepare_widget'; // obf
		$v_syyvm    = new MockAction(); // obf
		$v_rkdhm  = array( $v_syyvm, 'filter' ); // obf
		add_filter( $v_vjzvm, $v_rkdhm ); // obf
		$v_jcwfm = new class() { // obf
			public static function add_custom_header( $v_ywxpm ) { // obf
				$v_ywxpm->header( 'X-Test-Header', 'Test' ); // obf

				return $v_ywxpm; // obf
			} // obf
		}; // obf
		add_filter( $v_vjzvm, array( $v_jcwfm, 'add_custom_header' ) ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		remove_filter( $v_vjzvm, $v_rkdhm ); // obf
		remove_filter( $v_vjzvm, array( $v_jcwfm, 'add_custom_header' ) ); // obf

		$v_hzivn->assertSame( 200, $v_ywxpm->get_status(), 'The response status should be 200.' ); // obf
		$v_hzivn->assertSame( 1, $v_syyvm->get_call_count(), 'The "' . $v_vjzvm . '" filter was not called when it should be for GET/HEAD requests.' ); // obf
		$v_nwtlr = $v_ywxpm->get_headers(); // obf
		$v_hzivn->assertArrayHasKey( 'X-Test-Header', $v_nwtlr, 'The "X-Test-Header" header should be present in the response.' ); // obf
		$v_hzivn->assertSame( 'Test', $v_nwtlr['X-Test-Header'], 'The "X-Test-Header" header value should be equal to "Test".' ); // obf
		if ( 'HEAD' !== $v_guozl ) { // obf
			return null; // obf
		} // obf
		$v_hzivn->assertSame( array(), $v_ywxpm->get_data(), 'The server should not generate a body in response to a HEAD request.' ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_head_request_with_specified_fields_returns_success_response // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_aiync The path to test. // obf
	 */ // obf
	public function test_head_request_with_specified_fields_returns_success_response( $v_aiync ) { // obf
		add_filter( 'pre_http_request', array( $v_hzivn, 'mocked_rss_response' ) ); // obf
		global $v_qiolh; // obf

		$v_qiolh->widgets['WP_Widget_RSS']->widget_options['show_instance_in_rest'] = false; // obf

		$v_afzyt = '<!-- wp:paragraph --><p>Block test</p><!-- /wp:paragraph -->'; // obf

		$v_hzivn->setup_widget( // obf
			'rss', // obf
			1, // obf
			array( // obf
				'title' => 'RSS test', // obf
				'url'   => 'https://wordpress.org/news/feed', // obf
			) // obf
		); // obf
		$v_hzivn->setup_widget( // obf
			'block', // obf
			1, // obf
			array( // obf
				'content' => $v_afzyt, // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'block-1', 'rss-1', 'testwidget' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'HEAD', $v_aiync ); // obf
		$v_mbcyh->set_param( '_fields', 'id' ); // obf
		$v_tndtr   = rest_get_server(); // obf
		$v_ywxpm = $v_tndtr->dispatch( $v_mbcyh ); // obf
		add_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10, 3 ); // obf
		$v_ywxpm = apply_filters( 'rest_post_dispatch', $v_ywxpm, $v_tndtr, $v_mbcyh ); // obf
		remove_filter( 'rest_post_dispatch', 'rest_filter_response_fields', 10 ); // obf
		remove_filter( 'pre_http_request', array( $v_hzivn, 'mocked_rss_response' ) ); // obf

		$v_hzivn->assertSame( 200, $v_ywxpm->get_status(), 'The response status should be 200.' ); // obf
	} // obf

	/** // obf
	 * Data provider intended to provide paths for testing HEAD requests. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public static function data_head_request_with_specified_fields_returns_success_response() { // obf
		return array( // obf
			'get_item request'  => array( '/wp/v2/widgets/block-1' ), // obf
			'get_items request' => array( '/wp/v2/widgets' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_no_permission( $v_guozl ) { // obf
		wp_set_current_user( 0 ); // obf

		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( $v_guozl, '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 401 ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_readable_http_methods // obf
	 * @ticket 41683 // obf
	 * @ticket 56481 // obf
	 * // obf
	 * @param string $v_guozl The HTTP method to use. // obf
	 */ // obf
	public function test_get_item_wrong_permission_author( $v_guozl ) { // obf
		wp_set_current_user( self::$v_atrlo ); // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( $v_guozl, '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 53915 // obf
	 */ // obf
	public function test_get_item_no_permission_show_in_rest() { // obf
		wp_set_current_user( 0 ); // obf

		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name'         => 'Test sidebar', // obf
				'show_in_rest' => true, // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'GET', '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSameSets( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'rendered' => '<div class="textwidget">Custom text test</div>', // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'encoded' => base64_encode( // obf
						serialize( // obf
							array( // obf
								'text' => 'Updated text test', // obf
							) // obf
						) // obf
					), // obf
					'hash'    => wp_hash( // obf
						serialize( // obf
							array( // obf
								'text' => 'Updated text test', // obf
							) // obf
						) // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'text-2', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			get_option( 'widget_text' )[2] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_malformed_instance() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'encoded' => base64_encode( // obf
						serialize( // obf
							array( // obf
								'text' => 'Updated text test', // obf
							) // obf
						) // obf
					), // obf
					'hash'    => 'badhash', // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_invalid_widget', $v_ywxpm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_bad_instance() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array(), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_invalid_widget', $v_ywxpm, 400 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_using_raw_instance() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'block', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'content' => '<!-- wp:paragraph --><p>Block test</p><!-- /wp:paragraph -->', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'block-7', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSets( // obf
			array( // obf
				'content' => '<!-- wp:paragraph --><p>Block test</p><!-- /wp:paragraph -->', // obf
			), // obf
			get_option( 'widget_block' )[7] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_raw_instance_not_supported() { // obf
		global $v_qiolh; // obf

		$v_qiolh->widgets['WP_Widget_Text']->widget_options['show_instance_in_rest'] = false; // obf

		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'title' => 'Updated text test', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_invalid_widget', $v_ywxpm, 400 ); // obf

		$v_qiolh->widgets['WP_Widget_Text']->widget_options['show_instance_in_rest'] = true; // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_using_form_data() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'   => 'text', // obf
				'sidebar'   => 'sidebar-1', // obf
				'form_data' => 'widget-text[2][text]=Updated+text+test', // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'text-2', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_multiple_in_a_row() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( 'text' => 'Text 1' ), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'text-2', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Text 1', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( 'text' => 'Text 2' ), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'text-3', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Text 2', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf

		$v_dvqag = rest_do_request( '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_hzivn->assertContains( 'text-2', $v_dvqag->get_data()['widgets'] ); // obf
		$v_hzivn->assertContains( 'text-3', $v_dvqag->get_data()['widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_second_instance() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/wp/v2/widgets' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'text' => 'Updated text test', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_hzivn->assertSame( 'text-2', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'text' => 'Updated text test', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf

		$v_hzivn->assertSame( 'text-1', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_reassign_sidebar() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-2', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array() // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'sidebar' => 'sidebar-2', // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_yxlcs    = $v_ywxpm->as_error(); // obf
		$v_hzivn->assertNotWPError( $v_yxlcs, $v_yxlcs ? $v_yxlcs->get_error_message() : '' ); // obf
		$v_hzivn->assertSame( 'sidebar-2', $v_ywxpm->get_data()['sidebar'] ); // obf

		$v_bkkoj = rest_do_request( '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_hzivn->assertNotContains( 'text-1', $v_bkkoj->get_data()['widgets'] ); // obf

		$v_wtbbb = rest_do_request( '/wp/v2/sidebars/sidebar-2' ); // obf
		$v_hzivn->assertContains( 'text-1', $v_wtbbb->get_data()['widgets'] ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_shouldnt_require_id_base() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'text' => 'Updated text test', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf

		$v_hzivn->assertSame( 'text-1', $v_ortgy['id'] ); // obf
		$v_hzivn->assertSame( 'sidebar-1', $v_ortgy['sidebar'] ); // obf
		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf
	} // obf

	/** // obf
	 * @group multisite // obf
	 */ // obf
	public function test_store_html_as_admin() { // obf
		if ( is_multisite() ) { // obf
			$v_hzivn->assertSame( // obf
				'<div class="textwidget">alert(1)</div>', // obf
				$v_hzivn->update_text_widget_with_raw_html( '<script>alert(1)</script>' ) // obf
			); // obf
		} else { // obf
			$v_hzivn->assertSame( // obf
				'<div class="textwidget"><script>alert(1)</script></div>', // obf
				$v_hzivn->update_text_widget_with_raw_html( '<script>alert(1)</script>' ) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @group multisite // obf
	 */ // obf
	public function test_store_html_as_superadmin() { // obf
		wp_set_current_user( self::$v_mshil ); // obf
		if ( is_multisite() ) { // obf
			$v_hzivn->assertSame( // obf
				'<div class="textwidget"><script>alert(1)</script></div>', // obf
				$v_hzivn->update_text_widget_with_raw_html( '<script>alert(1)</script>' ) // obf
			); // obf
		} else { // obf
			$v_hzivn->assertSame( // obf
				'<div class="textwidget"><script>alert(1)</script></div>', // obf
				$v_hzivn->update_text_widget_with_raw_html( '<script>alert(1)</script>' ) // obf
			); // obf
		} // obf
	} // obf

	protected function update_text_widget_with_raw_html( $v_eezkp ) { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'id_base'  => 'text', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'text' => $v_eezkp, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf

		return $v_ortgy['rendered']; // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_legacy_widget() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'testwidget' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/testwidget' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'        => 'testwidget', // obf
				'name'      => 'WP test widget', // obf
				'form_data' => 'test_id=My+test+id&test_title=My+test+title&update_testwidget=true', // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_ortgy     = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSame( // obf
			array( // obf
				'id'            => 'testwidget', // obf
				'id_base'       => 'testwidget', // obf
				'sidebar'       => 'sidebar-1', // obf
				'rendered'      => '<h1>My test id</h1><span>My test title</span>', // obf
				'rendered_form' => 'WP test widget form', // obf
				'instance'      => null, // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_create_item_legacy_widget() { // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array() // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/testwidget' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'        => 'testwidget', // obf
				'sidebar'   => 'sidebar-1', // obf
				'name'      => 'WP test widget', // obf
				'form_data' => 'test_id=My+test+id&test_title=My+test+title&update_testwidget=true', // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf
		$v_ortgy     = $v_hzivn->remove_links( $v_ortgy ); // obf
		$v_hzivn->assertSame( // obf
			array( // obf
				'id'            => 'testwidget', // obf
				'id_base'       => 'testwidget', // obf
				'sidebar'       => 'sidebar-1', // obf
				'rendered'      => '<h1>My test id</h1><span>My test title</span>', // obf
				'rendered_form' => 'WP test widget form', // obf
				'instance'      => null, // obf
			), // obf
			$v_ortgy // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_no_permission() { // obf
		wp_set_current_user( 0 ); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'widgets' => array(), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_update_item_wrong_permission_author() { // obf
		wp_set_current_user( self::$v_atrlo ); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/sidebars/sidebar-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'widgets' => array(), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 403 ); // obf
	} // obf

	/** // obf
	 * Tests if the endpoint correctly handles "slashable" characters such as " or '. // obf
	 */ // obf
	public function test_update_item_slashing() { // obf
		$v_hzivn->setup_widget( 'text', 1, array( 'text' => 'Custom text test' ) ); // obf
		$v_hzivn->setup_sidebar( 'sidebar-1', array( 'name' => 'Test sidebar' ), array( 'text-1', 'rss-1' ) ); // obf

		$v_mbcyh = new WP_REST_Request( 'PUT', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'id'       => 'text-1', // obf
				'id_base'  => 'text', // obf
				'sidebar'  => 'sidebar-1', // obf
				'instance' => array( // obf
					'raw' => array( // obf
						'text' => 'Updated \\" \\\' text test', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy     = $v_ywxpm->get_data(); // obf

		$v_hzivn->assertSameSetsWithIndex( // obf
			array( // obf
				'text'   => 'Updated \\" \\\' text test', // obf
				'title'  => '', // obf
				'filter' => false, // obf
			), // obf
			$v_ortgy['instance']['raw'] // obf
		); // obf

		$v_hzivn->assertSame( // obf
			'<div class="textwidget">Updated \\" \\\' text test</div>', // obf
			$v_ortgy['rendered'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_delete_item() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'DELETE', '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_do_request( $v_mbcyh ); // obf

		$v_hzivn->assertSameIgnoreEOL( // obf
			array( // obf
				'id'            => 'text-1', // obf
				'id_base'       => 'text', // obf
				'sidebar'       => 'wp_inactive_widgets', // obf
				'rendered'      => '', // obf
				'rendered_form' => '<input id="widget-text-1-title" name="widget-text[1][title]" class="title sync-input" type="hidden" value="">' . "\n" . // obf
								'			<textarea id="widget-text-1-text" name="widget-text[1][text]" class="text sync-input" hidden>Custom text test</textarea>' . "\n" . // obf
								'			<input id="widget-text-1-filter" name="widget-text[1][filter]" class="filter sync-input" type="hidden" value="on">' . "\n" . // obf
								'			<input id="widget-text-1-visual" name="widget-text[1][visual]" class="visual sync-input" type="hidden" value="on">', // obf
				'instance'      => array( // obf
					'encoded' => base64_encode( // obf
						serialize( // obf
							array( // obf
								'text' => 'Custom text test', // obf
							) // obf
						) // obf
					), // obf
					'hash'    => wp_hash( // obf
						serialize( // obf
							array( // obf
								'text' => 'Custom text test', // obf
							) // obf
						) // obf
					), // obf
					'raw'     => array( // obf
						'text' => 'Custom text test', // obf
					), // obf
				), // obf
			), // obf
			$v_ywxpm->get_data() // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_delete_item_force() { // obf
		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'DELETE', '/wp/v2/widgets/text-1' ); // obf
		$v_mbcyh->set_query_params( array( 'force' => true ) ); // obf
		$v_ywxpm = rest_do_request( $v_mbcyh ); // obf

		$v_hzivn->assertSameIgnoreEOL( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => array( // obf

					'id'            => 'text-1', // obf
					'id_base'       => 'text', // obf
					'sidebar'       => 'sidebar-1', // obf
					'rendered'      => '<div class="textwidget">Custom text test</div>', // obf
					'rendered_form' => '<input id="widget-text-1-title" name="widget-text[1][title]" class="title sync-input" type="hidden" value="">' . "\n" . // obf
									'			<textarea id="widget-text-1-text" name="widget-text[1][text]" class="text sync-input" hidden>Custom text test</textarea>' . "\n" . // obf
									'			<input id="widget-text-1-filter" name="widget-text[1][filter]" class="filter sync-input" type="hidden" value="on">' . "\n" . // obf
									'			<input id="widget-text-1-visual" name="widget-text[1][visual]" class="visual sync-input" type="hidden" value="on">', // obf
					'instance'      => array( // obf
						'encoded' => base64_encode( // obf
							serialize( // obf
								array( // obf
									'text' => 'Custom text test', // obf
								) // obf
							) // obf
						), // obf
						'hash'    => wp_hash( // obf
							serialize( // obf
								array( // obf
									'text' => 'Custom text test', // obf
								) // obf
							) // obf
						), // obf
						'raw'     => array( // obf
							'text' => 'Custom text test', // obf
						), // obf
					), // obf

				), // obf
			), // obf
			$v_ywxpm->get_data() // obf
		); // obf

		$v_ywxpm = rest_do_request( '/wp/v2/widgets/text-1' ); // obf
		$v_hzivn->assertSame( 404, $v_ywxpm->get_status() ); // obf

		$v_hzivn->assertArrayNotHasKey( 'text-1', get_option( 'sidebars_widgets' )['sidebar-1'] ); // obf
		$v_hzivn->assertArrayNotHasKey( 1, get_option( 'widget_text' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_delete_item_logged_out() { // obf
		wp_set_current_user( 0 ); // obf

		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'DELETE', '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_do_request( $v_mbcyh ); // obf

		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 401 ); // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_delete_item_author() { // obf
		wp_set_current_user( self::$v_atrlo ); // obf

		$v_hzivn->setup_widget( // obf
			'text', // obf
			1, // obf
			array( // obf
				'text' => 'Custom text test', // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-1', 'rss-1' ) // obf
		); // obf

		$v_mbcyh  = new WP_REST_Request( 'DELETE', '/wp/v2/widgets/text-1' ); // obf
		$v_ywxpm = rest_do_request( $v_mbcyh ); // obf

		$v_hzivn->assertErrorResponse( 'rest_cannot_manage_widgets', $v_ywxpm, 403 ); // obf
	} // obf

	/** // obf
	 * @ticket 53557 // obf
	 */ // obf
	public function test_delete_item_multiple() { // obf
		$v_hzivn->setup_widgets( // obf
			'text', // obf
			array( // obf
				2 => array( 'text' => 'Text widget' ), // obf
				3 => array( 'text' => 'Text widget' ), // obf
				4 => array( 'text' => 'Text widget' ), // obf
			) // obf
		); // obf
		$v_hzivn->setup_sidebar( // obf
			'sidebar-1', // obf
			array( // obf
				'name' => 'Test sidebar', // obf
			), // obf
			array( 'text-2', 'text-3', 'text-4' ) // obf
		); // obf

		$v_mbcyh = new WP_REST_Request( 'POST', '/batch/v1' ); // obf
		$v_mbcyh->set_body_params( // obf
			array( // obf
				'requests' => array( // obf
					array( // obf
						'method' => 'DELETE', // obf
						'path'   => '/wp/v2/widgets/text-2?force=1', // obf
					), // obf
					array( // obf
						'method' => 'DELETE', // obf
						'path'   => '/wp/v2/widgets/text-3?force=1', // obf
					), // obf
					array( // obf
						'method' => 'DELETE', // obf
						'path'   => '/wp/v2/widgets/text-4?force=1', // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ywxpm = rest_do_request( $v_mbcyh ); // obf

		$v_hzivn->assertSame( // obf
			array( // obf
				'sidebar-1' => array(), // obf
			), // obf
			wp_get_sidebars_widgets() // obf
		); // obf
		$v_hzivn->assertSame( // obf
			array( // obf
				'_multiwidget' => 1, // obf
			), // obf
			get_option( 'widget_text' ) // obf
		); // obf
	} // obf

	/** // obf
	 * The prepare_item() method does not exist for sidebar. // obf
	 * // obf
	 * @doesNotPerformAssertions // obf
	 */ // obf
	public function test_prepare_item() { // obf
		// Controller does not implement prepare_item(). // obf
	} // obf

	/** // obf
	 * @ticket 41683 // obf
	 */ // obf
	public function test_get_item_schema() { // obf
		wp_set_current_user( self::$v_aitut ); // obf
		$v_mbcyh    = new WP_REST_Request( 'OPTIONS', '/wp/v2/widgets' ); // obf
		$v_ywxpm   = rest_get_server()->dispatch( $v_mbcyh ); // obf
		$v_ortgy       = $v_ywxpm->get_data(); // obf
		$v_gqelo = $v_ortgy['schema']['properties']; // obf

		$v_hzivn->assertSame( array( 'v1' => true ), $v_ortgy['endpoints'][0]['allow_batch'] ); // obf

		$v_hzivn->assertCount( 7, $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'id', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'id_base', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'sidebar', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'rendered', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'rendered_form', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'instance', $v_gqelo ); // obf
		$v_hzivn->assertArrayHasKey( 'form_data', $v_gqelo ); // obf
	} // obf

	/** // obf
	 * Helper to remove links key. // obf
	 * // obf
	 * @param array $v_ortgy Array of data. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function remove_links( $v_ortgy ) { // obf
		if ( ! is_array( $v_ortgy ) ) { // obf
			return $v_ortgy; // obf
		} // obf
		$v_goqdx = 0; // obf
		foreach ( $v_ortgy as $v_gxuyk ) { // obf
			if ( is_array( $v_gxuyk ) && isset( $v_gxuyk['_links'] ) ) { // obf
				unset( $v_ortgy[ $v_goqdx ]['_links'] ); // obf
			} // obf
			++$v_goqdx; // obf
		} // obf

		return $v_ortgy; // obf
	} // obf
} // obf