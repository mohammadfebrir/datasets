

<?php // obf

/** // obf
 * @group user // obf
 * @group capabilities // obf
 * @covers ::map_meta_cap // obf
 */ // obf
class Tests_User_MapMetaCap extends WP_UnitTestCase { // obf

	protected static $v_bkxgn    = 'mapmetacap'; // obf
	protected static $v_zoqcd = null; // obf
	protected static $v_ojrel      = null; // obf
	protected static $v_pesse    = null; // obf
	protected static $v_qfwla      = null; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_sqnhw ) { // obf
		self::$v_ojrel   = $v_sqnhw->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_pesse = $v_sqnhw->user->create( array( 'role' => 'administrator' ) ); // obf

		if ( isset( $v_koaez['super_admins'] ) ) { // obf
			self::$v_zoqcd = $v_koaez['super_admins']; // obf
		} // obf
		$v_ivlrr                    = new WP_User( self::$v_ojrel ); // obf
		$v_koaez['super_admins'] = array( $v_ivlrr->user_login ); // obf

		register_post_type( self::$v_bkxgn ); // obf

		self::$v_qfwla = $v_sqnhw->post->create( // obf
			array( // obf
				'post_type'   => self::$v_bkxgn, // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_pesse, // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		$v_koaez['super_admins'] = self::$v_zoqcd; // obf
		unset( $v_koaez['wp_post_types'][ self::$v_bkxgn ] ); // obf
	} // obf

	/** // obf
	 * @ticket 13905 // obf
	 */ // obf
	public function test_capability_type_post_with_invalid_id() { // obf
		$v_wjfsr->assertSame( // obf
			array( 'do_not_allow' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla + 1 ) // obf
		); // obf
	} // obf

	public function test_capability_type_post_with_no_extra_caps() { // obf

		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
			) // obf
		); // obf
		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertTrue( $v_smjth->map_meta_cap ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_others_posts', 'edit_private_posts' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_others_posts', 'edit_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	public function test_custom_capability_type_with_map_meta_cap() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'book', // obf
				'map_meta_cap'    => true, // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_others_books', 'edit_private_books' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_others_books', 'edit_private_books' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_private_books' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_private_books' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_others_books', 'delete_private_books' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_others_books', 'delete_private_books' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	public function test_capability_type_post_with_one_renamed_cap() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'capabilities'    => array( 'edit_posts' => 'edit_books' ), // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertFalse( $v_smjth->map_meta_cap ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_post' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_post' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_post' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_post' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_post' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_post' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	public function test_capability_type_post_map_meta_cap_true_with_renamed_cap() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'map_meta_cap'    => true, // obf
				'capabilities'    => array( // obf
					'edit_post'         => 'edit_book', // maps back to itself. // obf
					'edit_others_posts' => 'edit_others_books', // obf
				), // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertTrue( $v_smjth->map_meta_cap ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_others_books', 'edit_private_posts' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_others_books', 'edit_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	public function test_capability_type_post_with_all_meta_caps_renamed() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'capabilities'    => array( // obf
					'edit_post'   => 'edit_book', // obf
					'read_post'   => 'read_book', // obf
					'delete_post' => 'delete_book', // obf
				), // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertFalse( $v_smjth->map_meta_cap ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_book' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_book' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_book' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_book' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_book' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_book' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	public function test_capability_type_post_with_all_meta_caps_renamed_mapped() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'map_meta_cap'    => true, // obf
				'capabilities'    => array( // obf
					'edit_post'   => 'edit_book', // obf
					'read_post'   => 'read_book', // obf
					'delete_post' => 'delete_book', // obf
				), // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertTrue( $v_smjth->map_meta_cap ); // obf

		$v_wjfsr->assertSame( // obf
			array( 'edit_others_posts', 'edit_private_posts' ), // obf
			map_meta_cap( 'edit_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'edit_others_posts', 'edit_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->edit_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( 'read_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'read_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->read_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf

		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( 'delete_post', self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
		$v_wjfsr->assertSame( // obf
			array( 'delete_others_posts', 'delete_private_posts' ), // obf
			map_meta_cap( $v_smjth->cap->delete_post, self::$v_ojrel, self::$v_qfwla ) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30991 // obf
	 */ // obf
	public function test_delete_posts_cap_without_map_meta_cap() { // obf
		register_post_type( // obf
			self::$v_bkxgn, // obf
			array( // obf
				'capability_type' => 'post', // obf
				'map_meta_cap'    => false, // obf
			) // obf
		); // obf

		$v_smjth = get_post_type_object( self::$v_bkxgn ); // obf

		$v_wjfsr->assertFalse( $v_smjth->map_meta_cap ); // obf
		$v_wjfsr->assertSame( 'delete_posts', $v_smjth->cap->delete_posts ); // obf
	} // obf

	public function test_unfiltered_html_cap() { // obf
		if ( defined( 'DISALLOW_UNFILTERED_HTML' ) ) { // obf
			$v_wjfsr->assertFalse( DISALLOW_UNFILTERED_HTML ); // obf
		} // obf

		if ( is_multisite() ) { // obf
			$v_wjfsr->assertSame( array( 'do_not_allow' ), map_meta_cap( 'unfiltered_html', 0 ) ); // obf
			$v_wjfsr->assertSame( array( 'unfiltered_html' ), map_meta_cap( 'unfiltered_html', self::$v_ojrel ) ); // obf
		} else { // obf
			$v_wjfsr->assertSame( array( 'unfiltered_html' ), map_meta_cap( 'unfiltered_html', self::$v_ojrel ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 20488 // obf
	 */ // obf
	public function test_file_edit_caps_not_reliant_on_unfiltered_html_constant() { // obf
		$v_wjfsr->assertFalse( defined( 'DISALLOW_FILE_MODS' ) ); // obf
		$v_wjfsr->assertFalse( defined( 'DISALLOW_FILE_EDIT' ) ); // obf

		if ( ! defined( 'DISALLOW_UNFILTERED_HTML' ) ) { // obf
			define( 'DISALLOW_UNFILTERED_HTML', true ); // obf
		} // obf

		$v_wjfsr->assertTrue( DISALLOW_UNFILTERED_HTML ); // obf
		$v_wjfsr->assertSame( array( 'update_core' ), map_meta_cap( 'update_core', self::$v_ojrel ) ); // obf
		$v_wjfsr->assertSame( array( 'edit_plugins' ), map_meta_cap( 'edit_plugins', self::$v_ojrel ) ); // obf
	} // obf

	/** // obf
	 * Test a post without an author. // obf
	 * // obf
	 * @ticket 27020 // obf
	 */ // obf
	public function test_authorless_posts_capabilities() { // obf
		$v_qfwla = self::factory()->post->create( // obf
			array( // obf
				'post_author' => 0, // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_folqd  = self::factory()->user->create( array( 'role' => 'editor' ) ); // obf

		$v_wjfsr->assertSame( array( 'edit_others_posts', 'edit_published_posts' ), map_meta_cap( 'edit_post', $v_folqd, $v_qfwla ) ); // obf
		$v_wjfsr->assertSame( array( 'delete_others_posts', 'delete_published_posts' ), map_meta_cap( 'delete_post', $v_folqd, $v_qfwla ) ); // obf
	} // obf

	/** // obf
	 * Test deleting front page. // obf
	 * // obf
	 * @ticket 37580 // obf
	 */ // obf
	public function test_only_users_who_can_manage_options_can_delete_page_on_front() { // obf
		$v_qfwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		update_option( 'page_on_front', $v_qfwla ); // obf
		$v_iiost = map_meta_cap( 'delete_page', self::$v_ojrel, $v_qfwla ); // obf
		delete_option( 'page_on_front' ); // obf

		$v_wjfsr->assertSame( array( 'manage_options' ), $v_iiost ); // obf
	} // obf

	/** // obf
	 * Test deleting posts page. // obf
	 * // obf
	 * @ticket 37580 // obf
	 */ // obf
	public function test_only_users_who_can_manage_options_can_delete_page_for_posts() { // obf
		$v_qfwla = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		update_option( 'page_for_posts', $v_qfwla ); // obf
		$v_iiost = map_meta_cap( 'delete_page', self::$v_ojrel, $v_qfwla ); // obf
		delete_option( 'page_for_posts' ); // obf

		$v_wjfsr->assertSame( array( 'manage_options' ), $v_iiost ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_meta_caps_throw_doing_it_wrong_without_required_argument_provided // obf
	 * @ticket 44591 // obf
	 * // obf
	 * @param string $v_vrpvn The meta capability requiring an argument. // obf
	 */ // obf
	public function test_meta_caps_throw_doing_it_wrong_without_required_argument_provided( $v_vrpvn ) { // obf
		$v_mhyds = self::$v_ojrel; // obf
		$v_wjfsr->setExpectedIncorrectUsage( 'map_meta_cap' ); // obf
		$v_wjfsr->assertContains( 'do_not_allow', map_meta_cap( $v_vrpvn, $v_mhyds ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type string $v_vrpvn The meta capability requiring an argument. // obf
	 * } // obf
	 */ // obf
	public function data_meta_caps_throw_doing_it_wrong_without_required_argument_provided() { // obf
		return array( // obf
			array( 'delete_post' ), // obf
			array( 'delete_page' ), // obf
			array( 'edit_post' ), // obf
			array( 'edit_page' ), // obf
			array( 'read_post' ), // obf
			array( 'read_page' ), // obf
			array( 'publish_post' ), // obf
			array( 'edit_post_meta' ), // obf
			array( 'delete_post_meta' ), // obf
			array( 'add_post_meta' ), // obf
			array( 'edit_comment_meta' ), // obf
			array( 'delete_comment_meta' ), // obf
			array( 'add_comment_meta' ), // obf
			array( 'edit_term_meta' ), // obf
			array( 'delete_term_meta' ), // obf
			array( 'add_term_meta' ), // obf
			array( 'edit_user_meta' ), // obf
			array( 'delete_user_meta' ), // obf
			array( 'add_user_meta' ), // obf
			array( 'edit_comment' ), // obf
			array( 'edit_term' ), // obf
			array( 'delete_term' ), // obf
			array( 'assign_term' ), // obf
		); // obf
	} // obf
} // obf