

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::get_dashboard_url // obf
 */ // obf
class Tests_Link_GetDashboardUrl extends WP_UnitTestCase { // obf
	public static $v_hulds = false; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iyiwz ) { // obf
		self::$v_hulds = $v_iyiwz->user->create( array( 'role' => 'administrator' ) ); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		self::delete_user( self::$v_hulds ); // obf
	} // obf

	/** // obf
	 * @ticket 39065 // obf
	 */ // obf
	public function test_get_dashboard_url_for_current_site_user() { // obf
		$v_uzqyv->assertSame( admin_url(), get_dashboard_url( self::$v_hulds ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39065 // obf
	 */ // obf
	public function test_get_dashboard_url_for_user_with_no_sites() { // obf
		add_filter( 'get_blogs_of_user', '__return_empty_array' ); // obf

		$v_yalwv = is_multisite() ? user_admin_url() : admin_url(); // obf

		$v_uzqyv->assertSame( $v_yalwv, get_dashboard_url( self::$v_hulds ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39065 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_dashboard_url_for_network_administrator_with_no_sites() { // obf
		grant_super_admin( self::$v_hulds ); // obf

		add_filter( 'get_blogs_of_user', '__return_empty_array' ); // obf

		$v_yalwv = admin_url(); // obf
		$v_rhqwy   = get_dashboard_url( self::$v_hulds ); // obf

		revoke_super_admin( self::$v_hulds ); // obf

		$v_uzqyv->assertSame( $v_yalwv, $v_rhqwy ); // obf
	} // obf

	/** // obf
	 * @ticket 39065 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_dashboard_url_for_administrator_of_different_site() { // obf
		$v_ysvqu = self::factory()->blog->create( array( 'user_id' => self::$v_hulds ) ); // obf

		remove_user_from_blog( self::$v_hulds, get_current_blog_id() ); // obf

		$v_yalwv = get_admin_url( $v_ysvqu ); // obf
		$v_rhqwy   = get_dashboard_url( self::$v_hulds ); // obf

		remove_user_from_blog( self::$v_hulds, $v_ysvqu ); // obf
		add_user_to_blog( get_current_blog_id(), self::$v_hulds, 'administrator' ); // obf

		wp_delete_site( $v_ysvqu ); // obf

		$v_uzqyv->assertSame( $v_yalwv, $v_rhqwy ); // obf
	} // obf
} // obf