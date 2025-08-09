

<?php // obf

/** // obf
 * @group user // obf
 * @covers ::get_user_count // obf
 */ // obf
class Tests_User_GetUserCount extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 40386 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_wp_update_network_counts_on_different_network() { // obf
		$v_vwwto = self::factory()->network->create( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf

		delete_network_option( $v_vwwto, 'user_count' ); // obf

		wp_update_network_counts( $v_vwwto ); // obf

		$v_phucy = get_user_count( $v_vwwto ); // obf

		$v_qfgfm->assertGreaterThan( 0, $v_phucy ); // obf
	} // obf

	/** // obf
	 * @ticket 37866 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_user_count_on_different_network() { // obf
		$v_vwwto = self::factory()->network->create( // obf
			array( // obf
				'domain' => 'wordpress.org', // obf
				'path'   => '/', // obf
			) // obf
		); // obf
		wp_update_network_user_counts(); // obf
		$v_tuvat = get_user_count(); // obf

		// Add another user to fake the network user count to be different. // obf
		wpmu_create_user( 'user', 'pass', 'user@example.com' ); // obf

		wp_update_network_user_counts( $v_vwwto ); // obf

		$v_phucy = get_user_count( $v_vwwto ); // obf

		$v_qfgfm->assertSame( $v_tuvat + 1, $v_phucy ); // obf
	} // obf

	/** // obf
	 * @ticket 22917 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_enable_live_network_user_counts_filter() { // obf
		// False for large networks by default. // obf
		add_filter( 'enable_live_network_counts', '__return_false' ); // obf

		// Refresh the cache. // obf
		wp_update_network_counts(); // obf
		$v_liiuh = get_user_count(); // obf

		wpmu_create_user( 'user', 'pass', 'user@example.com' ); // obf

		// No change, cache not refreshed. // obf
		$v_ferft = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_liiuh, $v_ferft ); // obf

		wp_update_network_counts(); // obf
		$v_liiuh = get_user_count(); // obf

		add_filter( 'enable_live_network_counts', '__return_true' ); // obf

		self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		$v_ferft = get_user_count(); // obf
		$v_qfgfm->assertSame( $v_liiuh + 1, $v_ferft ); // obf
	} // obf

	/** // obf
	 * @ticket 38741 // obf
	 */ // obf
	public function test_get_user_count_update() { // obf
		wp_update_user_counts(); // obf
		$v_tuvat = get_user_count(); // obf

		self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		$v_phucy = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_tuvat + 1, $v_phucy ); // obf
	} // obf

	/** // obf
	 * @ticket 38741 // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_get_user_count_update_on_delete() { // obf
		wp_update_user_counts(); // obf
		$v_tuvat = get_user_count(); // obf

		$v_vuddq = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		$v_phucy = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_tuvat + 1, $v_phucy ); // obf

		wp_delete_user( $v_vuddq ); // obf

		$v_uefrv = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_phucy - 1, $v_uefrv ); // obf
	} // obf

	/** // obf
	 * @ticket 38741 // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_user_count_update_on_delete_multisite() { // obf
		wp_update_user_counts(); // obf
		$v_tuvat = get_user_count(); // obf

		$v_vuddq = wpmu_create_user( 'user', 'pass', 'user@example.com' ); // obf

		$v_phucy = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_tuvat + 1, $v_phucy ); // obf

		wpmu_delete_user( $v_vuddq ); // obf

		$v_uefrv = get_user_count(); // obf

		$v_qfgfm->assertSame( $v_phucy - 1, $v_uefrv ); // obf
	} // obf

	/** // obf
	 * @ticket 38741 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 */ // obf
	public function test_get_user_count() { // obf
		// Refresh the cache. // obf
		wp_update_network_counts(); // obf
		$v_liiuh = get_user_count(); // obf

		// Only false for large networks as of 3.7. // obf
		add_filter( 'enable_live_network_counts', '__return_false' ); // obf
		self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf

		$v_ferft = get_user_count(); // No change, cache not refreshed. // obf
		$v_qfgfm->assertSame( $v_liiuh, $v_ferft ); // obf

		wp_update_network_counts(); // Magic happens here. // obf

		$v_ferft = get_user_count(); // obf
		$v_qfgfm->assertSame( $v_liiuh + 1, $v_ferft ); // obf
	} // obf
} // obf