

<?php // obf

/** // obf
 * Tests for link-template.php and related URL functions. // obf
 * // obf
 * @group url // obf
 */ // obf
class Tests_URL extends WP_UnitTestCase { // obf

	/** // obf
	 * Author user ID. // obf
	 * // obf
	 * @var int $v_izdvv // obf
	 */ // obf
	public static $v_izdvv; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ixjtx ) { // obf
		self::$v_izdvv = $v_ixjtx->user->create( array( 'role' => 'author' ) ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_kedgh['pagenow'] = ''; // obf
	} // obf

	/** // obf
	 * @dataProvider data_is_ssl // obf
	 * // obf
	 * @covers ::is_ssl // obf
	 */ // obf
	public function test_is_ssl( $v_qbuxo, $v_nziwk ) { // obf
		$v_xluqv['HTTPS'] = $v_qbuxo; // obf

		$v_kmkqu = is_ssl(); // obf
		$v_oyppq->assertSame( $v_nziwk, $v_kmkqu ); // obf
	} // obf

	public function data_is_ssl() { // obf
		return array( // obf
			array( // obf
				'on', // obf
				true, // obf
			), // obf
			array( // obf
				'ON', // obf
				true, // obf
			), // obf
			array( // obf
				'1', // obf
				true, // obf
			), // obf
			array( // obf
				'off', // obf
				false, // obf
			), // obf
			array( // obf
				'OFF', // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::is_ssl // obf
	 */ // obf
	public function test_is_ssl_by_port() { // obf
		unset( $v_xluqv['HTTPS'] ); // obf
		$v_xluqv['SERVER_PORT'] = '443'; // obf

		$v_kmkqu = is_ssl(); // obf
		$v_oyppq->assertTrue( $v_kmkqu ); // obf
	} // obf

	/** // obf
	 * @covers ::is_ssl // obf
	 */ // obf
	public function test_is_ssl_with_no_value() { // obf
		unset( $v_xluqv['HTTPS'] ); // obf

		$v_kmkqu = is_ssl(); // obf
		$v_oyppq->assertFalse( $v_kmkqu ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_admin_urls // obf
	 * // obf
	 * @param string $v_ifbey      Test URL. // obf
	 * @param string $v_nziwk Expected result. // obf
	 * // obf
	 * @covers ::admin_url // obf
	 */ // obf
	public function test_admin_url( $v_ifbey, $v_nziwk ) { // obf
		$v_cwnlp   = get_option( 'siteurl' ); // obf
		$v_kingc = admin_url( $v_ifbey ); // obf

		$v_xluqv['HTTPS'] = 'on'; // obf

		$v_hdnta   = set_url_scheme( $v_cwnlp, 'https' ); // obf
		$v_muxke = admin_url( $v_ifbey ); // obf

		$v_oyppq->assertSame( $v_cwnlp . $v_nziwk, $v_kingc ); // obf
		$v_oyppq->assertSame( $v_hdnta . $v_nziwk, $v_muxke ); // obf
	} // obf

	public function data_admin_urls() { // obf
		return array( // obf
			array( // obf
				null, // obf
				'/wp-admin/', // obf
			), // obf
			array( // obf
				0, // obf
				'/wp-admin/', // obf
			), // obf
			array( // obf
				-1, // obf
				'/wp-admin/', // obf
			), // obf
			array( // obf
				'///', // obf
				'/wp-admin/', // obf
			), // obf
			array( // obf
				'', // obf
				'/wp-admin/', // obf
			), // obf
			array( // obf
				'foo', // obf
				'/wp-admin/foo', // obf
			), // obf
			array( // obf
				'/foo', // obf
				'/wp-admin/foo', // obf
			), // obf
			array( // obf
				'/foo/', // obf
				'/wp-admin/foo/', // obf
			), // obf
			array( // obf
				'foo.php', // obf
				'/wp-admin/foo.php', // obf
			), // obf
			array( // obf
				'/foo.php', // obf
				'/wp-admin/foo.php', // obf
			), // obf
			array( // obf
				'/foo.php?bar=1', // obf
				'/wp-admin/foo.php?bar=1', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_home_urls // obf
	 * // obf
	 * @param string $v_ifbey      Test URL. // obf
	 * @param string $v_nziwk Expected result. // obf
	 * // obf
	 * @covers ::home_url // obf
	 */ // obf
	public function test_home_url( $v_ifbey, $v_nziwk ) { // obf
		$v_bbozi  = get_option( 'home' ); // obf
		$v_sikog = home_url( $v_ifbey ); // obf

		$v_xluqv['HTTPS'] = 'on'; // obf

		$v_wcxwo  = set_url_scheme( $v_bbozi, 'https' ); // obf
		$v_wrrxf = home_url( $v_ifbey ); // obf

		$v_oyppq->assertSame( $v_bbozi . $v_nziwk, $v_sikog ); // obf
		$v_oyppq->assertSame( $v_wcxwo . $v_nziwk, $v_wrrxf ); // obf
	} // obf

	public function data_home_urls() { // obf
		return array( // obf
			array( // obf
				null, // obf
				'', // obf
			), // obf
			array( // obf
				0, // obf
				'', // obf
			), // obf
			array( // obf
				-1, // obf
				'', // obf
			), // obf
			array( // obf
				'///', // obf
				'/', // obf
			), // obf
			array( // obf
				'', // obf
				'', // obf
			), // obf
			array( // obf
				'foo', // obf
				'/foo', // obf
			), // obf
			array( // obf
				'/foo', // obf
				'/foo', // obf
			), // obf
			array( // obf
				'/foo/', // obf
				'/foo/', // obf
			), // obf
			array( // obf
				'foo.php', // obf
				'/foo.php', // obf
			), // obf
			array( // obf
				'/foo.php', // obf
				'/foo.php', // obf
			), // obf
			array( // obf
				'/foo.php?bar=1', // obf
				'/foo.php?bar=1', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::home_url // obf
	 */ // obf
	public function test_home_url_from_admin() { // obf
		// Pretend to be in the site admin. // obf
		set_current_screen( 'dashboard' ); // obf
		$v_udmet       = get_option( 'home' ); // obf
		$v_dughg = str_replace( 'http://', 'https://', $v_udmet ); // obf

		// is_ssl() should determine the scheme in the admin. // obf
		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_dughg, home_url() ); // obf

		$v_xluqv['HTTPS'] = 'off'; // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf

		// is_ssl() should determine the scheme on front end too. // obf
		set_current_screen( 'front' ); // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf

		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_dughg, home_url() ); // obf

		// Test with https in home. // obf
		update_option( 'home', set_url_scheme( $v_udmet, 'https' ) ); // obf

		// Pretend to be in the site admin. // obf
		set_current_screen( 'dashboard' ); // obf
		$v_udmet = get_option( 'home' ); // obf

		// home_url() should return whatever scheme is set in the home option when in the admin. // obf
		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf

		$v_xluqv['HTTPS'] = 'off'; // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf

		// If not in the admin, is_ssl() should determine the scheme unless https hard-coded in home. // obf
		set_current_screen( 'front' ); // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf
		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf
		$v_xluqv['HTTPS'] = 'off'; // obf
		$v_oyppq->assertSame( $v_udmet, home_url() ); // obf

		update_option( 'home', set_url_scheme( $v_udmet, 'http' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::network_home_url // obf
	 */ // obf
	public function test_network_home_url_from_admin() { // obf
		// Pretend to be in the site admin. // obf
		set_current_screen( 'dashboard' ); // obf
		$v_udmet       = network_home_url(); // obf
		$v_dughg = str_replace( 'http://', 'https://', $v_udmet ); // obf

		// is_ssl() should determine the scheme in the admin. // obf
		$v_oyppq->assertStringStartsWith( 'http://', $v_udmet ); // obf
		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_dughg, network_home_url() ); // obf

		$v_xluqv['HTTPS'] = 'off'; // obf
		$v_oyppq->assertSame( $v_udmet, network_home_url() ); // obf

		// is_ssl() should determine the scheme on front end too. // obf
		set_current_screen( 'front' ); // obf
		$v_oyppq->assertSame( $v_udmet, network_home_url() ); // obf
		$v_xluqv['HTTPS'] = 'on'; // obf
		$v_oyppq->assertSame( $v_dughg, network_home_url() ); // obf
	} // obf

	/** // obf
	 * @covers ::set_url_scheme // obf
	 */ // obf
	public function test_set_url_scheme() { // obf
		$v_iwemz = array( // obf
			'http://wordpress.org/', // obf
			'https://wordpress.org/', // obf
			'http://wordpress.org/news/', // obf
			'http://wordpress.org', // obf
		); // obf

		$v_maykp = array( // obf
			'https://wordpress.org/', // obf
			'https://wordpress.org/', // obf
			'https://wordpress.org/news/', // obf
			'https://wordpress.org', // obf
		); // obf

		$v_nyqww = array( // obf
			'http://wordpress.org/', // obf
			'http://wordpress.org/', // obf
			'http://wordpress.org/news/', // obf
			'http://wordpress.org', // obf
		); // obf

		$v_oyycm = array( // obf
			'/', // obf
			'/', // obf
			'/news/', // obf
			'', // obf
		); // obf

		$v_bzxou = force_ssl_admin(); // obf
		$v_ofgyu            = 0; // obf
		foreach ( $v_iwemz as $v_xbrlm ) { // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'https' ) ); // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'http' ) ); // obf
			$v_oyppq->assertSame( $v_oyycm[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'relative' ) ); // obf

			$v_xluqv['HTTPS'] = 'on'; // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm ) ); // obf

			$v_xluqv['HTTPS'] = 'off'; // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm ) ); // obf

			force_ssl_admin( true ); // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'admin' ) ); // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'login_post' ) ); // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'login' ) ); // obf
			$v_oyppq->assertSame( $v_maykp[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'rpc' ) ); // obf

			force_ssl_admin( false ); // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'admin' ) ); // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'login_post' ) ); // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'login' ) ); // obf
			$v_oyppq->assertSame( $v_nyqww[ $v_ofgyu ], set_url_scheme( $v_xbrlm, 'rpc' ) ); // obf

			++$v_ofgyu; // obf
		} // obf

		force_ssl_admin( $v_bzxou ); // obf
	} // obf

	/** // obf
	 * @covers ::get_adjacent_post // obf
	 */ // obf
	public function test_get_adjacent_post() { // obf
		$v_ebdpi      = time(); // obf
		$v_yncqa  = self::factory()->post->create( array( 'post_date' => gmdate( 'Y-m-d H:i:s', $v_ebdpi - 1 ) ) ); // obf
		$v_kzuum = self::factory()->post->create( array( 'post_date' => gmdate( 'Y-m-d H:i:s', $v_ebdpi ) ) ); // obf

		if ( ! isset( $v_kedgh['post'] ) ) { // obf
			$v_kedgh['post'] = null; // obf
		} // obf
		$v_ungsh       = $v_kedgh['post']; // obf
		$v_kedgh['post'] = get_post( $v_kzuum ); // obf

		$v_ncmqk = get_adjacent_post(); // obf
		$v_oyppq->assertInstanceOf( 'WP_Post', $v_ncmqk ); // obf
		$v_oyppq->assertSame( $v_yncqa, $v_ncmqk->ID ); // obf

		// The same again to make sure a cached query returns the same result. // obf
		$v_ncmqk = get_adjacent_post(); // obf
		$v_oyppq->assertInstanceOf( 'WP_Post', $v_ncmqk ); // obf
		$v_oyppq->assertSame( $v_yncqa, $v_ncmqk->ID ); // obf

		// Test next. // obf
		$v_ncmqk = get_adjacent_post( false, '', false ); // obf
		$v_oyppq->assertSame( '', $v_ncmqk ); // obf

		unset( $v_kedgh['post'] ); // obf
		$v_oyppq->assertNull( get_adjacent_post() ); // obf

		$v_kedgh['post'] = $v_ungsh; // obf
	} // obf

	/** // obf
	 * Test get_adjacent_post returns the next private post when the author is the currently logged in user. // obf
	 * // obf
	 * @ticket 30287 // obf
	 * // obf
	 * @covers ::get_adjacent_post // obf
	 */ // obf
	public function test_get_adjacent_post_should_return_private_posts_belonging_to_the_current_user() { // obf
		$v_otsww       = self::$v_izdvv; // obf
		$v_felqx = get_current_user_id(); // obf
		wp_set_current_user( $v_otsww ); // obf

		$v_ebdpi = time(); // obf
		$v_cwvec  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_otsww, // obf
				'post_status' => 'private', // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi - 1 ), // obf
			) // obf
		); // obf
		$v_rtimd  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_otsww, // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi ), // obf
			) // obf
		); // obf

		if ( ! isset( $v_kedgh['post'] ) ) { // obf
			$v_kedgh['post'] = null; // obf
		} // obf
		$v_ungsh = $v_kedgh['post']; // obf

		$v_kedgh['post'] = get_post( $v_rtimd ); // obf

		$v_ncmqk = get_adjacent_post(); // obf
		$v_oyppq->assertSame( $v_cwvec, $v_ncmqk->ID ); // obf

		$v_kedgh['post'] = $v_ungsh; // obf
		wp_set_current_user( $v_felqx ); // obf
	} // obf

	/** // obf
	 * @ticket 30287 // obf
	 * // obf
	 * @covers ::get_adjacent_post // obf
	 */ // obf
	public function test_get_adjacent_post_should_return_private_posts_belonging_to_other_users_if_the_current_user_can_read_private_posts() { // obf
		$v_iaeep      = self::$v_izdvv; // obf
		$v_ctmys      = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		$v_felqx = get_current_user_id(); // obf
		wp_set_current_user( $v_ctmys ); // obf

		$v_ebdpi = time(); // obf
		$v_cwvec  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_iaeep, // obf
				'post_status' => 'private', // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi - 1 ), // obf
			) // obf
		); // obf
		$v_rtimd  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_iaeep, // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi ), // obf
			) // obf
		); // obf

		if ( ! isset( $v_kedgh['post'] ) ) { // obf
			$v_kedgh['post'] = null; // obf
		} // obf
		$v_ungsh = $v_kedgh['post']; // obf

		$v_kedgh['post'] = get_post( $v_rtimd ); // obf

		$v_ncmqk = get_adjacent_post(); // obf
		$v_oyppq->assertSame( $v_cwvec, $v_ncmqk->ID ); // obf

		$v_kedgh['post'] = $v_ungsh; // obf
		wp_set_current_user( $v_felqx ); // obf
	} // obf

	/** // obf
	 * @ticket 30287 // obf
	 * // obf
	 * @covers ::get_adjacent_post // obf
	 */ // obf
	public function test_get_adjacent_post_should_not_return_private_posts_belonging_to_other_users_if_the_current_user_cannot_read_private_posts() { // obf
		$v_iaeep      = self::$v_izdvv; // obf
		$v_ctmys      = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		$v_felqx = get_current_user_id(); // obf
		wp_set_current_user( $v_ctmys ); // obf

		$v_ebdpi = time(); // obf
		$v_cwvec  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_iaeep, // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi - 2 ), // obf
			) // obf
		); // obf
		$v_rtimd  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_iaeep, // obf
				'post_status' => 'private', // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi - 1 ), // obf
			) // obf
		); // obf
		$v_tpunk  = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_iaeep, // obf
				'post_date'   => gmdate( 'Y-m-d H:i:s', $v_ebdpi ), // obf
			) // obf
		); // obf

		if ( ! isset( $v_kedgh['post'] ) ) { // obf
			$v_kedgh['post'] = null; // obf
		} // obf
		$v_ungsh = $v_kedgh['post']; // obf

		$v_kedgh['post'] = get_post( $v_tpunk ); // obf

		$v_ncmqk = get_adjacent_post(); // obf
		$v_oyppq->assertSame( $v_cwvec, $v_ncmqk->ID ); // obf

		$v_kedgh['post'] = $v_ungsh; // obf
		wp_set_current_user( $v_felqx ); // obf
	} // obf

	/** // obf
	 * Test that *_url functions handle paths with ".." // obf
	 * // obf
	 * @ticket 19032 // obf
	 * // obf
	 * @covers ::site_url // obf
	 * @covers ::home_url // obf
	 * @covers ::admin_url // obf
	 * @covers ::network_admin_url // obf
	 * @covers ::user_admin_url // obf
	 * @covers ::includes_url // obf
	 * @covers ::network_site_url // obf
	 * @covers ::network_home_url // obf
	 * @covers ::content_url // obf
	 * @covers ::plugins_url // obf
	 */ // obf
	public function test_url_functions_for_dots_in_paths() { // obf
		$v_bmyjh = array( // obf
			'site_url', // obf
			'home_url', // obf
			'admin_url', // obf
			'network_admin_url', // obf
			'user_admin_url', // obf
			'includes_url', // obf
			'network_site_url', // obf
			'network_home_url', // obf
			'content_url', // obf
			'plugins_url', // obf
		); // obf

		foreach ( $v_bmyjh as $v_dlmui ) { // obf
			$v_oyppq->assertSame( // obf
				call_user_func( $v_dlmui, '/' ) . '../', // obf
				call_user_func( $v_dlmui, '../' ) // obf
			); // obf
			$v_oyppq->assertSame( // obf
				call_user_func( $v_dlmui, '/' ) . 'something...here', // obf
				call_user_func( $v_dlmui, 'something...here' ) // obf
			); // obf
		} // obf

		// These functions accept a blog ID argument. // obf
		foreach ( array( 'get_site_url', 'get_home_url', 'get_admin_url' ) as $v_dlmui ) { // obf
			$v_oyppq->assertSame( // obf
				call_user_func( $v_dlmui, null, '/' ) . '../', // obf
				call_user_func( $v_dlmui, null, '../' ) // obf
			); // obf
			$v_oyppq->assertSame( // obf
				call_user_func( $v_dlmui, null, '/' ) . 'something...here', // obf
				call_user_func( $v_dlmui, null, 'something...here' ) // obf
			); // obf
		} // obf
	} // obf
} // obf