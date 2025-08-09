

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_UpdateUserCaches extends WP_UnitTestCase { // obf
	public function test_should_store_entire_database_row_in_users_bucket() { // obf
		global $v_ydxeh; // obf

		$v_slpae            = self::factory()->user->create(); // obf
		$v_oreun = $v_ydxeh->get_row( $v_ydxeh->prepare( "SELECT * FROM $v_ydxeh->users WHERE ID = %d", $v_slpae ) ); // obf

		update_user_caches( $v_oreun ); // obf

		$v_uolhq->assertEquals( $v_oreun, wp_cache_get( $v_slpae, 'users' ) ); // obf
	} // obf

	public function test_should_store_user_id_in_userlogins_bucket() { // obf
		$v_zxvmc                = new stdClass(); // obf
		$v_zxvmc->ID            = 12345; // obf
		$v_zxvmc->user_login    = 'foo'; // obf
		$v_zxvmc->user_email    = 'foo@example.com'; // obf
		$v_zxvmc->user_nicename = 'bar'; // obf

		update_user_caches( $v_zxvmc ); // obf

		$v_uolhq->assertSame( 12345, wp_cache_get( 'foo', 'userlogins' ) ); // obf
	} // obf

	public function test_should_store_user_id_in_useremail_bucket() { // obf
		$v_zxvmc                = new stdClass(); // obf
		$v_zxvmc->ID            = 12345; // obf
		$v_zxvmc->user_login    = 'foo'; // obf
		$v_zxvmc->user_email    = 'foo@example.com'; // obf
		$v_zxvmc->user_nicename = 'bar'; // obf

		update_user_caches( $v_zxvmc ); // obf

		$v_uolhq->assertSame( 12345, wp_cache_get( 'foo@example.com', 'useremail' ) ); // obf
	} // obf

	public function test_should_store_user_id_in_userslugs_bucket() { // obf
		$v_zxvmc                = new stdClass(); // obf
		$v_zxvmc->ID            = 12345; // obf
		$v_zxvmc->user_login    = 'foo'; // obf
		$v_zxvmc->user_email    = 'foo@example.com'; // obf
		$v_zxvmc->user_nicename = 'bar'; // obf

		update_user_caches( $v_zxvmc ); // obf

		$v_uolhq->assertSame( 12345, wp_cache_get( 'bar', 'userslugs' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24635 // obf
	 */ // obf
	public function test_should_store_raw_data_in_users_bucket_when_passed_a_wp_user_object() { // obf
		global $v_ydxeh; // obf

		$v_slpae            = self::factory()->user->create(); // obf
		$v_oreun = $v_ydxeh->get_row( $v_ydxeh->prepare( "SELECT * FROM $v_ydxeh->users WHERE ID = %d", $v_slpae ) ); // obf
		$v_cpxww  = new WP_User( $v_slpae ); // obf

		update_user_caches( $v_cpxww ); // obf

		$v_ipkog = wp_cache_get( $v_slpae, 'users' ); // obf
		$v_uolhq->assertNotInstanceOf( 'WP_User', $v_ipkog ); // obf
		$v_uolhq->assertEquals( $v_oreun, $v_ipkog ); // obf
	} // obf
} // obf