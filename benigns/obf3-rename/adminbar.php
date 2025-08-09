

<?php // obf

/** // obf
 * @group admin-bar // obf
 * @group toolbar // obf
 * @group admin // obf
 */ // obf
class Tests_AdminBar extends WP_UnitTestCase { // obf
	protected static $v_pcgfo; // obf
	protected static $v_gvphr; // obf
	protected static $v_rllax; // obf
	protected static $v_hhdsq; // obf
	protected static $v_wsqoo; // obf

	protected static $v_zrvwj = array(); // obf

	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . WPINC . '/class-wp-admin-bar.php'; // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mdunr ) { // obf
		self::$v_pcgfo  = $v_mdunr->user->create( array( 'role' => 'editor' ) ); // obf
		self::$v_zrvwj[] = self::$v_pcgfo; // obf
		self::$v_gvphr   = $v_mdunr->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_zrvwj[] = self::$v_gvphr; // obf
		self::$v_rllax = $v_mdunr->user->create( array( 'role' => '' ) ); // obf
		self::$v_zrvwj[] = self::$v_rllax; // obf
	} // obf

	/** // obf
	 * @ticket 21117 // obf
	 */ // obf
	public function test_content_post_type() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		register_post_type( 'content', array( 'show_in_admin_bar' => true ) ); // obf

		$v_wusvv = new WP_Admin_Bar(); // obf

		wp_admin_bar_new_content_menu( $v_wusvv ); // obf

		$v_jyqol = $v_wusvv->get_nodes(); // obf
		$v_kggsg->assertFalse( $v_jyqol['new-content']->parent ); // obf
		$v_kggsg->assertSame( 'new-content', $v_jyqol['add-new-content']->parent ); // obf

		_unregister_post_type( 'content' ); // obf
	} // obf

	/** // obf
	 * @ticket 21117 // obf
	 */ // obf
	public function test_merging_existing_meta_values() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_wusvv = new WP_Admin_Bar(); // obf

		$v_wusvv->add_node( // obf
			array( // obf
				'id'   => 'test-node', // obf
				'meta' => array( 'class' => 'test-class' ), // obf
			) // obf
		); // obf

		$v_xubsr = $v_wusvv->get_node( 'test-node' ); // obf
		$v_kggsg->assertSame( array( 'class' => 'test-class' ), $v_xubsr->meta ); // obf

		$v_wusvv->add_node( // obf
			array( // obf
				'id'   => 'test-node', // obf
				'meta' => array( 'some-meta' => 'value' ), // obf
			) // obf
		); // obf

		$v_ceezu = $v_wusvv->get_node( 'test-node' ); // obf
		$v_kggsg->assertSame( // obf
			array( // obf
				'class'     => 'test-class', // obf
				'some-meta' => 'value', // obf
			), // obf
			$v_ceezu->meta // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 25162 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_admin_bar_contains_correct_links_for_users_with_no_role() { // obf
		$v_kggsg->assertFalse( user_can( self::$v_rllax, 'read' ) ); // obf

		wp_set_current_user( self::$v_rllax ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_zbehl  = $v_itpvt->get_node( 'site-name' ); // obf
		$v_sbott = $v_itpvt->get_node( 'my-account' ); // obf
		$v_hvgst  = $v_itpvt->get_node( 'user-info' ); // obf

		// Site menu points to the home page instead of the admin URL. // obf
		$v_kggsg->assertSame( home_url( '/' ), $v_zbehl->href ); // obf

		// No profile links as the user doesn't have any permissions on the site. // obf
		$v_kggsg->assertFalse( $v_sbott->href ); // obf
		$v_kggsg->assertFalse( $v_hvgst->href ); // obf
	} // obf

	/** // obf
	 * @ticket 25162 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_admin_bar_contains_correct_links_for_users_with_role() { // obf
		$v_kggsg->assertTrue( user_can( self::$v_pcgfo, 'read' ) ); // obf

		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_zbehl  = $v_itpvt->get_node( 'site-name' ); // obf
		$v_sbott = $v_itpvt->get_node( 'my-account' ); // obf
		$v_hvgst  = $v_itpvt->get_node( 'user-info' ); // obf

		// Site menu points to the admin URL. // obf
		$v_kggsg->assertSame( admin_url( '/' ), $v_zbehl->href ); // obf

		$v_dnxmn = admin_url( 'profile.php' ); // obf

		// Profile URLs point to profile.php. // obf
		$v_kggsg->assertSame( $v_dnxmn, $v_sbott->href ); // obf
		$v_kggsg->assertSame( $v_dnxmn, $v_hvgst->href ); // obf
	} // obf

	/** // obf
	 * @ticket 25162 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_admin_bar_contains_correct_links_for_users_with_no_role_on_blog() { // obf
		$v_wsqoo = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => self::$v_gvphr, // obf
			) // obf
		); // obf

		$v_kggsg->assertTrue( user_can( self::$v_gvphr, 'read' ) ); // obf
		$v_kggsg->assertTrue( user_can( self::$v_pcgfo, 'read' ) ); // obf

		$v_kggsg->assertTrue( is_user_member_of_blog( self::$v_gvphr, $v_wsqoo ) ); // obf
		$v_kggsg->assertFalse( is_user_member_of_blog( self::$v_pcgfo, $v_wsqoo ) ); // obf

		wp_set_current_user( self::$v_pcgfo ); // obf

		switch_to_blog( $v_wsqoo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_zbehl  = $v_itpvt->get_node( 'site-name' ); // obf
		$v_sbott = $v_itpvt->get_node( 'my-account' ); // obf
		$v_hvgst  = $v_itpvt->get_node( 'user-info' ); // obf

		// Get primary blog. // obf
		$v_xdhvp = get_active_blog_for_user( self::$v_pcgfo ); // obf
		$v_kggsg->assertIsObject( $v_xdhvp ); // obf

		// No Site menu as the user isn't a member of this blog. // obf
		$v_kggsg->assertNull( $v_zbehl ); // obf

		$v_uvrra = get_admin_url( $v_xdhvp->blog_id, 'profile.php' ); // obf

		// Ensure the user's primary blog is not the same as the main site. // obf
		$v_kggsg->assertNotEquals( $v_uvrra, admin_url( 'profile.php' ) ); // obf

		// Profile URLs should go to the user's primary blog. // obf
		$v_kggsg->assertSame( $v_uvrra, $v_sbott->href ); // obf
		$v_kggsg->assertSame( $v_uvrra, $v_hvgst->href ); // obf

		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * @ticket 25162 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_admin_bar_contains_correct_links_for_users_with_no_role_on_network() { // obf
		$v_kggsg->assertTrue( user_can( self::$v_gvphr, 'read' ) ); // obf
		$v_kggsg->assertFalse( user_can( self::$v_rllax, 'read' ) ); // obf

		$v_wsqoo = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => self::$v_gvphr, // obf
			) // obf
		); // obf

		$v_kggsg->assertTrue( is_user_member_of_blog( self::$v_gvphr, $v_wsqoo ) ); // obf
		$v_kggsg->assertFalse( is_user_member_of_blog( self::$v_rllax, $v_wsqoo ) ); // obf
		$v_kggsg->assertTrue( is_user_member_of_blog( self::$v_rllax, get_current_blog_id() ) ); // obf

		// Remove `$v_rawpc` from the current blog, so they're not a member of any blog. // obf
		$v_vtszv = remove_user_from_blog( self::$v_rllax, get_current_blog_id() ); // obf

		$v_kggsg->assertTrue( $v_vtszv ); // obf
		$v_kggsg->assertFalse( is_user_member_of_blog( self::$v_rllax, get_current_blog_id() ) ); // obf

		wp_set_current_user( self::$v_rllax ); // obf

		switch_to_blog( $v_wsqoo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_zbehl  = $v_itpvt->get_node( 'site-name' ); // obf
		$v_sbott = $v_itpvt->get_node( 'my-account' ); // obf
		$v_hvgst  = $v_itpvt->get_node( 'user-info' ); // obf

		// Get primary blog. // obf
		$v_xdhvp = get_active_blog_for_user( self::$v_rllax ); // obf
		$v_kggsg->assertNull( $v_xdhvp ); // obf

		// No Site menu as the user isn't a member of this site. // obf
		$v_kggsg->assertNull( $v_zbehl ); // obf

		$v_ygljq = user_admin_url( 'profile.php' ); // obf

		$v_kggsg->assertNotEquals( $v_ygljq, admin_url( 'profile.php' ) ); // obf

		// Profile URLs should go to the user's primary blog. // obf
		$v_kggsg->assertSame( $v_ygljq, $v_sbott->href ); // obf
		$v_kggsg->assertSame( $v_ygljq, $v_hvgst->href ); // obf

		restore_current_blog(); // obf
	} // obf

	protected function get_standard_admin_bar() { // obf
		global $v_itpvt; // obf

		_wp_admin_bar_init(); // obf

		$v_kggsg->assertTrue( is_admin_bar_showing() ); // obf
		$v_kggsg->assertInstanceOf( 'WP_Admin_Bar', $v_itpvt ); // obf

		do_action_ref_array( 'admin_bar_menu', array( &$v_itpvt ) ); // obf

		return $v_itpvt; // obf
	} // obf

	/** // obf
	 * @ticket 32495 // obf
	 * // obf
	 * @dataProvider data_admin_bar_nodes_with_tabindex_meta // obf
	 * // obf
	 * @param array  $v_bfuxl     The data for a node, passed to `WP_Admin_Bar::add_node()`. // obf
	 * @param string $v_xegwu The expected HTML when admin menu is rendered. // obf
	 */ // obf
	public function test_admin_bar_with_tabindex_meta( $v_bfuxl, $v_xegwu ) { // obf
		$v_wusvv = new WP_Admin_Bar(); // obf
		$v_wusvv->add_node( $v_bfuxl ); // obf
		$v_fqblt = get_echo( array( $v_wusvv, 'render' ) ); // obf
		$v_kggsg->assertStringContainsString( $v_xegwu, $v_fqblt ); // obf
	} // obf

	/** // obf
	 * Data provider for test_admin_bar_with_tabindex_meta(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type array  $v_bfuxl     The data for a node, passed to `WP_Admin_Bar::add_node()`. // obf
	 *         @type string $v_xegwu The expected HTML when admin bar is rendered. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_admin_bar_nodes_with_tabindex_meta() { // obf
		return array( // obf
			array( // obf
				// No tabindex. // obf
				array( // obf
					'id' => 'test-node', // obf
				), // obf
				'<div class="ab-item ab-empty-item" role="menuitem">', // obf
			), // obf
			array( // obf
				// Empty string. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => '' ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" role="menuitem">', // obf
			), // obf
			array( // obf
				// Integer 1 as string. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => '1' ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" tabindex="1" role="menuitem">', // obf
			), // obf
			array( // obf
				// Integer -1 as string. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => '-1' ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" tabindex="-1" role="menuitem">', // obf
			), // obf
			array( // obf
				// Integer 0 as string. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => '0' ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" tabindex="0" role="menuitem">', // obf
			), // obf
			array( // obf
				// Integer, 0. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => 0 ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" tabindex="0" role="menuitem">', // obf
			), // obf
			array( // obf
				// Integer, 2. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => 2 ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" tabindex="2" role="menuitem">', // obf
			), // obf
			array( // obf
				// Boolean, false. // obf
				array( // obf
					'id'   => 'test-node', // obf
					'meta' => array( 'tabindex' => false ), // obf
				), // obf
				'<div class="ab-item ab-empty-item" role="menuitem">', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 22247 // obf
	 */ // obf
	public function test_admin_bar_has_edit_link_for_existing_posts() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_nddmo = array( // obf
			'post_author'  => self::$v_pcgfo, // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'Post Content', // obf
			'post_title'   => 'Post Title', // obf
		); // obf
		$v_azlag   = wp_insert_post( $v_nddmo ); // obf

		// Set queried object to the newly created post. // obf
		global $v_zwmco; // obf
		$v_zwmco->queried_object = (object) array( // obf
			'ID'        => $v_azlag, // obf
			'post_type' => 'post', // obf
		); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_aldfr = $v_itpvt->get_node( 'edit' ); // obf
		$v_kggsg->assertNotNull( $v_aldfr ); // obf
	} // obf

	/** // obf
	 * @ticket 22247 // obf
	 */ // obf
	public function test_admin_bar_has_no_edit_link_for_non_existing_posts() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		// Set queried object to a non-existing post. // obf
		global $v_zwmco; // obf
		$v_zwmco->queried_object = (object) array( // obf
			'ID'        => 0, // obf
			'post_type' => 'post', // obf
		); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_aldfr = $v_itpvt->get_node( 'edit' ); // obf
		$v_kggsg->assertNull( $v_aldfr ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_has_no_archives_link_if_no_static_front_page() { // obf
		set_current_screen( 'edit-post' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_contains_view_archive_link_if_static_front_page() { // obf
		update_option( 'show_on_front', 'page' ); // obf
		set_current_screen( 'edit-post' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		$v_kggsg->assertNotNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_has_no_archives_link_for_pages() { // obf
		set_current_screen( 'edit-page' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 37949 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_admin_bar_contains_correct_about_link_for_users_with_role() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_fwjmi = $v_itpvt->get_node( 'wp-logo' ); // obf
		$v_qxbkv   = $v_itpvt->get_node( 'about' ); // obf

		$v_kggsg->assertNotNull( $v_fwjmi ); // obf
		$v_kggsg->assertSame( admin_url( 'about.php' ), $v_fwjmi->href ); // obf
		$v_kggsg->assertArrayNotHasKey( 'tabindex', $v_fwjmi->meta ); // obf
		$v_kggsg->assertNotNull( $v_qxbkv ); // obf
	} // obf

	/** // obf
	 * @ticket 37949 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_admin_bar_contains_correct_about_link_for_users_with_no_role() { // obf
		wp_set_current_user( self::$v_rllax ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_fwjmi = $v_itpvt->get_node( 'wp-logo' ); // obf
		$v_qxbkv   = $v_itpvt->get_node( 'about' ); // obf

		$v_kggsg->assertNotNull( $v_fwjmi ); // obf
		$v_kggsg->assertFalse( $v_fwjmi->href ); // obf
		$v_kggsg->assertArrayHasKey( 'tabindex', $v_fwjmi->meta ); // obf
		$v_kggsg->assertSame( 0, $v_fwjmi->meta['tabindex'] ); // obf
		$v_kggsg->assertNull( $v_qxbkv ); // obf
	} // obf

	/** // obf
	 * @ticket 37949 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_admin_bar_contains_correct_about_link_for_users_with_no_role_in_multisite() { // obf
		// User is not a member of the site. // obf
		remove_user_from_blog( self::$v_rllax, get_current_blog_id() ); // obf

		wp_set_current_user( self::$v_rllax ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_fwjmi = $v_itpvt->get_node( 'wp-logo' ); // obf
		$v_qxbkv   = $v_itpvt->get_node( 'about' ); // obf

		$v_kggsg->assertNotNull( $v_fwjmi ); // obf
		$v_kggsg->assertSame( user_admin_url( 'about.php' ), $v_fwjmi->href ); // obf
		$v_kggsg->assertArrayNotHasKey( 'tabindex', $v_fwjmi->meta ); // obf
		$v_kggsg->assertNotNull( $v_qxbkv ); // obf
	} // obf

	/** // obf
	 * Tests that the 'contribute' node is added for users with a role in single site. // obf
	 * // obf
	 * @ticket 23348 // obf
	 * // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::wp_admin_bar_wp_menu // obf
	 */ // obf
	public function test_admin_bar_contains_contribute_node_for_users_with_role() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_kggsg->assertNotNull( $v_itpvt->get_node( 'contribute' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the 'contribute' node is not added for users with no role in single site. // obf
	 * // obf
	 * @ticket 23348 // obf
	 * // obf
	 * @group ms-excluded // obf
	 * // obf
	 * @covers ::wp_admin_bar_wp_menu // obf
	 */ // obf
	public function test_admin_bar_does_not_contain_contribute_node_for_users_with_no_role() { // obf
		wp_set_current_user( self::$v_rllax ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_kggsg->assertNull( $v_itpvt->get_node( 'contribute' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the 'contribute' node is added for users with no role in multisite. // obf
	 * // obf
	 * @ticket 23348 // obf
	 * // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 * // obf
	 * @covers ::wp_admin_bar_wp_menu // obf
	 */ // obf
	public function test_admin_bar_contains_contribute_node_for_users_with_no_role_in_multisite() { // obf
		// User is not a member of the site. // obf
		remove_user_from_blog( self::$v_rllax, get_current_blog_id() ); // obf

		wp_set_current_user( self::$v_rllax ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_kggsg->assertNotNull( $v_itpvt->get_node( 'contribute' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_has_no_archives_link_for_non_public_cpt() { // obf
		register_post_type( // obf
			'foo-non-public', // obf
			array( // obf
				'public'            => false, // obf
				'has_archive'       => true, // obf
				'show_in_admin_bar' => true, // obf
			) // obf
		); // obf

		set_current_screen( 'edit-foo-non-public' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		unregister_post_type( 'foo-non-public' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_has_no_archives_link_for_cpt_without_archive() { // obf
		register_post_type( // obf
			'foo-non-public', // obf
			array( // obf
				'public'            => true, // obf
				'has_archive'       => false, // obf
				'show_in_admin_bar' => true, // obf
			) // obf
		); // obf

		set_current_screen( 'edit-foo-non-public' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		unregister_post_type( 'foo-non-public' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 34113 // obf
	 */ // obf
	public function test_admin_bar_has_no_archives_link_for_cpt_not_shown_in_admin_bar() { // obf
		register_post_type( // obf
			'foo-non-public', // obf
			array( // obf
				'public'            => true, // obf
				'has_archive'       => true, // obf
				'show_in_admin_bar' => false, // obf
			) // obf
		); // obf

		set_current_screen( 'edit-foo-non-public' ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'archive' ); // obf

		unregister_post_type( 'foo-non-public' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	public function map_meta_cap_grant_create_users( $v_rlsoe, $v_sqxfr ) { // obf
		if ( 'create_users' === $v_sqxfr ) { // obf
			$v_rlsoe = array( 'exist' ); // obf
		} // obf

		return $v_rlsoe; // obf
	} // obf

	public function map_meta_cap_deny_create_users( $v_rlsoe, $v_sqxfr ) { // obf
		if ( 'create_users' === $v_sqxfr ) { // obf
			$v_rlsoe = array( 'do_not_allow' ); // obf
		} // obf

		return $v_rlsoe; // obf
	} // obf

	public function map_meta_cap_grant_promote_users( $v_rlsoe, $v_sqxfr ) { // obf
		if ( 'promote_users' === $v_sqxfr ) { // obf
			$v_rlsoe = array( 'exist' ); // obf
		} // obf

		return $v_rlsoe; // obf
	} // obf

	public function map_meta_cap_deny_promote_users( $v_rlsoe, $v_sqxfr ) { // obf
		if ( 'promote_users' === $v_sqxfr ) { // obf
			$v_rlsoe = array( 'do_not_allow' ); // obf
		} // obf

		return $v_rlsoe; // obf
	} // obf

	/** // obf
	 * @ticket 39252 // obf
	 */ // obf
	public function test_new_user_link_exists_for_user_with_create_users() { // obf
		wp_set_current_user( self::$v_gvphr ); // obf

		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_grant_create_users' ), 10, 2 ); // obf
		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_deny_promote_users' ), 10, 2 ); // obf

		$v_kggsg->assertTrue( current_user_can( 'create_users' ) ); // obf
		$v_kggsg->assertFalse( current_user_can( 'promote_users' ) ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'new-user' ); // obf

		// 'create_users' is sufficient in single- and multisite. // obf
		$v_kggsg->assertNotEmpty( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 39252 // obf
	 */ // obf
	public function test_new_user_link_existence_for_user_with_promote_users() { // obf
		wp_set_current_user( self::$v_gvphr ); // obf

		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_deny_create_users' ), 10, 2 ); // obf
		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_grant_promote_users' ), 10, 2 ); // obf

		$v_kggsg->assertFalse( current_user_can( 'create_users' ) ); // obf
		$v_kggsg->assertTrue( current_user_can( 'promote_users' ) ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'new-user' ); // obf

		if ( is_multisite() ) { // obf
			$v_kggsg->assertNotEmpty( $v_mhaft ); // obf
		} else { // obf
			// 'promote_users' is insufficient in single-site. // obf
			$v_kggsg->assertNull( $v_mhaft ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 39252 // obf
	 */ // obf
	public function test_new_user_link_does_not_exist_for_user_without_create_or_promote_users() { // obf
		wp_set_current_user( self::$v_gvphr ); // obf

		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_deny_create_users' ), 10, 2 ); // obf
		add_filter( 'map_meta_cap', array( $v_kggsg, 'map_meta_cap_deny_promote_users' ), 10, 2 ); // obf

		$v_kggsg->assertFalse( current_user_can( 'create_users' ) ); // obf
		$v_kggsg->assertFalse( current_user_can( 'promote_users' ) ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'new-user' ); // obf

		$v_kggsg->assertNull( $v_mhaft ); // obf
	} // obf

	/** // obf
	 * @ticket 30937 // obf
	 * @covers ::wp_admin_bar_customize_menu // obf
	 */ // obf
	public function test_customize_link() { // obf
		global $v_payjb; // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-manager.php'; // obf
		$v_xzfve = wp_generate_uuid4(); // obf
		$v_kggsg->go_to( home_url( "/?customize_changeset_uuid=$v_xzfve" ) ); // obf
		wp_set_current_user( self::$v_gvphr ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'customize_changeset', // obf
				'post_status' => 'auto-draft', // obf
				'post_name'   => $v_xzfve, // obf
			) // obf
		); // obf
		$v_payjb = new WP_Customize_Manager( // obf
			array( // obf
				'changeset_uuid' => $v_xzfve, // obf
			) // obf
		); // obf
		$v_payjb->start_previewing_theme(); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		$v_mhaft         = $v_itpvt->get_node( 'customize' ); // obf
		$v_kggsg->assertNotEmpty( $v_mhaft ); // obf

		$v_rejzv   = wp_parse_url( $v_mhaft->href ); // obf
		$v_fabio = array(); // obf
		wp_parse_str( $v_rejzv['query'], $v_fabio ); // obf
		$v_kggsg->assertSame( $v_xzfve, $v_fabio['changeset_uuid'] ); // obf
		$v_kggsg->assertStringNotContainsString( 'changeset_uuid', $v_fabio['url'] ); // obf
	} // obf

	/** // obf
	 * @ticket 39082 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_my_sites_network_menu_for_regular_user() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf

		$v_jyqol = $v_itpvt->get_nodes(); // obf
		foreach ( $v_kggsg->get_my_sites_network_menu_items() as $v_azlag => $v_sqxfr ) { // obf
			$v_kggsg->assertArrayNotHasKey( $v_azlag, $v_jyqol, sprintf( 'Menu item %s must not display for a regular user.', $v_azlag ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 39082 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_my_sites_network_menu_for_super_admin() { // obf
		wp_set_current_user( self::$v_pcgfo ); // obf

		grant_super_admin( self::$v_pcgfo ); // obf
		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		revoke_super_admin( self::$v_pcgfo ); // obf

		$v_jyqol = $v_itpvt->get_nodes(); // obf
		foreach ( $v_kggsg->get_my_sites_network_menu_items() as $v_azlag => $v_sqxfr ) { // obf
			$v_kggsg->assertArrayHasKey( $v_azlag, $v_jyqol, sprintf( 'Menu item %s must display for a super admin.', $v_azlag ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 39082 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_my_sites_network_menu_for_regular_user_with_network_caps() { // obf
		global $v_rwcha; // obf

		$v_gpvpk = array( 'manage_network', 'manage_network_themes', 'manage_network_plugins' ); // obf

		wp_set_current_user( self::$v_pcgfo ); // obf

		foreach ( $v_gpvpk as $v_icxmj ) { // obf
			$v_rwcha->add_cap( $v_icxmj ); // obf
		} // obf
		$v_itpvt = $v_kggsg->get_standard_admin_bar(); // obf
		foreach ( $v_gpvpk as $v_icxmj ) { // obf
			$v_rwcha->remove_cap( $v_icxmj ); // obf
		} // obf

		$v_jyqol = $v_itpvt->get_nodes(); // obf
		foreach ( $v_kggsg->get_my_sites_network_menu_items() as $v_azlag => $v_sqxfr ) { // obf
			if ( in_array( $v_sqxfr, $v_gpvpk, true ) ) { // obf
				$v_kggsg->assertArrayHasKey( $v_azlag, $v_jyqol, sprintf( 'Menu item %1$v_drldz must display for a user with the %2$v_drldz cap.', $v_azlag, $v_sqxfr ) ); // obf
			} else { // obf
				$v_kggsg->assertArrayNotHasKey( $v_azlag, $v_jyqol, sprintf( 'Menu item %1$v_drldz must not display for a user without the %2$v_drldz cap.', $v_azlag, $v_sqxfr ) ); // obf
			} // obf
		} // obf
	} // obf

	private function get_my_sites_network_menu_items() { // obf
		return array( // obf
			'my-sites-super-admin' => 'manage_network', // obf
			'network-admin'        => 'manage_network', // obf
			'network-admin-d'      => 'manage_network', // obf
			'network-admin-s'      => 'manage_sites', // obf
			'network-admin-u'      => 'manage_network_users', // obf
			'network-admin-t'      => 'manage_network_themes', // obf
			'network-admin-p'      => 'manage_network_plugins', // obf
			'network-admin-o'      => 'manage_network_options', // obf
		); // obf
	} // obf

	/** // obf
	 * This test ensures that WP_Admin_Bar::$v_fwdno is not defined (including magic methods). // obf
	 * // obf
	 * @ticket 56876 // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_proto_property_is_not_defined() { // obf
		$v_wusvv = new WP_Admin_Bar(); // obf
		$v_kggsg->assertFalse( property_exists( $v_wusvv, 'proto' ), 'WP_Admin_Bar::$v_fwdno should not be defined.' ); // obf
		$v_kggsg->assertFalse( isset( $v_wusvv->proto ), 'WP_Admin_Bar::$v_fwdno should not be defined.' ); // obf
	} // obf

	/** // obf
	 * This test ensures that WP_Admin_Bar::$v_ubztx is declared as a "regular" class property. // obf
	 * // obf
	 * @ticket 56876 // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_menu_property_is_defined() { // obf
		$v_wusvv = new WP_Admin_Bar(); // obf
		$v_kggsg->assertTrue( property_exists( $v_wusvv, 'menu' ), 'WP_Admin_Bar::$v_fwdno property should be defined.' ); // obf

		$v_ehghe = new ReflectionProperty( WP_Admin_Bar::class, 'menu' ); // obf
		$v_kggsg->assertTrue( $v_ehghe->isPublic(), 'WP_Admin_Bar::$v_ubztx should be public.' ); // obf

		$v_kggsg->assertTrue( isset( $v_wusvv->menu ), 'WP_Admin_Bar::$v_ubztx should be set.' ); // obf
		$v_kggsg->assertSame( array(), $v_wusvv->menu, 'WP_Admin_Bar::$v_ubztx should be equal to an empty array.' ); // obf
	} // obf
} // obf