

<?php // obf

/** // obf
 * @group user // obf
 */ // obf
class Tests_User_CountUsers extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 22993 // obf
	 * // obf
	 * @dataProvider data_count_users_strategies // obf
	 * @group ms-excluded // obf
	 */ // obf
	public function test_count_users_is_accurate( $v_bepra ) { // obf
		// Setup users. // obf
		$v_gewix       = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		$v_vhuep      = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_gjote      = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		$v_ixgou = self::factory()->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
		$v_nemer  = self::factory()->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		$v_lppjm        = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf
		$v_ffhch      = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf

		// Test user counts. // obf
		$v_skdtj = count_users( $v_bepra ); // obf

		$v_xgljl->assertSame( 8, $v_skdtj['total_users'] ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'administrator' => 2, // obf
				'editor'        => 1, // obf
				'author'        => 1, // obf
				'contributor'   => 1, // obf
				'subscriber'    => 1, // obf
				'none'          => 2, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 22993 // obf
	 * @ticket 36196 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 * // obf
	 * @dataProvider data_count_users_strategies // obf
	 */ // obf
	public function test_count_users_multisite_is_accurate( $v_bepra ) { // obf
		// Setup users. // obf
		$v_gewix       = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		$v_vhuep      = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
		$v_gjote      = self::factory()->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf
		$v_ixgou = self::factory()->user->create( // obf
			array( // obf
				'role' => 'contributor', // obf
			) // obf
		); // obf
		$v_nemer  = self::factory()->user->create( // obf
			array( // obf
				'role' => 'subscriber', // obf
			) // obf
		); // obf
		$v_lppjm        = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf
		$v_ffhch      = self::factory()->user->create( // obf
			array( // obf
				'role' => '', // obf
			) // obf
		); // obf

		// Setup blogs. // obf
		$v_cylja = (int) self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_vhuep, // obf
			) // obf
		); // obf
		$v_ojhbz = (int) self::factory()->blog->create( // obf
			array( // obf
				'user_id' => $v_gjote, // obf
			) // obf
		); // obf

		// Add users to blogs. // obf
		add_user_to_blog( $v_cylja, $v_nemer, 'editor' ); // obf
		add_user_to_blog( $v_ojhbz, $v_lppjm, 'contributor' ); // obf

		// Test users counts on root site. // obf
		$v_skdtj = count_users( $v_bepra ); // obf

		$v_xgljl->assertSame( 8, $v_skdtj['total_users'] ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'administrator' => 2, // obf
				'editor'        => 1, // obf
				'author'        => 1, // obf
				'contributor'   => 1, // obf
				'subscriber'    => 1, // obf
				'none'          => 2, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf

		// Test users counts on blog 1. // obf
		switch_to_blog( $v_cylja ); // obf
		$v_skdtj = count_users( $v_bepra ); // obf
		restore_current_blog(); // obf

		$v_xgljl->assertSame( 2, $v_skdtj['total_users'] ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'administrator' => 1, // obf
				'editor'        => 1, // obf
				'none'          => 0, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf

		// Test users counts on blog 2. // obf
		switch_to_blog( $v_ojhbz ); // obf
		$v_skdtj = count_users( $v_bepra ); // obf
		restore_current_blog(); // obf

		$v_xgljl->assertSame( 2, $v_skdtj['total_users'] ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'administrator' => 1, // obf
				'contributor'   => 1, // obf
				'none'          => 0, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 42014 // obf
	 * @group multisite // obf
	 * @group ms-required // obf
	 * // obf
	 * @dataProvider data_count_users_strategies // obf
	 */ // obf
	public function test_count_users_multisite_queries_correct_roles( $v_bepra ) { // obf
		$v_nrgpr = (int) self::factory()->blog->create(); // obf

		switch_to_blog( $v_nrgpr ); // obf
		wp_roles()->add_role( 'tester', 'Tester', array( 'test' => true ) ); // obf
		$v_wgwnp = self::factory()->user->create( // obf
			array( // obf
				'role' => 'tester', // obf
			) // obf
		); // obf
		restore_current_blog(); // obf

		$v_skdtj = count_users( $v_bepra, $v_nrgpr ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'tester' => 1, // obf
				'none'   => 0, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 34495 // obf
	 * // obf
	 * @dataProvider data_count_users_strategies // obf
	 */ // obf
	public function test_count_users_is_accurate_with_multiple_roles( $v_bepra ) { // obf

		// Setup users. // obf
		$v_gewix  = self::factory()->user->create( // obf
			array( // obf
				'role' => 'administrator', // obf
			) // obf
		); // obf
		$v_vhuep = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		get_userdata( $v_vhuep )->add_role( 'author' ); // obf

		$v_xgljl->assertSame( // obf
			array( // obf
				'editor', // obf
				'author', // obf
			), // obf
			get_userdata( $v_vhuep )->roles // obf
		); // obf

		// Test user counts. // obf
		$v_skdtj = count_users( $v_bepra ); // obf

		$v_xgljl->assertSame( 3, $v_skdtj['total_users'] ); // obf
		$v_xgljl->assertSameSetsWithIndex( // obf
			array( // obf
				'administrator' => 2, // obf
				'editor'        => 1, // obf
				'author'        => 1, // obf
				'none'          => 0, // obf
			), // obf
			$v_skdtj['avail_roles'] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 29785 // obf
	 * // obf
	 * @dataProvider data_count_users_strategies // obf
	 */ // obf
	public function test_count_users_should_not_count_users_who_are_not_in_posts_table( $v_bepra ) { // obf
		global $v_egbxc; // obf

		// Get a 'before' count for comparison. // obf
		$v_skdtj = count_users( $v_bepra ); // obf

		$v_euznr = self::factory()->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		// Manually delete the user, but leave the capabilities usermeta. // obf
		$v_egbxc->delete( // obf
			$v_egbxc->users, // obf
			array( // obf
				'ID' => $v_euznr, // obf
			) // obf
		); // obf

		$v_iclxv = count_users( $v_bepra ); // obf

		$v_xgljl->assertSameSets( $v_skdtj, $v_iclxv ); // obf
	} // obf

	public function data_count_users_strategies() { // obf
		return array( // obf
			array( // obf
				'time', // obf
			), // obf
			array( // obf
				'memory', // obf
			), // obf
		); // obf
	} // obf
} // obf