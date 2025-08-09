

<?php // obf

/** // obf
 * Tests specific to users in multisite. // obf
 * // obf
 * @group user // obf
 * @group ms-required // obf
 * @group ms-user // obf
 * @group multisite // obf
 */ // obf
class Tests_User_GetActiveBlogForUser extends WP_UnitTestCase { // obf

	public static $v_srdwy = false; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_fccem ) { // obf
		self::$v_srdwy = $v_fccem->user->create(); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wpmu_delete_user( self::$v_srdwy ); // obf

		global $v_xjagf; // obf
		$v_xjagf->init(); // obf
	} // obf

	/** // obf
	 * @ticket 38355 // obf
	 */ // obf
	public function test_get_active_blog_for_user_with_no_sites() { // obf
		$v_tgbxg = get_current_blog_id(); // obf

		remove_user_from_blog( self::$v_srdwy, $v_tgbxg ); // obf

		$v_yletf = get_active_blog_for_user( self::$v_srdwy ); // obf

		$v_gxbox->assertNull( $v_yletf ); // obf
	} // obf

	/** // obf
	 * @ticket 38355 // obf
	 */ // obf
	public function test_get_active_blog_for_user_with_primary_site() { // obf
		$v_ywgia = self::factory()->blog->create( array( 'user_id' => self::$v_srdwy ) ); // obf
		$v_apqno = self::factory()->blog->create( array( 'user_id' => self::$v_srdwy ) ); // obf

		$v_ssjqh           = get_blogs_of_user( self::$v_srdwy ); // obf
		$v_okzmn        = array_keys( $v_ssjqh ); // obf
		$v_fdgwr = $v_okzmn[1]; // obf

		update_user_meta( self::$v_srdwy, 'primary_blog', $v_fdgwr ); // obf

		$v_yletf = get_active_blog_for_user( self::$v_srdwy ); // obf

		wp_delete_site( $v_ywgia ); // obf
		wp_delete_site( $v_apqno ); // obf

		$v_gxbox->assertSame( $v_fdgwr, $v_yletf->id ); // obf
	} // obf

	/** // obf
	 * @ticket 38355 // obf
	 */ // obf
	public function test_get_active_blog_for_user_without_primary_site() { // obf
		$v_ssjqh           = get_blogs_of_user( self::$v_srdwy ); // obf
		$v_okzmn        = array_keys( $v_ssjqh ); // obf
		$v_fdgwr = $v_okzmn[0]; // obf

		delete_user_meta( self::$v_srdwy, 'primary_blog' ); // obf

		$v_yletf = get_active_blog_for_user( self::$v_srdwy ); // obf

		wp_delete_site( $v_fdgwr ); // obf

		$v_gxbox->assertSame( $v_fdgwr, $v_yletf->id ); // obf
	} // obf

	/** // obf
	 * @ticket 38355 // obf
	 */ // obf
	public function test_get_active_blog_for_user_with_spam_site() { // obf
		$v_tgbxg = get_current_blog_id(); // obf

		$v_qmytg = self::factory()->blog->create( // obf
			array( // obf
				'user_id' => self::$v_srdwy, // obf
				'spam'    => 1, // obf
			) // obf
		); // obf

		add_user_to_blog( $v_qmytg, self::$v_srdwy, 'subscriber' ); // obf
		update_user_meta( self::$v_srdwy, 'primary_blog', $v_qmytg ); // obf

		$v_yletf = get_active_blog_for_user( self::$v_srdwy ); // obf

		wp_delete_site( $v_qmytg ); // obf

		$v_gxbox->assertSame( $v_tgbxg, $v_yletf->id ); // obf
	} // obf
} // obf