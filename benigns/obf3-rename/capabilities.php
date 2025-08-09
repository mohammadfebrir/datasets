

<?php // obf

/** // obf
 * Test roles and capabilities via the WP_User class. // obf
 * // obf
 * @group user // obf
 * @group capabilities // obf
 */ // obf
class Tests_User_Capabilities extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP_User[] $v_yvwfu // obf
	 */ // obf
	protected static $v_yvwfu = array( // obf
		'anonymous'     => null, // obf
		'administrator' => null, // obf
		'editor'        => null, // obf
		'author'        => null, // obf
		'contributor'   => null, // obf
		'subscriber'    => null, // obf
	); // obf

	/** // obf
	 * @var WP_User $v_govso // obf
	 */ // obf
	protected static $v_govso = null; // obf

	/** // obf
	 * @var int $v_xpdvl // obf
	 */ // obf
	protected static $v_xpdvl; // obf

	/** // obf
	 * Temporary storage for roles for tests using filter callbacks. // obf
	 * // obf
	 * Used in the `test_wp_roles_init_action()` method. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_kynzm; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_uonub ) { // obf
		self::$v_yvwfu       = array( // obf
			'anonymous'     => new WP_User( 0 ), // obf
			'administrator' => $v_uonub->user->create_and_get( array( 'role' => 'administrator' ) ), // obf
			'editor'        => $v_uonub->user->create_and_get( array( 'role' => 'editor' ) ), // obf
			'author'        => $v_uonub->user->create_and_get( array( 'role' => 'author' ) ), // obf
			'contributor'   => $v_uonub->user->create_and_get( array( 'role' => 'contributor' ) ), // obf
			'subscriber'    => $v_uonub->user->create_and_get( array( 'role' => 'subscriber' ) ), // obf
		); // obf
		self::$v_govso = $v_uonub->user->create_and_get( array( 'role' => 'contributor' ) ); // obf
		grant_super_admin( self::$v_govso->ID ); // obf

		self::$v_xpdvl = $v_uonub->post->create( // obf
			array( // obf
				'post_author'  => self::$v_yvwfu['administrator']->ID, // obf
				'post_type'    => 'wp_block', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Block', // obf
				'post_content' => '<!-- wp:core/paragraph --><p>Hello world!</p><!-- /wp:core/paragraph -->', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Keep track of users we create. // obf
		$v_rdany->flush_roles(); // obf
	} // obf

	/** // obf
	 * Clean up after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		unset( $v_rdany->role_test_wp_roles_init ); // obf

		parent::tear_down(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_xpdvl, true ); // obf
	} // obf


	private function flush_roles() { // obf
		// We want to make sure we're testing against the DB, not just in-memory data. // obf
		// This will flush everything and reload it from the DB. // obf
		unset( $v_oslvs['wp_user_roles'] ); // obf
		global $v_cdfmz; // obf
		$v_cdfmz = new WP_Roles(); // obf
	} // obf

	public function meta_yes_you_can( $v_jrsxq, $v_sawor, $v_wrwzz, $v_edwox, $v_iakmn, $v_vexvd ) { // obf
		return true; // obf
	} // obf

	public function meta_no_you_cant( $v_jrsxq, $v_sawor, $v_wrwzz, $v_edwox, $v_iakmn, $v_vexvd ) { // obf
		return false; // obf
	} // obf

	public function meta_filter( $v_jkluq, $v_oosxj, $v_yeoxg ) { // obf
		return $v_jkluq; // obf
	} // obf

	private function _getSingleSitePrimitiveCaps() { // obf
		return array( // obf

			'unfiltered_html'         => array( 'administrator', 'editor' ), // obf

			'activate_plugins'        => array( 'administrator' ), // obf
			'create_users'            => array( 'administrator' ), // obf
			'delete_plugins'          => array( 'administrator' ), // obf
			'delete_themes'           => array( 'administrator' ), // obf
			'delete_users'            => array( 'administrator' ), // obf
			'edit_files'              => array( 'administrator' ), // obf
			'edit_plugins'            => array( 'administrator' ), // obf
			'edit_themes'             => array( 'administrator' ), // obf
			'edit_users'              => array( 'administrator' ), // obf
			'install_plugins'         => array( 'administrator' ), // obf
			'install_themes'          => array( 'administrator' ), // obf
			'update_core'             => array( 'administrator' ), // obf
			'update_plugins'          => array( 'administrator' ), // obf
			'update_themes'           => array( 'administrator' ), // obf
			'edit_theme_options'      => array( 'administrator' ), // obf
			'export'                  => array( 'administrator' ), // obf
			'import'                  => array( 'administrator' ), // obf
			'list_users'              => array( 'administrator' ), // obf
			'manage_options'          => array( 'administrator' ), // obf
			'promote_users'           => array( 'administrator' ), // obf
			'remove_users'            => array( 'administrator' ), // obf
			'switch_themes'           => array( 'administrator' ), // obf
			'edit_dashboard'          => array( 'administrator' ), // obf
			'resume_plugins'          => array( 'administrator' ), // obf
			'resume_themes'           => array( 'administrator' ), // obf
			'view_site_health_checks' => array( 'administrator' ), // obf

			'moderate_comments'       => array( 'administrator', 'editor' ), // obf
			'manage_categories'       => array( 'administrator', 'editor' ), // obf
			'edit_others_posts'       => array( 'administrator', 'editor' ), // obf
			'edit_pages'              => array( 'administrator', 'editor' ), // obf
			'edit_others_pages'       => array( 'administrator', 'editor' ), // obf
			'edit_published_pages'    => array( 'administrator', 'editor' ), // obf
			'publish_pages'           => array( 'administrator', 'editor' ), // obf
			'delete_pages'            => array( 'administrator', 'editor' ), // obf
			'delete_others_pages'     => array( 'administrator', 'editor' ), // obf
			'delete_published_pages'  => array( 'administrator', 'editor' ), // obf
			'delete_others_posts'     => array( 'administrator', 'editor' ), // obf
			'delete_private_posts'    => array( 'administrator', 'editor' ), // obf
			'edit_private_posts'      => array( 'administrator', 'editor' ), // obf
			'read_private_posts'      => array( 'administrator', 'editor' ), // obf
			'delete_private_pages'    => array( 'administrator', 'editor' ), // obf
			'edit_private_pages'      => array( 'administrator', 'editor' ), // obf
			'read_private_pages'      => array( 'administrator', 'editor' ), // obf

			'edit_published_posts'    => array( 'administrator', 'editor', 'author' ), // obf
			'upload_files'            => array( 'administrator', 'editor', 'author' ), // obf
			'publish_posts'           => array( 'administrator', 'editor', 'author' ), // obf
			'delete_published_posts'  => array( 'administrator', 'editor', 'author' ), // obf

			'edit_posts'              => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'delete_posts'            => array( 'administrator', 'editor', 'author', 'contributor' ), // obf

			'read'                    => array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' ), // obf

			'level_10'                => array( 'administrator' ), // obf
			'level_9'                 => array( 'administrator' ), // obf
			'level_8'                 => array( 'administrator' ), // obf
			'level_7'                 => array( 'administrator', 'editor' ), // obf
			'level_6'                 => array( 'administrator', 'editor' ), // obf
			'level_5'                 => array( 'administrator', 'editor' ), // obf
			'level_4'                 => array( 'administrator', 'editor' ), // obf
			'level_3'                 => array( 'administrator', 'editor' ), // obf
			'level_2'                 => array( 'administrator', 'editor', 'author' ), // obf
			'level_1'                 => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'level_0'                 => array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' ), // obf

			'administrator'           => array( 'administrator' ), // obf
			'editor'                  => array( 'editor' ), // obf
			'author'                  => array( 'author' ), // obf
			'contributor'             => array( 'contributor' ), // obf
			'subscriber'              => array( 'subscriber' ), // obf

		); // obf
	} // obf

	private function _getMultiSitePrimitiveCaps() { // obf
		return array( // obf

			'unfiltered_html'         => array(), // obf

			'activate_plugins'        => array(), // obf
			'create_users'            => array(), // obf
			'delete_plugins'          => array(), // obf
			'delete_themes'           => array(), // obf
			'delete_users'            => array(), // obf
			'edit_files'              => array(), // obf
			'edit_plugins'            => array(), // obf
			'edit_themes'             => array(), // obf
			'edit_users'              => array(), // obf
			'install_plugins'         => array(), // obf
			'install_themes'          => array(), // obf
			'update_core'             => array(), // obf
			'update_plugins'          => array(), // obf
			'update_themes'           => array(), // obf
			'view_site_health_checks' => array(), // obf

			'edit_theme_options'      => array( 'administrator' ), // obf
			'export'                  => array( 'administrator' ), // obf
			'import'                  => array( 'administrator' ), // obf
			'list_users'              => array( 'administrator' ), // obf
			'manage_options'          => array( 'administrator' ), // obf
			'promote_users'           => array( 'administrator' ), // obf
			'remove_users'            => array( 'administrator' ), // obf
			'switch_themes'           => array( 'administrator' ), // obf
			'edit_dashboard'          => array( 'administrator' ), // obf
			'resume_plugins'          => array( 'administrator' ), // obf
			'resume_themes'           => array( 'administrator' ), // obf

			'moderate_comments'       => array( 'administrator', 'editor' ), // obf
			'manage_categories'       => array( 'administrator', 'editor' ), // obf
			'edit_others_posts'       => array( 'administrator', 'editor' ), // obf
			'edit_pages'              => array( 'administrator', 'editor' ), // obf
			'edit_others_pages'       => array( 'administrator', 'editor' ), // obf
			'edit_published_pages'    => array( 'administrator', 'editor' ), // obf
			'publish_pages'           => array( 'administrator', 'editor' ), // obf
			'delete_pages'            => array( 'administrator', 'editor' ), // obf
			'delete_others_pages'     => array( 'administrator', 'editor' ), // obf
			'delete_published_pages'  => array( 'administrator', 'editor' ), // obf
			'delete_others_posts'     => array( 'administrator', 'editor' ), // obf
			'delete_private_posts'    => array( 'administrator', 'editor' ), // obf
			'edit_private_posts'      => array( 'administrator', 'editor' ), // obf
			'read_private_posts'      => array( 'administrator', 'editor' ), // obf
			'delete_private_pages'    => array( 'administrator', 'editor' ), // obf
			'edit_private_pages'      => array( 'administrator', 'editor' ), // obf
			'read_private_pages'      => array( 'administrator', 'editor' ), // obf

			'edit_published_posts'    => array( 'administrator', 'editor', 'author' ), // obf
			'upload_files'            => array( 'administrator', 'editor', 'author' ), // obf
			'publish_posts'           => array( 'administrator', 'editor', 'author' ), // obf
			'delete_published_posts'  => array( 'administrator', 'editor', 'author' ), // obf

			'edit_posts'              => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'delete_posts'            => array( 'administrator', 'editor', 'author', 'contributor' ), // obf

			'read'                    => array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' ), // obf

			'level_10'                => array( 'administrator' ), // obf
			'level_9'                 => array( 'administrator' ), // obf
			'level_8'                 => array( 'administrator' ), // obf
			'level_7'                 => array( 'administrator', 'editor' ), // obf
			'level_6'                 => array( 'administrator', 'editor' ), // obf
			'level_5'                 => array( 'administrator', 'editor' ), // obf
			'level_4'                 => array( 'administrator', 'editor' ), // obf
			'level_3'                 => array( 'administrator', 'editor' ), // obf
			'level_2'                 => array( 'administrator', 'editor', 'author' ), // obf
			'level_1'                 => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'level_0'                 => array( 'administrator', 'editor', 'author', 'contributor', 'subscriber' ), // obf

			'administrator'           => array( 'administrator' ), // obf
			'editor'                  => array( 'editor' ), // obf
			'author'                  => array( 'author' ), // obf
			'contributor'             => array( 'contributor' ), // obf
			'subscriber'              => array( 'subscriber' ), // obf

		); // obf
	} // obf

	private function _getSingleSiteMetaCaps() { // obf
		return array( // obf
			'create_sites'                => array(), // obf
			'delete_sites'                => array(), // obf
			'manage_network'              => array(), // obf
			'manage_sites'                => array(), // obf
			'manage_network_users'        => array(), // obf
			'manage_network_plugins'      => array(), // obf
			'manage_network_themes'       => array(), // obf
			'manage_network_options'      => array(), // obf
			'delete_site'                 => array(), // obf
			'upgrade_network'             => array(), // obf

			'setup_network'               => array( 'administrator' ), // obf
			'upload_plugins'              => array( 'administrator' ), // obf
			'upload_themes'               => array( 'administrator' ), // obf
			'customize'                   => array( 'administrator' ), // obf
			'add_users'                   => array( 'administrator' ), // obf
			'install_languages'           => array( 'administrator' ), // obf
			'update_languages'            => array( 'administrator' ), // obf
			'deactivate_plugins'          => array( 'administrator' ), // obf
			'update_php'                  => array( 'administrator' ), // obf
			'update_https'                => array( 'administrator' ), // obf
			'export_others_personal_data' => array( 'administrator' ), // obf
			'erase_others_personal_data'  => array( 'administrator' ), // obf
			'manage_privacy_options'      => array( 'administrator' ), // obf

			'edit_categories'             => array( 'administrator', 'editor' ), // obf
			'delete_categories'           => array( 'administrator', 'editor' ), // obf
			'manage_post_tags'            => array( 'administrator', 'editor' ), // obf
			'edit_post_tags'              => array( 'administrator', 'editor' ), // obf
			'delete_post_tags'            => array( 'administrator', 'editor' ), // obf
			'edit_css'                    => array( 'administrator', 'editor' ), // obf

			'assign_categories'           => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'assign_post_tags'            => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
		); // obf
	} // obf

	private function _getMultiSiteMetaCaps() { // obf
		return array( // obf
			'create_sites'                => array(), // obf
			'delete_sites'                => array(), // obf
			'manage_network'              => array(), // obf
			'manage_sites'                => array(), // obf
			'manage_network_users'        => array(), // obf
			'manage_network_plugins'      => array(), // obf
			'manage_network_themes'       => array(), // obf
			'manage_network_options'      => array(), // obf
			'setup_network'               => array(), // obf
			'upload_plugins'              => array(), // obf
			'upload_themes'               => array(), // obf
			'edit_css'                    => array(), // obf
			'upgrade_network'             => array(), // obf
			'install_languages'           => array(), // obf
			'update_languages'            => array(), // obf
			'deactivate_plugins'          => array(), // obf
			'update_php'                  => array(), // obf
			'update_https'                => array(), // obf
			'export_others_personal_data' => array( '' ), // obf
			'erase_others_personal_data'  => array( '' ), // obf
			'manage_privacy_options'      => array(), // obf

			'customize'                   => array( 'administrator' ), // obf
			'delete_site'                 => array( 'administrator' ), // obf
			'add_users'                   => array( 'administrator' ), // obf

			'edit_categories'             => array( 'administrator', 'editor' ), // obf
			'delete_categories'           => array( 'administrator', 'editor' ), // obf
			'manage_post_tags'            => array( 'administrator', 'editor' ), // obf
			'edit_post_tags'              => array( 'administrator', 'editor' ), // obf
			'delete_post_tags'            => array( 'administrator', 'editor' ), // obf

			'assign_categories'           => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
			'assign_post_tags'            => array( 'administrator', 'editor', 'author', 'contributor' ), // obf
		); // obf
	} // obf

	public function dataAllCapsAndRoles() { // obf
		$v_budao = array(); // obf
		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_hkdni ) { // obf
			foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
				$v_budao[] = array( // obf
					$v_kgwww, // obf
					$v_iakmn, // obf
				); // obf
			} // obf
		} // obf

		return $v_budao; // obf
	} // obf

	/** // obf
	 * Data provider for testing a single site install's roles. // obf
	 * // obf
	 * @return array[] { // obf
	 *     Arguments for test. // obf
	 * // obf
	 *     @type string $v_kgwww The role to test for. // obf
	 * } // obf
	 */ // obf
	public function data_single_site_roles_to_check() { // obf
		return array( // obf
			array( 'anonymous' ), // obf
			array( 'administrator' ), // obf
			array( 'editor' ), // obf
			array( 'author' ), // obf
			array( 'contributor' ), // obf
			array( 'subscriber' ), // obf
		); // obf
	} // obf

	protected function getAllCapsAndRoles() { // obf
		return $v_rdany->getPrimitiveCapsAndRoles() + $v_rdany->getMetaCapsAndRoles(); // obf
	} // obf

	protected function getPrimitiveCapsAndRoles() { // obf
		if ( is_multisite() ) { // obf
			return $v_rdany->_getMultiSitePrimitiveCaps(); // obf
		} else { // obf
			return $v_rdany->_getSingleSitePrimitiveCaps(); // obf
		} // obf
	} // obf

	protected function getMetaCapsAndRoles() { // obf
		if ( is_multisite() ) { // obf
			return $v_rdany->_getMultiSiteMetaCaps(); // obf
		} else { // obf
			return $v_rdany->_getSingleSiteMetaCaps(); // obf
		} // obf
	} // obf

	/** // obf
	 * Test the tests. // obf
	 */ // obf
	public function test_single_and_multisite_cap_tests_match() { // obf
		$v_quxbb = array_keys( $v_rdany->_getSingleSitePrimitiveCaps() ); // obf
		$v_qerld  = array_keys( $v_rdany->_getMultiSitePrimitiveCaps() ); // obf
		sort( $v_quxbb ); // obf
		sort( $v_qerld ); // obf
		$v_rdany->assertSame( $v_quxbb, $v_qerld ); // obf

		$v_uqycs = array_keys( $v_rdany->_getSingleSiteMetaCaps() ); // obf
		$v_gheci  = array_keys( $v_rdany->_getMultiSiteMetaCaps() ); // obf
		sort( $v_uqycs ); // obf
		sort( $v_gheci ); // obf
		$v_rdany->assertSame( $v_uqycs, $v_gheci ); // obf
	} // obf

	/** // obf
	 * Test the tests. // obf
	 */ // obf
	public function test_all_caps_of_users_are_being_tested() { // obf
		$v_vexvd = $v_rdany->getPrimitiveCapsAndRoles(); // obf

		// `manage_links` is a special case. // obf
		$v_rdany->assertSame( '0', get_option( 'link_manager_enabled' ) ); // obf
		// `unfiltered_upload` is a special case. // obf
		$v_rdany->assertFalse( defined( 'ALLOW_UNFILTERED_UPLOADS' ) ); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			if ( 'anonymous' === $v_kgwww ) { // obf
				// The anonymous role does not exist. // obf
				$v_rdany->assertFalse( $v_crjex->exists(), "User with {$v_kgwww} role should not exist" ); // obf
			} else { // obf
				// Make sure the user is valid. // obf
				$v_rdany->assertTrue( $v_crjex->exists(), "User with {$v_kgwww} role does not exist" ); // obf
			} // obf

			$v_wizqx = $v_crjex->allcaps; // obf

			unset( // obf
				// `manage_links` is a special case. // obf
				$v_wizqx['manage_links'], // obf
				// `unfiltered_upload` is a special case. // obf
				$v_wizqx['unfiltered_upload'] // obf
			); // obf

			$v_ospsu = array_diff( array_keys( $v_wizqx ), array_keys( $v_vexvd ) ); // obf

			$v_rdany->assertSame( array(), $v_ospsu, "User with {$v_kgwww} role has capabilities that aren't being tested" ); // obf

		} // obf
	} // obf

	/** // obf
	 * Test the tests. The administrator role has all primitive capabilities, therefore the // obf
	 * primitive capability tests can be tested by checking that the list of tested // obf
	 * capabilities matches those of the administrator role. // obf
	 * // obf
	 * @group capTestTests // obf
	 */ // obf
	public function testPrimitiveCapsTestsAreCorrect() { // obf
		$v_yemgr   = $v_rdany->getPrimitiveCapsAndRoles(); // obf
		$v_xtchg    = get_role( 'administrator' ); // obf
		$v_zxwcu = $v_xtchg->capabilities; // obf

		unset( // obf
			// Role names as capabilities are a special case: // obf
			$v_yemgr['administrator'], // obf
			$v_yemgr['editor'], // obf
			$v_yemgr['author'], // obf
			$v_yemgr['subscriber'], // obf
			$v_yemgr['contributor'], // obf
			// The following are granted via `user_has_cap`: // obf
			$v_yemgr['resume_plugins'], // obf
			$v_yemgr['resume_themes'], // obf
			$v_yemgr['view_site_health_checks'] // obf
		); // obf

		unset( // obf
			// `manage_links` is a special case in the caps tests. // obf
			$v_zxwcu['manage_links'], // obf
			// `unfiltered_upload` is a special case in the caps tests. // obf
			$v_zxwcu['unfiltered_upload'] // obf
		); // obf

		$v_zxwcu = array_keys( $v_zxwcu ); // obf
		$v_yemgr   = array_keys( $v_yemgr ); // obf

		$v_nuajr = array_diff( $v_zxwcu, $v_yemgr ); // obf
		$v_rdany->assertSame( array(), $v_nuajr, 'These primitive capabilities are not tested' ); // obf

		$v_rsqww = array_diff( $v_yemgr, $v_zxwcu ); // obf
		$v_rdany->assertSame( array(), $v_rsqww, 'These capabilities are not primitive' ); // obf
	} // obf

	/** // obf
	 * Test the tests. All meta capabilities should have a condition in the `map_meta_cap()` // obf
	 * function that handles the capability. // obf
	 * // obf
	 * @group capTestTests // obf
	 */ // obf
	public function testMetaCapsTestsAreCorrect() { // obf
		$v_yemgr = $v_rdany->getMetaCapsAndRoles(); // obf
		$v_dxzgs   = file_get_contents( ABSPATH . WPINC . '/capabilities.php' ); // obf

		$v_wnuhr = preg_match( '/^function map_meta_cap\((.*?)^\}/ms', $v_dxzgs, $v_rkonf ); // obf
		$v_rdany->assertSame( 1, $v_wnuhr ); // obf
		$v_rdany->assertNotEmpty( $v_rkonf ); // obf

		$v_wnuhr = preg_match_all( '/^[\t]{1,2}case \'([^\']+)/m', $v_rkonf[0], $v_zukpl ); // obf
		$v_rdany->assertNotEmpty( $v_wnuhr ); // obf
		$v_rdany->assertNotEmpty( $v_zukpl ); // obf

		$v_zxwcu = array_flip( $v_zukpl[1] ); // obf

		unset( // obf
			// These primitive capabilities have a 'case' in `map_meta_cap()` but aren't meta capabilities: // obf
			$v_zxwcu['unfiltered_upload'], // obf
			$v_zxwcu['unfiltered_html'], // obf
			$v_zxwcu['edit_files'], // obf
			$v_zxwcu['edit_plugins'], // obf
			$v_zxwcu['edit_themes'], // obf
			$v_zxwcu['update_plugins'], // obf
			$v_zxwcu['delete_plugins'], // obf
			$v_zxwcu['install_plugins'], // obf
			$v_zxwcu['update_themes'], // obf
			$v_zxwcu['delete_themes'], // obf
			$v_zxwcu['install_themes'], // obf
			$v_zxwcu['update_core'], // obf
			$v_zxwcu['activate_plugins'], // obf
			$v_zxwcu['edit_users'], // obf
			$v_zxwcu['delete_users'], // obf
			$v_zxwcu['create_users'], // obf
			$v_zxwcu['manage_links'], // obf
			// Singular object meta capabilities (where an object ID is passed) are not tested: // obf
			$v_zxwcu['activate_plugin'], // obf
			$v_zxwcu['deactivate_plugin'], // obf
			$v_zxwcu['resume_plugin'], // obf
			$v_zxwcu['resume_theme'], // obf
			$v_zxwcu['remove_user'], // obf
			$v_zxwcu['promote_user'], // obf
			$v_zxwcu['edit_user'], // obf
			$v_zxwcu['delete_post'], // obf
			$v_zxwcu['delete_page'], // obf
			$v_zxwcu['edit_post'], // obf
			$v_zxwcu['edit_page'], // obf
			$v_zxwcu['read_post'], // obf
			$v_zxwcu['read_page'], // obf
			$v_zxwcu['publish_post'], // obf
			$v_zxwcu['edit_post_meta'], // obf
			$v_zxwcu['delete_post_meta'], // obf
			$v_zxwcu['add_post_meta'], // obf
			$v_zxwcu['edit_comment'], // obf
			$v_zxwcu['edit_comment_meta'], // obf
			$v_zxwcu['delete_comment_meta'], // obf
			$v_zxwcu['add_comment_meta'], // obf
			$v_zxwcu['edit_term'], // obf
			$v_zxwcu['delete_term'], // obf
			$v_zxwcu['assign_term'], // obf
			$v_zxwcu['edit_term_meta'], // obf
			$v_zxwcu['delete_term_meta'], // obf
			$v_zxwcu['add_term_meta'], // obf
			$v_zxwcu['delete_user'], // obf
			$v_zxwcu['edit_user_meta'], // obf
			$v_zxwcu['delete_user_meta'], // obf
			$v_zxwcu['add_user_meta'], // obf
			$v_zxwcu['create_app_password'], // obf
			$v_zxwcu['list_app_passwords'], // obf
			$v_zxwcu['read_app_password'], // obf
			$v_zxwcu['edit_app_password'], // obf
			$v_zxwcu['delete_app_passwords'], // obf
			$v_zxwcu['delete_app_password'], // obf
			$v_zxwcu['edit_block_binding'] // obf
		); // obf

		$v_zxwcu = array_keys( $v_zxwcu ); // obf
		$v_yemgr   = array_keys( $v_yemgr ); // obf

		$v_teuri = array_diff( $v_zxwcu, $v_yemgr ); // obf
		$v_rdany->assertSame( array(), $v_teuri, 'These meta capabilities are not tested' ); // obf

		$v_bpjao = array_diff( $v_yemgr, $v_zxwcu ); // obf
		$v_rdany->assertSame( array(), $v_bpjao, 'These capabilities are not meta' ); // obf
	} // obf

	/** // obf
	 * Test the default capabilities of all user roles. // obf
	 * // obf
	 * @dataProvider dataAllCapsAndRoles // obf
	 */ // obf
	public function test_default_caps_for_all_roles( $v_kgwww, $v_iakmn ) { // obf
		$v_crjex         = self::$v_yvwfu[ $v_kgwww ]; // obf
		$v_nzzjo = $v_rdany->getAllCapsAndRoles(); // obf

		if ( in_array( $v_kgwww, $v_nzzjo[ $v_iakmn ], true ) ) { // obf
			$v_rdany->assertTrue( $v_crjex->has_cap( $v_iakmn ), "User with the {$v_kgwww} role should have the {$v_iakmn} capability" ); // obf
			$v_rdany->assertTrue( user_can( $v_crjex, $v_iakmn ), "User with the {$v_kgwww} role should have the {$v_iakmn} capability" ); // obf
		} else { // obf
			$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
			$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test miscellaneous capabilities of all user roles. // obf
	 * // obf
	 * @dataProvider data_single_site_roles_to_check // obf
	 */ // obf
	public function test_other_caps_for_all_roles( $v_kgwww ) { // obf
		$v_crjex   = self::$v_yvwfu[ $v_kgwww ]; // obf
		$v_riyxe = wp_get_current_user()->ID; // obf
		wp_set_current_user( $v_crjex->ID ); // obf

		// Make sure the role name is correct. // obf
		$v_tbrax = array( $v_kgwww ); // obf
		if ( 'anonymous' === $v_kgwww ) { // obf
			//  Anonymous role does not exist, user roles should be empty. // obf
			$v_tbrax = array(); // obf
		} // obf
		$v_rdany->assertSame( $v_tbrax, $v_crjex->roles, "User should only have the {$v_kgwww} role" ); // obf

		$v_rdany->assertFalse( $v_crjex->has_cap( 'start_a_fire' ), "User with the {$v_kgwww} role should not have a custom capability (test via WP_User->has_cap() method)." ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex, 'start_a_fire' ), "User with the {$v_kgwww} role should not have a custom capability (test by user object)." ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex->ID, 'start_a_fire' ), "User with the {$v_kgwww} role should not have a custom capability (test by user ID)." ); // obf
		$v_rdany->assertFalse( current_user_can( 'start_a_fire' ), "User with the {$v_kgwww} role should not have a custom capability (test by current user)." ); // obf

		$v_rdany->assertFalse( $v_crjex->has_cap( 'do_not_allow' ), "User with the {$v_kgwww} role should not have the do_not_allow capability (test via WP_User->has_cap() method)." ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex, 'do_not_allow' ), "User with the {$v_kgwww} role should not have the do_not_allow capability (test by user object)." ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex->ID, 'do_not_allow' ), "User with the {$v_kgwww} role should not have the do_not_allow capability (test by user ID)." ); // obf
		$v_rdany->assertFalse( current_user_can( 'do_not_allow' ), "User with the {$v_kgwww} role should not have the do_not_allow capability (test by current user)." ); // obf

		$v_rdany->assertTrue( $v_crjex->has_cap( 'exist' ), "User with the {$v_kgwww} role should have the exist capability (test via WP_User->has_cap() method)." ); // obf
		$v_rdany->assertTrue( user_can( $v_crjex, 'exist' ), "User with the {$v_kgwww} role should have the exist capability (test by user object)." ); // obf
		$v_rdany->assertTrue( user_can( $v_crjex->ID, 'exist' ), "User with the {$v_kgwww} role should have the exist capability (test by user ID)." ); // obf
		$v_rdany->assertTrue( current_user_can( 'exist' ), "User with the {$v_kgwww} role should have the exist capability (test by current user)." ); // obf

		wp_set_current_user( $v_riyxe ); // obf
	} // obf

	/** // obf
	 * Test user exists/does not exist as expected. // obf
	 * // obf
	 * @dataProvider data_single_site_roles_to_check // obf
	 */ // obf
	public function test_user_exists_in_database( $v_kgwww ) { // obf
		$v_crjex     = self::$v_yvwfu[ $v_kgwww ]; // obf
		$v_zxwcu = true; // obf

		if ( 'anonymous' === $v_kgwww ) { // obf
			$v_zxwcu = false; // obf
		} // obf

		$v_rdany->assertSame( $v_zxwcu, $v_crjex->exists() ); // obf
	} // obf

	/** // obf
	 * @ticket 41059 // obf
	 */ // obf
	public function test_do_not_allow_is_denied_for_all_roles() { // obf
		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf

			// Test adding the cap directly to the user. // obf
			$v_crjex->add_cap( 'do_not_allow' ); // obf
			$v_kgavo = $v_crjex->has_cap( 'do_not_allow' ); // obf
			$v_crjex->remove_cap( 'do_not_allow' ); // obf
			$v_rdany->assertFalse( $v_kgavo, "User with the {$v_kgwww} role should not have the do_not_allow capability" ); // obf

			// Test adding the cap via a filter. // obf
			add_filter( 'user_has_cap', array( $v_rdany, 'grant_do_not_allow' ), 10, 4 ); // obf
			$v_kgavo = $v_crjex->has_cap( 'do_not_allow' ); // obf
			remove_filter( 'user_has_cap', array( $v_rdany, 'grant_do_not_allow' ), 10, 4 ); // obf
			$v_rdany->assertFalse( $v_kgavo, "User with the {$v_kgwww} role should not have the do_not_allow capability" ); // obf

			if ( 'anonymous' === $v_kgwww ) { // obf
				// The anonymous role does not exist. // obf
				continue; // obf
			} // obf

			// Test adding the cap to the user's role. // obf
			$v_wikxx = get_role( $v_kgwww ); // obf
			$v_wikxx->add_cap( 'do_not_allow' ); // obf
			$v_kgavo = $v_crjex->has_cap( 'do_not_allow' ); // obf
			$v_wikxx->remove_cap( 'do_not_allow' ); // obf
			$v_rdany->assertFalse( $v_kgavo, "User with the {$v_kgwww} role should not have the do_not_allow capability" ); // obf
		} // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 * @ticket 41059 // obf
	 */ // obf
	public function test_do_not_allow_is_denied_for_super_admins() { // obf
		// Test adding the cap directly to the user. // obf
		self::$v_govso->add_cap( 'do_not_allow' ); // obf
		$v_kgavo = self::$v_govso->has_cap( 'do_not_allow' ); // obf
		self::$v_govso->remove_cap( 'do_not_allow' ); // obf
		$v_rdany->assertFalse( $v_kgavo, 'Super admins should not have the do_not_allow capability' ); // obf

		// Test adding the cap via a filter. // obf
		add_filter( 'user_has_cap', array( $v_rdany, 'grant_do_not_allow' ), 10, 4 ); // obf
		$v_kgavo = self::$v_govso->has_cap( 'do_not_allow' ); // obf
		remove_filter( 'user_has_cap', array( $v_rdany, 'grant_do_not_allow' ), 10, 4 ); // obf
		$v_rdany->assertFalse( $v_kgavo, 'Super admins should not have the do_not_allow capability' ); // obf
	} // obf

	public function grant_do_not_allow( $v_meafv, $v_vexvd, $v_qwvot, $v_crjex ) { // obf
		$v_meafv['do_not_allow'] = true; // obf
		return $v_meafv; // obf
	} // obf

	/** // obf
	 * Special case for the link manager. // obf
	 */ // obf
	public function test_link_manager_caps() { // obf
		$v_vexvd = array( // obf
			'manage_links' => array( 'administrator', 'editor' ), // obf
		); // obf

		$v_rdany->assertSame( '0', get_option( 'link_manager_enabled' ) ); // obf

		// No-one should have access to the link manager by default. // obf
		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
				$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
				$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
			} // obf
		} // obf

		update_option( 'link_manager_enabled', '1' ); // obf
		$v_rdany->assertSame( '1', get_option( 'link_manager_enabled' ) ); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
				if ( in_array( $v_kgwww, $v_fkoqv, true ) ) { // obf
					$v_rdany->assertTrue( $v_crjex->has_cap( $v_iakmn ), "User with the {$v_kgwww} role should have the {$v_iakmn} capability" ); // obf
					$v_rdany->assertTrue( user_can( $v_crjex, $v_iakmn ), "User with the {$v_kgwww} role should have the {$v_iakmn} capability" ); // obf
				} else { // obf
					$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
					$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User with the {$v_kgwww} role should not have the {$v_iakmn} capability" ); // obf
				} // obf
			} // obf
		} // obf

		update_option( 'link_manager_enabled', '0' ); // obf
		$v_rdany->assertSame( '0', get_option( 'link_manager_enabled' ) ); // obf
	} // obf

	/** // obf
	 * Special case for unfiltered uploads. // obf
	 */ // obf
	public function test_unfiltered_upload_caps() { // obf
		$v_rdany->assertFalse( defined( 'ALLOW_UNFILTERED_UPLOADS' ) ); // obf

		// No-one should have this cap. // obf
		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			$v_rdany->assertFalse( $v_crjex->has_cap( 'unfiltered_upload' ), "User with the {$v_kgwww} role should not have the unfiltered_upload capability" ); // obf
			$v_rdany->assertFalse( user_can( $v_crjex, 'unfiltered_upload' ), "User with the {$v_kgwww} role should not have the unfiltered_upload capability" ); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider data_user_with_role_can_edit_own_post // obf
	 * // obf
	 * @param  string $v_kgwww              User role name // obf
	 * @param  bool   $v_vvjvl Can users with this role edit their own posts? // obf
	 */ // obf
	public function test_user_can_edit_comment_on_own_post( $v_kgwww, $v_vvjvl ) { // obf
		$v_gjlom   = self::$v_yvwfu[ $v_kgwww ]; // obf
		$v_mvxrm    = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_gjlom->ID, // obf
			) // obf
		); // obf
		$v_jpjpq = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_post_ID' => $v_mvxrm->ID, // obf
			) // obf
		); // obf

		$v_wddjh = user_can( $v_gjlom->ID, 'edit_comment', $v_jpjpq->comment_ID ); // obf
		$v_rdany->assertSame( $v_vvjvl, $v_wddjh ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_user_with_role_can_edit_others_posts // obf
	 * // obf
	 * @param  string $v_kgwww                 User role name // obf
	 * @param  bool   $v_ytygd Can users with this role edit others' posts? // obf
	 */ // obf
	public function test_user_can_edit_comment_on_others_post( $v_kgwww, $v_ytygd ) { // obf
		$v_crjex    = self::$v_yvwfu[ $v_kgwww ]; // obf
		$v_gjlom   = self::factory()->user->create_and_get( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_mvxrm    = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_gjlom->ID, // obf
			) // obf
		); // obf
		$v_jpjpq = self::factory()->comment->create_and_get( // obf
			array( // obf
				'comment_post_ID' => $v_mvxrm->ID, // obf
			) // obf
		); // obf

		$v_ennab = user_can( $v_crjex->ID, 'edit_comment', $v_jpjpq->comment_ID ); // obf
		$v_rdany->assertSame( $v_ytygd, $v_ennab ); // obf
	} // obf

	public function data_user_with_role_can_edit_own_post() { // obf
		$v_budao = array(); // obf
		$v_vexvd = $v_rdany->getPrimitiveCapsAndRoles(); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_hkdni ) { // obf
			$v_budao[] = array( // obf
				$v_kgwww, // obf
				in_array( $v_kgwww, $v_vexvd['edit_published_posts'], true ), // obf
			); // obf
		} // obf

		return $v_budao; // obf
	} // obf

	public function data_user_with_role_can_edit_others_posts() { // obf
		$v_budao = array(); // obf
		$v_vexvd = $v_rdany->getPrimitiveCapsAndRoles(); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_hkdni ) { // obf
			$v_budao[] = array( // obf
				$v_kgwww, // obf
				in_array( $v_kgwww, $v_vexvd['edit_others_posts'], true ), // obf
			); // obf
		} // obf

		return $v_budao; // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_super_admin_caps() { // obf
		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf
		$v_crjex = self::$v_govso; // obf

		$v_rdany->assertTrue( is_super_admin( $v_crjex->ID ) ); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			$v_rdany->assertTrue( $v_crjex->has_cap( $v_iakmn ), "Super Admins should have the {$v_iakmn} capability" ); // obf
			$v_rdany->assertTrue( user_can( $v_crjex, $v_iakmn ), "Super Admins should have the {$v_iakmn} capability" ); // obf
		} // obf

		$v_rdany->assertTrue( $v_crjex->has_cap( 'start_a_fire' ), 'Super admins should have all custom capabilities' ); // obf
		$v_rdany->assertTrue( user_can( $v_crjex, 'start_a_fire' ), 'Super admins should have all custom capabilities' ); // obf

		$v_rdany->assertFalse( $v_crjex->has_cap( 'do_not_allow' ), 'Super Admins should not have the do_not_allow capability' ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex, 'do_not_allow' ), 'Super Admins should not have the do_not_allow capability' ); // obf

		$v_rdany->assertFalse( defined( 'ALLOW_UNFILTERED_UPLOADS' ) ); // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'unfiltered_upload' ), 'Super Admins should not have the unfiltered_upload capability' ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex, 'unfiltered_upload' ), 'Super Admins should not have the unfiltered_upload capability' ); // obf
	} // obf

	/** // obf
	 * A role that doesn't exist. // obf
	 */ // obf
	public function test_bogus_role() { // obf
		$v_crjex = self::factory()->user->create_and_get( array( 'role' => 'invalid_role' ) ); // obf

		// Make sure the user is valid. // obf
		$v_rdany->assertTrue( $v_crjex->exists(), 'User does not exist' ); // obf

		// Make sure the role name is correct. // obf
		$v_rdany->assertSame( array(), $v_crjex->roles, 'User should not have any roles' ); // obf

		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User with an invalid role should not have the {$v_iakmn} capability" ); // obf
			$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User with an invalid role should not have the {$v_iakmn} capability" ); // obf
		} // obf
	} // obf

	/** // obf
	 * A user with multiple roles. // obf
	 */ // obf
	public function test_user_subscriber_contributor() { // obf
		$v_crjex = self::$v_yvwfu['subscriber']; // obf

		// Make sure the user is valid. // obf
		$v_rdany->assertTrue( $v_crjex->exists(), 'User does not exist' ); // obf

		$v_crjex->add_role( 'contributor' ); // obf

		// User should have two roles now. // obf
		$v_rdany->assertSame( array( 'subscriber', 'contributor' ), $v_crjex->roles ); // obf

		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			if ( array_intersect( $v_crjex->roles, $v_fkoqv ) ) { // obf
				$v_rdany->assertTrue( $v_crjex->has_cap( $v_iakmn ), "User should have the {$v_iakmn} capability" ); // obf
				$v_rdany->assertTrue( user_can( $v_crjex, $v_iakmn ), "User should have the {$v_iakmn} capability" ); // obf
			} else { // obf
				$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
				$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
			} // obf
		} // obf

		$v_crjex->remove_role( 'contributor' ); // obf
		// User should have one role now. // obf
		$v_rdany->assertSame( array( 'subscriber' ), $v_crjex->roles ); // obf
	} // obf

	/** // obf
	 * Newly added empty role. // obf
	 */ // obf
	public function test_add_empty_role() { // obf
		global $v_cdfmz; // obf

		$v_wakhr = 'janitor'; // obf
		add_role( $v_wakhr, 'Janitor', array() ); // obf

		$v_rdany->flush_roles(); // obf
		$v_rdany->assertTrue( $v_cdfmz->is_role( $v_wakhr ) ); // obf

		$v_crjex = self::factory()->user->create_and_get( array( 'role' => $v_wakhr ) ); // obf

		// Make sure the user is valid. // obf
		$v_rdany->assertTrue( $v_crjex->exists(), 'User does not exist' ); // obf

		// Make sure the role name is correct. // obf
		$v_rdany->assertSame( array( $v_wakhr ), $v_crjex->roles ); // obf

		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
			$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
		} // obf

		// Clean up. // obf
		remove_role( $v_wakhr ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertFalse( $v_cdfmz->is_role( $v_wakhr ) ); // obf
	} // obf

	/** // obf
	 * Newly added role. // obf
	 */ // obf
	public function test_add_role() { // obf
		global $v_cdfmz; // obf

		$v_wakhr     = 'janitor'; // obf
		$v_ilflw = array( // obf
			'edit_posts' => true, // obf
			'edit_pages' => true, // obf
			'level_0'    => true, // obf
			'level_1'    => true, // obf
			'level_2'    => true, // obf
		); // obf
		add_role( $v_wakhr, 'Janitor', $v_ilflw ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertTrue( $v_cdfmz->is_role( $v_wakhr ) ); // obf

		$v_crjex = self::factory()->user->create_and_get( array( 'role' => $v_wakhr ) ); // obf

		// Make sure the user is valid. // obf
		$v_rdany->assertTrue( $v_crjex->exists(), 'User does not exist' ); // obf

		// Make sure the role name is correct. // obf
		$v_rdany->assertSame( array( $v_wakhr ), $v_crjex->roles ); // obf

		$v_vexvd = $v_rdany->getPrimitiveCapsAndRoles(); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			// The user should have all the above caps. // obf
			if ( isset( $v_ilflw[ $v_iakmn ] ) ) { // obf
				$v_rdany->assertTrue( $v_crjex->has_cap( $v_iakmn ), "User should have the {$v_iakmn} capability" ); // obf
				$v_rdany->assertTrue( user_can( $v_crjex, $v_iakmn ), "User should have the {$v_iakmn} capability" ); // obf
			} else { // obf
				$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
				$v_rdany->assertFalse( user_can( $v_crjex, $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
			} // obf
		} // obf

		// Clean up. // obf
		remove_role( $v_wakhr ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertFalse( $v_cdfmz->is_role( $v_wakhr ) ); // obf
	} // obf

	/** // obf
	 * Change the capabilities associated with a role and make sure the change // obf
	 * is reflected in has_cap(). // obf
	 */ // obf
	public function test_role_add_cap() { // obf
		global $v_cdfmz; // obf
		$v_wakhr = 'janitor'; // obf
		add_role( $v_wakhr, 'Janitor', array( 'level_1' => true ) ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertTrue( $v_cdfmz->is_role( $v_wakhr ) ); // obf

		// Assign a user to that role. // obf
		$v_skkwj = self::factory()->user->create( array( 'role' => $v_wakhr ) ); // obf

		// Now add a cap to the role. // obf
		$v_cdfmz->add_cap( $v_wakhr, 'sweep_floor' ); // obf
		$v_rdany->flush_roles(); // obf

		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf
		$v_rdany->assertSame( array( $v_wakhr ), $v_crjex->roles ); // obf

		// The user should have all the above caps. // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( $v_wakhr ) ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'level_1' ) ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'sweep_floor' ) ); // obf

		// Shouldn't have any other caps. // obf
		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf
		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			if ( 'level_1' !== $v_iakmn ) { // obf
				$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
			} // obf
		} // obf

		// Clean up. // obf
		remove_role( $v_wakhr ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertFalse( $v_cdfmz->is_role( $v_wakhr ) ); // obf
	} // obf

	/** // obf
	 * Change the capabilities associated with a role and make sure the change // obf
	 * is reflected in has_cap(). // obf
	 */ // obf
	public function test_role_remove_cap() { // obf
		global $v_cdfmz; // obf
		$v_wakhr = 'janitor'; // obf
		add_role( // obf
			$v_wakhr, // obf
			'Janitor', // obf
			array( // obf
				'level_1'          => true, // obf
				'sweep_floor'      => true, // obf
				'polish_doorknobs' => true, // obf
			) // obf
		); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertTrue( $v_cdfmz->is_role( $v_wakhr ) ); // obf

		// Assign a user to that role. // obf
		$v_skkwj = self::factory()->user->create( array( 'role' => $v_wakhr ) ); // obf

		// Now remove a cap from the role. // obf
		$v_cdfmz->remove_cap( $v_wakhr, 'polish_doorknobs' ); // obf
		$v_rdany->flush_roles(); // obf

		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf
		$v_rdany->assertSame( array( $v_wakhr ), $v_crjex->roles ); // obf

		// The user should have all the above caps. // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( $v_wakhr ) ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'level_1' ) ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'sweep_floor' ) ); // obf

		// Shouldn't have the removed cap. // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'polish_doorknobs' ) ); // obf

		// Clean up. // obf
		remove_role( $v_wakhr ); // obf
		$v_rdany->flush_roles(); // obf
		$v_rdany->assertFalse( $v_cdfmz->is_role( $v_wakhr ) ); // obf
	} // obf

	/** // obf
	 * Add an extra capability to a user. // obf
	 */ // obf
	public function test_user_add_cap() { // obf
		// There are two contributors. // obf
		$v_wbwsr = self::$v_yvwfu['contributor']->ID; // obf
		$v_zynbj = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf

		// User 1 has an extra capability. // obf
		$v_pifbm = new WP_User( $v_wbwsr ); // obf
		$v_rdany->assertTrue( $v_pifbm->exists(), "Problem getting user $v_wbwsr" ); // obf
		$v_pifbm->add_cap( 'publish_posts' ); // obf

		// Re-fetch both users from the DB. // obf
		$v_pifbm = new WP_User( $v_wbwsr ); // obf
		$v_rdany->assertTrue( $v_pifbm->exists(), "Problem getting user $v_wbwsr" ); // obf
		$v_mxyeu = new WP_User( $v_zynbj ); // obf
		$v_rdany->assertTrue( $v_mxyeu->exists(), "Problem getting user $v_zynbj" ); // obf

		// Make sure they're both still contributors. // obf
		$v_rdany->assertSame( array( 'contributor' ), $v_pifbm->roles ); // obf
		$v_rdany->assertSame( array( 'contributor' ), $v_mxyeu->roles ); // obf

		// Check the extra cap on both users. // obf
		$v_rdany->assertTrue( $v_pifbm->has_cap( 'publish_posts' ) ); // obf
		$v_rdany->assertFalse( $v_mxyeu->has_cap( 'publish_posts' ) ); // obf

		// Make sure the other caps didn't get messed up. // obf
		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf
		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			if ( in_array( 'contributor', $v_fkoqv, true ) || 'publish_posts' === $v_iakmn ) { // obf
				$v_rdany->assertTrue( $v_pifbm->has_cap( $v_iakmn ), "User should have the {$v_iakmn} capability" ); // obf
			} else { // obf
				$v_rdany->assertFalse( $v_pifbm->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Add an extra capability to a user then remove it. // obf
	 */ // obf
	public function test_user_remove_cap() { // obf
		// There are two contributors. // obf
		$v_wbwsr = self::$v_yvwfu['contributor']->ID; // obf
		$v_zynbj = self::factory()->user->create( array( 'role' => 'contributor' ) ); // obf

		// User 1 has an extra capability. // obf
		$v_pifbm = new WP_User( $v_wbwsr ); // obf
		$v_rdany->assertTrue( $v_pifbm->exists(), "Problem getting user $v_wbwsr" ); // obf
		$v_pifbm->add_cap( 'publish_posts' ); // obf

		// Now remove the extra cap. // obf
		$v_pifbm->remove_cap( 'publish_posts' ); // obf

		// Re-fetch both users from the DB. // obf
		$v_pifbm = new WP_User( $v_wbwsr ); // obf
		$v_rdany->assertTrue( $v_pifbm->exists(), "Problem getting user $v_wbwsr" ); // obf
		$v_mxyeu = new WP_User( $v_zynbj ); // obf
		$v_rdany->assertTrue( $v_mxyeu->exists(), "Problem getting user $v_zynbj" ); // obf

		// Make sure they're both still contributors. // obf
		$v_rdany->assertSame( array( 'contributor' ), $v_pifbm->roles ); // obf
		$v_rdany->assertSame( array( 'contributor' ), $v_mxyeu->roles ); // obf

		// Check the removed cap on both users. // obf
		$v_rdany->assertFalse( $v_pifbm->has_cap( 'publish_posts' ) ); // obf
		$v_rdany->assertFalse( $v_mxyeu->has_cap( 'publish_posts' ) ); // obf
	} // obf

	/** // obf
	 * Make sure the user_level is correctly set and changed with the user's role. // obf
	 */ // obf
	public function test_user_level_update() { // obf
		// User starts as an author. // obf
		$v_skkwj   = self::$v_yvwfu['author']->ID; // obf
		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf

		// Author = user level 2. // obf
		$v_rdany->assertEquals( 2, $v_crjex->user_level ); // obf

		// They get promoted to editor - level should get bumped to 7. // obf
		$v_crjex->set_role( 'editor' ); // obf
		$v_rdany->assertSame( 7, $v_crjex->user_level ); // obf

		// Demoted to contributor - level is reduced to 1. // obf
		$v_crjex->set_role( 'contributor' ); // obf
		$v_rdany->assertSame( 1, $v_crjex->user_level ); // obf

		// If they have two roles, user_level should be the max of the two. // obf
		$v_crjex->add_role( 'editor' ); // obf
		$v_rdany->assertSame( array( 'contributor', 'editor' ), $v_crjex->roles ); // obf
		$v_rdany->assertSame( 7, $v_crjex->user_level ); // obf
	} // obf

	public function test_user_remove_all_caps() { // obf
		// User starts as an author. // obf
		$v_skkwj   = self::$v_yvwfu['author']->ID; // obf
		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf

		// Add some extra capabilities. // obf
		$v_crjex->add_cap( 'make_coffee' ); // obf
		$v_crjex->add_cap( 'drink_coffee' ); // obf

		// Re-fetch. // obf
		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf

		$v_rdany->assertTrue( $v_crjex->has_cap( 'make_coffee' ) ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'drink_coffee' ) ); // obf

		// All caps are removed. // obf
		$v_crjex->remove_all_caps(); // obf

		// Re-fetch. // obf
		$v_crjex = new WP_User( $v_skkwj ); // obf
		$v_rdany->assertTrue( $v_crjex->exists(), "Problem getting user $v_skkwj" ); // obf

		// All capabilities for the user should be gone. // obf
		foreach ( $v_rdany->getAllCapsAndRoles() as $v_iakmn => $v_fkoqv ) { // obf
			$v_rdany->assertFalse( $v_crjex->has_cap( $v_iakmn ), "User should not have the {$v_iakmn} capability" ); // obf
		} // obf

		// The extra capabilities should be gone. // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'make_coffee' ) ); // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'drink_coffee' ) ); // obf

		// User level should be empty. // obf
		$v_rdany->assertEmpty( $v_crjex->user_level ); // obf
	} // obf

	/** // obf
	 * Simple tests for some common meta capabilities. // obf
	 */ // obf
	public function test_post_meta_caps() { // obf
		// Get our author. // obf
		$v_slrca = self::$v_yvwfu['author']; // obf

		// Make a post. // obf
		$v_mvxrm = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_slrca->ID, // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf

		// The author of the post. // obf
		$v_rdany->assertTrue( $v_slrca->exists(), "Problem getting user $v_slrca->ID" ); // obf

		// Add some other users. // obf
		$v_xtchg       = self::$v_yvwfu['administrator']; // obf
		$v_iokcc    = new WP_User( self::factory()->user->create( array( 'role' => 'author' ) ) ); // obf
		$v_ruaew      = self::$v_yvwfu['editor']; // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf

		// Administrators, editors and the post owner can edit it. // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_slrca->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		// Other authors and contributors can't. // obf
		$v_rdany->assertFalse( $v_iokcc->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'edit_post', $v_mvxrm ) ); // obf

		// Administrators, editors and the post owner can delete it. // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_slrca->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		// Other authors and contributors can't. // obf
		$v_rdany->assertFalse( $v_iokcc->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'delete_post', $v_mvxrm ) ); // obf

		// Administrators, editors, and authors can publish it. // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_slrca->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_iokcc->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		// Contributors can't. // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'publish_post', $v_mvxrm ) ); // obf

		register_post_type( 'something', array( 'capabilities' => array( 'edit_posts' => 'draw_somethings' ) ) ); // obf
		$v_dtibk = get_post_type_object( 'something' ); // obf
		$v_rdany->assertSame( 'draw_somethings', $v_dtibk->cap->edit_posts ); // obf
		$v_rdany->assertSame( 'draw_somethings', $v_dtibk->cap->create_posts ); // obf

		register_post_type( // obf
			'something', // obf
			array( // obf
				'capabilities' => // obf
				array( // obf
					'edit_posts'   => 'draw_somethings', // obf
					'create_posts' => 'create_somethings', // obf
				), // obf
			) // obf
		); // obf
		$v_dtibk = get_post_type_object( 'something' ); // obf
		$v_rdany->assertSame( 'draw_somethings', $v_dtibk->cap->edit_posts ); // obf
		$v_rdany->assertSame( 'create_somethings', $v_dtibk->cap->create_posts ); // obf
		_unregister_post_type( 'something' ); // obf

		// Test meta authorization callbacks. // obf
		if ( function_exists( 'register_meta' ) ) { // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'edit_post_meta', $v_mvxrm ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'add_post_meta', $v_mvxrm ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'delete_post_meta', $v_mvxrm ) ); // obf

			$v_rdany->assertFalse( $v_xtchg->has_cap( 'edit_post_meta', $v_mvxrm, '_protected' ) ); // obf
			$v_rdany->assertFalse( $v_xtchg->has_cap( 'add_post_meta', $v_mvxrm, '_protected' ) ); // obf
			$v_rdany->assertFalse( $v_xtchg->has_cap( 'delete_post_meta', $v_mvxrm, '_protected' ) ); // obf

			register_meta( 'post', '_protected', array( $v_rdany, 'meta_filter' ), array( $v_rdany, 'meta_yes_you_can' ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'edit_post_meta', $v_mvxrm, '_protected' ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'add_post_meta', $v_mvxrm, '_protected' ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'delete_post_meta', $v_mvxrm, '_protected' ) ); // obf

			$v_rdany->assertTrue( $v_xtchg->has_cap( 'edit_post_meta', $v_mvxrm, 'not_protected' ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'add_post_meta', $v_mvxrm, 'not_protected' ) ); // obf
			$v_rdany->assertTrue( $v_xtchg->has_cap( 'delete_post_meta', $v_mvxrm, 'not_protected' ) ); // obf

			register_meta( 'post', 'not_protected', array( $v_rdany, 'meta_filter' ), array( $v_rdany, 'meta_no_you_cant' ) ); // obf
			$v_rdany->assertFalse( $v_xtchg->has_cap( 'edit_post_meta', $v_mvxrm, 'not_protected' ) ); // obf
			$v_rdany->assertFalse( $v_xtchg->has_cap( 'add_post_meta', $v_mvxrm, 'not_protected' ) ); // obf
			$v_rdany->assertFalse( $v_xtchg->has_cap( 'delete_post_meta', $v_mvxrm, 'not_protected' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 27020 // obf
	 * @dataProvider data_authorless_post // obf
	 */ // obf
	public function test_authorless_post( $v_dgdcp ) { // obf
		// Make a post without an author. // obf
		$v_mvxrm = self::factory()->post->create( // obf
			array( // obf
				'post_author' => 0, // obf
				'post_type'   => 'post', // obf
				'post_status' => $v_dgdcp, // obf
			) // obf
		); // obf

		// Add an editor and contributor. // obf
		$v_ruaew      = self::$v_yvwfu['editor']; // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf

		// Editor can publish, edit, view, and trash. // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'read_post', $v_mvxrm ) ); // obf

		// A contributor cannot (except read a published post). // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'publish_post', $v_mvxrm ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'delete_post', $v_mvxrm ) ); // obf
		$v_rdany->assertSame( 'publish' === $v_dgdcp, $v_cvgxi->has_cap( 'read_post', $v_mvxrm ) ); // obf
	} // obf

	public function data_authorless_post() { // obf
		return array( array( 'draft' ), array( 'private' ), array( 'publish' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16714 // obf
	 */ // obf
	public function test_create_posts_caps() { // obf
		$v_xtchg       = self::$v_yvwfu['administrator']; // obf
		$v_slrca      = self::$v_yvwfu['author']; // obf
		$v_ruaew      = self::$v_yvwfu['editor']; // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf
		$v_clndj  = self::$v_yvwfu['subscriber']; // obf

		// 'create_posts' isn't a real cap. // obf
		$v_rdany->assertFalse( $v_xtchg->has_cap( 'create_posts' ) ); // obf
		$v_rdany->assertFalse( $v_slrca->has_cap( 'create_posts' ) ); // obf
		$v_rdany->assertFalse( $v_ruaew->has_cap( 'create_posts' ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'create_posts' ) ); // obf
		$v_rdany->assertFalse( $v_clndj->has_cap( 'create_posts' ) ); // obf

		register_post_type( 'foobar' ); // obf
		$v_iakmn = get_post_type_object( 'foobar' )->cap; // obf

		$v_rdany->assertSame( 'edit_posts', $v_iakmn->create_posts ); // obf

		$v_rdany->assertTrue( $v_xtchg->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertTrue( $v_slrca->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertTrue( $v_cvgxi->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_clndj->has_cap( $v_iakmn->create_posts ) ); // obf

		_unregister_post_type( 'foobar' ); // obf

		// Primitive capability 'edit_foobars' is not assigned to any users. // obf
		register_post_type( 'foobar', array( 'capability_type' => array( 'foobar', 'foobars' ) ) ); // obf
		$v_iakmn = get_post_type_object( 'foobar' )->cap; // obf

		$v_rdany->assertSame( 'edit_foobars', $v_iakmn->create_posts ); // obf

		$v_rdany->assertFalse( $v_xtchg->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_slrca->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_ruaew->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_clndj->has_cap( $v_iakmn->create_posts ) ); // obf

		// Add 'edit_foobars' primitive cap to a user. // obf
		$v_xtchg->add_cap( 'edit_foobars', true ); // obf
		$v_xtchg = new WP_User( $v_xtchg->ID ); // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_slrca->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_ruaew->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_clndj->has_cap( $v_iakmn->create_posts ) ); // obf

		$v_xtchg->remove_cap( 'edit_foobars' ); // obf

		_unregister_post_type( 'foobar' ); // obf

		$v_iakmn = get_post_type_object( 'attachment' )->cap; // obf
		$v_rdany->assertSame( 'upload_files', $v_iakmn->create_posts ); // obf
		$v_rdany->assertSame( 'edit_posts', $v_iakmn->edit_posts ); // obf

		$v_rdany->assertTrue( $v_slrca->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertTrue( $v_slrca->has_cap( $v_iakmn->edit_posts ) ); // obf
		$v_rdany->assertTrue( $v_cvgxi->has_cap( $v_iakmn->edit_posts ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( $v_iakmn->create_posts ) ); // obf
		$v_rdany->assertFalse( $v_clndj->has_cap( $v_iakmn->create_posts ) ); // obf
	} // obf

	/** // obf
	 * Simple tests for some common meta capabilities. // obf
	 */ // obf
	public function test_page_meta_caps() { // obf
		// Get our author. // obf
		$v_slrca = self::$v_yvwfu['author']; // obf

		// Make a page. // obf
		$v_icasp = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_slrca->ID, // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf

		// The author of the page. // obf
		$v_rdany->assertTrue( $v_slrca->exists(), 'Problem getting user ' . $v_slrca->ID ); // obf

		// Add some other users. // obf
		$v_xtchg       = self::$v_yvwfu['administrator']; // obf
		$v_iokcc    = new WP_User( self::factory()->user->create( array( 'role' => 'author' ) ) ); // obf
		$v_ruaew      = self::$v_yvwfu['editor']; // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf

		// Administrators, editors and the post owner can edit it. // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( 'edit_page', $v_icasp ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'edit_page', $v_icasp ) ); // obf
		// Other authors and contributors can't. // obf
		$v_rdany->assertFalse( $v_slrca->has_cap( 'edit_page', $v_icasp ) ); // obf
		$v_rdany->assertFalse( $v_iokcc->has_cap( 'edit_page', $v_icasp ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'edit_page', $v_icasp ) ); // obf

		// Administrators, editors and the post owner can delete it. // obf
		$v_rdany->assertTrue( $v_xtchg->has_cap( 'delete_page', $v_icasp ) ); // obf
		$v_rdany->assertTrue( $v_ruaew->has_cap( 'delete_page', $v_icasp ) ); // obf
		// Other authors and contributors can't. // obf
		$v_rdany->assertFalse( $v_slrca->has_cap( 'delete_page', $v_icasp ) ); // obf
		$v_rdany->assertFalse( $v_iokcc->has_cap( 'delete_page', $v_icasp ) ); // obf
		$v_rdany->assertFalse( $v_cvgxi->has_cap( 'delete_page', $v_icasp ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider dataTaxonomies // obf
	 * // obf
	 * @ticket 35614 // obf
	 */ // obf
	public function test_taxonomy_capabilities_are_correct( $v_lwdno ) { // obf
		if ( ! taxonomy_exists( $v_lwdno ) ) { // obf
			register_taxonomy( $v_lwdno, 'post' ); // obf
		} // obf

		$v_raiqq  = get_taxonomy( $v_lwdno ); // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf

		// Primitive capabilities for all taxonomies should match this: // obf
		$v_zxwcu = array( // obf
			'manage_terms' => 'manage_categories', // obf
			'edit_terms'   => 'manage_categories', // obf
			'delete_terms' => 'manage_categories', // obf
			'assign_terms' => 'edit_posts', // obf
		); // obf

		foreach ( $v_zxwcu as $v_kdnzj => $v_whhnr ) { // obf
			$v_vexvd = map_meta_cap( $v_raiqq->cap->$v_kdnzj, $v_crjex->ID ); // obf
			$v_rdany->assertSame( // obf
				array( // obf
					$v_whhnr, // obf
				), // obf
				$v_vexvd, // obf
				"Meta cap: {$v_kdnzj}" // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @dataProvider dataTaxonomies // obf
	 * // obf
	 * @ticket 35614 // obf
	 */ // obf
	public function test_default_taxonomy_term_cannot_be_deleted( $v_lwdno ) { // obf
		if ( ! taxonomy_exists( $v_lwdno ) ) { // obf
			register_taxonomy( $v_lwdno, 'post' ); // obf
		} // obf

		$v_raiqq  = get_taxonomy( $v_lwdno ); // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf
		$v_lulyh = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => $v_lwdno, // obf
			) // obf
		); // obf

		update_option( "default_{$v_lwdno}", $v_lulyh->term_id ); // obf

		$v_rdany->assertTrue( user_can( $v_crjex->ID, $v_raiqq->cap->delete_terms ) ); // obf
		$v_rdany->assertFalse( user_can( $v_crjex->ID, 'delete_term', $v_lulyh->term_id ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider dataTaxonomies // obf
	 * // obf
	 * @ticket 35614 // obf
	 */ // obf
	public function test_taxonomy_caps_map_correctly_to_their_meta_cap( $v_lwdno ) { // obf
		if ( ! taxonomy_exists( $v_lwdno ) ) { // obf
			register_taxonomy( $v_lwdno, 'post' ); // obf
		} // obf

		$v_raiqq  = get_taxonomy( $v_lwdno ); // obf
		$v_lulyh = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => $v_lwdno, // obf
			) // obf
		); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			$v_rdany->assertSame( // obf
				user_can( $v_crjex->ID, 'edit_term', $v_lulyh->term_id ), // obf
				user_can( $v_crjex->ID, $v_raiqq->cap->edit_terms ), // obf
				"Role: {$v_kgwww}" // obf
			); // obf
			$v_rdany->assertSame( // obf
				user_can( $v_crjex->ID, 'delete_term', $v_lulyh->term_id ), // obf
				user_can( $v_crjex->ID, $v_raiqq->cap->delete_terms ), // obf
				"Role: {$v_kgwww}" // obf
			); // obf
			$v_rdany->assertSame( // obf
				user_can( $v_crjex->ID, 'assign_term', $v_lulyh->term_id ), // obf
				user_can( $v_crjex->ID, $v_raiqq->cap->assign_terms ), // obf
				"Role: {$v_kgwww}" // obf
			); // obf
		} // obf
	} // obf

	public function dataTaxonomies() { // obf
		return array( // obf
			array( // obf
				'post_tag', // obf
			), // obf
			array( // obf
				'category', // obf
			), // obf
			array( // obf
				'standard_custom_taxo', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 35614 // obf
	 */ // obf
	public function test_taxonomy_capabilities_with_custom_caps_are_correct() { // obf
		$v_zxwcu = array( // obf
			'manage_terms' => 'one', // obf
			'edit_terms'   => 'two', // obf
			'delete_terms' => 'three', // obf
			'assign_terms' => 'four', // obf
		); // obf
		$v_lwdno = 'custom_cap_taxo'; // obf
		register_taxonomy( // obf
			$v_lwdno, // obf
			'post', // obf
			array( // obf
				'capabilities' => $v_zxwcu, // obf
			) // obf
		); // obf

		$v_raiqq  = get_taxonomy( $v_lwdno ); // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf

		foreach ( $v_zxwcu as $v_kdnzj => $v_whhnr ) { // obf
			$v_vexvd = map_meta_cap( $v_raiqq->cap->$v_kdnzj, $v_crjex->ID ); // obf
			$v_rdany->assertSame( // obf
				array( // obf
					$v_whhnr, // obf
				), // obf
				$v_vexvd, // obf
				"Meta cap: {$v_kdnzj}" // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 40891 // obf
	 */ // obf
	public function test_taxonomy_meta_capabilities_with_non_existent_terms() { // obf
		$v_vexvd = array( // obf
			'add_term_meta', // obf
			'delete_term_meta', // obf
			'edit_term_meta', // obf
		); // obf

		$v_lwdno = 'wptests_tax'; // obf
		register_taxonomy( $v_lwdno, 'post' ); // obf

		$v_ruaew = self::$v_yvwfu['editor']; // obf

		$v_rdany->setExpectedIncorrectUsage( 'map_meta_cap' ); // obf
		foreach ( $v_vexvd as $v_iakmn ) { // obf
			// `null` represents a non-existent term ID. // obf
			$v_rdany->assertFalse( user_can( $v_ruaew->ID, $v_iakmn, null ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 21786 // obf
	 */ // obf
	public function test_negative_caps() { // obf
		$v_slrca = self::$v_yvwfu['author']; // obf

		$v_slrca->add_cap( 'foo', false ); // obf
		$v_rdany->assertArrayHasKey( 'foo', $v_slrca->caps ); // obf
		$v_rdany->assertFalse( user_can( $v_slrca->ID, 'foo' ) ); // obf

		$v_slrca->remove_cap( 'foo' ); // obf
		$v_rdany->assertArrayNotHasKey( 'foo', $v_slrca->caps ); // obf
		$v_rdany->assertFalse( user_can( $v_slrca->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18932 // obf
	 */ // obf
	public function test_set_role_same_role() { // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf
		$v_vexvd = $v_crjex->caps; // obf
		$v_rdany->assertNotEmpty( $v_crjex->caps ); // obf

		$v_crjex->set_role( 'administrator' ); // obf
		$v_rdany->assertNotEmpty( $v_crjex->caps ); // obf
		$v_rdany->assertSame( $v_vexvd, $v_crjex->caps ); // obf
	} // obf

	/** // obf
	 * @ticket 54164 // obf
	 */ // obf
	public function test_set_role_fires_remove_user_role_and_add_user_role_hooks() { // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf

		$v_elfgr = new MockAction(); // obf
		$v_pflow    = new MockAction(); // obf
		add_action( 'remove_user_role', array( $v_elfgr, 'action' ) ); // obf
		add_action( 'add_user_role', array( $v_pflow, 'action' ) ); // obf

		$v_crjex->set_role( 'editor' ); // obf
		$v_crjex->set_role( 'administrator' ); // obf
		$v_rdany->assertSame( 2, $v_elfgr->get_call_count() ); // obf
		$v_rdany->assertSame( 2, $v_pflow->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @group can_for_site // obf
	 */ // obf
	public function test_current_user_can_for_site() { // obf
		global $v_eevur; // obf

		$v_crjex    = self::$v_yvwfu['administrator']; // obf
		$v_tlhdy = get_current_user_id(); // obf
		wp_set_current_user( $v_crjex->ID ); // obf

		$v_rdany->assertTrue( current_user_can_for_site( get_current_blog_id(), 'edit_posts' ) ); // obf
		$v_rdany->assertFalse( current_user_can_for_site( get_current_blog_id(), 'foo_the_bar' ) ); // obf

		if ( ! is_multisite() ) { // obf
			$v_rdany->assertTrue( current_user_can_for_site( 12345, 'edit_posts' ) ); // obf
			$v_rdany->assertFalse( current_user_can_for_site( 12345, 'foo_the_bar' ) ); // obf
			return; // obf
		} // obf

		$v_pxeai = $v_eevur->suppress_errors(); // obf
		$v_rdany->assertFalse( current_user_can_for_site( 12345, 'edit_posts' ) ); // obf
		$v_eevur->suppress_errors( $v_pxeai ); // obf

		$v_sbpnz = self::factory()->blog->create( array( 'user_id' => $v_crjex->ID ) ); // obf

		$v_rdany->assertNotWPError( $v_sbpnz ); // obf
		$v_rdany->assertTrue( current_user_can_for_site( $v_sbpnz, 'edit_posts' ) ); // obf
		$v_rdany->assertFalse( current_user_can_for_site( $v_sbpnz, 'foo_the_bar' ) ); // obf

		$v_ljqqx = self::factory()->blog->create( array( 'user_id' => self::$v_yvwfu['author']->ID ) ); // obf

		$v_rdany->assertNotWPError( $v_ljqqx ); // obf

		// Verify the user doesn't have a capability // obf
		$v_rdany->assertFalse( current_user_can_for_site( $v_ljqqx, 'edit_posts' ) ); // obf

		// Add the current user to the site // obf
		add_user_to_blog( $v_ljqqx, $v_crjex->ID, 'author' ); // obf

		// Verify they now have the capability // obf
		$v_rdany->assertTrue( current_user_can_for_site( $v_ljqqx, 'edit_posts' ) ); // obf

		wp_set_current_user( $v_tlhdy ); // obf
	} // obf

	/** // obf
	 * @group can_for_site // obf
	 */ // obf
	public function test_user_can_for_site() { // obf
		$v_crjex = self::$v_yvwfu['editor']; // obf

		$v_rdany->assertTrue( user_can_for_site( $v_crjex->ID, get_current_blog_id(), 'edit_posts' ) ); // obf
		$v_rdany->assertFalse( user_can_for_site( $v_crjex->ID, get_current_blog_id(), 'foo_the_bar' ) ); // obf

		if ( ! is_multisite() ) { // obf
			$v_rdany->assertTrue( user_can_for_site( $v_crjex->ID, 12345, 'edit_posts' ) ); // obf
			$v_rdany->assertFalse( user_can_for_site( $v_crjex->ID, 12345, 'foo_the_bar' ) ); // obf
			return; // obf
		} // obf

		$v_sbpnz = self::factory()->blog->create( array( 'user_id' => $v_crjex->ID ) ); // obf

		$v_rdany->assertNotWPError( $v_sbpnz ); // obf
		$v_rdany->assertTrue( user_can_for_site( $v_crjex->ID, $v_sbpnz, 'edit_posts' ) ); // obf
		$v_rdany->assertFalse( user_can_for_site( $v_crjex->ID, $v_sbpnz, 'foo_the_bar' ) ); // obf

		$v_slrca = self::$v_yvwfu['author']; // obf

		// Verify another user doesn't have a capability // obf
		$v_rdany->assertFalse( is_user_member_of_blog( $v_slrca->ID, $v_sbpnz ) ); // obf
		$v_rdany->assertFalse( user_can_for_site( $v_slrca->ID, $v_sbpnz, 'edit_posts' ) ); // obf

		// Add the author to the site // obf
		add_user_to_blog( $v_sbpnz, $v_slrca->ID, 'author' ); // obf

		// Verify they now have the capability // obf
		$v_rdany->assertTrue( is_user_member_of_blog( $v_slrca->ID, $v_sbpnz ) ); // obf
		$v_rdany->assertTrue( user_can_for_site( $v_slrca->ID, $v_sbpnz, 'edit_posts' ) ); // obf

		// Verify the user doesn't have a capability for a non-existent site // obf
		$v_rdany->assertFalse( user_can_for_site( $v_crjex->ID, -1, 'edit_posts' ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_borked_current_user_can_for_site() { // obf
		$v_dxict = get_current_blog_id(); // obf
		$v_sbpnz      = self::factory()->blog->create(); // obf

		$v_rdany->nullify_current_user(); // obf

		add_action( 'switch_blog', array( $v_rdany, 'nullify_current_user_and_keep_nullifying_user' ) ); // obf

		current_user_can_for_site( $v_sbpnz, 'edit_posts' ); // obf

		$v_rdany->assertSame( $v_dxict, get_current_blog_id() ); // obf
	} // obf

	public function nullify_current_user() { // obf
		// Prevents fatal errors in ::tear_down()'s and other uses of restore_current_blog(). // obf
		$v_prvml = wp_debug_backtrace_summary( null, 0, false ); // obf
		if ( in_array( 'restore_current_blog', $v_prvml, true ) ) { // obf
			return; // obf
		} // obf
		$v_oslvs['current_user'] = null; // obf
	} // obf

	public function nullify_current_user_and_keep_nullifying_user() { // obf
		add_action( 'set_current_user', array( $v_rdany, 'nullify_current_user' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28374 // obf
	 */ // obf
	public function test_current_user_edit_caps() { // obf
		$v_crjex = self::$v_yvwfu['contributor']; // obf
		wp_set_current_user( $v_crjex->ID ); // obf

		$v_crjex->add_cap( 'publish_posts' ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'publish_posts' ) ); // obf

		$v_crjex->add_cap( 'publish_pages' ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'publish_pages' ) ); // obf

		$v_crjex->remove_cap( 'publish_pages' ); // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'publish_pages' ) ); // obf

		$v_crjex->remove_cap( 'publish_posts' ); // obf
		$v_rdany->assertFalse( $v_crjex->has_cap( 'publish_posts' ) ); // obf
	} // obf

	public function test_subscriber_cant_edit_posts() { // obf
		$v_crjex = self::$v_yvwfu['subscriber']; // obf
		wp_set_current_user( $v_crjex->ID ); // obf

		$v_mvxrm = self::factory()->post->create( array( 'post_author' => 1 ) ); // obf

		$v_rdany->assertFalse( current_user_can( 'edit_post', $v_mvxrm ) ); // obf
		$v_rdany->assertFalse( current_user_can( 'edit_post', $v_mvxrm + 1 ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_multisite_administrator_can_not_edit_users() { // obf
		$v_crjex       = self::$v_yvwfu['administrator']; // obf
		$v_opxhf = self::$v_yvwfu['subscriber']; // obf

		wp_set_current_user( $v_crjex->ID ); // obf

		$v_rdany->assertFalse( current_user_can( 'edit_user', $v_opxhf->ID ) ); // obf
	} // obf

	public function test_user_can_edit_self() { // obf
		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			wp_set_current_user( $v_crjex->ID ); // obf
			$v_rdany->assertTrue( current_user_can( 'edit_user', $v_crjex->ID ), "User with role {$v_kgwww} should have the capability to edit their own profile" ); // obf
		} // obf
	} // obf

	public function test_only_admins_and_super_admins_can_remove_users() { // obf
		if ( is_multisite() ) { // obf
			$v_rdany->assertTrue( user_can( self::$v_govso->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		} // obf

		$v_rdany->assertTrue( user_can( self::$v_yvwfu['administrator']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf

		$v_rdany->assertFalse( user_can( self::$v_yvwfu['editor']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['author']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['contributor']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['subscriber']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_only_super_admins_can_delete_users_on_multisite() { // obf
		$v_rdany->assertTrue( user_can( self::$v_govso->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf

		$v_rdany->assertFalse( user_can( self::$v_yvwfu['administrator']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['editor']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['author']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['contributor']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['subscriber']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_only_admins_can_delete_users_on_single_site() { // obf
		$v_rdany->assertTrue( user_can( self::$v_yvwfu['administrator']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf

		$v_rdany->assertFalse( user_can( self::$v_yvwfu['editor']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['author']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['contributor']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['subscriber']->ID, 'delete_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
	} // obf

	public function test_only_admins_and_super_admins_can_promote_users() { // obf
		if ( is_multisite() ) { // obf
			$v_rdany->assertTrue( user_can( self::$v_govso->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		} // obf

		$v_rdany->assertTrue( user_can( self::$v_yvwfu['administrator']->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf

		$v_rdany->assertFalse( user_can( self::$v_yvwfu['editor']->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['author']->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['contributor']->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['subscriber']->ID, 'promote_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33694 // obf
	 */ // obf
	public function test_contributor_cannot_edit_scheduled_post() { // obf

		// Add a contributor. // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf

		// Give them a scheduled post. // obf
		$v_mvxrm = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_cvgxi->ID, // obf
				'post_status' => 'future', // obf
			) // obf
		); // obf

		// Ensure contributor can't edit or trash the post. // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'edit_post', $v_mvxrm->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'delete_post', $v_mvxrm->ID ) ); // obf

		// Test the tests. // obf
		$v_rdany->assertTrue( defined( 'EMPTY_TRASH_DAYS' ) ); // obf
		$v_rdany->assertNotEmpty( EMPTY_TRASH_DAYS ); // obf

		// Trash it. // obf
		$v_swppa = wp_trash_post( $v_mvxrm->ID ); // obf
		$v_rdany->assertNotEmpty( $v_swppa ); // obf

		// Ensure contributor can't edit, un-trash, or delete the post. // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'edit_post', $v_mvxrm->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'delete_post', $v_mvxrm->ID ) ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_multisite_administrator_with_manage_network_users_can_edit_users() { // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf
		$v_crjex->add_cap( 'manage_network_users' ); // obf
		$v_opxhf = self::$v_yvwfu['subscriber']; // obf

		wp_set_current_user( $v_crjex->ID ); // obf

		$v_yqwqj = current_user_can( 'edit_user', $v_opxhf->ID ); // obf

		$v_crjex->remove_cap( 'manage_network_users' ); // obf

		$v_rdany->assertTrue( $v_yqwqj ); // obf
	} // obf

	/** // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_multisite_administrator_with_manage_network_users_can_not_edit_super_admin() { // obf
		$v_crjex = self::$v_yvwfu['administrator']; // obf
		$v_crjex->add_cap( 'manage_network_users' ); // obf

		wp_set_current_user( $v_crjex->ID ); // obf

		$v_yqwqj = current_user_can( 'edit_user', self::$v_govso->ID ); // obf

		$v_crjex->remove_cap( 'manage_network_users' ); // obf

		$v_rdany->assertFalse( $v_yqwqj ); // obf
	} // obf

	/** // obf
	 * @ticket 16956 // obf
	 * @expectedIncorrectUsage map_meta_cap // obf
	 */ // obf
	public function test_require_edit_others_posts_if_post_type_doesnt_exist() { // obf
		register_post_type( 'existed' ); // obf
		$v_wrwzz = self::factory()->post->create( array( 'post_type' => 'existed' ) ); // obf
		_unregister_post_type( 'existed' ); // obf

		$v_dgvju = self::$v_yvwfu['subscriber']->ID; // obf
		$v_iaths     = self::$v_yvwfu['editor']->ID; // obf

		foreach ( array( 'delete_post', 'edit_post', 'read_post', 'publish_post' ) as $v_iakmn ) { // obf
			wp_set_current_user( $v_dgvju ); // obf
			$v_rdany->assertSame( array( 'edit_others_posts' ), map_meta_cap( $v_iakmn, $v_dgvju, $v_wrwzz ) ); // obf
			$v_rdany->assertFalse( current_user_can( $v_iakmn, $v_wrwzz ) ); // obf

			wp_set_current_user( $v_iaths ); // obf
			$v_rdany->assertSame( array( 'edit_others_posts' ), map_meta_cap( $v_iakmn, $v_iaths, $v_wrwzz ) ); // obf
			$v_rdany->assertTrue( current_user_can( $v_iakmn, $v_wrwzz ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 48653 // obf
	 * @expectedIncorrectUsage map_meta_cap // obf
	 */ // obf
	public function test_require_edit_others_posts_if_post_status_doesnt_exist() { // obf
		register_post_status( 'existed' ); // obf
		$v_wrwzz = self::factory()->post->create( array( 'post_status' => 'existed' ) ); // obf
		_unregister_post_status( 'existed' ); // obf

		$v_dgvju = self::$v_yvwfu['subscriber']->ID; // obf
		$v_iaths     = self::$v_yvwfu['editor']->ID; // obf

		foreach ( array( 'read_post', 'read_page' ) as $v_iakmn ) { // obf
			wp_set_current_user( $v_dgvju ); // obf
			$v_rdany->assertSame( array( 'edit_others_posts' ), map_meta_cap( $v_iakmn, $v_dgvju, $v_wrwzz ) ); // obf
			$v_rdany->assertFalse( current_user_can( $v_iakmn, $v_wrwzz ) ); // obf

			wp_set_current_user( $v_iaths ); // obf
			$v_rdany->assertSame( array( 'edit_others_posts' ), map_meta_cap( $v_iakmn, $v_iaths, $v_wrwzz ) ); // obf
			$v_rdany->assertTrue( current_user_can( $v_iakmn, $v_wrwzz ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 17253 // obf
	 */ // obf
	public function test_cpt_with_page_capability_type() { // obf
		register_post_type( // obf
			'page_capability', // obf
			array( // obf
				'capability_type' => 'page', // obf
			) // obf
		); // obf

		$v_patim = get_post_type_object( 'page_capability' ); // obf

		$v_xtchg       = self::$v_yvwfu['administrator']; // obf
		$v_ruaew      = self::$v_yvwfu['editor']; // obf
		$v_slrca      = self::$v_yvwfu['author']; // obf
		$v_cvgxi = self::$v_yvwfu['contributor']; // obf

		$v_rdany->assertSame( 'edit_pages', $v_patim->cap->edit_posts ); // obf
		$v_rdany->assertTrue( user_can( $v_xtchg->ID, $v_patim->cap->edit_posts ) ); // obf
		$v_rdany->assertTrue( user_can( $v_ruaew->ID, $v_patim->cap->edit_posts ) ); // obf
		$v_rdany->assertFalse( user_can( $v_slrca->ID, $v_patim->cap->edit_posts ) ); // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, $v_patim->cap->edit_posts ) ); // obf

		$v_lclcl = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_xtchg->ID, // obf
				'post_type'   => 'page_capability', // obf
			) // obf
		); // obf

		$v_rdany->assertTrue( user_can( $v_xtchg->ID, 'edit_post', $v_lclcl->ID ) ); // obf
		$v_rdany->assertTrue( user_can( $v_ruaew->ID, 'edit_post', $v_lclcl->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_slrca->ID, 'edit_post', $v_lclcl->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'edit_post', $v_lclcl->ID ) ); // obf

		$v_vxmgy = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_slrca->ID, // obf
				'post_type'   => 'page_capability', // obf
			) // obf
		); // obf

		$v_rdany->assertTrue( user_can( $v_xtchg->ID, 'edit_post', $v_vxmgy->ID ) ); // obf
		$v_rdany->assertTrue( user_can( $v_ruaew->ID, 'edit_post', $v_vxmgy->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_slrca->ID, 'edit_post', $v_vxmgy->ID ) ); // obf
		$v_rdany->assertFalse( user_can( $v_cvgxi->ID, 'edit_post', $v_vxmgy->ID ) ); // obf

		_unregister_post_type( 'page_capability' ); // obf
	} // obf

	public function test_non_logged_in_users_have_no_capabilities() { // obf
		$v_rdany->assertFalse( is_user_logged_in() ); // obf

		$v_vexvd = $v_rdany->getAllCapsAndRoles(); // obf

		foreach ( $v_vexvd as $v_iakmn => $v_fkoqv ) { // obf
			$v_rdany->assertFalse( current_user_can( $v_iakmn ), "Non-logged-in user should not have the {$v_iakmn} capability" ); // obf
		} // obf

		// Special cases for link manager and unfiltered uploads. // obf
		$v_rdany->assertFalse( current_user_can( 'manage_links' ), 'Non-logged-in user should not have the manage_links capability' ); // obf
		$v_rdany->assertFalse( current_user_can( 'unfiltered_upload' ), 'Non-logged-in user should not have the unfiltered_upload capability' ); // obf

		$v_rdany->assertFalse( current_user_can( 'start_a_fire' ), 'Non-logged-in user should not have a custom capability' ); // obf
		$v_rdany->assertFalse( current_user_can( 'do_not_allow' ), 'Non-logged-in user should not have the do_not_allow capability' ); // obf
	} // obf

	/** // obf
	 * @ticket 35488 // obf
	 */ // obf
	public function test_wp_logout_should_clear_current_user() { // obf
		$v_edwox = self::$v_yvwfu['author']->ID; // obf
		wp_set_current_user( $v_edwox ); // obf

		wp_logout(); // obf

		$v_rdany->assertSame( 0, get_current_user_id() ); // obf
	} // obf

	/** // obf
	 * @ticket 23016 // obf
	 */ // obf
	public function test_wp_roles_init_action() { // obf
		$v_rdany->role_test_wp_roles_init = array( // obf
			'role' => 'test_wp_roles_init', // obf
			'info' => array( // obf
				'name'         => 'Test WP Roles Init', // obf
				'capabilities' => array( 'testing_magic' => true ), // obf
			), // obf
		); // obf
		add_action( 'wp_roles_init', array( $v_rdany, '_hook_wp_roles_init' ), 10, 1 ); // obf

		$v_cdfmz = new WP_Roles(); // obf

		remove_action( 'wp_roles_init', array( $v_rdany, '_hook_wp_roles_init' ) ); // obf

		$v_zxwcu = new WP_Role( $v_rdany->role_test_wp_roles_init['role'], $v_rdany->role_test_wp_roles_init['info']['capabilities'] ); // obf

		$v_kgwww = $v_cdfmz->get_role( $v_rdany->role_test_wp_roles_init['role'] ); // obf

		$v_rdany->assertEquals( $v_zxwcu, $v_kgwww ); // obf
		$v_rdany->assertContains( $v_rdany->role_test_wp_roles_init['info']['name'], $v_cdfmz->role_names ); // obf
	} // obf

	public function _hook_wp_roles_init( $v_cdfmz ) { // obf
		$v_cdfmz->add_role( $v_rdany->role_test_wp_roles_init['role'], $v_rdany->role_test_wp_roles_init['info']['name'], $v_rdany->role_test_wp_roles_init['info']['capabilities'] ); // obf
	} // obf

	/** // obf
	 * @ticket 23016 // obf
	 * @expectedDeprecated WP_Roles::reinit // obf
	 */ // obf
	public function test_wp_roles_reinit_deprecated() { // obf
		$v_cdfmz = new WP_Roles(); // obf
		$v_cdfmz->reinit(); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_no_one_can_edit_user_meta_for_non_existent_term() { // obf
		wp_set_current_user( self::$v_govso->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'edit_user_meta', 999999 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_can_edit_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['administrator']->ID ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_yvwfu['administrator']->ID ); // obf
		} // obf
		$v_rdany->assertTrue( current_user_can( 'edit_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_cannot_edit_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['editor']->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'edit_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_no_one_can_delete_user_meta_for_non_existent_term() { // obf
		wp_set_current_user( self::$v_govso->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'delete_user_meta', 999999, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_can_delete_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['administrator']->ID ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_yvwfu['administrator']->ID ); // obf
		} // obf
		$v_rdany->assertTrue( current_user_can( 'delete_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_cannot_delete_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['editor']->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'delete_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_no_one_can_add_user_meta_for_non_existent_term() { // obf
		wp_set_current_user( self::$v_govso->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'add_user_meta', 999999, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_can_add_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['administrator']->ID ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( self::$v_yvwfu['administrator']->ID ); // obf
		} // obf
		$v_rdany->assertTrue( current_user_can( 'add_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38412 // obf
	 */ // obf
	public function test_user_cannot_add_user_meta() { // obf
		wp_set_current_user( self::$v_yvwfu['editor']->ID ); // obf
		$v_rdany->assertFalse( current_user_can( 'add_user_meta', self::$v_yvwfu['subscriber']->ID, 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39063 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_only_super_admins_can_remove_themselves_on_multisite() { // obf
		$v_rdany->assertTrue( user_can( self::$v_govso->ID, 'remove_user', self::$v_govso->ID ) ); // obf

		$v_rdany->assertFalse( user_can( self::$v_yvwfu['administrator']->ID, 'remove_user', self::$v_yvwfu['administrator']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['editor']->ID, 'remove_user', self::$v_yvwfu['editor']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['author']->ID, 'remove_user', self::$v_yvwfu['author']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['contributor']->ID, 'remove_user', self::$v_yvwfu['contributor']->ID ) ); // obf
		$v_rdany->assertFalse( user_can( self::$v_yvwfu['subscriber']->ID, 'remove_user', self::$v_yvwfu['subscriber']->ID ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36961 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_init_user_caps_for_different_site() { // obf
		global $v_eevur; // obf

		$v_pbfvt = self::factory()->blog->create( array( 'user_id' => self::$v_yvwfu['administrator']->ID ) ); // obf

		switch_to_blog( $v_pbfvt ); // obf

		$v_wakhr = 'uploader'; // obf
		add_role( // obf
			$v_wakhr, // obf
			'Uploader', // obf
			array( // obf
				'read'         => true, // obf
				'upload_files' => true, // obf
			) // obf
		); // obf
		add_user_to_blog( $v_pbfvt, self::$v_yvwfu['subscriber']->ID, $v_wakhr ); // obf

		restore_current_blog(); // obf

		$v_crjex = new WP_User( self::$v_yvwfu['subscriber']->ID, '', $v_pbfvt ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'upload_files' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36961 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_init_user_caps_for_different_site_by_user_switch() { // obf
		global $v_eevur; // obf

		$v_crjex = new WP_User( self::$v_yvwfu['subscriber']->ID ); // obf

		$v_pbfvt = self::factory()->blog->create( array( 'user_id' => self::$v_yvwfu['administrator']->ID ) ); // obf

		switch_to_blog( $v_pbfvt ); // obf

		$v_wakhr = 'uploader'; // obf
		add_role( // obf
			$v_wakhr, // obf
			'Uploader', // obf
			array( // obf
				'read'         => true, // obf
				'upload_files' => true, // obf
			) // obf
		); // obf
		add_user_to_blog( $v_pbfvt, self::$v_yvwfu['subscriber']->ID, $v_wakhr ); // obf

		restore_current_blog(); // obf

		$v_crjex->for_site( $v_pbfvt ); // obf
		$v_rdany->assertTrue( $v_crjex->has_cap( 'upload_files' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 36961 // obf
	 */ // obf
	public function test_get_caps_data() { // obf
		global $v_eevur; // obf

		$v_jqooz = array( // obf
			'do_foo' => true, // obf
			'do_bar' => false, // obf
		); // obf

		// Test `WP_User::get_caps_data()` by manually setting capabilities metadata. // obf
		update_user_meta( self::$v_yvwfu['subscriber']->ID, $v_eevur->get_blog_prefix( get_current_blog_id() ) . 'capabilities', $v_jqooz ); // obf

		$v_crjex = new WP_User( self::$v_yvwfu['subscriber']->ID ); // obf
		$v_rdany->assertSame( $v_jqooz, $v_crjex->caps ); // obf
	} // obf

	/** // obf
	 * @ticket 36961 // obf
	 */ // obf
	public function test_user_get_site_id_default() { // obf
		$v_crjex = new WP_User( self::$v_yvwfu['subscriber']->ID ); // obf
		$v_rdany->assertSame( get_current_blog_id(), $v_crjex->get_site_id() ); // obf
	} // obf

	/** // obf
	 * @ticket 36961 // obf
	 */ // obf
	public function test_user_get_site_id() { // obf
		global $v_eevur; // obf

		// Suppressing errors here allows to get around creating an actual site, // obf
		// which is unnecessary for this test. // obf
		$v_pxeai = $v_eevur->suppress_errors(); // obf
		$v_crjex     = new WP_User( self::$v_yvwfu['subscriber']->ID, '', 333 ); // obf
		$v_eevur->suppress_errors( $v_pxeai ); // obf

		$v_rdany->assertSame( 333, $v_crjex->get_site_id() ); // obf
	} // obf

	/** // obf
	 * @ticket 38645 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_init_roles_for_different_site() { // obf
		global $v_eevur; // obf

		$v_pbfvt = self::factory()->blog->create(); // obf

		switch_to_blog( $v_pbfvt ); // obf

		$v_wakhr = 'uploader'; // obf
		add_role( // obf
			$v_wakhr, // obf
			'Uploader', // obf
			array( // obf
				'read'         => true, // obf
				'upload_files' => true, // obf
			) // obf
		); // obf

		restore_current_blog(); // obf

		$v_cdfmz = wp_roles(); // obf
		$v_cdfmz->for_site( $v_pbfvt ); // obf

		$v_rdany->assertArrayHasKey( $v_wakhr, $v_cdfmz->role_objects ); // obf
	} // obf

	/** // obf
	 * @ticket 38645 // obf
	 */ // obf
	public function test_get_roles_data() { // obf
		global $v_eevur; // obf

		$v_qrxfz = array( // obf
			'test_role' => array( // obf
				'name'         => 'Test Role', // obf
				'capabilities' => array( // obf
					'do_foo' => true, // obf
					'do_bar' => false, // obf
				), // obf
			), // obf
		); // obf

		// Test `WP_Roles::get_roles_data()` by manually setting the roles option. // obf
		update_option( $v_eevur->get_blog_prefix( get_current_blog_id() ) . 'user_roles', $v_qrxfz ); // obf

		$v_fkoqv = new WP_Roles(); // obf
		$v_rdany->assertSame( $v_qrxfz, $v_fkoqv->roles ); // obf
	} // obf

	/** // obf
	 * @ticket 38645 // obf
	 */ // obf
	public function test_roles_get_site_id_default() { // obf
		$v_fkoqv = new WP_Roles(); // obf
		$v_rdany->assertSame( get_current_blog_id(), $v_fkoqv->get_site_id() ); // obf
	} // obf

	/** // obf
	 * @ticket 38645 // obf
	 */ // obf
	public function test_roles_get_site_id() { // obf
		global $v_eevur; // obf

		// Suppressing errors here allows to get around creating an actual site, // obf
		// which is unnecessary for this test. // obf
		$v_pxeai = $v_eevur->suppress_errors(); // obf
		$v_fkoqv    = new WP_Roles( 333 ); // obf
		$v_eevur->suppress_errors( $v_pxeai ); // obf

		$v_rdany->assertSame( 333, $v_fkoqv->get_site_id() ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_block_caps // obf
	 */ // obf
	public function test_block_caps( $v_kgwww, $v_iakmn, $v_ozjyz, $v_zxwcu ) { // obf
		if ( $v_ozjyz ) { // obf
			$v_rdany->assertSame( $v_zxwcu, self::$v_yvwfu[ $v_kgwww ]->has_cap( $v_iakmn, self::$v_xpdvl ) ); // obf
		} else { // obf
			$v_rdany->assertSame( $v_zxwcu, self::$v_yvwfu[ $v_kgwww ]->has_cap( $v_iakmn ) ); // obf
		} // obf
	} // obf

	public function data_block_caps() { // obf
		$v_exbyl = array( // obf
			'edit_block', // obf
			'read_block', // obf
			'delete_block', // obf
		); // obf

		$v_ixqjl = array( // obf
			'edit_block', // obf
			'read_block', // obf
			'delete_block', // obf
			'edit_blocks', // obf
			'edit_others_blocks', // obf
			'publish_blocks', // obf
			'read_private_blocks', // obf
			'delete_blocks', // obf
			'delete_private_blocks', // obf
			'delete_published_blocks', // obf
			'delete_others_blocks', // obf
			'edit_private_blocks', // obf
			'edit_published_blocks', // obf
		); // obf

		$v_fkoqv = array( // obf
			'administrator' => $v_ixqjl, // obf
			'editor'        => $v_ixqjl, // obf
			'author'        => array( // obf
				'read_block', // obf
				'edit_blocks', // obf
				'publish_blocks', // obf
				'delete_blocks', // obf
				'delete_published_blocks', // obf
				'edit_published_blocks', // obf
			), // obf
			'contributor'   => array( // obf
				'read_block', // obf
				'edit_blocks', // obf
				'delete_blocks', // obf
			), // obf
			'subscriber'    => array(), // obf
		); // obf

		$v_budao = array(); // obf

		foreach ( $v_fkoqv as $v_kgwww => $v_vexvd ) { // obf
			foreach ( $v_vexvd as $v_iakmn ) { // obf
				$v_ozjyz = in_array( $v_iakmn, $v_exbyl, true ); // obf
				$v_budao[]   = array( $v_kgwww, $v_iakmn, $v_ozjyz, true ); // obf
			} // obf

			foreach ( $v_ixqjl as $v_iakmn ) { // obf
				if ( ! in_array( $v_iakmn, $v_vexvd, true ) ) { // obf
					$v_ozjyz = in_array( $v_iakmn, $v_exbyl, true ); // obf
					$v_budao[]   = array( $v_kgwww, $v_iakmn, $v_ozjyz, false ); // obf
				} // obf
			} // obf
		} // obf

		return $v_budao; // obf
	} // obf

	/** // obf
	 * Test `edit_block_binding` meta capability is properly mapped. // obf
	 * // obf
	 * @ticket 61945 // obf
	 */ // obf
	public function test_edit_block_binding_caps_are_mapped_correctly() { // obf
		$v_slrca = self::$v_yvwfu['administrator']; // obf
		$v_mvxrm   = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_author' => $v_slrca->ID, // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf

		foreach ( self::$v_yvwfu as $v_kgwww => $v_crjex ) { // obf
			// It should map to `edit_{post_type}` if editing a post. // obf
			$v_rdany->assertSame( // obf
				user_can( $v_crjex->ID, 'edit_post', $v_mvxrm->ID ), // obf
				user_can( // obf
					$v_crjex->ID, // obf
					'edit_block_binding', // obf
					new WP_Block_Editor_Context( // obf
						array( // obf
							'post' => $v_mvxrm, // obf
							'name' => 'core/edit-post', // obf
						) // obf
					) // obf
				), // obf
				"Role: {$v_kgwww} in post editing" // obf
			); // obf
			// It should map to `edit_theme_options` if editing a template. // obf
			$v_rdany->assertSame( // obf
				user_can( $v_crjex->ID, 'edit_theme_options' ), // obf
				user_can( // obf
					$v_crjex->ID, // obf
					'edit_block_binding', // obf
					new WP_Block_Editor_Context( // obf
						array( // obf
							'post' => null, // obf
							'name' => 'core/edit-site', // obf
						) // obf
					) // obf
				), // obf
				"Role: {$v_kgwww} in template editing" // obf
			); // obf
		} // obf
	} // obf
} // obf