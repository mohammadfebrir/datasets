

<?php // obf
/** // obf
 * Testing Ajax customize menus functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.3.0 // obf
 * // obf
 * @group ajax // obf
 */ // obf
class Tests_Ajax_wpCustomizeNavMenus extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * Instance of WP_Customize_Manager which is reset for each test. // obf
	 * // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_rjbnp; // obf

	/** // obf
	 * Page IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_tcxvl; // obf

	/** // obf
	 * Post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_bxslm; // obf

	/** // obf
	 * Term IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_lykcv; // obf


	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_fxmnw = 0; // obf

	/** // obf
	 * User IDs keyed by role. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_zznwt = array(); // obf

	/** // obf
	 * Set up shared fixtures. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_rxlor The factory. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rxlor ) { // obf
		// Make some post objects. // obf
		self::$v_bxslm = $v_rxlor->post->create_many( 5 ); // obf
		self::$v_tcxvl = $v_rxlor->post->create_many( 5, array( 'post_type' => 'page' ) ); // obf

		// Some terms too. // obf
		self::$v_lykcv = $v_rxlor->term->create_many( 5 ); // obf

		// Create an admin user. // obf
		self::$v_fxmnw = $v_rxlor->user->create( array( 'role' => 'administrator' ) ); // obf

		foreach ( array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' ) as $v_klldf ) { // obf
			self::$v_zznwt[ $v_klldf ] = $v_rxlor->user->create( array( 'role' => $v_klldf ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Set up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		wp_set_current_user( self::$v_fxmnw ); // obf
		global $v_rjbnp; // obf
		$v_sykfh->wp_customize = new WP_Customize_Manager(); // obf
		$v_rjbnp       = $v_sykfh->wp_customize; // obf
	} // obf

	/** // obf
	 * Helper to keep it DRY // obf
	 * // obf
	 * @param string $v_smgjt Action. // obf
	 */ // obf
	protected function make_ajax_call( $v_smgjt ) { // obf
		// Make the request. // obf
		try { // obf
			$v_sykfh->_handleAjax( $v_smgjt ); // obf
		} catch ( WPAjaxDieContinueException $v_zpsbf ) { // obf
			unset( $v_zpsbf ); // obf
		} // obf
	} // obf

	/** // obf
	 * Testing capabilities check for ajax_load_available_items method // obf
	 * // obf
	 * @dataProvider data_ajax_load_available_items_cap_check // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_load_available_items // obf
	 * // obf
	 * @param string $v_klldf              The role we're checking caps against. // obf
	 * @param array  $v_wqemu  Expected results. // obf
	 */ // obf
	public function test_ajax_load_available_items_cap_check( $v_klldf, $v_wqemu ) { // obf

		if ( 'administrator' !== $v_klldf ) { // obf
			// If we're not an admin, we should get a wp_die( -1 ). // obf
			$v_sykfh->expectException( 'WPAjaxDieStopException' ); // obf
			$v_sykfh->expectExceptionMessage( '-1' ); // obf
		} // obf

		wp_set_current_user( self::$v_zznwt[ $v_klldf ] ); // obf

		$v_aatvq = array( // obf
			'action'                => 'load-available-menu-items-customizer', // obf
			'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
		); // obf

		$v_sykfh->make_ajax_call( 'load-available-menu-items-customizer' ); // obf

		// If we are an admin, we should get a proper response. // obf
		if ( 'administrator' === $v_klldf ) { // obf
			// Get the results. // obf
			$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

			$v_sykfh->assertSame( $v_wqemu, $v_ppjtt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_load_available_items_cap_check(). // obf
	 * // obf
	 * Provides various post_args to induce error messages in the that can be // obf
	 * compared to the expected_results. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_klldf             The role that will test caps for. // obf
	 *         @type array  $v_wqemu The expected results from the Ajax call. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_load_available_items_cap_check() { // obf
		return array( // obf
			array( // obf
				'subscriber', // obf
				array(), // obf
			), // obf
			array( // obf
				'contributor', // obf
				array(), // obf
			), // obf
			array( // obf
				'author', // obf
				array(), // obf
			), // obf
			array( // obf
				'editor', // obf
				array(), // obf
			), // obf
			array( // obf
				'administrator', // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_type_or_object_parameter', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the error messaging for ajax_load_available_items // obf
	 * // obf
	 * @dataProvider data_ajax_load_available_items_error_messages // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_load_available_items // obf
	 * // obf
	 * @param array $v_makfb POST args. // obf
	 * @param mixed $v_wqemu Expected results. // obf
	 */ // obf
	public function test_ajax_load_available_items_error_messages( $v_makfb, $v_wqemu ) { // obf

		$v_aatvq = array_merge( // obf
			array( // obf
				'action'                => 'load-available-menu-items-customizer', // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			), // obf
			$v_makfb // obf
		); // obf

		// Make the request. // obf
		$v_sykfh->make_ajax_call( 'load-available-menu-items-customizer' ); // obf

		// Get the results. // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

		$v_sykfh->assertSame( $v_wqemu, $v_ppjtt ); // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_load_available_items_error_message(). // obf
	 * // obf
	 * Provides various post_args to induce error messages in the that can be // obf
	 * compared to the expected_results. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type array $v_makfb        The arguments that will merged with the $v_aatvq array. // obf
	 *         @type array $v_wqemu The expected results from the Ajax call. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_load_available_items_error_messages() { // obf
		return array( // obf
			// Testing empty obj_type and type. // obf
			array( // obf
				array( // obf
					'type'   => '', // obf
					'object' => '', // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_type_or_object_parameter', // obf
				), // obf
			), // obf
			// Testing empty obj_type. // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => '', // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_type_or_object_parameter', // obf
				), // obf
			), // obf
			// Testing empty type. // obf
			array( // obf
				array( // obf
					'type'   => '', // obf
					'object' => 'post', // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_type_or_object_parameter', // obf
				), // obf
			), // obf
			// Testing empty type of a bulk request. // obf
			array( // obf
				array( // obf
					'item_types' => array( // obf
						array( // obf
							'type'   => 'post_type', // obf
							'object' => 'post', // obf
						), // obf
						array( // obf
							'type'   => 'post_type', // obf
							'object' => '', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_type_or_object_parameter', // obf
				), // obf
			), // obf
			// Testing incorrect type option. // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'invalid', // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_invalid_post_type', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the success status. // obf
	 * // obf
	 * @dataProvider data_ajax_load_available_items_success_status // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_load_available_items // obf
	 * // obf
	 * @param array $v_makfb       POST args. // obf
	 * @param array $v_pnnvw  Success status. // obf
	 */ // obf
	public function test_ajax_load_available_items_success_status( $v_makfb, $v_pnnvw ) { // obf

		$v_aatvq = array_merge( // obf
			array( // obf
				'action'                => 'load-available-menu-items-customizer', // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			), // obf
			$v_makfb // obf
		); // obf

		// Make the request. // obf
		$v_sykfh->make_ajax_call( 'load-available-menu-items-customizer' ); // obf

		// Get the results. // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertSame( $v_pnnvw, $v_ppjtt['success'] ); // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_load_available_items_success_status(). // obf
	 * // obf
	 * Provides various post_args to retrieve results and compare against // obf
	 * the success status. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type array $v_makfb      The arguments that will merged with the $v_aatvq array. // obf
	 *         @type bool  $v_pnnvw The expected success status. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_load_available_items_success_status() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'post', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'page', // obf
				), // obf
				true, // obf
			), // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'custom', // obf
				), // obf
				false, // obf
			), // obf
			array( // obf
				array( // obf
					'type'   => 'taxonomy', // obf
					'object' => 'post_tag', // obf
				), // obf
				true, // obf
			), // obf
			// Testing a bulk request. // obf
			array( // obf
				array( // obf
					'item_types' => array( // obf
						array( // obf
							'type'   => 'post_type', // obf
							'object' => 'post', // obf
						), // obf
						array( // obf
							'type'   => 'post_type', // obf
							'object' => 'page', // obf
						), // obf
					), // obf
				), // obf
				true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the array structure for a single item // obf
	 * // obf
	 * @dataProvider data_ajax_load_available_items_structure // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_load_available_items // obf
	 * // obf
	 * @param array $v_makfb POST args. // obf
	 */ // obf
	public function test2_ajax_load_available_items_structure( $v_makfb ) { // obf
		do_action( 'customize_register', $v_sykfh->wp_customize ); // obf

		$v_qrwce = array( // obf
			'id', // obf
			'title', // obf
			'type', // obf
			'type_label', // obf
			'object', // obf
			'object_id', // obf
			'url', // obf
		); // obf

		$v_xrzge = $v_sykfh->wp_customize->nav_menus->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Test Auto Draft', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_sykfh->wp_customize->set_post_value( 'nav_menus_created_posts', array( $v_xrzge->ID ) ); // obf
		$v_sykfh->wp_customize->get_setting( 'nav_menus_created_posts' )->preview(); // obf

		$v_aatvq = array_merge( // obf
			array( // obf
				'action'                => 'load-available-menu-items-customizer', // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			), // obf
			$v_makfb // obf
		); // obf

		// Make the request. // obf
		$v_sykfh->make_ajax_call( 'load-available-menu-items-customizer' ); // obf

		// Get the results. // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

		$v_sykfh->assertNotEmpty( current( $v_ppjtt['data']['items'] ) ); // obf

		// Get the second index to avoid the home page edge case. // obf
		$v_yqhgy = current( $v_ppjtt['data']['items'] ); // obf
		$v_hubpp  = $v_yqhgy[1]; // obf

		foreach ( $v_qrwce as $v_colfn ) { // obf
			$v_sykfh->assertArrayHasKey( $v_colfn, $v_hubpp ); // obf
			$v_sykfh->assertNotEmpty( $v_hubpp[ $v_colfn ] ); // obf
		} // obf

		// Special test for the home page. // obf
		if ( 'page' === $v_hubpp['object'] ) { // obf
			$v_yqhgy = current( $v_ppjtt['data']['items'] ); // obf
			$v_efznq       = $v_yqhgy[0]; // obf
			foreach ( $v_qrwce as $v_colfn ) { // obf
				if ( 'object_id' !== $v_colfn ) { // obf
					$v_sykfh->assertArrayHasKey( $v_colfn, $v_efznq ); // obf
					if ( 'object' !== $v_colfn ) { // obf
						$v_sykfh->assertNotEmpty( $v_efznq[ $v_colfn ] ); // obf
					} // obf
				} // obf
			} // obf
		} elseif ( 'post' === $v_hubpp['object'] ) { // obf
			$v_yglqm = wp_list_pluck( $v_ppjtt['data']['items']['post_type:post'], 'id' ); // obf
			$v_sykfh->assertContains( 'post-' . $v_xrzge->ID, $v_yglqm ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_load_available_items_structure(). // obf
	 * // obf
	 * Provides various post_args to return a list of items to test the array structure of. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type array $v_makfb The arguments that will merged with the $v_aatvq array. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_load_available_items_structure() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'post', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'type'   => 'post_type', // obf
					'object' => 'page', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'type'   => 'taxonomy', // obf
					'object' => 'post_tag', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the error messages for ajax_search_available_items // obf
	 * // obf
	 * @dataProvider data_ajax_search_available_items_caps_check // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_search_available_items // obf
	 * @covers WP_Customize_Nav_Menus::search_available_items_query // obf
	 * // obf
	 * @param string $v_klldf             Role. // obf
	 * @param array  $v_wqemu Expected results. // obf
	 */ // obf
	public function test_ajax_search_available_items_caps_check( $v_klldf, $v_wqemu ) { // obf

		if ( 'administrator' !== $v_klldf ) { // obf
			// If we're not an admin, we should get a wp_die( -1 ). // obf
			$v_sykfh->expectException( 'WPAjaxDieStopException' ); // obf
			$v_sykfh->expectExceptionMessage( '-1' ); // obf
		} // obf

		wp_set_current_user( self::$v_zznwt[ $v_klldf ] ); // obf

		$v_aatvq = array( // obf
			'action'                => 'search-available-menu-items-customizer', // obf
			'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
		); // obf

		$v_sykfh->make_ajax_call( 'search-available-menu-items-customizer' ); // obf

		// If we are an admin, we should get a proper response. // obf
		if ( 'administrator' === $v_klldf ) { // obf
			// Get the results. // obf
			$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

			$v_sykfh->assertSame( $v_wqemu, $v_ppjtt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_search_available_items_caps_check(). // obf
	 * // obf
	 * Provides various post_args to induce error messages in the that can be // obf
	 * compared to the expected_results. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @todo Make this more DRY // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_klldf             The role that will test caps for. // obf
	 *         @type array  $v_wqemu The expected results from the Ajax call. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_search_available_items_caps_check() { // obf
		return array( // obf
			array( // obf
				'subscriber', // obf
				array(), // obf
			), // obf
			array( // obf
				'contributor', // obf
				array(), // obf
			), // obf
			array( // obf
				'author', // obf
				array(), // obf
			), // obf
			array( // obf
				'editor', // obf
				array(), // obf
			), // obf
			array( // obf
				'administrator', // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_search_parameter', // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the results of various searches // obf
	 * // obf
	 * @dataProvider data_ajax_search_available_items_results // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_search_available_items // obf
	 * @covers WP_Customize_Nav_Menus::search_available_items_query // obf
	 * // obf
	 * @param array $v_makfb        POST args. // obf
	 * @param array $v_wqemu Expected results. // obf
	 */ // obf
	public function test_ajax_search_available_items_results( $v_makfb, $v_wqemu ) { // obf
		do_action( 'customize_register', $v_sykfh->wp_customize ); // obf

		self::factory()->post->create_many( 5, array( 'post_title' => 'Test Post' ) ); // obf
		$v_brfne = $v_sykfh->wp_customize->nav_menus->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Test Included Auto Draft', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_yugzw = $v_sykfh->wp_customize->nav_menus->insert_auto_draft_post( // obf
			array( // obf
				'post_title' => 'Excluded Auto Draft', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_sykfh->wp_customize->set_post_value( 'nav_menus_created_posts', array( $v_brfne->ID, $v_yugzw->ID ) ); // obf
		$v_sykfh->wp_customize->get_setting( 'nav_menus_created_posts' )->preview(); // obf

		$v_aatvq = array_merge( // obf
			array( // obf
				'action'                => 'search-available-menu-items-customizer', // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			), // obf
			$v_makfb // obf
		); // obf

		$v_sykfh->make_ajax_call( 'search-available-menu-items-customizer' ); // obf

		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

		if ( isset( $v_makfb['search'] ) && 'test' === $v_makfb['search'] ) { // obf
			$v_sykfh->assertTrue( $v_ppjtt['success'] ); // obf
			$v_sykfh->assertCount( 6, $v_ppjtt['data']['items'] ); // obf
			$v_yglqm = wp_list_pluck( $v_ppjtt['data']['items'], 'id' ); // obf
			$v_sykfh->assertContains( 'post-' . $v_brfne->ID, $v_yglqm ); // obf
			$v_sykfh->assertNotContains( 'post-' . $v_yugzw->ID, $v_yglqm ); // obf
		} else { // obf
			$v_sykfh->assertSame( $v_wqemu, $v_ppjtt ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_ajax_search_available_items_results(). // obf
	 * // obf
	 * Provides various post_args to test the results. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_makfb        The args that will be passed to Ajax. // obf
	 *         @type array  $v_wqemu The expected results from the Ajax call. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_ajax_search_available_items_results() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				array( // obf
					'success' => false, // obf
					'data'    => 'nav_menus_missing_search_parameter', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'search' => 'all_the_things', // obf
				), // obf
				array( // obf
					'success' => false, // obf
					'data'    => array( // obf
						'message' => 'No results found.', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'search' => 'test', // obf
				), // obf
				array( // obf
					'success' => true, // obf
					array(), // obf
				), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing successful ajax_insert_auto_draft_post() call. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_insert_auto_draft_post // obf
	 * @covers WP_Customize_Nav_Menus::insert_auto_draft_post // obf
	 */ // obf
	public function test_ajax_insert_auto_draft_post_success() { // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
				'params'                => array( // obf
					'post_type'  => 'post', // obf
					'post_title' => 'Hello World', // obf
				), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf

		$v_sykfh->assertTrue( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertArrayHasKey( 'post_id', $v_ppjtt['data'] ); // obf
		$v_sykfh->assertArrayHasKey( 'url', $v_ppjtt['data'] ); // obf
		$v_cqydp = get_post( $v_ppjtt['data']['post_id'] ); // obf
		$v_sykfh->assertSame( 'Hello World', $v_cqydp->post_title ); // obf
		$v_sykfh->assertSame( 'post', $v_cqydp->post_type ); // obf
		$v_sykfh->assertSame( '', $v_cqydp->post_name ); // obf
		$v_sykfh->assertSame( 'hello-world', get_post_meta( $v_cqydp->ID, '_customize_draft_post_name', true ) ); // obf
		$v_sykfh->assertSame( $v_sykfh->wp_customize->changeset_uuid(), get_post_meta( $v_cqydp->ID, '_customize_changeset_uuid', true ) ); // obf
	} // obf

	/** // obf
	 * Testing unsuccessful ajax_insert_auto_draft_post() call. // obf
	 * // obf
	 * @covers WP_Customize_Nav_Menus::ajax_insert_auto_draft_post // obf
	 */ // obf
	public function test_ajax_insert_auto_draft_failures() { // obf
		// No nonce. // obf
		$v_aatvq                = array(); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'bad_nonce', $v_ppjtt['data'] ); // obf

		// Bad nonce. // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => 'bad', // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'bad_nonce', $v_ppjtt['data'] ); // obf

		// Bad nonce. // obf
		wp_set_current_user( self::$v_zznwt['subscriber'] ); // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'customize_not_allowed', $v_ppjtt['data'] ); // obf

		// Missing params. // obf
		wp_set_current_user( self::$v_zznwt['administrator'] ); // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'missing_params', $v_ppjtt['data'] ); // obf

		// insufficient_post_permissions. // obf
		register_post_type( 'privilege', array( 'capability_type' => 'privilege' ) ); // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
				'params'                => array( // obf
					'post_type' => 'privilege', // obf
				), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'insufficient_post_permissions', $v_ppjtt['data'] ); // obf

		// insufficient_post_permissions. // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
				'params'                => array( // obf
					'post_type' => 'non-existent', // obf
				), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'missing_post_type_param', $v_ppjtt['data'] ); // obf

		// missing_post_title. // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
				'params'                => array( // obf
					'post_type'  => 'post', // obf
					'post_title' => '    ', // obf
				), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'missing_post_title', $v_ppjtt['data'] ); // obf

		// illegal_params. // obf
		$v_aatvq                = wp_slash( // obf
			array( // obf
				'customize-menus-nonce' => wp_create_nonce( 'customize-menus' ), // obf
				'params'                => array( // obf
					'post_type'    => 'post', // obf
					'post_title'   => 'OK', // obf
					'post_name'    => 'bad', // obf
					'post_content' => 'bad', // obf
				), // obf
			) // obf
		); // obf
		$v_sykfh->_last_response = ''; // obf
		$v_sykfh->make_ajax_call( 'customize-nav-menus-insert-auto-draft' ); // obf
		$v_ppjtt = json_decode( $v_sykfh->_last_response, true ); // obf
		$v_sykfh->assertFalse( $v_ppjtt['success'] ); // obf
		$v_sykfh->assertSame( 'illegal_params', $v_ppjtt['data'] ); // obf
	} // obf
} // obf