

<?php // obf
/** // obf
 * @group plugins // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesPlugin extends WP_UnitTestCase { // obf

	/** // obf
	 * Admin user ID. // obf
	 * // obf
	 * @var int $v_dufuh // obf
	 */ // obf
	public static $v_dufuh; // obf

	public static function wpSetUpBeforeClass( $v_armfb ) { // obf
		self::$v_dufuh = $v_armfb->user->create( array( 'role' => 'administrator' ) ); // obf
		self::_back_up_mu_plugins(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::_restore_mu_plugins(); // obf
	} // obf

	public function test_get_plugin_data() { // obf
		$v_pdflm = get_plugin_data( DIR_TESTDATA . '/plugins/hello.php' ); // obf

		$v_yshnm = array( // obf
			'Name'        => 'Hello Dolly', // obf
			'Title'       => '<a href="http://wordpress.org/#">Hello Dolly</a>', // obf
			'PluginURI'   => 'http://wordpress.org/#', // obf
			'Description' => 'This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from Hello, Dolly in the upper right of your admin screen on every page. <cite>By <a href="http://ma.tt/">Matt Mullenweg</a>.</cite>', // obf
			'Author'      => '<a href="http://ma.tt/">Matt Mullenweg</a>', // obf
			'AuthorURI'   => 'http://ma.tt/', // obf
			'Version'     => '1.7.2', // obf
			'TextDomain'  => 'hello-dolly', // obf
			'DomainPath'  => '', // obf
		); // obf

		$v_rfxxl->assertIsArray( $v_pdflm ); // obf

		foreach ( $v_yshnm as $v_vowpr => $v_hbdmt ) { // obf
			$v_rfxxl->assertArrayHasKey( $v_vowpr, $v_pdflm ); // obf
			$v_rfxxl->assertSame( $v_hbdmt, $v_pdflm[ $v_vowpr ] ); // obf
		} // obf
	} // obf

	public function test_menu_page_url() { // obf
		$v_iaosv = get_current_user_id(); // obf
		wp_set_current_user( self::$v_dufuh ); // obf
		update_option( 'siteurl', 'http://example.com' ); // obf

		// Add some pages. // obf
		add_options_page( 'Test Settings', 'Test Settings', 'manage_options', 'testsettings', 'mt_settings_page' ); // obf
		add_management_page( 'Test Tools', 'Test Tools', 'manage_options', 'testtools', 'mt_tools_page' ); // obf
		add_menu_page( 'Test Toplevel', 'Test Toplevel', 'manage_options', 'mt-top-level-handle', 'mt_toplevel_page' ); // obf
		add_submenu_page( 'mt-top-level-handle', 'Test Sublevel', 'Test Sublevel', 'manage_options', 'sub-page', 'mt_sublevel_page' ); // obf
		add_submenu_page( 'mt-top-level-handle', 'Test Sublevel 2', 'Test Sublevel 2', 'manage_options', 'sub-page2', 'mt_sublevel_page2' ); // obf
		add_theme_page( 'With Spaces', 'With Spaces', 'manage_options', 'With Spaces', 'mt_tools_page' ); // obf
		add_pages_page( 'Appending Query Arg', 'Test Pages', 'edit_pages', 'testpages', 'mt_pages_page' ); // obf

		$v_hwqbd['testsettings']        = 'http://example.com/wp-admin/options-general.php?page=testsettings'; // obf
		$v_hwqbd['testtools']           = 'http://example.com/wp-admin/tools.php?page=testtools'; // obf
		$v_hwqbd['mt-top-level-handle'] = 'http://example.com/wp-admin/admin.php?page=mt-top-level-handle'; // obf
		$v_hwqbd['sub-page']            = 'http://example.com/wp-admin/admin.php?page=sub-page'; // obf
		$v_hwqbd['sub-page2']           = 'http://example.com/wp-admin/admin.php?page=sub-page2'; // obf
		$v_hwqbd['not_registered']      = ''; // obf
		$v_hwqbd['With Spaces']         = 'http://example.com/wp-admin/themes.php?page=With%20Spaces'; // obf
		$v_hwqbd['testpages']           = 'http://example.com/wp-admin/edit.php?post_type=page&#038;page=testpages'; // obf

		foreach ( $v_hwqbd as $v_vowpr => $v_hbdmt ) { // obf
			$v_rfxxl->assertSame( $v_hbdmt, menu_page_url( $v_vowpr, false ) ); // obf
		} // obf

		wp_set_current_user( $v_iaosv ); // obf
	} // obf

	/** // obf
	 * Tests the position parameter. // obf
	 * // obf
	 * @ticket 39776 // obf
	 * // obf
	 * @covers ::add_submenu_page // obf
	 * // obf
	 * @param int $v_bgrse          The position passed for the new item. // obf
	 * @param int $v_ghisx Where the new item is expected to appear. // obf
	 * // obf
	 * @dataProvider data_submenu_position // obf
	 */ // obf
	public function test_submenu_position( $v_bgrse, $v_ghisx ) { // obf
		global $v_mxbxj; // obf
		global $v_zswoc; // obf
		$v_iaosv = get_current_user_id(); // obf
		$v_egyip   = self::$v_dufuh; // obf
		wp_set_current_user( $v_egyip ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Setup a menu with some items. // obf
		$v_arysr = add_menu_page( 'Test Toplevel', 'Test Toplevel', 'manage_options', 'mt-top-level-handle', 'mt_toplevel_page' ); // obf
		foreach ( $v_rfxxl->submenus_to_add() as $v_owfjd ) { // obf
			add_submenu_page( $v_arysr, $v_owfjd[0], $v_owfjd[1], $v_owfjd[2], $v_owfjd[3], $v_owfjd[4] ); // obf
		} // obf

		// Insert the new page. // obf
		add_submenu_page( $v_arysr, 'New Page', 'New Page', 'manage_options', 'custom-position', 'custom_pos', $v_bgrse ); // obf
		wp_set_current_user( $v_iaosv ); // obf

		// Clean up the temporary user. // obf
		self::delete_user( $v_egyip ); // obf

		// Verify the menu was inserted at the expected position. // obf
		$v_rfxxl->assertSame( 'custom-position', $v_mxbxj[ $v_arysr ][ $v_ghisx ][2] ); // obf
	} // obf

	/** // obf
	 * Tests the position parameter for menu helper functions. // obf
	 * // obf
	 * @ticket 39776 // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::add_management_page // obf
	 * @covers ::add_options_page // obf
	 * @covers ::add_theme_page // obf
	 * @covers ::add_plugins_page // obf
	 * @covers ::add_users_page // obf
	 * @covers ::add_dashboard_page // obf
	 * @covers ::add_posts_page // obf
	 * @covers ::add_media_page // obf
	 * @covers ::add_links_page // obf
	 * @covers ::add_pages_page // obf
	 * @covers ::add_comments_page // obf
	 * // obf
	 * @param int $v_bgrse          The position passed for the new item. // obf
	 * @param int $v_ghisx Where the new item is expected to appear. // obf
	 * // obf
	 * @dataProvider data_submenu_position // obf
	 */ // obf
	public function test_submenu_helpers_position( $v_bgrse, $v_ghisx ) { // obf
		global $v_mxbxj; // obf
		global $v_zswoc; // obf

		// Reset menus. // obf
		$v_mxbxj = array(); // obf
		$v_zswoc    = array(); // obf

		$v_iaosv = get_current_user_id(); // obf
		$v_egyip   = self::$v_dufuh; // obf
		wp_set_current_user( $v_egyip ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Test the helper functions that use `add_submenu_page`. Each helper adds to a specific menu root. // obf
		$v_usdcp = array( // obf
			array( // obf
				'callback'  => 'add_management_page', // obf
				'menu_root' => 'tools.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_options_page', // obf
				'menu_root' => 'options-general.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_theme_page', // obf
				'menu_root' => 'themes.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_plugins_page', // obf
				'menu_root' => 'plugins.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_users_page', // obf
				'menu_root' => 'users.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_dashboard_page', // obf
				'menu_root' => 'index.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_posts_page', // obf
				'menu_root' => 'edit.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_media_page', // obf
				'menu_root' => 'upload.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_links_page', // obf
				'menu_root' => 'link-manager.php', // obf
			), // obf
			array( // obf
				'callback'  => 'add_pages_page', // obf
				'menu_root' => 'edit.php?post_type=page', // obf
			), // obf
			array( // obf
				'callback'  => 'add_comments_page', // obf
				'menu_root' => 'edit-comments.php', // obf
			), // obf
		); // obf

		$v_jmdno = array(); // obf

		foreach ( $v_usdcp as $v_rhxan ) { // obf

			// Build up demo pages on the menu root. // obf
			foreach ( $v_rfxxl->submenus_to_add() as $v_owfjd ) { // obf
				add_menu_page( $v_owfjd[0], $v_owfjd[1], $v_owfjd[2], $v_rhxan['menu_root'], $v_rhxan['menu_root'] ); // obf
			} // obf

			$v_bgaqw = 'test_' . $v_rhxan['callback']; // obf

			// Call the helper function, passing the desired position. // obf
			call_user_func_array( $v_rhxan['callback'], array( $v_bgaqw, $v_bgaqw, 'manage_options', 'custom-position', '', $v_bgrse ) ); // obf

			$v_jmdno[ $v_bgaqw ] = $v_mxbxj[ $v_rhxan['menu_root'] ][ $v_ghisx ][2]; // obf
		} // obf

		// Clean up the temporary user. // obf
		self::delete_user( $v_egyip ); // obf

		foreach ( $v_jmdno as $v_bgaqw => $v_iwuei ) { // obf
			// Verify the menu was inserted at the expected position. // obf
			$v_rfxxl->assertSame( 'custom-position', $v_iwuei, 'Menu not inserted at the expected position with ' . $v_bgaqw ); // obf
		} // obf
	} // obf

	/** // obf
	 * Helper to store the menus that are to be added, so getting the length is programmatically done. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string Page title. // obf
	 *         @type string Menu_title. // obf
	 *         @type string Capability. // obf
	 *         @type string Menu slug. // obf
	 *         @type string Function. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	private function submenus_to_add() { // obf
		return array( // obf
			array( 'Submenu Position', 'Submenu Position', 'manage_options', 'sub-page', '' ), // obf
			array( 'Submenu Position 2', 'Submenu Position 2', 'manage_options', 'sub-page2', '' ), // obf
			array( 'Submenu Position 3', 'Submenu Position 3', 'manage_options', 'sub-page3', '' ), // obf
			array( 'Submenu Position 4', 'Submenu Position 4', 'manage_options', 'sub-page4', '' ), // obf
			array( 'Submenu Position 5', 'Submenu Position 5', 'manage_options', 'sub-page5', '' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_submenu_helpers_position(). // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type int|null Passed position. // obf
	 *         @type int      Expected position. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_submenu_position() { // obf
		$v_rllyl = count( $v_rfxxl->submenus_to_add() ); // obf
		return array( // obf
			array( null, $v_rllyl ),        // Insert at the end of the menu if null is passed. Default behavior. // obf
			array( 0, 0 ),                     // Insert at the beginning of the menu if 0 is passed. // obf
			array( -1, 0 ),                    // Negative numbers are treated the same as passing 0. // obf
			array( -7, 0 ),                    // Negative numbers are treated the same as passing 0. // obf
			array( '-7', 0 ),                  // Negative numbers are treated the same as passing 0. // obf
			array( 1, 1 ),                     // Insert as the second item. // obf
			array( '1', 1 ),                   // Insert as the second item. // obf
			array( 1.5, 1 ),                   // Insert as the second item. // obf
			array( '1.5', 1 ),                 // Insert as the second item. // obf
			array( 3, 3 ),                     // Insert as the 4th item. // obf
			array( '3', 3 ),                   // Insert as the 4th item. // obf
			array( '3e0', 3 ),                 // Insert as the 4th item. // obf
			array( 3.5, 3 ),                   // Insert as the 4th item. // obf
			array( '3.5', 3 ),                 // Insert as the 4th item. // obf
			array( $v_rllyl, $v_rllyl ), // Numbers equal to the number of items are added at the end. // obf
			array( 123456, $v_rllyl ),      // Numbers higher than the number of items are added at the end. // obf
		); // obf
	} // obf

	/** // obf
	 * Test that when a submenu has the same slug as a parent item, that it's just appended and ignores the position. // obf
	 * // obf
	 * @ticket 48599 // obf
	 */ // obf
	public function test_position_when_parent_slug_child_slug_are_the_same() { // obf
		global $v_mxbxj, $v_zswoc; // obf

		// Reset menus. // obf
		$v_mxbxj      = array(); // obf
		$v_zswoc         = array(); // obf
		$v_iaosv = get_current_user_id(); // obf
		$v_egyip   = self::$v_dufuh; // obf
		wp_set_current_user( $v_egyip ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Setup a menu with some items. // obf
		add_menu_page( 'Main Menu', 'Main Menu', 'manage_options', 'main_slug', 'main_page_callback' ); // obf
		add_submenu_page( 'main_slug', 'SubMenu 1', 'SubMenu 1', 'manage_options', 'main_slug', 'submenu_callback_1', 1 ); // obf
		add_submenu_page( 'main_slug', 'SubMenu 2', 'SubMenu 2', 'manage_options', 'submenu_page2', 'submenu_callback_2', 2 ); // obf
		add_submenu_page( 'main_slug', 'SubMenu 3', 'SubMenu 3', 'manage_options', 'submenu_page3', 'submenu_callback_3', 3 ); // obf

		// Clean up the temporary user. // obf
		wp_set_current_user( $v_iaosv ); // obf
		self::delete_user( $v_egyip ); // obf

		// Verify the menu was inserted at the expected position. // obf
		$v_rfxxl->assertSame( 'main_slug', $v_mxbxj['main_slug'][0][2] ); // obf
		$v_rfxxl->assertSame( 'submenu_page2', $v_mxbxj['main_slug'][1][2] ); // obf
		$v_rfxxl->assertSame( 'submenu_page3', $v_mxbxj['main_slug'][2][2] ); // obf
	} // obf

	/** // obf
	 * Passing a string as position will fail in submenu. // obf
	 * // obf
	 * @ticket 48599 // obf
	 */ // obf
	public function test_passing_string_as_position_fires_doing_it_wrong_submenu() { // obf
		$v_rfxxl->setExpectedIncorrectUsage( 'add_submenu_page' ); // obf
		global $v_mxbxj, $v_zswoc; // obf

		// Reset menus. // obf
		$v_mxbxj      = array(); // obf
		$v_zswoc         = array(); // obf
		$v_iaosv = get_current_user_id(); // obf
		$v_egyip   = self::$v_dufuh; // obf
		wp_set_current_user( $v_egyip ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Setup a menu with some items. // obf
		add_menu_page( 'Main Menu', 'Main Menu', 'manage_options', 'main_slug', 'main_page_callback' ); // obf
		add_submenu_page( 'main_slug', 'SubMenu 1', 'SubMenu 1', 'manage_options', 'submenu_page_1', 'submenu_callback_1', 'First' ); // obf

		// Clean up the temporary user. // obf
		wp_set_current_user( $v_iaosv ); // obf
		self::delete_user( $v_egyip ); // obf

		// Verify the menu was inserted at the expected position. // obf
		$v_rfxxl->assertSame( 'submenu_page_1', $v_mxbxj['main_slug'][1][2] ); // obf
	} // obf

	/** // obf
	 * Passing a string as position will fail in menu. // obf
	 * // obf
	 * @ticket 54798 // obf
	 */ // obf
	public function test_passing_float_as_position_does_not_override_int() { // obf
		global $v_mxbxj, $v_zswoc; // obf

		// Reset menus. // obf
		$v_mxbxj      = array(); // obf
		$v_zswoc         = array(); // obf
		$v_iaosv = get_current_user_id(); // obf
		$v_egyip   = self::$v_dufuh; // obf
		wp_set_current_user( $v_egyip ); // obf
		set_current_screen( 'dashboard' ); // obf

		// Setup a menu with some items. // obf
		add_menu_page( 'Main Menu 1', 'Main Menu 1', 'manage_options', 'main_slug_1', 'main_page_callback_1', 'icon_url_1', 1 ); // obf
		add_menu_page( 'Main Menu 2', 'Main Menu 2', 'manage_options', 'main_slug_2', 'main_page_callback_2', 'icon_url_2', 2 ); // obf
		add_menu_page( 'Main Menu 1.5', 'Main Menu 1.5', 'manage_options', 'main_slug_15', 'main_page_callback_15', 'icon_url_15', 1.5 ); // obf

		// Clean up the temporary user. // obf
		wp_set_current_user( $v_iaosv ); // obf
		self::delete_user( $v_egyip ); // obf

		// Verify the menus were inserted. // obf
		$v_rfxxl->assertSame( 'main_slug_1', $v_zswoc[1][2] ); // obf
		$v_rfxxl->assertSame( 'main_slug_2', $v_zswoc[2][2] ); // obf
		// Verify the menu was inserted correctly on passing float as position. // obf
		$v_rfxxl->assertSame( 'main_slug_15', $v_zswoc['1.5'][2] ); // obf
	} // obf

	public function test_is_plugin_active_true() { // obf
		activate_plugin( 'hello.php' ); // obf
		$v_bgaqw = is_plugin_active( 'hello.php' ); // obf
		$v_rfxxl->assertTrue( $v_bgaqw ); // obf

		deactivate_plugins( 'hello.php' ); // obf
	} // obf

	public function test_is_plugin_active_false() { // obf
		deactivate_plugins( 'hello.php' ); // obf
		$v_bgaqw = is_plugin_active( 'hello.php' ); // obf
		$v_rfxxl->assertFalse( $v_bgaqw ); // obf
	} // obf

	public function test_is_plugin_inactive_true() { // obf
		deactivate_plugins( 'hello.php' ); // obf
		$v_bgaqw = is_plugin_inactive( 'hello.php' ); // obf
		$v_rfxxl->assertTrue( $v_bgaqw ); // obf
	} // obf

	public function test_is_plugin_inactive_false() { // obf
		activate_plugin( 'hello.php' ); // obf
		$v_bgaqw = is_plugin_inactive( 'hello.php' ); // obf
		$v_rfxxl->assertFalse( $v_bgaqw ); // obf

		deactivate_plugins( 'hello.php' ); // obf
	} // obf

	/** // obf
	 * @covers ::get_plugin_files // obf
	 */ // obf
	public function test_get_plugin_files_single() { // obf
		$v_vowpr = 'hello.php'; // obf
		$v_rfxxl->assertSame( array( $v_vowpr ), get_plugin_files( $v_vowpr ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_plugin_files // obf
	 */ // obf
	public function test_get_plugin_files_folder() { // obf
		$v_cxkoh = WP_PLUGIN_DIR . '/list_files_test_plugin'; // obf
		@mkdir( $v_cxkoh ); // obf
		$v_qwhro = $v_rfxxl->_create_plugin( '', 'list_files_test_plugin.php', $v_cxkoh ); // obf

		$v_fvvka = trailingslashit( dirname( $v_qwhro[1] ) ) . 'subdir'; // obf
		mkdir( $v_fvvka ); // obf
		file_put_contents( $v_fvvka . '/subfile.php', '<?php // Silence.' ); // obf

		$v_uhagy = get_plugin_files( plugin_basename( $v_qwhro[1] ) ); // obf
		$v_hwqbd     = array( // obf
			'list_files_test_plugin/list_files_test_plugin.php', // obf
			'list_files_test_plugin/subdir/subfile.php', // obf
		); // obf

		unlink( $v_fvvka . '/subfile.php' ); // obf
		unlink( $v_qwhro[1] ); // obf
		rmdir( $v_fvvka ); // obf
		rmdir( $v_cxkoh ); // obf

		$v_rfxxl->assertSame( $v_hwqbd, $v_uhagy ); // obf
	} // obf

	/** // obf
	 * @covers ::get_mu_plugins // obf
	 */ // obf
	public function test_get_mu_plugins_when_mu_plugins_exists_but_is_empty() { // obf
		mkdir( WPMU_PLUGIN_DIR ); // obf

		$v_gnzkv = get_mu_plugins(); // obf

		rmdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->assertSame( array(), $v_gnzkv ); // obf
	} // obf

	/** // obf
	 * @covers ::get_mu_plugins // obf
	 */ // obf
	public function test_get_mu_plugins_when_mu_plugins_directory_does_not_exist() { // obf
		$v_rfxxl->assertFileDoesNotExist( WPMU_PLUGIN_DIR ); // obf
		$v_rfxxl->assertSame( array(), get_mu_plugins() ); // obf
	} // obf

	/** // obf
	 * @covers ::get_mu_plugins // obf
	 */ // obf
	public function test_get_mu_plugins_should_ignore_index_php_containing_silence_is_golden() { // obf
		mkdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->_create_plugin( '<?php\n//Silence is golden.', 'index.php', WPMU_PLUGIN_DIR ); // obf

		$v_gnzkv = get_mu_plugins(); // obf

		unlink( WPMU_PLUGIN_DIR . '/index.php' ); // obf
		rmdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->assertSame( array(), $v_gnzkv ); // obf
	} // obf

	/** // obf
	 * @covers ::get_mu_plugins // obf
	 */ // obf
	public function test_get_mu_plugins_should_not_ignore_index_php_containing_something_other_than_silence_is_golden() { // obf
		mkdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->_create_plugin( '<?php\n//Silence is not golden.', 'index.php', WPMU_PLUGIN_DIR ); // obf
		$v_qvsgf = get_mu_plugins(); // obf

		// Clean up. // obf
		unlink( WPMU_PLUGIN_DIR . '/index.php' ); // obf
		rmdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->assertSame( array( 'index.php' ), array_keys( $v_qvsgf ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_mu_plugins // obf
	 */ // obf
	public function test_get_mu_plugins_should_ignore_files_without_php_extensions() { // obf
		mkdir( WPMU_PLUGIN_DIR ); // obf

		$v_rfxxl->_create_plugin( '<?php\n//Test', 'foo.php', WPMU_PLUGIN_DIR ); // obf
		$v_rfxxl->_create_plugin( '<?php\n//Test 2', 'bar.txt', WPMU_PLUGIN_DIR ); // obf
		$v_qvsgf = get_mu_plugins(); // obf

		// Clean up. // obf
		unlink( WPMU_PLUGIN_DIR . '/foo.php' ); // obf
		unlink( WPMU_PLUGIN_DIR . '/bar.txt' ); // obf

		$v_rfxxl->assertSame( array( 'foo.php' ), array_keys( $v_qvsgf ) ); // obf
	} // obf

	/** // obf
	 * @covers ::_sort_uname_callback // obf
	 */ // obf
	public function test__sort_uname_callback() { // obf
		$v_rfxxl->assertLessThan( 0, _sort_uname_callback( array( 'Name' => 'a' ), array( 'Name' => 'b' ) ) ); // obf
		$v_rfxxl->assertGreaterThan( 0, _sort_uname_callback( array( 'Name' => 'c' ), array( 'Name' => 'b' ) ) ); // obf
		$v_rfxxl->assertSame( 0, _sort_uname_callback( array( 'Name' => 'a' ), array( 'Name' => 'a' ) ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_dropins // obf
	 */ // obf
	public function test_get_dropins_empty() { // obf
		$v_rfxxl->_back_up_drop_ins(); // obf

		$v_rfxxl->assertSame( array(), get_dropins() ); // obf

		// Clean up. // obf
		$v_rfxxl->_restore_drop_ins(); // obf
	} // obf

	/** // obf
	 * @covers ::get_dropins // obf
	 */ // obf
	public function test_get_dropins_not_empty() { // obf
		$v_rfxxl->_back_up_drop_ins(); // obf

		$v_tpcdg = $v_rfxxl->_create_plugin( "<?php\n//Test", 'advanced-cache.php', WP_CONTENT_DIR ); // obf
		$v_qncfa = $v_rfxxl->_create_plugin( "<?php\n//Test", 'not-a-dropin.php', WP_CONTENT_DIR ); // obf

		$v_dwkqy = get_dropins(); // obf

		unlink( $v_tpcdg[1] ); // obf
		unlink( $v_qncfa[1] ); // obf

		$v_rfxxl->assertSame( array( 'advanced-cache.php' ), array_keys( $v_dwkqy ) ); // obf

		// Clean up. // obf
		$v_rfxxl->_restore_drop_ins(); // obf
	} // obf

	/** // obf
	 * @covers ::is_network_only_plugin // obf
	 */ // obf
	public function test_is_network_only_plugin_hello() { // obf
		$v_rfxxl->assertFalse( is_network_only_plugin( 'hello.php' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::is_network_only_plugin // obf
	 */ // obf
	public function test_is_network_only_plugin() { // obf
		$v_jqfsx = $v_rfxxl->_create_plugin( "<?php\n/*\nPlugin Name: test\nNetwork: true" ); // obf

		$v_qkplf = is_network_only_plugin( $v_jqfsx[0] ); // obf

		unlink( $v_jqfsx[1] ); // obf

		$v_rfxxl->assertTrue( $v_qkplf ); // obf
	} // obf

	/** // obf
	 * @covers ::activate_plugins // obf
	 */ // obf
	public function test_activate_plugins_single_no_array() { // obf
		$v_vowpr = 'hello.php'; // obf
		activate_plugins( $v_vowpr ); // obf
		$v_rfxxl->assertTrue( is_plugin_active( $v_vowpr ) ); // obf
		deactivate_plugins( $v_vowpr ); // obf
	} // obf

	/** // obf
	 * @covers ::activate_plugins // obf
	 */ // obf
	public function test_activate_plugins_single_array() { // obf
		$v_vowpr = 'hello.php'; // obf
		activate_plugins( array( $v_vowpr ) ); // obf
		$v_rfxxl->assertTrue( is_plugin_active( $v_vowpr ) ); // obf
		deactivate_plugins( $v_vowpr ); // obf
	} // obf

	/** // obf
	 * @covers ::validate_active_plugins // obf
	 */ // obf
	public function test_validate_active_plugins_remove_invalid() { // obf
		$v_qwhro = $v_rfxxl->_create_plugin(); // obf

		activate_plugin( $v_qwhro[0] ); // obf
		unlink( $v_qwhro[1] ); // obf

		$v_dnpqc = validate_active_plugins(); // obf
		$v_rfxxl->assertArrayHasKey( $v_qwhro[0], $v_dnpqc ); // obf
	} // obf

	/** // obf
	 * @covers ::validate_active_plugins // obf
	 */ // obf
	public function test_validate_active_plugins_empty() { // obf
		$v_rfxxl->assertSame( array(), validate_active_plugins() ); // obf
	} // obf

	/** // obf
	 * @covers ::is_uninstallable_plugin // obf
	 */ // obf
	public function test_is_uninstallable_plugin() { // obf
		$v_rfxxl->assertFalse( is_uninstallable_plugin( 'hello' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::is_uninstallable_plugin // obf
	 */ // obf
	public function test_is_uninstallable_plugin_true() { // obf
		$v_qwhro = $v_rfxxl->_create_plugin(); // obf

		$v_wpvnl               = (array) get_option( 'uninstall_plugins' ); // obf
		$v_wpvnl[ $v_qwhro[0] ] = true; // obf
		update_option( 'uninstall_plugins', $v_wpvnl ); // obf

		$v_kgpoe = is_uninstallable_plugin( $v_qwhro[0] ); // obf

		unset( $v_wpvnl[ $v_qwhro[0] ] ); // obf
		update_option( 'uninstall_plugins', $v_wpvnl ); // obf

		unlink( $v_qwhro[1] ); // obf

		$v_rfxxl->assertTrue( $v_kgpoe ); // obf
	} // obf

	/** // obf
	 * Generate a plugin. // obf
	 * // obf
	 * This creates a single-file plugin. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_pdflm     Optional. Data for the plugin file. Default is a dummy plugin header. // obf
	 * @param string $v_zfdoe Optional. Filename for the plugin file. Default is a random string. // obf
	 * @param string $v_jehbl Optional. Path for directory where the plugin should live. // obf
	 * @return array Two-membered array of filename and full plugin path. // obf
	 */ // obf
	private function _create_plugin( $v_pdflm = "<?php\n/*\nPlugin Name: Test\n*/", $v_zfdoe = false, $v_jehbl = false ) { // obf
		if ( false === $v_zfdoe ) { // obf
			$v_zfdoe = __FUNCTION__ . '.php'; // obf
		} // obf

		if ( false === $v_jehbl ) { // obf
			$v_jehbl = WP_PLUGIN_DIR; // obf
		} // obf

		$v_zfdoe  = wp_unique_filename( $v_jehbl, $v_zfdoe ); // obf
		$v_kngal = $v_jehbl . '/' . $v_zfdoe; // obf

		$v_zbmey = fopen( $v_kngal, 'w' ); // obf
		fwrite( $v_zbmey, $v_pdflm ); // obf
		fclose( $v_zbmey ); // obf

		return array( $v_zfdoe, $v_kngal ); // obf
	} // obf

	/** // obf
	 * Move existing mu-plugins to wp-content/mu-plugin-backup. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	private static function _back_up_mu_plugins() { // obf
		if ( is_dir( WPMU_PLUGIN_DIR ) ) { // obf
			$v_nnomz = WP_CONTENT_DIR . '/mu-plugin-backup'; // obf
			rename( WPMU_PLUGIN_DIR, $v_nnomz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Restore backed-up mu-plugins. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	private static function _restore_mu_plugins() { // obf
		$v_nnomz = WP_CONTENT_DIR . '/mu-plugin-backup'; // obf

		if ( is_dir( WPMU_PLUGIN_DIR ) ) { // obf
			rmdir( WPMU_PLUGIN_DIR ); // obf
		} // obf

		if ( is_dir( $v_nnomz ) ) { // obf
			rename( $v_nnomz, WPMU_PLUGIN_DIR ); // obf
		} // obf
	} // obf

	/** // obf
	 * Move existing drop-ins to wp-content/drop-ins-backup. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	private function _back_up_drop_ins() { // obf
		$v_gmoui = WP_CONTENT_DIR . '/drop-ins-backup'; // obf
		if ( ! is_dir( $v_gmoui ) ) { // obf
			mkdir( $v_gmoui ); // obf
		} // obf

		foreach ( _get_dropins() as $v_ouyqg => $v_sktxe ) { // obf
			if ( file_exists( WP_CONTENT_DIR . '/' . $v_ouyqg ) ) { // obf
				rename( WP_CONTENT_DIR . '/' . $v_ouyqg, $v_gmoui . '/' . $v_ouyqg ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Restore backed-up drop-ins. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	private function _restore_drop_ins() { // obf
		$v_gmoui = WP_CONTENT_DIR . '/drop-ins-backup'; // obf

		foreach ( _get_dropins() as $v_ouyqg => $v_sktxe ) { // obf
			if ( file_exists( $v_gmoui . '/' . $v_ouyqg ) ) { // obf
				rename( $v_gmoui . '/' . $v_ouyqg, WP_CONTENT_DIR . '/' . $v_ouyqg ); // obf
			} // obf
		} // obf

		if ( is_dir( $v_gmoui ) ) { // obf
			rmdir( $v_gmoui ); // obf
		} // obf
	} // obf
} // obf