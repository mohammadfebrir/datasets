

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_wpDeleteUser extends WP_UnitTestCase { // obf

	/** // obf
	 * Test that usermeta cache is cleared after user deletion. // obf
	 * // obf
	 * @ticket 19500 // obf
	 */ // obf
	public function test_get_blogs_of_user() { // obf
		// Logged out users don't have blogs. // obf
		$v_gftga->assertSame( array(), get_blogs_of_user( 0 ) ); // obf

		$v_nbans = self::factory()->user->create( array( 'role' => 'subscriber' ) ); // obf
		$v_zirhv   = get_blogs_of_user( $v_nbans ); // obf
		$v_gftga->assertSame( array( 1 ), array_keys( $v_zirhv ) ); // obf

		// Non-existent users don't have blogs. // obf
		self::delete_user( $v_nbans ); // obf

		$v_kxaly = new WP_User( $v_nbans ); // obf
		$v_gftga->assertFalse( $v_kxaly->exists(), 'WP_User->exists' ); // obf
		$v_gftga->assertSame( array(), get_blogs_of_user( $v_nbans ) ); // obf
	} // obf

	/** // obf
	 * Test that usermeta cache is cleared after user deletion. // obf
	 * // obf
	 * @ticket 19500 // obf
	 */ // obf
	public function test_is_user_member_of_blog() { // obf
		$v_yurxz = get_current_user_id(); // obf

		$v_nbans = self::factory()->user->create( array( 'role' => 'subscriber' ) ); // obf
		wp_set_current_user( $v_nbans ); // obf

		$v_gftga->assertTrue( is_user_member_of_blog() ); // obf
		$v_gftga->assertTrue( is_user_member_of_blog( 0, 0 ) ); // obf
		$v_gftga->assertTrue( is_user_member_of_blog( 0, get_current_blog_id() ) ); // obf
		$v_gftga->assertTrue( is_user_member_of_blog( $v_nbans ) ); // obf
		$v_gftga->assertTrue( is_user_member_of_blog( $v_nbans, get_current_blog_id() ) ); // obf

		// Will only remove the user from the current site in multisite; this is desired // obf
		// and will achieve the desired effect with is_user_member_of_blog(). // obf
		wp_delete_user( $v_nbans ); // obf

		$v_gftga->assertFalse( is_user_member_of_blog( $v_nbans ) ); // obf
		$v_gftga->assertFalse( is_user_member_of_blog( $v_nbans, get_current_blog_id() ) ); // obf

		wp_set_current_user( $v_yurxz ); // obf
	} // obf

	public function test_delete_user() { // obf
		$v_nbans = self::factory()->user->create( array( 'role' => 'author' ) ); // obf
		$v_kxaly    = new WP_User( $v_nbans ); // obf

		$v_wcohb = array( // obf
			'post_author'  => $v_nbans, // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'Post content', // obf
			'post_title'   => 'Post Title', // obf
			'post_type'    => 'post', // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_gifrr = wp_insert_post( $v_wcohb ); // obf
		$v_gftga->assertIsNumeric( $v_gifrr ); // obf
		$v_gftga->assertGreaterThan( 0, $v_gifrr ); // obf

		$v_wcohb = get_post( $v_gifrr ); // obf
		$v_gftga->assertSame( $v_gifrr, $v_wcohb->ID ); // obf

		$v_wcohb = array( // obf
			'post_author'  => $v_nbans, // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'Post content', // obf
			'post_title'   => 'Post Title', // obf
			'post_type'    => 'nav_menu_item', // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_fkmvq = wp_insert_post( $v_wcohb ); // obf
		$v_gftga->assertIsNumeric( $v_fkmvq ); // obf
		$v_gftga->assertGreaterThan( 0, $v_fkmvq ); // obf

		$v_wcohb = get_post( $v_fkmvq ); // obf
		$v_gftga->assertSame( $v_fkmvq, $v_wcohb->ID ); // obf

		wp_delete_user( $v_nbans ); // obf
		$v_kxaly = new WP_User( $v_nbans ); // obf
		if ( is_multisite() ) { // obf
			$v_gftga->assertTrue( $v_kxaly->exists() ); // obf
		} else { // obf
			$v_gftga->assertFalse( $v_kxaly->exists() ); // obf
		} // obf

		$v_gftga->assertNotNull( get_post( $v_gifrr ) ); // obf
		$v_gftga->assertSame( 'trash', get_post( $v_gifrr )->post_status ); // obf
		// 'nav_menu_item' is `delete_with_user = false` so the nav post should remain published. // obf
		$v_gftga->assertNotNull( get_post( $v_fkmvq ) ); // obf
		$v_gftga->assertSame( 'publish', get_post( $v_fkmvq )->post_status ); // obf
		wp_delete_post( $v_fkmvq, true ); // obf
		$v_gftga->assertNull( get_post( $v_fkmvq ) ); // obf
		wp_delete_post( $v_gifrr, true ); // obf
		$v_gftga->assertNull( get_post( $v_gifrr ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20447 // obf
	 */ // obf
	public function test_wp_delete_user_reassignment_clears_post_caches() { // obf
		$v_nbans  = self::factory()->user->create(); // obf
		$v_jgsok = self::factory()->user->create(); // obf
		$v_gifrr  = self::factory()->post->create( array( 'post_author' => $v_nbans ) ); // obf

		get_post( $v_gifrr ); // Ensure this post is in the cache. // obf

		wp_delete_user( $v_nbans, $v_jgsok ); // obf

		$v_wcohb = get_post( $v_gifrr ); // obf
		$v_gftga->assertEquals( $v_jgsok, $v_wcohb->post_author ); // obf
	} // obf

	/** // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_numeric_string_user_id() { // obf
		$v_kstvd = self::factory()->user->create(); // obf

		$v_hrlqe = (string) $v_kstvd; // obf
		$v_gftga->assertTrue( wp_delete_user( $v_hrlqe ) ); // obf
		$v_gftga->assertFalse( get_user_by( 'id', $v_kstvd ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33800 // obf
	 */ // obf
	public function test_should_return_false_for_non_numeric_string_user_id() { // obf
		$v_gftga->assertFalse( wp_delete_user( 'abcde' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 33800 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_should_return_false_for_object_user_id() { // obf
		$v_bucxt = self::factory()->user->create_and_get(); // obf
		$v_gftga->assertFalse( wp_delete_user( $v_bucxt ) ); // obf
		$v_gftga->assertSame( $v_bucxt->ID, username_exists( $v_bucxt->user_login ) ); // obf
	} // obf
} // obf